-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 01:37 PM
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
-- Table structure for table `tabel_spek`
--

CREATE TABLE `tabel_spek` (
  `id_spek` int(11) NOT NULL,
  `id_hp` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
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
-- Dumping data for table `tabel_spek`
--

INSERT INTO `tabel_spek` (`id_spek`, `id_hp`, `id_brand`, `tgl_rilis`, `ukuran_layar`, `sistem_operasi`, `chipset`, `memori`, `daya_baterai`, `kamera`, `jaringan`, `harga`, `warna`) VALUES
(1, 1, 1, '2022-04-22', 6.7, 'Android 12, One UI 4.1', 'MediaTek MT6877 Dimensity 900 (6 nm)', '6 GB/8 GB RAM, 128 GB/256 GB Memori Internal', 5000, 'Kamera Depan 32 MP, Kamera Belakang 108 MP + 8 MP + 2 MP + 2 MP', 'GSM/HSPA/LTE/5G', 5799000, 'Green, Blue, Brown'),
(2, 2, 1, '2022-04-08', 6.6, 'Android 12, One UI 4.1', 'Exynos 1280 (5 nm)', '6 GB/8 GB RAM, 128 GB Memori Internal', 5000, 'Kamera Depan 8 MP, Kamera Belakang 50 MP + 8 MP + 2 MP + 2 MP', 'GSM/HSPA/LTE/5G', 3999000, 'Green, Blue, Brown'),
(3, 3, 1, '2022-04-08', 6.6, 'Android 12, One UI 4.1', 'Qualcomm SM7225 Snapdragon 750G 5G (8 nm)', '4 GB/6 GB RAM, 128 GB Memori Internal', 5000, 'Kamera Depan 8 MP, Kamera Belakang 50 MP + 8 MP + 2 MP', 'GSM/HSPA/LTE/5G', 9999999, 'Deep Green, Light Blue, Orange Copper'),
(4, 4, 1, '2022-03-22', 11, 'Android 12, One UI 4.1', 'Qualcomm SM8450 Snapdragon 8 Gen 1 (4 nm)', '8 GB/12 GB RAM, 128 GB/256 GB Memori Internal', 8000, 'Kamera Depan 12 MP, Kamera Belakang 13 MP + 6 MP', 'GSM/HSPA/LTE/5G', 9999000, 'Graphite, Silver, Pink Gold'),
(5, 5, 1, '2021-10-13', 6.4, 'Android 11, upgradable to Android 12, One UI 4.1', 'Mediatek MT6769V/CU Helio G80 (12 nm)', '4 GB/6 GB RAM, 64 GB/128 GB Memori Internal', 5000, 'Kamera Depan 13 MP, Kamera Belakang 48 MP + 8 MP + 2 MP + 2 MP', 'GSM/HSPA/LTE', 4199000, 'Black, White, Light Blue'),
(6, 6, 2, '2022-03-31', 6.53, 'Android 11, MIUI 12.5', 'MediaTek MT6762G Helio G25 (12 nm)', '2 GB/3 GB/4 GB/6 GB RAM, 32 GB/64 GB/128 GB Memori Internal', 5000, 'Kamera Depan 5 MP, Kamera Belakang 13 MP', 'GSM/HSPA/CDMA2000/LTE', 1449000, 'Charcoal Black, Sea Blue, Slate Grey'),
(7, 7, 2, '2022-03-23', 6.71, 'Android 11, MIUI 13', 'Qualcomm SM6225 Snapdragon 680 4G (6 nm)', '4 GB RAM, 64 GB/128 GB Memori Internal', 5000, 'Kamera Depan 5 MP, Kamera Belakang 50 MP + 2 MP', 'GSM/HSPA/LTE', 1849000, 'Graphite Gray, Ocean Blue, Mint Green'),
(8, 8, 2, '2022-03-04', 6.67, 'Android 11, MIUI 13', 'Qualcomm SM6375 Snapdragon 695 5G (6 nm)', '6 GB/8 GB RAM, 128 GB/256 GB Memori Internal', 5000, 'Kamera Depan 16 MP, Kamera Belakang 108 MP + 8 MP + 2 MP', 'GSM/CDMA/HSPA/CDMA2000/LTE/5G', 3899000, 'Graphite Gray, Polar White, Atlantic Blue'),
(9, 9, 2, '2022-02-09', 6.43, 'Android 11, MIUI 13', 'Mediatek Helio G96 (12 nm)', '6 GB/8 GB RAM, 64 GB/128 GB Memori Internal', 5000, 'Kamera Depan 16 MP, Kamera Belakang 108 MP + 8 MP + 2 MP + 2 MP', 'GSM/HSPA/LTE', 3599000, 'Graphite Gray, Pearl White, Twilight Blue'),
(10, 10, 2, '2022-02-09', 6.43, 'Android 11, MIUI 13', 'Qualcomm SM6225 Snapdragon 680 4G (6 nm)', '4 GB/6 GB RAM, 64 GB/128 GB Memori Internal', 5000, 'Kamera Depan 13 MP, Kamera Belakang 50 MP + 8 MP + 2 MP + 2 MP', 'GSM/HSPA/LTE', 2499000, 'Graphite Gray, Pearl White, Star Blue'),
(11, 11, 3, '2021-09-24', 6.7, 'iOS 15, upgradable to iOS 15.5', 'Apple A15 Bionic (5 nm)', '6 GB RAM, 128 GB/256 GB/512 GB/1 TB Memori Internal', 4352, 'Kamera Depan 12 MP + SL 3D, Kamera Belakang 12 MP + 12 MP + 12 MP + TOF 3D LiDAR scanner', 'GSM/CDMA/HSPA/EVDO/LTE/5G', 19999000, 'Graphite, Gold, Silver, Sierra Blue, Alpine Green'),
(12, 12, 3, '2021-09-24', 6.1, 'iOS 15, upgradable to iOS 15.5', 'Apple A15 Bionic (5 nm)', '6 GB RAM, 128 GB/256 GB/512 GB/1 TB Memori Internal', 3095, 'Kamera Depan 12 MP + SL 3D, Kamera Belakang 12 MP + 12 MP + 12 MP + TOF 3D LiDAR scanner', 'GSM/CDMA/HSPA/EVDO/LTE/5G', 18499000, 'Graphite, Gold, Silver, Sierra Blue, Alpine Green'),
(13, 13, 3, '2021-09-24', 6.1, 'iOS 15, upgradable to iOS 15.5', 'Apple A15 Bionic (5 nm)', '4 GB RAM, 128 GB/256 GB/512 GB Memori Internal', 3240, 'Kamera Depan 12 MP + SL 3D, Kamera Belakang 12 MP + 12 MP', 'GSM/CDMA/HSPA/EVDO/LTE/5G', 14999000, 'Starlight, Midnight, Blue, Pink, Red, Green'),
(14, 14, 3, '2021-09-24', 5.4, 'iOS 15, upgradable to iOS 15.5', 'Apple A15 Bionic (5 nm)', '4 GB RAM, 128 GB/256 GB/512 GB Memori Internal', 2438, 'Kamera Depan 12 MP + SL 3D, Kamera Belakang 12 MP + 12 MP', 'GSM/CDMA/HSPA/EVDO/LTE/5G', 12999000, 'Starlight, Midnight, Blue, Pink, Red, Green'),
(15, 15, 3, '2020-10-23', 6.1, 'iOS 14.1, upgradable to iOS 15.5', 'Apple A14 Bionic (5 nm)', '4 GB RAM, 64 GB/128 GB/256 GB Memori Internal', 2815, 'Kamera Depan 12 MP + SL 3D, Kamera Belakang 12 MP + 12 MP', 'GSM/CDMA/HSPA/EVDO/LTE/5G', 12999000, 'Black, White, Red, Green, Blue, Purple');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_spek`
--
ALTER TABLE `tabel_spek`
  ADD PRIMARY KEY (`id_spek`),
  ADD KEY `id_hp` (`id_hp`),
  ADD KEY `id_brand_spek` (`id_brand`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_spek`
--
ALTER TABLE `tabel_spek`
  MODIFY `id_spek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_spek`
--
ALTER TABLE `tabel_spek`
  ADD CONSTRAINT `id_brand_spek` FOREIGN KEY (`id_brand`) REFERENCES `tabel_brand` (`id_brand`),
  ADD CONSTRAINT `id_hp` FOREIGN KEY (`id_hp`) REFERENCES `tabel_hp` (`id_hp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
