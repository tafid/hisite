<!-- PRICE BOXES -->
<div class="pricingbox no-image-bg">
    <div class="row">
        <div class="col-sm-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
            <h3><?= Yii::t('app', 'PROMOTIONAL OFFERS')?></h3>
            <div class="titleborder dark centered">
                <div class="titleborder_left"></div>
                <div class="titleborder_sign"></div>
                <div class="titleborder_right"></div>
            </div>
            <p></p>
        </div>
    </div>

    <div class="row spacing-25">

        <div class="col-sm-4 col-sm-offset-2">
            <div class="pricing-plan red wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
                <div class="pricing-title"><?= Yii::t('app', 'Premium package') ?></div>
                <div class="pricing-price">$0.95<span>/year</span></div>
                <div class="pricing-features">
                    <ul>
                        <li><?= Yii::t('app', '3 independent DNS servers in the Netherlands and United States') ?></li>
                        <li><?= Yii::t('app', 'operation with different types of records: A, AAAA, MX, CNAME, TXT, NS') ?></li>
                        <li><?= Yii::t('app', 'opportunity to work with subdomains') ?></li>
                        <li><?= Yii::t('app', 'presets for google apps') ?></li>
                    </ul>
                </div>
                <div class="text-center"><a class="mtr-btn button-raised ripple" href="javascript:void(0)"><?= Yii::t('app', 'More details') ?></a></div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="pricing-plan purple wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                <div class="pricing-title"><?= Yii::t('app', 'Whois Protect free') ?></div>
                <div class="pricing-price">$0<span>/year</span></div>
                <div class="pricing-features">
                    <ul>
                        <li><?= Yii::t('app', 'personal data protection against spam, information gathering, direct calls') ?></li>
                        <li><?= Yii::t('app', 'function of email forwarding') ?></li>
                    </ul>
                </div>
                <div class="text-center"><a class="mtr-btn button-raised ripple" href="javascript:void(0)"><?= Yii::t('app', 'More details') ?></a></div>
            </div>
        </div>

    </div>
</div>
<!-- END OF PRICE BOXES -->