<?php 
namespace gestion_stage\Controller ; 

class ErrorController{

    public function loadView_BadRequest(){
        include __DIR__.'/../views/BadRequest.php' ;  

    }
}