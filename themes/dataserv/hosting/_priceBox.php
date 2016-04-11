<?php
use yii\helpers\Html;

/**
 * @var \app\models\hosting\Package[] $packages
 */
?>

<div class="pricingbox vps-comparison">
    <div class="row spacing-25">
        <div class="col-sm-12">
            <table class="products-table responsive tablesaw tablesaw-stack" data-tablesaw-mode="stack">
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
                        echo Html::tag('td', $package->getResourceValue('cpu'));
                    } ?>
                </tr>
                <tr>
                    <?php
                    $title = $packages[0]->getResourceTitle('ram');
                    $overuse = Html::tag('span', Yii::t('app', 'Additionally {price}/{unit}', $packages[0]->getOverusePrice('ram')));
                    echo Html::tag('td', $title . $overuse);

                    foreach ($packages as $package) {
                        echo Html::tag('td', $package->getResourceValue('ram'));
                    } ?>
                </tr>
                <tr>
                    <?php
                    $title = $packages[0]->getResourceTitle('hdd');
                    $overuse = Html::tag('span', Yii::t('app', 'Additionally {price}/{unit}', $packages[0]->getOverusePrice('hdd')));
                    echo Html::tag('td', $title . $overuse);


                    foreach ($packages as $package) {
                        echo Html::tag('td', $package->getResourceValue('hdd'));
                    } ?>
                </tr>

                <tr>
                    <?php
                    $title = $packages[0]->getResourceTitle('ip');
                    $overuse = Html::tag('span', Yii::t('app', 'Additionally {price}/{unit}', $packages[0]->getOverusePrice('ip')));
                    echo Html::tag('td', $title . $overuse);

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
                    $title = $packages[0]->getResourceTitle('traffic');
                    $overuse = Html::tag('span', Yii::t('app', 'Additionally {price}/{unit}', $packages[0]->getOverusePrice('traffic')));
                    echo Html::tag('td', $title . $overuse);

                    foreach ($packages as $package) {
                        echo Html::tag('td', $package->getResourceValue('traffic'));
                    } ?>
                </tr>

                <tr>
                    <?php
                    echo Html::tag('td', $packages[0]->getResourceTitle('speed'));

                    foreach ($packages as $package) {
                        echo Html::tag('td', $package->getResourceValue('speed'));
                    } ?>
                </tr>

                <tr>
                    <?php
                    echo Html::tag('td', $packages[0]->getResourceTitle('panel'));

                    foreach ($packages as $package) {
                        echo Html::tag('td', $package->getResourceValue('panel'));
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
                        echo Html::tag('td', Yii::t('app', '{price}/mo', ['price' => Yii::$app->formatter->asCurrency($package->getPrice(), Yii::$app->params['currency'])]));
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
