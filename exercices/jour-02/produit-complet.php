<?php

$product = [
    "name" => "Rooibos des Vahinés",
    "description" => "Thé Rooibos",
    "price" => "14,40",
    "image" => ['https://www.palaisdesthes.com/media/catalog/product/cache/17268bf11b2baf4cb4cd0cb108e37f78/d/8/d856am_1.jpg', 'https://www.dubruitdanslacuisine.fr/cdn/shop/files/rooibos-des-vahines-boite-100g-bis_1_c15d2115-9ea8-4466-a14e-f9781984f512.jpg?crop=center&height=550&v=1726007261&width=550', 'https://www.google.com/imgres?q=rooibos%20des%20vahin%C3%A9s&imgurl=https%3A%2F%2Fm.media-amazon.com%2Fimages%2FI%2F615dx6SmmBL._AC_UF894%2C1000_QL80_.jpg&imgrefurl=https%3A%2F%2Fwww.amazon.fr%2FPalais-Th%25C3%25A9s-Rooibos-VAHIN%25C3%2589S-mousselines%2Fdp%2FB00GMLMFOU&docid=BwkL166_IkOBIM&tbnid=zf-HQQrmEKBR-M&vet=12ahUKEwiK0pHY-_aRAxUVVKQEHa67BKEQM3oECC8QAA..i&w=894&h=894&hcb=2&ved=2ahUKEwiK0pHY-_aRAxUVVKQEHa67BKEQM3oECC8QAA&safe=active&ssui=on'],
    "sizes" => ["100g", "500g" , "1kg"],
    "reviews" => [
        ["author" => "Alice", "rating" => 5, "comment" => "Excellent thé, très parfumé !"],
        ["author" => "Bob", "rating" => 4, "comment" => "Bon rapport qualité-prix."],
    
    ]
];

//print_r($product);

echo '<img src="' . $product["image"][0]. '" alt="Rooibos des Vahinés" />';  // Affiche la première image du produit

echo count($product["sizes"]);                                           // Affiche 3, le nombre de tailles disponibles
echo ($product["reviews"][0]["author"])   // Affiche "Alice", l'auteur du premier avis 
?>