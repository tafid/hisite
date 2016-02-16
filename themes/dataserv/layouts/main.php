<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <?= Html::cssFile(YII_DEBUG ? '@web/css/all.css' : '@web/css/all.min.css?v=' . filemtime(Yii::getAlias('@webroot/css/all.min.css'))) ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- TOP NAV -->
<div class="topmenu">
    <div class="row">
        <div class="col-sm-3">
            <ul class="top left">
                <li><i class="fa fa-phone"></i> 851.02.DATASERV</li>
            </ul>
        </div>
        <div class="col-sm-9">
            <ul class="topright">
                <li><i class="fa fa-unlock-alt"></i> <a href="#" data-toggle="modal" data-target="#LoginModal">CLIENT AREA</a></li>
                <li><i class="fa fa-commenting-o"></i> <a href="#">LIVE CHAT</a></li>
                <li><i class="fa fa-hand-pointer-o"></i> <a href="affiliates.html">AFFILIATES</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- END OF TOP NAV -->

<!-- HEADER -->
<div class="header">
    <div class="row">
        <div class="col-sm-3">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" alt="" />
                </a>
            </div>
        </div>
        <div class="col-sm-9">

            <nav id="desktop-menu">
                <ul class="sf-menu" id="navigation">
                    <li class="current"><a href="#">Home</a>
                        <ul>
                            <li><a href="index.html">Order Slider</a></li>
                            <li><a href="index-image.html">Background Header</a></li>
                            <li><a href="index-image2.html">Background Header 2</a></li>
                            <li><a href="index-video.html">Video Header</a></li>
                            <li><a href="index-slider.html">Slider Header</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Hosting</a>
                        <ul>
                            <li><a href="shared.html">Shared Hosting</a></li>
                            <li><a href="vps.html">Cloud VPS</a></li>
                            <li><a href="servers.html">Dedicated Servers</a></li>
                        </ul>
                    </li>
                    <li><a href="domains.html">Domains</a></li>
                    <li><a href="#">Pages</a>
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="datacenter.html">Datacenter</a></li>
                            <li><a href="elements.html">Elements</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blog</a>
                        <ul>
                            <li><a href="blog-category.html">Category</a></li>
                            <li><a href="blog-single.html">Single</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- END OF HEADER -->


<?= $content ?>


<!-- FOOTER -->
<div class="footer">
    <div class="row">

        <div class="col-sm-3">
            <h4>CLOUD HOSTING</h4>
            <ul>
                <li><a href="#" title="">cPanel Hosting</a></li>
                <li><a href="#" title="">Shared Hosting</a></li>
                <li><a href="#" title="">Cloud VPS</a></li>
                <li><a href="#" title="">Dedicated Servers</a></li>
                <li><a href="#" title="">WordPress Hosting</a></li>
            </ul>
        </div>

        <div class="col-sm-3">
            <h4>HOSTING FOR APPS</h4>

            <ul>
                <li><a href="#" title="">WordPress Hosting</a></li>
                <li><a href="#" title="">Joomla Hosting</a></li>
                <li><a href="#" title="">Drupal Hosting</a></li>
                <li><a href="#" title="">Magento Hosting</a></li>
                <li><a href="#" title="">Ghost Hosting</a></li>
            </ul>
        </div>

        <div class="col-sm-3">
            <h4>COMPANY</h4>

            <ul>
                <li><a href="#" title="">About Us</a></li>
                <li><a href="#" title="">Privacy Policy</a></li>
                <li><a href="#" title="">Acceptable Usage Policy</a></li>
                <li><a href="#" title="">Terms & Conditions</a></li>
                <li><a href="#" title="">DMCA Policy</a></li>
            </ul>
        </div>

        <div class="col-sm-3">
            <h4>NEWSLETTER SIGNUP</h4>
            <div id="mc_embed_signup">
                <form class="form-inline validate material" action="//audemedia.us7.list-manage.com/subscribe/post?u=b5638e105dac814ad84960d90&amp;id=9345afa0aa" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                    <input id="mce-EMAIL" type="email" name="EMAIL" placeholder="E-mail" required>
                    <div style="position: absolute; left: -5000px;">
                        <input type="text" name="b_b5638e105dac814ad84960d90_9345afa0aa" tabindex="-1" value="">
                    </div>
                    <input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="mtr-btn button-blue">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END FOOTER -->

<!-- SOCIAL & COPYRIGHT -->
<div class="social">
    <div class="row">
        <div class="col-sm-12">
            <ul class="social-links">
                <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" title="Github"><i class="fa fa-github-alt"></i></a></li>
            </ul>
            <p class="text-center">Copyright© DataServ. All rights reserved.</p>
        </div>
    </div>
</div>
<!-- END OF SOCIAL & COPYRIGHT -->

<!-- LOGIN MODAL -->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModal">
    <div class="modal-dialog" role="document">
        <form method="post" action="http://whmcs.audemedia.com/dologin.php?systpl=dataservwhmcs" class="material">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-lock"></i>LOGIN TO YOUR ACCOUNT</h4>
                </div>
                <div class="modal-body">
                    <input type="text" name="username" placeholder="E-mail Address">
                    <input type="password" name="password" placeholder="Password">
                    <button type="submit" class="mtr-btn button-fab">LOGIN</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- END OF LOGIN MODAL -->
<a href="#top" id="back-to-top" class="ripple"><i class="fa fa-angle-up"></i></a>
<?= Html::jsFile(YII_DEBUG ? '@web/js/all.js' : '@web/js/all.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/all.min.js'))) ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
