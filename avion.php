<?php

use Avion as GlobalAvion;

class Avion {
    private $id_Avion;
    private $Nombre_Heure_Vol;
    private $Id_Type_Avion;

    function __construct($id_Avion, $Nombre_Heure_Vol, $Id_Type_Avion){
        $this->id_Avion = $id_Avion;
        $this->Nombre_Heure_Vol = $Nombre_Heure_Vol;
        $this->Id_Type_Avion = $Id_Type_Avion;
    }

    function getId_Avion(){
        return $this->id_Avion;
    }
 
    function getNombre_Heure_Vol(){
        return $this->Nombre_Heure_Vol;
    }
    function setNombre_Heure_Vol($Nombre_Heure_Vol){
        $this->Nombre_Heure_Vol = $Nombre_Heure_Vol;
        
    }
    
    function getId_Type_Avion(){
        return $this->Id_Type_Avion;
    }
    function setId_Type_Avion($Id_Type_Avion){
        $this->Id_Type_Avion= $Id_Type_Avion;
        
    }
 
    
}

static function getAvionById($id_Avion){
    $bdd = new PDO('mysql:dbname=compagnie;host=127.0.0.1','root', '');
    $query = $bdd->query('SELECT * FROM avion WHERE Id_avion='.$id_Avion);
    $modifierAvion = $query->fetch();

    return new Avion ($modifierAvion['id_Avion'],$modifierAvion['Nombre_Heure_Vol'],$modifierAvion['Id_Type_Avion']);

}
static function getAvionById($id_Avion){
    $bdd = new PDO('mysql:dbname=lycée;host=127.0.0.1','root', '');
    $query= $bdd->prepare('UPDATE avion SET >Nombre_Heure_Vol =:>Nombre_Heure_Vol, Id_Type_Avion=:Id_Type_Avion');
    $query->execute(array('id'=>$avion->getId_Avion() ,'Nombre_Heure_Vol'=>$avion->getNombre_Heure_Vol(),'Type_Avion'=>$avion->getId_Type_Avion()));
}



    ?>