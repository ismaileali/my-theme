<?php get_header(); ?>
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
                <?php if (have_posts()) :?>
                    <?php while ( have_posts() ) : the_post();?>
                    <?php get_template_part( 'template-parts/content-single', get_post_type() ); ?>
                    <?php endwhile;?>
                    <div class="sin-comment-form">
                        <?php comments_template(); ?> 
                    </div>
                <h3 class="section-title-left">Related Posts</h3>
                <div class="row">
                <?php           
                    $post_id = get_the_ID();
                    $cat_ids = array();
                    $categories = get_the_category( $post_id );

                    if(!empty($categories) && !is_wp_error($categories)):
                        foreach ($categories as $category):
                            array_push($cat_ids, $category->term_id);
                        endforeach;
                    endif;
                    $current_post_type = get_post_type($post_id);
                    $query_args = array( 
                        'category__in'   => $cat_ids,
                        'post_type'      => $current_post_type,
                        'post__not_in'    => array($post_id),
                        'posts_per_page'  => '4',
                    );
                    $related_cats_post = new WP_Query( $query_args );
                    if($related_cats_post->have_posts()):
                        while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
                        <div class="col-lg-3 col-md-3 item mt-5 pt-lg-3">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="<?php the_permalink() ?>">
                                        <?php the_post_thumbnail('my-size', array('class' => "card-img-bottom d-block radius-image img-fluid", 'alt' => "your alt text")); ?>
                                    </a>
                                </div>
                                <div class="card-body p-0 blog-details">
                                    <a href="<?php the_permalink() ?>" rel="bookmark" class="blog-desc" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;
                        // Restore original Post Data
                        wp_reset_postdata();
                    endif;
                ?>
                </div>
                <?php else : ?>
                <h3><?php _e('404 Error&#58; Not Found'); ?></h3>
            <?php endif; ?>
            </div>
            
            <div class="col-lg-4 trending mt-lg-0 mt-5 mb-lg-5">
                <?php get_sidebar(); ?>
            </div>
        </div>
        <!-- //block-->

        <!-- ad block -->
        <div class="ad-block text-center mt-5">
            <a href="<?php the_permalink(); ?>"><img src="<?php get_template_directory_uri(); ?>/assets/images/ad.gif" class="img-fluid" alt="ad image" /></a>
        </div>
        <!-- //ad block -->
    </div>
</div>

<?php get_footer(); ?>