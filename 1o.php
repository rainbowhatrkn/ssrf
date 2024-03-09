<?php
function curl($url) {
   $optArray = array(
      CURLOPT_URL => $url,
      CURLOPT_FOLLOWLOCATION => 1
   );
   $ch = curl_init();
   curl_setopt_array($ch, $optArray);
   $response = curl_exec($ch) or die("Error!");
   curl_close($ch);

   return $response;
}
$content = curl(filter_var($_GET["url"], FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED));
echo $content;
