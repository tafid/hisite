<?php

namespace app\controllers;

use app\helpers\ResourcesHelper;
use app\models\hosting\Calculation;
use app\models\hosting\Tariff;
use hipanel\modules\stock\models\Part;
use hiqdev\hiart\Collection;
use hiqdev\hiart\ErrorResponseException;
use Yii;
use yii\base\Exception;
use yii\helpers\Html;
use yii\web\Controller;
use yii\web\UnprocessableEntityHttpException;

class HostingController extends Controller
{

    /**
     * @param $type (svds|ovds)
     * @return mixed
     */
    private function packages($type)
    {
        $part_ids = [];
        $parts = [];

        $cacheKeys = [
            Yii::$app->params['seller'],
            Yii::$app->user->id,
            $type,
        ];

        /** @var \app\models\hosting\Tariff[] $tariffs */
        $tariffs = Yii::$app->getCache()->getTimeCached(3600, $cacheKeys, function ($seller, $client_id, $type) {
            return Tariff::find(['scenario' => 'get-available-info'])
                ->joinWith('resources')
                ->where([
                    'type' => $type,
                    'seller' => $seller
                ])->all();
        });


        foreach ($tariffs as $tariff) {
//            TODO: выяснить что это. Зачем оно надо, если у голых тарифов нет партов?
//            foreach ($tariff->resources as $resource) {
//                /** @var Resource $resource */
//                if ($resource->object_id) {
//                    $part_ids[] = $resource->object_id;
//                }
//            }
            $calculations[] = $tariff->getCalculationModel();
        }
        if (!empty($part_ids)) {
            $parts = Part::find()->where(['id' => $parts])->all();
        }

        foreach ($calculations as $calculation) {
            $data[$calculation->getPrimaryKey()] = $calculation->getAttributes();
        }

        try {
            $prices = Calculation::perform('CalcValue', $data, true);
        } catch (ErrorResponseException $e) {
            $prices = $e->errorInfo['response'];
        } catch (\Exception $e) {
            throw new UnprocessableEntityHttpException('Failed to calculate cart value', 0, $e);
        }

        $j = 0.01;

        foreach ($tariffs as $key => $v) {
            try {
                $tariffs[$key]->resources = ResourcesHelper::server($v['resources'], $parts);
                $tariffs[$key]->price = $prices[$key]['value']['usd']['price'];
                $tariffs[$key]->value = $prices[$key]['value']['usd']['value'];
            } catch (Exception $e) {
                unset($tariffs[$key]);
            }
            $t = 0.00;
            $existPrice = false;
            while ($t <= $j) {
                if ($vs[($tariffs[$key]->value + $t) * 100]) {
                    $existPrice = true;
                }
                $t += 0.01;
            }
            if (!$tariffs[$key]->value || $existPrice) {
                $j += 0.01;
            }
            $vs[($tariffs[$key]->value + $j) * 100] = $key;
        }
        ksort($vs);

        foreach ($vs as $id) {
            $result["0$id"] = $tariffs[$id];
        }

        return $result;
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
            'cpu' => [
                'label' => Yii::t('app', 'CPU'),
                'buildValue' => function ($resource) {
                    return $resource['cpu']['partno'];
                }
            ],
            'ram' => [
                'label' => Yii::t('app', 'RAM'),
                'tooltip' => $type == 'svds' ? Yii::t('app', 'Additional $4/1 GB') : Yii::t('app', 'Additional $4/1 GB')
            ],
            'hd' => [
                'label' => $type == 'svds' ? Yii::t('app', 'SSD') : Yii::t('app', 'HDD+SSD cache'),
            ],
            'dedicated_ip' => [
                'label' => Yii::t('app', 'Dedicated IP'),
            ],
            'support' => [
                'label' => Html::a(Yii::t('app', 'Support 24/7'), '#'),
            ],
            'traffic' => [
                'label' => Yii::t('app', 'Traffic'),
            ],
            'port' => [
                'label' => Yii::t('app', 'Connection Port'),
            ],
            'control_panel' => [
                'label' => Html::a(Yii::t('app', 'Control panel'), '#'),
            ],
            'purpose' => [
                'label' => Yii::t('app', 'Purpose'),
            ],
        ];
    }
}
