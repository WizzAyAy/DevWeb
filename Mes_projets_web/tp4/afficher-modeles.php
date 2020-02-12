<!DOCTYPE html >
<html>
<head>
<meta charset="UTF-8" />
<title>Lecture de la table modele</title>
<!--<style type="text/css">
table, tr, td, th {
	border-style: solid;
	border-color: red;
	background-color: yellow;
}
table {
	border-width: 3px;
	border-collapse: collapse;
}
tr, td, th {
	border-width: 1px;
}
</style>-->
</head>
<body>
<?php
	require ("connexpdo.inc.php");

try {
	$pdo = connexpdo("voitures");
    
} catch (PDOException $e) {
    displayException($e);
}
	$qry="SELECT * FROM modele m ORDER by m.modele;";
	$stt=$pdo->query($qry);
	echo "<table>";
	echo "<tr> <th>id_modele</th> <th>modele</th> <th>carburant</th> </tr>";
	
while ($record=$stt->fetch(PDO::FETCH_ASSOC)) {
	echo "<tr>";
	echo "<td>$record[id_modele]</td>";
	echo "<td>$record[modele]</td>";
	echo "<td>$record[carburant]</td>";
	echo "</tr>";
}

echo "</table>";
	
?>
</body>
</html>
