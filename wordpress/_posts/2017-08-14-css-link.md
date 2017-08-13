---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress
title: Linking an additional CSS file
---
 Add this code to your header.php and upload the additional css file to your theme folder.

        <link href="<?php echo get_template_directory_uri(); ?>/cssfilename.css" rel="stylesheet">
