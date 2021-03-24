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
                <h3 class="section-title-left">Category</h3>
               
                <div class="row">
                <?php
                $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                $term = get_queried_object();
                $catname = $term->slug;
                $args = array(
                    'category_name' 		 => $catname,
                    'posts_per_page'         => '2',
                    'post_type'				 => 'post',
                    'post_status'			 => 'publish',
                    'order'    				 => 'DESC',
                    'paged' 				 => $paged
                );
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();?>
                        <div class="col-lg-6 col-md-6 item mb-4">
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
                    }
                    wp_reset_postdata();
                    ?>
                </div>

                <!-- pagination -->
                <div class="pagination-wrapper mt-5">
                    <?php bittersweet_pagination(); ?>
                </div> <!-- pagenation -->
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