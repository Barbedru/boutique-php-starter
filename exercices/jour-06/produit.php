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
    1 => ["name" => "T-shirt", "price" => 19.99],
    2 => ["name" => "Jean", "price" => 39.99],
    3 => ["name" => "Veste", "price" => 59.99],
    4 => ["name" => "Chaussure", "price" => 49.99],
    5 => ["name" => "Casquette", "price" => 9.99],
];

$id = $_GET["id"] ?? null;

if ($id){
    echo 'Produit: ' . $products[$id]["name"] . " ". $products[$id]["price"] . " €" ;    //http://localhost:8000/produit.php?id=3   Produit: Veste 59.99€
} else { 
    echo 'Produit non trouvé.';           //http://localhost:8000/produit.php?id=6     Produit non trouvé

}

?>


</body>
</html>