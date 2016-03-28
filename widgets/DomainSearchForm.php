<?php

namespace app\widgets;

use Yii;
use yii\base\Widget;

class DomainSearchForm extends Widget
{
    public function run()
    {
        return $this->render((new\ReflectionClass($this))->getShortName(), []);
    }
}