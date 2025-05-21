<?php 

namespace gestion_stage\classes ; 

class Request{

    private $domain ; 
    private $path ; 
    private $method ; 

    public function __construct() {
        $this->domain = $_SERVER['HTTP_HOST'];
        $this->path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);  
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    public function getDomain() : string{ return $this->domain; }
    public function getPath() : string { return $this->path; }
    public function getMethod() : string{ return $this->method; }
}

