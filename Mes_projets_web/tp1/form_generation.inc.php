<?php
    function creeTexte($nom, $affichage) {
        echo $affichage. " : <input type='text' name=".$nom.">";
    }
    function creebuttonradio($nom,...$affichage) {
		echo "<table>";
        foreach($affichage as $val){
			echo "<tr>";
			echo "<td>".$val ."</td>";
			echo "<td>: <input type='radio' name=".$nom." id=".$val."</td>";
			echo "</tr>";
		}
		echo "</table>";
    }
    function creeButtonSubmit($nom) {
        echo "<input type='submit' value=".$nom.">";
    }
    function creeButtonReset($nom) {
        echo "<input type='reset' value=".$nom.">";
    }
?>
