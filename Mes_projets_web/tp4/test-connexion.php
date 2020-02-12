<?php
require ("connexpdo.inc.php");
require_once ("js.php");

try {
	$pdo = connexpdo("voitures");
    
} catch (PDOException $e) {
    displayException($e);
}

$qry="SELECT * FROM modele;";
$stt=$pdo->query($qry);
while ($record=$stt->fetch(PDO::FETCH_ASSOC)) {
print_r($record);
echo "<br>";
}

?>
