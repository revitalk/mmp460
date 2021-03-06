---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress underscore
title: Google Map in WordPress
---

**Step-by-step instructions to hard-code a google map with custom markers and popup info boxes in one ofthe pages of your WordPress site. The data for the markers' locations and info boxes will be retrieved from a Json file.**

1. Copy [script.js](https://github.com/revitalk/google-maps-api-template) and place it in the js folder in your theme directory.
1. Copy [markers.json](https://github.com/revitalk/google-maps-api-template) and place it in the root directory of your wordpress website. This way it will be easier for your client to find it and add or change locations and data.
1. Create a custom template for your map page: 
    - Duplicate page.php and rename it page-map.php. 
    - Add a php comment at the top of the page:
  
             <?php
               /*
               Template Name: Map
               */
              ?>
        
1. Add a div for the map in page-map.php:

              <div id="map" style="height:500px"></div>
    
    Adjust the height to your liking or include it in your style.css
1. Add a link to script.js:

        <script src="<?php echo get_template_directory_uri(); ?>/js/script.js" defer></script>

1. Open script.js make the following changes:
  
    - Fix the link to the Json file. Change:
  
             fetch('markers.json') 
  
        to:
  
             fetch('../markers.json')
      
    - Add your own key.	
    - Change the center location and the zoom factor. 
1. Change the data in markers.json
1. In the dashboard, create a new page and choose the template 'Map'.

**To include images in the popup windows**
1. Create a folder for the images in the root directory of your wordpress website and upload the images ro it.
1. To include an image in the popup window just add the html code and use the escape character before a quote. For example:

            "description": "<img src=\"../images/oakwoodpark.jpg\"><p>Oakwood</p>"
            
1. You must go up one folder with ../

