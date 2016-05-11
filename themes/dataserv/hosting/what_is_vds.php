<?php
use yii\helpers\Html;

$this->title = Yii::t('app', 'What is VDS');
$this->blocks['subTitle'] = Yii::t('hisite/hosting', 'Hosting by AHnames is an optimal and reliable solution for any project at affordable price');
?>

<!-- FEATURES -->
<div class="various">
    <div class="row">

        <!-- WHY US -->
        <div class="col-sm-12">
            <div class="why wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="200ms">
                <div class="titleborder pink">
                    <div class="titleborder_left"></div>
                    <div class="titleborder_sign"></div>
                </div>
                <p><strong><?= Yii::t('hisite/hosting', 'Virtual Dedicated Server') ?> (VDS)</strong> — <?= Yii::t('hisite/hosting', 'is a service in which user is provided with a certain amount of server resources.') ?></p>
                <p><?= Yii::t('hisite/hosting', 'Resources are allocated to form the so-called virtual machines that emulate the work of a dedicated server.') ?></p>
                <p><?= Yii::t('hisite/hosting', 'This type of hosting is the optimal solution for many tasks, especially when the price of renting a dedicated server is too high.') ?></p>
                <p>
                    <?= Yii::t('hisite/hosting', 'Renting a {0} is a reasonable solution with balanced price and possibilities — the price is significantly lower and performance is oftentimes similar to a dedicated server.', [
                        Html::tag('strong', Yii::t('hisite/hosting', 'virtual dedicated server'))
                    ])?>
                </p>
                <h5><?= Yii::t('hisite/hosting', 'We use two types of virtualization in our VDS, — OpenVZ and XEN with SSD.') ?></h5>
                <p>
                    <?= Html::a(Yii::t('hisite/hosting', 'VDS based on XEN with SSD'), ['/hosting/advantages']) ?>
                    <?= Yii::t('hisite/hosting', 'is a virtualization technology that approximates the operation of a VDS to the operation of a dedicated server.') ?>
                    <?= Yii::t('hisite/hosting', 'It provides users with dedicated resources, isolating the VDS from neighbors. This ensures reliable and stable work of the project.') ?>
                    <?= Yii::t('hisite/hosting', 'Our {0} are built using SSD arrays.', ['<em>VDS based XEN</em>']) ?>
                    <?= Yii::t('hisite/hosting', 'This allows increasing the speed of data reading/writing compared to HDD. As a result, this kind of virtualization is highly popular as it satisfies the requirements of most common web-projects with medium and high complexity.') ?>
                 </p>
                <p>
                    <?= Html::a(Yii::t('hisite/hosting', 'VDS based on OpenVZ'), ['/hosting/advantages']) ?> <?= Yii::t('hisite/hosting', 'is a software-based virtualization that distributes all server resources between users more tightly.') ?>
                    <?= Yii::t('hisite/hosting', 'The price of VDS based on OpenVZ is lower than XEN, while the speed for reading frequently requested data through the SSD cache is high.') ?>
                    <?= Yii::t('hisite/hosting', 'Combined with a well-chosen tariff plan, VDS based on OpenVZ will allow you not only to save money, but also to obtain a reliable hosting for a small project.') ?>
                </p>
                <p><?= Yii::t('hisite/hosting', 'For more information on how to choose the most suitable VDS') ?>, <?= Html::a(Yii::t('hisite/hosting', 'read here'), ['/hosting/advantages']) ?>.</p>
            </div>
        </div>
        <!-- END OF WHY US -->
    </div>
</div>
<!-- END OF FEATURES -->
