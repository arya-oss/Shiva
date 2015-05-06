-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2015 at 06:57 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nitwbill`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(40) NOT NULL,
  `sanction_amt` double NOT NULL,
  `sanction_date` date NOT NULL,
  `expend_amt` double NOT NULL,
  `expend_date` date NOT NULL,
  `propos_amt` double NOT NULL,
  `propos_date` date NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`dept_id`, `dept_name`, `sanction_amt`, `sanction_date`, `expend_amt`, `expend_date`, `propos_amt`, `propos_date`) VALUES
(1, 'ECE', 100000, '2015-05-01', 50000, '2015-05-04', 25000, '2015-05-03'),
(2, 'CSE', 100000, '2015-05-01', 50000, '2015-05-04', 25000, '2015-05-03'),
(3, 'EEE', 100000, '2015-05-01', 50000, '2015-05-04', 25000, '2015-05-03'),
(4, 'MECH', 100000, '2015-05-01', 50000, '2015-05-04', 25000, '2015-05-03'),
(5, 'CIVIL', 100000, '2015-05-01', 50000, '2015-05-04', 25000, '2015-05-03'),
(6, 'CHEM', 100000, '2015-05-01', 50000, '2015-05-04', 25000, '2015-05-03'),
(7, 'MME', 100000, '2015-05-01', 50000, '2015-05-04', 25000, '2015-05-03'),
(8, 'BIOTECH', 100000, '2015-05-01', 50000, '2015-05-04', 25000, '2015-05-03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
