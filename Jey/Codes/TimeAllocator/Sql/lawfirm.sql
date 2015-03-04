-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 24, 2015 at 03:24 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lawfirm`
--
CREATE DATABASE IF NOT EXISTS `lawfirm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lawfirm`;

-- --------------------------------------------------------

--
-- Table structure for table `casedetails`
--

CREATE TABLE IF NOT EXISTS `casedetails` (
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `lawyername` varchar(40) NOT NULL,
  `clientname` varchar(40) NOT NULL,
  `casenumber` varchar(40) DEFAULT NULL,
  `place` varchar(50) DEFAULT NULL,
  `project` varchar(40) DEFAULT NULL,
  `tpnumber` varchar(20) DEFAULT NULL,
  `date` date NOT NULL,
  `Description` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`number`),
  UNIQUE KEY `number` (`number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `casedetails`
--

INSERT INTO `casedetails` (`number`, `lawyername`, `clientname`, `casenumber`, `place`, `project`, `tpnumber`, `date`, `Description`) VALUES
(9, 'sugan', 'MTM', '`15/ef/34', 'Vauniya', 'MTM', '0778658970', '2014-12-12', NULL),
(10, 'Cryil', 'Mukun', '2345', 'Colombo', 'CAP', '+94778658970', '2014-12-09', NULL),
(11, 'Suganthan', 'Thavam', '123/34/ef', 'Wellawatte', 'HR', NULL, '2015-01-09', 'First term'),
(12, 'Sugan', 'Raja', '123/34/ef', 'GALLe', 'Comapny', '112345342', '2015-01-19', 'Case file'),
(13, 'Ruba', 'Mukun', '123/23/ef', 'PPT', 'Civil', '212225342', '2015-12-19', 'second term'),
(14, 'ABC', 'PQR', 'Ac/we/123', 'Kandy', 'Criminal', '312345342', '2015-01-29', 'Need to get another term'),
(15, 'Rajeevan', 'Silva', 'ed/we/123', 'Kelaniya', 'Traffic', '112345372', '2015-03-29', 'just to appear'),
(16, 'Raj', 'Saith', 'Ac/23/123', 'Kandy', 'Civil', '312345342', '2015-01-25', ''),
(17, 'TS', 'TM', 'PMT/12', 'Badulla', 'Civil', '+0263334552', '2015-01-19', 'Filesubmission'),
(18, 'Suganth', 'mtm', '12/12/wd', 'Jafna', 'PMTM', '0778658970', '2015-01-30', 'First Term'),
(19, 'Suganth', 'Jey', '12/12/1234', 'Colombo', '', '', '2015-01-15', 'Produce witnesses'),
(20, 'Suganth', 'Mukunth', '12/12/wtd', 'Kandy', '', '', '2015-01-31', ''),
(21, 'vinoth', 'Raj', 'Land/123/123', 'Galle', '', '', '2015-01-15', 'First apperance');

-- --------------------------------------------------------

--
-- Table structure for table `casetimeline`
--

CREATE TABLE IF NOT EXISTS `casetimeline` (
  `CT_Id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `lawyername` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `remarks` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`CT_Id`),
  KEY `number` (`number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `casetimeline`
--

INSERT INTO `casetimeline` (`CT_Id`, `number`, `lawyername`, `date`, `remarks`) VALUES
(1, 10, 'Cril', '2014-12-09', 'File submitted'),
(2, 10, 'Cryil', '2014-12-09', 'Moved to Next Term Date'),
(3, 10, 'Cryil', '2014-12-19', 'Moved to Next Term Date'),
(4, 10, 'Cryil', '2014-12-20', 'Requested to include another victim'),
(5, 10, 'Cryil', '2014-12-25', 'Documnt Submitted'),
(6, 10, 'Cryil', '2014-12-29', 'Moved to Next Term Date'),
(7, 10, 'Cryil', '2014-12-30', 'Document submitted'),
(8, 9, 'sugan', '2014-12-12', 'First Term'),
(9, 21, 'vinoth', '2015-01-15', 'First apperance');

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE IF NOT EXISTS `lawyers` (
  `LawyerID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Registered No` varchar(40) NOT NULL,
  `Qualification` varchar(50) DEFAULT NULL,
  `Address` varchar(60) DEFAULT NULL,
  `TP No` varchar(20) DEFAULT NULL,
  `DoB` date DEFAULT NULL,
  `Remarks` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`LawyerID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email_address` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `first_name`, `last_name`, `username`, `password`, `email_address`) VALUES
(1, 'mukun', 'Tharma', 'mukun', '827ccb0eea8a706c4c34a16891f84e7b', 'mukun@gmail.com'),
(2, 'Mukunthan', 'thar', 'muku', '827ccb0eea8a706c4c34a16891f84e7b', 'muku@gmail.com'),
(4, 'mukunthan', 'Tharmakulasingam', 'tmukunthan', '827ccb0eea8a706c4c34a16891f84e7b', 'mtm@yahoo.com'),
(5, 'mukunthan', 'Thar', 'mukuntt', '8ff7af869b9f0d66a09925f8e06ea638', 'pmtm@gmail.com'),
(8, 'sugan', 'Thar', 'sugan', 'ebd8031c954404a8c7579ff75f21f111', 'sugan@gmail.com'),
(11, 'Jeyjen', 'Tharmakulsingam', 'jeyje', 'abcbeaa26f3d02e2fb5400784cb4e191', 'jey@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `casetimeline`
--
ALTER TABLE `casetimeline`
  ADD CONSTRAINT `casetimeline_ibfk_1` FOREIGN KEY (`number`) REFERENCES `casedetails` (`number`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
