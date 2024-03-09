<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="password-styles.css">
  <link rel="stylesheet" href="menu-style.css"> 
  <title>2.php - trhacknon's SSRF Lab</title>
</head>
<body>
  <div class="container">
    <h1 class="rainbow-text">trhacknon</h1>
    <p>2.php - Explore the SSRF lab safely.</p>
    <nav class="navbar">
      <a href="1.php" class="tab">1.php</a>
      <a href="2.php" class="tab">2.php</a>
      <a href="3.php" class="tab">3.php</a>
    </nav>
    <?php
    // Check if the 'url' parameter is provided
    if (isset($_GET["url"])) {
      $url = filter_var($_GET["url"], FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED);

      if ($url === false) {
        echo "Invalid URL provided.";
      } else {
        // Attempt to read content from the provided URL
        $content = @file_get_contents($url);

        if ($content === false) {
          echo "Error reading content from the URL.";
        } else {
          echo "<hr><h2>Content from SSRF request:</h2>";
          echo $content;
        }
      }
    } else {
      echo "No URL parameter provided.";
    }
    ?>

  </div>
</body>
</html>