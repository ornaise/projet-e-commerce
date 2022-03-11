	
	<?php
	//connexion a la base 
	$db_host = 'localhost';
	$db_username = 'root';
	$db_password = '';
	$db_name = 'projetalex';
	

	//On essaie de se connecter
	try{
		$pdo = pdo_connect_mysql( $db_host, $db_name, $db_username, $db_password);
		
		if(!$pdo) {
			die("Erreur : " . pdo_connect_mysql_error());
		}
		echo "Connexion réussi";

		//On ferme la connexion
		pdo_close_mysql($pdo);
		

	?>
	

	