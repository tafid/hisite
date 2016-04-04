<?php

namespace app\controllers;

use app\helpers\ResourcesHelper;
use hipanel\modules\finance\models\Calculation;
use hipanel\modules\finance\models\Tariff;
use hipanel\modules\stock\models\Part;
use Yii;
use yii\base\Exception;
use yii\helpers\Html;
use yii\web\Controller;

class HostingController extends Controller
{
    static public function cjoin($array, $delimiter = ',')
    {
        if (!is_array($array)) return $array;
        $res = array(); /// TODO redo without created array - just concatenate string for efficiency
        foreach ($array as $a) {
            $b = trim($a);
            if ($b) array_push($res, $b);
        };
        return join($delimiter, $res);
    }


    /**
     * @param $type (svds|ovds)
     * @return mixed
     */
    private function packages($type)
    {
        $parts = [];
        $_pkgs = Tariff::find(['scenario' => 'get-available-info'])
            ->joinWith('resources')
            ->andWhere(['type' => $type])
            ->andWhere(['seller' => Yii::$app->params['seller']])
            ->all();
        foreach ($_pkgs as $key => $v) {
            foreach ($v['resources'] as $value) {
                if ($value['object_id']) $parts[] = $value['object_id'];
                $pkg[$key] = array(
                    'object' => 'server',
                    'tariff_id' => $key,
                    'tariff' => $v['name'],
                );
                if (!Yii::$app->user->isGuest) $pkg[$key]['seller'] = Yii::$app->params['seller'];
            }
        }
        $parts = Part::find()->where(['ids' => self::cjoin($parts)])->all();
        $prices = Calculation::perform('CalcValue', $pkg, true);
        $j = 0.01;
        foreach ($_pkgs as $key => $v) {
            try {
                $_pkgs[$key]->resources = ResourcesHelper::server($v['resources'], $parts);
                $_pkgs[$key]->price = $prices[$key]['value']['usd']['price'];
                $_pkgs[$key]->value = $prices[$key]['value']['usd']['value'];
            } catch (Exception $e) {
                unset($_pkgs[$key]);
            }
            $t = 0.00;
            $existPrice = false;
            while ($t <= $j) {
                if ($vs[($_pkgs[$key]->value + $t) * 100]) $existPrice = true;
                $t += 0.01;
            }
            if (!$_pkgs[$key]->value || $existPrice) $j += 0.01;
            $vs[($_pkgs[$key]->value + $j) * 100] = $key;
        }
        ksort($vs);
        foreach ($vs as $id)
            $packages["0$id"] = $_pkgs[$id];

        return $packages;
    }

    public function actionXenSsd()
    {
        return $this->render('xen_ssd', [
            'packages' => $this->packages('svds'),
            'tariffTypes' => Yii::$app->params['vdsproduct'],
            'testVDSPurchased' => ['id' => 1]
        ]);
    }

    public function actionOpenVz()
    {
        return $this->render('xen_ssd', [
            'packages' => $this->packages('ovds'),
            'tariffTypes' => Yii::$app->params['vdsproduct'],
            'testVDSPurchased' => ['id' => 1]
        ]);
    }

    public function actionTariffsDetails()
    {
        return $this->render('tariffs_details');
    }

    public function actionAdvantages()
    {
        return $this->render('advantages');
    }

    public function actionWhatIsVds()
    {
        return $this->render('what_is_vds');
    }

    /**
     * @param $type (svds|ovds)
     * @return array
     */
    public function priceAttributeData($type)
    {
        return [
            'cpu' =>[
                'label' => Yii::t('app', 'CPU'),
                'buildValue' => function ($resource) {
                    return $resource['cpu']['partno'];
                }
            ],
            'ram' =>[
                'label' => Yii::t('app', 'RAM'),
                'tooltip' => $type == 'svds' ? Yii::t('app', 'Additional $4/1 GB') : Yii::t('app', 'Additional $4/1 GB')
            ],
            'hd' =>[
                'label' => $type == 'svds' ? Yii::t('app', 'SSD') : Yii::t('app', 'HDD+SSD cache'),
            ],
            'dedicated_ip' =>[
                'label' => Yii::t('app', 'Dedicated IP'),
            ],
            'support' =>[
                'label' => Html::a(Yii::t('app', 'Support 24/7'), '#'),
            ],
            'traffic' =>[
                'label' => Yii::t('app', 'Traffic'),
            ],
            'port' =>[
                'label' => Yii::t('app', 'Connection Port'),
            ],
            'control_panel' =>[
                'label' => Html::a(Yii::t('app', 'Control panel'), '#'),
            ],
            'purpose' =>[
                'label' => Yii::t('app', 'Purpose'),
            ],
        ];
    }
}