---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress
title: Featured images for category pages
---

- Name all the images the same name as the categories. Pay attention to the case as category names are case sensitive.
- Add the following code to category.php

          <img src="<?php echo get_template_directory_uri(); ?>/images/<?php $category = get_the_category(); echo $category[0]->cat_name; ?>.jpg"> 
