-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2016 at 06:12 AM
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
  `applicationId` int(10) NOT NULL,
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
  `status` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`applicationId`, `referenceNum`, `userId`, `taxYear`, `applicationDate`, `DTISECCDA_RegNum`, `DTISECCDA_Date`, `typeOfOrganization`, `CTCNum`, `TIN`, `entityName`, `taxPayerName`, `businessName`, `tradeName`, `presidentTreasurerName`, `houseBldgNum`, `bldgName`, `unitNum`, `street`, `barangay`, `subdivision`, `cityMunicipality`, `province`, `telNum`, `email`, `PIN`, `numOfEmployees`, `status`, `createdAt`, `updatedAt`) VALUES
(19, 'CC23E14941', 1, 2016, 'November 15, 2016', '123456', '123456', 'Single', '123456', '123456', 'Entity', 'Renjo Enriquez, Dolosa', 'Mastermind', 'Trade Name Daw', 'Ida Julienne Mangaliman, Peñaflor', 'Blk 29 Lot 19', 'Mercury', '17', 'Dumaguete Street', 'Santo Tomas', 'South City Homes', 'Biñan City', 'Laguna', '1234566', 'dolosa.renjo@yahoo.com', '123456', 50, 'Waiting', '2016-11-15 14:38:10', '2016-11-18 13:30:55'),
(20, 'B8F9C44A2E', 1, 2016, 'November 19, 2016', '123', '123', 'Single', '123', '123', 'asdasd', 'asd asd, asd', 'asd', 'asd', '123 123, 123', '123', '123', '123', '123', '123', '123', '123', '123', '123', 'asd@yahoo.com', '123', 123, 'Waiting', '2016-11-19 01:16:33', '2016-11-19 01:16:33');

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
  `capitalization` varchar(255) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_activities`
--

INSERT INTO `business_activities` (`activityId`, `referenceNum`, `code`, `lineOfBusiness`, `numOfUnits`, `capitalization`, `createdAt`, `updatedAt`) VALUES
(35, 'CC23E14941', '1', '1', 1, '1', '2016-11-15 14:38:10', '2016-11-15 14:38:10'),
(36, 'CC23E14941', '3', '3', 3, '3', '2016-11-15 14:38:10', '2016-11-15 14:38:10'),
(37, 'CC23E14941', '2', '2', 2, '2', '2016-11-15 14:38:10', '2016-11-15 14:38:10'),
(38, 'B8F9C44A2E', '234', '345', 456, '567', '2016-11-19 01:16:36', '2016-11-19 01:16:36'),
(39, 'B8F9C44A2E', '123', '234', 345, '456', '2016-11-19 01:16:37', '2016-11-19 01:16:37');

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
  `emergencyEmail` varchar(255) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lessors`
--

