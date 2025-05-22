<?php

namespace gestion_stage\Model ;

use Exception;
use gestion_stage\classes\Administrateur;

class adminModel extends abstractModel{

  public function read(Administrateur $admin){

            try {
                $query = "select * from admin where login = ? and mdp = ?";
                $stmnt = $this->databaseInstance->prepare($query);
                $stmnt->execute([$admin->getLogin(),$admin->getMdp()]);
                return $stmnt->fetch(); 
                
            } catch (Exception $e) {
                $e->getMessage() ;
            }
        }

   
}






?>