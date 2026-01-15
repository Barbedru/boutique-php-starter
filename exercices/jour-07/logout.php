<?php

session_start();
session_destroy();


//redirige vers la page login lors de la deconnexion
header("Location: login.php");
exit;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>