<?php
require ("connexpdo.inc.php");

try {
$pdo = connexpdo("voitures");

} catch (PDOException $e) {
	displayException($e);
}

$qry="SELECT nom, prenom FROM proprietaire ORDER by nom;";
$stt=$pdo->query($qry);

	echo "<td>nom prenom : <select name='nom'>";
while ($record=$stt->fetch(PDO::FETCH_ASSOC)) {
		echo "<option> $record[nom],$record[prenom]  </option>";
}

	echo "</select></td>";
	
?>
