<?php

namespace gestion_stage\Model ;
use gestion_stage\database\db;

class abstractModel extends db {
    public $databaseInstance ; 

    public function __construct(){ $this->databaseInstance= self::getConnexionInstance() ; }

    // public function get_databaseInstance(){ return $this->databaseInstance ;}

}

?>