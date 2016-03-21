<?php

namespace app\helpers;

class ResourcesHelper
{
    /**
     * @param $resources
     * @param $zones
     * @return mixed
     */
    public static function domain ($resources, $zones) {
        foreach ($resources as $k => $v) {
            if ($zones[$v['object_id']]) $resource['zone:.'.$zones[$v['object_id']]][$v['type']] = $v;
            if (preg_match('/^premium_dns/', $v['type'])) $resource['ref:class,feature'][$v['type']] = $v;
        }

        return $resource;
    }
}