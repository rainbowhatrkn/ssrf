<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="password-styles.css">
  <link rel="stylesheet" href="menu-style.css"> 
  <title>3.php - trhacknon's SSRF Lab</title>
</head>
<body>
  <div class="container">
    <h1 class="rainbow-text">trhacknon</h1>
    <p>3.php - Explore the SSRF lab safely.</p>
    <nav class="navbar">
      <a href="1.php" class="tab4">1.php</a>
      <a href="2.php" class="tab4">2.php</a>
      <a href="3.php" class="tab4">3.php</a>
      <a href="writeup.php" class="tabb">View Writeup</a>
    </nav>
    <?php
    // Check if the 'url' parameter is provided
    if (isset($_GET["url"])) {
      $url = filter_var($_GET["url"], FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED);

      if ($url === false) {
        echo "Invalid URL provided.";
      } else {
        // Execute curl command to retrieve content from the provided URL
        exec('curl -L ' . $url, $content, $returnValue);

        if ($returnValue !== 0) {
          echo "Error executing curl command.";
        } else {
          echo "<hr><h2>Content from SSRF request:</h2>";
          echo "<pre>";
          print_r($content);
          echo "</pre>";
        }
      }
    } else {
      echo "No URL parameter provided.";
    }
    ?>

    <div class="links">
      <a href="" target="_blank"></a>
    </div>

  </div>
</body>
</html>