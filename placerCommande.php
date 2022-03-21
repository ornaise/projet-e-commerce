<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>commande</title>
</head>

<body>




	<header>
		<nav>

			<label for="toggle" style=" display: none; ">☰</label>
			<input type="checkbox" id="toggle">
			<div class="main_pages">
				<a href="accueil.php">Accueil</a>
				<a href="#">Actualité</a>
				<a href="#">Urgence</a>
				<a href="homeproprio.php">Service</a>
				<a href="proprietaire.php">client</a>
				<a href="panier.php">Panier</a>

			</div>
		</nav>

	</header>
	<div class="placehorder content-wrapper">
		<form method="post" action="formCommande.php">
			<h1>Votre commande a été passée</h1>
			<p>Cher Clients, </p>
			<p>Votre commande est prise en considération avec succès.</p>
			<p>Merci de faire vos achats sur notre site! </p>
			<p>Nous vous contacterons par e-mail avec les détails de votre commande.</p>
		</form>
	</div>
</body>

</html>