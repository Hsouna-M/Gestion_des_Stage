<?php

function autoloader(string $clasname){

    // finding the first backslash
    $lastSlashPosition=strpos($clasname , "\\") + 1 ; // i added one because the string index starts from 
    $spacePathRest= substr($clasname, $lastSlashPosition) ; // getting the rest of the name space
    $dirPathRest=str_replace("\\","/",$spacePathRest);
    $fileName= __DIR__."/src/".$dirPathRest.".php" ; 

    require_once($fileName) ; 
} 

spl_autoload_register('autoloader') ; 


?>