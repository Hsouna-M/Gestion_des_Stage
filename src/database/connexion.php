<?php
require 'config/dbconfig.php' ; 
// charset is important it caused an error without it . "mysql:host=localhost;dbname=dbname;chrset=utf8mb4"

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
try{
    $pdo = new PDO($dsn, $user , $password) ;
    //set the pdo error mode to exception so i can catch below 

}catch(PDOException $e){
    // accessing a method in the $e object
    echo 'Error: '.$e->getMessage().'<br>' ;
}


?>