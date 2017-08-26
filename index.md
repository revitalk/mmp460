---
layout: class
site: MMP 460 Multimedia Project Lab
title: Class Notes
---


{% for post in site.categories.class notes %}
 <h3>{{ post.title }}</h3>
 <div>{{ post.content }}</div>
{% endfor %}

