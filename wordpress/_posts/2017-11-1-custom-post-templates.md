---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress
title: Custom Post Templates
---
To create a custom template for posts:

- Duplicate single.php
- Rename it single-templatename.php  (for example single-author.php)
- At the top of the code add (change the name to your choice):

        <?php
        /*
        Template Name: Your Template Name
        Template Post Type: post
        */
        ?>
        
- Make any changes that you like to this file.
- Upload it to the theme folder
- Now in the dashboard, when you edit a post, you can select the template from the dropdown on the right.
