---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress
title: Custom Page templates
---
Some of the pages require different sub-menu that can be placed in a sidebar. Because of it they cannot all be handled with page.php.

You can create additional templates for individual pages easily by:

- Duplicate page.php
- Rename it page-yourname.php  (for example page-roots.php)
- At the top of code add (change the name to your choice):

        <?php
        /*
        Template Name: Roots
        */
        ?>
        
- Make any changes that you like to this file (such as changing its sidebar).
- Upload it to the theme folder
- Now in the dashboard you can select page-roots.php from right within the editing area of the page
