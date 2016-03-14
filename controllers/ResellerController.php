<?php

namespace app\controllers;

use hipanel\modules\domain\models\Domain;
use hipanel\modules\finance\models\Tariff;
use yii\web\Controller;

class ResellerController extends Controller
{
    public function actionPrices()
    {
        $list = self::make_sub(self::make([2013590,2013498,2013544]), 'id');
        $tariffs = Tariff::perform('GetInfo', $list, true);
        $zones = Domain::perform('GetZones', [], true);

        foreach ($tariffs as $id => $v) {
            $range = substr($v['name'],15);
            if (!$range) $range = '0';
            else $range = preg_replace('/\D/','',$range);
            $info[$range] = self::domain($tariffs[$id]['resources'], $zones);
        };

        $tariffOptions = [
            'silver-table' => 0,
            'gold-table' => 100,
            'platinum-table' => 1000,
        ];

        return $this->render('prices', compact('info', 'zones', 'tariffOptions'));
    }

    public static function domain ($resources, $zones) {
        foreach ($resources as $k => $v) {
            if ($zones[$v['object_id']]) $resource['zone:.'.$zones[$v['object_id']]][$v['type']] = $v;
            if (preg_match('/^premium_dns/', $v['type'])) $resource['ref:class,feature'][$v['type']] = $v;
        }

        return $resource;
    }

    public static function make ($keys,$vals=null) {
        if (is_null($vals)) $vals = $keys;
        foreach ($keys as $n=>$key) $res[$key] = is_array($vals) ? $vals[$n] : $vals;
        return $res;
    }

    public static function make_sub ($array,$v_key,$k_key=null) {
        $res = array();
        foreach ($array as $k=>$v) $res[$k][$v_key] = $v;
        if ($k_key) foreach ($array as $k=>$v) $res[$k][$k_key] = $k;
        return $res;
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