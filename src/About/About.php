<?php
/**
 * Created by PhpStorm.
 * User: jk
 * Date: 7/15/2017
 * Time: 9:24 PM
 */

namespace App\About;
use PDO;


class About
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

    public function update($data){

        $title = $data['title'];
        $content = $data['content'];
        $image = $data['image'];

        $query = "UPDATE about set
                      title = '$title',
                      content = '$content',
                      image = '$image',
                      created_at = date('Y-m-d H:m:s')
                      WHERE id = 1
                      ";
        $prepair = $this->pdo->prepare($query);
        $status = $prepair->execute();

        if ($status){
            $_SESSION['addAboutSuccess'] = "<p class='alert alert-success'>Add Successfully</p>";
            header("location: ../../admin/add_about_content.php");
        }

    }

    public function show(){
        $query = "SELECT * FROM about ORDER BY id DESC ";
        $prepair = $this->pdo->prepare($query);

        $prepair->execute();
        $data = $prepair->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

}