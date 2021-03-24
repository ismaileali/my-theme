<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php wp_title('|',true,'right'); ?> <?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-starter.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open();?>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0" nonce="koqUQodF"></script>
    <!-- header -->
    <header class="w3l-header">
   
        <!--/nav-->
        <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
            <div class="container">
                <?php if ( get_header_image() ) : ?>
                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img style="width: 200px;height: auto;" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
                    </a>
                <?php endif; // End header image check. ?>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <span class="fa icon-expand fa-bars"></span>
                    <span class="fa icon-close fa-times"></span>
                </button>
                <?php //wp_nav_menu( array( 'theme_location' => 'header') ); ?>
                
                <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">

                    <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'header',
                        'depth'             => 2,
                    // 'container'         => 'div',
                    // 'container_class'   => 'collapse navbar-collapse',
                    // 'container_id'      => 'navbarSupportedContent',
                        'menu_class'        => 'navbar-nav ml-auto ',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>
                   
                    <!--/search-right-->
                    <div class="search-right mt-lg-0 mt-2">
                        <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                        <!-- search popup -->
                        <div id="search" class="pop-overlay">
                            <div class="popup">
                                <h3 class="hny-title two">Search here</h3>
                                
                                <form role="search" method="get" class="search-box" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <input type="search" placeholder="Search for blog posts" name="s" value="<?php echo get_search_query(); ?>" required="required" autofocus="" title="<?php echo esc_attr_x( 'Search for blog posts', '', 'Ismile' ); ?>" onfocus="clearText(this)" onblur="clearText(this)">
                                    <button type="submit" class="btn">Search</button>
                                </form>
                                <a class="close" href="#close">×</a>
                            </div>
                        </div>
                        <!-- /search popup -->
                    </div>
                    <!--//search-right-->

                    <!-- author -->
                    <div class="header-author d-flex ml-lg-4 pl-2 mt-lg-0 mt-3">
                    <?php global $current_user; wp_get_current_user();
                        if ( $current_user ){
                            if ( is_user_logged_in() ) { ?>
                            <a class="img-circle img-circle-sm" href="<?php the_permalink(); ?>">
                                <img src="<?php echo esc_url( get_avatar_url( $current_user->ID ) ); ?>" class="img-fluid"/>
                            </a>

                            <div class="align-self ml-3">
                                <div class="d-inline">
                                <a href="<?php the_permalink(); ?>">
                                    <h5><?php echo $current_user->user_login;?></h5>
                                </a>
                            <?php 
                                $user_id = get_current_user_id();
                                $user_info = get_userdata( $user_id );
                                $user_roles = implode(', ', $user_info->roles);
                                echo '<span class="user-roles">'.$user_roles.'</span>'; ?>
                                </div>
                                 <span class="log-btn"> <?php wp_loginout(); ?> </span>               
                           <?php  } else {  ?>
                            <span class="log-btn"> <?php wp_loginout(); ?> </span>                                
                           <?php }
                        } ?>
                        <!-- </div> -->
                    </div>
                    <!-- // author-->
                </div>

                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </div>
        </nav>
        <!--//nav-->
    </header>
    <!-- //header -->
