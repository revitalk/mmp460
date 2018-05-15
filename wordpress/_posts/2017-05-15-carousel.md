---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress underscore
title: Bootstrap Carousel with underscores theme
---
Paste this code in the template of your page wherever you want the slideshow to appear. Change the category name to your category. Change inline css as needed.

	<div id="carouselExample" class="carousel slide" data-ride="carousel" style="min-height:400px; background-color:#e8f0ff;">
	  <!-- first and active slide -->
	  <div class="carousel-inner" style="width:80%; margin:0 auto;">
		    <div class="carousel-item active">
			<?php query_posts('category_name=timeline&posts_per_page=1'); ?>
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'page' );
				endwhile; // End of the loop.
				?>
			</div> <!-- active -->
		<!-- all other slides -->	
			<?php query_posts('category_name=timeline&offset=1'); ?>
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'carousel' );
				endwhile; // End of the loop.
				?>
			  </div> <!-- inner -->
	<!-- next and prev controls -->
			  <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div> <!-- carousel -->
			<?php wp_reset_query(); ?>
			
Add a loop template called content-carousel.php with the following code (duplicate content-page.php and replace the code under the comments at the top of the page with the following code):

		<div class="carousel-item">
		  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
			<?php lespmha_post_thumbnail(); ?>
			<div class="entry-content">
				<?php
				the_content();
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lespmha' ),
					'after'  => '</div>',
				) );
				?>
			</div><!-- .entry-content -->
			<?php if ( get_edit_post_link() ) : ?>
				<footer class="entry-footer">
					<?php
					edit_post_link(
						sprintf(
							wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Edit <span class="screen-reader-text">%s</span>', 'lespmha' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						),
						'<span class="edit-link">',
						'</span>'
					);
					?>
				</footer><!-- .entry-footer -->
			<?php endif; ?>
		</article><!-- #post-<?php the_ID(); ?> -->
		</div>
