---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress underscore
title: Responsive underscores theme
---
Underscores comes with CSS for basic responsive behavior. It is built as a mobile-first site with all css styles outside of media query to be used for all viewports. There is one media query provided and all css unique to larger viewports  should be inside it. This is the way it looks without modifications:

        @media screen and (min-width: 37.5em) {
        .menu-toggle {
        display: none;
        }
        .main-navigation ul {
        display: block;
        }
        }
So if you have floating going on in the homepage, for example, put the relevant styles inside this media query.

**The menu**

Underscores comes with basic CSS and JavaScript that hide and display the menu in small viewports. However it does not collapse the floating  of the menu elements as well. To do it follow the steps here.
