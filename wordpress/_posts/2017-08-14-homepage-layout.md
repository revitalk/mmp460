---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress underscore
title: Creating a home page with a slideshow and 3 columns (underscore theme)
---
Follow the instructions to create a homepage that has the layout of this wireframe.

![wireframe]({{site.url}}/mmp460/assets/wireframe-hp.png)

We will set up a dedicated template for the homepage that includes 4 LOOPs. the first one is the standard one that grabs whatever you type into the page in the Dashboard. The other three, each will display one post from one category. These instructions show code from the theme undescore.

**WordPress setup**

In Setting>Reading make sure that the homepage is set to ‘static page’ and that there is an existing page assigned to it.
Install a slideshow plugin, create a slideshow and paste the shortcode to the page that is assigned for the homepage.
In Posts>Categories create 3 categories, each for each column. For example, news-home, events-home, blog-home.
Create 3 new posts and assign one of this categories to each post.
Template setup

Create a dedicated template for the homepage by duplicating page.php and naming it front-page.php.
Reset the current loop in order to start a new one: add the following line at the end of the existing LOOP:  

        <?php wp_reset_query(); ?>

This is how it all should look:

         <?php
         while ( have_posts() ) : the_post();
         get_template_part( 'template-parts/content', 'page' );
         if ( comments_open() || get_comments_number() ) :
         comments_template();
         endif;
         endwhile; // End of the loop.
         ?>
         <?php wp_reset_query(); ?>
        Create divs for the three columns, and a div to hold all three of them:
        <div class="row">
           <div class="col-3"></div>
           <div class="col-3"></div>
           <div class="col-3"></div>
        </div>

Copy the LOOP code (above), including the reset line and paste it In each of these divs (total of three times).
Add the following line above the LOOP code in each of the three divs:

         <?php query_posts('category_name=news-home&posts_per_page=1'); ?>

Change the category name in each one of them to the category of the post that you would like to show.

**CSS Setup**

In style.css paste the following lines inside the media query @media screen and (min-width: 37.5em):

        .row {
         margin-right: -15px;
         margin-left: -15px;
        }
        .col-3{
         width:33.333333%;
         float:left;
         padding-left:15px;
         padding-right:15px;
        }
        
Putting the code inside this media query will make sure that it will only be applied to screen sizes that are bigger than 37.5em. In smaller screen sizes the columns will collapse to one column.

Complete code is here in front-page.php and style.css.

