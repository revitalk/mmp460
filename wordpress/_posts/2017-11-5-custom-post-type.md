---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress
title: Custom Post Type
---

Custom post types appear as a seperate tab on the dashboard toolbar. Here's an example of the code to create a custom post type called 'Podcast':

        //  custom post type 
        function create_post_type() {

            register_post_type( 'podcasts',
            // CPT Options
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
