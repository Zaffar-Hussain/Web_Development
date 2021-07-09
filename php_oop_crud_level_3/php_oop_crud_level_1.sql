-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 30, 2020 at 09:08 PM
-- Server version: 5.7.30-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_oop_crud_level_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Fashion', '2014-06-01 00:35:07', '2014-05-30 12:04:33'),
(2, 'Electronics', '2014-06-01 00:35:07', '2014-05-30 12:04:33'),
(3, 'Motors', '2014-06-01 00:35:07', '2014-05-30 12:04:54');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(512) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category_id`, `image`, `created`, `modified`) VALUES
(1, 'LG P880 4X HD', 'My first awesome phone!', 336, 3, '', '2014-06-01 01:12:26', '2014-05-31 11:42:26'),
(2, 'Google Nexus 4', 'The most awesome phone of 2013!', 299, 2, '', '2014-06-01 01:12:26', '2014-05-31 11:42:26'),
(3, 'Samsung Galaxy S4', 'How about no?', 600, 3, '', '2014-06-01 01:12:26', '2014-05-31 11:42:26'),
(6, 'Bench Shirt', 'The best shirt!', 29, 1, '', '2014-06-01 01:12:26', '2014-05-30 20:42:21'),
(7, 'Lenovo Laptop', 'My business partner.', 399, 2, '', '2014-06-01 01:13:45', '2014-05-30 20:43:39'),
(8, 'Samsung Galaxy Tab 10.1', 'Good tablet.', 259, 2, '', '2014-06-01 01:14:13', '2014-05-30 20:44:08'),
(9, 'Spalding Watch', 'My sports watch.', 199, 1, '', '2014-06-01 01:18:36', '2014-05-30 20:48:31'),
(10, 'Sony Smart Watch', 'The coolest smart watch!', 300, 2, '', '2014-06-06 17:10:01', '2014-06-05 12:39:51'),
(11, 'Huawei Y300', 'For testing purposes.', 100, 2, '', '2014-06-06 17:11:04', '2014-06-05 12:40:54'),
(12, 'Abercrombie Lake Arnold Shirt', 'Perfect as gift!', 60, 1, '', '2014-06-06 17:12:21', '2014-06-05 12:42:11'),
(13, 'Abercrombie Allen Brook Shirt', 'Cool red shirt!fff', 70, 1, '', '2014-06-06 17:12:59', '2014-06-05 12:42:49'),
(25, 'Abercrombie Allen Anew Shirt', 'Awes', 999, 1, '', '2014-11-22 18:42:13', '2014-11-21 14:12:13'),
(26, 'Another product', 'Awesome product!', 555, 2, '', '2014-11-22 19:07:34', '2014-11-21 14:37:34'),
(27, 'Bag', 'Awesome bag for you!', 999, 1, '', '2014-12-04 21:11:36', '2014-12-03 16:41:36'),
(28, 'Wallet', 'You can absolutely use this one!', 799, 1, '', '2014-12-04 21:12:03', '2014-12-03 16:42:03'),
(30, 'Wal-mart Shirt', 'ffdfdd', 555, 2, '', '2014-12-13 00:52:29', '2014-12-11 20:22:29'),
(31, 'Amanda Waller Shirt', 'New awesome shirt!', 333, 1, '', '2014-12-13 00:52:54', '2014-12-11 20:22:54'),
(32, 'Washing Machine Model PTRR', 'Some new product.', 999, 1, '', '2015-01-08 22:44:15', '2015-01-07 18:14:15'),
(40, '6', '6', 6, 2, '', '2020-01-02 20:54:15', '2020-01-02 19:54:15'),
(41, '7', '88', 88, 2, '', '2020-01-28 10:39:59', '2020-01-28 09:39:59'),
(42, 'hfhg', 'dfghvbjhn', 657, 1, '', '2020-01-31 05:56:37', '2020-01-31 04:56:37'),
(45, 'Kakashi', 'anime', 100000, 1, '2b47f702e14100716ece45f96c5f32fb9d8d1ab8-gt7Nn9.jpg', '2020-07-30 20:54:14', '2020-07-30 15:24:14'),
(46, 'kakashi', 'anime', 199999, 1, '2b47f702e14100716ece45f96c5f32fb9d8d1ab8-gt7Nn9.jpg', '2020-07-30 21:05:06', '2020-07-30 15:35:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
