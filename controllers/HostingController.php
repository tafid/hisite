<?php

namespace app\controllers;

use yii\web\Controller;

class Hosting extends Controller
{
    public function actionXenSsd()
    {
        return $this->render('xen_ssd');
    }

    public function actionOpenVz()
    {
        return $this->render('open_vz');
    }

    public function actionTariffsDetail()
    {
        return $this->render('tariffs_detail');
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