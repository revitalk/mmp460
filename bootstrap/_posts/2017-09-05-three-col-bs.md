---
layout: class
site: MMP 460
categories: bootstrap
title: Quick 3 columns responsive layout with Bootstrap
---
To create a 3-column based layout that collapses into one column in viewports smaller than 540px do the following:

Start with [HTML from Bootstrap basic template](https://getbootstrap.com/docs/4.0/getting-started/introduction/#starter-template).
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

Add the class col-sm to each of the column divs. 

        <div class="container">
          <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm"></div>
            <div class="col-sm"></div>
          </div>
        </div>
   
Learn more about the Bootstrap grid system [here](https://getbootstrap.com/docs/4.0/layout/grid/).
