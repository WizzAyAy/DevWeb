<!DOCTYPE html >
<html>
<head>
<meta charset="UTF-8" />
<title>Saisissez les caractéristiques du modèle</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" name="form1"
		method="post" enctype="application/x-www-form-urlencoded">
		<fieldset>
			<legend>
				<b>Enregistrement d'un véhicule</b>
			</legend>
			<table>
				<tr>
					<td colspan="2"><b>Propriétaire</b></td>
				</tr>
<?php require_once ("select-proprietaire.php");?>
				<tr>
					<td colspan="2"><b>Voiture</b></td>
				</tr>
<?php require_once ("select-voiture.php");?>
				<tr>
					<td colspan="2"><b>Carte grise</b></td>
				</tr>
<?php require_once ("input-cartegrise.php");?>
				<tr>
					<td><input type="reset" value="Effacer" /></td>
					<td><input type="submit" name="enreg" value="ENREGISTRER"/></td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php
// TODO
?>
 </body>
</html>