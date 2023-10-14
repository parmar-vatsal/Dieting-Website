-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 05:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvadiet`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Name` varchar(30) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Wight` int(255) DEFAULT NULL,
  `Bdate` date DEFAULT NULL,
  `Message` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Name`, `Email`, `Wight`, `Bdate`, `Message`) VALUES
('Paresh', 'etertert@gmail.com', 3, '2023-06-26', 'werwerwert'),
('Vatsal', 'sjdgfu@gmail.com', 50, '2023-06-13', 'sertrdet'),
('paresh', 'home@gmail.com', 150, '2023-06-20', 'ueygiuweafgeriuygf');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Full Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Full Name`, `Email`, `password`) VALUES
('Jenish', 'jenish@gmail.com', 'Jenish@2008'),
('Jenish', 'jenjish213@gmail.com', 'Jenish@2008'),
('Vatsal Parmar', 'vatsalparmar5055@gmail.com', 'Vatsal@2008');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
