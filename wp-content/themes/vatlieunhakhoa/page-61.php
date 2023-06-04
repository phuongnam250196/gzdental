<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vatlieunhakhoa
 */

get_header("main");
?>
<!-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php $i = 0;
        query_posts(array('post_type' => 'slides', 'orderby' => 'date', 'order' => 'DESC'));
        if (have_posts()) : while (have_posts()) : the_post();
                $i++;
        ?>
                <li data-target="#carousel-example-generic" data-slide-to="<?php echo ($i - 1); ?>" class="<?php if ($i == 1) {
                                                                                                                echo 'active';
                                                                                                            } ?>"></li>
            <?php endwhile; ?>
        <?php else : ?>
        <?php endif;
        wp_reset_query(); ?>
    </ol>
    <div class="carousel-inner" role="listbox">
        <?php $i = 0;
        query_posts(array('post_type' => 'slides', 'orderby' => 'date', 'order' => 'DESC'));
        if (have_posts()) : while (have_posts()) : the_post();
                $i++;
        ?>
                <div class="item <?php if ($i == 1) {
                                        echo 'active';
                                    } ?>">
                    <a href="<?php echo home_url(); ?>#">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>">
                    </a>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p>sorry no results</p>
        <?php endif;
        wp_reset_query(); ?>

    </div>
</div> -->
<!-- <div class="table-service hidden-xs hidden-sm">
    <div class="container">
        <table class="service">
            <tbody>
                <tr class="service-tr">
                    <th class="service-th">
                        <div class="service-th-div">
                            <img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/icon-guide-1.png">
                            <div class="text">
                                <h5 class="hidden-xs"><a href="<?php echo esc_url(home_url('/')); ?>/#">Giao hàng
                                    </a></h5>
                                <p class="chinh_sach">miễn phí</p>
                            </div>
                        </div>
                    </th>
                    <th class="service-th">
                        <div class="service-th-div">
                            <img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/icon-guide-2.png">
                            <div class="text">
                                <h5 class="hidden-xs"><a href="<?php echo esc_url(home_url('/')); ?>/#">Thanh
                                        toán</a></h5>
                                <p class="chinh_sach">COD</p>
                            </div>
                        </div>
                    </th>
                    <th class="service-th">
                        <div class="service-th-div">
                            <img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/icon-guide-3.png">
                            <div class="text">
                                <h5 class="hidden-xs"><a href="<?php echo esc_url(home_url('/')); ?>/#">Hoàn trả
                                        tiền</a></h5>
                                <p class="chinh_sach">trong 3 ngày</p>
                            </div>
                        </div>
                    </th>
                    <th class="service-th">
                        <div class="service-th-div">
                            <img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/icon-guide-4.png">
                            <div class="text">
                                <h5 class="hidden-xs"><a href="<?php echo esc_url(home_url('/')); ?>/#">Đổi
                                        trả</a></h5>
                                <p class="chinh_sach">bảo hành</p>
                            </div>
                        </div>
                    </th>
                    <th class="service-th">
                        <div class="service-th-div">
                            <img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/icon-guide-5.png">
                            <div class="text">
                                <h5 class="hidden-xs"><a href="<?php echo esc_url(home_url('/')); ?>/#">Thanh toán
                                    </a></h5>
                                <p class="chinh_sach">bảo mật</p>
                            </div>
                        </div>
                    </th>
                    <th class="service-th">
                        <div class="service-th-div" style="border:0">
                            <img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/icon-guide-6.png">
                            <div class="text">
                                <h5 class="hidden-xs"><a href="<?php echo esc_url(home_url('/')); ?>/#">Hỗ trợ
                                    </a></h5>
                                <p class="chinh_sach">24/7</p>
                            </div>
                        </div>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
</div> -->

<div class="offer-banner-section hidden-xs">
    <ul class="container">
        <div class="row">
            <?php
            $key = 0;
            if (have_rows('box_1')) :
                while (have_rows('box_1')) : the_row();
                    ++$key;
                    if ($key < 4) :
            ?>
                        <li class="col-lg-4 col-xs-12 col-sm-4">
                            <a href="<?php if (get_sub_field('box_1_link')) {
                                            the_sub_field('box_1_link');
                                        } else {
                                            echo '#';
                                        } ?>">
                                <img alt="<?php the_sub_field('box_1_title'); ?>" title="<?php the_sub_field('box_1_title'); ?>" src="<?php the_sub_field('box_1_image'); ?>">
                            </a>
                        </li>
            <?php
                    endif;
                endwhile;
            else :
            endif;
            ?>
        </div>
    </ul>
</div>
<div class="main-col">
    <div class="container">
        <div class="std">
            <!-- Best Seller Slider -->
            <div class="best-seller-pro wow bounceInUp animated animated color animated" style="visibility: visible;">
                <div class="slider-items-products">
                    <div class="col-xs-12 col-sm-12 col-md-2 ">
                        <div class="new_title center">
                            <h2><a href="<?php echo esc_url(home_url('/product-category/')) . get_field("box_2_category_slug"); ?>"><?php the_field('box_2_title'); ?></a></h2>
                        </div>
                        <div class="index-column-2 row-service hidden-xs hidden-sm">
                            <ul class="links">
                                <?php echo get_product_subcategories_list(get_field("box_2_category_slug")); ?>
                            </ul>
                        </div>
                    </div>
                    <?php echo do_shortcode('[products limit="10" category="' . get_field("box_2_category_slug") . '" order="DESC" ]'); ?>
                </div>
            </div>
            <!-- End Best Seller Slider -->
        </div>
    </div>
