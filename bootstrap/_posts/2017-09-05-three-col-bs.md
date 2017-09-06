---
layout: class
site: MMP 200 Multimedia Design
categories: bootstrap
title: Step-by-Step 3 columns responsive layout with Bootstrap
---
To create a 3-column based layout that collapses into one column in viewports smaller than 768px do the following:

Start with [HTML from Bootstrap basic template](https://getbootstrap.com/docs/3.3/getting-started/#template).
Add a ‘container’ div that has the class ‘container’ or ‘container-fluid’

        <div class="container">
        </div>

Add a div that will hold a row of 3 columns. Give it a class ‘row’.

        <div class="container">
          <div class="row">
          </div>
        </div
        
Add the 3 divs that hold the columns:

        <div class="container">
          <div class="row">
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>

Add the class col-sm-4 to each of the column divs.

        <div class="container">
          <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4"></div>
          </div>
        </div>
