<?php
function adminHome()
{ 
    $bdd = dbConnect();
    require_once('view/admin/adminHome.php');  
}

function userManagement()
{
    $userManager = new UserManager(); 

    require_once('view/admin/userManagement.php');  
}

function adminController()
{
    if (!isUserConnected()) {
        
        header("Location:index.php?action=connexion");
        die();
    }   
   require_once('view/admin/adminHome.php');
 
}

function deleteUser()
{
    $id = ($_POST['id']);
    $bdd = dbConnect();
    $req = $bdd -> prepare('DELETE FROM user WHERE id= :id') ;
     $req->execute(array(  'id'=> $id  ));      
    $req -> closeCursor(); 
    header("Location:index.php?action=userManagement");
    require_once('view/admin/userManagement.php');
}

