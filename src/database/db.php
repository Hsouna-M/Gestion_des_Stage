<?php
namespace gestion_stage\database ; 
use PDO ; 

class db{
   private static $connectInstance ; 

   public function __construct() { die("not allowed to make a connexion instance"); }

   private static function connect():PDO  {

        $dsn = "mysql:host=localhost;dbname=gestion_stage;charset=UTF8";
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION , PDO::FETCH_DEFAULT => PDO::FETCH_ASSOC]; 

        return new PDO($dsn , "admin_gestion_stage", "password" , $options) ; 
   }

   public static function getConnexionInstance(){ return (self::$connectInstance == null) ? self::$connectInstance=self::connect() : null; }

    public static function disconnect(){ self::$connectInstance = null; }

}

// db class test is in the test.php   

?>