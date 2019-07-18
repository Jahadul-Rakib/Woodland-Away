<?php
/**
 * Created by PhpStorm.
 * User: jk
 * Date: 7/14/2017
 * Time: 6:27 PM
 */

namespace App\Price;
use PDO;


class Price
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

    public function price(){

            $query = "SELECT * FROM ticket_prices";
            $prepair = $this->pdo->prepare($query);
            $prepair->execute();
            $postdata = $prepair->fetchAll(PDO::FETCH_ASSOC);
            return $postdata;
    }

}