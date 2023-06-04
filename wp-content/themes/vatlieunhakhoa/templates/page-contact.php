<?php /* Template Name: Liên hệ */ get_header("main"); ?>



    <!-- main code -->

    <div class="breadcrumbs">

        <div class="container">

            <div class="inner">

                <ul>

                    <li class="home"> <a title="Quay lại trang chủ" href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>

                    <li>Liên hệ</li>

                </ul>

            </div>

        </div>

    </div>

    <div class="main-container col2-right-layout">

        <div class="main container">

            <div class="row">

                <aside class="col-right sidebar col-sm-12">

                    <div class="">

                        <div class="google-map">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.883738838665!2d105.84091231457882!3d20.997296994228428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac702fd87f0f%3A0x67d9f8002102aed6!2zMTI4QyDEkOG6oWkgTGEsIMSQ4buTbmcgVMOibSwgSGFpIELDoCBUcsawbmcsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1578899362913!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                        </div>

                    </div>

                </aside>

                <div class="contact-content">

                    <div class="col-main col-md-4 col-sm-12 ">

                        <div class="page-title">

                            <h2>Liên hệ </h2>

                            <div class="text-lien-he">VẬT LIỆU NHA KHOA THĂNG LONG</div>

                            <div class="form-contact">

                                <div class="lien-he"><img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/icon.png"><?php the_field('set_address', 'option'); ?></div>

                                <div class="lien-he"><img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/envelope.png"><a href="mailto:<?php the_field('set_email', 'option'); ?>"><?php the_field('set_email', 'option'); ?></a></div>

                                <div class="lien-he"><img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/phone-receiver.png"><a href="tel:<?php the_field('set_phone', 'option'); ?>"><?php the_field('set_phone', 'option'); ?></a></div>

                            </div>

                        </div>

                        <!-- <div class="inner-contact">

                            <div class="">

                                <div class="social pull-left hidden-xs">

                                    <ul class="link">

                                        <li class="fb pull-left"><a href="https://www.facebook.com/V%E1%BA%ADt-li%E1%BB%87u-thi%E1%BA%BFt-b%E1%BB%8B-nha-khoa-Th%C4%83ng-Long-378522735853903/"></a></li>

                                        <li class="tw pull-left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>lien-he#"></a></li>

                                        <li class="googleplus pull-left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>lien-he#"></a></li>

                                        <li class="rss pull-left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>lien-he#"></a></li>

                                        <li class="youtube pull-left"><a href="https://www.youtube.com/channel/UCZ_ELFRcyceKWAHwWXgLIYg"></a></li>

                                    </ul>

                                </div>

                            </div>

                        </div> -->

                    </div>

                    <section class="col-main col-md-8 col-sm-12 main-contact">

                        <div class="page-title">

                            <h2>GỬI Ý KIẾN CỦA BẠN</h2>

                        </div>

                        <div class="static-contain">

                            <?php echo do_shortcode('[contact-form-7 id="257" title="Form liên hệ"]'); ?>

                        </div>

                    </section>

                </div>

            </div>

        </div>

    </div>

    <!-- End main -->



<?php get_footer("main"); ?>