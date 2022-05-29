-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 11:44 AM
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

--
-- Dumping data for table `tabel_hp`
--

INSERT INTO `tabel_hp` (`id_hp`, `id_brand`, `nama_hp`, `foto_hp`) VALUES
(1, 1, 'Galaxy M53', 'galaxy-m53.jpg'),
(2, 1, 'Galaxy M33', 'galaxy-m33.jpg'),
(3, 1, 'Galaxy M23', 'galaxy-m23.jpg'),
(4, 1, 'Galaxy Tab S8', 'galaxy-tab-s8.jpg'),
(5, 1, 'Galaxy M22', 'galaxy-m22.jpg'),
(6, 2, 'Redmi 10A', 'redmi-10a.jpg'),
(7, 2, 'Redmi 10C', 'redmi-10c.jpg'),
(8, 2, 'Redmi Note 11E Pro', 'redmi-note-11e-pro.jpg'),
(9, 2, 'Redmi Note 11S', 'redmi-note-11s.jpg'),
(10, 2, 'Redmi Note 11', 'redmi-note-11.jpg'),
(11, 3, 'iPhone 13 Pro Max', 'iphone-13-pro-max.jpg'),
(12, 3, 'iPhone 13 Pro', 'iphone-13-pro.jpg'),
(13, 3, 'iPhone 13', 'iphone-13.jpg'),
(14, 3, 'iPhone 13 mini', 'iphone-13-mini.jpg'),
(15, 3, 'iPhone 12', 'iphone-12.jpg'),
(16, 4, 'Vivo Y93 (2019)', 'vivo-y93.jpg'),
(17, 4, 'Vivo Y95', 'vivo-y95.jpg'),
(18, 4, 'Vivo Z1 Pro', 'vivo-z1pro.jpg'),
(19, 4, 'Vivo S15 Pro', 'vivo-s15-pro.jpg'),
(20, 4, 'Vivo X80', 'vivo-x80.jpg'),
(21, 5, 'Oppo Reno8 Pro+', 'oppo-reno8-pro.jpg'),
(22, 5, 'Oppo A55s', 'oppo-a55s.jpg'),
(23, 5, 'Oppo A57 5G', 'oppo-a57-5g.jpg'),
(24, 5, 'Oppo K10', 'oppo-k10.jpg'),
(25, 5, 'Oppo F21 Pro', 'oppo-f21-pro.jpg'),
(26, 6, 'Acer Liquid X2', 'acer-liquid-x2.jpg'),
(27, 6, 'Acer Liquid Jade S', 'acer-liquid-jade-s.jpg'),
(28, 6, 'Acer Iconia Talk S', 'acer-iconia-talk-s.jpg'),
(29, 6, 'Acer Liquid Zest', 'acer-liquid-zest.jpeg'),
(30, 6, 'Acer Liquid M330', 'acer-liquid-m330.jpg'),
(31, 7, 'Realme Q5', 'realme-q5.jpg'),
(32, 7, 'Realme Q5i', 'realme-q5i.jpg'),
(33, 7, 'Realme Q5 Pro', 'realme-q5-pro.jpg'),
(34, 7, 'Realme 9', 'realme-9.jpg'),
(35, 7, 'Realme 9i', 'realme-9i.jpg'),
(36, 8, 'Infinix Note 12', 'infinix-note-12.jpg'),
(37, 8, 'Infinix Hot 12 Play', 'infinix-hot-12-play.jpg'),
(38, 8, 'Infinix Note 12 G96', 'infinix-note-12-g96.jpg'),
(39, 8, 'Infinix Hot 12', 'infinix-hot-12.jpg'),
(40, 8, 'Infinix Hot 12i', 'infinix-hot-12i.jpg'),
(41, 9, 'Huawei MatePad 10.4 (2022)', 'huawei-matepad-10.4-(2022).jpg'),
(42, 9, 'Huawei Mate Xs 2', 'huawei-mate-xs-2.jpg'),
(43, 9, 'Huawei Nova 9 SE', 'huawei-nova-9-se.jpg'),
(44, 9, 'Huawei Nova 9 SE 5G', 'huawei-nova-9-se-5g.jpg'),
(45, 9, 'Huawei Nova 9 Pro', 'huawei-nova-9-pro.jpg');

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
-- Dumping data for table `tabel_spek`
--

