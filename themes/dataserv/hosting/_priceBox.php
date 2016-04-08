<?php
use yii\helpers\Html;

/**
 * @var \app\models\hosting\Package[] $packages
 */
?>

<div class="pricingbox vps-comparison">
    <div class="row spacing-25">
        <div class="col-sm-12">
            <table class="products-table responsive">
                <thead>
                <tr>
                    <th></th>
                    <?php foreach ($packages as $package) {
                        echo Html::tag('th', $package->name);
                    } ?>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <?php
                    echo Html::tag('td', $packages[0]->getResourceTitle('cpu'));

                    foreach ($packages as $package) {
                        echo Html::tag('td', Yii::t('app', '{0, plural, one{# core} other{# cores}}',
                            [$package->getResourceValue('cpu')]));
                    } ?>
                </tr>
                <tr>
                    <?php
                    echo Html::tag('td', $packages[0]->getResourceTitle('ram'));

                    foreach ($packages as $package) {
                        echo Html::tag('td', Yii::t('yii', '{nFormatted} GB', ['nFormatted' => $package->getResourceValue('ram')]));
                    } ?>
                </tr>
                <tr>
                    <?php
                    echo Html::tag('td', $packages[0]->getResourceTitle('hdd'));

                    foreach ($packages as $package) {
                        echo Html::tag('td', Yii::t('yii', '{nFormatted} GB', ['nFormatted' => $package->getResourceValue('hdd')]));
                    } ?>
                </tr>

                <tr>
                    <?php
                    echo Html::tag('td', $packages[0]->getResourceTitle('ip'));

                    foreach ($packages as $package) {
                        echo Html::tag('td', $package->getResourceValue('ip'));
                    } ?>
                </tr>
                <tr>
                    <?php
                    echo Html::tag('td', $packages[0]->getResourceTitle('support_time'));

                    foreach ($packages as $package) {
                        echo Html::tag('td', $package->getResourceValue('support_time'));
                    } ?>
                </tr>
                <tr>
                    <?php
                    echo Html::tag('td', $packages[0]->getResourceTitle('ip'));

                    foreach ($packages as $package) {
                        echo Html::tag('td', $package->getResourceValue('ip'));
                    } ?>
                </tr>

                <tr>
                    <?php
                    echo Html::tag('td', $packages[0]->getResourceTitle('traffic'));

                    foreach ($packages as $package) {
                        echo Html::tag('td', Yii::t('yii', '{nFormatted} GB', ['nFormatted' => $package->getResourceValue('traffic')]));
                    } ?>
                </tr>

                <tr>
                    <?php
                    echo Html::tag('td', $packages[0]->getResourceTitle('speed'));

                    foreach ($packages as $package) {
                        echo Html::tag('td', Yii::t('yii', '{n} Gbit/s', ['n' => $package->getResourceValue('speed')]));
                    } ?>
                </tr>

                <tr>
                    <?php
                    echo Html::tag('td', $packages[0]->getResourceTitle('panel'));

                    foreach ($packages as $package) {
                        echo Html::tag('td', Yii::t('yii', '{n} Gbit/s', ['n' => $package->getResourceValue('speed')]));
                    } ?>
                </tr>
                <tr>
                    <?php
                    echo Html::tag('td', $packages[0]->getResourceTitle('purpose'));

                    foreach ($packages as $package) {
                        echo Html::tag('td', $package->getResourceValue('purpose'));
                    } ?>
                </tr>

                <tr class="price-comparison">
                    <td>Price per Month</td>
                    <?php foreach ($packages as $package) {
                        echo Html::tag('td', Yii::t('app', '{price}/mo', ['price' => Yii::$app->formatter->asCurrency($package->getPrice())]));
                    } ?>
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
