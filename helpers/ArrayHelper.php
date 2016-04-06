<?php
namespace app\helpers;

class ArrayHelper extends \yii\helpers\ArrayHelper
{
    public static function make($keys, $vals = null)
    {
        if (is_null($vals)) $vals = $keys;
        foreach ($keys as $n => $key) $res[$key] = is_array($vals) ? $vals[$n] : $vals;
        return $res;
    }

    public static function make_sub($array, $v_key, $k_key = null)
    {
        $res = array();
        foreach ($array as $k => $v) $res[$k][$v_key] = $v;
        if ($k_key) foreach ($array as $k => $v) $res[$k][$k_key] = $k;
        return $res;
    }
}