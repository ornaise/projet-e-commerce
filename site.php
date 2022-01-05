<?php
    class cheval
    {
        public $age;
        public $sexe;
        public $poids;
        public $race;
        public $taille;

        public function __construct($age,$sexe,$poids,$race,$taille){
            $this->age=$age;
            $this->sexe=$sexe;
            $this->poids=$poids;
            $this->race=$race;
            $this->taille=$taille;
        }
    }
    class commande{
        public $Numerodecommande;
        public $Adessedefacturation;

    }
?>