<?php
function isUserConnected(){
    return isset($_SESSION['id']);   
}

function isUserAdmin(){
    if (isUserConnected()){ 
    $bdd = dbConnect();
  
    $requser = $bdd->prepare('SELECT * FROM user WHERE id = :id');
    $requser->execute(array(
    'id' => ($_SESSION['id']),  
    ));    
   $user= $requser ->fetch();
    $requser->closeCursor();
    return $user['administrateur'];
 }  
 else{
    return false;
 } 
}
 

 