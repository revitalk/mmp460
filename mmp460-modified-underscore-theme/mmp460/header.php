<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mmp460
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mmp460' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo(); ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php
			$mmp460_description = get_bloginfo( 'description', 'display' );
			if ( $mmp460_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $mmp460_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

        <nav class="navbar navbar-expand-sm navbar-light bg-light">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <?php
            wp_nav_menu( array(
            'theme_location'=> 'primary',
            'depth'         => 2,
            'container'     => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'  => 'navbarSupportedContent',
            'menu_class'    => 'navbar-nav mr-auto',
            'fallback_cb'   => 'WP_Bootstrap_Navwalker::fallback',
            'walker'        => new WP_Bootstrap_Navwalker())
            );
          ?>           
          </nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
