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
<!-- saved from url=(0040)<?php echo esc_url( home_url( '/' ) ); ?>/ -->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/libs/imgs/favicon.png"
        type="image/x-icon">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/css/save-me.css">
    <link href="<?php echo get_template_directory_uri(); ?>/libs/css/blogmate.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/libs/css/flexslider.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/libs/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/libs/css/jgrowl.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/libs/css/clockdown.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/css/font-awesome.min.css">
    <link href="<?php echo get_template_directory_uri(); ?>/libs/css/newstyle-test.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/libs/css/ProductRecentStyle.css" rel="stylesheet" type="text/css">
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
                                <h1>Chào mừng bạn đã đến với VẬT LIỆU, THIẾT BỊ NHA KHOA THĂNG LONG! </h1>
                            </div>
                            <!-- End Default Welcome Message -->
                        </div>
                        <div class="col-sm-5 col-xs-5">
                            <div class="row">
                                <div class="toplinks">
                                    <div class="links">
                                        <div><span class=""><a
                                                    href="<?php echo esc_url( home_url( '/' ) ); ?>/my-account"
                                                    id="customer_login_link">Đăng nhập</a></span></div>
                                        <div><span class=""><a
                                                    href="<?php echo esc_url( home_url( '/' ) ); ?>/my-account"
                                                    id="customer_register_link">Đăng ký</a></span></div>
                                    </div>
                                    <!-- links -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
                        <!-- Header Logo -->
                        <div class="logo">
                            <a title="VẬT LIỆU, THIẾT BỊ NHA KHOA THĂNG LONG"
                                href="<?php echo esc_url( home_url( '/' ) ); ?>/">
                                <img alt="VẬT LIỆU, THIẾT BỊ NHA KHOA THĂNG LONG"
                                    src="<?php echo get_template_directory_uri(); ?>/libs/imgs/logo.png">
                                <h1 style="display:none;">VẬT LIỆU, THIẾT BỊ NHA KHOA THĂNG LONG</h1>
                            </a>
                        </div>
                        <!-- End Header Logo -->
                    </div>
                    <div class="col-lg-4 col-md-4 hidden-xs hidden-sm">
                        <div class="top_phone_number">
                            <div class="phone-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/libs/imgs/icon-contact.png"></div>
                            <div class="text">
                                <p class="phone-box"><strong>Hỗ trợ: </strong><a href="tel:077.9192.888">
                                        <span>077.9192.888</span></a></p>
                                <p class="email-box">Email:<a href="mailto:vatlieunhakhoathanglong@gmail.com"
                                        style="text-transform: none;">
                                        <span>vatlieunhakhoathanglong@gmail.com</span></a></p>
                            </div>
                        </div>
                        <div class="header_search hidden-xs">
                            <form class="input-group search-bar" action="<?php echo esc_url( home_url( '/' ) ); ?>/search"
                                method="get" role="search">
                                <div class="collection-selector">
                                    <div class="search_text">Danh mục</div>
                                    <div id="search_info" class="list_search">
                                        <div class="search_item" data-coll-id="938054">Vật liệu điều trị nội...</div>
                                        <div class="search_item" data-coll-id="916969">Vật tư labo</div>
                                        <div class="search_item" data-coll-id="916967">Mô hình tư vấn</div>
                                        <div class="search_item" data-coll-id="916966">Vật tư tiêu hao</div>
                                        <div class="search_item" data-coll-id="916964">Vật tư chỉnh nha</div>
                                        <div class="search_item" data-coll-id="916963">Dụng cụ chỉnh nha</div>
                                        <div class="search_item" data-coll-id="916962">Tay khoan; mũi khoan nha...</div>
                                        <div class="search_item" data-coll-id="916961">Dụng cụ phòng khám</div>
                                        <div class="search_item" data-coll-id="916960">Vật tư, dụng cụ nha...</div>
                                        <div class="search_item" data-coll-id="916959">Thiết bị khác, linh kiện...</div>
                                        <div class="search_item" data-coll-id="916958">Thiết bị labo</div>
                                        <div class="search_item" data-coll-id="916957">Thiết bị implant</div>
                                        <div class="search_item" data-coll-id="916956">Thiết bị nội nha;hình ảnh</div>
                                        <div class="search_item" data-coll-id="916955">Thiết bị hấp sấy tiệt...</div>
                                        <div class="search_item" data-coll-id="916954">Đèn tẩy trắng</div>
                                        <div class="search_item" data-coll-id="916953">Máy cạo vôi &amp; đèn...</div>
                                        <div class="search_item" data-coll-id="916952">Máy nén khí</div>
                                        <div class="search_item" data-coll-id="916951">Ghế nha khoa</div>
                                        <div class="search_item" data-coll-id="916950">Thiết bị nha khoa</div>
                                        <div class="search_item" data-coll-id="916949">Vật liệu labo</div>
                                        <div class="liner_search"></div>
                                        <div class="search_item active" data-coll-id="0">Tất cả</div>
                                    </div>
                                </div>
                                <input type="search" name="query" value="" placeholder="Bạn muốn tìm gì... "
                                    class="input-group-field st-default-search-input search-text" autocomplete="off">
                                <span class="input-group-btn">
                                    <button class="btn icon-fallback-text">
                                        <span class="fa fa-search"></span>
                                    </button>
                                </span>
                            </form>
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
                                <div class="toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                                        class="icon-bar"></span></div>
                                <h2>Menu</h2>
                            </div>
                            <ul style="display:none;" class="submenu">
                                <li>
                                    <ul class="topnav">
                                        <li class="level0 level-top parent"> <a class="level-top"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/"> <span>Trang chủ</span>
                                            </a> </li>
                                        <li class="level0 level-top parent"> <a class="level-top"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/gioi-thieu"> <span>Giới
                                                    thiệu</span> </a> </li>
                                        <li class="level0 level-top parent"><a class="level-top"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/collections/all">
                                                <span>Sản phẩm</span> </a><em>+</em>
                                            <ul class="level0">
                                                <li class="level1"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-lieu-dieu-tri-noi-nha">
                                                        <span>Vật liệu nha khoa</span> </a><em>+</em>
                                                    <ul class="level1">
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-lieu-dieu-tri-noi-nha-11"><span>Vật
                                                                    liệu điều trị nội nha</span></a></li>
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/chat-lay-dau"><span>Chất
                                                                    lấy dấu</span></a></li>
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-lieu-gan-rang"><span>Vật
                                                                    liệu gắn răng</span></a></li>
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-lieu-phuc-hinh"><span>Vật
                                                                    liệu phục hình</span></a></li>
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/tay-trang-rang"><span>Tẩy
                                                                    trắng răng</span></a></li>
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-lieu-gan-chinh-nha"><span>Vật
                                                                    liệu gắn Chỉnh nha</span></a></li>
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-lieu-labo"><span>Vật
                                                                    liệu labo</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="level1"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/thiet-bi-nha-khoa">
                                                        <span>Thiết bị nha khoa</span> </a><em>+</em>
                                                    <ul class="level1">
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/ghe-nha-khoa"><span>Ghế
                                                                    nha khoa</span></a></li>
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/may-nen-khi"><span>Máy
                                                                    nén khí</span></a></li>
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/may-cao-voi-den-quang-trung-hop"><span>Máy
                                                                    cạo vôi &amp; đèn quang trùng hợp</span></a></li>
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/den-tay-trang"><span>Đèn
                                                                    tẩy trắng</span></a></li>
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/thiet-bi-hap-say-tiet-trung"><span>Thiết
                                                                    bị hấp sấy tiệt trùng</span></a></li>
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/thiet-bi-noi-nha-hinh-anh"><span>Thiết
                                                                    bị nội nha;hình ảnh</span></a></li>
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/thiet-bi-implant"><span>Thiết
                                                                    bị implant</span></a></li>
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/thiet-bi-labo"><span>Thiết
                                                                    bị labo</span></a></li>
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/thiet-bi-khac-linh-kien-thay-the"><span>Thiết
                                                                    bị khác, linh kiện thay thế</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="level1"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-tu-dung-cu-nha-khoa">
                                                        <span>Vật tư, dụng cụ nha khoa</span> </a><em>+</em>
                                                    <ul class="level1">
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/dung-cu-phong-kham"><span>Dụng
                                                                    cụ phòng khám</span></a></li>
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/tay-khoan-mui-khoan-nha-khoa"><span>Tay
                                                                    khoan, mũi khoan nha khoa</span></a></li>
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/dung-cu-chinh-nha"><span>Dụng
                                                                    cụ chỉnh nha</span></a></li>
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-tu-chinh-nha"><span>Vật
                                                                    tư chỉnh nha</span></a></li>
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-tu-tieu-hao"><span>Vật
                                                                    tư tiêu hao</span></a></li>
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/mo-hinh-tu-van"><span>Mô
                                                                    hình tư vấn</span></a></li>
                                                        <li class="level2"><a
                                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-tu-labo"><span>Vật
                                                                    tư labo</span></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level0 level-top parent"><a class="level-top"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/thu-vien"> <span>Thư
                                                    viện</span> </a>
                                        </li>
                                        <li class="level0 level-top parent"> <a class="level-top"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/tin-tuc"> <span>Tin
                                                    tức</span> </a> </li>
                                        <li class="level0 level-top parent"> <a class="level-top"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/lien-he"> <span>Liên
                                                    hệ</span> </a> </li>
                                        <li class="level0 level-top parent"> <a class="level-top"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/video"> <span>Video</span>
                                            </a> </li>
                                        <li style="margin-bottom: 5px;margin-top: 5px;overflow: hidden;border: none;">
                                            <form id="searchbox" class="popup-content"
                                                action="<?php echo esc_url( home_url( '/' ) ); ?>/search" method="get"
                                                role="search">
                                                <input id="search_query_top"
                                                    class="search_query form-control search-mobile-header" type="search"
                                                    name="query" value="" placeholder="Tìm kiếm sản phẩm..."
                                                    aria-label="Tìm kiếm sản phẩm...">
                                                <button id="search_button" class="btn btn-sm" type="submit"
                                                    style="color: white; height: 35px; background: var(--color-main);  float: right;">
                                                    <span>Tìm kiếm</span>
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--End mobile-menu -->
                <ul id="nav" class="hidden-xs hidden-sm">
                    <!-- Menu collection -->
                    <div class="side-nav-categories">
                        <div class="spverticalmenu">
                            <div class="block-title">Danh mục sản phẩm</div>
                        </div>
                        <div class="box-content box-category">
                            <ul id="left-menu">
                                <li class="lv0 open menu-icon">
                                    <a class="lv0"
                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-lieu-dieu-tri-noi-nha"><span
                                            class="child-title">Vật liệu nha khoa</span><i class="fa fa-angle-right"
                                            aria-hidden="true"></i></a>
                                    <ul class="lv1">
                                        <li class="lv1 open"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/"><span
                                                    class="lv1-title">Vật liệu điều trị nội nha</span></a>
                                            <ul class="lv2">
                                            </ul>
                                        </li>
                                        <li class="lv1"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/chat-lay-dau"><span
                                                    class="lv1-title">Chất lấy dấu</span></a></li>
                                        <li class="lv1"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-lieu-gan-rang"><span
                                                    class="lv1-title">Vật liệu gắn răng</span></a></li>
                                        <li class="lv1"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-lieu-phuc-hinh"><span
                                                    class="lv1-title">Vật liệu phục hình</span></a></li>
                                        <li class="lv1"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/tay-trang-rang"><span
                                                    class="lv1-title">Tẩy trắng răng</span></a></li>
                                        <li class="lv1"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-lieu-gan-chinh-nha"><span
                                                    class="lv1-title">Vật liệu gắn Chỉnh nha</span></a></li>
                                        <li class="lv1"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-lieu-labo"><span
                                                    class="lv1-title">Vật liệu labo</span></a></li>
                                    </ul>
                                </li>
                                <li class="lv0 open menu-icon">
                                    <a class="lv0"
                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/thiet-bi-nha-khoa"><span
                                            class="child-title">Thiết bị nha khoa</span><i class="fa fa-angle-right"
                                            aria-hidden="true"></i></a>
                                    <ul class="lv1">
                                        <li class="lv1"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/ghe-nha-khoa"><span
                                                    class="lv1-title">Ghế nha khoa</span></a></li>
                                        <li class="lv1"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/may-nen-khi"><span
                                                    class="lv1-title">Máy nén khí</span></a></li>
                                        <li class="lv1 open"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/"><span
                                                    class="lv1-title">Máy cạo vôi &amp; đèn quang trùng hợp</span></a>
                                            <ul class="lv2">
                                            </ul>
                                        </li>
                                        <li class="lv1"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/den-tay-trang"><span
                                                    class="lv1-title">Đèn tẩy trắng</span></a></li>
                                        <li class="lv1"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/thiet-bi-hap-say-tiet-trung"><span
                                                    class="lv1-title">Thiết bị hấp sấy tiệt trùng</span></a></li>
                                        <li class="lv1"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/thiet-bi-noi-nha-hinh-anh"><span
                                                    class="lv1-title">Thiết bị nội nha;hình ảnh</span></a></li>
                                        <li class="lv1"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/thiet-bi-implant"><span
                                                    class="lv1-title">Thiết bị implant</span></a></li>
                                        <li class="lv1"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/thiet-bi-labo"><span
                                                    class="lv1-title">Thiết bị labo</span></a></li>
                                        <li class="lv1"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/thiet-bi-khac-linh-kien-thay-the"><span
                                                    class="lv1-title">Thiết bị khác, linh kiện thay thế</span></a></li>
                                    </ul>
                                </li>
                                <li class="lv0 open menu-icon">
                                    <a class="lv0"
                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-tu-dung-cu-nha-khoa"><span
                                            class="child-title">Vật tư, dụng cụ nha khoa</span><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    <ul class="lv1">
                                        <li class="lv1"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/dung-cu-phong-kham"><span
                                                    class="lv1-title">Dụng cụ phòng khám</span></a></li>
                                        <li class="lv1"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/tay-khoan-mui-khoan-nha-khoa"><span
                                                    class="lv1-title">Tay khoan, mũi khoan nha khoa</span></a></li>
                                        <li class="lv1"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/dung-cu-chinh-nha"><span
                                                    class="lv1-title">Dụng cụ chỉnh nha</span></a></li>
                                        <li class="lv1"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-tu-chinh-nha"><span
                                                    class="lv1-title">Vật tư chỉnh nha</span></a></li>
                                        <li class="lv1"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-tu-tieu-hao"><span
                                                    class="lv1-title">Vật tư tiêu hao</span></a></li>
                                        <li class="lv1"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/mo-hinh-tu-van"><span
                                                    class="lv1-title">Mô hình tư vấn</span></a></li>
                                        <li class="lv1"><a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-tu-labo"><span
                                                    class="lv1-title">Vật tư labo</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Main Menu -->
                    <li class="level0 parent active"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/"><span>Trang
                                chủ</span></a></li>
                    <li class="level0 parent "><a href="<?php echo esc_url( home_url( '/' ) ); ?>/gioi-thieu"><span>Giới
                                thiệu</span></a></li>
                    <li class="level0 parent drop-menu test1 drop-menu1">
                        <div class="menu-img-icon"><img
                                src="<?php echo get_template_directory_uri(); ?>/libs/imgs/hot-icon.png" alt=""></div><a
                            href="<?php echo esc_url( home_url( '/' ) ); ?>/collections/all"><span>Sản phẩm</span></a>
                        <div class="level0-wrapper dropdown-6col">
                            <div class="level0-wrapper2">
                                <div class="nav-block nav-block-center">
                                    <ul class="level0">
                                        <li class="level1 parent item"> <a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-lieu-dieu-tri-noi-nha"><span>Vật
                                                    liệu nha khoa</span></a>
                                            <ul class="level1">
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-lieu-dieu-tri-noi-nha-11"><span>Vật
                                                            liệu điều trị nội nha</span></a> </li>
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/chat-lay-dau"><span>Chất
                                                            lấy dấu</span></a> </li>
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-lieu-gan-rang"><span>Vật
                                                            liệu gắn răng</span></a> </li>
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-lieu-phuc-hinh"><span>Vật
                                                            liệu phục hình</span></a> </li>
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/tay-trang-rang"><span>Tẩy
                                                            trắng răng</span></a> </li>
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-lieu-gan-chinh-nha"><span>Vật
                                                            liệu gắn Chỉnh nha</span></a> </li>
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-lieu-labo"><span>Vật
                                                            liệu labo</span></a> </li>
                                            </ul>
                                        </li>
                                        <li class="level1 parent item"> <a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/thiet-bi-nha-khoa"><span>Thiết
                                                    bị nha khoa</span></a>
                                            <ul class="level1">
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/ghe-nha-khoa"><span>Ghế
                                                            nha khoa</span></a> </li>
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/may-nen-khi"><span>Máy
                                                            nén khí</span></a> </li>
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/may-cao-voi-den-quang-trung-hop"><span>Máy
                                                            cạo vôi &amp; đèn quang trùng hợp</span></a> </li>
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/den-tay-trang"><span>Đèn
                                                            tẩy trắng</span></a> </li>
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/thiet-bi-hap-say-tiet-trung"><span>Thiết
                                                            bị hấp sấy tiệt trùng</span></a> </li>
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/thiet-bi-noi-nha-hinh-anh"><span>Thiết
                                                            bị nội nha;hình ảnh</span></a> </li>
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/thiet-bi-implant"><span>Thiết
                                                            bị implant</span></a> </li>
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/thiet-bi-labo"><span>Thiết
                                                            bị labo</span></a> </li>
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/thiet-bi-khac-linh-kien-thay-the"><span>Thiết
                                                            bị khác, linh kiện thay thế</span></a> </li>
                                            </ul>
                                        </li>
                                        <li class="level1 parent item"> <a class="lv1"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-tu-dung-cu-nha-khoa"><span>Vật
                                                    tư, dụng cụ nha khoa</span></a>
                                            <ul class="level1">
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/dung-cu-phong-kham"><span>Dụng
                                                            cụ phòng khám</span></a> </li>
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/tay-khoan-mui-khoan-nha-khoa"><span>Tay
                                                            khoan, mũi khoan nha khoa</span></a> </li>
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/dung-cu-chinh-nha"><span>Dụng
                                                            cụ chỉnh nha</span></a> </li>
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-tu-chinh-nha"><span>Vật
                                                            tư chỉnh nha</span></a> </li>
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-tu-tieu-hao"><span>Vật
                                                            tư tiêu hao</span></a> </li>
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/mo-hinh-tu-van"><span>Mô
                                                            hình tư vấn</span></a> </li>
                                                <li class="level2"> <a
                                                        href="<?php echo esc_url( home_url( '/' ) ); ?>/vat-tu-labo"><span>Vật
                                                            tư labo</span></a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mega-menu-img row">
                                <div class="col-lg-6 col-md-6">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>/#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/image-thum-1.jpg"
                                            alt="#" title="">
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>/#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/image-thum-2.jpg"
                                            alt="#" title="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="level0 parent drop-menu test2">
                        <div class="menu-img-icon"><img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/new-icon.png" alt=""></div><a
                            href="<?php echo esc_url( home_url( '/' ) ); ?>/thu-vien"><span>Thư viện</span></a>
                        
                    </li>
                    <li class="level0 parent "><a href="<?php echo esc_url( home_url( '/' ) ); ?>/tin-tuc"><span>Tin
                                tức</span></a></li>
                    <li class="level0 parent "><a href="<?php echo esc_url( home_url( '/' ) ); ?>/lien-he"><span>Liên
                                hệ</span></a></li>
                    <li class="level0 parent "><a
                            href="<?php echo esc_url( home_url( '/' ) ); ?>/video"><span>Video</span></a></li>
                </ul>
                <div class="pull-right menu-img">
                    <!-- Top Cart -->
                    <div class="top-cart-contain">
                        <div class="mini-cart">
                            <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/cart" onclick="location.href=/cart/39">
                                    <div class="content-icon-cart"><img
                                            src="<?php echo get_template_directory_uri(); ?>/libs/imgs/icon-cart.png"
                                            class="cl-block" style="width:20px;"><img
                                            src="<?php echo get_template_directory_uri(); ?>/libs/imgs/icon-cart-2.png"
                                            class="cl-hidden" style="width:20px;"></div>
                                    <div class="cart-box hidden-col"><span id="cart-total">1</span></div>
                                </a>
                            </div>
                            <div>
                                <div style="display: none;" class="top-cart-content arrow_box">
                                    <div class="block-subtitle">Sản phẩm đã cho vào giỏ hàng</div>
                                    <ul id="cart-sidebar" class="mini-products-list">
                                        <li class="item"><a class="product-image"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>/dung-dich-bom-rua-ong-tuy-parcan"
                                                title="DUNG DỊCH BƠM RỬA ỐNG TỦY PARCAN"><img
                                                    alt="DUNG DỊCH BƠM RỬA ỐNG TỦY PARCAN"
                                                    src="<?php echo get_template_directory_uri(); ?>/libs/imgs/parcan-septodont.jpg"
                                                    width="80"></a>
                                            <div class="detail-item">
                                                <div class="product-details"> <a href="javascript:void(0);" title="Xóa"
                                                        onclick="Bizweb.removeItem(10080338)"
                                                        class="fa fa-remove">&nbsp;</a>
                                                    <p class="product-name"> <a
                                                            href="<?php echo esc_url( home_url( '/' ) ); ?>/dung-dich-bom-rua-ong-tuy-parcan"
                                                            title="DUNG DỊCH BƠM RỬA ỐNG TỦY PARCAN">DUNG DỊCH BƠM RỬA
                                                            ỐNG TỦY PARCAN</a></p>
                                                </div>
                                                <div class="product-details-bottom"> <span class="price">870.000₫</span>
                                                    <span class="title-desc">Số lượng:</span> <strong>1</strong>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="footer_form">
                                        <div class="">
                                            <li>
                                                <div class="top-subtotal">Tổng cộng: <span class="price">870.000₫</span>
                                                </div>
                                            </li>
                                            <li style="margin-left:-15px;margin-right:-15px;">
                                                <div class="actions">
                                                    <button class="btn-checkout" type="button"
                                                        onclick="window.location.href=checkout">
                                                        <span>Thanh toán</span></button>
                                                    <a href="<?php echo esc_url( home_url( '/' )).'/cart' ?>" class="view-cart" type="button"
                                                     >
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
                            <img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/retweet-arrows-1.png"
                                style="width:20px" title="tải lại trang" alt="Tải lại trang">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>