-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2025 at 12:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `hostelId` int(64) NOT NULL,
  `ownerEmail` varchar(64) NOT NULL,
  `hostelName` varchar(64) NOT NULL,
  `scale` varchar(24) NOT NULL,
  `address` varchar(128) NOT NULL,
  `gMapLink` text NOT NULL,
  `roomCount` int(24) NOT NULL,
  `studentsPerRoom` int(24) NOT NULL,
  `description` text NOT NULL,
  `mainImagePath` text NOT NULL,
  `cardImagePath1` text NOT NULL,
  `cardImagePath2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`hostelId`, `ownerEmail`, `hostelName`, `scale`, `address`, `gMapLink`, `roomCount`, `studentsPerRoom`, `description`, `mainImagePath`, `cardImagePath1`, `cardImagePath2`) VALUES
(27, 'kasunkarunanayaka239@gmail.com', 'induwara', 'Medium', 'No:50,  Galagoda Aththa Road,', 'https://maps.app.goo.gl/MqR1MQiSbzssfevm6', 5, 2, 'how are you', '1737524619935.jpeg', 'contact.png', 'modern-minimalist-office-black-white.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `ownerId` int(64) NOT NULL,
  `ownerName` varchar(128) NOT NULL,
  `ownerEmail` varchar(128) NOT NULL,
  `hostelAddress` varchar(128) NOT NULL,
  `contactNumber` int(16) NOT NULL,
  `ownerPassword` varchar(256) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`ownerId`, `ownerName`, `ownerEmail`, `hostelAddress`, `contactNumber`, `ownerPassword`, `description`) VALUES
(10, 'kasun', 'kasunkarunanayaka239@gmail.com', 'galle', 912290711, '123456', 'how are you');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentId` int(64) NOT NULL,
  `studentFirstName` varchar(128) NOT NULL,
  `studentLastName` varchar(64) NOT NULL,
  `studentEmail` varchar(128) NOT NULL,
  `contactNumber` varchar(24) NOT NULL,
  `studentPassword` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentId`, `studentFirstName`, `studentLastName`, `studentEmail`, `contactNumber`, `studentPassword`) VALUES
(7, 'kasun', 'geesara', 'fightshadow38@gmail.com', '1234567898', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
  ADD PRIMARY KEY (`hostelId`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`ownerId`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `hostelId` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `ownerId` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `studentId` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
