<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vatlieunhakhoa
 */

?>

<footer>
        <div class="brand-logo hidden-xs hidden-sm">
            <div class="container">
                <div class="row-carousel">
                    <div class="owl-carousel owl-loaded owl-drag">
                        <div class="item"> <a href="http://www.jinmedental.com/en/index.html"><img
                                    src="<?php echo get_template_directory_uri(); ?>/libs/imgs/brand4.png" title="Brand 4" alt="Brand 4"></a> </div>
                        <div class="item"> <a href="http://www.3m.com/3M/en_US/dental-us/"><img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/brand5.png"
                                    title="Brand 5" alt="Brand 5"></a> </div>
                        <div class="item"> <a href="https://www.dentsply.com/en-aa"><img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/brand6.png"
                                    title="Brand 6" alt="Brand 6"></a> </div>
                        <div class="item"> <a href="http://www.microdont.net/"><img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/brand7.png"
                                    title="Brand 7" alt="Brand 7"></a> </div>
                        <div class="item"> <a href="http://www.coxotec.com/en/"><img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/brand8.png"
                                    title="Brand 8" alt="Brand 8"></a> </div>
                        <div class="item"> <a href="http://www.voco.com/en/home/index.html"><img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/brand9.png"
                                    title="Brand 9" alt="Brand 9"></a> </div>
                        <div class="item"> <a href="http://www.glwoodpecker.com/"><img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/brand1.png"
                                    title="Brand 1" alt="Brand 1"></a> </div>
                        <div class="item"> <a href="http://www.orjortho.com/"><img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/brand2.png"
                                    title="Brand 2" alt="Brand 2"></a> </div>
                        <div class="item"> <a href="http://www.denjoy.cn/"><img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/brand3.png" title="Brand 3"
                                    alt="Brand 3"></a> </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="newsletter-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <div class="newsletter">
                            <form accept-charset="utf-8" action="<?php echo esc_url( home_url( '/' ) ); ?>/contact"
                                id="contact" method="post">
                                <input name="FormType" type="hidden" value="contact">
                                <input type="text" class="form-control hidden" name="contact[phone]" value="NaN"
                                    placeholder="Phone number">
                                <textarea id="message" name="contact[Body]" style="height: 120px;"
                                    class="form-control hidden" rows="7">Subcribe Email</textarea>
                                <h3 class="title">ĐĂNG KÝ ĐỂ NHẬN KHUYẾN MẠI</h3>
                                <div class="khuyen-mai">
                                    <input type="email" id="newsletter1" class="input-text" name="contact[email]"
                                        placeholder="Đăng ký để  nhận tin" value="">
                                    <button type="submit" title="Đăng ký" class="subscribe"><span>Đăng
                                            ký</span></button>
                                </div>
                            </form>
                            <style>
                                .errors {
                                    float: left;
                                    width: 100%;
                                    text-align: center;
                                }

                                .alert-success {
                                    width: 100%;
                                    display: inline-block;
                                    text-align: center;
                                }
                            </style>
                        </div>
                        <!--newsletter-->
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="inner">
                            <div class="">
                                <div class="social pull-right">
                                    <h3 class="title">Follow us</h3>
                                    <ul class="link">
                                        <li class="fb pull-left"><a
                                                href="https://www.facebook.com/V%E1%BA%ADt-li%E1%BB%87u-thi%E1%BA%BFt-b%E1%BB%8B-nha-khoa-Th%C4%83ng-Long-378522735853903/"><img
                                                    src="<?php echo get_template_directory_uri(); ?>/libs/imgs/facebook-logo-button.png"
                                                    atl=""></a></li>
                                        <li class="tw pull-left"><a
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/#"><img
                                                    src="<?php echo get_template_directory_uri(); ?>/libs/imgs/twitter-logo-button.png"
                                                    atl=""></a></li>
                                        <li class="googleplus pull-left"><a
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/#"><img
                                                    src="<?php echo get_template_directory_uri(); ?>/libs/imgs/google-plus-logo-button.png"
                                                    atl=""></a></li>
                                        <li class="rss pull-left"><a
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/#"><img
                                                    src="<?php echo get_template_directory_uri(); ?>/libs/imgs/rss.png"
                                                    atl=""></a></li>
                                        <li class="youtube pull-left"><a
                                                href="https://www.youtube.com/channel/UCZ_ELFRcyceKWAHwWXgLIYg"><img
                                                    src="<?php echo get_template_directory_uri(); ?>/libs/imgs/youtube-logotype.png"
                                                    atl=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-sm-3 col-md-2 fix-mobile5">
                        <div class="footer-column pull-left">
                            <h4>Về chúng tôi</h4>
                            <?php dynamic_sidebar( 'sidebar_about_us' ); ?>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-2 fix-mobile5">
                        <div class="footer-column pull-left">
                            <h4>Hướng dẫn</h4>
                            <?php dynamic_sidebar( 'sidebar_tutorial' ); ?>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-2 fix-mobile5">
                        <div class="footer-column pull-left">
                            <h4>Thông tin</h4>
                            <?php dynamic_sidebar( 'sidebar_information' ); ?>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-2 fix-mobile5">
                        <div class="footer-column pull-left">
                            <h4>Chính sách</h4>
                            <?php dynamic_sidebar( 'sidebar_policy' ); ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="footer-column-last pull-left">
                            <h4>Liên hệ</h4>
                            <p><b>VẬT LIỆU NHA KHOA THĂNG LONG</b></p>
                            <p><i class="fa fa-map-marker"></i><span>128c Đại La, Hai Bà Trưng, Hà Nội</span></p>
                            <p><i class="fa fa-phone"></i><span>077.9192.888</span></p>
                            <p><i class="fa fa-envelope"></i><span>vatlieunhakhoathanglong@gmail.com</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-center-2 clearfix">
                <!-- SP Custom Html -->
                <div class="footer-2 hidden-xs">
                    <div>
                        <div class="menu-bottom">
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="coppyright">© Bản quyền thuộc về VẬT LIỆU, THIẾT BỊ NHA KHOA THĂNG LONG | Cung cấp
                            bởi Sapo</div>
                        <div class="payment-accept">
                            <div>
                                <img class="first" src="<?php echo get_template_directory_uri(); ?>/libs/imgs/payments-1.png"
                                    alt="payments-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="tel:077.9192.888" class="suntory-alo-phone suntory-alo-green" id="suntory-alo-phoneIcon"
        style="left: 0px; bottom: 0px;">
        <div class="suntory-alo-ph-circle"></div>
        <div class="suntory-alo-ph-circle-fill"></div>
        <div class="suntory-alo-ph-img-circle"><i class="fa fa-phone"></i></div>
    </a>

    <script src="<?php echo get_template_directory_uri(); ?>/libs/js/jquery.lib.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/libs/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/libs/js/imagesLoaded.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/libs/js/masonry.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/libs/js/common.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/libs/js/jquery.flexslider.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/libs/js/cloud-zoom.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/libs/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/libs/js/parallax.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/libs/js/jgrowl.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/libs/js/cs.script.js" type="text/javascript"></script>
    <!-- <script src="<?php echo get_template_directory_uri(); ?>/libs/js/api.jquery.js" type="text/javascript"></script> -->
    <!--- <script src="//bizweb.dktcdn.net/100/179/898/themes/237410/assets/time-countdown.js" type="text/javascript"></script> -->
    <script src="<?php echo get_template_directory_uri(); ?>/libs/js/jquery.countdown.min.js" type="text/javascript"></script>

    
    <a href="/#" id="toTop" style="display: block;"><span id="toTopHover"></span><span id="toTopHover"
            style="opacity: 0.7;"></span></a>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        });
        $(".owl-prev").html('<i class="fa fa-caret-left" aria-hidden="true"></i>');
        $(".owl-next").html('<i class="fa fa-caret-right" aria-hidden="true"></i>');

        $('[data-countdown]').each(function () {
            var $this = $(this),
                finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function (event) {
                $this.html(event.strftime('<div><span class="days">%D</div><span class="clocks">:</span><div><span class="hours ">%H</span></div><span class="clocks">:</span><div><span class="minutes ">%M</span></div><span class="clocks">:</span><div><span class="seconds">%S</span></div>'));
            });
        });


        //Masonry
        (function ($) {
            var $container = $('.masonry-container');
            $container.imagesLoaded(function () {
                $container.masonry({
                    columnWidth: '.item',
                    itemSelector: '.item'
                });
            });
        })(jQuery);
    </script>

    <script>
        $(document).ready(function () {
            $('ul.links > li > a').click(function () {
                $(this).next('ul').slideToggle('slow');
            });
        });
    </script>
    <script type="text/javascript">
        $('ul#nav > li.test1').prepend(
            '<div class="menu-img-icon"><img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/hot-icon.png" alt=""></div>'
        );

        $('ul#nav > li.test2').prepend(
            '<div class="menu-img-icon"><img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/new-icon.png" alt=""></div>'
        );
    </script>

	<?php wp_footer(); ?>
</body>

</html>
