-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2016 at 01:05 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2016`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `config` (IN `server` VARCHAR(32), IN `username` VARCHAR(32), IN `password` VARCHAR(32), IN `dbname` VARCHAR(32))  NO SQL
SELECT * FROM `config` WHERE `server`="localhost" && `username`="root" && `password`="" && `dbname`="project2016"$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `server` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `dbname` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`server`, `username`, `password`, `dbname`) VALUES
('localhost', 'root', '', 'project2016'),
('localhost', 'shahzaib', 'shahid', 'karachi'),
('localhost', 'shahzaib', 'shahid', 'karachi'),
('localhost', 'shahzaib', 'shahid', 'karachi'),
('localhost', 'shahzaib', 'shahid', 'karachi'),
('localhost', 'shahzaib', 'shahid', 'karachi'),
('localhost', 'shahzaib', 'shahid', 'karachi'),
('localhost', 'shahzaib', 'shahid', 'karachi'),
('localhost', 'shahzaib', 'shahid', 'karachi'),
('localhost', 'ahmad', 'shahid', 'karachi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_driver`
--

CREATE TABLE `tb_driver` (
  `id` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `city` varchar(18) NOT NULL,
  `phone` int(11) NOT NULL,
  `select_driver` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_driver`
--

INSERT INTO `tb_driver` (`id`, `firstname`, `lastname`, `email`, `password`, `city`, `phone`, `select_driver`) VALUES
(5, 'shahzaib', 'khan', 'shezy@flicker.com', 'asas', 'karchi', 321485369, 'Other'),
(6, 'sas', 'asas', 'asas', 'asas', 'assa', 0, 'TV Ad'),
(7, 'sas', 'asas', 'asas', 'asas', 'assa', 0, 'TV Ad'),
(8, '', '', '', '', '', 0, 'none'),
(9, 'asas', 'asasas', 'asassa', 'sas', 'asas', 0, 'Social networks'),
(10, 'shahzaib', 'khan', 'shazaib.shez11@yahoo.com', 'sss', 'karachi', 314, 'Other'),
(11, 'shahzaib', 'khan', 'shazaib.shez11@yahoo.com', 'asasas', 'karachi', 314, 'Other'),
(12, 'shahzaib', 'khan', 'shazaib.shez11@yahoo.com', '12345', 'karachi', 31422, 'Other'),
(13, 'shahzaib', 'khan', 'shazaib.shez11@yahoo.com', 'sss', 'karachi', 31422444, 'Other'),
(14, 'shahzaib', 'khan', 'shazaib.shez11@yahoo.com', '333', 'karachi', 31422444, 'Other'),
(15, 'shahzaib', 'khan', 'shazaib.shez11@yahoo.com', '0000', 'karachi', 31422444, 'Other'),
(16, 'shahzaib', 'khan', 'shazaib.shez11@yahoo.com', '0000', 'karachi', 31422444, 'Other'),
(17, '', '', '', '', '', 0, 'none'),
(18, 'sdda', 'sdsa', 'asdasd', 'asdasd', 'asdasd', 0, 'Email'),
(19, 'sdda', 'sdsa', 'asdasd', '000', 'asdasd', 0, 'Email'),
(20, 'sdda', 'sdsa', 'asdasd', '000', 'asdasd', 0, 'Email');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_driver`
--
ALTER TABLE `tb_driver`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_driver`
--
ALTER TABLE `tb_driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
