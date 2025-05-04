<?php

class Connexion{
   private $dbname="gestion_stage";    
   private $user="admin_gestion_stage";
   private $password="password";
   private $host="localhost";
   private $charset='utf8mb4' ; 


   public function connexion(){
       
        try{
            $dsn = 'mysql:host'. $this->host . ';dbname=' . $this->dbname;

            $pdo_conn = new PDO($dsn, $this->user , $this->password) ;

            //set the pdo error mode to exception so i can catch below 
            $pdo_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
          
            // set teh fetch mode to fetch_assoc to get a table as a result when using the $pdo_conn->fetchall()
            $pdo_conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
           
            return $pdo_conn ;
        
        }catch(PDOException $e){
         
            // accessing a method in the $e object
            echo 'Error Connection to the DB: '.$e->getMessage().'<br>' ;

        }
    }
}

// testcondition 
$connexion = new Connexion();

$pdo_connexion = $connexion->connexion();

if ($pdo_connexion) {

    echo "connexion success" ; 

}else{echo "problem";}

?>