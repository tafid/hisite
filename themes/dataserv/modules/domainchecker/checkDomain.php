<?php
use hipanel\modules\domain\models\Domain;
use yii\helpers\Html;

$this->title = Yii::t('app', 'Domain check');
$this->blocks['subHeaderClass'] = 'domainavailability';

?>

<!-- Blog -->
<div class="blog">
    <div class="row">
        <div class="col-sm-8">

            <!-- Blog Post-->
            <article>
                <div class="post-content">
                    <h2><a href="">Policy. Youth save lives</a></h2>
                    <div class="themeta">POSTED BY <a href="">AUDEMEDIA</a> ON 12 AUGUST 2015, <a href="">2 COMMENTS</a></div>
                    <hr/>
                    <p>Altruism UNHCR carbon rights. Insurmountable challenges; mobilize, protect humanitarian relief gender investment. Making progress effect compassion emergency response theory of social change grantees health. Volunteer fairness, international lifting people up, social movement empower.</p>

                    <a class="mtr-btn button-navy ripple" href="">Continue reading →</a>
                </div>
            </article>
            <!-- End of Blog Post-->

        </div>

        <div class="col-sm-4 filters">
            <div class="sidebar">

                <div class="widget">
                    <h3 class="badge"><?= Yii::t('app', 'Status') ?></h3>
                    <ul data-filter-group="status">
                        <li class="active"><a href="#" data-filter=""><?= Yii::t('app', 'All') ?></a></li>
                        <li><a href="#" data-filter=".available"><?= Yii::t('app', 'Available') ?></a></li>
                        <li><a href="#" data-filter=".unavailable"><?= Yii::t('app', 'Unavailable') ?></a>
                        </li>
                    </ul>
                </div>

                <div class="widget">
                    <h3 class="badge"><?= Yii::t('app', 'Special') ?></h3>
                    <ul data-filter-group="status">
                        <li class="active"><a href="#" data-filter=""><?= Yii::t('app', 'All') ?></a></li>
                        <li><a href="#" data-filter=".popular"><?= Yii::t('app', 'Popular Domains') ?></a></li>
                        <li><a href="#" data-filter=".promotion"><?= Yii::t('app', 'Promotion') ?></a></li>
                    </ul>
                </div>

                <div class="widget">
                    <h3 class="badge"><?= Yii::t('app', 'Categories') ?></h3>
                    <ul data-filter-group="status">
                        <li class="active">
                            <a href="#" data-filter=""><?= Yii::t('app', 'All') ?>
                                <span class="label label-default pull-right"><?= count($results) ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".adult"><?= Yii::t('app', 'Adult') ?>
                                <span class="label label-default pull-right"><?= Domain::getCategoriesCount('adult', $results) ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".geo"><?= Yii::t('app', 'GEO') ?>
                                <span class="label label-default pull-right"><?= Domain::getCategoriesCount('geo', $results) ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".general"><?= Yii::t('app', 'General') ?>
                                <span class="label label-default pull-right"><?= Domain::getCategoriesCount('general', $results) ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".nature"><?= Yii::t('app', 'Nature') ?>
                                <span class="label label-default pull-right"><?= Domain::getCategoriesCount('nature', $results) ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".internet"><?= Yii::t('app', 'Internet') ?>
                                <span class="label label-default pull-right"><?= Domain::getCategoriesCount('internet', $results) ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".sport"><?= Yii::t('app', 'Sport') ?>
                                <span class="label label-default pull-right"><?= Domain::getCategoriesCount('sport', $results) ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".society"><?= Yii::t('app', 'Society') ?>
                                <span class="label label-default pull-right"><?= Domain::getCategoriesCount('society', $results) ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".audio_music"><?= Yii::t('app', 'Audio&Music') ?>
                                <span class="label label-default pull-right"><?= Domain::getCategoriesCount('audio_music', $results) ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".home_gifts"><?= Yii::t('app', 'Home&Gifts') ?>
                                <span class="label label-default pull-right"><?= Domain::getCategoriesCount('home_gifts', $results) ?></span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- End of Blog -->
