<?php
include 'index.php';
class cheval//classe qui concerne les chevaux
{
    public $Nom_Cheval;
    public $age;
    public $sexe;
    public $poids;
    public $race;
    public $taille;



    public function __construct($Nom_Cheval,$age, $sexe, $poids, $race, $taille)
    {
        return $this->Nom_Cheval = $Nom_Cheval;
        return $this->age = $age;
        return  $this->sexe = $sexe;
        return $this->poids = $poids;
        return $this->race = $race;
        return $this->taille = $taille;
    }
    
}
    class AjoutCheval extends cheval {
            
    }
$Nom_Cheval = new cheval($Nom_Cheval,$age,$sexe,$poids,$race,$taille);
?>