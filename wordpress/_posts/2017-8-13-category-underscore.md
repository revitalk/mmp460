---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress underscore
title: Creating a category template for Underscores themes
---

- Duplicate archive.php and rename the duplicate file category.php.
- Delete

        <?php the_archive_title( '<h1 class="page-title">', '</h1>' );
        the_archive_description( '<div class="archive-description">', '</div>' ); >?

- Replace it with:

        <h1 class="page-title"><?php single_cat_title(); ?></h1>

- To remove metadata replace the 

        get_template_part 

with

        get_template_part( 'template-parts/content', 'page' );