INSERT INTO `lessors` (`lessorId`, `referenceNum`, `firstName`, `middleName`, `lastName`, `address`, `subdivision`, `barangay`, `cityMunicipality`, `province`, `monthlyRental`, `telNum`, `email`, `emergencyContactPerson`, `emergencyTelNum`, `emergencyEmail`, `createdAt`, `updatedAt`) VALUES
(7, 'CC23E14941', 'Billy James', 'Santos', 'Labay', 'Address', 'South City Homes', 'Santo Tomas', 'Biñan City', 'Laguna', 24000, 123456, 'billy@yahoo.com', 'Jason Hernandez', 123456, 'jason@yahoo.com', '2016-11-15 14:38:10', '2016-11-15 14:38:10'),
(8, 'B8F9C44A2E', '123', '123', '123', 'asd', '123', '123', '123', '123', 123, 123, 'asd@yahoo.com', '123', 123, 'sdf@yahoo.com', '2016-11-19 01:16:34', '2016-11-19 01:16:34');

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
  `businessArea` int(255) DEFAULT NULL,
  `numOfEmployeesLGU` int(255) DEFAULT NULL,
  `createdAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`ownerId`, `userId`, `houseBldgNo`, `bldgName`, `unitNum`, `street`, `barangay`, `subdivision`, `cityMunicipality`, `province`, `contactNum`, `telNum`, `businessArea`, `numOfEmployeesLGU`, `createdAt`, `updatedAt`) VALUES
(1, 1, '21', 'Mercury', '21', 'Dumaguete', 'Santo Tomas', 'South City Homes', 'Biñan City', 'Laguna', '09175138277', '8393939', 22, 33, '2016-11-10 10:15:40', '2016-11-14 11:54:43'),
(2, 5, '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', 123, 123, '2016-11-20 08:26:26', '2016-11-20 08:26:26');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `roleId` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleId`, `name`, `createdAt`, `updatedAt`) VALUES
(1, 'Master Admin', '2016-11-14 01:24:24', '0000-00-00 00:00:00'),
(2, 'User Admin', '2016-11-14 01:24:24', '0000-00-00 00:00:00'),
(3, 'Applicant', '2016-11-14 01:24:24', '0000-00-00 00:00:00'),
(4, 'BPLO', '2016-11-18 00:53:01', '2016-11-18 00:53:01');

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
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `role`, `firstName`, `lastName`, `middleName`, `suffix`, `gender`, `email`, `civilStatus`, `password`, `birthDate`, `createdAt`, `updatedAt`) VALUES
(1, 3, 'Renjo', 'Dolosa', 'Enriquez', '', 'Male', 'dolosa.renjo@yahoo.com', 'Single', '$2y$11$y8MnwVN/mw3eQFKWsbAb4OXIRQ.QGE0fF/mLkCWkn/TJ9OETXT5Au', '02/17/1995', '2016-11-09 06:07:23', '2016-11-09 06:07:23'),
(2, 3, 'Billy Jaes', 'Labay', 'Santos', '', 'Male', 'billy@yahoo.com', 'Single', '$2y$11$ofeUI9/c9kSS.od76L06DeXwgBmf50hJwcV.n6V/wfBYvMgI4PgS2', '12/12/1212', '2016-11-11 08:35:43', '2016-11-11 08:35:43'),
(3, 3, 'asd', 'asd', 'asd', '', 'Male', 'asd@asd.com', 'Single', '$2y$15$iAdvfqJQb2XDBdCb86umpeTzFxzNjuU/GepCZ.lAJnrxHLuTepACa', '12/12/1212', '2016-11-11 08:38:33', '2016-11-11 08:38:33'),
(4, 4, 'Rene', 'Manabat', '.', '', 'Male', 'manabat.rene@yahoo.com', 'Single', '$2y$11$FfTE9sN4Mwg0FgK95lguOu7tsU/nsARLUXM83PC3MdVh9sLK//5Cu', '12/12/12', '2016-11-18 00:54:07', '2016-11-18 00:54:33'),
(5, 3, 'sdf', 'sdf', 'sdf', '', 'Male', 'sdf@yahoo.com', 'Single', '$2y$11$Wd1xV3fjN4bJ2f1LDeBZTOwedmOlHFUaBUrAgNULuhragiOZOQI0C', '02/17/1995', '2016-11-20 08:19:26', '2016-11-20 08:19:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`applicationId`),
  ADD UNIQUE KEY `referenceNum` (`referenceNum`),
  ADD KEY `userId` (`userId`);

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
  MODIFY `applicationId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `business_activities`
--
ALTER TABLE `business_activities`
  MODIFY `activityId` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `lessors`
--
ALTER TABLE `lessors`
  MODIFY `lessorId` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `ownerId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleId` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE;

--
-- Constraints for table `business_activities`
--
ALTER TABLE `business_activities`
  ADD CONSTRAINT `business_activities_ibfk_1` FOREIGN KEY (`referenceNum`) REFERENCES `applications` (`referenceNum`) ON DELETE CASCADE;

--
-- Constraints for table `lessors`
--
ALTER TABLE `lessors`
  ADD CONSTRAINT `lessors_ibfk_1` FOREIGN KEY (`referenceNum`) REFERENCES `applications` (`referenceNum`) ON DELETE CASCADE;

--
-- Constraints for table `owners`
--
ALTER TABLE `owners`
  ADD CONSTRAINT `owners_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`roleId`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
