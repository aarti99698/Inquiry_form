-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 10:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inquiry`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(10) NOT NULL,
  `position` varchar(10) NOT NULL,
  `started` date NOT NULL,
  `document` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Id`, `fname`, `lname`, `email`, `phone`, `position`, `started`, `document`) VALUES
(22, 'aarti', 'www', 'kashyapaarti007@gmail.com', 1234567888, 'B.tech', '2023-11-29', ''),
(23, 'asvvgm', 'www', 'kashyapaarti007@gmail.com', 1234567890, 'MCA', '0000-00-00', 'New Text D'),
(25, 'alka', 'kumari', 'alka@gmail.com', 1234567890, 'MCA', '0000-00-00', ''),
(26, 'dsadas', 'fs', 'sfdsfs@gmail.com', 2147483647, 'MCA', '0000-00-00', ''),
(27, 'hema', 'chauhan', 'hemac@gmail.com', 1234567890, 'BCA', '0000-00-00', 'Duplicheck'),
(28, 'madhuri', 'kkk', 'kashyapaarti007@gmail.com', 1234567890, 'MCA', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
