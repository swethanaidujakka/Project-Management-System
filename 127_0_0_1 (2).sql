-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 07:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

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
('Subba Reddy', '12345', 'Administrator');

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
('Sravan Kumar Reddy', '12345', 'Coordinator');

-- --------------------------------------------------------

--
-- Table structure for table `deadline`
--

CREATE TABLE `deadline` (
  `coordinator` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deadline`
--

INSERT INTO `deadline` (`coordinator`, `message`) VALUES
('Sravan Kumar Reddy', 'final review is on tuesday');

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
  `UserId` varchar(25) NOT NULL,
  `TitleoftheProject` varchar(256) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `TeamNumber` int(11) NOT NULL,
  `TitleoftheProject` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`TeamNumber`, `TitleoftheProject`) VALUES
(1, 'Result Management System'),
(2, 'Automation of students Administrative System'),
(3, 'Time Table Management System '),
(4, 'Coder blog'),
(5, 'Campus Placement Automation'),
(6, 'Curfew Epass Management System'),
(7, 'Stakeholders Online Feedback form'),
(8, 'Student Task Manager'),
(9, 'Audio Steganography using LSB and Symmetric Key'),
(10, 'Tax Consultation'),
(11, 'Linear Data Structure Visualization'),
(12, 'Online Nursery For Plants'),
(13, 'Mini Project Dashboard'),
(14, 'Vision Based Attendance System'),
(15, 'Detection of iceberg using deep learning with the help of satellite images'),
(16, 'Daily Expense Tracking System'),
(17, 'Automation of exam hall allotment and seating arrangement'),
(18, 'Food Management System'),
(19, 'Student Mentor Web App'),
(20, 'Android Binding System'),
(21, 'Online News Protocal'),
(23, 'You Tube Transscript Summariser'),
(24, 'Online Examination System'),
(25, 'Stock Trend Prediction'),
(27, 'MI Based Crop Suggetion System to Enhance Profit And Regulate Production'),
(28, 'Alummini Referral Based Job Consultancy'),
(31, 'Online Canteen Food Ordering System '),
(32, 'RGM Premier League'),
(33, 'Sorting Visualizer'),
(43, 'Image feature extraction'),
(44, 'Skill Assessment test with certification'),
(45, 'Online Gift Store System'),
(47, 'Licence Plate Recognition Method using OpenCV'),
(48, 'OP Management System'),
(49, 'Data Packet simulation in datalink layer'),
(50, 'Organ Donate Management System'),
(51, 'Vehicle Rental System'),
(41, 'Community platform for RGMCET'),
(46, 'House price prediction'),
(42, 'RGM CSE student and faculty form');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `TeamNumber` int(11) NOT NULL,
  `UserName` varchar(25) NOT NULL,
  `Role` varchar(15) NOT NULL DEFAULT 'TeamLeader',
  `TitleoftheProject` varchar(256) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`TeamNumber`, `UserName`, `Role`, `TitleoftheProject`, `status`) VALUES
(1, 'Sai Sanjeev', 'TeamLeader', 'Result Management System', 75),
(2, 'Sai Pranathi', 'TeamLeader', 'Automation of students Administrative System', 85),
(3, 'Subbarami Reddy', 'TeamLeader', 'Time Table Management System ', 90),
(4, 'Vamsi Mohan Reddy', 'TeamLeader', 'Coder blog', 75),
(5, 'Pooja Sree', 'TeamLeader', 'Campus Placement Automation', 80),
(6, 'Gunavathi', 'TeamLeader', 'Curfew Epass Management System', 80),
(7, 'Mohammad Akeel', 'TeamLeader', 'Stakeholders Online Feedback form', 70),
(8, 'Ranganath', 'TeamLeader', 'Student Task Manager', 80),
(9, 'Mubashira Tabbassum', 'TeamLeader', 'Audio Steganography using LSB and Symmetric Key', 95),
(10, 'Indhu Sree', 'TeamLeader', 'Tax Consultation', 85),
(11, 'Vamsi Krishna Reddy', 'TeamLeader', 'Linear Data Structure Visualization', 80),
(12, 'Dileep Kumar Reddy', 'TeamLeader', 'Online Nursery For Plants', 80),
(13, 'Swetha', 'TeamLeader', 'Mini Project Dashboard', 90),
(14, 'Akshaya Royal', 'TeamLeader', 'Vision Based Attendance System', 80),
(15, 'Venkata Aravind', 'TeamLeader', 'Detection of iceberg using deep learning with the help of satellite images', 80),
(16, 'M Sowmya', 'TeamLeader', 'Daily Expense Tracking System', 90),
(17, 'Sai Sree', 'TeamLeader', 'Automation of exam hall allotment and seating arrangement', 90),
(18, 'Sunanda', 'TeamLeader', 'Food Management System', 80),
(19, 'Aparna Lakshmi', 'TeamLeader', 'Student Mentor Web App', 80),
(20, 'Gnana Reddy', 'TeamLeader', 'Android Binding System', 80),
(21, 'Karnataka Bhavani', 'TeamLeader', 'Online News Protocal', 80),
(23, 'ChagamReddy Supriya', 'TeamLeader', 'You Tube Transscript Summariser', 80),
(24, 'Malipeddy Naga Santhosh', 'TeamLeader', 'Online Examination System', 80),
(25, 'Golla Sanjushree', 'TeamLeader', 'Stock Trend Prediction', 85),
(27, 'Sanchula Sri Harsitha', 'TeamLeader', 'MI Based Crop Suggetion System to Enhance Profit And Regulate Production', 75),
(28, 'Kalavakunta Tejaswini', 'TeamLeader', 'Alummini Referral Based Job Consultancy', 75),
(31, 'Naick Tameena Banu', 'TeamLeader', 'Online Canteen Food Ordering System ', 90),
(32, 'Gundlooru Thejasekhar Red', 'TeamLeader', 'RGM Premier League', 80),
(33, 'Venkata Ravindra Reddy', 'TeamLeader', 'Sorting Visualizer', 85),
(43, 'Sashidhar', 'TeamLeader', 'Image feature extraction', 85),
(44, 'Bharath Kumar', 'TeamLeader', 'Skill Assessment test with certification', 75),
(45, 'Goutham Reddy', 'TeamLeader', 'Online Gift Store System', 95),
(47, 'RajaRajeshwari', 'TeamLeader', 'Licence Plate Recognition Method using OpenCV', 70),
(48, 'Sai Lakshman', 'TeamLeader', 'OP Management System', 80),
(49, 'Sreekanth', 'TeamLeader', 'Data Packet simulation in datalink layer', 80),
(50, 'Likhitha', 'TeamLeader', 'Organ Donate Management System', 70),
(51, 'Mallikarguna', 'TeamLeader', 'Vehicle Rental System', 90),
(41, 'Linga Prasad', 'TeamLeader', 'Community platform for RGMCET', 80),
(46, 'Venkata Dharani', 'TeamLeader', 'House price prediction', 95),
(42, 'Pradeep', 'TeamLeader', 'RGM CSE student and faculty form', 90);

-- --------------------------------------------------------

--
-- Table structure for table `teamleader`
--

CREATE TABLE `teamleader` (
  `TeamNumber` int(11) NOT NULL,
  `UserId` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `TitleoftheProject` varchar(256) NOT NULL,
  `Role` varchar(20) NOT NULL DEFAULT 'TeamLeader'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teamleader`
--

INSERT INTO `teamleader` (`TeamNumber`, `UserId`, `Password`, `TitleoftheProject`, `Role`) VALUES
(1, 'Sai Sanjeev', '12345', 'Result Management System', 'TeamLeader'),
(2, 'Sai Pranathi', '12345', 'Automation of students Administrative System', 'TeamLeader'),
(3, 'Subbarami Reddy', '12345', 'Time Table Management System ', 'TeamLeader'),
(4, 'Vamsi Mohan Reddy', '12345', 'Coder blog', 'TeamLeader'),
(5, 'Pooja Sree', '12345', 'Campus Placement Automation', 'TeamLeader'),
(6, 'Gunavathi', '12345', 'Curfew Epass Management System', 'TeamLeader'),
(7, 'Mohammad Akeel', '12345', 'Stakeholders Online Feedback form', 'TeamLeader'),
(8, 'Ranganath', '12345', 'Student Task Manager', 'TeamLeader'),
(9, 'Mubashira Tabbassum', '12345', 'Audio Steganography using LSB and Symmetric Key', 'TeamLeader'),
(10, 'Indhu Sree', '12345', 'Tax Consultation', 'TeamLeader'),
(11, 'Vamsi Krishna Reddy', '12345', 'Linear Data Structure Visualization', 'TeamLeader'),
(12, 'Dileep Kumar Reddy', '12345', 'Online Nursery For Plants', 'TeamLeader'),
(13, 'Swetha', '12345', 'Mini Project Dashboard', 'TeamLeader'),
(14, 'Akshaya Royal', '12345', 'Vision Based Attendance System', 'TeamLeader'),
(15, 'Venkata Aravind', '12345', 'Detection of iceberg using deep learning with the help of satellite images', 'TeamLeader'),
(16, 'M Sowmya', '12345', 'Daily Expense Tracking System', 'TeamLeader'),
(17, 'Sai Sree', '12345', 'Automation of exam hall allotment and seating arrangement', 'TeamLeader'),
(18, 'Sunanda', '12345', 'Food Management System', 'TeamLeader'),
(19, 'Aparna Lakshmi', '12345', 'Student Mentor Web App', 'TeamLeader'),
(20, 'Gnana Reddy', '12345', 'Android Binding System', 'TeamLeader'),
(21, 'Karnataka Bhavani', '12345', 'Online News Protocal', 'TeamLeader'),
(23, 'ChagamReddy Supriya', '12345', 'You Tube Transscript Summariser', 'TeamLeader'),
(24, 'Malipeddy Naga Santhosh', '12345', 'Online Examination System', 'TeamLeader'),
(25, 'Golla Sanjushree', '12345', 'Stock Trend Prediction', 'TeamLeader'),
(27, 'Sanchula Sri Harsitha', '12345', 'MI Based Crop Suggetion System to Enhance Profit And Regulate Production', 'TeamLeader'),
(28, 'Kalavakunta Tejaswini', '12345', 'Alummini Referral Based Job Consultancy', 'TeamLeader'),
(31, 'Naick Tameena Banu', '12345', 'Online Canteen Food Ordering System ', 'TeamLeader'),
(32, 'Gundlooru Thejasekhar Reddy', '12345', 'RGM Premier League', 'TeamLeader'),
(33, 'Venkata Ravindra Reddy', '12345', 'Sorting Visualizer', 'TeamLeader'),
(43, 'Sashidhar', '12345', 'Image feature extraction', 'TeamLeader'),
(44, 'Bharath Kumar', '12345', 'Skill Assessment test with certification', 'TeamLeader'),
(45, 'Goutham Reddy', '12345', 'Online Gift Store System', 'TeamLeader'),
(47, 'RajaRajeshwari', '12345', 'Licence Plate Recognition Method using OpenCV', 'TeamLeader'),
(48, 'Sai Lakshman', '12345', 'OP Management System', 'TeamLeader'),
(49, 'Sreekanth', '12345', 'Data Packet simulation in datalink layer', 'TeamLeader'),
(50, 'Likhitha', '12345', 'Organ Donate Management System', 'TeamLeader'),
(51, 'Mallikarguna', '12345', 'Vehicle Rental System', 'TeamLeader'),
(41, 'Linga Prasad', '12345', 'Community platform for RGMCET', 'TeamLeader'),
(46, 'Venkata Dharani', '12345', 'House price prediction', 'TeamLeader'),
(42, 'Pradeep', '12345', 'RGM CSE student and faculty form', 'TeamLeader');

-- --------------------------------------------------------

--
-- Table structure for table `teammember`
--

CREATE TABLE `teammember` (
  `TeamNumber` int(11) NOT NULL,
  `UserId` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `TitleoftheProject` varchar(256) NOT NULL,
  `Role` varchar(20) NOT NULL DEFAULT 'TeamMember'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teammember`
--

INSERT INTO `teammember` (`TeamNumber`, `UserId`, `Password`, `TitleoftheProject`, `Role`) VALUES
(2, 'Sai Karthik', '12345', 'Automation of students Administrative System', 'TeamMember'),
(2, 'Maruthi Prasad', '12345', 'Automation of students Administrative System', 'TeamMember'),
(2, 'Om Siva Nayak', '12345', 'Automation of students Administrative System', 'TeamMember'),
(1, 'Prabhas', '12345', 'Result Management System', 'TeamMember'),
(1, 'Wahiba Nishad', '12345', 'Result Management System', 'TeamMember'),
(1, 'Sai Kumar', '12345', 'Result Management System', 'TeamMember'),
(3, 'Rupeswar Reddy', '12345', 'Time Table Management System ', 'TeamMember'),
(3, 'Veeresh', '12345', 'Time Table Management System ', 'TeamMember'),
(3, 'Ram Mohan Reddy', '12345', 'Time Table Management System ', 'TeamMember'),
(4, 'Sai Thanu Sree', '12345', 'Coder blog', 'TeamMember'),
(4, 'Vasavi', '12345', 'Coder blog', 'TeamMember'),
(4, 'Sanjay', '12345', 'Coder blog', 'TeamMember'),
(5, 'Sathya Sireesha Bai', '12345', 'Campus Placement Automation', 'TeamMember'),
(5, 'Aishwarya', '12345', 'Campus Placement Automation', 'TeamMember'),
(5, 'Jaswanth  Krishna', '12345', 'Campus Placement Automation', 'TeamMember'),
(6, 'Obula Reddy', '12345', 'Curfew Epass Management System', 'TeamMember'),
(6, 'Sai Vikas', '12345', 'Curfew Epass Management System', 'TeamMember'),
(6, 'Ismail', '12345', 'Curfew Epass Management System', 'TeamMember'),
(7, 'Thrilokya', '12345', 'Stakeholders Online Feedback form', 'TeamMember'),
(7, 'Aravindu', '12345', 'Stakeholders Online Feedback form', 'TeamMember'),
(7, 'Sumanth', '12345', 'Stakeholders Online Feedback form', 'TeamMember'),
(8, 'Eshub Basha', '12345', 'Student Task Manager', 'TeamMember'),
(8, 'Divya Sree', '12345', 'Student Task Manager', 'TeamMember'),
(8, 'Surendra', '12345', 'Student Task Manager', 'TeamMember'),
(10, 'Vamsi Krishna', '12345', 'Tax Consultation', 'TeamMember'),
(10, 'Arshiya', '12345', 'Tax Consultation', 'TeamMember'),
(10, 'Tharun', '12345', 'Tax Consultation', 'TeamMember'),
(11, 'Uma Devi', '12345', 'Linear Data Structure Visualization', 'TeamMember'),
(11, 'Lakshmikanth', '12345', 'Linear Data Structure Visualization', 'TeamMember'),
(11, 'Ajay Kumar', '12345', 'Linear Data Structure Visualization', 'TeamMember'),
(12, 'Kavya', '12345', 'Online Nursery For Plants', 'TeamMember'),
(12, 'Azadh', '12345', 'Online Nursery For Plants', 'TeamMember'),
(12, 'Pratheek Reddy', '12345', 'Online Nursery For Plants', 'TeamMember'),
(13, 'Lahari', '12345', 'Mini Project Dashboard', 'TeamMember'),
(13, 'Pavani', '12345', 'Mini Project Dashboard', 'TeamMember'),
(13, 'Teja', '12345', 'Mini Project Dashboard', 'TeamMember'),
(14, 'Veera Bhadra', '12345', 'Vision Based Attendance System', 'TeamMember'),
(14, 'Sathya Narayana', '12345', 'Vision Based Attendance System', 'TeamMember'),
(14, 'Phaneendra', '12345', 'Vision Based Attendance System', 'TeamMember'),
(15, 'Anjali', '12345', 'Detection of iceberg using deep learning with the help of satellite images', 'TeamMember'),
(15, 'Tejesh', '12345', 'Detection of iceberg using deep learning with the help of satellite images', 'TeamMember'),
(15, 'Pavan Sai Reddy', '12345', 'Detection of iceberg using deep learning with the help of satellite images', 'TeamMember'),
(16, 'Y Karthik', '12345', 'Daily Expense Tracking System', 'TeamMember'),
(16, 'Anwar Baig', '12345', 'Daily Expense Tracking System', 'TeamMember'),
(16, 'Sai  Kishore', '12345', 'Daily Expense Tracking System', 'TeamMember'),
(17, 'Dabbi Sravan Kumar', '12345', 'Automation of exam hall allotment and seating arrangement', 'TeamMember'),
(17, 'Bala Sirisha', '12345', 'Automation of exam hall allotment and seating arrangement', 'TeamMember'),
(17, 'Kuruva Sai Kumar', '12345', 'Automation of exam hall allotment and seating arrangement', 'TeamMember'),
(18, 'Madhavilatha', '12345', 'Food Management System', 'TeamMember'),
(18, 'Felix', '12345', 'Food Management System', 'TeamMember'),
(18, 'Madan Gopal', '12345', 'Food Management System', 'TeamMember'),
(19, 'Viswanath', '12345', 'Student Mentor Web App', 'TeamMember'),
(19, 'Shakeera Parveen', '12345', 'Student Mentor Web App', 'TeamMember'),
(19, 'Ravi Kiran', '12345', 'Student Mentor Web App', 'TeamMember'),
(20, 'Ruchitha', '12345', 'Android Binding System', 'TeamMember'),
(20, 'Ganesh', '12345', 'Android Binding System', 'TeamMember'),
(20, 'Meghanath Reddy', '12345', 'Android Binding System', 'TeamMember'),
(9, 'Rishab Hussain', '12345', 'Audio Steganography using LSB and Symmetric Key', 'TeamMember'),
(9, 'Venkata Subba Reddy', '12345', 'Audio Steganography using LSB and Symmetric Key', 'TeamMember'),
(9, 'Sivananda Reddy', '12345', 'Audio Steganography using LSB and Symmetric Key', 'TeamMember'),
(21, 'K.Lakshmideepakreddy', '12345', 'Online News Protocal', 'TeamMember'),
(21, 'Kuruva Mohan kumar', '12345', 'Online News Protocal', 'TeamMember'),
(21, 'Beerala Vennela', '12345', 'Online News Protocal', 'TeamMember'),
(23, 'Mariboina Mallaiah', '12345', 'You Tube Transscript Summariser', 'TeamMember'),
(23, 'Akepogu Surekha', '12345', 'You Tube Transscript Summariser', 'TeamMember'),
(23, 'Mutyala Saankhya Reddy', '12345', 'You Tube Transscript Summariser', 'TeamMember'),
(24, 'Mukkara Mahesh', '12345', 'Online Examination System', 'TeamMember'),
(24, 'Shaik Mansoor vali', '12345', 'Online Examination System', 'TeamMember'),
(24, 'Lakka Vijaya Kumar', '12345', 'Online Examination System', 'TeamMember'),
(25, 'Kurnoothala Pavan Charan', '12345', 'Stock Trend Prediction', 'TeamMember'),
(25, 'Domala Naga Pavan', '12345', 'Stock Trend Prediction', 'TeamMember'),
(25, 'Boddu Boyana HariKrishna', '1234', 'Stock Trend Prediction', 'TeamMember'),
(27, 'Soma Hemanth', '12345', 'MI Based Crop Suggetion System to Enhance Profit And Regulate Production', 'TeamMember'),
(27, 'J.Sai Bhagavan Reddy', '12345', 'MI Based Crop Suggetion System to Enhance Profit And Regulate Production', 'TeamMember'),
(27, 'Mule Sarveswara Reddy', '12345', 'MI Based Crop Suggetion System to Enhance Profit And Regulate Production', 'TeamMember'),
(28, 'E.Anil Kumar Yadav', '12345', 'Alummini Referral Based Job Consultancy', 'TeamMember'),
(28, 'Marella Raviteja', '12345', 'Alummini Referral Based Job Consultancy', 'TeamMember'),
(28, 'Gaddam Surya Sai Reddy', '12345', 'Alummini Referral Based Job Consultancy', 'TeamMember'),
(31, 'Berragari Mamatha', '12345', 'Online Canteen Food Ordering System ', 'TeamMember'),
(31, 'Shilpa Chawan', '12345', 'Online Canteen Food Ordering System ', 'TeamMember'),
(31, 'Modala Naga Yaswanth Kumar', '12345', 'Online Canteen Food Ordering System ', 'TeamMember');

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
