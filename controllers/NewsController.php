<?php
namespace app\controllers;

use yii\web\Controller;

class NewsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView($id)
    {
        return $this->render('view', compact('id'));
    }
}