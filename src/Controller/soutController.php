<?php

namespace gestion_stage\Controller;

use gestion_stage\classes\Etudiant;
use gestion_stage\classes\Soutenance;
use gestion_stage\classes\Enseignant;
use gestion_stage\Controller\abstractController;
use gestion_stage\Model\hybridModel;

class soutController extends abstractController
{

    public function loadView_Form()
    {
        include __DIR__ . "/../views/soutForm.php";
    }

    public function fetchSout()
    {

        $model = new hybridModel();
        $soutList = $model->fetchSout();
        if ($soutList != null) include __DIR__ . "/../views/soutList.php";
        else $this->load_oopsView();
    }

    public function delete($numJury)
    {

        $model = new hybridModel();
        // you have to return a true or flase 
        if ($model->remove($numJury)) {
            header("location: /soutenance");
        } else {
            $this->load_oopsView();
        }
    }


    public function add($numjury, $date, $note, $nce, $matricule)
    {

        //im creating the model object twice think about it 
        $model = new hybridModel();
        $etud = $model->readBy_nce($nce);
        $etudiant = new Etudiant($etud['nce'],$etud['nom'],$etud['prenom'],$etud['classe']);

        $ens = $model->readBy_matricule($matricule);
        $enseignant = new Enseignant($ens['matricule'],$ens['nom'],$ens['prenom']);
        
        $soutenance = new Soutenance($numjury,$date,$note,$etudiant,$enseignant) ;
        $model->create($soutenance);

        header("location: /soutenance"); 
    }

    public function getUpdateView($numJury) {
        
        //im creating the model object twice think about it 
        $model = new hybridModel();
        $sout= $model->read($numJury) ;
        //read the student by nce and store it in a student object
        include __DIR__."/../views/soutUpdateView.php" ;
    }

    public function update($numjury, $date, $note){

        $model = new hybridModel() ;
        $model->update($numjury, $date, $note) ;
        //this will handle the post request
        header("location: /soutenance"); 

    }


    // public function add($matricule, $nom, $prenom ) {

    //     //im creating the model object twice think about it 
    //     $thismodel = new enseignantModel();
    //     $ens = new Enseignant($matricule, $nom, $prenom );
    //     var_dump($ens); 
    //     $thismodel->create($ens);
    //     header("location: /enseignant"); 
    // }

    // public function ajouterEns($matricule, $nom, $prenom)
    // {

    //     //im creating the model object twice think about it 
    //     $thismodel = new enseignantModel();
    //     $ens = new Enseignant($matricule, $nom, $prenom);

    //     // var_dump($etudiant); 
    //     $thismodel->create($ens);
    //     header("location: /enseignant"); 
    // }

    // public function getUpdateView($matricule) {
        
    //     //im creating the model object twice think about it 
    //     $model = new enseignantModel();
    //     $ens= $model->readBy_matricule($matricule) ;
    //     //read the student by nce and store it in a student object
    //     include __DIR__."/../views/enseignantUpdateView.php" ;
    // }

    // public function update($matricule, $nom, $prenom){
    //     $model = new enseignantModel() ;
    //     $ens= new Enseignant($matricule, $nom, $prenom);
    //     $model->update($ens) ;
    //     //this will handle the post request
    //     header("location: /enseignant"); 

    // }


}