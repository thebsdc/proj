-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 06:49 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kdbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(8) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `uname`, `password`) VALUES
(12340001, 'chandanbsd', '123456'),
(12340002, 'deekshithsg', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `msgid` int(5) NOT NULL,
  `id` int(8) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`msgid`, `id`, `name`, `email`, `subject`, `msg`) VALUES
(15, 20190285, 'Rajesh Kuttapa', 'rajesh@gmail.com', 'Website is slow', 'website very slow on wednesday 5/12/2019');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(8) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `btype` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `kcid` int(5) DEFAULT NULL,
  `kcname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `fname`, `mname`, `lname`, `sex`, `btype`, `dob`, `address`, `city`, `mobile`, `email`, `password`, `kcid`, `kcname`) VALUES
(20190285, 'Rajesh', 'Suresh', 'Kuttapa', 'male', 'O+', '1998-01-09', 'no.45 , 13th main road, peenya', 'bangalore', 9856740321, 'rajesh@gmail.com', 'rajesh', 1001, 'kcenter peenya'),
(20190286, 'anil', 'suresh', 'manish', 'male', 'A+', '1993-05-17', 'no.19, 20th main road, malleshwaram', 'bangalore', 8796032145, 'anil@gmail.com', 'anil', 1005, 'kcenter malleshwaram'),
(20190287, 'suma', 'mani', 'namanth', 'female', 'B+', '1997-07-16', 'no.19, 20th main road', 'mandya', 8972415360, 'suma@gmail.com', 'suma', 1008, 'kcenter mandya'),
(20190288, 'rachit', 'mahesh', 'pailwan', 'male', 'O+', '1997-08-11', 'no.5, 15th main road', 'mysore', 8976032541, 'rachit@gmail.com', 'rachit', 1007, 'kcenter mysore'),
(20190289, 'chethan', 'ram', 'raj', 'male', 'AB+', '1994-02-15', 'no.9, 13th main road,rajajinagar', 'bangalore', 8794563021, 'chethan@gmail.com', 'chethan', 1002, 'kcenter rajajinagar');

-- --------------------------------------------------------

--
-- Table structure for table `donormed`
--

CREATE TABLE `donormed` (
  `no` int(5) NOT NULL,
  `id` int(8) NOT NULL,
  `don_date` date NOT NULL,
  `stats` varchar(20) NOT NULL,
  `temp` varchar(20) NOT NULL,
  `pulse` varchar(20) NOT NULL,
  `bp` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `hemoglobin` varchar(20) NOT NULL,
  `hbsag` varchar(20) NOT NULL,
  `aids` varchar(20) NOT NULL,
  `malaria_smear` varchar(20) NOT NULL,
  `hematocrit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donormed`
--

INSERT INTO `donormed` (`no`, `id`, `don_date`, `stats`, `temp`, `pulse`, `bp`, `weight`, `hemoglobin`, `hbsag`, `aids`, `malaria_smear`, `hematocrit`) VALUES
(58, 20190285, '0000-00-00', 'Good', '37', '60', '80/120', '85', '17.5', 'negative', 'negative', 'negative', '50%'),
(59, 20190286, '0000-00-00', 'good', '98', '65', '85/126', '90', '18', 'negative', 'negative', 'negative', '51%'),
(60, 20190287, '0000-00-00', 'good', '98', '60', '82/130', '90', '18', 'negative', 'negative', 'negative', '53%'),
(61, 20190288, '0000-00-00', 'good', '99', '66', '139/89', '79', '19', 'negative', 'negative', 'negative', '49%'),
(62, 20190289, '0000-00-00', 'good', '99', '63', '80/120', '79', '19.2', 'negative', 'negative', 'negative', '53%');

-- --------------------------------------------------------

--
-- Table structure for table `kcenter`
--

CREATE TABLE `kcenter` (
  `kcname` varchar(20) NOT NULL,
  `kcid` int(5) NOT NULL,
  `kcaddr` varchar(100) NOT NULL,
  `kcemail` varchar(40) NOT NULL,
  `kcphone` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kcenter`
