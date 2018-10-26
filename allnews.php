
		<!DOCTYPE php>
<html>
<head> <meta charset="utf-8">
	<title>Новости</title>
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Mogra|Rasa" rel="stylesheet">
	<link  rel="icon" href="http://icons.iconarchive.com/icons/papirus-team/papirus-devices/96/input-keyboard-icon.png">
</head>
<body><div class="allnews_back"><a href='http://celldweller.ru/index.php' id="main_from_news">На главную</a><div class="sticky"><span>НОВОСТИ</span></div>
<div class="back">
	<div class="allnews_text">



<?php

require_once('login.php');
$connect = new MYSQLI($hn, $un, $pw, $db); 
if($connect->connect_error) die("Fatal Error"); 

	$newsLimit  = 1; //Nubmer of news, that i can see on one page
	$table      = 'news'; // Select the table
	$query      = "SELECT COUNT(`ID`) FROM `$table`;"; // Query to MySQL
	$wynik      = mysqli_query($connect, $query); // The Var that got the Query
	$a          = mysqli_fetch_row($wynik); // Var that got result
	$newsCount  = $a[0]; // Variable that gets number of news
	$pageCount = ceil($newsCount / $newsLimit); //Number of pages that we will get after upload everything
	
	if (isset($_GET['page'])) { // if already pressed button "next page" or something this will activate next condition
		if ($_GET['page'] < 1 || $_GET['page'] > $pageCount) { // we making to see 1st page if something go wrong or this is first visit of the page
			$page = 1;
		} else {
			$page = $_GET['page']; // in other case page will be counting by user's actions
		}
	} else {
		$page = 1; // if button wasn't pressed redirect to 1st page
	}
	
	$index  = $newsLimit * ($page - 1);
	$query  = "SELECT * FROM `$table` ORDER BY `id` LIMIT $index, $newsLimit;";
	$result = mysqli_query($connect, $query);

	while ($news = mysqli_fetch_array($result)) {
		echo $news['postingtime'] . '<br><br><br><div class="new_header">'. $news['title'] . '</div><br>' . $news['text'] . '<br><br>' ; 
		$_POST['title'] = $news['title'];

	}
	
	if ($newsCount > $newsLimit) {
		$previous = $page - 1;
		$next     = $page + 1;
		
		if ($previous 		> 0) {
			echo '<a  id="img_go"href="allnews.php?page=' . $previous . '"><img src="https://avatars.mds.yandex.net/get-pdb/753890/0504288c-f993-489a-9277-e0ba2a8a7037/s1200" height="80px" style="transform: rotate(180deg);">  </a>';
		}
		
		if ($next <= $pageCount) {
			echo '<a id="img_back" href="allnews.php?page=' . $next . '"><img src="https://avatars.mds.yandex.net/get-pdb/753890/0504288c-f993-489a-9277-e0ba2a8a7037/s1200" height="80px"></a>';
		}
		if($page == 1){
			echo "<a href='allnews.php?page=" . $newsCount . "' class='to_end_all_news'><img src=\"https://avatars.mds.yandex.net/get-pdb/753890/0504288c-f993-489a-9277-e0ba2a8a7037/s1200\" height=\"80px\" ><img id='first_img_end'src=\"https://avatars.mds.yandex.net/get-pdb/753890/0504288c-f993-489a-9277-e0ba2a8a7037/s1200\" height=\"80px\"></a>";
		}
		if($page > 2){
			echo "<a href='allnews.php?page=1' id='to_start_all_news'><img src=\"https://avatars.mds.yandex.net/get-pdb/753890/0504288c-f993-489a-9277-e0ba2a8a7037/s1200\" height=\"80px\" style=\"transform: rotate(180deg);\"><img id='first_img'src=\"https://avatars.mds.yandex.net/get-pdb/753890/0504288c-f993-489a-9277-e0ba2a8a7037/s1200\" height=\"80px\" style=\"transform: rotate(180deg);\"></a>";
		}
	}
?></div></div></div>
<script type="text/javascript">
	document.title = <?php echo  "\"" . $_POST['title'] . "\"" ;?>;
</script>
</body>
</html>