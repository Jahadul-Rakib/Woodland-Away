<?php

namespace App\Booking;
use PDO;

use App\PHPMailer\PHPMailer;
use App\PHPMailer\Exception;

/*require '../../PHPMailer/Exception.php';
require '../../PHPMailer/PHPMailer.php';*/
/*require '../../PHPMailer/SMTP.php';*/


class Booking
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



    protected function sendMail($to,$name,$subject,$content){
        //Create a new PHPMailer instance
        $mail = new PHPMailer;
        //Tell PHPMailer to use SMTP
        $mail->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 2;
        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6
        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;
        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = "ordercompany66@gmail.com";
        //Password to use for SMTP authentication
        $mail->Password = "rakib2015";
        //Set who the message is to be sent from
        $mail->setFrom('ordercompany66@gmail.com', 'Jahadul Rakib');
        //Set an alternative reply-to address
        $mail->addReplyTo('ordercompany66@gmail.com', 'Jahadul Rakib');
        //Set who the message is to be sent to
        $mail->addAddress( $to, $name);
        //Set the subject line
        $mail->Subject = $subject;
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $mail->msgHTML($content);
        //Replace the plain text body with one created manually
        $mail->AltBody = 'Your Booking Ticket is booked. Thank You.';
        //Attach an image file
        //$mail->addAttachment('images/phpmailer_mini.png');
        //send the message, check for errors
        if (!$mail->send()) {
             
            $_SESSION['mailSendMsg']= "Mailer Error: " . $mail->ErrorInfo;

        } else {
            
            $_SESSION['mailSendMsg'] = "<p class='alert alert-success'>Please Check Your Mail</p>";

        }
    }
    public function picPacTable($pacId,$table){
        $query = "SELECT * FROM $table WHERE package_id=$pacId";
        $prepair = $this->pdo->prepare($query);
        $prepair->execute();
        $data = $prepair->fetch(PDO::FETCH_ASSOC);
        echo json_encode($data);
    }

   


    public function bookingTicket($data){

            $pacId = "'".$data['id']."'";
            $cbnType = $data['cabintype'];

            if ($cbnType == 'Luxary') {
                $query = "SELECT lxquantaty FROM luxary WHERE package_id = $pacId";
            }elseif ($cbnType == 'Original') {
               $query = "SELECT orquantaty FROM original WHERE package_id = $pacId";
            }elseif ($cbnType=='Contemporary') {
                 $query = "SELECT conquantaty FROM  contemporary WHERE package_id = $pacId";
            }

        $prepair = $this->pdo->prepare($query);

        $prepair->execute();
        $datano = $prepair->fetch(PDO::FETCH_ASSOC);
/*
       $int = (int)$datano;
        var_dump((int)$datano['conquantaty']);
        die();
*/
        if (($cbnType == 'Luxary' && (int)$datano['lxquantaty']<= 0) 
            or ($cbnType == 'Original' && (int)$datano['orquantaty']<= 0) 
            or ($cbnType=='Contemporary' && (int)$datano['conquantaty']<= 0)) {
            $_SESSION['bookingError'] = "<p class='alert alert-danger'>Not Available!</p>";
                header("location:../../booking.php");
        }else{

            $query2 = "INSERT INTO  booking (id,email,package_id,start_date,end_date,cabin_type) 
                          VALUES (:id,:email,:package_id,:start_date,:end_date,:cabin_type)";
            $prepair2 = $this->pdo->prepare($query2);
            $data2 = [
                ':id'=>null,
                ':email'=>$data['email'],
                ':package_id'=>$data['id'],
                ':start_date'=>$data['startdate'],
                ':end_date'=>$data['enddate'],
                ':cabin_type'=>$data['cabintype']
                
            ];
            /*echo '<pre>';
            print_r($data);
            exit;*/

            $status= $prepair2->execute($data2);
            
            if ($cbnType == "Luxary") {
                    $query3 = "UPDATE luxary set lxquantaty=lxquantaty-1 WHERE package_id = $pacId";
            }elseif ($cbnType == "Original") {
                 $query3 = "UPDATE original set orquantaty=orquantaty-1 WHERE package_id = $pacId";   
            }elseif ($cbnType == "Contemporary") {
                
                 $query3 = "UPDATE contemporary set conquantaty=conquantaty-1 WHERE package_id = $pacId";  
               
            }

            $prepair12 = $this->pdo->prepare($query3);

             $status2 = $prepair12->execute();



            

        if ($status){
                $_SESSION['bookingSuccess'] = "<p class='alert alert-success'>Booking Successfully</p>";
                $mailSend = $this->sendMail($_SESSION['user_details']['email'], $_SESSION['user_details']['fname'], 'BookingSuccess', 'Your Booking is Successfully. Thank You.');
            
                header("location:../../booking.php?id=".$data['id']);
                //return $massage;

            }else{
                $_SESSION['bookingError'] = "<p class='alert alert-danger'>Something error </p>";
                header("location:../../booking.php?id=".$data['id']);
            }

        }

    }


  public   function allBooking(){
        $query = "SELECT * FROM booking ORDER BY id DESC ";
        $prepair = $this->pdo->prepare($query);

        $prepair->execute();
        $data = $prepair->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


    public function bookingSingleView($id){
        $query = "SELECT * FROM booking WHERE id = $id";
        $prepair = $this->pdo->prepare($query);
        $prepair->execute();
        $data = $prepair->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function updateBooking($data){
        $email = $data['email'];
        $start = $data['start_date'];
        $end = $data['end_date'];
        $room = $data['cabin_type'];
        $id = $data['id'];

        $query = "UPDATE booking set
                      start_date = '$start',
                      end_date = '$end',
                      cabin_type = '$room'
                      WHERE id = $id 
                      ";
        $prepair = $this->pdo->prepare($query);
        $status = $prepair->execute();
       
        

        if ($status){
            $_SESSION['bookingUpdatemsg'] = "<p class='alert alert-success'>Updated Successfully</p>";
            header("location: ../../admin/bookings.php");
        }else{
              $_SESSION['bookingUpdatemsg'] = "<p class='alert alert-danger'>Updated Faild!!</p>";
            header("location: ../../admin/bookings.php");
        }

    }

}