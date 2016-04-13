<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;

/** @var $model \hisite\modules\news\models\Article */
?>
<!-- Blog Post-->
<article>
    <div class="post-content">
        <h2><?= Html::a($model->article_name, ['/news/article/view', 'id' => $model->id]) ?></h2>
        <div class="themeta"><?= Yii::$app->formatter->asDate($model->post_date)?></div>
        <hr/>
        <p>
            <?php if (StringHelper::countWords($model->data[Yii::$app->language]['short_text']) == 0) : ?>
                <?= StringHelper::truncateWords($model->data[Yii::$app->language]['text'], 20, '', true) ?>
            <?php else: ?>
                <?= StringHelper::truncateWords($model->data[Yii::$app->language]['short_text'], 50) ?>
            <?php endif; ?>
        </p>

        <?= Html::a(Yii::t('hisite/news', 'Continue reading {arrow}', ['arrow' => '&rarr;']), ['/news/article/view', 'id' => $model->id], ['class' => 'mtr-btn button-navy ripple']) ?>
    </div>
</article>
<!-- End of Blog Post-->