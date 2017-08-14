<!-- Page header -->           

<?php get_header();?>

      <div id="main">
      
<!-- featured image -->    

 		<div id="featuredImage">   
        <?php the_post_thumbnail(); ?>
		</div>
  
<!-- Page content -->           

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>
			
		<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
 
   
<!-- page footer -->           

 
 <?php get_footer();?>