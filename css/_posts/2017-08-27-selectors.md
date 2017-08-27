---
layout: class
site: MMP 200 Multimedia Design
title: CSS Selectors
---
A CSS selector points to the HTML element targeted and affected by the CSS rule.

**Elements selectors**

Element selectors target html elements. Use element selectors when you want all page elements enclosed in a particular tag to share style. Examples:

        h1 {font: Georgia;}
        li {list-style-type: disc;}

**Class selectors**

To apply the same CSS rule to multiple HTML elements give them the same class and then use a CSS class selector to target them all at once.

For example,
        
        <p class="staffname"> 
        
and then in CSS:

        p.staffname {color: gray;}

If you omit the tag preceding the class name the rule will apply to any page element that has the class staffname. Note that all class names in CSS must start with a period.

The following CSS rule will affect all html elements with the class navigation:

        .navigation {font-family: arial; font-size:small;}

**ID selectors**

To give a page element a unique style use the id attribute in the HTML code, for example: 

        <h1 id=”firstline”>

Then use an id selector to target an HTML element with a specific id, such as in:

        h1#firstline {border:0;}

If you choose to omit the tag, such as in 
        #firstline {border:0;} 
the rule will apply to any HTML element with the id firstline and not only to an h1 element. Specifying the tag ensures applying this rule only to a very particular element.

Ids must be unique, i.e. must be given to only one element in a web page.

**Descendant Selectors**

Descendant selectors identify HTML elements by one of their ancestor elements. An ancestor is a tag that nests another tag. In the example below the p is an ancestor of strong and strong is a decedent of p.

        <p>Have a <strong>great</strong>day!</p>

Descendant selectors are a great way to pinpoint an HTML elements without the need for class or id names, i.e. saving time and keeping HTML code neater. This is how to write them

        p strong {color: red;}

And this CSS rule targets the bold line in the list below:

        ul ol strong {background-color: #F7E9FF; font-weight: normal;}

* First list item one
    - **First list item two**
    - Second list item one
* Second list item two
* First list item three

**Pseudo-Class Selectors**

These selectors are not ‘real’ class selectors as no class is specified in the HTML code but is defined by user actions (i.e. hovering, clicking, visiting a page).

        a:link {color: blue; text-decoration: none;}

        a:visited {color: gray; text-decoration: none;}

        a:hover {color: red; text-decoration: underline;}

        a:active {color: green; text-decoration: underline;}

Note that you must write these rules in this order or they will not apply properly to hyperlinks.
