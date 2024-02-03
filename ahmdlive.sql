-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 04:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahmdlive`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminemail` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminemail`, `password`) VALUES
(1, 'admin@gmail.com', '654321');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `areaid` int(11) NOT NULL,
  `areaname` varchar(30) NOT NULL,
  `deptid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`areaid`, `areaname`, `deptid`) VALUES
(2, 'Lal Darwaja', 3),
(3, 'Ranip', 3),
(4, 'lal darwaja', 3),
(5, 'New Vadaj', 5),
(6, 'Vastral', 5),
(7, 'Vastrapur', 3),
(8, 'Gota', 2),
(9, 'Vastrapur', 3),
(10, 'Shahibag', 7);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `compid` int(11) NOT NULL,
  `deptname` varchar(50) NOT NULL,
  `areaname` varchar(50) NOT NULL,
  `adharno` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` varchar(9000) NOT NULL,
  `status` varchar(20) NOT NULL,
  `datecomp` datetime NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`compid`, `deptname`, `areaname`, `adharno`, `username`, `email`, `message`, `status`, `datecomp`, `userid`) VALUES
(13, '3', '2', '', 'Dev', 'modidev1105@gmail.com', 'dev modi', '0', '2023-03-13 00:00:00', 4),
(14, '3', '2', '', 'Dev', 'modidev1105@gmail.com', 'dev', '0', '2023-03-13 00:00:00', 4),
(15, '3', '2', '', 'Dev', 'modidev1105@gmail.com', 'frferf', '0', '2023-03-13 00:00:00', 4),
(16, '3', '2', '', 'Dev', 'modidev1105@gmail.com', 'frferf', '0', '2023-03-13 00:00:00', 4),
(17, '3', '2', '', 'Dev', 'modidev1105@gmail.com', 'ef', '0', '2023-03-13 00:00:00', 4),
(18, '3', '2', '', 'Dev', 'modidev1105@gmail.com', 'wdd', '0', '2023-03-13 00:00:00', 4),
(19, '7', '10', '', 'Dev', 'modidev1105@gmail.com', 'Bill is pending', '1', '2023-03-24 00:00:00', 4),
(20, '2', '8', '', 'dev', 'dev@gmail.com', 'bill', '0', '2023-03-25 00:00:00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `deptid` int(11) NOT NULL,
  `deptname` varchar(30) NOT NULL,
  `deptdesc` varchar(9000) NOT NULL,
  `officername` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`deptid`, `deptname`, `deptdesc`, `officername`) VALUES
(2, 'Educational', 'Study & All', 'Meet'),
(3, 'water', 'water related	', 'Dev'),
(5, 'RTO', 'Vehicals			', 'Tithi'),
(7, 'Incomtex', 'GST							\r\n							', 'Aarchi');

-- --------------------------------------------------------

--
-- Table structure for table `department_user`
--

CREATE TABLE `department_user` (
  `id` int(11) NOT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone_no` bigint(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department_user`
--

INSERT INTO `department_user` (`id`, `dept_id`, `area_id`, `email`, `password`, `phone_no`, `created_by`, `created_at`) VALUES
(2, 5, 5, 'rto_vadaj@gmail.com', 'rto', 9898981234, NULL, NULL),
(4, 2, 8, 'edu@gmail.com', 'edu123', 9913181515, NULL, NULL),
(5, 3, 2, 'water@gmail.com', 'water123', 9913615115, NULL, NULL),
(6, 7, 10, 'inc@gmail.com', 'inc123', 9601415656, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `userid` int(11) NOT NULL,
  `adhar` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`userid`, `adhar`, `username`, `email`, `password`, `address`, `pincode`, `phone`) VALUES
(3, '000000', 'Sagar', 'khatrisagar2@gmail.com', '123456', 'Incometax', '380009', '7878232386'),
(4, '000000', 'Dev', 'modidev1105@gmail.com', '123456', '401, lakshadweep flat,Azad society get n', '380015', '9601010190'),
(5, '000000', 'dev', 'dev@gmail.com', 'dev123456', 'fedji', '380015', '9601010190');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`areaid`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`compid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`deptid`);

--
-- Indexes for table `department_user`
--
ALTER TABLE `department_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `areaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `compid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `deptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `department_user`
--
ALTER TABLE `department_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
