<?php
if (isset($_POST['login']) && isset($_POST['password'])){

$login = $_POST['login'];
$password = $_POST['password'];

setcookie('username',  $login, time() + 60 * 60 * 24 * 7, '/');
setcookie('password', $password, time() + 60 * 60 * 24 * 7, '/');
header("Location: http://cell.ru/php/lssons.php");

}



?>