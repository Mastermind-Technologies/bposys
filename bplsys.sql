-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2017 at 02:41 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_bfp`
--

INSERT INTO `application_bfp` (`applicationId`, `userId`, `businessId`, `referenceNum`, `applicationDate`, `storeys`, `occupiedPortion`, `areaPerFloor`, `occupancyPermitNum`, `status`, `createdAt`, `updatedAt`) VALUES
(1, 1, 6, '4824FE5C5F', 'February 2, 2017', 2, 'asdsa', 23232, 123, 'Active', '2017-02-02 13:05:07', '2017-02-08 14:32:20'),
(2, 1, 4, 'D2D2E57657', 'February 19, 2017', 5, '1212', 1212, 1212, 'Active', '2017-02-02 16:20:03', '2017-02-21 13:23:29'),
(12, 1, 8, 'AE9054B21A', 'February 9, 2017', 123, '123', 123, 21312, 'Active', '2017-02-09 08:10:14', '2017-02-21 13:20:51'),
(13, 1, 7, '156C5D49E0', 'February 10, 2017', 6, '123', 123, 123456789, 'For applicant visit', '2017-02-10 05:00:51', '2017-02-16 10:07:40'),
(14, 21, 10, '3555F343F2', 'February 12, 2017', 2, 'asdsad', 20, 123123, 'For applicant visit', '2017-02-11 07:14:33', '2017-02-12 01:27:09'),
(16, 1, 9, '06C516C22A', 'February 15, 2017', 255, 'asd', 244, 123123, 'For applicant visit', '2017-02-12 03:29:17', '2017-02-16 10:07:19'),
(18, 1, 11, '03F8AF93BA', 'February 15, 2017', 2, '2', 300, 212, 'Active', '2017-02-15 00:17:10', '2017-02-15 00:34:58'),
(21, 1, 12, 'CF3169FB79', 'February 16, 2017', 2, '123', 255, 123, 'Active', '2017-02-16 11:38:40', '2017-02-16 12:49:40'),
(22, 1, 14, '6A7450B003', 'February 19, 2017', 123, '123', 123, 123, 'For applicant visit', '2017-02-19 00:21:16', '2017-02-19 05:26:56'),
(23, 1, 16, '16AB03C9D9', 'February 19, 2017', 123, '123', 123, 123, 'Draft', '2017-02-19 10:10:48', '2017-02-19 10:12:23');

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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_bplo`
--

INSERT INTO `application_bplo` (`applicationId`, `referenceNum`, `userId`, `businessId`, `taxYear`, `applicationDate`, `idPresented`, `modeOfPayment`, `DTISECCDA_RegNum`, `DTISECCDA_Date`, `brgyClearanceDateIssued`, `CTCNum`, `TIN`, `entityName`, `status`, `createdAt`, `updatedAt`) VALUES
(1, 'E4302995BD', 1, 1, 2017, 'January 22, 2017', '123', 'Anually', '123123', '01/22/2017', '1/20/2017', '123', '123', '12321', 'Cancelled', '2017-01-22 13:20:51', '2017-02-04 13:02:25'),
(5, '9E9E1D64A2', 1, 1, 2017, 'January 23, 2017', '123', 'Anually', '123', '01/23/2017', '1/20/2017', '12321', '123', '123123', 'For finalization', '2017-01-23 12:43:22', '2017-02-20 13:48:35'),
(6, '47B3DF6BF4', 1, 1, 2017, 'January 23, 2017', '123', 'Anually', '123', '01/23/2017', '1/20/2017', '123123', '2131', '123213', 'Cancelled', '2017-01-23 12:47:52', '2017-02-04 13:02:28'),
(8, '4824FE5C5F', 1, 6, 2017, 'February 2, 2017', '123', 'Quarterly', '123', '02/02/2017', '02/02/2017', '123', '123', 'awdqse', 'Closed', '2017-02-02 13:05:06', '2017-02-21 08:23:41'),
(9, 'D2D2E57657', 1, 4, 2017, 'February 19, 2017', '123', 'Anually', '1212', '02/03/2017', '02/03/2017', '1212', '1212', 'NA', 'For Retirement', '2017-02-02 16:20:03', '2017-02-21 05:14:11'),
(19, 'AE9054B21A', 1, 8, 2017, 'February 9, 2017', '12321', 'Semi-Anually', '123', '02/09/2017', '02/09/2017', '12321', '213213', 'NA', 'Completed', '2017-02-09 08:10:14', '2017-02-21 13:31:10'),
(20, '156C5D49E0', 1, 7, 2017, 'February 10, 2017', '2012109320', 'Anually', '124612341124', '03/16/2017', '06/07/2017', '12345678', '12312412', 'You', 'On process', '2017-02-10 05:00:50', '2017-02-16 10:07:40'),
(21, '3555F343F2', 21, 10, 2017, 'February 12, 2017', 'Voters ID - 123123', 'Anually', '123121', '02/11/2017', '02/11/2017', '1231', '123123', 'NA', 'Expired', '2017-02-11 07:14:33', '2017-02-21 01:47:08'),
(28, '06C516C22A', 1, 9, 2017, 'February 15, 2017', '1231', 'Quarterly', '12312', '02/12/2017', '02/12/2017', '1231', '12321', 'testing', 'On process', '2017-02-12 03:29:17', '2017-02-16 10:07:19'),
(30, '03F8AF93BA', 1, 11, 2017, 'February 15, 2017', 'Student - 4545454', 'Semi-Anually', '1212', '02/15/2017', '02/15/2017', '121', '12121', 'NA', 'Active', '2017-02-15 00:17:10', '2017-02-21 01:54:53'),
(33, 'CF3169FB79', 1, 12, 2017, 'February 16, 2017', '123', 'Anually', '123', '02/16/2017', '02/16/2017', '123', '123', 'NA', 'Active', '2017-02-16 11:38:40', '2017-02-19 05:04:17'),
(34, '6A7450B003', 1, 14, 2017, 'February 19, 2017', '123', 'Anually', '123', '02/19/2017', '02/19/2017', '123', '123', 'NA', 'On process', '2017-02-19 00:21:16', '2017-02-19 06:00:57'),
(35, '16AB03C9D9', 1, 16, 2017, 'February 19, 2017', 'asd', 'Quarterly', '123', '02/19/2017', '02/19/2017', '123', '123', 'NA', 'Draft', '2017-02-19 10:10:48', '2017-02-19 10:12:23');

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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_cenro`
--

INSERT INTO `application_cenro` (`applicationId`, `userId`, `businessId`, `referenceNum`, `CNC`, `LLDAClearance`, `dischargePermit`, `apsci`, `productsAndByProducts`, `smokeEmission`, `volatileCompound`, `fugitiveParticulates`, `steamGenerator`, `APCD`, `stackHeight`, `wastewaterTreatmentFacility`, `wastewaterTreatmentOperationAndProcess`, `pendingCaseWithLLDA`, `typeOfSolidWastesGenerated`, `qtyPerDay`, `garbageCollectionMethod`, `frequencyOfGarbageCollection`, `wasteCollector`, `collectorAddress`, `garbageDisposalMethod`, `wasteMinimizationMethod`, `drainageSystem`, `drainageType`, `drainageDischargeLocation`, `sewerageSystem`, `septicTank`, `sewerageDischargeLocation`, `waterSupply`, `status`, `createdAt`, `updatedAt`) VALUES
(1, 1, 1, 'E4302995BD', 'NA', 'NA', 'NA', 'NA', 'NA', 0, 0, 'NA', 'NA', 'asdasd', '123213', 'asdasda', 0, '12312321', 'asdsa', 123213, 'asdasd', 'Weekly', 'asdas', 'dasdsa', 'Sanitary Landfill', 'NA', 1, 'Close/Underground', 'Public Drainage System', 1, 1, 'Public Drainage System', 'Deep Well', 'Cancelled', '2017-01-22 13:20:51', '2017-01-24 05:08:00'),
(5, 1, 1, '9E9E1D64A2', 'NA', 'NA', 'NA', 'NA', 'NA', 1, 1, 'Dust|Gas', 'Boiler|steam generator others', 'qwe', '123', 'qwe', 1, '1121', 'qwe', 222, 'qwewqe', 'hehez', 'qwe', 'qweqwe', 'Sanitary Landfill', 'Recycling|Reduction|Reuse', 0, 'NA', 'NA', 0, 0, 'NA', 'Surface Water', 'Active', '2017-01-23 12:43:22', '2017-01-29 03:48:36'),
(6, 1, 1, '47B3DF6BF4', '01/23/2017', '01/04/2017', '01/04/2017', '01/23/2017', 'NA', 0, 0, 'NA', 'NA', 'asdas', '123123', '12313', 1, 'NA', 'asdas', 12312, 'asdasd', 'Daily', 'asdad', 'asdasda', 'Sanitary Landfill', 'NA', 0, 'NA', 'NA', 0, 0, 'NA', 'Deep Well', 'Cancelled', '2017-01-23 12:47:52', '2017-02-04 03:09:15'),
(8, 1, 6, '4824FE5C5F', 'NA', 'NA', 'NA', 'NA', 'asdawd', 0, 0, 'NA', 'NA', 'asdasd', '123123', 'awcawdasd', 0, 'NA', 'awdwa', 123123, 'aweqa', 'Daily', 'awdad', 'awdawdw', 'Sanitary Landfill', 'NA', 0, 'NA', 'NA', 0, 0, 'NA', 'Deep Well', 'Active', '2017-02-02 13:05:07', '2017-02-08 14:25:03'),
(9, 1, 4, 'D2D2E57657', 'NA', '02/03/2017', 'NA', '02/03/2017', 'qweqwe', 1, 1, 'Dust|Gas', 'Boiler|Furnace', 'wwww', '1212', 'qqqq', 1, '1121', 'aaaaa', 2222, 'qqqqq', 'Daily', 'rrrr', 'wewewewe', 'Sanitary Landfill', 'Reduction', 1, 'Open Canal', 'Public Drainage System', 1, 0, 'NA', 'Deep Well', 'For applicant visit', '2017-02-02 16:20:03', '2017-02-19 07:45:39'),
(19, 1, 8, 'AE9054B21A', 'NA', 'NA', 'NA', 'NA', '', 0, 0, 'NA', 'NA', 'asdas', '123', 'asdas', 0, 'NA', 'asd', 123, 'asd', 'Daily', 'asd', 'asd', 'Sanitary Landfill', 'NA', 0, 'NA', 'NA', 0, 0, 'NA', 'Deep Well', 'Active', '2017-02-09 08:10:14', '2017-02-21 13:28:11'),
(20, 1, 7, '156C5D49E0', 'NA', 'NA', 'NA', 'NA', '', 1, 0, 'Dust|Mist|Gas', 'NA', 'none', '123', '123', 1, 'NA', '123', 123, '123', 'Daily', '123', '123', 'Sanitary Landfill', 'NA', 1, 'Close/Underground', 'Public Drainage System', 1, 0, 'NA', 'Water Utility', 'For applicant visit', '2017-02-10 05:00:50', '2017-02-16 10:07:40'),
(21, 21, 10, '3555F343F2', 'NA', 'NA', 'NA', 'NA', '', 1, 0, 'Mist', 'Furnace', 'idk', '121', 'asdas', 0, 'NA', 'asdas', 111, 'asd', 'Daily', 'asd', 'asd', 'Sanitary Landfill', 'NA', 0, 'NA', 'NA', 0, 0, 'NA', 'Deep Well', 'For applicant visit', '2017-02-11 07:14:33', '2017-02-11 08:15:45'),
(23, 1, 9, '06C516C22A', '02/12/2017', '02/12/2017', '02/12/2017', 'NA', '', 1, 1, 'Dust|Mist|Gas', 'Boiler|Furnace', 'asd', '123', 'asd', 1, '1121', 'asdas', 1323, 'adsd', 'Weekly', 'asd', 'asd', 'Sanitary Landfill', 'Reduction', 1, 'Close/Underground', 'Public Drainage System', 1, 0, 'NA', 'Deep Well', 'For applicant visit', '2017-02-12 03:29:17', '2017-02-16 10:07:19'),
(25, 1, 11, '03F8AF93BA', '06/06/2017', '01/17/2017', 'NA', 'NA', '', 1, 1, 'Mist', 'Furnace', 'awdasswqe', '1231', 'asdasd', 1, '1121', 'asd', 123, 'asd', 'Weekly', 'asdsa', 'sdfdsfds', 'Sanitary Landfill', 'NA', 1, 'Close/Underground', 'Nature Outfall/Waterbody', 1, 1, 'Treatment in Septic Tank', 'Surface Water', 'Active', '2017-02-15 00:17:10', '2017-02-15 00:23:07'),
(28, 1, 12, 'CF3169FB79', 'NA', 'NA', 'NA', 'NA', '', 0, 0, 'NA', 'NA', 'awd', '123', 'asd', 0, 'NA', 'asd', 123, 'asd', 'Daily', 'asd', 'asd', 'Sanitary Landfill', 'NA', 0, 'NA', 'NA', 0, 0, 'NA', 'Deep Well', 'Active', '2017-02-16 11:38:40', '2017-02-16 12:46:55'),
(29, 1, 14, '6A7450B003', 'NA', 'NA', 'NA', 'NA', '', 1, 1, 'Dust', 'Furnace', 'asd', '123', 'dummy', 1, '4545', 'dummy', 123, 'dummy', 'Daily', 'dummy', 'dummy', 'Sanitary Landfill', 'Recycling|Reduction|Reuse', 1, 'Close/Underground', 'Public Drainage System', 1, 0, 'NA', 'Deep Well', 'For applicant visit', '2017-02-19 00:21:16', '2017-02-19 05:26:56'),
(30, 1, 16, '16AB03C9D9', 'NA', 'NA', 'NA', 'NA', '', 0, 0, 'NA', 'NA', '', '', '', 0, 'NA', '', 0, '', 'Daily', '', '', 'Sanitary Landfill', 'NA', 0, 'NA', 'NA', 0, 0, 'NA', 'Deep Well', 'Draft', '2017-02-19 10:10:48', '2017-02-19 10:12:23');

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_engineering`
--

INSERT INTO `application_engineering` (`applicationId`, `userId`, `businessId`, `referenceNum`, `status`, `createdAt`, `updatedAt`) VALUES
(1, 1, 6, '4824FE5C5F', 'Active', '2017-02-02 13:05:07', '2017-02-08 14:33:22'),
(2, 1, 4, 'D2D2E57657', 'Active', '2017-02-02 16:20:03', '2017-02-21 13:31:49'),
(12, 1, 8, 'AE9054B21A', 'For applicant visit', '2017-02-09 08:10:15', '2017-02-09 13:40:03'),
(13, 1, 7, '156C5D49E0', 'For applicant visit', '2017-02-10 05:00:51', '2017-02-16 10:07:40'),
(14, 21, 10, '3555F343F2', 'For applicant visit', '2017-02-11 07:14:33', '2017-02-11 08:15:45'),
(16, 1, 9, '06C516C22A', 'For applicant visit', '2017-02-12 03:29:17', '2017-02-16 10:07:19'),
(18, 1, 11, '03F8AF93BA', 'Active', '2017-02-15 00:17:10', '2017-02-15 00:35:38'),
(21, 1, 12, 'CF3169FB79', 'Active', '2017-02-16 11:38:40', '2017-02-16 13:36:28'),
(22, 1, 14, '6A7450B003', 'For applicant visit', '2017-02-19 00:21:16', '2017-02-19 05:26:56'),
(23, 1, 16, '16AB03C9D9', 'Draft', '2017-02-19 10:10:48', '2017-02-19 10:12:23');

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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_sanitary`
--

INSERT INTO `application_sanitary` (`applicationId`, `referenceNum`, `userId`, `businessId`, `applicationDate`, `annualEmployeePhysicalExam`, `typeLevelOfWaterSource`, `status`, `createdAt`, `updatedAt`) VALUES
(4, '9E9E1D64A2', 1, 1, 'February 19, 2017', 1, 'hehez', 'Active', '2017-01-23 12:43:22', '2017-02-20 13:14:35'),
(5, '47B3DF6BF4', 1, 1, 'February 19, 2017', 0, 'asdasdas', 'Cancelled', '2017-01-23 12:47:52', '2017-02-20 13:14:37'),
(7, '4824FE5C5F', 1, 6, 'February 19, 2017', 1, 'sefsdfad', 'Active', '2017-02-02 13:05:07', '2017-02-20 13:14:38'),
(8, 'D2D2E57657', 1, 4, 'February 19, 2017', 1, 'qweqweqw', 'For applicant visit', '2017-02-02 16:20:03', '2017-02-20 13:14:39'),
(18, 'AE9054B21A', 1, 8, 'February 19, 2017', 1, 'asdas', 'Active', '2017-02-09 08:10:14', '2017-02-21 13:31:09'),
(19, '156C5D49E0', 1, 7, 'February 19, 2017', 1, 'none', 'For applicant visit', '2017-02-10 05:00:51', '2017-02-20 13:14:43'),
(20, '3555F343F2', 21, 10, 'February 19, 2017', 1, 'water supply', 'For applicant visit', '2017-02-11 07:14:33', '2017-02-20 13:14:44'),
(22, '06C516C22A', 1, 9, 'February 19, 2017', 1, '1121', 'Active', '2017-02-12 03:29:17', '2017-02-21 13:30:57'),
(24, '03F8AF93BA', 1, 11, 'February 19, 2017', 1, 'qweqweq', 'Active', '2017-02-15 00:17:10', '2017-02-20 13:14:47'),
(27, 'CF3169FB79', 1, 12, 'February 19, 2017', 1, 'asd', 'Active', '2017-02-16 11:38:40', '2017-02-20 13:14:48'),
(28, '6A7450B003', 1, 14, 'February 19, 2017', 1, 'water supply', 'For applicant visit', '2017-02-19 00:21:16', '2017-02-20 13:14:49'),
(29, '16AB03C9D9', 1, 16, 'February 19, 2017', 1, '', 'Draft', '2017-02-19 10:10:48', '2017-02-20 13:14:51');

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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_zoning`
--

