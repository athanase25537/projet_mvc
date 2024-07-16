<?php

require_once '../src/model/Login.php';
require_once '../src/connectToDb/ConnectToDb.php';
require_once '../src/model/Users.php';

function login($username, $password, $status){
    $userToLog = new Login();
    $userToLog->users = new Users();
    $userToLog->users->connection = new ConnectToDb();
    
    if($userToLog->canConnect($username, $password, $status)){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        $_SESSION['username'] = $username;
        $_SESSION['status'] = $status;
        header('Location: index.php');
    }else {
        header('Location:index.php?action=login&status=failed');
    }
}