--

INSERT INTO `kcenter` (`kcname`, `kcid`, `kcaddr`, `kcemail`, `kcphone`) VALUES
('kcenter malleshwaram', 1005, 'no 12,malleshwaram main road, bangalore', 'kcentermalleshwaram@gmail.com', 8712395460),
('kcenter mandya', 1008, 'mandya,karnataka', 'kcentermandya@gmail.com', 8657412390),
('kcenter mysore', 1007, 'mysore, karnataka', 'kcentermysore@gmail.com', 9765841230),
('kcenter peenya', 1001, 'peenya industrial area, peenya,bangalore', 'kcenterpeenya@gmail.com', 9874510236),
('kcenter rajajinagar', 1002, 'ESIC hospital,rajajinagar,bangalore', 'kcenterrajajinagar@gmail.com', 8741255036),
('kcenter rtnagar', 1004, 'RT nagar, bangalore', 'kcenterrtnagar@gmail.com', 8754128360),
('kcenter vijayanagar', 1003, 'vijaynagar,bangalore', 'kcentervijayanagar@gmail.com', 9754812630),
('kcenter vvpuram', 1115, 'no 19, vv puram main road, bangalore 560050', 'kcentervvpuram@gmail.com', 9687410325);

--
-- Triggers `kcenter`
--
DELIMITER $$
CREATE TRIGGER `deletionTrigger` BEFORE DELETE ON `kcenter` FOR EACH ROW INSERT INTO `kcenter_logs` VALUES(null,OLD.kcid,'kcenter deleted',NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertionTrigger` AFTER INSERT ON `kcenter` FOR EACH ROW INSERT INTO `kcenter_logs` VALUES(null,NEW.kcid,'new kcenter added',NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateTrigger` AFTER UPDATE ON `kcenter` FOR EACH ROW INSERT INTO `kcenter_logs` VALUES(null,NEW.kcid,'kcenter details updated',NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kcenter_logs`
--

CREATE TABLE `kcenter_logs` (
  `log_id` int(11) NOT NULL,
  `kcid` int(11) NOT NULL,
  `action` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kcenter_logs`
--

INSERT INTO `kcenter_logs` (`log_id`, `kcid`, `action`, `date`) VALUES
(2, 1117, 'new kcenter added', '2019-12-04 18:55:30'),
(3, 1117, 'kcenter deleted', '2019-12-04 18:55:39'),
(4, 1116, 'kcenter details updated', '2019-12-04 18:55:52'),
(5, 1116, 'kcenter deleted', '2019-12-04 19:05:35'),
(6, 1118, 'new kcenter added', '2019-12-09 09:29:51'),
(7, 1118, 'kcenter details updated', '2019-12-09 09:30:00'),
(8, 1118, 'kcenter deleted', '2019-12-09 09:38:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`msgid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `donormed`
--
ALTER TABLE `donormed`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `kcenter`
--
ALTER TABLE `kcenter`
  ADD PRIMARY KEY (`kcname`),
  ADD UNIQUE KEY `unique` (`kcid`);

--
-- Indexes for table `kcenter_logs`
--
ALTER TABLE `kcenter_logs`
  ADD PRIMARY KEY (`log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12340003;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `msgid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20190290;

--
-- AUTO_INCREMENT for table `donormed`
--
ALTER TABLE `donormed`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `kcenter`
--
ALTER TABLE `kcenter`
  MODIFY `kcid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1119;

--
-- AUTO_INCREMENT for table `kcenter_logs`
--
ALTER TABLE `kcenter_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`id`) REFERENCES `donor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donormed`
--
ALTER TABLE `donormed`
  ADD CONSTRAINT `donormed_ibfk_1` FOREIGN KEY (`id`) REFERENCES `donor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