INSERT INTO `application_zoning` (`applicationId`, `referenceNum`, `userId`, `businessId`, `status`, `createdAt`, `updatedAt`) VALUES
(1, 'E4302995BD', 1, 1, 'Cancelled', '2017-01-22 13:20:51', '2017-01-24 05:08:00'),
(5, '9E9E1D64A2', 1, 1, 'Active', '2017-01-23 12:43:22', '2017-01-29 03:48:49'),
(6, '47B3DF6BF4', 1, 1, 'Cancelled', '2017-01-23 12:47:52', '2017-02-04 03:09:15'),
(8, '4824FE5C5F', 1, 6, 'Active', '2017-02-02 13:05:06', '2017-02-08 14:25:35'),
(9, 'D2D2E57657', 1, 4, 'Active', '2017-02-02 16:20:03', '2017-02-21 13:15:52'),
(19, 'AE9054B21A', 1, 8, 'Active', '2017-02-09 08:10:14', '2017-02-21 13:04:35'),
(20, '156C5D49E0', 1, 7, 'Active', '2017-02-10 05:00:50', '2017-02-21 13:06:20'),
(21, '3555F343F2', 21, 10, 'Active', '2017-02-11 07:14:33', '2017-02-21 13:06:09'),
(23, '06C516C22A', 1, 9, 'Active', '2017-02-12 03:29:17', '2017-02-21 13:09:26'),
(25, '03F8AF93BA', 1, 11, 'Active', '2017-02-15 00:17:10', '2017-02-15 00:31:11'),
(28, 'CF3169FB79', 1, 12, 'Active', '2017-02-16 11:38:40', '2017-02-16 11:50:22'),
(29, '6A7450B003', 1, 14, 'Active', '2017-02-19 00:21:16', '2017-02-21 13:16:25'),
(30, '16AB03C9D9', 1, 16, 'Draft', '2017-02-19 10:10:48', '2017-02-19 10:12:23');

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
) ENGINE=InnoDB AUTO_INCREMENT=184 DEFAULT CHARSET=latin1;

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
(47, '47B3DF6BF4', 8, 'Approve', 'zoning tester', '2017-01-30 13:54:52', '2017-01-30 13:54:52'),
(82, 'D2D2E57657', 8, 'Validate', 'tester zoning', '2017-02-08 13:51:40', '2017-02-08 13:51:40'),
(83, 'D2D2E57657', 8, 'Approve', 'tester zoning', '2017-02-08 13:51:50', '2017-02-08 13:51:50'),
(84, 'D2D2E57657', 5, 'Validate', 'tester bfp', '2017-02-08 13:52:25', '2017-02-08 13:52:25'),
(85, 'D2D2E57657', 5, 'Approve', 'tester bfp', '2017-02-08 13:52:36', '2017-02-08 13:52:36'),
(86, 'D2D2E57657', 7, 'Validate', 'tester cenro', '2017-02-08 13:52:56', '2017-02-08 13:52:56'),
(87, 'D2D2E57657', 7, 'Approve', 'tester cenro', '2017-02-08 13:53:05', '2017-02-08 13:53:05'),
(88, 'D2D2E57657', 9, 'Validate', 'tester engineering', '2017-02-08 13:54:05', '2017-02-08 13:54:05'),
(89, 'D2D2E57657', 9, 'Approve', 'tester engineering', '2017-02-08 13:54:11', '2017-02-08 13:54:11'),
(90, 'D2D2E57657', 10, 'Validate', 'tester sanitary', '2017-02-08 13:54:26', '2017-02-08 13:54:26'),
(91, 'D2D2E57657', 10, 'Approve', 'tester sanitary', '2017-02-08 13:54:33', '2017-02-08 13:54:33'),
(92, 'D2D2E57657', 4, 'Issue', 'tester bplo', '2017-02-08 14:07:35', '2017-02-08 14:07:35'),
(93, 'D2D2E57657', 4, 'Issue', 'tester bplo', '2017-02-08 14:11:19', '2017-02-08 14:11:19'),
(94, '4824FE5C5F', 4, 'Validate', 'tester bplo', '2017-02-08 14:24:23', '2017-02-08 14:24:23'),
(95, '4824FE5C5F', 4, 'Approve', 'tester bplo', '2017-02-08 14:24:30', '2017-02-08 14:24:30'),
(96, '4824FE5C5F', 7, 'Validate', 'tester cenro', '2017-02-08 14:24:54', '2017-02-08 14:24:54'),
(97, '4824FE5C5F', 7, 'Approve', 'tester cenro', '2017-02-08 14:25:03', '2017-02-08 14:25:03'),
(98, '4824FE5C5F', 8, 'Validate', 'tester zoning', '2017-02-08 14:25:24', '2017-02-08 14:25:24'),
(99, '4824FE5C5F', 8, 'Approve', 'tester zoning', '2017-02-08 14:25:35', '2017-02-08 14:25:35'),
(100, '4824FE5C5F', 10, 'Validate', 'tester sanitary', '2017-02-08 14:25:55', '2017-02-08 14:25:55'),
(101, '4824FE5C5F', 10, 'Approve', 'tester sanitary', '2017-02-08 14:26:24', '2017-02-08 14:26:24'),
(102, '4824FE5C5F', 5, 'Validate', 'tester bfp', '2017-02-08 14:32:12', '2017-02-08 14:32:12'),
(103, '4824FE5C5F', 5, 'Approve', 'tester bfp', '2017-02-08 14:32:20', '2017-02-08 14:32:20'),
(104, '4824FE5C5F', 9, 'Validate', 'tester engineering', '2017-02-08 14:33:12', '2017-02-08 14:33:12'),
(105, '4824FE5C5F', 9, 'Approve', 'tester engineering', '2017-02-08 14:33:22', '2017-02-08 14:33:22'),
(106, '4824FE5C5F', 4, 'Issue', 'tester bplo', '2017-02-08 14:34:05', '2017-02-08 14:34:05'),
(107, 'AE9054B21A', 4, 'Validate', 'tester bplo', '2017-02-09 13:39:56', '2017-02-09 13:39:56'),
(108, 'AE9054B21A', 4, 'Approve', 'tester bplo', '2017-02-09 13:40:03', '2017-02-09 13:40:03'),
(109, '156C5D49E0', 4, 'Validate', 'tester bplo', '2017-02-10 05:01:27', '2017-02-10 05:01:27'),
(110, '3555F343F2', 4, 'Validate', 'tester bplo', '2017-02-11 07:19:05', '2017-02-11 07:19:05'),
(111, '3555F343F2', 4, 'Approve', 'tester bplo', '2017-02-11 07:23:02', '2017-02-11 07:23:02'),
(112, '3555F343F2', 7, 'Validate', 'tester cenro', '2017-02-11 07:24:32', '2017-02-11 07:24:32'),
(113, '3555F343F2', 7, 'Approve', 'tester cenro', '2017-02-11 07:26:31', '2017-02-11 07:26:31'),
(114, '3555F343F2', 8, 'Validate', 'tester zoning', '2017-02-11 08:04:33', '2017-02-11 08:04:33'),
(115, '3555F343F2', 8, 'Approve', 'tester zoning', '2017-02-11 08:05:07', '2017-02-11 08:05:07'),
(116, '3555F343F2', 10, 'Validate', 'tester sanitary', '2017-02-11 08:05:51', '2017-02-11 08:05:51'),
(117, '3555F343F2', 10, 'Approve', 'tester sanitary', '2017-02-11 08:06:11', '2017-02-11 08:06:11'),
(118, '3555F343F2', 5, 'Validate', 'tester bfp', '2017-02-11 08:06:44', '2017-02-11 08:06:44'),
(119, '3555F343F2', 5, 'Approve', 'tester bfp', '2017-02-11 08:06:59', '2017-02-11 08:06:59'),
(120, '3555F343F2', 9, 'Validate', 'tester engineering', '2017-02-11 08:07:32', '2017-02-11 08:07:32'),
(121, '3555F343F2', 9, 'Approve', 'tester engineering', '2017-02-11 08:07:50', '2017-02-11 08:07:50'),
(122, '3555F343F2', 4, 'Issue', 'tester bplo', '2017-02-11 08:10:17', '2017-02-11 08:10:17'),
(123, '03F8AF93BA', 4, 'Validate', 'tester bplo', '2017-02-15 00:17:42', '2017-02-15 00:17:42'),
(124, '06C516C22A', 4, 'Validate', 'tester bplo', '2017-02-15 00:18:12', '2017-02-15 00:18:12'),
(125, '03F8AF93BA', 4, 'Approve', 'tester bplo', '2017-02-15 00:18:35', '2017-02-15 00:18:35'),
(126, '03F8AF93BA', 7, 'Validate', 'tester cenro', '2017-02-15 00:23:01', '2017-02-15 00:23:01'),
(127, '03F8AF93BA', 7, 'Approve', 'tester cenro', '2017-02-15 00:23:07', '2017-02-15 00:23:07'),
(128, '03F8AF93BA', 8, 'Validate', 'tester zoning', '2017-02-15 00:23:22', '2017-02-15 00:23:22'),
(129, '03F8AF93BA', 8, 'Approve', 'tester zoning', '2017-02-15 00:31:12', '2017-02-15 00:31:12'),
(130, '03F8AF93BA', 5, 'Validate', 'tester bfp', '2017-02-15 00:34:53', '2017-02-15 00:34:53'),
(131, '03F8AF93BA', 5, 'Approve', 'tester bfp', '2017-02-15 00:34:58', '2017-02-15 00:34:58'),
(132, '03F8AF93BA', 9, 'Validate', 'tester engineering', '2017-02-15 00:35:32', '2017-02-15 00:35:32'),
(133, '03F8AF93BA', 9, 'Approve', 'tester engineering', '2017-02-15 00:35:38', '2017-02-15 00:35:38'),
(134, '03F8AF93BA', 10, 'Validate', 'tester sanitary', '2017-02-15 00:35:55', '2017-02-15 00:35:55'),
(135, '03F8AF93BA', 10, 'Approve', 'tester sanitary', '2017-02-15 00:36:01', '2017-02-15 00:36:01'),
(136, '03F8AF93BA', 4, 'Issue', 'tester bplo', '2017-02-15 00:38:51', '2017-02-15 00:38:51'),
(137, '03F8AF93BA', 4, 'Issue', 'tester bplo', '2017-02-15 03:31:06', '2017-02-15 03:31:06'),
(138, '03F8AF93BA', 4, 'Issue', 'tester bplo', '2017-02-15 03:31:35', '2017-02-15 03:31:35'),
(139, '156C5D49E0', 4, 'Validate', 'tester bplo', '2017-02-16 10:07:12', '2017-02-16 10:07:12'),
(140, '06C516C22A', 4, 'Approve', 'tester bplo', '2017-02-16 10:07:19', '2017-02-16 10:07:19'),
(141, '06C516C22A', 4, 'Approve', 'tester bplo', '2017-02-16 10:07:35', '2017-02-16 10:07:35'),
(142, '156C5D49E0', 4, 'Approve', 'tester bplo', '2017-02-16 10:07:40', '2017-02-16 10:07:40'),
(143, 'CF3169FB79', 8, 'Validate', 'tester zoning', '2017-02-16 11:48:49', '2017-02-16 11:48:49'),
(144, 'CF3169FB79', 8, 'Approve', 'tester zoning', '2017-02-16 11:50:22', '2017-02-16 11:50:22'),
(145, 'CF3169FB79', 10, 'Validate', 'tester sanitary', '2017-02-16 11:58:48', '2017-02-16 11:58:48'),
(146, 'AE9054B21A', 10, 'Validate', 'tester sanitary', '2017-02-16 11:59:35', '2017-02-16 11:59:35'),
(147, 'CF3169FB79', 7, 'Validate', 'tester cenro', '2017-02-16 12:46:49', '2017-02-16 12:46:49'),
(148, 'CF3169FB79', 7, 'Approve', 'tester cenro', '2017-02-16 12:46:55', '2017-02-16 12:46:55'),
(149, 'CF3169FB79', 10, 'Approve', 'tester sanitary', '2017-02-16 12:47:10', '2017-02-16 12:47:10'),
(150, 'CF3169FB79', 9, 'Validate', 'tester engineering', '2017-02-16 12:47:27', '2017-02-16 12:47:27'),
(151, 'CF3169FB79', 9, 'Approve', 'tester engineering', '2017-02-16 12:49:19', '2017-02-16 12:49:19'),
(152, 'CF3169FB79', 5, 'Validate', 'tester bfp', '2017-02-16 12:49:35', '2017-02-16 12:49:35'),
(153, 'CF3169FB79', 5, 'Approve', 'tester bfp', '2017-02-16 12:49:40', '2017-02-16 12:49:40'),
(154, 'CF3169FB79', 9, 'Approve', 'tester engineering', '2017-02-16 13:02:16', '2017-02-16 13:02:16'),
(155, 'CF3169FB79', 9, 'Approve', 'tester engineering', '2017-02-16 13:09:28', '2017-02-16 13:09:28'),
(156, 'CF3169FB79', 9, 'Approve', 'tester engineering', '2017-02-16 13:36:28', '2017-02-16 13:36:28'),
(157, 'CF3169FB79', 4, 'Approve Capital', 'tester bplo', '2017-02-16 15:12:01', '2017-02-16 15:12:01'),
(158, 'CF3169FB79', 4, 'Approve Capital', 'tester bplo', '2017-02-16 15:21:30', '2017-02-16 15:21:30'),
(159, 'CF3169FB79', 4, 'Issue', 'tester bplo', '2017-02-16 15:37:13', '2017-02-16 15:37:13'),
(160, 'AE9054B21A', 8, 'Validate', 'tester zoning', '2017-02-18 02:33:22', '2017-02-18 02:33:22'),
(161, 'AE9054B21A', 7, 'Validate', 'tester cenro', '2017-02-18 02:40:45', '2017-02-18 02:40:45'),
(162, 'AE9054B21A', 5, 'Validate', 'tester bfp', '2017-02-18 02:50:50', '2017-02-18 02:50:50'),
(163, '9E9E1D64A2', 4, 'Approve Capital', 'tester bplo', '2017-02-18 13:09:28', '2017-02-18 13:09:28'),
(164, '9E9E1D64A2', 4, 'Approve Capital', 'tester bplo', '2017-02-18 13:12:07', '2017-02-18 13:12:07'),
(165, '9E9E1D64A2', 4, 'Approve Capital', 'tester bplo', '2017-02-20 13:48:35', '2017-02-20 13:48:35'),
(166, 'AE9054B21A', 8, 'Approve', 'tester zoning', '2017-02-21 13:04:35', '2017-02-21 13:04:35'),
(167, '3555F343F2', 8, 'Validate', 'tester zoning', '2017-02-21 13:04:45', '2017-02-21 13:04:45'),
(168, '3555F343F2', 8, 'Approve', 'tester zoning', '2017-02-21 13:06:09', '2017-02-21 13:06:09'),
(169, '156C5D49E0', 8, 'Validate', 'tester zoning', '2017-02-21 13:06:17', '2017-02-21 13:06:17'),
(170, '156C5D49E0', 8, 'Approve', 'tester zoning', '2017-02-21 13:06:20', '2017-02-21 13:06:20'),
(171, '06C516C22A', 8, 'Validate', 'tester zoning', '2017-02-21 13:06:26', '2017-02-21 13:06:26'),
(172, '06C516C22A', 8, 'Approve', 'tester zoning', '2017-02-21 13:09:26', '2017-02-21 13:09:26'),
(173, 'D2D2E57657', 8, 'Validate', 'tester zoning', '2017-02-21 13:09:45', '2017-02-21 13:09:45'),
(174, '6A7450B003', 8, 'Validate', 'tester zoning', '2017-02-21 13:16:19', '2017-02-21 13:16:19'),
(175, 'AE9054B21A', 5, 'Approve', 'tester bfp', '2017-02-21 13:20:52', '2017-02-21 13:20:52'),
(176, 'D2D2E57657', 5, 'Validate', 'tester bfp', '2017-02-21 13:23:19', '2017-02-21 13:23:19'),
(177, 'D2D2E57657', 5, 'Approve', 'tester bfp', '2017-02-21 13:23:29', '2017-02-21 13:23:29'),
(178, 'AE9054B21A', 7, 'Approve', 'tester cenro', '2017-02-21 13:28:11', '2017-02-21 13:28:11'),
(179, '06C516C22A', 10, 'Validate', 'tester sanitary', '2017-02-21 13:29:04', '2017-02-21 13:29:04'),
(180, '06C516C22A', 10, 'Approve', 'tester sanitary', '2017-02-21 13:30:57', '2017-02-21 13:30:57'),
(181, 'AE9054B21A', 10, 'Approve', 'tester sanitary', '2017-02-21 13:31:10', '2017-02-21 13:31:10'),
(182, 'D2D2E57657', 9, 'Validate', 'tester engineering', '2017-02-21 13:31:34', '2017-02-21 13:31:34'),
(183, 'D2D2E57657', 9, 'Approve', 'tester engineering', '2017-02-21 13:31:49', '2017-02-21 13:31:49');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archived_applications`
--

INSERT INTO `archived_applications` (`archiveId`, `referenceNum`, `userId`, `taxYear`, `applicationDate`, `modeOfPayment`, `idPresented`, `DTISECCDA_RegNum`, `DTISECCDA_Date`, `brgyClearanceDateIssued`, `CTCNum`, `TIN`, `entityName`, `dateStarted`, `presidentTreasurerName`, `businessName`, `companyName`, `tradeName`, `signageName`, `organizationType`, `corporationName`, `dateOfOperation`, `businessDesc`, `PIN`, `bldgName`, `houseBldgNum`, `unitNum`, `street`, `subdivision`, `barangay`, `cityMunicipality`, `province`, `telNum`, `email`, `pollutionControlOfficer`, `maleEmployees`, `femaleEmployees`, `PWDEmployees`, `LGUEMployees`, `businessArea`, `emergencyContactPerson`, `emergencyTelNum`, `emergencyEmail`, `zoneType`, `lat`, `lng`, `gmapAddress`, `ownerFirstName`, `ownerMiddleName`, `ownerLastName`, `ownerHouseBldgNum`, `ownerBldgName`, `ownerUnitNum`, `ownerStreet`, `ownerBarangay`, `ownerSubdivision`, `ownerCityMunicipality`, `ownerProvince`, `ownerContactNum`, `ownerTelNum`, `ownerEmail`, `ownerPIN`, `CNC`, `LLDAClearance`, `dischargePermit`, `apsci`, `productsAndByProducts`, `smokeEmission`, `volatileCompound`, `fugitiveParticulates`, `steamGenerator`, `APCD`, `stackHeight`, `wastewaterTreatmentFacility`, `wastewaterTreatmentOperationAndProcess`, `pendingCaseWithLLDA`, `typeOfSolidWastesGenerated`, `qtyPerDay`, `garbageCollectionMethod`, `frequencyOfGarbageCollection`, `wasteCollector`, `collectorAddress`, `garbageDisposalMethod`, `wasteMinimizationMethod`, `drainageSystem`, `drainageType`, `drainageDischargeLocation`, `sewerageSystem`, `septicTank`, `sewerageDischargeLocation`, `waterSupply`, `storeys`, `occupiedPortion`, `areaPerFloor`, `occupancyPermitNum`, `annualEmployeePhysicalExam`, `typeLevelOfWaterSource`, `createdAt`, `updatedAt`) VALUES
(1, '3555F343F2', 21, '2017', 'February 11, 2017', 'Anually', 'Voters ID - 123123', '123121', '02/11/2017', '02/11/2017', '1231', '123123', 'NA', '2017-02-11 15:14:33', 'asd', 'Business ni Maam', 'asd', 'asd', 'asd', 'Single', 'NA', '02/11/2017', 'asdsa', '1171', 'asd', 'asd', 'asd', 'asd', 'asd', 'Loma', 'Biñan City', 'Laguna', '123', 'rhea@yahoo.com', 'asd', '5', '5', '5', '5', '500', 'asd', '123', 'rhea@yahoo.com', 'Single residential', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', 'Rhea', 'Nayang', 'Tortor', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '123', '123', 'rhea@yahoo.com', '12312', 'NA', 'NA', 'NA', 'NA', '', '1', '0', 'Mist', 'Furnace', 'idk', '121', 'asdas', '0', 'NA', 'asdas', '111', 'asd', 'Daily', 'asd', 'asd', 'Sanitary Landfill', 'NA', '0', 'NA', 'NA', '0', '0', 'NA', 'Deep Well', '2', 'asdsad', '20', '123123', '1', 'idk', '2017-02-12 01:27:08', '2017-02-12 01:27:08'),
(2, 'D2D2E57657', 1, '2017', 'February 7, 2017', 'Quarterly', '123', '1212', '02/03/2017', '02/03/2017', '1212', '1212', 'NA', '2017-02-03 00:20:03', 'Jason Hernandez', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Single', 'NA', '01/29/2017', 'Test Business 10', '0', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Malaban', 'Biñan City', 'Laguna', '2222', 'test@yahoo.com', 'Jason Hernandez', '1', '2', '3', '4', '1212', 'emergencyTest', 'emergencyTest', 'emergencyTest', 'Single residential', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', 'Renjo', 'Enriquez', 'Dolosa', 'Blk 29 Lot 19', 'N/A', 'N/A', 'Dumaguete Street owner', 'Santo Tomas owner', 'South City Homes owner', 'Biñan City owner', 'Laguna owner', '09175138266', '8393969', 'dolosa.renjo@yahoo.com', '1212', 'NA', '02/03/2017', 'NA', '02/03/2017', 'qweqwe', '1', '1', 'Dust|Gas', 'Boiler|Furnace', 'wwww', '1212', 'qqqq', '1', '1121', 'aaaaa', '2222', 'qqqqq', 'Daily', 'rrrr', 'wewewewe', 'Sanitary Landfill', 'Reduction', '1', 'Open Canal', 'Public Drainage System', '1', '0', 'NA', 'Deep Well', '5', '1212', '1212', '1212', '1', 'qweqweqw', '2017-02-19 07:45:39', '2017-02-19 07:45:39'),
(3, 'D2D2E57657', 1, '2017', 'February 19, 2017', 'Anually', '123', '1212', '02/03/2017', '02/03/2017', '1212', '1212', 'NA', '2017-02-03 00:20:03', 'Jason Hernandez', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Single', 'NA', '01/29/2017', 'Test Business 10', '0', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Malaban', 'Biñan City', 'Laguna', '2222', 'test@yahoo.com', 'Jason Hernandez', '1', '2', '3', '4', '1212', 'emergencyTest', '8393939', 'emergency999@yahoo.com', 'Single residential', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', 'Renjo', 'Enriquez', 'Dolosa', 'Blk 29 Lot 19', 'N/A', 'N/A', 'Dumaguete Street owner', 'Santo Tomas owner', 'South City Homes owner', 'Biñan City owner', 'Laguna owner', '09175138266', '8393969', 'dolosa.renjo@yahoo.com', '1212', 'NA', '02/03/2017', 'NA', '02/03/2017', 'qweqwe', '1', '1', 'Dust|Gas', 'Boiler|Furnace', 'wwww', '1212', 'qqqq', '1', '1121', 'aaaaa', '2222', 'qqqqq', 'Daily', 'rrrr', 'wewewewe', 'Sanitary Landfill', 'Reduction', '1', 'Open Canal', 'Public Drainage System', '1', '0', 'NA', 'Deep Well', '5', '1212', '1212', '1212', '1', 'qweqweqw', '2017-02-19 10:41:18', '2017-02-19 10:41:18'),
(4, 'D2D2E57657', 1, '2017', 'February 19, 2017', 'Anually', '123', '1212', '02/03/2017', '02/03/2017', '1212', '1212', 'NA', '2017-02-03 00:20:03', 'Jason Hernandez', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Single', 'NA', '01/29/2017', 'Test Business 10', '0', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Malaban', 'Biñan City', 'Laguna', '2222', 'test@yahoo.com', 'Jason Hernandez', '1', '2', '3', '4', '1212', 'emergencyTest', '8393939', 'emergency999@yahoo.com', 'Single residential', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', 'Renjo', 'Enriquez', 'Dolosa', 'Blk 29 Lot 19', 'N/A', 'N/A', 'Dumaguete Street owner', 'Santo Tomas owner', 'South City Homes owner', 'Biñan City owner', 'Laguna owner', '09175138266', '8393969', 'dolosa.renjo@yahoo.com', '1212', 'NA', '02/03/2017', 'NA', '02/03/2017', 'qweqwe', '1', '1', 'Dust|Gas', 'Boiler|Furnace', 'wwww', '1212', 'qqqq', '1', '1121', 'aaaaa', '2222', 'qqqqq', 'Daily', 'rrrr', 'wewewewe', 'Sanitary Landfill', 'Reduction', '1', 'Open Canal', 'Public Drainage System', '1', '0', 'NA', 'Deep Well', '5', '1212', '1212', '1212', '1', 'qweqweqw', '2017-02-19 10:41:58', '2017-02-19 10:41:58'),
(5, 'D2D2E57657', 1, '2017', 'February 19, 2017', 'Anually', '123', '1212', '02/03/2017', '02/03/2017', '1212', '1212', 'NA', '2017-02-03 00:20:03', 'Jason Hernandez', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Single', 'NA', '01/29/2017', 'Test Business 10', '0', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Malaban', 'Biñan City', 'Laguna', '2222', 'test@yahoo.com', 'Jason Hernandez', '1', '2', '3', '4', '1212', 'emergencyTest', '8393939', 'emergency999@yahoo.com', 'Single residential', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', 'Renjo', 'Enriquez', 'Dolosa', 'Blk 29 Lot 19', 'N/A', 'N/A', 'Dumaguete Street owner', 'Santo Tomas owner', 'South City Homes owner', 'Biñan City owner', 'Laguna owner', '09175138266', '8393969', 'dolosa.renjo@yahoo.com', '1212', 'NA', '02/03/2017', 'NA', '02/03/2017', 'qweqwe', '1', '1', 'Dust|Gas', 'Boiler|Furnace', 'wwww', '1212', 'qqqq', '1', '1121', 'aaaaa', '2222', 'qqqqq', 'Daily', 'rrrr', 'wewewewe', 'Sanitary Landfill', 'Reduction', '1', 'Open Canal', 'Public Drainage System', '1', '0', 'NA', 'Deep Well', '5', '1212', '1212', '1212', '1', 'qweqweqw', '2017-02-19 10:46:45', '2017-02-19 10:46:45'),
(6, 'D2D2E57657', 1, '2017', 'February 19, 2017', 'Anually', '123', '1212', '02/03/2017', '02/03/2017', '1212', '1212', 'NA', '2017-02-03 00:20:03', 'Jason Hernandez', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Single', 'NA', '01/29/2017', 'Test Business 10', '0', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Malaban', 'Biñan City', 'Laguna', '2222', 'test@yahoo.com', 'Jason Hernandez', '1', '2', '3', '4', '1212', 'emergencyTest', '8393939', 'emergency999@yahoo.com', 'Single residential', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', 'Renjo', 'Enriquez', 'Dolosa', 'Blk 29 Lot 19', 'N/A', 'N/A', 'Dumaguete Street owner', 'Santo Tomas owner', 'South City Homes owner', 'Biñan City owner', 'Laguna owner', '09175138266', '8393969', 'dolosa.renjo@yahoo.com', '1212', 'NA', '02/03/2017', 'NA', '02/03/2017', 'qweqwe', '1', '1', 'Dust|Gas', 'Boiler|Furnace', 'wwww', '1212', 'qqqq', '1', '1121', 'aaaaa', '2222', 'qqqqq', 'Daily', 'rrrr', 'wewewewe', 'Sanitary Landfill', 'Reduction', '1', 'Open Canal', 'Public Drainage System', '1', '0', 'NA', 'Deep Well', '5', '1212', '1212', '1212', '1', 'qweqweqw', '2017-02-19 10:48:52', '2017-02-19 10:48:52'),
(7, 'D2D2E57657', 1, '2017', 'February 19, 2017', 'Anually', '123', '1212', '02/03/2017', '02/03/2017', '1212', '1212', 'NA', '2017-02-03 00:20:03', 'Jason Hernandez', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Single', 'NA', '01/29/2017', 'Test Business 10', '0', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Malaban', 'Biñan City', 'Laguna', '2222', 'test@yahoo.com', 'Jason Hernandez', '1', '2', '3', '4', '1212', 'emergencyTest', '8393939', 'emergency999@yahoo.com', 'Single residential', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', 'Renjo', 'Enriquez', 'Dolosa', 'Blk 29 Lot 19', 'N/A', 'N/A', 'Dumaguete Street owner', 'Santo Tomas owner', 'South City Homes owner', 'Biñan City owner', 'Laguna owner', '09175138266', '8393969', 'dolosa.renjo@yahoo.com', '1212', 'NA', '02/03/2017', 'NA', '02/03/2017', 'qweqwe', '1', '1', 'Dust|Gas', 'Boiler|Furnace', 'wwww', '1212', 'qqqq', '1', '1121', 'aaaaa', '2222', 'qqqqq', 'Daily', 'rrrr', 'wewewewe', 'Sanitary Landfill', 'Reduction', '1', 'Open Canal', 'Public Drainage System', '1', '0', 'NA', 'Deep Well', '5', '1212', '1212', '1212', '1', 'qweqweqw', '2017-02-19 10:49:25', '2017-02-19 10:49:25'),
(8, 'D2D2E57657', 1, '2017', 'February 19, 2017', 'Anually', '123', '1212', '02/03/2017', '02/03/2017', '1212', '1212', 'NA', '2017-02-03 00:20:03', 'Jason Hernandez', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Single', 'NA', '01/29/2017', 'Test Business 10', '0', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Malaban', 'Biñan City', 'Laguna', '2222', 'test@yahoo.com', 'Jason Hernandez', '1', '2', '3', '4', '1212', 'emergencyTest', '8393939', 'emergency999@yahoo.com', 'Single residential', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', 'Renjo', 'Enriquez', 'Dolosa', 'Blk 29 Lot 19', 'N/A', 'N/A', 'Dumaguete Street owner', 'Santo Tomas owner', 'South City Homes owner', 'Biñan City owner', 'Laguna owner', '09175138266', '8393969', 'dolosa.renjo@yahoo.com', '1212', 'NA', '02/03/2017', 'NA', '02/03/2017', 'qweqwe', '1', '1', 'Dust|Gas', 'Boiler|Furnace', 'wwww', '1212', 'qqqq', '1', '1121', 'aaaaa', '2222', 'qqqqq', 'Daily', 'rrrr', 'wewewewe', 'Sanitary Landfill', 'Reduction', '1', 'Open Canal', 'Public Drainage System', '1', '0', 'NA', 'Deep Well', '5', '1212', '1212', '1212', '1', 'qweqweqw', '2017-02-19 10:49:58', '2017-02-19 10:49:58'),
(9, 'D2D2E57657', 1, '2017', 'February 19, 2017', 'Anually', '123', '1212', '02/03/2017', '02/03/2017', '1212', '1212', 'NA', '2017-02-03 00:20:03', 'Jason Hernandez', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Single', 'NA', '01/29/2017', 'Test Business 10', '0', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Malaban', 'Biñan City', 'Laguna', '2222', 'test@yahoo.com', 'Jason Hernandez', '1', '2', '3', '4', '1212', 'emergencyTest', '8393939', 'emergency999@yahoo.com', 'Single residential', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', 'Renjo', 'Enriquez', 'Dolosa', 'Blk 29 Lot 19', 'N/A', 'N/A', 'Dumaguete Street owner', 'Santo Tomas owner', 'South City Homes owner', 'Biñan City owner', 'Laguna owner', '09175138266', '8393969', 'dolosa.renjo@yahoo.com', '1212', 'NA', '02/03/2017', 'NA', '02/03/2017', 'qweqwe', '1', '1', 'Dust|Gas', 'Boiler|Furnace', 'wwww', '1212', 'qqqq', '1', '1121', 'aaaaa', '2222', 'qqqqq', 'Daily', 'rrrr', 'wewewewe', 'Sanitary Landfill', 'Reduction', '1', 'Open Canal', 'Public Drainage System', '1', '0', 'NA', 'Deep Well', '5', '1212', '1212', '1212', '1', 'qweqweqw', '2017-02-19 10:54:19', '2017-02-19 10:54:19'),
(10, 'D2D2E57657', 1, '2017', 'February 19, 2017', 'Anually', '123', '1212', '02/03/2017', '02/03/2017', '1212', '1212', 'NA', '2017-02-03 00:20:03', 'Jason Hernandez', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Single', 'NA', '01/29/2017', 'Test Business 10', '0', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Malaban', 'Biñan City', 'Laguna', '2222', 'test@yahoo.com', 'Jason Hernandez', '1', '2', '3', '4', '1212', 'emergencyTest', '8393939', 'emergency999@yahoo.com', 'Single residential', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', 'Renjo', 'Enriquez', 'Dolosa', 'Blk 29 Lot 19', 'N/A', 'N/A', 'Dumaguete Street owner', 'Santo Tomas owner', 'South City Homes owner', 'Biñan City owner', 'Laguna owner', '09175138266', '8393969', 'dolosa.renjo@yahoo.com', '1212', 'NA', '02/03/2017', 'NA', '02/03/2017', 'qweqwe', '1', '1', 'Dust|Gas', 'Boiler|Furnace', 'wwww', '1212', 'qqqq', '1', '1121', 'aaaaa', '2222', 'qqqqq', 'Daily', 'rrrr', 'wewewewe', 'Sanitary Landfill', 'Reduction', '1', 'Open Canal', 'Public Drainage System', '1', '0', 'NA', 'Deep Well', '5', '1212', '1212', '1212', '1', 'qweqweqw', '2017-02-19 10:56:05', '2017-02-19 10:56:05'),
(11, 'D2D2E57657', 1, '2017', 'February 19, 2017', 'Anually', '123', '1212', '02/03/2017', '02/03/2017', '1212', '1212', 'NA', '2017-02-03 00:20:03', 'Jason Hernandez', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Single', 'NA', '01/29/2017', 'Test Business 10', '0', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Malaban', 'Biñan City', 'Laguna', '2222', 'test@yahoo.com', 'Jason Hernandez', '1', '2', '3', '4', '1212', 'emergencyTest', '8393939', 'emergency999@yahoo.com', 'Single residential', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', 'Renjo', 'Enriquez', 'Dolosa', 'Blk 29 Lot 19', 'N/A', 'N/A', 'Dumaguete Street owner', 'Santo Tomas owner', 'South City Homes owner', 'Biñan City owner', 'Laguna owner', '09175138266', '8393969', 'dolosa.renjo@yahoo.com', '1212', 'NA', '02/03/2017', 'NA', '02/03/2017', 'qweqwe', '1', '1', 'Dust|Gas', 'Boiler|Furnace', 'wwww', '1212', 'qqqq', '1', '1121', 'aaaaa', '2222', 'qqqqq', 'Daily', 'rrrr', 'wewewewe', 'Sanitary Landfill', 'Reduction', '1', 'Open Canal', 'Public Drainage System', '1', '0', 'NA', 'Deep Well', '5', '1212', '1212', '1212', '1', 'qweqweqw', '2017-02-19 10:56:41', '2017-02-19 10:56:41'),
(12, 'D2D2E57657', 1, '2017', 'February 19, 2017', 'Anually', '123', '1212', '02/03/2017', '02/03/2017', '1212', '1212', 'NA', '2017-02-03 00:20:03', 'Jason Hernandez', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Single', 'NA', '01/29/2017', 'Test Business 10', '0', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Malaban', 'Biñan City', 'Laguna', '2222', 'test@yahoo.com', 'Jason Hernandez', '1', '2', '3', '4', '1212', 'emergencyTest', '8393939', 'emergency999@yahoo.com', 'Single residential', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', 'Renjo', 'Enriquez', 'Dolosa', 'Blk 29 Lot 19', 'N/A', 'N/A', 'Dumaguete Street owner', 'Santo Tomas owner', 'South City Homes owner', 'Biñan City owner', 'Laguna owner', '09175138266', '8393969', 'dolosa.renjo@yahoo.com', '1212', 'NA', '02/03/2017', 'NA', '02/03/2017', 'qweqwe', '1', '1', 'Dust|Gas', 'Boiler|Furnace', 'wwww', '1212', 'qqqq', '1', '1121', 'aaaaa', '2222', 'qqqqq', 'Daily', 'rrrr', 'wewewewe', 'Sanitary Landfill', 'Reduction', '1', 'Open Canal', 'Public Drainage System', '1', '0', 'NA', 'Deep Well', '5', '1212', '1212', '1212', '1', 'qweqweqw', '2017-02-19 11:06:45', '2017-02-19 11:06:45'),
(13, 'D2D2E57657', 1, '2017', 'February 19, 2017', 'Anually', '123', '1212', '02/03/2017', '02/03/2017', '1212', '1212', 'NA', '2017-02-03 00:20:03', 'Jason Hernandez', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Single', 'NA', '01/29/2017', 'Test Business 10', '0', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Test Business 10', 'Malaban', 'Biñan City', 'Laguna', '2222', 'test@yahoo.com', 'Jason Hernandez', '1', '2', '3', '4', '1212', 'emergencyTest', '8393939', 'emergency999@yahoo.com', 'Single residential', '14.319602469400538', '121.07414245605469', 'Dumaguete St, Biñan, Laguna, Philippines', 'Renjo', 'Enriquez', 'Dolosa', 'Blk 29 Lot 19', 'N/A', 'N/A', 'Dumaguete Street owner', 'Santo Tomas owner', 'South City Homes owner', 'Biñan City owner', 'Laguna owner', '09175138266', '8393969', 'dolosa.renjo@yahoo.com', '1212', 'NA', '02/03/2017', 'NA', '02/03/2017', 'qweqwe', '1', '1', 'Dust|Gas', 'Boiler|Furnace', 'wwww', '1212', 'qqqq', '1', '1121', 'aaaaa', '2222', 'qqqqq', 'Daily', 'rrrr', 'wewewewe', 'Sanitary Landfill', 'Reduction', '1', 'Open Canal', 'Public Drainage System', '1', '0', 'NA', 'Deep Well', '5', '1212', '1212', '1212', '1', 'qweqweqw', '2017-02-19 11:08:07', '2017-02-19 11:08:07');

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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archived_business_activities`
--

