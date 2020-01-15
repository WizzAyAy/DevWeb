<?php
    function creeTexte($nom, $affichage) {
        echo $affichage. " : <input type='text' name=".$nom.">";
    }
    function creebutton($nom, ...$affichage) {
        foreach ($affichage as $val=>$key)
        echo $val ." : <input type='radio' name=".$nom." id=".$key.">";
    }
    function creeButtonSubmit($nom) {
        echo "<input type='submit' name=".$nom.">";
    }
    function creeButtonReset($nom) {
        echo "<input type='reset' name=".$nom.">";
    }
?>