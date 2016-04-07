<?php

namespace app\widgets;

use Yii;

class PanelTopCart extends \hiqdev\yii2\cart\widgets\PanelTopCart
{
    public function getViewPath()
    {
        return Yii::$app->view->theme->basePath . DIRECTORY_SEPARATOR . 'widgets' . DIRECTORY_SEPARATOR . 'views';
    }
}
