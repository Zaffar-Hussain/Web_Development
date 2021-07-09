-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2019 at 06:57 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cab_reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `billno` int(10) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `cabid` int(10) NOT NULL,
  `routeid` int(10) NOT NULL,
  `jdate` date NOT NULL,
  `advance` float NOT NULL,
  `bookdate` date NOT NULL,
  `canceldate` date NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`billno`, `userid`, `cabid`, `routeid`, `jdate`, `advance`, `bookdate`, `canceldate`, `remarks`) VALUES
(1, 'Preeti102', 115, 7, '2019-08-04', 1142, '2019-08-01', '2019-08-01', 'Allowance is too high'),
(2, 'Lavanya09', 113, 8, '2019-08-04', 2494, '2019-08-01', '0000-00-00', ''),
(3, 'Lavanya09', 114, 4, '2019-11-11', 704, '2019-08-07', '2019-08-07', 'I need to change journey date'),
(4, 'Lavanya09', 120, 7, '2019-08-10', 1210, '2019-08-07', '2019-08-09', 'Allowance is too high'),
(5, 'Lavanya09', 120, 9, '0000-00-00', 2830, '2019-08-09', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `cab`
--

CREATE TABLE `cab` (
  `cabid` int(10) NOT NULL,
  `cabname` varchar(25) NOT NULL,
  `category` varchar(25) NOT NULL,
  `driver_name` varchar(25) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `dphone` int(12) NOT NULL,
  `cstatus` varchar(10) NOT NULL,
  `no_of_seats` int(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `rate_km` float NOT NULL,
  `advance` float NOT NULL,
  `allowance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cab`
--

INSERT INTO `cab` (`cabid`, `cabname`, `category`, `driver_name`, `regno`, `dphone`, `cstatus`, `no_of_seats`, `type`, `rate_km`, `advance`, `allowance`) VALUES
(111, 'swift', 'mini', 'jose', 'KA-19-D-3270', 987757490, 'available', 5, 'AC', 7, 0, 650),
(112, 'Ritz', 'sedan', 'jack', 'KA-19-EZ-1040', 985568498, 'Available', 6, 'AC', 9.5, 0, 700),
(113, 'etios', 'prime', 'suv', 'KA-19-X-3756', 988007645, 'available', 8, 'AC', 13, 0, 900),
(114, 'etios', 'prime', 'suv', 'KA-19-X-3756', 988007645, 'available', 8, 'Non-AC', 10, 0, 0),
(115, 'Bolero', 'suv', 'ashok', 'KA-20-Z-8788', 786757665, 'available', 10, 'AC', 15, 33, 460),
(116, 'swift', 'mini', 'zafar', 'KA-19-EM-6578', 754621534, 'available', 5, 'AC', 15, 400, 650),
(117, 'swift', 'mini', 'tushar', 'KA-19-M-3935', 854679521, 'available', 5, 'Non-AC', 9, 0, 350),
(118, 'swift', 'mini', 'tejas', 'KA-20-EN-9842', 984651954, 'available', 5, 'AC', 15, 200, 550),
(119, 'Ford', 'sedan', 'manoj', 'KA-19-EM-6524', 854621458, 'available', 6, 'AC', 20, 400, 650),
(120, 'Bolero', 'prime', 'sunil', 'KA-19-EO-3541', 875642156, 'available', 8, 'AC', 15, 0, 800),
(121, 'Bolero', 'prime', 'nitin', 'KA-20-EN-5841', 785412658, 'available', 8, 'Non-AC', 12, 200, 600),
(122, 'Bolero', 'suv', 'rama', 'KA-19-Z-2568', 783547665, 'available', 10, 'AC', 15, 33, 460),
(123, 'Duster', 'sedan', 'amir', 'KA-19-M-6854', 985125468, 'available', 4, 'AC', 20, 1000, 500),
(124, 'swift', 'sedan', 'salman', 'KA-20-B-8547', 854762154, 'available', 5, 'AC', 20, 600, 1000),
(125, 'Bolero', 'suv', 'ramesh', 'KA-20-Z-8858', 786755665, 'available', 10, 'AC', 15, 33, 460),
(126, 'Bolero', 'suv', 'kartik', 'KA-21-Z-9788', 786753545, 'available', 10, 'AC', 15, 33, 460),
(127, 'Swift', 'SUV', 'Ashok', 'KA-19-X-3056', 2147483647, 'Available', 6, 'Non-AC', 24, 0.2, 290);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `routeid` int(10) NOT NULL,
  `source` varchar(15) NOT NULL,
  `dest` varchar(15) NOT NULL,
  `km` float NOT NULL,
  `routedet` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`routeid`, `source`, `dest`, `km`, `routedet`) VALUES
(1, 'Mangalore', 'Bangalore', 352, 'via Hasan'),
(2, 'Mangalore', 'Bangalore', 290, 'via Madikeri'),
(3, 'Bangalore', 'Kerala', 198, 'via Coimbatore'),
(4, 'Bangalore', 'Mangalore', 352, 'via Hasan'),
(5, 'Mangalore', 'Kerala', 100, 'via Kasaragod'),
(6, 'Kerala', 'Mangalore', 100, 'via Kasaragod'),
(7, 'Kerala', 'Bangalore', 350, 'via Mysore'),
(8, 'Mangalore', 'Mumbai', 890, 'via Goa'),
(9, 'Mumbai', 'Mangalore', 890, 'via Goa'),
(10, 'Mangalore', 'Pune', 650, 'via Kolhapur'),
(11, 'Bangalore', 'Mangalore', 460, 'via Madikeri');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `userid` varchar(50) NOT NULL,
  `pwd` varchar(15) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `que` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `atype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`userid`, `pwd`, `fullname`, `email`, `phone`, `gender`, `que`, `ans`, `atype`) VALUES
('david105', 'user55', 'david', 'david@gmail.com', '9548762154', 'M', 'what is your fav film?', 'golmaal', 'user'),
('Jacob101', 'user11', 'Jacob', 'Jacob@gmail.com', '9877657643', 'M', 'what is your height?', '6.5', 'admin'),
('Lavanya09', '12345', 'Lavanya', 'lav@gmail.com', '989788767', 'Femal', 'What is your favorite color?', 'pink', 'user'),
('Preeti102', 'user22', 'Preeti', 'preeti@gmail.com', '9877896523', 'F', 'what is your fav film?', 'titanic', 'user'),
('Seeta103', 'user33', 'Seeta', 'seeta@gmail.com', '8997123110', 'F', 'when is your birthday?', '03-11-1998', 'user'),
('smith104', 'user44', 'smith', 'smith@gmail.com', '9877044539', 'M', 'what is your hobby?', 'reading', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`billno`);

--
-- Indexes for table `cab`
--
ALTER TABLE `cab`
  ADD PRIMARY KEY (`cabid`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`routeid`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
