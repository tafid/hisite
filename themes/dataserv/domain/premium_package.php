<?php
$this->title = Yii::t('app', 'Premium package');
$this->blocks['subHeaderClass'] = 'dedicated-servers';
?>

<!-- PRICE BOXES -->
<div class="pricingbox servers">
    <div class="row">
        <div class="col-sm-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
            <h3>Management packages</h3>
            <div class="titleborder dark centered">
                <div class="titleborder_left"></div>
                <div class="titleborder_sign"></div>
                <div class="titleborder_right"></div>
            </div>
            <p>Premium Package is an advanced set of functions for your domain. You can purchase and set this feature from the control panel.</p>
        </div>
    </div>

    <div class="row spacing-25">

        <div class="col-sm-4 col-sm-offset-2">
            <div class="pricing-plan absidian wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                <div class="pricing-title">BASIC PACKAGE</div>
                <div class="pricing-price">$0<span>/year</span></div>
                <div class="pricing-features">
                    <ul>
                        <li><span class="pull-right"><i class="fa fa-check text-success"></i></span><?= Yii::t('app', '3 DNS-servers located in different European and US data-centers') ?></li>
                        <li><span class="pull-right"><i class="fa fa-check text-success"></i></span><?= Yii::t('app', 'Types of records available for editing: A, AAAA, MX, CNAME, TXT, NS') ?></li>
                        <li><span class="pull-right"><i class="fa fa-check text-success"></i></span><?= Yii::t('app', 'Preinstalled settings for Google Apps') ?></li>
                        <li><span class="pull-right"><i class="fa fa-check text-success"></i></span><?= Yii::t('app', 'Domain auto renewal option') ?></li>
                        <li><span class="pull-right"><i class="fa fa-check text-success"></i></span><?= Yii::t('app', 'Working with subdomains') ?></li>
                        <li><span class="pull-right"><span class="text-danger">5</span></span><?= Yii::t('app', 'The total number of A and CName records') ?></li>
                        <li><span class="pull-right"><i class="fa fa-times text-danger"></i></span><?= Yii::t('app', 'URL and E-mail forwarding') ?></li>
                        <li><span class="pull-right"><i class="fa fa-times text-danger"></i></span><?= Yii::t('app', 'Editing of SOA record') ?></li>
                        <li><span class="pull-right"><i class="fa fa-times text-danger"></i></span><?= Yii::t('app', 'Editing of TTL values') ?></li>
                        <li><span class="pull-right"><i class="fa fa-times text-danger"></i></span><?= Yii::t('app', 'Domain parking') ?></li>
                    </ul>
                </div>
                <div class="text-center"><a class="mtr-btn button-raised ripple" href="javascript:void(0)">ORDER NOW</a></div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="pricing-plan absidian wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="pricing-title">PREMIUM PACKAGE</div>
                <div class="pricing-price">$0.95<span>/year</span></div>
                <div class="pricing-features">
                    <ul>
                        <li><span class="pull-right"><i class="fa fa-check text-success"></i></span><?= Yii::t('app', '3 DNS-servers located in different European and US data-centers') ?></li>
                        <li><span class="pull-right"><i class="fa fa-check text-success"></i></span><?= Yii::t('app', 'Types of records available for editing: A, AAAA, MX, CNAME, TXT, NS') ?></li>
                        <li><span class="pull-right"><i class="fa fa-check text-success"></i></span><?= Yii::t('app', 'Preinstalled settings for Google Apps') ?></li>
                        <li><span class="pull-right"><i class="fa fa-check text-success"></i></span><?= Yii::t('app', 'Domain auto renewal option') ?></li>
                        <li><span class="pull-right"><i class="fa fa-check text-success"></i></span><?= Yii::t('app', 'Working with subdomains') ?></li>
                        <li><span class="pull-right"><span class="text-success">1000</span></span><?= Yii::t('app', 'The total number of A and CName records') ?></li>
                        <li><span class="pull-right"><i class="fa fa-check text-success"></i></span><?= Yii::t('app', 'URL and E-mail forwarding') ?></li>
                        <li><span class="pull-right"><i class="fa fa-check text-success"></i></span><?= Yii::t('app', 'Editing of SOA record') ?></li>
                        <li><span class="pull-right"><i class="fa fa-check text-success"></i></span><?= Yii::t('app', 'Editing of TTL values') ?></li>
                        <li><span class="pull-right"><i class="fa fa-check text-success"></i></span><?= Yii::t('app', 'Domain parking') ?></li>
                    </ul>
                </div>
                <div class="text-center"><a class="mtr-btn button-raised ripple" href="javascript:void(0)">ORDER NOW</a></div>
            </div>
        </div>

    </div>
</div>
<!-- END OF PRICE BOXES -->
