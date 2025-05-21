<?php


include 'AutoLoader.php';
include 'ErrorHandler.php';

use gestion_stage\classes\Request;
use gestion_stage\Controller\LoginController;
use gestion_stage\Controller\ErrorController;
use gestion_stage\Controller\EtudiantController;

$request = new Request();

switch ($request->getPath()) {
    case '/':
        echo "Please go to the login page ";
        break;

    case '/login':
        $controller = new LoginController();
        if ($request->getMethod() == 'POST') {
            if (! $controller->handleLogin($_POST['login'], $_POST['password'])) $controller ->load_oopsView();
            else {
                session_start();
                $_SESSION['auth'] = true;
                $_SESSION['admin'] = $_POST['login'];
                $controller->loadView_adminPage();
            }
        } elseif ($request->getMethod() == 'GET') $controller->loadView_login();

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
        break;

    case '/soutenance/update' :
        break;

    case '/soutenance/delete' :
        break;

    case '/enseignant' :
        break;

    case '/enseignant/add' :
        break;

    case '/enseignant/delete' :
        break;

    default:
    $controller= new ErrorController()  ; 
    $controller ->loadView_BadRequest() ;
        break;
}

?>