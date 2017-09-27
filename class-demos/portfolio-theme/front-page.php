<?php get_header(); ?>

<div class="content content-home">
<!-- Starting posts-->
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <article class="blogPost">
         
                <!-- Post's content -->
            <?php the_content(); ?> 
        </article>
  <?php endwhile; else: ?>  
    <p>
    <?php _e('Sorry, no posts matched your criteria.'); ?>
    </p>
  <?php endif; ?> <!--End of posts -->
</div>

<div class="sidebar">
      <?php get_sidebar(); ?>
</div>

<?php get_footer();?>

