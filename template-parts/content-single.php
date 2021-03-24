<h3 class="section-title-left"><?php the_title(); ?></h3>
<div class="author align-items-center mt-2 mb-1">
    <?php the_author_posts_link(); ?> in <a href="<?php the_permalink(); ?>"><?php the_category(','); ?></a>
</div>
<ul class="blog-meta mb-4">
    <li class="meta-item blog-lesson">
        <span class="meta-value"><?php the_time('M j, Y') ?></span>
    </li>
    <li class="meta-item blog-students">
        <span class="meta-value"> 6min read</span>
    </li>
</ul>
<div class="row">
    <div class="col-md-12 item">
        <div class="card">
            <div class="card-header p-0 position-relative">
                <?php the_post_thumbnail('', array('class' => "card-img-bottom d-block radius-image img-fluid", 'alt' => "your alt text")); ?>
            </div>
            <div class="card-body p-0 blog-details py-5">
            <?php the_content();?>
            </div>
            <div class="fb-comments" data-href="<?php the_permalink();?>" data-width="" data-numposts="5"></div>
        </div>
    </div>
</div>