<?php

$products = [
    [
        "name" => "Le Thé Merveilleux" . "<br>",
        "price" => 15.40 . "€" . "<br>" , 
        "stock" => 15 . "<br>"
        . "<br>"
        
    ],
    [
        "name" => "Thé des Moines" . "<br>",
        "price" => 11.50 . "€" . "<br>",
        "stock" => 30 . "<br>"
        . "<br>"
    ],
    [
        "name" => "Bai Mu Dan bio" . "<br>",
        "price" => 106 . "€" . "<br>",
        "stock" => 0 . "<br>"
        . "<br>"
    ],
    [
        "name" => "Thé des Songes" . "<br>",
        "price" => 10.90 . "€" . "<br>",
        "stock" => 28 . "<br>" 
        . "<br>"  
    ],
    [
        "name" => "Impérial bio" . "<br>",
        "price" => 14.00 . "€" . "<br>",
        "stock" => 26 . "<br>"
        . "<br>"
    ],
    [    
        "name" => "Blue of London" . "<br>",
        "price" => 11.90 . "€" . "<br>",
        "stock" => 31 . "<br>"
      . "<br>"
    ],

    [   
        "name" => "Impérial bio" . "<br>",
        "price" => 14.00."€" . "<br>",
        "stock" => 75 . "<br>"
        . "<br>"
    ],    
        
    [   
        "name" => "Impérial bio" . "<br>",
        "price" => 120 . "€" . "<br>",
        "stock" => 15 . "<br>"
        . "<br>"
    ],   
    
    [   
        "name" => "Impérial bio" . "<br>",
        "price" => 14.00."€" . "<br>",
        "stock" => 0 . "<br>"
        . "<br>"
    ],   
    
    [   
        "name" => "Impérial bio" . "<br>",
        "price" => 14.00."€" . "<br>",
        "stock" => 20 . "<br>"
        . "<br>"
    ]  
   ];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="Le Thé Merveilleux">
        <p class="description"><?= $products[0]["description"] ?> </p>
        <p class="prix"><?= $products[0]["price"] ?> € </p>
        <p class="stock"><?= $products[0]["stock"] ?> </p>
        <p class="category"><?= $products[0]["category"] ?> </p>
    </div>

    <div class="Thé des Moines">
        <p class="description"><?= $products[1]["description"] ?> </p>
        <p class="prix"><?= $products[1]["price"] ?> € </p>
        <p class="stock"><?= $products[1]["stock"] ?> </p>
        <p class="category"><?= $products[1]["category"] ?> </p>
    </div>

    <div class="Bai Mu Dan bio">
        <p class="description"><?= $products[2]["description"] ?> </p>
        <p class="prix"><?= $products[2]["price"] ?> € </p>
        <p class="stock"><?= $products[2]["stock"] ?> </p>
        <p class="category"><?= $products[2]["category"] ?> </p>
    </div>

    <div class="Thé des Songes">
        <p class="description"><?= $products[3]["description"] ?> </p>
        <p class="prix"><?= $products[3]["price"] ?> € </p>
        <p class="stock"><?= $products[3]["stock"] ?> </p>
        <p class="category"><?= $products[3]["category"] ?> </p>
    </div>


    <div class="Impérial bio">
        <p class="description"><?= $products[4]["description"] ?> </p>
        <p class="prix"><?= $products[4]["price"] ?> € </p>
        <p class="stock"><?= $products[4]["stock"] ?> </p>
        <p class="category"><?= $products[4]["category"] ?> </p>
    </div>

    <div class="Blue of London">
        <p class="description"><?= $products[5]["description"] ?> </p>
        <p class="prix"><?= $products[5]["price"] ?> € </p>
        <p class="stock"><?= $products[5]["stock"] ?> </p>
        <p class="category"><?= $products[5]["category"] ?> </p>
    </div>



</body>
</html>