<?php

session_start();
include '../../vendor/autoload.php';
use App\Question\Question;
$quesObj = new Question();

if (isset($_POST['qsub'])) {
	$quesObj->store($_POST);
}

if (isset($_POST['anssubmit'])) {
	$quesObj->ansstore($_POST);
}