---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress
title: Custom Page templates
---
Some of the pages may require a diffrent layout than the one prescribed in page.php. You can create custom templates for individual pages easily by:

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
- Now when you edit a page in the dashboard you can select the template from the dropdown menu on the right.
