<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


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

// Affiche les produits
$stmt = $pdo->prepare("SELECT * FROM products");
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);



// CREATE
// ligne dessous Si un formulaire a été envoyé en POST, qu’il contient une action, et que cette action est ‘add’, alors j’exécute ce bloc
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

//UPDATE
// ligne dessous Si un formulaire a été envoyé en POST, qu’il contient une action, et que cette action est ‘update’, alors j’exécute ce bloc
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "update") {

    $stmt = $pdo->prepare("UPDATE products SET name = ?, price = ?, stock = ?  WHERE id = ?");
    $stmt->execute([
        $_POST["name"],
        $_POST["price"],
        $_POST["stock"],
        $_POST["id"]
    ]);

    header("Location: admin-produits.php");
    exit;
}

// search de UPDATE
$productToEdit = null;
if (isset($_GET['edit'])) {
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$_GET['edit']]);
    $productToEdit = $stmt->fetch(PDO::FETCH_ASSOC);
}


// DELETE
if (isset($_GET["delete"])) {
    $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$_GET["delete"]]);

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
    <div>
            <h2>Ajouter un produit</h2>

            <form method="POST">
                <input type="hidden" name="action" value="add">

                <p><input type="text" name="name" placeholder="Nom du produit"></p>

                <p><input type="number" name="price" placeholder="Prix €"></p>

                <p><input type="number" name="stock" placeholder="Stock"></p>

                <button type="submit">Ajouter</button>
            </form>
    </div>


<?php if ($productToEdit): ?>

    <div>
        <form method="POST">

            <h2>Modifier un produit</h2>

            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" value="<?= $productToEdit['id'] ?>">

            <input type="search" name="Recherche" placeholder="Recherche un produit">


            <input type="text" name="name" value="<?= $productToEdit['name'] ?>">

            <input type="number" name="price" value="<?= $productToEdit['price'] ?>">

            <input type="number" name="stock" value="<?= $productToEdit['stock'] ?>">
            <input type="hidden" name="id" value="<?= $productToEdit['id'] ?>">

            <button type="submit"> Modifier</button>
        </form>
    </div>
    <?php endif;?>



    <div>
        <?php foreach ($products as $product): ?>
            <p><?= $product["name"] ?></p>
            <p><?= $product["price"] . "€ " ?></p>
            <p><?= $product["stock"] ?></p>

            <a href="admin-produits.php?edit= <?= $product['id'] ?>"> Modifier </a>

            <p>
                <!--Bouton click de suppression avec message de confirmation(en JS) avec un condition ternaire(? :)-->
                <button onclick="window.confirm('Souhaitez-vous vraiment supprimer ?')                    
                ? location.href = 'http://localhost:8000/admin-produits.php?delete= <?= $product["id"] ?>'
                : alert('OSKOUR');">Supprimer</button>
            </p>

        <?php endforeach; ?>
    </div>
    


</body>

</html>