---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress underscore
title: Multiple menus in Underscore
---
**MENU ACTIVATION**

- In functions.php scroll down to:

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'ace' ),
        ) );

- Add additional menu(s), for example:

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'ace' ),
        'header-nav' => __( 'Header Menu', 'ace' ),
        'sidebar-nav' => __( 'Sidebar Menu', 'ace' ),
        'footer-nav' => __( 'Footer Menu', 'ace' ),
        ) );

**THEME INTEGRATION**

In order to use these menus in your theme we have to include them in our template files. Place a similar code in place of each menu in your theme template:

        <?php
        $menu_name = array(
        'theme_location' => 'your-menu-handle',
        'container' => 'nav',
        'container_class' => 'className',  /* Will specify a class to the container  */
        'container_id' => 'idName',           /* Will specify an id to the container  */
        'depth' => 1                                 /* Will specify how many levels the navigation should go  */
        );
        ?>

        <?php wp_nav_menu( $menu_name ); ?>

- For additional control over the menu code [read here](https://revitalk.github.io/mmp460/wordpress/2017/08/13/menu-code.html).

