<?php
session_start();
include '../../vendor/autoload.php';
use App\Message\Message;
$bookObj = new Message();

if (isset($_POST['submit'])){
    $bookObj->create($_POST);
}

if (isset($_POST['csubmit'])){
    $bookObj->create2($_POST);
}