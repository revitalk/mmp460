<?php get_header();?>


      <div id="main">

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<article class="blogPost">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <small><?php the_date(); ?> by <?php the_author(); ?></small>

		
		<?php the_content(); ?>
        
       <small>Category: <?php the_category(', ') ?> | <?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)'))?> | <?php edit_post_link('Edit'); ?></small>
       </article>

			
		<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
       
<?php get_footer();?>