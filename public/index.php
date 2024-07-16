<?php
require '../src/controllers/auth.php';

if(!isConnect()){
    if(!empty($_GET)){
        if($_GET['action'] == 'register'){
            if(!empty($_POST)){
                require '../src/controllers/register.php';
                registUser();
            }else{
                require '../src/templates/register.php';
            }
        }else if($_GET['action'] == 'registerProf'){
            if(!empty($_POST)){
                require '../src/controllers/registerProf.php';
                registProf();
            }else{
                require '../src/templates/registerProf.php';
            }
        }else if($_GET['action'] == 'choices'){
            if(!empty($_POST)){
                require '../src/controllers/choices.php';
                if(isProf($_POST['pass'])) {
                    require '../src/controllers/registerProf.php';
                    registProf();
                } else {
                    require '../src/controllers/login.php';
                }
            }else{
                require '../src/templates/choices.php';
            }
            require '../src/templates/choices.php';
        }else if($_GET['action'] == 'login'){
            if(!empty($_POST)){
                require '../src/controllers/login.php';
                login($_POST['username'], $_POST['password'], $_POST['status']);
            }else{
                require '../src/templates/login.php';
            }
        }
    }else{
        require '../src/templates/login.php';
    }
}else{
    require_once '../src/connectToDb/ConnectToDb.php';
    require_once '../src/model/Users.php';
    $users = new Users;
    $users->connection = new ConnectToDb;
    $user = $users->getUser($_SESSION['username'], $_SESSION['status']);
    if(!empty($_GET['action'])){
        if($_GET['action'] === 'add'){
            if(!empty($_POST)){
                require '../src/controllers/add.php';
                add();
            }else{
                require '../src/templates/add.php';
            }
        }
    }
    if(!empty($_GET['add'])){
    }

    require '../src/controllers/marks.php';
    $marks = displayMarks()[0];
    $user = displayMarks()[1];
    $students = displayMarks()[2];
    require '../src/templates/homePage.php';
}
