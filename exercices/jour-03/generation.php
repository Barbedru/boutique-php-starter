
<?php

$products = [];

    for ($i = 1; $i <= 10 ; $i++) {
        $products[]= [
            "Nom" => "Produit " .  $i,
            "Prix" => rand(10,100),
            "Stock" => rand(0,50) 
        ];
    }
        /*echo "<pre>";    
        var_dump($products);
        echo "</pre>";*/
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        </head>
        <body>

<?php foreach ($products as $product): ?>
    <div class="produit">
        <h2><?= $product["Nom"] ?></h2>
        <p><?= $product["Prix"] . "€" ?></p>
        <p><?= $product["Stock"] ?></p>
    </div> 
<?php endforeach; ?>       
    
</body>
</html>