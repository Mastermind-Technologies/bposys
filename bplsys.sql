-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2016 at 05:00 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bplsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `applicationId` int(255) NOT NULL,
  `referenceNum` varchar(255) NOT NULL,
  `userId` int(5) NOT NULL,
  `taxYear` int(4) DEFAULT NULL,
  `applicationDate` varchar(255) DEFAULT NULL,
  `DTISECCDA_RegNum` varchar(255) DEFAULT NULL,
  `DTISECCDA_Date` varchar(255) DEFAULT NULL,
  `typeOfOrganization` varchar(255) DEFAULT NULL,
  `CTCNum` varchar(255) DEFAULT NULL,
  `TIN` varchar(255) DEFAULT NULL,
  `entityName` varchar(255) DEFAULT NULL,
  `taxPayerName` varchar(255) DEFAULT NULL,
  `businessName` varchar(255) DEFAULT NULL,
  `tradeName` varchar(255) DEFAULT NULL,
  `presidentTreasurerName` varchar(255) DEFAULT NULL,
  `houseBldgNum` varchar(255) DEFAULT NULL,
  `bldgName` varchar(255) DEFAULT NULL,
  `unitNum` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `subdivision` varchar(255) DEFAULT NULL,
  `cityMunicipality` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `telNum` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `PIN` varchar(255) DEFAULT NULL,
  `numOfEmployees` int(255) DEFAULT NULL,
  `lessorId` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `business_activities`
--

CREATE TABLE IF NOT EXISTS `business_activities` (
  `activityId` int(255) NOT NULL,
  `referenceNum` varchar(255) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `lineOfBusiness` varchar(255) DEFAULT NULL,
  `numOfUnits` int(255) DEFAULT NULL,
  `capitalization` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lessors`
--

CREATE TABLE IF NOT EXISTS `lessors` (
  `lessorId` int(255) NOT NULL,
  `referenceNum` varchar(255) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `subdivision` varchar(255) DEFAULT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `cityMunicipality` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `monthlyRental` int(255) DEFAULT NULL,
  `telNum` int(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `emergencyContactPerson` varchar(255) DEFAULT NULL,
  `emergencyTelNum` int(255) DEFAULT NULL,
  `emergencyEmail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE IF NOT EXISTS `owners` (
  `ownerId` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `houseBldgNo` varchar(255) DEFAULT NULL,
  `bldgName` varchar(255) DEFAULT NULL,
  `unitNum` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `subdivision` varchar(255) DEFAULT NULL,
  `cityMunicipality` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `contactNum` varchar(255) DEFAULT NULL,
  `telNum` varchar(255) DEFAULT NULL,
  `businessArea` varchar(255) DEFAULT NULL,
  `numOfEmployeesLGU` varchar(255) DEFAULT NULL,
  `-created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `-updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`ownerId`, `userId`, `houseBldgNo`, `bldgName`, `unitNum`, `street`, `barangay`, `subdivision`, `cityMunicipality`, `province`, `contactNum`, `telNum`, `businessArea`, `numOfEmployeesLGU`, `-created_at`, `-updated_at`) VALUES
(1, 1, '21', 'Mercury', '21', 'Dumaguete', 'Santo Tomas', 'South City Homes', 'Biñan City', 'Laguna', '321', '321', '321321', '321321', '2016-11-10 10:15:40', '2016-11-11 13:21:34'),
(2, 2, '', '', '', '', '', '', '', '', '', '', '0', '0', '2016-11-11 12:33:36', '2016-11-11 12:33:36');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `roleId` int(5) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleId`, `name`) VALUES
(1, 'Master Admin'),
(2, 'User Admin'),
(3, 'Applicant');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(10) NOT NULL,
  `role` int(5) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `middleName` varchar(255) DEFAULT '.',
  `suffix` varchar(10) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `civilStatus` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `birthDate` varchar(255) NOT NULL,
  `-created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `-update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `role`, `firstName`, `lastName`, `middleName`, `suffix`, `gender`, `email`, `civilStatus`, `password`, `birthDate`, `-created_at`, `-update_at`) VALUES
(1, 3, 'Renjo', 'Dolosa', 'Enriquez', '', 'Male', 'dolosa.renjo@yahoo.com', 'Single', '$2y$11$y8MnwVN/mw3eQFKWsbAb4OXIRQ.QGE0fF/mLkCWkn/TJ9OETXT5Au', '02/17/1995', '2016-11-09 06:07:23', '2016-11-09 06:07:23'),
(2, 3, 'Ida Julienne', 'Peñaflor', 'Mangaliman', '', 'Female', 'penaflor.ida@yahoo.com', 'Single', '$2y$11$XCoBa0mgM.aLyI56iqXiF.XMsfOHWpYCAaFA7gHPYzIXYbOn1jEmW', '12/12/1212', '2016-11-11 12:33:22', '2016-11-11 12:33:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`applicationId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `referenceNum` (`referenceNum`);

--
-- Indexes for table `business_activities`
--
ALTER TABLE `business_activities`
  ADD PRIMARY KEY (`activityId`),
  ADD KEY `referenceNum` (`referenceNum`);

--
-- Indexes for table `lessors`
--
ALTER TABLE `lessors`
  ADD PRIMARY KEY (`lessorId`),
  ADD KEY `referenceNum` (`referenceNum`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`ownerId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `applicationId` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `business_activities`
--
ALTER TABLE `business_activities`
  MODIFY `activityId` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lessors`
--
ALTER TABLE `lessors`
  MODIFY `lessorId` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `ownerId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleId` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
