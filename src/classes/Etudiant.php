<?php

namespace gestion_stage\classes; 

class Etudiant  {

    private $nce ; 
    private $nom ; 
    private $prenom ; 
    private $classe ; 

    public function __construct($nce ,$nom ,$prenom ,$classe){
        $this->nce = $nce;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->classe = $classe;
    }

    public function setNce($nce){
        $this->nce = $nce;
    }

    public function getNce(){
        return $this->nce;
    }

    
    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getNom(){
        return $this->nom;
    }

    
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    public function getPrenom(){
        return $this->prenom;
    }    
    

    public function setClasse($classe){
        $this->classe = $classe;
    }

    public function getClasse() : string{
        return $this->classe ;
    }
    
        
    }

     