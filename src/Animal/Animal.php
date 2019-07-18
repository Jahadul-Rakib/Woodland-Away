<?php
/**
 * Created by PhpStorm.
 * User: jk
 * Date: 7/15/2017
 * Time: 1:53 AM
 */

namespace App\Animal;
use PDO;


class Animal
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

        $query2 = "INSERT INTO  animals (id,name,description,image,created_at) 
                          VALUES (:id,:name,:description,:image,:created_at)";
        $prepair2 = $this->pdo->prepare($query2);
        $data2 = [
            ':id' => null,
            ':name' => $data['name'],
            ':description' => $data['description'],
            ':image' => $data['image'],
            ':created_at' => date('Y-m-d H:m:s'),

        ];
        /*echo '<pre>';
        print_r($data);
        exit;*/
        $status= $prepair2->execute($data2);

        if ($status){
            $_SESSION['animalSuccess'] = "<p class='alert alert-success'>Booking Successfully</p>";
            header("location:../../admin/animals.php");
            //return $massage;
        }else{
            $_SESSION['animalError'] = "<p class='alert alert-danger'>Something error </p>";
            header("location:../../admin/add_animals.php");
        }

    }

    public function allAnimals(){
        $query = "SELECT * FROM animals ORDER BY id DESC ";
        $prepair = $this->pdo->prepare($query);

        $prepair->execute();
        $data = $prepair->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

}