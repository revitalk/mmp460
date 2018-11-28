---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress
title: Featured images for category pages
---

- Name all the images the same names as the categories. Pay attention to the case as category names are case sensitive.
- Place the images in a folder in the theme directory. In the example below the directory is names 'images'.
- Add the following code to category.php. Change the directory name and file extension as necessary.

          <img src="<?php echo get_template_directory_uri(); ?>/images/<?php $category = get_the_category(); echo $category[0]->cat_name; ?>.jpg"> 
