---
layout: class-blog
site: MMP 460 Multimedia Project Lab
title: Class Notes
---


{% for post in site.categories.class-notes %}
 + [{{ post.title }}]({{ page.url }})
  + {{ post.content }}

{% endfor %}

