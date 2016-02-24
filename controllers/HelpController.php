<?php

namespace app\controllers;

use yii\web\Controller;

class HelpController extends Controller
{
    public function actionFaq()
    {
        return $this->render('faq');
    }
}