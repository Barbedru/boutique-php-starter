<?php
session_start();


// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
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
 
<p> Bienvenue <?= $_SESSION["user"] ?></p >

<button> <a href="logout.php"> Déconnexion </a></button>

</body>

</html>