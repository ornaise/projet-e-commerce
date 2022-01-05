<?php
//connection a la bdd sql
$user = 'root';
$password = ''; //To be completed if you have set a password to root
$database = 'projetalex'; //To be completed to connect to a database. The database must exist.
$port = NULL; //Default must be NULL to use default port
$mysql = new mysqli('127.0.0.1', $user, $password, $database, $port);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_error . ') '
        . $mysqli->connect_error);
}
echo '<p>Connection OK ' . $mysqli->host_info . '</p>';
echo '<p>Server ' . $mysqli->server_info . '</p>';
echo '<p>Initial charset: ' . $mysqli->character_set_name() . '</p>';

//formulaire
echo "<table border=\"1\" >";
echo "<caption><b>Confirmation de vos coordonnées</b></caption>";


if (
    !empty($_POST['nom']) and !empty($_POST['prenom']) and
    !empty($_POST['adresse']) and !empty($_POST['ville']) and
    !empty($_POST['code'])
) {
    foreach ($_POST as $cle => $val) {
        echo "<tr> <td> $cle :  </td> <td>" . stripslashes($val)
            . "</td></tr>";
    }
} else {
    echo "<script type=\"text/javascript\">alert('Le formulaire est incomplet'); </script>";
}


class cheval
{
    public $age;
    public $sexe;
    public $poids;
    public $race;
    public $taille;

    public function __construct($age, $sexe, $poids, $race, $taille)
    {
        return $this->age = $age;
        return  $this->sexe = $sexe;
        return $this->poids = $poids;
        return $this->race = $race;
        return $this->taille = $taille;
    }
}
class commande
{
    public $Numerodecommande;
    public $Adessedefacturation;
    public $Produit;
    public $Service;
    public $facture;

    public function  __construct($Numerodecommande, $Adessedefacturation, $Produit, $Service, $facture)
    {
        $this->Numerodecommande = $Numerodecommande;
        $this->Adessedefacturation = $Adessedefacturation;
        $this->Produit = $Produit;
        $this->Service = $Service;
        $this->facture = $facture;
    }
}
$mysql->close();
