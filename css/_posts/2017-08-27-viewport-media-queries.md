---
layout: class
site: MMP 200 Multimedia Design
categories: css, responsive
title: Viewports and Media Queries
---
The **viewport** is the visible part of the screen. Different devices have different viewport sizes. You can see many device viewports [listed here](http://viewportsizes.com/).

At the beginning of mobile web most websites were designed for the larger viewport of a computer screen and mobile browsers adapted by scaling down the websites to fit the smaller viewport of the device. In responsive design, we need to disable this practice. We do it with the following meta element:

        <meta name="viewport" content="initial-scale=1">

**Media Queries**

Responsive design make use of CSS media queries to change the design at several breakpoints. Common breakpoints are:

- Mobile portrait – 320px
- Mobile landscape – 480px
- Tablet portrait – 768px
- Tablet landscape – 1024px
- Desktop – 1224px

CSS Media queries are in the form of:

        @media (max-width: 320px) {
        }

or

        @media (min-width: 768px) {
        }
        
For example:

        @media (min-width: 768px) {
          .toggle-menu{display:none;}
          nav {display:block}
        }
