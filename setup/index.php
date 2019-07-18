<?php
include_once('../dbCon.php'); 
$conn = connect(TRUE);

$sql = 'DROP DATABASE IF EXISTS l570b';
$conn->query($sql);

$sql = 'create database l570b';
if($conn->query($sql)){
	echo 'Database l570b created successfully<br>';
}

$sql = 'USE l570b';
if($conn->query($sql)){
	echo 'Database changed to l570b<br>';
}

$sql = "CREATE TABLE `l570b`.`users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `zip` varchar(255) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1- Admin, 0- Customer',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,

   PRIMARY KEY (id)

) ENGINE=InnoDB DEFAULT CHARSET=latin1";


if($conn->query($sql)){
	echo 'Table users created successfully<br>';
}

$sql0 = "INSERT INTO `users` (`fname`, `lname`, `address`, `zip`,`gender`, `email`, `password`, `is_admin`) VALUES
('Jahadul','Rakib','Dhaka','1200','Male','1000300@daffodil.ac', '202cb962ac59075b964b07152d234b70', 1)";
if($conn->query($sql0)){

	echo 'Admin login details<br>';
	echo 'Email: 1000300@daffodil.ac<br>';
	echo 'Password: 123<br>';

}

$sql1 = "CREATE TABLE `l570b`.`about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,

   PRIMARY KEY (id)

) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if($conn->query($sql1)){
	echo 'Table about created successfully<br>';
}

$sql= "INSERT INTO `about` (`title`, `content`, `image`) VALUES
('Woodlands Away', 'Woodlands Away are a new holiday company and they offer log cabin holidays in different parts of the UK. These holidays offer luxury lodges nestled deep in woodland across the Peak District and are a perfect retreat. There is a choice of three different cabins, luxury, contemporary and original.  All have a lavish style and include hot tubs. The park has a number of features including a swimming pool, restaurant and small supermarket. There are 100s of acres of peaceful woodland to explore. ', '1507904268CQiW59qWcAA3Nfn.jpg')";
 if ($conn->query($sql)) {
 	echo "Data into Table about is inserted<br>";
 }
 else{
 	echo"Data into Table about is not inserted<br>";
 }







$sql2 = "CREATE TABLE `l570b`.`animals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,

   PRIMARY KEY (id)

) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if($conn->query($sql2)){
	echo 'Table animals created successfully<br>';
}

$sql= "INSERT INTO `animals` (`name`, `description`, `image`) VALUES
('See Bech', 'Not say at now.', '1507830400ws_Wanchai_Hong_Kong_1920x1200.jpg'),
('ABC', 'Not say at now.', '1507830457Maldives_hotel_night_scenery_widescreen_wallpaper_1680x1050_4_505bea0719c60_627637.jpg')";
 if ($conn->query($sql)) {
 	echo "Data into Table animals is inserted<br>";
 }
 else{
 	echo"Data into Table animals is not inserted<br>";
 }






$sql3 = "CREATE TABLE `l570b`.`ans` (
  `ansid` int(10) NOT NULL AUTO_INCREMENT,
  `qid` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ans` varchar(100) NOT NULL,

   PRIMARY KEY (ansid)

) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT";

if($conn->query($sql3)){
	echo 'Table ans created successfully<br>';
}








$sql4 = "CREATE TABLE `l570b`.`booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `package_id` int(11) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL,
  `cabin_type` varchar(20) NOT NULL,

   PRIMARY KEY (id)

) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if($conn->query($sql4)){
	echo 'Table booking created successfully<br>';
}

$sql= "INSERT INTO `booking` (`email`, `package_id`, `start_date`, `end_date`, `cabin_type`) VALUES
('rakib38@diit.info', 1, '1-10-2017', '5-10-2017', 'Luxary'),
('rakib38@diit.info', 1, '1-10-2017', '5-10-2017', 'Original')";
 if ($conn->query($sql)) {
 	echo "Data into Table booking is inserted<br>";
 }
 else{
 	echo"Data into Table booking is not inserted<br>";
 }















$sql8 = "CREATE TABLE `l570b`.`packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(50) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `start_time` varchar(20) NOT NULL,
  `end_time` varchar(20) NOT NULL,
  PRIMARY KEY (id)

) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if($conn->query($sql8)){
	echo 'Table packages created successfully<br>';
}

