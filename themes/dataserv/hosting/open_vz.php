<?php
use yii\helpers\Html;

$this->title = Yii::t('app', 'OpenVz');
$this->blocks['subTitle'] = Yii::t('app', 'Hosting by AHnames is an optimal and reliable solution for any project at affordable price');
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

    <div class="row spacing-25 equal">
        <div class="col-md-15 col-sm-3">
            <div class="pricing-plan purple wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
                <div class="pricing-title"><?= Yii::t('app', 'OpenVZ Standart') ?></div>
                <div class="pricing-price">$6.95<span>/m</span></div>
                <div class="pricing-features">
                    <ul>
                        <li>2400 MHz <?= Yii::t('app', 'CPU') ?></li>
                        <li>1024 MB <?= Yii::t('app', 'RAM') ?></li>
                        <li>20 GB SDD</li>
                        <li>1 <?= Yii::t('app', 'dedicated IP Address') ?></li>
                        <li><?= Html::a(Yii::t('app', '24x7 Support'), '#') ?> <?= Html::a(Yii::t('app', 'Bronze'), '#') ?></li>
                        <li>1000 GB <?= Yii::t('app', 'Traffic') ?></li>
                        <li>1 Gb/s <?= Yii::t('app', 'Connection Port') ?></li>
                        <li style="font-size: small"><?= Yii::t('app', 'No panel') ?> / <?= Html::a('AHnames panel', '#') ?></li>
                        <li style="font-size: smaller"><?= Yii::t('app', 'For landing pages and personal blogs.') ?></li>
                    </ul>
                </div>
                <div class="text-center"><a class="mtr-btn button-raised ripple" href="javascript:void(0)"><?= Yii::t('app', 'ORDER NOW') ?></a></div>
            </div>
        </div>

        <div class="col-md-15 col-sm-3">
            <div class="pricing-plan purple wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
                <div class="pricing-title"><?= Yii::t('app', 'OpenVZ Superior') ?></div>
                <div class="pricing-price">$10.00<span>/m</span></div>
                <div class="pricing-features">
                    <ul>
                        <li>3600 MHz <?= Yii::t('app', 'CPU') ?></li>
                        <li>2048 MB <?= Yii::t('app', 'RAM') ?></li>
                        <li>30 GB SDD</li>
                        <li>1 <?= Yii::t('app', 'Dedicated IP Address') ?></li>
                        <li><?= Html::a(Yii::t('app', '24x7 Support'), '#') ?> <?= Html::a(Yii::t('app', 'Bronze'), '#') ?></li>
                        <li>2000 GB <?= Yii::t('app', 'Traffic') ?></li>
                        <li>1 Gb/s <?= Yii::t('app', 'Connection Port') ?></li>
                        <li style="font-size: small"><?= Yii::t('app', 'No panel') ?> / <?= Html::a('AHnames panel', '#') ?></li>
                        <li style="font-size: smaller"><?= Yii::t('app', 'For most online stores and on-line projects of moderate complexity.') ?></li>
                    </ul>
                </div>
                <div class="text-center"><a class="mtr-btn button-raised ripple" href="javascript:void(0)"><?= Yii::t('app', 'ORDER NOW') ?></a></div>
            </div>
        </div>

        <div class="col-md-15 col-sm-3">
            <div class="pricing-plan purple wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
                <div class="pricing-title"><?= Yii::t('app', 'OpenVZ Extra') ?></div>
                <div class="pricing-price">$15.00<span>/m</span></div>
                <div class="pricing-features">
                    <ul>
                        <li>4800 MHz <?= Yii::t('app', 'CPU') ?></li>
                        <li>3072 MB <?= Yii::t('app', 'RAM') ?></li>
                        <li>50 GB SDD</li>
                        <li>1 <?= Yii::t('app', 'Dedicated IP Address') ?></li>
                        <li><?= Html::a(Yii::t('app', '24x7 Support'), '#') ?> <?= Html::a(Yii::t('app', 'Silver'), '#') ?></li>
                        <li>3000 GB <?= Yii::t('app', 'Traffic') ?></li>
                        <li>1 Gb/s <?= Yii::t('app', 'Connection Port') ?></li>
                        <li style="font-size: small"><?= Yii::t('app', 'No panel') ?> / <?= Html::a('AHnames panel', '#') ?> / ISPManager</li>
                        <li style="font-size: smaller"><?= Yii::t('app', 'For complex projects that require significant resources and administration.') ?></li>
                    </ul>
                </div>
                <div class="text-center"><a class="mtr-btn button-raised ripple" href="javascript:void(0)"><?= Yii::t('app', 'ORDER NOW') ?></a></div>
            </div>
        </div>

        <div class="col-md-15 col-sm-3">
            <div class="pricing-plan purple wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
                <div class="pricing-title"><?= Yii::t('app', 'OpenVZ Ultra') ?></div>
                <div class="pricing-price">$25.00<span>/m</span></div>
                <div class="pricing-features">
                    <ul>
                        <li>9600 MHz <?= Yii::t('app', 'CPU') ?></li>
                        <li>4096 MB <?= Yii::t('app', 'RAM') ?></li>
                        <li>60 GB SDD</li>
                        <li>2 <?= Yii::t('app', 'Dedicated IP Address') ?></li>
                        <li><?= Html::a(Yii::t('app', '24x7 Support'), '#') ?> <?= Html::a(Yii::t('app', 'Gold'), '#') ?></li>
                        <li>5000 GB <?= Yii::t('app', 'Traffic') ?></li>
                        <li>1 Gb/s <?= Yii::t('app', 'Connection Port') ?></li>
                        <li style="font-size: small"><?= Yii::t('app', 'No panel') ?> / <?= Html::a('AHnames panel', '#') ?> / ISPManager</li>
                        <li style="font-size: smaller"><?= Yii::t('app', 'For resource intensive websites and high performance scripts.') ?></li>
                    </ul>
                </div>
                <div class="text-center"><a class="mtr-btn button-raised ripple" href="javascript:void(0)"><?= Yii::t('app', 'ORDER NOW') ?></a></div>
            </div>
        </div>

        <div class="col-md-15 col-sm-3">
            <div class="pricing-plan purple wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
                <div class="pricing-title"><?= Yii::t('app', 'OpenVZ Mega') ?></div>
                <div class="pricing-price">$35.00<span>/m</span></div>
                <div class="pricing-features">
                    <ul>
                        <li>12000 MHZ <?= Yii::t('app', 'CPU') ?></li>
                        <li>8192 MB <?= Yii::t('app', 'RAM') ?></li>
                        <li>80 GB SDD</li>
                        <li>2 <?= Yii::t('app', 'Dedicated IP Address') ?></li>
                        <li><?= Html::a(Yii::t('app', '24x7 Support'), '#') ?> <?= Html::a(Yii::t('app', 'Platinum'), '#') ?></li>
                        <li>7000 GB <?= Yii::t('app', 'Traffic') ?></li>
                        <li>1 Gb/s <?= Yii::t('app', 'Connection Port') ?></li>
                        <li style="font-size: small"><?= Yii::t('app', 'No panel') ?> / <?= Html::a('AHnames panel', '#') ?> / ISPManager</li>
                        <li style="font-size: smaller"><?= Yii::t('app', 'For resource-intensive projects. A reliable alternative to a dedicated server.') ?></li>
                    </ul>
                </div>
                <div class="text-center"><a class="mtr-btn button-raised ripple" href="javascript:void(0)"><?= Yii::t('app', 'ORDER NOW') ?></a></div>
            </div>
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
