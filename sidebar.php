<div class="pos-sticky">
    <h3 class="section-title-left">Trending </h3>
    
<?php
    $args = array (
            'posts_per_page'  => '4',
            'post_type'       => 'post',
            'post_status'     => 'publish',
            // 'meta_key'        => 'post_views_count',
            // 'orderby'         => 'meta_value_num',
            // 'order'           => 'DESC',
            'paged'           => get_query_var('paged')
        );    
        $query = new WP_Query( $args );
                if ($query->have_posts()) {
                    $i = 0;
                while($query->have_posts() ) {
                    $i++;
                        $query->the_post(); 
?>

            <div class="grids5-info">
                <h4><?php if($i <= 9 ){ echo '0'.$i;} else { echo $i;} ?></h4>
                <div class="blog-info">
                    <a href="<?php the_permalink(); ?>" class="blog-desc1"> <?php the_title(); ?> </a>
                    <div class="author align-items-center mt-2 mb-1">
                        <?php the_author_posts_link(); ?> in <a href="<?php the_permalink(); ?>"><?php the_category(','); ?></a>
                    </div>
                    <ul class="blog-meta">
                        <li class="meta-item blog-lesson">
                            <span class="meta-value"> <?php// the_time('M j, Y'); ?> </span>
                        </li>
                        <li class="meta-item blog-students">
                            <span class="meta-value"> 6min read</span>
                        </li>
                    </ul>
                </div>
            </div>
<?php }
        }
            wp_reset_postdata();
?>
    
</div>