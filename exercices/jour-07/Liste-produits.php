<?php

try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
        "dev",
        "dev",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    echo "✅ Connexion réussie !";
} catch (PDOException $e) {
    echo "❌ Erreur : " . $e->getMessage();
}

// SELECT avec paramètre

$stmt = $pdo->prepare("SELECT * FROM products ");
$stmt->execute();
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

    <table>

        <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>Stock</th>
        </tr>

        <?php foreach ($products as $product): ?>

            <tr>
                <td><?= $product["name"] ?></td>
                <td><?= $product["price"] ?> €</td>
                <td><?= $product["stock"] ?></td>
            </tr>

        <?php endforeach ?>

    </table>

</body>

</html>