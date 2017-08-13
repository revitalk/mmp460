---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress underscore
title: Featured images in Underscores
---
The Underscores theme comes with basic support for featured images but you will have to add them to the templates if you want them to be displayed. Use the following code wherever you want the featured image to be displayed:

      <div id="post-image"> <!-- feel free to change the name of the id -->
      <?php // check if the post has a Post Thumbnail assigned to it.
      if ( has_post_thumbnail() ) {
      the_post_thumbnail();
      } ?></div>

With CSS customize the look and location of the image div.

![interface image]({{site.url}}/mmp460/assets/featured-image.gif)
