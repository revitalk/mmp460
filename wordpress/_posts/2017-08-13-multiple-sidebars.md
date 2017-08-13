---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress
title: Multiple sidebars
---
- **Step 1:** Register multiple sidebars in functions.php. For example, the following code registers two sidebars named Sidebar 1 and Sidebar 2.

        /* registering sidebars*/

        $basic_sidebars = array(
        'name' => __('Sidebar %d'),
        'id' => 'sidebar',
        'description' => '',
        'class' => 'sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>' );

        register_sidebars(2, $basic_sidebars);

- **Step 2:** Create sidebar template files for each of the sidebars and name them in the form of sidebar-name.php. For example my right sidebar will be controlled from a template called sidebar-right.php and my bottom sidebar from a template called sidebar-bottom.php. In each of these template include the html code of your choice and a call for the sidebar. This may look like:

        <div id="sidebar-right">
        <?php
        dynamic_sidebar('Sidebar 1');
        ?>
        </div>

- **Step 3**: Call the sidebar file from the page template. In index.php, page.php, or any other page template include the following code for each sidebar:

        <?php
        get_sidebar('right'); /* replace 'right' with your sidebar file name (mine was sidebar-right.php) */
        ?>

For more information read [WordPress Codex](http://codex.wordpress.org/Function_Reference/register_sidebars).
