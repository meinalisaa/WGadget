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
-- Struktur dari tabel `tabel_hp`
--

-- CREATE TABLE `tabel_hp` (
--   `id_hp` int(11) NOT NULL,
--   `id_brand` int(11) NOT NULL,
--   `nama_hp` varchar(255) NOT NULL,
--   `foto_hp` varchar(255) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_hp`
--

INSERT INTO `tabel_hp` (`id_hp`, `id_brand`, `nama_hp`, `foto_hp`) VALUES
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
(30, 6, 'Acer Liquid M330', 'acer-liquid-m330.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_hp`
--
ALTER TABLE `tabel_hp`
  ADD PRIMARY KEY (`id_hp`),
  ADD KEY `id_brand` (`id_brand`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_hp`
--
ALTER TABLE `tabel_hp`
  MODIFY `id_hp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_hp`
--
ALTER TABLE `tabel_hp`
  ADD CONSTRAINT `id_brand` FOREIGN KEY (`id_brand`) REFERENCES `tabel_brand` (`id_brand`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
