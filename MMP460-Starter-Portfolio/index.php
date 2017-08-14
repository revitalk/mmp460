<!-- Page header -->           

<?php get_header();?>

<div id="main">
	<div id="content">
    
<!-- Starting posts-->
  
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  
  <article class="blogPost">
  
  <!-- Title of the post -->
  
    <h2><a href="<?php the_permalink(); ?>"> 
      <?php the_title(); ?> 
      </a></h2>
    
    <!-- Post's date and author -->
    
    <small> 
    <?php the_date(); ?>
    by
    <?php the_author(); ?>
    </small>
    
    <!-- Post's content -->
    
	<?php the_content(); ?> 
   
   <!-- Post's category and comments -->
    <small>
    Category:
    <?php the_category(', ') ?>
    |
    <?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)'))?>
    |
    <?php edit_post_link('Edit'); ?>
    </small> 
    
  <!--Comments on Single Post pages -->
    
    <div id="comment_display">
    <?php // Load Comments template on single post pages only
        if ( is_single()) {
                comments_template();
            }
        ?>
     </div>   
     
 <!--comments ends -->

    </article>
    
    
  <?php endwhile; else: ?>  
  
  <p>
    <?php _e('Sorry, no posts matched your criteria.'); ?>
  </p>
  <?php endif; ?> <!--End of posts -->

</div> <!-- ends content div -->

<!-- Page sidebar -->           

<?php get_sidebar(); ?>

<!-- Page footer -->           

<?php get_footer();?>
