-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2018 at 04:58 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akademi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_mahasiswa` varchar(7) NOT NULL,
  `id_biaya` varchar(6) NOT NULL,
  `total_biaya` varchar(10) NOT NULL,
  `tanggal_pembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_mahasiswa`, `id_biaya`, `total_biaya`, `tanggal_pembayaran`) VALUES
('MHS001', '412123', '300000', '25-01-2000'),
('MHS001', '1231', '1231321', '25-01-2000'),
('MHS001', 'BS005', '2070000', '27-07-2018'),
('MHS001', 'BS005', '2070000', '27-07-2018'),
('MHS001', 'BS006', '600000', '27-07-2018'),
('MHS001', 'BS005', '2070000', '27-07-2018'),
('MHS001', 'BS001', '360000', '27-07-2018'),
('MHS001', 'BS006', '600000', '27-07-2018'),
('MHS001', 'BS006', '600000', '27-07-2018'),
('MHS001', 'BS005', '2070000', '27-07-2018'),
('MHS001', 'BS001', '360000', '27-07-2018'),
('MHS002', 'BS005', '2070000', '27-07-2018'),
('MHS002', 'BS006', '600000', '27-07-2018'),
('MHS005', '', '', '27-07-2018'),
('MHS005', '', '', '27-07-2018'),
('MHS002', '', '', '27-07-2018'),
('MHS002', 'BS006', '600000', '27-07-2018'),
('MHS003', 'BS005', '2070000', '27-07-2018'),
('MHS005', 'BS005', '2070000', '27-07-2018'),
('MHS001', 'BS005', '2070000', '27-07-2018'),
('MHS005', 'BS006', '600000', '27-07-2018'),
('MHS001', 'BS006', '600000', '27-07-2018'),
('MHS002', 'BS006', '600000', '27-07-2018'),
('MHS005', 'BS006', '600000', '27-07-2018'),
('MHS005', 'BS006', '600000', '27-07-2018'),
('MHS003', 'BS005', '2070000', '27-07-2018'),
('MHS005', 'BS006', '600000', '27-07-2018'),
('MHS003', 'BS005', '2070000', '27-07-2018'),
('MHS003', 'BS001', '360000', '27-07-2018'),
('MHS002', 'BS005', '2070000', '30-07-2018'),
('MHS002', 'BS005', '2070000', '30-07-2018'),
('MHS002', 'BS006', '600000', '30-07-2018'),
('MHS002', '', '', '30-07-2018'),
('MHS002', 'BS005', '2070000', '30-07-2018'),
('MHS002', 'BS006', '600000', '30-07-2018'),
('MHS003', 'BS006', '600000', '30-07-2018'),
('MHS002', 'BS005', '2070000', '30-07-2018'),
('MHS001', 'BS005', '2070000', '30-07-2018'),
('MHS005', 'BS005', '2070000', '30-07-2018'),
('MHS005', '', '', '30-07-2018'),
('MHS005', 'BS005', '2070000', '30-07-2018'),
('MHS005', '', '', '30-07-2018'),
('MHS005', '', '', '30-07-2018'),
('MHS001', 'BS005', '2070000', '30-07-2018');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
