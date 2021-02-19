-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2020 at 08:02 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diabetes`
--

-- --------------------------------------------------------

--
-- Table structure for table `adlogin`
--

CREATE TABLE `adlogin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` char(1) NOT NULL,
  `gender` char(1) NOT NULL,
  `cpassword` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `password`, `status`, `gender`, `cpassword`) VALUES
(1, 'liben', 'liban@liben.com', '123', 'd', 'm', ''),
(2, 'Liiban', 'liban@gmail.com', '1234', 'd', 'm', ''),
(3, 'caltu', 'liban@caltu.com', '1234', 'd', 'f', ''),
(4, 'caltu', 'liben@ana.com', '1234', 'd', 'f', ''),
(5, 'nura', 'nura@gmail.com', '12345', 'p', 'm', ''),
(6, 'boru', 'boru@br.com', 'boru', 'p', 'm', ''),
(9, 'Abdii', 'Abdii@abdii.com', '123456', 'd', 'm', ''),
(10, 'boontu', 'boontu@bontu.com', '123456', 'p', 'f', ''),
(11, 'sora', 'sora@gmail.com', '9876', 'a', 'm', ''),
(12, 'biftu', 'biiftu@biiftu.com', '123456789', 'd', 'f', '');

-- --------------------------------------------------------

--
-- Table structure for table `reset`
--

CREATE TABLE `reset` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reset`
--

INSERT INTO `reset` (`id`, `email`, `key`, `expDate`) VALUES
(0, 'biiftu@biiftu.com', '768e78024aa8fdb9b8fe87be86f64745f0eddfc63e', '2020-09-01 19:33:16.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adlogin`
--
ALTER TABLE `adlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset`
--
ALTER TABLE `reset`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
