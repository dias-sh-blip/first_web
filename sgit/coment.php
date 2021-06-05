<?php
$mysqli = new mysqli("localhost", "root", "root", "website");


$name = $_COOKIE["user"];
$text = $_POST["coment"];


$mysqli->query("INSERT INTO `coments` (`book`, `login`, `coment`) VALUES ('1984', '$name', '$text')");

$mysqli->close();

header('Location: /show.php');
?>