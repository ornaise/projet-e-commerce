
<?php
include_once '../index.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=google">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css" />
    <title>login</title>
</head>

<body>
    <?php

    if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])) {
        // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
        $username = stripslashes($_REQUEST['username']);
        // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
        $email = stripslashes($_REQUEST['email']);
        // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
        $password = stripslashes($_REQUEST['password']);


        //requete SQL + mdp crypté
        $query = "INSERT into `users` (username, email, password)
                VALUES ('$username','$email','" .hash('sha256', $password)."')";
        // Exécuter la requête sur la base de données
        $res = $pdo->query($query);
        if ($res) {
            echo "<div class='succes'>
                        <h3>Vous êtes inscrit avec succès.</h3>
                        <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
                    </div>";
        }
    } else {
    ?>
        <form class="box" action="" method="post">
            <h1 class="box-logo box-title">
                <a href="../homeproprio.php">Page d'accueil des propriétaires</a>
            </h1>
            <h1 class="box-title"> s'inscrire </h1>
            <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
            <input type="text" class="box-input" name="email" placeholder="Email" required />
            <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
            <input type="submit" name="submit" value="S'inscrire" class="box-button" />
            <p class="box-register">Déjà inscrit?
                <a href="login.php">Connectez-vous ici</a>
            </p>

        </form>
    <?php } ?>


</body>

</html>