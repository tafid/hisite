<?php

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\StringHelper;

/** @var $model \hisite\modules\news\models\Article */
?>

<!-- Blog Post-->
<article>
    <div class="post-content">
        <h2><?= Html::a(Html::encode($model->translation->title), ['/news/article/view', 'id' => $model->id]) ?></h2>
        <div class="themeta"><?= Yii::$app->formatter->asDate($model->post_date) ?></div>
        <hr/>
        <p>
            <?php if (StringHelper::countWords($model->translation->short_text) === 0) : ?>
                <?= StringHelper::truncateWords(HtmlPurifier::process($model->translation->text, $model->htmlPurifierConfig), 20, '', true) ?>
            <?php else: ?>
                <?= StringHelper::truncateWords($model->translation->short_text, 50) ?>
            <?php endif; ?>
        </p>
        <?= Html::a(Yii::t('hisite/news', 'Continue reading {arrow}', ['arrow' => '&rarr;']), ['/news/article/view', 'id' => $model->id], ['class' => 'mtr-btn button-navy ripple']) ?>
    </div>
</article>
<!-- End of Blog Post-->