-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 11, 2023 at 12:06 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tma2`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bookmarks`
--

CREATE TABLE `Bookmarks` (
  `UID` int(11) NOT NULL,
  `URL` text NOT NULL,
  `bookmark_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Bookmarks`
--

INSERT INTO `Bookmarks` (`UID`, `URL`, `bookmark_date`) VALUES
(1, 'https://www.facebook.com', '2023-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `UID` int(11) NOT NULL,
  `name` varchar(120) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `password` varchar(120) DEFAULT NULL,
  `URL` text DEFAULT NULL,
  `date_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`UID`, `name`, `email`, `password`, `URL`, `date_time`) VALUES
(1, 'Amiel De Los Reyes', 'amielpogi4@yahoo.com', 'password', 'https://www.facebook.com', '2023-03-04'),
(2, 'Jaimie Cundangan', 'jaimie@gmail.com', 'password', 'https://www.youtube.com', '2023-03-07'),
(4, 'test', 'test@gmail.com', 'test', 'https://www.codepen.io', '2023-03-06'),
(5, 'ekup', 'ekup@gmail.com', 'test', 'https://www.github.com', '2023-03-05'),
(6, 'Art Tobias', 'art@gmail.com', 'artski', 'https://www.google.com', '2023-03-07'),
(7, 'Amiel De Los Reyes', NULL, NULL, 'https://test.com', '2022-01-01'),
(8, 'Amiel De Los Reyes', NULL, NULL, 'https://www.google.com', NULL),
(9, 'Migz Topacio', 'migz@gmail.com', 'password', NULL, NULL),
(10, 'Migz Topacio', NULL, NULL, 'https://twitter.com/', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bookmarks`
--
ALTER TABLE `Bookmarks`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Bookmarks`
--
ALTER TABLE `Bookmarks`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