INSERT INTO `archived_business_activities` (`archiveId`, `archiveApplicationId`, `lineOfBusiness`, `capitalization`, `createdAt`, `updatedAt`) VALUES
(1, 1, 'Others', '300000', '2017-02-12 01:27:08', '0000-00-00 00:00:00'),
(2, 2, 'Manufacturer Kind', '15000', '2017-02-19 07:45:39', '0000-00-00 00:00:00'),
(3, 2, 'Exporter kind', '300000', '2017-02-19 07:45:39', '0000-00-00 00:00:00'),
(4, 3, 'Manufacturer Kind', '15000', '2017-02-19 10:41:18', '0000-00-00 00:00:00'),
(5, 3, 'Exporter kind', '300000', '2017-02-19 10:41:18', '0000-00-00 00:00:00'),
(6, 3, 'Manufacturer Kind', '123456', '2017-02-19 10:41:18', '0000-00-00 00:00:00'),
(7, 4, 'Manufacturer Kind', '15000', '2017-02-19 10:41:58', '0000-00-00 00:00:00'),
(8, 4, 'Exporter kind', '300000', '2017-02-19 10:41:58', '0000-00-00 00:00:00'),
(9, 4, 'Manufacturer Kind', '123456', '2017-02-19 10:41:58', '0000-00-00 00:00:00'),
(10, 5, 'Manufacturer Kind', '15000', '2017-02-19 10:46:46', '0000-00-00 00:00:00'),
(11, 5, 'Exporter kind', '300000', '2017-02-19 10:46:46', '0000-00-00 00:00:00'),
(12, 5, 'Manufacturer Kind', '123456', '2017-02-19 10:46:46', '0000-00-00 00:00:00'),
(13, 6, 'Manufacturer Kind', '15000', '2017-02-19 10:48:52', '0000-00-00 00:00:00'),
(14, 6, 'Exporter kind', '300000', '2017-02-19 10:48:52', '0000-00-00 00:00:00'),
(15, 6, 'Manufacturer Kind', '123456', '2017-02-19 10:48:52', '0000-00-00 00:00:00'),
(16, 7, 'Manufacturer Kind', '15000', '2017-02-19 10:49:25', '0000-00-00 00:00:00'),
(17, 7, 'Exporter kind', '300000', '2017-02-19 10:49:25', '0000-00-00 00:00:00'),
(18, 7, 'Manufacturer Kind', '123456', '2017-02-19 10:49:25', '0000-00-00 00:00:00'),
(19, 8, 'Manufacturer Kind', '15000', '2017-02-19 10:49:58', '0000-00-00 00:00:00'),
(20, 8, 'Exporter kind', '300000', '2017-02-19 10:49:58', '0000-00-00 00:00:00'),
(21, 8, 'Manufacturer Kind', '123456', '2017-02-19 10:49:58', '0000-00-00 00:00:00'),
(22, 9, 'Manufacturer Kind', '15000', '2017-02-19 10:54:19', '0000-00-00 00:00:00'),
(23, 9, 'Exporter Kind', '300000', '2017-02-19 10:54:19', '0000-00-00 00:00:00'),
(24, 9, 'Manufacturer Kind', '123456', '2017-02-19 10:54:20', '0000-00-00 00:00:00'),
(25, 10, 'Manufacturer Kind', '15000', '2017-02-19 10:56:05', '0000-00-00 00:00:00'),
(26, 10, 'Exporter Kind', '300000', '2017-02-19 10:56:05', '0000-00-00 00:00:00'),
(27, 10, 'Manufacturer Kind', '123456', '2017-02-19 10:56:05', '0000-00-00 00:00:00'),
(28, 11, 'Manufacturer Kind', '15000', '2017-02-19 10:56:41', '0000-00-00 00:00:00'),
(29, 11, 'Exporter Kind', '300000', '2017-02-19 10:56:41', '0000-00-00 00:00:00'),
(30, 11, 'Manufacturer Kind', '123456', '2017-02-19 10:56:41', '0000-00-00 00:00:00'),
(31, 12, 'Manufacturer Kind', '15000', '2017-02-19 11:06:45', '0000-00-00 00:00:00'),
(32, 12, 'Exporter Kind', '300000', '2017-02-19 11:06:45', '0000-00-00 00:00:00'),
(33, 12, 'Manufacturer Kind', '123456', '2017-02-19 11:06:45', '0000-00-00 00:00:00'),
(34, 13, 'Manufacturer Kind', '15000', '2017-02-19 11:08:07', '0000-00-00 00:00:00'),
(35, 13, 'Exporter Kind', '300000', '2017-02-19 11:08:07', '0000-00-00 00:00:00'),
(36, 13, 'Manufacturer Kind', '123456', '2017-02-19 11:08:07', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archived_lessors`
--

INSERT INTO `archived_lessors` (`archiveId`, `archiveApplicationId`, `firstName`, `middleName`, `lastName`, `address`, `subdivision`, `barangay`, `cityMunicipality`, `province`, `monthlyRental`, `telNum`, `email`, `createdAt`, `updatedAt`) VALUES
(1, 2, 'hehez', 'e.', 'huhuz', 'address', 'asd', 'asd', 'asd', 'asd', '2222', '2323', 'hehez@yahoo.com', '2017-02-19 07:45:39', '2017-02-19 07:45:39'),
(2, 3, 'hehez', 'e.', 'huhuz', 'address', 'asd', 'asd', 'asd', 'asd', '2222', '2323', 'hehez@yahoo.com', '2017-02-19 10:41:18', '2017-02-19 10:41:18'),
(3, 4, 'hehez', 'e.', 'huhuz', 'address', 'asd', 'asd', 'asd', 'asd', '2222', '2323', 'hehez@yahoo.com', '2017-02-19 10:41:58', '2017-02-19 10:41:58'),
(4, 5, 'hehez', 'e.', 'huhuz', 'address', 'asd', 'asd', 'asd', 'asd', '2222', '2323', 'hehez@yahoo.com', '2017-02-19 10:46:46', '2017-02-19 10:46:46'),
(5, 6, 'hehez', 'e.', 'huhuz', 'address', 'asd', 'asd', 'asd', 'asd', '2222', '2323', 'hehez@yahoo.com', '2017-02-19 10:48:52', '2017-02-19 10:48:52'),
(6, 7, 'hehez', 'e.', 'huhuz', 'address', 'asd', 'asd', 'asd', 'asd', '2222', '2323', 'hehez@yahoo.com', '2017-02-19 10:49:25', '2017-02-19 10:49:25'),
(7, 8, 'hehez', 'e.', 'huhuz', 'address', 'asd', 'asd', 'asd', 'asd', '2222', '2323', 'hehez@yahoo.com', '2017-02-19 10:49:58', '2017-02-19 10:49:58'),
(8, 9, 'hehez', 'e.', 'huhuz', 'address', 'asd', 'asd', 'asd', 'asd', '2222', '2323', 'hehez@yahoo.com', '2017-02-19 10:54:20', '2017-02-19 10:54:20'),
(9, 10, 'hehez', 'e.', 'huhuz', 'address', 'asd', 'asd', 'asd', 'asd', '2222', '2323', 'hehez@yahoo.com', '2017-02-19 10:56:06', '2017-02-19 10:56:06'),
(10, 11, 'hehez', 'e.', 'huhuz', 'address', 'asd', 'asd', 'asd', 'asd', '2222', '2323', 'hehez@yahoo.com', '2017-02-19 10:56:41', '2017-02-19 10:56:41'),
(11, 12, 'hehez', 'e.', 'huhuz', 'address', 'asd', 'asd', 'asd', 'asd', '2222', '2323', 'hehez@yahoo.com', '2017-02-19 11:06:45', '2017-02-19 11:06:45'),
(12, 13, 'hehez', 'e.', 'huhuz', 'address', 'asd', 'asd', 'asd', 'asd', '2222', '2323', 'hehez@yahoo.com', '2017-02-19 11:08:07', '2017-02-19 11:08:07');

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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessments`
--

INSERT INTO `assessments` (`assessmentId`, `referenceNum`, `amount`, `paidUpTo`, `status`, `createdAt`, `updatedAt`) VALUES
(13, 'AE9054B21A', 17000, 'None', 'New', '2017-02-09 08:10:15', '2017-02-15 03:21:35'),
(15, '9E9E1D64A2', 98788, 'None', 'New', '2017-02-09 13:22:41', '2017-02-20 13:48:36'),
(16, '4824FE5C5F', 17000, 'None', 'New', '2017-02-09 13:23:06', '2017-02-15 03:21:31'),
(17, 'D2D2E57657', 17000, 'None', 'Renew', '2017-02-09 13:23:16', '2017-02-15 03:21:30'),
(18, '156C5D49E0', 17000, 'None', 'New', '2017-02-10 05:00:52', '2017-02-15 03:21:28'),
(19, '3555F343F2', 17000, 'None', 'New', '2017-02-11 07:14:35', '2017-02-15 03:21:27'),
(21, '06C516C22A', 17000, 'None', 'New', '2017-02-15 00:11:16', '2017-02-15 03:21:25'),
(22, '03F8AF93BA', 14000, 'First Quarter', 'New', '2017-02-15 00:17:11', '2017-02-15 03:31:35'),
(23, 'CF3169FB79', 0, 'Fourth Quarter', 'New', '2017-02-15 00:17:11', '2017-02-16 15:37:13'),
(24, '6A7450B003', 0, 'None', 'New', '2017-02-19 05:26:56', '2017-02-19 05:26:56'),
(25, '6A7450B003', 0, 'None', 'New', '2017-02-19 05:33:01', '2017-02-19 05:33:01'),
(26, '6A7450B003', 0, 'None', 'New', '2017-02-19 05:36:57', '2017-02-19 05:36:57'),
(27, '6A7450B003', 0, 'None', 'New', '2017-02-19 05:40:45', '2017-02-19 05:40:45'),
(28, '6A7450B003', 0, 'None', 'New', '2017-02-19 05:42:24', '2017-02-19 05:42:24'),
(29, '6A7450B003', 0, 'None', 'New', '2017-02-19 06:00:57', '2017-02-19 06:00:57'),
(40, 'D2D2E57657', 1000, 'None', 'Renew', '2017-02-19 11:08:07', '2017-02-21 13:31:49');

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

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
(16, 1, 8, 'dummy', 'Test 47', 'dummy', 'dummy', 'dummy', 'Corporation', 'dummy', '02/19/2017', 'Dormitories', 'dummy', 4024, 'dummy', 'dummy', 'dummy', 'dummy', 'San Jose', 'dummy', 'Biñan City', 'Laguna', 'NA', 'NA', 'NA', '1234', 'dummy@yahoo.com', 'dummy', 50, 50, 50, '555', 50, 'dummy', '1234', 'dummy@yahoo.com', '2017-02-19 10:12:02', '2017-02-19 10:12:02');

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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_activities`
--

INSERT INTO `business_activities` (`activityId`, `bploId`, `lineOfBusiness`, `capitalization`, `activityStatus`, `createdAt`, `updatedAt`) VALUES
(1, 1, 'Manufacturer Kind', '20000', 'active', '2017-01-22 13:20:51', '2017-02-09 13:22:27'),
(5, 5, 'Manufacturer Kind', '300000', 'active', '2017-01-23 12:43:22', '2017-02-20 13:48:35'),
(6, 6, 'Manufacturer Kind', '20000', 'active', '2017-01-23 12:47:52', '2017-02-09 13:22:31'),
(7, 8, 'Manufacturer Kind', '20000', 'active', '2017-02-02 13:05:07', '2017-02-09 13:22:33'),
(8, 8, 'Manufacturer Kind', '20000', 'active', '2017-02-02 13:05:07', '2017-02-09 13:22:35'),
(9, 9, 'Manufacturer Kind', '15000', 'active', '2017-02-02 16:20:04', '2017-02-09 05:46:02'),
(10, 9, 'Exporter Kind', '300000', 'active', '2017-02-02 16:20:04', '2017-02-19 10:53:13'),
(11, 9, 'Contractor', '5000000', 'removed', '2017-02-02 16:20:04', '2017-02-19 07:29:25'),
(21, 19, 'Manufacturer Kind', '20000', 'active', '2017-02-09 08:10:15', '2017-02-09 08:10:15'),
(22, 19, 'Retailer', '500000', 'active', '2017-02-09 08:10:15', '2017-02-09 08:10:15'),
(23, 20, 'Wholesaler Kind', '250000', 'active', '2017-02-10 05:00:51', '2017-02-19 10:53:20'),
(24, 20, 'Retailer', '670000', 'active', '2017-02-10 05:00:51', '2017-02-10 05:00:51'),
(25, 20, 'Contractor', '500000', 'active', '2017-02-10 05:00:52', '2017-02-10 05:00:52'),
(26, 21, 'Others', '300000', 'active', '2017-02-11 07:14:34', '2017-02-11 07:14:34'),
(29, 28, 'Manufacturer Kind', '300000', 'active', '2017-02-15 00:11:16', '2017-02-15 00:11:16'),
(30, 28, 'Wholesaler Kind', '500000', 'active', '2017-02-15 00:11:16', '2017-02-19 10:53:26'),
(31, 30, 'Retailer', '300000', 'active', '2017-02-15 00:17:11', '2017-02-15 00:17:11'),
(32, 30, 'Others', '20000', 'active', '2017-02-15 00:17:11', '2017-02-15 00:17:11'),
(35, 33, 'Manufacturer Kind', '300000', 'active', '2017-02-16 11:38:40', '2017-02-16 11:38:40'),
(36, 33, 'Exporter Kind', '300000', 'active', '2017-02-16 11:38:40', '2017-02-19 10:53:02'),
(37, 33, 'Exporter Kind', '300000', 'active', '2017-02-16 11:38:40', '2017-02-19 10:53:07'),
(47, 34, 'Manufacturer Kind', '1000000', 'active', '2017-02-19 06:00:57', '2017-02-19 06:00:57'),
(48, 34, 'Bank', '1000000', 'active', '2017-02-19 06:00:57', '2017-02-19 06:00:57'),
(49, 34, 'Contractor', '1000000', 'active', '2017-02-19 06:00:58', '2017-02-19 06:00:58'),
(50, 34, 'Wholesaler Kind', '1000000', 'active', '2017-02-19 06:00:58', '2017-02-19 10:52:55'),
(51, 34, 'Retailer', '1000000', 'active', '2017-02-19 06:00:58', '2017-02-19 06:00:58'),
(52, 34, 'Lessor (Renting)', '1000000', 'active', '2017-02-19 06:00:58', '2017-02-19 06:00:58'),
(53, 34, 'Exporter Kind', '1000000', 'active', '2017-02-19 06:00:58', '2017-02-19 10:53:36'),
(54, 34, 'Peddlers', '1000000', 'active', '2017-02-19 06:00:58', '2017-02-19 06:00:58'),
(55, 34, 'Amusement devices/places', '1000000', 'active', '2017-02-19 06:00:58', '2017-02-19 06:00:58'),
(56, 34, 'Retail Dealers (liquors)', '1000000', 'active', '2017-02-19 06:00:58', '2017-02-19 06:00:58'),
(57, 34, 'Retail Dealers (tobaccos)', '1000000', 'active', '2017-02-19 06:00:58', '2017-02-19 06:00:58'),
(58, 34, 'Others', '1000000', 'active', '2017-02-19 06:00:58', '2017-02-19 06:00:58'),
(59, 34, 'Display areas of products', '1000000', 'active', '2017-02-19 06:00:58', '2017-02-19 06:00:58'),
(60, 9, 'Manufacturer Kind', '123456', 'active', '2017-02-19 07:45:40', '2017-02-19 07:45:40');

-- --------------------------------------------------------

--
-- Table structure for table `charges`
--

CREATE TABLE IF NOT EXISTS `charges` (
  `chargeId` int(10) NOT NULL,
  `assessmentId` int(10) NOT NULL,
  `due` double NOT NULL,
  `surcharge` double NOT NULL,
  `interest` double NOT NULL,
  `particulars` varchar(255) NOT NULL,
  `computed` tinyint(1) NOT NULL DEFAULT '0',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=288 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charges`
--

INSERT INTO `charges` (`chargeId`, `assessmentId`, `due`, `surcharge`, `interest`, `particulars`, `computed`, `createdAt`, `updatedAt`) VALUES
(62, 13, 3500, 0, 0, 'MAYOR''S PERMIT FEE (MANUFACTURER KIND)', 0, '2017-02-09 08:10:15', '2017-02-20 23:25:13'),
(63, 13, 350, 0, 0, 'TAX ON MANUFACTURER KIND', 0, '2017-02-09 08:10:15', '2017-02-09 08:10:15'),
(64, 13, 1500, 0, 0, 'MAYOR''S PERMIT FEE (RETAILER)', 0, '2017-02-09 08:10:15', '2017-02-09 08:10:15'),
(65, 13, 150, 0, 0, 'TAX ON RETAILER', 0, '2017-02-09 08:10:15', '2017-02-09 08:10:15'),
(66, 13, 1250, 0, 0, 'ENVIRONMENTAL CLEARANCE FEE', 0, '2017-02-09 08:10:15', '2017-02-09 08:10:15'),
(67, 13, 1140, 0, 0, 'ZONING/LOCATIONAL CLEARANCE FEE', 0, '2017-02-09 08:10:15', '2017-02-09 08:10:15'),
(68, 13, 1200, 0, 0, 'GARBAGE SERVICE FEE', 0, '2017-02-09 08:10:15', '2017-02-09 08:10:15'),
(69, 13, 400, 0, 0, 'ANNUAL INSPECTION FEE', 0, '2017-02-09 08:10:15', '2017-02-09 08:10:15'),
(70, 13, 200, 0, 0, 'BUSINESS INSPECTION FEE', 0, '2017-02-09 08:10:15', '2017-02-09 08:10:15'),
(71, 13, 350, 0, 0, 'BUSINESS PLATE & STICKER', 0, '2017-02-09 08:10:15', '2017-02-09 08:10:15'),
(72, 13, 1500, 0, 0, 'HEALTH CARD FEE', 0, '2017-02-09 08:10:15', '2017-02-09 08:10:15'),
(73, 13, 480, 0, 0, 'SANITARY PERMIT FEE', 0, '2017-02-09 13:01:09', '2017-02-09 13:01:09'),
(74, 15, 3500, 0, 0, 'MAYOR''S PERMIT FEE (MANUFACTURER KIND)', 1, '2017-02-09 13:22:41', '2017-02-18 13:09:29'),
(75, 15, 350, 0, 0, 'TAX ON MANUFACTURER KIND', 1, '2017-02-09 13:22:42', '2017-02-18 13:09:29'),
(76, 15, 500, 0, 0, 'ENVIRONMENTAL CLEARANCE FEE', 1, '2017-02-09 13:22:42', '2017-02-18 13:09:29'),
(77, 15, 240, 0, 0, 'ZONING/LOCATIONAL CLEARANCE FEE', 1, '2017-02-09 13:22:42', '2017-02-18 13:09:29'),
(78, 15, 600, 0, 0, 'GARBAGE SERVICE FEE', 1, '2017-02-09 13:22:42', '2017-02-18 13:09:29'),
(79, 15, 400, 0, 0, 'ANNUAL INSPECTION FEE', 1, '2017-02-09 13:22:42', '2017-02-18 13:09:29'),
(80, 15, 200, 0, 0, 'BUSINESS INSPECTION FEE', 1, '2017-02-09 13:22:42', '2017-02-18 13:09:29'),
(81, 15, 350, 0, 0, 'BUSINESS PLATE & STICKER', 1, '2017-02-09 13:22:42', '2017-02-18 13:09:29'),
(82, 15, 88888, 0, 0, 'SANITARY PERMIT FEE', 1, '2017-02-09 13:22:42', '2017-02-18 13:09:29'),
(83, 15, 3700, 0, 0, 'HEALTH CARD FEE', 1, '2017-02-09 13:22:42', '2017-02-18 13:09:29'),
(84, 16, 3500, 0, 0, 'MAYOR''S PERMIT FEE (MANUFACTURER KIND)', 0, '2017-02-09 13:23:06', '2017-02-09 13:23:06'),
(85, 16, 350, 0, 0, 'TAX ON MANUFACTURER KIND', 0, '2017-02-09 13:23:07', '2017-02-09 13:23:07'),
(86, 16, 3500, 0, 0, 'MAYOR''S PERMIT FEE (MANUFACTURER KIND)', 0, '2017-02-09 13:23:07', '2017-02-09 13:23:07'),
(87, 16, 350, 0, 0, 'TAX ON MANUFACTURER KIND', 0, '2017-02-09 13:23:07', '2017-02-09 13:23:07'),
(88, 16, 1000, 0, 0, 'ENVIRONMENTAL CLEARANCE FEE', 0, '2017-02-09 13:23:07', '2017-02-09 13:23:07'),
(89, 16, 480, 0, 0, 'ZONING/LOCATIONAL CLEARANCE FEE', 0, '2017-02-09 13:23:07', '2017-02-09 13:23:07'),
(90, 16, 1200, 0, 0, 'GARBAGE SERVICE FEE', 0, '2017-02-09 13:23:07', '2017-02-09 13:23:07'),
(91, 16, 400, 0, 0, 'ANNUAL INSPECTION FEE', 0, '2017-02-09 13:23:07', '2017-02-09 13:23:07'),
(92, 16, 200, 0, 0, 'BUSINESS INSPECTION FEE', 0, '2017-02-09 13:23:07', '2017-02-09 13:23:07'),
(93, 16, 350, 0, 0, 'BUSINESS PLATE & STICKER', 0, '2017-02-09 13:23:07', '2017-02-09 13:23:07'),
(94, 16, 492, 0, 0, 'SANITARY PERMIT FEE', 0, '2017-02-09 13:23:07', '2017-02-09 13:23:07'),
(95, 16, 6600, 0, 0, 'HEALTH CARD FEE', 0, '2017-02-09 13:23:07', '2017-02-09 13:23:07'),
(96, 17, 1000, 0, 0, 'MAYOR''S PERMIT FEE (MANUFACTURER KIND)', 0, '2017-02-09 13:23:17', '2017-02-09 13:23:17'),
(97, 17, 100, 0, 0, 'TAX ON MANUFACTURER KIND', 0, '2017-02-09 13:23:17', '2017-02-09 13:23:17'),
(98, 17, 800, 0, 0, 'MAYOR''S PERMIT FEE (EXPORTER KIND)', 0, '2017-02-09 13:23:17', '2017-02-09 13:23:17'),
(99, 17, 80, 0, 0, 'TAX ON EXPORTER KIND', 0, '2017-02-09 13:23:17', '2017-02-09 13:23:17'),
(100, 17, 1500, 0, 0, 'MAYOR''S PERMIT FEE (CONTRACTOR)', 0, '2017-02-09 13:23:17', '2017-02-09 13:23:17'),
(101, 17, 150, 0, 0, 'TAX ON CONTRACTOR', 0, '2017-02-09 13:23:17', '2017-02-09 13:23:17'),
(102, 17, 2000, 0, 0, 'ENVIRONMENTAL CLEARANCE FEE', 0, '2017-02-09 13:23:17', '2017-02-09 13:23:17'),
(103, 17, 6340, 0, 0, 'ZONING/LOCATIONAL CLEARANCE FEE', 0, '2017-02-09 13:23:17', '2017-02-09 13:23:17'),
(104, 17, 1800, 0, 0, 'GARBAGE SERVICE FEE', 0, '2017-02-09 13:23:17', '2017-02-09 13:23:17'),
(105, 17, 400, 0, 0, 'ANNUAL INSPECTION FEE', 0, '2017-02-09 13:23:17', '2017-02-09 13:23:17'),
(106, 17, 200, 0, 0, 'BUSINESS INSPECTION FEE', 0, '2017-02-09 13:23:17', '2017-02-09 13:23:17'),
(107, 17, 350, 0, 0, 'BUSINESS PLATE & STICKER', 0, '2017-02-09 13:23:17', '2017-02-09 13:23:17'),
(108, 17, 4848, 0, 0, 'SANITARY PERMIT FEE', 0, '2017-02-09 13:23:17', '2017-02-09 13:23:17'),
(109, 17, 600, 0, 0, 'HEALTH CARD FEE', 0, '2017-02-09 13:23:17', '2017-02-09 13:23:17'),
(110, 18, 7000, 0, 0, 'MAYOR''S PERMIT FEE (WHOLESALER KIND)', 0, '2017-02-10 05:00:52', '2017-02-10 05:00:52'),
(111, 18, 700, 0, 0, 'TAX ON WHOLESALER KIND', 0, '2017-02-10 05:00:52', '2017-02-10 05:00:52'),
(112, 18, 5000, 0, 0, 'MAYOR''S PERMIT FEE (RETAILER)', 0, '2017-02-10 05:00:52', '2017-02-10 05:00:52'),
(113, 18, 500, 0, 0, 'TAX ON RETAILER', 0, '2017-02-10 05:00:52', '2017-02-10 05:00:52'),
(114, 18, 5000, 0, 0, 'MAYOR''S PERMIT FEE (CONTRACTOR)', 0, '2017-02-10 05:00:52', '2017-02-10 05:00:52'),
(115, 18, 500, 0, 0, 'TAX ON CONTRACTOR', 0, '2017-02-10 05:00:52', '2017-02-10 05:00:52'),
(116, 18, 2000, 0, 0, 'ENVIRONMENTAL CLEARANCE FEE', 0, '2017-02-10 05:00:52', '2017-02-10 05:00:52'),
(117, 18, 2620, 0, 0, 'ZONING/LOCATIONAL CLEARANCE FEE', 0, '2017-02-10 05:00:52', '2017-02-10 05:00:52'),
(118, 18, 1800, 0, 0, 'GARBAGE SERVICE FEE', 0, '2017-02-10 05:00:52', '2017-02-10 05:00:52'),
(119, 18, 400, 0, 0, 'ANNUAL INSPECTION FEE', 0, '2017-02-10 05:00:52', '2017-02-10 05:00:52'),
(120, 18, 200, 0, 0, 'BUSINESS INSPECTION FEE', 0, '2017-02-10 05:00:52', '2017-02-10 05:00:52'),
(121, 18, 350, 0, 0, 'BUSINESS PLATE & STICKER', 0, '2017-02-10 05:00:52', '2017-02-10 05:00:52'),
(122, 18, 492, 0, 0, 'SANITARY PERMIT FEE', 0, '2017-02-10 05:00:52', '2017-02-10 05:00:52'),
(123, 18, 36900, 0, 0, 'HEALTH CARD FEE', 0, '2017-02-10 05:00:52', '2017-02-10 05:00:52'),
(124, 19, 5000, 0, 0, 'MAYOR''S PERMIT FEE (OTHERS)', 0, '2017-02-11 07:14:35', '2017-02-11 07:14:35'),
(125, 19, 500, 0, 0, 'TAX ON OTHERS', 0, '2017-02-11 07:14:35', '2017-02-11 07:14:35'),
(126, 19, 500, 0, 0, 'ENVIRONMENTAL CLEARANCE FEE', 0, '2017-02-11 07:14:35', '2017-02-11 07:14:35'),
(127, 19, 700, 0, 0, 'ZONING/LOCATIONAL CLEARANCE FEE', 0, '2017-02-11 07:14:35', '2017-02-11 07:14:35'),
(128, 19, 600, 0, 0, 'GARBAGE SERVICE FEE', 0, '2017-02-11 07:14:35', '2017-02-11 07:14:35'),
(129, 19, 400, 0, 0, 'ANNUAL INSPECTION FEE', 0, '2017-02-11 07:14:35', '2017-02-11 07:14:35'),
(130, 19, 200, 0, 0, 'BUSINESS INSPECTION FEE', 0, '2017-02-11 07:14:35', '2017-02-11 07:14:35'),
(131, 19, 350, 0, 0, 'BUSINESS PLATE & STICKER', 0, '2017-02-11 07:14:35', '2017-02-11 07:14:35'),
(132, 19, 2000, 0, 0, 'SANITARY PERMIT FEE', 0, '2017-02-11 07:14:35', '2017-02-11 07:14:35'),
(133, 19, 1500, 0, 0, 'HEALTH CARD FEE', 0, '2017-02-11 07:14:35', '2017-02-11 07:14:35'),
(146, 21, 3500, 0, 0, 'MAYOR''S PERMIT FEE (MANUFACTURER KIND)', 0, '2017-02-15 00:11:16', '2017-02-15 00:11:16'),
(147, 21, 350, 0, 0, 'TAX ON MANUFACTURER KIND', 0, '2017-02-15 00:11:16', '2017-02-15 00:11:16'),
(148, 21, 3500, 0, 0, 'MAYOR''S PERMIT FEE (WHOLESALER KIND)', 0, '2017-02-15 00:11:16', '2017-02-15 00:11:16'),
(149, 21, 350, 0, 0, 'TAX ON WHOLESALER KIND', 0, '2017-02-15 00:11:16', '2017-02-15 00:11:16'),
(150, 21, 1250, 0, 0, 'ENVIRONMENTAL CLEARANCE FEE', 0, '2017-02-15 00:11:16', '2017-02-15 00:11:16'),
(151, 21, 3600, 0, 0, 'ZONING/LOCATIONAL CLEARANCE FEE', 0, '2017-02-15 00:11:16', '2017-02-15 00:11:16'),
(152, 21, 1200, 0, 0, 'GARBAGE SERVICE FEE', 0, '2017-02-15 00:11:17', '2017-02-15 00:11:17'),
(153, 21, 400, 0, 0, 'ANNUAL INSPECTION FEE', 0, '2017-02-15 00:11:17', '2017-02-15 00:11:17'),
(154, 21, 200, 0, 0, 'BUSINESS INSPECTION FEE', 0, '2017-02-15 00:11:17', '2017-02-15 00:11:17'),
(155, 21, 350, 0, 0, 'BUSINESS PLATE & STICKER', 0, '2017-02-15 00:11:17', '2017-02-15 00:11:17'),
(156, 21, 1020, 0, 0, 'SANITARY PERMIT FEE', 0, '2017-02-15 00:11:17', '2017-02-15 00:11:17'),
(157, 21, 3000, 0, 0, 'HEALTH CARD FEE', 0, '2017-02-15 00:11:17', '2017-02-15 00:11:17'),
(158, 22, 1500, 0, 0, 'MAYOR''S PERMIT FEE (RETAILER)', 0, '2017-02-15 00:17:11', '2017-02-15 00:17:11'),
(159, 22, 150, 0, 0, 'TAX ON RETAILER', 0, '2017-02-15 00:17:11', '2017-02-15 00:17:11'),
(160, 22, 5000, 0, 0, 'MAYOR''S PERMIT FEE (OTHERS)', 0, '2017-02-15 00:17:11', '2017-02-15 00:17:11'),
(161, 22, 500, 0, 0, 'TAX ON OTHERS', 0, '2017-02-15 00:17:11', '2017-02-15 00:17:11'),
(162, 22, 1000, 0, 0, 'ENVIRONMENTAL CLEARANCE FEE', 0, '2017-02-15 00:17:11', '2017-02-15 00:17:11'),
(163, 22, 2400, 0, 0, 'ZONING/LOCATIONAL CLEARANCE FEE', 0, '2017-02-15 00:17:11', '2017-02-15 00:17:11'),
(164, 22, 1200, 0, 0, 'GARBAGE SERVICE FEE', 0, '2017-02-15 00:17:11', '2017-02-15 00:17:11'),
(165, 22, 400, 0, 0, 'ANNUAL INSPECTION FEE', 0, '2017-02-15 00:17:11', '2017-02-15 00:17:11'),
(166, 22, 200, 0, 0, 'BUSINESS INSPECTION FEE', 0, '2017-02-15 00:17:11', '2017-02-15 00:17:11'),
(167, 22, 350, 0, 0, 'BUSINESS PLATE & STICKER', 0, '2017-02-15 00:17:11', '2017-02-15 00:17:11'),
(168, 22, 1200, 0, 0, 'SANITARY PERMIT FEE', 0, '2017-02-15 00:17:12', '2017-02-15 00:17:12'),
(169, 22, 3600, 0, 0, 'HEALTH CARD FEE', 0, '2017-02-15 00:17:12', '2017-02-15 00:17:12'),
(170, 23, 1000, 0, 0, 'ANNUAL INSPECTION FEE', 1, '2017-02-16 13:36:28', '2017-02-16 13:41:59'),
(185, 23, 5000, 0, 0, 'MAYOR''S PERMIT FEE (MANUFACTURER KIND)', 1, '2017-02-16 15:21:30', '2017-02-16 15:21:30'),
(186, 23, 500, 0, 0, 'TAX ON MANUFACTURER KIND', 1, '2017-02-16 15:21:30', '2017-02-16 15:21:30'),
(187, 23, 4000, 0, 0, 'MAYOR''S PERMIT FEE (EXPORTER KIND)', 1, '2017-02-16 15:21:30', '2017-02-16 15:21:30'),
(188, 23, 400, 0, 0, 'TAX ON EXPORTER KIND', 1, '2017-02-16 15:21:30', '2017-02-16 15:21:30'),
(189, 23, 4000, 0, 0, 'MAYOR''S PERMIT FEE (EXPORTER KIND)', 1, '2017-02-16 15:21:30', '2017-02-16 15:21:30'),
(190, 23, 400, 0, 0, 'TAX ON EXPORTER KIND', 1, '2017-02-16 15:21:30', '2017-02-16 15:21:30'),
(191, 23, 1500, 0, 0, 'ENVIRONMENTAL CLEARANCE FEE', 1, '2017-02-16 15:21:30', '2017-02-16 15:21:30'),
(192, 23, 2100, 0, 0, 'ZONING/LOCATIONAL CLEARANCE FEE', 1, '2017-02-16 15:21:30', '2017-02-16 15:21:30'),
(193, 23, 1800, 0, 0, 'GARBAGE SERVICE FEE', 1, '2017-02-16 15:21:30', '2017-02-16 15:21:30'),
(194, 23, 200, 0, 0, 'BUSINESS INSPECTION FEE', 1, '2017-02-16 15:21:30', '2017-02-16 15:21:30'),
(195, 23, 350, 0, 0, 'BUSINESS PLATE & STICKER', 1, '2017-02-16 15:21:30', '2017-02-16 15:21:30'),
(196, 23, 1200, 0, 0, 'SANITARY PERMIT FEE', 1, '2017-02-16 15:21:30', '2017-02-16 15:21:30'),
(197, 23, 15000, 0, 0, 'HEALTH CARD FEE', 1, '2017-02-16 15:21:30', '2017-02-16 15:21:30'),
(198, 15, 3500, 0, 0, 'MAYOR''S PERMIT FEE (MANUFACTURER KIND)', 1, '2017-02-18 13:09:28', '2017-02-18 13:09:30'),
(199, 15, 350, 0, 0, 'TAX ON MANUFACTURER KIND', 1, '2017-02-18 13:09:29', '2017-02-18 13:09:30'),
(200, 15, 750, 0, 0, 'ENVIRONMENTAL CLEARANCE FEE', 1, '2017-02-18 13:09:29', '2017-02-18 13:09:30'),
(201, 15, 950, 0, 0, 'ZONING/LOCATIONAL CLEARANCE FEE', 1, '2017-02-18 13:09:29', '2017-02-18 13:09:30'),
(202, 15, 600, 0, 0, 'GARBAGE SERVICE FEE', 1, '2017-02-18 13:09:29', '2017-02-18 13:09:30'),
(203, 15, 200, 0, 0, 'BUSINESS INSPECTION FEE', 1, '2017-02-18 13:09:29', '2017-02-18 13:09:30'),
(204, 15, 350, 0, 0, 'BUSINESS PLATE & STICKER', 1, '2017-02-18 13:09:29', '2017-02-18 13:09:30'),
(205, 15, 88888, 0, 0, 'SANITARY PERMIT FEE', 1, '2017-02-18 13:09:29', '2017-02-18 13:09:30'),
(206, 15, 3700, 0, 0, 'HEALTH CARD FEE', 1, '2017-02-18 13:09:29', '2017-02-18 13:09:30'),
(207, 15, 3500, 0, 0, 'MAYOR''S PERMIT FEE (MANUFACTURER KIND)', 1, '2017-02-18 13:12:07', '2017-02-18 13:12:07'),
(208, 15, 350, 0, 0, 'TAX ON MANUFACTURER KIND', 1, '2017-02-18 13:12:07', '2017-02-18 13:12:07'),
(209, 15, 750, 0, 0, 'ENVIRONMENTAL CLEARANCE FEE', 1, '2017-02-18 13:12:07', '2017-02-18 13:12:07'),
(210, 15, 950, 0, 0, 'ZONING/LOCATIONAL CLEARANCE FEE', 1, '2017-02-18 13:12:07', '2017-02-18 13:12:07'),
(211, 15, 600, 0, 0, 'GARBAGE SERVICE FEE', 1, '2017-02-18 13:12:07', '2017-02-18 13:12:07'),
(212, 15, 200, 0, 0, 'BUSINESS INSPECTION FEE', 1, '2017-02-18 13:12:07', '2017-02-18 13:12:07'),
(213, 15, 350, 0, 0, 'BUSINESS PLATE & STICKER', 1, '2017-02-18 13:12:07', '2017-02-18 13:12:07'),
(214, 15, 88888, 0, 0, 'SANITARY PERMIT FEE', 1, '2017-02-18 13:12:07', '2017-02-18 13:12:07'),
(215, 15, 3700, 0, 0, 'HEALTH CARD FEE', 1, '2017-02-18 13:12:07', '2017-02-18 13:12:07'),
(263, 40, 1573, 0, 0, 'TAX ON MANUFACTURER KIND (ESSENTIAL)', 1, '2017-02-19 11:08:07', '2017-02-19 11:08:08'),
(264, 40, 3146, 0, 0, 'TAX ON MANUFACTURER KIND (NON-ESSENTIAL)', 1, '2017-02-19 11:08:07', '2017-02-19 11:08:08'),
(265, 40, 1000, 0, 0, 'MAYOR''S PERMIT FEE (MANUFACTURER KIND)', 1, '2017-02-19 11:08:07', '2017-02-19 11:08:08'),
(266, 40, 1573, 0, 0, 'TAX ON EXPORTER KIND (ESSENTIAL)', 1, '2017-02-19 11:08:07', '2017-02-19 11:08:08'),
(267, 40, 3146, 0, 0, 'TAX ON EXPORTER KIND (NON-ESSENTIAL)', 1, '2017-02-19 11:08:07', '2017-02-19 11:08:08'),
(268, 40, 800, 0, 0, 'MAYOR''S PERMIT FEE (EXPORTER KIND)', 1, '2017-02-19 11:08:07', '2017-02-19 11:08:08'),
(269, 40, 1573, 0, 0, 'TAX ON MANUFACTURER KIND (ESSENTIAL)', 1, '2017-02-19 11:08:07', '2017-02-19 11:08:08'),
(270, 40, 3146, 0, 0, 'TAX ON MANUFACTURER KIND (NON-ESSENTIAL)', 1, '2017-02-19 11:08:07', '2017-02-19 11:08:08'),
(271, 40, 1000, 0, 0, 'MAYOR''S PERMIT FEE (MANUFACTURER KIND)', 1, '2017-02-19 11:08:07', '2017-02-19 11:08:08'),
(272, 40, 1500, 0, 0, 'ENVIRONMENTAL CLEARANCE FEE', 1, '2017-02-19 11:08:07', '2017-02-19 11:08:08'),
(273, 40, 1800, 0, 0, 'GARBAGE SERVICE FEE', 1, '2017-02-19 11:08:07', '2017-02-19 11:08:08'),
(274, 40, 1440, 0, 0, 'ZONING/LOCATIONAL CLEARANCE FEE', 1, '2017-02-19 11:08:07', '2017-02-19 11:08:08'),
(275, 40, 200, 0, 0, 'BUSINESS INSPECTION FEE', 1, '2017-02-19 11:08:07', '2017-02-19 11:08:08'),
(276, 40, 4848, 0, 0, 'SANITARY PERMIT FEE', 1, '2017-02-19 11:08:08', '2017-02-19 11:08:08'),
(277, 40, 600, 0, 0, 'HEALTH CARD FEE', 1, '2017-02-19 11:08:08', '2017-02-19 11:08:08'),
(278, 15, 3500, 0, 0, 'MAYOR''S PERMIT FEE (MANUFACTURER KIND)', 1, '2017-02-20 13:48:35', '2017-02-20 13:48:35'),
(279, 15, 350, 0, 0, 'TAX ON MANUFACTURER KIND', 1, '2017-02-20 13:48:35', '2017-02-20 13:48:36'),
(280, 15, 500, 0, 0, 'ENVIRONMENTAL CLEARANCE FEE', 1, '2017-02-20 13:48:35', '2017-02-20 13:48:36'),
(281, 15, 700, 0, 0, 'ZONING/LOCATIONAL CLEARANCE FEE', 1, '2017-02-20 13:48:35', '2017-02-20 13:48:36'),
(282, 15, 600, 0, 0, 'GARBAGE SERVICE FEE', 1, '2017-02-20 13:48:35', '2017-02-20 13:48:36'),
(283, 15, 200, 0, 0, 'BUSINESS INSPECTION FEE', 1, '2017-02-20 13:48:35', '2017-02-20 13:48:36'),
(284, 15, 350, 0, 0, 'BUSINESS PLATE & STICKER', 1, '2017-02-20 13:48:35', '2017-02-20 13:48:36'),
(285, 15, 88888, 0, 0, 'SANITARY PERMIT FEE', 1, '2017-02-20 13:48:35', '2017-02-20 13:48:36'),
(286, 15, 3700, 0, 0, 'HEALTH CARD FEE', 1, '2017-02-20 13:48:35', '2017-02-20 13:48:36'),
(287, 40, 1000, 0, 0, 'ANNUAL INSPECTION FEE', 1, '2017-02-21 13:31:49', '2017-02-21 13:31:49');

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
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grosses`
--

INSERT INTO `grosses` (`grossId`, `activityId`, `previousGross`, `essentials`, `nonEssentials`, `createdAt`, `updatedAt`) VALUES
(1, 9, 20000, 20000, 20000, '2017-02-07 14:17:40', '2017-02-07 14:17:40'),
(2, 10, 20000, 20000, 20000, '2017-02-07 14:17:40', '2017-02-07 14:17:40'),
(3, 11, 20000, 20000, 20000, '2017-02-07 14:17:40', '2017-02-07 14:17:40'),
(5, 26, 300000, 50000, 50000, '2017-02-12 01:27:08', '2017-02-12 01:27:08'),
(6, 9, 500000, 500000, 500000, '2017-02-19 07:45:39', '2017-02-19 07:45:39'),
(7, 10, 500000, 500000, 500000, '2017-02-19 07:45:39', '2017-02-19 07:45:39'),
(8, 9, 500000, 500000, 500000, '2017-02-19 10:41:19', '2017-02-19 10:41:19'),
(9, 10, 500000, 500000, 500000, '2017-02-19 10:41:19', '2017-02-19 10:41:19'),
(10, 60, 500000, 500000, 500000, '2017-02-19 10:41:19', '2017-02-19 10:41:19'),
(11, 9, 500000, 500000, 500000, '2017-02-19 10:41:58', '2017-02-19 10:41:58'),
(12, 10, 500000, 500000, 500000, '2017-02-19 10:41:58', '2017-02-19 10:41:58'),
(13, 60, 500000, 500000, 500000, '2017-02-19 10:41:59', '2017-02-19 10:41:59'),
(14, 9, 500000, 500000, 500000, '2017-02-19 10:46:46', '2017-02-19 10:46:46'),
(15, 10, 500000, 500000, 500000, '2017-02-19 10:46:46', '2017-02-19 10:46:46'),
(16, 60, 500000, 500000, 500000, '2017-02-19 10:46:46', '2017-02-19 10:46:46'),
(17, 9, 500000, 500000, 500000, '2017-02-19 10:48:52', '2017-02-19 10:48:52'),
(18, 10, 500000, 500000, 500000, '2017-02-19 10:48:52', '2017-02-19 10:48:52'),
(19, 60, 500000, 500000, 500000, '2017-02-19 10:48:52', '2017-02-19 10:48:52'),
(20, 9, 500000, 500000, 500000, '2017-02-19 10:49:25', '2017-02-19 10:49:25'),
(21, 10, 500000, 500000, 500000, '2017-02-19 10:49:25', '2017-02-19 10:49:25'),
(22, 60, 500000, 500000, 500000, '2017-02-19 10:49:25', '2017-02-19 10:49:25'),
(23, 9, 500000, 500000, 500000, '2017-02-19 10:49:58', '2017-02-19 10:49:58'),
(24, 10, 500000, 500000, 500000, '2017-02-19 10:49:58', '2017-02-19 10:49:58'),
(25, 60, 500000, 500000, 500000, '2017-02-19 10:49:58', '2017-02-19 10:49:58'),
(26, 9, 500000, 500000, 500000, '2017-02-19 10:54:20', '2017-02-19 10:54:20'),
(27, 10, 500000, 500000, 500000, '2017-02-19 10:54:20', '2017-02-19 10:54:20'),
(28, 60, 500000, 500000, 500000, '2017-02-19 10:54:20', '2017-02-19 10:54:20'),
(29, 9, 500000, 500000, 500000, '2017-02-19 10:56:06', '2017-02-19 10:56:06'),
(30, 10, 500000, 500000, 500000, '2017-02-19 10:56:06', '2017-02-19 10:56:06'),
(31, 60, 500000, 500000, 500000, '2017-02-19 10:56:06', '2017-02-19 10:56:06'),
(32, 9, 500000, 500000, 500000, '2017-02-19 10:56:41', '2017-02-19 10:56:41'),
(33, 10, 500000, 500000, 500000, '2017-02-19 10:56:41', '2017-02-19 10:56:41'),
(34, 60, 500000, 500000, 500000, '2017-02-19 10:56:41', '2017-02-19 10:56:41'),
(35, 9, 0, 100000, 100000, '2017-02-19 11:06:45', '2017-02-19 11:06:45'),
(36, 10, 0, 100000, 100000, '2017-02-19 11:06:45', '2017-02-19 11:06:45'),
(37, 60, 0, 100000, 100000, '2017-02-19 11:06:45', '2017-02-19 11:06:45'),
(38, 9, 0, 100000, 100000, '2017-02-19 11:08:07', '2017-02-19 11:08:07'),
(39, 10, 0, 100000, 100000, '2017-02-19 11:08:07', '2017-02-19 11:08:07'),
(40, 60, 0, 100000, 100000, '2017-02-19 11:08:07', '2017-02-19 11:08:07'),
(42, 9, 200000, 20000, 20000, '2017-02-21 05:13:59', '2017-02-21 05:13:59'),
(43, 10, 200000, 20000, 20000, '2017-02-21 05:13:59', '2017-02-21 05:13:59'),
(44, 60, 200000, 20000, 20000, '2017-02-21 05:13:59', '2017-02-21 05:13:59'),
(51, 9, 40000, 50000, 50000, '2017-02-21 05:19:37', '2017-02-21 05:19:37'),
(52, 10, 40000, 50000, 50000, '2017-02-21 05:19:37', '2017-02-21 05:19:37'),
(53, 60, 40000, 50000, 50000, '2017-02-21 05:19:37', '2017-02-21 05:19:37'),
(54, 7, 20000, 50000, 50000, '2017-02-21 06:53:34', '2017-02-21 06:53:34'),
(55, 8, 20000, 50000, 50000, '2017-02-21 06:53:34', '2017-02-21 06:53:34');

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
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issued_applications`
--

INSERT INTO `issued_applications` (`issueId`, `referenceNum`, `dept`, `type`, `createdAt`, `updatedAt`) VALUES
(1, '9E9E1D64A2', 'CHO', 'New', '2017-01-24 11:34:14', '2017-01-24 15:33:13'),
(3, '9E9E1D64A2', 'CENRO', 'New', '2017-01-24 11:36:15', '2017-01-24 15:33:16'),
(4, '9E9E1D64A2', 'Zoning', 'New', '2017-01-24 11:36:47', '2017-01-24 15:33:19'),
(5, '9E9E1D64A2', 'BPLO', 'New', '2017-01-24 15:35:35', '2017-01-24 15:59:32'),
(6, '47B3DF6BF4', 'Zoning', 'New', '2017-01-30 13:54:52', '2017-01-30 13:54:52'),
(7, '4824FE5C5F', 'BFP', 'New', '2017-02-02 14:42:24', '2017-02-02 14:42:24'),
(8, '4824FE5C5F', 'Engineering', 'New', '2017-02-02 14:52:17', '2017-02-02 14:52:17'),
(9, 'D2D2E57657', 'CENRO', 'New', '2017-02-08 13:12:05', '2017-02-08 13:12:05'),
(10, 'D2D2E57657', 'Zoning', 'New', '2017-02-08 13:13:28', '2017-02-08 13:13:28'),
(11, 'D2D2E57657', 'BFP', 'New', '2017-02-08 13:15:30', '2017-02-08 13:15:30'),
(12, 'D2D2E57657', 'Engineering', 'New', '2017-02-08 13:17:56', '2017-02-08 13:17:56'),
(13, 'D2D2E57657', 'CHO', 'New', '2017-02-08 13:20:39', '2017-02-08 13:20:39'),
(14, 'D2D2E57657', 'Zoning', 'New', '2017-02-08 13:34:42', '2017-02-08 13:34:42'),
(15, 'D2D2E57657', 'Zoning', 'New', '2017-02-08 13:35:09', '2017-02-08 13:35:09'),
(16, 'D2D2E57657', 'Zoning', 'New', '2017-02-08 13:37:29', '2017-02-08 13:37:29'),
(17, 'D2D2E57657', 'Zoning', 'New', '2017-02-08 13:40:25', '2017-02-08 13:40:25'),
(18, 'D2D2E57657', 'Zoning', 'New', '2017-02-08 13:40:31', '2017-02-08 13:40:31'),
(19, 'D2D2E57657', 'Zoning', 'New', '2017-02-08 13:40:59', '2017-02-08 13:40:59'),
(20, 'D2D2E57657', 'Zoning', 'New', '2017-02-08 13:42:40', '2017-02-08 13:42:40'),
(21, 'D2D2E57657', 'Zoning', 'New', '2017-02-08 13:42:59', '2017-02-08 13:42:59'),
(22, 'D2D2E57657', 'Zoning', 'New', '2017-02-08 13:45:26', '2017-02-08 13:45:26'),
(23, 'D2D2E57657', 'Zoning', 'New', '2017-02-08 13:46:49', '2017-02-08 13:46:49'),
(24, 'D2D2E57657', 'Zoning', 'New', '2017-02-08 13:47:16', '2017-02-08 13:47:16'),
(25, 'D2D2E57657', 'Zoning', 'New', '2017-02-08 13:48:20', '2017-02-08 13:48:20'),
(26, 'D2D2E57657', 'Zoning', 'New', '2017-02-08 13:48:27', '2017-02-08 13:48:27'),
(27, 'D2D2E57657', 'Zoning', 'New', '2017-02-08 13:48:42', '2017-02-08 13:48:42'),
(28, 'D2D2E57657', 'Zoning', 'New', '2017-02-08 13:49:14', '2017-02-08 13:49:14'),
(29, 'D2D2E57657', 'Zoning', 'New', '2017-02-08 13:51:50', '2017-02-08 13:51:50'),
(30, 'D2D2E57657', 'BFP', 'New', '2017-02-08 13:52:36', '2017-02-08 13:52:36'),
(31, 'D2D2E57657', 'CENRO', 'New', '2017-02-08 13:53:05', '2017-02-08 13:53:05'),
(32, 'D2D2E57657', 'Engineering', 'New', '2017-02-08 13:54:11', '2017-02-08 13:54:11'),
(33, 'D2D2E57657', 'CHO', 'New', '2017-02-08 13:54:33', '2017-02-08 13:54:33'),
(35, 'D2D2E57657', 'BPLO', 'Renew', '2017-02-08 14:11:20', '2017-02-08 14:11:20'),
(36, '4824FE5C5F', 'CENRO', 'New', '2017-02-08 14:25:03', '2017-02-08 14:25:03'),
(37, '4824FE5C5F', 'Zoning', 'New', '2017-02-08 14:25:35', '2017-02-08 14:25:35'),
(38, '4824FE5C5F', 'CHO', 'New', '2017-02-08 14:26:24', '2017-02-08 14:26:24'),
(39, '4824FE5C5F', 'BFP', 'New', '2017-02-08 14:32:20', '2017-02-08 14:32:20'),
(40, '4824FE5C5F', 'Engineering', 'New', '2017-02-08 14:33:22', '2017-02-08 14:33:22'),
(41, '4824FE5C5F', 'BPLO', 'New', '2017-02-08 14:34:05', '2017-02-08 14:34:05'),
(42, '3555F343F2', 'CENRO', 'New', '2017-02-11 07:26:31', '2017-02-11 07:26:31'),
(43, '3555F343F2', 'Zoning', 'New', '2017-02-11 08:05:07', '2017-02-11 08:05:07'),
(44, '3555F343F2', 'CHO', 'New', '2017-02-11 08:06:11', '2017-02-11 08:06:11'),
(45, '3555F343F2', 'BFP', 'New', '2017-02-11 08:06:59', '2017-02-11 08:06:59'),
(46, '3555F343F2', 'Engineering', 'New', '2017-02-11 08:07:50', '2017-02-11 08:07:50'),
(47, '3555F343F2', 'BPLO', 'New', '2017-02-11 08:10:17', '2017-02-11 08:10:17'),
(48, '03F8AF93BA', 'CENRO', 'New', '2017-02-15 00:23:07', '2017-02-15 00:23:07'),
(49, '03F8AF93BA', 'Zoning', 'New', '2017-02-15 00:31:12', '2017-02-15 00:31:12'),
(50, '03F8AF93BA', 'BFP', 'New', '2017-02-15 00:34:58', '2017-02-15 00:34:58'),
(51, '03F8AF93BA', 'Engineering', 'New', '2017-02-15 00:35:38', '2017-02-15 00:35:38'),
(52, '03F8AF93BA', 'CHO', 'New', '2017-02-15 00:36:01', '2017-02-15 00:36:01'),
(53, '03F8AF93BA', 'BPLO', 'New', '2017-02-15 00:38:51', '2017-02-15 00:38:51'),
(55, 'CF3169FB79', 'Zoning', 'New', '2017-02-16 11:50:22', '2017-02-16 11:50:22'),
(56, 'CF3169FB79', 'CENRO', 'New', '2017-02-16 12:46:55', '2017-02-16 12:46:55'),
(57, 'CF3169FB79', 'CHO', 'New', '2017-02-16 12:47:10', '2017-02-16 12:47:10'),
(58, 'CF3169FB79', 'Engineering', 'New', '2017-02-16 12:49:19', '2017-02-16 12:49:19'),
(59, 'CF3169FB79', 'BFP', 'New', '2017-02-16 12:49:40', '2017-02-16 12:49:40'),
(60, 'CF3169FB79', 'Engineering', 'New', '2017-02-16 13:02:16', '2017-02-16 13:02:16'),
(61, 'CF3169FB79', 'Engineering', 'New', '2017-02-16 13:09:28', '2017-02-16 13:09:28'),
(62, 'CF3169FB79', 'Engineering', 'New', '2017-02-16 13:36:28', '2017-02-16 13:36:28'),
(63, 'CF3169FB79', 'BPLO', 'New', '2017-02-16 15:37:13', '2017-02-16 15:37:13'),
(64, 'AE9054B21A', 'Zoning', 'New', '2017-02-21 13:04:35', '2017-02-21 13:04:35'),
(65, '3555F343F2', 'Zoning', 'New', '2017-02-21 13:06:09', '2017-02-21 13:06:09'),
(66, '156C5D49E0', 'Zoning', 'New', '2017-02-21 13:06:20', '2017-02-21 13:06:20'),
(67, '06C516C22A', 'Zoning', 'New', '2017-02-21 13:09:26', '2017-02-21 13:09:26'),
(68, 'AE9054B21A', 'BFP', 'New', '2017-02-21 13:20:52', '2017-02-21 13:20:52'),
(69, 'D2D2E57657', 'BFP', 'New', '2017-02-21 13:23:29', '2017-02-21 13:23:29'),
(70, 'AE9054B21A', 'CENRO', 'New', '2017-02-21 13:28:11', '2017-02-21 13:28:11'),
(71, '06C516C22A', 'CHO', 'New', '2017-02-21 13:30:57', '2017-02-21 13:30:57'),
(72, 'AE9054B21A', 'CHO', 'New', '2017-02-21 13:31:10', '2017-02-21 13:31:10'),
(73, 'D2D2E57657', 'Engineering', 'New', '2017-02-21 13:31:49', '2017-02-21 13:31:49');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lessors`
--

INSERT INTO `lessors` (`lessorId`, `bploId`, `firstName`, `middleName`, `lastName`, `address`, `subdivision`, `barangay`, `cityMunicipality`, `province`, `monthlyRental`, `telNum`, `email`, `createdAt`, `updatedAt`) VALUES
(1, 1, '123', '213213', '123123', '213213', '21321321', '3213', '213213', '213', 123213, 3213, 'asdasd@yahoo.com', '2017-01-22 13:20:51', '2017-01-22 13:20:51'),
(3, 8, 'test lessor', 'test lessor', 'test lessor', 'test lessor', 'test lessor', 'test lessor', 'test lessor', 'test lessor', 123213, 12321, 'test_lessor@yahoo.com', '2017-02-02 13:05:06', '2017-02-02 13:05:06'),
(4, 9, 'hehez', 'e.', 'huhuz', 'address', 'asd', 'asd', 'asd', 'asd', 2222, 2323, 'hehez@yahoo.com', '2017-02-02 16:20:03', '2017-02-02 16:20:03');

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
) ENGINE=InnoDB AUTO_INCREMENT=388 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notificationId`, `referenceNum`, `status`, `role`, `notifMessage`, `createdAt`, `updatedAt`) VALUES
(96, '9E9E1D64A2', 'Read', 3, 'Mastermind IT Solutions has been validated by Rene Manabat of BPLO. Please check your application status.', '2017-01-24 11:33:06', '2017-01-25 13:05:13'),
(97, '9E9E1D64A2', 'Read', 5, 'Incoming', '2017-01-24 11:33:17', '2017-02-02 14:32:23'),
(99, '9E9E1D64A2', 'Read', 7, 'Incoming', '2017-01-24 11:33:17', '2017-01-24 11:34:36'),
(100, '9E9E1D64A2', 'Read', 8, 'Incoming', '2017-01-24 11:33:17', '2017-02-16 11:00:48'),
(101, '9E9E1D64A2', 'Read', 9, 'Incoming', '2017-01-24 11:33:17', '2017-02-02 14:43:36'),
(102, '9E9E1D64A2', 'Read', 10, 'Incoming', '2017-01-24 11:33:17', '2017-01-24 11:33:22'),
(103, '9E9E1D64A2', 'Read', 3, 'Mastermind IT Solutions has been approved by Rene Manabat of BPLO. You can now go to other required offices to process your application.', '2017-01-24 11:33:17', '2017-01-25 13:05:13'),
(104, '9E9E1D64A2', 'Read', 3, 'Mastermind IT Solutions has been validated by tester sanitary of City Health Office. Please check application status.', '2017-01-24 11:33:26', '2017-01-25 13:05:13'),
(105, '9E9E1D64A2', 'Read', 3, 'Mastermind IT Solutions has been approved by tester sanitary of City Health Office.', '2017-01-24 11:34:14', '2017-01-25 13:05:13'),
(106, '9E9E1D64A2', 'Read', 3, 'Mastermind IT Solutions has been validated by tester cenro of City Environment and Natural Resources. Please check application status.', '2017-01-24 11:34:41', '2017-01-25 13:05:13'),
(107, '9E9E1D64A2', 'Read', 3, 'Mastermind IT Solutions has been approved by tester cenro of City Environment and Natural Resources.', '2017-01-24 11:36:15', '2017-01-25 13:05:13'),
(108, '9E9E1D64A2', 'Read', 3, 'Mastermind IT Solutions has been validated by zoning tester of Zoning Department. Please check application status.', '2017-01-24 11:36:38', '2017-01-25 13:05:13'),
(109, '9E9E1D64A2', 'Read', 4, 'Completed', '2017-01-24 11:36:47', '2017-02-16 10:49:51'),
(110, '9E9E1D64A2', 'Read', 3, 'Mastermind IT Solutions has been approved by zoning tester of Zoning Department.', '2017-01-24 11:36:47', '2017-01-28 12:06:57'),
(111, '9E9E1D64A2', 'Read', 3, ' Mastermind IT Solutions has expired, please check application details for renewal request.', '2017-01-28 12:17:00', '2017-01-28 12:23:04'),
(112, '9E9E1D64A2', 'Read', 3, 'Mastermind IT Solutions application has expired, please check application details for renewal request.', '2017-01-28 13:14:26', '2017-01-29 04:02:37'),
(113, 'E4302995BD', 'Read', 3, 'Mastermind IT Solutions application has expired, please check application details for renewal request.', '2017-01-29 09:08:52', '2017-01-29 09:48:10'),
(114, '47B3DF6BF4', 'Read', 3, 'Mastermind IT Solutions has been validated by zoning tester of Zoning Department. Please check application status.', '2017-01-30 13:52:59', '2017-01-30 14:03:56'),
(115, '47B3DF6BF4', 'Read', 3, 'Mastermind IT Solutions has been approved by zoning tester of Zoning Department.', '2017-01-30 13:54:52', '2017-01-30 14:03:56'),
(116, '4824FE5C5F', 'Read', 4, 'Incoming', '2017-02-02 13:05:07', '2017-02-02 13:43:59'),
(117, '4824FE5C5F', 'Read', 3, 'test has been validated by Rene Manabat of BPLO. Please check your application status.', '2017-02-02 13:52:07', '2017-02-02 16:00:00'),
(118, '4824FE5C5F', 'Read', 5, 'Incoming', '2017-02-02 14:05:19', '2017-02-02 14:32:23'),
(119, '4824FE5C5F', 'Read', 7, 'Incoming', '2017-02-02 14:05:19', '2017-02-08 13:11:33'),
(120, '4824FE5C5F', 'Read', 8, 'Incoming', '2017-02-02 14:05:19', '2017-02-16 11:00:48'),
(121, '4824FE5C5F', 'Read', 9, 'Incoming', '2017-02-02 14:05:19', '2017-02-02 14:43:36'),
(122, '4824FE5C5F', 'Read', 10, 'Incoming', '2017-02-02 14:05:19', '2017-02-08 13:20:16'),
(123, '4824FE5C5F', 'Read', 3, 'test has been approved by Rene Manabat of BPLO. You can now go to other required offices to process your application.', '2017-02-02 14:05:19', '2017-02-02 16:00:00'),
(124, '4824FE5C5F', 'Read', 5, 'Incoming', '2017-02-02 14:11:34', '2017-02-02 14:32:23'),
(125, '4824FE5C5F', 'Read', 7, 'Incoming', '2017-02-02 14:11:34', '2017-02-08 13:11:33'),
(126, '4824FE5C5F', 'Read', 8, 'Incoming', '2017-02-02 14:11:34', '2017-02-02 15:04:44'),
(127, '4824FE5C5F', 'Read', 9, 'Incoming', '2017-02-02 14:11:34', '2017-02-02 14:43:36'),
(128, '4824FE5C5F', 'Read', 10, 'Incoming', '2017-02-02 14:11:34', '2017-02-08 13:20:16'),
(129, '4824FE5C5F', 'Read', 3, 'test has been approved by Rene Manabat of BPLO. You can now go to other required offices to process your application.', '2017-02-02 14:11:34', '2017-02-02 16:00:00'),
(130, '4824FE5C5F', 'Read', 3, 'test has been validated by tester bfp of Bureau of Fire Protection. Please check application status.', '2017-02-02 14:34:51', '2017-02-02 16:00:00'),
(131, '4824FE5C5F', 'Read', 3, 'test has been approved by tester bfp of Bureau of Fire Protection.', '2017-02-02 14:42:24', '2017-02-02 16:00:00'),
(132, '4824FE5C5F', 'Read', 3, 'test has been validated by tester engineering from the Office of the Building Official. Please check application status.', '2017-02-02 14:49:30', '2017-02-02 16:00:00'),
(133, '4824FE5C5F', 'Read', 3, 'test has been approved by tester engineering from the Office of the Building Official.', '2017-02-02 14:52:17', '2017-02-02 16:00:00'),
(134, 'D2D2E57657', 'Read', 4, 'Incoming', '2017-02-02 16:20:03', '2017-02-08 14:06:01'),
(135, 'D2D2E57657', 'Read', 4, 'Renewal', '2017-02-07 14:17:41', '2017-02-08 13:08:07'),
(136, 'D2D2E57657', 'Read', 5, 'Renewal', '2017-02-07 14:17:41', '2017-02-08 13:15:08'),
(137, 'D2D2E57657', 'Read', 7, 'Renewal', '2017-02-07 14:17:41', '2017-02-08 13:11:33'),
(138, 'D2D2E57657', 'Read', 8, 'Renewal', '2017-02-07 14:17:41', '2017-02-08 13:13:08'),
(139, 'D2D2E57657', 'Read', 9, 'Renewal', '2017-02-07 14:17:41', '2017-02-08 13:17:36'),
(140, 'D2D2E57657', 'Read', 10, 'Renewal', '2017-02-07 14:17:41', '2017-02-08 13:20:16'),
(141, 'D2D2E57657', 'Read', 4, 'Renewal', '2017-02-07 14:33:28', '2017-02-08 13:08:07'),
(142, 'D2D2E57657', 'Read', 5, 'Renewal', '2017-02-07 14:33:28', '2017-02-08 13:15:08'),
(143, 'D2D2E57657', 'Read', 7, 'Renewal', '2017-02-07 14:33:28', '2017-02-08 13:11:33'),
(144, 'D2D2E57657', 'Read', 8, 'Renewal', '2017-02-07 14:33:29', '2017-02-08 13:13:08'),
(145, 'D2D2E57657', 'Read', 9, 'Renewal', '2017-02-07 14:33:29', '2017-02-08 13:17:36'),
(146, 'D2D2E57657', 'Read', 10, 'Renewal', '2017-02-07 14:33:29', '2017-02-08 13:20:16'),
(169, 'D2D2E57657', 'Read', 3, 'Test Business 10 has been validated by tester zoning of Zoning Department. Please check application status.', '2017-02-08 13:51:40', '2017-02-09 08:22:45'),
(170, 'D2D2E57657', 'Read', 3, 'Test Business 10 has been approved by tester zoning of Zoning Department.', '2017-02-08 13:51:50', '2017-02-09 08:22:45'),
(171, 'D2D2E57657', 'Read', 3, 'Test Business 10 has been validated by tester bfp of Bureau of Fire Protection. Please check application status.', '2017-02-08 13:52:25', '2017-02-09 08:22:45'),
(172, 'D2D2E57657', 'Read', 3, 'Test Business 10 has been approved by tester bfp of Bureau of Fire Protection.', '2017-02-08 13:52:36', '2017-02-09 08:22:45'),
(173, 'D2D2E57657', 'Read', 3, 'Test Business 10 has been validated by tester cenro of City Environment and Natural Resources. Please check application status.', '2017-02-08 13:52:56', '2017-02-09 08:22:45'),
(174, 'D2D2E57657', 'Read', 3, 'Test Business 10 has been approved by tester cenro of City Environment and Natural Resources.', '2017-02-08 13:53:05', '2017-02-09 08:22:45'),
(175, 'D2D2E57657', 'Read', 3, 'Test Business 10 has been validated by tester engineering from the Office of the Building Official. Please check application status.', '2017-02-08 13:54:05', '2017-02-09 08:22:45'),
(176, 'D2D2E57657', 'Read', 3, 'Test Business 10 has been approved by tester engineering from the Office of the Building Official.', '2017-02-08 13:54:11', '2017-02-09 08:22:45'),
(177, 'D2D2E57657', 'Read', 3, 'Test Business 10 has been validated by tester sanitary of City Health Office. Please check application status.', '2017-02-08 13:54:26', '2017-02-09 08:22:45'),
(178, 'D2D2E57657', 'Read', 4, 'Completed', '2017-02-08 13:54:33', '2017-02-08 14:06:10'),
(179, 'D2D2E57657', 'Read', 3, 'Test Business 10 has been approved by tester sanitary of City Health Office.', '2017-02-08 13:54:33', '2017-02-09 08:22:45'),
(180, '4824FE5C5F', 'Read', 3, 'test has been validated by tester bplo of BPLO. Please check your application status.', '2017-02-08 14:24:23', '2017-02-09 02:24:13'),
(181, '4824FE5C5F', 'Read', 5, 'Incoming', '2017-02-08 14:24:30', '2017-02-08 14:32:06'),
(182, '4824FE5C5F', 'Read', 7, 'Incoming', '2017-02-08 14:24:30', '2017-02-08 14:24:51'),
(183, '4824FE5C5F', 'Read', 8, 'Incoming', '2017-02-08 14:24:30', '2017-02-08 14:25:27'),
(184, '4824FE5C5F', 'Read', 9, 'Incoming', '2017-02-08 14:24:30', '2017-02-08 14:33:09'),
(185, '4824FE5C5F', 'Read', 10, 'Incoming', '2017-02-08 14:24:30', '2017-02-08 14:25:52'),
(186, '4824FE5C5F', 'Read', 3, 'test has been approved by tester bplo of BPLO. You can now go to other required offices to process your application.', '2017-02-08 14:24:30', '2017-02-09 02:24:13'),
(187, '4824FE5C5F', 'Read', 3, 'test has been validated by tester cenro of City Environment and Natural Resources. Please check application status.', '2017-02-08 14:24:54', '2017-02-09 02:24:13'),
(188, '4824FE5C5F', 'Read', 3, 'test has been approved by tester cenro of City Environment and Natural Resources.', '2017-02-08 14:25:03', '2017-02-09 02:24:13'),
(189, '4824FE5C5F', 'Read', 3, 'test has been validated by tester zoning of Zoning Department. Please check application status.', '2017-02-08 14:25:24', '2017-02-09 02:24:13'),
(191, '4824FE5C5F', 'Read', 3, 'test has been approved by tester zoning of Zoning Department.', '2017-02-08 14:25:35', '2017-02-09 02:24:13'),
(192, '4824FE5C5F', 'Read', 3, 'test has been validated by tester sanitary of City Health Office. Please check application status.', '2017-02-08 14:25:55', '2017-02-09 02:24:13'),
(193, '4824FE5C5F', 'Read', 3, 'test has been approved by tester sanitary of City Health Office.', '2017-02-08 14:26:24', '2017-02-09 02:24:13'),
(194, '4824FE5C5F', 'Read', 3, 'test has been validated by tester bfp of Bureau of Fire Protection. Please check application status.', '2017-02-08 14:32:12', '2017-02-09 02:24:13'),
(195, '4824FE5C5F', 'Read', 3, 'test has been approved by tester bfp of Bureau of Fire Protection.', '2017-02-08 14:32:20', '2017-02-09 02:24:13'),
(196, '4824FE5C5F', 'Read', 3, 'test has been validated by tester engineering from the Office of the Building Official. Please check application status.', '2017-02-08 14:33:12', '2017-02-09 02:24:13'),
(197, '4824FE5C5F', 'Read', 4, 'Completed', '2017-02-08 14:33:23', '2017-02-08 14:33:51'),
(198, '4824FE5C5F', 'Read', 3, 'test has been approved by tester engineering from the Office of the Building Official.', '2017-02-08 14:33:23', '2017-02-09 02:24:13'),
(208, 'AE9054B21A', 'Read', 4, 'Incoming', '2017-02-09 08:10:15', '2017-02-09 08:36:01'),
(209, 'AE9054B21A', 'Read', 3, 'Test 42 has been validated by tester bplo of BPLO. Please check your application status.', '2017-02-09 13:39:56', '2017-02-09 14:57:59'),
(210, 'AE9054B21A', 'Read', 5, 'Incoming', '2017-02-09 13:40:03', '2017-02-09 13:45:23'),
(211, 'AE9054B21A', 'Read', 7, 'Incoming', '2017-02-09 13:40:03', '2017-02-09 13:40:15'),
(212, 'AE9054B21A', 'Read', 8, 'Incoming', '2017-02-09 13:40:03', '2017-02-09 13:42:42'),
(213, 'AE9054B21A', 'Read', 9, 'Incoming', '2017-02-09 13:40:03', '2017-02-09 13:42:04'),
(214, 'AE9054B21A', 'Read', 10, 'Incoming', '2017-02-09 13:40:03', '2017-02-09 13:41:20'),
(215, 'AE9054B21A', 'Read', 3, 'Test 42 has been approved by tester bplo of BPLO. You can now go to other required offices to process your application.', '2017-02-09 13:40:03', '2017-02-09 14:57:59'),
(216, '156C5D49E0', 'Read', 4, 'Incoming', '2017-02-10 05:00:51', '2017-02-10 05:01:38'),
(217, '156C5D49E0', 'Read', 3, '123 has been validated by tester bplo of BPLO. Please check your application status.', '2017-02-10 05:01:27', '2017-02-10 05:01:39'),
(218, '3555F343F2', 'Read', 4, 'Incoming', '2017-02-11 07:14:34', '2017-02-11 07:16:29'),
(219, '3555F343F2', 'Read', 3, '<strong>Business ni Maam</strong> has been validated by <strong>tester bplo</strong> of <strong>BPLO</strong>. Please check your application status.', '2017-02-11 07:19:05', '2017-02-12 01:20:37'),
(220, '3555F343F2', 'Read', 5, 'Incoming', '2017-02-11 07:23:02', '2017-02-11 08:06:34'),
(221, '3555F343F2', 'Read', 7, 'Incoming', '2017-02-11 07:23:02', '2017-02-11 07:23:24'),
(222, '3555F343F2', 'Read', 8, 'Incoming', '2017-02-11 07:23:02', '2017-02-11 08:04:19'),
(223, '3555F343F2', 'Read', 9, 'Incoming', '2017-02-11 07:23:02', '2017-02-11 08:07:55'),
(224, '3555F343F2', 'Read', 10, 'Incoming', '2017-02-11 07:23:02', '2017-02-11 08:05:41'),
(225, '3555F343F2', 'Read', 3, 'Business ni Maam has been approved by tester bplo of BPLO. You can now go to other required offices to process your application.', '2017-02-11 07:23:02', '2017-02-11 07:25:00'),
(226, '3555F343F2', 'Read', 3, 'Business ni Maam has been validated by tester cenro of City Environment and Natural Resources. Please check application status.', '2017-02-11 07:24:32', '2017-02-11 07:25:00'),
(227, '3555F343F2', 'Read', 3, 'Business ni Maam has been approved by tester cenro of City Environment and Natural Resources.', '2017-02-11 07:26:31', '2017-02-12 01:17:56'),
(228, '3555F343F2', 'Read', 3, 'Business ni Maam has been validated by tester zoning of Zoning Department. Please check application status.', '2017-02-11 08:04:33', '2017-02-12 01:17:56'),
(229, '3555F343F2', 'Read', 3, 'Business ni Maam has been approved by tester zoning of Zoning Department.', '2017-02-11 08:05:07', '2017-02-12 01:17:56'),
(230, '3555F343F2', 'Read', 3, 'Business ni Maam has been validated by tester sanitary of City Health Office. Please check application status.', '2017-02-11 08:05:52', '2017-02-12 01:17:56'),
(231, '3555F343F2', 'Read', 3, 'Business ni Maam has been approved by tester sanitary of City Health Office.', '2017-02-11 08:06:11', '2017-02-12 01:17:56'),
(232, '3555F343F2', 'Read', 3, 'Business ni Maam has been validated by tester bfp of Bureau of Fire Protection. Please check application status.', '2017-02-11 08:06:44', '2017-02-12 01:17:56'),
(233, '3555F343F2', 'Read', 3, 'Business ni Maam has been approved by tester bfp of Bureau of Fire Protection.', '2017-02-11 08:06:59', '2017-02-12 01:17:56'),
(234, '3555F343F2', 'Read', 3, 'Business ni Maam has been validated by tester engineering from the Office of the Building Official. Please check application status.', '2017-02-11 08:07:32', '2017-02-12 01:17:56'),
(235, '3555F343F2', 'Read', 4, 'Completed', '2017-02-11 08:07:50', '2017-02-16 10:49:51'),
(236, '3555F343F2', 'Read', 3, '<strong>Business ni Maam</strong> has been approved by <strong>tester engineering</strong> from the <strong>Office of the Building Official</strong>.', '2017-02-11 08:07:50', '2017-02-12 01:21:58'),
(237, '3555F343F2', 'Read', 4, 'Incoming', '2017-02-11 08:15:45', '2017-02-12 13:48:34'),
(238, '3555F343F2', 'Read', 5, 'Incoming', '2017-02-11 08:15:45', '2017-02-15 00:31:26'),
(239, '3555F343F2', 'Read', 7, 'Incoming', '2017-02-11 08:15:45', '2017-02-15 00:22:51'),
(240, '3555F343F2', 'Read', 8, 'Incoming', '2017-02-11 08:15:45', '2017-02-15 00:30:44'),
(241, '3555F343F2', 'Read', 9, 'Incoming', '2017-02-11 08:15:45', '2017-02-15 00:35:26'),
(242, '3555F343F2', 'Read', 10, 'Incoming', '2017-02-11 08:15:45', '2017-02-15 00:35:51'),
(243, '3555F343F2', 'Read', 4, 'Incoming', '2017-02-12 01:27:09', '2017-02-12 13:48:34'),
(244, '3555F343F2', 'Read', 5, 'Incoming', '2017-02-12 01:27:09', '2017-02-15 00:31:26'),
(245, '3555F343F2', 'Read', 7, 'Incoming', '2017-02-12 01:27:09', '2017-02-15 00:22:51'),
(246, '3555F343F2', 'Read', 8, 'Incoming', '2017-02-12 01:27:09', '2017-02-15 00:30:44'),
(247, '3555F343F2', 'Read', 9, 'Incoming', '2017-02-12 01:27:09', '2017-02-15 00:35:26'),
(248, '3555F343F2', 'Read', 10, 'Incoming', '2017-02-12 01:27:09', '2017-02-15 00:35:51'),
(250, '06C516C22A', 'Read', 4, 'New', '2017-02-15 00:11:16', '2017-02-16 10:43:41'),
(251, '03F8AF93BA', 'Read', 4, 'New', '2017-02-15 00:17:10', '2017-02-16 10:43:41'),
(252, '03F8AF93BA', 'Read', 3, 'Test 44 has been validated by tester bplo of BPLO. Please check your application status.', '2017-02-15 00:17:42', '2017-02-15 04:33:47'),
(253, '06C516C22A', 'Read', 3, 'Test 43 has been validated by tester bplo of BPLO. Please check your application status.', '2017-02-15 00:18:12', '2017-02-15 04:33:47'),
(254, '03F8AF93BA', 'Read', 5, 'Incoming', '2017-02-15 00:18:35', '2017-02-15 00:31:26'),
(255, '03F8AF93BA', 'Read', 7, 'Incoming', '2017-02-15 00:18:35', '2017-02-15 00:22:51'),
(256, '03F8AF93BA', 'Read', 8, 'Incoming', '2017-02-15 00:18:35', '2017-02-15 00:30:44'),
(257, '03F8AF93BA', 'Read', 9, 'Incoming', '2017-02-15 00:18:35', '2017-02-15 00:35:26'),
(258, '03F8AF93BA', 'Read', 10, 'Incoming', '2017-02-15 00:18:35', '2017-02-15 00:35:51'),
(259, '03F8AF93BA', 'Read', 3, 'Test 44 has been approved by tester bplo of BPLO. You can now go to other required offices to process your application.', '2017-02-15 00:18:35', '2017-02-15 04:33:47'),
(260, '03F8AF93BA', 'Read', 3, 'Test 44 has been validated by tester cenro of City Environment and Natural Resources. Please check application status.', '2017-02-15 00:23:01', '2017-02-15 04:33:47'),
(261, '03F8AF93BA', 'Read', 3, 'Test 44 has been approved by tester cenro of City Environment and Natural Resources.', '2017-02-15 00:23:07', '2017-02-15 04:33:47'),
(262, '03F8AF93BA', 'Read', 3, 'Test 44 has been validated by tester zoning of Zoning Department. Please check application status.', '2017-02-15 00:23:22', '2017-02-15 04:33:47'),
(263, '03F8AF93BA', 'Read', 3, 'Test 44 has been approved by tester zoning of Zoning Department.', '2017-02-15 00:31:12', '2017-02-15 04:33:47'),
(264, '03F8AF93BA', 'Read', 3, 'Test 44 has been validated by tester bfp of Bureau of Fire Protection. Please check application status.', '2017-02-15 00:34:53', '2017-02-15 04:33:47'),
(265, '03F8AF93BA', 'Read', 3, 'Test 44 has been approved by tester bfp of Bureau of Fire Protection.', '2017-02-15 00:34:58', '2017-02-15 04:33:47'),
(266, '03F8AF93BA', 'Read', 3, 'Test 44 has been validated by tester engineering from the Office of the Building Official. Please check application status.', '2017-02-15 00:35:32', '2017-02-15 04:33:47'),
(267, '03F8AF93BA', 'Read', 3, 'Test 44 has been approved by tester engineering from the Office of the Building Official.', '2017-02-15 00:35:38', '2017-02-15 04:33:47'),
(268, '03F8AF93BA', 'Read', 3, 'Test 44 has been validated by tester sanitary of City Health Office. Please check application status.', '2017-02-15 00:35:55', '2017-02-15 04:33:47'),
(269, '03F8AF93BA', 'Read', 4, 'Completed', '2017-02-15 00:36:01', '2017-02-15 00:37:04'),
(270, '03F8AF93BA', 'Read', 3, 'Test 44 has been approved by tester sanitary of City Health Office.', '2017-02-15 00:36:01', '2017-02-15 04:33:47'),
(271, '156C5D49E0', 'Read', 3, '123 has been validated by tester bplo of BPLO. Please check your application status.', '2017-02-16 10:07:12', '2017-02-16 11:01:57'),
(278, 'CF3169FB79', 'Read', 4, 'New', '2017-02-16 11:38:40', '2017-02-16 11:38:59'),
(279, 'CF3169FB79', 'Read', 5, 'Incoming', '2017-02-16 11:38:40', '2017-02-16 12:49:30'),
(280, 'CF3169FB79', 'Read', 7, 'Incoming', '2017-02-16 11:38:40', '2017-02-16 12:46:43'),
(281, 'CF3169FB79', 'Read', 8, 'Incoming', '2017-02-16 11:38:40', '2017-02-16 11:48:05'),
(282, 'CF3169FB79', 'Read', 9, 'Incoming', '2017-02-16 11:38:40', '2017-02-16 12:47:22'),
(283, 'CF3169FB79', 'Read', 10, 'Incoming', '2017-02-16 11:38:40', '2017-02-16 11:50:39'),
(284, 'CF3169FB79', 'Read', 10, 'Incoming', '2017-02-16 11:38:40', '2017-02-16 11:50:39'),
(285, 'CF3169FB79', 'Read', 3, 'Test 45 has been validated by tester zoning of Zoning Department. Please check application status.', '2017-02-16 11:48:49', '2017-02-17 01:33:18'),
(286, 'CF3169FB79', 'Read', 3, 'Test 45 has been approved by tester zoning of Zoning Department.', '2017-02-16 11:50:22', '2017-02-17 01:33:18'),
(287, 'CF3169FB79', 'Read', 3, 'Test 45 has been validated by tester sanitary of City Health Office. Please check application status.', '2017-02-16 11:58:48', '2017-02-17 01:33:18'),
(288, 'AE9054B21A', 'Read', 3, 'Test 42 has been validated by tester sanitary of City Health Office. Please check application status.', '2017-02-16 11:59:35', '2017-02-17 01:33:18'),
(289, 'CF3169FB79', 'Read', 3, 'Test 45 has been validated by tester cenro of City Environment and Natural Resources. Please check application status.', '2017-02-16 12:46:49', '2017-02-17 01:33:18'),
(290, 'CF3169FB79', 'Read', 3, 'Test 45 has been approved by tester cenro of City Environment and Natural Resources.', '2017-02-16 12:46:55', '2017-02-17 01:33:18'),
(291, 'CF3169FB79', 'Read', 3, 'Test 45 has been approved by tester sanitary of City Health Office.', '2017-02-16 12:47:10', '2017-02-17 01:33:18'),
(292, 'CF3169FB79', 'Read', 3, 'Test 45 has been validated by tester engineering from the Office of the Building Official. Please check application status.', '2017-02-16 12:47:27', '2017-02-17 01:33:18'),
(293, 'CF3169FB79', 'Read', 3, 'Test 45 has been approved by tester engineering from the Office of the Building Official.', '2017-02-16 12:49:19', '2017-02-17 01:33:18'),
(294, 'CF3169FB79', 'Read', 3, 'Test 45 has been validated by tester bfp of Bureau of Fire Protection. Please check application status.', '2017-02-16 12:49:35', '2017-02-17 01:33:18'),
(295, 'CF3169FB79', 'Read', 4, 'Completed', '2017-02-16 12:49:41', '2017-02-16 12:54:35'),
(296, 'CF3169FB79', 'Read', 3, 'Test 45 has been approved by tester bfp of Bureau of Fire Protection.', '2017-02-16 12:49:41', '2017-02-17 01:33:18'),
(297, 'CF3169FB79', 'Read', 3, 'Test 45 has been approved by tester engineering from the Office of the Building Official.', '2017-02-16 13:02:16', '2017-02-17 01:33:18'),
(298, 'CF3169FB79', 'Read', 3, 'Test 45 has been approved by tester engineering from the Office of the Building Official.', '2017-02-16 13:09:28', '2017-02-17 01:33:18'),
(299, 'CF3169FB79', 'Read', 3, 'Test 45 has been approved by tester engineering from the Office of the Building Official.', '2017-02-16 13:36:28', '2017-02-17 01:33:18'),
(300, 'CF3169FB79', 'Read', 3, 'Test 45 application has expired, please check application details for renewal request.', '2017-02-16 15:12:03', '2017-02-17 01:33:18'),
(301, 'AE9054B21A', 'Read', 3, 'Test 42 has been validated by tester zoning of Zoning Department. Please check application status.', '2017-02-18 02:33:22', '2017-02-18 02:51:20'),
(302, 'AE9054B21A', 'Read', 3, 'Test 42 has been validated by tester cenro of City Environment and Natural Resources. Please check application status.', '2017-02-18 02:40:45', '2017-02-18 02:51:20'),
(303, 'AE9054B21A', 'Read', 3, 'Test 42 has been validated by tester bfp of Bureau of Fire Protection. Please check application status.', '2017-02-18 02:50:50', '2017-02-18 02:51:20'),
(304, '6A7450B003', 'Read', 3, 'Dummy Business application has expired, please check application details for renewal request.', '2017-02-19 05:03:31', '2017-02-19 05:03:50'),
(305, '6A7450B003', 'Read', 4, 'New', '2017-02-19 05:26:56', '2017-02-19 11:02:07'),
(306, '6A7450B003', 'Read', 5, 'Incoming', '2017-02-19 05:26:56', '2017-02-20 13:21:28'),
(307, '6A7450B003', 'Read', 7, 'Incoming', '2017-02-19 05:26:56', '2017-02-20 13:31:52'),
(308, '6A7450B003', 'Read', 8, 'Incoming', '2017-02-19 05:26:56', '2017-02-19 12:25:32'),
(309, '6A7450B003', 'Read', 9, 'Incoming', '2017-02-19 05:26:56', '2017-02-21 13:31:27'),
(310, '6A7450B003', 'Read', 10, 'Incoming', '2017-02-19 05:26:56', '2017-02-20 13:10:33'),
(311, '6A7450B003', 'Read', 10, 'Incoming', '2017-02-19 05:26:56', '2017-02-20 13:10:33'),
(312, '6A7450B003', 'Read', 4, 'New', '2017-02-19 05:33:01', '2017-02-19 11:02:07'),
(313, '6A7450B003', 'Read', 5, 'Incoming', '2017-02-19 05:33:01', '2017-02-20 13:21:28'),
(314, '6A7450B003', 'Read', 7, 'Incoming', '2017-02-19 05:33:01', '2017-02-20 13:31:52'),
(315, '6A7450B003', 'Read', 8, 'Incoming', '2017-02-19 05:33:01', '2017-02-19 12:25:32'),
(316, '6A7450B003', 'Read', 9, 'Incoming', '2017-02-19 05:33:01', '2017-02-21 13:31:27'),
(317, '6A7450B003', 'Read', 10, 'Incoming', '2017-02-19 05:33:01', '2017-02-20 13:10:33'),
(318, '6A7450B003', 'Read', 10, 'Incoming', '2017-02-19 05:33:01', '2017-02-20 13:10:33'),
(319, '6A7450B003', 'Read', 4, 'New', '2017-02-19 05:36:57', '2017-02-19 11:02:07'),
(320, '6A7450B003', 'Read', 5, 'Incoming', '2017-02-19 05:36:57', '2017-02-20 13:21:28'),
(321, '6A7450B003', 'Read', 7, 'Incoming', '2017-02-19 05:36:57', '2017-02-20 13:31:52'),
(322, '6A7450B003', 'Read', 8, 'Incoming', '2017-02-19 05:36:57', '2017-02-19 12:25:32'),
(323, '6A7450B003', 'Read', 9, 'Incoming', '2017-02-19 05:36:57', '2017-02-21 13:31:27'),
(324, '6A7450B003', 'Read', 10, 'Incoming', '2017-02-19 05:36:57', '2017-02-20 13:10:33'),
(325, '6A7450B003', 'Read', 10, 'Incoming', '2017-02-19 05:36:57', '2017-02-20 13:10:33'),
(326, '6A7450B003', 'Read', 4, 'New', '2017-02-19 05:40:45', '2017-02-19 11:02:07'),
(327, '6A7450B003', 'Read', 5, 'Incoming', '2017-02-19 05:40:45', '2017-02-20 13:21:28'),
(328, '6A7450B003', 'Read', 7, 'Incoming', '2017-02-19 05:40:45', '2017-02-20 13:31:52'),
(329, '6A7450B003', 'Read', 8, 'Incoming', '2017-02-19 05:40:45', '2017-02-19 12:25:32'),
(330, '6A7450B003', 'Read', 9, 'Incoming', '2017-02-19 05:40:45', '2017-02-21 13:31:27'),
(331, '6A7450B003', 'Read', 10, 'Incoming', '2017-02-19 05:40:45', '2017-02-20 13:10:33'),
(332, '6A7450B003', 'Read', 10, 'Incoming', '2017-02-19 05:40:45', '2017-02-20 13:10:33'),
(333, '6A7450B003', 'Read', 4, 'New', '2017-02-19 05:42:24', '2017-02-19 11:02:07'),
(334, '6A7450B003', 'Read', 5, 'Incoming', '2017-02-19 05:42:24', '2017-02-20 13:21:28'),
(335, '6A7450B003', 'Read', 7, 'Incoming', '2017-02-19 05:42:24', '2017-02-20 13:31:52'),
(336, '6A7450B003', 'Read', 8, 'Incoming', '2017-02-19 05:42:24', '2017-02-19 12:25:32'),
(337, '6A7450B003', 'Read', 9, 'Incoming', '2017-02-19 05:42:24', '2017-02-21 13:31:27'),
(338, '6A7450B003', 'Read', 10, 'Incoming', '2017-02-19 05:42:24', '2017-02-20 13:10:33'),
(339, '6A7450B003', 'Read', 10, 'Incoming', '2017-02-19 05:42:24', '2017-02-20 13:10:33'),
(340, '6A7450B003', 'Read', 4, 'New', '2017-02-19 06:00:57', '2017-02-19 11:02:07'),
(341, '6A7450B003', 'Read', 5, 'Incoming', '2017-02-19 06:00:57', '2017-02-20 13:21:28'),
(342, '6A7450B003', 'Read', 7, 'Incoming', '2017-02-19 06:00:57', '2017-02-20 13:31:52'),
(343, '6A7450B003', 'Read', 8, 'Incoming', '2017-02-19 06:00:57', '2017-02-19 12:25:32'),
(344, '6A7450B003', 'Read', 9, 'Incoming', '2017-02-19 06:00:57', '2017-02-21 13:31:27'),
(345, '6A7450B003', 'Read', 10, 'Incoming', '2017-02-19 06:00:57', '2017-02-20 13:10:33'),
(346, '6A7450B003', 'Read', 10, 'Incoming', '2017-02-19 06:00:57', '2017-02-20 13:10:33'),
(347, 'D2D2E57657', 'Unread', 4, 'Incoming', '2017-02-19 07:45:40', '2017-02-19 07:45:40'),
(348, 'D2D2E57657', 'Read', 5, 'Incoming', '2017-02-19 07:45:40', '2017-02-20 13:21:28'),
(349, 'D2D2E57657', 'Read', 7, 'Incoming', '2017-02-19 07:45:40', '2017-02-20 13:31:52'),
(350, 'D2D2E57657', 'Read', 8, 'Incoming', '2017-02-19 07:45:40', '2017-02-19 12:25:32'),
(351, 'D2D2E57657', 'Read', 9, 'Incoming', '2017-02-19 07:45:40', '2017-02-21 13:31:27'),
(352, 'D2D2E57657', 'Read', 10, 'Incoming', '2017-02-19 07:45:40', '2017-02-20 13:10:33'),
(353, 'D2D2E57657', 'Unread', 4, 'Incoming', '2017-02-19 10:56:42', '2017-02-19 10:56:42'),
(354, 'D2D2E57657', 'Read', 5, 'Incoming', '2017-02-19 10:56:43', '2017-02-20 13:21:28'),
(355, 'D2D2E57657', 'Read', 7, 'Incoming', '2017-02-19 10:56:43', '2017-02-20 13:31:52'),
(356, 'D2D2E57657', 'Read', 8, 'Incoming', '2017-02-19 10:56:43', '2017-02-19 12:25:32'),
(357, 'D2D2E57657', 'Read', 9, 'Incoming', '2017-02-19 10:56:43', '2017-02-21 13:31:27'),
(358, 'D2D2E57657', 'Read', 10, 'Incoming', '2017-02-19 10:56:43', '2017-02-20 13:10:33'),
(359, 'D2D2E57657', 'Unread', 4, 'Incoming', '2017-02-19 11:08:08', '2017-02-19 11:08:08'),
(360, 'D2D2E57657', 'Read', 5, 'Incoming', '2017-02-19 11:08:08', '2017-02-20 13:21:28'),
(361, 'D2D2E57657', 'Read', 7, 'Incoming', '2017-02-19 11:08:08', '2017-02-20 13:31:52'),
(362, 'D2D2E57657', 'Read', 8, 'Incoming', '2017-02-19 11:08:08', '2017-02-19 12:25:32'),
(363, 'D2D2E57657', 'Read', 9, 'Incoming', '2017-02-19 11:08:08', '2017-02-21 13:31:27'),
(364, 'D2D2E57657', 'Read', 10, 'Incoming', '2017-02-19 11:08:08', '2017-02-20 13:10:33'),
(365, 'D2D2E57657', 'Unread', 4, 'Retirement', '2017-02-21 05:14:17', '2017-02-21 05:14:17'),
(366, 'D2D2E57657', 'Unread', 4, 'Retirement', '2017-02-21 05:19:37', '2017-02-21 05:19:37'),
(367, '4824FE5C5F', 'Unread', 4, 'Retirement', '2017-02-21 06:53:34', '2017-02-21 06:53:34'),
(368, '4824FE5C5F', 'Read', 3, 'Retirement approved. You may now proceed to the treasury for payment and then claim your certificate at Business Permit and Licensing Office. Thank you.', '2017-02-21 08:23:41', '2017-02-21 08:24:12'),
(369, 'AE9054B21A', 'Read', 3, 'Test 42 has been approved by tester zoning of Zoning Department.', '2017-02-21 13:04:35', '2017-02-21 13:24:57'),
(370, '3555F343F2', 'Unread', 3, 'Business ni Maam has been validated by tester zoning of Zoning Department. Please check application status.', '2017-02-21 13:04:45', '2017-02-21 13:04:45'),
(371, '3555F343F2', 'Unread', 3, 'Business ni Maam has been approved by tester zoning of Zoning Department.', '2017-02-21 13:06:09', '2017-02-21 13:06:09'),
(372, '156C5D49E0', 'Read', 3, '123 has been validated by tester zoning of Zoning Department. Please check application status.', '2017-02-21 13:06:17', '2017-02-21 13:24:57'),
(373, '156C5D49E0', 'Read', 3, '123 has been approved by tester zoning of Zoning Department.', '2017-02-21 13:06:20', '2017-02-21 13:24:57'),
(374, '06C516C22A', 'Read', 3, 'Test 43 has been validated by tester zoning of Zoning Department. Please check application status.', '2017-02-21 13:06:26', '2017-02-21 13:24:57'),
(375, '06C516C22A', 'Read', 3, 'Test 43 has been approved by tester zoning of Zoning Department.', '2017-02-21 13:09:26', '2017-02-21 13:24:57'),
(376, 'D2D2E57657', 'Read', 3, 'Test Business 10 has been validated by tester zoning of Zoning Department. Please check application status.', '2017-02-21 13:09:45', '2017-02-21 13:24:57'),
(377, '6A7450B003', 'Read', 3, 'Dummy Business has been validated by tester zoning of Zoning Department. Please check application status.', '2017-02-21 13:16:19', '2017-02-21 13:24:57'),
(378, 'AE9054B21A', 'Read', 3, 'Test 42 has been approved by tester bfp of Bureau of Fire Protection.', '2017-02-21 13:20:52', '2017-02-21 13:24:57'),
(379, 'D2D2E57657', 'Read', 3, 'Test Business 10 has been validated by tester bfp of Bureau of Fire Protection. Please check application status.', '2017-02-21 13:23:19', '2017-02-21 13:24:57'),
(380, 'D2D2E57657', 'Read', 3, 'Test Business 10 has been approved by tester bfp of Bureau of Fire Protection.', '2017-02-21 13:23:29', '2017-02-21 13:24:57'),
(381, 'AE9054B21A', 'Read', 3, 'Test 42 has been approved by tester cenro of City Environment and Natural Resources.', '2017-02-21 13:28:11', '2017-02-21 13:32:21'),
(382, '06C516C22A', 'Read', 3, 'Test 43 has been validated by tester sanitary of City Health Office. Please check application status.', '2017-02-21 13:29:04', '2017-02-21 13:32:21'),
(383, '06C516C22A', 'Read', 3, 'Test 43 has been approved by tester sanitary of City Health Office.', '2017-02-21 13:30:57', '2017-02-21 13:32:21'),
(384, 'AE9054B21A', 'Unread', 4, 'Completed', '2017-02-21 13:31:10', '2017-02-21 13:31:10'),
(385, 'AE9054B21A', 'Read', 3, 'Test 42 has been approved by tester sanitary of City Health Office.', '2017-02-21 13:31:10', '2017-02-21 13:32:21'),
(386, 'D2D2E57657', 'Read', 3, 'Test Business 10 has been validated by tester engineering from the Office of the Building Official. Please check application status.', '2017-02-21 13:31:34', '2017-02-21 13:32:21'),
(387, 'D2D2E57657', 'Read', 3, 'Test Business 10 has been approved by tester engineering from the Office of the Building Official.', '2017-02-21 13:31:49', '2017-02-21 13:32:21');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`ownerId`, `userId`, `firstName`, `middleName`, `lastName`, `suffix`, `gender`, `houseBldgNo`, `bldgName`, `unitNum`, `street`, `barangay`, `subdivision`, `cityMunicipality`, `province`, `PIN`, `contactNum`, `telNum`, `email`, `createdAt`, `updatedAt`) VALUES
(1, 1, 'Renjo', 'Enriquez', 'Dolosa', '', 'Male', 'Blk 29 Lot 19', 'N/A', 'N/A', 'Dumaguete Street owner', 'Santo Tomas owner', 'South City Homes owner', 'Biñan City owner', 'Laguna owner', '1212', '09175138266', '8393969', 'dolosa.renjo@yahoo.com', '2017-01-21 15:07:36', '2017-02-01 15:08:22'),
(3, 18, 'Jason', 'Tadeo', 'Hernandez', '', 'Male', 'q', 'w', 'e', 'r', 's', 'a', 'd', 'f', '1212', '123123', '123123', 'hernandez.jason@yahoo.com', '2017-01-30 15:34:47', '2017-02-01 15:08:25'),
(5, 1, 'dummyedit', 'dummyedit', 'dummyedit', 'dummyedit', 'Male', 'dummyedit', 'dummyedit', 'dummyedit', 'dummyedit', 'dummyedit', 'dummyedit', 'dummyedit', 'dummyedit', '4024', '123', '123', 'dummyedit@yahoo.com', '2017-02-02 11:52:50', '2017-02-19 12:02:11'),
(6, 1, 'Owner 3', 'Owner 3', 'Owner 3', 'Owner 3', 'Female', 'Owner 3', 'Owner 3', 'Owner 3', 'Owner 3', 'Owner 3', 'Owner 3', 'Owner 3', 'Owner 3', '12312', '12321', '123123', 'asd@yahoo.com', '2017-02-02 11:57:23', '2017-02-08 14:35:48'),
(7, 21, 'Rhea', 'Nayang', 'Tortor', '', 'Female', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '12312', '123', '123', 'rhea@yahoo.com', '2017-02-11 06:58:25', '2017-02-11 08:22:12'),
(8, 1, 'Owner', 'Tester', 'Tester', '', 'Male', 'owner dummy', 'owner dummy', 'owner dummy', 'owner dummy', 'owner dummy', 'owner dummy', 'owner dummy', 'owner dummy', '4024', '1234', '1234', 'ownerdummy@yahoo.com', '2017-02-19 00:13:02', '2017-02-19 00:13:02');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `transactionId` int(10) NOT NULL,
  `referenceNum` varchar(10) NOT NULL,
  `orNumber` varchar(30) NOT NULL,
  `amountPaid` double DEFAULT NULL,
  `quarterPaid` varchar(60) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`transactionId`, `referenceNum`, `orNumber`, `amountPaid`, `quarterPaid`, `createdAt`, `updatedAt`) VALUES
