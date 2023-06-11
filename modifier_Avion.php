<?php 
include ('avion.php');
$bdd = new PDO('mysql:dbname=compagnie;host=127.0.0.1','root', '');
if(isset($_GET['id_Avion'])){
    $avion = Avion::getAvionById($_GET['id_Avion']);
    if($avion){
        //Vérifie que le formulare a été soumis
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $newNombre_Heure_Vol= $_POST['Nombre_Heure_Vol'];
        $newId_Type_Avion= $_POST['Id_Type_Avion'];
        Avion::updateAvionById(new Avion($_GET['id_Avion'],  $newNombre_Heure_Vol, $$newId_Type_Avion, ));
        header('Location: index.php');
        exit;
        } 
    }
}
?>
