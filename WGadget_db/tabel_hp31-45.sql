-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 08:52 AM
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
-- Table structure for table `tabel_hp`
--
--
-- Dumping data for table `tabel_hp`
--

INSERT INTO `tabel_hp` (`id_hp`, `id_brand`, `nama_hp`, `foto_hp`) VALUES
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_hp`
--
ALTER TABLE `tabel_hp`
  ADD PRIMARY KEY (`id_hp`),
  ADD KEY `id_brand` (`id_brand`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_hp`
--
ALTER TABLE `tabel_hp`
  MODIFY `id_hp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_hp`
--
ALTER TABLE `tabel_hp`
  ADD CONSTRAINT `id_brand` FOREIGN KEY (`id_brand`) REFERENCES `tabel_brand` (`id_brand`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
