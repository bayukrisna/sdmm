-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2018 at 04:33 AM
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
-- Table structure for table `tb_agama`
--

CREATE TABLE `tb_agama` (
  `id_agama` int(11) NOT NULL,
  `agama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_agama`
--

INSERT INTO `tb_agama` (`id_agama`, `agama`) VALUES
(1, 'Islam'),
(2, 'Katholik'),
(3, 'Kristen'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Konghucu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_aktivitas_perkuliahan`
--

CREATE TABLE `tb_aktivitas_perkuliahan` (
  `id_aktivitas` int(4) NOT NULL,
  `id_mahasiswa` varchar(8) NOT NULL,
  `id_periode` varchar(3) NOT NULL,
  `ips` float NOT NULL,
  `ipk_ak` float NOT NULL,
  `id_status` varchar(1) NOT NULL,
  `sks_semester` int(3) NOT NULL,
  `sks_total` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_aktivitas_perkuliahan`
--

INSERT INTO `tb_aktivitas_perkuliahan` (`id_aktivitas`, `id_mahasiswa`, `id_periode`, `ips`, `ipk_ak`, `id_status`, `sks_semester`, `sks_total`) VALUES
(1, 'M0001', '4', 0, 0, '1', 0, 0),
(2, 'M0004', '4', 4, 4, '1', 3, 3),
(3, 'M0010', '3', 3.25, 3.25, '1', 12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tb_alamat`
--

CREATE TABLE `tb_alamat` (
  `id_mahasiswa` varchar(7) NOT NULL,
  `jalan` varchar(20) NOT NULL,
  `dusun` varchar(20) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `rt` varchar(20) NOT NULL,
  `rw` varchar(20) NOT NULL,
  `kode_pos` varchar(20) NOT NULL,
  `alamat_mhs` varchar(100) NOT NULL,
  `jurusan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alamat`
--

INSERT INTO `tb_alamat` (`id_mahasiswa`, `jalan`, `dusun`, `kelurahan`, `kecamatan`, `rt`, `rw`, `kode_pos`, `alamat_mhs`, `jurusan`) VALUES
('M0001', '', '', '', '', '', '', '651657', 'Los Angeles', 'ipa'),
('M0002', '', '', '', '', '', '', '7865', 'Kediri', 'ipa'),
('M0003', '', '', '', '', '', '', '65165', 'Los Angeles', 'ipa'),
('M0004', '', '', '', '', '', '', '65165', 'Los Angeles', 'ipa'),
('M0005', '', '', '', '', '', '', '65165', 'Los Angeles', 'ipa'),
('M0006', '', '', '', '', '', '', '345', 'Los Angeles', 'ipa'),
('M0007', '', '', '', '', '', '', '1', 'asd', 'ipa'),
('M0008', '', '', '', '', '', '', '435435', 'Los Angeles', 'ipa'),
('M0009', '', '', '', '', '', '', '3784', '', ''),
('M0010', '', '', '', '', '', '', '65165', 'hi', 'ipa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ayah`
--

CREATE TABLE `tb_ayah` (
  `id_mahasiswa` varchar(7) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nik_ayah` varchar(20) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `pendidikan_ayah` varchar(20) NOT NULL,
  `pekerjaan_ayah` varchar(20) NOT NULL,
  `penghasilan_ayah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ayah`
--

INSERT INTO `tb_ayah` (`id_mahasiswa`, `nama_ayah`, `nik_ayah`, `tanggal_lahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`) VALUES
('M0001', '', '', '0000-00-00', '', '', ''),
('M0002', '', '', '0000-00-00', '', '', ''),
('M0003', '', '', '0000-00-00', '', '', ''),
('M0004', '', '', '0000-00-00', '', '', ''),
('M0005', '', '', '0000-00-00', '', '', ''),
('M0006', '', '', '0000-00-00', '', '', ''),
('M0007', '', '', '0000-00-00', '', '', ''),
('M0008', '', '', '0000-00-00', '', '', ''),
('M0009', '', '', '0000-00-00', '', '', ''),
('M0010', '', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_biaya`
--

CREATE TABLE `tb_biaya` (
  `id_biaya` varchar(6) NOT NULL,
  `jenis_biaya` varchar(20) NOT NULL,
  `nama_biaya` varchar(25) NOT NULL,
  `jumlah_biaya` int(10) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `id_waktu` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_biaya`
--

INSERT INTO `tb_biaya` (`id_biaya`, `jenis_biaya`, `nama_biaya`, `jumlah_biaya`, `periode`, `id_waktu`) VALUES
('BS001', 'Registrasi', 'Ranking 1', 360000, '2018/2019', '1'),
('BS002', 'Registrasi', 'Ranking 2', 3900000, '2018/2019', '1'),
('BS003', 'Registrasi', 'Ranking 3', 4500000, '2018/2019', '1'),
('BS004', 'Registrasi', 'Non-Beasiswa', 6000000, '2018/2019', '1'),
('BS005', 'Angsuran Tahun 1', 'Angsuran 1', 1200000, '2018/2019', '1'),
('BS006', 'Angsuran Tahun 1', 'Angsuran 2', 600000, '2018/2019', '1'),
('BS007', 'Angsuran Tahun 1', 'Angsuran 3', 600000, '2018/2019', '1'),
('BS008', 'Angsuran Tahun 1', 'Angsuran 4', 600000, '2018/2019', '1'),
('BS009', 'Angsuran Tahun 1', 'Angsuran 5', 600000, '2018/2019', '1'),
('BS010', 'Angsuran Tahun 1', 'Angsuran 6', 600000, '2018/2019', '1'),
('BS011', 'Angsuran Tahun 1', 'Angsuran 7', 600000, '2018/2019', '1'),
('BS012', 'Angsuran Tahun 1', 'Angsuran 8', 600000, '2018/2019', '1'),
('BS013', 'Angsuran Tahun 1', 'Angsuran 9', 600000, '2018/2019', '1'),
('BS014', 'Angsuran Tahun 2', 'Angsuran 1', 1810000, '2018/2019', '1'),
('BS015', 'Angsuran Tahun 2', 'Angsuran 2', 680000, '2018/2019', '1'),
('BS016', 'Angsuran Tahun 2', 'Angsuran 3', 680000, '2018/2019', '1'),
('BS017', 'Angsuran Tahun 2', 'Angsuran 4', 680000, '2018/2019', '1'),
('BS018', 'Angsuran Tahun 2', 'Angsuran 5', 680000, '2018/2019', '1'),
('BS019', 'Angsuran Tahun 2', 'Angsuran 6', 680000, '2018/2019', '1'),
('BS020', 'Angsuran Tahun 2', 'Angsuran 7', 680000, '2018/2019', '1'),
('BS021', 'Angsuran Tahun 2', 'Angsuran 8', 680000, '2018/2019', '1'),
('BS022', 'Angsuran Tahun 2', 'Angsuran 9', 680000, '2018/2019', '1'),
('BS023', 'Angsuran Tahun 3', 'Angsuran 1', 2200000, '2018/2019', '1'),
('BS024', 'Angsuran Tahun 3', 'Angsuran 2', 850000, '2018/2019', '1'),
('BS025', 'Angsuran Tahun 3', 'Angsuran 3', 850000, '2018/2019', '1'),
('BS026', 'Angsuran Tahun 3', 'Angsuran 4', 850000, '2018/2019', '1'),
('BS027', 'Angsuran Tahun 3', 'Angsuran 5', 850000, '2018/2019', '1'),
('BS028', 'Angsuran Tahun 3', 'Angsuran 6', 850000, '2018/2019', '1'),
('BS029', 'Angsuran Tahun 3', 'Angsuran 7', 850000, '2018/2019', '1'),
('BS030', 'Angsuran Tahun 3', 'Angsuran 8', 850000, '2018/2019', '1'),
('BS031', 'Angsuran Tahun 3', 'Angsuran 9', 850000, '2018/2019', '1'),
('BS032', 'Angsuran Tahun 4', 'Angsuran 1', 2200000, '2018/2019', '1'),
('BS033', 'Angsuran Tahun 4', 'Angsuran 2', 850000, '2018/2019', '1'),
('BS034', 'Angsuran Tahun 4', 'Angsuran 3', 850000, '2018/2019', '1'),
('BS035', 'Angsuran Tahun 4', 'Angsuran 4', 850000, '2018/2019', '1'),
('BS036', 'Angsuran Tahun 4', 'Angsuran 5', 850000, '2018/2019', '1'),
('BS037', 'Angsuran Tahun 4', 'Angsuran 6', 850000, '2018/2019', '1'),
('BS038', 'Angsuran Tahun 4', 'Angsuran 7', 850000, '2018/2019', '1'),
('BS039', 'Angsuran Tahun 4', 'Angsuran 8', 850000, '2018/2019', '1'),
('BS040', 'Angsuran Tahun 4', 'Angsuran 9', 850000, '2018/2019', '1'),
('BS041', 'Angsuran Tahun 1', 'Angsuran 1', 2570022, '2018/2019', '2'),
('BS042', 'Angsuran Tahun 1', 'Angsuran 2', 850000, '2018/2019', '2'),
('BS043', 'Angsuran Tahun 1', 'Angsuran 3', 850000, '2018/2019', '2'),
('BS044', 'Angsuran Tahun 1', 'Angsuran 4', 850000, '2018/2019', '2'),
('BS045', 'Angsuran Tahun 1', 'Angsuran 5', 850000, '2018/2019', '2'),
('BS046', 'Angsuran Tahun 1', 'Angsuran 6', 850000, '2018/2019', '2'),
('BS047', 'Angsuran Tahun 1', 'Angsuran 7', 850000, '2018/2019', '2'),
('BS048', 'Angsuran Tahun 1', 'Angsuran 8', 850000, '2018/2019', '2'),
('BS049', 'Angsuran Tahun 1', 'Angsuran 9', 850000, '2018/2019', '2'),
('BS050', 'Angsuran Tahun 2', 'Angsuran 1', 2270000, '2018/2019', '2'),
('BS051', 'Angsuran Tahun 2', 'Angsuran 2', 910000, '2018/2019', '2'),
('BS052', 'Angsuran Tahun 2', 'Angsuran 3', 910000, '2018/2019', '2'),
('BS053', 'Angsuran Tahun 2', 'Angsuran 4', 910000, '2018/2019', '2'),
('BS054', 'Angsuran Tahun 2', 'Angsuran 5', 910000, '2018/2019', '2'),
('BS055', 'Angsuran Tahun 2', 'Angsuran 6', 910000, '2018/2019', '2'),
('BS056', 'Angsuran Tahun 2', 'Angsuran 7', 910000, '2018/2019', '2'),
('BS057', 'Angsuran Tahun 2', 'Angsuran 8', 910000, '2018/2019', '2'),
('BS058', 'Angsuran Tahun 2', 'Angsuran 9', 910000, '2018/2019', '2'),
('BS059', 'Angsuran Tahun 3', 'Angsuran 1', 2740000, '2018/2019', '2'),
('BS060', 'Angsuran Tahun 3', 'Angsuran 2', 1120000, '2018/2019', '2'),
('BS061', 'Angsuran Tahun 3', 'Angsuran 3', 1120000, '2018/2019', '2'),
('BS062', 'Angsuran Tahun 3', 'Angsuran 4', 1120000, '2018/2019', '2'),
('BS063', 'Angsuran Tahun 3', 'Angsuran 5', 1120000, '2018/2019', '2'),
('BS064', 'Angsuran Tahun 3', 'Angsuran 6', 1120000, '2018/2019', '2'),
('BS065', 'Angsuran Tahun 3', 'Angsuran 7', 1120000, '2018/2019', '2'),
('BS066', 'Angsuran Tahun 3', 'Angsuran 8', 1120000, '2018/2019', '2'),
('BS067', 'Angsuran Tahun 3', 'Angsuran 9', 1120000, '2018/2019', '2'),
('BS068', 'Angsuran Tahun 4', 'Angsuran 1', 2740000, '2018/2019', '2'),
('BS069', 'Angsuran Tahun 4', 'Angsuran 2', 1120000, '2018/2019', '2'),
('BS070', 'Angsuran Tahun 4', 'Angsuran 3', 1120000, '2018/2019', '2'),
('BS071', 'Angsuran Tahun 4', 'Angsuran 4', 1120000, '2018/2019', '2'),
('BS072', 'Angsuran Tahun 4', 'Angsuran 5', 1120000, '2018/2019', '2'),
('BS073', 'Angsuran Tahun 4', 'Angsuran 5', 1120000, '2018/2019', '2'),
('BS074', 'Angsuran Tahun 4', 'Angsuran 6', 1120000, '2018/2019', '2'),
('BS075', 'Angsuran Tahun 4', 'Angsuran 7', 1120000, '2018/2019', '2'),
('BS076', 'Angsuran Tahun 4', 'Angsuran 8', 1120000, '2018/2019', '2'),
('BS077', 'Angsuran Tahun 4', 'Angsuran 9', 1120000, '2018/2019', '2'),
('BS078', 'KRS', 'KRS Mengulang', 52500, '2018/2019', '1'),
('BS079', 'KRS', 'KRS Mengulang', 52500, '2018/2019', '2'),
('BS080', 'Angsuran Tahun 1', 'Angsuran 1', 1200000, '2019/2020', '1'),
('BS081', 'Registrasi', 'Ranking 1', 400000, '2019/2020', '1'),
('BS082', 'Registrasi', 'Uang Pendaftaran', 170000, '2018/2019', '1'),
('BS083', 'Registrasi', 'Almamater', 300000, '2018/2019', '1'),
('BS084', 'Registrasi', 'Amenities', 400000, '2018/2019', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bio`
--

CREATE TABLE `tb_bio` (
  `id_mahasiswa` varchar(10) NOT NULL,
  `id_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_agama` varchar(20) NOT NULL,
  `foto_mahasiswa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bio`
--

INSERT INTO `tb_bio` (`id_mahasiswa`, `id_kelamin`, `tempat_lahir`, `tanggal_lahir`, `id_agama`, `foto_mahasiswa`) VALUES
('M0001', 'P', 'MALANG', '2018-09-08', '1', ''),
('M0002', 'P', 'Mana', '2018-09-07', '1', ''),
('M0003', 'P', 'MALANG', '2018-09-07', '3', ''),
('M0004', 'L', 'MALANG', '2018-09-08', '2', 'jessica-jung2.png'),
('M0005', 'P', 'Jepang', '2018-09-01', '1', ''),
('M0006', 'L', 'jessica', '2018-09-14', '2', ''),
('M0007', 'L', 'Malang', '1222-12-12', '1', ''),
('M0008', 'L', 'ewf', '2018-09-06', '1', ''),
('M0009', 'P', 'Paris', '2018-09-01', '1', ''),
('M0010', 'L', 'MALANG', '2018-09-08', '1', 'original9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_kurikulum`
--

CREATE TABLE `tb_detail_kurikulum` (
  `id_detail_kurikulum` int(11) NOT NULL,
  `id_kurikulum` varchar(5) NOT NULL,
  `kode_matkul` varchar(20) NOT NULL,
  `semester_kurikulum` int(11) NOT NULL,
  `wajib` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_kurikulum`
--

INSERT INTO `tb_detail_kurikulum` (`id_detail_kurikulum`, `id_kurikulum`, `kode_matkul`, `semester_kurikulum`, `wajib`) VALUES
(36, '4', '123', 1, 'Y'),
(37, '5', 'waw', 1, 'Y'),
(38, '5', '123', 2, 'Y'),
(43, '6', 'waw', 1, 'Y'),
(44, '6', '123', 2, 'Y'),
(45, '4', 'waw', 2, 'Y'),
(46, '4', 'hu', 2, 'Y'),
(47, '7', 'hu', 2, 'Y'),
(48, '7', '98034', 1, 'Y'),
(49, '5', '67645', 1, 'Y');

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
(1, 'KP001', 'M0001', 'BS001', '13-09-2018', '', '7', 100000, 200000, ''),
(2, 'KP002', 'M0002', 'BS041', '17-09-2018', '', '4', 0, 0, ''),
(3, 'KP002', 'M0002', 'BS079', '17-09-2018', '123', '4', 6000, 0, ''),
(4, 'KP002', 'M0002', 'BS070', '17-09-2018', '', '4', 60000, 0, ''),
(5, 'KP002', 'M0002', 'BS051', '17-09-2018', '', '4', 500000, 20000, ''),
(6, 'KP003', 'M0002', 'BS041', '17-09-2018', '', '4', 76, 54, ''),
(7, 'KP003', 'M0002', 'BS051', '17-09-2018', '', '4', 0, 0, ''),
(8, 'KP007', 'M0008', 'BS082', '18-09-2018', '', '4', 0, 0, ''),
(9, 'KP007', 'M0008', 'BS083', '18-09-2018', '', '4', 0, 0, ''),
(10, 'KP007', 'M0008', 'BS084', '18-09-2018', '', '4', 0, 0, ''),
(11, 'KP008', 'M0009', 'BS082', '19-09-2018', '', '4', 0, 0, ''),
(12, 'KP008', 'M0009', 'BS083', '19-09-2018', '', '4', 0, 0, ''),
(13, 'KP008', 'M0009', 'BS084', '19-09-2018', '', '4', 0, 0, ''),
(14, 'KP009', 'M0010', 'BS082', '19-09-2018', '', '4', 0, 0, ''),
(15, 'KP009', 'M0010', 'BS083', '19-09-2018', '', '4', 0, 0, ''),
(16, 'KP009', 'M0010', 'BS084', '19-09-2018', '', '4', 0, 0, ''),
(17, 'KP010', 'M0010', 'BS005', '19-09-2018', '', '7', 100000, 50000, ''),
(18, 'KP010', 'M0010', 'BS006', '19-09-2018', '', '7', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` varchar(20) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `no_hp` varchar(250) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status` varchar(2) NOT NULL,
  `email` varchar(25) NOT NULL,
  `jenis_dosen` varchar(2) NOT NULL,
  `id_kelamin` varchar(1) NOT NULL,
  `id_agama` varchar(1) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `nama_dosen`, `no_hp`, `nip`, `tgl_lahir`, `status`, `email`, `jenis_dosen`, `id_kelamin`, `id_agama`, `alamat`) VALUES
('123', 'Miss Jessica Jung', '0812321321', '907867', '2018-09-01', '1', 'bayuchrisna3@gmail.com', '1', 'P', '1', 'Los Angeles');

-- --------------------------------------------------------

--
-- Table structure for table `tb_events`
--

CREATE TABLE `tb_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `backgroundColor` varchar(10) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_events`
--

INSERT INTO `tb_events` (`id`, `title`, `start`, `end`, `backgroundColor`, `description`) VALUES
(1, 'EVen akbar ', '2018-09-14 10:00:00', '2018-09-27 01:00:00', '#3da1cc', 'wqw'),
(2, 'ewfwef', '2018-09-15 11:11:00', '0000-00-00 00:00:00', '#3da1cc', 'e'),
(3, 'ewfwef', '2018-09-15 17:45:00', '2018-09-14 03:44:00', '#20353d', 'weffffffffffffffffffffffffffffff wehfuiweuwieh fw uweu whfuwiafuweg e eiwuf gweuf gweui fhewu weui fgweiu ewui gewiu ewiu iew w'),
(4, 'regreg', '2018-08-31 11:01:00', '0000-00-00 00:00:00', '#3da1cc', 'wfewfwf'),
(5, 'EVen baru', '2018-09-05 10:00:00', '0043-02-04 10:00:00', '#c2239f', 'Even yang akan diselengaraan pada hari ersebut sbg peringatan kematian');

-- --------------------------------------------------------

--
-- Table structure for table `tb_grade`
--

CREATE TABLE `tb_grade` (
  `id_grade` int(11) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `diskon` int(3) NOT NULL,
  `grade_awal` float NOT NULL,
  `grade_akhir` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_grade`
--

INSERT INTO `tb_grade` (`id_grade`, `grade`, `diskon`, `grade_awal`, `grade_akhir`) VALUES
(1, 'Ranking 1', 40, 90, 100),
(2, 'Ranking 2', 35, 80, 89.9),
(3, 'Ranking 3', 25, 75, 79.9),
(4, 'Non-Beasiswa', 0, 0, 74.9),
(5, 'Grade A', 35, 3.76, 4),
(6, 'Grade B', 25, 3.5, 3.75),
(7, 'Grade C', 0, 0, 3.49);

-- --------------------------------------------------------

--
-- Table structure for table `tb_hari`
--

CREATE TABLE `tb_hari` (
  `id_hari` int(1) NOT NULL,
  `hari` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hari`
--

INSERT INTO `tb_hari` (`id_hari`, `hari`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jumat'),
(6, 'Sabtu'),
(7, 'Minggu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil_tes`
--

CREATE TABLE `tb_hasil_tes` (
  `id_hasil_tes` varchar(8) NOT NULL,
  `nilai_mat` int(11) NOT NULL,
  `nilai_bing` int(11) NOT NULL,
  `nilai_psikotes` int(11) NOT NULL,
  `tanggal_hasil_tes` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hasil_tes`
--

INSERT INTO `tb_hasil_tes` (`id_hasil_tes`, `nilai_mat`, `nilai_bing`, `nilai_psikotes`, `tanggal_hasil_tes`) VALUES
('TES0001', 21, 24, 22, '2018-09-10'),
('TES0003', 20, 27, 26, '2018-09-17'),
('TES0007', 30, 21, 23, '2018-09-19'),
('TES0008', 24, 22, 23, '2018-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ibu`
--

CREATE TABLE `tb_ibu` (
  `id_mahasiswa` varchar(10) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `nik_ibu` varchar(50) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `pendidikan_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `penghasilan_ibu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ibu`
--

INSERT INTO `tb_ibu` (`id_mahasiswa`, `nama_ibu`, `nik_ibu`, `tanggal_lahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`) VALUES
('M0001', 'ELy', '', '0000-00-00', '', '', ''),
('M0002', 'as', '', '0000-00-00', '', '', ''),
('M0003', 'ELy', '', '0000-00-00', '', '', ''),
('M0004', 'ELy', '', '0000-00-00', '', '', ''),
('M0005', 'Jesssica', '', '0000-00-00', '', '', ''),
('M0006', 'as', '', '0000-00-00', '', '', ''),
('M0007', '12', '', '0000-00-00', '', '', ''),
('M0008', 'ELy', '', '0000-00-00', '', '', ''),
('M0009', 'Lsa', '', '0000-00-00', '', '', ''),
('M0010', 'jkhg', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id_info` int(3) NOT NULL,
  `judul_info` varchar(50) NOT NULL,
  `deskripsi_info` text NOT NULL,
  `penerima` varchar(2) NOT NULL,
  `pengirim` varchar(2) NOT NULL,
  `tgl_info` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_informasi`
--

INSERT INTO `tb_informasi` (`id_info`, `judul_info`, `deskripsi_info`, `penerima`, `pengirim`, `tgl_info`) VALUES
(1, 'Informasi Baru untuk mahasiswa', 'informasi ini hanya untuk mahasiswa bukan untuk jabatan lain oke', '5', '1', '2018-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_level` varchar(7) NOT NULL,
  `nama_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_level`, `nama_level`) VALUES
('1', 'Admin'),
('2', 'Dosen'),
('3', 'Pemasaran'),
('4', 'Keuangan'),
('5', 'Mahasiswa'),
('6', 'Akademik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(5) NOT NULL,
  `id_periode` varchar(3) NOT NULL,
  `id_hari` int(1) NOT NULL,
  `jam_awal` time NOT NULL,
  `jam_akhir` time NOT NULL,
  `id_waktu` int(1) NOT NULL,
  `id_konsentrasi` varchar(8) NOT NULL,
  `id_detail_kurikulum` varchar(4) NOT NULL,
  `id_ruang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `id_periode`, `id_hari`, `jam_awal`, `jam_akhir`, `id_waktu`, `id_konsentrasi`, `id_detail_kurikulum`, `id_ruang`) VALUES
(10, '4', 1, '10:00:00', '11:00:00', 1, 'KO003', '9', '1'),
(11, '4', 1, '06:00:00', '07:00:00', 1, 'KO099', '9', '1'),
(12, '4', 2, '11:00:00', '00:00:00', 1, 'KO003', '9', '1'),
(13, '4', 5, '10:10:00', '11:11:00', 1, 'KO099', '9', '2'),
(14, '3', 1, '10:00:00', '11:00:00', 1, 'KO002', '32', '1'),
(15, '4', 1, '10:00:00', '11:00:00', 1, 'KO099', '36', '1'),
(16, '4', 1, '10:00:00', '11:00:00', 1, 'KO099', '46', '1'),
(17, '5', 2, '11:00:00', '00:00:00', 1, 'KO099', '47', '2'),
(18, '5', 1, '10:00:00', '11:00:00', 1, 'KO003', '48', '1'),
(19, '3', 1, '10:00:00', '11:00:00', 1, 'KO098', '49', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jalur_pendaftaran`
--

CREATE TABLE `tb_jalur_pendaftaran` (
  `id_jalur_pendaftaran` int(2) NOT NULL,
  `nama_jalur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jalur_pendaftaran`
--

INSERT INTO `tb_jalur_pendaftaran` (`id_jalur_pendaftaran`, `nama_jalur`) VALUES
(1, 'SBMPTN'),
(2, 'SNMPTN'),
(3, 'PMDK'),
(4, 'Prestasi'),
(5, 'Seleksi Mandiri PTN'),
(6, 'Seleksi Mandiri PTS'),
(7, 'Ujian Masuk Bersama PTN (UMB-PT)'),
(8, 'Ujian Masuk Bersama PTS (UMB-PTS)'),
(9, 'Program Internasional'),
(10, 'Program Kerjasama/Perusahaan/Institusi Pemeritah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_matkul`
--

CREATE TABLE `tb_jenis_matkul` (
  `id_jenis_matkul` varchar(7) NOT NULL,
  `nama_jenis_matkul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_matkul`
--

INSERT INTO `tb_jenis_matkul` (`id_jenis_matkul`, `nama_jenis_matkul`) VALUES
('A', 'Wajib Nasional'),
('B', 'Wajib Program Studi'),
('C', 'Pilihan'),
('D', 'Peminatan'),
('E', 'Tugas akhir/Skripsi/Tesis/Disertasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_pendaftaran`
--

CREATE TABLE `tb_jenis_pendaftaran` (
  `id_jenis_pendaftaran` int(1) NOT NULL,
  `nama_pendaftaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_pendaftaran`
--

INSERT INTO `tb_jenis_pendaftaran` (`id_jenis_pendaftaran`, `nama_pendaftaran`) VALUES
(1, 'Peserta Didik Baru'),
(2, 'Pindahan'),
(3, 'Alih Jenjang'),
(4, 'Lintas Jalur'),
(5, 'Rekognisi Pembelajaran Lampau ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_tinggal`
--

CREATE TABLE `tb_jenis_tinggal` (
  `id_jt` int(1) NOT NULL,
  `jenis_tinggal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_tinggal`
--

INSERT INTO `tb_jenis_tinggal` (`id_jt`, `jenis_tinggal`) VALUES
(1, 'Bersama orang tua'),
(2, 'Wali'),
(3, 'Kost'),
(4, 'Asrama'),
(5, 'Panti Asuhan'),
(6, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelamin`
--

CREATE TABLE `tb_kelamin` (
  `id_kelamin` varchar(1) NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelamin`
--

INSERT INTO `tb_kelamin` (`id_kelamin`, `jenis_kelamin`) VALUES
('L', 'Laki - Laki'),
('P', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas_dosen`
--

CREATE TABLE `tb_kelas_dosen` (
  `id_kp` varchar(6) NOT NULL,
  `id_dosen` varchar(10) NOT NULL,
  `rencana` int(11) NOT NULL,
  `realisasi` int(11) NOT NULL,
  `jenis_evaluasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas_dosen`
--

INSERT INTO `tb_kelas_dosen` (`id_kp`, `id_dosen`, `rencana`, `realisasi`, `jenis_evaluasi`) VALUES
('1', '123', 4, 4, 't'),
('2', '123', 1, 1, 're'),
('3', '123', 2, 2, ''),
('4', '123', 6, 6, ''),
('6', '123', 5, 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas_mhs`
--

CREATE TABLE `tb_kelas_mhs` (
  `id_kelas_mhs` int(11) NOT NULL,
  `id_mahasiswa` varchar(20) NOT NULL,
  `id_kp` varchar(11) NOT NULL,
  `id_skala_nilai` varchar(10) NOT NULL,
  `nilai_d` float NOT NULL,
  `nilai_tugas` float NOT NULL,
  `absensi` float NOT NULL,
  `nilai_uts` float NOT NULL,
  `nilai_uas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas_mhs`
--

INSERT INTO `tb_kelas_mhs` (`id_kelas_mhs`, `id_mahasiswa`, `id_kp`, `id_skala_nilai`, `nilai_d`, `nilai_tugas`, `absensi`, `nilai_uts`, `nilai_uas`) VALUES
(1, 'M0001', '2', '', 0, 0, 0, 0, 0),
(2, 'M0001', '2', '', 0, 0, 0, 0, 0),
(4, 'M0004', '3', '14', 78, 89, 5, 90, 92),
(5, 'M0001', '4', '12', 100, 20, 20, 25, 35),
(6, 'M0009', '2', '', 0, 0, 0, 0, 0),
(7, 'M0010', '2', '', 0, 0, 0, 0, 0),
(8, 'M0010', '6', '4', 80, 78, 5, 87, 89),
(9, 'M0010', '2', '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kependudukan`
--

CREATE TABLE `tb_kependudukan` (
  `id_mahasiswa` varchar(7) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `kps` varchar(6) NOT NULL,
  `no_kps` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kependudukan`
--

INSERT INTO `tb_kependudukan` (`id_mahasiswa`, `nik`, `nisn`, `npwp`, `kps`, `no_kps`, `kewarganegaraan`) VALUES
('M0001', '43534', '', '', '', '', ''),
('M0002', '46546', '', '', '', '', ''),
('M0003', '123217', '', '', '', '', ''),
('M0004', '123217', '', '', '', '', ''),
('M0005', '6456', '', '', '', '', ''),
('M0006', '435345', '', '', '', '', ''),
('M0007', '12', '', '', '', '', ''),
('M0008', '43543', '', '', '', '', ''),
('M0009', '435', '768657', '', '', '', ''),
('M0010', '9876', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsentrasi`
--

CREATE TABLE `tb_konsentrasi` (
  `id_konsentrasi` varchar(6) NOT NULL,
  `nama_konsentrasi` varchar(20) NOT NULL,
  `id_prodi` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_konsentrasi`
--

INSERT INTO `tb_konsentrasi` (`id_konsentrasi`, `nama_konsentrasi`, `id_prodi`) VALUES
('KO002', 'Finance Managementh', 'PR002'),
('KO003', 'Auditing', 'PR001'),
('KO004', 'Taxation', 'PR001'),
('KO007', 'yuyul', 'PR002');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsentrasi_kelas`
--

CREATE TABLE `tb_konsentrasi_kelas` (
  `id_konsentrasi` varchar(8) NOT NULL,
  `nama_konsentrasi` varchar(25) NOT NULL,
  `id_prodi` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_konsentrasi_kelas`
--

INSERT INTO `tb_konsentrasi_kelas` (`id_konsentrasi`, `nama_konsentrasi`, `id_prodi`) VALUES
('KO002', 'Finance Management', 'PR002'),
('KO003', 'Auditing', 'PR001'),
('KO004', 'Taxation', 'PR001'),
('KO005', 'Yuyul', 'PR002'),
('KO098', 'Semua', 'PR002'),
('KO099', 'Semua', 'PR001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id_mahasiswa` varchar(10) NOT NULL,
  `no_telepon` int(11) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kontak`
--

INSERT INTO `tb_kontak` (`id_mahasiswa`, `no_telepon`, `no_hp`, `email`) VALUES
('M0001', 789678, 3325, 'bayuchrisna3@gmail.com'),
('M0002', 3434, 436456, 'bayuchrisna3@gmail.com'),
('M0003', 987654, 67865, 'bayuchrisna3@gmail.com'),
('M0004', 9867, 98765, 'bayuchrisna3@gmail.com'),
('M0005', 98765, 8765, 'bayuchrisna3@gmail.com'),
('M0006', 4654, 345345, 'yoona@gmail.com'),
('M0007', 12, 21, 'rahmanaldi290@gmail.com'),
('M0008', 43534, 43534, 'bayuchrisna3@gmail.com'),
('M0009', 2147483647, 2147483647, 'bayuchrisna3@gmail.com'),
('M0010', 908765, 97865, 'as@asd.sads');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kp`
--

CREATE TABLE `tb_kp` (
  `id_kp` int(4) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `bahasan` text NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `id_jadwal` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kp`
--

INSERT INTO `tb_kp` (`id_kp`, `nama_kelas`, `bahasan`, `tgl_mulai`, `tgl_akhir`, `id_jadwal`) VALUES
(1, '1', 'waw', '2018-09-01', '2018-09-30', '14'),
(2, '1', 'wew', '2018-09-01', '2018-09-21', '15'),
(3, '1', 'w', '2018-09-01', '2018-09-30', '16'),
(4, '2', '', '2018-09-01', '2018-09-30', '17'),
(5, '1', 'waw', '2018-09-12', '2018-09-13', '18'),
(6, '1', 'abc', '2018-09-01', '2018-09-30', '19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kurikulum`
--

CREATE TABLE `tb_kurikulum` (
  `id_kurikulum` int(4) NOT NULL,
  `nama_kurikulum` varchar(100) NOT NULL,
  `id_prodi` varchar(7) NOT NULL,
  `bobot_matkul_wajib` int(3) NOT NULL,
  `bobot_matkul_pilihan` int(3) NOT NULL,
  `id_periode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kurikulum`
--

INSERT INTO `tb_kurikulum` (`id_kurikulum`, `nama_kurikulum`, `id_prodi`, `bobot_matkul_wajib`, `bobot_matkul_pilihan`, `id_periode`) VALUES
(4, 'Kurikulum Manajemen ', 'PR001', 123, 12, '4'),
(5, 'Kurikulum Akuntansi', 'PR002', 2, 2, '3'),
(6, 'Kurikulum 2019', 'PR001', 10, 10, '4'),
(7, 'kM baru', 'PR001', 5, 5, '5');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ld`
--

CREATE TABLE `tb_ld` (
  `id_mahasiswa` varchar(7) NOT NULL,
  `id_status` int(2) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `sk_yudisium` varchar(30) NOT NULL,
  `tgl_sk_yudisium` date NOT NULL,
  `no_seri_ijazah` varchar(20) NOT NULL,
  `tanggal_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ld`
--

INSERT INTO `tb_ld` (`id_mahasiswa`, `id_status`, `keterangan`, `sk_yudisium`, `tgl_sk_yudisium`, `no_seri_ijazah`, `tanggal_keluar`) VALUES
('M0010', 11, 'adf', 'hi', '2018-09-07', '9768', '2018-09-13');

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
  `id_waktu` varchar(1) NOT NULL,
  `id_grade` varchar(2) NOT NULL,
  `semester_aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mahasiswa`, `id_du`, `nama_mahasiswa`, `nim`, `id_status`, `id_konsentrasi`, `id_hasil_tes`, `id_sekolah`, `id_waktu`, `id_grade`, `semester_aktif`) VALUES
('M0001', ' 123', 'Blake Lavelys', '8765', '1', 'KO003', 'TES0001', 'SE001', '1', '7', 2),
('M0002', ' 456', 'Katy Perry', '1111', '19', 'KO003', '', 'SE001', '2', '4', 1),
('M0003', ' 165', 'Paris', '6666', '12', 'KO003', 'TES0002', 'SE001', '1', '4', 1),
('M0004', ' 8765', 'Bayu Krisna', '777', '1', 'KO003', 'TES0003', 'SE001', '1', '5', 2),
('M0005', ' 98h7g', 'Yuri Kwon', '9990', '12', 'KO003', 'TES0004', 'SE001', '1', '4', 1),
('M0006', ' 8g67', 'Veronica Tan', '8888', '12', 'KO002', 'TES0005', 'SE001', '1', '4', 1),
('M0007', ' 12333', 'first', '123213', '12', 'KO003', 'TES0006', 'SE001', '1', '4', 1),
('M0008', ' dd', 'Taylor', '435', '19', 'KO003', '', 'SE001', '2', '4', 1),
('M0009', ' 98h43', 'Syahrini', '600', '1', 'KO002', 'TES0007', 'SE001', '1', '2', 1),
('M0010', ' iouyt', 'abcd', '5555', '19', 'KO002', 'TES0008', 'SE001', '1', '7', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_matkul`
--

CREATE TABLE `tb_matkul` (
  `kode_matkul` varchar(50) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `id_prodi` varchar(10) NOT NULL,
  `jenis_matkul` varchar(20) NOT NULL,
  `bobot_matkul` int(11) NOT NULL,
  `bobot_praktikum` int(11) NOT NULL,
  `bobot_tatap_muka` int(11) NOT NULL,
  `bobot_praktik_lapangan` int(11) NOT NULL,
  `bobot_simulasi` int(11) NOT NULL,
  `metode_pembelajaran` varchar(100) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `matkul_english` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_matkul`
--

INSERT INTO `tb_matkul` (`kode_matkul`, `nama_matkul`, `id_prodi`, `jenis_matkul`, `bobot_matkul`, `bobot_praktikum`, `bobot_tatap_muka`, `bobot_praktik_lapangan`, `bobot_simulasi`, `metode_pembelajaran`, `tanggal_mulai`, `tanggal_akhir`, `matkul_english`) VALUES
('123', 'Bahasa Rusia', 'PR001', 'B', 3, 0, 1, 2, 0, 'waw', '2018-09-07', '2018-09-27', 'Russian Language'),
('67645', 'Bahasa Indonesia', 'PR001', 'B', 12, 4, 5, 2, 1, 'gu', '2018-09-01', '2018-09-30', 'Indonesian language'),
('768765', 'Bahasa Indonesia', 'PR002', 'B', 10, 5, 5, 0, 0, '', '0000-00-00', '0000-00-00', 'Indonesian language'),
('98034', 'Bahasa Isyarat', 'PR001', 'B', 10, 5, 5, 0, 0, 'rr', '2018-09-20', '2018-09-28', 'Sign language'),
('hu', 'Bahsa Indonesia', 'PR001', 'B', 5, 0, 5, 0, 0, '', '0000-00-00', '0000-00-00', 'Indonesian'),
('waw', 'Bahasa Inggris', 'PR002', 'B', 7, 1, 4, 2, 0, 'waw', '2018-09-01', '2018-09-26', 'english langauge');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mhs_add`
--

CREATE TABLE `tb_mhs_add` (
  `id_mahasiswa` varchar(11) NOT NULL,
  `tgl_du` date NOT NULL,
  `id_transportasi` varchar(2) NOT NULL,
  `id_jt` varchar(2) NOT NULL,
  `ipk` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mhs_add`
--

INSERT INTO `tb_mhs_add` (`id_mahasiswa`, `tgl_du`, `id_transportasi`, `id_jt`, `ipk`) VALUES
('M0001', '2018-09-10', '', '', 0),
('M0002', '2018-09-10', '', '', 0),
('M0003', '2018-09-17', '', '', 0),
('M0004', '2018-09-17', '', '', 4),
('M0005', '2018-09-18', '', '', 0),
('M0006', '2018-09-18', '', '', 0),
('M0007', '2018-09-18', '', '', 0),
('M0008', '2018-09-18', '', '', 0),
('M0009', '2018-09-19', '', '', 0),
('M0010', '2018-09-19', '', '', 3.25);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `kode_pembayaran` varchar(6) NOT NULL,
  `id_mahasiswa` varchar(7) NOT NULL,
  `total_biaya` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`kode_pembayaran`, `id_mahasiswa`, `total_biaya`) VALUES
('KP001', 'M0001', ''),
('KP002', 'M0002', ''),
('KP003', 'M0002', ''),
('KP004', 'M0005', ''),
('KP005', 'M0006', ''),
('KP006', 'M0007', ''),
('KP007', 'M0008', ''),
('KP008', 'M0009', ''),
('KP009', 'M0010', ''),
('KP010', 'M0010', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembiayaan_awal`
--

CREATE TABLE `tb_pembiayaan_awal` (
  `id_pembiayaan` int(1) NOT NULL,
  `nama_pembiayaan` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembiayaan_awal`
--

INSERT INTO `tb_pembiayaan_awal` (`id_pembiayaan`, `nama_pembiayaan`) VALUES
(1, 'Mandiri'),
(2, 'Beasiswa Tidak Penuh'),
(3, 'Beasiswa Penuh');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` varchar(6) NOT NULL,
  `tanggal_pendaftaran` date NOT NULL,
  `nama_pendaftar` varchar(50) NOT NULL,
  `jk_pendaftar` varchar(20) NOT NULL,
  `id_sekolah` varchar(6) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `waktu` varchar(10) NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `id_prodi` varchar(6) NOT NULL,
  `sumber` varchar(30) NOT NULL,
  `bukti_transfer` text NOT NULL,
  `id_du` varchar(6) NOT NULL,
  `f1` text NOT NULL,
  `f2` text NOT NULL,
  `f3` text NOT NULL,
  `notes` text NOT NULL,
  `tanggal_konfirmasi` date NOT NULL,
  `sgs` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tanggal_pendaftaran`, `nama_pendaftar`, `jk_pendaftar`, `id_sekolah`, `jurusan`, `alamat`, `email`, `no_telp`, `waktu`, `status_bayar`, `id_prodi`, `sumber`, `bukti_transfer`, `id_du`, `f1`, `f2`, `f3`, `notes`, `tanggal_konfirmasi`, `sgs`) VALUES
('TM001', '2018-09-10', 'Blake Lavely', 'P', 'SE001', 'ipa', 'Los Angeles', 'bayuchrisna3@gmail.com', '789678', 'Pagi', 'Aktif', 'PR001', 'brosur', 'britney12.jpg', ' 123', '', '', '', '', '2018-09-10', ''),
('TM002', '2018-09-10', 'Katy Perry', 'P', 'SE001', 'ipa', 'Kediri', 'bayuchrisna3@gmail.com', '3434', 'Sore', 'Aktif', 'PR001', 'student_get_student', 'IMG_00031.jpg', ' 456', '', '', '', '', '2018-09-10', '8765'),
('TM003', '2018-09-17', 'Paris', 'P', 'SE001', 'ipa', 'Los Angeles', 'bayuchrisna3@gmail.com', '0987654', 'Pagi', 'Aktif', 'PR001', 'brosur', 'IMG_00032.jpg', ' 165', '', '', '', '', '2018-09-17', ''),
('TM004', '2018-09-17', 'Bayu Krisna', 'L', 'SE001', 'ipa', 'Los Angeles', 'bayuchrisna3@gmail.com', '09867', 'Pagi', 'Aktif', 'PR001', 'iklan', 'britney13.jpg', ' 8765', '', '', '', '', '2018-09-17', ''),
('TM005', '2018-09-18', 'Yuri Kwon', 'P', 'SE001', 'ipa', 'Los Angeles', 'bayuchrisna3@gmail.com', '098765', 'Pagi', 'Aktif', 'PR001', 'student_get_student', 'britney14.jpg', ' 98h7g', '', '', '', '', '2018-09-18', '777'),
('TM006', '2018-09-18', 'Veronica Tan', 'L', 'SE001', 'ipa', 'Los Angeles', 'yoona@gmail.com', '4654', 'Pagi', 'Aktif', 'PR001', 'brosur', 'original8.jpg', ' 8g67', '', '', '', '', '2018-09-18', ''),
('TM007', '2018-09-18', 'first', 'L', 'SE001', 'ipa', 'asd', 'rahmanaldi290@gmail.com', '12', 'Pagi', 'Aktif', 'PR001', 'brosur', 'Penguins4.jpg', ' 12333', '', '', '', '', '2018-09-18', ''),
('TM008', '2018-09-18', 'Taylor', 'L', 'SE001', 'ipa', 'Los Angeles', 'bayuchrisna3@gmail.com', '43534', 'Sore', 'Aktif', 'PR002', 'brosur', 'IMG_00033.jpg', ' dd', '', '', '', '', '2018-09-18', ''),
('TM009', '2018-09-19', 'Syahrini', 'P', 'SE001', 'ipa', 'Bogor', 'bayuchrisna3@gmail.com', '087654324567', 'Pagi', 'Aktif', 'PR001', 'marketing', 'britney15.jpg', ' 98h43', '', '', '', '', '2018-09-19', ''),
('TM010', '2018-09-19', 'Britney Spears', 'P', 'SE001', 'ipa', 'Los Angeles', 'bayuchrisna3@gmail.com', '83095347', 'Sore', 'Lunas', 'PR001', 'student_get_student', 'lembar_jawaban_Test2.jpg', ' 900', '', '', '', '', '2018-09-19', '1111'),
('TM011', '2018-09-19', 'abcd', 'L', 'SE001', 'ipa', 'hi', 'as@asd.sads', '97865', 'Pagi', 'Aktif', 'PR002', 'brosur', 'IMG_00092.jpg', ' iouyt', '', '', '', '', '2018-09-19', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendidikan`
--

CREATE TABLE `tb_pendidikan` (
  `id_pendidikan` int(4) NOT NULL,
  `id_mahasiswa` varchar(8) NOT NULL,
  `jenis_pendaftaran` int(2) NOT NULL,
  `jalur_pendaftaran` int(2) NOT NULL,
  `pembiayaan_awal` int(2) NOT NULL,
  `perguruan_tinggi` int(2) NOT NULL,
  `jml_sks_diakui` int(4) NOT NULL,
  `asal_pt` varchar(50) NOT NULL,
  `asal_prodi` varchar(20) NOT NULL,
  `id_periode` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendidikan`
--

INSERT INTO `tb_pendidikan` (`id_pendidikan`, `id_mahasiswa`, `jenis_pendaftaran`, `jalur_pendaftaran`, `pembiayaan_awal`, `perguruan_tinggi`, `jml_sks_diakui`, `asal_pt`, `asal_prodi`, `id_periode`) VALUES
(1, 'M0001', 1, 1, 1, 33082, 5, 'UI', 'ya gitu', '4'),
(2, 'M0004', 1, 1, 1, 33082, 12, 'ui', 'kedokteran', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tb_periode`
--

CREATE TABLE `tb_periode` (
  `id_periode` int(11) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `id_prodi` varchar(8) NOT NULL,
  `target_mhs_baru` varchar(10) NOT NULL,
  `pendaftar_ikut_seleksi` varchar(10) NOT NULL,
  `pendaftar_lulus_seleksi` varchar(10) NOT NULL,
  `daftar_ulang` varchar(6) NOT NULL,
  `mengundurkan_diri` varchar(6) NOT NULL,
  `tgl_awal_kul` varchar(11) NOT NULL,
  `tgl_akhir_kul` varchar(11) NOT NULL,
  `jumlah_minggu_pertemuan` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_periode`
--

INSERT INTO `tb_periode` (`id_periode`, `semester`, `id_prodi`, `target_mhs_baru`, `pendaftar_ikut_seleksi`, `pendaftar_lulus_seleksi`, `daftar_ulang`, `mengundurkan_diri`, `tgl_awal_kul`, `tgl_akhir_kul`, `jumlah_minggu_pertemuan`) VALUES
(2, '2018/2019 Ganjil', 'PR001', '12', '21', '31', '32', '12', '2018-07-23', '2018-07-05', '2'),
(3, '2018/2019 Ganjil', 'PR002', '12', '51', '52', '53', '54', '2018-07-23', '2018-09-28', '2'),
(4, '2018/2019 Genap', 'PR001', '100', '50', '50', '32', '54', '2018-08-01', '2018-09-16', '6'),
(5, '2019/2020 Ganjil', 'PR001', '1', '1', '1', '1', '1', '2018-09-16', '2018-09-30', '6');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id_prestasi` int(5) NOT NULL,
  `id_mahasiswa` varchar(8) NOT NULL,
  `jenis_prestasi` varchar(15) NOT NULL,
  `tingkat_prestasi` varchar(15) NOT NULL,
  `nama_prestasi` varchar(50) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `penyelenggara` varchar(25) NOT NULL,
  `peringkat` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id_prestasi`, `id_mahasiswa`, `jenis_prestasi`, `tingkat_prestasi`, `nama_prestasi`, `tahun`, `penyelenggara`, `peringkat`) VALUES
(1, 'M0001', 'Sains', 'Islam', 'Makan Sandal', '2013', 'pt garuda', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id_prodi` varchar(6) NOT NULL,
  `nama_prodi` varchar(20) NOT NULL,
  `ketua_prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_prodi`
--

INSERT INTO `tb_prodi` (`id_prodi`, `nama_prodi`, `ketua_prodi`) VALUES
('PR001', 'Management', 'Dr. Lucinta Luna'),
('PR002', 'Accounting', 'Dra. Tiffany Hwang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pt`
--

CREATE TABLE `tb_pt` (
  `id_pt` varchar(7) NOT NULL,
  `nama_pt` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pt`
--

INSERT INTO `tb_pt` (`id_pt`, `nama_pt`) VALUES
('033082', 'STIE Jakarta International College');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ruang`
--

CREATE TABLE `tb_ruang` (
  `id_ruang` int(11) NOT NULL,
  `nama_ruang` varchar(20) NOT NULL,
  `kapasitas` int(3) NOT NULL,
  `keterangan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ruang`
--

INSERT INTO `tb_ruang` (`id_ruang`, `nama_ruang`, `kapasitas`, `keterangan`) VALUES
(1, 'abc', 7, 'aw'),
(2, 'def', 40, 'waw');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `id_sekolah` varchar(6) NOT NULL,
  `nama_sekolah` varchar(30) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `jenis_sekolah` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`id_sekolah`, `nama_sekolah`, `alamat_sekolah`, `jenis_sekolah`) VALUES
('SE001', 'SMK Telkom Malang', 'Jl. Danau Ranau Sawojajar Malang', 'SMK'),
('SE002', 'SMAN 3 Jakarta', 'Jl. Supriyadi No 47 jakarta', 'SMA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_skala_nilai`
--

CREATE TABLE `tb_skala_nilai` (
  `id_skala_nilai` int(11) NOT NULL,
  `id_prodi` varchar(7) NOT NULL,
  `nilai_huruf` varchar(5) NOT NULL,
  `nilai_indeks` float NOT NULL,
  `bobot_nilai_minimum` float NOT NULL,
  `bobot_nilai_maksimum` float NOT NULL,
  `tanggal_mulai_efektif` date NOT NULL,
  `tanggal_akhir_efektif` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_skala_nilai`
--

INSERT INTO `tb_skala_nilai` (`id_skala_nilai`, `id_prodi`, `nilai_huruf`, `nilai_indeks`, `bobot_nilai_minimum`, `bobot_nilai_maksimum`, `tanggal_mulai_efektif`, `tanggal_akhir_efektif`) VALUES
(2, 'PR002', 'A', 4, 86, 100, '2017-09-01', '2020-09-01'),
(3, 'PR002', 'A-', 3.75, 82, 85.9, '2018-08-01', '2018-08-31'),
(4, 'PR002', 'B+', 3.25, 78, 81.9, '0000-00-00', '0000-00-00'),
(5, 'PR002', 'B', 3, 75, 77.9, '0000-00-00', '0000-00-00'),
(6, 'PR002', 'B-', 2.75, 70, 74.9, '0000-00-00', '0000-00-00'),
(7, 'PR002', 'C+', 2.25, 67, 69.9, '2018-08-01', '2018-08-24'),
(8, 'PR002', 'C', 2, 60, 66.9, '2018-08-01', '2018-08-31'),
(9, 'PR002', 'D', 1, 57, 59.9, '2018-08-01', '2018-08-31'),
(11, 'PR002', 'E', 0, 0, 57.9, '0000-00-00', '0000-00-00'),
(12, 'PR001', 'A', 4, 86, 100, '0000-00-00', '0000-00-00'),
(13, 'PR001', 'A-   ', 3.75, 82, 85.9, '0000-00-00', '0000-00-00'),
(14, 'PR001', 'B+   ', 3.25, 78, 81.9, '0000-00-00', '0000-00-00'),
(15, 'PR001', 'B   ', 3, 75, 77.9, '0000-00-00', '0000-00-00'),
(16, 'PR001', 'B-   ', 2.75, 70, 74.9, '0000-00-00', '0000-00-00'),
(18, 'PR001', 'C  ', 2, 60, 66.9, '0000-00-00', '0000-00-00'),
(19, 'PR001', 'D ', 1, 57, 59.9, '0000-00-00', '0000-00-00'),
(20, 'PR001', 'E ', 0, 0, 57.9, '0000-00-00', '0000-00-00'),
(21, 'PR001', 'C+ ', 2.25, 67, 69.9, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_dosen`
--

CREATE TABLE `tb_status_dosen` (
  `id_status_dosen` int(11) NOT NULL,
  `status_dosen` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status_dosen`
--

INSERT INTO `tb_status_dosen` (`id_status_dosen`, `status_dosen`) VALUES
(1, 'Tetap'),
(2, 'Tidak Tetap');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_mhs`
--

CREATE TABLE `tb_status_mhs` (
  `id_status` int(2) NOT NULL,
  `status_mhs` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status_mhs`
--

INSERT INTO `tb_status_mhs` (`id_status`, `status_mhs`) VALUES
(1, 'Aktif'),
(2, 'Non Aktif'),
(3, 'Cuti'),
(4, 'Skorsing'),
(5, 'Drop Out'),
(6, 'Pindah'),
(7, 'Mengundurkan Diri'),
(8, 'Meninggal Dunia'),
(9, 'Keputusan PO'),
(10, 'Menghilang'),
(11, 'Lulus'),
(12, 'Nilai Kosong'),
(13, 'Mutasi'),
(14, 'Putus Sekolah'),
(15, 'Lainnya'),
(16, 'Tetap'),
(17, 'Tidak Tetap'),
(18, 'Mengulang'),
(19, 'Peralihan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transportasi`
--

CREATE TABLE `tb_transportasi` (
  `id_transportasi` int(2) NOT NULL,
  `transportasi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transportasi`
--

INSERT INTO `tb_transportasi` (`id_transportasi`, `transportasi`) VALUES
(1, 'Jalan Kaki'),
(2, 'Angkutan umum/bus/pete-pete'),
(3, 'Mobil/bus antar jemput'),
(4, 'Kereta api'),
(5, 'Ojek'),
(6, 'Andong/bendi/sado/dokar/delman/becak'),
(7, 'Perahu penyeberangan/rakit/getek'),
(8, 'Kuda'),
(9, 'Sepeda'),
(10, 'Sepeda motor'),
(11, 'Mobil pribadi'),
(12, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_level` varchar(7) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `id_level`, `foto`) VALUES
('1111', '$2a$08$X66QyR.fWZwhPYzUjL3KKe2NqbcFvUe.zMuUKu69WKc9EIXwASTzu', '5', ''),
('123', '$2a$08$u7Ctkr3ZQFBPSwXP7VlRuebMGm4/izyWZaQNLWu4jgnFdRT3HEhs2', '2', ''),
('123213', '$2a$08$.4SxKS7E.ijfGhx1AyZew.iJI1ztBkfUT.fWrdA3cs0n.dhx4mjkS', '5', ''),
('435', '$2a$08$Yr1zuArSQtyRrJjPUNKlhuGO.yhenDHncrwYmBzjNK4GTToA.iiwu', '5', ''),
('5555', '$2a$08$pSGevtpplT8RKyJN2tl50.0QtrIyHtwePF.Z6ILO6Jxx9fZPo8a9q', '5', ''),
('600', '$2a$08$FsAh.f5BT8LMoKAHyl/b0uwL5vmAIb8fv8lnxyiul5RvBIsbWScA2', '5', ''),
('6666', '$2a$08$xD09oS/2QFfgvYo31ilokOalAsE4H3mNtKKkVh52WFso.ECTMbXCy', '5', ''),
('777', '$2a$08$u7Ctkr3ZQFBPSwXP7VlRuebMGm4/izyWZaQNLWu4jgnFdRT3HEhs2', '5', ''),
('8765', '$2a$08$shkClltupopUWxIqjhCMOu6lf1nxSShdRHHXGkS0jNhA8W3WWDgWi', '5', ''),
('8888', '$2a$08$TvP5RxS9QoSjBF8Ybmob9OQ2MNmP7m2Rb2ZnLa/BaL9xSK394mA5O', '5', ''),
('9990', '$2a$08$Iu1UPFxaAVlZg/hb9f6xgerzutjnKYeMLIGRY/m0TkZe97h5ChiKu', '5', ''),
('admin', '$2y$12$NK0u.Jg1vccPU6qSzIbm6.jt6xt0UIRdekqbDugu6SWhsfsWMT5IO', '1', ''),
('akademik', '$2a$08$rsKF/OQixcw.sDFAi/prKech9ydWnY7GzOqJNorit7zuBkfQQYe0y', '6', ''),
('finance', '$2a$08$rgc0Vc6JyL7ImVYiEIneI.mIE6hBCdWMGn/Wqco/c.eBk0gthFBtO', '4', ''),
('marketing', '$2a$08$ffYe7eS3OzFegw7uof2j2uR1An8Gxha1xC/XS1WXvvromB3TGPVy.', '3', ''),
('risma', '$2a$08$pq5Q28ueId1gjJ0bT2wKI.NgcEc3R/Sg9PnDNINyH4z2N1S8xWHJO', '6', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_waktu`
--

CREATE TABLE `tb_waktu` (
  `id_waktu` int(11) NOT NULL,
  `waktu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_waktu`
--

INSERT INTO `tb_waktu` (`id_waktu`, `waktu`) VALUES
(1, 'Pagi'),
(2, 'Sore');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wali`
--

CREATE TABLE `tb_wali` (
  `id_mahasiswa` varchar(7) NOT NULL,
  `nama_wali` varchar(30) NOT NULL,
  `tanggal_lahir_wali` date NOT NULL,
  `pendidikan_wali` varchar(20) NOT NULL,
  `pekerjaan_wali` varchar(20) NOT NULL,
  `penghasilan_wali` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_wali`
--

INSERT INTO `tb_wali` (`id_mahasiswa`, `nama_wali`, `tanggal_lahir_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`) VALUES
('M0001', '', '0000-00-00', '', '', ''),
('M0002', '', '0000-00-00', '', '', ''),
('M0003', '', '0000-00-00', '', '', ''),
('M0004', '', '0000-00-00', '', '', ''),
('M0005', '', '0000-00-00', '', '', ''),
('M0006', '', '0000-00-00', '', '', ''),
('M0007', '', '0000-00-00', '', '', ''),
('M0008', '', '0000-00-00', '', '', ''),
('M0009', '', '0000-00-00', '', '', ''),
('M0010', '', '0000-00-00', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_agama`
--
ALTER TABLE `tb_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `tb_aktivitas_perkuliahan`
--
ALTER TABLE `tb_aktivitas_perkuliahan`
  ADD PRIMARY KEY (`id_aktivitas`);

--
-- Indexes for table `tb_alamat`
--
ALTER TABLE `tb_alamat`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_ayah`
--
ALTER TABLE `tb_ayah`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_biaya`
--
ALTER TABLE `tb_biaya`
  ADD PRIMARY KEY (`id_biaya`);

--
-- Indexes for table `tb_bio`
--
ALTER TABLE `tb_bio`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_detail_kurikulum`
--
ALTER TABLE `tb_detail_kurikulum`
  ADD PRIMARY KEY (`id_detail_kurikulum`);

--
-- Indexes for table `tb_detail_pembayaran`
--
ALTER TABLE `tb_detail_pembayaran`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD UNIQUE KEY `nama_dosen` (`nama_dosen`);

--
-- Indexes for table `tb_events`
--
ALTER TABLE `tb_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_grade`
--
ALTER TABLE `tb_grade`
  ADD PRIMARY KEY (`id_grade`);

--
-- Indexes for table `tb_hari`
--
ALTER TABLE `tb_hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indexes for table `tb_hasil_tes`
--
ALTER TABLE `tb_hasil_tes`
  ADD PRIMARY KEY (`id_hasil_tes`);

--
-- Indexes for table `tb_ibu`
--
ALTER TABLE `tb_ibu`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_jalur_pendaftaran`
--
ALTER TABLE `tb_jalur_pendaftaran`
  ADD PRIMARY KEY (`id_jalur_pendaftaran`);

--
-- Indexes for table `tb_jenis_matkul`
--
ALTER TABLE `tb_jenis_matkul`
  ADD PRIMARY KEY (`id_jenis_matkul`);

--
-- Indexes for table `tb_jenis_pendaftaran`
--
ALTER TABLE `tb_jenis_pendaftaran`
  ADD PRIMARY KEY (`id_jenis_pendaftaran`);

--
-- Indexes for table `tb_jenis_tinggal`
--
ALTER TABLE `tb_jenis_tinggal`
  ADD PRIMARY KEY (`id_jt`);

--
-- Indexes for table `tb_kelamin`
--
ALTER TABLE `tb_kelamin`
  ADD PRIMARY KEY (`id_kelamin`);

--
-- Indexes for table `tb_kelas_dosen`
--
ALTER TABLE `tb_kelas_dosen`
  ADD PRIMARY KEY (`id_kp`);

--
-- Indexes for table `tb_kelas_mhs`
--
ALTER TABLE `tb_kelas_mhs`
  ADD PRIMARY KEY (`id_kelas_mhs`);

--
-- Indexes for table `tb_kependudukan`
--
ALTER TABLE `tb_kependudukan`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_konsentrasi`
--
ALTER TABLE `tb_konsentrasi`
  ADD PRIMARY KEY (`id_konsentrasi`),
  ADD KEY `id_prodi` (`id_prodi`);

--
-- Indexes for table `tb_konsentrasi_kelas`
--
ALTER TABLE `tb_konsentrasi_kelas`
  ADD PRIMARY KEY (`id_konsentrasi`);

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_kp`
--
ALTER TABLE `tb_kp`
  ADD PRIMARY KEY (`id_kp`);

--
-- Indexes for table `tb_kurikulum`
--
ALTER TABLE `tb_kurikulum`
  ADD PRIMARY KEY (`id_kurikulum`);

--
-- Indexes for table `tb_ld`
--
ALTER TABLE `tb_ld`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  ADD PRIMARY KEY (`kode_matkul`);

--
-- Indexes for table `tb_mhs_add`
--
ALTER TABLE `tb_mhs_add`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`kode_pembayaran`);

--
-- Indexes for table `tb_pembiayaan_awal`
--
ALTER TABLE `tb_pembiayaan_awal`
  ADD PRIMARY KEY (`id_pembiayaan`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `tb_periode`
--
ALTER TABLE `tb_periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indexes for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tb_pt`
--
ALTER TABLE `tb_pt`
  ADD PRIMARY KEY (`id_pt`);

--
-- Indexes for table `tb_ruang`
--
ALTER TABLE `tb_ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `tb_skala_nilai`
--
ALTER TABLE `tb_skala_nilai`
  ADD PRIMARY KEY (`id_skala_nilai`);

--
-- Indexes for table `tb_status_dosen`
--
ALTER TABLE `tb_status_dosen`
  ADD PRIMARY KEY (`id_status_dosen`);

--
-- Indexes for table `tb_status_mhs`
--
ALTER TABLE `tb_status_mhs`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_transportasi`
--
ALTER TABLE `tb_transportasi`
  ADD PRIMARY KEY (`id_transportasi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_waktu`
--
ALTER TABLE `tb_waktu`
  ADD PRIMARY KEY (`id_waktu`);

--
-- Indexes for table `tb_wali`
--
ALTER TABLE `tb_wali`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_agama`
--
ALTER TABLE `tb_agama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_aktivitas_perkuliahan`
--
ALTER TABLE `tb_aktivitas_perkuliahan`
  MODIFY `id_aktivitas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_detail_kurikulum`
--
ALTER TABLE `tb_detail_kurikulum`
  MODIFY `id_detail_kurikulum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tb_detail_pembayaran`
--
ALTER TABLE `tb_detail_pembayaran`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_events`
--
ALTER TABLE `tb_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_grade`
--
ALTER TABLE `tb_grade`
  MODIFY `id_grade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_hari`
--
ALTER TABLE `tb_hari`
  MODIFY `id_hari` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id_info` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_jalur_pendaftaran`
--
ALTER TABLE `tb_jalur_pendaftaran`
  MODIFY `id_jalur_pendaftaran` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_jenis_pendaftaran`
--
ALTER TABLE `tb_jenis_pendaftaran`
  MODIFY `id_jenis_pendaftaran` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_jenis_tinggal`
--
ALTER TABLE `tb_jenis_tinggal`
  MODIFY `id_jt` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kelas_mhs`
--
ALTER TABLE `tb_kelas_mhs`
  MODIFY `id_kelas_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_kp`
--
ALTER TABLE `tb_kp`
  MODIFY `id_kp` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kurikulum`
--
ALTER TABLE `tb_kurikulum`
  MODIFY `id_kurikulum` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pembiayaan_awal`
--
ALTER TABLE `tb_pembiayaan_awal`
  MODIFY `id_pembiayaan` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  MODIFY `id_pendidikan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_periode`
--
ALTER TABLE `tb_periode`
  MODIFY `id_periode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id_prestasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_ruang`
--
ALTER TABLE `tb_ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_skala_nilai`
--
ALTER TABLE `tb_skala_nilai`
  MODIFY `id_skala_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_status_dosen`
--
ALTER TABLE `tb_status_dosen`
  MODIFY `id_status_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_status_mhs`
--
ALTER TABLE `tb_status_mhs`
  MODIFY `id_status` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_transportasi`
--
ALTER TABLE `tb_transportasi`
  MODIFY `id_transportasi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_waktu`
--
ALTER TABLE `tb_waktu`
  MODIFY `id_waktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_konsentrasi`
--
ALTER TABLE `tb_konsentrasi`
  ADD CONSTRAINT `tb_konsentrasi_ibfk_1` FOREIGN KEY (`id_prodi`) REFERENCES `tb_prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