$sql = "INSERT INTO `packages` (`package_name`, `location`, `description`, `image`, `start_time`, `end_time`) VALUES ('Cox-Bazar Tour', 'Bangladesh', 'We offer you a trip in cox-bazar in our cabin with all kinds modern facilities. So, you can join with Us a enjoyable tour.', '1507831065houses-honeymoon-bungalow-maldives-water-villa-conrad-sunset-bridge-sea-beach-wallpaper-pictures-free.jpg', '1-10-2017', '30-10-2017')";
 if ($conn->query($sql)) {
 	echo "Data into Table packages is inserted<br>";
 }
 else{
 	echo"Data into Table packages is not inserted<br>";
 }






$sql9 = "CREATE TABLE `l570b`.`question` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `question` varchar(255) NOT NULL,
   PRIMARY KEY (qid)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if($conn->query($sql9)){
	echo 'Table user_message created successfully<br>';
}



$sql10 = "CREATE TABLE `l570b`.`user_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (id)

) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if($conn->query($sql10)){
	echo 'Table user_message created successfully<br>';
}

$sql = "INSERT INTO `user_message` (`fullname`, `email`, `message`, `created_at`, `deleted_at`, `updated_at`) VALUES ('Dilruba', 'rakib38@diit.info', 'Lata amazing Voice , melody , synchrony this is therapeutic for ears , Beautiful.', '2017-10-12 20:10:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00')";
 if ($conn->query($sql)) {
 	echo "Data into Table user_message is inserted<br>";
 }
 else{
 	echo"Data into Table user_message is not inserted<br>";
 }








$sql5 = "CREATE TABLE `l570b`.`contemporary`(
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_id` int(11) DEFAULT NULL,
  `conquantaty` int(11) DEFAULT NULL,
  `price_adult` varchar(20) DEFAULT NULL,
  `price_chield` varchar(20) DEFAULT NULL,

PRIMARY KEY (id),
FOREIGN KEY (package_id) REFERENCES packages(id)

) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if($conn->query($sql5)){
	echo 'Table contemporary created successfully<br>';
}

$sql= "INSERT INTO `contemporary` (`package_id`, `conquantaty`, `price_adult`, `price_chield`) VALUES (1, 1, '$1000', '$1000')";
 if ($conn->query($sql)) {
 	echo "Data into Table contemporary is inserted<br>";
 }
 else{
 	echo"Data into Table contemporary is not inserted<br>";
 }





$sql6 = "CREATE TABLE `l570b`.`luxary` (
  `id` int(11) NOT NULL AUTO_INCREMENT, 
  `package_id` int(11) DEFAULT NULL,
  `lxquantaty` int(11) DEFAULT NULL,
  `price_adult` varchar(20) DEFAULT NULL,
  `price_chield` varchar(20) DEFAULT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (package_id) REFERENCES packages(id) 

) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if($conn->query($sql6)){
	echo 'Table luxary created successfully<br>';
}

$sql = "INSERT INTO `luxary` (`package_id`, `lxquantaty`, `price_adult`, `price_chield`) VALUES (1, 1, '$800', '$800')";
 if ($conn->query($sql)) {
 	echo "Data into Table luxary is inserted<br>";
 }
 else{
 	echo"Data into Table luxary is not inserted<br>";
 }







$sql7 = "CREATE TABLE `l570b`.`original` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_id` int(11) DEFAULT NULL,
  `orquantaty` int(11) DEFAULT NULL,
  `price_adult` varchar(20) DEFAULT NULL,
  `price_chield` varchar(20) DEFAULT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (package_id) REFERENCES packages(id)

) ENGINE=InnoDB DEFAULT CHARSET=latin1";
if($conn->query($sql7)){
	echo 'Table original created successfully<br>';
}

$sql = "INSERT INTO `original` (`package_id`, `orquantaty`, `price_adult`, `price_chield`) VALUES (1, 1, '$600', '$600')";
 if ($conn->query($sql)) {
 	echo "Data into Table original is inserted<br>";
 }
 else{
 	echo"Data into Table original is not inserted<br>";
 }




?>