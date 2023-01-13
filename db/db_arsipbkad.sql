-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2022 pada 08.53
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arsipbkad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ba`
--

CREATE TABLE `tb_ba` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `jenis_arsip` varchar(50) NOT NULL,
  `unit_pencipta` varchar(225) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jumlah` varchar(225) NOT NULL,
  `tingkat_perkembangan` varchar(225) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ba`
--

INSERT INTO `tb_ba` (`no_urut`, `no_surat`, `jenis_arsip`, `unit_pencipta`, `tahun`, `jumlah`, `tingkat_perkembangan`, `keterangan`) VALUES
(3, 'hdthtey64', 'hrehzrhzrwh', 'thzeth', 2022, 'hsfhsh', 'thrhrw', 'hreheh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ban`
--

CREATE TABLE `tb_ban` (
  `no_urut` int(11) NOT NULL,
  `no_surat` int(225) NOT NULL,
  `jenis_arsip` varchar(50) NOT NULL,
  `unit_pencipta` varchar(225) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `tingkat_perkembangan` varchar(225) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bpa`
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
-- Dumping data untuk tabel `tb_bpa`
--

INSERT INTO `tb_bpa` (`no_urut`, `no_surat`, `jenis_arsip`, `unit_pencipta`, `tahun`, `jumlah`, `tingkat_perkembangan`, `keterangan`) VALUES
(1, '876/0008765/GJ-PNS/2018', 'SE', 'Sekretaris Daerah ', 2018, '1 Berkas', 'Asli ', 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_se`
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
-- Dumping data untuk tabel `tb_se`
--

INSERT INTO `tb_se` (`no_urut`, `no_surat`, `jenis_arsip`, `unit_pencipta`, `tahun`, `jumlah`, `tingkat_perkembangan`, `keterangan`) VALUES
(1, '876/998769/Gj-pns/2018', 'SE', 'Sekretaris Daerah', 2022, '1 Berkas', 'Asli ', 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'aqil al kholis', 'aqil', '12345', 'admin'),
(2, 'padil gws', 'padil', '1111', 'pegawai'),
(3, 'andrian', 'iyan', '2222', 'pengurus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `um`
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
-- Dumping data untuk tabel `um`
--

INSERT INTO `um` (`no_surat`, `jenis_arsip`, `unit_pencipta`, `tahun`, `jumlah`, `tingkat_perkembangan`, `keterangan`) VALUES
('13232FGRGREG', 'SE', 'BPA', 34324, '1BFDGFD', 'FZHFH', 'FHFFH'),
('13242343', 'um', 'BPA', 2022, '1 bug', '', 'GSHH');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_ba`
--
ALTER TABLE `tb_ba`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indeks untuk tabel `tb_ban`
--
ALTER TABLE `tb_ban`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indeks untuk tabel `tb_bpa`
--
ALTER TABLE `tb_bpa`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indeks untuk tabel `tb_se`
--
ALTER TABLE `tb_se`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `um`
--
ALTER TABLE `um`
  ADD PRIMARY KEY (`no_surat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_ba`
--
ALTER TABLE `tb_ba`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_ban`
--
ALTER TABLE `tb_ban`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_bpa`
--
ALTER TABLE `tb_bpa`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_se`
--
ALTER TABLE `tb_se`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
