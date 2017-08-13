---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress
title: Custom Headers
---
The simplest way to add an image to the header is to add a background image to the header styles in style.css. The image file should be uploaded to the theme folder file via ftp.

To allow the customization of the header image from the dashboard [read here](https://codex.wordpress.org/Custom_Headers). For example, to add the ability to upload a header image in the dashboard add the following code to functions.php (before the closing ?>):

        $headerArgs = array(
          'width'         => 960,
          'height'        => 150,
          'default-image' => get_template_directory_uri() . '/images/header.jpg',
          'uploads'       => true,
        );
        add_theme_support( 'custom-header', $headerArgs );
        
Add the following code to header.php where you want the background image to appear:

        <img src="<?php header_image(); ?>" 
        height="<?php echo get_custom_header()->height; ?>" 
        width="<?php echo get_custom_header()->width; ?>" alt="" />
        
Note that a default header image sized 960x150px should be uploaded to the theme folder and saved in a folder called images.

