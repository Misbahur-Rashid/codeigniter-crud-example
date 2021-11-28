-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 11:10 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curd`
--

-- --------------------------------------------------------

--
-- Table structure for table `curd_t`
--

CREATE TABLE `curd_t` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `sports` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `portfolio` varchar(100) NOT NULL,
  `create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `curd_t`
--

INSERT INTO `curd_t` (`user_id`, `first_name`, `last_name`, `email`, `phone`, `dob`, `blood_group`, `gender`, `sports`, `address`, `portfolio`, `create_at`) VALUES
(1, 'Misbahur', 'Rashid ', 'misbahurasif3112@gmail.com', '+8801621020774', '2021-11-28', 'A+', 'Male', 'Table Tennis', 'House: 389, Road: 07, Block: F, Bashundhara R/A, Dhaka - 1229, Bangladesh', 'IMG-20211020-WA0003-removebg-preview.png', '2021-11-28'),
(2, 'Abu', 'Hanif', 'obosortravels@gmail.com', '01737474534', '2021-11-28', 'A+', 'Male', 'Cricket', 'Suit: B-8, House: 01 (Family Park-1), Road: 07, Block: J, Baridhara,', '20201105_080229.jpg', '2021-11-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curd_t`
--
ALTER TABLE `curd_t`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curd_t`
--
ALTER TABLE `curd_t`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
