-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2017 at 01:32 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `l570b`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `content`, `image`, `created_at`) VALUES
(1, 'Woodlands Away', 'Woodlands Away are a new holiday company and they offer log cabin holidays in different parts of the UK. These holidays offer luxury lodges nestled deep in woodland across the Peak District and are a perfect retreat. There is a choice of three different cabins, luxury, contemporary and original.  All have a lavish style and include hot tubs. The park has a number of features including a swimming pool, restaurant and small supermarket. There are 100s of acres of peaceful woodland to explore. ', '1507904268CQiW59qWcAA3Nfn.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'See Bech', 'Not say at now.', '1507830400ws_Wanchai_Hong_Kong_1920x1200.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'ABC', 'Not say at now.', '1507830457Maldives_hotel_night_scenery_widescreen_wallpaper_1680x1050_4_505bea0719c60_627637.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ans`
--

CREATE TABLE `ans` (
  `ansid` int(10) NOT NULL,
  `qid` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `package_id` int(11) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL,
  `cabin_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `email`, `package_id`, `start_date`, `end_date`, `cabin_type`) VALUES
(1, 'rakib38@diit.info', 1, '1-10-2017', '5-10-2017', 'Luxary'),
(2, 'rakib38@diit.info', 1, '1-10-2017', '5-10-2017', 'Original');

-- --------------------------------------------------------

--
-- Table structure for table `contemporary`
--

CREATE TABLE `contemporary` (
  `id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `conquantaty` int(11) DEFAULT NULL,
  `price_adult` varchar(20) DEFAULT NULL,
  `price_chield` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contemporary`
--

INSERT INTO `contemporary` (`id`, `package_id`, `conquantaty`, `price_adult`, `price_chield`) VALUES
(1, 1, 1, '$1000', '$1000');

-- --------------------------------------------------------

--
-- Table structure for table `luxary`
--

CREATE TABLE `luxary` (
  `id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `lxquantaty` int(11) DEFAULT NULL,
  `price_adult` varchar(20) DEFAULT NULL,
  `price_chield` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `luxary`
--

INSERT INTO `luxary` (`id`, `package_id`, `lxquantaty`, `price_adult`, `price_chield`) VALUES
(1, 1, 1, '$800', '$800');

-- --------------------------------------------------------

--
-- Table structure for table `original`
--

CREATE TABLE `original` (
  `id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `orquantaty` int(11) DEFAULT NULL,
  `price_adult` varchar(20) DEFAULT NULL,
  `price_chield` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `original`
--

INSERT INTO `original` (`id`, `package_id`, `orquantaty`, `price_adult`, `price_chield`) VALUES
(1, 1, 1, '$600', '$600');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `start_time` varchar(20) NOT NULL,
  `end_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_name`, `location`, `description`, `image`, `start_time`, `end_time`) VALUES
(1, 'Cox-Bazar Tour', 'Bangladesh', 'We offer you a trip in cox-bazar in our cabin with all kinds modern facilities. So, you can join with Us a enjoyable tour.', '1507831065houses-honeymoon-bungalow-maldives-water-villa-conrad-sunset-bridge-sea-beach-wallpaper-pictures-free.jpg', '1-10-2017', '30-10-2017');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qid` int(11) NOT NULL,
  `uid` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `zip` varchar(255) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1- Admin, 0- Customer',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `zip`, `gender`, `email`, `password`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 'Jahadul', 'Rakib', 'Dhaka', '1200', 'Male', '1000300@daffodil.ac', '202cb962ac59075b964b07152d234b70', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'rakib', 'hasan', 'Dhaka', '1200', 'male', 'rakibdiu2015@gmail.com', '202cb962ac59075b964b07152d234b70', 0, '2017-10-16 12:10:08', '0000-00-00 00:00:00'),
(3, '', '', '', '', 'Select Gender', '', 'd41d8cd98f00b204e9800998ecf8427e', 0, '2017-10-16 12:10:18', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_message`
--

CREATE TABLE `user_message` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_message`
--

INSERT INTO `user_message` (`id`, `fullname`, `email`, `message`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, 'Dilruba', 'rakib38@diit.info', 'Lata amazing Voice , melody , synchrony this is therapeutic for ears , Beautiful.', '2017-10-12 20:10:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ans`
--
ALTER TABLE `ans`
  ADD PRIMARY KEY (`ansid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contemporary`
--
ALTER TABLE `contemporary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `luxary`
--
ALTER TABLE `luxary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `original`
--
ALTER TABLE `original`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_message`
--
ALTER TABLE `user_message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ans`
--
ALTER TABLE `ans`
  MODIFY `ansid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contemporary`
--
ALTER TABLE `contemporary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `luxary`
--
ALTER TABLE `luxary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `original`
--
ALTER TABLE `original`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_message`
--
ALTER TABLE `user_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `contemporary`
--
ALTER TABLE `contemporary`
  ADD CONSTRAINT `contemporary_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`);

--
-- Constraints for table `luxary`
--
ALTER TABLE `luxary`
  ADD CONSTRAINT `luxary_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`);

--
-- Constraints for table `original`
--
ALTER TABLE `original`
  ADD CONSTRAINT `original_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
