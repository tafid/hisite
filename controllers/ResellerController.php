<?php

namespace app\controllers;

use yii\web\Controller;

class ResellerController extends Controller
{
    public function actionPrices()
    {
        return $this->render('prices');
    }

    public function actionAdvantages()
    {
        return $this->render('advantages');
    }

    public function actionApi()
    {
        return $this->render('api');
    }
}