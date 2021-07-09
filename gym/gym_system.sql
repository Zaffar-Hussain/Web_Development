-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 03:27 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym system`
--

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `S1` varchar(100) NOT NULL,
  `S2` varchar(100) NOT NULL,
  `S3` varchar(100) NOT NULL,
  `S4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`S1`, `S2`, `S3`, `S4`) VALUES
('1800', '900', '700', '550');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `name` varchar(100) NOT NULL,
  `eid` varchar(100) NOT NULL,
  `pwd` varchar(8) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`name`, `eid`, `pwd`, `question`, `answer`) VALUES
('nitin', 'n@gmail.com', '1', 'Your nick name?', 'nittu'),
('suni', 's@gmail.com', '2', 'Your nick name?', 'suni');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `name` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `pwd` varchar(10) NOT NULL,
  `type` varchar(100) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `mob_no` int(10) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `memb_time` varchar(100) NOT NULL,
  `join_date` date NOT NULL,
  `gym_time` varchar(100) NOT NULL,
  `occup` varchar(100) NOT NULL,
  `f_mode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`name`, `mail`, `pwd`, `type`, `question`, `answer`, `mob_no`, `gender`, `memb_time`, `join_date`, `gym_time`, `occup`, `f_mode`) VALUES
('rocky', 'bhai@gmail.com', '', 'user', '', '', 98765432, 'Male', '2year', '2019-11-13', '9', 'student', 'Month'),
('nishanta', 'nish@gmail.com', '', '', '', '', 987654321, 'Male', '1year', '2019-11-24', '9:30', 'student', 'Month'),
('suresh', 'qer@hfg', '3', 'admin', 'Favorite movie?', 'udupi', 2147483647, 'Male', '2year', '2019-11-24', '9', 'student', 'Month'),
('s', 'sunil1@gmail.com', '', '', '', '', 900, 'Male', '1year', '0000-00-00', '9:30', 'student', 'Half-Year'),
('sunil', 'sunil@gmail.com', '1234', 'user', '', '', 987654321, 'Male', '1year', '2019-10-31', '9:30', 'student', 'Month'),
('sv', 'sv@gmail.com', '0', '', 'Your nick name?', 'kunda', 1000000, 'Female', '2year', '2019-11-25', '9:30', 'student', 'Half-Year');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
