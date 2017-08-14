<!doctype html>
<html>
  <head lang="en">
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
      
<!-- Main menu  -->

    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
