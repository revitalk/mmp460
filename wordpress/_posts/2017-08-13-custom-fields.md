---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress
title: Adding Custom Classes to Posts with Custom Fields
---
If you want  to style some of your posts differently you can use Custom Fields to get it done:

In the post page, click on Screen Options (top right) and make sure that Custom Fields is checked

![custom-field1]({{site.url}}/mmp460/assets/custom-field1.png)

Scroll down to Custom Fields and add a new custom field with a name of your choice, for example ‘css_class’. Add a value to this field, which will be  the class name added to this post, for example, ‘gray_back’.

![custom-field2]({{site.url}}/mmp460/assets/custom-field2.png)

In the template file (index.php, for example), in the ‘loop’ section of the code add a class to the article tag that encloses the post:

        <article class="<?php echo get_post_meta(get_the_ID(), 'css_class', true); ?>">
        
The second value in the get_post_meta function is the name of the custom field.

Style the class in style.css. For example:

        .gray_back{ background-color:#ccc;}
