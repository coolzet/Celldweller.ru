<?php
require('login.php');
$connect = new MYSQLI($hn, $un, $pw, $db); 
if($connect->connect_error) die("Fatal Error"); 

$login_reg = $_POST['login_reg'];
$password_reg = $_POST['password_reg'];



mysqli_query($connect, "INSERT INTO `Users` (`id`, `login`, `password`) VALUES (NULL, '$login_reg', '$password_reg');");

$query = mysqli_query($connect, "SELECT * FROM `Users` WHERE `login` = '$login_reg'");;
$checkup = mysqli_fetch_assoc($query); 
if (($checkup['login'] or $checkup['password']) != '') echo "You are successfully registrated. Click <a href='http://cell.ru/php/lssons.php'> here</a>  to get back to main page.";





?>