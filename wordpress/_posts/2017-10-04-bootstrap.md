---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress underscore
title: Adding Bootstrap support to your Underscore theme
---
1. **Link the Bootstrap stylesheet**
In style.css add the following line above the existing css code (but after the initial comment): 
  
        @import 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css';
  
2. **Link Bootstrap Javascript files**
In footer.php add the following lines just before the closing of the body:

        <!-- bootstrap js -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

3. In header.php: add the class 'container' to the #page div.

4. **Configuring the menu**
To configure the navigation bar, we will implement a [WordPress walker class](https://codex.wordpress.org/Class_Reference/Walker) created by William Patton.
  - Add walker file to theme. Download or copy [class-wp-bootstrap-navwalker.php](https://github.com/wp-bootstrap/wp-bootstrap-navwalker/blob/master/class-wp-bootstrap-navwalker.php) to your theme directory.
  - Register the walker in functions.php: add the following lines at the end of functions.php:
  
              // Register Custom Navigation Walker
              require_once('class-wp-bootstrap-navwalker.php');
        
    - Add menu to header.php: delete the existing menu code from header.php and paste the following code wherever you want the menu to appear (either above the titles or below them). Change [bootstrap classes](https://getbootstrap.com/docs/4.0/components/navbar/) as you wish:

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

