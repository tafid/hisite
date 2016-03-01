<?php
use yii\helpers\Html;

?>

<div class="difference">
    <div class="row spacing-25">
        <div class="col-md-9 col-sm-12 center-block">
            <h3 class="text-center"><?= Yii::t('app', 'Making order and other questions') ?></h3>
            <p class="text-center"><?= Yii::t('app', 'Ways of organizing cooperation') ?></p>
            <div class="newplans_box"></div>
            <h5><?= Yii::t('app', 'Reseller site on the basis AHnames.com') ?></h5>
            <p>
                <?= Yii::t('app', 'We offer our partners to get standard reseller website based on Ahnames.com.<br> It is completely free. You just have to tell us the following information:') ?>
            </p>
            <ul>
                <li><?= Yii::t('app', 'your login in the control panel;') ?></li>
                <li><?= Yii::t('app', 'domain, which will be located on the control panel;') ?></li>
                <li><?= Yii::t('app', 'ssl certificate;') ?></li>
                <li><?= Yii::t('app', 'email to receive all notification;') ?></li>
                <li><?= Yii::t('app', 'web-service address, which will appear in the Whois service of registered domain;') ?></li>
                <li><?= Yii::t('app', 'payment systems, which will be available for payment on your site (you can connect WebMoney, PayPal, eCoin, ePayService / EPSBanking, Paxum, OkPay).') ?></li>
                <li><?= Yii::t('app', 'contact details for publishing on the web-site (ICQ, Skype — optional);') ?></li>
                <li><?= Yii::t('app', 'languages, that will be available by default on the web-site (Russian/English).') ?></li>
            </ul>
            <p>
                <?= Yii::t('app', 'Upon receipt of followed information, we will give you IP-address, on which will need to create A record.') ?>
            </p>
            <blockquote>
                <?= Yii::t('app', 'To become a reseller of AHnames domains you have to contact us via email, ICQ or Skype:') ?><br><br>
                <dl class="dl-horizontal">
                    <dt><?= Yii::t('app', 'Mail') ?></dt>
                    <dd><?= Html::mailto('sales@AHnames.com', 'sales@AHnames.com') ?></dd>

                    <dt><?= Yii::t('app', 'ICQ') ?></dt>
                    <dd>593341721</dd>

                    <dt><?= Yii::t('app', 'Skype') ?></dt>
                    <dd>ah.andre</dd>
                </dl>
            </blockquote>

            <div class="alert alert-warning" role="alert">
                <h6><?= Yii::t('app', 'It\'s important!') ?></h6>
                <p>
                    <?= Yii::t('app', 'Save the request for purchasing an SSL Certificate (CSR) and private key (RSA).') ?><br>
                    <?= Yii::t('app', 'After purchasing the SSL certificate, you have to provide us with self SSL certificate and private key (RSA).') ?><br>
                    <?= Yii::t('app', 'To generate the request for SSL you can on this page: {0}', ['<a rel="nofolow" target="_blank" href="//ssl.com.ua/online-CSR-generator">ssl.com.ua/online-CSR-generator</a>']) ?>
                </p>
            </div>
        </div>
    </div>
</div>