---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress underscore
title: Adding an additional sidebar in the Underscore theme
---

- Open functions.php and locate the code:

        register_sidebar( array(
        'name' => __( 'Sidebar', 'your-theme-name' ),
        'id' => 'sidebar-1',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
        ) );
        
- Duplicate it so you have it twice, one directly below the first.
- Change the name and id of the second sidebar, for example:

        register_sidebar( array(
        'name' => __( 'Sidebar', 'your-theme-name' ),
        'id' => 'sidebar-1',
        'description' => '',
        'before_widget' => '<aside id="%1$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
        ) );

        register_sidebar( array(
        'name' => __( 'Footer', 'your-theme-name' ),
        'id' => 'sidebar-2',
        'description' => '',
        'before_widget' => '<aside id="%1$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
        ) );
        
- Now in the dashboard>Appearance>Widgets you’ll find a reference to both sidebars. Populate them with widgets.
To call the second sidebar from a PHP template, for example, from footer.php:

        <?php get_sidebar(2); ?>
        
- Duplicate sidebar.php and rename it sidebar-2.php.
- Change all references to the sidebar in sidebar-2.php to ‘sidebar-2’.
- Change the div id to something else.
- You can repeat these steps for as many sidebars as you need.

