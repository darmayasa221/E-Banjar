-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2021 at 06:46 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_e-banjar-sv`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_masyarakat`
--

CREATE TABLE `tb_data_masyarakat` (
  `ktp` bigint(17) NOT NULL,
  `nama` char(255) NOT NULL,
  `alamat` char(255) NOT NULL,
  `kelamin` char(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` bigint(15) NOT NULL,
  `email` char(255) NOT NULL,
  `avatar` varchar(535) NOT NULL,
  `role_id` int(2) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data_masyarakat`
--

INSERT INTO `tb_data_masyarakat` (`ktp`, `nama`, `alamat`, `kelamin`, `tgl_lahir`, `no_hp`, `email`, `avatar`, `role_id`, `date_created`) VALUES
(1111111111111111, 'admin', 'Jalan Raya Hangtuah', 'l', '2021-11-01', 6285953701473, 'admin@admin.com', 'default.png', 1, '2021-11-07 12:10:47'),
(1111111111111112, 'user', 'denpasar Sanur A', 'p', '2021-11-01', 6285953701473, 'user@user.com', 'default.png', 2, '2021-11-07 12:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan_masyarakat`
--

CREATE TABLE `tb_kegiatan_masyarakat` (
  `id` int(255) NOT NULL,
  `waktu_kegiatan` date NOT NULL,
  `nama_kegiatan` char(255) NOT NULL,
  `deskripsi` varchar(535) NOT NULL,
  `foto_kegiatan` varchar(535) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kegiatan_masyarakat`
--

INSERT INTO `tb_kegiatan_masyarakat` (`id`, `waktu_kegiatan`, `nama_kegiatan`, `deskripsi`, `foto_kegiatan`) VALUES
(31, '2021-11-11', 'kegiatan di update', 'semua adalah proses untuk menjadi sarjana', '6187e93117dde.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

CREATE TABLE `user_access` (
  `id` int(11) NOT NULL,
  `access` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access`
--

INSERT INTO `user_access` (`id`, `access`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_data_masyarakat`
--
ALTER TABLE `tb_data_masyarakat`
  ADD PRIMARY KEY (`ktp`);

--
-- Indexes for table `tb_kegiatan_masyarakat`
--
ALTER TABLE `tb_kegiatan_masyarakat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access`
--
ALTER TABLE `user_access`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kegiatan_masyarakat`
--
ALTER TABLE `tb_kegiatan_masyarakat`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_access`
--
ALTER TABLE `user_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
