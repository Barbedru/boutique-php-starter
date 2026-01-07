<?php

$products = [
    [
        "name" => "Le Thé Merveilleux" ,
        "price" => 15.40 . "€" , 
        "stock" => 15 ,
        "image" => "https://www.palaisdesthes.com/media/catalog/product/cache/17268bf11b2baf4cb4cd0cb108e37f78/8/2/821-le-th_-merveilleux_v2.jpg"
        
        
    ],
    [
        "name" => "Thé des Moines" ,
        "price" => 11.50 . "€" ,
        "stock" => 30 ,
        "image" => "https://www.palaisdesthes.com/media/catalog/product/cache/17268bf11b2baf4cb4cd0cb108e37f78/d/v/dv898x_1.jpg"
        
    ],
    [
        "name" => "Bai Mu Dan bio" ,
        "price" => 106 . "€" ,
        "stock" => 30 ,
        "image" => "https://www.palaisdesthes.com/media/catalog/product/cache/17268bf11b2baf4cb4cd0cb108e37f78/d/1/d1940am.jpg"
        
    ],
    [
        "name" => "Thé des Songes" ,
        "price" => 10.90 . "€" ,
        "stock" => 28 ,
        "image" => "https://www.palaisdesthes.com/media/catalog/product/cache/17268bf11b2baf4cb4cd0cb108e37f78/d/v/dv896z_1.jpg"
        
    ],
    [
        "name" => "Impérial bio",
        "price" => 14.00 . "€",
        "stock" => 0 ,
        "image" => "https://www.palaisdesthes.com/media/catalog/product/cache/17268bf11b2baf4cb4cd0cb108e37f78/d/v/dv771x.jpg"
        
    ],
    [    
        "name" => "Blue of London" ,
        "price" => 11.90 . "€" ,
        "stock" => 31 ,
        "image" => "https://www.palaisdesthes.com/media/catalog/product/cache/17268bf11b2baf4cb4cd0cb108e37f78/d/v/dv803x_1_.jpg"
      
    ],

    [   
        "name" => "Thé des Lords",
        "price" => 10.90."€",
        "stock" => 0,
        "image" => "https://www.palaisdesthes.com/media/catalog/product/cache/17268bf11b2baf4cb4cd0cb108e37f78/d/8/d802am.jpg"
        
    ],    
        
    [   
        "name" => "Thé Guimet",
        "price" => 11.50 . "€", 
        "stock" => 15 ,
        "image" => "https://www.palaisdesthes.com/media/catalog/product/cache/17268bf11b2baf4cb4cd0cb108e37f78/d/8/d852am_1.jpg"
        
    ]  
    
   ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .grille { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
        .produit { border: 1px solid #ddd; padding: 15px; }
        .rupture { color: red; }
        .en-stock { color: green; }
    </style>

</head>
<body>

<div class="grille">
        <?php foreach ($products as $product): ?>
            <div class="produit">
                <img src=<?= $product["image"] ?> alt="Image de Thé mort" />
                  <h2><?= $product["name"] ?></h2>
                  <p><?= $product["price"] ?></p>
                  <p><?= $product["stock"] ?></p>
            
            </div>
        <?php endforeach; ?>
    </div>
    
</body>
</html>