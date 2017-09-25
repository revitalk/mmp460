<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo( 'name' ); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        
         <?php wp_head(); ?>

    </head>
    <body>
        <div class="container">
            <header class="site-header">
                <h1><a href="<?php echo home_url( '/' ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo">

                </a></h1>
                <h2><?php bloginfo( 'description' ); ?></h2>
            </header>
            <nav class="main-menu">
              <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </nav>
        
