<?php
$discount = 10;
$product = [
    "name" => "iPhone 15",
    "description" => "SmartPhone",
    "price" => "99.99",
    "stock" => 42,
    "category" => "Electronics",
    "brand" => "Apple"
];

$product["dateAdded"] = date("Y-m-d");
echo $product["dateAdded"];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1> Produit : <?php echo $product["name"]; ?> </h1>
    <p> Description : <?php echo $product["description"]; ?> </p>
    <p> Price with -10% : <?php echo $product["price"] - $discount; ?> € </p>
    <p> In stock: <?php echo $product["stock"]; ?> units </p>
    <p> Category: <?php echo $product["category"]; ?> </p>
    <p> Brand: <?php echo $product["brand"]; ?> </p>

</body>
</html>

