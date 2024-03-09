<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="password-styles.css">
  <link rel="stylesheet" href="menu-style.css"> 
  <title>Password Protected - trhacknon's SSRF Lab</title>
</head>
<body>
  <div class="container">
    <h1 class="rainbow-text">trhacknon</h1>
    <p>Welcome to the Logged Section!</p>
    <p>Explore the SSRF lab safely.</p>
    <nav class="navbar">
      <a href="1.php" class="tab">1.php</a>
      <a href="2.php" class="tab">2.php</a>
      <a href="3.php" class="tab">3.php</a>
    </nav>
    <?php
    function curl($url) {
      $optArray = array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => 1,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false, // You may need to adjust this based on your environment
      );

      $ch = curl_init();
      curl_setopt_array($ch, $optArray);
      $response = curl_exec($ch);

      if ($response === false) {
        echo "Error: " . curl_error($ch);
      } else {
        echo $response;
      }

      curl_close($ch);
    }

    // Check if the 'url' parameter is provided
    if (isset($_GET["url"])) {
      $url = filter_var($_GET["url"], FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED);

      if ($url === false) {
        echo "Invalid URL provided.";
      } else {
        // Call the curl function
        echo "<hr><h2>Response from SSRF request:</h2>";
        curl($url);
      }
    } else {
      echo "No URL parameter provided.";
    }
    ?>

  </div>
</body>
</html>