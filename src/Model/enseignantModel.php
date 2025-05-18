<?php 
namespace gestion_stage\Model ; 
use gestion_stage\classes\Enseignant ; 
use Exception ;

class enseignantModel extends abstractModel{

    public function __construct(){ parent::__construct(); }

    public function create(Enseignant $enseignant){

        try{

            $sql ="insert into enseignant(matricule,nom,prenom) values(:matricule ,:nom, :prenom)" ; 
            
            //preparing the stement to insert the parameters created above . 
            $stmnt= $this->databaseInstance->prepare($sql) ;

            //inserting the values 
            $stmnt->bindParam(':matricule',$enseignant->getMatricule() ) ; 
            $stmnt->bindParam(':nom', $enseignant->getNom()) ; 
            $stmnt->bindParam(':prenom', $enseignant->getPrenom()) ; 

            //executing the command 
            $stmnt->execute() ; 
            echo "added enseignant successfully";
        }catch(Exception $e){
            echo "Error creating the enseignant \n Message: ".$e->getMessage() ; 
        }
    }

    public function remove($matricule){
        
        try {
            $sql = "delete from enseignant where matricule = :matricule"; 
            $stmnt =$this->databaseInstance->prepare($sql) ; 
         
            //binding parameters 
            $stmnt->bindParam(':matricule', $matricule());
            $stmnt-> execute();
            echo "deleted successfully";

        } catch (Exception $e) {
            echo "error removing enseignant \n Issue :  ".$e->getMessage() ; 
        }
    }


    public function update( Enseignant $enseignant){

        try{

            $sql ="update enseignant set nom=:nom , prenom=:prenom where matricule=:matricule" ; 
            
            //preparing the stement to insert the parameters created above . 
            $stmnt= $this->databaseInstance->prepare($sql) ;               
            
            //inserting the values 
            $stmnt->bindParam(':matricule', $enseignant->getMatricule()) ; 
            $stmnt->bindParam(':nom', $enseignant->getNom()) ; 
            $stmnt->bindParam(':prenom', $enseignant->getPrenom()) ; 
         
            //executing the command 
            $stmnt->execute() ; 
            echo "updated succsessfully";

        }catch(Exception $e){
            echo "Error updating the enseignant \n Message: ".$e->getMessage() ; 
        }


    }



    public function readBy_matricule($matricule){

        try {
            $sql = "select * from enseignant where `matricule`=:matricule" ; 
            $stmnt= $this->databaseInstance->prepare($sql) ; 

            $stmnt-> bindParam(':matricule', $matricule) ; 

            $stmnt -> execute() ; 

            //fetch() : single row 
            return $resutl = $stmnt->fetch() ; 
            // returning single row table result  
        } catch (Exception $e) {
            echo "problem in the readenseignant method \n Message ".$e->getMessage() ;             
        }

    }
    



   public function readBy_nom($nom){

        try {
            $sql = "select * from enseignant where `nom`=:nom" ; 
            $stmnt= $this->databaseInstance->prepare($sql) ; 
            $stmnt-> bindParam(':nom', $nom) ; 
            $stmnt -> execute() ; 

            //fetch() : single row 
            return $resutl = $stmnt->fetchAll() ; 
            // returning single row table result  

        } catch (Exception $e) {
            echo "problem in the readenseignant method \n Message ".$e->getMessage() ;             
        }

    }



   public function readBy_prenom($prenom){

        try {

            $sql = "select * from enseignant where `prenom`=:prenom" ; 
            $stmnt= $this->databaseInstance->prepare($sql) ; 
            $stmnt-> bindParam(':prenom', $prenom) ; 
            $stmnt -> execute() ; 

            //fetch() : single row 
            return $resutl = $stmnt->fetchAll() ; 
            // returning single row table result  
        } catch (Exception $e) {
            echo "problem in the readenseignant method \n Message ".$e->getMessage() ;             
        }

    }




}




?>