-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2020 at 09:02 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen_keluar`
--

CREATE TABLE `absen_keluar` (
  `id` int(11) NOT NULL,
  `idabsen_masuk` int(11) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `jam_keluar` time NOT NULL,
  `jam_kerja` varchar(191) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen_keluar`
--

INSERT INTO `absen_keluar` (`id`, `idabsen_masuk`, `tanggal_keluar`, `jam_keluar`, `jam_kerja`, `keterangan`, `user`) VALUES
(1, 1, '2019-12-06', '15:08:05', '0 jam 5 menit', 'hajhriahwoaw', 1);

-- --------------------------------------------------------

--
-- Table structure for table `absen_masuk`
--

CREATE TABLE `absen_masuk` (
  `id` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen_masuk`
--

INSERT INTO `absen_masuk` (`id`, `tanggal_masuk`, `jam_masuk`, `user`) VALUES
(1, '2019-12-06', '15:02:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `foto` varchar(191) DEFAULT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `nama`, `foto`, `level`) VALUES
(1, 'safor123', '1f5d52911456c3009b13f03355de41bc', 'safor madianta', NULL, 1),
(3, 'vifir123', '1f5d52911456c3009b13f03355de41bc', 'vifir nanda', NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen_keluar`
--
ALTER TABLE `absen_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `absen_masuk`
--
ALTER TABLE `absen_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen_keluar`
--
ALTER TABLE `absen_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `absen_masuk`
--
ALTER TABLE `absen_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
