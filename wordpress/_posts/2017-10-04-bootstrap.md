---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress underscore
title: Adding Bootstrap Support to Your Underscore Theme
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

Header.php: Add class container to page div
Header.php: Add class row to content div
Footer.php: add script
Configuring the menu:
Add walker file to theme. This file will 
https://github.com/wp-bootstrap/wp-bootstrap-navwalker/blob/v4/class-wp-bootstrap-navwalker.php
functions.php: add 
// Register Custom Navigation Walker
require_once('class-wp-bootstrap-navwalker.php');

