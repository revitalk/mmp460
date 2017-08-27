---
layout: class
site: MMP 200 Multimedia Design
title: Quoting with the blockquote and q elements
---

**The blockquote element**

Use blockquote tags to quote a sentence or a passage. You can nest any other HTML tag inside it. For example:

        <blockquote>
        <p>Some interesting quotes</p>
        <ul>
        <li>For example this one.</li>
        <li>And this one too.</li>
        </ul>
        <footer>--Mr. Quoted</footer>
        </blockquote>

or:

        <blockquote>
        <p>The reports of my death have been greatly exaggerated.</p>
        <footer>-- Mark Twain</footer>
        </blockquote>

Note that the source of the quote, which is not part of the quote but tells us something about it, is appropriately inside a footer.

**The q element**

Use the q tags to insert a quote into a sentence or a paragraph, such as in:

        <p><q> Curiouser and curiouser!</q> cried Alice</p>

 The cite attribute

The cite attribute can be used for both blockquote and q elements to indicate a source. The cite value must be a url. For example:

        <blockquote cite="http://www.yourquotesource/source.html">
