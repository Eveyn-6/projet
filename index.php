<?php

require_once("controller/frontoffice.php");

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
    
    case "deconnexion":
        deconnexion();
     break;
     
}
