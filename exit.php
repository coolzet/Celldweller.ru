<?php 
setcookie('username', "", time() - 250000, '/');
setcookie('password', '', time() - 250000, '/');
header("Location: http://celldweller.ru/index.php");
  // Stop session and readirect to main page
?>
