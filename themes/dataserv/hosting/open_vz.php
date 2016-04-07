<?php
use yii\helpers\Html;

$this->title = Yii::t('app', 'OpenVz');
$this->blocks['subTitle'] = Yii::t('app', 'Hosting by AHnames is an optimal and reliable solution for any project at affordable price');
$this->registerCss(".products-table { display: table; }");
?>

<!-- TEXT -->
<div class="vps-text">
    <div class="row">
        <div class="col-md-3 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="h1-name-openvz">OpenVz</div>
        </div>
        <div class="col-md-9 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="200ms">
            <p>
                <?= Yii::t('app', '{0} - is an inexpensive and reliable solution for small projects that do not require many resources (HTML web-sites, landing pages, small blogs, personal websites, business cards, etc.). An additional advantage of our VDS based on OpenVZ is utilization of SSD cache system that improves performance of the disk subsystem during frequently accessed data readings.', [Html::a(Yii::t('app', 'VDS based on OpenVZ'), '#')]) ?>
            </p>
        </div>
    </div>
</div>
<!-- END OF TEXT -->

<?= $this->render('_priceBox', compact('tariffs', 'tariffTypes', 'testVDSPurchased')); ?>

<div class="domain-features-text">
    <div class="row">
        <div class="col-sm-6">
            <h4><?= Yii::t('app', 'PAYMENT METHODS') ?></h4>
        </div>
        <div class="col-sm-6">
            <p>We accept the following automatic payment methods:
                <noindex>
                    <a rel="nofollow" target="_blank" href="http://www.webmoney.ru/">WebMoney</a>,
                    <a rel="nofollow" target="_blank" href="https://www.paypal.com/nl/webapps/mpp/home">PayPal</a>,
                    <a rel="nofollow" target="_blank" href="http://epayservices.com/">ePayService</a>,
                    <a rel="nofollow" target="_blank" href="http://ecoin.cc/">eCoin</a>,
                    <a rel="nofollow" href="https://www.paxum.com/payment/index.php?view=views/index.xsl">Paxum</a>,
                    <a rel="nofollow" target="_blank" href="https://www.interkassa.com/">InterKassa</a>
                </noindex>
                as well as PayPal payments from your Visa and MasterCard.
            </p>
        </div>
    </div>
</div>

<?= $this->render('//domain/_additional-services'); ?>
