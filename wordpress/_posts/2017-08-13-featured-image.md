---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress 
title: Adding a Featured Image
---
In order to allow the placement of images in a consistent manner in the pages you have to turn on the Featured Image feature in functions.php and then call the image in a template file. Follow these steps:

- Add the following code to the functions.php:

        <?php
        add_theme_support( ‘post-thumbnails’ );
        ?>
        
- Add the following code where you want the featured image to be displayed:

        <div id="post-image"> <!-- feel free to change the name of the id -->
        <?php // check if the post has a Post Thumbnail assigned to it.
        if ( has_post_thumbnail() ) {
        the_post_thumbnail();
        } ?></div>

- Now when you enter content in a page you can specify the featured image (lower right corner).
With CSS customize the look and location of the image div.
