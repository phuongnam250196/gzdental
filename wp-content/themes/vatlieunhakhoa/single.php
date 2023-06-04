<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vatlieunhakhoa
 */

get_header("main");
?>
	<div class="breadcrumbs">
        <div class="container">
            <div class="inner">
                <ul>
                    <li class="home"> <a title="Quay lại trang chủ" href="https://www.vatlieunhakhoathanglong.com/">Trang chủ</a><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                    <li><a href="https://www.vatlieunhakhoathanglong.com/tin-tuc">Tin tức</a><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                    <li>6 lưu ý để...</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                <?php get_sidebar("news"); ?>
                <div class="col-main col-sm-12 col-md-9">
                    <!--<div class="page-title">
					<h2>Tin Tức</h2>
					</div>-->
                    <div class="blog-wrapper" id="main">
                        <div class="site-content" id="primary">
                            <div role="main" id="content">
							<?php
								while ( have_posts() ) :
									the_post();

									get_template_part( 'template-parts/content', get_post_type() );

									the_post_navigation(
										array(
											'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'vatlieunhakhoa' ) . '</span> <span class="nav-title">%title</span>',
											'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'vatlieunhakhoa' ) . '</span> <span class="nav-title">%title</span>',
										)
									);

									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;

								endwhile; // End of the loop.
								?>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer("main");
