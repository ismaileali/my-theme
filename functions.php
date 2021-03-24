<?php
// Register Theme Features
function custom_theme_features()  {

	// Add theme support for Automatic Feed Links
	 add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'status', 'quote', 'gallery', 'image', 'Contact info', 'audio', 'link', 'aside', 'chat'  ) );

	// Add theme support for Featured Images
	 add_theme_support( 'post-thumbnails' );

	// Crop Mode
	add_image_size( 'my-size', 340, 230, true );
	update_option( 'my-size', 340 );
	update_option( 'my-size', 230 );
	update_option( 'thumbnail_crop', 1 );
	// recent post image size
	add_image_size('recent-image', 257, 217, true );
	add_image_size('featcher-image', 170, 142, true );

	// Add theme support for document Title tag
	//  add_theme_support( 'title-tag' );
	 add_theme_support( 'title-tag' );

	// Add theme support for custom CSS in the dinyMCE visual editor
	add_editor_style();
}
add_action( 'after_setup_theme', 'custom_theme_features' );
/**
 * Register navigation menus uses wp_nav_menu in one places.
 */
function navigation_menus() {

	$locations = array(
		'header'  => __( 'Header Menu', 'ismaile' )
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'navigation_menus' );

// Add theme support for Custom Header
	$header_args = array(
		'default-image'          => '',
		'width'                  => 0,
		'height'                 => 0,
		'flex-width'             => false,
		'flex-height'            => false,
		'uploads'                => true,
		'random-default'         => true,
		'header-text'            => true,
		'default-text-color'     => '',
		'wp-head-callback'       => ''
	);
add_theme_support( 'custom-header', $header_args );

function my_excerpt_length($limit) {
    return wp_trim_words(get_the_excerpt(), $limit, '<a href="'. esc_url( get_permalink() ) . '">' . __( ' Read more', 'ismaile' ) . '</a>');
}

// Commend area
function move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
//  Add Redux Framework
require_once get_template_directory().'/redux-fwk/ReduxCore/framework.php';
require_once get_template_directory().'/redux-fwk/sample/config.php';





add_filter( 'comment_form_fields', 'move_comment_field_to_bottom' );

// WP NAV
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/wp-bootstrap-navwalker/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


/**
 * Generate breadcrumbs
 */
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;/&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}


/**
 * Register a custom post type called "Contact info".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_contact_info_init() {
    $labels = array(
        'name'                  => _x( 'Contacts info', 'Post type general name', 'mytheme' ),
        'singular_name'         => _x( 'Contact info', 'Post type singular name', 'mytheme' ),
        'menu_name'             => _x( 'Contacts info', 'Admin Menu text', 'mytheme' ),
        'name_admin_bar'        => _x( 'Contact info', 'Add New on Toolbar', 'mytheme' ),
        'add_new'               => __( 'Add New', 'mytheme' ),
        'add_new_item'          => __( 'Add New Contact info', 'mytheme' ),
        'new_item'              => __( 'New Contact info', 'mytheme' ),
        'edit_item'             => __( 'Edit Contact info', 'mytheme' ),
        'view_item'             => __( 'View Contact info', 'mytheme' ),
        'all_items'             => __( 'All Contacts info', 'mytheme' ),
        'search_items'          => __( 'Search Contacts info', 'mytheme' ),
        'parent_item_colon'     => __( 'Parent Contacts info:', 'mytheme' ),
        'not_found'             => __( 'Not Contacts info items.', 'mytheme' ),
        'not_found_in_trash'    => __( 'No Contacts info found in Trash.', 'mytheme' ),
        'featured_image'        => _x( 'Contact info Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'mytheme' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'mytheme' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'mytheme' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'mytheme' ),
        'archives'              => _x( 'Contact info archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'mytheme' ),
        'insert_into_item'      => _x( 'Insert into Contact info', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'mytheme' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Contact info', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'mytheme' ),
        'filter_items_list'     => _x( 'Filter Contacts info list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'mytheme' ),
        'items_list_navigation' => _x( 'Contacts info list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'mytheme' ),
        'items_list'            => _x( 'Contacts info list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'mytheme' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'contact-info' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 25,
        'menu_icon'          =>'dashicons-twitch',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','custom-fields'),
    );
 
    register_post_type( 'contact-info', $args );
}
 
add_action( 'init', 'wpdocs_codex_contact_info_init' );


// Pagenation 
function bittersweet_pagination() {

    global $wp_query;
    
    if ( $wp_query->max_num_pages <= 1 ) return; 
    
    $big = 999999999; // need an unlikely integer
    
        $pages = paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages,
            'prev_text'          => __( '<i class="fas fa-arrow-left"></i></a>'),
            'next_text'          => __( '<i class="fas fa-arrow-right"></i>'),
            'type' => 'array'
        ) );
        if( is_array( $pages ) ) {
            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
            echo '<ul class="page-pagination">';
            foreach ( $pages as $page ) {
                echo '<li class="page-numbers">'.$page.'</li>';
            }
           echo '</ul>';
        }
    }

// function time_ago() {
//     return sprintf( esc_html__( '%s ago', 'ismile' ), human_time_diff(get_comment_time ( 'U' ), current_time( 'timestamp' ) ) );
// }
// add_filter( 'get_comment_date', 'time_ago' );

function altered_post_time_ago_function() {
    return ( get_the_time('U') ) ? sprintf( esc_html__( '%s ago', 'newsfeed' ), human_time_diff( get_the_time ( 'U' ), current_time( 'timestamp' ) ) ) : get_the_date();
}
add_filter( 'the_time', 'altered_post_time_ago_function' );