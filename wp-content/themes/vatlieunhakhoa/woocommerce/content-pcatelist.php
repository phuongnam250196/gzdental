<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
global $post;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
$link = apply_filters('woocommerce_loop_product_link', get_the_permalink(), $product);
?>
	<li class="item even">
		<div class="product-image">
			<?php
			/**
			 * Hook: woocommerce_before_shop_loop_item.
			 *
			 * @hooked woocommerce_template_loop_product_link_open - 10
			 */
			do_action( 'woocommerce_before_shop_loop_item' );

			/**
			 * Hook: woocommerce_before_shop_loop_item_title.
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */
			do_action( 'woocommerce_before_shop_loop_item_title' );
			?>
			</div>
			<div class="product-shop">
				<h2 class="product-name">
					<a href="<?php echo $link; ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a>
				</h2>
			
				<?php

				/**
				 * Hook: woocommerce_shop_loop_item_title.
				 *
				 * @hooked woocommerce_template_loop_product_title - 10
				 */
				// do_action( 'woocommerce_shop_loop_item_title' );

				/**
				 * Hook: woocommerce_after_shop_loop_item_title.
				 *
				 * @hooked woocommerce_template_loop_rating - 5
				 * @hooked woocommerce_template_loop_price - 10
				 */
				do_action( 'woocommerce_after_shop_loop_item_title' );
				
				$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );
				$string_len = strlen($short_description);
				?>
				<div class="desc std">
					<p> <?php echo substr($short_description,  0, 140); ?>
					<?php if ($string_len > 140): ?>
						<a class="link-learn" href="<?php echo $link; ?>">Xem thêm</a>
					<?php endif; ?>
					</p>
				</div>
				<div class="actions">
					<form>
						<?php

							/**
							 * Hook: woocommerce_after_shop_loop_item.
							 *
							 * @hooked woocommerce_template_loop_product_link_close - 5
							 * @hooked woocommerce_template_loop_add_to_cart - 10
							 */
							do_action( 'woocommerce_after_shop_loop_item' );
							?>
					</form>
					<div class="eye-product">
						<a href="<?php echo $link; ?>" title="<?php echo get_the_title(); ?>">
							<img class="eye-img" src="<?php echo get_template_directory_uri(); ?>/libs/imgs/eye.png"></a>
					</div>
				</div>
			</div>
	</li>
