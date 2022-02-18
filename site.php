<?php


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

//début des classes
class cheval//classe qui concerne les chevaux
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
class commande //class qui concerne les commandes
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
$mysql->close();//fermeture de la bdd
