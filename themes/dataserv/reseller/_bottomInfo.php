<?php
use yii\helpers\Html;

?>

<div class="difference">
    <div class="row spacing-25">
        <div class="col-md-9 col-sm-12 center-block">
            <h3 class="text-center"><?= Yii::t('hisite/reseller', 'Making order and other questions') ?></h3>
            <p class="text-center"><?= Yii::t('hisite/reseller', 'Ways of organizing cooperation') ?></p>
            <div class="newplans_box"></div>
            <h5><?= Yii::t('hisite/reseller', 'Reseller site on the basis AHnames.com') ?></h5>
            <p>
                <?= Yii::t('hisite/reseller', 'We offer our partners to get standard reseller website based on Ahnames.com.<br> It is completely free. You just have to tell us the following information:') ?>
            </p>
            <ul>
                <li><?= Yii::t('hisite/reseller', 'your login in the control panel;') ?></li>
                <li><?= Yii::t('hisite/reseller', 'domain, which will be located on the control panel;') ?></li>
                <li><?= Yii::t('hisite/reseller', 'ssl certificate;') ?></li>
                <li><?= Yii::t('hisite/reseller', 'email to receive all notification;') ?></li>
                <li><?= Yii::t('hisite/reseller', 'web-service address, which will appear in the Whois service of registered domain;') ?></li>
                <li><?= Yii::t('hisite/reseller', 'payment systems, which will be available for payment on your site (you can connect WebMoney, PayPal, eCoin, ePayService / EPSBanking, Paxum, OkPay).') ?></li>
                <li><?= Yii::t('hisite/reseller', 'contact details for publishing on the web-site (ICQ, Skype — optional);') ?></li>
                <li><?= Yii::t('hisite/reseller', 'languages, that will be available by default on the web-site (Russian/English).') ?></li>
            </ul>
            <p>
                <?= Yii::t('hisite/reseller', 'Upon receipt of followed information, we will give you IP-address, on which will need to create A record.') ?>
            </p>
            <blockquote>
                <?= Yii::t('hisite/reseller', 'To become a reseller of AHnames domains you have to contact us via email, ICQ or Skype:') ?><br><br>
                <dl class="dl-horizontal">
                    <dt><?= Yii::t('hisite/reseller', 'Mail') ?></dt>
                    <dd><?= Html::mailto('sales@AHnames.com', 'sales@AHnames.com') ?></dd>

                    <dt><?= Yii::t('hisite/reseller', 'ICQ') ?></dt>
                    <dd>593341721</dd>

                    <dt><?= Yii::t('hisite/reseller', 'Skype') ?></dt>
                    <dd>ah.andre</dd>
                </dl>
            </blockquote>

            <div class="alert alert-warning" role="alert">
                <h6><?= Yii::t('hisite/reseller', 'It\'s important!') ?></h6>
                <p>
                    <?= Yii::t('hisite/reseller', 'Save the request for purchasing an SSL Certificate (CSR) and private key (RSA).') ?><br>
                    <?= Yii::t('hisite/reseller', 'After purchasing the SSL certificate, you have to provide us with self SSL certificate and private key (RSA).') ?><br>
                    <?= Yii::t('hisite/reseller', 'To generate the request for SSL you can on this page: {0}', ['<a rel="nofolow" target="_blank" href="//ssl.com.ua/online-CSR-generator">ssl.com.ua/online-CSR-generator</a>']) ?>
                </p>
            </div>
        </div>
    </div>
</div>