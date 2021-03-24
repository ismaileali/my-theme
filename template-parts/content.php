<div class="col-lg-5 col-md-6 item">
    <div class="card">
        <div class="card-header p-0 position-relative">
            <a href="<?php the_permalink(); ?>" class="d-block zoom"><?php the_post_thumbnail('my-size', array('class' => "card-img-bottom d-block radius-image", 'alt' => "your alt text")); ?></a>
        </div>
        <div class="card-body p-0 blog-details">
            <a href="<?php the_permalink();?>" class="blog-desc">
                <?php the_title(); ?>
            </a>
            <p><?php echo my_excerpt_length(30);?></p>
            
            <div class="author align-items-center mt-3 mb-1">
                <?php the_author_posts_link(); ?> in <a href="<?php the_permalink(); ?>"><?php the_category(', ');?></a>
            </div>
            <ul class="blog-meta">
                <li class="meta-item blog-lesson">
                    <span class="meta-value"><?php the_date('M d, Y'); ?> </span>
                </li>
                <li class="meta-item blog-students">
                    <span class="meta-value"><?php printf( __( 'Last Update: %s', 'textdomain' ), get_the_modified_date( 'g:i a' ) ); ?></span>
                    
                </li>
            </ul>
            <a href="<?php bloginfo('home');?>/category/featured-posts/" class="btn btn-style btn-outline mt-4">All featured
                posts</a>
        </div>
    </div>
</div>