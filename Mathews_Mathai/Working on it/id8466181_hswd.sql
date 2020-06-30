-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2019 at 10:11 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id8466181_hswd`
--

-- --------------------------------------------------------

--
-- Table structure for table `drivea`
--

CREATE TABLE `drivea` (
  `user` varchar(200) NOT NULL,
  `online` int(2) DEFAULT NULL,
  `Time` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drivea`
--

INSERT INTO `drivea` (`user`, `online`, `Time`) VALUES
('allu@gmail.com', 1, NULL),
('mathewsmathai1@gmail.com', 1, NULL),
('meme@gmail.com', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `drive_details`
--

CREATE TABLE `drive_details` (
  `DriveN` text COLLATE utf8_unicode_ci NOT NULL,
  `DriveId` bigint(200) NOT NULL,
  `Admin` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `SL` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drive_details`
--

INSERT INTO `drive_details` (`DriveN`, `DriveId`, `Admin`, `SL`) VALUES
('Docs', 1, '', 'yes'),
('pops', 2, '', 'no'),
('Alexa', 3, '', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `onlineusers`
--

CREATE TABLE `onlineusers` (
  `email` varchar(200) NOT NULL,
  `online` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onlineusers`
--

INSERT INTO `onlineusers` (`email`, `online`) VALUES
('keke@gmail.com', '2019-01-19 18:30:00'),
('meme@gmail.com', '2019-01-20 09:34:32'),
('sis@gmail.com', '2019-01-19 18:30:00'),
('ss@gmail.com', '2019-01-19 18:30:00'),
('susu@gmail.com', '2019-01-19 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `Id` int(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `hash` varchar(10000) NOT NULL,
  `verify` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`Id`, `email`, `pass`, `hash`, `verify`) VALUES
(1, 'meme@gmail.com', 'meme', '', 0),
(2, 'alexajose@ymmmail.com', 'alexa', 'ca8ef5d10000c59b33883b68f591b23c', 0),
(3, '', '', 'ca8ef5d10000c59b33883b68f591b23c', 0),
(6, 'mathewsmathai1@gmail.com', 'mat', 'ca8ef5d10000c59b33883b68f591b23c', 1),
(7, 'allu@gmail.com', 'allu', 'e6a421ccee49d370b80e81080849c1b1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drivea`
--
ALTER TABLE `drivea`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `drive_details`
--
ALTER TABLE `drive_details`
  ADD PRIMARY KEY (`DriveId`);

--
-- Indexes for table `onlineusers`
--
ALTER TABLE `onlineusers`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drive_details`
--
ALTER TABLE `drive_details`
  MODIFY `DriveId` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
