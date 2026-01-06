<?php

$product = [
    ["name" => "Thé vert" , "price" => "3.99" , "stock" => 320 ],
    ["name" => "Thé noir" , "price" => "4.49" , "stock" => 250 ],
    ["name" => "Rooibos" , "price" => "4.99" , "stock" => 200 ],
    ["name" => "Thé blanc" , "price" => "4.25" , "stock" => 180 ],
    ["name" => "Thé Oolong" , "price" => "3.50" , "stock" => 250 ]
];

$product[1]["stock"] = 260;       // Modifie le stock du "Thé noir" , ajoute 10 unités

var_dump($product);

echo $product[2]["name"];      // affiche "Rooibos"
echo $product[0]["price"];    // affiche "3.99"
echo $product[4]["stock"];   // affiche 250

?>