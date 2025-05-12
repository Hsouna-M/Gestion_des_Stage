<?php
/* notes : 
- var_export() : prints the variable in a php valid form array 
        exapmle  :( 0 => array ( 'nce' => 12, 0 => 12, 'nom' => 'hsouna', 1 => 'hsouna', 'prenom' => 'med aziz ', 2 => 'med aziz ', 'classe' => 'inj', 3 => 'inj', ), )


*/ 
require 'AutoLoader.php' ; 


//test etudiantModel

use gestion_stage\classes\Etudiant ; 
use gestion_stage\Model\etudiantModel ; 

$etudiantModelInstance= new etudiantModel(); 
// $etudiant = new Etudiant(12,"hsouna","med aziz ","inj" ) ;
// $etudiantModelInstance->create($etudiant) ; 
// var_dump($etudiantModelInstance->readBy_nce(12)  ) ;
// var_dump($etudiantModelInstance->readBy_nom("hsouna"))  ;
// var_dump($etudiantModelInstance->readBy_prenom("mohamed aziz"))  ;
// var_export($etudiantModelInstance->readBy_classe("inj"))  ;
// $etudiantModelInstance->remove_by_nce(12) ;


// test abstractModel

// use gestion_stage\Model\abstractModel;
// $modelInstance= new abstractModel() ; 
// if ($modelInstance != null) {
//     echo "connection success" ; 
//    $rows= $modelInstance->databaseInstance->query("select * from etudiant");
//    foreach ($rows as $row ) {
//     var_dump($row) ;
//    }
// }else{ echo "connextion problem" ;}


// test db connextion 

// use gestion_stage\database\db;
// $conect = db::getConnexionInstance() or null ; 
// if ($conect != null) {
//     echo "connection success" ; 
//    $rows= $conect->query('select * from etudiant');
//    foreach ($rows as $row ) {
//     var_dump($row) ;
//    }
// }else{ echo "connextion problem" ;}

