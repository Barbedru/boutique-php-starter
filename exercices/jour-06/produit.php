<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$products = [
    1 => ["id" => "T-shirt", "price" => 19.99],
    2 => ["id" => "Jean", "price" => 39.99],
    3 => ["id" => "Veste", "price" => 59.99],
    4 => ["id" => "Chaussure", "price" => 49.99],
    5 => ["id" => "Casquette", "price" => 9.99],
];

$id = $_GET["id"];

if (($products[$id])){
    $product = $products[$id];
    echo 'Produit: ' . $product["id"] ;    //http://localhost:8000/produit.php?id=3
} else{ 
    echo 'Produit non trouvé.';           //http://localhost:8000/produit.php?id=6

}

?>


</body>
</html>