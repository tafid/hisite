<?php
$this->registerJs('
// TESTIMONIALS CAROUSEL
$("#testimonials-carousel").owlCarousel({
    items: 3,
    autoPlay: 5000,
    itemsDesktop: [1199, 3],
    itemsDesktopSmall: [979, 2],
    itemsTablet: [768, 2]
});
');
?>
<!-- TESTIMONIALS -->
<div class="testimonials">
    <div class="row">
        <div class="col-sm-12">
            <h3><?= Yii::t('app', 'Our news') ?></h3>
            <hr class="hr-awesome">
            <div id="testimonials-carousel" class="owl-carousel">

                <div class="item">
                    <div class="testimonial-content">
                        <img src="/images/testimonial1.jpg" alt="" />
                        <h3>New Year discounts on domains from AHnames.com</h3>
                        <span>21.11.2012</span>
                        <p>Lijit imeem groupon sifteo handango appjet zillow gsnap whrrl eduvant, dogster qeyno sclipo insala handango scribd jiglu waze zoho, heekya eskobo dropio cuil flickr napster orkut babblely. Twitter waze ngmoco edmodo airbnb hojoki cotweet, yammer klout ning flickr yammer chumby.</p>
                        <a href="">Read more</a>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial-content">
                        <img src="/images/testimonial2.jpg" alt="" />
                        <h3>New domain zones: .PRO, .MOBI, at a great price!</h3>
                        <span>21.11.2012</span>
                        <p>Lijit imeem groupon sifteo handango appjet zillow gsnap whrrl eduvant, dogster qeyno sclipo insala handango scribd jiglu waze zoho, heekya eskobo dropio cuil flickr napster orkut babblely. Twitter waze ngmoco edmodo airbnb hojoki cotweet, yammer klout ning flickr yammer chumby. </p>
                        <a href="">Read more</a>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial-content">
                        <img src="/images/testimonial3.jpg" alt="" />
                        <h3>60% discount on .RU domains registration</h3>
                        <span>21.11.2012</span>
                        <p>Lijit imeem groupon sifteo handango appjet zillow gsnap whrrl eduvant, dogster qeyno sclipo insala handango scribd jiglu waze zoho, heekya eskobo dropio cuil flickr napster orkut babblely. Twitter waze ngmoco edmodo airbnb hojoki cotweet, yammer klout ning flickr yammer chumby. </p>
                        <a href="">Read more</a>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial-content">
                        <img src="/images/testimonial4.jpg" alt="" />
                        <h3>A new domain zone: dotSEX</h3>
                        <span>21.11.2012</span>
                        <p>Lijit imeem groupon sifteo handango appjet zillow gsnap whrrl eduvant, dogster qeyno sclipo insala handango scribd jiglu waze zoho, heekya eskobo dropio cuil flickr napster orkut babblely. Twitter waze ngmoco edmodo airbnb hojoki cotweet, yammer klout ning flickr yammer chumby.</p>
                        <a href="">Read more</a>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial-content">
                        <img src="/images/testimonial5.jpg" alt="" />
                        <h3>New Domain zones and discounts</h3>
                        <span>21.11.2012</span>
                        <p>Lijit imeem groupon sifteo handango appjet zillow gsnap whrrl eduvant, dogster qeyno sclipo insala handango scribd jiglu waze zoho, heekya eskobo dropio cuil flickr napster orkut babblely. Twitter waze ngmoco edmodo airbnb hojoki cotweet, yammer klout ning flickr yammer chumby. </p>
                        <a href="">Read more</a>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial-content">
                        <img src="/images/testimonial6.jpg" alt="" />
                        <h3>Changes in domain prices</h3>
                        <span>21.11.2012</span>
                        <p>Lijit imeem groupon sifteo handango appjet zillow gsnap whrrl eduvant, dogster qeyno sclipo insala handango scribd jiglu waze zoho, heekya eskobo dropio cuil flickr napster orkut babblely. Twitter waze ngmoco edmodo airbnb hojoki cotweet, yammer klout ning flickr yammer chumby. </p>
                        <a href="">Read more</a>
                    </div>
                </div>

            </div>
            <p class="text-center md-mt-50">
                <a class="mtr-btn button-purple ripple btn-lg order-vps has-ripple" href="http://whmcs.audemedia.com/cart.php?a=add&amp;pid=2">READ ALL NEWS</a>
            </p>
        </div>
    </div>
</div>
<!-- END OF TESTIMONIALS -->
