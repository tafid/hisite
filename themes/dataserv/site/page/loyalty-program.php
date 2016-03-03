<?php
use yii\helpers\Html;

$this->title = Yii::t('app', 'Loyalty program');

?>

<div class="about-team">
    <div class="row">
        <div class="col-sm-12">
            <h3>
                <?= Yii::t('app', '{0} loyalty program:', [Yii::$app->name])?><br>
                <?= Yii::t('app', 'the longer you’re with us the cheaper your VDS is!?') ?>
            </h3>
            <div class="newplans_box"></div>
            <p>
                <?= Yii::t('app', 'Dear friends!') ?><br>
                <?= Yii::t('app', 'To express our gratitude to everyone who has chosen our services, we have created a loyalty program for our clients.') ?>
                <?= Yii::t('app', 'The meaning of the program is to make the VDS as beneficial as possible, not for once but constantly and for all tariff plans.') ?>
                <?= Yii::t('app', 'Our system is very simple; there are no credits, complex calculations and exchange points for dubious discounts.') ?>
            </p>
            <p>
                <b><?= Yii::t('app', 'First stage of our loyalty program starts on November 1st: 1% of discount for each month of using VDS!') ?></b>
            </p>
            <p>
                <?= Yii::t('app', 'Renew any VDS tariff plan each month and receive a 1% discount increase for the next month. To participate in our loyalty program, create an account on our website and purchase any suitable VDS tariff plan.') ?>
                <?= Yii::t('app', 'For example, if you order a VDS tariff plan with the price that is specified on our website, next month you’ll receive a 1% discount, 2% discount in two months and so on.') ?>
                <br>
                <?= Yii::t('app', 'Maximum discount is') ?> <b><?= Yii::t('app', '25% in 2 years') ?></b>.
            </p>
            <p class="text-center"><?= Html::img(sprintf('/images/custom/loyalty_%s.png', Yii::$app->language)); ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-info" role="alert">
            <h4><?= Yii::t('app', 'Please note!') ?></h4><br>
            <p class="text-left">
                <?= Yii::t('app', 'When purchasing services with promotional prices, discounts from loyalty program don’t count. Also, discounts don’t apply to excessive use of resources and additional services.') ?>
            </p>
        </div>
        <p>
            <?= Yii::t('app', 'All accrued discounts will be displayed in VDS section of your hosting panel on the VDS info page. Also the date and rate of the next discount are available.') ?>
        </p>
        <p>
            <?= Yii::t('app', 'Second stage of AHnames loyalty program will be released very soon! All discounts calculated within the loyalty program will be added to all VDS tariff plans permanently. Follow our news and AHnames hosting will become even more beneficial.') ?>
        </p>
    </div>
</div>
