<?php 
    foreach($resultat_graus as $fila){
        //echo "<option value='" . $fila['id'] . "'>" . $fila['nom'] . "</option>\n";
?>
        <option value="<?=$fila['id']?>"><?=$fila['nom']?></option>
<?php
    }
?>