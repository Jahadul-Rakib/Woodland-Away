<?php
/**
 * Created by PhpStorm.
 * User: jk
 * Date: 7/15/2017
 * Time: 1:49 AM
 */
session_start();
include '../../vendor/autoload.php';
use App\Package\Package;


if (isset($_POST['pacSubmit'])) {
    # code...
if (isset($_FILES['pacimg'])){
    $errors = array();
    $file_name = time().$_FILES['pacimg']['name'];
    $file_size = $_FILES['pacimg']['size'];
    $file_tempname = $_FILES['pacimg']['tmp_name'];
    $file_type = $_FILES['pacimg']['type'];

    /*$file_ext = strtolower(end(explode('.',$_FILES['pacimg']['name'])));

    $file_format = array("jpeg","jpg","png");

    if (in_array($file_ext,$file_format)== false ){
        $errors[] = "Please Upload only jpeg or png file";
    }
*/

    if ($file_size >2097152 ){
        $errors[] = "File size Must be excately 2MB";
    }

    if (empty($errors) == true){
        move_uploaded_file($file_tempname,"../../upload/".$file_name);
        $_POST['image'] = $file_name;
    }else{
        print_r($errors);
    }
    $obj = new Package();
    $obj->store($_POST);


    /*print_r($file_ext);*/
}

}
