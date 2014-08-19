<?php
$inHtml=htmlspecialchars("<h1>Hello World</h1>");
$inHtmlSec=htmlspecialchars("<p>I love Software University</p>");
echo strip_tags($inHtml)."<br>";
echo "\n";
echo strip_tags($inHtmlSec);
?>