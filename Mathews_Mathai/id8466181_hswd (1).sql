-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2019 at 07:53 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

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
-- Table structure for table `drive_details`
--

CREATE TABLE `drive_details` (
  `DriveN` text NOT NULL,
  `DriveId` bigint(200) NOT NULL,
  `SL` text,
  `Admin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drive_details`
--

INSERT INTO `drive_details` (`DriveN`, `DriveId`, `SL`, `Admin`) VALUES
('Tejas', 1, '', ''),
('Gunjan', 2, 'yes', ''),
('Shanks', 6, 'no', ''),
('Php', 7, 'yes', ''),
('Php', 8, 'yes', ''),
('Ayush', 9, 'yes', '');

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
(8, 'abc@gmail.com', 'abc', 'ca8ef5d10000c59b33883b68f591b23c', 1),
(9, 'abc3@gmail.com', 'abc3', '13efc6b6c008080e2ed3c78e652889e9', 1),
(14, 'coxedipezi@jo-mail.com', 'hey', 'b7a4d4bbadedc5e30bd4d410e74a09cb', 1),
(15, 'allwyncool80@gmail.com', '123456789', '177ff31db9b8f78de4cb5a88a40a6be1', 1),
(20, 'mathewsmathai1@gmail.com', 'abc', 'ca8ef5d10000c59b33883b68f591b23c', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drive_details`
--
ALTER TABLE `drive_details`
  ADD PRIMARY KEY (`DriveId`);

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
  MODIFY `DriveId` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
