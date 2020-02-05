<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<title>TP 4 - PHP - Inscription d'employés</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<body style="background-color: #ffcc00;">

	
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<fieldset>
<legend><b>Inscrire un employé</b></legend>
<label>Nom :&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" name="nom" value="" size="30" maxlength="60" required="required"/><br/><br/>
<label>Salaire :&nbsp;</label>
<input type="number" name="salaire" min="0" max="100000" step="1000" size="6" required="required"/><br/><br/>
<label>Age :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="number" name="age" min="18" max="100" size="6" required="required"/><br/><br/>

<input type="submit" value="Inscrire" name="inscrire" />
</fieldset>
</form>

<a href="accueil.php">retour a l'acceuil</a>
</br>
<?php
	session_start();
	echo"Nom de session : ", session_name(), "<br/>";
	echo"Id de session : ", session_id(), "<br/>";
	
	$n = 1;
	if(($fichier = fopen("./employees.csv", "r+")) !== FALSE){
		echo "<table> <tr> <th>num</th> <th>nom</th> <th>salaire</th> <th>age</th> </tr>";
		while(($ligne = fgetcsv($fichier, 1000, ';')) !== FALSE){
				echo "<tr>";
				echo "<td>" . $ligne[0] . "</td>";
				echo "<td>" . $ligne[1] . "</td>";
				echo "<td>" . $ligne[2] . "</td>";
				echo "<td>" . $ligne[3] . "</td>";
				echo "</tr>";
				$n++;
				
		}
		fclose($fichier);
	}
	
	if(isset($_POST['inscrire'])) { 
		$nom = $_POST['nom'];
		$nom = strip_tags($nom);
		$salaire = $_POST['salaire'];
		$age = $_POST['age'];
		
		$ok = true;
		if(($fichier = fopen("./employees.csv", "r+")) !== FALSE){
			while(($ligne = fgetcsv($fichier, 1000, ';')) !== FALSE){
				if($ligne[1] == $nom && $ligne[3] == $age) $ok = false;						
			}
			
			if($ok){
				echo "<tr>";
				echo "<td>" . $n . "</td>";
				echo "<td>" . $nom . "</td>";
				echo "<td>" . $salaire . "</td>";
				echo "<td>" . $age . "</td>";
				echo "</tr>";
				echo "</table>";
				fputs($fichier, "$n;$nom;$salaire;$age\n");
			}
			else{
				echo "<b>DEJA INSCRIT !!! </b></br>";
			}
		}
		fclose($fichier);
	}
	
	
?>
</body>
</html>
