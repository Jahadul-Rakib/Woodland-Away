<?php
/**
 * Created by PhpStorm.
 * User: jk
 * Date: 7/15/2017
 * Time: 1:53 AM
 */

namespace App\Question;
use PDO;


class Question
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

    public function store($data){

        $query2 = "INSERT INTO  question (qid,uid,email,question) 
                          VALUES (:qid,:uid,:email,:question)";
        $prepair2 = $this->pdo->prepare($query2);
        $data2 = [
            ':qid' => null,
            ':uid' => $data['id'],
            ':email' => $data['email'],
            ':question' => $data['question']

        ];
        /*echo '<pre>';
        print_r($data);
        exit;*/
        $status= $prepair2->execute($data2);

        if ($status){
            $_SESSION['qSuccess'] = "<p class='alert alert-success'>Question Successfully</p>";
            header("location:../../comunityforum.php");
            //return $massage;
        }else{
            $_SESSION['qSuccess'] = "<p class='alert alert-danger'>Something error </p>";
            header("location:../../comunityforum.php");
        }

    }

    public function allQuestions(){
        $query = "SELECT * FROM question ORDER BY qid DESC";
        $prepair = $this->pdo->prepare($query);
        $prepair->execute();
        $data = $prepair->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function allans($qid){
        $qide = "'".$qid."'";
        $query = "SELECT * FROM ans where qid =$qide ORDER BY qid DESC";
        $prepair = $this->pdo->prepare($query);
        $prepair->execute();
        $data = $prepair->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }




    public function ansstore($data){

        $query2 = "INSERT INTO  ans (ansid,qid,email,ans) 
                          VALUES (:ansid,:qid,:email,:ans)";
        $prepair2 = $this->pdo->prepare($query2);
        $data2 = [
            ':ansid' => null,
            ':qid' => $data['qid'],
            ':email' => $data['email'],
            ':ans' => $data['answar']

        ];
        /*echo '<pre>';
        print_r($data);
        exit;*/
        $status= $prepair2->execute($data2);

        if ($status){
            $_SESSION['ansSuccess'] = "<p class='alert alert-success'>Answer Successfully</p>";
            header("location:../../allquestions.php");
            //return $massage;
        }else{
            $_SESSION['ansSuccess'] = "<p class='alert alert-danger'>Something error </p>";
            header("location:../../allquestions.php");
        }

    }




}