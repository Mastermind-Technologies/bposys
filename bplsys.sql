-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2017 at 05:15 PM
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
-- Table structure for table `application_bplo`
--

CREATE TABLE IF NOT EXISTS `application_bplo` (
  `applicationId` int(10) NOT NULL,
  `referenceNum` varchar(255) NOT NULL,
  `userId` int(5) NOT NULL,
  `businessId` int(10) NOT NULL,
  `taxYear` int(4) DEFAULT NULL,
  `applicationDate` varchar(255) DEFAULT NULL,
  `DTISECCDA_RegNum` varchar(255) DEFAULT NULL,
  `DTISECCDA_Date` varchar(255) DEFAULT NULL,
  `brgyClearanceDateIssued` varchar(255) NOT NULL,
  `CTCNum` varchar(255) DEFAULT NULL,
  `TIN` varchar(255) DEFAULT NULL,
  `entityName` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_bplo`
--

INSERT INTO `application_bplo` (`applicationId`, `referenceNum`, `userId`, `businessId`, `taxYear`, `applicationDate`, `DTISECCDA_RegNum`, `DTISECCDA_Date`, `brgyClearanceDateIssued`, `CTCNum`, `TIN`, `entityName`, `status`, `createdAt`, `updatedAt`) VALUES
(1, 'E4302995BD', 1, 1, 2017, 'January 22, 2017', '123123', '01/22/2017', '1/20/2017', '123', '123', '12321', 'For Validation...', '2017-01-22 13:20:51', '2017-01-29 13:36:42'),
(5, '9E9E1D64A2', 1, 1, 2017, 'January 23, 2017', '123', '01/23/2017', '1/20/2017', '12321', '123', '123123', 'Active', '2017-01-23 12:43:22', '2017-01-29 03:48:28'),
(6, '47B3DF6BF4', 1, 1, 2017, 'January 23, 2017', '123', '01/23/2017', '1/20/2017', '123123', '2131', '123213', 'On process', '2017-01-23 12:47:52', '2017-01-25 13:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `application_cenro`
--

CREATE TABLE IF NOT EXISTS `application_cenro` (
  `applicationId` int(255) NOT NULL,
  `userId` int(5) NOT NULL,
  `businessId` int(10) NOT NULL,
  `referenceNum` varchar(255) DEFAULT NULL,
  `CNC` varchar(255) NOT NULL,
  `LLDAClearance` varchar(255) NOT NULL,
  `dischargePermit` varchar(255) NOT NULL,
  `apsci` varchar(255) NOT NULL,
  `productsAndByProducts` varchar(255) NOT NULL,
  `smokeEmission` tinyint(1) NOT NULL,
  `volatileCompound` tinyint(1) NOT NULL,
  `fugitiveParticulates` varchar(255) NOT NULL,
  `steamGenerator` varchar(255) NOT NULL,
  `APCD` varchar(255) NOT NULL,
  `stackHeight` varchar(255) NOT NULL,
  `wastewaterTreatmentFacility` varchar(255) NOT NULL,
  `wastewaterTreatmentOperationAndProcess` tinyint(1) NOT NULL,
  `pendingCaseWithLLDA` varchar(255) NOT NULL,
  `typeOfSolidWastesGenerated` varchar(255) NOT NULL,
  `qtyPerDay` int(255) NOT NULL,
  `garbageCollectionMethod` varchar(255) NOT NULL,
  `frequencyOfGarbageCollection` varchar(255) NOT NULL,
  `wasteCollector` varchar(255) NOT NULL,
  `collectorAddress` varchar(255) NOT NULL,
  `garbageDisposalMethod` varchar(255) NOT NULL,
  `wasteMinimizationMethod` varchar(255) NOT NULL,
  `drainageSystem` tinyint(1) NOT NULL,
  `drainageType` varchar(255) NOT NULL,
  `drainageDischargeLocation` varchar(255) NOT NULL,
  `sewerageSystem` tinyint(1) NOT NULL,
  `septicTank` tinyint(1) NOT NULL,
  `sewerageDischargeLocation` varchar(255) NOT NULL,
  `waterSupply` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_cenro`
--

INSERT INTO `application_cenro` (`applicationId`, `userId`, `businessId`, `referenceNum`, `CNC`, `LLDAClearance`, `dischargePermit`, `apsci`, `productsAndByProducts`, `smokeEmission`, `volatileCompound`, `fugitiveParticulates`, `steamGenerator`, `APCD`, `stackHeight`, `wastewaterTreatmentFacility`, `wastewaterTreatmentOperationAndProcess`, `pendingCaseWithLLDA`, `typeOfSolidWastesGenerated`, `qtyPerDay`, `garbageCollectionMethod`, `frequencyOfGarbageCollection`, `wasteCollector`, `collectorAddress`, `garbageDisposalMethod`, `wasteMinimizationMethod`, `drainageSystem`, `drainageType`, `drainageDischargeLocation`, `sewerageSystem`, `septicTank`, `sewerageDischargeLocation`, `waterSupply`, `status`, `createdAt`, `updatedAt`) VALUES
(1, 1, 1, 'E4302995BD', 'NA', 'NA', 'NA', 'NA', 'NA', 0, 0, 'NA', 'NA', 'asdasd', '123213', 'asdasda', 0, '12312321', 'asdsa', 123213, 'asdasd', 'Weekly', 'asdas', 'dasdsa', 'Sanitary Landfill', 'NA', 1, 'Close/Underground', 'Public Drainage System', 1, 1, 'Public Drainage System', 'Deep Well', 'Cancelled', '2017-01-22 13:20:51', '2017-01-24 05:08:00'),
(5, 1, 1, '9E9E1D64A2', 'NA', 'NA', 'NA', 'NA', 'NA', 1, 1, 'Dust|Gas', 'Boiler|steam generator others', 'qwe', '123', 'qwe', 1, '1121', 'qwe', 222, 'qwewqe', 'hehez', 'qwe', 'qweqwe', 'Sanitary Landfill', 'Recycling|Reduction|Reuse', 0, 'NA', 'NA', 0, 0, 'NA', 'Surface Water', 'Active', '2017-01-23 12:43:22', '2017-01-29 03:48:36'),
(6, 1, 1, '47B3DF6BF4', '01/23/2017', '01/04/2017', '01/04/2017', '01/23/2017', 'NA', 0, 0, 'NA', 'NA', 'asdas', '123123', '12313', 1, 'NA', 'asdas', 12312, 'asdasd', 'Daily', 'asdad', 'asdasda', 'Sanitary Landfill', 'NA', 0, 'NA', 'NA', 0, 0, 'NA', 'Deep Well', 'On process', '2017-01-23 12:47:52', '2017-01-24 03:31:20');

-- --------------------------------------------------------

--
-- Table structure for table `application_sanitary`
--

CREATE TABLE IF NOT EXISTS `application_sanitary` (
  `applicationId` int(255) NOT NULL,
  `referenceNum` varchar(255) NOT NULL,
  `userId` int(5) NOT NULL,
  `businessId` int(10) NOT NULL,
  `annualEmployeePhysicalExam` tinyint(1) NOT NULL,
  `typeLevelOfWaterSource` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_sanitary`
--

INSERT INTO `application_sanitary` (`applicationId`, `referenceNum`, `userId`, `businessId`, `annualEmployeePhysicalExam`, `typeLevelOfWaterSource`, `status`, `createdAt`, `updatedAt`) VALUES
(4, '9E9E1D64A2', 1, 1, 1, 'hehez', 'Active', '2017-01-23 12:43:22', '2017-01-29 03:48:43'),
(5, '47B3DF6BF4', 1, 1, 0, 'asdasdas', 'standby', '2017-01-23 12:47:52', '2017-01-23 12:47:52');

-- --------------------------------------------------------

--
-- Table structure for table `application_zoning`
--

CREATE TABLE IF NOT EXISTS `application_zoning` (
  `applicationId` int(255) NOT NULL,
  `referenceNum` varchar(255) NOT NULL,
  `userId` int(5) NOT NULL,
  `businessId` int(10) NOT NULL,
  `status` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_zoning`
--

INSERT INTO `application_zoning` (`applicationId`, `referenceNum`, `userId`, `businessId`, `status`, `createdAt`, `updatedAt`) VALUES
(1, 'E4302995BD', 1, 1, 'Cancelled', '2017-01-22 13:20:51', '2017-01-24 05:08:00'),
(5, '9E9E1D64A2', 1, 1, 'Active', '2017-01-23 12:43:22', '2017-01-29 03:48:49'),
(6, '47B3DF6BF4', 1, 1, 'Active', '2017-01-23 12:47:52', '2017-01-30 13:54:52');

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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approvals`
--

INSERT INTO `approvals` (`approvalId`, `referenceNum`, `role`, `type`, `staff`, `createdAt`, `updatedAt`) VALUES
(37, '9E9E1D64A2', 4, 'Validate', 'Rene Manabat', '2017-01-24 11:33:06', '2017-01-24 11:33:06'),
(38, '9E9E1D64A2', 4, 'Approve', 'Rene Manabat', '2017-01-24 11:33:17', '2017-01-24 11:33:17'),
(39, '9E9E1D64A2', 10, 'Validate', 'tester sanitary', '2017-01-24 11:33:26', '2017-01-24 11:33:26'),
(40, '9E9E1D64A2', 10, 'Approve', 'tester sanitary', '2017-01-24 11:34:14', '2017-01-29 03:48:13'),
(41, '9E9E1D64A2', 7, 'Validate', 'tester cenro', '2017-01-24 11:34:41', '2017-01-24 11:34:41'),
(42, '9E9E1D64A2', 7, 'Approve', 'tester cenro', '2017-01-24 11:36:15', '2017-01-29 03:48:10'),
(43, '9E9E1D64A2', 8, 'Validate', 'zoning tester', '2017-01-24 11:36:38', '2017-01-28 13:02:04'),
(44, '9E9E1D64A2', 8, 'Approve', 'zoning tester', '2017-01-24 11:36:47', '2017-01-29 03:48:03'),
(45, '9E9E1D64A2', 4, 'Issue', 'Rene Manabat', '2017-01-28 09:04:57', '2017-01-29 03:48:19'),
(46, '47B3DF6BF4', 8, 'Validate', 'zoning tester', '2017-01-30 13:52:59', '2017-01-30 13:52:59'),
(47, '47B3DF6BF4', 8, 'Approve', 'zoning tester', '2017-01-30 13:54:52', '2017-01-30 13:54:52');

-- --------------------------------------------------------

--
-- Table structure for table `assessments`
--

CREATE TABLE IF NOT EXISTS `assessments` (
  `assessmentId` int(10) NOT NULL,
  `referenceNum` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `status` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE IF NOT EXISTS `businesses` (
  `businessId` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `ownerId` int(10) NOT NULL,
  `presidentTreasurerName` varchar(255) NOT NULL,
  `businessName` varchar(255) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `tradeName` varchar(255) NOT NULL,
  `signageName` varchar(255) NOT NULL,
  `organizationType` varchar(255) NOT NULL,
  `corporationName` varchar(255) NOT NULL,
  `dateOfOperation` varchar(255) NOT NULL,
  `businessDesc` varchar(255) NOT NULL,
  `PIN` int(255) NOT NULL,
  `bldgName` varchar(255) NOT NULL,
  `houseBldgNum` varchar(255) NOT NULL,
  `unitNum` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `subdivision` varchar(255) NOT NULL,
  `cityMunicipality` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `telNum` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pollutionControlOfficer` varchar(255) NOT NULL,
  `maleEmployees` int(255) NOT NULL,
  `femaleEmployees` int(255) NOT NULL,
  `PWDEmployees` int(255) NOT NULL,
  `businessArea` varchar(255) NOT NULL,
  `LGUResidingEmployees` int(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`businessId`, `userId`, `ownerId`, `presidentTreasurerName`, `businessName`, `companyName`, `tradeName`, `signageName`, `organizationType`, `corporationName`, `dateOfOperation`, `businessDesc`, `PIN`, `bldgName`, `houseBldgNum`, `unitNum`, `street`, `barangay`, `subdivision`, `cityMunicipality`, `province`, `telNum`, `email`, `pollutionControlOfficer`, `maleEmployees`, `femaleEmployees`, `PWDEmployees`, `businessArea`, `LGUResidingEmployees`, `createdAt`, `updatedAt`) VALUES
(1, 1, 1, 'Labay Billy James', 'Mastermind IT Solutions', 'Mastermind', 'Mastermind', 'mastermind-signage', 'Corporation', 'Jason Corp', '01/22/2017', 'description here', 23232, 'Mercury', 'Blk 29 Lot 19', '17', 'Dumaguete Street', 'Santo Tomas', 'South City Homes', 'Biñan City', 'Laguna', '0498393969', 'mastermind@yahoo.com', 'Jason Hernandez', 20, 15, 2, '22222', 10, '2017-01-21 17:07:12', '2017-01-29 06:12:07'),
(4, 1, 1, 'Jason Hernandez', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Single', 'NA', '01/29/2017', 'Test Business 10', 0, 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Malaban', 'Test Business 10', 'Biñan City', 'Laguna', '2222', 'test@yahoo.com', 'Jason Hernandez', 1, 2, 3, '1212', 4, '2017-01-29 10:04:56', '2017-01-29 12:23:04'),
(5, 18, 3, 'Jason Hernandez', 'Jason Business', 'Jason Company', 'Jason Jason', 'Jason Business', 'Single', 'NA', '01/30/2017', 'Jason Desc', 0, 'w', 'q', 'e', 'r', 'San Jose', 'd', 'Biñan City', 'Laguna', '123123123', 'hernandez.jason@yahoo.com', '1', 2, 3, 4, '1', 5, '2017-01-30 15:37:56', '2017-01-30 15:37:56');

-- --------------------------------------------------------

--
-- Table structure for table `business_activities`
--

CREATE TABLE IF NOT EXISTS `business_activities` (
  `activityId` int(255) NOT NULL,
  `bploId` int(10) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `lineOfBusiness` varchar(255) DEFAULT NULL,
  `numOfUnits` int(255) DEFAULT NULL,
  `capitalization` varchar(255) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_activities`
--

INSERT INTO `business_activities` (`activityId`, `bploId`, `code`, `lineOfBusiness`, `numOfUnits`, `capitalization`, `createdAt`, `updatedAt`) VALUES
(1, 1, '123', '12321', 321321, '3213', '2017-01-22 13:20:51', '2017-01-22 13:20:51'),
(5, 5, '1', '22', 33, '444', '2017-01-23 12:43:22', '2017-01-23 12:43:22'),
(6, 6, '1', '2', 3, '4', '2017-01-23 12:47:52', '2017-01-23 12:47:52');

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
-- Table structure for table `issued_applications`
--

CREATE TABLE IF NOT EXISTS `issued_applications` (
  `issueId` int(10) NOT NULL,
  `referenceNum` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `type` varchar(30) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issued_applications`
--

INSERT INTO `issued_applications` (`issueId`, `referenceNum`, `dept`, `type`, `createdAt`, `updatedAt`) VALUES
(1, '9E9E1D64A2', 'CHO', 'New', '2017-01-24 11:34:14', '2017-01-24 15:33:13'),
(3, '9E9E1D64A2', 'CENRO', 'New', '2017-01-24 11:36:15', '2017-01-24 15:33:16'),
(4, '9E9E1D64A2', 'Zoning', 'New', '2017-01-24 11:36:47', '2017-01-24 15:33:19'),
(5, '9E9E1D64A2', 'BPLO', 'New', '2017-01-24 15:35:35', '2017-01-24 15:59:32'),
(6, '47B3DF6BF4', 'Zoning', 'New', '2017-01-30 13:54:52', '2017-01-30 13:54:52');

-- --------------------------------------------------------

--
-- Table structure for table `lessors`
--

CREATE TABLE IF NOT EXISTS `lessors` (
  `lessorId` int(255) NOT NULL,
  `bploId` int(10) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lessors`
--

INSERT INTO `lessors` (`lessorId`, `bploId`, `firstName`, `middleName`, `lastName`, `address`, `subdivision`, `barangay`, `cityMunicipality`, `province`, `monthlyRental`, `telNum`, `email`, `emergencyContactPerson`, `emergencyTelNum`, `emergencyEmail`, `createdAt`, `updatedAt`) VALUES
(1, 1, '123', '213213', '123123', '213213', '21321321', '3213', '213213', '213', 123213, 3213, 'asdasd@yahoo.com', '12312', 3123, 'asda@yahoo.com', '2017-01-22 13:20:51', '2017-01-22 13:20:51');

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
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notificationId`, `referenceNum`, `status`, `role`, `notifMessage`, `createdAt`, `updatedAt`) VALUES
(96, '9E9E1D64A2', 'Read', 3, 'Mastermind IT Solutions has been validated by Rene Manabat of BPLO. Please check your application status.', '2017-01-24 11:33:06', '2017-01-25 13:05:13'),
(97, '9E9E1D64A2', 'Unread', 5, 'Incoming', '2017-01-24 11:33:17', '2017-01-24 11:33:17'),
(98, '9E9E1D64A2', 'Unread', 6, 'Incoming', '2017-01-24 11:33:17', '2017-01-24 11:33:17'),
(99, '9E9E1D64A2', 'Read', 7, 'Incoming', '2017-01-24 11:33:17', '2017-01-24 11:34:36'),
(100, '9E9E1D64A2', 'Read', 8, 'Incoming', '2017-01-24 11:33:17', '2017-01-24 11:36:33'),
(101, '9E9E1D64A2', 'Unread', 9, 'Incoming', '2017-01-24 11:33:17', '2017-01-24 11:33:17'),
(102, '9E9E1D64A2', 'Read', 10, 'Incoming', '2017-01-24 11:33:17', '2017-01-24 11:33:22'),
(103, '9E9E1D64A2', 'Read', 3, 'Mastermind IT Solutions has been approved by Rene Manabat of BPLO. You can now go to other required offices to process your application.', '2017-01-24 11:33:17', '2017-01-25 13:05:13'),
(104, '9E9E1D64A2', 'Read', 3, 'Mastermind IT Solutions has been validated by tester sanitary of City Health Office. Please check application status.', '2017-01-24 11:33:26', '2017-01-25 13:05:13'),
(105, '9E9E1D64A2', 'Read', 3, 'Mastermind IT Solutions has been approved by tester sanitary of City Health Office.', '2017-01-24 11:34:14', '2017-01-25 13:05:13'),
(106, '9E9E1D64A2', 'Read', 3, 'Mastermind IT Solutions has been validated by tester cenro of City Environment and Natural Resources. Please check application status.', '2017-01-24 11:34:41', '2017-01-25 13:05:13'),
(107, '9E9E1D64A2', 'Read', 3, 'Mastermind IT Solutions has been approved by tester cenro of City Environment and Natural Resources.', '2017-01-24 11:36:15', '2017-01-25 13:05:13'),
(108, '9E9E1D64A2', 'Read', 3, 'Mastermind IT Solutions has been validated by zoning tester of Zoning Department. Please check application status.', '2017-01-24 11:36:38', '2017-01-25 13:05:13'),
(109, '9E9E1D64A2', 'Read', 4, 'Completed', '2017-01-24 11:36:47', '2017-01-24 14:49:35'),
(110, '9E9E1D64A2', 'Read', 3, 'Mastermind IT Solutions has been approved by zoning tester of Zoning Department.', '2017-01-24 11:36:47', '2017-01-28 12:06:57'),
(111, '9E9E1D64A2', 'Read', 3, ' Mastermind IT Solutions has expired, please check application details for renewal request.', '2017-01-28 12:17:00', '2017-01-28 12:23:04'),
(112, '9E9E1D64A2', 'Read', 3, 'Mastermind IT Solutions application has expired, please check application details for renewal request.', '2017-01-28 13:14:26', '2017-01-29 04:02:37'),
(113, 'E4302995BD', 'Read', 3, 'Mastermind IT Solutions application has expired, please check application details for renewal request.', '2017-01-29 09:08:52', '2017-01-29 09:48:10'),
(114, '47B3DF6BF4', 'Read', 3, 'Mastermind IT Solutions has been validated by zoning tester of Zoning Department. Please check application status.', '2017-01-30 13:52:59', '2017-01-30 14:03:56'),
(115, '47B3DF6BF4', 'Read', 3, 'Mastermind IT Solutions has been approved by zoning tester of Zoning Department.', '2017-01-30 13:54:52', '2017-01-30 14:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE IF NOT EXISTS `owners` (
  `ownerId` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `houseBldgNo` varchar(255) DEFAULT NULL,
  `bldgName` varchar(255) DEFAULT NULL,
  `unitNum` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `subdivision` varchar(255) DEFAULT NULL,
  `cityMunicipality` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `PIN` varchar(255) NOT NULL,
  `contactNum` varchar(255) DEFAULT NULL,
  `telNum` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `createdAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`ownerId`, `userId`, `firstName`, `middleName`, `lastName`, `suffix`, `gender`, `houseBldgNo`, `bldgName`, `unitNum`, `street`, `barangay`, `subdivision`, `cityMunicipality`, `province`, `PIN`, `contactNum`, `telNum`, `email`, `createdAt`, `updatedAt`) VALUES
(1, 1, 'Renjo', 'Enriquez', 'Dolosa', '', 'Male', 'Blk 29 Lot 19', 'N/A', 'N/A', 'Dumaguete Street owner', 'Santo Tomas owner', 'South City Homes owner', 'Biñan City owner', 'Laguna owner', '1212', '09175138266', '8393969', 'dolosa.renjo@yahoo.com', '2017-01-21 15:07:36', '2017-02-01 15:08:22'),
(3, 18, 'Jason', 'Tadeo', 'Hernandez', '', 'Male', 'q', 'w', 'e', 'r', 's', 'a', 'd', 'f', '1212', '123123', '123123', 'hernandez.jason@yahoo.com', '2017-01-30 15:34:47', '2017-02-01 15:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `reference_numbers`
--

CREATE TABLE IF NOT EXISTS `reference_numbers` (
  `referenceId` int(5) NOT NULL,
  `userId` int(5) NOT NULL,
  `referenceNum` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reference_numbers`
--

INSERT INTO `reference_numbers` (`referenceId`, `userId`, `referenceNum`, `createdAt`, `updatedAt`) VALUES
(1, 1, 'E4302995BD', '2017-01-22 13:20:51', '2017-01-22 13:20:51'),
(5, 1, '9E9E1D64A2', '2017-01-23 12:43:22', '2017-01-23 12:43:22'),
(6, 1, '47B3DF6BF4', '2017-01-23 12:47:51', '2017-01-23 12:47:51');

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `role`, `firstName`, `lastName`, `middleName`, `suffix`, `gender`, `email`, `civilStatus`, `password`, `birthDate`, `createdAt`, `updatedAt`) VALUES
(1, 3, 'Renjo', 'Dolosa', 'Enriquez', '', 'Male', 'dolosa.renjo@yahoo.com', 'Single', '$2y$11$Wlkq3iwlkczgZjQAb5aUfuRUnEP0yxS220AmjkYyIUT75Ru8U5qeu', '02/17/1995', '2017-01-21 14:02:28', '2017-01-21 14:02:28'),
(2, 3, 'Ida Julienne', 'Peñaflor', 'Mangaliman', '', 'Female', 'penaflor.ida@yahoo.com', 'Single', '$2y$11$sUsLgv1XBm.tp8wqO/EezubRAhoki2qkP..viHY1emnPTUsqLN4Yu', '08/10/1996', '2017-01-21 17:31:56', '2017-01-21 17:31:56'),
(3, 4, 'Rene', 'Manabat', 'C', '', 'Male', 'manabat.rene@yahoo.com', 'Single', '$2y$11$siARsmYAQeaUes.lc6GGtuo4.Z064.hLHsjmfVXUrsMlLz2WWSNfi', '01/22/2017', '2017-01-22 15:21:10', '2017-01-22 15:21:19'),
(4, 8, 'zoning', 'tester', '.', '', 'Female', 'zoning@yahoo.com', 'Single', '$2y$11$9AwRmguWvE7xxtbSmU0PI.5XJUt11WAo9V898EXJConqBItphzjkW', '01/23/2017', '2017-01-23 13:40:13', '2017-01-23 13:40:23'),
(5, 7, 'tester', 'cenro', '.', '', 'Male', 'cenro@yahoo.com', 'Single', '$2y$11$U5jDMB/IcLbBfsGfVjXee..yvduqOlmGhpvtsaJ8xjkZFENQ8j45a', '01/24/2017', '2017-01-24 02:48:22', '2017-01-24 02:48:57'),
(6, 10, 'tester', 'sanitary', '.', '', 'Female', 'sanitary@yahoo.com', 'Single', '$2y$11$8XrzAcPA81u740c160gZAOXPH72ANUhceakMT560.vsusgkAAWD/.', '01/24/2017', '2017-01-24 03:33:39', '2017-01-24 03:34:43'),
(17, 3, 'Tester', 'Tester', '.', '', 'Male', 'dotraze@gmail.com', 'Single', '$2y$11$xmsdTzVLqmjVl.CnzGPkL.OY6EcwT6z7oF8IMGUwMuYc87Q5piPBa', '01/28/2017', '2017-01-28 06:50:45', '2017-01-28 06:50:45'),
(18, 3, 'Jason', 'Hernandez', '.', '', 'Male', 'hernandez.jason@yahoo.com', 'Single', '$2y$11$13D4.WwANCm.qEwUDQ.Ebe6iRerxxYEMcw1r8kEvYSbOt6aV3JZwS', '01/30/2017', '2017-01-30 15:33:13', '2017-01-30 15:54:57');

-- --------------------------------------------------------

--
-- Table structure for table `verifications`
--

CREATE TABLE IF NOT EXISTS `verifications` (
  `verificationId` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verifications`
--

INSERT INTO `verifications` (`verificationId`, `userId`, `code`, `status`, `createdAt`, `updatedAt`) VALUES
(8, 1, '0C18C0C597', 1, '2017-01-28 06:58:35', '2017-01-28 06:58:35'),
(9, 18, 'CC983ED686', 1, '2017-01-30 15:33:36', '2017-01-30 15:33:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_bplo`
--
ALTER TABLE `application_bplo`
  ADD PRIMARY KEY (`applicationId`),
  ADD UNIQUE KEY `referenceNum` (`referenceNum`),
  ADD KEY `userId` (`userId`),
  ADD KEY `businessId` (`businessId`);

--
-- Indexes for table `application_cenro`
--
ALTER TABLE `application_cenro`
  ADD PRIMARY KEY (`applicationId`),
  ADD UNIQUE KEY `independentReferenceNumber` (`referenceNum`),
  ADD KEY `userId` (`userId`),
  ADD KEY `businessId` (`businessId`);

--
-- Indexes for table `application_sanitary`
--
ALTER TABLE `application_sanitary`
  ADD PRIMARY KEY (`applicationId`),
  ADD UNIQUE KEY `referenceNum_2` (`referenceNum`),
  ADD KEY `referenceNum` (`referenceNum`),
  ADD KEY `userId` (`userId`),
  ADD KEY `businessId` (`businessId`);

--
-- Indexes for table `application_zoning`
--
ALTER TABLE `application_zoning`
  ADD PRIMARY KEY (`applicationId`),
  ADD UNIQUE KEY `referenceNum` (`referenceNum`),
  ADD KEY `userId` (`userId`),
  ADD KEY `businessId` (`businessId`);

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
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`businessId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `ownerId` (`ownerId`);

--
-- Indexes for table `business_activities`
--
ALTER TABLE `business_activities`
  ADD PRIMARY KEY (`activityId`),
  ADD KEY `referenceNum` (`bploId`);

--
-- Indexes for table `charges`
--
ALTER TABLE `charges`
  ADD PRIMARY KEY (`chargeId`),
  ADD KEY `referenceNum` (`referenceNum`);

--
-- Indexes for table `issued_applications`
--
ALTER TABLE `issued_applications`
  ADD PRIMARY KEY (`issueId`),
  ADD KEY `referenceNum` (`referenceNum`);

--
-- Indexes for table `lessors`
--
ALTER TABLE `lessors`
  ADD PRIMARY KEY (`lessorId`),
  ADD KEY `referenceNum` (`bploId`);

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
-- Indexes for table `reference_numbers`
--
ALTER TABLE `reference_numbers`
  ADD PRIMARY KEY (`referenceId`),
  ADD UNIQUE KEY `referenceNum` (`referenceNum`),
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
-- Indexes for table `verifications`
--
ALTER TABLE `verifications`
  ADD PRIMARY KEY (`verificationId`),
  ADD KEY `userId` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_bplo`
--
ALTER TABLE `application_bplo`
  MODIFY `applicationId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `application_cenro`
--
ALTER TABLE `application_cenro`
  MODIFY `applicationId` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `application_sanitary`
--
ALTER TABLE `application_sanitary`
  MODIFY `applicationId` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `application_zoning`
--
ALTER TABLE `application_zoning`
  MODIFY `applicationId` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `approvals`
--
ALTER TABLE `approvals`
  MODIFY `approvalId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `assessments`
--
ALTER TABLE `assessments`
  MODIFY `assessmentId` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `businessId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `business_activities`
--
ALTER TABLE `business_activities`
  MODIFY `activityId` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `charges`
--
ALTER TABLE `charges`
  MODIFY `chargeId` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `issued_applications`
--
ALTER TABLE `issued_applications`
  MODIFY `issueId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `lessors`
--
ALTER TABLE `lessors`
  MODIFY `lessorId` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notificationId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `ownerId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reference_numbers`
--
ALTER TABLE `reference_numbers`
  MODIFY `referenceId` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleId` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `verifications`
--
ALTER TABLE `verifications`
  MODIFY `verificationId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `application_bplo`
--
ALTER TABLE `application_bplo`
  ADD CONSTRAINT `application_bplo_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `application_bplo_ibfk_2` FOREIGN KEY (`referenceNum`) REFERENCES `reference_numbers` (`referenceNum`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `application_bplo_ibfk_3` FOREIGN KEY (`businessId`) REFERENCES `businesses` (`businessId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `application_cenro`
--
ALTER TABLE `application_cenro`
  ADD CONSTRAINT `application_cenro_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `application_cenro_ibfk_2` FOREIGN KEY (`referenceNum`) REFERENCES `reference_numbers` (`referenceNum`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `application_cenro_ibfk_3` FOREIGN KEY (`businessId`) REFERENCES `businesses` (`businessId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `application_sanitary`
--
ALTER TABLE `application_sanitary`
  ADD CONSTRAINT `application_sanitary_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `application_sanitary_ibfk_2` FOREIGN KEY (`referenceNum`) REFERENCES `reference_numbers` (`referenceNum`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `application_sanitary_ibfk_3` FOREIGN KEY (`businessId`) REFERENCES `businesses` (`businessId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `application_zoning`
--
ALTER TABLE `application_zoning`
  ADD CONSTRAINT `application_zoning_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `application_zoning_ibfk_2` FOREIGN KEY (`referenceNum`) REFERENCES `reference_numbers` (`referenceNum`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `application_zoning_ibfk_3` FOREIGN KEY (`businessId`) REFERENCES `businesses` (`businessId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `approvals`
--
ALTER TABLE `approvals`
  ADD CONSTRAINT `approvals_ibfk_2` FOREIGN KEY (`role`) REFERENCES `roles` (`roleId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `approvals_ibfk_3` FOREIGN KEY (`referenceNum`) REFERENCES `reference_numbers` (`referenceNum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `assessments`
--
ALTER TABLE `assessments`
  ADD CONSTRAINT `assessments_ibfk_1` FOREIGN KEY (`referenceNum`) REFERENCES `reference_numbers` (`referenceNum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `businesses`
--
ALTER TABLE `businesses`
  ADD CONSTRAINT `businesses_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `businesses_ibfk_2` FOREIGN KEY (`ownerId`) REFERENCES `owners` (`ownerId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `business_activities`
--
ALTER TABLE `business_activities`
  ADD CONSTRAINT `business_activities_ibfk_1` FOREIGN KEY (`bploId`) REFERENCES `application_bplo` (`applicationId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `charges`
--
ALTER TABLE `charges`
  ADD CONSTRAINT `charges_ibfk_1` FOREIGN KEY (`referenceNum`) REFERENCES `reference_numbers` (`referenceNum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `issued_applications`
--
ALTER TABLE `issued_applications`
  ADD CONSTRAINT `issued_applications_ibfk_1` FOREIGN KEY (`referenceNum`) REFERENCES `reference_numbers` (`referenceNum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lessors`
--
ALTER TABLE `lessors`
  ADD CONSTRAINT `lessors_ibfk_1` FOREIGN KEY (`bploId`) REFERENCES `application_bplo` (`applicationId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`roleId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`referenceNum`) REFERENCES `reference_numbers` (`referenceNum`) ON DELETE CASCADE ON UPDATE CASCADE;

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

--
-- Constraints for table `verifications`
--
ALTER TABLE `verifications`
  ADD CONSTRAINT `verifications_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
