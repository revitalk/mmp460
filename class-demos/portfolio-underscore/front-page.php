<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package portfolio-underscore
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
	<div id="slideshow">
  <!-- slideshow Loop -->
		
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'home' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
	</div> <!-- #slideshow -->
    
    <?php wp_reset_query(); ?>

	<div class="row">
		<div class="col-2" id="news">
			<h2>News</h2>
			 <?php query_posts('category_name=news&posts_per_page=1'); ?>
				<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			    <?php wp_reset_query(); ?>

		</div>
		<div class="col-2" id="events">
			<h2>Events</h2>
					 <?php query_posts('category_name=events&posts_per_page=1'); ?>
				<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			    <?php wp_reset_query(); ?>
			
		</div>
	</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
