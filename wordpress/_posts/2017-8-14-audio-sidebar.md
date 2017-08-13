---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress
title: Audio player in a sidebar- Step by Step
---

The audio player will be placed it in a sidebar. If you are not using the existing sidebar in your theme you can use it for the audio player. If you are making other uses of the existing sidebar follow the steps here first to create a second sidebar.

- Have a couple of audio files ready. Make sure that you choose files that are smaller than 8 MB, which is the limit for file size uploads to our server.
- Upload the files to Media.
- Create a new page. Name it Audio Player. Click on Add Media and choose Create Audio Playlist from the left menu. Choose your audio file and insert playlist to page.
- Switch to text and copy the shortcode of the playlist.
- In order to use this playlist in a sidebar we have to first enable adding shortcodes to the sidebar: In functions.php add the following lines

        add_filter( 'widget_text', array( $wp_embed, 'run_shortcode' ), 8 );
        add_filter( 'widget_text', array( $wp_embed, 'autoembed'), 8 );
        add_filter( 'widget_text', 'do_shortcode');
        
- Go to Appearance>Widgets, drag a text widget to the appropriate sidebar and paste there the playlist shortcode.
