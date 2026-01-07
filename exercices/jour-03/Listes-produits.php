<?php

$products = [
    [
        "name" => "Le Thé Merveilleux",
        "description" => "Parfumé - Gourmand",
        "price" => "15.40",
        "stock" => 15,
        "category" => "Thé vert"
        
    ],
    [
        "name" => "Thé des Moines",
        "description" => "Parfumé - Floral",
        "price" => "11.50",
        "stock" => 30,
        "category" => "Thé noir"
        
    ],
    [
        "name" => "Bai Mu Dan bio",
        "description" => "Gourmand",
        "price" => "16.00",
        "stock" => 20,
        "category" => "Thé blanc",
        
    ],
    [
        "name" => "Thé des Songes",
        "description" => "Fruité - Floral",
        "price" => "10.90",
        "stock" => 28,
        "category" => "Oolong",
        
    ],
    [
        "name" => "Impérial bio",
        "description" => "Bon",
        "price" => "14.00",
        "stock" => 23,
        "category" => "Matcha",
        
    ],
        "name" => "Blue of London",
        "description" => "Agrumes",
        "price" => "11.90",
        "stock" => 31,
        "category" => "Parfumé",
        
   ];

foreach ($products as $product) {
    echo $product["name"] . " : " . $product["price"] . " : " . $product["stock"] . " : " . $product["category"] . "<br>";
}

?>
