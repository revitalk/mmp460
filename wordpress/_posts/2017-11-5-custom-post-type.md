---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress
title: Custom Post Type
---

Custom post types appear as a seperate tab on the dashboard toolbar. Here's an example of the code needed in functions.php to create a custom post type called 'Podcast':

        //  custom post type 
        function create_post_type() {
            register_post_type( 'podcasts',
                array(
                    'labels' => array(
                        'name' => __( 'Podcasts' ),
                        'singular_name' => __( 'Podcast' )
                    ),
                    'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
                    'public' => true,
                    'has_archive' => true,
                    'rewrite' => array('slug' => 'podcasts'),
                )
            );
        }
        add_action( 'init', 'create_post_type' );

You can link directly to these posts from Menus or link to the archive page of these posts by creating a custom link to www.mysite.com/podcasts (make sure that the permalinks settings is set to 'post name').

To customize the archive template that displays them create a template called archive-podcasts.php.
To customize the template that displays each post create single-podcasts.php.
