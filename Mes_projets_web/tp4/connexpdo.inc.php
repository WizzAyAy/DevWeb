<?php
function connexpdo (string $base){
	$sgbd="mysql";
	$host="localhost";
	$user="root";
	$pass="WOcVCf";
	$pdo = new PDO("$sgbd:host=$host;dbname=$base;charset=UTF8",$user,$pass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $pdo;
}
?>
