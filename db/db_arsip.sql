-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 08:25 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_ba`
--

CREATE TABLE `tb_ba` (
  `no_urut` int(11) NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `jenis_arsip` varchar(50) NOT NULL,
  `unit_pencipta` varchar(225) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jumlah` varchar(225) NOT NULL,
  `tingkat_perkembangan` varchar(225) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ba`
--

INSERT INTO `tb_ba` (`no_urut`, `no_surat`, `jenis_arsip`, `unit_pencipta`, `tahun`, `jumlah`, `tingkat_perkembangan`, `keterangan`) VALUES
(3, 'hdthtey64', 'hrehzrhzrwh', 'thzeth', 2022, 'hsfhsh', 'thrhrw', 'hreheh');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ban`
--

CREATE TABLE `tb_ban` (
  `no_urut` int(10) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `jenis_arsip` varchar(50) NOT NULL,
  `unit_pencipta` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `tingkat_perkembangan` varchar(100) NOT NULL,
  `keterangan` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ban`
--

INSERT INTO `tb_ban` (`no_urut`, `no_surat`, `jenis_arsip`, `unit_pencipta`, `tahun`, `jumlah`, `tingkat_perkembangan`, `keterangan`) VALUES
(2, '10/12/XI/2022', 'gt', 'dedes', 2001, '2 berkas', 'kurang baik', 'gd'),
(3, '10/12/XI/2022', 'gt', 'dedes', 2022, '1 berkas', 'g', 'b'),
(4, '10/12/XI/2022', 'gt', 'dedes', 2022, '1 berkas', 'g', 'b'),
(5, '5578578578ghjh', 'gt', 'dedes', 2022, '2 berkas', 'g', 'b'),
(6, '5578578578ghjh', 'ban', 'dedes', 2022, '1 berkas', 'baik', 'b'),
(7, 'bfjlebfjebqfebq/483689', 'ban', 'dedes', 2022, '1 berkas', 'baik', 'gaada');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bpa`
--

CREATE TABLE `tb_bpa` (
  `no_urut` int(11) NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `jenis_arsip` text NOT NULL,
  `unit_pencipta` varchar(225) NOT NULL,
  `tahun` int(225) NOT NULL,
  `jumlah` varchar(225) NOT NULL,
  `tingkat_perkembangan` varchar(225) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bpa`
--

INSERT INTO `tb_bpa` (`no_urut`, `no_surat`, `jenis_arsip`, `unit_pencipta`, `tahun`, `jumlah`, `tingkat_perkembangan`, `keterangan`) VALUES
(1, '876/0008765/GJ-PNS/2018', 'SE', 'Sekretaris Daerah ', 2018, '1 Berkas', 'Asli ', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_se`
--

CREATE TABLE `tb_se` (
  `no_urut` int(11) NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `jenis_arsip` varchar(225) NOT NULL,
  `unit_pencipta` varchar(225) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jumlah` varchar(225) NOT NULL,
  `tingkat_perkembangan` varchar(225) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_se`
--

INSERT INTO `tb_se` (`no_urut`, `no_surat`, `jenis_arsip`, `unit_pencipta`, `tahun`, `jumlah`, `tingkat_perkembangan`, `keterangan`) VALUES
(1, '876/998769/Gj-pns/2018', 'SE', 'Sekretaris Daerah', 2022, '1 Berkas', 'Asli ', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'aqil al kholis', 'aqil', '12345', 'admin'),
(2, 'padil gws', 'padil', '1111', 'pegawai'),
(3, 'andrian', 'iyan', '2222', 'pengurus');

-- --------------------------------------------------------

--
-- Table structure for table `um`
--

CREATE TABLE `um` (
  `no_surat` varchar(25) NOT NULL,
  `jenis_arsip` varchar(25) NOT NULL,
  `unit_pencipta` varchar(25) NOT NULL,
  `tahun` int(25) NOT NULL,
  `jumlah` varchar(25) NOT NULL,
  `tingkat_perkembangan` varchar(25) NOT NULL,
  `keterangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `um`
--

INSERT INTO `um` (`no_surat`, `jenis_arsip`, `unit_pencipta`, `tahun`, `jumlah`, `tingkat_perkembangan`, `keterangan`) VALUES
('13242343', 'um', 'BPA', 2022, '1 bug', '', 'GSHH'),
('876/000234/GJ-PNS/2018', 'SE', 'BPA', 2018, '1 Berkas', 'Baik', 'NALAD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_ba`
--
ALTER TABLE `tb_ba`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indexes for table `tb_ban`
--
ALTER TABLE `tb_ban`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indexes for table `tb_bpa`
--
ALTER TABLE `tb_bpa`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indexes for table `tb_se`
--
ALTER TABLE `tb_se`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `um`
--
ALTER TABLE `um`
  ADD PRIMARY KEY (`no_surat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_ba`
--
ALTER TABLE `tb_ba`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_ban`
--
ALTER TABLE `tb_ban`
  MODIFY `no_urut` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_bpa`
--
ALTER TABLE `tb_bpa`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_se`
--
ALTER TABLE `tb_se`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
