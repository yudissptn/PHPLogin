-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 02, 2019 at 09:23 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Bebas`
--

-- --------------------------------------------------------

--
-- Table structure for table `hobi`
--

CREATE TABLE `hobi` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nama_hobi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hobi`
--

INSERT INTO `hobi` (`id`, `id_siswa`, `nama_hobi`) VALUES
(1, 1, 'Sepak bola'),
(2, 2, 'Berenang'),
(3, 3, 'Lari');

-- --------------------------------------------------------

--
-- Table structure for table `info_siswa`
--

CREATE TABLE `info_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_siswa`
--

INSERT INTO `info_siswa` (`id_siswa`, `nik`, `nama`, `alamat`, `username`, `password`) VALUES
(2, '7510040001', 'Langgeng W', 'Kedasih', 'langgengw@gmail.com', '4321'),
(3, '7510040025', 'Yudhistira SS', 'Surabaya', 'yudissptn', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `table_baru`
--

CREATE TABLE `table_baru` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_baru`
--

INSERT INTO `table_baru` (`id`, `username`, `password`) VALUES
(1, 'yudissptn', '1234'),
(2, 'liam_gallagher', '4321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hobi`
--
ALTER TABLE `hobi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_siswa`
--
ALTER TABLE `info_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `table_baru`
--
ALTER TABLE `table_baru`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hobi`
--
ALTER TABLE `hobi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `info_siswa`
--
ALTER TABLE `info_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_baru`
--
ALTER TABLE `table_baru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
