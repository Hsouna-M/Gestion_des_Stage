<?php


include 'AutoLoader.php';
include 'ErrorHandler.php';

// this project still needs session handling and security stuff 
// this is it , i might implement an agent in this project some day i dont know 
use gestion_stage\classes\Request;
use gestion_stage\Controller\EnsController;
use gestion_stage\Controller\LoginController;
use gestion_stage\Controller\ErrorController;
use gestion_stage\Controller\EtudiantController;
use gestion_stage\Controller\soutController;

$request = new Request();

switch ($request->getPath()) {
    case '/':
        header('location: /login'); 
        break;

    case '/logout':
        session_reset() ;
        header('location: /login'); 
        break;
        
    case '/login':
        $controller = new LoginController();
        if (! $_SESSION['auth']){
            if ($request->getMethod() == 'POST') {
                if (! $controller->handleLogin($_POST['login'], $_POST['password'])) $controller ->load_oopsView();
                else {
                    session_start();
                    $_SESSION['auth'] = true;
                    $_SESSION['admin'] = $_POST['login'];
                    $controller->loadView_adminPage();
                }
            } elseif ($request->getMethod() == 'GET') $controller->loadView_login();
    }else $controller->loadView_adminPage() ;

        break;

//student part
    case '/etudiant':
        $controller =new EtudiantController() ; 
        $controller->fetch_listEtudiant() ;
        break ;

    case '/etudiant/add' :
        $controller = new EtudiantController() ; 
        if ($request->getMethod() == 'GET') $controller->loadView_etudiantForm() ;
        elseif ( $request->getMethod() == 'POST') $controller ->addEtudiant($_POST['nce'], $_POST['nom'],$_POST['prenom'],$_POST['classe']) ; 
        break;

    case '/etudiant/update' :
        $controller = new EtudiantController() ; 
        if($request->getMethod() == 'GET') $controller->getEtudiantUpdateView($_GET['nce']) ;
        elseif($request->getMethod() == 'POST') $controller->updateEtudiant($_POST['nce'],$_POST['nom'],$_POST['prenom'],$_POST['classe']);
        break;

    case '/etudiant/delete' :
        $controller =new EtudiantController ; 
        if ($request ->getMethod() == 'POST') $controller->deleteEtudiant($_POST['nce']) ;
        break;

//soutenance routing 
    case '/soutenance' :
        $controller = new soutController() ; 
        $controller->fetchSout() ;
        break;

    case '/soutenance/update' :
        $controller = new soutController() ; 
        if($request->getMethod() == 'GET') $controller->getUpdateView($_GET['numjury']) ;
        elseif($request->getMethod() == 'POST') $controller->update($_POST['numjury'],$_POST['date'],$_POST['note']);
        break;

    case '/soutenance/add' :
        $controller = new soutController() ; 
        if ($request->getMethod() == 'GET') $controller->loadView_Form() ;
        elseif ( $request->getMethod() == 'POST') $controller->add($_POST['numjury'], $_POST['date'],$_POST['note'],$_POST['nce'],$_POST['matricule']) ; 
        break;

    case '/soutenance/delete' :
        $controller =new soutController() ; 
        if ($request ->getMethod() == 'POST') $controller->delete($_POST['numjury']) ;
        break;


    case '/enseignant' :
        $controller = new EnsController() ; 
        $controller->fetchEns() ;
        break;

    case '/enseignant/add' :
        $controller = new EnsController() ; 
        if ($request->getMethod() == 'GET') $controller->loadView_Form() ;
        elseif ( $request->getMethod() == 'POST') $controller->add($_POST['matricule'], $_POST['nom'],$_POST['prenom']) ; 
        break;

    case '/enseignant/update' :
        $controller = new EnsController() ; 
        if($request->getMethod() == 'GET') $controller->getUpdateView($_GET['matricule']) ;
        elseif($request->getMethod() == 'POST') $controller->update($_POST['matricule'],$_POST['nom'],$_POST['prenom']);
        break;
        
    case '/enseignant/delete' :
        $controller =new EnsController() ; 
        if ($request ->getMethod() == 'POST') $controller->delete($_POST['matricule']) ;
        break;

    default:
    $controller= new ErrorController()  ; 
    $controller ->loadView_BadRequest() ;
        break;
}

?>