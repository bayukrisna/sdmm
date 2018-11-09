-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2018 at 09:28 AM
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
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_mahasiswa` varchar(11) NOT NULL,
  `id_level` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `id_mahasiswa`, `id_level`) VALUES
('admin', '$2b$10$MQlZmmJPyWLNhaA3BQ.2i.vx1f8vfvcAT/CrF5aefTVN80Qv0cJdK', 'M0000', '1'),
('akademik', '$2a$08$A93qO2QEb6CJm8poAEhjtemxbapXQBaXWDnV/XWkIIj.syLTEQ3oi', '', '6'),
('aldi', '$2a$08$WWAwBJ646n1sYWgkOwwhiet8qlqXrQcONdo.gq6X0cHKjQD1vjPAe', 'M0003', '5'),
('finance', '$2a$08$.0B5SBwkpvmBsjsevsHr3ekW8cPnMzkhCK96s1J7zeWvIxX2AN7/.', '', '4'),
('marketing', '$2a$08$HevO5xRCCuSIPfT6mXPHEOPWvGDNxopv6uinMU2szCBzwgFljYBFu', '', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
