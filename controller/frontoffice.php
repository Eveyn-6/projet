<?php
require_once('model/db.php');
require_once('model/helpers.php');
require_once('model/userManager.php');

function user()
{
    $userManager = new UserManager();

    require_once('view/frontend/listPostsView.php');
}

// function pictures()
// {
//     $connexion = getUsers();
// }
// function albums()
// {
//     $connexion = getUsers();
// }

function home()
{

    require_once('view/homeView.php');
}
function album()
{

    require_once('view/albumView.php');
}

function urbex()
{

    require_once('view/urbexView.php');
    $title = " Urbex| Urbex";
}

function cars()
{

    require_once('view/carsView.php');
    $title = " Cars| Auto";
}

function nature()
{

    require_once('view/natureView.php');
    $title = " Nature| Nature";
}

function connexionController()
{
    $message = "Remplissez les champs:";
    $title = "Page de connexion | Connexion";
    $erreurs = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if ($_SERVER["REQUEST_METHOD"] === "POST" and isset($_POST['pseudo'])) {
            $pseudo = ($_POST['pseudo']);

            $userManager = new UserManager();
            $connexion = $userManager->getUserFromUsername($pseudo);


            $password_connect = password_verify($_POST['password'], $connexion['password']);

            if (!$connexion) {
                $erreurs[] = 'Identifiants ou MDP incorrect ! ';
            }

            if ($password_connect) {
                session_start();
                $_SESSION['id'] = $connexion['id'];
                $_SESSION['pseudo'] = $pseudo;
                header("Location: index.php?action=profil");
            }
        }
    } else {
    }
    require_once("view/connexionView.php");
}


function inscriptionController()
{
    $message = "Remplissez les champs:";
    $title = "Page d'inscription' | inscription";
    $errors = [];
    $userManager = new UserManager();
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['inscriptionView'])) {

        if (empty($_POST['pseudo']) or empty($_POST['email']) or empty($_POST['password']) or empty($_POST['password2'])) {
            $errors[] = "Veuillez remplir tous les champs demandés";
        }

        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "L'Email saisie n'est pas valide choissisez-en un autre ";
        }

        $existingUser = $userManager->getUserFromUsername($pseudo);

        if ($existingUser != false) {
            $errors[] = "Pseudo déjà utilisé choissisez-en un autre";
        }else{
            if ($_POST['password'] != $_POST['password2']) {
                $errors[] = "blabla";
            }

            if (count($errors) == 0) {
                $userManager->createUser($pseudo, $email, $_POST['password']);

                header("Location:index.php?action=profil");
            }
        }
    }
    
    require_once("view/inscriptionView.php");
}

function profilController()
{
    $message = "Bienvenue";
    $title = "profil' | profil";
    $userinfo = [];

    $userManager = new UserManager();

    if($userManager->isUserConnected()){
        $profil = $userManager->getProfil();

    } else {
        header("Location:index.php?action=connexion");
        die();
    }
    require_once("view/profilView.php");
}

function editprofilController()
{
    $message = "Veuillez remplir les champs:";
    $title = "Edition du profil' | Edition du profil";

    if (!isUserConnected()) {

        header("Location:index.php?action=connexion");
        die();
    }

    $userManager = new UserManager();
    $editprofil = $userManager->getProfil();
    $userId = $editprofil ['ID'];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $userManager->updateUser($userId, array(
            "pseudo" => $_POST['pseudo'],
            'email' => $_POST['email'],
            'password' => $_POST['password']     
        ));

        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        header("Location:index.php?action=profil");

    }
    require_once("view/editView.php");
}

//isuserconnected 
function deconnexion()
{
    session_start();
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit();
    require_once("view/profilView.php");
}


 function getUserDelete()
 {  

  $userManager = new UserManager(); 

    session_start();
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit();
}
