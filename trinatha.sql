-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Mei 2020 pada 18.12
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trinatha`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_master_user`
--

CREATE TABLE IF NOT EXISTS `tb_master_user` (
  `MasterUserId` int(20) NOT NULL,
  `Nik` int(10) NOT NULL,
  `NamaLengkap` varchar(225) NOT NULL,
  `Telepon` int(12) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_master_user`
--

INSERT INTO `tb_master_user` (`MasterUserId`, `Nik`, `NamaLengkap`, `Telepon`, `Email`, `Username`, `Password`, `Level`) VALUES
(123, 123456, 'Eka', 2189766, 'gia.eka@gmail.com', 'eka', 'e10adc3949ba59abbe56e057f20f883e', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_master_user`
--
ALTER TABLE `tb_master_user`
 ADD PRIMARY KEY (`MasterUserId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
