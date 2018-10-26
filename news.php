<?php
require_once 'login.php';


$query  = mysqli_query($connect, "SELECT * FROM `news` ORDER BY `id` DESC");








for($j = 0; $j < 3; ++$j){
	
	$p = $j + 1;
	$id = '#id'. $p;
	$d = '#id'. ($p - 1);
	$b = '#id'. ($p + 1);
	$minustwo = '#id'. ($p - 2);

	$plustwo  = '#id'. ($p + 2);
	$funct = "onclick=\"chooseYours('$id', '$d', '$b', '$minustwo', '$plustwo', '#under')\"";
	$row = mysqli_fetch_assoc($query);
	

	echo "<br>" . "<a $funct>" . $row['title'] .  "</a><br>";
	
}
echo "<a href='allnews.php'>Еще новости</a>";
// Администрирование новостей
$query_admin = mysqli_query($connect, "SELECT * FROM `Users` WHERE `login` = 'CoolzeT'");
$result_admin = mysqli_fetch_assoc($query_admin);
$adminpass = $result_admin['password'];

$salt = 'orielly';
$password = $_COOKIE['password'];
$_COOKIE['password'] = hash('ripemd128', "$password$salt");

if (($_COOKIE['username'] == 'CoolzeT') && ($_COOKIE['password'] == $adminpass)){
echo "<a href='add_news.php'>Добавить Новость</a>";
}
$_COOKIE['password'] = $password;
// Здесь заканчивается администрирование.






?>