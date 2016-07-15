-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2016 at 09:23 PM
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
-- Table structure for table `signup_driver`
--

CREATE TABLE `signup_driver` (
  `id` int(11) NOT NULL,
  `firstname` varchar(33) NOT NULL,
  `lastname` varchar(33) NOT NULL,
  `email` varchar(33) NOT NULL,
  `password` int(11) NOT NULL,
  `city` varchar(33) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `through` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup_driver`
--

INSERT INTO `signup_driver` (`id`, `firstname`, `lastname`, `email`, `password`, `city`, `phone`, `through`) VALUES
(150, 'Muhammad', 'ahmed', 'ahmed.nhu@yahoo.com', 314285693, 'karachi', 3433604953, 'Other'),
(150, 'Muhammad', 'ahmed', 'ahmed.nhu@yahoo.com', 314285693, 'karachi', 3433604953, 'Other'),
(148, 'shahzaib', 'khan', 'shazaib.shez11@yahoo.com', 0, 'karachi', 3433604953, 'Friends & Family'),
(151, 'muhammad', 'ammar', 'shazaib.shez11@yahoo.com', 555555555, 'karachi', 9000000009, 'TV Ad'),
(153, 'abc', 'xyz', 'shazaib.shez11@yahoo.com', 555555555, 'karachi', 3433604953, 'Social networks'),
(153, 'ali', 'ahsan', 'ali@gmail.com', 666666666, 'karachi', 11111111111, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `signup_user`
--

CREATE TABLE `signup_user` (
  `id` int(11) NOT NULL,
  `person` varchar(12) NOT NULL,
  `username` varchar(22) NOT NULL,
  `email` varchar(33) NOT NULL,
  `paswd` varchar(33) NOT NULL,
  `c_paswd` varchar(33) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `city` varchar(33) NOT NULL,
  `adress` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup_user`
--

INSERT INTO `signup_user` (`id`, `person`, `username`, `email`, `paswd`, `c_paswd`, `phone_no`, `city`, `adress`) VALUES
(0, '', 'shahzaib', 'shazaib.shez11@yahoo.com', '666', '666', 2147483647, 'KARACHI', '906'),
(0, 'Mrs', 'ali', 'shazaib.shez11@yahoo.com', '900', '900', 876, 'khi', 'tyuo'),
(0, '', '', '', '33', '33', 0, '', ''),
(0, 'Mr', 'SSS', 'shazaib.shez11@yahoo.com', '77799999', '77799999', 314, 'KARACHI', '90OO'),
(0, 'Mr', 'SSS', 'shazaib.shez11@yahoo.com', '99999999', '99999999', 314, 'KARACHI', '90OO'),
(0, 'Mr', 'shhh', 'sheza14shahid@gmail.com', '2147483647', '2147483647', 314, 'karachi', '0opp'),
(0, 'Mr', 'shhh', 'sheza14shahid@gmail.com', '0', '0', 314, 'karachi', '0opp'),
(0, 'Mr', 'ammar alam ', 'shazaib.shez11@yahoo.com', '55665555', '55665555', 314, '', ''),
(0, 'Mr', 'ammar alam ', 'shazaib.shez11@yahoo.com', '88888888', '88888888', 314, 'karachi', '901'),
(0, 'Mrs', 'shahzaib', 'shazaib.shez11@yahoo.com', '123456789', '123456789', 0, 'karachi', '90gg'),
(0, 'Mr', 'shahzaib', 'shazaib.shez11@yahoo.com', '0', '0', 2147483647, 'karachi', '09569'),
(0, 'Mr', 'shahzaibss', 'shazaib.shez11@yahoo.com', '0', '0', 2147483647, 'karachi', '09569'),
(0, 'Mr', 'shah', 'shazaib.shez11@yahoo.com', 'khankhan', 'khankhan', 2147483647, 'karachi', '09569');

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
  `phone` bigint(20) NOT NULL,
  `select_driver` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_driver`
--

INSERT INTO `tb_driver` (`id`, `firstname`, `lastname`, `email`, `password`, `city`, `phone`, `select_driver`) VALUES
(150, 'Shahzaib', 'Khan', 'shazaib.shez11@yahoo.com', '33333333', 'karachi', 3433604953, 'Other'),
(152, 'shahzaib', 'khan', 'shazaib.shez11@yahoo.com', '444444444', 'karachi', 3433604953, 'TV Ad');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
