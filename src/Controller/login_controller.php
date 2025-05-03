<?php
require 'src/Model/administrateur.php' ;
class LoginController{
    public function __construct()
    {
       echo "Login Controller Created Succsessfully " ;
    }

    public function loginForm(){ require 'src/views/login.php'; }
    public function adminDashBoard(){header("location:adminPage.php");}
    public function updateSoutenance(){require 'src/veiws/update_soutenance.php';}
    public function updateEnseignant(){require 'src/veiws/update_enseignant.php';}
    public function updateEtudiant(){require 'src/veiws/update_etudiant.php';}

   public function login_admin($pdo){
    // handle the login function here 
    // take the data from the form make an instance check the login 

    if(isset($_POST['submit'])){
        $admin = new Administrateur($_POST['id'], $_POST['login'], $_POST['mdp']); 

        $instance = $admin->login($pdo); 
        echo "login controller login_admin method is processing "; 
        if ($instance && $instance->num_rows==1) {
            header("location:adminPage.php"); 
        }else{
            echo "login failed you are not an admin ";
        } 
    }
   }
}



?>