-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2015 at 01:15 AM
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
-- Table structure for table `economic_imp`
--

CREATE TABLE IF NOT EXISTS `economic_imp` (
  `avg_houseincm` mediumint(9) NOT NULL,
  `employment_created` mediumint(9) NOT NULL,
  `villager_staying` mediumint(9) NOT NULL,
  `cost_perchild` mediumint(9) NOT NULL,
  `volunteer_hours` mediumint(9) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`year`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `economic_imp`
--

INSERT INTO `economic_imp` (`avg_houseincm`, `employment_created`, `villager_staying`, `cost_perchild`, `volunteer_hours`, `year`) VALUES
(5000, 15, 25, 500, 5, 2010),
(5500, 16, 35, 560, 8, 2011);

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
-- Table structure for table `hff_with_without_complit`
--

CREATE TABLE IF NOT EXISTS `hff_with_without_complit` (
  `year` int(11) NOT NULL,
  `without` int(11) NOT NULL,
  `std` int(11) NOT NULL,
  `with` int(11) NOT NULL,
  PRIMARY KEY (`year`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hff_with_without_complit`
--

INSERT INTO `hff_with_without_complit` (`year`, `without`, `std`, `with`) VALUES
(2010, 55, 50, 45),
(2011, 47, 50, 65),
(2012, 49, 50, 75);

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE IF NOT EXISTS `Login` (
  `usrnm` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `pfenc` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Login`
--

INSERT INTO `Login` (`usrnm`, `pwd`, `pfenc`, `email`) VALUES
('admin', 'abc123', 'administrator', '');

-- --------------------------------------------------------

--
-- Table structure for table `postdetails`
--

CREATE TABLE IF NOT EXISTS `postdetails` (
  `year` mediumint(50) NOT NULL,
  `tboy` bigint(20) NOT NULL,
  `tgirl` bigint(20) NOT NULL,
  `unaided_aided` tinyint(1) NOT NULL,
  `grad` bigint(20) NOT NULL,
  `tenrol` bigint(20) NOT NULL,
  `complit` bigint(20) NOT NULL,
  `teach` mediumint(50) NOT NULL,
  `SID` mediumint(9) NOT NULL,
  PRIMARY KEY (`year`),
  UNIQUE KEY `SID` (`SID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postdetails`
--

INSERT INTO `postdetails` (`year`, `tboy`, `tgirl`, `unaided_aided`, `grad`, `tenrol`, `complit`, `teach`, `SID`) VALUES
(2010, 15, 20, 1, 35, 40, 25, 20, 1),
(2011, 20, 12, 0, 35, 45, 23, 10, 2),
(2012, 30, 35, 1, 45, 55, 40, 57, 3);

-- --------------------------------------------------------

--
-- Table structure for table `predetail`
--

CREATE TABLE IF NOT EXISTS `predetail` (
  `year` int(50) NOT NULL,
  `tboy` bigint(20) NOT NULL,
  `tgirl` bigint(20) NOT NULL,
  `aid` tinyint(1) NOT NULL,
  `grad` bigint(20) NOT NULL,
  `tenrol` bigint(20) NOT NULL,
  `complit` bigint(20) NOT NULL,
  `class` bigint(20) NOT NULL,
  `teach` mediumint(9) NOT NULL,
  `SID` mediumint(9) NOT NULL,
  `stdcomplit` int(11) NOT NULL,
  PRIMARY KEY (`year`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `predetail`
--

INSERT INTO `predetail` (`year`, `tboy`, `tgirl`, `aid`, `grad`, `tenrol`, `complit`, `class`, `teach`, `SID`, `stdcomplit`) VALUES
(2007, 351, 398, 1, 13, 254, 86, 0, 0, 1, 25),
(2008, 149, 145, 1, 18, 330, 35, 0, 0, 1, 28),
(2009, 100, 161, 1, 19, 300, 26, 0, 0, 1, 29);

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

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`SID`, `school_name1`, `location1`, `country1`, `contact_person1`, `contact1`, `username1`, `password1`, `gov_private1`, `email1`) VALUES
(1, 'St.Father Agnels', 'Bandra', 'India', 'Rahul bhatt', 9658423175, 'fathagnl', 'abc123', 1, 'fatheragnl@gmail.com');

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

-- --------------------------------------------------------

--
-- Table structure for table `School_infra`
--

CREATE TABLE IF NOT EXISTS `School_infra` (
  `electricity` tinyint(1) NOT NULL,
  `sqarea` mediumint(9) NOT NULL,
  `playground` tinyint(1) NOT NULL,
  `washrooms` mediumint(9) NOT NULL,
  `potable_water` tinyint(1) NOT NULL,
  `benches` mediumint(9) NOT NULL,
  `tables` mediumint(9) NOT NULL,
  `chairs` mediumint(9) NOT NULL,
  `blackboards` mediumint(9) NOT NULL,
  `fans` mediumint(9) NOT NULL,
  `noclass` mediumint(9) NOT NULL,
  `nocomputer` mediumint(9) NOT NULL,
  `lib` tinyint(1) NOT NULL,
  `cafe` tinyint(1) NOT NULL,
  `cone` tinyint(1) NOT NULL,
  `schoolid` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`schoolid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `School_infra`
--

INSERT INTO `School_infra` (`electricity`, `sqarea`, `playground`, `washrooms`, `potable_water`, `benches`, `tables`, `chairs`, `blackboards`, `fans`, `noclass`, `nocomputer`, `lib`, `cafe`, `cone`, `schoolid`) VALUES
(1, 3136, 1, 2, 1, 15, 10, 20, 10, 7, 10, 5, 1, 1, 1, 1),
(1, 3000, 0, 5, 1, 15, 17, 20, 11, 9, 16, 14, 0, 1, 0, 2),
(1, 2126, 1, 6, 1, 12, 13, 22, 11, 10, 9, 8, 1, 1, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `School_pre_post_detail_plu_pics`
--

CREATE TABLE IF NOT EXISTS `School_pre_post_detail_plu_pics` (
  `SID` mediumint(9) NOT NULL AUTO_INCREMENT,
  `preiamge` varchar(500) NOT NULL,
  `postimage` varchar(500) NOT NULL,
  `predesc` varchar(200) NOT NULL,
  `postdesc` varchar(200) NOT NULL,
  `title_pre` varchar(50) NOT NULL,
  `title_post` varchar(500) NOT NULL,
  `piedesc` varchar(500) NOT NULL,
  `complitdesc` varchar(500) NOT NULL,
  `ecoimpdesc` varchar(500) NOT NULL,
  `socioimpdesc` varchar(500) NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `School_pre_post_detail_plu_pics`
--

INSERT INTO `School_pre_post_detail_plu_pics` (`SID`, `preiamge`, `postimage`, `predesc`, `postdesc`, `title_pre`, `title_post`, `piedesc`, `complitdesc`, `ecoimpdesc`, `socioimpdesc`) VALUES
(1, 'http://ec2-52-74-27-3.ap-southeast-1.compute.amazonaws.com/p01.jpg', 'http://ec2-52-74-27-3.ap-southeast-1.compute.amazonaws.com/pr1.jpg', 'The 2007 Peru earthquake measured 8.0 on the moment magnitude scale that hit the central coast of Peru. The Peruvian government stated that 519 people were killed by the quake.', 'Following the earthquake of August 15, 2007 and the floods of 2012 and 2013, Happy Hearts Fund has rebuilt nine schools with nine computer labs. Currently we have plans for one more school to be rebui', 'Peru Earthquake', ' The Maria Auxiliadora School in Peru', 'With better efforts and increasing awareness the things get better', 'Each Happy Heart Fund school has dedicated computer lab.', 'Happy heart provides opportunities to families to develop', 'The happy heart foundation supports local economy by providing employment to the families.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
