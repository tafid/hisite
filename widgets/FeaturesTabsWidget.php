<?php

namespace app\widgets;

use Yii;
use yii\base\Widget;

class FeaturesTabsWidget extends Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render((new \ReflectionClass($this))->getShortName(), []);
    }
}