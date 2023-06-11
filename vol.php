<?php

use Vol as GlobalVol;

class Vol {
    private $id_Vol;
    private $Duree_du_vol;
    private $Heure_Arrivee;
    private $Heure_Depart;
    private $Jour;

    function __construct($id_Vol, $Duree_du_vol, $Heure_Arrivee,$Heure_Depart,$Jour){
        $this->id_Vol = $id_Vol;
        $this->Duree_du_vol = $Duree_du_vol;
        $this->Heure_Arrivee = $Heure_Arrivee;
        $this->Heure_Depart = $Heure_Depart;
        $this->Jour = $Jour;
    }

    function getid_Vol(){
        return $this->id_Vol;
    }
 
    function getDuree_du_vol(){
        return $this->Nombre_Heure_Vol;
    }
    function setDuree_du_vol($Duree_du_vol){
        $this->Duree_du_vol = $Duree_du_vol;
        
    }
    
    function getHeure_Arrivee(){
        return $this->Heure_Arrivee;
    }
    function setHeure_Arrivee($Heure_Arrivee){
        $this->Heure_Arrivee= $Heure_Arrivee;
        
    }
    function getHeure_Departe(){
        return $this->Heure_Depart;
    }
    function setHeure_Depart($Heure_Depart){
        $this->Heure_Depart= $Heure_Depart;
        
    }
 
    function getJour(){
        return $this->Jour;
    }
    function setJour($Jour){
        $this->Jour= $Jour;
        
    }
 
 
    
}


    ?>