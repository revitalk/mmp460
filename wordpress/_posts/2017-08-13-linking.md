---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress underscore
title: Links to Posts and Pages in Templates
---
To create a link to a specific post or page from a PHP template use the following code, where the ID is the id of the page:

        <a href="<?php echo get_permalink(ID); ?>">link text</a>
        
Or,

         <a href="<?php echo get_page_link(ID); ?>">link text</a>
         
To find the id of the post or page hover with your mouse on the page/post name in the list of pages/posts. The id will display in the status bar at the bottom of your browser.
