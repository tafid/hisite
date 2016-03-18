<?php
use yii\helpers\Html;
use yii\widgets\ListView;

$this->title = Yii::t('app', 'News');
?>

<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'itemOptions' => ['class' => 'item'],
    'itemView' => function ($model, $key, $index, $widget) {
        return Html::a(Html::encode($model->id), ['view', 'id' => $model->id]);
    },
]) ?>

<!-- Blog -->
<div class="blog">
    <div class="row">
        <div class="col-sm-8">

            <!-- Blog Post-->
            <article>
                <div class="post-content">
                    <h2><a href="/news/view?id=1">New domain zones: .PRO, .MOBI, at a great price!</a></h2>
                    <div class="themeta">12 AUGUST 2015</div>
                    <hr/>
                    <p>Altruism UNHCR carbon rights. Insurmountable challenges; mobilize, protect humanitarian relief gender investment. Making progress effect compassion emergency response theory of social change grantees health. Volunteer fairness, international lifting people up, social movement empower.</p>

                    <a class="mtr-btn button-navy ripple" href="">Continue reading →</a>
                </div>
            </article>
            <!-- End of Blog Post-->

            <!-- Blog Post-->
            <article>
                <div class="post-content">
                    <h2><a href="/news/view?id=1">New Year discounts on domains from AHnames.com</a></h2>
                    <div class="themeta">11 AUGUST 2015</div>
                    <hr/>
                    <p>Inclusive capitalism agency, design thinking indicator fight against oppression. Marginalized communities, fluctuation, global network economic independence global health harness momentum assistance save lives. Collaborative consumption life-expectancy readiness nonviolent.</p>

                    <a class="mtr-btn button-navy ripple" href="">Continue reading →</a>
                </div>
            </article>
            <!-- End of Blog Post-->

            <!-- Blog Post-->
            <article>
                <div class="post-content">
                    <h2><a href="/news/view?id=1">60% discount on .RU domains registration</a></h2>
                    <div class="themeta">10 AUGUST 2015</div>
                    <hr/>
                    <p>Facilitate developing development maximize. Provide, amplify end hunger reproductive rights billionaire philanthropy. Growth; globalization medical, challenges of our times support. Storytelling; many voices improving quality clean water; developing nations, free expression.</p>

                    <a class="mtr-btn button-navy ripple" href="">Continue reading →</a>
                </div>
            </article>
            <!-- End of Blog Post-->

            <!-- Blog Post-->
            <article>
                <div class="post-content">
                    <h2><a href="/news/view?id=1">A new domain zone: dotSEX</a></h2>
                    <div class="themeta">9 AUGUST 2015</div>
                    <hr/>
                    <p>Prevention thinkers who make change happen, immunize Medecins du Monde crisis management communities aid. Justice meaningful work women and children incubation recognition, time of extraordinary change combat poverty partnership planned giving. Stakeholders social movement eradicate; healthcare.</p>

                    <a class="mtr-btn button-navy ripple" href="">Continue reading →</a>
                </div>
            </article>
            <!-- End of Blog Post-->

            <nav>
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="col-sm-4">
            <?= $this->render('_newsSidebar'); ?>
        </div>

    </div>
</div>


<!-- End of Blog -->
