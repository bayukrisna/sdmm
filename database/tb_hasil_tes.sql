-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2018 at 03:38 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.1.18

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
-- Table structure for table `tb_hasil_tes`
--

CREATE TABLE `tb_hasil_tes` (
  `id_hasil_tes` varchar(6) NOT NULL,
  `nilai_mat` int(11) NOT NULL,
  `nilai_bing` int(11) NOT NULL,
  `nilai_psikotes` int(11) NOT NULL,
  `total_nilai` int(11) NOT NULL,
  `grade_tes` varchar(1) NOT NULL,
  `id_pendaftaran2` varchar(6) NOT NULL,
  `tanggal_hasil_tes` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_hasil_tes`
--
ALTER TABLE `tb_hasil_tes`
  ADD PRIMARY KEY (`id_hasil_tes`),
  ADD KEY `no_pendaftaran` (`id_pendaftaran2`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
