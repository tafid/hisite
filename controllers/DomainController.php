<?php

namespace app\controllers;

use yii\web\Controller;

class Domain extends Controller
{
    public function actionPrice()
    {
        return $this->render('prices');
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