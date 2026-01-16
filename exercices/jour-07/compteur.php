<?php

session_start();                      //Toujours en première ligne

if (!isset($_SESSION["visits"])) {
    $_SESSION["visits"] = 1;
} else {
    $_SESSION["visits"]++;
}

if (isset($_GET["reset"])) {
    $_SESSION["visits"] = 0;
}


$visit = $_SESSION["visits"];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1> Vous avez visité cette page <?= $visit ?> fois.</h1>
    <button> <a href="compteur.php"> Compteur </a></button>
    <button> <a href="compteur.php?reset=0"> Réinitialiser </></button>

</body>

</html>