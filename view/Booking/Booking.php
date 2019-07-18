<?php


session_start();
include '../../vendor/autoload.php';
use App\Booking\Booking;
$bookObj = new Booking();
if (isset($_POST['book'])) {
	$bookObj->bookingTicket($_POST);
}

if (isset($_POST['updateBooking'])) {
	
	$bookObj->updateBooking($_POST);
}
