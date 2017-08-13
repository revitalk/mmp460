---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress
title: Different headers for different pages
---
 
If you want to alter elements in the header in different pages use PHP conditionals. The following example changes the content of the site title based on the page. Note that the number in  is_page(76) is the page id.

        <?php if ( is_front_page() && is_home() ) { ?>
        <h1>Home Title</h1>
        <?php } elseif ( is_front_page() ) { ?>
        <h1>Home Title</h1>
        <?php } elseif ( is_page(76) ) { ?>
        <h1>Contact Logo</h1>
        <?php } else { ?>
        <h1>Any Page Title</h1>
        <?php } ?>
