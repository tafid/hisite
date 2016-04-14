<?php

/**
 * @var \app\models\hosting\Package $package
 * @var \hipanel\modules\server\cart\ServerOrderProduct $product
 * @var array $groupedOsimages
 * @var array $panels
 */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Json;

$this->title = Yii::t('hisite/hosting', 'Order creating');
$this->blocks['subTitle'] = Yii::t('hisite/hosting', 'Customise your server'); // todo: we need a good text
?>

    <h3><?= $package->getName() ?></h3>
    <h3><?= $package->getPrice() ?></h3>

    <table>
        <tr>
            <td><?= $package->getResourceTitle('cpu') ?></td>
            <td><?= $package->getResourceValue('cpu') ?></td>
        </tr>
        <tr>
            <td><?= $package->getResourceTitle('ram') ?></td>
            <td><?= $package->getResourceValue('ram') ?></td>
        </tr>
        <tr>
            <td><?= $package->getResourceTitle('hdd') ?></td>
            <td><?= $package->getResourceValue('hdd') ?></td>
        </tr>
        <tr>
            <td><?= $package->getResourceTitle('ip') ?></td>
            <td><?= $package->getResourceValue('ip') ?></td>
        </tr>
        <tr>
            <td><?= $package->getResourceTitle('traffic') ?></td>
            <td><?= $package->getResourceValue('traffic') ?></td>
        </tr>
        <tr>
            <td><?= Yii::t('hisite/hosting', 'Traffic overuse') ?></td>
            <td><?= Yii::t('hisite/hosting', '{price}/{unit}', $package->getOverusePrice('traffic')) ?></td>
        </tr>
    </table>
<?php $form = ActiveForm::begin(['action' => ['add-to-cart']]); ?>
    <?= Html::activeHiddenInput($product, 'tariff_id', ['name' => 'tariff_id']) ?>
    <?= Html::hiddenInput('osimage', null, ['class' => 'reinstall-osimage']) ?>
    <?= Html::hiddenInput('panel', null, ['class' => 'reinstall-panel']) ?>
    <div class="row">
        <div class="col-md-3"><?= Yii::t('hisite/hosting', 'Location') ?></div>
        <div class="col-md-3"><?= Yii::t('hisite/hosting', 'OS') ?></div>
        <div class="col-md-3"><?= Yii::t('hisite/hosting', 'Panel and software') ?></div>
        <div class="col-md-3"><?= Yii::t('hisite/hosting', 'Information') ?></div>
    </div>
    <div class="row os-selector">
        <div class="col-md-3">
            <?= $form->field($product, 'cluster_id')->dropDownList($package->getLocations(), ['name' => 'cluster_id'])->label(false) ?>
        </div>
        <div class="col-md-3">
            <?php
            foreach ($groupedOsimages['vendors'] as $vendor) { ?>
                <div class="list-group-item">
                    <h4 class="list-group-item-heading"><?= $vendor['name'] ?></h4>

                    <div class="list-group-item-text os-list">
                        <?php foreach ($vendor['oses'] as $system => $os) {
                            echo Html::tag('div', Html::radio('os', false, [
                                'label' => $os,
                                'value' => $system,
                                'class' => 'radio',
                            ]), ['class' => 'radio']);
                        } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="col-md-3">
            <?php foreach ($panels as $panel => $panel_name) {
                if (empty($groupedOsimages['softpacks'][$panel])) {
                    continue;
                } ?>

                <div class="list-group-item soft-list" data-panel="<?= $panel ?>">
                    <h4 class="list-group-item-heading"><?= Yii::t('hipanel/server/panel', $panel_name) ?></h4>

                    <div class="list-group-item-text">
                        <?php foreach ($groupedOsimages['softpacks'][$panel] as $softpack) { ?>
                            <div class="radio">
                                <label>
                                    <?= Html::radio('panel_soft', false, [
                                        'data' => [
                                            'panel-soft' => 'soft',
                                            'panel' => $panel
                                        ],
                                        'value' => $softpack['name'],
                                    ]) ?>
                                    <strong><?= $softpack['name'] ?></strong>
                                    <small style="font-weight: normal">
                                        <?= Yii::t('hipanel/server/os', $softpack['description']) ?>
                                    </small>
                                    <a class="softinfo-bttn glyphicon glyphicon-info-sign" href="#"></a>

                                    <div class="soft-desc" style="display: none;"></div>
                                </label>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>

        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12"><?= $form->field($product, 'purpose')->textInput(['name' => 'purpose']) ?></div>
            </div>
            <div class="row">
                <div class="col-md-12"><?= $form->field($product, 'social')->textInput(['name' => 'social']) ?></div>
            </div>
            <div class="row">
                <div class="col-md-12"><?= Html::submitButton(Yii::t('cart', 'Place order')) ?></div>
            </div>
        </div>
    </div>
<?php $form->end();

$this->registerJs("
    var osparams = " . Json::encode($groupedOsimages['oses']) . ";
    $('.os-selector').osSelector({
        osparams: osparams
    });
", \yii\web\View::POS_READY, 'os-selector-init');

