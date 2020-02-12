<!DOCTYPE html >
<html>
<head>
<meta charset="UTF-8" />
<title>Saisissez les caractéristiques du modèle</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"
		enctype="application/x-www-form-urlencoded">
		<fieldset>
			<legend>
				<b>Modèle de voiture</b>
			</legend>
			<table>
				<tr>
					<td>Code :</td>
					<td><input type="text" name="id_modele" size="40" maxlength="30"/></td>
				</tr>
				<tr>
					<td>Nom du modèle :</td>
					<td><input type="text" name="modele" size="40" maxlength="30"/></td>
				</tr>
				<tr>
					<td>Carburant : <select name="carburant">
							<option value="essence">Essence</option>
							<option value="diesel">Diesel</option>
							<option value="gpl">G.P.L.</option>
							<option value="électrique">Electrique</option>
					</select></td>
				</tr>
				<tr>
					<td><input type="reset" value=" Effacer "></td>
					<td><input type="submit" value=" Envoyer " name="envoyer"></td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php
		require ("afficher-modeles.php");
		if(isset($_POST["envoyer"])){
			$id = $pdo->quote($_POST["id_modele"]);
			$mod = $pdo->quote($_POST["modele"]);
			$car = $pdo->quote($_POST["carburant"]);;
			
			$qry="INSERT INTO `modele` (id_modele, modele, carburant) VALUES ($id, $mod, $car);";
			$qry2="delete from modele where id_modele='';";
			$pdo->query($qry2);
			$pdo->query($qry);
		
		}
	
?>
</body>
</html>
