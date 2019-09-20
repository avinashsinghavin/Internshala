-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2019 at 05:13 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internships`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Name` varchar(50) NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Phone_no` decimal(10,0) NOT NULL,
  `Student` tinyint(1) NOT NULL,
  `Employer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Name`, `Email_id`, `Password`, `Phone_no`, `Student`, `Employer`) VALUES
('abhishekpanday', 'abhishek@gmail.com', '1234', '8989098789', 1, 0),
('akash', 'akash@gmail.com', 'akash', '875323245', 0, 1),
('aman', 'aman@gmail.com', 'aman', '9999999999', 1, 0),
('ashok', 'ashok@gmail.com', 'abcd', '9999989090', 0, 1),
('Avinash Kumar Singh', 'avinashsingh1152@gmail.com', '1234', '7033526043', 1, 0),
('chayan', 'chayan@gmail.com', 'chayan', '9890543212', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `Email_id` (`Email_id`),
  ADD UNIQUE KEY `Phone_no` (`Phone_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
