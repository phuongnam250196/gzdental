<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_account_navigation' );
?>
<style>
	.woocommerce-account .woocommerce-MyAccount-content {
		width: 100%;
	}
	.entry-content {
		border-bottom: none;
	}
</style>
<div class="row">
	<aside class="col-right sidebar col-sm-3 wow bounceInRight animated col-xs-12 animated" style="visibility: visible;">
		<div class="danh-muc-blog">
			<div class="color-blog">
				<h3 class="title-blog-2">Chức năng</h3>
			</div>
			<div class="index-column-blog row-service">
				<ul class="links">
					<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : 
						if ($endpoint == 'downloads'):
						else:
						?>
						<li>
							<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php echo custom_navigation_name($endpoint); ?></a>
						</li>
					<?php endif;endforeach; ?>
				</ul>
			</div>
		</div>
	</aside>
	<div class="col-sm-9 col-md-9">
<?php do_action( 'woocommerce_after_account_navigation' ); ?>
