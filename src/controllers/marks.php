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
    $numberUser = ($_SESSION['status'] !== 'prof') ? $user['number_user'] : 0;
    $marks = $marks->getAllMarks($numberUser);
    return [$marks, $user];
    // header('Location: index.php?add=success');
}