<?php
use yii\helpers\Html;

$this->title = Yii::t('app', 'XEN SSD');
$this->blocks['subTitle'] = Yii::t('app', 'Hosting by AHnames is an optimal and reliable solution for any project at affordable price');
?>

<!-- TEXT -->
<div class="vps-text">
    <div class="row">
        <div class="col-md-3 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="h1-name-xen">XenSSD</div>
        </div>
        <div class="col-md-9 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="200ms">
            <p>
                <?= Yii::t('app', 'The main advantage of a VDS based on {0} is speed. It is more than 250 times faster than a conventional HDD. Due to Xen virtualization type, all resources are assigned to user and the operation of your {1} does not depend on the main server\'s load.', ['<a href="/en/vds?tab=4">Xen with SSD</a>', '<a href="/en/vds?tab=4">VDS</a>']) ?>
            </p>
            <p>
                <?= Yii::t('app', 'Virtual dedicated server based on Xen is a perfect solution for most medium and large projects because of its performance that is highly competitive with the performance of a dedicated server.') ?>
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
                <div class="pricing-title"><?= Yii::t('app', 'Start SSD') ?></div>
                <div class="pricing-price">$9.95<span>/m</span></div>
                <div class="pricing-features">
                    <ul>
                        <li>1 <?= Yii::t('app', 'core CPU') ?></li>
                        <li>1024 MB <?= Yii::t('app', 'RAM') ?></li>
                        <li>20 GB SDD</li>
                        <li>1 <?= Yii::t('app', 'dedicated IP Address') ?></li>
                        <li><?= Html::a(Yii::t('app', '24x7 Support'), '#') ?> <?= Html::a(Yii::t('app', 'Bronze'), '#') ?></li>
                        <li>1000 GB <?= Yii::t('app', 'Traffic') ?></li>
                        <li>1 Gb/s <?= Yii::t('app', 'Connection Port') ?></li>
                        <li style="font-size: small"><?= Yii::t('app', 'No panel') ?> / <?= Html::a('AHnames panel', '#') ?></li>
                        <li style="font-size: smaller"><?= Yii::t('app', 'For small projects: personal blogs, online business cards.') ?></li>
                    </ul>
                </div>
                <div class="text-center"><a class="mtr-btn button-raised ripple" href="javascript:void(0)"><?= Yii::t('app', 'ORDER NOW') ?></a></div>
            </div>
        </div>

        <div class="col-md-15 col-sm-3">
            <div class="pricing-plan purple wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
                <div class="pricing-title"><?= Yii::t('app', 'Popular SSD') ?></div>
                <div class="pricing-price">$19.95<span>/m</span></div>
                <div class="pricing-features">
                    <ul>
                        <li>2 <?= Yii::t('app', 'core CPU') ?></li>
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
                <div class="pricing-title"><?= Yii::t('app', 'Pro SSD') ?></div>
                <div class="pricing-price">$34.95<span>/m</span></div>
                <div class="pricing-features">
                    <ul>
                        <li>2 <?= Yii::t('app', 'core CPU') ?></li>
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
                <div class="pricing-title"><?= Yii::t('app', 'Advance SSD') ?></div>
                <div class="pricing-price">$54.95<span>/m</span></div>
                <div class="pricing-features">
                    <ul>
                        <li>4 <?= Yii::t('app', 'core CPU') ?></li>
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
                <div class="pricing-title"><?= Yii::t('app', 'Elite SSD') ?></div>
                <div class="pricing-price">$84.95<span>/m</span></div>
                <div class="pricing-features">
                    <ul>
                        <li>6 <?= Yii::t('app', 'core CPU') ?></li>
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