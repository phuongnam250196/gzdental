<?php
/**
 * Single Product Share
 *
 * Sharing plugins can hook into here or you can add your own code directly.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/share.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_share' ); // Sharing plugins can hook into here.


/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
?>
<div class="social-product">
	<label>Share</label>
	<div class="social pull-left">
		<ul class="link">
			<li class="fb pull-left">
				<a class="btn social-sharing btn-facebook" href="javascript:void ;"
					data-type="facebook"><img
						src="<?php echo get_template_directory_uri(); ?>/libs/imgs/facebook-logo-button.png"
						atl=""></a>
			</li>
			<li class="tw pull-left">
				<a class="btn social-sharing btn-twitter" href="javascript:void ;"
					data-type="twitter"><img
						src="<?php echo get_template_directory_uri(); ?>/libs/imgs/twitter-logo-button.png"
						atl=""></a>
			</li>
			<li class="googleplus pull-left">
				<a class="btn social-sharing btn-google-plus"
					href="javascript:void ;" data-type="google-plus"><img
						src="<?php echo get_template_directory_uri(); ?>/libs/imgs/google-plus-logo-button.png"
						atl=""></a>
			</li>
			<li class="rss pull-left">
				<a class="btn social-sharing btn-pinterest" href="javascript:void ;"
					data-type="pinterest"><img
						src="<?php echo get_template_directory_uri(); ?>/libs/imgs/rss.png"
						atl=""></a>
			</li>
		</ul>
		
	</div>
</div>