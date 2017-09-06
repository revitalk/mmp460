---
layout: class
site: MMP 200 Multimedia Design
categories: bootstrap
title: Carousel Slideshow with Bootstrap
---
To use any of bootstrap JS plugins you need to link your HTML file to the bootstrap.js and jQuery If you started with [Bootstrap basic template](https://getbootstrap.com/docs/3.3/getting-started/#template) these links are already there at the bottom of the code:

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

The carousel code is made up of the following parts:

1. A **wrapper div** that contains all of the slideshow code. The id name is the one that will be the value of the data-target of the indicators and the value of the href of the controls.

        <div id="carousel-example" class="carousel slide" data-ride="carousel">

1. **Indicators**: the little dots that enable direct access to slides.
1. **Slides** and captions
1. **Controls**: the next and back arrows

[Complete carousel code](https://getbootstrap.com/docs/3.3/javascript/#carousel)
