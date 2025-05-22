<?php

/*
controller ,
 - receive requests and data
 - call proper models 
 - load proper views 


 possible methods in a controller class : 
 - process request : 
 - load view 

*/

namespace gestion_stage\Controller ;

use gestion_stage\Controller\abstractController;
use gestion_stage\classes\Administrateur;
use gestion_stage\Model\adminModel;

class LoginController extends abstractController{
// now the load badRequest function is available in this 
    public function loadView_login(){ include __DIR__."/../views/login.php" ; }
    public function loadView_adminPage(){ include __DIR__."/../views/adminPage.php" ; }

    public function handleLogin($login , $password ):bool{
        //test if the submit is made 
          if(!isset($login) || !isset($password)) return false ;

            $adminInstance = new Administrateur(1 , $login , $password) ;
            $model = new adminModel() ; 
            if(! $model -> read($adminInstance))return false ;
            return true ;

  }

}


?>
