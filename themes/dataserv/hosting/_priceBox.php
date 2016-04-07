<?php
use yii\helpers\Html;

$name = $this->context->action->controller->action->id == 'xen-ssd' ? 'XenSSD' : 'OpenVZ';
$type = $this->context->action->controller->action->id == 'xen-ssd' ? 'svds' : 'ovds';

/**
 * @var array $tariffs
 */
?>

<div class="pricingbox vps-comparison">
    <div class="row spacing-25">
        <div class="col-sm-12">
            <table class="products-table responsive">
                <?php
//                $i = 0;
//                $tariffs = array_reverse($tariffs);
//                foreach ($tariffs as $pk => $tariff) {
//                    if ($tariff['type'] != $type) {
//                        continue;
//                    }
//
//                    foreach ($tariff['resources'] as $k => &$v)
//                        $v['partno'] = trim(str_ireplace(['xen', 'openvz', 'cpu', 'ram', 'hdd', 'ssd'], '', $v['partno']));
//
//                    print $this->render('_packageLine', [
//                        'package' => $tariff,
//                        'i' => $i
//                    ]);
//
//                    $i++;
//                }
                ?>
                <thead>
                <tr>
                    <th></th>
                    <?php foreach ($tariffs as $tariff) {
                        $a = $tariff->model->name;
                        echo Html::tag('th', $tariff->model->name);
                    } ?>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>CPU</td>
                    <?php foreach ($tariffs as $tariff) : ?>

                    <?php endforeach; ?>
                </tr>

                <tr>
                    <td>RAM</td>
                    <td>1</td>
                    <td>3</td>
                    <td>6</td>
                    <td>UNLIMITED</td>
                    <td>UNLIMITED</td>
                </tr>

                <tr>
                    <td>Softaculous</td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                </tr>

                <tr>
                    <td>Unlimited FTP Accounts</td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                </tr>

                <tr>
                    <td>Free Website Migration</td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                </tr>

                <tr>
                    <td>Site Builder</td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                </tr>

                <tr>
                    <td>Free CDN</td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                </tr>

                <tr>
                    <td>Raid 10 Storage</td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                </tr>

                <tr>
                    <td>Bandwidth</td>
                    <td>100GB</td>
                    <td>300GB</td>
                    <td>600GB</td>
                    <td>800GB</td>
                    <td>800GB</td>
                </tr>

                <tr>
                    <td>Global Locations</td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                </tr>

                <tr>
                    <td>Unlimited Parked Domains</td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                </tr>

                <tr>
                    <td>24x7 Support</td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                    <td><i class="fa fa-check"></i></td>
                </tr>

                <tr class="price-comparison">
                    <td>Price per Month</td>
                    <?php foreach ($tariffs as $tariff) {
                        echo Html::tag('td', Yii::$app->formatter->asCurrency($tariff->price));
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
