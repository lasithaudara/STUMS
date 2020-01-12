-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2017 at 09:47 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stums`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `regNo` varchar(10) NOT NULL,
  `lectureID` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`regNo`, `lectureID`) VALUES
('13/AS/085', 1),
('13/AS/085', 2),
('13/AS/085', 2),
('13/AS/085', 2),
('13/AS/085', 2),
('13/AS/085', 3),
('13/AS/085', 3),
('13/AS/085', 3),
('13/AS/085', 3),
('13/AS/085', 3),
('13/AS/085', 3),
('13/AS/089', 1),
('13/AS/089', 2),
('13/AS/089', 2),
('13/AS/089', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `lectureID` int(10) NOT NULL,
  `date` date NOT NULL,
  `subCode` varchar(10) NOT NULL,
  `time` varchar(15) NOT NULL,
  `lectureHall` varchar(10) NOT NULL,
  `lecturerID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `lecID` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contactNo` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logindetails`
--

CREATE TABLE `logindetails` (
  `logInID` varchar(20) NOT NULL,
  `authID` varchar(20) NOT NULL,
  `userName` varchar(40) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logindetails`
--

INSERT INTO `logindetails` (`logInID`, `authID`, `userName`, `type`) VALUES
('001', 'ad001', 'Saman', 'admin'),
('001', 'std001', 'Nuwan', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(10) UNSIGNED NOT NULL,
  `recipientUid` int(10) UNSIGNED NOT NULL,
  `eventId` int(10) UNSIGNED NOT NULL,
  `isNew` tinyint(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='User notifications';

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(100) NOT NULL,
  `regNo` varchar(12) NOT NULL,
  `epNo` varchar(6) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactNo` varchar(15) NOT NULL,
  `dept` varchar(15) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `regNo`, `epNo`, `password`, `address`, `contactNo`, `dept`, `year`) VALUES
('Y.P. Nishantha', '12/AS/023', 'EP1495', 'asd', 'Ratnapura', '0783427452', 'PST', '3'),
('R.S. Wijesekara', '12/AS/112', 'EP1243', 'asd', 'Colombo', '0777373487', 'FST', '4'),
('L.H.A.U. Abeyweera', '13/AS/089', 'EP1766', 'asd', 'Galle', '0717370354', 'PST', '3'),
('L.U. Pemmawadu', '13/AS/104', 'EP1783', 'asd', 'Ambalangoda', '0713482668', 'PST', '3'),
('J.W.S. Imalka', '14/AS/023', 'EP1943', 'asd', 'Kandy', '0714523953', 'SM', '2'),
('H.H. Liyanage', '14/AS/129', 'EP1913', 'asd', 'Polonnaruwa', '0773245322', 'PST', '2'),
('K.N. Prabhath', '15/AS/023', 'EP2343', 'asd', 'Matara', '0714523953', 'NR', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subCode` varchar(10) NOT NULL,
  `subName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visitinglecturer`
--

CREATE TABLE `visitinglecturer` (
  `lecID` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contactNo` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `from` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
  ADD PRIMARY KEY (`lectureID`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lecID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IX_recipientUid` (`recipientUid`),
  ADD KEY `IX_isNew` (`isNew`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`regNo`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subCode`);

--
-- Indexes for table `visitinglecturer`
--
ALTER TABLE `visitinglecturer`
  ADD PRIMARY KEY (`lecID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
  MODIFY `lectureID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
