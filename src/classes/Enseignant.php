<?php
namespace gestion_stage\classes ;


class Enseignant{
    private $matricule ; 
    private $nom ; 
    private $prenom ; 

    public function __construct($matricule, $nom, $prenom){
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    //getters and setters 
    public function getMatricule(){
        return $this->matricule;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function setMatricule($matricule){
         $this->matricule = $matricule;
    }
    public function setNom($nom){
        $this->nom = $nom;
   }
   public function setPrenom($prenom){
    $this->prenom = $prenom;
    }

}
?>