<?php get_header(); ?>
    <div class="w3l-homeblock1 py-5">
        <div class="container pt-lg-5 pt-md-4">
            <!-- block -->
            <div class="row">
                <div class="col-lg-9">
                    <h3 class="section-title-left"> Featured posts </h3>
                    <div class="row">
                    <?php
                        $args = array(
                            'posts_per_page'         => '1',
                            'category_name' 		 => 'featured-posts',
                            'post_type'				 => 'post',
                            'post_status'			 => 'publish',
                            'paged' 				 => get_query_var( 'paged')
                        );
                        $query = new WP_Query( $args );
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post();?>
                                <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
                            <?php }
                        }
                        wp_reset_postdata();	
                    ?>
                        <div class="col-lg-7 col-md-6 mt-md-0 mt-5">
                            <div class="list-view list-view1">
                            <?php
                                    $args = array(
                                        'category_name'      => 'featured-posts',
                                        'offset'             => '1',
                                        'posts_per_page'     => '3',
                                        'post_type'	         => 'post',
                                        'post_status'	     => 'publish',
                                        'paged' 		     => get_query_var( 'paged')
                                    );
                                    $query = new WP_Query( $args );
                                                if ( $query->have_posts() ) {
                                                    while ( $query->have_posts() ) {
                                                    $query->the_post();
                            ?>
                                <div class="grids5-info pb-5">
                                    <a href="<?php the_permalink(); ?>" class="d-block zoom"><?php the_post_thumbnail('featcher-image', array('class' => "radius-image")); ?></a>
                                    <div class="blog-info align-self">
                                        <a href="<?php the_permalink(); ?>" class="blog-desc1"><?php the_title(); ?>
                                        </a>
                                        <div class="author align-items-center mt-3 mb-1">
                                            <?php the_author_posts_link(); ?> in <a href="<?php the_permalink(); ?>"><?php the_category(','); ?></a>
                                        </div>
                                        <ul class="blog-meta">
                                            <li class="meta-item blog-lesson">
                                                <span class="meta-value"> <?php the_time('M j, Y'); ?> </span>
                                            </li>
                                            <li class="meta-item blog-students">
                                                <span class="meta-value"> 6min read</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <?php
                                 }
                                    }
                                    wp_reset_postdata();	
                                ?>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 trending mt-lg-0 mt-5">
                    <?php get_sidebar(); ?>
                </div>
            </div>
            <!-- //block -->


            <!-- block -->
            <div class="item mt-5 pt-4">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="#blog-single">
                            <img class="card-img-bottom d-block radius-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/p3.jpg"
                                alt="Card image cap">
                        </a>
                    </div>
                    <div class="col-lg-6 blog-details align-self mt-lg-0 mt-sm-5 mt-4">
                        <a href="#blog-single" class="blog-desc-big">Your Blog Posts are Boring: 9 Tips for Making your
                            Writing more Interesting
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos blanditiis, odit non asperiores
                            possimus voluptas sit nihil nam id explicabo saepe sapiente excepturi similique, dicta
                            officia odio natus nemo. Ratione ipsa distinctio explicabo esse quod autem
                            veritatis, in fugit odio.</p>
                        <div class="author align-items-center mt-4 mb-1">
                            <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                        </div>
                        <ul class="blog-meta">
                            <li class="meta-item blog-lesson">
                                <span class="meta-value"> April 13, 2020 </span>
                            </li>
                            <li class="meta-item blog-students">
                                <span class="meta-value"> 6min read</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- //block-->

            <!-- block -->
            <div class="item mt-5 pt-lg-5">
                <h3 class="section-title-left">Today Highlights </h3>
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="list-view list-view1">
                            <div class="grids5-info">
                                <a href="#blog-single" class="d-block zoom"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.jpg" alt=""
                                        class="img-fluid radius-image news-image"></a>
                                <div class="blog-info align-self">
                                    <a href="#blog-single" class="blog-desc1">Edit/proofread your post, and fix your
                                        formatting.
                                    </a>
                                    <div class="author align-items-center mt-3 mb-1">
                                        <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                    </div>
                                    <ul class="blog-meta">
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> April 13, 2020 </span>
                                        </li>
                                        <li class="meta-item blog-students">
                                            <span class="meta-value"> 6min read</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="grids5-info mt-5">
                                <a href="#blog-single" class="d-block zoom"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/5.jpg" alt=""
                                        class="img-fluid radius-image news-image"></a>
                                <div class="blog-info align-self">
                                    <a href="#blog-single" class="blog-desc1">The Beginner's Guide to Starting a
                                        Successful Blog in 2020
                                    </a>
                                    <div class="author align-items-center mt-3 mb-1">
                                        <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                    </div>
                                    <ul class="blog-meta">
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> April 13, 2020 </span>
                                        </li>
                                        <li class="meta-item blog-students">
                                            <span class="meta-value"> 6min read</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6 mt-md-0 mt-5">
                        <div class="list-view list-view1">
                            <div class="grids5-info">
                                <a href="#blog-single" class="d-block zoom"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/6.jpg" alt=""
                                        class="img-fluid radius-image news-image"></a>
                                <div class="blog-info align-self">
                                    <a href="#blog-single" class="blog-desc1">Home to Organize your content in an
                                        outline.
                                    </a>
                                    <div class="author align-items-center mt-3 mb-1">
                                        <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                    </div>
                                    <ul class="blog-meta">
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> April 13, 2020 </span>
                                        </li>
                                        <li class="meta-item blog-students">
                                            <span class="meta-value"> 6min read</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="grids5-info mt-5">
                                <a href="#blog-single" class="d-block zoom"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/7.jpg" alt=""
                                        class="img-fluid radius-image news-image"></a>
                                <div class="blog-info align-self">
                                    <a href="#blog-single" class="blog-desc1">10 Fresh Ways to Get Better Results From
                                        Your Blog Posts
                                    </a>
                                    <div class="author align-items-center mt-3 mb-1">
                                        <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                    </div>
                                    <ul class="blog-meta">
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> April 13, 2020 </span>
                                        </li>
                                        <li class="meta-item blog-students">
                                            <span class="meta-value"> 6min read</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-6 mt-lg-0 mt-5">
                        <div class="ad-img">
                            <a href="#ad-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ad1.jpg" class="img-fluid" alt="ad image" /></a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- //block-->

            <!-- block -->
            <div class="row mt-5 pt-5">
                <div class="col-lg-9 most-recent">
                    <h3 class="section-title-left">Most Recent posts </h3>
                    <div class="list-view ">
                    <?php 
                            $args = array(
                                'posts_per_page'=>'3',
                                'post_type'     =>'post',
                                'post_status'   =>'publish',
                                'paged'         => get_query_var( 'paged')
                            );
                            $query = new WP_Query( $args );
                                        if ( $query->have_posts() ) {
                                              while ( $query->have_posts() ) {
                                                  $query->the_post();
                    ?>
                        <div class="grids5-info img-block-mobile pb-5">
                            <div class="blog-info align-self">
                                <span class="category"><?php the_category(', '); ?></span>
                                <a href="<?php the_permalink(); ?>" class="blog-desc mt-0"><?php the_title(); ?></a>
                                <p><?php the_excerpt(); ?></p>
                                <div class="author align-items-center mt-3 mb-1">
                                   <?php the_author_posts_link(); ?> in <a href="<?php the_permalink(); ?>"> <?php the_category(', '); ?> </a>
                                </div>                                                                          
                                <ul class="blog-meta">
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"><?php the_time('M j, Y'); ?></span>
                                        
                                    </li>
                                    <li class="meta-item blog-students">
                                        <span class="meta-value"> 6min read</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="d-block zoom mt-md-0 mt-3"><?php the_post_thumbnail('recent-image', array('class' => "img_fluid radius-image news-image")); ?></a>
                        </div>
                        <?php   }                                           
                                    }
                            wp_reset_postdata();
                     ?>
                        <div class="row most-recent-inner my-5 py-lg-4">
                            <div class="col-12 pb-md-0 pb-5">
                                <div class="list-view list-view1">
                                   <div class="row">      
                                        <?php
                                                $args = array(
                                                    'offset'             => '3',
                                                    'posts_per_page'     => '4',
                                                    'post_type'	         => 'post',
                                                    'post_status'	     => 'publish',
                                                    'paged' 		     => get_query_var( 'paged')
                                                );
                                                $query = new WP_Query( $args );
                                                            if ( $query->have_posts() ) {
                                                                while ( $query->have_posts() ) {
                                                                $query->the_post();
                                        ?>
                                         <div class="col-md-6 pb-5">   
                                            <div class="grids5-info">
                                                <a href="<?php the_permalink(); ?>" class="d-block zoom">
                                                   <?php the_post_thumbnail( array('class' => "img-fluid radius-image news-image")); ?>
                                                </a>
                                                <div class="blog-info align-self">
                                                    <a href="<?php the_permalink(); ?>" class="blog-desc1"><?php the_title(); ?>
                                                    </a>
                                                    <div class="author align-items-center mt-3 mb-1">
                                                        <a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?></a> in <a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a>
                                                                                                                  
                                                    </div>
                                                    <ul class="blog-meta">
                                                        <li class="meta-item blog-lesson">
                                                            <span class="meta-value"><?php echo altered_post_time_ago_function(); //the_time('M j, Y'); ?></span>
                                                        </li>
                                                        <li class="meta-item blog-students">
                                                            <span class="meta-value"> 6min read</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div> 
                                         </div> 
                                        <?php
                                            }    
                                              }   
                                              wp_reset_postdata();                
                                        ?>               
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                             $args = array(
                                 'offset'           => '7',
                                 'posts_per_page'   => '2',
                                 'post_type'        => 'post',
                                 'post_status'      => 'publish',
                                 'paged'            => get_query_var( 'paged')

                             );
                             $query = new WP_Query( $args );   
                                   if($query->have_posts() ) {
                                       while ( $query->have_posts() ) {
                                           $query->the_post();
                        ?>
                        
                        <div class="grids5-info img-block-mobile mb-5">
                            <div class="blog-info align-self">
                                <span class="category"><?php the_category(', '); ?></span>
                                <a href="<?php the_permalink(); ?>" class="blog-desc mt-0"><?php the_title(); ?></a>
                                <p><?php the_excerpt(); ?></p>
                                <div class="author align-items-center mt-3 mb-1">
                                    <a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?></a> in <a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a>
                                </div>
                                <ul class="blog-meta">
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> <?php the_time('M j, Y'); ?> </span>
                                    </li>
                                    <li class="meta-item blog-students">
                                        <span class="meta-value"> 6min read</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="d-block zoom mt-md-0 mt-3"><?php the_post_thumbnail('recent-image', array('class' => "img_fluid radius-image news-image") ); ?></a>
                        </div>
                        <?php
                                }                                      
                            }   
                            wp_reset_postdata();             
                        ?>

                    </div>
                    <!-- pagination -->
                    <div class="pagination-wrapper">
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
                <div class="col-lg-3 trending mt-lg-0 mt-5">
                    <?php  get_sidebar(); ?>
                </div>
            </div>
            <!-- //block-->

            <!-- ad block -->
            <div class="ad-block text-center mt-5">
                <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ad.gif" class="img-fluid" alt="ad image" /></a>
            </div>
            <!-- //ad block -->

        </div>
    </div>
<?php  get_footer();?>