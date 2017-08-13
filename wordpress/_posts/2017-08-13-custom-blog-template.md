---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress underscore
title: Creating a custom template for the blog page (underscore theme)
---

- Create a new post category and name it ‘blog’
- Duplicate archive.php and rename the duplicate file category-blog.php.
- Delete

        <?php the_archive_title( '<h1 class="page-title">', '</h1>' );
        the_archive_description( '<div class="archive-description">', '</div>' ); >?

- And replace it with:

        <h1 class="page-title"><?php single_cat_title(); ?></h1>
        
- Create posts and assign them the category ‘blog’. They should appear in the blog category page.
