-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2015 at 05:21 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vantagedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` varchar(6) NOT NULL,
  `user_type` varchar(1) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `user_name` text NOT NULL,
  `user_add_line1` text NOT NULL,
  `user_add_line2` text NOT NULL,
  `user_add_line3` text NOT NULL,
  `user_add_line4` text NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_create_date` date NOT NULL,
  `user_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_type`, `user_password`, `user_name`, `user_add_line1`, `user_add_line2`, `user_add_line3`, `user_add_line4`, `user_email`, `user_phone`, `user_create_date`, `user_active`) VALUES
('1', 'A', 'pass1', 'derek', 'add1', 'add2', 'add3', 'add4', 'derek@yahoo.ie', '01 123456', '2015-04-03', 1),
('user2', 'A', 'pass2', 'name2', 'add1', '', '', '', 'user2@gmail.com', '01 34567', '2015-04-29', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
