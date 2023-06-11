<?php

use Semaine as GlobalSemaine;

class Semaine {
    private $id_Semaine;


    function __construct($id_Semaine){
        $this->id_Semaine = $id_Semaine;

    }

    function getId_Semaine(){
        return $this->id_Semaine;
    }
    
}

    ?>