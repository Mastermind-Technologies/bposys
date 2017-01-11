-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2017 at 11:53 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`applicationId`, `referenceNum`, `userId`, `taxYear`, `applicationDate`, `DTISECCDA_RegNum`, `DTISECCDA_Date`, `typeOfOrganization`, `CTCNum`, `TIN`, `entityName`, `taxPayerName`, `businessName`, `tradeName`, `presidentTreasurerName`, `houseBldgNum`, `bldgName`, `unitNum`, `street`, `barangay`, `subdivision`, `cityMunicipality`, `province`, `telNum`, `email`, `PIN`, `numOfEmployees`, `status`, `createdAt`, `updatedAt`) VALUES
(19, 'CC23E14941', 1, 2016, 'November 15, 2016', '123456', '123456', 'Single', '123456', '123456', 'Entity', 'Renjo Enriquez, Dolosa', 'Mastermind', 'Trade Name Daw', 'Ida Julienne Mangaliman, Peñaflor', 'Blk 29 Lot 19', 'Mercury', '17', 'Dumaguete Street', 'Santo Tomas', 'South City Homes', 'Biñan City', 'Laguna', '1234566', 'dolosa.renjo@yahoo.com', '123456', 50, 'For applicant visit', '2016-11-15 14:38:10', '2017-01-07 14:19:18'),
(20, 'B8F9C44A2E', 1, 2016, 'November 19, 2016', '123', '123', 'Single', '123', '123', 'asdasd', 'asd asd, asd', 'asd', 'asd', '123 123, 123', '123', '123', '123', '123', '123', '123', '123', '123', '123', 'asd@yahoo.com', '123', 123, 'For validation...', '2016-11-19 01:16:33', '2016-12-18 14:52:34'),
(21, 'B1FE9724A8', 6, 2016, 'November 23, 2016', '123', '123', 'Single', '123', '123', '123213', '123 123, 123', '123', '123', '123 123, 123', '123', '123', '123', '123', '123', '123', '123', '123', '123', 'asd@yahoo.com', '123', 123, 'For validation...', '2016-11-23 13:39:27', '2016-12-18 14:52:38'),
(22, '32B149239C', 1, 2016, 'December 15, 2016', '1026', '12/15/2016', 'Single', '1212', '1212', 'NA', 'Renjo Enriquez, Dolosa', 'TestBusiness', 'TestFranchise', 'Renjo Enriquez, Dolosa', '12', '12', '12', '12', '12', '12', '12', '12', '12312322', 'dolosa.renjo@yahoo.com', '1212', 1212, 'For applicant visit', '2016-12-15 13:52:05', '2017-01-04 02:54:32'),
(25, '92527EC7C2', 1, 2016, 'December 29, 2016', '123', '123', 'Single', '123', '13', 'NA', '123 123, 123', 'My New Business', '123', '123 123, 123', '123', '123', '123', '123', '123', '123', '123', '123', '123', 'qweqwe@yahoo.com', '123', 123, 'For validation...', '2016-12-29 00:23:33', '2017-01-04 02:53:08');

-- --------------------------------------------------------

--
-- Table structure for table `approvals`
--

