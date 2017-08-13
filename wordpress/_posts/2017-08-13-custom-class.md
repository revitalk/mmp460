---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress
title: A Different Class for Each Page
---
In order to style page elements more effectively with CSS you can add a unique class for every page. Replace the body tag in header.php with:

        <body <?php body_class($class); ?>>

This will request WordPress to add a unique class, or classes, to each page. To see the class given to each page check the source code of the page or read here.
