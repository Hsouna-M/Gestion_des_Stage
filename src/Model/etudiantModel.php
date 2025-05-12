<?php

namespace gestion_stage\Model ; 
use gestion_stage\classes\Etudiant; 
use Exception ;

class etudiantModel extends abstractModel{

    public function __construct(){ parent::__construct() ; }
        
    public function create(Etudiant $etudiant){
        
        try{
            $sql ="insert into etudiant(nce,nom,prenom,classe) values(:nce ,:nom, :prenom, :classe)" ; 
            
            //preparing the stement to insert the parameters created above . 
            $stmnt= $this->databaseInstance->prepare($sql);               
            
            //inserting the values 
            $stmnt->bindParam(':nce', $etudiant->getNce()) ; 
            $stmnt->bindParam(':nom', $etudiant->getNom()) ; 
            $stmnt->bindParam(':prenom', $etudiant->getPrenom()) ; 
            $stmnt->bindParam(':classe', $etudiant->getClasse()) ; 

            //executing the command 
            $stmnt->execute() ; 

        }catch(Exception $e){
            echo "Error creating the Student \n Message: ".$e->getMessage() ; 
        }
    }
    
    //remove etudiant 
    public function remove_by_nce($nce){
        
        try {
            $sql = "delete from etudiant where nce = :nce"; 
            $stmnt =$this->databaseInstance->prepare($sql) ; 
         
            //binding parameters 
            $stmnt->bindParam(':nce', $nce);
            $stmnt-> execute();
            echo "deleted successfully";

        } catch (Exception $e) {
            echo "error removing etudiant \n Issue :  ".$e->getMessage() ; 
        }
    }


    public function update(Etudiant $etudiant){
        // this function does not need any parameters because it will be used , after creating a new etudaint object with the new attribute values from the form $_POST values, so we will acess them from the object 

        try{
            $sql ="update etudiant set nom=:nom , prenom=:prenom,classe=:classe where nce=:nce" ; 
            
            //preparing the stement to insert the parameters created above . 
            $stmnt= $this->databaseInstance->prepare($sql) ;               
            
            //inserting the values 
            $stmnt->bindParam(':nce', $etudiant->getNce()) ; 
            $stmnt->bindParam(':nom', $etudiant->getNom()) ; 
            $stmnt->bindParam(':prenom', $etudiant->getPrenom()) ; 
            $stmnt->bindParam(':classe', $etudiant->getClasse()) ; 
            
            $stmnt->execute() ; 
            echo "updated succsessfully";

        }catch(Exception $e){
            echo "Error updating the Student \n Message: ".$e->getMessage() ; 
        }
        
    }

    public function readBy_nce($nce){

        try {
            $sql = "select * from etudiant where `nce`=:nce" ; 
            $stmnt= $this->databaseInstance->prepare($sql) ; 

            $stmnt-> bindParam(':nce',$nce ) ; 

            $stmnt -> execute() ; 

            //fetch() : single row 
            return $resutl = $stmnt->fetch() ; 
            // returning single row table result  
        } catch (Exception $e) {
            echo "problem in the readEtudiant method \n Message ".$e->getMessage() ;             
        }

    }
    
    public function readBy_nom($nom){

        try {

            $sql = "select * from etudiant where `nom`=:nom" ; 
            $stmnt= $this->databaseInstance->prepare($sql) ; 
            $stmnt-> bindParam(':nom',$nom ) ; 
            $stmnt -> execute() ; 
            //fetch() : single row 
            return $resutl = $stmnt->fetchAll() ; 
            // returning single row table result  
        } catch (Exception $e) {

            echo "problem in the readEtudiant method \n Message ".$e->getMessage() ;             
        }
    }

    public function readBy_prenom($prenom){

        try {

            $sql = "select * from etudiant where `prenom`=:prenom" ; 
            $stmnt= $this->databaseInstance->prepare($sql) ; 
            $stmnt-> bindParam(':prenom',$prenom ) ; 
            $stmnt -> execute() ; 
            //fetch() : single row 
            return $resutl = $stmnt->fetchAll() ; 
            // returning single row table result  
        } catch (Exception $e) {

            echo "problem in the readEtudiant method \n Message ".$e->getMessage() ;             
        }

    }

    public function readBy_classe($classe){

        try {

            $sql = "select * from etudiant where `classe`=:classe" ; 
            $stmnt= $this->databaseInstance->prepare($sql) ; 
            $stmnt-> bindParam(':classe',$classe ) ; 
            $stmnt -> execute() ; 
            //fetch() : single row 
            return $resutl = $stmnt->fetchAll() ; 
            // returning single row table result  

        } catch (Exception $e) {
            echo "problem in the readEtudiant method \n Message ".$e->getMessage() ;             
        }

    }
}


?>