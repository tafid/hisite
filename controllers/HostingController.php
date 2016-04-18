<?php

namespace app\controllers;

use hipanel\modules\server\cart\ServerOrderProduct;
use hipanel\modules\server\cart\Tariff;
use hipanel\modules\server\helpers\ServerHelper;
use hiqdev\yii2\cart\actions\AddToCartAction;
use Yii;
use yii\web\Controller;

class HostingController extends Controller
{
    public function actions()
    {
        return [
            'add-to-cart' => [
                'class' => AddToCartAction::class,
                'productClass' => ServerOrderProduct::class
            ]
        ];
    }

    public function actionOrder($id)
    {
        $package = ServerHelper::getAvailablePackages(null, $id);
        $osImages = ServerHelper::getOsimages($package->tariff->type);

        return $this->render('order', [
            'package' => $package,
            'product' => new ServerOrderProduct(['tariff_id' => $package->tariff->id]),
            'groupedOsimages' => ServerHelper::groupOsimages($osImages),
            'panels' => ServerHelper::getPanels(),
        ]);
    }

    public function actionXenSsd()
    {
        return $this->render('xen_ssd', [
            'packages' => ServerHelper::getAvailablePackages(Tariff::TYPE_XEN),
            'tariffTypes' => Yii::$app->params['vdsproduct'],
//            'testVDSPurchased' => ['id' => 1]
        ]);
    }

    public function actionOpenVz()
    {
        return $this->render('xen_ssd', [
            'packages' => ServerHelper::getAvailablePackages(Tariff::TYPE_OPENVZ),
            'tariffTypes' => Yii::$app->params['vdsproduct'],
//            'testVDSPurchased' => ['id' => 1]
        ]);
    }

    public function actionTariffsDetails()
    {
        return $this->render('tariffs_details');
    }

    public function actionAdvantages()
    {
        return $this->render('advantages');
    }

    public function actionWhatIsVds()
    {
        return $this->render('what_is_vds');
    }
}
