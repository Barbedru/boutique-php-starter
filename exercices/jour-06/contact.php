

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="POST" action="contact.php">

    <?= 'Name :' ?>
    <input type="text_name" name="name" >
    <?= 'Email :' ?>
    <input type="text_email" name="email"  >
    <?= 'Message :' ?>
    <input type="text_message" name="message" >
    <button type="submit" > Connexion </button>
</form>

<?php

$name = $_POST["name"] ?? null;
$email = $_POST["email"] ?? null;
$message = $_POST["message"] ?? 0;


//Vérification des champs requis
if (empty($name && $email && $message)){
    $error = "Champ requis";
    echo "<br> " . $error;
}


//Vérification d'Email valide
if (filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "<br> " . htmlspecialchars($_POST["email"]);
}else{
        $error = "Email invalide";
    echo "<br> " . $error;
}

//Vérification de 10 caractères minimum

if (strlen($message) <= 10){
    $error = "Caractères insufisant";
    echo "<br> " . $error;
}



echo "<br> " . htmlspecialchars($_POST["name"]);
echo "<br> " . htmlspecialchars($_POST["email"]);
echo "<br> " . htmlspecialchars($_POST["message"]);

?>

</body>
</html>