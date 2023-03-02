-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2023 at 09:35 AM
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
-- Database: `ediproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `rider`
--

CREATE TABLE `rider` (
  `id` int(11) NOT NULL,
  `bikeno` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `helmet` varchar(255) DEFAULT NULL,
  `department` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rider`
--

INSERT INTO `rider` (`id`, `bikeno`, `phoneno`, `location`, `helmet`, `department`, `year`, `gender`, `name`, `time`) VALUES
(63, '1234', '7666532223', 'Chintamaninagar2', '', 'AIDS', '1st', 'Male', '', '2023-01-24 18:18:14'),
(64, '1234', '7666532223', 'Chintamaninagar2', '', 'AIDS', '1st', 'Male', '', '2023-01-24 18:18:20'),
(65, 'MH17BC1022', '+917666521197', 'Chintamaninagar2', 'yes', 'AIDS', '1st', 'Male', '', '2023-01-24 18:18:41'),
(66, 'MH17BC1022', '+917666521197', 'Chintamaninagar2', 'yes', 'AIDS', '1st', 'Male', '', '2023-01-24 18:25:07'),
(67, 'MH08AJ1332', '+917219307121', 'Chintamaninagar2', '', 'Instrumentation', '1st', 'Male', '', '2023-01-24 18:56:47'),
(68, 'MH17BC1022', '+917666521197', 'Bibwewadi', 'yes', 'AIDS', '1st', 'Male', '', '2023-01-25 05:41:38'),
(69, 'MH17BC1022', '7666532223', 'Chintamaninagar2', 'yes', 'AIDS', '1st', 'Male', '', '2023-02-18 07:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `roommate`
--

CREATE TABLE `roommate` (
  `rname` varchar(255) NOT NULL,
  `rphone` varchar(255) NOT NULL,
  `radd` varchar(255) NOT NULL,
  `rlocation` varchar(255) NOT NULL,
  `rdpet` varchar(255) NOT NULL,
  `ryear` varchar(255) NOT NULL,
  `rgender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roommate`
--

INSERT INTO `roommate` (`rname`, `rphone`, `radd`, `rlocation`, `rdpet`, `ryear`, `rgender`) VALUES
('Piyush Ghante', '+917666521197', '213/324 , Chintamani Nagar , Near VIT College, Bibwewadi-412001', 'Bibwewadi', 'AIDS', '2nd', 'Male'),
('Aditya Pagar', '+917499686909', '146/177, venkatesh building ,near ram mandir,south sadar bazar , Lashkar solapur', 'Lower_Indiranagar', 'Mechanical', '2nd', 'Male'),
('Piyush Ghante', '+917666521197', '146/177, venkatesh building ,near ram mandir,south sadar bazar , Lashkar solapur', 'Chintamaninagar2', 'AIDS', '1st', 'Male'),
('Yogesh Gangji', '+917666521197', '122@TRR,PUNE', 'Chintamaninagar2', 'Chemical', '4th', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `study`
--

CREATE TABLE `study` (
  `subj` varchar(250) NOT NULL,
  `phonenum` text NOT NULL,
  `meetlink` varchar(222) NOT NULL,
  `platf` varchar(222) NOT NULL,
  `yearb` varchar(222) NOT NULL,
  `dept` varchar(222) NOT NULL,
  `time` varchar(50) DEFAULT NULL,
  `name1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `study`
--

INSERT INTO `study` (`subj`, `phonenum`, `meetlink`, `platf`, `yearb`, `dept`, `time`, `name1`) VALUES
('PHP', '+917666521197', 'https://meet.google.com/wwp-fcyv-icm', 'MICROSOFT TEAMS', '2nd', 'Artifical Intelligence & Data Sc', '2023-01-25T07:54', 'Piyush Ghante');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `uname` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `email`, `pass`) VALUES
(33, 'test', 'pass@gmail.com', '123'),
(50, 'Piyush', 'ghantepiyush2003@gmail.com', '1'),
(51, 'Piyush', 'pg@gmail.com', '123'),
(52, 'Piyush', 'ghantepiyush@gmail.com', '1'),
(53, 'PRK', 'prk@gmail.com', '1234'),
(54, 'SB', 'sb@gmail.com', '1234'),
(55, 'Rishi', 'rs@test.edu', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rider`
--
ALTER TABLE `rider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rider`
--
ALTER TABLE `rider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
