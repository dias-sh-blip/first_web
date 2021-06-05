<?php
$mysqli = new mysqli("localhost", "root", "root", "website");


$login=$_POST['reglogin'];
$password=$_POST['regpassword'];
$r_password=$_POST['r_regpassword'];
if ($password==$r_password){
	$password=md5($password."faer");
	$success=$mysqli->query("INSERT INTO `users` (`id`, `login`, `password`) VALUES (NULL, '$login', '$password')");

$mysqli->close();

header('Location: /');
}?>