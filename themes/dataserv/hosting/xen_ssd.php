<?php
use yii\helpers\Html;

$this->title = Yii::t('app', 'XEN SSD');
$this->blocks['subTitle'] = Yii::t('app', 'Hosting by AHnames is an optimal and reliable solution for any project at affordable price');
$this->registerCss(".products-table { display: table; }");
?>

<!-- TEXT -->
<div class="vps-text">
    <div class="row">
        <div class="col-md-3 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="h1-name-xen">XenSSD</div>
        </div>
        <div class="col-md-9 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="200ms">
            <p>
                <?= Yii::t('app', 'The main advantage of a VDS based on {0} is speed. It is more than 250 times faster than a conventional HDD. Due to Xen virtualization type, all resources are assigned to user and the operation of your {1} does not depend on the main server\'s load.', [
                    Html::a(Yii::t('app', 'XEN with SSD'), ['/hosting/what-is-vds']),
                    Html::a(Yii::t('app', 'VDS'), ['/hosting/what-is-vds']),
                ]) ?>
            </p>
            <p>
                <?= Yii::t('app', 'Virtual dedicated server based on Xen is a perfect solution for most medium and large projects because of its performance that is highly competitive with the performance of a dedicated server.') ?>
            </p>
        </div>
    </div>
</div>
<!-- END OF TEXT -->

<?= $this->render('_priceBox', compact('packages', 'tariffTypes', 'testVDSPurchased')); ?>

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