(3, '03F8AF93BA', 'ASD584AD', 500, 'First Quarter', '2017-02-15 03:31:06', '2017-02-15 03:31:06'),
(4, '03F8AF93BA', 'ASD584AD', 500, 'First Quarter', '2017-02-15 03:31:35', '2017-02-15 03:31:35'),
(5, 'CF3169FB79', '12345', 36450, 'Fourth Quarter', '2017-02-16 15:37:13', '2017-02-16 15:37:13');

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
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reference_numbers`
--

INSERT INTO `reference_numbers` (`referenceId`, `userId`, `referenceNum`, `createdAt`, `updatedAt`) VALUES
(1, 1, 'E4302995BD', '2017-01-22 13:20:51', '2017-01-22 13:20:51'),
(5, 1, '9E9E1D64A2', '2017-01-23 12:43:22', '2017-01-23 12:43:22'),
(6, 1, '47B3DF6BF4', '2017-01-23 12:47:51', '2017-01-23 12:47:51'),
(8, 1, '4824FE5C5F', '2017-02-02 13:05:06', '2017-02-02 13:05:06'),
(9, 1, 'D2D2E57657', '2017-02-02 16:20:03', '2017-02-02 16:20:03'),
(19, 1, 'AE9054B21A', '2017-02-09 08:10:14', '2017-02-09 08:10:14'),
(20, 1, '156C5D49E0', '2017-02-10 05:00:50', '2017-02-10 05:00:50'),
(21, 21, '3555F343F2', '2017-02-11 07:14:33', '2017-02-11 07:14:33'),
(22, 1, '7D5CB94057', '2017-02-12 03:03:35', '2017-02-12 03:03:35'),
(23, 1, '7AE2B1609F', '2017-02-12 03:04:26', '2017-02-12 03:04:26'),
(24, 1, '3C98473348', '2017-02-12 03:05:26', '2017-02-12 03:05:26'),
(25, 1, 'FAEC90BF55', '2017-02-12 03:07:57', '2017-02-12 03:07:57'),
(26, 1, 'C7FE93B5CD', '2017-02-12 03:15:46', '2017-02-12 03:15:46'),
(27, 1, '4C2973DBFC', '2017-02-12 03:17:15', '2017-02-12 03:17:15'),
(28, 1, 'A84DAC07D1', '2017-02-12 03:18:32', '2017-02-12 03:18:32'),
(29, 1, '82A034C33F', '2017-02-12 03:18:46', '2017-02-12 03:18:46'),
(31, 1, '06C516C22A', '2017-02-12 03:29:17', '2017-02-12 03:29:17'),
(33, 1, '03F8AF93BA', '2017-02-15 00:17:10', '2017-02-15 00:17:10'),
(36, 1, 'CF3169FB79', '2017-02-16 11:38:39', '2017-02-16 11:38:39'),
(37, 1, '6A7450B003', '2017-02-19 00:21:16', '2017-02-19 00:21:16'),
(38, 1, '16AB03C9D9', '2017-02-19 10:10:48', '2017-02-19 10:10:48');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `renewals`
--

INSERT INTO `renewals` (`renewalId`, `referenceNum`, `year`, `createdAt`, `updatedAt`) VALUES
(1, 'D2D2E57657', 2017, '2017-02-07 14:17:41', '2017-02-07 14:17:41'),
(3, '3555F343F2', 2017, '2017-02-12 01:27:09', '2017-02-12 01:27:09'),
(4, 'D2D2E57657', 2017, '2017-02-19 07:45:40', '2017-02-19 07:45:40'),
(5, 'D2D2E57657', 2017, '2017-02-19 10:56:43', '2017-02-19 10:56:43'),
(6, 'D2D2E57657', 2017, '2017-02-19 11:08:08', '2017-02-19 11:08:08');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retirements`
--

