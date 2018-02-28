-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2018 at 09:31 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `individu_peminjaman_ruang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` tinyint(4) NOT NULL,
  `NIP_ADMIN` varchar(30) NOT NULL,
  `NAMA_ADMIN` varchar(100) NOT NULL,
  `EMAIL_ADMIN` varchar(100) NOT NULL,
  `NO_HP_ADMIN` varchar(15) NOT NULL,
  `ALAMAT_ADMIN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_peminjaman`
--

CREATE TABLE `log_peminjaman` (
  `ID_LOG` int(11) NOT NULL,
  `RUANG` varchar(20) NOT NULL,
  `PEMINJAM` varchar(100) NOT NULL,
  `TANGGAL` date NOT NULL,
  `SESI_MULAI` time NOT NULL,
  `SESI_SELESAI` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1518417629),
('m130524_201442_init', 1518417631);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `ID_PEMINJAMAN` int(11) NOT NULL,
  `ID_PEMINJAM` int(11) NOT NULL,
  `ID_RUANG` int(11) NOT NULL,
  `ID_SESI` int(11) NOT NULL,
  `TANGGAL_PINJAM` varchar(50) NOT NULL,
  `KEPERLUAN` text NOT NULL,
  `STATUS_PINJAM` enum('DIPROSES','APPROVED','NOT APPROVED','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`ID_PEMINJAMAN`, `ID_PEMINJAM`, `ID_RUANG`, `ID_SESI`, `TANGGAL_PINJAM`, `KEPERLUAN`, `STATUS_PINJAM`) VALUES
(1, 3, 1, 1, '2018-02-23', 'Pelatihan Anak SMK', 'APPROVED'),
(2, 3, 1, 2, '2018-02-23', 'Pelatihan Anak SMK', 'APPROVED'),
(3, 3, 1, 3, '2018-02-23', 'Pelatihan Anak SMK', 'APPROVED'),
(4, 3, 1, 4, '2018-02-23', 'Pelatihan Anak SMK', 'APPROVED'),
(5, 2, 1, 1, '2018-02-07', 'Kuliah', 'NOT APPROVED'),
(6, 2, 1, 2, '2018-02-07', 'Kuliah', 'NOT APPROVED'),
(7, 2, 1, 8, '2018-02-07', 'Kuliah', 'NOT APPROVED'),
(8, 2, 1, 9, '2018-02-07', 'Kuliah', 'NOT APPROVED'),
(9, 2, 4, 1, '2018-02-17', 'Pelantikan', 'DIPROSES'),
(10, 2, 1, 1, '2018-02-25', 'Pembekalan KKN', 'DIPROSES');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `ID_RUANG` int(11) NOT NULL,
  `NAMA_RUANG` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`ID_RUANG`, `NAMA_RUANG`) VALUES
(1, 'Labkom 2'),
(2, 'Labkom 1'),
(3, 'Vicon'),
(4, 'Aula');

-- --------------------------------------------------------

--
-- Table structure for table `sesi`
--

CREATE TABLE `sesi` (
  `ID_SESI` int(11) NOT NULL,
  `SESI_MULAI` time NOT NULL,
  `SESI_SELESAI` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sesi`
--

INSERT INTO `sesi` (`ID_SESI`, `SESI_MULAI`, `SESI_SELESAI`) VALUES
(1, '07:30:00', '08:20:00'),
(2, '08:20:00', '09:10:00'),
(3, '09:10:00', '10:00:00'),
(4, '10:00:00', '11:10:00'),
(5, '11:10:00', '12:00:00'),
(6, '12:00:00', '01:00:00'),
(7, '01:00:00', '01:50:00'),
(8, '01:50:00', '02:40:00'),
(9, '02:40:00', '03:30:00'),
(10, '03:30:00', '04:20:00'),
(11, '04:20:00', '05:10:00'),
(12, '05:10:00', '06:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'jOyUVQ8feX1wLSe-Y71fwQ2SFRkzbOHh', '$2y$13$7anOVDmYhpLIGUny5aB.fuuimRlhiQiU0SeQTmNxULTGzeHXmKLeq', NULL, 'admin@g.c', 10, 1519307530, 1519307530),
(2, 'user1', 'FpBV1X2A61Bx62ymKzafKngSyVwYDOV7', '$2y$13$yyrGew6kFQXtndqWofIwbuiOtXwcfqTQxCugKw9onJqDv4MBEIfL.', NULL, 'user1@g.c', 10, 1519476137, 1519476137),
(3, 'user2', '9DwlCdE7VqXF3mrx_uCh48-yxtqJxTKg', '$2y$13$ESkc28iRioBHdY0k2sLPDezALyycYUSao1I7pgDolm1FwcBC/RMFW', NULL, 'user2@g.c', 10, 1519522242, 1519522242);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indexes for table `log_peminjaman`
--
ALTER TABLE `log_peminjaman`
  ADD PRIMARY KEY (`ID_LOG`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`ID_PEMINJAMAN`),
  ADD KEY `ID_PEMINJAM` (`ID_PEMINJAM`),
  ADD KEY `ID_RUANG` (`ID_RUANG`),
  ADD KEY `ID_SESI` (`ID_SESI`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`ID_RUANG`);

--
-- Indexes for table `sesi`
--
ALTER TABLE `sesi`
  ADD PRIMARY KEY (`ID_SESI`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_ADMIN` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_peminjaman`
--
ALTER TABLE `log_peminjaman`
  MODIFY `ID_LOG` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `ID_PEMINJAMAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `ID_RUANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sesi`
--
ALTER TABLE `sesi`
  MODIFY `ID_SESI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`ID_PEMINJAM`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`ID_RUANG`) REFERENCES `ruang` (`ID_RUANG`),
  ADD CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`ID_SESI`) REFERENCES `sesi` (`ID_SESI`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
