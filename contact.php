<?php get_header(); ?>
<?php
/* Template Name: Contact Us */

?>

  <nav id="breadcrumbs" class="breadcrumbs">
    <div class="container page-wrapper">
        <?php get_breadcrumb(); ?>
    </div>
  </nav>
  <!-- contact-form 2 -->
  <section class="w3l-contact-2 py-5">
    <div class="container py-lg-5 py-md-4">
      <h3 class="section-title-left">Leave Us a message </h3>
      <div class="contact-grids d-grid">
      <?php
            $args = array(
                'posts_per_page'   => '1',
                'post_type'        => 'contact-info',
                'post_status'      => 'publish',
                'paged'            => get_query_var( 'paged')

            );
            $query = new WP_Query( $args );   
                  if($query->have_posts() ) {
                    global $post;
                      while ( $query->have_posts() ) {
                          $query->the_post();
      ?>
        <div class="contact-left">
          <h3 class="mb-3">Contact Details</h3>
          <p><?php the_content(); ?></p>
          <div class="cont-details">
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-map-marker"></span>
              </div>
              <div class="cont-right">
                <h6>Address</h6>
                <p><?php echo get_post_meta($post->ID, 'adderss', true); ?></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-phone"></span>
              </div>
              <div class="cont-right">
                <h6>Call Us</h6>
                <p><a href="<?php  the_permalink(); ?>"><?php echo get_post_meta($post->ID, 'phone', true); ?></a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="cont-right">
                <h6>Email Us</h6>
                <p><a href="<?php the_permalink(); ?>" class="mail"><?php echo get_post_meta($post->ID, 'email', true); ?></a></p>
              </div>
            </div>
          </div>
        </div>
        <?php } 
                 } 
                 wp_reset_postdata(); 
        ?>

        <div class="contact-right">
          <?php echo do_shortcode('[contact-form-7 id="123" title="Contact form 1" html_class="signin-form"]');  ?>
        </div>
      </div>
  </section>
  <!-- /contact-form-2 -->
 <?php get_footer(); ?>