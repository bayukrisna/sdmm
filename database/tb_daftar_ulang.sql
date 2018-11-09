-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2018 at 04:57 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_akademi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar_ulang`
--

CREATE TABLE IF NOT EXISTS `tb_daftar_ulang` (
  `no_du` varchar(6) NOT NULL,
  `nama_du` varchar(100) NOT NULL,
  `jk_daftar_du` varchar(12) NOT NULL,
  `tpt_lahir_du` varchar(20) NOT NULL,
  `tgl_lahir_du` date NOT NULL,
  `alamat_du` text NOT NULL,
  `no_telp_du` varchar(15) NOT NULL,
  `no_telpm_du` varchar(30) NOT NULL,
  `email_du` varchar(50) NOT NULL,
  `agama_du` text NOT NULL,
  `nik_du` varchar(50) NOT NULL,
  `ibu_kandung_du` text NOT NULL,
  `id_sekolah` varchar(5) NOT NULL,
  `id_prodi` varchar(5) NOT NULL,
  `id_konsentrasi` varchar(6) NOT NULL,
  `intake` varchar(6) NOT NULL,
  `waktu` text NOT NULL,
  `status` enum('aktif','non-aktif') NOT NULL,
  PRIMARY KEY (`no_du`),
  KEY `id_sekolah` (`id_sekolah`),
  KEY `id_prodi` (`id_prodi`),
  KEY `id_prodi_2` (`id_prodi`),
  KEY `id_konsentrasi` (`id_konsentrasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_daftar_ulang`
--

INSERT INTO `tb_daftar_ulang` (`no_du`, `nama_du`, `jk_daftar_du`, `tpt_lahir_du`, `tgl_lahir_du`, `alamat_du`, `no_telp_du`, `no_telpm_du`, `email_du`, `agama_du`, `nik_du`, `ibu_kandung_du`, `id_sekolah`, `id_prodi`, `id_konsentrasi`, `intake`, `waktu`, `status`) VALUES
('PE001', 'Aldi', 'Male', '', '2018-05-01', 'Malang', '0987654', '987654', 'aldi@gmail.com', 'islam', '98765', 'Bu Wati', 'SE001', 'PR002', '', '', 'Pagi', 'aktif');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
