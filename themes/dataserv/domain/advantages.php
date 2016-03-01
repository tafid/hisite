<?php
$this->title = Yii::t('app', 'Advantages');
$this->blocks['subTitle'] = Yii::t('app', 'Domains search and registration');
?>

<div class="vps-features-tabs">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="wow fadeInLeft" data-wow-duration="600ms" data-wow-delay="150ms"><?= Yii::t('app', 'Domains register terms of use') ?></h2>
            <div class="titleborder centered">
                <div class="titleborder_left"></div>
                <div class="titleborder_sign"></div>
                <div class="titleborder_right"></div>
            </div>
        </div>

        <div class="col-sm-12">
            <ul class="long-dash-list">
                <li><?= Yii::t('app', 'the generally established length for a domain name is 63 symbols;')?></li>
                <li><?= Yii::t('app', 'the minimum length of a domain name is 3 simbols (for .com, .net, .org. minimum length is 2 symbols);')?></li>
                <li><?= Yii::t('app', 'domain name may not begin or end with «-»;')?></li>
                <li><?= Yii::t('app', 'the minimum registration period for a domain name is 1 year. maximum registration period is 2 years;')?></li>
                <li><?= Yii::t('app', 'each domain name gets a whois protection service for free during registration;')?></li>
                <li><?= Yii::t('app', 'a domain name may be registered using only your personal information;')?></li>
            </ul>
        </div>
    </div>
</div>

<?= $this->render('_domainFooter'); ?>