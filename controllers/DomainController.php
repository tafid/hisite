<?php

namespace app\controllers;

use app\helpers\ResourcesHelper;
use hipanel\modules\domain\models\Domain;
use hipanel\modules\finance\models\Tariff;
use Yii;
use yii\web\Controller;

class DomainController extends Controller
{
    public function actionPrices()
    {
        $domains = array_shift(Tariff::perform('GetAvailableInfo', [
            'seller' => Yii::$app->params['seller'],
            'type' => 'domain',
        ], true));
        $domainZones = Domain::perform('GetZones', [], true);
        $domains = ResourcesHelper::domain($domains['resources'], $domainZones);
        $promotion = Tariff::perform('GetInfo', ['id' => 7312138]);
//        if (!err::is($promoution)) tpl::set('promoution', resources::domain($promoution['resources'], tpl::get('zones')));

        foreach (['domains', 'promotion'] as $price) {
            $zones = $$price;
            foreach ($zones as &$zone) {
                if (is_array($zone)) {
                    foreach ($zone as $operation => $info) {
                        if (!in_array($operation, ['dregistration', 'drenewal', 'dtransfer'])) unset($zone[$operation]);
                    }
                }
            }
            $$price = $zones;
        }

        return $this->render('prices', compact('domains', 'promotion', 'domainZones'));
    }

    public function actionAdvantages()
    {
        return $this->render('advantages');
    }

    public function actionTransfer()
    {
        return $this->render('transfer');
    }

    public function actionPremiumPackage()
    {
        return $this->render('premium_package');
    }

    public function actionWhoisLookup()
    {
        return $this->render('whois_lookup');
    }
}