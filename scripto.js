function showPasswordSection() {
  document.getElementById('passwordSection').style.display = 'block';
}

function checkPassword() {
  var password = document.getElementById('passwordInput').value;
  if (password === '') {
    window.location.href = 'password-protected.php';
  } else {
    alert('Incorrect password. Try again.');
  }
}