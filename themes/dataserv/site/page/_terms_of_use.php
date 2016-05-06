<?php
use yii\helpers\Html;
?>
    <p><?= Yii::t('hisite/page', 'Our rules state that one is not allowed to register domains that are used for:') ?></p>
    <ul>
        <li><?= Yii::t('hisite/page', 'Distribution of child pornography (sites using "children images" are also prohibited) *;') ?></li>
        <li><?= Yii::t('hisite/page', 'Distribution of all types of illegal pornography;') ?></li>
        <li><?= Yii::t('hisite/page', 'Distribution of materials (content) that violate copyright infringement;') ?></li>
        <li><?= Yii::t('hisite/page', 'Illegal mailing (SPAM);') ?></li>
        <li><?= Yii::t('hisite/page', 'Illegal distribution of pharmaceutical drugs;') ?></li>
        <li><?= Yii::t('hisite/page', 'Distribution of false / malicious programs;') ?></li>
        <li><?= Yii::t('hisite/page', 'Distribution of false / malicious codecs;') ?></li>
        <li><?= Yii::t('hisite/page', 'Illegal obtaining of personal information and hacking attempts (fishing, fraud, etc);') ?></li>
        <li><?= Yii::t('hisite/page', 'Promotion of violence / racism / drugs;') ?></li>
        <li><?= Yii::t('hisite/page', 'Scripts and / or software to automatically create accounts and messages;') ?></li>
        <li><?= Yii::t('hisite/page', 'Advertising of resources through SPAM, automatic account creation and automatic creation of messages on third-party websites.') ?></li>
    </ul>

    <p>
        <?= Yii::t('hisite/page', 'It is prohibited to use standard API for stealing domains that are released (drops). If you violate this rule, your account will be blocked.') ?>
        <?= Yii::t('hisite/page', 'If you are interested in domain interception, use the {0}.', [
            Html::a(Yii::t('hisite/page', 'specialized API'), ['/site/contact'])
        ]) ?>
    </p>

    <p><?= Yii::t('hisite/page', 'The user is fully responsible for the content posted on the registered domain name, including the responsibility to third parties as well.') ?></p>
    <p>
        <?= Yii::t('hisite/page', 'Contact information and Whois information must be filled correctly. Accounts with false information can be
        blocked until correct information of the account/domain names’ owner is received. The user is obliged to present
        the scan copies of a passport or some other documents asked upon the registrar’s request within the shortest
        time, but not later than in 48 hours. If the demand is not fulfilled, the registrar is entitled to block the
        domain names and account until all circumstances are clarified.') ?>
    </p>
    <p><?= Yii::t('hisite/page', 'The Whois Protect service serves to conceal the real data of the domain name owner to protect him from unwanted postal mailing, telephone calls and other forms of advertising performed against the will of domain name’s owner. However, Whois Protect can not be a reason or an instrument for breaking the current law or rules of this service.') ?></p>
    <p><?= Yii::t('hisite/page', 'The registrar has a right to shut off the client’s service in 72 hours after such notification is sent to the user.') ?></p>
    <p><?= Yii::t('hisite/page', 'This list of regulations can be changed / supplemented without notice.') ?></p>

    <h5><?= Yii::t('hisite/page', 'VDS terms of use')?></h5>

    <p><?= Yii::t('hisite/page', 'Our rules state that one is not allowed to place on VDS any websites, that used for:') ?></p>
    <ul>
        <li><?= Yii::t('hisite/page', 'Distribution of child pornography (sites using "children images" are also prohibited) *;') ?></li>
        <li><?= Yii::t('hisite/page', 'Distribution of all types of illegal pornography;') ?></li>
        <li><?= Yii::t('hisite/page', 'Distribution of materials (content) that violate copyright infringement;') ?></li>
        <li><?= Yii::t('hisite/page', 'Illegal mailing (SPAM);') ?></li>
        <li><?= Yii::t('hisite/page', 'Illegal distribution of pharmaceutical drugs;') ?></li>
        <li><?= Yii::t('hisite/page', 'Distribution of false / malicious programs;') ?></li>
        <li><?= Yii::t('hisite/page', 'Distribution of false / malicious codecs;') ?></li>
        <li><?= Yii::t('hisite/page', 'Illegal obtaining of personal information and hacking attempts (fishing, fraud, etc);') ?></li>
        <li><?= Yii::t('hisite/page', 'Promotion of violence / racism / drugs;') ?></li>
        <li><?= Yii::t('hisite/page', 'Scripts and / or software to automatically create accounts and messages;') ?></li>
        <li><?= Yii::t('hisite/page', 'Advertising of resources through SPAM, automatic account creation and automatic creation of messages on third-party websites.') ?></li>
    </ul>

    <p><?= Yii::t('hisite/page', 'It is prohibited to use VDS for any illegal activity based on the US and Netherlands legislation.') ?></p>

    <p>
        <?= Yii::t('hisite/page', 'The following list can be amended / supplemented without notice.') ?><br>
        <?= Yii::t('hisite/page', 'Your contact information from the hosting account has to be indicated correctly. Accounts with incorrect information can be blocked until the reliable information about the account owner is found.') ?>
    </p>

    <p>
        <?= Yii::t('hisite/page', 'We reserve the right to ask for scans of documents to confirm the identity of the account / domain owner.') ?>
        <?= Yii::t('hisite/page', 'We are also obliged to provide accurate contact information about the client on request of registration (ICANN et al.) or law enforcement agencies.') ?>
    </p>

    <br>
    <br>

    <hr class="small"/>
    <p class="text-muted" style="font-size: small">
        * <?= Yii::t('hisite/page', 'Websites using "children images" are sites that have pictures and/or videos that look like/create the impression of child pornography, despite the fact that the models used in the pictures and videos are adult (18 years and older).') ?>
    </p>