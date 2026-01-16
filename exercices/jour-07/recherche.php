<?php

try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
        "dev",
        "dev",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
   
} catch (PDOException $e) {
    echo "❌ Erreur : " . $e->getMessage();
}

$search = $_GET["search"] ?? '';
$products=[];

// SELECT avec paramètre

$stmt = $pdo->prepare("SELECT * FROM products WHERE name LIKE ? ");
$stmt->execute(['%' . $search . '%']);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <?php if (empty($products)){ 
        $error['produit'] = "Auncun résultat";
    }
    ?>
    <?php foreach ($products as $product): ?>
        <p> <?= ($product["name"]) ?> </p>
    <?php endforeach;
    ?>


    <div>

        <form method="GET">
            <label> Recherche </label>
            <input type="text" name="search">
            <div classe='error' style="color:red"><?= $error['produit'] ?></div>
            <input type="submit" value="Lancer la recherche">
        </form>

    </div>




</body>

</html>