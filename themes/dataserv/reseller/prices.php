<?php

use yii\helpers\Html;

$this->title = Yii::t('app', 'Prices');
$this->blocks['subTitle'] = Yii::t('app', 'Domains reselling with AHnames is a great choice, if you want to run your own domain registration service');
$this->registerCss("
.gold-table, .platinum-table {
    display: none;
}
");
$this->registerJs(<<<JS
// ______________  PRICE SWITCH
$(".price-per-period .silver").click(function() {
    $(".silver-table").fadeIn(500);
    $(".gold-table").hide();
    $(".platinum-table").hide();
    $(".price-per-period .silver").addClass("btn-shared-checked");
    $(".price-per-period .silver").removeClass("btn-default");
    $(".price-per-period .gold").removeClass("btn-shared-checked");
    $(".price-per-period .gold").addClass("btn-default");
    $(".price-per-period .platinum").removeClass("btn-shared-checked");
    $(".price-per-period .platinum").addClass("btn-default");
});

$(".price-per-period .gold").click(function() {
    $(".silver-table").hide();
    $(".gold-table").fadeIn(500);
    $(".platinum-table").hide();
    $(".price-per-period .silver").removeClass("btn-shared-checked");
    $(".price-per-period .silver").addClass("btn-default");
    $(".price-per-period .gold").addClass("btn-shared-checked");
    $(".price-per-period .gold").removeClass("btn-default");
    $(".price-per-period .platinum").removeClass("btn-shared-checked");
    $(".price-per-period .platinum").addClass("btn-default");
});

$(".price-per-period .platinum").click(function() {
    $(".silver-table").hide();
    $(".gold-table").hide();
    $(".platinum-table").fadeIn(500);
    $(".price-per-period .silver").removeClass("btn-shared-checked");
    $(".price-per-period .silver").addClass("btn-default");
    $(".price-per-period .gold").addClass("btn-default");
    $(".price-per-period .gold").removeClass("btn-shared-checked");
    $(".price-per-period .platinum").removeClass("btn-default");
    $(".price-per-period .platinum").addClass("btn-shared-checked");
});
JS
    , \yii\web\View::POS_LOAD);
?>

<!-- PRICE BOXES -->
<div class="pricingbox shared">

    <div class="row">
        <div class="col-sm-12">
            <span class="chooseprice"><?= Yii::t('app', 'Choose your tariff') ?></span>
            <div class="price-per-period">
                <button type="button" class="btn btn-shared-checked ripple silver"><?= Yii::t('app', 'Silver') ?><br><?= Yii::t('app', '(up to 100 domains)') ?></button>
                <button type="button" class="btn btn-default ripple gold"><?= Yii::t('app', 'Gold') ?><br><?= Yii::t('app', '(more than 100 domains)') ?></button>
                <button type="button" class="btn btn-default ripple platinum"><?= Yii::t('app', 'Platinum') ?><br><?= Yii::t('app', '(more than 1000 domains)') ?></button>
            </div>
        </div>
    </div>

    <div class="row spacing-75">
        <div class="col-md-12 silver-table">
            <table id="tld-table" class="tablesaw" data-tablesaw-mode="stack" data-wow-duration="1000ms" data-wow-delay="250ms" >
                <thead>
                <tr>
                    <th>TLD</th>
                    <th>REGISTRATION</th>
                    <th>RENEWAL</th>
                    <th>TRANSFER</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>COM</td>
                    <td>$12</td>
                    <td>$12</td>
                    <td>$12</td>
                </tr>
                <tr>
                    <td>NET</td>
                    <td>$13</td>
                    <td>$13</td>
                    <td>$13</td>
                </tr>
                <tr>
                    <td>ORG</td>
                    <td>$14</td>
                    <td>$14</td>
                    <td>$14</td>
                </tr>
                <tr>
                    <td>BIZ</td>
                    <td>$15</td>
                    <td>$15</td>
                    <td>$15</td>
                </tr>
                <tr>
                    <td>AERO</td>
                    <td>$22</td>
                    <td>$22</td>
                    <td>$22</td>
                </tr>
                <tr>
                    <td>AC</td>
                    <td>$32</td>
                    <td>$32</td>
                    <td>$32</td>
                </tr>
                <tr>
                    <td>IO</td>
                    <td>$42</td>
                    <td>$42</td>
                    <td>$42</td>
                </tr>
                <tr>
                    <td>CLUB</td>
                    <td>$18</td>
                    <td>$18</td>
                    <td>$18</td>
                </tr>
                <tr>
                    <td>IS</td>
                    <td>$52</td>
                    <td>$52</td>
                    <td>$52</td>
                </tr>
                <tr>
                    <td>US</td>
                    <td>$9</td>
                    <td>$9</td>
                    <td>$9</td>
                </tr>
                <tr>
                    <td>EDU</td>
                    <td>$12</td>
                    <td>$12</td>
                    <td>$12</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-12 gold-table">
            <table id="tld-table" class="tablesaw" data-tablesaw-mode="stack" data-wow-duration="1000ms" data-wow-delay="250ms" >
                <thead>
                <tr>
                    <th>TLD</th>
                    <th>REGISTRATION</th>
                    <th>RENEWAL</th>
                    <th>TRANSFER</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>COM</td>
                    <td>$12</td>
                    <td>$12</td>
                    <td>$12</td>
                </tr>
                <tr>
                    <td>NET</td>
                    <td>$13</td>
                    <td>$13</td>
                    <td>$13</td>
                </tr>
                <tr>
                    <td>ORG</td>
                    <td>$14</td>
                    <td>$14</td>
                    <td>$14</td>
                </tr>
                <tr>
                    <td>BIZ</td>
                    <td>$15</td>
                    <td>$15</td>
                    <td>$15</td>
                </tr>
                <tr>
                    <td>AERO</td>
                    <td>$22</td>
                    <td>$22</td>
                    <td>$22</td>
                </tr>
                <tr>
                    <td>AC</td>
                    <td>$32</td>
                    <td>$32</td>
                    <td>$32</td>
                </tr>
                <tr>
                    <td>IO</td>
                    <td>$42</td>
                    <td>$42</td>
                    <td>$42</td>
                </tr>
                <tr>
                    <td>CLUB</td>
                    <td>$18</td>
                    <td>$18</td>
                    <td>$18</td>
                </tr>
                <tr>
                    <td>IS</td>
                    <td>$52</td>
                    <td>$52</td>
                    <td>$52</td>
                </tr>
                <tr>
                    <td>US</td>
                    <td>$9</td>
                    <td>$9</td>
                    <td>$9</td>
                </tr>
                <tr>
                    <td>EDU</td>
                    <td>$12</td>
                    <td>$12</td>
                    <td>$12</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-12 platinum-table">
            <table id="tld-table" class="tablesaw" data-tablesaw-mode="stack" data-wow-duration="1000ms" data-wow-delay="250ms" >
                <thead>
                <tr>
                    <th>TLD</th>
                    <th>REGISTRATION</th>
                    <th>RENEWAL</th>
                    <th>TRANSFER</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>COM</td>
                    <td>$12</td>
                    <td>$12</td>
                    <td>$12</td>
                </tr>
                <tr>
                    <td>NET</td>
                    <td>$13</td>
                    <td>$13</td>
                    <td>$13</td>
                </tr>
                <tr>
                    <td>ORG</td>
                    <td>$14</td>
                    <td>$14</td>
                    <td>$14</td>
                </tr>
                <tr>
                    <td>BIZ</td>
                    <td>$15</td>
                    <td>$15</td>
                    <td>$15</td>
                </tr>
                <tr>
                    <td>AERO</td>
                    <td>$22</td>
                    <td>$22</td>
                    <td>$22</td>
                </tr>
                <tr>
                    <td>AC</td>
                    <td>$32</td>
                    <td>$32</td>
                    <td>$32</td>
                </tr>
                <tr>
                    <td>IO</td>
                    <td>$42</td>
                    <td>$42</td>
                    <td>$42</td>
                </tr>
                <tr>
                    <td>CLUB</td>
                    <td>$18</td>
                    <td>$18</td>
                    <td>$18</td>
                </tr>
                <tr>
                    <td>IS</td>
                    <td>$52</td>
                    <td>$52</td>
                    <td>$52</td>
                </tr>
                <tr>
                    <td>US</td>
                    <td>$9</td>
                    <td>$9</td>
                    <td>$9</td>
                </tr>
                <tr>
                    <td>EDU</td>
                    <td>$12</td>
                    <td>$12</td>
                    <td>$12</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- END OF PRICE BOXES -->

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