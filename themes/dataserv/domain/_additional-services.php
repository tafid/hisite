<?php
use yii\helpers\Html;

?>
<div class="domaintlds">
    <div class="row">
        <div class="block-grid-sm-3 block-grid-xs-1 domain-tlds-grid">
            <div class="block-grid-item wow zoomIn" data-wow-duration="500ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 100ms; animation-name: zoomIn;">
                <div class="tld introcolumns">
                    <div class="circle"><i class="fa fa-android"></i></div>
                    <div class="tldprice"><?= Html::a(Yii::t('app', 'Get Android App'), '#', ['class' => 'mtr-btn button-fab ripple btn-sm has-ripple']) ?></div>
                </div>
            </div>

            <div class="block-grid-item wow zoomIn" data-wow-duration="500ms" data-wow-delay="150ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 150ms; animation-name: zoomIn;">
                <div class="tld introcolumns">
                    <div class="circle"><i class="fa fa-search" aria-hidden="true"></i></div>
                    <div class="tldprice"><?= Html::a(Yii::t('app', 'Whois lookup'), '#', ['class' => 'mtr-btn button-fab ripple btn-sm has-ripple']) ?></div>
                </div>
            </div>

            <div class="block-grid-item wow zoomIn" data-wow-duration="500ms" data-wow-delay="200ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 200ms; animation-name: zoomIn;">
                <div class="tld introcolumns">
                    <div class="circle"><i class="fa fa-apple"></i></div>
                    <div class="tldprice"><?= Html::a(Yii::t('app', 'Get IOS App'), '#', ['class' => 'mtr-btn button-fab ripple btn-sm has-ripple']) ?></div>
                </div>
            </div>

        </div>
    </div>
</div>
