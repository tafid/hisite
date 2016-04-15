<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

$this->title = Html::encode($model->translation->html_title);
$this->blocks['subTitle'] = Yii::t('hisite/news', 'Posted on {date}', ['date' => Yii::$app->formatter->asDate($model->post_date)]);
?>

<!-- Share buttons hidden popover -->
<div id="shared-btn-Popover" class="hide">
    <ul class="blog-share-buttons">
        <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
    </ul>
</div>
<!-- End of Share buttons hidden popover -->

<!-- Blog -->
<div class="blog single">
    <div class="row">
        <div class="col-sm-12">
            <!-- Blog Post-->
            <article>
                <div class="post-content">
                    <?= HtmlPurifier::process($model->translation->text, $model->htmlPurifierConfig) ?>
                </div>
            </article>
            <!-- End of Blog Post-->

        </div>
    </div>
</div>


<!-- End of Blog -->