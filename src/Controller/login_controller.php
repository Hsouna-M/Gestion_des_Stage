<?php

class LoginController{

    public function loginForm(){ require 'src/views/login.php'; }
    public function adminDashBoard(){header("location:src/views/adminPage.php");}
    public function updateSoutenance(){require 'src/veiws/update_soutenance.php';}
    public function updateEnseignant(){require 'src/veiws/update_enseignant.php';}
    public function updateEtudiant(){require 'src/veiws/update_etudiant.php';}

   public function login($pdo){
    // handle the login function here 
    // take the data from the form make an instance check the login 

    if(isset($_POST['submit'])){
        $admin = new Administrateur($_POST['id'], $_POST['login'], $_POST['mdp']); 

        $instance = $admin->login($pdo); 
        if ($instance && $instance->num_rows==1) {
            header("location:adminPage.php"); 
        } 
    }
   }
}



?>