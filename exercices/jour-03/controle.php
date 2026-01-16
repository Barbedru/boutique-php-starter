<?php


$products = [];

    for ($i = 1; $i <= 10 ; $i++) {
        $products[]= [
            "Nom" => "Produit " .  $i,
            "Prix" => rand(10,100),
            "Stock" => rand(0,50) 
        ];
    }
     


foreach($products as $product) {
    if ($product ["Stock"] === 0){
    continue;
}
    if ($product ["Prix"] > 100){
        break; 
    }
   echo $products["Nom"];
}

?>