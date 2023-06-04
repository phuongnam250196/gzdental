<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vatlieunhakhoa
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

	<aside class="col-right sidebar col-sm-3 wow bounceInRight animated hidden-xs hidden-sm animated" style="visibility: visible;">
		
	<div class="danh-muc-blog">
			<div class="color-blog">
				<h3 class="title-blog-2">Sản Phẩm</h3>
			</div>
			<div class="index-column-blog row-service">
				<?php echo show_category_in_category(); ?>
			</div>
		</div>
		<div class="danh-muc-blog">
			<div class="danh-muc-blog-custom">
				<ul>
					<?php dynamic_sidebar( 'sidebar_news' ); ?>
				</ul>
			</div>
		</div>
		<div class="danh-muc-blog-3">
			<div class="color-blog">
				<h3 class="title-blog-3">Bài viết khác</h3>
			</div>
			<div class="index-column-blog row-service">
				<ul class="posts-list unstyled clearfix">
					<?php $i=0; query_posts(array('category_name' => 'news','orderby' => 'date', 'order' => 'DESC',  'post_status' => 'publish')); 
						if(have_posts()) : while(have_posts()) : the_post();$i++; 
						if ($i < 11):
							?>
							<li>
								<article class="blog_entry-2 clearfix wow bounceInLeft animated animated" style="visibility: visible;">
									<div class="entry-content-2">
										<header class="blog_entry-header-2 clearfix">
											<div class="blog_entry-header-inner-2">
												<h3 class="blog_entry-title-2"> <a rel="bookmark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>
											</div>
											<!--blog_entry-header-inner-->
										</header>
									</div>
								</article>
							</li>
							<?php endif;endwhile; ?>
						<?php else : ?>
						<p>Không tìm thấy sản phẩm</p>
					<?php endif; wp_reset_query(); ?>
				</ul>
			</div>
		</div>
		<div role="complementary" class="widget_wrapper13" id="secondary">
			<div class="popular-posts widget widget__sidebar" id="recent-posts-4">
				<!-- Banner Ad Block -->
			</div>
			<div id="bw-statistics" class="bw-statistics"></div>
		</div>
	</aside>

	<style>
		.blog_entry-title-2 {
			overflow: hidden;
			text-overflow: ellipsis;
			display: -webkit-box;
			-webkit-box-orient: vertical;
			-webkit-line-clamp: 2;
		}
	</style>
	<style>
		.danh-muc-blog-custom .color-blog h3 {
			padding: 10px 0;
			text-align: center;
			margin-bottom: 0;
		}
		.woocommerce ul.cart_list li img, .woocommerce ul.product_list_widget li {
			border-top: 1px solid #ebebeb;
			padding: 15px 3px;
		}
		.woocommerce ul.cart_list li img, .woocommerce ul.product_list_widget li img {
			float: left;
			width: 60px;
			margin-right: 15px;
		}
		.woocommerce ul.cart_list li img, .woocommerce ul.product_list_widget li .product-title {
			color: #7d7d7d;
			font-size: 14px;
			font-weight: normal;
			overflow: hidden;
			text-overflow: ellipsis;
			display: -webkit-box;
			-webkit-box-orient: vertical;
			-webkit-line-clamp: 2;
			margin-bottom: 5px;
		}
		.woocommerce ul.cart_list li img, .woocommerce ul.product_list_widget li .cart-price {

		}
		
	</style>
