<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="password-styles.css">
  <title>Password Protected - trhacknon's SSRF Lab</title>
</head>
<body>
  <div class="container">
    <h1 class="rainbow-text">trhacknon</h1>
    <p>Welcome to the Logged Section!</p>
    <p>Explore the SSRF lab safely.</p>
    <div class="menu">
      <label for="pageSelect">Select a page:</label>
      <select id="pageSelect" onchange="navigateToPage()">
        <option value="1.php">1.php</option>
        <option value="2.php">2.php</option>
        <option value="3.php">3.php</option>
      </select>
    </div>

    <script>
      // Sélectionner automatiquement la page actuelle dans le menu déroulant
      var currentPage = window.location.href.substring(window.location.href.lastIndexOf("/") + 1);
      document.getElementById("pageSelect").value = currentPage;

      // Fonction pour naviguer vers la page sélectionnée
      function navigateToPage() {
        var selectedPage = document.getElementById("pageSelect").value;
        window.location.href = selectedPage;
      }
    </script>
    </div>
</body>
</html>