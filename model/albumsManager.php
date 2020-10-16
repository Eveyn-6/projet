<?php
require_once('model/db.php');

function getAlbums()
{
    $db = dbConnect();
    $req = $db->query ('SELECT * FROM `albums` WHERE 1');

    return $req;
}

require_once('template.php');
 