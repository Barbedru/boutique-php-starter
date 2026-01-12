<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$name = $_GET["name"];

if ($_GET ["name"]){
        echo "Bonjour " . $name . "!";
}   else{
        echo "Bonjour visiteur !";
    
}

echo 'Bonjour ' . ($_GET['name']) . ', vous avez ' . ($_GET['age']) . ' ans !';

?>

</body>
</html>
