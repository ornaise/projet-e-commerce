<?php
include_once '../index.php';
?>

<?php

if (isset($_POST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $password = stripslashes($_REQUEST['password']);
    $query = "SELECT * FROM `users` WHERE username='$username' and password='" . hash('sha256', $password) . "'";
    $result = $pdo->query($query);
    $rows = $result->rowCount();

    if ($rows == 1) {
        $_SESSION['username'] = $username;
        header("Location: loginProprio.php");
    } else {
        $message = "le nom d'utilisateur ou le mot de passe est incorrect.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Google">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css" />
    <title>login</title>
</head>

<body>
    <form class="box" action="" method="post" name="login">
        <h1 class="box-logo box-title">
            <a href="../homeproprio.php">Page d'accueil des Propriètaires</a>
        </h1>
        <h1 class="box-logo box-title"></h1>
        <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
        <input type="password" class="box-input" name="password" placeholder="Mot de passe">
        <input type="submit" value="Connexion" name="submit" class="box-button">
        <p class="box-register">Vous êtes nouveau ici?>
            <a href="register.php">S'inscrire</a>
        </p>
        <?php if (!empty($message)) { ?>
            <p class="errorMessage">
                <?php echo $message; ?>
            </p>
        <?php } ?>
    </form>
</body>

</html>