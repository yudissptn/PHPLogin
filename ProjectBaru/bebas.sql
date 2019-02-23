-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2019 pada 04.12
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bebas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_siswa`
--

CREATE TABLE `info_siswa` (
  `id` int(11) NOT NULL,
  `NRP` varchar(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Company` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `info_siswa`
--

INSERT INTO `info_siswa` (`id`, `NRP`, `Nama`, `Jurusan`, `Username`, `Password`, `Alamat`, `Company`) VALUES
(1, '7510040025', 'Yudhistira septian Sampoerno', 'Teknik Mekatronika', 'yudissptn', '1234', 'Kedasih V no. 46, Cikarang Utara, Kab. Bekasi', 'PT. Indonesia Epson Industry'),
(2, '7510040001', 'Langgeng Widodo', 'Teknik Mekatronika', 'langgengw', '4321', 'Kedasih V no. 46, Cikarang Utara, Kab. Bekasi', 'PT. Indonesia Epson Industry');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `info_siswa`
--
ALTER TABLE `info_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `info_siswa`
--
ALTER TABLE `info_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
