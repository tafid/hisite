<?php

namespace app\controllers;

use yii\web\Controller;

class DomainController extends Controller
{
    public function actionPrices()
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