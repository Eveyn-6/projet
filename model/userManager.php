<?php
require_once('model/db.php');
 

class UserManager
{

    public function getUserFromUsername($username)
    {
        $bdd = dbConnect();
        $insert = $bdd->prepare('SELECT * FROM user WHERE pseudo = :pseudo');
        $insert->execute(array(
            'pseudo' => $username
        ));
        $user = $insert->fetch();
        $insert->closeCursor();

        return $user;
    }

    public function getUser($id)
    {
        $bdd = dbConnect();
        $requser = $bdd->prepare('SELECT * FROM user WHERE id = ?');
        $requser->execute(array($id));
        $userinfo = $requser->fetch();

        return $userinfo;
    }

    public function getProfil()
    {
        if ($this->isUserConnected()) {
            $getid = intval($_SESSION['id']);
            $userinfo = $this->getUser($getid);
            return $userinfo;
        }
        return null;
    }

    public function isUserConnected()
    {
        return isset($_SESSION) && isset($_SESSION['id']);
    }

    public function updateUser($userId, $data)
    {
        $bdd = dbConnect();
        $req = $bdd->prepare('UPDATE `user``pseudo`, `email`, `password`) VALUES (:pseudo,:email, :password )WHERE ID = :ID ');
        $req->execute(array(
            'ID' => $userId,
            'pseudo' => $data['pseudo'],
            'password' => $data['password'],
            'email' => $data['email'],
        ));
    }
 
    public function createUser($pseudo, $email, $password)
    {
        $bdd = dbConnect();
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $insert = $bdd->prepare('INSERT INTO `user`(`pseudo`, `email`, `password`,`date`) VALUES (:pseudo,:email, :password, CURRENT_DATE())');
        $insert->execute(array(
            'pseudo' => $pseudo,
            'password' => $password,
            'email' => $email
        ));
    }
    public function getUserDelete($id)
    {
        $bdd = dbConnect();
        $req = $bdd->prepare('DELETE FROM user WHERE id= :id');
        $req->execute(array(
            'id' => $id
        ));
    }

    public function userManagement(){
    $bdd = dbConnect();
    $req = $bdd -> query('SELECT * FROM user') ;
    $membres= $req->fetchAll();
    $req -> closeCursor(); 
    }
}
