<?php

echo "<td>immatriculation : <input type='text' name='immat'>";
echo "<input type='submit' name='cherche' value='chercher voitures'></td>";

if(isset($_POST['cherche'])) {
	$qry="SELECT * FROM voiture where immat like 'A%';";
	$stt=$pdo->query($qry);
	
	echo "<td><select name='sel'>";
	while ($record=$stt->fetch(PDO::FETCH_ASSOC)) {
		echo "<option>$record[immat]</option>";
	}
	echo "</select></td>";

}
;




?>
