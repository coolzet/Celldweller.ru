<?php
include 'login.php';



$query = mysqli_query($connect, "SELECT * FROM `blog` ORDER BY `id` DESC") ;




for($j = 0; $j < 3; ++$j){
	
	$p = $j + 1;
	$id = '#iblog'. $p;
	$d = '#iblog'. ($p - 1);
	$b = '#iblog'. ($p + 1);
	$minustwo = '#iblog'. ($p - 2);

	$plustwo  = '#iblog'. ($p + 2);
	$funct = "onclick=\"chooseYourBlog('$id', '$d', '$b', '$minustwo', '$plustwo')\"";
	$row = mysqli_fetch_assoc($query);
	

	echo "<br>" . "<a $funct>" . $row['title'] .  "</a><br>";

}
echo "<a href='allblog.php'>Больше записей</a>";
// Администрирование новостей
$query_admin = mysqli_query($connect, "SELECT * FROM `Users` WHERE `login` = 'CoolzeT'");
$result_admin = mysqli_fetch_assoc($query_admin);
$adminpass = $result_admin['password'];

$salt = 'orielly';
$password = $_COOKIE['password'];
$_COOKIE['password'] = hash('ripemd128', "$password$salt");

if (($_COOKIE['username'] == 'CoolzeT') && ($_COOKIE['password'] == $adminpass)){
echo "<a href='add_blog.php'>Добавить Запись</a>";
}
$_COOKIE['password'] = $password;
// Здесь заканчивается администрирование.







?>