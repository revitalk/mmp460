---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress 
title: Multiple Menus support
---

**MENU ACTIVATION**

If your site includes multiple menus you’d like to register them all at once in functions.php. For example:

        <?php
        register_nav_menus(
        array(
        'main-nav-header' => 'Main Menu in Header',
        'local-nav' => 'sections menu',
        'footer-nav' => 'Footer Menu'
        )
        );
        ?>

**THEME INTEGRATION**

In order to use these menus in the theme we have to include them in the template files. Place these code lines in the theme templates where you want the menus to appear :

        <?php wp_nav_menu( array( 'theme_location' => 'main-nav-header' ) ); ?>

        <?php wp_nav_menu( array( 'theme_location' => 'local-nav' ) ); ?>

        <?php wp_nav_menu( array( 'theme_location' => 'footer-nav' ) ); ?>

For additional control over the menu code [read here]({{site.baseurl}}/mmp460/{% post_url 2017-08-14-menu-code %}).
