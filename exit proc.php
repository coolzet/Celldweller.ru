<?php 
setcookie('username', "", time() - 250000, '/');
setcookie('password', '', time() - 250000, '/');
echo $_COOKIE['username'];
echo <<<_END
<!DOCTYPE .php>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>

Вы успешно покинули страницу, нажмите <a href="\PHP\lssons.php"> сюда</a>, чтобы вернуться на главную.
</body>
</html>



_END;
?>