<?php /* Template Name: Tin tức */ get_header("main"); ?>



    <!-- main code -->

    <div class="breadcrumbs">

        <div class="container">

            <div class="inner">

                <ul>

                    <li class="home"> <a title="Quay lại trang chủ" href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>

                    <li>Tin tức</li>

                </ul>

            </div>

        </div>

    </div>

    <!---->

    <section class="main-container col2-right-layout">

        <div class="main container">

            <div class="row">

                <?php get_sidebar("news"); ?>



                <div class="col-sm-12 col-md-9">

                    <div class="blog-title" style="display:none;">

                        <h2>Tin tức</h2>

                    </div>

                    <div class="blog-wrapper" id="main">

                        <div class="site-content" id="primary">

                            <div role="main" id="content">

                                <div class="row masonry-container">

                                    <?php 

                                        $i=0;

                                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                                        $query=  new WP_Query(array(

                                                'category_name' => 'news',

                                                'orderby' => 'date', 

                                                'order' => 'DESC',  

                                                'post_status' => 'publish',

                                                'posts_per_page' => 6,

                                                'paged' => $paged

                                            )); 

                                        if($query->have_posts()) : while($query->have_posts()) : $query->the_post();$i++; 

                                            ?>

                                            <div class="col-md-6 col-sm-6 item">

                                                <article class="blog_entry clearfix wow bounceInLeft animated animated" style="visibility: visible;">

                                                    <div class="entry-content">

                                                        <div class="featured-thumb">

                                                            <a href="<?php the_permalink(); ?>">

                                                                <?php vatlieunhakhoa_post_thumbnail(); ?>

                                                            </a>

                                                        </div>

                                                        <header class="blog_entry-header clearfix">

                                                            <div class="blog_entry-header-inner">

                                                                <h3 class="blog_entry-title"> <a rel="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>

                                                            </div>

                                                            <!--blog_entry-header-inner-->

                                                        </header>

                                                        <!-- <div class="entry-content-small content-small">

                                                            1. Tập trung vào nơi tiếp xúc giữa răng và nướu

                                                            Đây là lời khuyên quan trọng nhất mà nha sĩ ...

                                                        </div> -->

                                                        <div class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> 13/01/2020 <i class="fa fa-comments-o" aria-hidden="true"></i> 0 bình luận</div>

                                                    </div>

                                                    <a href="<?php the_permalink(); ?>" class="link-article"><i class="fa fa-caret-right" style="margin-right: 3px;"></i>Đọc Tiếp</a>

                                                </article>

                                            </div>

                                            <?php endwhile; ?>

                                            

                                        <?php else : ?>

                                        <p>sorry no results</p>

                                    <?php endif; wp_reset_query(); ?>

                                    

                                   

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="pager">

                        <div class="pages">

                            <!-- <label>Trang:</label> -->

                            <?php 

                                echo paginate_links( array(

                                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),

                                    'total'        => $query->max_num_pages,

                                    'current'      => max( 1, get_query_var( 'paged' ) ),

                                    'format'       => '?paged=%#%',

                                    'show_all'     => false,

                                    'type'         => 'plain',

                                    'end_size'     => 2,

                                    'mid_size'     => 1,

                                    'prev_next'    => true,

                                    'prev_text'    => sprintf( '<i></i> %1$s', __( '«', 'text-domain' ) ),

                                    'next_text'    => sprintf( '%1$s <i></i>', __( '»', 'text-domain' ) ),

                                    'add_args'     => false,

                                    'add_fragment' => '',

                                ) );

                            ?>

                        </div>

                    </div>

                    <style>

                        .pager .pages a, .pager .pages span {

                            padding: 2px 8px;

                            box-shadow: none;

                            border: 0px;

                            padding: 2px 8px;

                            border-radius: 0px;

                            color: rgb(51, 51, 51);

                            font-size: 12px;

                            line-height: 24px;

                        }

                        .pager .pages .current {

                            color: rgb(255, 92, 0);

                            font-size: 12px;

                        }

                    </style>

                </div>

            </div>

        </div>

    </section>

    <!-- End main -->



<?php get_footer("main"); ?>