</div>
<div class="main-col">
    <div class="container">
        <div class="std">
            <!-- Best Seller Slider -->
            <div class="best-seller-pro wow bounceInUp animated animated color-1 animated" style="visibility: visible;">
                <div class="slider-items-products">
                    <div class="col-xs-12 col-sm-12 col-md-2 ">
                        <div class="new_title center color-1">
                            <h2><a href="<?php echo esc_url(home_url('/product-category/')) . get_field("box_3_category_slug"); ?>"><?php the_field('box_3_title'); ?></a></h2>
                        </div>
                        <div class="index-column-2 row-service hidden-xs hidden-sm">
                            <ul class="links">
                                <?php echo get_product_subcategories_list(get_field("box_3_category_slug")); ?>
                            </ul>
                        </div>
                    </div>
                    <?php echo do_shortcode('[products limit="10" category="' . get_field("box_3_category_slug") . '" order="DESC" ]'); ?>
                </div>
            </div>
            <!-- End Best Seller Slider -->
        </div>
    </div>
</div>
<div class="main-col">
    <div class="container">
        <div class="std">
            <!-- Best Seller Slider -->
            <div class="best-seller-pro wow bounceInUp animated animated color-4 animated" style="visibility: visible;">
                <div class="slider-items-products">
                    <div class="col-xs-12 col-sm-12 col-md-2 ">
                        <div class="new_title center color-4">
                            <h2><a href="<?php echo esc_url(home_url('/product-category/')) . get_field("box_4_category_slug"); ?>"><?php the_field('box_4_title'); ?></a></h2>
                        </div>
                        <div class="index-column-2 row-service hidden-xs hidden-sm">
                            <ul class="links">
                                <?php echo get_product_subcategories_list(get_field("box_4_category_slug")); ?>
                            </ul>
                        </div>
                    </div>
                    <?php echo do_shortcode('[products limit="10" category="' . get_field("box_4_category_slug") . '" order="DESC" ]'); ?>
                </div>
            </div>
            <!-- End Best Seller Slider -->
        </div>
    </div>
</div>

<div class="promo-banner-section wow bounceInUp animated visible-lg" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
    <div class="container">
        <a href="/#"><img class="responsive-img" src="<?php the_field('box_5_banner'); ?>" alt="Tên banner lớn" title="Tên banner lớn"></a>
    </div>
</div>
<section class="latest-blog wow bounceInDown animated" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
    <div class="container">
        <div class="blog-title">
            <h2>Bài viết mới</h2>
        </div>
        <div class="row">
            <?php $i = 0;
            query_posts(array('category_name' => 'news', 'orderby' => 'date', 'order' => 'DESC',  'post_status' => 'publish'));
            if (have_posts()) : while (have_posts()) : the_post();
                    $i++;
                    if ($i < 4) :
            ?>
                        <div class="col-xs-12 col-sm-4">
                            <article class="blog_entry clearfix wow bounceInLeft animated" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                                <div class="entry-content">
                                    <div class="featured-thumb">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php vatlieunhakhoa_post_thumbnail(); ?>
                                        </a>
                                    </div>
                                    <header class="blog_entry-header clearfix">
                                        <div class="blog_entry-header-inner">
                                            <h3 class="blog_entry-title"> <a rel="bookmark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>
                                        </div>
                                        <!--blog_entry-header-inner-->
                                    </header>
                                    <div class="entry-content-small content-small">
                                        1. Tập trung vào nơi tiếp xúc giữa răng và nướu
                                        Đây là lời khuyên quan trọng nhất mà nha sĩ ...
                                    </div>
                                    <div class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_the_date(); ?> <i class="fa fa-comments-o" aria-hidden="true"></i> <?php echo get_comments_number(); ?> bình luận</div>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="link-article"><i class="fa fa-caret-right" style="margin-right: 3px;"></i>Đọc
                                    Tiếp</a>
                            </article>
                        </div>
                <?php endif;
                endwhile; ?>
            <?php else : ?>
                <p>Không tìm thấy sản phẩm</p>
            <?php endif;
            wp_reset_query(); ?>
        </div>
    </div>
</section>
<style>
    .latest-blog .blog_entry-title {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
    }
</style>
<div class="pr-module-box" style="border-color: rgb(255, 255, 255); background-color: rgb(249, 249, 249);">
    <div class="pr-module-title" style="color: rgb(0, 0, 0); text-align: center; font-weight: bold; font-style: normal; font-size: 15px;">SẢN
        PHẨM ĐÃ XEM</div>
    <div class="pr-slide-wrap">
        <ul class="pr-list-product-slide">
            <!-- <li class="pr-product-element" style="width: 20%;">
                    <a class="pr-link" href="<?php echo esc_url(home_url('/')); ?>/products/chat-han-tam-ceivitron-recodent?prsource=recently">
                        <div class="pr-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/chat-han-tam-ceivitron-recodent(1).jpg">
                        </div>
                        <div class="pr-name" style="color: rgb(0, 0, 0);">Chất trám tạm Ceivitron - Hộp 30g</div>
                        <div class="pr-price money" style="color: rgb(255, 102, 0);">90.000₫</div>
                    </a>
                </li> -->
        </ul>
    </div>
    <div class="pr-slide" style="display: none;">
    </div>
</div>

<?php
get_footer("main");
