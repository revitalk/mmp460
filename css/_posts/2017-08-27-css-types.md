---
layout: class
site: MMP 200 Multimedia Design
title: Types of CSS
---
Cascading Style Sheets (CSS) is a coding language used to enhance the visual design of web pages. CSS can be implemented in three different, complimentary ways: Linked, Embedded and Inline.

When applied to one web page, Inline CSS will take precedence over Embedded and Linked CSS, and Embedded CSS will take precedence over Linked CSS.

**Linked CSS**

When using Linked CSS, CSS code is written in a separate document saved with the extension .css. This CSS document is then linked to an HTML file in one of the following methods. Both methods require typing the following code into the head section of the HTML document.

        <link rel="stylesheet" href="http://www.revitalk.com/mmp100/mystyles.css" type="text/css">

or:

        <style type="text/css">
        @import url(mystyles.css);
        </style>

Linked CSS is a preferred method to implement CSS because:

It allows maximum separation of style and structure – all style information of a web page is contained in one document and away from the HTML code.
Linked CSS can be applied to several web pages that share design.

**Embedded CSS**

When using embedded CSS, CSS code is written inside the head section of the HTML documents using the <style>
tag. For example:

        <style type="text/css">
        .code {font-family: Courier, mono;}
        td {border: 1px;}
        </style>

Embedded CSS will apply to one web page only – the page where it is written.

Embedded CSS can be used to override linked CSS

**Inline CSS**

Inline CSS is written inside an HTML tag. For instance:

        <p class="code"><p style="font-size: 2em; color: red;">Inline
        CSS</p>

Inline CSS is used mainly to override embedded or linked CSS rules.
