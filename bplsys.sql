-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2017 at 06:23 AM
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
-- Table structure for table `application_bfp`
--

CREATE TABLE IF NOT EXISTS `application_bfp` (
  `applicationId` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `businessId` int(10) DEFAULT NULL,
  `referenceNum` varchar(255) NOT NULL,
  `applicationDate` varchar(255) DEFAULT NULL,
  `storeys` int(10) DEFAULT NULL,
  `occupiedPortion` varchar(255) DEFAULT NULL,
  `areaPerFloor` int(10) DEFAULT NULL,
  `occupancyPermitNum` int(20) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_bfp`
--

INSERT INTO `application_bfp` (`applicationId`, `userId`, `businessId`, `referenceNum`, `applicationDate`, `storeys`, `occupiedPortion`, `areaPerFloor`, `occupancyPermitNum`, `status`, `createdAt`, `updatedAt`) VALUES
(25, 1, 17, '1E5E2270C6', 'February 22, 2017', 3, '3', 200, 123456, 'Active', '2017-02-22 14:05:00', '2017-02-23 00:48:14');

-- --------------------------------------------------------

--
-- Table structure for table `application_bplo`
--

CREATE TABLE IF NOT EXISTS `application_bplo` (
  `applicationId` int(10) NOT NULL,
  `referenceNum` varchar(255) NOT NULL,
  `userId` int(5) NOT NULL,
  `businessId` int(10) DEFAULT NULL,
  `taxYear` int(4) DEFAULT NULL,
  `applicationDate` varchar(255) DEFAULT NULL,
  `idPresented` varchar(255) DEFAULT NULL,
  `modeOfPayment` varchar(255) DEFAULT NULL,
  `DTISECCDA_RegNum` varchar(255) DEFAULT NULL,
  `DTISECCDA_Date` varchar(255) DEFAULT NULL,
  `brgyClearanceDateIssued` varchar(255) DEFAULT NULL,
  `CTCNum` varchar(255) DEFAULT NULL,
  `TIN` varchar(255) DEFAULT NULL,
  `entityName` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_bplo`
--

INSERT INTO `application_bplo` (`applicationId`, `referenceNum`, `userId`, `businessId`, `taxYear`, `applicationDate`, `idPresented`, `modeOfPayment`, `DTISECCDA_RegNum`, `DTISECCDA_Date`, `brgyClearanceDateIssued`, `CTCNum`, `TIN`, `entityName`, `status`, `createdAt`, `updatedAt`) VALUES
(37, '1E5E2270C6', 1, 17, 2017, 'February 22, 2017', 'Driver''s License - 000000', 'Quarterly', '123456', '02/22/2017', '02/22/2017', '123456', '123456', 'NA', 'Active', '2017-02-22 14:05:00', '2017-02-23 05:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `application_cenro`
--

CREATE TABLE IF NOT EXISTS `application_cenro` (
  `applicationId` int(255) NOT NULL,
  `userId` int(5) NOT NULL,
  `businessId` int(10) DEFAULT NULL,
  `referenceNum` varchar(255) DEFAULT NULL,
  `CNC` varchar(255) DEFAULT NULL,
  `LLDAClearance` varchar(255) DEFAULT NULL,
  `dischargePermit` varchar(255) DEFAULT NULL,
  `apsci` varchar(255) DEFAULT NULL,
  `productsAndByProducts` varchar(255) DEFAULT NULL,
  `smokeEmission` tinyint(1) DEFAULT NULL,
  `volatileCompound` tinyint(1) DEFAULT NULL,
  `fugitiveParticulates` varchar(255) DEFAULT NULL,
  `steamGenerator` varchar(255) DEFAULT NULL,
  `APCD` varchar(255) DEFAULT NULL,
  `stackHeight` varchar(255) DEFAULT NULL,
  `wastewaterTreatmentFacility` varchar(255) DEFAULT NULL,
  `wastewaterTreatmentOperationAndProcess` tinyint(1) DEFAULT NULL,
  `pendingCaseWithLLDA` varchar(255) DEFAULT NULL,
  `typeOfSolidWastesGenerated` varchar(255) DEFAULT NULL,
  `qtyPerDay` int(255) DEFAULT NULL,
  `garbageCollectionMethod` varchar(255) DEFAULT NULL,
  `frequencyOfGarbageCollection` varchar(255) DEFAULT NULL,
  `wasteCollector` varchar(255) DEFAULT NULL,
  `collectorAddress` varchar(255) DEFAULT NULL,
  `garbageDisposalMethod` varchar(255) DEFAULT NULL,
  `wasteMinimizationMethod` varchar(255) DEFAULT NULL,
  `drainageSystem` tinyint(1) DEFAULT NULL,
  `drainageType` varchar(255) DEFAULT NULL,
  `drainageDischargeLocation` varchar(255) DEFAULT NULL,
  `sewerageSystem` tinyint(1) DEFAULT NULL,
  `septicTank` tinyint(1) DEFAULT NULL,
  `sewerageDischargeLocation` varchar(255) DEFAULT NULL,
  `waterSupply` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `createdAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_cenro`
--

INSERT INTO `application_cenro` (`applicationId`, `userId`, `businessId`, `referenceNum`, `CNC`, `LLDAClearance`, `dischargePermit`, `apsci`, `productsAndByProducts`, `smokeEmission`, `volatileCompound`, `fugitiveParticulates`, `steamGenerator`, `APCD`, `stackHeight`, `wastewaterTreatmentFacility`, `wastewaterTreatmentOperationAndProcess`, `pendingCaseWithLLDA`, `typeOfSolidWastesGenerated`, `qtyPerDay`, `garbageCollectionMethod`, `frequencyOfGarbageCollection`, `wasteCollector`, `collectorAddress`, `garbageDisposalMethod`, `wasteMinimizationMethod`, `drainageSystem`, `drainageType`, `drainageDischargeLocation`, `sewerageSystem`, `septicTank`, `sewerageDischargeLocation`, `waterSupply`, `status`, `createdAt`, `updatedAt`) VALUES
(32, 1, 17, '1E5E2270C6', '02/22/2017', '02/22/2017', '02/22/2017', '02/22/2017', '', 1, 0, 'Gas', 'NA', 'dummy', '30', 'dummy', 1, 'NA', 'Household Wastes', 30, 'Truck Collection', 'Daily', 'dummy', 'dummy', 'Sanitary Landfill', 'Reduction', 1, 'Close/Underground', 'Public Drainage System', 1, 0, 'NA', 'Deep Well', 'Active', '2017-02-22 14:05:00', '2017-02-23 00:48:56');

-- --------------------------------------------------------

--
-- Table structure for table `application_engineering`
--

CREATE TABLE IF NOT EXISTS `application_engineering` (
  `applicationId` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `businessId` int(10) DEFAULT NULL,
  `referenceNum` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_engineering`
--

INSERT INTO `application_engineering` (`applicationId`, `userId`, `businessId`, `referenceNum`, `status`, `createdAt`, `updatedAt`) VALUES
(25, 1, 17, '1E5E2270C6', 'Active', '2017-02-22 14:05:00', '2017-02-22 15:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `application_sanitary`
--

CREATE TABLE IF NOT EXISTS `application_sanitary` (
  `applicationId` int(255) NOT NULL,
  `referenceNum` varchar(255) NOT NULL,
  `userId` int(5) NOT NULL,
  `businessId` int(10) DEFAULT NULL,
  `applicationDate` varchar(60) NOT NULL,
  `annualEmployeePhysicalExam` tinyint(1) DEFAULT NULL,
  `typeLevelOfWaterSource` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_sanitary`
--

INSERT INTO `application_sanitary` (`applicationId`, `referenceNum`, `userId`, `businessId`, `applicationDate`, `annualEmployeePhysicalExam`, `typeLevelOfWaterSource`, `status`, `createdAt`, `updatedAt`) VALUES
(31, '1E5E2270C6', 1, 17, 'February 22, 2017', 1, 'dummy', 'Active', '2017-02-22 14:05:00', '2017-02-23 00:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `application_zoning`
--

CREATE TABLE IF NOT EXISTS `application_zoning` (
  `applicationId` int(255) NOT NULL,
  `referenceNum` varchar(255) NOT NULL,
  `userId` int(5) NOT NULL,
  `businessId` int(10) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_zoning`
--

INSERT INTO `application_zoning` (`applicationId`, `referenceNum`, `userId`, `businessId`, `status`, `createdAt`, `updatedAt`) VALUES
(32, '1E5E2270C6', 1, 17, 'Active', '2017-02-22 14:05:00', '2017-02-23 00:46:22');

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
) ENGINE=InnoDB AUTO_INCREMENT=200 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approvals`
--

INSERT INTO `approvals` (`approvalId`, `referenceNum`, `role`, `type`, `staff`, `createdAt`, `updatedAt`) VALUES
(184, '1E5E2270C6', 9, 'Validate', 'tester engineering', '2017-02-22 14:11:18', '2017-02-22 14:11:18'),
(185, '1E5E2270C6', 9, 'Approve', 'tester engineering', '2017-02-22 15:04:29', '2017-02-22 15:04:29'),
(190, '1E5E2270C6', 4, 'Approve Capital', 'tester bplo', '2017-02-23 00:44:45', '2017-02-23 00:44:45'),
(191, '1E5E2270C6', 8, 'Validate', 'tester zoning', '2017-02-23 00:46:17', '2017-02-23 00:46:17'),
(192, '1E5E2270C6', 8, 'Approve', 'tester zoning', '2017-02-23 00:46:22', '2017-02-23 00:46:22'),
(193, '1E5E2270C6', 10, 'Validate', 'tester sanitary', '2017-02-23 00:47:18', '2017-02-23 00:47:18'),
(194, '1E5E2270C6', 10, 'Approve', 'tester sanitary', '2017-02-23 00:47:24', '2017-02-23 00:47:24'),
(195, '1E5E2270C6', 5, 'Validate', 'tester bfp', '2017-02-23 00:48:01', '2017-02-23 00:48:01'),
(196, '1E5E2270C6', 5, 'Approve', 'tester bfp', '2017-02-23 00:48:15', '2017-02-23 00:48:15'),
(197, '1E5E2270C6', 7, 'Validate', 'tester cenro', '2017-02-23 00:48:50', '2017-02-23 00:48:50'),
(198, '1E5E2270C6', 7, 'Approve', 'tester cenro', '2017-02-23 00:48:57', '2017-02-23 00:48:57'),
(199, '1E5E2270C6', 4, 'Issue', 'tester bplo', '2017-02-23 05:07:17', '2017-02-23 05:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `archived_applications`
--

CREATE TABLE IF NOT EXISTS `archived_applications` (
  `archiveId` int(10) NOT NULL,
  `referenceNum` varchar(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `taxYear` varchar(255) NOT NULL,
  `applicationDate` varchar(255) NOT NULL,
  `modeOfPayment` varchar(255) NOT NULL,
  `idPresented` varchar(255) NOT NULL,
  `DTISECCDA_RegNum` varchar(255) NOT NULL,
  `DTISECCDA_Date` varchar(255) NOT NULL,
  `brgyClearanceDateIssued` varchar(255) NOT NULL,
  `CTCNum` varchar(255) NOT NULL,
  `TIN` varchar(255) NOT NULL,
  `entityName` varchar(255) NOT NULL,
  `dateStarted` varchar(255) NOT NULL,
  `presidentTreasurerName` varchar(255) NOT NULL,
  `businessName` varchar(255) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `tradeName` varchar(255) NOT NULL,
  `signageName` varchar(255) NOT NULL,
  `organizationType` varchar(255) NOT NULL,
  `corporationName` varchar(255) NOT NULL,
  `dateOfOperation` varchar(255) NOT NULL,
  `businessDesc` varchar(255) NOT NULL,
  `PIN` varchar(255) NOT NULL,
  `bldgName` varchar(255) NOT NULL,
  `houseBldgNum` varchar(255) NOT NULL,
  `unitNum` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `subdivision` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `cityMunicipality` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `telNum` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pollutionControlOfficer` varchar(255) NOT NULL,
  `maleEmployees` varchar(255) NOT NULL,
  `femaleEmployees` varchar(255) NOT NULL,
  `PWDEmployees` varchar(255) NOT NULL,
  `LGUEMployees` varchar(255) NOT NULL,
  `businessArea` varchar(255) NOT NULL,
  `emergencyContactPerson` varchar(255) NOT NULL,
  `emergencyTelNum` varchar(255) NOT NULL,
  `emergencyEmail` varchar(255) NOT NULL,
  `zoneType` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL,
  `gmapAddress` varchar(255) NOT NULL,
  `ownerFirstName` varchar(255) NOT NULL,
  `ownerMiddleName` varchar(255) NOT NULL,
  `ownerLastName` varchar(255) NOT NULL,
  `ownerHouseBldgNum` varchar(255) NOT NULL,
  `ownerBldgName` varchar(255) NOT NULL,
  `ownerUnitNum` varchar(255) NOT NULL,
  `ownerStreet` varchar(255) NOT NULL,
  `ownerBarangay` varchar(255) NOT NULL,
  `ownerSubdivision` varchar(255) NOT NULL,
  `ownerCityMunicipality` varchar(255) NOT NULL,
  `ownerProvince` varchar(255) NOT NULL,
  `ownerContactNum` varchar(255) NOT NULL,
  `ownerTelNum` varchar(255) NOT NULL,
  `ownerEmail` varchar(255) NOT NULL,
  `ownerPIN` varchar(255) NOT NULL,
  `CNC` varchar(255) NOT NULL,
  `LLDAClearance` varchar(255) NOT NULL,
  `dischargePermit` varchar(255) NOT NULL,
  `apsci` varchar(255) NOT NULL,
  `productsAndByProducts` varchar(255) NOT NULL,
  `smokeEmission` varchar(255) NOT NULL,
  `volatileCompound` varchar(255) NOT NULL,
  `fugitiveParticulates` varchar(255) NOT NULL,
  `steamGenerator` varchar(255) NOT NULL,
  `APCD` varchar(255) NOT NULL,
  `stackHeight` varchar(255) NOT NULL,
  `wastewaterTreatmentFacility` varchar(255) NOT NULL,
  `wastewaterTreatmentOperationAndProcess` varchar(255) NOT NULL,
  `pendingCaseWithLLDA` varchar(255) NOT NULL,
  `typeOfSolidWastesGenerated` varchar(255) NOT NULL,
  `qtyPerDay` varchar(255) NOT NULL,
  `garbageCollectionMethod` varchar(255) NOT NULL,
  `frequencyOfGarbageCollection` varchar(255) NOT NULL,
  `wasteCollector` varchar(255) NOT NULL,
  `collectorAddress` varchar(255) NOT NULL,
  `garbageDisposalMethod` varchar(255) NOT NULL,
  `wasteMinimizationMethod` varchar(255) NOT NULL,
  `drainageSystem` varchar(255) NOT NULL,
  `drainageType` varchar(255) NOT NULL,
  `drainageDischargeLocation` varchar(255) NOT NULL,
  `sewerageSystem` varchar(255) NOT NULL,
  `septicTank` varchar(255) NOT NULL,
  `sewerageDischargeLocation` varchar(255) NOT NULL,
  `waterSupply` varchar(255) NOT NULL,
  `storeys` varchar(255) NOT NULL,
  `occupiedPortion` varchar(255) NOT NULL,
  `areaPerFloor` varchar(255) NOT NULL,
  `occupancyPermitNum` varchar(255) NOT NULL,
  `annualEmployeePhysicalExam` varchar(255) NOT NULL,
  `typeLevelOfWaterSource` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `archived_business_activities`
--

CREATE TABLE IF NOT EXISTS `archived_business_activities` (
  `archiveId` int(10) NOT NULL,
  `archiveApplicationId` int(10) NOT NULL,
  `lineOfBusiness` varchar(255) NOT NULL,
  `capitalization` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `archived_lessors`
--

CREATE TABLE IF NOT EXISTS `archived_lessors` (
  `archiveId` int(10) NOT NULL,
  `archiveApplicationId` int(10) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `subdivision` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `cityMunicipality` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `monthlyRental` varchar(255) NOT NULL,
  `telNum` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assessments`
--

CREATE TABLE IF NOT EXISTS `assessments` (
  `assessmentId` int(10) NOT NULL,
  `referenceNum` varchar(255) NOT NULL,
  `amount` double NOT NULL,
  `paidUpTo` varchar(255) NOT NULL,
  `status` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessments`
--

INSERT INTO `assessments` (`assessmentId`, `referenceNum`, `amount`, `paidUpTo`, `status`, `createdAt`, `updatedAt`) VALUES
(42, '1E5E2270C6', 0, 'Fourth Quarter', 'New', '2017-02-22 14:05:00', '2017-02-23 05:05:04');

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
  `zoneType` varchar(255) NOT NULL,
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
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL,
  `gmapAddress` varchar(255) NOT NULL,
  `telNum` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pollutionControlOfficer` varchar(255) NOT NULL,
  `maleEmployees` int(255) NOT NULL,
  `femaleEmployees` int(255) NOT NULL,
  `PWDEmployees` int(255) NOT NULL,
  `businessArea` varchar(255) NOT NULL,
  `LGUResidingEmployees` int(255) NOT NULL,
  `emergencyContactPerson` varchar(255) NOT NULL,
  `emergencyTelNum` varchar(255) NOT NULL,
  `emergencyEmail` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`businessId`, `userId`, `ownerId`, `presidentTreasurerName`, `businessName`, `companyName`, `tradeName`, `signageName`, `organizationType`, `corporationName`, `dateOfOperation`, `zoneType`, `businessDesc`, `PIN`, `bldgName`, `houseBldgNum`, `unitNum`, `street`, `barangay`, `subdivision`, `cityMunicipality`, `province`, `lat`, `lng`, `gmapAddress`, `telNum`, `email`, `pollutionControlOfficer`, `maleEmployees`, `femaleEmployees`, `PWDEmployees`, `businessArea`, `LGUResidingEmployees`, `emergencyContactPerson`, `emergencyTelNum`, `emergencyEmail`, `createdAt`, `updatedAt`) VALUES
(1, 1, 1, 'Labay Billy James', 'Mastermind IT Solutions', 'Mastermind', 'Mastermind', 'mastermind-signage', 'Corporation', 'Jason Corp', '01/22/2017', 'Single residential', 'description here', 23232, 'Mercury', 'Blk 29 Lot 19', '17', 'Dumaguete Street', 'Santo Tomas', 'South City Homes', 'Biñan City', 'Laguna', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', '0498393969', 'mastermind@yahoo.com', 'Jason Hernandez', 20, 15, 2, '22222', 10, 'emergencyTest', '8393939', 'emergency999@yahoo.com', '2017-01-21 17:07:12', '2017-02-19 10:14:08'),
(4, 1, 1, 'Jason Hernandez', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Single', 'NA', '01/29/2017', 'Single residential', 'Test Business 10', 0, 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Malaban', 'Test Business 10', 'Biñan City', 'Laguna', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', '2222', 'test@yahoo.com', 'Jason Hernandez', 1, 2, 3, '1212', 4, 'emergencyTest', '8393939', 'emergency999@yahoo.com', '2017-01-29 10:04:56', '2017-02-19 10:14:10'),
(5, 18, 3, 'Jason Hernandez', 'Jason Business', 'Jason Company', 'Jason Jason', 'Jason Business', 'Single', 'NA', '01/30/2017', 'Single residential', 'Jason Desc', 0, 'w', 'q', 'e', 'r', 'San Jose', 'd', 'Biñan City', 'Laguna', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', '123123123', 'hernandez.jason@yahoo.com', '1', 2, 3, 4, '1', 5, 'emergencyTest', '8393939', 'emergency999@yahoo.com', '2017-01-30 15:37:56', '2017-02-19 10:14:14'),
(6, 1, 6, 'test', 'test', 'test', 'test', 'test', 'Single', 'NA', '02/02/2017', 'Single residential', 'test', 0, '123', '123', '123', '123', 'Malaban', '123', 'Biñan City', 'Laguna', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', '123213', 'asd@yahoo.com', 'test', 22, 22, 22, '123', 22, 'emergencyTest', '8393939', 'emergency999@yahoo.com', '2017-02-02 11:47:20', '2017-02-19 10:14:15'),
(7, 1, 1, 'asda', '123', '123', '123', '123', 'Partnership', 'NA', '02/02/2017', 'Single residential', '123', 123, '123', '123', '123', '123', 'Canlalay', '123', 'Biñan City', 'Laguna', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', '123123', 'asda@yahoo.com', '123', 123, 123, 123, '123', 123, 'emergencyTest', '8393939', 'emergency999@yahoo.com', '2017-02-02 11:51:15', '2017-02-19 10:14:17'),
(8, 1, 1, 'Test 42', 'Test 42', 'Test 42', 'Test 42', 'Test 42', 'Single', 'NA', '02/09/2017', 'Single residential', 'Test 42', 1121, 'Test 42', 'Test 42', 'Test 42', 'Test 42', 'Malaban', 'Test 42', 'Biñan City', 'Laguna', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', '12345', 'asdx@yahoo.com', 'Test 42', 5, 5, 5, '120', 5, 'Test 42', '12345', 'asdx@yahoo.com', '2017-02-09 05:32:18', '2017-02-09 15:24:46'),
(9, 1, 1, 'Test 43', 'Test 43', 'Test 43', 'Test 43', 'Test 43', 'Partnership', 'NA', '02/09/2017', 'Commercial/Industrial kind', 'Test 43', 1522, 'Test 43', 'Test 43', 'Test 43', 'Test 43', 'Platero', 'Test 43', 'Biñan City', 'Laguna', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', '123123', 'test43@yahoo.com', 'Test 43', 10, 10, 10, '255', 10, 'Test 43', '12312', 'test43@yahoo.com', '2017-02-09 15:24:03', '2017-02-09 15:24:03'),
(10, 21, 7, 'asd', 'Business ni Maam', 'asd', 'asd', 'asd', 'Single', 'NA', '02/11/2017', 'Single residential', 'asdsa', 1171, 'asd', 'asd', 'asd', 'asd', 'Loma', 'asd', 'Biñan City', 'Laguna', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', '123', 'rhea@yahoo.com', 'asd', 5, 5, 5, '500', 5, 'asd', '123', 'rhea@yahoo.com', '2017-02-11 07:05:03', '2017-02-11 07:05:03'),
(11, 1, 6, 'Test 44', 'Test 44', 'Test 44', 'Test 44', 'Test 44', 'Cooperative', 'NA', '02/15/2017', 'Apartments/Townhouses', 'Test 44', 1121, 'Test 44', 'Test 44', 'Test 44', 'Test 44', 'Bungahan', 'Test 44', 'Biñan City', 'Laguna', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', '12112121', 'test43@yahoo.com', 'Test 44', 12, 12, 12, '300', 12, 'test 43', '1121', 'test43@yahoo.com', '2017-02-15 00:15:14', '2017-02-15 00:15:14'),
(12, 1, 1, 'dummy', 'Test 45', 'dummy', 'dummy', 'dummy', 'Single', 'NA', '02/16/2017', 'Single residential', 'dummy', 4024, 'dummy', 'dummy', 'dummy', 'dummy', 'Platero', 'dummy', 'Biñan City', 'Laguna', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', '1234', 'dummy@yahoo.com', 'dummy', 50, 50, 50, '300', 50, 'dummy', '1234', 'dummy@yahoo.com', '2017-02-16 11:05:10', '2017-02-16 11:05:10'),
(13, 21, 7, 'dummy', 'Business ni Maam 2', 'dummy', 'dummy', 'dummy', 'Single', 'NA', '02/17/2017', 'Commercial/Industrial kind', 'dummy', 4024, 'dummy', 'dummy', 'dummy', 'dummy', 'Canlalay', 'dummy', 'Biñan City', 'Laguna', '14.321307325527737', '121.08804702758789', 'Bergamot St, Biñan, Laguna, Philippines', '1234', 'dummy42@yahoo.com', 'dummy', 20, 20, 20, '350', 20, 'dummy', '1234', 'dummy42@yahoo.com', '2017-02-17 01:40:33', '2017-02-17 01:40:33'),
(14, 1, 8, 'dummy', 'Dummy Business', 'dummy', 'dummy', 'dummy', 'Single', 'NA', '02/19/2017', 'Single residential', 'dummy', 4024, 'dummy', 'dummy', 'dummy', 'dummy', 'Langkiwa', 'dummy', 'Biñan City', 'Laguna', 'NA', 'NA', 'NA', '123', 'dummy@yahoo.com', 'dummy', 50, 50, 50, '500', 50, 'dummy', '123', 'dummy@yahoo.com', '2017-02-19 00:18:41', '2017-02-19 00:18:41'),
(15, 1, 8, 'dummy', 'dummy dummy', 'dummy', 'dummy', 'dummy', 'Partnership', 'NA', '02/19/2017', 'Dormitories', 'dummy', 4024, 'dummy', 'dummy', 'dummy', 'dummy', 'Platero', 'dummy', 'Biñan City', 'Laguna', 'NA', 'NA', 'NA', '1234', 'asd@yahoo.com', 'dummy', 50, 50, 50, '456', 50, 'dummy', '123', 'dummy@yahoo.com', '2017-02-19 10:07:55', '2017-02-19 11:40:54'),
(16, 1, 8, 'dummy', 'Test 47', 'dummy', 'dummy', 'dummy', 'Corporation', 'dummy', '02/19/2017', 'Dormitories', 'dummy', 4024, 'dummy', 'dummy', 'dummy', 'dummy', 'San Jose', 'dummy', 'Biñan City', 'Laguna', 'NA', 'NA', 'NA', '1234', 'dummy@yahoo.com', 'dummy', 50, 50, 50, '555', 50, 'dummy', '1234', 'dummy@yahoo.com', '2017-02-19 10:12:02', '2017-02-19 10:12:02'),
(17, 1, 9, 'Jose Dacudao', 'Dacudao Apartment', 'NA', 'NA', 'Dacudao Apartment', 'Single', 'NA', '02/13/2017', 'Apartments/Townhouses', 'Dacudao Apartment', 4024, 'Dacudao Apartment', '1188', 'NA', 'NA', 'Malaban', 'WAWA', 'Biñan City', 'Laguna', '14.34536520712233', '121.09017133712769', 'Pedro H Escueta Street, Biñan, Laguna, Philippines', '123456', 'dacudao.jose@yahoo.com', 'Jose Dacudao', 10, 7, 0, '200', 0, 'Dacudao Jose', '123456', 'dacudao.jose@yahoo.com', '2017-02-22 13:54:22', '2017-02-22 13:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `business_activities`
--

CREATE TABLE IF NOT EXISTS `business_activities` (
  `activityId` int(255) NOT NULL,
  `bploId` int(10) NOT NULL,
  `lineOfBusiness` varchar(255) DEFAULT NULL,
  `capitalization` varchar(255) DEFAULT NULL,
  `activityStatus` varchar(30) NOT NULL DEFAULT 'active',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_activities`
--

INSERT INTO `business_activities` (`activityId`, `bploId`, `lineOfBusiness`, `capitalization`, `activityStatus`, `createdAt`, `updatedAt`) VALUES
(62, 37, 'Lessor (Renting)', '1500000', 'active', '2017-02-22 14:05:00', '2017-02-23 00:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `charges`
--

CREATE TABLE IF NOT EXISTS `charges` (
  `chargeId` int(10) NOT NULL,
  `assessmentId` int(10) NOT NULL,
  `period` varchar(5) NOT NULL,
  `due` double NOT NULL,
  `surcharge` double NOT NULL,
  `interest` double NOT NULL,
  `particulars` varchar(255) NOT NULL,
  `computed` tinyint(1) NOT NULL DEFAULT '0',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charges`
--

INSERT INTO `charges` (`chargeId`, `assessmentId`, `period`, `due`, `surcharge`, `interest`, `particulars`, `computed`, `createdAt`, `updatedAt`) VALUES
(2, 42, 'F1', 1000, 0, 0, 'ANNUAL INSPECTION FEE', 1, '2017-02-22 15:04:29', '2017-02-22 23:39:56'),
(78, 42, 'F1', 3000, 0, 0, 'MAYOR''S PERMIT FEE (LESSOR (RENTING))', 0, '2017-02-23 00:44:45', '2017-02-23 00:44:45'),
(79, 42, 'F1', 300, 0, 0, 'TAX ON LESSOR (RENTING)', 0, '2017-02-23 00:44:45', '2017-02-23 00:44:45'),
(80, 42, 'F1', 1000, 0, 0, 'ENVIRONMENTAL CLEARANCE FEE', 0, '2017-02-23 00:44:45', '2017-02-23 00:44:45'),
(81, 42, 'F1', 200, 0, 0, 'ZONING/LOCATIONAL CLEARANCE FEE', 0, '2017-02-23 00:44:45', '2017-02-23 00:44:45'),
(82, 42, 'F1', 600, 0, 0, 'GARBAGE SERVICE FEE', 0, '2017-02-23 00:44:45', '2017-02-23 00:44:45'),
(83, 42, 'F1', 200, 0, 0, 'BUSINESS INSPECTION FEE', 0, '2017-02-23 00:44:45', '2017-02-23 00:44:45'),
(84, 42, 'F1', 350, 0, 0, 'BUSINESS PLATE & STICKER', 0, '2017-02-23 00:44:45', '2017-02-23 00:44:45'),
(85, 42, 'F1', 800, 0, 0, 'SANITARY PERMIT FEE', 0, '2017-02-23 00:44:45', '2017-02-23 00:44:45'),
(86, 42, 'F1', 1700, 0, 0, 'HEALTH CARD FEE', 0, '2017-02-23 00:44:45', '2017-02-23 00:44:45');

-- --------------------------------------------------------

--
-- Table structure for table `grosses`
--

CREATE TABLE IF NOT EXISTS `grosses` (
  `grossId` int(255) NOT NULL,
  `activityId` int(255) NOT NULL,
  `previousGross` int(255) NOT NULL,
  `essentials` int(255) NOT NULL,
  `nonEssentials` int(255) NOT NULL,
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
(1, '1E5E2270C6', 'Engineering', 'New', '2017-02-22 15:04:29', '2017-02-22 15:04:29'),
(2, '1E5E2270C6', 'Zoning', 'New', '2017-02-23 00:46:22', '2017-02-23 00:46:22'),
(3, '1E5E2270C6', 'CHO', 'New', '2017-02-23 00:47:24', '2017-02-23 00:47:24'),
(4, '1E5E2270C6', 'BFP', 'New', '2017-02-23 00:48:15', '2017-02-23 00:48:15'),
(5, '1E5E2270C6', 'CENRO', 'New', '2017-02-23 00:48:57', '2017-02-23 00:48:57'),
(6, '1E5E2270C6', 'BPLO', 'New', '2017-02-23 05:07:17', '2017-02-23 05:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `itemId` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemId`, `name`, `createdAt`, `updatedAt`) VALUES
(1, 'DTI/SEC/CDA Permit', '2017-02-18 06:33:54', '2017-02-18 13:08:51'),
(2, 'Barangay Clearance', '2017-02-18 06:33:54', '2017-02-18 06:33:54'),
(3, 'Fire Safety Insurance Certificate', '2017-02-18 06:33:54', '2017-02-18 13:09:01'),
(4, 'Zoning Clearance', '2017-02-18 06:33:54', '2017-02-18 06:33:54'),
(5, 'Engineering Clearance', '2017-02-18 06:33:54', '2017-02-18 06:33:54'),
(6, 'Sanitary Permit', '2017-02-18 06:33:54', '2017-02-18 06:33:54'),
(7, 'Environmental Clearance', '2017-02-18 06:33:54', '2017-02-18 06:33:54'),
(8, 'Realty Tax Receipt', '2017-02-21 12:31:08', '2017-02-21 12:31:08'),
(9, 'Building Plan', '2017-02-21 12:31:08', '2017-02-21 12:31:08'),
(10, 'Certificate of Non-Coverage', '2017-02-21 12:39:37', '2017-02-21 12:39:37'),
(11, 'Environmental Compliance Certificate', '2017-02-21 12:39:37', '2017-02-21 12:39:37'),
(12, 'Laguna Lake Development Authority Certificate (LLDA)', '2017-02-21 12:39:37', '2017-02-21 12:39:37'),
(13, 'Water Analysis', '2017-02-21 12:39:37', '2017-02-21 12:39:37'),
(14, 'Vermin and Rodent Control', '2017-02-21 12:39:37', '2017-02-21 12:39:37'),
(15, 'Fire Safety Evaluation Clearance', '2017-02-21 12:39:37', '2017-02-21 12:39:37'),
(16, 'Building Permit', '2017-02-21 12:39:37', '2017-02-21 12:39:37'),
(17, 'FSIC for Occupancy', '2017-02-21 12:39:37', '2017-02-21 12:39:37'),
(18, 'Fire Insurance Policy', '2017-02-21 12:39:37', '2017-02-21 12:39:37'),
(19, 'Picture of Establishment (Exterior/Interior)', '2017-02-21 12:39:37', '2017-02-21 12:39:37'),
(20, 'Copy of Contract List (If renting)', '2017-02-21 12:39:37', '2017-02-21 12:39:37'),
(21, 'Receipt of Realty Tax (If own)', '2017-02-21 12:39:37', '2017-02-21 12:39:37'),
(22, 'Proof of Service and Maintenance of Fire Fighting Equipment', '2017-02-21 12:39:37', '2017-02-21 12:39:37'),
(23, 'Health Card per Employee', '2017-02-21 12:39:37', '2017-02-21 12:39:37'),
(24, 'Certificate of Land Title', '2017-02-21 12:44:00', '2017-02-21 12:44:00');

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
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=430 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notificationId`, `referenceNum`, `status`, `role`, `notifMessage`, `createdAt`, `updatedAt`) VALUES
(392, '1E5E2270C6', 'Read', 9, 'Incoming', '2017-02-22 14:05:00', '2017-02-22 14:10:45'),
(394, '1E5E2270C6', 'Read', 4, 'New', '2017-02-22 15:04:29', '2017-02-22 15:05:03'),
(395, '1E5E2270C6', 'Read', 3, 'Dacudao Apartment has been approved by tester engineering from the Office of the Building Official.', '2017-02-22 15:04:29', '2017-02-22 22:43:36'),
(416, '1E5E2270C6', 'Read', 5, 'Incoming', '2017-02-23 00:44:45', '2017-02-23 00:47:43'),
(417, '1E5E2270C6', 'Read', 7, 'Incoming', '2017-02-23 00:44:45', '2017-02-23 00:48:43'),
(418, '1E5E2270C6', 'Read', 8, 'Incoming', '2017-02-23 00:44:45', '2017-02-23 00:46:07'),
(419, '1E5E2270C6', 'Read', 10, 'Incoming', '2017-02-23 00:44:45', '2017-02-23 00:46:30'),
(420, '1E5E2270C6', 'Read', 3, '<strong>Capitalization</strong> for <strong>Dacudao Apartment</strong> has been <strong>approved!</strong> You can now proceed to other offices to process your remaining requirements.', '2017-02-23 00:44:45', '2017-02-23 00:50:24'),
(421, '1E5E2270C6', 'Read', 3, 'Dacudao Apartment has been validated by tester zoning of Zoning Department. Please check application status.', '2017-02-23 00:46:17', '2017-02-23 00:50:24'),
(422, '1E5E2270C6', 'Read', 3, 'Dacudao Apartment has been approved by tester zoning of Zoning Department.', '2017-02-23 00:46:22', '2017-02-23 00:50:24'),
(423, '1E5E2270C6', 'Read', 3, 'Dacudao Apartment has been validated by tester sanitary of City Health Office. Please check application status.', '2017-02-23 00:47:18', '2017-02-23 00:50:24'),
(424, '1E5E2270C6', 'Read', 3, 'Dacudao Apartment has been approved by tester sanitary of City Health Office.', '2017-02-23 00:47:24', '2017-02-23 00:50:24'),
(425, '1E5E2270C6', 'Read', 3, 'Dacudao Apartment has been validated by tester bfp of Bureau of Fire Protection. Please check application status.', '2017-02-23 00:48:01', '2017-02-23 00:50:24'),
(426, '1E5E2270C6', 'Read', 3, 'Dacudao Apartment has been approved by tester bfp of Bureau of Fire Protection.', '2017-02-23 00:48:15', '2017-02-23 00:50:24'),
(427, '1E5E2270C6', 'Read', 3, 'Dacudao Apartment has been validated by tester cenro of City Environment and Natural Resources. Please check application status.', '2017-02-23 00:48:50', '2017-02-23 00:50:24'),
(428, '1E5E2270C6', 'Read', 4, 'Completed', '2017-02-23 00:48:57', '2017-02-23 00:49:16'),
(429, '1E5E2270C6', 'Read', 3, 'Dacudao Apartment has been approved by tester cenro of City Environment and Natural Resources.', '2017-02-23 00:48:57', '2017-02-23 00:50:24');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`ownerId`, `userId`, `firstName`, `middleName`, `lastName`, `suffix`, `gender`, `houseBldgNo`, `bldgName`, `unitNum`, `street`, `barangay`, `subdivision`, `cityMunicipality`, `province`, `PIN`, `contactNum`, `telNum`, `email`, `createdAt`, `updatedAt`) VALUES
(1, 1, 'Renjo', 'Enriquez', 'Dolosa', '', 'Male', 'Blk 29 Lot 19', 'N/A', 'N/A', 'Dumaguete Street owner', 'Santo Tomas owner', 'South City Homes owner', 'Biñan City owner', 'Laguna owner', '1212', '09175138266', '8393969', 'dolosa.renjo@yahoo.com', '2017-01-21 15:07:36', '2017-02-01 15:08:22'),
(3, 18, 'Jason', 'Tadeo', 'Hernandez', '', 'Male', 'q', 'w', 'e', 'r', 's', 'a', 'd', 'f', '1212', '123123', '123123', 'hernandez.jason@yahoo.com', '2017-01-30 15:34:47', '2017-02-01 15:08:25'),
(5, 1, 'dummyedit', 'dummyedit', 'dummyedit', 'dummyedit', 'Male', 'dummyedit', 'dummyedit', 'dummyedit', 'dummyedit', 'dummyedit', 'dummyedit', 'dummyedit', 'dummyedit', '4024', '123', '123', 'dummyedit@yahoo.com', '2017-02-02 11:52:50', '2017-02-19 12:02:11'),
(6, 1, 'Owner 3', 'Owner 3', 'Owner 3', 'Owner 3', 'Female', 'Owner 3', 'Owner 3', 'Owner 3', 'Owner 3', 'Owner 3', 'Owner 3', 'Owner 3', 'Owner 3', '12312', '12321', '123123', 'asd@yahoo.com', '2017-02-02 11:57:23', '2017-02-08 14:35:48'),
(7, 21, 'Rhea', 'Nayang', 'Tortor', '', 'Female', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '12312', '123', '123', 'rhea@yahoo.com', '2017-02-11 06:58:25', '2017-02-11 08:22:12'),
(8, 1, 'Owner', 'Tester', 'Tester', '', 'Male', 'owner dummy', 'owner dummy', 'owner dummy', 'owner dummy', 'owner dummy', 'owner dummy', 'owner dummy', 'owner dummy', '4024', '1234', '1234', 'ownerdummy@yahoo.com', '2017-02-19 00:13:02', '2017-02-19 00:13:02'),
(9, 1, 'Jose', 'G', 'Dacudao', 'Sr.', 'Male', 'NA', 'NA', 'NA', 'Milagrosa Street', 'Pequeño', 'St. Villa Concepcion Subdivison', 'Naga City', 'Camarines Sur', '1188', '09175138266', '8393969', 'dacudao.jose@yahoo.com', '2017-02-22 13:49:47', '2017-02-22 13:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `transactionId` int(10) NOT NULL,
  `referenceNum` varchar(10) NOT NULL,
  `assessmentId` int(10) NOT NULL,
  `orNumber` varchar(30) NOT NULL,
  `amountPaid` double DEFAULT NULL,
  `quarterPaid` varchar(60) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`transactionId`, `referenceNum`, `assessmentId`, `orNumber`, `amountPaid`, `quarterPaid`, `createdAt`, `updatedAt`) VALUES
(4, '1E5E2270C6', 42, '000000', 9150, 'Fourth Quarter', '2017-02-23 05:07:17', '2017-02-23 05:07:17');

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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reference_numbers`
--

INSERT INTO `reference_numbers` (`referenceId`, `userId`, `referenceNum`, `createdAt`, `updatedAt`) VALUES
(40, 1, '1E5E2270C6', '2017-02-22 14:05:00', '2017-02-22 14:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `renewals`
--

CREATE TABLE IF NOT EXISTS `renewals` (
  `renewalId` int(10) NOT NULL,
  `referenceNum` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE IF NOT EXISTS `requirements` (
  `requirementId` int(10) NOT NULL,
  `itemId` int(10) NOT NULL,
  `roleId` int(10) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`requirementId`, `itemId`, `roleId`, `createdAt`, `updatedAt`) VALUES
(1, 1, 4, '2017-02-18 06:35:21', '2017-02-18 06:35:21'),
(2, 2, 4, '2017-02-18 06:35:21', '2017-02-18 06:35:21'),
(3, 3, 4, '2017-02-18 06:35:21', '2017-02-18 06:35:21'),
(4, 4, 4, '2017-02-18 06:35:21', '2017-02-18 06:35:21'),
(5, 5, 4, '2017-02-18 06:35:21', '2017-02-18 06:35:21'),
(6, 6, 4, '2017-02-18 06:35:21', '2017-02-18 06:35:21'),
(7, 7, 4, '2017-02-18 06:35:21', '2017-02-18 06:35:21'),
(8, 9, 8, '2017-02-21 12:51:20', '2017-02-21 12:51:20'),
(9, 2, 8, '2017-02-21 12:51:20', '2017-02-21 12:51:20'),
(10, 8, 8, '2017-02-21 12:51:20', '2017-02-21 12:51:20'),
(11, 24, 8, '2017-02-21 12:51:20', '2017-02-21 12:51:20'),
(12, 10, 7, '2017-02-21 12:51:20', '2017-02-21 12:51:20'),
(13, 11, 7, '2017-02-21 12:51:20', '2017-02-21 12:51:20'),
(14, 12, 7, '2017-02-21 12:51:20', '2017-02-21 12:51:20'),
(15, 1, 7, '2017-02-21 12:51:20', '2017-02-21 12:51:20'),
(16, 2, 7, '2017-02-21 12:51:20', '2017-02-21 12:51:20'),
(17, 23, 10, '2017-02-21 12:51:20', '2017-02-21 12:51:20'),
(18, 13, 10, '2017-02-21 12:51:20', '2017-02-21 12:51:20'),
(19, 14, 10, '2017-02-21 12:51:20', '2017-02-21 12:51:20'),
(20, 15, 5, '2017-02-21 12:51:20', '2017-02-21 12:51:20'),
(21, 16, 5, '2017-02-21 12:51:20', '2017-02-21 12:51:20'),
(22, 17, 5, '2017-02-21 12:51:20', '2017-02-21 12:51:20'),
(23, 18, 5, '2017-02-21 12:51:20', '2017-02-21 12:51:20'),
(24, 20, 5, '2017-02-21 12:51:20', '2017-02-21 12:51:20'),
(25, 21, 5, '2017-02-21 12:51:20', '2017-02-21 12:51:20'),
(26, 22, 5, '2017-02-21 12:51:34', '2017-02-21 12:51:34'),
(27, 19, 5, '2017-02-21 12:51:34', '2017-02-21 12:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `retirements`
--

CREATE TABLE IF NOT EXISTS `retirements` (
  `retirementId` int(10) NOT NULL,
  `referenceNum` varchar(10) NOT NULL,
  `reason` text NOT NULL,
  `status` varchar(60) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(7, 'CENRO', '2017-01-02 07:13:28', '2017-01-02 07:13:28'),
(8, 'Zoning', '2017-01-02 07:13:28', '2017-01-02 07:13:28'),
(9, 'Engineering', '2017-01-02 07:13:28', '2017-01-02 07:13:28'),
(10, 'CHO', '2017-01-02 07:13:28', '2017-01-02 07:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `submitted_requirements`
--

CREATE TABLE IF NOT EXISTS `submitted_requirements` (
  `submittedRequirementsId` int(10) NOT NULL,
  `referenceNum` varchar(10) NOT NULL,
  `requirementId` int(10) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submitted_requirements`
--

INSERT INTO `submitted_requirements` (`submittedRequirementsId`, `referenceNum`, `requirementId`, `createdAt`, `updatedAt`) VALUES
(1, '1E5E2270C6', 8, '2017-02-23 00:46:22', '2017-02-23 00:46:22'),
(2, '1E5E2270C6', 9, '2017-02-23 00:46:22', '2017-02-23 00:46:22'),
(3, '1E5E2270C6', 10, '2017-02-23 00:46:22', '2017-02-23 00:46:22'),
(4, '1E5E2270C6', 11, '2017-02-23 00:46:22', '2017-02-23 00:46:22'),
(5, '1E5E2270C6', 17, '2017-02-23 00:47:24', '2017-02-23 00:47:24'),
(6, '1E5E2270C6', 18, '2017-02-23 00:47:24', '2017-02-23 00:47:24'),
(7, '1E5E2270C6', 19, '2017-02-23 00:47:24', '2017-02-23 00:47:24'),
(8, '1E5E2270C6', 20, '2017-02-23 00:48:14', '2017-02-23 00:48:14'),
(9, '1E5E2270C6', 21, '2017-02-23 00:48:14', '2017-02-23 00:48:14'),
(10, '1E5E2270C6', 22, '2017-02-23 00:48:14', '2017-02-23 00:48:14'),
(11, '1E5E2270C6', 23, '2017-02-23 00:48:14', '2017-02-23 00:48:14'),
(12, '1E5E2270C6', 24, '2017-02-23 00:48:14', '2017-02-23 00:48:14'),
(13, '1E5E2270C6', 25, '2017-02-23 00:48:14', '2017-02-23 00:48:14'),
(14, '1E5E2270C6', 26, '2017-02-23 00:48:14', '2017-02-23 00:48:14'),
(15, '1E5E2270C6', 27, '2017-02-23 00:48:14', '2017-02-23 00:48:14'),
(16, '1E5E2270C6', 12, '2017-02-23 00:48:56', '2017-02-23 00:48:56'),
(17, '1E5E2270C6', 13, '2017-02-23 00:48:57', '2017-02-23 00:48:57'),
(18, '1E5E2270C6', 14, '2017-02-23 00:48:57', '2017-02-23 00:48:57'),
(19, '1E5E2270C6', 15, '2017-02-23 00:48:57', '2017-02-23 00:48:57'),
(20, '1E5E2270C6', 16, '2017-02-23 00:48:57', '2017-02-23 00:48:57');

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
  `contactNum` int(20) NOT NULL,
  `civilStatus` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `birthDate` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `role`, `firstName`, `lastName`, `middleName`, `suffix`, `gender`, `email`, `contactNum`, `civilStatus`, `password`, `birthDate`, `createdAt`, `updatedAt`) VALUES
(1, 3, 'Renjo', 'Dolosa', 'Enriquez', '', 'Male', 'dolosa.renjo@yahoo.com', 1234, 'Single', '$2y$11$Wlkq3iwlkczgZjQAb5aUfuRUnEP0yxS220AmjkYyIUT75Ru8U5qeu', '02/17/1995', '2017-01-21 14:02:28', '2017-02-02 16:08:13'),
(2, 3, 'Ida Julienne', 'Peñaflor', 'Mangaliman', '', 'Female', 'penaflor.ida@yahoo.com', 123, 'Single', '$2y$11$sUsLgv1XBm.tp8wqO/EezubRAhoki2qkP..viHY1emnPTUsqLN4Yu', '08/10/1996', '2017-01-21 17:31:56', '2017-02-02 11:06:11'),
(3, 4, 'tester', 'bplo', '', '', 'Male', 'bplo@yahoo.com', 123, 'Single', '$2y$11$siARsmYAQeaUes.lc6GGtuo4.Z064.hLHsjmfVXUrsMlLz2WWSNfi', '01/22/2017', '2017-01-22 15:21:10', '2017-02-04 08:06:16'),
(4, 8, 'tester', 'zoning', '.', '', 'Female', 'zoning@yahoo.com', 123, 'Single', '$2y$11$9AwRmguWvE7xxtbSmU0PI.5XJUt11WAo9V898EXJConqBItphzjkW', '01/23/2017', '2017-01-23 13:40:13', '2017-02-04 08:06:03'),
(5, 7, 'tester', 'cenro', '.', '', 'Male', 'cenro@yahoo.com', 123, 'Single', '$2y$11$U5jDMB/IcLbBfsGfVjXee..yvduqOlmGhpvtsaJ8xjkZFENQ8j45a', '01/24/2017', '2017-01-24 02:48:22', '2017-02-02 11:06:18'),
(6, 10, 'tester', 'sanitary', '.', '', 'Female', 'sanitary@yahoo.com', 123, 'Single', '$2y$11$8XrzAcPA81u740c160gZAOXPH72ANUhceakMT560.vsusgkAAWD/.', '01/24/2017', '2017-01-24 03:33:39', '2017-02-02 11:06:20'),
(17, 3, 'Tester', 'Tester', '.', '', 'Male', 'dotraze@gmail.com', 123, 'Single', '$2y$11$xmsdTzVLqmjVl.CnzGPkL.OY6EcwT6z7oF8IMGUwMuYc87Q5piPBa', '01/28/2017', '2017-01-28 06:50:45', '2017-02-02 11:06:22'),
(18, 3, 'Jason', 'Hernandez', '.', '', 'Male', 'hernandez.jason@yahoo.com', 123, 'Single', '$2y$11$13D4.WwANCm.qEwUDQ.Ebe6iRerxxYEMcw1r8kEvYSbOt6aV3JZwS', '01/30/2017', '2017-01-30 15:33:13', '2017-02-02 11:06:24'),
(19, 5, 'tester', 'bfp', '.', '', 'Female', 'bfp@yahoo.com', 123213, 'Single', '$2y$11$5DHPLvVINotpgFbSoT3azuZPViwN61LBiE9E/gnMWUHtfTHhw7gHi', '02/02/2017', '2017-02-02 14:19:03', '2017-02-19 12:39:02'),
(20, 9, 'tester', 'engineering', '.', '', 'Male', 'engineering@yahoo.com', 1231, 'Single', '$2y$11$V7fltHjfiyEXBRVWCc/3PeogLAmZvrnTE32/T5y8JPg9w8LRCAFLC', '02/02/2017', '2017-02-02 14:21:21', '2017-02-19 12:39:06'),
(21, 3, 'Rhea', 'Tortor', 'Nayang', '', 'Female', 'rhea@yahoo.com', 123123, 'Married', '$2y$11$Fp4uZboyoJIYGkXDLRDSOeS5qhDDL/rOpq4dDIT1zwj/0Y/0pQ1AG', '07/22/1996', '2017-02-11 06:55:41', '2017-02-11 06:55:41'),
(22, 1, 'Renjo', 'Dolosa', 'Enriquez', '', 'Male', 'bposys.admin@gmail.com', 12341234, 'Single', '$2y$11$te1xFi9kAtZoaH91FfZSfeoZ5DqTJyTrU/Uci63ZEtOXpqmzcUzd.', '02/17/1995', '2017-02-19 12:38:43', '2017-02-19 12:39:28');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verifications`
--

INSERT INTO `verifications` (`verificationId`, `userId`, `code`, `status`, `createdAt`, `updatedAt`) VALUES
(8, 1, '0C18C0C597', 1, '2017-01-28 06:58:35', '2017-01-28 06:58:35'),
(9, 18, 'CC983ED686', 1, '2017-01-30 15:33:36', '2017-01-30 15:33:36'),
(10, 19, '7AD43140DB', 0, '2017-02-02 14:19:03', '0000-00-00 00:00:00'),
(11, 20, 'ECFDC12D20', 0, '2017-02-02 14:21:21', '0000-00-00 00:00:00'),
(12, 21, 'C46F2B0C06', 1, '2017-02-11 06:56:38', '2017-02-11 06:56:38'),
(13, 22, 'B06B73504F', 0, '2017-02-19 12:38:43', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_bfp`
--
ALTER TABLE `application_bfp`
  ADD PRIMARY KEY (`applicationId`),
  ADD UNIQUE KEY `referenceNum` (`referenceNum`),
  ADD KEY `userId` (`userId`),
  ADD KEY `businessId` (`businessId`);

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
-- Indexes for table `application_engineering`
--
ALTER TABLE `application_engineering`
  ADD PRIMARY KEY (`applicationId`),
  ADD UNIQUE KEY `referenceNum` (`referenceNum`),
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
-- Indexes for table `archived_applications`
--
ALTER TABLE `archived_applications`
  ADD PRIMARY KEY (`archiveId`),
  ADD KEY `referenceNum` (`referenceNum`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `archived_business_activities`
--
ALTER TABLE `archived_business_activities`
  ADD PRIMARY KEY (`archiveId`),
  ADD KEY `archiveApplicationId` (`archiveApplicationId`) USING BTREE;

--
-- Indexes for table `archived_lessors`
--
ALTER TABLE `archived_lessors`
  ADD PRIMARY KEY (`archiveId`),
  ADD KEY `archiveApplicationId` (`archiveApplicationId`);

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
  ADD KEY `assessmentId` (`assessmentId`);

--
-- Indexes for table `grosses`
--
ALTER TABLE `grosses`
  ADD PRIMARY KEY (`grossId`),
  ADD KEY `activityId` (`activityId`);

--
-- Indexes for table `issued_applications`
--
ALTER TABLE `issued_applications`
  ADD PRIMARY KEY (`issueId`),
  ADD KEY `referenceNum` (`referenceNum`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemId`);

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`transactionId`),
  ADD KEY `referenceNum` (`referenceNum`),
  ADD KEY `assessmentId` (`assessmentId`);

--
-- Indexes for table `reference_numbers`
--
ALTER TABLE `reference_numbers`
  ADD PRIMARY KEY (`referenceId`),
  ADD UNIQUE KEY `referenceNum` (`referenceNum`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `renewals`
--
ALTER TABLE `renewals`
  ADD PRIMARY KEY (`renewalId`),
  ADD KEY `referenceNum` (`referenceNum`);

--
-- Indexes for table `requirements`
--
ALTER TABLE `requirements`
  ADD PRIMARY KEY (`requirementId`),
  ADD KEY `itemId` (`itemId`),
  ADD KEY `roleId` (`roleId`);

--
-- Indexes for table `retirements`
--
ALTER TABLE `retirements`
  ADD PRIMARY KEY (`retirementId`),
  ADD KEY `referenceNum` (`referenceNum`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `submitted_requirements`
--
ALTER TABLE `submitted_requirements`
  ADD PRIMARY KEY (`submittedRequirementsId`),
  ADD KEY `referenceNum` (`referenceNum`),
  ADD KEY `requirementId` (`requirementId`);

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
-- AUTO_INCREMENT for table `application_bfp`
--
ALTER TABLE `application_bfp`
  MODIFY `applicationId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `application_bplo`
--
ALTER TABLE `application_bplo`
  MODIFY `applicationId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `application_cenro`
--
ALTER TABLE `application_cenro`
  MODIFY `applicationId` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `application_engineering`
--
ALTER TABLE `application_engineering`
  MODIFY `applicationId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `application_sanitary`
--
ALTER TABLE `application_sanitary`
  MODIFY `applicationId` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `application_zoning`
--
ALTER TABLE `application_zoning`
  MODIFY `applicationId` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `approvals`
--
ALTER TABLE `approvals`
  MODIFY `approvalId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=200;
--
-- AUTO_INCREMENT for table `archived_applications`
--
ALTER TABLE `archived_applications`
  MODIFY `archiveId` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `archived_business_activities`
--
ALTER TABLE `archived_business_activities`
  MODIFY `archiveId` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `archived_lessors`
--
ALTER TABLE `archived_lessors`
  MODIFY `archiveId` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `assessments`
--
ALTER TABLE `assessments`
  MODIFY `assessmentId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `businessId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `business_activities`
--
ALTER TABLE `business_activities`
  MODIFY `activityId` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `charges`
--
ALTER TABLE `charges`
  MODIFY `chargeId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `grosses`
--
ALTER TABLE `grosses`
  MODIFY `grossId` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `issued_applications`
--
ALTER TABLE `issued_applications`
  MODIFY `issueId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `lessors`
--
ALTER TABLE `lessors`
  MODIFY `lessorId` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notificationId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=430;
--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `ownerId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `transactionId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `reference_numbers`
--
ALTER TABLE `reference_numbers`
  MODIFY `referenceId` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `renewals`
--
ALTER TABLE `renewals`
  MODIFY `renewalId` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `requirementId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `retirements`
--
ALTER TABLE `retirements`
  MODIFY `retirementId` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleId` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `submitted_requirements`
--
ALTER TABLE `submitted_requirements`
  MODIFY `submittedRequirementsId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `verifications`
--
ALTER TABLE `verifications`
  MODIFY `verificationId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `application_bfp`
--
ALTER TABLE `application_bfp`
  ADD CONSTRAINT `application_bfp_ibfk_1` FOREIGN KEY (`referenceNum`) REFERENCES `reference_numbers` (`referenceNum`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `application_bfp_ibfk_2` FOREIGN KEY (`businessId`) REFERENCES `businesses` (`businessId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `application_bfp_ibfk_3` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `application_engineering`
--
ALTER TABLE `application_engineering`
  ADD CONSTRAINT `application_engineering_ibfk_1` FOREIGN KEY (`referenceNum`) REFERENCES `reference_numbers` (`referenceNum`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `application_engineering_ibfk_2` FOREIGN KEY (`businessId`) REFERENCES `businesses` (`businessId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `application_engineering_ibfk_3` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `archived_applications`
--
ALTER TABLE `archived_applications`
  ADD CONSTRAINT `archived_applications_ibfk_1` FOREIGN KEY (`referenceNum`) REFERENCES `reference_numbers` (`referenceNum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `archived_business_activities`
--
ALTER TABLE `archived_business_activities`
  ADD CONSTRAINT `archived_business_activities_ibfk_1` FOREIGN KEY (`archiveApplicationId`) REFERENCES `archived_applications` (`archiveId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `archived_lessors`
--
ALTER TABLE `archived_lessors`
  ADD CONSTRAINT `archived_lessors_ibfk_1` FOREIGN KEY (`archiveApplicationId`) REFERENCES `archived_applications` (`archiveId`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `charges_ibfk_1` FOREIGN KEY (`assessmentId`) REFERENCES `assessments` (`assessmentId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `grosses`
--
ALTER TABLE `grosses`
  ADD CONSTRAINT `grosses_ibfk_1` FOREIGN KEY (`activityId`) REFERENCES `business_activities` (`activityId`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`referenceNum`) REFERENCES `assessments` (`referenceNum`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`assessmentId`) REFERENCES `assessments` (`assessmentId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `renewals`
--
ALTER TABLE `renewals`
  ADD CONSTRAINT `renewals_ibfk_1` FOREIGN KEY (`referenceNum`) REFERENCES `reference_numbers` (`referenceNum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requirements`
--
ALTER TABLE `requirements`
  ADD CONSTRAINT `requirements_ibfk_1` FOREIGN KEY (`roleId`) REFERENCES `roles` (`roleId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requirements_ibfk_2` FOREIGN KEY (`itemId`) REFERENCES `items` (`itemId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `retirements`
--
ALTER TABLE `retirements`
  ADD CONSTRAINT `retirements_ibfk_1` FOREIGN KEY (`referenceNum`) REFERENCES `reference_numbers` (`referenceNum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `submitted_requirements`
--
ALTER TABLE `submitted_requirements`
  ADD CONSTRAINT `submitted_requirements_ibfk_2` FOREIGN KEY (`requirementId`) REFERENCES `requirements` (`requirementId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `submitted_requirements_ibfk_3` FOREIGN KEY (`referenceNum`) REFERENCES `reference_numbers` (`referenceNum`) ON DELETE CASCADE ON UPDATE CASCADE;

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
