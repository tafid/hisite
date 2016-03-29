<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'check-domain',
    'method' => 'post',
    'action' => Url::to('/domainchecker/domainchecker/check-domain'),
    'options' => [
        'data-pjax' => false,
        'class' => 'material'
    ],
    'fieldConfig' => [
        'template' => "{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
    ],
]) ?>
    <div class="row">
        <input type="hidden" name="direct" value="true" />
        <div class="col-sm-9">
            <?= Html::activeTextInput($model, 'domain', ['placeholder' => Yii::t('app', 'Domain Search')]) ?>
        </div>
        <div class="col-sm-2">
            <?= Html::activeDropDownList($model, 'zone', $dropDownZonesOptions, ['data-placeholder' => Yii::t('app', 'Zone')]) ?>
        </div>
        <div class="col-sm-1">
            <button class="mtr-btn button-fab" type="submit"><i class="fa fa-search"></i></button>
        </div>
    </div>
<?php ActiveForm::end() ?>