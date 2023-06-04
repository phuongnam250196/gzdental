<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package vatlieunhakhoa
 */

get_header("main");
?>

	<div class="main-container col2-left-layout">	
        <div class="container">
            <div class="">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'vatlieunhakhoa' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Không tìm thấy yêu cầu!', 'vatlieunhakhoa' ); ?></p>

						<?php
						get_search_form();

						?>

				</div>
			</div>
		</div>
	</div>

<?php
get_footer("main");
