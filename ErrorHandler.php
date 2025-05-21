<?php   

function logError($errno , $errstr ,$errfile ,$errline ){

    //write the new eroor format inside a 3:file 1:send mail 0:default error log of the OS 
    error_log("Error : [$errno] $errstr - $errfile:$errline".PHP_EOL , 3 , "ERROR_LOG.txt") ; 

}
set_error_handler("logError")  ;

