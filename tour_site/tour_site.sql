-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 05:41 PM
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
-- Database: `tour_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `detail_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`detail_id`, `name`, `phone_number`, `email`, `message`) VALUES
(0, 'zafar', '12345', 'z@gmail.com', 'hi bro'),
(1, 'zaf', '234432', 'a@gmail.com', 'hdjdj kdsh'),
(2, 'Manaf', '2345657', 'manaf@gmail.com', 'Can i book the tourism.');

-- --------------------------------------------------------

--
-- Table structure for table `tour_package_images`
--

CREATE TABLE `tour_package_images` (
  `id` int(10) NOT NULL,
  `image_1` varchar(100) NOT NULL,
  `image_2` varchar(100) NOT NULL,
  `image_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tour_package_info`
--

CREATE TABLE `tour_package_info` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `images` int(10) NOT NULL,
  `overview` varchar(500) NOT NULL,
  `plan` int(10) NOT NULL,
  `no_of_days` int(10) NOT NULL,
  `no_of_nights` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tour_package_plan`
--

CREATE TABLE `tour_package_plan` (
  `id` int(10) NOT NULL,
  `day_1` varchar(100) NOT NULL,
  `day_2` varchar(100) NOT NULL,
  `day_3` varchar(100) NOT NULL,
  `day_4` varchar(100) NOT NULL,
  `day_5` varchar(100) NOT NULL,
  `day_6` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `password`, `type`) VALUES
('zafar', '123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `tour_package_images`
--
ALTER TABLE `tour_package_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_package_info`
--
ALTER TABLE `tour_package_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plan` (`plan`),
  ADD KEY `images` (`images`);

--
-- Indexes for table `tour_package_plan`
--
ALTER TABLE `tour_package_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tour_package_info`
--
ALTER TABLE `tour_package_info`
  ADD CONSTRAINT `tour_package_info_ibfk_1` FOREIGN KEY (`plan`) REFERENCES `tour_package_plan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tour_package_info_ibfk_2` FOREIGN KEY (`images`) REFERENCES `tour_package_images` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
