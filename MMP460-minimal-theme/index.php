<!-- Page header -->           

<?php get_header();?>

	<div id="content">
    
<!-- Starting posts-->
  
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  
  <article class="blogPost">
  
  <!-- Title of the post -->
  
    <h2><a href="<?php the_permalink(); ?>"> 
      <?php the_title(); ?> 
      </a></h2>
    
    
    <!-- Post's content -->
    
	<?php the_content(); ?> 

    </article>
    
    
  <?php endwhile; else: ?>  
  
  <p>
    <?php _e('Sorry, no posts matched your criteria.'); ?>
  </p>
  <?php endif; ?> <!--End of posts -->

</div> <!-- ends content div -->


<!-- Page footer -->           

<?php get_footer();?>
