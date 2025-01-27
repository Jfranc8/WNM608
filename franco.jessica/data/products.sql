-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 06, 2022 at 11:26 AM
-- Server version: 5.7.38-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `JFWNM608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `email`, `url`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'plant', 'plant@indoors.com', 'https://plant.com', 10.00, 'shrub', '2022-07-20 22:08:14', '2022-07-20 22:08:14', 'Plants are great to incorporate into your home.', '1.jpg', '1.jpg,2.jpg,3.jpg'),
(2, 'schefflera arboricola', 'scheffleraarboricola@indoors.com', 'https://scheffleraarboricola@indoors.com', 72.36, 'shrub', '2022-07-20 22:31:43', '2022-07-20 22:31:43', 'Schefflera arboricola is a great houseplant.', 'shrub_scheffleraarboricola_thumb.jpg', 'shrub_scheffleraarboricola_1.jpg,shrub_scheffleraarboricola_2.jpg'),
(3, '', '', '', 0.00, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(4, '', '', '', 0.00, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg,7.jpg,8.jpg,9.jpg,10.jpg,11.jpg,12.jpg'),
(5, '', '', '', 0.00, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(6, '', '', '', 0.00, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg,7.jpg,8.jpg,9.jpg,10.jpg,11.jpg,12.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
