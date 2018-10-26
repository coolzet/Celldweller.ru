	<?php

require('login.php');


// Защита от взлома


if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
	$login = $_COOKIE['username'];
	$password = $_COOKIE['password'];

}
else{
$login = sanitizeMySQL($connect, $_POST['login']);

$password = sanitizeMySQL($connect, $_POST['password']);

}
$salt = 'orielly';
$token = hash('ripemd128', "$password$salt");
$password = $token;

$isexist = mysqli_query($connect, "SELECT * FROM `Users` WHERE `login` = '$login' AND  `password` = '$password'");
$result = mysqli_fetch_assoc($isexist);
	

if (($login and $password) == ''){
echo "		 	<span>ВХОД В АККАУНТ</span>
				<form method=\"POST\" action=\"\" autocomplete='on' >
					<input type=\"text\" name=\"login\" id=\"login\" placeholder=\"Логин\"><br>
					<input type=\"password\" id=\"password\" name=\"password\" placeholder=\"Пароль\" autocomplete='off'><br>
					<button >Отправить</button> 
				</form>
					<a id=\"exit\" href='registration.php'>Регистрация</a>";}
elseif(($result['login'] and $result['password']) == ''){
 echo "
 			<span>Некорректный логин.<br>
 			Попробуйте снова.</span>
 			<form method=\"POST\" action=\"\" >
					<input type=\"text\" name=\"login\" id=\"login\" placeholder=\"Логин\"><br>
					<input type=\"password\" id=\"password\" name=\"password\" placeholder=\"Пароль\" ><br>
					<button >Отправить</button> 
				</form><br>
				<a id=\"exit\" href='registration.php'>Или зарегистрируйтесь.</a>
 			

			
		";
				
			}
else echo "<a id='welcome'>С Возвращением, $login!</a ><a href='exit.php' id='exit'>Выйти</a>";

 function sanitizeString($var)
 {
 $var = stripslashes($var);
 $var = strip_tags($var);
 $var = htmlentities($var);
 return $var;
 }
  function sanitizeMySQL($connection, $var)
 {
$var = mysqli_real_escape_string($connection, $var);

 $var = sanitizeString($var);
 return $var;
 }
?>