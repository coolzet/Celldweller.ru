<?php
 require_once 'login.php';
 $connect = new mysqli($hn, $un, $pw, $db);
 if ($connect->connect_error) die($connect->connect_error);
 $query = mysqli_query($connect, "CREATE TABLE test (
 forename VARCHAR(32) NOT NULL,
 surname VARCHAR(32) NOT NULL,
 username VARCHAR(32) NOT NULL UNIQUE,
 password VARCHAR(32) NOT NULL
 )");
 $result = mysqli_fetch_assoc($query);
 if (!$result) die($connect->error);
 $salt1 = "qm&h*";
 $salt2 = "pg!@";
 $forename = 'Bill';
 $surname = 'Smith';
 $username = 'bsmith';
 $password = 'mysecret';
 $token = hash('ripemd128', "$salt1$password$salt2");
 add_user($connect, $forename, $surname, $username, $token);
 $forename = 'Pauline';
 $surname = 'Jones';
 $username = 'pjones';
 $password = 'acrobat';
 $token = hash('ripemd128', "$salt1$password$salt2");
 add_user($connect, $forename, $surname, $username, $token);
 function add_user($connection, $fn, $sn, $un, $pw)
 {
 $query = mysqli_query($cnnection, "INSERT INTO users VALUES('$fn', '$sn', '$un', '$pw')" );
 $result = $connection->query($query);
 if (!$result) die($connection->error);}
?>