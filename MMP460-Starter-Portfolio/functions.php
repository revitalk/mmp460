<?php

/* registering the main menu */
register_nav_menu('main-menu', 'Main Menu');


/* registering the sidebar */

    $basic_portflio= array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'description' => 'Widgets placed here will be displayed in the right side of the page',
    'before_widget' =>'<div class="widget">',
    'after_widget' =>'</div>',
	'before_title' =>'<h3>',
    'after_title' =>'</h3>',
	);
register_sidebar($basic_portflio);


/* Adding support for Featured Images */

add_theme_support( 'post-thumbnails' );

?>
