<?php

use yii\helpers\Html;

$this->title = Yii::t('app', 'Prices');
$this->blocks['subTitle'] = Yii::t('app', 'Domains reselling with AHnames is a great choice, if you want to run your own domain registration service');
$this->registerCss("
.gold-table, .platinum-table {
    display: none;
}
");
$this->registerJs(<<<JS
// ______________  PRICE SWITCH
$(".price-per-period .silver").click(function() {
    $(".silver-table").fadeIn(500);
    $(".gold-table").hide();
    $(".platinum-table").hide();
    $(".price-per-period .silver").addClass("btn-shared-checked");
    $(".price-per-period .silver").removeClass("btn-default");
    $(".price-per-period .gold").removeClass("btn-shared-checked");
    $(".price-per-period .gold").addClass("btn-default");
    $(".price-per-period .platinum").removeClass("btn-shared-checked");
    $(".price-per-period .platinum").addClass("btn-default");
});

$(".price-per-period .gold").click(function() {
    $(".silver-table").hide();
    $(".gold-table").fadeIn(500);
    $(".platinum-table").hide();
    $(".price-per-period .silver").removeClass("btn-shared-checked");
    $(".price-per-period .silver").addClass("btn-default");
    $(".price-per-period .gold").addClass("btn-shared-checked");
    $(".price-per-period .gold").removeClass("btn-default");
    $(".price-per-period .platinum").removeClass("btn-shared-checked");
    $(".price-per-period .platinum").addClass("btn-default");
});

$(".price-per-period .platinum").click(function() {
    $(".silver-table").hide();
    $(".gold-table").hide();
    $(".platinum-table").fadeIn(500);
    $(".price-per-period .silver").removeClass("btn-shared-checked");
    $(".price-per-period .silver").addClass("btn-default");
    $(".price-per-period .gold").addClass("btn-default");
    $(".price-per-period .gold").removeClass("btn-shared-checked");
    $(".price-per-period .platinum").removeClass("btn-default");
    $(".price-per-period .platinum").addClass("btn-shared-checked");
});
JS
    , \yii\web\View::POS_LOAD);
?>

<!-- PRICE BOXES -->
<div class="pricingbox shared">

    <div class="row">
        <div class="col-sm-12">
            <span class="chooseprice"><?= Yii::t('app', 'Choose your tariff') ?></span>
            <div class="price-per-period">
                <button type="button" class="btn btn-shared-checked ripple silver"><?= Yii::t('app', 'Silver') ?><br><?= Yii::t('app', '(up to 100 domains)') ?></button>
                <button type="button" class="btn btn-default ripple gold"><?= Yii::t('app', 'Gold') ?><br><?= Yii::t('app', '(more than 100 domains)') ?></button>
                <button type="button" class="btn btn-default ripple platinum"><?= Yii::t('app', 'Platinum') ?><br><?= Yii::t('app', '(more than 1000 domains)') ?></button>
            </div>
        </div>
    </div>

    <div class="row spacing-75">
        <div class="col-md-12 silver-table">
            <table id="tld-table" class="tablesaw" data-tablesaw-mode="stack" data-wow-duration="1000ms" data-wow-delay="250ms" >
                <thead>
                <tr>
                    <th>TLD</th>
                    <th>REGISTRATION</th>
                    <th>RENEWAL</th>
                    <th>TRANSFER</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>COM</td>
                    <td>$12</td>
                    <td>$12</td>
                    <td>$12</td>
                </tr>
                <tr>
                    <td>NET</td>
                    <td>$13</td>
                    <td>$13</td>
                    <td>$13</td>
                </tr>
                <tr>
                    <td>ORG</td>
                    <td>$14</td>
                    <td>$14</td>
                    <td>$14</td>
                </tr>
                <tr>
                    <td>BIZ</td>
                    <td>$15</td>
                    <td>$15</td>
                    <td>$15</td>
                </tr>
                <tr>
                    <td>AERO</td>
                    <td>$22</td>
                    <td>$22</td>
                    <td>$22</td>
                </tr>
                <tr>
                    <td>AC</td>
                    <td>$32</td>
                    <td>$32</td>
                    <td>$32</td>
                </tr>
                <tr>
                    <td>IO</td>
                    <td>$42</td>
                    <td>$42</td>
                    <td>$42</td>
                </tr>
                <tr>
                    <td>CLUB</td>
                    <td>$18</td>
                    <td>$18</td>
                    <td>$18</td>
                </tr>
                <tr>
                    <td>IS</td>
                    <td>$52</td>
                    <td>$52</td>
                    <td>$52</td>
                </tr>
                <tr>
                    <td>US</td>
                    <td>$9</td>
                    <td>$9</td>
                    <td>$9</td>
                </tr>
                <tr>
                    <td>EDU</td>
                    <td>$12</td>
                    <td>$12</td>
                    <td>$12</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-12 gold-table">
            <table id="tld-table" class="tablesaw" data-tablesaw-mode="stack" data-wow-duration="1000ms" data-wow-delay="250ms" >
                <thead>
                <tr>
                    <th>TLD</th>
                    <th>REGISTRATION</th>
                    <th>RENEWAL</th>
                    <th>TRANSFER</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>COM</td>
                    <td>$12</td>
                    <td>$12</td>
                    <td>$12</td>
                </tr>
                <tr>
                    <td>NET</td>
                    <td>$13</td>
                    <td>$13</td>
                    <td>$13</td>
                </tr>
                <tr>
                    <td>ORG</td>
                    <td>$14</td>
                    <td>$14</td>
                    <td>$14</td>
                </tr>
                <tr>
                    <td>BIZ</td>
                    <td>$15</td>
                    <td>$15</td>
                    <td>$15</td>
                </tr>
                <tr>
                    <td>AERO</td>
                    <td>$22</td>
                    <td>$22</td>
                    <td>$22</td>
                </tr>
                <tr>
                    <td>AC</td>
                    <td>$32</td>
                    <td>$32</td>
                    <td>$32</td>
                </tr>
                <tr>
                    <td>IO</td>
                    <td>$42</td>
                    <td>$42</td>
                    <td>$42</td>
                </tr>
                <tr>
                    <td>CLUB</td>
                    <td>$18</td>
                    <td>$18</td>
                    <td>$18</td>
                </tr>
                <tr>
                    <td>IS</td>
                    <td>$52</td>
                    <td>$52</td>
                    <td>$52</td>
                </tr>
                <tr>
                    <td>US</td>
                    <td>$9</td>
                    <td>$9</td>
                    <td>$9</td>
                </tr>
                <tr>
                    <td>EDU</td>
                    <td>$12</td>
                    <td>$12</td>
                    <td>$12</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-12 platinum-table">
            <table id="tld-table" class="tablesaw" data-tablesaw-mode="stack" data-wow-duration="1000ms" data-wow-delay="250ms" >
                <thead>
                <tr>
                    <th>TLD</th>
                    <th>REGISTRATION</th>
                    <th>RENEWAL</th>
                    <th>TRANSFER</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>COM</td>
                    <td>$12</td>
                    <td>$12</td>
                    <td>$12</td>
                </tr>
                <tr>
                    <td>NET</td>
                    <td>$13</td>
                    <td>$13</td>
                    <td>$13</td>
                </tr>
                <tr>
                    <td>ORG</td>
                    <td>$14</td>
                    <td>$14</td>
                    <td>$14</td>
                </tr>
                <tr>
                    <td>BIZ</td>
                    <td>$15</td>
                    <td>$15</td>
                    <td>$15</td>
                </tr>
                <tr>
                    <td>AERO</td>
                    <td>$22</td>
                    <td>$22</td>
                    <td>$22</td>
                </tr>
                <tr>
                    <td>AC</td>
                    <td>$32</td>
                    <td>$32</td>
                    <td>$32</td>
                </tr>
                <tr>
                    <td>IO</td>
                    <td>$42</td>
                    <td>$42</td>
                    <td>$42</td>
                </tr>
                <tr>
                    <td>CLUB</td>
                    <td>$18</td>
                    <td>$18</td>
                    <td>$18</td>
                </tr>
                <tr>
                    <td>IS</td>
                    <td>$52</td>
                    <td>$52</td>
                    <td>$52</td>
                </tr>
                <tr>
                    <td>US</td>
                    <td>$9</td>
                    <td>$9</td>
                    <td>$9</td>
                </tr>
                <tr>
                    <td>EDU</td>
                    <td>$12</td>
                    <td>$12</td>
                    <td>$12</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- END OF PRICE BOXES -->

<?= $this->render('_bottomInfo') ?>