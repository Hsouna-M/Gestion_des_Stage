<?php

// require_once 'src/database/connexion.php' ; 
// require_once 'src/Model/etudiant.php' ;
// require_once 'src/Model/enseignant.php' ;
// require_once 'src/Model/soutenance.php';
// require_once 'src/Model/administrateur.php';

// require_once 'src/Model/administrateur.php';
// echo 'server working\n' ;

//  $etudiant = new Etudiant(123456789,"testremove","testremove","ing-3-j-A");
// test add etudiant 
//  $etudiant->create($pdo) ; 
//works

// test remove etudiant 
// $etudiant->remove($pdo); 
//works 
//test update etudiant 
// $etudiant2= new Etudiant(123456789,"hsouna","med aziz","ing-3-j-A");
// $etudiant2->update($pdo);
//works     
// fetching the data 
// $fetch_row = $etudiant->read($pdo);
// echo "nom : ". $fetch_row['nom'];
// echo "nce : ". $fetch_row['nce'];

// test crud enseignant working sucsessfully 
// $enseignant = new Enseignant(123456789,'','');
// $fetch_row = $enseignant->read($pdo);
// echo "matricule: ". $fetch_row['matricule'];
// echo "nom : ". $fetch_row['nom'];
// $enseignant->create($pdo);
// $enseignant->setPrenom("waddey");
// $enseignant->update($pdo);
// $enseignant->remove($pdo);

// test crud soutenance 
// $etudiant = new Etudiant(145623, "hsouna","mohamed aziz","inj-3ja");
// $etudiant->create($pdo);
// $enseignant = new Enseignant( 1236546, "kirmene","marzouki");
// $enseignant->create($pdo); 
// $soutenance= new Soutenance(656556,"09/06/24",18,$etudiant, $enseignant);
// $soutenance->setDateSoutenance("25/06/25") ;
// $soutenance->create($pdo);
// $soutenance->update($pdo);
// $result_fetch = $soutenance->read($pdo);
// echo $result_fetch['date'] ; 
// works 

// test administrateur 
// $etudiant = new Etudiant(1, "test_admin_add","test_admin_add","test_admin_add");
// $enseignant = new Enseignant( 11, "test_admin_add","test_admmin_add");
// $soutenance= new Soutenance(4545,"09/06/24",18,$etudiant, $enseignant);

// test login 
// $amdin = new Administrateur(1,"admin", "password");
// $res = $amdin->login($pdo); 
// if ($res  ) {
//     echo "login successfully"; 
// }else{
//     echo "login not succesfully bloddy ";
// }
// $amdin->addetudiant($etudiant, $pdo);
// $amdin->addenseignant($enseignant,$pdo);
// $amdin->addSoutenance($soutenance, $pdo);

// test controller mvc 
// require 'src/Controller/login_controller.php';
// $controller = new LoginController();
// $controller->show_loginForm();

//test loginController and the form 
require 'src/database/connexion.php';
echo "is this working " ; 
// $controller = new LoginController() ; 
if(isset($_POST['submit'])){
        $admin = new Administrateur($_POST['id'], $_POST['login'], $_POST['mdp']); 

        $instance = $admin->login($pdo); 
        echo "login controller login_admin method is processing "; 
        if ($instance && $instance->num_rows==1) {
            header("location:adminPage.php"); 
        }else{
            echo "login failed you are not an admin ";
        } 
    }else{echo "this is so fuckt up " ; }
?>