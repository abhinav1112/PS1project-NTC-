-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2017 at 12:32 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appraisal`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `Name` varchar(50) NOT NULL,
  `ID` int(5) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `PayScale` varchar(17) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `PlaceOfPosting` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `DOJ` date NOT NULL,
  `DOR` date NOT NULL,
  `DOF` date NOT NULL,
  `PPH_f1` date DEFAULT NULL,
  `PPH_f2` date DEFAULT NULL,
  `PPH_f3` date DEFAULT NULL,
  `PPH_f4` date DEFAULT NULL,
  `PPH_t1` date DEFAULT NULL,
  `PPH_t2` date DEFAULT NULL,
  `PPH_t3` date DEFAULT NULL,
  `PPH_t4` date DEFAULT NULL,
  `PPH_loc1` varchar(30) DEFAULT NULL,
  `PPH_loc2` varchar(30) DEFAULT NULL,
  `PPH_loc3` varchar(30) DEFAULT NULL,
  `PPH_loc4` varchar(30) DEFAULT NULL,
  `PPH_pos1` varchar(30) DEFAULT NULL,
  `PPH_pos2` varchar(30) DEFAULT NULL,
  `PPH_pos3` varchar(30) DEFAULT NULL,
  `PPH_pos4` varchar(30) DEFAULT NULL,
  `PPH_res1` varchar(30) DEFAULT NULL,
  `PPH_res2` varchar(30) DEFAULT NULL,
  `PPH_res3` varchar(30) DEFAULT NULL,
  `PPH_res4` varchar(30) DEFAULT NULL,
  `MYR_kpa1` varchar(30) DEFAULT NULL,
  `MYR_kpa2` varchar(30) DEFAULT NULL,
  `MYR_kpa3` varchar(30) DEFAULT NULL,
  `MYR_kpa4` varchar(30) DEFAULT NULL,
  `MYR_kpa5` varchar(30) DEFAULT NULL,
  `MYR_kpa6` varchar(30) DEFAULT NULL,
  `MYR_ind1` varchar(50) DEFAULT NULL,
  `MYR_ind2` varchar(50) DEFAULT NULL,
  `MYR_ind3` varchar(50) DEFAULT NULL,
  `MYR_ind4` varchar(50) DEFAULT NULL,
  `MYR_ind5` varchar(50) DEFAULT NULL,
  `MYR_ind6` varchar(50) DEFAULT NULL,
  `MYR_mm1` int(2) DEFAULT NULL,
  `MYR_mm2` int(2) DEFAULT NULL,
  `MYR_mm3` int(2) DEFAULT NULL,
  `MYR_mm4` int(2) DEFAULT NULL,
  `MYR_mm5` int(2) DEFAULT NULL,
  `MYR_mm6` int(2) DEFAULT NULL,
  `MYR_ach1` int(2) DEFAULT NULL,
  `MYR_ach2` int(2) DEFAULT NULL,
  `MYR_ach3` int(2) DEFAULT NULL,
  `MYR_ach4` int(2) DEFAULT NULL,
  `MYR_ach5` int(2) DEFAULT NULL,
  `MYR_ach6` int(2) DEFAULT NULL,
  `MYR_rev1` int(2) DEFAULT NULL,
  `MYR_rev2` int(2) DEFAULT NULL,
  `MYR_rev3` int(2) DEFAULT NULL,
  `MYR_rev4` int(2) DEFAULT NULL,
  `MYR_rev5` int(2) DEFAULT NULL,
  `MYR_rev6` int(2) DEFAULT NULL,
  `YER_kpa1` varchar(30) DEFAULT NULL,
  `YER_kpa2` varchar(30) DEFAULT NULL,
  `YER_kpa3` varchar(30) DEFAULT NULL,
  `YER_kpa4` varchar(30) DEFAULT NULL,
  `YER_kpa5` varchar(30) DEFAULT NULL,
  `YER_kpa6` varchar(30) DEFAULT NULL,
  `YER_ind1` varchar(50) DEFAULT NULL,
  `YER_ind2` varchar(50) DEFAULT NULL,
  `YER_ind3` varchar(50) DEFAULT NULL,
  `YER_ind4` varchar(50) DEFAULT NULL,
  `YER_ind5` varchar(50) DEFAULT NULL,
  `YER_ind6` varchar(50) DEFAULT NULL,
  `YER_mm1` int(2) DEFAULT NULL,
  `YER_mm2` int(2) DEFAULT NULL,
  `YER_mm3` int(2) DEFAULT NULL,
  `YER_mm4` int(2) DEFAULT NULL,
  `YER_mm5` int(2) DEFAULT NULL,
  `YER_mm6` int(2) DEFAULT NULL,
  `YER_ach1` int(2) DEFAULT NULL,
  `YER_ach2` int(2) DEFAULT NULL,
  `YER_ach3` int(2) DEFAULT NULL,
  `YER_ach4` int(2) DEFAULT NULL,
  `YER_ach5` int(2) DEFAULT NULL,
  `YER_ach6` int(2) DEFAULT NULL,
  `YER_rev1` int(2) DEFAULT NULL,
  `YER_rev2` int(2) DEFAULT NULL,
  `YER_rev3` int(2) DEFAULT NULL,
  `YER_rev4` int(2) DEFAULT NULL,
  `YER_rev5` int(2) DEFAULT NULL,
  `YER_rev6` int(2) DEFAULT NULL,
  `YER_ma1` int(2) DEFAULT NULL,
  `YER_ma2` int(2) DEFAULT NULL,
  `YER_ma3` int(2) DEFAULT NULL,
  `YER_ma4` int(2) DEFAULT NULL,
  `YER_ma5` int(2) DEFAULT NULL,
  `YER_ma6` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID` int(6) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `DOJ` date NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `PlaceOfPosting` varchar(10) NOT NULL,
  `PayScale` varchar(17) NOT NULL,
  `BasicPay` int(12) NOT NULL,
  `GradePay` int(12) NOT NULL,
  `InitiatingOfficer` int(1) NOT NULL DEFAULT '0',
  `ReviewingOfficer` int(1) NOT NULL DEFAULT '0',
  `AcceptingOfficer` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `Name`, `Password`, `DOB`, `DOJ`, `Qualification`, `Department`, `Designation`, `PlaceOfPosting`, `PayScale`, `BasicPay`, `GradePay`, `InitiatingOfficer`, `ReviewingOfficer`, `AcceptingOfficer`) VALUES
