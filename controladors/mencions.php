<?php
  include_once __DIR__ . "/../models/connectaBD.php";
  include_once __DIR__ . "/../models/consultaMencions.php";

  $connexio = connectaBD();
  //ternary operator
  //$grau = isset($_REQUEST['grau']) ? $REQUEST['grau'] : 1;
  //nulish operator
  $grau = $_REQUEST['grau'] ?? 1;
  $resultat_mencions = consultaMencions($connexio, $grau);
  pg_close($connexio);

  include_once __DIR__ . "/../vistes/opcionsMencions.php";
?>