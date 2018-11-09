-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2018 at 05:19 AM
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
('BS081', 'Registrasi', 'Ranking 1', 400000, '2019/2020', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_biaya`
--
ALTER TABLE `tb_biaya`
  ADD PRIMARY KEY (`id_biaya`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
