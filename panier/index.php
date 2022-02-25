	
	<?php
	/* Inclure des fonctions et se connecter à la base de données en utilisant PDO MySQL*/
	include'fonctions.php';
	$pdo= pdo_connect_mysql();

    	
	/* Si aucune autre page n'est ren voyée dans les parametres http, la Page (home.php) est définie par défaut comme page d'accueil , de sorte que lorsque le visiteur se rend sur le site, c'est la page qui lui sera affichée.*/
	$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
	// Inclure et afficher la page demandée
	include $page.'.php';?>
	

	
?>