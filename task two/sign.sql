-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 25, 2014 at 07:53 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `delta`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE IF NOT EXISTS `sign` (
  `name` text NOT NULL,
  `rollnumber` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `department` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `photo` varchar(60) NOT NULL,
  PRIMARY KEY (`rollnumber`),
  UNIQUE KEY `rollnumber` (`rollnumber`),
  UNIQUE KEY `rollnumber_2` (`rollnumber`),
  UNIQUE KEY `rollnumber_3` (`rollnumber`),
  UNIQUE KEY `rollnumber_4` (`rollnumber`),
  UNIQUE KEY `rollnumber_5` (`rollnumber`),
  UNIQUE KEY `rollnumber_6` (`rollnumber`),
  UNIQUE KEY `rollnumber_7` (`rollnumber`),
  UNIQUE KEY `rollnumber_8` (`rollnumber`),
  UNIQUE KEY `rollnumber_9` (`rollnumber`),
  UNIQUE KEY `rollnumber_10` (`rollnumber`),
  UNIQUE KEY `rollnumber_11` (`rollnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`name`, `rollnumber`, `gender`, `department`, `password`, `photo`) VALUES
('Rishi', 106113077, 'male', 'Computer science', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
