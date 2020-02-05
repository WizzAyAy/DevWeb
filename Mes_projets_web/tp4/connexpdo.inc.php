<?php
function connexpdo (string $base){
	$sgbd="mysql"; // choix de MySQL
	$host="localhost";
	$user="root";
	$pass="JMxull";
	$pdo = new PDO("$sgbd:host=$host;dbname=$base",$user,$pass);
}
?>
