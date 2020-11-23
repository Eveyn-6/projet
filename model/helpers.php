<?php
function isUserConnected(){
    return isset($_SESSION['id']);
    
}

function isUserAdmin(){
    $bdd = dbConnect();
    $requser = $bdd->prepare('SELECT * FROM user WHERE id = ?');
    $requser->execute(array(
        'id' => ($_SESSION['id']),
         
    ));
    
    
}
