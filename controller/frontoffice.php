<?php
require_once('model/db.php');

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

function connexionController(){
    $message = "Remplissez les champs:";
    $title = "Page de connexion | Connexion";

     
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if ($_SERVER["REQUEST_METHOD"] === "POST" and isset($_POST['pseudoconnect'])) {
            $pseudo = ($_POST['pseudoconnect']);
            $bdd = new PDO('mysql:host=localhost;dbname=pictures', 'root', '');
            $insert = $bdd->prepare('SELECT id, password FROM membres WHERE pseudo = :pseudo');
            $insert->execute(array(
                'pseudo' => $pseudo
            ));
            $connexion = $insert->fetch();
            $password_connect = password_verify($_POST['password'], $connexion['password']);
        
            if (!$connexion) {
                echo '';
            } else {
                if ($password_connect) {
                    session_start();
                    $_SESSION['id'] = $connexion['id'];
                    $_SESSION['pseudo'] = $pseudo;
                    header("Location: espace_membres/profilView.php");
                } else {
                    echo 'Identifiants ou MDP incorrect !';
                }
            }
        }
    
    }

 
    require_once("view/connexionView.php");
}

function inscriptionController(){
    $message = "Remplissez les champs:";
    $title = "Page d'inscription' | inscription";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $bdd = dbconnect();  
        if (isset($_POST['inscriptionView'])) {
            if (!empty($_POST['pseudo']) and !empty($_POST['email']) and !empty($_POST['password'] and !empty($_POST['password2']))) {
                $pseudo = htmlspecialchars($_POST['pseudo']);
                $email = htmlspecialchars($_POST['email']);
                if(filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                 
                }
                else
                {
                    $erreur = "L'Email saisie n'est pas correcte";
                }
                $insert = $bdd->prepare('SELECT * FROM user WHERE  pseudo = :pseudo');
                $insert->execute(array(
                    'pseudo' => $pseudo,
                ));
                $resultat = $insert->fetch();
                if($resultat == false)
                {       
                if ($_POST['password'] == $_POST['password2']) {
                    $password =  password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $insert = $bdd->prepare('INSERT INTO `user`(`pseudo`, `email`, `password`, `date`) VALUES (:pseudo,:email,:password, CURRENT_DATE())');
        
                    $insert->execute(array(
                        'pseudo' => $pseudo,
                        'password' => $password,
                        'email' => $email,
                    ));
                    header("Location:index.php?action=home");
                } else {
                    $erreur = "vos mots de passe ne sont pas identiques";
                }  
            }
            else{
                $erreur = "Pseudo déjà utilisé choissisez-en un autre";
                
            }
        
            } else {
                echo "Remplissez les champs pour vous inscrire";
            }
        }
        require_once("view/inscriptionView.php");
    }
    
 function profil(){
    $message = "";
    $title = "Profil' | profil";
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=pictures', 'root', '');
    if(isset($_SESSION) && isset($_SESSION['id']))
    {
        $getid = intval($_SESSION['id']);
        $requser = $bdd -> prepare('SELECT * FROM user WHERE id = ?') ;
        $requser -> execute(array($getid));
        $userinfo = $requser->fetch();
        header("Location: view/profilView.php");
    
 }
    require_once("view/profilView.php");
}
}