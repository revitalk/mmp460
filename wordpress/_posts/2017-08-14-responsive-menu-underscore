---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress underscore
title: Responsive menu in Underscore
--- 
The menu in underscore comes with minimal responsive behavior – it changes into a button in small screen sizes. However once opened it looks the same as in large screens. These are the changes to the original CSS that have to be made in order for the menu to be vertical in mobile. I only included here the CSS rules that I changed. Leave all other original menu related CSS. The full code is here.

        /*-----------------------------------------------------
        ## Menus
        -------------------------------------------------------*/

        .main-navigation li {
        float: none;
        position: relative;
        margin:1em;
        margin-left:0;
        }

        .main-navigation ul ul {
        background-color:#fff;
        position: absolute;
        left: -999em;
        }

        .main-navigation ul li:hover > ul,
        .main-navigation ul li.focus > ul {
        left: auto;
        position:relative;
        }

        @media screen and (min-width: 37.5em) {

        .main-navigation li {
        float: left;
        margin-left:1em;
        }
        .main-navigation ul ul {
        box-shadow: 0 3px 3px rgba(0, 0, 0, 0.2);
        background-color:#fff;
        float: left;
        position: absolute;
        top: 1.5em;
        left: -999em;
        z-index: 99999;
        }
        .main-navigation ul li:hover > ul,
        .main-navigation ul li.focus > ul {
        left: auto;
        position:absolute;
        }
        }
        
Add additional CSS to customize the menu design.

To change the menu button into the common list icon (3 lines):

In header.php find the code of the button and change it to:

        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'apnm' ); ?>
        <span class="menu-icon"></span>
        <span class="menu-icon"></span>
        <span class="menu-icon"></span>
        </button>
        
Add the following to style.css:

        .menu-icon{
        background-color:#666;
        width:2em;
        height:3px;
        margin:3px;
        display:block;
        }
        .menu-toggle{
        border:0;
        background:transparent;
        }
