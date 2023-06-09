<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<?php if ( $price_html = $product->get_price_html() ) : ?>
<div class="price-block">
	<div class="price-box">
		<?php echo $product->get_price_html(); ?>
	</div>
</div>
<?php else: ?>
	<div class="price-block">
	<div class="price-box">
		<a class="price" href="tel:<?php the_field('set_phone', 'option'); ?>">Liên hệ</a>
	</div>
</div>
<?php endif; ?>
