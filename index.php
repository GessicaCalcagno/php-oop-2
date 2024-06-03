<?php 
require_once __DIR__ . "/models/prodotti.php";
require_once __DIR__ . "/models/categorie.php";
require_once __DIR__ . "/models/cibi.php";

//Creo le categorie
$categoria_cane = new categorie("Cane");
$categoria_gatto = new categorie("Gatto");

//Creo i prodotti
$prodotto1 = new prodotti("corda", 11.11, 11112, $categoria_cane);
 var_dump($prodotto1);

$prodotto2 = new prodotti("palla", 10.09, 11222, $categoria_gatto);
 var_dump($prodotto2);

 $prodotto3 = new cibi("croccantini", 6.12, 12345, $categoria_cane, 2025);
 var_dump($prodotto3);