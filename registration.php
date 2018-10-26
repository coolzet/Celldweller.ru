<?php
require('login.php');
$connect = new MYSQLI($hn, $un, $pw, $db); 
if($connect->connect_error) die("Fatal Error"); 
$login_reg = $_POST['login_reg'];
$password_reg = $_POST['password_reg'];
$doc = '<!DOCTYPE html>
		<head>
			<title> Форма Регистрации.</title>
			<meta charset="utf-8">
			<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Mogra|Rasa" rel="stylesheet">
		<link  rel="icon" href="http://icons.iconarchive.com/icons/papirus-team/papirus-devices/96/input-keyboard-icon.png">
		<script type="text/javascript" href="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		</head>
		<body>';

$query = mysqli_query($connect, "SELECT * FROM `Users` WHERE `login` = '$login_reg'");
$checkrepeat = mysqli_fetch_assoc($query); 
echo "$doc <div class='reg_back'>";
$login_len = $login_reg;

$login_len = strlen($login_len);

$post = $_POST['post'];
$name = $_POST['name'];

$postcheck = mysqli_query($connect, "SELECT * FROM `Users` WHERE `post` = '$post'");
mysqli_fetch_row($postcheck);
$isemailexist = $postcheck->num_rows;


if ($_POST['login_reg'] == ''){
	echo "Добро пожаловать на страницу регистрации<br>";
}
elseif($checkrepeat['id'] != '')
	echo "Пользователь с таким именем существует.<br>";
	
elseif ($_POST['name'] == '')
	echo '<b>Укажите ваше имя</b>';
	
elseif($login_len <= 5 or $login_len >= 25)
	echo "<b>Логин должен быть не короче 5 символов и не длиннее 25</b>";

elseif($isemailexist > 0)
		echo "Данный E-mail Уже занят, пожалуйста, укажите другой.";
	
else{

			$salt = 'orielly';
			$token = hash ('ripemd128', "$password_reg$salt");
			
			mysqli_query($connect, "INSERT INTO `Users` (`id`, `login`, `password`, `post`, `name`) VALUES (NULL, '$login_reg', '$token', '$post', '$name');");

			$query = mysqli_query($connect, "SELECT * FROM `Users` WHERE `login` = '$login_reg'");
			$checkup = mysqli_fetch_assoc($query); 
		if (($checkup['login'] or $checkup['password']) != '')
			
		 	echo "Вы успешно зарегистрировались. Нажмите <a href='http://celldweller.ru'> сюда,</a>  чтобы вернуться на главную.";

		}

echo  "	
			
				<div class='reg_form'>
				<a href='index.php'><div class='back_main'><img src='https://avatars.mds.yandex.net/get-pdb/753890/0504288c-f993-489a-9277-e0ba2a8a7037/s1200' height='80px'></div></a>
					<p>Введите свои данные </p>
		 			<form method=\"post\" action=\"registration.php\" >
						<input type=\"text\" name=\"login_reg\" id=\"login\" placeholder=\"Логин\"><br>
						<input type=\"text\" name='name' id='name' placeholder='Ваше имя (реальное)'><br>
						<input type='email' name='post' id='pochta' placeholder='Укажите ваш E-mail' ><br>
						<input type=\"password\" id=\"password\" name=\"password_reg\" placeholder=\"Пароль\"><br>
						<button id='but' onmouseover='email()'>Отправить</button> 
					</form>
					<p id='res'></p>
				</div>
			</div>
			
		</body>
		</html>";
?>