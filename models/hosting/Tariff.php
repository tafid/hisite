<?php

namespace app\models\hosting;

class Tariff extends \hipanel\modules\finance\models\Tariff
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
}
