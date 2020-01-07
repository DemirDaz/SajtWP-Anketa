-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2020 at 01:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gz_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrovani`
--

CREATE TABLE `registrovani` (
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `odg1` varchar(10) NOT NULL,
  `odg2` varchar(10) NOT NULL,
  `odg3` varchar(10) NOT NULL,
  `odg4` varchar(10) NOT NULL,
  `odg5` varchar(10) NOT NULL,
  `odg6` varchar(10) NOT NULL,
  `odg7` varchar(10) NOT NULL,
  `odg8` varchar(10) NOT NULL,
  `odg9` varchar(10) NOT NULL,
  `odg10` varchar(10) NOT NULL,
  `odg11` varchar(10) NOT NULL,
  `odg12` varchar(10) NOT NULL,
  `odg13` varchar(10) NOT NULL,
  `odg14` varchar(10) NOT NULL,
  `odg15` varchar(10) NOT NULL,
  `datum` date NOT NULL,
  `poruka` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrovani`
--

INSERT INTO `registrovani` (`username`, `email`, `odg1`, `odg2`, `odg3`, `odg4`, `odg5`, `odg6`, `odg7`, `odg8`, `odg9`, `odg10`, `odg11`, `odg12`, `odg13`, `odg14`, `odg15`, `datum`, `poruka`) VALUES
('dalce', 'dalce@live.com', 'C', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-01-04', ''),
('debugi', 'debugi@live.com', '', 'C', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-01-04', ''),
('demki', 'demki@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-01-04', ''),
('demo', 'demo@live.com', 'B', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-01-04', ''),
('hajah', 'hajah@jatebe.com', 'B', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-01-04', ''),
('hocu', 'hocu@svima.com', 'B', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-01-04', ''),
('jacu', 'jacu@gmail.com', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-01-04', ''),
('mica', 'mica@live.com', 'C', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-01-04', ''),
('nece', 'nece@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-01-04', ''),
('neke@gmail.com', 'neke@gmail.com', 'B', 'C', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-01-04', ''),
('student', 'student@gmail.com', 'B', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-01-04', ''),
('zeljenoime', 'zeljenoime@live.com', 'C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-01-04', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrovani`
--
ALTER TABLE `registrovani`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
