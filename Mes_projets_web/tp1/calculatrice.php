<?php

require 'form_generation.inc.php';

echo "<fieldset><legend>Calculatrice en ligne</legend>";

echo "<form>";
echo creeTexte('op1', 'operande 1')."</br>";
echo creeTexte('op2', 'operande 2')."</br>";

echo creeButtonSubmit("submit")."</br>";
echo creeButtonReset("res");

echo "</form>";
echo "</fieldset>";

?>