<?php

namespace app\models\hosting;

use hipanel\modules\finance\models\CalculableModelInterface;

class Tariff extends \hipanel\modules\finance\models\Tariff implements CalculableModelInterface
{
    /**
     * Method creates and returns corresponding Calculation model
     *
     * @return Calculation
     */
    public function getCalculationModel()
    {
        return new Calculation([
            'tariff' => $this->name,
            'tariff_id' => $this->id
        ]);
    }

    public function getResources()
    {
        return $this->hasMany(Resource::className(), ['tariff_id' => 'id']);
    }
}
