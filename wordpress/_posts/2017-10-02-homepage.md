---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress underscore
title: Adding a Homepage Template for the Underscore Theme
---

1. Duplicate page.php and rename it front-page.php

2. In front-page.php change

		get_template_part( 'template-parts/content', ‘page’ );

	to:

		get_template_part( 'template-parts/content', 'home' );


3. In folder 'template-parts' duplicate content-page.php and rename it content-home.php.

4. To delete the page title, delete the following in content-home.php :

		<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
		
5. Make any additional changes to front-page.php and content-home.php.
