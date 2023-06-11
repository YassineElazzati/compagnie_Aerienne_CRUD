<?php

use Reserver as GlobalReserver;

class Reserver {
    private $Id_Vol;
    private $Id_Semaine;
    private $Nb_Places1;
    private $Nb_Places2;

    function __construct($Id_Vol, $Id_Semaine, $Nb_Places1,$Nb_Places2){
        $this->Id_Vol = $Id_Vol;
        $this->Id_Semaine = $Id_Semaine;
        $this->Nb_Places1 = $Nb_Places1;
        $this->Nb_Places2 = $Nb_Places2;
    }

    function getId_Vol(){
        return $this->Id_Vol;
    }
 
    function getId_Semaine(){
        return $this->Id_Semaine;
    }
    function setId_Semaine($Id_Semaine){
        $this->Id_Semaine = $Id_Semaine;
        
    }
    
    function getNb_Places1(){
        return $this->Nb_Places1;
    }
    function setNb_Places1($Nb_Places1){
        $this->Nb_Places1= $Nb_Places1;
        
    }
    function getNb_Places2(){
        return $this->Nb_Places2;
    }
    function setNb_Places2($Nb_Places2){
        $this->Nb_Places2= $Nb_Places2;
        
    }   
}


    ?>