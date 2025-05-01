<?php

class Etudiant{
    private $nce ; 
    private $nom ; 
    private $prenom ; 
    private $classe ; 

    public function __construct($nce ,$nom ,$prenom ,$classe){
        $this->nce = $nce;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->classe = $classe;
    }

    public function setNce($nce){
        $this->nce = $nce;
    }
    public function getNce(){
        return $this->nce;
    }

    
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function getNom(){
        return $this->nom;
    }

    
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function getPrenom(){
        return $this->prenom;
    }    
    

    public function setClasse($classe){
        $this->classe = $classe;
    }
    public function getClasse(){
        return $this->classe;
    }    

    public function verifyEtudiant($etudiant){
        //verification des donnes des etudiant
    }

    public function create($pdo){
        
        // create parameters by adding :name 
        try{

            $sql ="insert into etudiant(nce,nom,prenom,classe) values(:nce ,:nom, :prenom, :classe)" ; 
            
            //preparing the stement to insert the parameters created above . 
            $stmnt= $pdo->prepare($sql) ;               
            
            //inserting the values 
            $stmnt->bindParam(':nce', $this->getNce()) ; 
            $stmnt->bindParam(':nom', $this->getNom()) ; 
            $stmnt->bindParam(':prenom', $this->getPrenom()) ; 
            $stmnt->bindParam(':classe', $this->getClasse()) ; 

            //executing the command 
            $stmnt->execute() ; 

        }catch(Exception $e){
            echo "Error creating the Student \n Message: ".$e->getMessage() ; 
        }

    }
    
    //remove etudiant 
    public function remove($pdo){
        
        try {
            $sql = "delete from etudiant where nce = :nce"; 
            $stmnt =$pdo->prepare($sql) ; 
         
            //binding parameters 
            $stmnt->bindParam(':nce', $this->getNce());
            $stmnt-> execute();
            echo "deleted successfully";

        } catch (Exception $e) {
            echo "error removing etudiant \n Issue :  ".$e->getMessage() ; 
        }
    }


    public function update( $pdo){
        try{
             try{

            $sql ="update etudiant set nom=:nom , prenom=:prenom,classe=:classe where nce=:nce" ; 
            
            //preparing the stement to insert the parameters created above . 
            $stmnt= $pdo->prepare($sql) ;               
            
            //inserting the values 
            $stmnt->bindParam(':nce', $this->getNce()) ; 
            $stmnt->bindParam(':nom', $this->getNom()) ; 
            $stmnt->bindParam(':prenom', $this->getPrenom()) ; 
            $stmnt->bindParam(':classe', $this->getClasse()) ; 
            
            
            //executing the command 
            $stmnt->execute() ; 
            echo "updated succsessfully";

        }catch(Exception $e){
            echo "Error updating the Student \n Message: ".$e->getMessage() ; 
        }


        }catch(Exception $e){
            echo "problem in the update method".$e->getMessage() ; 
        }        


    }

    public function read($pdo){

        try {
            $sql = "select * from etudiant where `nce`=:nce" ; 
            $stmnt= $pdo->prepare($sql) ; 

            $stmnt-> bindParam(':nce', $this->getNce()) ; 

            $stmnt -> execute() ; 

            //fetch() : single row 
            return $resutl = $stmnt->fetch(PDO::FETCH_ASSOC) ; 
            // returning single row table result  
        } catch (Exception $e) {
            echo "problem in the readEtudiant method \n Message ".$e->getMessage() ;             
        }

    }
}






