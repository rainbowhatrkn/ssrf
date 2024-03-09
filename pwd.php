<?php
$dotenv = vlucas\dotenv::createImmutable(__DIR__);
$dotenv->load();

$passwordFromEnv = getenv('pass');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- ... autres balises meta et liens de style ... -->
  <script>
    // Utiliser le mot de passe récupéré depuis le côté serveur
    var correctPassword = "<?php echo $passwordFromEnv; ?>";

    function showPasswordSection() {
      document.getElementById('passwordSection').style.display = 'block';
    }

    function checkPassword() {
      var password = document.getElementById('passwordInput').value;
      if (password === correctPassword) {
        window.location.href = 'password-protected.php';
      } else {
        alert('Incorrect password. Try again.');
      }
    }
  </script>
</head>
<body>
  <!-- ... autres éléments HTML ... -->
</body>
</html>