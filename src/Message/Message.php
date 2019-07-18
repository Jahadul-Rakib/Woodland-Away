<?php
/**
 * Created by PhpStorm.
 * User: jk
 * Date: 7/15/2017
 * Time: 10:49 PM
 */

namespace App\Message;
use PDO;


class Message
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

    public function create($data){
        /*print_r($data);
        die();*/

        $query = "INSERT INTO user_message (id,fullname,email,message,created_at) 
                          VALUES (:id,:fullname,:email,:message,:created_at)";
        $prepair = $this->pdo->prepare($query);
        $data = [
            ':id' => null,
            ':fullname' => $data['name'],
            ':email' =>$data['email'],
            ':message' => $data['message'],
            ':created_at' => date('Y-m-d H:m:s'),

        ];
        /*echo '<pre>';
        print_r($data);
        exit;*/
        $status= $prepair->execute($data);

        if ($status){
            $_SESSION['contactSuccess'] = "<p class='alert alert-success'> Message Has Been send!</p>";
            header("location:../../index.php");
            //return $massage;
        }else{
            $_SESSION['contactError'] = "<p class='alert alert-danger'>Something Wrong Try Again </p>";
            header("location:../../index.php");
        }


    }

    public function create2($data){
        /*print_r($data);
        die();*/

        $query = "INSERT INTO user_message (id,fullname,email,message,created_at) 
                          VALUES (:id,:fullname,:email,:message,:created_at)";
        $prepair = $this->pdo->prepare($query);
        $data = [
            ':id' => null,
            ':fullname' => $data['name'],
            ':email' =>$data['email'],
            ':message' => $data['message'],
            ':created_at' => date('Y-m-d H:m:s'),

        ];
        /*echo '<pre>';
        print_r($data);
        exit;*/
        $status= $prepair->execute($data);

        if ($status){
            $_SESSION['ccontactSuccess'] = "<p class='alert alert-success'> Message Has Been send!</p>";
            header("location:../../contact.php");
            //return $massage;
        }else{
            $_SESSION['ccontactError'] = "<p class='alert alert-danger'>Something Wrong Try Again </p>";
            header("location:../../contact.php");
        }


    }

    public function allcontact(){
        $query = "SELECT * FROM user_message ORDER BY id DESC ";
        $prepair = $this->pdo->prepare($query);

        $prepair->execute();
        $data = $prepair->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

}