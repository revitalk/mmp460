---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress
title: Linking to an image in the theme directory
---
To include fixed images as part of your theme design create an images folder in your theme directory and upload the images to this folder. To display these images in your theme template file use the function get_template_directory_uri();. For example:

        <img src="<?php echo get_template_directory_uri(); ?>/images/trees-wide.jpg" alt="trees photo">

In the CSS code you would link to these images normally:

        body{
        background-image:url('images/trees-wide.jpg');
        }
