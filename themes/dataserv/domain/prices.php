<?php
use yii\helpers\Html;

$this->title = Yii::t('app', 'Prices');
$this->blocks['subTitle'] = Yii::t('app', 'Domains search and registration');
$this->registerCss(".servers-table { display: block; }");
?>


<div class="servers-table">
    <div class="row">
        <div class="row">
            <div class="col-sm-12">

                <table id="tld-table" class="tablesaw" data-tablesaw-mode="stack">
                    <thead>
                    <tr>
                        <th><?= Yii::t('app', 'Domain sones') ?></th>
                        <th><?= Yii::t('app', 'Registration') ?></th>
                        <th><?= Yii::t('app', 'Renewal') ?></th>
                        <th><?= Yii::t('app', 'Transfer') ?></th>
                        <th><?= Yii::t('app', 'Action') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($domains)) : ?>
                        <?php foreach ($domainZones as $zone) : ?>
                            <?php $hide = false; foreach ($domains['zone:.'.$zone] as $v) if ( floatval($v['price']) == 0 ) $hide = true; ?>
                            <?php if (!$hide) : ?>
                                <tr>
                                    <td><?= Html::tag('span', $zone, ['class' => '']) ?></td>
                                    <td><b><?= Yii::$app->formatter->asCurrency($domains['zone:.' . $zone]['dregistration']['price'],'usd') ?></b> / <?= Yii::t('app', 'year') ?></td>
                                    <td><?= Yii::$app->formatter->asCurrency($domains['zone:.' . $zone]['drenewal']['price'],'usd') ?> / <?= Yii::t('app', 'year') ?></td>
                                    <td><b><?= Yii::$app->formatter->asCurrency($domains['zone:.' . $zone]['dtransfer']['price'],'usd') ?></b></td>
                                    <td>
                                        <?= Html::a(Yii::t('app', 'ORDER NOW'), '#', ['class' => 'mtr-btn button-fab ripple btn-sm has-ripple']) ?>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach ?>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- DOMAIN FEATURES -->
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


<div class="domain-features">
    <div class="row">

        <div class="col-sm-6">
            <div class="row wow fadeInRight" data-wow-duration="500ms" data-wow-delay="200ms">
                <div class="col-sm-3 col-md-2"><img src="/images/icon13.png" alt=""/></div>
                <div class="col-sm-9 col-md-10">
                    <h5><?= Yii::t('app', 'Simple domain registration, renewal and transfer') ?></h5>
                    <p>You can register a domain name in one of the following zones:<b> .COM, .NET, .ORG, .INFO,
                            .BIZ, .ME, .NAME, .CC, .XXX, .RU, .SU, .COM.UA, .KIEV.UA.</b> or <b>.TV</b></p>
                    <p>Registering a domain will only take few seconds!</p>
                </div>
            </div>

            <div class="row wow fadeInRight" data-wow-duration="500ms" data-wow-delay="250ms">
                <div class="col-sm-3 col-md-2"><img src="/images/icon14.png" alt=""/></div>
                <div class="col-sm-9 col-md-10"><h5><?= Yii::t('app', 'Affordable prices') ?></h5>
                    <p><?= Yii::t('app', 'We offer some of the lowest prices for domain registration and renewal! When ordering a transfer, you only pay for a 1-year domain renewal.') ?></p>
                </div>
            </div>
        </div>


        <div class="col-sm-6">
            <div class="row wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                <div class="col-sm-3 col-md-2"><img src="/images/icon15.png" alt=""/></div>
                <div class="col-sm-9 col-md-10"><h5><?= Yii::t('app', 'Professional customer support') ?></h5>
                    <ul class="long-dash">
                        <li>our customer support staff consists of qualified professionals;</li>
                        <li>over 10 years of experience;</li>
                        <li>thousands of clients;</li>
                        <li>individual approach;</li>
                        <li>resolving issues in a timely manner;</li>
                        <li>constant update and optimization of our services.</li>
                    </ul>
                </div>
            </div>

            <div class="row wow fadeInRight" data-wow-duration="500ms" data-wow-delay="350ms">
                <div class="col-sm-3 col-md-2"><img src="/images/icon16.png" alt=""/></div>
                <div class="col-sm-9 col-md-10"><h5><?= Yii::t('app', 'Free «Whois Protect» service') ?></h5>
                    <p><?= Yii::t('app', 'We provide free protection of your personal information.') ?></p>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- END OF DOMAIN FEATURES -->

<?= $this->render('_domainFooter'); ?>
