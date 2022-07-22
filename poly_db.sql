-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220721.830269c3ac
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 06:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poly_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_tb`
--

CREATE TABLE `order_tb` (
  `order_id` int(11) NOT NULL,
  `order_shipping` text NOT NULL,
  `order_date` datetime NOT NULL,
  `order_receipt` text NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_tb`
--

INSERT INTO `order_tb` (`order_id`, `order_shipping`, `order_date`, `order_receipt`, `order_status`, `prod_id`, `user_id`) VALUES
(1, '', '2022-07-22 05:48:15', '', 'pending', 0, 14),
(2, '', '2022-07-22 05:48:29', '', 'pending', 0, 14),
(3, 'qwe', '2022-07-22 06:01:29', '', 'pending', 0, 14),
(4, 'qwe', '2022-07-22 06:02:11', '', 'pending', 0, 14),
(5, 'qwe', '2022-07-22 06:04:42', '', 'pending', 0, 14),
(6, '', '2022-07-22 06:07:09', '', 'pending', 0, 14);

-- --------------------------------------------------------

--
-- Table structure for table `prod_img_tb`
--

CREATE TABLE `prod_img_tb` (
  `img_id` int(11) NOT NULL,
  `img_name` text NOT NULL,
  `prod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prod_img_tb`
--

INSERT INTO `prod_img_tb` (`img_id`, `img_name`, `prod_id`) VALUES
(1, '62da0f90ddba8.jpg', 21),
(2, '62da0f90de73d.jpg', 21),
(3, '62da0fd3ef6cd.jpg', 22),
(4, '62da0fd3f0976.jpg', 22);

-- --------------------------------------------------------

--
-- Table structure for table `prod_tb`
--

CREATE TABLE `prod_tb` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_des` text NOT NULL,
  `prod_img` text NOT NULL,
  `prod_amt` int(11) NOT NULL,
  `prod_price` int(11) NOT NULL,
  `prod_status` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prod_tb`
--

INSERT INTO `prod_tb` (`prod_id`, `prod_name`, `prod_des`, `prod_img`, `prod_amt`, `prod_price`, `prod_status`, `user_id`) VALUES
(21, '1234', '1234', '', 1234, 1234, 'in-stock', 14),
(22, '23412', '121234', '', 1234, 1234, 'in-stock', 14);

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_pfp` text NOT NULL,
  `user_home_address` text NOT NULL,
  `user_bank_acc` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_tel` varchar(50) NOT NULL,
  `user_cit_id` varchar(50) NOT NULL,
  `user_status` varchar(20) NOT NULL,
  `user_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`user_id`, `user_username`, `user_password`, `user_fname`, `user_lname`, `user_pfp`, `user_home_address`, `user_bank_acc`, `user_email`, `user_tel`, `user_cit_id`, `user_status`, `user_time`) VALUES
(14, 'user', 'user', 'user', 'user', '62d8c3acdc419.jpg', 'user', '1234 1234', 'user@user', '12312341414141', '234141', 'pending', '2022-07-21 05:12:49'),
(15, 'qwer', 'qwer', 'qwer', 'qwer', '62d9225324b1f.jpg', 'qwer', 'qwer qweqwer', 'qwer@qwer', 'qwerqwer', 'qqwer', 'pending', '2022-07-21 11:54:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_tb`
--
ALTER TABLE `order_tb`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `prod_img_tb`
--
ALTER TABLE `prod_img_tb`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `prod_tb`
--
ALTER TABLE `prod_tb`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_tb`
--
ALTER TABLE `order_tb`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `prod_img_tb`
--
ALTER TABLE `prod_img_tb`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prod_tb`
--
ALTER TABLE `prod_tb`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
