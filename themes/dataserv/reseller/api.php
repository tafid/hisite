<?php
$this->title = Yii::t('app', 'API');
$this->blocks['subTitle'] = Yii::t('app', 'Domains reselling with AHnames is a great choice, if you want to run your own domain registration service');

$this->registerJs(<<<JS
 // ______________ ACCORDION ICONS
$('.collapse').on('show.bs.collapse', function(){
    var i = $(this).parent().find('i');
    i.toggleClass('fa-plus-square-o fa-minus-square-o');
}).on('hide.bs.collapse', function(){
    var i = $(this).parent().find('i');
    i.toggleClass('fa-minus-square-o fa-plus-square-o');
});
JS
);
?>

<!-- VPS ACCORDION -->
<div class="vps-accordion">
    <div class="row">
        <div class="col-sm-12">

            <div id="accordion" class="panel-group spacing-40 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><?= Yii::t('app', 'General information') ?></a></h4>
                    </div>

                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Social nutrition carbon rights. Economic security inspire breakthroughs cross-cultural small-scale farmers John Lennon educate. Community health workers effectiveness Global South facilitate honor fairness invest citizenry. UNICEF medical capacity building achieve, metrics liberal rights-based approach visionary social innovation Jane Addams assistance life-expectancy. </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><?= Yii::t('app', 'Detailed examples') ?></a></h4>
                    </div>

                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Raise awareness maintain; peace social worker; tackling; Rosa Parks global citizens globalization social impact. Healthcare pride, change movements disruption; democratizing the global financial system gender equality. Network natural resources, think tank elevate civic engagement.</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><?= Yii::t('app', 'Type directory') ?></a></h4>
                    </div>

                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Grantees dedicated; inspire social change; truth support engage. Global breakthrough insights readiness democracy crisis situation honesty amplify volunteer combat poverty indicator.</p>

                            <p>Catalytic effect hack agriculture many voices aid challenges. Rural; social good minority humanitarian relief vulnerable citizens. Country, action 501(c)(3) collaborative cities carbon emissions reductions; affordable health care social analysis detection agenda Kony 2012 inclusive fight against malnutrition. Campaign Ford Foundation respond billionaire philanthropy, compassion economic development legal aid medical supplies advocate fighting poverty stakeholders technology Action Against Hunger. </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><?= Yii::t('app', 'Command directory') ?></a></h4>
                    </div>

                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Metrics immunize tackling courageous opportunity safeguards dignity Cesar Chavez peace recognition free-speech measures innovate. Complexity, fellows NGO, livelihoods, initiative. Criteria employment country The Elders, global leaders; care social entrepreneurship; inclusive capitalism gender.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- END OF VPS ACCORDION -->

<?= $this->render('_bottomInfo') ?>
