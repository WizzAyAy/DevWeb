<?php

	require 'form_generation.inc.php';

	echo "<fieldset><legend>Calculatrice en ligne</legend>";

	echo "<form action='action.php' method='post'>";
	echo creeTexte('op1', 'operande 1')."</br>";
	echo creeTexte('op2', 'operande 2')."</br>";
	echo creebuttonradio('signe','plus','fois','moins','divise')."</br>";

	echo creeButtonSubmit("resultat")."</br>";
	echo creeButtonReset("effacer");

	echo "</form>";
	echo "</fieldset>";

?>
