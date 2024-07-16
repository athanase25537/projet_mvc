<?php

require_once '../src/model/Login.php';
require_once '../src/connectToDb/ConnectToDb.php';
require_once '../src/model/Users.php';

function isProf($password){
    if($password=='admin') return true;
    return false;
}