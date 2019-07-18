<?php
/**
 * Created by PhpStorm.
 * User: jk
 * Date: 7/15/2017
 * Time: 1:49 AM
 */
include '../../vendor/autoload.php';
use App\Animal\Animal;



if (isset($_FILES['postimg'])){
    $errors = array();
    $file_name = time().$_FILES['postimg']['name'];
    $file_size = $_FILES['postimg']['size'];
    $file_tempname = $_FILES['postimg']['tmp_name'];
    $file_type = $_FILES['postimg']['type'];

    $file_ext = strtolower(end(explode('.',$_FILES['postimg']['name'])));

    $file_format = array("jpeg","jpg","png");

    if (in_array($file_ext,$file_format)== false ){
        $errors[] = "Please Upload only jpeg or png file";
    }


    if ($file_size >2097152 ){
        $errors[] = "File size Must be excately 2MB";
    }

    if (empty($errors) == true){
        move_uploaded_file($file_tempname,"../../upload/".$file_name);
        $_POST['image'] = $file_name;
    }else{
        print_r($errors);
    }
    $obj = new Animal();
    $obj->store($_POST);


    /*print_r($file_ext);*/
}