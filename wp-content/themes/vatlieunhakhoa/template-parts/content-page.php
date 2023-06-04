<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vatlieunhakhoa
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if (is_cart()) {
				echo '<h1 class="entry-title">Giỏ hàng</h1>';
			} else if (is_account_page()) {
				echo '<h1 class="entry-title">Tài khoản của tôi</h1>';
			} else if (is_checkout()) {
				echo '<h1 class="entry-title">Thanh toán</h1>';
			} else {
				the_title( '<h1 class="entry-title">', '</h1>' );
			}
		?>
	</header><!-- .entry-header -->

	<?php vatlieunhakhoa_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'vatlieunhakhoa' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<!-- <?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'vatlieunhakhoa' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer>
	<?php endif; ?> -->
</article><!-- #post-<?php the_ID(); ?> -->
