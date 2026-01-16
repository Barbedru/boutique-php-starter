<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>

<?php

$error = [];
$username = $email = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = ($_POST["username"]);
    $email = ($_POST["email"]);
    $password = $_POST["password"];
    $conf_password = $_POST["conf_password"];

    // Username
    if (empty($username)) {                                            
        $error['username'] = "Le nom d'utilisateur est requis.";
    } elseif (strlen($username) < 3 || strlen($username) > 20) {
        $error['username'] = "Doit comporter entre 3 et 20 caractères.";
    } elseif (!ctype_alnum($username)){
        $error['username'] = "Le nom doit être en alphanumérique";
    }
    

    // Email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error['email'] = "Email invalide.";
    }

    // Password
    if (strlen($password) < 8) {
        $error['password'] = "Doit comporter au minimum 8 caractères.";
    }

    // Confirm Password
    if ($password !== $conf_password) {
        $error['conf_password'] = "Les mots de passe ne correspondent pas.";
    }

    
}
?>

<form method="POST">

    <div>
        <label> Username :</label><br>
        <input type="text" name="username" value="<?= htmlspecialchars($username) ?>">
        <?php if (isset($error['username'])): ?>
            <div class="error" style="color:orange"><?= $error['username'] ?></div>
        <?php endif; ?>
    </div><br>

    <div>
        <label> Email :</label><br>
        <input type="email" name="email" value="<?= htmlspecialchars($email) ?>">
        <?php if (isset($error['email'])): ?>
            <div class="error" style="color:orange"><?= $error['email'] ?></div>
        <?php endif; ?>
    </div><br>

    <div>
        <label> Password :</label><br>
        <input type="password" name="password">
        <?php if (isset($error['password'])): ?>
            <div class="error" style="color:orange"><?= $error['password'] ?></div>
        <?php endif; ?>
    </div><br>

    <div>
        <label> Confirm Password :</label><br>
        <input type="password" name="conf_password">
        <?php if (isset($error['conf_password'])): ?>
            <div class="error" style="color:orange"><?= $error['conf_password'] ?></div>
        <?php endif; ?>
    </div><br>

    <button type="submit">Inscription</button>
</form>

</body>
</html>