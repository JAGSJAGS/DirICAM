<?php
include 'db.php';
//include_once '/includes/db.php';
class User extends DB{
    private $username;


    public function userExists($user, $pass){
        //$md5pass = md5($pass);
        $md5pass = $pass;
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user AND password = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->username = $currentUser['username'];
        }
    }

    public function getNombre(){
        return $this->username;
    }
}

?>