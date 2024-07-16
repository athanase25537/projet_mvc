<?php
function registUser(){
    require_once '../src/model/Register.php';
    require_once '../src/connectToDb/ConnectToDb.php';
    require_once '../src/model/Users.php';
    $newUser = new Register();
    $newUser->connection = new ConnectToDb();
    $newUser->users = new Users;
    $newUser->users->connection = new ConnectToDb();

    if($newUser->isValidUserName($_POST['username'], 'et')){
        $newUser->insertToDb(
            $_POST['name'],
            $_POST['firstname'],
            $_POST['birth'],
            $_POST['email'],
            $_POST['tel'],
            $_POST['username'],
            $_POST['password'],
            $_POST['photo'],
            'et',
            $_POST['number_user'],
            'igglia'
        );
        require '../src/templates/login.php';
    }else{
        require '../src/templates/register.php';
    }
    
}