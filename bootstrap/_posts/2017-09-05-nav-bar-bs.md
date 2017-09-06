---
layout: class
site: MMP 200 Multimedia Design
categories: bootstrap
title: Step-by-step basic navigation bar with Bootstrap
---

1. Start with HTML from [Bootstrap basic template](https://getbootstrap.com/docs/3.3/getting-started/#template).
1. Add a ‘container’ div that has the class ‘container’ or ‘container-fluid’

        <div class="container">
        </div>
        
1. Add the usual code for navigation inside the container div:

        <nav> 
        <ul>
        <li><a href="#">Baseball</a></li>
        <li><a href="#">N.F.L.</a></li>
        <li><a href="#">N.B.A.</a></li>
        <li><a href="#">Hockey</a></li>
        </ul>
        </nav>
        
1. Add the classes navbar and navbar-default to the nav element. They will add bootstrap default styles to your navigation bar.

        <nav class="navbar navbar-default">
        
   You can learn about other styles that you can use for navigation bar [here](https://www.w3schools.com/bootstrap/bootstrap_navbar.asp).

1. Add the classes nav and nav-navbar to the ul element. They will add bootstrap default styles that turn the list into a horizontal navigation bar.

        <ul class="nav navbar-nav">
        
   The following 2 steps will make your navigation bar collapsed in small screens:
1. Add a button to toggle the navigation’s visibility in small screens. The code should be placed inside the nav, above the ul that holds the navigation links:

        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#my-navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Brand</a>
        </div>
        
1. Enclose your navigation ul with:

        <div class="collapse navbar-collapse" id="my-navbar-collapse">
         <ul class="nav navbar-nav">
         <li><a href="#">Baseball</a></li>
         <li><a href="#">N.F.L.</a></li>
         <li><a href="#">N.B.A.</a></li>
         <li><a href="#">Hockey</a></li>
         </ul>
        </div>
        
 Notice the value of data-target=”#my-navbar-collapse” is the same as the id of the div you are adding. Of course you can change the id value but make sure the data-target and the id values are identical.

The full code is [here](https://github.com/revitalk/Bootstrap/blob/master/basic-nav.html).
