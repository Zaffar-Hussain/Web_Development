-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 06:05 PM
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
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_info`
--

CREATE TABLE `application_info` (
  `appl_id` int(10) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `job_id` int(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `appl_date` date NOT NULL,
  `job_status` varchar(20) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_info`
--

INSERT INTO `application_info` (`appl_id`, `uid`, `job_id`, `status`, `appl_date`, `job_status`, `remarks`) VALUES
(3, '4dm16is054', 3, 'applied', '2019-07-31', 'selected', 'good'),
(4, '4dm16is054', 4, 'applied', '2019-07-31', 'selected', 'good'),
(5, '4dm16is049', 1, 'applied', '2019-08-03', 'selected', 'good'),
(6, '4dm16is054', 1, 'applied', '2020-05-21', 'not seen by recruite', 'nill'),
(7, 'zafar', 4, 'applied', '2020-05-21', 'not seen by recruite', 'nill'),
(8, 'zafar', 1, 'applied', '2020-05-21', 'not seen by recruite', 'nill'),
(9, 'zafar', 2, 'applied', '2020-05-21', 'not seen by recruite', 'nill'),
(10, 'zafar', 3, 'applied', '2020-05-21', 'not seen by recruite', 'nill');

-- --------------------------------------------------------

--
-- Table structure for table `jobinfo`
--

CREATE TABLE `jobinfo` (
  `job_id` int(10) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `job_desc` varchar(100) NOT NULL,
  `comp_name` varchar(50) NOT NULL,
  `comp_det` varchar(100) NOT NULL,
  `location` varchar(20) NOT NULL,
  `no_of_vacancy` int(10) NOT NULL,
  `exp_needed` int(5) NOT NULL,
  `package` int(10) NOT NULL,
  `domain` varchar(30) NOT NULL,
  `catagory` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `skills` varchar(30) NOT NULL,
  `post_date` date NOT NULL,
  `end_date` date NOT NULL,
  `camp_inter_date` date NOT NULL,
  `inter_req` varchar(30) NOT NULL,
  `posted` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobinfo`
--

INSERT INTO `jobinfo` (`job_id`, `job_title`, `job_desc`, `comp_name`, `comp_det`, `location`, `no_of_vacancy`, `exp_needed`, `package`, `domain`, `catagory`, `course`, `skills`, `post_date`, `end_date`, `camp_inter_date`, `inter_req`, `posted`) VALUES
(1, 'coding', 'coding in java', 'code camp', 'java coders organisation', 'mangalore', 5, 2, 100000, 'technical', 'walk-in', 'ISE', 'java coding', '2019-07-24', '2019-08-24', '2019-07-28', 'aptitude,technical,java', 'yes'),
(2, 'game', 'play games', 'gamers', 'gaming company', 'mangalore', 5, 2, 10000, 'IT', 'freshers', 'Computer Science', 'gaming', '2019-07-21', '2019-08-21', '2019-07-25', 'mobile', 'yes'),
(3, 'football', 'play football', 'football club bajpe', 'football club', 'bajpe', 11, 2, 2000000, 'statistic', 'freshers', 'gaming', 'playing', '2019-07-24', '2019-08-24', '2019-07-28', 'dribling,attacking,defence', 'yes'),
(4, 'fbn', 'cvbn', 'vbn', 'vbn', 'bnm', 1, 2, 2, 'vbn', 'bn', 'vbn', 'vbn', '2019-07-30', '2019-08-30', '2019-08-05', 'dfghj', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `selection_info`
--

CREATE TABLE `selection_info` (
  `sid` int(20) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `jid` int(10) NOT NULL,
  `mob_no` varchar(10) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `sel_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selection_info`
--

INSERT INTO `selection_info` (`sid`, `uid`, `jid`, `mob_no`, `mail`, `sel_date`) VALUES
(3, '4dm16is054', 3, '6745363534', 'tush@gmail.com', '2019-06-10'),
(4, '4dm16is001', 2, '8787656765', 'katta@gmail.com', '2019-08-20'),
(5, '4dm16is001', 3, '8787656765', 'katta@gmail.com', '2019-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `uid` varchar(10) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `question` varchar(50) NOT NULL,
  `answer` varchar(20) NOT NULL,
  `mob_no` varchar(10) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `collage_name` varchar(30) NOT NULL,
  `mark_10th` int(4) NOT NULL,
  `mark_12th` int(4) NOT NULL,
  `cgpa` int(4) NOT NULL,
  `pass_year` int(4) NOT NULL,
  `domain` varchar(30) NOT NULL,
  `catagory` varchar(30) NOT NULL,
  `course` varchar(20) NOT NULL,
  `skills` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `user_registered` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`uid`, `pwd`, `type`, `question`, `answer`, `mob_no`, `mail`, `collage_name`, `mark_10th`, `mark_12th`, `cgpa`, `pass_year`, `domain`, `catagory`, `course`, `skills`, `date`, `user_registered`) VALUES
('4dm16is049', '4321', 'user', 'Favorite movie?', 'boss', '0987654321', 'tejas@gmail.com', 'yenepoya', 600, 600, 10, 2020, 'IT', 'walk-in', 'cse', 'singing', '2019-07-28', 'yes'),
('4dm16is054', '123', 'user', 'Your nick name?', 'zaffa', '1234567890', 'zafar@gmail.com', 'yit', 625, 600, 10, 2020, 'IT', 'freshers', 'ise', 'coding', '2019-07-27', 'yes'),
('dfdsf', '111', 'user', 'Name of the first school you studied?', 'dsa', '32432', 'fsfd', 'ff', 22, 22, 2, 2222, 'IIT', 'Fresher', '', 'Web development', '2019-10-25', 'yes'),
('zafar', '111', 'admin', 'favorite movie?', 'Avengers', '', '', '', 0, 0, 0, 0, '', '', '', '', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_info`
--
ALTER TABLE `application_info`
  ADD PRIMARY KEY (`appl_id`);

--
-- Indexes for table `jobinfo`
--
ALTER TABLE `jobinfo`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `selection_info`
--
ALTER TABLE `selection_info`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
