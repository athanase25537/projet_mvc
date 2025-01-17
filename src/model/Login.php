<?php
require_once '../src/model/Users.php';

class Login
{
    public Users $users;

    public function canConnect($username, $password, $status)
    {
        foreach($this->users->getAllUsers($status) as $user){
            if($username == $user['username'] && password_verify($password, $user['password'])){
                return true;
            }
        }
        return false;
    }
}