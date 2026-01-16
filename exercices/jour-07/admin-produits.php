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
$products = [];

// SELECT 

$stmt = $pdo->prepare("SELECT * FROM products WHERE name LIKE ? ");
$stmt->execute(['%' . $search . '%']);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);



// CREATE
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "add") {

    $stmt = $pdo->prepare("INSERT INTO products (name, price, stock) VALUES (?, ?, ?)");
    $stmt->execute([
        $_POST["name"],
        $_POST["price"],
        $_POST["stock"]
    ]);

    header("Location: admin-produits.php");
    exit;
}


// DELETE
if (isset($_GET["delete"])) {
    $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute(
        [$_GET["delete"]]
    );

    header("Location: admin-produits.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST">

        <h2>Ajouter un produit</h2>

        <form method="POST">
            <input type="hidden" name="action" value="add">

            <p><input type="text" name="name" placeholder="Nom du produit"></p>

            <p><input type="number" name="price" placeholder="Prix €"></p>

            <p><input type="number" name="stock" placeholder="Stock"></p>

            <button type="submit">Ajouter</button>
        </form>


        <?php foreach ($products as $product): ?>
            <p><?= $product["name"] . " " . $product["price"] . "€ " . "En stock: " . $product["stock"] ?> </p>

            <p>
                <!--Bouton click de suppression avec message de confirmation(en JS) avec un condition ternaire(? :)-->
                <input type="text" name="delete">
                <button onclick="window.confirm('Souhaitez-vous vraiment supprimer ?')                    
                ? location.href = 'http://localhost:8000/admin-produits.php?delete= <?= $product["id"] ?>'
                : alert('Fiou');">Supprimer</button>
            </p>

        <?php endforeach; ?>

    </form>


</body>

</html>