-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2018 at 09:25 AM
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
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mahasiswa` varchar(7) NOT NULL,
  `id_du` varchar(15) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `id_status` varchar(2) NOT NULL,
  `id_konsentrasi` varchar(7) NOT NULL,
  `id_hasil_tes` varchar(7) NOT NULL,
  `id_sekolah` varchar(6) NOT NULL,
  `id_waktu` int(2) NOT NULL,
  `id_grade` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mahasiswa`, `id_du`, `nama_mahasiswa`, `nim`, `id_status`, `id_konsentrasi`, `id_hasil_tes`, `id_sekolah`, `id_waktu`, `id_grade`) VALUES
('M0003', '', 'Aldi', '999', '1', 'KO003', '', 'SE001', 1, '6'),
('M0004', '', 'Britney', '435', '2', 'KO003', '', '', 1, '5'),
('M0005', ' 9865', 'Paris ', '896875', '12', 'KO002', '', 'SE001', 1, ''),
('M0006', ' 87965', 'paris sore', '1111', '1', 'KO002', '', 'SE002', 2, '4'),
('M0007', ' 87g', 'new paris', '2222', '1', 'KO003', 'TES0002', 'SE001', 1, '3'),
('M0008', ' 54', 'Jessica Jung', '65645', '1', 'KO003', 'TES0003', 'SE001', 1, ''),
('M0009', '', 'Ariana', '4444', '1', 'KO003', '', '', 1, '1'),
('M0010', '', 'Katy', '55555', '1', 'KO002', '', '', 2, '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
