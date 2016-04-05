<?php

namespace app\models\hosting;

use Yii;

class Calculation extends \hipanel\modules\finance\models\Calculation
{
    use \hipanel\base\ModelTrait;

    /** @inheritdoc */
    public function synchronize()
    {
        return true;
    }

    /** {@inheritdoc} */
    public static function primaryKey()
    {
        return ['tariff_id'];
    }

    /** {@inheritdoc} */
    public function init()
    {
        parent::init();

        if (Yii::$app->user->getIsGuest()) {
            $this->seller = Yii::$app->params['seller'];
        } else {
            $this->seller = Yii::$app->user->identity->seller;
            $this->client = Yii::$app->user->identity->login;
        }

        $this->object = 'server';
    }

    /** {@inheritdoc} */
    public function rules()
    {
        return array_merge(parent::rules(), [
            [['tariff'], 'safe'],
            [['tariff_id'], 'integer'],
        ]);
    }
}
