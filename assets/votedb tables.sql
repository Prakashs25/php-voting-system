-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 02, 2020 at 12:27 PM
-- Server version: 10.3.20-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

DROP TABLE IF EXISTS `candidate`;
CREATE TABLE IF NOT EXISTS `candidate` (
  `CID` int(11) NOT NULL AUTO_INCREMENT,
  `UID` varchar(30) DEFAULT NULL,
  `CNAME` varchar(30) DEFAULT NULL,
  `GENDER` varchar(1) DEFAULT NULL,
  `VOTE_COUNT` int(11) DEFAULT 0,
  PRIMARY KEY (`CID`),
  KEY `UID` (`UID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`CID`, `UID`, `CNAME`, `GENDER`, `VOTE_COUNT`) VALUES
(1, '2016CSE028', 'PRAKASH S', 'M', 2),
(2, '2016CSE029', 'ROHIT RAMESH', 'M', 1),
(3, '2016CSE053', 'SWAPNA REDDY', 'F', 0),
(4, '2016CSE058', 'DEEPAK B', 'M', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `UID` varchar(30) NOT NULL,
  `PWD` varchar(30) DEFAULT NULL,
  `PROFILE` int(11) DEFAULT NULL,
  `VOTE` int(11) DEFAULT 1,
  PRIMARY KEY (`UID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`UID`, `PWD`, `PROFILE`, `VOTE`) VALUES
('user1', 'user1', 0, 0),
('user2', 'user2', 0, 0),
('user3', 'user3', 0, 0),
('user4', 'user4', 0, 1),
('user5', 'user5', 0, 1),
('user6', 'user6', 0, 1),
('admin', 'admin@123', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
