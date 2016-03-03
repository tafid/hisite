<?php
$this->title = Yii::t('app', 'Rules');
$this->registerCss(".vps-features-tabs .tabs-left-vertical > .nav-tabs > li > a { font-size: 12px; }");
?>
<div class="vps-features-tabs">
    <div class="row">
        <div class="col-sm-12">

            <!-- TABS -->
            <div class="tabbable tabs-left-vertical wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">

                <ul class="nav nav-tabs">
                    <li class="active"><a href="#termsOfUse" data-toggle="tab"><?= Yii::t('app', 'Domains terms of use') ?></a></li>
                    <li><a href="#privacyPolicy" data-toggle="tab"><?= Yii::t('app', 'Privacy Policy') ?></a></li>
                    <li><a href="#cancelationPolicy" data-toggle="tab"><?= Yii::t('app', 'Cancelation policy') ?></a></li>
                    <li><a href="#domainRemovalAndAutoRenewalPolicy" data-toggle="tab"><?= Yii::t('app', 'Domain removal and auto renewal Policy') ?></a></li>
                </ul>

                <div class="tab-content">

                    <div class="tab-pane fade in active" id="termsOfUse">
                        <h4><?= Yii::t('app', 'Domains terms of use') ?></h4>
                        <hr class="small"/>
                        <p class="subtitle">Indicator communities positive social change respect sustainability campaign.</p>
                        <p>The Elders inclusive capitalism; growth best practices our ambitions pride solution tackle initiative. Equity pathway to a better life asylum collaborative cities provide.</p> <p>Medical supplies shifting landscape fundraising campaign sharing economy transform the world. Meaningful work celebrate nonviolent resistance; innovate country political. </p>
                    </div>

                    <div class="tab-pane fade" id="privacyPolicy">
                        <h4><?= Yii::t('app', 'Privacy Policy') ?></h4>
                        <hr class="small"/>
                        <p class="subtitle">Equal opportunity social worker long-term emergency response volunteer</p>
                        <p>Indicator communities positive social change respect sustainability campaign. Citizenry social worker institutions, honesty, opportunity fluctuation. Transform, social analysis, developing, dedicated countries. Informal economies growth, volunteer, immunize rural scalable aid. Collaborative cities disrupt local solutions achieve; Aga Khan initiative donation hack. Capacity building insurmountable challenges, Andrew Carnegie rural development 501(c)(3). Readiness investment liberal challenges of our times vulnerable.</p>
                    </div>

                    <div class="tab-pane fade" id="cancelationPolicy">
                        <h4><?= Yii::t('app', 'Cancelation policy') ?></h4>
                        <hr class="small"/>
                        <p class="subtitle">Capacity building insurmountable challenges, Andrew Carnegie rural development</p>
                        <p>Informal economies growth, volunteer, immunize rural scalable aid. Collaborative cities disrupt local solutions achieve; Aga Khan initiative donation hack. Capacity building insurmountable challenges, Andrew Carnegie rural development. Accelerate respect, storytelling economic independence economic security hack community health workers cause effectiveness. Donors inspire social change, significant, lifting people up, Oxfam local solutions global citizens raise.</p>
                    </div>

                    <div class="tab-pane fade" id="domainRemovalAndAutoRenewalPolicy">
                        <h4><?= Yii::t('app', 'Domain removal and auto renewal Policy') ?></h4>
                        <hr class="small"/>
                        <p class="subtitle">Capacity building insurmountable challenges, Andrew Carnegie rural development</p>
                        <p>Informal economies growth, volunteer, immunize rural scalable aid. Collaborative cities disrupt local solutions achieve; Aga Khan initiative donation hack. Capacity building insurmountable challenges, Andrew Carnegie rural development. Accelerate respect, storytelling economic independence economic security hack community health workers cause effectiveness. Donors inspire social change, significant, lifting people up, Oxfam local solutions global citizens raise.</p>
                    </div>

                </div>
            </div>
            <!-- END OF TABS -->

        </div>
    </div>
</div>

<a href="https://www.icann.org/resources/pages/responsibilities-2014-03-14-en" target="_blank"  data-toggle="tab"><i class="fa fa-check-square-o lightblue"></i><?= Yii::t('app', 'Registrant rights and responsibilities') ?></a>
<a href="http://afilias.info/policies" target="_blank" data-toggle="tab"><i class="fa fa-gratipay orange"></i><?= Yii::t('app', 'Afilias Domain Anti-Abuse Policy') ?></a>