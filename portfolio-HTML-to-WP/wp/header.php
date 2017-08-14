<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<title><?php bloginfo('name');?> | <?php bloginfo('description')?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
 
 <?php wp_head(); ?>
  
  </head>
  <body>
    <div id="wrapper">
      <header>
       		
			<h1><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<h2><?php bloginfo( 'description' ); ?></h2>
	
      </header>
      <?php
	  $main_menu_top = array(
							'theme_location' => 'main-menu',
							'container' => 'nav',
							'depth' => 1,
						);
						?>

						<?php wp_nav_menu( $main_menu_top ); ?>
