-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2022 pada 15.17
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tripversal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `car`
--

CREATE TABLE `car` (
  `id_car` int(10) NOT NULL,
  `plate_number` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `transmission` varchar(10) NOT NULL,
  `car_name` varchar(25) NOT NULL,
  `year` int(4) NOT NULL,
  `city` varchar(15) NOT NULL,
  `location` varchar(25) NOT NULL,
  `price` int(8) NOT NULL,
  `driver` varchar(25) NOT NULL,
  `seat` int(2) NOT NULL,
  `tank` int(3) NOT NULL,
  `distance` int(6) NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(10) NOT NULL,
  `owner` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `car`
--

INSERT INTO `car` (`id_car`, `plate_number`, `type`, `transmission`, `car_name`, `year`, `city`, `location`, `price`, `driver`, `seat`, `tank`, `distance`, `description`, `status`, `owner`) VALUES
(1, 'D 1670 VZB', 'City Car', 'MT', 'Honda Brio RS', 2020, 'Bandung', 'Bojongsoang', 350000, 'none', 5, 35, 12000, '', 'available', 'Jaya Travel'),
(2, 'D 1140 AAB', 'City Car', 'AT', 'Toyota Raize', 2022, 'Bandung', 'Bojongsoang', 380000, 'Richard Kyle', 5, 35, 5000, '', 'available', 'Mulia Rental & Guide'),
(3, 'D 1320 ACK', 'Minibus', 'MT', 'Toyota Avanza', 2013, 'Bandung', 'Baleendah', 250000, 'none', 8, 45, 138000, 'Lorem ipsum', 'available', 'Jaya Travel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `car_rating`
--

CREATE TABLE `car_rating` (
  `id_rating` int(10) NOT NULL,
  `id_car` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rating` int(2) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `car_rating`
--

INSERT INTO `car_rating` (`id_rating`, `id_car`, `id_user`, `rating`, `comment`, `datetime`) VALUES
(1, 1, 2, 5, 'Lorem Ipsum', '2022-05-08 16:04:25'),
(2, 1, 1, 4, 'Lorem Ipsum', '2022-05-08 16:04:25'),
(3, 2, 1, 4, 'Lorem ipsum', '2022-05-08 16:04:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notification`
--

CREATE TABLE `notification` (
  `id_notification` int(14) NOT NULL,
  `id_user` int(8) NOT NULL,
  `type` varchar(20) NOT NULL,
  `id_car_guide` int(10) NOT NULL,
  `text` longtext NOT NULL,
  `datetime` datetime NOT NULL,
  `date_from` datetime NOT NULL,
  `date_until` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `notification`
--

INSERT INTO `notification` (`id_notification`, `id_user`, `type`, `id_car_guide`, `text`, `datetime`, `date_from`, `date_until`) VALUES
(1, 1, 'message_car', 3, 'Hello do you want me to be ready for tommorow?', '2022-05-12 02:44:04', '2022-05-12 02:44:04', '2022-05-12 02:44:04'),
(2, 0, 'maintenance', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', '2022-05-13 22:00:00', '2022-05-13 22:00:00', '2022-05-13 23:59:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rent`
--

CREATE TABLE `rent` (
  `id_rent` int(12) NOT NULL,
  `type` varchar(15) NOT NULL,
  `id_car_guide` int(8) NOT NULL,
  `id_user` int(8) NOT NULL,
  `city` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rent`
--

INSERT INTO `rent` (`id_rent`, `type`, `id_car_guide`, `id_user`, `city`) VALUES
(1, 'Car Rent', 1, 1, 'Bandung'),
(2, 'Car Rent', 3, 2, 'Bandung'),
(3, 'Car Rent', 1, 2, 'Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `nik` int(16) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id_car`);

--
-- Indeks untuk tabel `car_rating`
--
ALTER TABLE `car_rating`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indeks untuk tabel `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id_notification`);

--
-- Indeks untuk tabel `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id_rent`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `car`
--
ALTER TABLE `car`
  MODIFY `id_car` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `car_rating`
--
ALTER TABLE `car_rating`
  MODIFY `id_rating` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `notification`
--
ALTER TABLE `notification`
  MODIFY `id_notification` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rent`
--
ALTER TABLE `rent`
  MODIFY `id_rent` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
