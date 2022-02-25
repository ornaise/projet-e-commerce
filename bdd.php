<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'projetalex';
// Première méthode pour se connecter à une BDD
/*$db = new mysqli($db_host,$db_username,$db_password,$db_name);
if(!$db)
{
    die('Erreur de connection : '.mysqli_connect_error());
}*/
// Deuxième méthode pour se connecter à une BDD
try{
    $db = new PDO('mysql:host='.$db_host.';dbname='.$db_name,$db_username,$db_password);
}
catch(PDOException $e){
    echo "Erreur :".$e->getMessage();
}

?>