<!--
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona
della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

BONUS (Opzionale):
Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store,
oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.
Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta.
-->

<?php
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Kennel.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/database/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
</head>

<body>
    <header>
        <h1 class="text-center">Pet Shop</h1>
    </header>

    <main>
        <div class="row">
            <?php foreach ($new_products as $product) { ?>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title"><?php $product->id_product ?></h3>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
</body>

</html>