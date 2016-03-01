<?php
$this->title = Yii::t('app', 'ADVANTAGES');
$this->blocks['subTitle'] = Yii::t('app', 'Domains reselling with AHnames is a great choice, if you want to run your own domain registration service');
?>

<!-- FEATURES -->
<div class="various">
    <div class="row">
        <div class="col-sm-6">
            <div class="row wow fadeInRight" data-wow-duration="500ms" data-wow-delay="200ms">
                <div class="col-sm-3 col-md-2"><i class="fa fa-users"></i></div>
                <div class="col-sm-9 col-md-10"><h5><?= Yii::t('app', 'One of the most favorable terms of cooperation in the Internet') ?></h5>
                    <ul>
                        <li><?= Yii::t('app', 'Absence of documentation procedures') ?></li>
                        <li><?= Yii::t('app', 'Free of first contributions') ?></li>
                        <li><?= Yii::t('app', 'Discounts and bonus system') ?></li>
                    </ul>
                </div>
            </div>
            <div class="row wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                <div class="col-sm-3 col-md-2"><i class="fa fa-cubes"></i></div>
                <div class="col-sm-9 col-md-10"><h5><?= Yii::t('app', 'Easy to create and customize a resellers website') ?></h5>
                    <ul>
                        <li><?= Yii::t('app', 'Ability to create a website on your own domain') ?></li>
                        <li><?= Yii::t('app', 'Opportunity to use branding elements') ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row wow fadeInRight" data-wow-duration="500ms" data-wow-delay="400ms">
                <div class="col-sm-3 col-md-2"><i class="fa fa-money"></i></div>
                <div class="col-sm-9 col-md-10"><h5><?= Yii::t('app', 'Simple operation with billing and payment system') ?></h5>
                    <ul>
                        <li><?= Yii::t('app', 'Detailed financial report on all operations') ?></li>
                        <li><?= Yii::t('app', 'Easy system of tariffs for different types of services (domains, VDS)') ?></li>
                    </ul>
                </div>
            </div>
            <div class="row wow fadeInRight" data-wow-duration="500ms" data-wow-delay="500ms">
                <div class="col-sm-3 col-md-2"><i class="fa fa fa-credit-card-alt"></i></div>
                <div class="col-sm-9 col-md-10"><h5><?= Yii::t('app', 'A wide range of payment systems to connect') ?></h5>
                    <p><?= Yii::t('app', 'Available payment systems are: WebMoney, Yandex, Qiwi, OKPay, ePayService, eCoin, Paxum, PayPal,integrators of payment systems — Robokassa and Interkassa.') ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END OF FEATURES -->

<?= $this->render('_bottomInfo') ?>