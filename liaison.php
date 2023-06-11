<?php

use Liaison as GlobalLiaison;

class Liaison {
    private $Id_Liaison;
    private $Ville_Depart;
    private $Ville_Arrivee;

    function __construct($Id_Liaison, $Ville_Depart, $Ville_Arrivee){
        $this->Id_Liaison = $Id_Liaison;
        $this->Ville_Depart = $Ville_Depart;
        $this->Ville_Arrivee = $Ville_Arrivee;
    }

    function getId_Liaison(){
        return $this->Id_Liaison;
    }
 
    function getVille_Depart(){
        return $this->Ville_Depart;
    }
    function setVille_Depart($Ville_Depart){
        $this->Ville_Depart = $Ville_Depart;
        
    }
    
    function getVille_Arrivee(){
        return $this->Ville_Arrivee;
    }
    function setVille_Arrivee($Ville_Arrivee){
        $this->Ville_Arrivee= $Ville_Arrivee;
        
    }
 
    
}

    ?>