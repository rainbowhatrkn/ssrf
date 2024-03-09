<?php
$f = filter_var($_GET["url"], FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) or die("Error!");
echo file_get_contents($f);