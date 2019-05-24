-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2019 at 12:26 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healersdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `counsellors`
--

CREATE TABLE `counsellors` (
  `ID` int(255) NOT NULL,
  `CounsellorID` varchar(255) NOT NULL,
  `Name` varchar(1000) DEFAULT NULL,
  `Image` varchar(255) DEFAULT '\\tutorials\\image\\default.PNG',
  `Faculty` varchar(255) DEFAULT NULL,
  `Department` varchar(255) DEFAULT NULL,
  `Email_Address` varchar(255) DEFAULT NULL,
  `ContactNumber` int(10) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counsellors`
--

INSERT INTO `counsellors` (`ID`, `CounsellorID`, `Name`, `Image`, `Faculty`, `Department`, `Email_Address`, `ContactNumber`, `Password`) VALUES
(1, '1000', 'DR. CHANDRASEKARA D.P.', '\\tutorials\\image\\default.PNG', 'Faculty of Architecture', 'Department of Architecture', 'dpcha@uom.lk', 1111111111, '199784'),
(2, '1001', 'DR. (MS.) SHANTHA EGODAGE', '\\tutorials\\image\\default.PNG', 'Faculty of Architecture', 'Department of Architecture', 'shantha@gmail.com', 1234567891, '199784');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counsellors`
--
ALTER TABLE `counsellors`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counsellors`
--
ALTER TABLE `counsellors`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
