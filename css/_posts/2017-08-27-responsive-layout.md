---
layout: class
categories: css, responsive
site: MMP 200 Multimedia Design
title: CSS Responsive layout
---
**Step 1**

Create a div to hold the whole page give it the id “container”. It should start right under the body tag and close right before the body closing tag.

        <body>
          <div id="container">
          </div>
        </body>

In css give the container div a width and align it inside the body. The following code gives it a maximum width of 960 pixels and centers it in the window. The max-width will keep the width flexible for viewports under 960 pixels. It also uses the overflow property to make sure that floating elements inside it will be fully contained.

        .container{
          max-width:960px;
          margin:0 auto;
          overflow:auto
        }
        
**Step 2**

Identify “rows” in your layout- these are elements, or groups of elements, that together take the full width of the page. In the [example layout here]({{site.url}}/mmp200/assets/festival-sketches-300x229.gif) the “rows” are:

- All the elements of the header form one row
- The nav bar
- The slideshow
- All the elements that make the two columns
- The footer

Each “row” should be represented by a div, or a sectional element, such as header, nav, section or footer. Give all these elements the class row, and in css:

        .row{
          width:100%;
          float:none;
          clear:both;
        }

**Step 3**

Look inside each “row” in your layout sketch. Some may be divided into columns, especially in desktop view. In the example here the header has two columns- the main title is floating to the left and the date and location floating to the right. Each column has to be in its own div. In this example we need a div for the main title and a div for both the dates and time.

        <header>
          <div id="main-title"></div>
          <div id="date-time"></div>
        </div>
        
Because the columns only occur in larger viewports we will put the css that creates the floating inside a media query for viewports larger than 768px:

        @media (min-width:768px){
          #main-title{width:40%; float: left;}
          #date-time{ width:40%; float: right;}
        }
