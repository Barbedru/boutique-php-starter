<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php   

$product = [
    "name" => "Thé vert" ,
     "price" => "3.99" ,
     "stock" => 20 ,
     "onSale" => true 
    
];


?>
<span class="<?= $product["stock"] > 0 ? 'en-stock' : 'rupture' ?>">
    <?= $product["stock"] > 0 ? 'Disponible' : 'Indisponible' ?>
</span>

 <h3><?= $product["name"] ?> <?= $product["onSale"] == true ? "🔥 PROMO" : "" ?></h3>


</div>


  
    
</div>


</body>
</html>