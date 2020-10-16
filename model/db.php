<?php
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=pictures;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}
