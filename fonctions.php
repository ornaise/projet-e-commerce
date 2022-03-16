	
	<?php
	 session_start();
	function pdo_connect_mysql(){
	    // Mettez à jour les détails ci-dessous avec les données de votre base de données MySQL.
	    $DATABASE_HOST = 'localhost';
	    $DATABASE_USER = 'root';
	    $DATABASE_PASS = '';
	    $DATABASE_NAME = 'projetalex';
	    try {
	 return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
	    } catch (PDOException $exception) {
	   // S'il y a une erreur de connexion, arrêtez le script et affichez le message erreur.
	      exit('Echec de la connexion à la base de données !');
	    }
	}

	
	?>
	
