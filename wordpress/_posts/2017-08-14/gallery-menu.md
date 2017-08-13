---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress
title: Step-by-Step: Creating a Gallery Menu
---

![gallerr menu]({{site.url}}/assets/gallery-menu.jpg)

*In Photoshop*

- Create the thumbnails. Include any text if it is part of the design.
- Make sure to crop them to their final, and identical size.

![gallerr menu]({{site.url}}/assets/gallery-url.jpg)

In WordPress dashboard:gallery-url

- **Install the plugin:** WP Gallery Custom Links and activate it. It will allow you to link gallery thumbnails directly to any URL.
- Upload thumbnail images to Media
- In a page (or post) click on Add Media
- The ‘Insert Media’ window will pop up. Click on ‘Create Gallery’
- Select the Thumbnail images. In ‘Gallery Link URL’ input field add a URL to each of them.
- Click on ‘Create New Gallery’
- Select the number of columns
- Click on ‘Insert Gallery’

**In style.css**

- Add whatever effect you like to the gallery thumbnails by styling the .gallery-icon class. For example, the following code will dim the thumbnails on rollover:
.gallery-icon:hover{ opacity:0.2;}
