---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress underscore
title: Google Map in WordPress
---

**Step-by-step instructions to hard-code a google map with custom markers and popup info boxes in one of your WordPress site pages. The data for the markers locations and info boxes will be retrieved from a Json file.**
Copy this script.js file and save it in the js folder in your theme directory.
Copy the markers.json file and save it in the root directory of your wordpress website. This way it will be easier for your client to find the page and add/change locations and data.
Create a custom template for your map page. 
Duplicate page.php and rename it page-map.php. Add a php comment at the top of the page:
  <?php
  /*
  Template Name: Map
  */
  ?>

Add a div in page-map.php:
<div id="map" style="height:500px"></div>
Adjust the height to your liking or include it in your style.css
Add the following
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js" defer></script>
Open script.js and change fetch('markers.json') to fetch('../markers.json')
Add your own key.	
Change the 
center: {lat: -34.397, lng: 150.644},
to reflect your preferred centered location
Change the zoom factor if needed
change the data in markers.json
