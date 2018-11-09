-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2018 at 08:41 AM
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
-- Table structure for table `tb_detail_pembayaran`
--

CREATE TABLE `tb_detail_pembayaran` (
  `no` int(10) NOT NULL,
  `kode_pembayaran` varchar(6) NOT NULL,
  `id_mahasiswa` varchar(10) NOT NULL,
  `id_biaya` varchar(10) NOT NULL,
  `tanggal_pembayaran` varchar(20) NOT NULL,
  `kode_matkul` varchar(10) NOT NULL,
  `id_grade` varchar(2) NOT NULL,
  `potongan` int(10) NOT NULL,
  `denda` int(10) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_pembayaran`
--

INSERT INTO `tb_detail_pembayaran` (`no`, `kode_pembayaran`, `id_mahasiswa`, `id_biaya`, `tanggal_pembayaran`, `kode_matkul`, `id_grade`, `potongan`, `denda`, `keterangan`) VALUES
(16, 'KP001', '4546', 'BS005', '06-08-2018', '', '', 0, 0, ''),
(17, 'KP001', '4546', 'BS078', '06-08-2018', 'mk123', '', 0, 0, ''),
(18, 'KP002', '4546', 'BS006', '07-08-2018', '', '', 0, 0, ''),
(19, 'KP003', '4546', 'BS007', '07-08-2018', '', '', 0, 0, ''),
(20, 'KP004', '4546', 'BS008', '07-08-2018', '', '', 0, 0, ''),
(21, 'KP004', '4546', 'BS009', '07-08-2018', '', '', 0, 0, ''),
(22, 'KP004', '4546', 'BS010', '07-08-2018', '', '', 0, 0, ''),
(23, 'KP004', '4546', 'BS011', '07-08-2018', '', '', 0, 0, ''),
(24, 'KP004', '4546', 'BS012', '07-08-2018', '', '', 0, 0, ''),
(25, 'KP004', '4546', 'BS013', '07-08-2018', '', '', 0, 0, ''),
(26, 'KP005', '5435', 'BS041', '07-08-2018', '', '', 0, 0, ''),
(27, 'KP006', '23123', 'BS005', '09-08-2018', '', '', 0, 0, ''),
(28, 'KP007', 'M0004', 'BS005', '14-08-2018', '', '', 0, 0, ''),
(29, 'KP008', 'M0004', 'BS005', '14-08-2018', '', '2', 10000, 0, ''),
(30, 'KP009', 'M0004', 'BS005', '14-08-2018', '', '2', 0, 0, ''),
(31, 'KP010', 'M0004', 'BS005', '15-08-2018', '', '3', 0, 0, ''),
(32, 'KP011', 'M0004', 'BS078', '15-08-2018', '9834h', '3', 0, 0, ''),
(33, 'KP012', 'M0004', 'BS005', '15-08-2018', '', '3', 0, 0, 'Sakit'),
(34, 'KP013', 'M0004', 'BS005', '15-08-2018', '', '3', 0, 0, 'sss'),
(35, 'KP014', 'M0004', 'BS005', '15-08-2018', '', '3', 10000, 0, ''),
(36, 'KP015', 'M0004', 'BS005', '15-08-2018', '', '3', 10, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail_pembayaran`
--
ALTER TABLE `tb_detail_pembayaran`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_pembayaran`
--
ALTER TABLE `tb_detail_pembayaran`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
