<?php

//__DIR__ è importante da aggiungere
require_once __DIR__ . "/models/prodotti.php";
require_once __DIR__ . "/models/categorie.php";
require_once __DIR__ . "/models/cibi.php";
require_once __DIR__ . "/models/giochi.php";
require_once __DIR__ . "/models/discount.php";
require_once __DIR__ . "/traits/scontabile.php";

//Creo le categorie
$categoria_cane = new Categorie("Cane");
$categoria_cane->setIcone("fa-solid fa-dog");
$categoria_gatto = new Categorie("Gatto");
$categoria_gatto->setIcone("fasolid fa cat");
// <i class="fa-solid fa-dog"></i>
// <i class="fa-solid fa-cat"></i>
var_dump($categoria_gatto);

//Creo i prodotti
$prodotto1 = new Prodotti("corda", 11.11, 11112, $categoria_cane);
var_dump($prodotto1);

$prodotto2 = new Prodotti("palla", 10.09, 11222, $categoria_gatto);
var_dump($prodotto2);


//FOOD
$cibo_cane = new Cibi("croccantini", 6.12, 12345, $categoria_cane, 2025, 500, "pollo");
$cibo_cane->setImmagine("https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.DT9mvvz-wwQNM3Ra-fjnfQHaHa%26pid%3DApi&f=1&ipt=7e775321feec46ed595beb06389420eec101263d39b82cd6db48ba658a41ffc4&ipo=images");
var_dump($cibo_cane);

$cibo_gatto = new Cibi("scatoletta", 5.10, 13685, $categoria_gatto, 2026, 400, "pesce");

var_dump($cibo_gatto);


//Giochi
$topo_gioco = new Giochi("Topo meccanico", 5.2, 11111, $categoria_gatto);
$topo_gioco->setImmagine("https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.SNpdl6ySS679oY5-05fcTgHaFa%26pid%3DApi&f=1&ipt=09346e87910e51629c1a3f883e61a1144f94658f251b762a9e41092381373664&ipo=images");

//Creo catalago array per creare il foreach
$catalogo = [$cibo_cane, $cibo_gatto, $topo_gioco];

//Tray catch
try {
    $cibo_cane->setSconto(15);
    echo "Prezzo del prodotto dopo sconto: " . $cibo_cane->getPrezzoDopoSconto() . "€\n";
} catch (ScontoNonValidoException $e) {
    echo "Errore: " . $e->getMessage() . "\n";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shop </title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Prodotti</h1>
        <div class="row">
            <?php foreach ($catalogo as $prodotto) { ?>
                <div class="col-4">
                    <div class="card" >
                        <img src="<?php echo $prodotto->getImmagine(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prodotto->getNome() ?>
                            <i class="<?php echo $prodotto->getCategoria()->getIcone(); ?>"></i>
                        </h5>
                            <p class="card-text">Prezzo: <?php echo $prodotto->getPrezzo() ?> euro</p>
                            <p class="card-text">Scontato: <?php echo $prodotto->getSconto() ?> %</p>
                            <p class="card-text">Prezzo scontato: <?php echo $prodotto->getPrezzoDopoSconto() ?> euro</p>
                            <p class="card-title">Id Prototto:<?php echo $prodotto->getId_prodotto() ?></p>
                            <a href="#" class="btn btn-primary">Inserisci nel carrello</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>




</body>

</html>