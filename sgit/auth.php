<?php
$mysqli = new mysqli("localhost", "root", "root", "website");


$login = $_POST['login'];
$pass = $_POST['password'];

$pass = md5($pass."faer");


$result = $mysqli->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'");
$user = $result->fetch_assoc();

if(count($user) == 0){
	$data = false;
	echo $data;
}
else{
	setcookie('user', $user['login'], time() + 3600);
	// header('Location: /');
	$data = true;
	echo $data;
}



$mysqli->close();

//
?>