<?php

class Soutenance{
    private $numJury; 
    private $dateSoutenance; 
    private $note; 
    private $nce;
    private $matricule;

    public function __construct($numJury, $dateSoutenance, $note, $etudiant, $enseignant){
        $this->numJury=$numJury;
        $this->dateSoutenance=$dateSoutenance;
        $this->note=$note;
        $this->nce = $etudiant->getNce();
        $this->matricule = $enseignant->getMatricule();
    }

    public function getNumJury(){return $this->numJury;}
    public function getDateSoutenance(){return $this->dateSoutenance;}
    public function getNote(){return $this->note;}
    public function getNce(){return $this->nce;}
    public function getMatricule(){return $this->matricule;}

    public function setNumJury($numJury){ $this->numJury = $numJury;}
    public function setDateSoutenance($dateSoutenance){ $this->dateSoutenance = $dateSoutenance;}
    
    public function setNce($etudiant){ 
        if ($etudiant instanceof Etudiant) {
            $this->nce = $etudiant->getNce() ;
        }else{echo "invalid etudiant";}
    }
    
    public function setMatricule($enseignant){ 
        if ($enseignant instanceof Enseignant) {
            $this->nce = $enseignant->getMatricule() ;
        }else{echo "invalid ensignant";}
    }
public function create($pdo){
        
        // create parameters by adding :name 
        try{

            $sql ="insert into soutenance(numjury,date,note,nce,matricule) values(:numjury ,:date,:note, :nce,:matricule)" ; 
            
            //preparing the stement to insert the parameters created above . 
            $stmnt= $pdo->prepare($sql) ;

            //inserting the values 
            $stmnt->bindParam(':numjury', $this->getNumJury()) ; 
            $stmnt->bindParam(':date', $this->getDateSoutenance()) ; 
            $stmnt->bindParam(':note', $this->getNote()) ; 
            $stmnt->bindParam(':nce', $this->getNce()) ; 
            $stmnt->bindParam(':matricule', $this->getMatricule()) ; 

            //executing the command 
            $stmnt->execute() ; 
            echo "added soutenance successfully";

        }catch(Exception $e){
            echo "Error creating the soutenance \n Message: ".$e->getMessage() ; 
        }

    }

    public function remove($pdo){
        
        try {
            $sql = "delete from soutenane where numjury = :numjury"; 
            $stmnt =$pdo->prepare($sql) ; 
         
            //binding parameters 
            $stmnt->bindParam(':nce', $this->getNce());
            $stmnt-> execute();
            echo "deleted successfully";

        } catch (Exception $e) {
            echo "error removing enseignant \n Issue :  ".$e->getMessage() ; 
        }
    }


    public function update( $pdo){
        try{

            $sql ="update soutenance set matricule=:matricule , date=:date ,note=:note,nce=:nce where numjury=:numjury" ; 
            
            //preparing the stement to insert the parameters created above . 
            $stmnt= $pdo->prepare($sql) ;               
            
            //inserting the values 
            $stmnt->bindParam(':matricule', $this->getmatricule()) ; 
            $stmnt->bindParam(':date', $this->getDateSoutenance()) ; 
            $stmnt->bindParam(':note', $this->getNote()) ; 
            $stmnt->bindParam(':nce', $this->getNce()) ; 
            $stmnt->bindParam(':numjury', $this->getNumJury()) ; 
            
            
            //executing the command 
            $stmnt->execute() ; 
            echo "updated succsessfully";

        }catch(Exception $e){
            echo "Error updating the soutenance \n Message: ".$e->getMessage() ; 
        }

    }

    public function read($pdo){

        try {
            $sql = "select * from soutenance where numjury=:numjury" ; 
            $stmnt= $pdo->prepare($sql) ; 
            $stmnt-> bindParam(':numjury', $this->getNumJury()) ; 
            $stmnt -> execute() ; 

            //fetch() : single row 
            return $resutl = $stmnt->fetch(PDO::FETCH_ASSOC) ; 
            // returning single row table result  

        } catch (Exception $e) {
            echo "problem in the read soutenance method \n Message ".$e->getMessage() ;             
        }

    }


}

?>