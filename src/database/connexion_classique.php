<?php
include '../config/dbconfig.php' ; 

$conn = mysqli_connect($host , $user , $password , $dbname) ; 
echo 'connexion succeded <br>';
if (! $conn) {
    die('connexion failed'.mysqli_connect_error()) ; 
}
?>