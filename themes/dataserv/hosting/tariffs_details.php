<?php
use yii\helpers\Html;

$this->title = Yii::t('hisite/hosting', 'Tariffs details');
$this->blocks['subTitle'] = Yii::t('hisite/hosting', 'Hosting by AHnames is an optimal and reliable solution for any project at affordable price');
?>

<div class="domain-features">
    <div class="row">

        <div class="col-sm-6">
            <div class="row wow fadeInRight" data-wow-duration="500ms" data-wow-delay="200ms">
                <div class="col-sm-3 col-md-2">
                    <div class="square"><i class="fa fa-life-ring"></i></div>
                </div>
                <div class="col-sm-9 col-md-10"><h5><?= Yii::t('hisite/hosting', '24/7 tech support') ?></h5>
                    <ul>
                        <li><?= Yii::t('hisite/hosting', 'Website transfer and initial VDS setup') ?>.</li>
                        <li><?= Html::a(Yii::t('hisite/hosting', '24/7 monitoring'), ['/hosting/advantages']) ?> (<?= Yii::t('app', 'external or internal + external') ?>).</li>
                        <li><?= Yii::t('hisite/hosting', 'Administration Package') ?>:
                            <ul>
                                <li><b><?= Yii::t('hisite/hosting', 'Bronze') ?></b> — 60 <?= Yii::t('app', 'min/mon') ?>.</li>

                                <li><b><?= Yii::t('hisite/hosting', 'Silver') ?></b> — 90 <?= Yii::t('app', 'min/mon') ?>.</li>

                                <li><b><?= Yii::t('hisite/hosting', 'Gold') ?></b> — 120 <?= Yii::t('app', 'min/mon') ?>.</li>

                                <li><b><?= Yii::t('hisite/hosting', 'Platinum') ?></b> — 180 <?= Yii::t('app', 'min/mon') ?>.</li>
                            </ul>
                        </li>
                    </ul>
                    <p><?= Yii::t('hisite/hosting', 'All the servers are managed, the price for administration time that is not included in the package is {0}', [Html::tag('b', Yii::$app->formatter->asCurrency(30, 'USD') . '/' .Yii::t('app', 'hour'))]) ?>.</p>
                    <p><?= Yii::t('hisite/hosting', 'The option of changing the tariff plan moving it to a lower or higher tariff, as well as resources expansion within the current tariff plan is provided individually. More information about this option can be found {0}', [Html::a(Yii::t('app', 'here', '#'))]) ?>.</p>
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
                        <?= Yii::t('hisite/hosting', 'When ordering any VDS, you can select a control panel: one developed by {0}, {1} (for Pro, Advance and Elite tariff plans) or "No panel" option', [
                            Html::a('hisite/hosting', ['/help/faq']),
                            Html::a('hisite/hosting', 'http://ispsystem.com/ru', ['target' => '_blank']),
                        ]) ?>.
                    </p>
                </div>
            </div>

            <div class="row wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                <div class="col-sm-3 col-md-2">
                    <div class="square"><i class="fa fa-share-alt"></i></div>
                </div>
                <div class="col-sm-9 col-md-10"><h5><?= Yii::t('hisite/hosting', 'Connection port') ?></h5>
                    <p><?= Yii::t('hisite/hosting', 'Each VDS has a {0} channel', [Html::tag('b', Yii::t('app', '1Gb/s'))]) ?>.</p>
                </div>
            </div>

            <div class="row wow fadeInRight" data-wow-duration="500ms" data-wow-delay="350ms">
                <div class="col-sm-3 col-md-2">
                    <div class="square"><i class="fa fa-map-marker"></i></div>
                </div>
                <div class="col-sm-9 col-md-10"><h5><?= Yii::t('hisite/hosting', 'Location and Access via VNC') ?></h5>
                    <p>
                        <?= Yii::t('hisite/hosting', 'A VDS with Netherlands or USA localization can be selected') ?>.<br>
                        <?= Yii::t('hisite/hosting', 'We offer {0} for all VDS', [Html::a(Yii::t('hisite/hosting', 'VNC access'), 'https://en.wikipedia.org/wiki/Virtual_Network_Computing', ['target' => '_blank'])]) ?>.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
