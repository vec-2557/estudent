{% for item in items%}
<li>{{item.id|e}}{{"-->"}}{{item.name|e}}{{"-->"}}{{item.email|e}}</li>
{% endfor %}