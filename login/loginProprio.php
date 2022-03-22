<?php
//Initialiser la session
session_start();

// Vérifiez si l'utilisateur est connecté, sinon le diriger vers la page de connexion
if (!isset($_SESSION["username"])) {
    header("login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css" />
    <title>tableau de bord</title>
</head>

<body>
<header>
		<nav>

			<label for="toggle" style=" display: none; ">☰</label>
			<input type="checkbox" id="toggle">
			<div class="main_pages">
				<a href="../accueil.php">Accueil</a>
				<a href="#">Actualité</a>
				<a href="#">Urgence</a>
				<a href="../homeproprio.php">Service</a>
				<a href="../proprietaire.php">client</a>
				<a href="../panier.php">Panier</a>

			</div>
		</nav>

	</header>
    <div class="sucess">
        <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
        <p>Voici votre tableau de bord.</p>
      
        <a href="logout.php">Déconnexion</a>
       
        

    </div>
</body>

</html>