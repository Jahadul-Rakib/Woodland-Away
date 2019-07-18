<?php
session_start();
include '../../vendor/autoload.php';
use App\User\User;
$reObj = new User();

if (isset($_POST['login'])){
    $reObj->loginUser($_POST['email'],$_POST['password']);
}

if (isset($_POST['adminlogin'])){
    $reObj->loginadmin($_POST['email'],$_POST['password']);
}