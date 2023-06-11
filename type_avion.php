<?php

use Type_Avion as GlobalType_Avion;

class Type_Avion {
    private $Id_Type_Avion;
    private $Place_2nd_Classe;
    private $Place_1er_Classe;

    function __construct($Id_Type_Avion, $Place_2nd_Classe, $Place_1er_Classe){
        $this->Id_Type_Avion = $Id_Type_Avion;
        $this->Place_2nd_Classe = $Place_2nd_Classe;
        $this->Place_1er_Classe = $Place_1er_Classe;
    }

    function getId_Type_Avion(){
        return $this->Id_Type_Avion;
    }
 
    function getPlace_2nd_Classe(){
        return $this->Place_2nd_Classe;
    }
    function setPlace_2nd_Classe($Place_2nd_Classe){
        $this->Place_2nd_Classe = $Place_2nd_Classe;
        
    }
    
    function getPlace_1er_Classe(){
        return $this->Place_1er_Classe;
    }
    function setPlace_1er_Classe($Place_1er_Classe){
        $this->Place_1er_Classe = $Place_1er_Classe;
        
    }
    
}

    ?>