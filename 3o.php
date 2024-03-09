<?php
$url = filter_var($_GET["url"], FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED);
exec('curl -L ' . $url, $content) or die("Error!");
print_r($content);