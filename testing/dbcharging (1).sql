-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2016 at 07:20 AM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcharging`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbcharging`
--

CREATE TABLE `tbcharging` (
  `id` int(6) UNSIGNED NOT NULL,
  `arus1` int(6) DEFAULT NULL,
  `tegangan1` int(6) DEFAULT NULL,
  `daya1` int(6) DEFAULT NULL,
  `arus2` int(6) DEFAULT NULL,
  `tegangan2` int(6) DEFAULT NULL,
  `daya2` int(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcharging`
--

INSERT INTO `tbcharging` (`id`, `arus1`, `tegangan1`, `daya1`, `arus2`, `tegangan2`, `daya2`) VALUES
(1, 1, 2, 3, 4, 5, 6),
(2, 1, 2, 3, 4, 5, 6),
(3, 3, 3, 4, 5, 5, 6),
(4, 3, 3, 4, 5, 5, 6),
(5, 4, 4, 4, 4, 4, 4),
(6, 4, 4, 4, 4, 4, 4),
(7, 4, 4, 5, 6, 7, 9),
(8, 4, 4, 5, 6, 7, 9),
(9, 7, 7, 7, 7, 7, 7),
(10, 7, 7, 7, 7, 7, 7),
(11, 1, 2, 3, 4, 5, 6),
(12, 1, 2, 3, 4, 5, 6),
(13, 1, 2, 3, 4, 5, 7),
(14, 1, 2, 3, 4, 5, 8),
(15, 1, 2, 3, 4, 5, 9),
(16, 1, 2, 3, 4, 5, 9),
(17, 55, 56, 57, 68, 77, 89),
(18, 55, 89, 88, 99, 9000, 56),
(19, 4, 56, 8, 8, 9, 19),
(20, 4, 56, 8, 8, 9, 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcharging`
--
ALTER TABLE `tbcharging`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcharging`
--
ALTER TABLE `tbcharging`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
