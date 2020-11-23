<?php
require_once('model/db.php');
require_once('model/helpers.php');

function user()
{
    $connexion = getUser();

    require_once('view/frontend/listPostsView.php');
}

function pictures()
{
    $connexion = getUser();
}
function albums()
{
    $connexion = getUser();
}

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
            $bdd = dbConnect();
            $insert = $bdd->prepare('SELECT id, password FROM user WHERE pseudo = :pseudo');
            $insert->execute(array(
                'pseudo' => $pseudo
            ));
            $connexion = $insert->fetch();
            $insert->closeCursor();
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

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['inscriptionView'])) {

        if (empty($_POST['pseudo']) or empty($_POST['email']) or empty($_POST['password']) or empty($_POST['password2'])) {
            $errors[] = "Veuillez remplir tous les champs demandés";
        }

        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "L'Email saisie n'est pas valide choissisez-en un autre ";
        }

        $bdd = dbconnect();
        $insert = $bdd->prepare('SELECT * FROM user WHERE  pseudo = :pseudo');
        $insert->execute(array(
            'pseudo' => $pseudo
        ));
        $resultat = $insert->fetch();
        if ($resultat != false) {
            $errors[] = "Pseudo déjà utilisé choissisez-en un autre";
        }

        if ($_POST['password'] == $_POST['password2']) {

            if (count($errors) == 0) {
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $insert = $bdd->prepare('INSERT INTO `user`(`pseudo`, `email`, `password`,`date`) VALUES (:pseudo,:email, :password, CURRENT_DATE())');
                $insert->execute(array(
                    'pseudo' => $pseudo,
                    'password' => $password,
                    'email' => $email

                ));

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

    $bdd = dbConnect();
    if (isset($_SESSION) && isset($_SESSION['id'])) {
        $getid = intval($_SESSION['id']);
        $requser = $bdd->prepare('SELECT * FROM user WHERE id = ?');
        $requser->execute(array($getid));
        $userinfo = $requser->fetch();
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

    $bdd = dbConnect();

    if (isset($_SESSION) && isset($_SESSION['id'])) {
        $getid = intval($_SESSION['id']);
        $requser = $bdd->prepare('SELECT * FROM user WHERE id = ?');
        $requser->execute(array($getid));
        $user = $requser->fetch();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $requser = $bdd->prepare('UPDATE `user` SET `pseudo`= :pseudo,`email`= :email,`password`= :password WHERE id= :id');
            $requser->execute(array(
                'id' => $user['ID'],
                'pseudo' => $_POST['pseudo'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
            ));
            header("Location:index.php?action=profil");
        }
    }
    require_once("view/editView.php");
}


function deconnexion()
{
    session_start();
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit();
    require_once("view/profilView.php");
}


function deleteUserCount()
{
    $id = ($_SESSION['id']);
    $bdd = dbConnect();
    $req = $bdd->prepare('DELETE FROM user WHERE id= :id');
    $req->execute(array(
        'id' => $id
    ));
    $req->closeCursor();
    session_start();
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit();
}
