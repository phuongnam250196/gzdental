<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>
	<div class="clearfix"></div>
	<section class="upsell-pro">
        <div class="container">
            <div class="slider-items-products">
				<?php
				$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Sản phẩm tương tự', 'woocommerce' ) );

				if ( $heading ) :
					?>
					<div class="new_title center"><h2><?php echo esc_html( $heading ); ?></h2></div>
				<?php endif; ?>
				<div class="category-products row">
					<?php foreach ( $related_products as $related_product ) : ?>
						<div class="col-md-3 col-sm-3 col-xs-6">
							<div class="col-item">
								<?php if ($related_produc->sale_price != ""): ?>
									<div class="sale-label sale-top-right">Sale</div>
								<?php endif; ?>
								<div class="item-inner">
									<div class="product-wrapper">
										<div class="thumb-wrapper">
											<a
												href="<?php echo esc_url( home_url( '/' ) ).'/'.$related_product->slug; ?>"><img
													src="<?php echo wp_get_attachment_image_src($related_product->image_id, 'full')[0]; ?>"
													class="img-fix"
													alt="<?php echo $related_product->name; ?>"></a>
										</div>
									</div>
									<div class="item-info">
										<div class="info-inner">
											<div class="item-title"> <a
													href="<?php echo esc_url( home_url( '/' ) ).'/'.$related_product->slug; ?>"
													title="<?php echo $related_product->name; ?>"><?php echo $related_product->name; ?></div>
											<div class="item-content">
												<div class="item-price">
													<div class="price-box">
														<?php if (empty($related_product->price)): ?>
															<p class="special-price">
																<span class="price-label">Giá:</span>
																<span class="price">Liên hệ</span>
															</p>
														<?php else: ?>
															<?php if ($related_produc->sale_price != ""): ?>
																<p class="special-price">
																	<span class="price-label">Giá khuyến mại</span>
																	<span class="price"><?php echo number_format($related_product->sale_price, 0, '', '.'); ?></span>
																</p>
																<p class="old-price">
																	<span class="price-label">Giá cũ:</span>
																	<span class="price" id="old-price"><?php echo number_format($related_product->price, 0, '', '.'); ?></span>
																</p>
															<?php else: ?>
																<p class="special-price">
																	<span class="price-label">Giá:</span>
																	<span class="price"><?php echo number_format($related_product->price, 0, '', '.'); ?></span>
																</p>
															<?php endif; ?>
														<?php endif; ?>
													</div>
												</div>
											</div>
										</div>
										<div class="actions">
											<form class="variants">
												<?php
													// global $product;
													$args = array();
													
													if ( $related_product ) {
														$defaults = array(
															'quantity'   => 1,
															'class'      => implode(
																' ',
																array_filter(
																	array(
																		'button',
																		'product_type_' . $related_product->get_type(),
																		$related_product->is_purchasable() && $related_product->is_in_stock() ? 'add_to_cart_button' : '',
																		$related_product->supports( 'ajax_add_to_cart' ) && $related_product->is_purchasable() && $related_product->is_in_stock() ? 'ajax_add_to_cart' : '',
																	)
																)
															),
															'attributes' => array(
																'data-product_id'  => $related_product->get_id(),
																'data-product_sku' => $related_product->get_sku(),
																'aria-label'       => $related_product->add_to_cart_description(),
																'rel'              => 'nofollow',
															),
														);
											
														$args = apply_filters( 'woocommerce_loop_add_to_cart_args', wp_parse_args( $args, $defaults ), $related_product );
											
														if ( isset( $args['attributes']['aria-label'] ) ) {
															$args['attributes']['aria-label'] = wp_strip_all_tags( $args['attributes']['aria-label'] );
														}
											
														wc_get_template( 'loop/add-to-cart.php', $args );
													}
													;?>
											</form>
											<div class="eye-product"><a
													href="<?php echo esc_url( home_url( '/' ) ).'/'.$related_product->slug; ?>"
													title="<?php echo $related_product->name; ?>"><img
														class="eye-img"
														src="<?php echo get_template_directory_uri(); ?>/libs/imgs/eye.png"></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div><script> console.log(<?php echo $related_product;?>)</script></div>

					<?php endforeach; ?>
				</div>
			</div>
	</section>
	<?php
endif;

wp_reset_postdata();
