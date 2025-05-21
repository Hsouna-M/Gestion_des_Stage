<?php

namespace gestion_stage\Controller;

use gestion_stage\classes\Etudiant;
use gestion_stage\Model\etudiantModel;
use gestion_stage\Controller\abstractController;

/// i got to create the model instance every time i want to make an operation in every method 
class EtudiantController extends abstractController
{

    public function loadView_etudiantForm()
    {
        include __DIR__ . "/../views/etudiantForm.php";
    }
    public function deleteEtudiant($nce)
    {

        //this will cause the same prblm
        $model = new etudiantModel();
        if ($model->remove_by_nce($nce)) {
            header("location: /etudiant") ;
        } else {
            $this->load_oopsView();
        }
    }

    public function fetch_listEtudiant()
    {
        $model = new etudiantModel();
        $etudiantList = $model->fetchAllEtudiant();
        if ($etudiantList != null) include __DIR__ . "/../views/etudiantList.php";
        else $this->load_oopsView();
    }

    public function addEtudiant($nce, $nom, $prenom, $classe)
    {

        //im creating the model object twice think about it 
        $thismodel = new etudiantModel();
        $etudiant = new Etudiant($nce, $nom, $prenom, $classe);

        // var_dump($etudiant); 
        $thismodel->create($etudiant);
        header("location: /etudiant"); 
    }

    public function getEtudiantUpdateView($nce) {

        //im creating the model object twice think about it 
        $model = new etudiantModel();
        $etudiantInstance= $model->readBy_nce($nce) ;
        //read the student by nce and store it in a student object
        include __DIR__."/../views/etudiantUpdateView.php" ;
    }

    public function updateEtudiant($nce, $nom, $prenom, $classe){
        $model = new etudiantModel() ;
        $etudiantInstance= new Etudiant($nce, $nom, $prenom, $classe);
        $model->update($etudiantInstance) ;
        //this will handle the post request
        header("location: /etudiant"); 

    }
    }





?>