<?php
$this->title = Yii::t('app', 'New domain zones: .PRO, .MOBI, at a great price!');
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
        <div class="col-sm-8">

            <!-- Blog Post-->
            <article>
                <div class="post-content">
                    <p>Dear customer!</p>
                    <p>We are glad to inform you that during the period from 02/10/16 to 03/31/16, you can register domains in .PRO, .MOBI, .INFO zones at the price of $2.45/year.</p>
                    <p>Regular price of the transfer and renewal you can find here: Prices</p>
                    <p>In addition, the registration of domains in the newGTLD zones will start soon, that will give you the opportunity to choose domains from more than 200 zones!</p>
                    <p>Stay with us and stay tuned!</p>

                    <div class="tagcloud"><a href="">90s</a>
                        <a href="">Accessories</a>
                        <a href="">Athlete</a>
                        <a href="">Bag</a>
                    </div>
                </div>
            </article>
            <!-- End of Blog Post-->

        </div>

        <div class="col-sm-4">
            <?= $this->render('_newsSidebar'); ?>
        </div>

    </div>
</div>


<!-- End of Blog -->