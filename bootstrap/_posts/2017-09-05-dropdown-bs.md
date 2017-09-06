---
layout: class
site: MMP 200 Multimedia Design
categories: bootstrap
title: Basic dropdown navigation bar with Bootstrap
---
1. Complete [all stages to create a basic navigation bar with Bootstrap](https://revitalk.github.io/mmp200/week9/nav-bar-bs).

1. Add the HTML code for the dropdown menus. For example:

        <ul class="nav navbar-nav">
        <li><a href="#">Baseball</a></li>
        <li><a href="#">Football</a>
          <ul>
           <li><a href="#">N.F.L.</a></li>
           <li><a href="#">College Football</a></li>
          </ul>
        </li>
        <li><a href="#">Basketball</a>
          <ul>
            <li><a href="#">N.B.A.</a></li>
            <li><a href="#">College Basketball</a></li>
          </ul>
        </li>
        <li><a href="#">Hockey</a></li>
        </ul>
        
1. Add the class ‘dropdown’ to the li(s) that hold the dropdown menus:

        <li class="dropdown"><a href="#">Football</a>
         <ul>...
         
1. Add the class ‘dropdown-toggle’ to the hyperlink of each li that holds the dropdown menu, as well as data-toggle=”dropdown”:

        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Football</a>

1. Add the class ‘dropdown-menu’ to the ul that holds the dropdown navigation links:

        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Football</a>
          <ul class="dropdown-menu">

1. To add a little down arrow next to each link that opens the dropdown menu add <span class=”caret”></span> next to the link text:

        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Football<span class="caret"></span></a>

The full code is [here](https://github.com/revitalk/Bootstrap/blob/master/basic-dropdown-nav.html).
