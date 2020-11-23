<?php

require_once("controller/frontoffice.php");
require_once("controller/adminController.php");
session_start();
$action = "home";
if(isset($_GET["action"])){
    $action = $_GET["action"];
}
switch($action){

    case "home":
        home();
    break;

    case "album":
        album();
    break;

    case "urbex":
        urbex();
    break;

    case "cars":
        cars();
    break;
    case "nature":
        nature();
    break;
    case "admin":
        adminController();
    break;
    case "userManagement":
        userManagement();
    break;
    case "adminHome":
        adminHome();
    break;
    case "delete":
       deleteUser();
    break; 
    
    case "deleteUserCount":
        getUserDelete();
     break;

    case "connexion":
        connexionController();
    break;
    
    case "inscription":
        inscriptionController();
    break;
  
    case "profil":
       profilController();
    break;

    case "editprofil":
        editprofilController();
    break;
    
    case "deconnexion":
        deconnexion();
     break;
     
}

 