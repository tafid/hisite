<?php
use yii\helpers\Html;
use yii\widgets\ListView;

$this->title = Yii::t('hisite/news', 'News');
$this->blocks['subTitle'] = Yii::t('hisite/news', 'Web hosting news, tips & insights');

?>
<!-- Blog -->
<div class="blog">
    <div class="row">
        <div class="col-sm-12">
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemOptions' => ['class' => 'item'],
                'itemView' => '_view',
                'layout' => "{items}" . PHP_EOL . "<nav>{pager}</nav>"
            ]) ?>

        </div>
    </div>
</div>


<!-- End of Blog -->
