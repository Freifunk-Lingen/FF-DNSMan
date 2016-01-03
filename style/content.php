<?php

echo "<div id='content'>";
getView(getParameter('view'),  getParameter("category"), getData("data"));
echo "</div>";
