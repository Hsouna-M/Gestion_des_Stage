<?php

namespace gestion_stage\classes;
use gestion_stage\classes\Enseignant; 
use gestion_stage\classes\Etudiant; 

class Soutenance{
    private $numJury; 
    private $dateSoutenance; 
    private $note; 
    private $nce;
    private $matricule;

    public function __construct($numJury, $dateSoutenance, $note, Etudiant $etudiant,Enseignant $enseignant){

        $this->numJury=$numJury;
        $this->dateSoutenance=$dateSoutenance;
        $this->note=$note;
        $this->nce = $etudiant->getNce();
        $this->matricule = $enseignant->getMatricule();

    }

    public function getNumJury(){return $this->numJury;}
    public function getDateSoutenance(){return $this->dateSoutenance;}
    public function getNote(){return $this->note;}
    public function getNce(){return $this->nce;}
    public function getMatricule(){return $this->matricule;}

    public function setNumJury($numJury){ $this->numJury = $numJury;}
    public function setDateSoutenance($dateSoutenance){ $this->dateSoutenance = $dateSoutenance;}


}

?>