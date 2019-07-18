<?php

/**
 * Created by PhpStorm.
 * User: jk
 * Date: 7/14/2017
 * Time: 2:32 PM
 */
namespace App\User;
use PDO;

class User
{
    private $dbuser = 'root';
    private $dbpassword = '';
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=l570b', $this->dbuser, $this->dbpassword);

        } catch (PDOException $e) {
            echo "<pre>error: " . $e->getMessage();
        }

    }

    public function create($data=''){
/*
        print_r($data['email']);
        die();*/
        $email = "'".$data['email']."'";
        $query = "SELECT * FROM users WHERE email = $email";
        $prepair = $this->pdo->prepare($query);
        $prepair->execute();
        $userdata = $prepair->fetch(PDO::FETCH_ASSOC);
        if ($data['email'] == $userdata['email']){
            $_SESSION['EmailErrorMass'] = "<p class='alert alert-danger'>This Email Address Or Contact Number Already Exist!! </p>";
            header("location:../../signup.php");

        }if ($data['password'] != $data['password_confirmation']){
            $_SESSION['passworNotmach'] = " Password Not Match!!";
            header("location:../../signup.php");
        }
        else{
            $query2 = "INSERT INTO users (id,fname,lname,address,zip,gender,email,password,created_at) 
                          VALUES (:id,:fnam,:lname,:addr,:zip,:gender,:email,:pass,:created_at)";
            $prepair2 = $this->pdo->prepare($query2);
            $data2 = [
                ':id' => null,
                ':fnam' => $data['fname'],
                ':lname' => $data['lname'],
                ':addr' => $data['address'],
                ':zip' => $data['zip'],
                ':gender'=>$data['gender'],
                ':email' =>$data['email'],
                ':pass' => md5($data['password']),
                ':created_at' => date('Y-m-d H:m:s'),

            ];
            /*echo '<pre>';
            print_r($data);
            exit;*/
            $status= $prepair2->execute($data2);

            if ($status){
                $_SESSION['RegSuccess'] = "<p class='alert alert-success'>Reg Successfully</p>";
                header("location:../../login.php");
                //return $massage;
            }else{
                $_SESSION['RegError'] = "<p class='alert alert-danger'>Something error </p>";
                header("location:../../signup.php");
            }

        }
    }


    public function loginUser($email,$pass){
        $uemail = "'".$email."'";
        $password = "'".md5($pass)."'";

        $query = "SELECT * FROM users WHERE email = $uemail AND password = $password AND is_admin=0";
        $prepair = $this->pdo->prepare($query);

        $prepair->execute();
        $data = $prepair->fetch(PDO::FETCH_ASSOC);

        if (!empty($data)){
            $_SESSION['user_details']=$data;
            header('location:../../user-pannel.php');
        }else{
            $_SESSION['Fail'] = "Login Failed!!!!!!!!!!!";
            header('location:../../login.php');
        }
    }


    public function loginadmin($email,$pass){
       
        $uemail = "'".$email."'";
        $password = "'".md5($pass)."'";

        $query = "SELECT * FROM users WHERE email = $uemail AND password = $password AND is_admin=1";
        $prepair = $this->pdo->prepare($query);

        $prepair->execute();
        $data = $prepair->fetch(PDO::FETCH_ASSOC);
       

        if (!empty($data)){
            $_SESSION['admin_details']=$data;
            header('location:../../admin/index.php');
        }else{
            $_SESSION['admin_detailsFail'] = "<p style='color: red' class='alert alert-danger'>Login Failed!!!!!!!!!!!</p>";
            header('location:../../admin/login.php');
        }
    }
    public function alluser(){
        $query = "SELECT * FROM users";
        $prepair = $this->pdo->prepare($query);

        $prepair->execute();
        $data = $prepair->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

}