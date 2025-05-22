 <?php
/* notes : 
- var_export() : prints the variable in a php valid form array 
        exapmle  :( 0 => array ( 'nce' => 12, 0 => 12, 'nom' => 'hsouna', 1 => 'hsouna', 'prenom' => 'med aziz ', 2 => 'med aziz ', 'classe' => 'inj', 3 => 'inj', ), )
*/ 

// require 'AutoLoader.php' ; 
// require 'ErrorHandler.php' ; 

// use gestion_stage\classes\Soutenance; 
// use gestion_stage\classes\Etudiant; 
// use gestion_stage\classes\Enseignant;
// use gestion_stage\Model\hybridModel;

// $model = new hybridModel() ;
// $etud = $model->readBy_nce(456456);
// $etudiant = new Etudiant($etud['nce'],$etud['nom'],$etud['prenom'],$etud['classe']);

// $ens = $model->readBy_matricule(456456);
// $enseignant = new Enseignant($ens['matricule'],$ens['nom'],$ens['prenom']);

// $soutenance = new Soutenance(1212,"test",12,$etudiant,$enseignant) ;

//  if($model ->create($soutenance)) echo "create method is working" ;

// echo $undefinedVariable ; 
// foreach ($_SERVER as $key => $value) echo "$key = $value \n" ; 

// echo $_SERVER['HTTP_HOST'] ; 
// echo $_SERVER['REQUEST_METHOD'] ; 
// echo $_SERVER['REQUEST_URI'] ; 
// echo $_SERVER['SERVER_NAME'] ; 
// echo __FILE__; 

// //test adminModel 

// use gestion_stage\classes\Administrateur ; 
// use gestion_stage\Model\adminModel ; 

// $ModelInstance= new adminModel(); 
// $object = new Administrateur(2, "sadok", "selmi") ;
// // $ModelInstance->create($object) ; 
// var_dump($ModelInstance->read($object)  ) ;
// $ModelInstance->readBy_matricule() ;



// //test enseignantModel 

// use gestion_stage\classes\Enseignant ; 
// use gestion_stage\Model\enseignantModel ; 
// $ModelInstance= new enseignantModel(); 
// $object = new Enseignant(123, "sadok", "selmi") ;
// $ModelInstance->create($object) ; 
// var_dump($ModelInstance->readBy_matricule(12)  ) ;
// var_dump($ModelInstance->readBy_nom("sadok"))  ;
// var_dump($ModelInstance->readBy_prenom("selmi"))  ;
// // $ModelInstance->readBy_matricule() ;



// //test etudiantModel

// use gestion_stage\classes\Etudiant ; 
// use gestion_stage\Model\etudiantModel ; 
// $etudiantModelInstance= new etudiantModel(); 
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

