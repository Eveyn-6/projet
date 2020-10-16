<?php
require_once('model/db.php');
function getUser()
{
    $db = dbConnect();
    $req = $db->query('SELECT * FROM `user` WHERE 1');

    return $req;
}

require_once('template.php');
 