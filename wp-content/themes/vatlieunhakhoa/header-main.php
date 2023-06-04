<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vatlieunhakhoa
 */

?>
<!DOCTYPE html>
<!-- saved from url=(0040)<?php echo esc_url(home_url('/')); ?>/ -->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/libs/imgs/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/css/save-me.css">
    <link href="<?php echo get_template_directory_uri(); ?>/libs/css/blogmate.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/libs/css/flexslider.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/libs/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/libs/css/jgrowl.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/libs/css/clockdown.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/css/font-awesome.min.css">
    <link href="<?php echo get_template_directory_uri(); ?>/libs/css/newstyle-test.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/libs/css/ProductRecentStyle.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/libs/css/my-style.css" rel="stylesheet" type="text/css">

    <style>
        .phone-box span {
            color: <?php the_field('set_main_color', 'option'); ?>;
        }

        a:hover,
        .box-category>ul#left-menu>li:hover>a,
        #left-menu li.lv1 a:hover,
        #nav>li>a:hover:nth-child(1),
        #nav>li>a.active:nth-child(1),
        li.level0.active>a>span,
        .toplinks div.links div a:hover,
        .top-cart-contain .price,
        .index-column-2 .links a:hover,
        .price,
        .breadcrumbs li strong,
        .product-details span.price,
        #recently-viewed-items .price-box .special-price .price,
        #recently-viewed-items .price-box .regular-price .price,
        .availability.out-of-stock span,
        .regular-price .price,
        .links-all a,
        a.link-article,
        .pr-module-box .pr-price,
        footer a:hover,
        .pager .pages li a:hover,
        .product-view .product-shop .price,
        .special-price .price,
        .data-table .price,
        #shopping-cart-totals-table .price {
            color: <?php the_field('set_main_color', 'option'); ?>;
        }

        .yith-ajaxsearchform-container #yith-s,
        .yith-ajaxsearchform-container #yith-s:focus {
            border: 2px solid <?php the_field('set_main_color', 'option'); ?>;
            border-right: none;
        }

        .yith-ajaxsearchform-container #yith-searchsubmit,
        .yith-ajaxsearchform-container #yith-searchsubmit:hover {
            border: 2px solid <?php the_field('set_main_color', 'option'); ?>;
        }

        .side-nav-categories .block-title,
        .side-nav-categories div.spverticalmenu::before,
        .content-icon-reweer:hover,
        .cart-box span,
        .new_title.center.color-2 h2,
        .new_title.center.color-3 h2,
        .newsletter-wrap button.subscribe,
        .comment-form input[type="submit"],
        #cus-input-sub,
        .tab-collection-grid a.active,
        .pages .pagination li .current,
        .tab-collection-list a.active,
        .upsell-pro .new_title.center::before {
            background-color: <?php the_field('set_main_color', 'option'); ?>;
        }

        .btn-cus,
        .woocommerce a.btn-proceed-checkout {
            background-color: <?php the_field('set_main_color', 'option'); ?> !important;
        }

        .content-icon-reweer,
        .content-icon-cart,
        .newsletter-wrap input[type="email"],
        .owl-item img:hover {
            border: 1px solid <?php the_field('set_main_color', 'option'); ?>;
        }

        .mini-cart .actions .view-cart:hover {
            background: <?php the_field('set_main_color', 'option'); ?>;
            border-color: <?php the_field('set_main_color', 'option'); ?>;
        }

        .mini-cart .actions .btn-checkout,
        .actions a.btn-cart,
        .product-view .product-shop .add-to-box .btn-cart,
        #shopping-cart-table button.button {
            border: 1px solid <?php the_field('set_button_color', 'option'); ?>;
            background: <?php the_field('set_button_color', 'option'); ?>;
        }

        .mini-cart .actions .btn-checkout:hover,
        .actions a.btn-cart:hover,
        .product-view .product-shop .add-to-box .btn-cart:hover,
        #shopping-cart-table button.button:hover {
            border: 1px solid <?php the_field('set_button_hover_color', 'option'); ?>;
            background: <?php the_field('set_button_hover_color', 'option'); ?>;
        }

        .sale-label {
            background: none 0px 0px repeat scroll <?php the_field('set_sale_color', 'option'); ?>;
        }

        .new_title.center.color-2:before,
        .new_title.center.color-3:before {
            border-right: 8px solid <?php the_field('set_main_color', 'option'); ?>;
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="header-container">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-xs-7">
                            <!-- Default Welcome Message -->
                            <div class="welcome-msg hidden-xs">
                                <h1>Chào mừng bạn đã đến với <?php bloginfo('name'); ?>! </h1>
                            </div>
                            <!-- End Default Welcome Message -->
                        </div>
                        <div class="col-sm-5 col-xs-5">
                            <div class="row">
                                <div class="toplinks">
                                    <div class="links">
                                        <div><span class=""><a href="<?php echo esc_url(home_url('/')); ?>/my-account" id="customer_login_link">Đăng nhập</a></span></div>
                                        <div><span class=""><a href="<?php echo esc_url(home_url('/')); ?>/my-account" id="customer_register_link">Đăng ký</a></span></div>
                                    </div>
                                    <!-- links -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" style="align-items: center;">
                    <div class="col-lg-2 col-md-2 col-xs-12 col-sm-12">
                        <!-- Header Logo -->
                        <div class="logo">
                            <a title="<?php bloginfo('name'); ?>" href="<?php echo esc_url(home_url('/')); ?>/">
                                <img alt="<?php bloginfo('name'); ?>" src="<?php echo get_template_directory_uri(); ?>/libs/imgs/logo.png">
                                <h1 style="display:none;"><?php bloginfo('name'); ?></h1>
                            </a>
                        </div>
                        <!-- End Header Logo -->
                    </div>
                    <div class="col-lg-6 col-md-6 hidden-xs hidden-sm">
                        <div class="header_search hidden-xs">
                            <?php
                            if (!defined('YITH_WCAS')) {
                                exit;
                            } // Exit if accessed directly
                            wp_enqueue_script('yith_wcas_frontend');

                            ?>
                            <div class="yith-ajaxsearchform-container">
                                <form role="search" class="input-group search-bar" method="get" id="yith-ajaxsearchform" action="<?php echo esc_url(home_url('/')); ?>">
                                    <div class="input-group">
                                        <label class="screen-reader-text" for="yith-s"><?php esc_html_e('Search for:', 'yith-woocommerce-ajax-search'); ?></label>
                                        <input type="search" value="<?php echo esc_attr(get_search_query()); ?>" name="s" id="yith-s" class="yith-s" placeholder="<?php echo esc_attr(get_option('yith_wcas_search_input_label')); ?>" data-loader-icon="<?php echo esc_attr(str_replace('"', '', apply_filters('yith_wcas_ajax_search_icon', ''))); ?>" data-min-chars="<?php echo esc_attr(get_option('yith_wcas_min_chars')); ?>" />
                                        <!-- <div class="input-group-btn"> -->
                                        <input type="submit" id="yith-searchsubmit" value="Tìm" />
                                        <!-- </div> -->
                                        <input type="hidden" name="post_type" value="product" />
                                        <?php do_action('wpml_add_language_form_field'); ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 hidden-xs hidden-sm">
                        <div class="top_phone_number">
                            <div class="phone-img"><img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/icon-contact.png"></div>
                            <div class="text">
                                <p class="phone-box"><strong>Hỗ trợ: </strong><a href="tel:<?php the_field('set_phone', 'option'); ?>">
                                        <span><?php the_field('set_phone', 'option'); ?></span></a></p>
                                <p class="email-box">Email:<a href="mailto:<?php the_field('set_email', 'option'); ?>" style="text-transform: none;">
                                        <span><?php the_field('set_email', 'option'); ?></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav class="sticky">
        <div class="nav-menu">
            <div class="nav-inner">
                <!-- mobile-menu -->
                <div class="hidden-md" id="mobile-menu">
                    <ul class="navmenu">
                        <li>
                            <div class="menutop">
                                <div class="toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></div>
                                <h2>Menu</h2>
                            </div>
                            <ul style="display:none;" class="submenu">
                                <li>
                                    <?php wp_nav_menu(array(
                                        'theme_location' => 'menu-1',
                                        'container'            => 'ul',
                                        'menu_class' => 'topnav',
                                        // 'menu_id' => 'nav',
                                        'walker' => new Custom_Walker_Nav_Mobile()
                                    ));
                                    ?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!--End mobile-menu -->
                <div class="side-nav-categories hidden-xs hidden-sm">
                    <div class="spverticalmenu">
                        <div class="block-title">Danh mục sản phẩm</div>
                    </div>
                    <div class="box-content box-category">
                        <?php echo show_category_in_nav(); ?>
                    </div>
                </div>
                <?php wp_nav_menu(array(
                    'theme_location' => 'menu-1',
                    'container'            => 'ul',
                    'menu_class' => 'hidden-xs hidden-sm',
                    'menu_id' => 'nav',
                    'walker' => new Custom_Walker_Nav_Menu()
                ));
                ?>

                <div class="pull-right menu-img">
                    <!-- Top Cart -->
                    <div class="top-cart-contain">
                        <div class="mini-cart">
                            <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle">
                                <a href="<?php echo esc_url(home_url('/')); ?>/cart" onclick="location.href=/cart/39">
                                    <div class="content-icon-cart"><img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/icon-cart.png" class="cl-block" style="width:20px;"><img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/icon-cart-2.png" class="cl-hidden" style="width:20px;"></div>
                                    <div class="cart-box hidden-col"><span id="cart-total">1</span></div>
                                </a>
                            </div>
                            <div>
                                <div style="display: none;" class="top-cart-content arrow_box">
                                    <div class="block-subtitle">Sản phẩm đã cho vào giỏ hàng</div>
                                    <ul id="cart-sidebar" class="mini-products-list">

                                    </ul>
                                    <div class="footer_form">
                                        <div class="">
                                            <li>
                                                <div class="top-subtotal">Tổng cộng: <span class="price">0₫</span>
                                                </div>
                                            </li>
                                            <li style="margin-left:-15px;margin-right:-15px;">
                                                <div class="actions">
                                                    <a href="<?php echo esc_url(home_url('/')) . '/cart' ?>" class="btn-checkout" type="button">
                                                        <span>Thanh toán</span></a>
                                                    <a href="<?php echo esc_url(home_url('/')) . '/cart' ?>" class="view-cart" type="button">
                                                        <span>Giỏ hàng</span>
                                                    </a>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-icon-reweer hidden-xs hidden-sm">
                        <a href="javascript:history.go(0)">
                            <img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/retweet-arrows-1.png" style="width:20px" title="tải lại trang" alt="Tải lại trang">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <style>
        #nav ul.level0>li>a {
            font-size: 14px;
            color: #7d7d7d;
            line-height: 30px;
            text-transform: uppercase;
        }

        #nav ul.sub-menu.dropdown-content {
            margin-left: 0;
            padding-left: 0;
            color: #7d7d7d;
            line-height: 30px;
            padding: 0 10px;
            font-size: 14px;
            display: block;
            transition: all 200ms ease-in-out;
            -webkit-transition: all 200ms ease-in-out;
            -moz-transition: all 200ms ease-in-out;
            -o-transition: all 200ms ease-in-out;
        }

        #nav ul.level0>li>a span {
            position: relative;
        }

        #nav ul.level0>li>a span:after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            background: #eee;
            height: 0.5px;
        }

        #mobile-menu ul.navmenu .menutop {
            display: flex;
        }

        #cart-sidebar img {
            width: 80px;
        }

        @media screen and (max-width: 600px) {
            .sale-label {
                left: -480px;
                padding: 50px 30px 5px;
            }
        }

        @media screen and (max-width: 470px) {
            .sale-label {
                left: -130px;
                padding: 30px 30px 5px;
            }

            .masonry-container {
                margin-top: 36px;
            }
        }
    </style>