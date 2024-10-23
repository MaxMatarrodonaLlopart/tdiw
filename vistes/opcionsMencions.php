<?php 
    foreach($resultat_mencions as $fila){
        echo "<option value='" . $fila['id'] . "'>" . $fila['nom'] . "</option>\n";
    }
?>