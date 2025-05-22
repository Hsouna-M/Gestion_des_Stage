<?php 

namespace gestion_stage\Model ; 
use gestion_stage\classes\Soutenance ;
use Exception ;

class hybridModel extends abstractModel{

    public function __construct(){ parent::__construct(); }

    public function readBy_matricule($matricule){

        try {

            $sql = "select * from enseignant where matricule=:matricule" ;
            $stmnt= $this->databaseInstance->prepare($sql) ; 
            $stmnt-> bindParam(':matricule',$matricule ) ; 
            $stmnt -> execute() ; 
            return $resutl = $stmnt->fetch() ; 

            // returning single row table result  
        } catch (Exception $e) {
            echo "problem in the readenseignant method \n Message ".$e->getMessage() ;             
        }

    }

    public function readBy_nce($nce){

        try {
            $sql = "select * from etudiant where nce=:nce" ; 
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


    public function read($numjury){

        try {
            $sql = "select * from soutenance where numjury=:nce" ; 
            $stmnt= $this->databaseInstance->prepare($sql) ; 
            $stmnt-> bindParam(':nce',$numjury ) ; 
            $stmnt -> execute() ; 

            //fetch() : single row 
            return $resutl = $stmnt->fetch() ; 
            // returning single row table result  

        } catch (Exception $e) {
            echo "problem in the read soutenance  method \n Message ".$e->getMessage() ;             
        }

    }

    public function create(Soutenance $soutenance){

        try{

            $sql ="insert into soutenance(numjury,date,note,nce,matricule) values(:numjury ,:date, :note, :nce, :matricule)" ; 
            
            //preparing the stement to insert the parameters created above . 
            $stmnt= $this->databaseInstance->prepare($sql) ;

            //inserting the values 
            $stmnt->bindParam(':numjury',$soutenance->getNumJury() ) ; 
            $stmnt->bindParam(':date',$soutenance->getDateSoutenance() ) ; 
            $stmnt->bindParam(':note',$soutenance->getNote() ) ; 
            $stmnt->bindParam(':nce', $soutenance->getNce()) ; 
            $stmnt->bindParam(':matricule', $soutenance->getMatricule()) ; 

            $stmnt->execute() ; 
            echo "added enseignant successfully";
            return true ; 

        }catch(Exception $e){
            echo "Error creating the soutenance \n Message: ".$e->getMessage() ; 
            return false  ;
        }
    }

    public function fetchSout(){
        try {

            $stmnt= $this->databaseInstance->prepare("select * from soutenance") ; 
            $stmnt->execute() ; 
            //fetch() : single row 
            return $stmnt->fetchAll() ;  


        } catch (Exception $e) {
            echo "problem in the fetch soutenance method \n Message ".$e->getMessage() ;             
            return null ;

        }

    }


    public function remove($numJury){
        try {
            $sql = "delete from soutenance where numjury = :num"; 
            $stmnt =$this->databaseInstance->prepare($sql) ; 
         
            //binding parameters 
            $stmnt->bindParam(':num', $numJury);
            $stmnt-> execute();
            return true ;
            echo "deleted successfully";

        } catch (Exception $e) {
            echo "error removing enseignant \n Issue :  ".$e->getMessage() ; 
        }
    }

    public function update($numJury , $date , $note){

        try{

            $sql ="update soutenance set numjury=:n , date=:d, note=:note where numjury=:numjury" ; 
            
            //preparing the stement to insert the parameters created above . 
            $stmnt= $this->databaseInstance->prepare($sql) ;               
            
            //inserting the values 
            $stmnt->bindParam(':n', $numJury) ; 
            $stmnt->bindParam(':d', $date) ; 
            $stmnt->bindParam(':note',$note ) ; 
         
            //executing the command 
            $stmnt->execute() ; 
            echo "updated succsessfully";

        }catch(Exception $e){
            echo "Error updating the enseignant \n Message: ".$e->getMessage() ; 
        }


    }
}



