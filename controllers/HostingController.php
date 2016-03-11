<?php

namespace app\controllers;

use hipanel\modules\finance\models\Tariff;
use hipanel\modules\stock\models\Part;
use Yii;
use yii\web\Controller;

class HostingController extends Controller
{
    public static function cjoin($array, $delimiter)
    {
        if (!is_array($array)) return $array;
        $res = array(); /// TODO redo without created array - just concatenate string for efficiency
        foreach ($array as $a) {
            $b = trim($a);
            if ($b) array_push($res,$b);
        };
        return join($delimiter,$res);
    }

    public function actionXenSsd()
    {
        // 'tariffsGetAvailableInfo', []
        $parts = [];
        $availablePackage = Yii::$app->params['vdsproduct'];
        $params = [
            'types' => is_array($availablePackage) ? self::cjoin(array_keys($availablePackage),',') : $availablePackage,
            'seller' => 'ahnames',
            'limit' => 'ALL',
        ];
//        $_pkgs = Tariff::perform('GetAvailableInfo', $params, true);
        $_pkgs = Tariff::find(['scenario' => 'get-available-info'])
            ->joinWith('resources')
            ->andFilterWhere(['type' => is_array($availablePackage) ? self::cjoin(array_keys($availablePackage),',') : $availablePackage])
            ->andFilterWhere(['seller' => 'ahnames'])
            ->all();

        foreach ($_pkgs as $key => $v) {
            foreach ($v['resources'] as $value) {
                if ($value['object_id']) $parts[] = $value['object_id'];
                $pkg[$key] = array(
                    'object' => 'server',
                    'tariff_id' => $key,
                    'tariff' => $v['name'],
                );
                if (!Yii::$app->user->isGuest) $pkg[$key]['seller'] = 'ahnames';
            }
        }

//        $parts = g::base()->partsSearch(array('ids' => self::cjoin($parts), 'limit' => 'ALL'));
        $parts = Part::find()->all();
//        $prices = g::base()->actionsCalcValue($pkg);
        $prices = [];
        $j = 0.01;
        foreach ($_pkgs as $key => $v) {
//            if (err::not($prices[$key])) {
//                $_pkgs[$key]['resources'] = resources::server($v['resources'], $parts);
//                $_pkgs[$key]['price'] = $prices[$key]['value']['usd']['price'];
//                $_pkgs[$key]['value'] = $prices[$key]['value']['usd']['value'];
//            } else {
//                unset($_pkgs[$key]);
//            }
            unset($_pkgs[$key]);
            $t = 0.00;
            $existPrice = false;
            while ($t <= $j) {
                if ($vs[($_pkgs[$key]['value'] + $t) * 100]) $existPrice = true;
                $t += 0.01;
            }
            if (!$_pkgs[$key]['value'] || $existPrice) $j += 0.01;
            $vs[($_pkgs[$key]['value'] + $j) * 100] = $key;
        }
        ksort($vs);
        foreach ($vs as $id) $packages["0$id"] = $_pkgs[$id];
        \yii\helpers\VarDumper::dump($packages, 10, true);

        return $this->render('xen_ssd', compact('packages'));
    }

    public function actionOpenVz()
    {
        return $this->render('open_vz');
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
}