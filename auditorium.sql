-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 07:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auditorium`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_happening`
--

CREATE TABLE `event_happening` (
  `user_name` varchar(30) NOT NULL,
  `hid` int(3) NOT NULL,
  `event_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_happening`
--

INSERT INTO `event_happening` (`user_name`, `hid`, `event_name`) VALUES
('manish', 1, 'singing');

-- --------------------------------------------------------

--
-- Table structure for table `hall_no`
--

CREATE TABLE `hall_no` (
  `hid` int(3) NOT NULL,
  `no_of_seats` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hall_no`
--

INSERT INTO `hall_no` (`hid`, `no_of_seats`) VALUES
(1, 120),
(2, 220),
(3, 210),
(4, 200),
(5, 300);

-- --------------------------------------------------------

--
-- Table structure for table `new_regs`
--

CREATE TABLE `new_regs` (
  `user_name` varchar(30) NOT NULL,
  `gender` char(1) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_regs`
--

INSERT INTO `new_regs` (`user_name`, `gender`, `address`, `email`, `password`) VALUES
('manish', 'm', 'indiranagr', 'saib', 'man123'),
('sai', 'm', 'indiranagar', 'manish@18', 'smkr12'),
('ss', 'm', 'indiranagr', 'saib', '1234'),
('prajwal','m','kolar','praj@2002','Aash');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `hid` int(3) DEFAULT NULL,
  `ticket_prices` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`hid`, `ticket_prices`) VALUES
(1, 2000),
(2, 1000),
(3, 2500),
(4, 3000),
(5, 1800);

-- --------------------------------------------------------

--
-- Table structure for table `timings`
--

CREATE TABLE `timings` (
  `user_name` varchar(30) NOT NULL,
  `hid` int(3) NOT NULL,
  `edate` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timings`
--

INSERT INTO `timings` (`user_name`, `hid`, `edate`, `start_time`, `end_time`) VALUES
('manish', 1, '2023-01-29', '23:01:00', '23:06:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_happening`
--
ALTER TABLE `event_happening`
  ADD PRIMARY KEY (`user_name`,`hid`),
  ADD KEY `hid` (`hid`);

--
-- Indexes for table `hall_no`
--
ALTER TABLE `hall_no`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `new_regs`
--
ALTER TABLE `new_regs`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `timings`
--
ALTER TABLE `timings`
  ADD PRIMARY KEY (`user_name`,`hid`),
  ADD KEY `hid` (`hid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_happening`
--
ALTER TABLE `event_happening`
  ADD CONSTRAINT `event_happening_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `new_regs` (`user_name`) ON DELETE CASCADE,
  ADD CONSTRAINT `event_happening_ibfk_2` FOREIGN KEY (`hid`) REFERENCES `hall_no` (`hid`) ON DELETE CASCADE;

--
-- Constraints for table `timings`
--
ALTER TABLE `timings`
  ADD CONSTRAINT `timings_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `new_regs` (`user_name`) ON DELETE CASCADE,
  ADD CONSTRAINT `timings_ibfk_2` FOREIGN KEY (`hid`) REFERENCES `hall_no` (`hid`) ON DELETE CASCADE,
  ADD CONSTRAINT `timings_ibfk_3` FOREIGN KEY (`user_name`) REFERENCES `new_regs` (`user_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
