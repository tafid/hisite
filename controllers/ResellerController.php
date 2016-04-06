<?php

namespace app\controllers;

use app\helpers\ArrayHelper;
use app\helpers\ResourcesHelper;
use hipanel\modules\domain\models\Domain;
use hipanel\modules\finance\models\Tariff;
use yii\web\Controller;

class ResellerController extends Controller
{
    public function actionPrices()
    {
        $list = ArrayHelper::make_sub(ArrayHelper::make([2013590, 2013498, 2013544]), 'id');
        $tariffs = Tariff::perform('GetInfo', $list, true);
        $zones = Domain::perform('GetZones', [], true);

        foreach ($tariffs as $id => $v) {
            $range = substr($v['name'], 15);
            if (!$range) $range = '0';
            else $range = preg_replace('/\D/', '', $range);
            $info[$range] = ResourcesHelper::domain($tariffs[$id]['resources'], $zones);
        };

        $tariffOptions = [
            'silver-table' => 0,
            'gold-table' => 100,
            'platinum-table' => 1000,
        ];

        return $this->render('prices', compact('info', 'zones', 'tariffOptions'));
    }

    public function actionAdvantages()
    {
        return $this->render('advantages');
    }

    public function actionApi()
    {
        return $this->render('api');
    }
}