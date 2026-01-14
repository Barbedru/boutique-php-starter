<?php

$products = [
    ["name" => "T-shirt", "price" => 29.99, "category" => "Vêtements", "inStock" => true],
    ["name" => "Pantalon", "price" => 49.99, "category" => "Vêtements", "inStock" => false],
    ["name" => "Chaussures", "price" => 79.99, "category" => "Chaussures", "inStock" => true],
    ["name" => "Casquette", "price" => 19.99, "category" => "Accessoires", "inStock" => true],
    ["name" => "Sac à dos", "price" => 59.99, "category" => "Accessoires", "inStock" => false],
    ["name" => "Veste", "price" => 99.99, "category" => "Vêtements", "inStock" => true],
    ["name" => "Baskets", "price" => 89.99, "category" => "Chaussures", "inStock" => true],
    ["name" => "Lunettes de soleil", "price" => 39.99, "category" => "Accessoires", "inStock" => false],
    ["name" => "Chemise", "price" => 29.99, "category" => "Vêtements", "inStock" => true],
    ["name" => "Sandales", "price" => 24.99, "category" => "Chaussures", "inStock" => true],
    ["name" => "Montre", "price" => 199.99, "category" => "Accessoires", "inStock" => true],
    ["name" => "Short", "price" => 34.99, "category" => "Vêtements", "inStock" => false],
    ["name" => "Bottes", "price" => 129.99, "category" => "Chaussures", "inStock" => true],
    ["name" => "Écharpe", "price" => 14.99, "category" => "Accessoires", "inStock" => true],
    ["name" => "Pull", "price" => 49.99, "category" => "Vêtements", "inStock" => false],
];


$search = $_GET['q'] ?? "";
$categories = $_GET['category'] ?? "";
//$priceMin = $_GET["price_min"] ?? 0;
//$priceMax = $_GET["price_max"] ?? PHP_INT_MAX;
//$sort = $_GET["sort"] ?? "name_asc";
//$page = $_GET["page"] ?? 1;

$results = array_filter($products, function ($p) use ($search , $categories) {
    if ($search !== "" && stripos($p["name"], $search) === false) {
        return false;
    }
    if ($categories !== "" && stripos ($p["category"], $categories) === false) {
        return false;
    }
 
    return true;
});

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <div class="Affichage">
        <?php foreach ($results as $product): ?>
            <div class="produit">
                <h2><?= $product["name"] ?></h2>
                <p><?= $product["price"] ?></p>
                <p><?= $product["category"] ?></p>
                <p><?= $product["Instock"] ?></p>

            </div>

            <?php endforeach; ?>

            <?php if (empty($results)): ?>
            <p>Aucun résultat</p>
            <?php endif ?>
        </div>


    <form method="GET">

        <div><label> Recherche </label>
            <input type="text" name="q" value="<?= htmlspecialchars($search) ?>">
        </div><br>

        <div><label> Catégorie </label>
            <select type="select" name="category" value="<?= htmlspecialchars($categories) ?>">
                <option value=""> Toutes les catégories </option>
                <option value="Vêtements"> Vêtements </option>
                <option value="chaussures"> Chaussures </option>
                <option value="accessoires"> Accessoires </option>
            </select>
        </div><br>

        <div><label> Prix Max </label>
            <input type="number" name="price_max" value="">
        </div><br>

        <div><label> En stock uniquement </label>
            <input type="checkbox" name="stock" value="">
        </div><br>


        <button type="submit"> Lancer la recherche </button>
    </form>


</body>

</html>