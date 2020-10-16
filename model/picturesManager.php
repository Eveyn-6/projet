<?php
require_once('model/db.php');

function getPictures()
{
    $db = dbConnect();
    $req = $db->query ('SELECT * FROM `pictures` WHERE 1');

    return $req;
}

require_once('template.php');
 