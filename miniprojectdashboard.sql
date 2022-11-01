-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 03:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rgmcet`
--
CREATE DATABASE IF NOT EXISTS `rgmcet` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `rgmcet`;

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `UserId` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Role` varchar(20) NOT NULL DEFAULT 'Administrator'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`UserId`, `Password`, `Role`) VALUES
('Subba Reddy', 'SubbaReddy@CSE', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `UserId` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Role` varchar(20) NOT NULL DEFAULT 'Coordinator'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`UserId`, `Password`, `Role`) VALUES
('Sravan Kumar Reddy', 'Sravan@CSE', 'Coordinator');

-- --------------------------------------------------------

--
-- Table structure for table `deadline`
--

CREATE TABLE `deadline` (
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deadline`
--

INSERT INTO `deadline` (`time`) VALUES
('Tomorrow is the last day for the submission'),
('Tomorrow is the last day for the submission');

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `TeamNumber` int(11) NOT NULL,
  `UserId` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Role` varchar(20) NOT NULL DEFAULT 'Guide'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`TeamNumber`, `UserId`, `Password`, `Role`) VALUES
(13, 'Naresh', '12345', 'Guide');

-- --------------------------------------------------------

--
-- Table structure for table `projectmarks`
--

CREATE TABLE `projectmarks` (
  `TeamNumber` int(11) NOT NULL,
  `TitleoftheProject` varchar(22) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projectmarks`
--

INSERT INTO `projectmarks` (`TeamNumber`, `TitleoftheProject`, `marks`) VALUES
(13, 'miniproject dashboard', 70);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `TeamNumber` int(11) NOT NULL,
  `TitleoftheProject` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`TeamNumber`, `TitleoftheProject`) VALUES
(13, 'miniproject dashboard'),
(3, 'time'),
(13, 'miniproject dashboard');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `TeamNumber` int(11) NOT NULL,
  `UserName` varchar(25) NOT NULL,
  `Role` varchar(15) NOT NULL DEFAULT 'TeamLeader',
  `TitleoftheProject` varchar(25) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`TeamNumber`, `UserName`, `Role`, `TitleoftheProject`, `status`) VALUES
(13, 'swetha', 'TeamLeader', 'miniproject dashboard', 70);

-- --------------------------------------------------------

--
-- Table structure for table `teamleader`
--

CREATE TABLE `teamleader` (
  `TeamNumber` int(11) NOT NULL,
  `UserId` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `TitleoftheProject` varchar(22) NOT NULL,
  `Role` varchar(20) NOT NULL DEFAULT 'TeamLeader'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teamleader`
--

INSERT INTO `teamleader` (`TeamNumber`, `UserId`, `Password`, `TitleoftheProject`, `Role`) VALUES
(13, 'swetha', '12345', 'miniproject dashboard', 'TeamLeader');

-- --------------------------------------------------------

--
-- Table structure for table `teammember`
--

CREATE TABLE `teammember` (
  `TeamNumber` int(11) NOT NULL,
  `UserId` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `TitleoftheProject` varchar(22) NOT NULL,
  `Role` varchar(20) NOT NULL DEFAULT 'TeamMember'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`Role`);

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`Role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