(1, 'wqe', '33e9505d12942e8259a3', '2017-12-31', '2017-01-01', 'nb', 'IT', 'oui', 'Coimbatore', '51,300-73,000', 98, 67, 0, 0, 0),
(2, 'Tanuj', '042dc4512fa3d391c517', '2017-12-31', '2017-01-31', 'gh', 'HR', 'lk', 'Mumbai', '9,000-22,000', 9, 98, 0, 0, 0),
(3, 'Sahil', '78dc0cd3e7ef475d2c3e', '2017-12-31', '2017-01-01', 'yt', 'HR', 'ghc', 'Delhi', '62,200-80,000', 67, 86, 0, 0, 0),
(4, 'ytuy', '8efd86fb78a56a5145ed', '2017-01-01', '2017-12-31', 'iu', 'IT', 'tfr', 'Delhi', '32,900-58,000', 56, 43, 0, 0, 0),
(5, 'ytuy', '8efd86fb78a56a5145ed', '2017-01-01', '2017-12-31', 'iu', 'IT', 'tfr', 'Delhi', '32,900-58,000', 56, 43, 0, 0, 0),
(6, 'Abhinav', '056eafe7cf52220de2df', '1996-12-11', '2017-12-31', 'mnb', 'HR', 'kj', 'Delhi', '24,900-50,500', 45, 76, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
