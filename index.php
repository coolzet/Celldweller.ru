<?php require_once('cookie.php'); ?>
<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8">
		<title>The Blog of CoolzeT</title>
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Mogra|Rasa" rel="stylesheet">
		<link  rel="icon" href="http://icons.iconarchive.com/icons/papirus-team/papirus-devices/96/input-keyboard-icon.png">
		<script type="text/javascript" href="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>
		<div> 
		<div class="leftcol">
			<p id="menu_left">МЕНЮ</p>
			<span id="1_left" onclick="slowScroll('.header', '#hide', '#hide1', '#hide2', '#hide3', '#hide4')" >Главная</span>
			<span id="2_left" onclick="slowScroll('#under', '#hide1','#hide', '#hide2', '#hide3', '#hide4')">Новости</span>
			<span id="3_left" onclick="slowScroll('#under_1', '#hide2', '#hide', '#hide1', '#hide3', '#hide4')">Блог</span>
			<span id="4_left" onclick="slowScroll('#under_2', '#hide3', '#hide', '#hide1', '#hide2', '#hide4')">Об Авторе</span>
			<span id="5_left" onclick="slowScroll('#under_3', '#hide4', '#hide','#hide1', '#hide2', '#hide3')">Контакты</span>
			<div class="bottom_left"><strong>Powered by<br> CSS HTML jQuery PHP</strong></div>
		</div>

		<div class="rightcol">
			
			<div class="hidden_main" id="hide"><span>ГЛАВНАЯ</span></div>
			<div class="hidden_news" id="hide1" ">
				<p onmouseover="fastScroll('#under_1')">НОВОСТИ</p>
				<?php require('news.php'); ?>
					
				
			</div>
			<div class="hidden_blog" id="hide2"><span>БЛОГ</span>
				<div class='hidden_blog_text'>	<?php  require_once('blog_right.php');
				?></div>
			 </div>
			<div class="hidden_about" id="hide3"><span>ОБ АВТОРЕ</span></div>
			<div class="hidden_cont" id="hide4"><span>КОНТАКТЫ</span></div>
			<div class="bottom_right"><strong>@All rights Asigned by CoolzeT<br>
			2018</strong></div>
		</div>
		

		<div class="header" onmouseover="hideSomething('#hide', '#hide1', '#hide2', '#hide3', '#hide4'), overEffect(this)">
				<div class='nav'><div class='nav_text'><a href='#'>Навигация</a><a href='#'>Полезные ссылки</a><a href='#'>Дискография</a><a href='#'>Музыка</a><a href='#'>Галерея</a></div><div class='humb_top'><span></span></div></div>
			<div class="login_top"></div>
			<div class="login">
				<?php  
				require_once 'login_form.php';
					
				?>
			</div>
			<div  id="reg"class="humb_reg"><a href="#" class="menu_button">
				<span></span></a>
			</div>
				
			<div class="text">
			Добро пожаловать в интерактивный мир CoolzeT!
			</div>
		</div>
		<div class="under_header" id="under">
				<a>Новости</a>
		</div>
		<div class="news" id="new"  onmouseover="hideSomething('#hide1','#hide', '#hide2', '#hide3', '#hide4'), overEffect(this)">
			<div class="news_text">
				<div id="id-1"></div>
				<div id="id5"></div>
				<div id="id6"></div>
				<div id="id0"></div>
				<?php require('news_middle.php') ?>
				<div id="id4"></div>
			</div>
		</div>
		<div class="under_header_1" id="under_1">
				<a>Блог</a>
		</div>
		<div class="blog" id="blog" onmouseover="hideSomething('#hide2', '#hide', '#hide1', '#hide3', '#hide4'), overEffect(this)"></div>
			<div class="blog_text">

					<div id="iblog-1"></div>
				<div id="iblog5"></div>
				<div id="iblog6"></div>
				<div id="iblog0"></div>
				<?php require('blog_middle.php') ?>
				<div id="iblog4"></div>
			</div>
		<div class="under_header_2" id="under_2">
				<a>Об Авторе</a>
		</div>
		<div class="about" id="about" onmouseover="hideSomething('#hide3', '#hide', '#hide1', '#hide2', '#hide4'), overEffect(this)">
					<div class='about_text'>Celldweller.ru - Это не еще один сайт сделанный на WordPress или на других подобных ему конструкторах.<br><br>Автор сайта в один прекрасный день скачал WordPress и посмотрел, что же	 это за чудо такое, о котором все говорят. Как оказалось - это конструктор сайтов. Гордость не позволила ему воспользоваться конструктором, поэтому автор открыл Sublime text и начал писать сайт самостоятельно.<br><br> Двух недель хватило для того, чтобы сделать базовые вещи на сайте такие как: Новостная колонка, Вторая колонка с личным блогом. Абсолютно новая идея с переключением новостей на jQuery. Также, автор за эти 2 недели сделал безопасную форму логина и пароля. Ваш пароль знаете только вы, никто и никогда его не рассекретит. О чудо криптографии и щепотка "соли".<br><br> Спустя те самые 2 недели автор решил поместить свое творение в открытый доступ. И это только начало. Этот человек полон энтузиазма. Это лишь начало долгого и кропотливого пути автора. И отправная точка - пристрастие к музыке, а именно к исполнителю Celldweller.</div>
		</div>	


		<div class="under_header_3" id="under_3">
				<a>Контакты</a>
		</div>
		<div class="contact" id="contact"  onmouseover="hideSomething('#hide4', '#hide','#hide1', '#hide2', '#hide3'), overEffect(this)">
			<div class="contact_text"><strong>Связаться с автором сайта можно:</strong><br> Почта: coolzetcryptopia@gmail.com<br>Вторая почта: coolzet@gmail.com<br><br>Все вопросы в дальнейшем будут решаться<br> по принципу обратной связи внутри данного сайта. <br><br><strong>Сотрудничество:</strong><br>Телефон: +7(902)-905-47-86, +7(953)-440-13-75.<br>Почта:coolzetcryptopia@gmail.com<br><br>Для помощи автору отключите Adblock.</div>
			
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="jQuery.js">
			
		</script>			
</div>
	
	</body>
</html>
<!--
	План работы:

		ГОТОВО

 -->