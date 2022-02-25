<?php
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
?>