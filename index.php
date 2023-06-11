<?php

//////////////////////////////////////////////////////////////////////////////////////////////////BDD POUR AVION//////////////////////////////////

    $bdd = new PDO('mysql:dbname=compagnie_aerienne2;host=127.0.0.1','root', '');
    $queryExec = $bdd->query("SELECT * FROM avion");
    $lesAvions= $queryExec->fetchAll();

    include('avion.php');

    $tableauAvion= array();

    foreach ($lesAvions as $Avion) {

        $monAvion= new Avion ($Avion['id_Avion'],$Avion['Nombre_Heure_Vol'],$Avion['Id_Type_Avion']);

       array_push($tableauAvion,$monAvion);

    }
   //////////////////////////////////////////////////////////////////////////////////////////////////BDD POUR LIAISON////////////////////////////

   $bdd = new PDO('mysql:dbname=compagnie_aerienne2;host=127.0.0.1','root', '');
   $queryExec = $bdd->query("SELECT * FROM liaison");
   $lesLiaisons= $queryExec->fetchAll();

    include('liaison.php');

    $tableauLiason= array();

    foreach ($lesLiaisons as $Liaison) {

        $maLiaison= new Liaison ($Liaison['Id_Liaison'],$Liaison['Ville_Depart'],$Liaison['Ville_Arrivee']);

       array_push($tableauLiason,$maLiaison);
    }
    
   //////////////////////////////////////////////////////////////////////////////////////////////////BDD POUR reserver /////////////////////  
   
   $bdd = new PDO('mysql:dbname=compagnie_aerienne2;host=127.0.0.1','root', '');
   $queryExec = $bdd->query("SELECT * FROM reserver");
   $lesReserver= $queryExec->fetchAll();

   include('reserver.php');

   $tableauReserver= array();

   foreach ($lesReserver as $reserve) {

       $maReserve= new Reserver ($reserve['Id_Vol'],$reserve['Id_Semaine'],$reserve['Nb_Places1'],$reserve['Nb_Places2']);

      array_push($tableauReserver,$maReserve);
   }

      //////////////////////////////////////////////////////////////////////////////////////////////////BDD POUR Semaine  ////////////////// 
      
      $bdd = new PDO('mysql:dbname=compagnie_aerienne2;host=127.0.0.1','root', '');
      $queryExec = $bdd->query("SELECT * FROM semaine");
      $lesSemaine= $queryExec->fetchAll();
   
      include('semaine.php');
   
      $tableauSemaine= array();
   
      foreach ($lesSemaine as $semaine) {
   
          $maSemaine= new Semaine ($semaine['Id_Semaine']);
   
         array_push($tableauSemaine,$maSemaine);
      }

            ///////////////////////////////////////////////////////////////////////////////BDD POUR Type Avion///////////////////// 

      $bdd = new PDO('mysql:dbname=compagnie_aerienne2;host=127.0.0.1','root', '');
      $queryExec = $bdd->query("SELECT * FROM type_avion");
      $lesType_Avion= $queryExec->fetchAll();
   
      include('type_Avion.php');
   
      $tableauType_Avion= array();
   
      foreach ($lesType_Avion as $Type_Avion) {
   
          $monType_Avion= new Type_Avion ($Type_Avion['Id_Type_Avion'],$Type_Avion['Place_2nd_Classe'],$Type_Avion['Place_1er_Classe']);
   
         array_push($tableauType_Avion,$monType_Avion);
      }
     
 ///////////////////////////////////////////////////////////////////////////////BDD POUR VOL///////////////////// 

            $bdd = new PDO('mysql:dbname=compagnie_aerienne2;host=127.0.0.1','root', '');
            $queryExec = $bdd->query("SELECT * FROM vol");
            $lesVol= $queryExec->fetchAll();
         
            include('vol.php');
         
            $tableauVol= array();
         
            foreach ($lesVol as $Vol) {
         
                $mesVol= new Vol ($Vol['Id_Vol'],$Vol['Duree_du_vol'],$Vol['Heure_Arrivee'],$Vol['Heure_Depart'],$Vol['Jour']);
         
               array_push($tableauVol,$mesVol);
            }
      
            // var_dump($tableauAvion)  ;
            // var_dump($tableauLiason)  ;    
            // var_dump($tableauReserver)  ;
            // var_dump($tableauSemaine) ; 
            // var_dump($tableauType_Avion)  ;
            // var_dump($tableauVol)  ;
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
</head>
<body>

<header>
<nav class="shadow">

<div class="flex justify-between items-center py-6 px-10 container mx-auto">

  <div>
    <h1 class="text-2xl font-bold bg-gradient-to-tr from-indigo-600 to-green-600 bg-clip-text text-transparent hover:cursor-pointer">Nahim Compagnie</h1>
  </div>

  <div>
    
    <div class="hover:cursor-pointer sm:hidden">
      <spnan class="h-1 rounded-full block w-8 mb-1 bg-gradient-to-tr from-indigo-600 to-green-600"></spnan>
      <spnan class="h-1 rounded-full block w-8 mb-1 bg-gradient-to-tr from-indigo-600 to-green-600"></spnan>
      <spnan class="h-1 rounded-full block w-8 mb-1 bg-gradient-to-tr from-indigo-600 to-green-600"></spnan>
    </div>
    <div class="flex items-center">


    </div>
  </div>
</div>
</nav>
<!-- <section>
    <div class="bg-gray-100 sm:grid grid-cols-5 grid-rows-2 px-4 py-6 min-h-full lg:min-h-screen space-y-6 sm:space-y-0 sm:gap-4">

    <div class="h-96 col-span-4 bg-gradient-to-tr from-indigo-800 to-indigo-500 rounded-md flex items-center">
      <div class="ml-20 w-80">
      <h2 class="text-white text-4xl">Nahim Compagnie</h2>
      <p class="text-indigo-100 mt-4 capitalize font-thin tracking-wider leading-7">Avec un Chien</p>
      <a href="#" class="uppercase inline-block mt-8 text-sm bg-white py-2 px-4 rounded font-semibold hover:bg-indigo-100">EN ROUUUUUUUUUUUUUUTE</a>
      </div>
    </div>
    </div>
    </div>
  </section> -->
</header>

<main>

<main>

</body>
</html>



