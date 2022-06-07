-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2022 pada 16.57
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

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
-- Struktur dari tabel `tabel_spek`
--

--
-- Dumping data untuk tabel `tabel_spek`
--

INSERT INTO `tabel_spek` (`id_spek`, `id_hp`, `id_brand`, `tgl_rilis`, `ukuran_layar`, `sistem_operasi`, `chipset`, `memori`, `daya_baterai`, `kamera`, `jaringan`, `harga`, `warna`) VALUES
(16, 16, 4, '2019-12-15', 6.22, 'Android 8.1', 'MediaTek (MTK6762R) Helio P2', '3 GB RAM, 32 GB Memori Internal', 4030, 'Kamera Depan 8 MP, Kamera Belakang 13 MP + 2 MP', 'GSM/HSDPA/LTE', 1899000, 'Starry Black, Ocean Blue'),
(17, 17, 4, '2018-11-18', 6.22, 'Android 8.1', 'Qualcomm SDM439 Snapdragon 439 (12 nm)', '4 GB RAM, 64 GB Memori Internal', 4030, 'Kamera Depan 20 MP, Kamera Belakang 13 MP + 2 MP', 'GSM/HSDPA/LTE', 2399000, 'Starry Night, Nebula Purple, Aurora Red'),
(18, 18, 4, '2019-07-07', 6.53, 'Android 9.0', 'Qualcomm SDM712 Snapdragon 712', '4 GB RAM, 64 GB Memori Internal', 5000, 'Kamera Depan 32 MP, Kamera Belakang Triple 16 MP + 8 MP + 2 MP', 'GSM/HSDPA/LTE', 3099000, 'Sonic Blue, Sonic Black, Mirror Black'),
(19, 19, 4, '2022-05-27', 6.56, 'Android 12', 'MediaTek Dimensity 8100 (5 nm)', '8 GB/12 GB RAM, 256 GB Memori Internal', 4500, 'Kamera Depan 32 MP, Kamera Belakang Triple 50 MP + 12 MP + 2 MP', 'GSM/HSDPA/4G/5G', 7499000, 'Blue, Black'),
(20, 20, 4, '2022-04-29', 6.78, 'Android 12', 'MediaTek Dimensity 9000 (4 nm)', '8 GB/12 GB RAM, 128 GB/ 256 GB/512 GB Memori Internal', 4500, 'Kamera Depan 32 MP, Kamera Belakang Triple 50 MP + 12 MP + 12 MP', 'GSM/HSDPA/4G/5G', 8199000, 'Black, Blue, Orange'),
(21, 21, 5, '2022-06-01', 6.7, 'Android 12', 'MediaTek Dimensity 8100-Max (5 nm)', '8 GB/12 GB RAM, 256 GB Memori Internal', 4500, 'Kamera Depan 32 MP, Kamera Belakang Triple 50 MP + 8 MP + 2 MP', 'GSM/HSDPA/4G/5G', 8299000, 'Black, Silver, Mint'),
(22, 22, 5, '2022-04-18', 6.5, 'Android 11', 'MediaTek MT6833 Dimensity 700 5G (7 nm)', '6 GB/8 GB RAM, 128 GB Memori Internal', 5000, 'Kamera Depan 8 MP, Kamera Belakang Triple 13 MP + 2 MP + 2 MP', 'GSM/HSDPA/4G/5G', 2699000, 'Black, Blue, Gold'),
(23, 23, 5, '2022-04-15', 6.56, 'Android 12', 'MediaTek MT6833P Dimensity 810 5G (6 nm)', '6 GB/8 GB RAM, 128 GB Memori Internal', 5000, 'Kamera Depan 8 MP, Kamera Belakang Triple 13 MP + 2 MP', 'GSM/HSDPA/4G/5G', 3399000, 'Black, Blue, Lilac'),
(24, 24, 5, '2022-03-29', 6.59, 'Android 11', 'Qualcomm SM6225 Snapdragon 680 4G (6 nm)', '6 GB/8 GB RAM, 128 GB Memori Internal', 5000, 'Kamera Depan 16 MP, Kamera Belakang Triple 50 MP + 2 MP + 2 MP', 'GSM/HSDPA/4G/5G', 2899000, 'Black Carbon, Blue Flame'),
(25, 25, 5, '2022-04-15', 6.1, 'Android 11', 'Qualcomm SM6225 Snapdragon 680 4G (6 nm)', '8 GB RAM, 256 GB Memori Internal', 4500, 'Kamera Depan 32 MP, Kamera Belakang Triple 64 MP + 2 MP + 2 MP', 'GSM/HSDPA/4G', 4399000, 'Sunset Orange, Cosmic Black'),
(26, 26, 6, '2016-02-10', 5.5, 'Android 5.1', 'Mediatek MT6753', '3 GB RAM, 32 GB Memori Internal', 4020, 'Kamera Depan 13 MP, Kamera Belakang 13 MP', 'GSM/HSDPA/LTE', 3399000, 'Black, Gold'),
(27, 27, 6, '2014-12-12', 5, 'Android 4.4.4, upgradable to 5.1', 'Mediatek MT6752M', '2 GB RAM, 16 GB Memori Internal', 2300, 'Kamera Depan 5 MP, Kamera Belakang 13 MP', 'GSM/HSDPA/LTE', 1899000, 'Black, White, Red, Pink'),
(28, 28, 6, '2016-10-25', 5, 'Android 6.0', 'Mediatek MT8735', '2 GB RAM, 16 GB/32 GB Memori Internal', 3400, 'Kamera Depan 2 MP, Kamera Belakang 13 MP', 'GSM/HSDPA/LTE', 1399000, 'Black'),
(29, 29, 6, '2016-02-16', 5, 'Android 6.0', 'Mediatek MT6735', '1 GB RAM, 8 GB Memori Internal', 2000, 'Kamera Depan 5 MP, Kamera Belakang 8 MP', 'GSM/HSDPA/LTE', 1599000, 'Black, White'),
(30, 30, 6, '2015-11-19', 4.5, 'Microsoft Windows 10', 'Qualcomm MSM8909 Snapdragon 210', '1 GB RAM, 8 GB Memori Internal', 2000, 'Kamera Depan 5 MP, Kamera Belakang 5 MP', 'GSM/HSDPA/LTE', 1499000, 'Mystic Black, Pure White');

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
