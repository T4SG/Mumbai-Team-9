-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 11, 2015 at 02:35 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gnsd0405`
--

-- --------------------------------------------------------

--
-- Table structure for table `evnt`
--

CREATE TABLE IF NOT EXISTS `evnt` (
  `eid` int(10) NOT NULL AUTO_INCREMENT,
  `ename` varchar(50) NOT NULL,
  `location` varchar(30) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `age` varchar(20) NOT NULL,
  `link` varchar(200) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `evnt`
--

INSERT INTO `evnt` (`eid`, `ename`, `location`, `genre`, `age`, `link`) VALUES
(1, 'Haider', 'Mumbai', 'Movie', '-', 'Haider Movie Tickets Online Booking. Reviews and Show Timings.html');

-- --------------------------------------------------------

--
-- Table structure for table `postdetails`
--

CREATE TABLE IF NOT EXISTS `postdetails` (
  `year` varchar(50) NOT NULL,
  `tboy` bigint(20) NOT NULL,
  `tgirl` bigint(20) NOT NULL,
  `unaided_aided` tinyint(1) NOT NULL,
  `grad` bigint(20) NOT NULL,
  `tenrol` bigint(20) NOT NULL,
  `complit` bigint(20) NOT NULL,
  `class` bigint(20) NOT NULL,
  `teach` varchar(50) NOT NULL,
  `SID` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `SID` mediumint(9) NOT NULL,
  `school_name1` varchar(50) NOT NULL,
  `location1` varchar(50) NOT NULL,
  `country1` varchar(50) NOT NULL,
  `contact_person1` varchar(50) NOT NULL,
  `contact1` bigint(20) NOT NULL,
  `username1` varchar(50) NOT NULL,
  `password1` varchar(50) NOT NULL,
  `gov_private1` tinyint(1) NOT NULL,
  `email1` varchar(50) NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE IF NOT EXISTS `registered` (
  `uname` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`uname`, `pass`, `name`, `location`, `phone`, `email`) VALUES
('vicky10', '8655', 'Vikas', 'Mumbai', '8655024310', 'vikas@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
