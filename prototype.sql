-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 03:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prototype`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `id_pendaftar` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `id_pendaftar`, `nama`) VALUES
(15, 'Admin', 'Bapak Dosen Yang Terhormat');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_gambar`
--

CREATE TABLE `tabel_gambar` (
  `id_foto` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `tglpembuatan` datetime NOT NULL DEFAULT current_timestamp(),
  `nama` varchar(100) NOT NULL,
  `username_gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_gambar`
--

INSERT INTO `tabel_gambar` (`id_foto`, `id_user`, `foto`, `tglpembuatan`, `nama`, `username_gambar`) VALUES
(20, 0, 'IU2.jpg', '2021-05-26 15:18:49', '', 'pradipta610'),
(21, 0, 'IU3.jpg', '2021-05-26 15:19:11', '', 'pradipta610'),
(22, 0, 'IU4.jpg', '2021-05-26 15:19:29', '', 'pradipta610'),
(23, 0, 'IU5.jpg', '2021-05-26 15:24:44', '', 'pradipta610'),
(24, 0, 'IU6.jpg', '2021-05-26 15:25:21', '', 'pradipta610'),
(27, 0, 'aaaaaaaaaaaaaaaaaa.jpg', '2021-05-26 15:29:55', '', 'mbokdek'),
(36, 0, 'IU10000.jpg', '2021-05-28 09:47:40', '', 'Admin'),
(37, 0, 'IU123.jpg', '2021-05-28 09:47:57', '', 'Admin'),
(38, 0, 'iu2344.jpg', '2021-05-28 09:48:17', '', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('user','admin') NOT NULL,
  `kode_pendaftar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `username`, `password`, `level`, `kode_pendaftar`) VALUES
(15, 'Admin', 'b2ca678b4c936f905fb82f2733f5297f', 'admin', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_gambar`
--
ALTER TABLE `tabel_gambar`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `foto` (`foto`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tabel_gambar`
--
ALTER TABLE `tabel_gambar`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
