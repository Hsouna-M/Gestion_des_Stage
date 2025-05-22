<?php
namespace gestion_stage\Controller;

use gestion_stage\classes\Enseignant;
use gestion_stage\Controller\abstractController;
use gestion_stage\Model\enseignantModel;

/// i got to create the model instance every time i want to make an operation in every method 
class EnsController extends abstractController {

    public function loadView_Form() { include __DIR__ . "/../views/enseignantForm.php"; }


    public function delete($matricule) {
        
        //this will cause the same prblm
        $model = new enseignantModel();
        // you have to return a true or flase 
        if ($model->remove($matricule)) {
            header("location: /enseignant") ;
        } else {
            $this->load_oopsView();
        }
    }

    public function add($matricule, $nom, $prenom ) {

        //im creating the model object twice think about it 
        $thismodel = new enseignantModel();
        $ens = new Enseignant($matricule, $nom, $prenom );
        var_dump($ens); 
        $thismodel->create($ens);
        header("location: /enseignant"); 
    }

    public function fetchEns() {
        
        $model = new enseignantModel();
        $ensList = $model->fetchAllEns();
        if ($ensList != null) include __DIR__ . "/../views/enseignantList.php";
        else $this->load_oopsView();
    }

    public function ajouterEns($matricule, $nom, $prenom)
    {

        //im creating the model object twice think about it 
        $thismodel = new enseignantModel();
        $ens = new Enseignant($matricule, $nom, $prenom);

        // var_dump($etudiant); 
        $thismodel->create($ens);
        header("location: /enseignant"); 
    }

    public function getUpdateView($matricule) {
        
        //im creating the model object twice think about it 
        $model = new enseignantModel();
        $ens= $model->readBy_matricule($matricule) ;
        //read the student by nce and store it in a student object
        include __DIR__."/../views/enseignantUpdateView.php" ;
    }

    public function update($matricule, $nom, $prenom){
        $model = new enseignantModel() ;
        $ens= new Enseignant($matricule, $nom, $prenom);
        $model->update($ens) ;
        //this will handle the post request
        header("location: /enseignant"); 

    }
    }





