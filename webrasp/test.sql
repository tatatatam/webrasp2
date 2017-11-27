-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 06:14 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `datatable`
--

CREATE TABLE `datatable` (
  `id` int(11) NOT NULL,
  `data` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_water_table`
--

CREATE TABLE `table_water_table` (
  `id` int(11) NOT NULL,
  `water` varchar(20) NOT NULL,
  `updatetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timecontrol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_water_table`
--

INSERT INTO `table_water_table` (`id`, `water`, `updatetime`, `timecontrol`) VALUES
(1, '2', '2017-11-22 22:04:36', '3'),
(2, '2', '2017-11-22 22:31:27', '3'),
(3, '2', '2017-11-23 00:26:50', '3'),
(4, '2', '2017-11-26 13:57:08', '3'),
(5, '2', '2017-11-26 14:16:41', '3'),
(6, '2', '2017-11-26 16:56:33', '3'),
(7, '2', '2017-11-26 16:57:04', '3'),
(8, '2', '2017-11-27 15:38:04', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datatable`
--
ALTER TABLE `datatable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_water_table`
--
ALTER TABLE `table_water_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datatable`
--
ALTER TABLE `datatable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_water_table`
--
ALTER TABLE `table_water_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
