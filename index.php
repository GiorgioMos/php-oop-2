<?php

require_once __DIR__ . './data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="./style/style.css">
    <title>E-commerce</title>
</head>

<body class="bg-dark">
    <h1>Lista prodotti</h1>
    <div class="card-container">

        <?php foreach ($products as $product) { ?>
            <div class="card">
                <img src="<?= $product->getImage() ?>" alt="Prodotto">
                <h2><?= $product->getTitle() ?></h2>
                <p>Prezzo: <?= $product->getPrice() ?> €</p>
                <p>Categoria: <?= $product->getCategory()->getName() ?></p>

                <?php if ($product instanceof Food) { ?>
                    <p>Gusto: <?= $product->getFlavor() ?></p>
                <?php } ?>

                <?php if ($product instanceof Product && !($product instanceof Food)) { ?>
                    <p>Descrizione: <?= $product->getDescription() ?></p>
                <?php } ?>

                <p>Sconto: <?= $product->getDiscount() ?>%</p>

                <?php

                $product->applyDiscount();
                ?>

                <p>Prezzo scontato: <?= number_format($product->getPrice(), 2) ?> €</p>

            </div>
        <?php } ?>
    </div>

</body>

</html>