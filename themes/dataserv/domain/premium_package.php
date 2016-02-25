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
            </div>
        </div>

    </div>
</div>
<!-- END OF PRICE BOXES -->

<div class="shared-table">
    <div class="difference">
        <div class="row spacing-25">

            <div class="col-md-9 col-sm-12 center-block">
                <div class="centered">
                    <p></p><p><b>Domain</b> – an alphanumeric name that uniquely identifies a particular website.</p>
                    <p><b>DNS</b> – a network service that provides information about domains. Each computer connected to the Internet has a unique IP-address, made up of many numbers that are difficult to memorize. A Domain Name System (DNS) allows you to replace the numbers with a description of your choice, making it easier to find the correct one.</p>
                    <p><b>А</b> – a record that binds the hostname to an IP-address where the resource is located.</p>
                    <p><b>АААА</b> – a similar record that uses the address of the new Pv6 standard.</p>
                    <p><b>CNAME</b> – the canonical name or "alias" that is used to redirect requests from one domain name to another.</p>
                    <p><b>MX</b> – a record that points to the IP-address of the mail server of a domain.</p>
                    <p><b>NS</b> – indicates the IP-address of the DNS-server for this domain.</p>
                    <p><b>TXT</b> – indicates the IP-address that is used by the DNS-server of a domain.</p>
                    <p><b>SOA</b> – a parameter that specifies which server stores the reference entry for your domain, stores the contact information and the caching information about the DNS-server interaction.</p><p></p>

                </div>
            </div>

            <div class="col-md-9 col-sm-12 center-block md-mt-50">
                <h3 class="text-center">Terms of Use for "Premium Package".</h3>
                <div class="newplans_box"></div>
                <p class="text-center">
                    Please note that if you have previously activated the "Premium Package", but do not want to pay for this feature, all previously made settings for domains will remain and will continue to function normally, but you will not be able to change or delete records.
                </p>
            </div>
        </div>
    </div>
</div>

<?= $this->render('_domainFooter'); ?>