-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2019 at 05:18 AM
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
-- Table structure for table `internships_view`
--

CREATE TABLE `internships_view` (
  `Category` varchar(25) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `Details` varchar(70) NOT NULL,
  `Duration` int(4) NOT NULL,
  `Skills` varchar(30) NOT NULL,
  `Last_date` date NOT NULL,
  `Stipend` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internships_view`
--

INSERT INTO `internships_view` (`Category`, `Email`, `company_name`, `Location`, `Details`, `Duration`, `Skills`, `Last_date`, `Stipend`) VALUES
('WordPress Development', 'ashok@gmail.com', 'Redfab', 'Work From Home', 'About the work from home job/internship:\r\nSelected intern\'s day-to-day', 2, 'WordPress', '2020-02-15', 3000),
('Campus Ambassador', 'aak@gmail.com', 'avin', 'gunupur', 'We are a technology company on a mission to equip students with releva', 6, 'Adobe Premiere Pro and Adobe A', '2019-09-30', 3000),
('Visual Content Developmen', 'chayan@gmail.com', 'chandu', 'dhanbad', 'SciTech Centre is a government recognized R&D facility innovating cutt', 6, 'Java (Learn Java), HTML (Learn', '2019-10-05', 3000),
('abcd', 'a@b.c', 'gunupur', 'giet', 'jwrkgkwb', 1, 'hgwkrb', '2019-12-31', -1),
('jgh', 'a@b.c', 'hkj', 'ih', ',jb', 6, 'lkbhl', '2019-09-28', 7);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
