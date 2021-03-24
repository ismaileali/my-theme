<?php 
 get_header();
?>
<nav id="breadcrumbs" class="breadcrumbs">
	<div class="container page-wrapper">
        <?php get_breadcrumb(); ?>
	</div>
</nav>
<div class="w3l-searchblock w3l-homeblock1 py-5">
    <div class="container py-lg-4 py-md-3">
        <!-- block -->
        <div class="row">
            <div class="col-lg-8 most-recent">
                <h3 class="section-title-left"><?php printf( __( 'Search Results for: %s', 'ismile' ), '<span>' . esc_html( get_search_query() ) . '</span>'); ?></h3>
               <p><?php _e('Total posts found - ', 'optimizer'); ?> <?php global $wp_query; echo $wp_query->found_posts; wp_reset_query(); ?></p>
                <div class="row">
                <?php
                $search = get_search_query();
                $args = array(
                    's' 		 => $search,
                    'posts_per_page'         => '10',
                    'post_type'				 => 'post',
                    'post_status'			 => 'publish',
                    'order'    				 => 'DESC',
                    'paged' 				 => get_query_var( 'paged')
                );
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();?>
                        <div class="col-lg-6 col-md-6 item mb-4 pt-3">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('my-size', array('class' => 'card-img-bottom d-block radius-image')) ?>
                                    </a>
                                </div>
                                <div class="card-body p-0 blog-details">
                                    <a href="#blog-single" class="blog-desc"> <?php the_title(); ?>
                                    </a>
                                    <p><?php the_excerpt() ?></p>
                                    <div class="author align-items-center mt-3 mb-1">
                                    <?php the_author_posts_link(); ?> in <a href="#"><?php the_category(', ');?></a>
                                    </div>
                                    <ul class="blog-meta">
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"><?php the_time('M d, Y'); ?></span>
                                        </li>
                                        <li class="meta-item blog-students">
                                            <span class="meta-value"> 6min read</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php }
                    } else {
                        echo 'Not Found Result';
                    }
                    wp_reset_postdata();
                    ?>
                </div>

                <!-- pagination -->
                <div class="pagination-wrapper mt-5">
                    <ul class="page-pagination">
                        <li><span aria-current="page" class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="#url">2</a></li>
                        <li><a class="page-numbers" href="#url">3</a></li>
                        <li><a class="page-numbers" href="#url">4</a></li>
                        <li><a class="page-numbers" href="#url">....</a></li>
                        <li><a class="page-numbers" href="#url">15</a></li>
                        <li><a class="next" href="#url"><span class="fa fa-angle-right"></span></a></li>
                    </ul>
                </div>
                <!-- //pagination -->
            </div>
            <div class="col-lg-4 trending mt-lg-0 mt-5 mb-lg-5">
                <?php get_sidebar(); ?>
            </div>
        </div>
        <!-- //block-->

        <!-- ad block -->
        <div class="ad-block text-center mt-5">
            <a href="#url"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/images/ad.gif" class="img-fluid" alt="ad image" /></a>
        </div>
        <!-- //ad block -->
    </div>
</div>
<?php get_footer(); ?>