CREATE TABLE IF NOT EXISTS `approvals` (
  `approvalId` int(10) NOT NULL,
  `referenceNum` varchar(255) NOT NULL,
  `role` int(5) NOT NULL,
  `type` varchar(255) NOT NULL,
  `staff` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approvals`
--

INSERT INTO `approvals` (`approvalId`, `referenceNum`, `role`, `type`, `staff`, `createdAt`, `updatedAt`) VALUES
(9, '32B149239C', 4, 'Validate', 'Rene Manabat', '2017-01-04 02:54:32', '2017-01-04 02:54:32'),
(10, 'CC23E14941', 4, 'Validate', 'Rene Manabat', '2017-01-07 14:19:18', '2017-01-07 14:19:18');

-- --------------------------------------------------------

--
-- Table structure for table `assessments`
--

CREATE TABLE IF NOT EXISTS `assessments` (
  `assessmentId` int(10) NOT NULL,
  `referenceNum` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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
  `capitalization` varchar(255) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_activities`
--

INSERT INTO `business_activities` (`activityId`, `referenceNum`, `code`, `lineOfBusiness`, `numOfUnits`, `capitalization`, `createdAt`, `updatedAt`) VALUES
(35, 'CC23E14941', '1', '1', 1, '1', '2016-11-15 14:38:10', '2016-11-15 14:38:10'),
(36, 'CC23E14941', '3', '3', 3, '3', '2016-11-15 14:38:10', '2016-11-15 14:38:10'),
(37, 'CC23E14941', '2', '2', 2, '2', '2016-11-15 14:38:10', '2016-11-15 14:38:10'),
(38, 'B8F9C44A2E', '234', '345', 456, '567', '2016-11-19 01:16:36', '2016-11-19 01:16:36'),
(39, 'B8F9C44A2E', '123', '234', 345, '456', '2016-11-19 01:16:37', '2016-11-19 01:16:37'),
(40, 'B1FE9724A8', '123', '123', 123, '123', '2016-11-23 13:39:29', '2016-11-23 13:39:29'),
(41, 'B1FE9724A8', '234', '234', 234, '234', '2016-11-23 13:39:29', '2016-11-23 13:39:29'),
(42, 'B1FE9724A8', '345', '345', 345, '345', '2016-11-23 13:39:29', '2016-11-23 13:39:29'),
(43, 'B1FE9724A8', '456', '456', 456, '456', '2016-11-23 13:39:29', '2016-11-23 13:39:29'),
(44, '32B149239C', '111', '111', 111, '111', '2016-12-15 13:52:06', '2016-12-15 13:52:06'),
(45, '32B149239C', '12', '121', 2, '12', '2016-12-15 13:52:06', '2016-12-15 13:52:06'),
(46, '32B149239C', '3', '3', 3, '3', '2016-12-15 13:52:06', '2016-12-15 13:52:06'),
(47, '92527EC7C2', '123', '123', 123, '123', '2016-12-29 00:23:34', '2016-12-29 00:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `charges`
--

CREATE TABLE IF NOT EXISTS `charges` (
  `chargeId` int(10) NOT NULL,
  `referenceNum` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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
  `emergencyEmail` varchar(255) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lessors`
--

INSERT INTO `lessors` (`lessorId`, `referenceNum`, `firstName`, `middleName`, `lastName`, `address`, `subdivision`, `barangay`, `cityMunicipality`, `province`, `monthlyRental`, `telNum`, `email`, `emergencyContactPerson`, `emergencyTelNum`, `emergencyEmail`, `createdAt`, `updatedAt`) VALUES
(7, 'CC23E14941', 'Billy James', 'Santos', 'Labay', 'Address', 'South City Homes', 'Santo Tomas', 'Biñan City', 'Laguna', 24000, 123456, 'billy@yahoo.com', 'Jason Hernandez', 123456, 'jason@yahoo.com', '2016-11-15 14:38:10', '2016-11-15 14:38:10'),
(8, 'B8F9C44A2E', '123', '123', '123', 'asd', '123', '123', '123', '123', 123, 123, 'asd@yahoo.com', '123', 123, 'sdf@yahoo.com', '2016-11-19 01:16:34', '2016-11-19 01:16:34'),
(9, 'B1FE9724A8', '123', '123', '123', 'asdasd', 'asdas', 'asdsa', 'asdas', 'asdas', 123, 12, 'asd@yahoo.com', 'asd', 123, 'asdsa@yahoo.com', '2016-11-23 13:39:28', '2016-11-23 13:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `notificationId` int(10) NOT NULL,
  `referenceNum` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `role` int(5) NOT NULL,
  `notifMessage` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notificationId`, `referenceNum`, `status`, `role`, `notifMessage`, `createdAt`, `updatedAt`) VALUES
(4, '92527EC7C2', 'Read', 4, 'New business permit application', '2016-12-29 00:23:34', '2017-01-04 13:59:39'),
(20, '32B149239C', 'Read', 3, 'TestBusiness has been validated by BPLO. Please check application status.', '2017-01-04 02:54:32', '2017-01-04 03:56:12'),
(21, 'CC23E14941', 'Unread', 3, 'Mastermind has been validated by BPLO. Please check application status.', '2017-01-07 14:19:18', '2017-01-07 14:19:18');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`ownerId`, `userId`, `houseBldgNo`, `bldgName`, `unitNum`, `street`, `barangay`, `subdivision`, `cityMunicipality`, `province`, `contactNum`, `telNum`, `businessArea`, `numOfEmployeesLGU`, `createdAt`, `updatedAt`) VALUES
(1, 1, '21', 'Mercury', '21', 'Dumaguete', 'Santo Tomas', 'South City Homes', 'Biñan City', 'Laguna', '09175138277', '8393939', 22, 33, '2016-11-10 10:15:40', '2016-11-14 11:54:43'),
(2, 5, '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', 123, 123, '2016-11-20 08:26:26', '2016-11-20 08:26:26'),
(3, 6, '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', 123, 123, '2016-11-23 13:37:54', '2016-11-23 13:37:54'),
(4, 7, '1', '1', '1', '1', '1', '1', '1', '1', '123', '123', 23, 23, '2016-12-14 13:28:38', '2016-12-14 13:28:38'),
(6, 8, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, '2016-12-15 05:59:39', '2016-12-15 05:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `roleId` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleId`, `name`, `createdAt`, `updatedAt`) VALUES
(1, 'Master Admin', '2016-11-14 01:24:24', '0000-00-00 00:00:00'),
(2, 'User Admin', '2016-11-14 01:24:24', '0000-00-00 00:00:00'),
(3, 'Applicant', '2016-11-14 01:24:24', '0000-00-00 00:00:00'),
(4, 'BPLO', '2016-11-18 00:53:01', '2016-11-18 00:53:01'),
(5, 'BFP', '2017-01-02 07:13:28', '2017-01-02 07:13:28'),
(6, 'Assessor', '2017-01-02 07:13:28', '2017-01-02 07:13:28'),
(7, 'CENRO', '2017-01-02 07:13:28', '2017-01-02 07:13:28'),
(8, 'Zoning', '2017-01-02 07:13:28', '2017-01-02 07:13:28'),
(9, 'Engineering', '2017-01-02 07:13:28', '2017-01-02 07:13:28'),
(10, 'CHO', '2017-01-02 07:13:28', '2017-01-02 07:13:28');

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `role`, `firstName`, `lastName`, `middleName`, `suffix`, `gender`, `email`, `civilStatus`, `password`, `birthDate`, `createdAt`, `updatedAt`) VALUES
(1, 3, 'Renjo', 'Dolosa', 'Enriquez', '', 'Male', 'dolosa.renjo@yahoo.com', 'Single', '$2y$11$y8MnwVN/mw3eQFKWsbAb4OXIRQ.QGE0fF/mLkCWkn/TJ9OETXT5Au', '02/17/1995', '2016-11-09 06:07:23', '2016-11-09 06:07:23'),
(2, 3, 'Billy Jaes', 'Labay', 'Santos', '', 'Male', 'billy@yahoo.com', 'Single', '$2y$11$ofeUI9/c9kSS.od76L06DeXwgBmf50hJwcV.n6V/wfBYvMgI4PgS2', '12/12/1212', '2016-11-11 08:35:43', '2016-11-11 08:35:43'),
(3, 3, 'asd', 'asd', 'asd', '', 'Male', 'asd@asd.com', 'Single', '$2y$15$iAdvfqJQb2XDBdCb86umpeTzFxzNjuU/GepCZ.lAJnrxHLuTepACa', '12/12/1212', '2016-11-11 08:38:33', '2016-11-11 08:38:33'),
(4, 4, 'Rene', 'Manabat', '.', '', 'Male', 'manabat.rene@yahoo.com', 'Single', '$2y$11$FfTE9sN4Mwg0FgK95lguOu7tsU/nsARLUXM83PC3MdVh9sLK//5Cu', '12/12/12', '2016-11-18 00:54:07', '2016-11-18 00:54:33'),
(5, 3, 'sdf', 'sdf', 'sdf', '', 'Male', 'sdf@yahoo.com', 'Single', '$2y$11$Wd1xV3fjN4bJ2f1LDeBZTOwedmOlHFUaBUrAgNULuhragiOZOQI0C', '02/17/1995', '2016-11-20 08:19:26', '2016-11-20 08:19:26'),
(6, 3, 'test', 'test', 'test', '', 'Male', 'test@test.com', 'Single', '$2y$11$EjJREm5UHY7JnKVoxYQ6buL4YGNKRqQQgI4KuGLv55IJ/B14lMcrC', '02/17/1995', '2016-11-23 13:35:14', '2016-11-23 13:35:14'),
(7, 3, 'Object', 'Object', 'Testing', '', 'Male', 'testing.object@yahoo.com', 'Single', '$2y$11$8SN0uxhwhnhkXH5xBLt.1u3BQsDQFSDANC5N55JQlWUzZE18PVUyi', '02/17/1995', '2016-12-14 12:33:22', '2016-12-14 14:03:00'),
(8, 3, 'test new', 'test new', 'test new', '', 'Male', 'test.new@yahoo.com', 'Single', '$2y$11$TCj.RfYiv.6t7J8afUO1fObe2gVqL/SD5RJu1GVl.oolAraTXRIdO', '12/15/2016', '2016-12-15 05:18:24', '2016-12-15 05:18:24'),
(9, 6, 'Assessor', 'Assessor', '.', '', 'Male', 'assessor@yahoo.com', 'Single', '$2y$11$Csc1hkirbHsfFFbGklp3POqj4lPMY9A7JRnO8a42EcwTkDF81.XEW', '06/07/1995', '2017-01-02 07:14:44', '2017-01-02 07:17:35'),
(10, 5, 'BFP', 'BFP', '.', '', 'Male', 'bfp@yahoo.com', 'Single', '$2y$11$RFg66qvNMduAemv0e8qF6O1BUvT42RMeXIDqbAM1XzHO2vL4SXu0i', '01/02/2017', '2017-01-02 07:15:44', '2017-01-02 07:17:24'),
(11, 7, 'cenro', 'cenro', '.', '', 'Male', 'cenro@yahoo.com', 'Single', '$2y$11$RVBwMutzwhv8P/7WbvTVXOOYUpiGceGET76Q2WdF55JBDM7ZQdHHK', '01/02/2017', '2017-01-02 07:16:10', '2017-01-02 07:17:41'),
(12, 8, 'zoning', 'zoning', '.', '', 'Male', 'zoning@yahoo.com', 'Single', '$2y$11$H878BMPrZRBd0SLtbZdjL.8JM/Jxyd.ZdjhYqLJoxZP3DSFpPN.m2', '01/02/2017', '2017-01-02 07:16:26', '2017-01-02 07:17:45'),
(13, 9, 'engineering', 'engineering', '.', '', 'Male', 'engineering@yahoo.com', 'Single', '$2y$11$wAKrrloLxR7hourGa.GHq.beV9UGMw0suKM0th8cWggsEs1mhAF4i', '01/02/2017', '2017-01-02 07:16:49', '2017-01-02 07:17:49'),
(14, 10, 'cho', 'cho', '.', '', 'Male', 'cho@yahoo.com', 'Single', '$2y$11$dpHS5eOJM2Dh6J17s.0Xm.S7l57Y3mv10W2aJgG50eWTJBeBNG/SW', '01/02/2017', '2017-01-02 07:17:06', '2017-01-02 07:17:54');

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
-- Indexes for table `approvals`
--
ALTER TABLE `approvals`
  ADD PRIMARY KEY (`approvalId`),
  ADD KEY `referenceNum` (`referenceNum`),
  ADD KEY `role` (`role`),
  ADD KEY `role_2` (`role`);

--
-- Indexes for table `assessments`
--
ALTER TABLE `assessments`
  ADD PRIMARY KEY (`assessmentId`),
  ADD KEY `referenceNum` (`referenceNum`);

--
-- Indexes for table `business_activities`
--
ALTER TABLE `business_activities`
  ADD PRIMARY KEY (`activityId`),
  ADD KEY `referenceNum` (`referenceNum`);

--
-- Indexes for table `charges`
--
ALTER TABLE `charges`
  ADD PRIMARY KEY (`chargeId`),
  ADD KEY `referenceNum` (`referenceNum`);

--
-- Indexes for table `lessors`
--
ALTER TABLE `lessors`
  ADD PRIMARY KEY (`lessorId`),
  ADD KEY `referenceNum` (`referenceNum`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notificationId`),
  ADD KEY `referenceNum` (`referenceNum`),
  ADD KEY `role` (`role`);

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
  MODIFY `applicationId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `approvals`
--
ALTER TABLE `approvals`
  MODIFY `approvalId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `assessments`
--
ALTER TABLE `assessments`
  MODIFY `assessmentId` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `business_activities`
--
ALTER TABLE `business_activities`
  MODIFY `activityId` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `charges`
--
ALTER TABLE `charges`
  MODIFY `chargeId` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lessors`
--
ALTER TABLE `lessors`
  MODIFY `lessorId` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notificationId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `ownerId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleId` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE;

--
-- Constraints for table `approvals`
--
ALTER TABLE `approvals`
  ADD CONSTRAINT `approvals_ibfk_1` FOREIGN KEY (`referenceNum`) REFERENCES `applications` (`referenceNum`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `approvals_ibfk_2` FOREIGN KEY (`role`) REFERENCES `roles` (`roleId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `assessments`
--
ALTER TABLE `assessments`
  ADD CONSTRAINT `assessments_ibfk_1` FOREIGN KEY (`referenceNum`) REFERENCES `applications` (`referenceNum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `business_activities`
--
ALTER TABLE `business_activities`
  ADD CONSTRAINT `business_activities_ibfk_1` FOREIGN KEY (`referenceNum`) REFERENCES `applications` (`referenceNum`) ON DELETE CASCADE;

--
-- Constraints for table `charges`
--
ALTER TABLE `charges`
  ADD CONSTRAINT `charges_ibfk_1` FOREIGN KEY (`referenceNum`) REFERENCES `applications` (`referenceNum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lessors`
--
ALTER TABLE `lessors`
  ADD CONSTRAINT `lessors_ibfk_1` FOREIGN KEY (`referenceNum`) REFERENCES `applications` (`referenceNum`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`roleId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`referenceNum`) REFERENCES `applications` (`referenceNum`) ON DELETE CASCADE ON UPDATE CASCADE;

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
