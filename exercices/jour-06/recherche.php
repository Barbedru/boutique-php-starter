

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$products = [
    1 => ["name" => "T-shirt", "price" => 29.99],
    2 => ["name" => "Jean", "price" => 79.99],
    3 => ["name" => "Sneakers", "price" => 119.99],
    4 => ["name" => "Veste", "price" => 149.99],
    5 => ["name" => "Casquette", "price" => 19.99],
    6 => ["name" => "Sac à dos", "price" => 89.99],
    7 => ["name" => "Montre", "price" => 199.99],
    8 => ["name" => "Lunettes de soleil", "price" => 99.99],
    9 => ["name" => "Ceinture", "price" => 39.99],
    10 => ["name" => "Chaussettes", "price" => 9.99]
];



$search = $_GET['recherche'] ?? '';
$resultat = true;

if (isset($search)){
    echo "Résultat : ";

    foreach ($products as $product){
        if (stripos($product["name"], $search) !== false){
            echo $product['name'] . " - " . $product['price'] . " €";
            $resultat = true; 
            break;   
    }
    }

}

if ($resultat=false){
    echo "Aucun résultat";
}




?>

<form method="GET">

     <div>
        <label> Recherche :</label><br>
        <input type="text" name="recherche" value="">
    </div><br>

    <button type="submit" > Lancer la recherche </button>

</form>

</body>
</html>