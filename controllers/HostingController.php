<?php

namespace app\controllers;

use yii\web\Controller;

class HostingController extends Controller
{
    public function actionXenSsd()
    {
        return $this->render('xen_ssd');
    }

    public function actionOpenVz()
    {
        return $this->render('open_vz');
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