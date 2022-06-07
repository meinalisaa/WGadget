-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 09:58 AM
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
--
-- Dumping data for table `tabel_spek`
--

INSERT INTO `tabel_spek` (`id_spek`, `id_hp`, `id_brand`, `tgl_rilis`, `ukuran_layar`, `sistem_operasi`, `chipset`, `memori`, `daya_baterai`, `kamera`, `jaringan`, `harga`, `warna`) VALUES
(31, 31, 7, '2020-04-28', 6.6, 'Android 12, Realme UI 3.0', 'Qualcomm SM6375 Snapdragon 695 5G (6 nm)', '6 GB/8 GB RAM, 128 GB/256 GB Memori Internal', 5000, 'Kamera Depan 16 MP, Kamera Belakang 50 MP + 2 MP + 2 MP', 'GSM/HSPA/LTE/5G', 3199000, 'Black, Silver, Yellow'),
(32, 32, 7, '2022-04-18', 6.58, 'Android 12, Realme UI 3.0', 'MediaTek MT6833P Dimensity 810 (6 nm)', '4 GB/6 GB RAM, 128 GB Memori Internal', 5000, 'Kamera Depan 8 MP, Kamera Belakang 13 MP + 2 MP', 'GSM/HSPA/LTE/5G', 2799000, 'Black, Blue'),
(33, 33, 7, '2022-04-28', 6.62, 'Android 12, Realme UI 3.0', 'Qualcomm SM8250-AC Snapdragon 870 5G (7 nm)', '6 GB/8 GB RAM, 128 GB/256 GB Memori Internal', 5000, 'Kamera Depan 16 MP, Kamera Belakang 64 MP + 8 MP + 2 MP', 'GSM/CDMA/HSPA/CDMA2000/LTE/5G', 4299000, 'Black, White, Yellow'),
(34, 34, 7, '2022-04-12', 6.4, 'Android 12, Realme UI 3.0', 'Qualcomm SM6225 Snapdragon 680 4G (6 nm)', '6 GB/8 GB RAM, 128 GB Memori Internal', 5000, 'Kamera Depan 16 MP, Kamera Belakang 108 MP + 8 MP + 2 MP', 'GSM/HSPA/LTE', 2999000, 'Meteor Black, Sunburst Gold, Stargaze White'),
(35, 35, 7, '2022-01-10', 6.6, 'Android 11, Realme UI 2.0', 'Qualcomm SM6225 Snapdragon 680 4G (6 nm)', '4 GB/6 GB RAM, 64 GB/128 GB Memori Internal', 5000, 'Kamera Depan 16 MP, Kamera Belakang 50 MP + 2 MP + 2 MP', 'GSM/HSPA/LTE', 2699000, 'Black, Blue'),
(36, 36, 8, '2022-04-26', 6.7, 'Android 11, XOS 10.6', 'MediaTek Helio G88 (12 nm)', '4 GB/6 GB RAM, 64 GB/128 GB Memori Internal', 5000, 'Kamera Depan 16 MP, Kamera Belakang 50 MP + 2 MP + QVGA', 'GSM/HSPA/LTE', 1549000, 'Jewel Blue, Force Black, Sunset Golden'),
(37, 37, 8, '2022-05-30', 6.82, 'Android 12, XOS 10', 'Unisoc T610', '4 GB RAM, 64 GB Memori Internal', 6000, 'Kamera Depan 8 MP, Kamera Belakang 13 MP + QVGA', 'GSM/HSPA/LTE', 1699000, 'Daylight Green, Horizon Blue, Racing Black'),
(38, 38, 8, '2022-05-16', 6.7, 'Android 12, XOS 10.6', 'MediaTek MT6781 Helio G96 (12 nm)', '8 GB RAM, 128 GB/256 GB Memori Internal', 5000, 'Kamera Depan 16 MP, Kamera Belakang 50 MP + 2 MP + QVGA', 'GSM/HSPA/LTE', 1549000, 'Force Black, Snowfall, Sapphire Blue'),
(39, 39, 8, '2022-04-26', 6.82, 'Android 12, XOS 10.6', 'MediaTek Helio G85 (12 nm)', '6 GB RAM, 128 GB Memori Internal', 5000, 'Kamera Depan 8 MP, Kamera Belakang 13 MP + 2 MP + QVGA', 'GSM/HSPA/LTE', 3299000, 'Racing Black, Legend White, Origin Blue, Lucky Green'),
(40, 40, 8, '2022-04-12', 6.82, 'Android 11, XOS 7.6', 'MediaTek MT6761 Helio A22 (12 nm)', '4 GB RAM, 64 GB Memori Internal', 5000, 'Kamera Depan 8 MP, Kamera Belakang 13 MP + QVGA + QVGA', 'GSM/HSPA/LTE', 1549000, 'Racing Black, Horizon Blue, Haze Green, Champagne Gold'),
(41, 41, 9, '2022-05-13', 10.4, 'Android 10, EMUI 10.1', 'Kirin 820 5G (7 nm)', '4 GB RAM, 64 GB/128 GB Memori Internal', 7250, 'Kamera Depan 8 MP, Kamera Belakang 8 MP', 'GSM/HSPA/LTE', 3999000, 'Midnight Grey'),
(42, 42, 9, '2022-05-07', 7.8, 'HarmonyOS 2.0', 'Qualcomm SM8350 Snapdragon 888 4G (5 nm)', '8 GB/12 GB RAM, 256 GB/512 GB Memori Internal', 4880, 'Kamera Depan 10.7 MP, Kamera Belakang 50 MP + 8 MP + 13 MP', 'GSM/CDMA/HSPA/EVDO/LTE', 21999000, 'Black, White, Purple'),
(43, 43, 9, '2022-03-20', 6.78, 'Android 11, EMUI 12', 'Qualcomm SDM665 Snapdragon 665 (11 nm)', '8 GB RAM, 128 GB Memori Internal', 4000, 'Kamera Depan 16 MP, Kamera Belakang 108 MP + 8 MP + 2 MP', 'GSM/HSPA/LTE', 4799000, 'Black, Blue, White'),
(44, 44, 9, '2022-04-23', 6.78, 'Android 11, EMUI 12', 'Qualcomm SM6375 Snapdragon 695 5G (6 nm)', '8 GB RAM, 128 GB Memori Internal', 4000, 'Kamera Depan 16 MP, Kamera Belakang 108 MP + 8 MP + 2 MP', 'GSM/CDMA/HSPA/CDMA2000/LTE/5G', 5799000, 'Black, Blue, White'),
(45, 45, 9, '2021-09-23', 6.72, 'HarmonyOS 2.0', 'Qualcomm SM7325 Snapdragon 778G 4G (6 nm)', '8 GB RAM, 128 GB/256 GB Memori Internal', 4000, 'Kamera Depan 32 MP + 32 MP, Kamera Belakang 50 MP + 8 MP + 2 MP + 2 MP', 'GSM/CDMA/HSPA/LTE', 7799000, 'Black, Blue, Green, Violet');

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