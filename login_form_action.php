<?php
require('login.php');
$connect = new MYSQLI($hn, $un, $pw, $db); 
if($connect->connect_error) die("Fatal Error"); 

$login = $_GET['login'];
$password = $_GET['password'];

$isexist = mysqli_query($connect, "SELECT * FROM `Users` WHERE `login` = '$login' AND  `password` = '$password'");
$result = mysqli_fetch_assoc($isexist);
echo $result['login'];
echo $result['password'];
if(($result['login'] and $result['password']) == ''){
 echo "<body onmouseover=\"Over()\">
 			You are not registrated. You may registrate accaunt right here: 
 			<form method=\"post\" action=\"\PHP\\registration_form_action.php\" >
				<input type=\"text\" name=\"login_reg\" id=\"login\" placeholder=\"Login\"><br>
				<input type=\"password\" id=\"password\" name=\"password_reg\" placeholder=\"password\"><br>
				<button >Submit</button> 
			</form>

			
		</body>";
				$X = 0;
			}
else {
echo ' <body onmouseover="Over()"> Thank you for login-in.<br> <form method="get" action="\PHP\lssons.php"><button>Get Back</button></form>
	
		</body>"
		';
}






?>