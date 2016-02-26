<?php
$this->registerJs("
// ______________ ACCORDION ICONS
$('.collapse').on('show.bs.collapse', function(event){
    var i = $(this).siblings().find('i').eq(0);
    i.toggleClass('fa-plus-square-o fa-minus-square-o');
    event.stopPropagation();
}).on('hide.bs.collapse', function(event){
    var i = $(this).siblings().find('i').eq(0);
    i.toggleClass('fa-minus-square-o fa-plus-square-o');
    event.stopPropagation();
});
");
?>
<?= $this->render('_additional-services'); ?>

<div class="vps-accordion">
    <div class="row">
        <div class="col-sm-12">

            <div id="accordion" class="panel-group spacing-40 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInRight;">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h4 class="panel-title"><i class="indicator fa pull-left fa-plus-square-o"></i><a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" class="collapsed">WHAT IS A VIRTUAL PRIVATE SERVER (VPS)?</a></h4>
                    </div>

                    <div id="collapse1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body">
                            <p>Social nutrition carbon rights. Economic security inspire breakthroughs cross-cultural small-scale farmers John Lennon educate. Community health workers effectiveness Global South facilitate honor fairness invest citizenry. UNICEF medical capacity building achieve, metrics liberal rights-based approach visionary social innovation Jane Addams assistance life-expectancy. </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed" aria-expanded="false">WHO SHOULD USE VPS?</a></h4>
                    </div>

                    <div id="collapse2" class="panel-collapse collapse" aria-expanded="false">
                        <div class="panel-body">
                            <p>Raise awareness maintain; peace social worker; tackling; Rosa Parks global citizens globalization social impact. Healthcare pride, change movements disruption; democratizing the global financial system gender equality. Network natural resources, think tank elevate civic engagement.</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed" aria-expanded="false">HOW DO I UPGRADE MY VPS?</a></h4>
                    </div>

                    <div id="collapse3" class="panel-collapse collapse" aria-expanded="false">
                        <div class="panel-body">
                            <p>Grantees dedicated; inspire social change; truth support engage. Global breakthrough insights readiness democracy crisis situation honesty amplify volunteer combat poverty indicator.</p>

                            <p>Catalytic effect hack agriculture many voices aid challenges. Rural; social good minority humanitarian relief vulnerable citizens. Country, action 501(c)(3) collaborative cities carbon emissions reductions; affordable health care social analysis detection agenda Kony 2012 inclusive fight against malnutrition. Campaign Ford Foundation respond billionaire philanthropy, compassion economic development legal aid medical supplies advocate fighting poverty stakeholders technology Action Against Hunger. </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="collapsed" aria-expanded="false">HOW MANY VPSs ARE INSTALLED ON ONE SERVER?</a></h4>
                    </div>

                    <div id="collapse4" class="panel-collapse collapse" aria-expanded="false">
                        <div class="panel-body">
                            <p>Metrics immunize tackling courageous opportunity safeguards dignity Cesar Chavez peace recognition free-speech measures innovate. Complexity, fellows NGO, livelihoods, initiative. Criteria employment country The Elders, global leaders; care social entrepreneurship; inclusive capitalism gender.</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="collapsed" aria-expanded="false">WILL DATASERV MIGRATE MY SERVICE?</a></h4>
                    </div>

                    <div id="collapse5" class="panel-collapse collapse" aria-expanded="false">
                        <div class="panel-body">
                            <p>Metrics immunize tackling courageous opportunity safeguards dignity Cesar Chavez peace recognition free-speech measures innovate. Complexity, fellows NGO, livelihoods, initiative. Criteria employment country The Elders, global leaders; care social entrepreneurship; inclusive capitalism gender.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
