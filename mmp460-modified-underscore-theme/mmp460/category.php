<?php
/**
 * The template for displaying category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mmp460
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
                
				<?php
				php single_cat_title( '<h2 class="page-title">', '</h2>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
                    </header><!-- .entry-header -->

                    <?php mmp460_post_thumbnail(); ?>

                    <div class="entry-content">
                        <?php
                        the_content();

                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mmp460' ),
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
                                        __( 'Edit <span class="screen-reader-text">%s</span>', 'mmp460' ),
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


			<?php endwhile;

			the_posts_navigation();

		else : ?>

			<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'mmp460' ); ?></h1>
	</header><!-- .page-header -->

	<?php	endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
