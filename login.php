<?php
$hn = 'localhost';
$db = 'celldweller';
$un = 'root';
$pw = '';
$connect = mysqli_connect($hn, $un, $pw, $db);

mysqli_query($connect, "SET CHARSET 'utf-8");

?>