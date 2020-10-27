<?php
function isUserConnected(){
    return isset($_SESSION['id']);
    
}
