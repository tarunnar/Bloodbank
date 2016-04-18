-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2016 at 04:35 AM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `AUTHENTICATION`
--

CREATE TABLE IF NOT EXISTS `AUTHENTICATION` (
  `USERNAME` varchar(40) DEFAULT NULL,
  `PASSWORD` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `AUTHENTICATION`
--

INSERT INTO `AUTHENTICATION` (`USERNAME`, `PASSWORD`) VALUES
('ramesh', 'himmat'),
('ramu', 'kaka');

-- --------------------------------------------------------

--
-- Table structure for table `bbloc`
--

CREATE TABLE IF NOT EXISTS `bbloc` (
  `bbid` int(10) NOT NULL DEFAULT '0',
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(10) DEFAULT NULL,
  `homeloc` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`bbid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `bbloc`
--

INSERT INTO `bbloc` (`bbid`, `city`, `state`, `homeloc`) VALUES
(0, '', '', ''),
(4356, 'kalyanpur', 'UP', 'barakal'),
(3652758, 'rameshwaram', 'ftamil', 'chennai');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE IF NOT EXISTS `bloodbank` (
  `bbid` int(10) NOT NULL DEFAULT '0',
  `bbname` varchar(60) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`bbid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`bbid`, `bbname`, `phone`, `email`) VALUES
(0, '', 0, ''),
(123, 'kanpur', 1213212, 'ramdbb@gmail.com'),
(467, 'ramkanpur', 2147483647, 'ramkp@ytr.com'),
(2003, 'ari', 359412, 'lkka@gmail.com'),
(2004, 'sans', 412191, 'ansan@jktk.ac.in'),
(2010, 'arijit', 359432, 'lkjhg@gmail.com'),
(2087, 'arimki', 123480, 'lok@gmail.com'),
(7454, 'gaj', 0, 'fsds@dd'),
(8925, 'fuck', 64534232, 'adad@fuck.com'),
(13130, 'ans', 64534033, 'ans@fb.com'),
(9545634, 'xdsada', 534233130, 'sdf@tffsddf');

-- --------------------------------------------------------

--
-- Table structure for table `bloodstore`
--

CREATE TABLE IF NOT EXISTS `bloodstore` (
  `bbid` int(10) NOT NULL DEFAULT '0',
  `bgroup` varchar(3) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  PRIMARY KEY (`bbid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `bloodstore`
--

INSERT INTO `bloodstore` (`bbid`, `bgroup`, `amount`) VALUES
(0, '', 0),
(101, 'A', 100),
(123, 'A', 538),
(124, 'A', 5649),
(456, 'B', 63),
(2003, 'A', 1100),
(5468, 'A', 1000),
(7454, 'B', 756);

-- --------------------------------------------------------

--
-- Table structure for table `brequest`
--

CREATE TABLE IF NOT EXISTS `brequest` (
  `reqid` int(10) NOT NULL DEFAULT '0',
  `bbid` int(10) DEFAULT NULL,
  PRIMARY KEY (`reqid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `brequest`
--

INSERT INTO `brequest` (`reqid`, `bbid`) VALUES
(0, 0),
(2556, 9523),
(8543, 100000),
(24565, 14),
(43466, 97862),
(111111, 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
  `bbid` int(10) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `did` int(10) NOT NULL DEFAULT '0',
  `dname` varchar(20) DEFAULT NULL,
  `bgroup` varchar(3) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `bamount` int(10) DEFAULT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`bbid`, `phone`, `did`, `dname`, `bgroup`, `email`, `bamount`) VALUES
(0, 0, 0, 'DNAME', 'BGR', '', 0),
(1345, 12345690, 4893, 'folo', 'A', 'fol@gmail.com', 535),
(324, 234123, 23412, 'fdsa', 'g', 'gsfgdfgfg', 1231),
(7566, 785511, 79155, 'geek', 'A', 'geek@gmail.com', 23),
(123, 12312, 123213, 'aa', 'O', 'asda@sdg', 7234),
(12312, 14666, 752266, 'dolu', 'O', 'dol@gmail.com', 2),
(342323, 82211, 994540, 'sumit', 'B', 'tksun@gmail.com', 24),
(12312, 122257, 48159368, 'golu', 'O', 'golo@gmail.com', 36);

-- --------------------------------------------------------

--
-- Table structure for table `donorloc`
--

CREATE TABLE IF NOT EXISTS `donorloc` (
  `did` int(10) NOT NULL DEFAULT '0',
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(10) DEFAULT NULL,
  `homeloc` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `donorloc`
--

INSERT INTO `donorloc` (`did`, `city`, `state`, `homeloc`) VALUES
(0, '', 'STATE', 'HOMELOC'),
(259, 'dhan', 'STATE', 'HOMELOC'),
(4545, 'dsafdf', 'STATE', 'HOMELOC');

-- --------------------------------------------------------

--
-- Table structure for table `emploc`
--

CREATE TABLE IF NOT EXISTS `emploc` (
  `eid` int(10) NOT NULL DEFAULT '0',
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(10) DEFAULT NULL,
  `homeloc` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `emploc`
--

INSERT INTO `emploc` (`eid`, `city`, `state`, `homeloc`) VALUES
(0, '', '', ''),
(6756565, 'gahj', 'chena', 'rtuefc');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `bbid` int(10) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `eid` int(10) NOT NULL DEFAULT '0',
  `designation` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`bbid`, `phone`, `eid`, `designation`, `email`) VALUES
(0, 0, 0, '', ''),
(0, 123456, 321, 'rasoiya', 'rwafg@csebf'),
(0, 74622918, 121271, 'sez', 'qwqwq@axsds.com'),
(0, 8654343, 244523, 'counter', 'ram@uber.com');

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE IF NOT EXISTS `receiver` (
  `reqid` int(10) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `rname` varchar(20) DEFAULT NULL,
  `bgroup` varchar(3) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `bamount` int(10) DEFAULT NULL,
  `hospitalname` varchar(20) DEFAULT NULL,
  `rid` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`reqid`, `phone`, `rname`, `bgroup`, `email`, `bamount`, `hospitalname`, `rid`) VALUES
(0, 0, '', '', '', 0, '', 0),
(4012, 359498, 'pankaj', 'B', 'ksp@gmail.com', 535, 'iitk', 65),
(8543, 5434667, 'ttfggg', 'f', 'bvvbhbnjh', 87, 'gfghhhh', 987),
(1000, 643113, 'ramesh', 'A', 'rames@gmail.com', 642, 'shadilal', 4000),
(1001, 423562, 'mahesh', 'O', 'mahi@gmail.com', 535, 'applex', 4001),
(1002, 359404, 'ramu', 'C', 'A+', 534, 'shird', 4002),
(1003, 146664, 'ramneek', 'O', 'asdsa@gmail.com', 557, 'shriram', 4003),
(1004, 222224, 'raj', 'O', 'ansuman@iitk.ac.in', 5345, 'shirdime', 4004),
(1005, 146634, 'rajubhai', 'O', 'arajuman@iitk.ac.in', 53412, 'dsfert', 4006),
(3587, 9000000, 'himmeni', 'A', 'rhimme@gmail.com', 24, 'iitk', 4067);

-- --------------------------------------------------------

--
-- Table structure for table `rhosloc`
--

CREATE TABLE IF NOT EXISTS `rhosloc` (
  `rid` int(10) NOT NULL DEFAULT '0',
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(10) DEFAULT NULL,
  `homeloc` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `rhosloc`
--

INSERT INTO `rhosloc` (`rid`, `city`, `state`, `homeloc`) VALUES
(0, '', '', ''),
(13655, 'patna', 'bihar', 'patn'),
(54534, '3231313', 'sdsdadda', 'ersdws');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
