-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 01:32 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `d_modul5`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_jurnal1`
--

CREATE TABLE IF NOT EXISTS `t_jurnal1` (
  `Nim` bigint(10) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Tgl` date NOT NULL,
  `jenkel` text NOT NULL,
  `jurusan` text NOT NULL,
  `fakultas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jurnal1`
--

INSERT INTO `t_jurnal1` (`Nim`, `Nama`, `Email`, `Tgl`, `jenkel`, `jurusan`, `fakultas`) VALUES
(6701170100, 'rifki', 'rifki@gmail.com', '1999-05-05', 'Laki-Laki', 'Manajemen Bisnis Telekomunikasi Informatika', 'FRI'),
(6701170100, 'rifki', 'rifki@gmail.com', '1999-05-05', 'Laki-Laki', 'Manajemen Bisnis Telekomunikasi Informatika', 'FRI'),
(6701170900, 'burhan', 'burhan@gmail.com', '2000-12-01', 'Perempuan', 'Teknik Industri', 'FIF'),
(6701178099, 'tasya', 'tasya@gmail.com', '1999-08-12', 'Perempuan', 'Manajemen Bisnis Telekomunikasi Informatika', 'FKB'),
(6701170100, 'rifki', 'burhan@gmail.com', '1999-12-01', 'Perempuan', 'Manajemen Bisnis Telekomunikasi Informatika', 'FKB'),
(6701170900, 'amaw', 'burhan@gmail.com', '2001-09-09', 'Laki-Laki', 'Manajemen Bisnis Telekomunikasi Informatika', 'FKB'),
(6701170900, 'tasya', 'tasya@gmail.com', '2008-09-09', 'Perempuan', 'Teknik Informatika', 'FIF'),
(6701168199, 'putri', 'putri@gmail.com', '1999-12-09', 'Perempuan', 'Manajmen Informatika', 'FIT');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
