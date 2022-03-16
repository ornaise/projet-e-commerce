<?php

class cheval//classe qui concerne les chevaux
{
    public $Nom_Cheval;
    public $Sexe;
    public $Race;
    public $Taille;
    public $id_localisation;



    public function __construct($Nom_Cheval, $Sexe, $Race, $Taille, $Id_localisation)
    {
        return $this->Nom_Cheval = $Nom_Cheval;
        return  $this->sexe = $Sexe;
        return $this->race = $Race;
        return $this->taille = $Taille;
        return $this->localisation= $Id_localisation;
    }
    
}
   
?>