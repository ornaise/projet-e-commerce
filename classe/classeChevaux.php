<?php
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
?>