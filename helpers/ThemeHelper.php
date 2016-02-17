<?php

namespace app\helpers;

use Yii;

class ThemeHelper {

    /**
     * @return bool
     */
    public static function isHomePage()
    {
        $controller = Yii::$app->controller;
        $default_controller = Yii::$app->defaultRoute;
        return (($controller->id === $default_controller) && ($controller->action->id === $controller->defaultAction));
    }
}
