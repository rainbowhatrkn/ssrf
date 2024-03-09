<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  
  <title>trhacknon - Labo SSRF</title>
</head>
<body>
  <div class="container">
    <h1>Welcome to </h1><h1 class="rainbow-text">trhacknon</h1><h1> SSRF Lab</h1>
    <p>Anonymous hacktivist/hacker</p>
    <p><font color="red">training and write up with the <strong>solution</strong></font></p>
    <p>Explore the world of Server-Side Request Forgery (SSRF)!</p>
    <button onclick="showPasswordSection()">Enter Password</button>
    <div id="passwordSection" style="display: none;">
      <input type="password" id="passwordInput" placeholder="Enter password">
      <button onclick="checkPassword()">Submit</button>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>