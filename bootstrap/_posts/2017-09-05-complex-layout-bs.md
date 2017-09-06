---
layout: class
site: MMP 200 Multimedia Design
categories: bootstrap
title: Complex CSS layout with Bootstrap
---

**Review:**

- Rows must be placed within a container (fixed-width) or .container-fluid (full-width) for proper alignment and padding.
- Use rows to create horizontal groups of columns. To create a row create a div and assign it the class .row
- The bootstrap grid is based on 12 columns. To span columns use devisors of 12, for example, col-xs-3 will create a column that takes a fourth of the container.
- For columns that float in all viewport sizes use the col-xs- classes.
- For columns that float is viewport sizes bigger than 768px (tablet size) use the col-sm- classes. They will collapse in viewport sizes smaller than 768px.
- For columns that float is viewport sizes bigger than 992px (desktop size) use the col-md- classes. They will collapse in viewport sizes smaller than 992px.
- For columns that float is viewport sizes bigger than 1200px (large desktop size) use the col-lg- classes. They will collapse in screen sizes smaller than 1200px.

**Using multiple grid class for different column arrangement in different viewports**

Unless you are using the classes col-xs- all columns collapse in small viewport (under 768px). To still have column-based layout in small viewport use multiple grid classes. For example the following code creates 6 columns in viewport bigger than or equal to 768px and 3 columns in viewport sizes smaller than 768px.

        <div class="col-xs-4 col-sm-2">......</div>
        <div class="col-xs-4 col-sm-2">......</div>
        <div class="col-xs-4 col-sm-2">......</div>
        <div class="col-xs-4 col-sm-2">......</div>
        <div class="col-xs-4 col-sm-2">......</div>
        <div class="col-xs-4 col-sm-2">......</div>

**Nesting columns**

The following code shows how to create a layout similar to the image below. The nested grid is inside one of the columns. Full code is [here](https://github.com/revitalk/Bootstrap/blob/master/nested-grid.html).

![nested-grid](nested-grid.gif)

        <div class="container">
          <div class="row">
            <div class="col-sm-8">
            <!-- *******   nested columns ******* -->
              <div class="row">
                <div class="col-sm-12">....</div>
              </div> <!-- .row --> 
              <div class="row"> 
                <div class="col-sm-4">....</div> 
                <div class="col-sm-4"> </div>
                <div class="col-sm-4"> </div>  
              </div><!-- .row --> 
            </div> <!-- .col-sm-8 --> 	
            <div class="col-sm-4">....</div> 
          </div> <!-- .row --> 
        </div> <!-- .container -->
