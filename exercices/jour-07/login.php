<?php

session_start();

var_dump($_SESSION['user']);

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === "1234") {
        $_SESSION['user'] = $username;

        header("Location: dashboard.php");
        exit;
    } else {
        $error['username'] = "Identifiants invalides.";
    }
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
        <form method='post'>
            <label> Username :</label>
            <input type="text" id="username" name="username" value="<?= htmlspecialchars($username) ?>">

    </div>

    <br>

    <label> Password :</label>
    <input type="text" id="password" name="password" value="<?= htmlspecialchars($password) ?>">


    <?php if (isset($error['username'])): ?>
        <div class="error" style="color:red"><?= $error['username'] ?></div>
    <?php endif; ?>

    <br>

    <input type="submit" value="Se connecter">
    </form>
    </div>

</body>

</html>