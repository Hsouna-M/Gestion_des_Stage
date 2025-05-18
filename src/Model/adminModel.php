<?php

namespace gestion_stage\Model ;

use Exception;
use gestion_stage\classes\Administrateur;

class adminModel extends abstractModel{

  public function create(Administrateur $admin){

   try {
    $sql = "insert into admin(id,login,mdp) values(?,?,?)" ; 
    $stmnt = $this->databaseInstance->prepare($sql);
    $stmnt->execute([$admin->getIdAministrateur() , $admin->getLogin() ,$admin->getMdp()]) ; 

   } catch (Exception $e) {

    echo $e->getMessage() ; 
   } 
  }

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