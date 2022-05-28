-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 09:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wgadget`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_brand`
--

CREATE TABLE `tabel_brand` (
  `id_brand` int(11) NOT NULL,
  `nama_brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_brand`
--

INSERT INTO `tabel_brand` (`id_brand`, `nama_brand`) VALUES
(1, 'Samsung'),
(2, 'Xiaomi'),
(3, 'Apple'),
(4, 'Vivo'),
(5, 'Oppo'),
(6, 'Acer'),
(7, 'Realme'),
(8, 'Infinix'),
(9, 'Huawei');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_hp`
--

CREATE TABLE `tabel_hp` (
  `id_hp` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `nama_hp` varchar(255) NOT NULL,
  `foto_hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pencarian`
--

CREATE TABLE `tabel_pencarian` (
  `id_pencarian` int(11) NOT NULL,
  `id_hp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_spek`
--

CREATE TABLE `tabel_spek` (
  `id_spek` int(11) NOT NULL,
  `id_hp` int(11) NOT NULL,
  `tgl_rilis` date NOT NULL,
  `ukuran_layar` float NOT NULL,
  `sistem_operasi` varchar(255) NOT NULL,
  `chipset` varchar(255) NOT NULL,
  `memori` varchar(255) NOT NULL,
  `daya_baterai` int(11) NOT NULL,
  `kamera` varchar(255) NOT NULL,
  `jaringan` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `warna` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_brand`
--
ALTER TABLE `tabel_brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `tabel_hp`
--
ALTER TABLE `tabel_hp`
  ADD PRIMARY KEY (`id_hp`),
  ADD KEY `id_brand` (`id_brand`);

--
-- Indexes for table `tabel_pencarian`
--
ALTER TABLE `tabel_pencarian`
  ADD PRIMARY KEY (`id_pencarian`),
  ADD KEY `id_hp_pencarian` (`id_hp`);

--
-- Indexes for table `tabel_spek`
--
ALTER TABLE `tabel_spek`
  ADD PRIMARY KEY (`id_spek`),
  ADD KEY `id_hp` (`id_hp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_brand`
--
ALTER TABLE `tabel_brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tabel_hp`
--
ALTER TABLE `tabel_hp`
  MODIFY `id_hp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_pencarian`
--
ALTER TABLE `tabel_pencarian`
  MODIFY `id_pencarian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_spek`
--
ALTER TABLE `tabel_spek`
  MODIFY `id_spek` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_hp`
--
ALTER TABLE `tabel_hp`
  ADD CONSTRAINT `id_brand` FOREIGN KEY (`id_brand`) REFERENCES `tabel_brand` (`id_brand`);

--
-- Constraints for table `tabel_pencarian`
--
ALTER TABLE `tabel_pencarian`
  ADD CONSTRAINT `id_hp_pencarian` FOREIGN KEY (`id_hp`) REFERENCES `tabel_hp` (`id_hp`);

--
-- Constraints for table `tabel_spek`
--
ALTER TABLE `tabel_spek`
  ADD CONSTRAINT `id_hp` FOREIGN KEY (`id_hp`) REFERENCES `tabel_hp` (`id_hp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;