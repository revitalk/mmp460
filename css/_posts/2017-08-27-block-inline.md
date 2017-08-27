---
layout: class
site: MMP 200 Multimedia Design
title: Block-Level Vs. Inline elements
---

**Block-level** are HTML elements that occupy a full horizontal line on the page. They always start in a new line. 

**Inline elements** are HTML elements that are laid out side by side. They continue the line of the element before them and the line will wrap if they reach the right edge of the window.

Block or Inline are behaviors that are applied with CSS using the *display* property.
        
However, browsers pre-define all HTML elements as either inline or block. For example, browsers define P, DIV and H1-H6 as block levels, and IMG and SPAN as inline. You can overide this definition in your own CSS file. For example,
        
        h2{
        display: inline;
        }

Some CSS properties behave differently when applied to block-level and inline elements. For example, you can set the width of a block-level element with CSS, which you cannot do for an inline element.

