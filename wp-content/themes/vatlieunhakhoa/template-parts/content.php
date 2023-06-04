<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vatlieunhakhoa
 */

?>

<article class="blog_entry clearfix wow bounceInLeft animated animated" style="visibility: visible;">
	<?php vatlieunhakhoa_post_thumbnail(); ?>
	<header class="blog_entry-header clearfix">
		<div class="blog_entry-header-inner">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="blog_entry-title blog_entry-title-art">', '</h1>' );
			else :
				the_title( '<h2 class="blog_entry-title blog_entry-title-art"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			?>
		</div>
		<?php

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-author"><i class="fa fa-user" aria-hidden="true" style="margin-right:2px"></i><?php vatlieunhakhoa_posted_by(); ?></div>
			<span style="margin:0 3px">|</span>
			<time datetime="13/tháng 1/2020" class="entry-date"><?php vatlieunhakhoa_posted_on(); ?></time>
			<span style="margin:0 3px">|</span><a rel="category tag" title="Tin tức" href="<?php echo esc_url( home_url( '/' ) ); ?>/tin-tuc">Tin tức</a>
		<?php endif; ?>
		<div class="entry-content" style="margin-top: 20px;">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'vatlieunhakhoa' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'vatlieunhakhoa' ),
					'after'  => '</div>',
				)
			);
			?>

			<div class="social-product">
				<div class="tin">
					<label>Bài viết liên quan</label>
					<?php $i=0; query_posts(array('category_name' => 'news','orderby' => 'date', 'order' => 'DESC',  'post_status' => 'publish')); 
                    if(have_posts()) : while(have_posts()) : the_post();$i++; 
                    if ($i < 11):
                        ?>
							<div class="tieudetin"><i class="fa fa-circle"></i><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
						<?php endif;endwhile; ?>
						<?php else : ?>
						<p>Không tìm thấy sản phẩm</p>
					<?php endif; wp_reset_query(); ?>
					
				</div>
				<label>Share</label>
				<div class="social pull-left">
					<ul class="link">
						<li class="fb pull-left">
							<a class="btn social-sharing btn-facebook" href="javascript:void ;" data-type="facebook"><img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/facebook-logo-button.png" atl=""></a>
						</li>
						<li class="tw pull-left">
							<a class="btn social-sharing btn-twitter" href="javascript:void ;" data-type="twitter"><img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/twitter-logo-button.png" atl=""></a>
						</li>
						<li class="googleplus pull-left">
							<a class="btn social-sharing btn-google-plus" href="javascript:void ;" data-type="google-plus"><img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/google-plus-logo-button.png" atl=""></a>
						</li>
						<li class="rss pull-left">
							<a class="btn social-sharing btn-pinterest" href="javascript:void ;" data-type="pinterest"><img src="<?php echo get_template_directory_uri(); ?>/libs/imgs/rss.png" atl=""></a>
						</li>
					</ul>
					
				</div>
			</div>
		</div>

	</header><!-- .entry-header -->
	<footer class="entry-meta">
		<div><span style="float: left;"><i class="fa fa-tags" aria-hidden="true"></i></span>
			<ul style="float: left; margin-left: 5px;">
				<li style="float: left; margin-right: 5px;padding: 0 5px; background-color: #f2f2f2;">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>/blogs/tin-tuc/tagged/bang-so-mau-rang-vita-3d">bang so mau rang Vita 3D</a>
				</li>
				<li style="float: left; margin-right: 5px;padding: 0 5px; background-color: #f2f2f2;">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>/blogs/tin-tuc/tagged/gia">giả</a>
				</li>
				<li style="float: left; margin-right: 5px;padding: 0 5px; background-color: #f2f2f2;">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>/blogs/tin-tuc/tagged/mui-khoan-mani">mui khoan mani</a>
				</li>
				<li style="float: left; margin-right: 5px;padding: 0 5px; background-color: #f2f2f2;">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>/blogs/tin-tuc/tagged/that">thật</a>
				</li>
				<li style="float: left; margin-right: 5px;padding: 0 5px; background-color: #f2f2f2;">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>/blogs/tin-tuc/tagged/thiet-bi-nha-khoa">thiet-bi-nha-khoa</a>
				</li>
			</ul>
		</div>
	</footer>

	<!-- <footer class="entry-footer">
		<?php vatlieunhakhoa_entry_footer(); ?>
	</footer> -->
</article><!-- #post-<?php the_ID(); ?> -->
