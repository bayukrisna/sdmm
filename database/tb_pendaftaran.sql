-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 06:35 AM
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
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` varchar(6) NOT NULL,
  `tanggal_pendaftaran` date NOT NULL,
  `nama_pendaftar` varchar(50) NOT NULL,
  `jk_pendaftar` varchar(20) NOT NULL,
  `id_sekolah2` varchar(6) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `waktu` varchar(10) NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `id_prodi2` varchar(6) NOT NULL,
  `sumber` varchar(30) NOT NULL,
  `ibu_kandung` varchar(30) NOT NULL,
  `bukti_transfer` text NOT NULL,
  `agama` varchar(10) NOT NULL,
  `id_du2` varchar(6) NOT NULL,
  `f1` text NOT NULL,
  `f2` text NOT NULL,
  `f3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tanggal_pendaftaran`, `nama_pendaftar`, `jk_pendaftar`, `id_sekolah2`, `jurusan`, `alamat`, `email`, `no_telp`, `waktu`, `status_bayar`, `id_prodi2`, `sumber`, `ibu_kandung`, `bukti_transfer`, `agama`, `id_du2`, `f1`, `f2`, `f3`) VALUES
('TM001', '2018-07-12', 'Paris ', 'laki-laki', 'SE001', 'ipa', 'Los Angeles', 'yoona@gmail.com', '9876', 'Pagi', 'F1', 'PR001', 'ipa', 'ELy', 'IMG.jpg', 'Kristen', 'DU001', 'cobaf12hjg', 'sudah yaaa', 'f3yw'),
('TM002', '2018-07-12', 'Ariana', 'laki-laki', 'SE002', 'ips', 'Los Angeles', 'as@asd.sads', '546546', 'Sore', 'Lunas', 'PR001', 'ipa', 'ELy', 'IMG_00011.jpg', 'Budha', 'DU002', '', '', '0'),
('TM003', '2018-07-12', 'Jessica Jung', 'perempuan', 'SE001', 'ipa', 'Korea', 'jessca@gmail.com', '074875937', 'Sore', 'Lunas', 'PR001', 'ips', 'ELy', 'IMG_0009.jpg', 'Konghuchu', 'DU003', '', '', '0'),
('TM004', '2018-07-13', 'Paris ', 'laki-laki', 'SE002', 'ipa', 'Los Angeles', 'as@asd.sads', '907876', 'Pagi', 'Lunas', 'PR001', 'ipa', 'ELy', 'IMG_00023.jpg', 'Kristen', 'DU123', '', '', '0'),
('TM005', '2018-07-13', 'Paris ', 'laki-laki', 'SE001', 'ips', 'Los Angeles', 'yoona@gmail.com', '9876', 'Sore', 'Lunas', 'PR001', 'ipa', 'ELy', 'IMG_0003.jpg', 'Islam', '7986t', '', '', '0'),
('TM007', '2018-07-13', 'Jessica Jung', 'perempuan', 'SE001', 'ipa', 'Los Angeles', 'yoona@gmail.com', '34646', 'Sore', 'Lunas', 'PR001', 'ipa', 'ELy', 'jic2.pdf', 'Budha', '98765', '', '', '0'),
('TM008', '2018-07-16', 'Sasa', 'perempuan', 'SE001', 'ipa', 'France', 'yoona@gmail.com', '8967', 'Pagi', 'Lunas', 'PR002', 'ips', 'ELy', 'IMG_00012.jpg', 'Budha', '343453', '', '', '0'),
('TM009', '2018-07-16', 'Paris ', 'laki-laki', 'SE001', 'ipa', 'Los Angeles', 'yoona@gmail.com', '9876', 'Pagi', 'Daftar Ulang', 'PR001', 'ipa', 'ELy', 'AdminLTE_2___General_Form_Elements.pdf', 'Budha', '89765', '', '', '0'),
('TM010', '2018-07-16', 'yaaa', 'laki-laki', 'SE001', 'ipa', 'Los Angeles', 'yoona@gmail.com', '98765', 'Pagi', 'Daftar Ulang', 'PR001', 'ipa', 'ELy', 'Hasil_Tes.pdf', 'Budha', '9786', '', '', '0'),
('TM011', '2018-07-16', 'yaaas', 'laki-laki', 'SE001', 'ipa', 'Los Angeles', 'yoona@gmail.com', '535', 'Pagi', 'Proses Pengecekan', 'PR001', 'rpl', 'ELy', 'IMG_0005.jpg', 'Islam', '', '', '', '0'),
('TM012', '2018-07-17', 'Jessica Jung', 'perempuan', 'SE001', 'ipa', 'Los Angeles', 'as@asd.sads', '9786', 'Pagi', 'Tamu', 'PR001', 'student_get_student', 'ELy', '', 'Budha', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
