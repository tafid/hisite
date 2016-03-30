<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
$model->domain = empty($model->domain) ? Yii::$app->request->get('domain') : $model->domain;
$model->zone = empty($model->zone) ? Yii::$app->request->get('zone') : $model->zone;
$form = ActiveForm::begin([
    'id' => 'check-domain',
    'method' => 'get',
    'action' => Url::toRoute('@domainchecker/check-domain'),
    'options' => [
        'class' => 'material'
    ],
    'fieldConfig' => [
        'template' => "{input}\n{hint}\n{error}",
    ],
]) ?>
    <div class="row">
        <input type="hidden" name="direct" value="true" />
        <div class="col-sm-11">
            <?= $form->field($model, 'domain')->textInput([
                'placeholder' => Yii::t('app', 'Domain Search'),
                'name' => 'domain',
                'id' => 'domain',
                'autocomplete' => 'off'
            ]) ?>
        </div>
        <div class="col-sm-1">
            <button class="mtr-btn button-fab" type="submit"><i class="fa fa-search"></i></button>
        </div>
    </div>
<?php ActiveForm::end() ?>
