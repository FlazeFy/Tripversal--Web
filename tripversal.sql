-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2022 pada 11.47
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
  `location` varchar(25) NOT NULL,
  `price` int(8) NOT NULL,
  `driver` varchar(25) NOT NULL,
  `seat` int(2) NOT NULL,
  `tank` int(3) NOT NULL,
  `distance` int(6) NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `car`
--

INSERT INTO `car` (`id_car`, `plate_number`, `type`, `transmission`, `car_name`, `year`, `location`, `price`, `driver`, `seat`, `tank`, `distance`, `description`, `status`) VALUES
(1, 'D 1670 VZB', 'City Car', 'MT', 'Honda Brio RS', 2020, 'Bojongsoang', 350000, 'none', 5, 35, 12000, '', 'available'),
(2, 'D 1140 AAB', 'City Car', 'AT', 'Toyota Raize', 2022, 'Bojongsoang', 380000, 'Richard Kyle', 5, 35, 5000, '', 'available');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id_car`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `car`
--
ALTER TABLE `car`
  MODIFY `id_car` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
