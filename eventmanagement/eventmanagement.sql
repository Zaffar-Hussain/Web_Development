-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 03:03 PM
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
-- Database: `eventmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventinfo`
--

CREATE TABLE `eventinfo` (
  `event_id` int(4) NOT NULL,
  `catagory` varchar(10) NOT NULL,
  `event_name` varchar(20) NOT NULL,
  `event_det` varchar(100) NOT NULL,
  `event_date` date NOT NULL,
  `event_venue` varchar(100) NOT NULL,
  `event_rules` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventinfo`
--

INSERT INTO `eventinfo` (`event_id`, `catagory`, `event_name`, `event_det`, `event_date`, `event_venue`, `event_rules`) VALUES
(1, 'sports', 'football', 'interclass football tournament', '2019-10-31', 'college ground, yit', 'refrees decission is final'),
(2, 'cultural', 'rangoli', 'rangoli competition for the collage fest', '2019-11-06', 'seminar hall, ground floor, yit', 'chalk powder is not allowed'),
(3, 'technical', 'coding', 'interclass coding competition', '2019-11-10', 'ML Lab, 4th floor, yit', '2 members in a team'),
(4, 'general', 'debate', 'debate on economical development in India', '2019-11-15', 'seminar hall, ground floor, yit', '3 members in a team'),
(5, 'general', 'debate', 'debate on economical development in India', '2019-11-15', 'seminar hall, ground floor, yit', '3 members in a team');

-- --------------------------------------------------------

--
-- Table structure for table `eventregister_info`
--

CREATE TABLE `eventregister_info` (
  `team_id` int(4) NOT NULL,
  `event_name` varchar(20) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `team_name` varchar(20) NOT NULL,
  `first_mobno` varchar(10) NOT NULL,
  `sec_mobno` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventregister_info`
--

INSERT INTO `eventregister_info` (`team_id`, `event_name`, `usn`, `team_name`, `first_mobno`, `sec_mobno`, `date`) VALUES
(1, 'football', '4dm16is049', 'rockers yit', '1234567890', '0987654321', '2019-10-28'),
(2, 'debate', 'ddtfygjhj', 'bahubali', '3457644', '86534567', '2019-10-29'),
(3, 'debate', 'ddtfygjhj', 'bahubali', '3457644', '86534567', '2019-10-29');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `uid` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `type` varchar(5) NOT NULL,
  `question` varchar(30) NOT NULL,
  `answer` varchar(20) NOT NULL,
  `mob_no` varchar(10) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `sem` int(2) NOT NULL,
  `branch` varchar(40) NOT NULL,
  `year` int(4) NOT NULL,
  `date` date NOT NULL,
  `registered` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`uid`, `name`, `pwd`, `type`, `question`, `answer`, `mob_no`, `mail`, `sem`, `branch`, `year`, `date`, `registered`) VALUES
('1234', 'zafar', '123', 'user', 'Favorite movie?', 'avengers', '1234567890', 'abc@gmail.com', 7, 'ise', 4, '2019-10-28', 'yes'),
('zaf', 'zafar', '111', 'admin', '', '', '', '', 0, '', 0, '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventinfo`
--
ALTER TABLE `eventinfo`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `eventregister_info`
--
ALTER TABLE `eventregister_info`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
