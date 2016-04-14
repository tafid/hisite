<?php
use yii\helpers\Html;

/**
 * @var \hipanel\modules\server\models\Package[] $packages
 */

$info = '<i class="fa fa-info-circle" aria-hidden="true" style="color: #3E65BF;"></i>'
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
                    $overuse = Html::tag('span', $info, ['class' => 'pull-right', 'data' => [
                        'trigger' => 'hover',
                        'toggle' => 'popover',
                        'content' => Yii::t('hisite/hosting', 'Additionally {price}/{unit}', $packages[0]->getOverusePrice('ram')),
                    ]]);
                    echo Html::tag('td', $title . $overuse);

                    foreach ($packages as $package) {
                        echo Html::tag('td', $package->getResourceValue('ram'));
                    } ?>
                </tr>
                <tr>
                    <?php
                    $title = $packages[0]->getResourceTitle('hdd');
                    $overuse = Html::tag('span', $info, ['class' => 'pull-right', 'data' => [
                        'trigger' => 'hover',
                        'toggle' => 'popover',
                        'content' => Yii::t('hisite/hosting', 'Additionally {price}/{unit}', $packages[0]->getOverusePrice('hdd')),
                    ]]);
                    echo Html::tag('td', $title . $overuse);


                    foreach ($packages as $package) {
                        echo Html::tag('td', $package->getResourceValue('hdd'));
                    } ?>
                </tr>

                <tr>
                    <?php
                    $title = $packages[0]->getResourceTitle('ip');
                    $overuse = Html::tag('span', $info, ['class' => 'pull-right', 'data' => [
                        'trigger' => 'hover',
                        'toggle' => 'popover',
                        'content' => Yii::t('hisite/hosting', 'Additionally {price}/{unit}', $packages[0]->getOverusePrice('ip')),
                    ]]);
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
                    $overuse = Html::tag('span', $info, ['class' => 'pull-right', 'data' => [
                        'trigger' => 'hover',
                        'toggle' => 'popover',
                        'content' => Yii::t('hisite/hosting', 'Additionally {price}/{unit}', $packages[0]->getOverusePrice('traffic')),
                    ]]);
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
                        echo Html::tag('td', $package->getResourceValue('panel'), ['style' => 'font-size: smaller;']);
                    } ?>
                </tr>
                <tr>
                    <?php
                    echo Html::tag('td', $packages[0]->getResourceTitle('purpose'));

                    foreach ($packages as $package) {
                        echo Html::tag('td', $package->getResourceValue('purpose'), ['style' => 'font-size: smaller;']);
                    } ?>
                </tr>

                <tr class="price-comparison">
                    <td>Price per Month</td>
                    <?php foreach ($packages as $package) {
                        echo Html::tag('td', $package->getDisplayPrice());
                    } ?>
                </tr>

                <tr>
                    <td></td>
                    <?php foreach ($packages as $package) {
                        $button = Html::a(Yii::t('hisite', 'ORDER NOW'), [
                            'hosting/order',
                            'id' => $package->tariff->id,
                        ], ['class' => 'mtr-btn button-fab ripple btn-sm']);
                        echo Html::tag('td', $button);
                    } ?>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
