<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form method="POST" action="inscription.php">

<div> Username : </br>
    <input type="text_username" name="username" >
   
</div>

<div> Email : </br>
<input type="text_email" name="email"  >
</div>


<div> Password : </br>
    <input type="password" name="password"  >
</div>


<div> Confirm Password : </br>
    <input type="conf_password" name="conf_password"  >
</div>
</br>
    <button type="submit" > Inscription </button>

</form>

<?php


$username = $_POST["username"] ?? null;
$email = $_POST["email"] ?? null;
$password = $_POST["password"] ?? null;
$conf_password = $_POST["conf_password"] ?? null;
$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {


// Vérification Username 3-20 caractères, alphanumerique
if (empty($username)){
    $error = 'Un nom est requis';
    echo "<br>" . $error;
    
}elseif (strlen($username)  < 3 && strlen($username) > 20 ){
   $error = 'Pour Username : Doit comprendre entre 3 et 20 caractères';
    echo "<br>" . $error;
}

// Vérification d'Email valide
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $error = 'Pour Email : Email invalide';
    echo "<br> " . $error;
}

// Vérification password minimum 8 caractères
if (strlen($password) <= 8)
    $error = 'Pour Password : Charactère insufisant';
    echo "<br>". $error;

// Vérification identique au password
if ( $conf_password !== $password){
    $error = 'Pour Conf Password :  Le mot de passe ne correspond pas';
    echo "<br>" . $error; 
}

}
?>

</body>
</html>