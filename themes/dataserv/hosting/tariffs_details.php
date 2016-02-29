<?php
use yii\helpers\Html;

$this->title = Yii::t('app', 'Tariffs details');
$this->blocks['subTitle'] = Yii::t('app', 'Hosting by AHnames is an optimal and reliable solution for any project at affordable price');
?>

<div class="domain-features">
    <div class="row">

        <div class="col-sm-6">
            <div class="row wow fadeInRight" data-wow-duration="500ms" data-wow-delay="200ms">
                <div class="col-sm-3 col-md-2">
                    <div class="square"><i class="fa fa-life-ring"></i></div>
                </div>
                <div class="col-sm-9 col-md-10"><h5><?= Yii::t('app', '24/7 tech support') ?></h5>
                    <ul>
                        <li><?= Yii::t('app', 'Website transfer and initial VDS setup') ?>.</li>
                        <li><a href="/en/vds/pages/monitoring">24/7 <?= Yii::t('app', 'monitoring') ?></a> (<?= Yii::t('app', 'external or internal + external') ?>).</li>
                        <li><?= Yii::t('app', 'Administration Package') ?>:
                            <ul>
                                <li><b><?= Yii::t('app', 'Bronze') ?></b> — 60 <?= Yii::t('app', 'min/mon') ?>.</li>

                                <li><b><?= Yii::t('app', 'Silver') ?></b> — 90 <?= Yii::t('app', 'min/mon') ?>.</li>

                                <li><b><?= Yii::t('app', 'Gold') ?></b> — 120 <?= Yii::t('app', 'min/mon') ?>.</li>

                                <li><b><?= Yii::t('app', 'Platinum') ?></b> — 180 <?= Yii::t('app', 'min/mon') ?>.</li>
                            </ul>
                        </li>
                    </ul>
                    <p><?= Yii::t('app', 'All the servers are managed, the price for administration time that is not included in the package is {0}', [Html::tag('b', Yii::$app->formatter->asCurrency(30, 'USD') . '/' .Yii::t('app', 'hour'))]) ?>.</p>
                    <p><?= Yii::t('app', 'The option of changing the tariff plan moving it to a lower or higher tariff, as well as resources expansion within the current tariff plan is provided individually. More information about this option can be found {0}', [Html::a(Yii::t('app', 'here', '#'))]) ?>.</p>
                </div>
            </div>
        </div>


        <div class="col-sm-6">
            <div class="row wow fadeInRight" data-wow-duration="500ms" data-wow-delay="250ms">
                <div class="col-sm-3 col-md-2">
                    <div class="square"><i class="fa fa-laptop"></i></div>
                </div>
                <div class="col-sm-9 col-md-10"><h5><?= Yii::t('app', 'Control Panel') ?></h5>
                    <p>
                        <?= Yii::t('app', 'When ordering any VDS, you can select a control panel: one developed by {0}, {1} (for Pro, Advance and Elite tariff plans) or "No panel" option', [
                            Html::a('AHnames', '#'),
                            Html::a('ISPmanager', '#'),
                        ]) ?>.
                    </p>
                </div>
            </div>

            <div class="row wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                <div class="col-sm-3 col-md-2">
                    <div class="square"><i class="fa fa-share-alt"></i></div>
                </div>
                <div class="col-sm-9 col-md-10"><h5><?= Yii::t('app', 'Connection port') ?></h5>
                    <p><?= Yii::t('app', 'Each VDS has a {0} channel', [Html::tag('b', Yii::t('app', '1Gb/s'))]) ?>.</p>
                </div>
            </div>

            <div class="row wow fadeInRight" data-wow-duration="500ms" data-wow-delay="350ms">
                <div class="col-sm-3 col-md-2">
                    <div class="square"><i class="fa fa-map-marker"></i></div>
                </div>
                <div class="col-sm-9 col-md-10"><h5><?= Yii::t('app', 'Location and Access via VNC') ?></h5>
                    <p>
                        <?= Yii::t('app', 'A VDS with Netherlands or USA localization can be selected') ?>.<br>
                        <?= Yii::t('app', 'We offer {0} for all VDS', [Html::a(Yii::t('app', 'VNC access'), 'https://en.wikipedia.org/wiki/Virtual_Network_Computing', ['target' => '_blank'])]) ?>.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
