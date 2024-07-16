<?php
function registProf(){
    require_once '../src/model/RegisterProf.php';
    require_once '../src/connectToDb/ConnectToDb.php';
    require_once '../src/model/Users.php';
    $newUser = new RegisterProf();
    $newUser->connection = new ConnectToDb();
    $newUser->users = new Users;
    $newUser->users->connection = new ConnectToDb();
    if(isset($_POST['username'])) {
        if($newUser->isValidUserName($_POST['username'], 'prof')){
            $newUser->insertToDb(
                $_POST['name'],
                $_POST['firstname'],
                $_POST['number_prof'],
                $_POST['email'],
                $_POST['username'],
                $_POST['password'],
                $_POST['photo'],
                $_POST['subject']
            );
            require '../src/templates/login.php';
        }else{
            require '../src/templates/registerProf.php';
        }
    } else {
        require '../src/templates/registerProf.php';
    }
    
    
}