INSERT INTO `retirements` (`retirementId`, `referenceNum`, `reason`, `status`, `createdAt`, `updatedAt`) VALUES
(7, 'D2D2E57657', 'Test Retire 2', 'For approval', '2017-02-21 05:19:37', '2017-02-21 05:19:37'),
(8, '4824FE5C5F', 'Test Retirement for New Application', 'Approved', '2017-02-21 06:53:34', '2017-02-21 08:23:41');

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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submitted_requirements`
--

INSERT INTO `submitted_requirements` (`submittedRequirementsId`, `referenceNum`, `requirementId`, `createdAt`, `updatedAt`) VALUES
(1, '9E9E1D64A2', 1, '2017-02-18 13:12:06', '2017-02-18 13:12:06'),
(2, '9E9E1D64A2', 2, '2017-02-18 13:12:06', '2017-02-18 13:12:06'),
(3, '9E9E1D64A2', 3, '2017-02-18 13:12:06', '2017-02-18 13:12:06'),
(4, '9E9E1D64A2', 4, '2017-02-18 13:12:06', '2017-02-18 13:12:06'),
(5, '9E9E1D64A2', 5, '2017-02-18 13:12:06', '2017-02-18 13:12:06'),
(6, '9E9E1D64A2', 6, '2017-02-18 13:12:06', '2017-02-18 13:12:06'),
(7, '9E9E1D64A2', 7, '2017-02-18 13:12:07', '2017-02-18 13:12:07'),
(8, 'AE9054B21A', 20, '2017-02-21 13:20:51', '2017-02-21 13:20:51'),
(9, 'AE9054B21A', 21, '2017-02-21 13:20:51', '2017-02-21 13:20:51'),
(10, 'AE9054B21A', 22, '2017-02-21 13:20:51', '2017-02-21 13:20:51'),
(11, 'AE9054B21A', 23, '2017-02-21 13:20:52', '2017-02-21 13:20:52'),
(12, 'AE9054B21A', 24, '2017-02-21 13:20:52', '2017-02-21 13:20:52'),
(13, 'AE9054B21A', 25, '2017-02-21 13:20:52', '2017-02-21 13:20:52'),
(14, 'AE9054B21A', 26, '2017-02-21 13:20:52', '2017-02-21 13:20:52'),
(15, 'AE9054B21A', 27, '2017-02-21 13:20:52', '2017-02-21 13:20:52'),
(16, 'D2D2E57657', 20, '2017-02-21 13:23:29', '2017-02-21 13:23:29'),
(17, 'D2D2E57657', 21, '2017-02-21 13:23:29', '2017-02-21 13:23:29'),
(18, 'D2D2E57657', 22, '2017-02-21 13:23:29', '2017-02-21 13:23:29'),
(19, 'D2D2E57657', 23, '2017-02-21 13:23:29', '2017-02-21 13:23:29'),
(20, 'D2D2E57657', 24, '2017-02-21 13:23:29', '2017-02-21 13:23:29'),
(21, 'D2D2E57657', 25, '2017-02-21 13:23:29', '2017-02-21 13:23:29'),
(22, 'D2D2E57657', 26, '2017-02-21 13:23:29', '2017-02-21 13:23:29'),
(23, 'D2D2E57657', 27, '2017-02-21 13:23:29', '2017-02-21 13:23:29'),
(24, 'AE9054B21A', 12, '2017-02-21 13:28:11', '2017-02-21 13:28:11'),
(25, 'AE9054B21A', 13, '2017-02-21 13:28:11', '2017-02-21 13:28:11'),
(26, 'AE9054B21A', 14, '2017-02-21 13:28:11', '2017-02-21 13:28:11'),
(27, 'AE9054B21A', 15, '2017-02-21 13:28:11', '2017-02-21 13:28:11'),
(28, 'AE9054B21A', 16, '2017-02-21 13:28:11', '2017-02-21 13:28:11'),
(29, '06C516C22A', 17, '2017-02-21 13:30:57', '2017-02-21 13:30:57'),
(30, '06C516C22A', 18, '2017-02-21 13:30:57', '2017-02-21 13:30:57'),
(31, '06C516C22A', 19, '2017-02-21 13:30:57', '2017-02-21 13:30:57'),
(32, 'AE9054B21A', 17, '2017-02-21 13:31:09', '2017-02-21 13:31:09'),
(33, 'AE9054B21A', 18, '2017-02-21 13:31:10', '2017-02-21 13:31:10'),
(34, 'AE9054B21A', 19, '2017-02-21 13:31:10', '2017-02-21 13:31:10');

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
  ADD KEY `referenceNum` (`referenceNum`);

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
  MODIFY `applicationId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `application_bplo`
