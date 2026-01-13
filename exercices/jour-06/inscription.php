<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form method="POST" action="inscription.php">

<div> <?= 'Username :' ?>
    <input type="text_username" name="username" required >
   
</div>

    <div><?= 'Email :' ?>
    <input type="text_email" name="email" required >
</div>


<div><?= 'Password :' ?>
    <input type="password" name="password" required >
</div>


<div><?= 'Confirm Password' ?>
    <input type="conf_password" name="conf_password" required >

</div>

    <button type="submit" > Inscription </button>

</form>

<?php

$name = $_POST["username"] ?? null;
$email = $_POST["email"] ?? null;
$password = $_POST["password"] ?? null;
$conf_password = $_POST["conf_password"] ?? null;
$error = [];

// Vérification Username 3-20 caractères, alphanumerique
if (strlen($username)  >= 3 && strlen($username) <= 20 ){
    $error[] = "Charactères insufisant";
}

// Vérification d'Email valide
if (filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "<br> " . htmlspecialchars($_POST["email"]);
}else{
        $error = "Email invalide";
    echo "<br> " . $error;
}

// Vérification password minimum 8 caractères
if (strlen($password) <= 8)
    $error = 'Charactère insufisant';
    echo "<br>". $error;

// Vérification identique au password
if ( $conf_password !== $password){
    $error = ' Le mot de passe ne correspond pas';
    //echo "<br>" . $error; 
}

?>

</body>
</html>