<?php
require_once '../src/model/GetMarks.php';
require_once '../src/connectToDb/ConnectToDb.php';
require_once '../src/model/Users.php';

function displayMarks(){
    $marks = new GetMarks();
    $marks->connection = new ConnectToDb();

    $users = new Users();
    $users->connection = new ConnectToDb();
    $user = $users->getUser($_SESSION['username'], $_SESSION['status']);
    if($_SESSION['status']=='prof') {
        $marks = $marks->getAllMarksProf($user['subject']);
        if(!empty($marks)) {
            $students = [];
            foreach($marks as $mark) {
                $students[] = $users->getUserOne($mark['number_user']);
            }
        }
    }else{
        $students = [];
        $marks = $marks->getAllMarks($user['number_user']);
    }
    return [$marks, $user, $students];
    // header('Location: index.php?add=success');
}