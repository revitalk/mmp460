---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress underscore
title: Single Menu Support
---
 
**MENU ACTIVATION**

To activate the menu function in the dashboard register menus in functions.php:

        <?php
        register_nav_menus();
        ?>

**THEME INTEGRATION**

In order to use a menu in your theme you would have to include it in your template files. Place the following code in place of the menu in your theme template:

        <?php wp_nav_menu(); ?>

**CREATING A MENU IN THE DASHBOARD**

Create a menu in Appearances > Menus.
