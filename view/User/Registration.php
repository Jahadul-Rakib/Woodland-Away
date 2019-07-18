<?php

session_start();
include '../../vendor/autoload.php';
use App\User\User;
$reObj = new User();

if (isset($_POST['signup'])){
    $reObj->create($_POST);
}
