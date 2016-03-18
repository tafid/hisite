<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

class NewsController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new News(); // todo Add news module
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', compact('id'));
    }
}