<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'main' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<div class="row">
	
	<div class="col-main col-sm-push-3 col-sm-9 col-md-push-3 col-md-9 collection">
		<div class="category-description std">
			<div class="slider-items-products">
				<img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/bg-cate.jpg" alt="Vật liệu nha khoa" style="max-width:100%">
			</div>
			<div class="">
				<!-- <h2 class="cat-heading">Vật liệu nha khoa</h2> -->
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
					<h2 class="cat-heading"><?php woocommerce_page_title(); ?></h2>
				<?php endif; ?>
			</div>
		</div>
		<div class="category-products">
			<article class="col-main">
				<div class="toolbar">
					<div class="sorter col-md-4 col-sm-4 col-lg-4 hidden-xs">
						<ul class="tab-collection tab">
							<li class="tab-collection-grid tablinks"><a href="javascript:void(0)" class="grid-grid active"></a></li>
							<li class="tab-collection-list tablinks"><a href="javascript:void(0)" class="list-list"></a></li>
						</ul>
					</div>
					<div id="sort-by">
						<label class="left">Sắp xếp: </label>
						<!-- <ul>
							<li>Thứ tự <span class="right-arrow"></span>
								<ul>
									<li><a href="https://www.vatlieunhakhoathanglong.com/vat-lieu-dieu-tri-noi-nha?sortby=manual">Ngẫu nhiên</a></li>
									<li><a href="https://www.vatlieunhakhoathanglong.com/vat-lieu-dieu-tri-noi-nha?sortby=best-selling">Bán chạy nhất</a></li>
									<li><a href="https://www.vatlieunhakhoathanglong.com/vat-lieu-dieu-tri-noi-nha?sortby=alpha-asc">A → Z</a></li>
									<li><a href="https://www.vatlieunhakhoathanglong.com/vat-lieu-dieu-tri-noi-nha?sortby=alpha-desc">Z → A</a></li>
									<li><a href="https://www.vatlieunhakhoathanglong.com/vat-lieu-dieu-tri-noi-nha?sortby=price-asc">Giá tăng dần</a></li>
									<li><a href="https://www.vatlieunhakhoathanglong.com/vat-lieu-dieu-tri-noi-nha?sortby=price-desc">Giá giảm dần</a></li>
									<li><a href="https://www.vatlieunhakhoathanglong.com/vat-lieu-dieu-tri-noi-nha?sortby=created-desc">Hàng mới nhất</a></li>
									<li><a href="https://www.vatlieunhakhoathanglong.com/vat-lieu-dieu-tri-noi-nha?sortby=created-asc">Hàng cũ nhất</a></li>
								</ul>
							</li>
						</ul> -->
						<?php
							if ( woocommerce_product_loop() ) {

								/**
								 * Hook: woocommerce_before_shop_loop.
								 *
								 * @hooked woocommerce_output_all_notices - 10
								 * @hooked woocommerce_result_count - 20
								 * @hooked woocommerce_catalog_ordering - 30
								 */
								do_action( 'woocommerce_before_shop_loop' );

								// woocommerce_product_loop_start();
							?>
							<style>
								.woocommerce .woocommerce-ordering select {
									margin: 0;
								}
							</style>
					</div>
				</div>
				<?php echo woocommerce_pagination(); ?>
				<div id="grid" class="tabcontent">
					<div class="category-products row masonry-container" style="position: relative; height: 1929.8px;">
						<?php

						if ( wc_get_loop_prop( 'total' ) ) {
							while ( have_posts() ) {
								the_post();

								/**
								 * Hook: woocommerce_shop_loop.
								 */
								do_action( 'woocommerce_shop_loop' );

								wc_get_template_part( 'content', 'pcate' );
							}
						}

						// woocommerce_product_loop_end();
						?>
					</div>
				</div>
				<div id="list" class="tabcontent" style="display:none">
					<div class="category-products wow bounceInUp animated animated" style="visibility: visible;">
						<ol class="products-list" id="products-list">
							<?php
							if ( wc_get_loop_prop( 'total' ) ) {
								while ( have_posts() ) {
									the_post();

									/**
									 * Hook: woocommerce_shop_loop.
									 */
									do_action( 'woocommerce_shop_loop' );

									wc_get_template_part( 'content', 'pcatelist' );
								}
							}

							// woocommerce_product_loop_end();
							?>
						</ol>
					</div>
					<div class="clearfix"></div>
				</div>
				<?php echo woocommerce_pagination(); ?>
			</article>
		</div>
	</div>
	<div class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 hidden-xs">
		<div class="danh-muc-blog">
			<div class="color-blog">
				<h3 class="title-blog-2">Sản Phẩm</h3>
			</div>
			<div class="index-column-blog row-service">
				<?php echo show_category_in_category(); ?>
			</div>
		</div>
		<div class="danh-muc-blog-custom">
			<ul>
				<?php dynamic_sidebar( 'sidebar_category' ); ?>
			</ul>
		</div>
	</div>
</div>
	<?php

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action( 'woocommerce_sidebar' );

get_footer( 'main' );

?>
 	<script>
        $(document).ready(function(){
			$(".tab-collection .list-list").click(function(){
				$('.tab-collection li a').removeClass('active');
				$(this).addClass('active');
				$(".tabcontent").css('display', 'none');
				$('#list').css('display', 'block');
			});
			$(".tab-collection .grid-grid").click(function(){
				$('.tab-collection li a').removeClass('active');
				$(this).addClass('active');
				$(".tabcontent").css('display', 'none');
				$('#grid').css('display', 'block');
			});
			console.log($(".to").text());
			$("#min_price").change(function() {
				console.log('val');
			});
		});
	</script>
<style>
	.main-col {
		overflow: inherit;
	}
	#list .sale-label {
		display: none;
	}
	ol.products-list {
		float: inherit;
	}
	#list .product-image img {
		max-width: 50%;
	}
	.tab-collection {
		margin: 0;
	}
	.danh-muc-blog form {
		padding: 15px;
	}
</style>