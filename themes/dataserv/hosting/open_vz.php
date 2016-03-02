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

<!-- PRICE BOXES -->
<div class="pricingbox vps-comparison">

    <div class="row spacing-25">
        <div class="col-sm-12">
            <table class="products-table responsive">
                <thead>
                <tr>
                    <th></th>
                    <th>OpenVZ Standart</th>
                    <th>OpenVZ Superior</th>
                    <th>OpenVZ Extra</th>
                    <th>OpenVZ Ultra</th>
                    <th>OpenVZ Mega</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Disk Space</td>
                    <td>1GB</td>
                    <td>3GB</td>
                    <td>6GB</td>
                    <td>8GB</td>
                    <td>8GB</td>
                </tr>

                <tr>
                    <td>Hosted Domains</td>
                    <td>1</td>
                    <td>3</td>
                    <td>6</td>
                    <td>UNLIMITED</td>
                    <td>UNLIMITED</td>
                </tr>

                <tr>
                    <td>Softaculous</td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                </tr>

                <tr>
                    <td>Unlimited FTP Accounts</td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                </tr>

                <tr>
                    <td>Free Website Migration</td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                </tr>

                <tr>
                    <td>Site Builder</td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                </tr>

                <tr>
                    <td>Free CDN</td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                </tr>

                <tr>
                    <td>Raid 10 Storage</td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                </tr>

                <tr>
                    <td>Bandwidth</td>
                    <td>100GB</td>
                    <td>300GB</td>
                    <td>600GB</td>
                    <td>800GB</td>
                    <td>800GB</td>
                </tr>

                <tr>
                    <td>Global Locations</td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                </tr>

                <tr>
                    <td>Unlimited Parked Domains</td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                </tr>

                <tr>
                    <td>24x7 Support</td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                </tr>

                <tr class="price-comparison">
                    <td>Price per Month</td>
                    <td>$9.99</td>
                    <td>$14.99</td>
                    <td>$20.99</td>
                    <td>$28.99</td>
                    <td>$28.99</td>
                </tr>

                <tr class="price-comparison">
                    <td>Price per Year</td>
                    <td>$99.90</td>
                    <td>$149.90</td>
                    <td>$209.90</td>
                    <td>$289.90</td>
                    <td>$289.90</td>
                </tr>

                <tr class="price-comparison">
                    <td>Price per 2 Years</td>
                    <td>$199.80</td>
                    <td>$299.80</td>
                    <td>$419.80</td>
                    <td>$579.80</td>
                    <td>$579.80</td>
                </tr>

                <tr>
                    <td></td>
                    <td><a class="mtr-btn button-fab ripple btn-sm" href="javascript:void(0)">ORDER NOW</a></td>
                    <td><a class="mtr-btn button-fab ripple btn-sm" href="javascript:void(0)">ORDER NOW</a></td>
                    <td><a class="mtr-btn button-fab ripple btn-sm" href="javascript:void(0)">ORDER NOW</a></td>
                    <td><a class="mtr-btn button-fab ripple btn-sm" href="javascript:void(0)">ORDER NOW</a></td>
                    <td><a class="mtr-btn button-fab ripple btn-sm" href="javascript:void(0)">ORDER NOW</a></td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- END OF PRICE BOXES -->

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
