<?php
require_once '../src/model/Add.php';
require_once '../src/connectToDb/ConnectToDb.php';

function add(){
    $add = new Add();
    $add->connection = new ConnectToDb();
    $add->addContentToDb($_POST['number_user'], $_POST['marks'], $_POST['matiere'], $_POST['observation']);
    header('Location: index.php?add=success');
}