<?php

class Enseignant{
    private $matricule ; 
    private $nom ; 
    private $prenom ; 

    public function __construct($matricule, $nom, $prenom){
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    //getters and setters 
    public function getMatricule(){
        return $this->matricule;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function setMatricule($matricule){
         $this->matricule = $matricule;
    }
    public function setNom($nom){
        $this->nom = $nom;
   }
   public function setPrenom($prenom){
    $this->prenom = $prenom;
    }

    public function create($pdo){
        
        // create parameters by adding :name 
        try{

            $sql ="insert into enseignant(matricule,nom,prenom) values(:matricule ,:nom, :prenom)" ; 
            
            //preparing the stement to insert the parameters created above . 
            $stmnt= $pdo->prepare($sql) ;

            //inserting the values 
            $stmnt->bindParam(':matricule', $this->getmatricule()) ; 
            $stmnt->bindParam(':nom', $this->getNom()) ; 
            $stmnt->bindParam(':prenom', $this->getPrenom()) ; 

            //executing the command 
            $stmnt->execute() ; 
            echo "added enseignant successfully";
        }catch(Exception $e){
            echo "Error creating the enseignant \n Message: ".$e->getMessage() ; 
        }

    }
    public function remove($pdo){
        
        try {
            $sql = "delete from enseignant where matricule = :matricule"; 
            $stmnt =$pdo->prepare($sql) ; 
         
            //binding parameters 
            $stmnt->bindParam(':matricule', $this->getmatricule());
            $stmnt-> execute();
            echo "deleted successfully";

        } catch (Exception $e) {
            echo "error removing enseignant \n Issue :  ".$e->getMessage() ; 
        }
    }


    public function update( $pdo){
        try{
             try{

            $sql ="update enseignant set nom=:nom , prenom=:prenom where matricule=:matricule" ; 
            
            //preparing the stement to insert the parameters created above . 
            $stmnt= $pdo->prepare($sql) ;               
            
            //inserting the values 
            $stmnt->bindParam(':matricule', $this->getmatricule()) ; 
            $stmnt->bindParam(':nom', $this->getNom()) ; 
            $stmnt->bindParam(':prenom', $this->getPrenom()) ; 
            
            
            //executing the command 
            $stmnt->execute() ; 
            echo "updated succsessfully";

        }catch(Exception $e){
            echo "Error updating the enseignant \n Message: ".$e->getMessage() ; 
        }


        }catch(Exception $e){
            echo "problem in the update method".$e->getMessage() ; 
        }        


    }

    public function read($pdo){

        try {
            $sql = "select * from enseignant where `matricule`=:matricule" ; 
            $stmnt= $pdo->prepare($sql) ; 

            $stmnt-> bindParam(':matricule', $this->getmatricule()) ; 

            $stmnt -> execute() ; 

            //fetch() : single row 
            return $resutl = $stmnt->fetch(PDO::FETCH_ASSOC) ; 
            // returning single row table result  
        } catch (Exception $e) {
            echo "problem in the readenseignant method \n Message ".$e->getMessage() ;             
        }

    }

}

?>