--
ALTER TABLE `application_bplo`
  MODIFY `applicationId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `application_cenro`
--
ALTER TABLE `application_cenro`
  MODIFY `applicationId` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `application_engineering`
--
ALTER TABLE `application_engineering`
  MODIFY `applicationId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `application_sanitary`
--
ALTER TABLE `application_sanitary`
  MODIFY `applicationId` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `application_zoning`
--
ALTER TABLE `application_zoning`
  MODIFY `applicationId` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `approvals`
--
ALTER TABLE `approvals`
  MODIFY `approvalId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=184;
--
-- AUTO_INCREMENT for table `archived_applications`
--
ALTER TABLE `archived_applications`
  MODIFY `archiveId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `archived_business_activities`
--
ALTER TABLE `archived_business_activities`
  MODIFY `archiveId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `archived_lessors`
--
ALTER TABLE `archived_lessors`
  MODIFY `archiveId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `assessments`
--
ALTER TABLE `assessments`
  MODIFY `assessmentId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `businessId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `business_activities`
--
ALTER TABLE `business_activities`
  MODIFY `activityId` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `charges`
--
ALTER TABLE `charges`
  MODIFY `chargeId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=288;
--
-- AUTO_INCREMENT for table `grosses`
--
ALTER TABLE `grosses`
  MODIFY `grossId` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `issued_applications`
--
ALTER TABLE `issued_applications`
  MODIFY `issueId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `lessors`
--
ALTER TABLE `lessors`
  MODIFY `lessorId` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notificationId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=388;
--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `ownerId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `transactionId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reference_numbers`
--
ALTER TABLE `reference_numbers`
  MODIFY `referenceId` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `renewals`
--
ALTER TABLE `renewals`
  MODIFY `renewalId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `requirementId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `retirements`
--
ALTER TABLE `retirements`
  MODIFY `retirementId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleId` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `submitted_requirements`
--
ALTER TABLE `submitted_requirements`
  MODIFY `submittedRequirementsId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
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
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`referenceNum`) REFERENCES `assessments` (`referenceNum`) ON DELETE CASCADE ON UPDATE CASCADE;

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
