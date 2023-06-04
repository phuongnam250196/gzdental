<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'main' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		// do_action( 'woocommerce_sidebar' );
	?>
	<style>
		.main-col {
			overflow: visible;
		}
		.product-shop-detail del span {
			text-decoration: line-through;
			color: gray !important;
			font-size: 14px;
		}
		.product-shop-detail ins:before {
			content: "Giá sốc: ";
			font-size: 15px;
    		padding-left: 15px;
		}
		/* Chrome, Safari, Edge, Opera */
		.product-shop-detail input::-webkit-outer-spin-button,
		.product-shop-detail input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
		}

		/* Firefox */
		.product-shop-detail input[type=number] {
		-moz-appearance: textfield;
		}
		.product-shop-detail .quantity {
			display: inline;
		}
		.product-view .product-shop .add-to-box {
			padding-top: 0;
		}
		.product-view .product-shop .add-to-box .btn-cart {
			padding: 13px 25px;
		}
		.meta-detail-product {
			padding: 15px 0;
		}
		.variations tr td:first-child {
			width: 100px;
			vertical-align: top;
		}
		.variations tr td:first-child label {
			padding-top: 0 !important;
		}
	</style>
<?php
get_footer( 'main' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
