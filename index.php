<?php

require_once("controller/frontoffice.php");

$action = "home";
if(isset($_GET["action"])){
    $action = $_GET["action"];
}

switch($action){
    case "home":
        //...
    break;
    case "connexion":
        connexionController();
    break;
    case "inscription":
        inscriptionController();
    break;
    //...
}