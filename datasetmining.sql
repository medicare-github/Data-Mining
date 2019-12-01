-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 01 Des 2019 pada 16.55
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datasetmining`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(35) NOT NULL,
  `username` varchar(325) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `username`, `email`, `pass`) VALUES
(1, 'medicare', 'medicare', 'mcareducation@gmail.com', 'Godoh1998');

-- --------------------------------------------------------

--
-- Struktur dari tabel `generalsos_highsc`
--

CREATE TABLE `generalsos_highsc` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `matematika` float NOT NULL,
  `sosiologi` float NOT NULL,
  `geograpy` float NOT NULL,
  `ekonomi` float NOT NULL,
  `bahasa_indo` float NOT NULL,
  `bahasa_ing` float NOT NULL,
  `jurusan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `generalsos_highsc`
--

INSERT INTO `generalsos_highsc` (`id`, `nama`, `matematika`, `sosiologi`, `geograpy`, `ekonomi`, `bahasa_indo`, `bahasa_ing`, `jurusan`) VALUES
(1, 'Medicare', 70.4, 66, 88, 76, 90, 70, 'S1 Ilmu Komputer'),
(2, 'Imon', 78.5, 66, 78, 87, 67, 66, 'S1 Desain Komunikasi Visual'),
(3, 'bilal', 80.5, 77, 88, 97, 90, 70, 'D3 Rekayasa Perangkat Lunak'),
(4, 'Arian saputra', 78.9, 60, 88, 65, 74.6, 80.1, 'S1 Hukum'),
(5, 'Miftahul Jihad', 60, 60, 88, 65, 60, 66, 'S1 Manajemen Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `general_highsc`
--

CREATE TABLE `general_highsc` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `matematika` float NOT NULL,
  `fisika` float NOT NULL,
  `kimia` float NOT NULL,
  `biologi` float NOT NULL,
  `bahasa_indo` float NOT NULL,
  `bahasa_ing` float NOT NULL,
  `jurusan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `general_highsc`
--

INSERT INTO `general_highsc` (`id`, `nama`, `matematika`, `fisika`, `kimia`, `biologi`, `bahasa_indo`, `bahasa_ing`, `jurusan`) VALUES
(1, 'Medicare', 66, 88, 70, 76, 90, 70, 'Ilmu Komputer'),
(2, 'Bilal', 78.5, 75.5, 80, 82, 75, 60, 'S1 Desain Komunikasi Visual'),
(3, 'Yan', 70.4, 60.6, 70.8, 80, 90, 98, 'S1 Ilmu Komputer'),
(11, 'Miftahul Jihad', 70, 65, 70, 60, 75, 66, 'D3 Rekayasa Perangkat Lunak'),
(12, 'Arian saputra', 78, 64, 71, 61, 62, 80, 'S1Hukum'),
(15, 'Yoni', 70, 65, 80.5, 60.5, 80, 77, 'S1 Ilmu Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `major_highsc`
--

CREATE TABLE `major_highsc` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `bahasa_indo` float NOT NULL,
  `bahasa_ing` float NOT NULL,
  `matematika` float NOT NULL,
  `kejuruan` float NOT NULL,
  `jurusan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `major_highsc`
--

INSERT INTO `major_highsc` (`id`, `nama`, `bahasa_indo`, `bahasa_ing`, `matematika`, `kejuruan`, `jurusan`) VALUES
(1, 'Medicare', 80.6, 70, 65.7, 65.8, 'Ilmu Komputer'),
(2, 'bilal', 90, 70, 55, 78, 'Desain Komunikasi Visual'),
(3, 'Imon', 74, 66, 80, 66, 'D3 Rekayasa Perangkat Lunak'),
(4, 'Miftahul Jihad', 74.6, 80.1, 90.5, 60, 'S1 Hukum');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `generalsos_highsc`
--
ALTER TABLE `generalsos_highsc`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `general_highsc`
--
ALTER TABLE `general_highsc`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `major_highsc`
--
ALTER TABLE `major_highsc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `generalsos_highsc`
--
ALTER TABLE `generalsos_highsc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `general_highsc`
--
ALTER TABLE `general_highsc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `major_highsc`
--
ALTER TABLE `major_highsc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
