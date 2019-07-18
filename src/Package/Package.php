<?php
/**
 * Created by PhpStorm.
 * User: jk
 * Date: 7/15/2017
 * Time: 1:53 AM
 */

namespace App\Package;
use PDO;


class Package
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

        $query1 = "INSERT INTO  packages(id,package_name,location,description,image,start_time,end_time) 
                          VALUES (:id,:package_name,:location,:description,:image,:start_time,:end_time)";


        $prepair1 = $this->pdo->prepare($query1);
        $data1 = [
            ':id' => null,
            ':package_name' => $data['pkg_name'],
            ':location' => $data['location'],
            ':description' => $data['description'],
            ':image' => $data['image'],
            ':start_time' => $data['fromTime'],
            ':end_time' => $data['toTime'],
        ];

        $status1= $prepair1->execute($data1);
        if ($status1) {
            $lastValueQuery  = "SELECT * FROM packages ORDER BY id DESC Limit 1";
            $prepairlast = $this->pdo->prepare($lastValueQuery);
            $prepairlast->execute();
            $datalas = $prepairlast->fetch(PDO::FETCH_ASSOC);
            

        $query21 = "INSERT INTO  luxary (id,package_id,lxquantaty,price_adult,price_chield) 
                          VALUES (:id,:package_id,:lxquantaty,:price_adult,:price_chield)";
        $prepair21 = $this->pdo->prepare($query21);
        $data21 = [
            ':id' => null,
            ':package_id' => $datalas['id'],
            ':lxquantaty' => $data['luxquantaty'],
            ':price_adult' => $data['adultLaxpri'],
            ':price_chield' => $data['chieldLaxpri']
        ];
        $status21= $prepair21->execute($data21);


        $query22 = "INSERT INTO   original (id,package_id,orquantaty,price_adult,price_chield) 
                          VALUES (:id,:package_id,:orquantaty,:price_adult,:price_chield)";
        $prepair22 = $this->pdo->prepare($query22);
        $data22 = [
            ':id' => null,
            ':package_id' => $datalas['id'],
            ':orquantaty' => $data['oriQuantaty'],
            ':price_adult' => $data['adaltPrOri'],
            ':price_chield' => $data['chieldPrOri']
        ];
        $status22= $prepair22->execute($data22);

        $query23 = "INSERT INTO   contemporary (id,package_id,conquantaty,price_adult,price_chield) 
                          VALUES (:id,:package_id,:conquantaty,:price_adult,:price_chield)";
        $prepair23 = $this->pdo->prepare($query23);
        $data23 = [
            ':id' => null,
            ':package_id' => $datalas['id'],
            ':conquantaty' => $data['oriQuantaty'],
            ':price_adult' => $data['adaltPrOri'],
            ':price_chield' => $data['chieldPrOri']
        ];
        $status23= $prepair23->execute($data23);



        if ($status21 and $status22 and $status23){
            $_SESSION['addSuccess'] = "<p class='alert alert-success'>Added Successfully</p>";
            header("location:../../admin/add_package.php");
            //return $massage;
        }else{
            $_SESSION['addError'] = "<p class='alert alert-danger'>Something error </p>";
            header("location:../../admin/add_package.php");
        }

    }

    }

    public function allPackage(){
        $query = "SELECT packages.*, luxary.lxquantaty,luxary.price_adult as lxprad,luxary.price_chield as lxprch,original.orquantaty, original.price_adult as orpadult, original.price_chield as orprich,contemporary.conquantaty,contemporary.price_adult as conpriadu, contemporary.price_chield as conprichi FROM packages left Join luxary ON packages.id = luxary.package_id left Join original on packages.id = original.package_id left join contemporary on packages.id = contemporary.package_id ORDER BY packages.id DESC";
        $prepair = $this->pdo->prepare($query);
        $prepair->execute();
        $data = $prepair->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

}