INSERT INTO `tabel_spek` (`id_spek`, `id_hp`, `tgl_rilis`, `ukuran_layar`, `sistem_operasi`, `chipset`, `memori`, `daya_baterai`, `kamera`, `jaringan`, `harga`, `warna`) VALUES
(1, 1, '2022-04-22', 6.7, 'Android 12, One UI 4.1', 'MediaTek MT6877 Dimensity 900 (6 nm)', '6 GB/8 GB RAM, 128 GB/256 GB Memori Internal', 5000, 'Kamera Depan 32 MP, Kamera Belakang 108 MP + 8 MP + 2 MP + 2 MP', 'GSM/HSPA/LTE/5G', 5799000, 'Green, Blue, Brown'),
(2, 2, '2022-04-08', 6.6, 'Android 12, One UI 4.1', 'Exynos 1280 (5 nm)', '6 GB/8 GB RAM, 128 GB Memori Internal', 5000, 'Kamera Depan 8 MP, Kamera Belakang 50 MP + 8 MP + 2 MP + 2 MP', 'GSM/HSPA/LTE/5G', 3999000, 'Green, Blue, Brown'),
(3, 3, '2022-04-08', 6.6, 'Android 12, One UI 4.1', 'Qualcomm SM7225 Snapdragon 750G 5G (8 nm)', '4 GB/6 GB RAM, 128 GB Memori Internal', 5000, 'Kamera Depan 8 MP, Kamera Belakang 50 MP + 8 MP + 2 MP', 'GSM/HSPA/LTE/5G', 9999999, 'Deep Green, Light Blue, Orange Copper'),
(4, 4, '2022-03-22', 11, 'Android 12, One UI 4.1', 'Qualcomm SM8450 Snapdragon 8 Gen 1 (4 nm)', '8 GB/12 GB RAM, 128 GB/256 GB Memori Internal', 8000, 'Kamera Depan 12 MP, Kamera Belakang 13 MP + 6 MP', 'GSM/HSPA/LTE/5G', 9999000, 'Graphite, Silver, Pink Gold'),
(5, 5, '2021-10-13', 6.4, 'Android 11, upgradable to Android 12, One UI 4.1', 'Mediatek MT6769V/CU Helio G80 (12 nm)', '4 GB/6 GB RAM, 64 GB/128 GB Memori Internal', 5000, 'Kamera Depan 13 MP, Kamera Belakang 48 MP + 8 MP + 2 MP + 2 MP', 'GSM/HSPA/LTE', 4199000, 'Black, White, Light Blue'),
(6, 6, '2022-03-31', 6.53, 'Android 11, MIUI 12.5', 'MediaTek MT6762G Helio G25 (12 nm)', '2 GB/3 GB/4 GB/6 GB RAM, 32 GB/64 GB/128 GB Memori Internal', 5000, 'Kamera Depan 5 MP, Kamera Belakang 13 MP ', 'GSM/HSPA/CDMA2000/LTE', 1449000, 'Charcoal Black, Sea Blue, Slate Grey'),
(7, 7, '2022-03-23', 6.71, 'Android 11, MIUI 13', 'Qualcomm SM6225 Snapdragon 680 4G (6 nm)', '4 GB RAM, 64 GB/128 GB Memori Internal', 5000, 'Kamera Depan 5 MP, Kamera Belakang 50 MP + 2 MP', 'GSM/HSPA/LTE', 1849000, 'Graphite Gray, Ocean Blue, Mint Green'),
(8, 8, '2022-03-04', 6.67, 'Android 11, MIUI 13', 'Qualcomm SM6375 Snapdragon 695 5G (6 nm)', '6 GB/8 GB RAM, 128 GB/256 GB Memori Internal', 5000, 'Kamera Depan 16 MP, Kamera Belakang 108 MP + 8 MP + 2 MP', 'GSM/CDMA/HSPA/CDMA2000/LTE/5G', 3899000, 'Graphite Gray, Polar White, Atlantic Blue'),
(9, 9, '2022-02-09', 6.43, 'Android 11, MIUI 13', 'Mediatek Helio G96 (12 nm)', '6 GB/8 GB RAM, 64 GB/128 GB Memori Internal', 5000, 'Kamera Depan 16 MP, Kamera Belakang 108 MP + 8 MP + 2 MP + 2 MP', 'GSM/HSPA/LTE', 3599000, 'Graphite Gray, Pearl White, Twilight Blue'),
(10, 10, '2022-02-09', 6.43, 'Android 11, MIUI 13', 'Qualcomm SM6225 Snapdragon 680 4G (6 nm)', '4 GB/6 GB RAM, 64 GB/128 GB Memori Internal', 5000, 'Kamera Depan 13 MP, Kamera Belakang 50 MP + 8 MP + 2 MP + 2 MP', 'GSM/HSPA/LTE', 2499000, 'Graphite Gray, Pearl White, Star Blue'),
(11, 11, '2021-09-24', 6.7, 'iOS 15, upgradable to iOS 15.5', 'Apple A15 Bionic (5 nm)', '6 GB RAM, 128 GB/256 GB/512 GB/1 TB Memori Internal', 4352, 'Kamera Depan 12 MP + SL 3D, Kamera Belakang 12 MP + 12 MP + 12 MP + TOF 3D LiDAR Scanner', 'GSM/CDMA/HSPA/EVDO/LTE/5G', 19999000, 'Graphite, Gold, Silver, Sierra Blue, Alpine Green'),
(12, 12, '2021-09-24', 6.1, 'iOS 15, upgradable to iOS 15.5', 'Apple A15 Bionic (5 nm)', '6 GB RAM, 128 GB/256 GB/512 GB/1 TB Memori Internal', 3095, 'Kamera Depan 12 MP + SL 3D, Kamera Belakang 12 MP + 12 MP + 12 MP + TOF 3D LiDAR Scanner', 'GSM/CDMA/HSPA/EVDO/LTE/5G', 18499000, 'Graphite, Gold, Silver, Sierra Blue, Alpine Green'),
(13, 13, '2021-09-24', 6.1, 'iOS 15, upgradable to iOS 15.5', 'Apple A15 Bionic (5 nm)', '4 GB RAM, 128 GB/256 GB/512 GB Memori Internal', 3240, 'Kamera Depan 12 MP + SL 3D, Kamera Belakang 12 MP + 12 MP', 'GSM/CDMA/HSPA/EVDO/LTE/5G', 14999000, 'Starlight, Midnight, Blue, Pink, Red, Green'),
(14, 14, '2021-09-24', 5.4, 'iOS 15, upgradable to iOS 15.5', 'Apple A15 Bionic (5 nm)', '4 GB RAM, 128 GB/256 GB/512 GB Memori Internal', 2438, 'Kamera Depan 12 MP + SL 3D, Kamera Belakang 12 MP + 12 MP', 'GSM/CDMA/HSPA/EVDO/LTE/5G', 12999000, 'Starlight, Midnight, Blue, Pink, Red, Green'),
(15, 15, '2020-10-23', 6.1, 'iOS 14.1, upgradable to iOS 15.5', 'Apple A14 Bionic (5 nm)', '4 GB RAM, 64 GB/128 GB/256 GB Memori Internal', 2815, 'Kamera Depan 12 MP + SL 3D, Kamera Belakang 12 MP + 12 MP', 'GSM/CDMA/HSPA/EVDO/LTE/5G', 12999000, 'Black, White, Red, Green, Blue, Purple'),
(16, 16, '2019-12-15', 6.22, 'Android 8.1', 'MediaTek (MTK6762R) Helio P2', '3 GB RAM, 32 GB Memori Internal', 4030, 'Kamera Depan 8 MP, Kamera Belakang 13 MP + 2 MP', 'GSM/HSDPA/LTE', 1899000, 'Starry Black, Ocean Blue'),
(17, 17, '2018-11-18', 6.22, 'Android 8.1', 'Qualcomm SDM439 Snapdragon 439 (12 nm)', '4 GB RAM, 64 GB Memori Internal', 4030, 'Kamera Depan 20 MP, Kamera Belakang 13 MP + 2 MP', 'GSM/HSDPA/LTE', 2399000, 'Starry Night, Nebula Purple, Aurora Red'),
(18, 18, '2019-07-07', 6.53, 'Android 9.0', 'Qualcomm SDM712 Snapdragon 712', '4 GB RAM, 64 GB Memori Internal', 5000, 'Kamera Depan 32 MP, Kamera Belakang Triple 16 MP + 8 MP + 2 MP', 'GSM/HSDPA/LTE', 3099000, 'Sonic Blue, Sonic Black, Mirror Black'),
(19, 19, '2022-05-27', 6.56, 'Android 12', 'MediaTek Dimensity 8100 (5 nm)', '8 GB/12 GB RAM, 256 GB Memori Internal', 4500, 'Kamera Depan 32 MP, Kamera Belakang Triple 50 MP + 12 MP + 2 MP', 'GSM/HSDPA/4G/5G', 7499000, 'Blue, Black'),
(20, 20, '2022-04-29', 6.78, 'Android 12', 'MediaTek Dimensity 9000 (4 nm)', '8 GB/12 GB RAM, 128 GB/ 256 GB/512 GB Memori Internal', 4500, 'Kamera Depan 32 MP, Kamera Belakang Triple 50 MP + 12 MP + 12 MP', 'GSM/HSDPA/4G/5G', 8199000, 'Black, Blue, Orange'),
(21, 21, '2022-06-01', 6.7, 'Android 12', 'MediaTek Dimensity 8100-Max (5 nm)', '8 GB/12 GB RAM, 256 GB Memori Internal', 4500, 'Kamera Depan 32 MP, Kamera Belakang Triple 50 MP + 8 MP + 2 MP', 'GSM/HSDPA/4G/5G', 8299000, 'Black, Silver, Mint'),
(22, 22, '2022-04-18', 6.5, 'Android 11', 'MediaTek MT6833 Dimensity 700 5G (7 nm)', '6 GB/8 GB RAM, 128 GB Memori Internal', 5000, 'Kamera Depan 8 MP, Kamera Belakang Triple 13 MP + 2 MP + 2 MP', 'GSM/HSDPA/4G/5G', 2699000, 'Black, Blue, Gold'),
(23, 23, '2022-04-15', 6.56, 'Android 12', 'MediaTek MT6833P Dimensity 810 5G (6 nm)', '6 GB/8 GB RAM, 128 GB Memori Internal', 5000, 'Kamera Depan 8 MP, Kamera Belakang Triple 13 MP + 2 MP', 'GSM/HSDPA/4G/5G', 3399000, 'Black, Blue, Lilac'),
(24, 24, '2022-03-29', 6.59, 'Android 11', 'Qualcomm SM6225 Snapdragon 680 4G (6 nm)', '6 GB/8 GB RAM, 128 GB Memori Internal', 5000, 'Kamera Depan 16 MP, Kamera Belakang Triple 50 MP + 2 MP + 2 MP', 'GSM/HSDPA/4G/5G', 2899000, 'Black Carbon, Blue Flame'),
(25, 25, '2022-04-15', 6.1, 'Android 11', 'Qualcomm SM6225 Snapdragon 680 4G (6 nm)', '8 GB RAM, 256 GB Memori Internal', 4500, 'Kamera Depan 32 MP, Kamera Belakang Triple 64 MP + 2 MP + 2 MP', 'GSM/HSDPA/4G', 4399000, 'Sunset Orange, Cosmic Black'),
(26, 26, '2016-02-10', 5.5, 'Android 5.1', 'Mediatek MT6753', '3 GB RAM, 32 GB Memori Internal', 4020, 'Kamera Depan 13 MP, Kamera Belakang 13 MP', 'GSM/HSDPA/LTE', 3399000, 'Black, Gold'),
(27, 27, '2014-12-12', 5, 'Android 4.4.4, upgradable to 5.1', 'Mediatek MT6752M', '2 GB RAM, 16 GB Memori Internal', 2300, 'Kamera Depan 5 MP, Kamera Belakang 13 MP', 'GSM/HSDPA/LTE', 1899000, 'Black, White, Red, Pink'),
(28, 28, '2016-10-25', 5, 'Android 6.0', 'Mediatek MT8735', '2 GB RAM, 16 GB/32 GB Memori Internal', 3400, 'Kamera Depan 2 MP, Kamera Belakang 13 MP', 'GSM/HSDPA/LTE', 1399000, 'Black'),
(29, 29, '2016-02-16', 5, 'Android 6.0', 'Mediatek MT6735', '1 GB RAM, 8 GB Memori Internal', 2000, 'Kamera Depan 5 MP, Kamera Belakang 8 MP', 'GSM/HSDPA/LTE', 1599000, 'Black, White'),
(30, 30, '2015-11-19', 4.5, 'Microsoft Windows 10', 'Qualcomm MSM8909 Snapdragon 210', '1 GB RAM, 8 GB Memori Internal', 2000, 'Kamera Depan 5 MP, Kamera Belakang 5 MP', 'GSM/HSDPA/LTE', 1499000, 'Mystic Black, Pure White'),
(31, 31, '2020-04-28', 6.6, 'Android 12, Realme UI 3.0', 'Qualcomm SM6375 Snapdragon 695 5G (6 nm)', '6 GB/8 GB RAM, 128 GB/256 GB Memori Internal', 5000, 'Kamera Depan 16 MP, Kamera Belakang 50 MP + 2 MP + 2 MP', 'GSM/HSPA/LTE/5G', 3199000, 'Black, Silver, Yellow'),
(32, 32, '2022-04-18', 6.58, 'Android 12, Realme UI 3.0', 'MediaTek MT6833P Dimensity 810 (6 nm)', '4 GB/6 GB RAM, 128 GB Memori Internal', 5000, 'Kamera Depan 8 MP, Kamera Belakang 13 MP + 2 MP', 'GSM/HSPA/LTE/5G', 2799000, 'Black, Blue'),
(33, 33, '2022-04-28', 6.62, 'Android 12, Realme UI 3.0', 'Qualcomm SM8250-AC Snapdragon 870 5G (7 nm)', '6 GB/8 GB RAM, 128 GB/256 GB Memori Internal', 5000, 'Kamera Depan 16 MP, Kamera Belakang 64 MP + 8 MP + 2 MP', 'GSM/CDMA/HSPA/CDMA2000/LTE/5G', 4299000, 'Black, White, Yellow'),
(34, 34, '2022-04-12', 6.4, 'Android 12, Realme UI 3.0', 'Qualcomm SM6225 Snapdragon 680 4G (6 nm)', '6 GB/8 GB RAM, 128 GB Memori Internal', 5000, 'Kamera Depan 16 MP, Kamera Belakang 108 MP + 8 MP + 2 MP', 'GSM/HSPA/LTE', 2999000, 'Meteor Black, Sunburst Gold, Stargaze White'),
(35, 35, '2022-01-10', 6.6, 'Android 11, Realme UI 2.0', 'Qualcomm SM6225 Snapdragon 680 4G (6 nm)', '4 GB/6 GB RAM, 64 GB/128 GB Memori Internal', 5000, 'Kamera Depan 16 MP, Kamera Belakang 50 MP + 2 MP + 2 MP', 'GSM/HSPA/LTE', 2699000, 'Black, Blue'),
(36, 36, '2022-04-26', 6.7, 'Android 11, XOS 10.6', 'MediaTek Helio G88 (12 nm)', '4 GB/6 GB RAM, 64 GB/128 GB Memori Internal', 5000, 'Kamera Depan 16 MP, Kamera Belakang 50 MP + 2 MP + QVGA', 'GSM/HSPA/LTE', 1549000, 'Jewel Blue, Force Black, Sunset Golden'),
(37, 37, '2022-05-30', 6.82, 'Android 12, XOS 10', 'Unisoc T610', '4 GB RAM, 64 GB Memori Internal', 6000, 'Kamera Depan 8 MP, Kamera Belakang 13 MP + QVGA', 'GSM/HSPA/LTE', 1699000, 'Daylight Green, Horizon Blue, Racing Black'),
(38, 38, '2022-05-16', 6.7, 'Android 12, XOS 10.6', 'MediaTek MT6781 Helio G96 (12 nm)', '8 GB RAM, 128 GB/256 GB Memori Internal', 5000, 'Kamera Depan 16 MP, Kamera Belakang 50 MP + 2 MP + QVGA', 'GSM/HSPA/LTE', 1549000, 'Force Black, Snowfall, Sapphire Blue'),
(39, 39, '2022-04-26', 6.82, 'Android 12, XOS 10.6', 'MediaTek Helio G85 (12 nm)', '6 GB RAM, 128 GB Memori Internal', 5000, 'Kamera Depan 8 MP, Kamera Belakang 13 MP + 2 MP + QVGA', 'GSM/HSPA/LTE', 3299000, 'Racing Black, Legend White, Origin Blue, Lucky Green'),
(40, 40, '2022-04-12', 6.82, 'Android 11, XOS 7.6', 'MediaTek MT6761 Helio A22 (12 nm)', '4 GB RAM, 64 GB Memori Internal', 5000, 'Kamera Depan 8 MP, Kamera Belakang 13 MP + QVGA + QVGA', 'GSM/HSPA/LTE', 1549000, 'Racing Black, Horizon Blue, Haze Green, Champagne Gold'),
(41, 41, '2022-05-13', 10.4, 'Android 10, EMUI 10.1', 'Kirin 820 5G (7 nm)', '4 GB RAM, 64 GB/128 GB Memori Internal', 7250, 'Kamera Depan 8 MP, Kamera Belakang 8 MP', 'GSM/HSPA/LTE', 3999000, 'Midnight Grey'),
(42, 42, '2022-05-07', 7.8, 'HarmonyOS 2.0', 'Qualcomm SM8350 Snapdragon 888 4G (5 nm)', '8 GB/12 GB RAM, 256 GB/512 GB Memori Internal', 4880, 'Kamera Depan 10.7 MP, Kamera Belakang 50 MP + 8 MP + 13 MP', 'GSM/CDMA/HSPA/EVDO/LTE', 21999000, 'Black, White, Purple'),
(43, 43, '2022-03-20', 6.78, 'Android 11, EMUI 12', 'Qualcomm SDM665 Snapdragon 665 (11 nm)', '8 GB RAM, 128 GB Memori Internal', 4000, 'Kamera Depan 16 MP, Kamera Belakang 108 MP + 8 MP + 2 MP', 'GSM/HSPA/LTE', 4799000, 'Black, Blue, White'),
(44, 44, '2022-04-23', 6.78, 'Android 11, EMUI 12', 'Qualcomm SM6375 Snapdragon 695 5G (6 nm)', '8 GB RAM, 128 GB Memori Internal', 4000, 'Kamera Depan 16 MP, Kamera Belakang 108 MP + 8 MP + 2 MP', 'GSM/CDMA/HSPA/CDMA2000/LTE/5G', 5799000, 'Black, Blue, White'),
(45, 45, '2021-09-23', 6.72, 'HarmonyOS 2.0', 'Qualcomm SM7325 Snapdragon 778G 4G (6 nm)', '8 GB RAM, 128 GB/256 GB Memori Internal', 4000, 'Kamera Depan 32 MP + 32 MP, Kamera Belakang 50 MP + 8 MP + 2 MP + 2 MP', 'GSM/CDMA/HSPA/LTE', 7799000, 'Black, Blue, Green, Violet');

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
  MODIFY `id_hp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tabel_pencarian`
--
ALTER TABLE `tabel_pencarian`
  MODIFY `id_pencarian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_spek`
--
ALTER TABLE `tabel_spek`
  MODIFY `id_spek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
