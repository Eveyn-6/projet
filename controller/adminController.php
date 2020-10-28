<?php
function adminHome()
{ 
    
}
function userManagement()
{
    $bdd = dbConnect();
    $req = $bdd -> query('SELECT * FROM user') ;
    $membres= $req->fetchAll();
    $req -> closeCursor(); 
    
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
    $bdd = dbConnect();
    $req = $bdd -> prepare('DELETE FROM user WHERE id= :id') ;
     $req->execute(array(
         'id'=> $id 
     ));
    $req -> closeCursor(); 
    session_start();
    session_unset();
    session_destroy();
    require_once('view/admin/userManagement.php');
}
