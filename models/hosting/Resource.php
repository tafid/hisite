<?php

namespace app\models\hosting;

use hipanel\modules\stock\models\Part;

class Resource extends \hipanel\modules\finance\models\Resource
{
    use \hipanel\base\ModelTrait;

    public function getTariff()
    {
        return $this->hasOne(Tariff::className(), ['tariff_id' => 'id']);
    }

    public function getDisplayName()
    {
        return trim(str_ireplace(['xen', 'openvz', 'cpu', 'ram', 'hdd', 'ssd'], '', $this->partno));
    }

    public function getPart()
    {
        return $this->hasOne(Part::class, ['object_id' => 'id']);
    }
}
