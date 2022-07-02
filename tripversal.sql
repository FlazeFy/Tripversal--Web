-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2022 pada 18.45
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
  `id_garage` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `car`
--

INSERT INTO `car` (`id_car`, `plate_number`, `type`, `transmission`, `car_name`, `year`, `city`, `location`, `price`, `driver`, `seat`, `tank`, `distance`, `description`, `status`, `id_garage`) VALUES
(1, 'D 1670 VZB', 'City Car', 'MT', 'Honda Brio RS', 2020, 'Bandung', 'Jl. Terusan Buah Batu', 350000, 'none', 5, 35, 12000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet porttitor eget dolor morbi non. At auctor urna nunc id cursus metus. Odio aenean sed adipiscing diam donec. Lacus laoreet non curabitur gravida arcu ac tortor. Interdum velit laoreet id donec ultrices. Posuere urna nec tincidunt praesent semper feugiat. \r\n\r\nNulla posuere sollicitudin aliquam ultrices sagittis orci a. Phasellus faucibus scelerisque eleifend donec pretium vulputate sapien. Non consectetur a erat nam. Venenatis cras sed felis eget. Commodo ullamcorper a lacus vestibulum sed arcu non odio. Id semper risus in hendrerit gravida rutrum quisque non. Morbi tristique senectus et netus. \r\n\r\nPellentesque elit eget gravida cum sociis natoque penatibus. Porta lorem mollis aliquam ut porttitor leo a. Aliquet nibh praesent tristique magna sit amet purus. Molestie a iaculis at erat. Sem integer vitae justo eget magna. Sociis natoque penatibus et magnis dis parturient. Quisque id diam vel quam. Rhoncus est pellentesque elit ullamcorper.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet porttitor eget dolor morbi non. At auctor urna nunc id cursus metus. Odio aenean sed adipiscing diam donec. Lacus laoreet non curabitur gravida arcu ac tortor. Interdum velit laoreet id donec ultrices. Posuere urna nec tincidunt praesent semper feugiat. \r\n\r\nNulla posuere sollicitudin aliquam ultrices sagittis orci a. Phasellus faucibus scelerisque eleifend donec pretium vulputate sapien. Non consectetur a erat nam. Venenatis cras sed felis eget. Commodo ullamcorper a lacus vestibulum sed arcu non odio. Id semper risus in hendrerit gravida rutrum quisque non. Morbi tristique senectus et netus. \r\n\r\nPellentesque elit eget gravida cum sociis natoque penatibus. Porta lorem mollis aliquam ut porttitor leo a. Aliquet nibh praesent tristique magna sit amet purus. Molestie a iaculis at erat. Sem integer vitae justo eget magna. Sociis natoque penatibus et magnis dis parturient. Quisque id diam vel quam. Rhoncus est pellentesque elit ullamcorper.', 'available', 1),
(2, 'D 1140 AAB', 'City Car', 'AT', 'Toyota Raize', 2022, 'Bandung', 'Jl. Telekomunikasi', 380000, 'Richard Kyle', 5, 35, 5000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet porttitor eget dolor morbi non. At auctor urna nunc id cursus metus. Odio aenean sed adipiscing diam donec. Lacus laoreet non curabitur gravida arcu ac tortor. Interdum velit laoreet id donec ultrices. Posuere urna nec tincidunt praesent semper feugiat. \r\n\r\nNulla posuere sollicitudin aliquam ultrices sagittis orci a. Phasellus faucibus scelerisque eleifend donec pretium vulputate sapien. Non consectetur a erat nam. Venenatis cras sed felis eget. Commodo ullamcorper a lacus vestibulum sed arcu non odio. Id semper risus in hendrerit gravida rutrum quisque non. Morbi tristique senectus et netus. \r\n\r\nPellentesque elit eget gravida cum sociis natoque penatibus. Porta lorem mollis aliquam ut porttitor leo a. Aliquet nibh praesent tristique magna sit amet purus. Molestie a iaculis at erat. Sem integer vitae justo eget magna. Sociis natoque penatibus et magnis dis parturient. Quisque id diam vel quam. Rhoncus est pellentesque elit ullamcorper.', 'available', 1),
(3, 'D 1320 ACK', 'Minibus', 'MT', 'Toyota Avanza', 2013, 'Bandung', 'Jl. Terusan Buah Batu', 250000, 'none', 8, 45, 138000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet porttitor eget dolor morbi non. At auctor urna nunc id cursus metus. Odio aenean sed adipiscing diam donec. Lacus laoreet non curabitur gravida arcu ac tortor. Interdum velit laoreet id donec ultrices. Posuere urna nec tincidunt praesent semper feugiat. \r\n\r\nNulla posuere sollicitudin aliquam ultrices sagittis orci a. Phasellus faucibus scelerisque eleifend donec pretium vulputate sapien. Non consectetur a erat nam. Venenatis cras sed felis eget. Commodo ullamcorper a lacus vestibulum sed arcu non odio. Id semper risus in hendrerit gravida rutrum quisque non. Morbi tristique senectus et netus. \r\n\r\nPellentesque elit eget gravida cum sociis natoque penatibus. Porta lorem mollis aliquam ut porttitor leo a. Aliquet nibh praesent tristique magna sit amet purus. Molestie a iaculis at erat. Sem integer vitae justo eget magna. Sociis natoque penatibus et magnis dis parturient. Quisque id diam vel quam. Rhoncus est pellentesque elit ullamcorper.', 'available', 1);

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
(1, 2, 2, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2022-06-07 16:04:25'),
(2, 3, 1, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2022-05-08 16:04:25'),
(3, 1, 1, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2022-05-08 16:04:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(16) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_garage_guide` int(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `dateAdded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `id_user`, `id_garage_guide`, `type`, `dateAdded`) VALUES
(1, 1, 1, 'Garage', '2022-06-30'),
(2, 1, 1, 'Guide', '2022-07-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `garage`
--

CREATE TABLE `garage` (
  `id_garage` int(10) NOT NULL,
  `garage_name` varchar(25) NOT NULL,
  `garage_username` varchar(15) NOT NULL,
  `garage_location` varchar(50) NOT NULL,
  `garage_desc` longtext NOT NULL,
  `garage_phone` varchar(14) NOT NULL,
  `garage_mail` varchar(35) NOT NULL,
  `garage_coordinate` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `garage`
--

INSERT INTO `garage` (`id_garage`, `garage_name`, `garage_username`, `garage_location`, `garage_desc`, `garage_phone`, `garage_mail`, `garage_coordinate`) VALUES
(1, 'Maju Jaya Rent', 'majujaya', 'Jl. Telekomunikasi No.1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet porttitor eget dolor morbi non. At auctor urna nunc id cursus metus. Odio aenean sed adipiscing diam donec. Lacus laoreet non curabitur gravida arcu ac tortor. Interdum velit laoreet id donec ultrices. Posuere urna nec tincidunt praesent semper feugiat.\r\n\r\nNulla posuere sollicitudin aliquam ultrices sagittis orci a. Phasellus faucibus scelerisque eleifend donec pretium vulputate sapien. Non consectetur a erat nam. Venenatis cras sed felis eget. Commodo ullamcorper a lacus vestibulum sed arcu non odio. Id semper risus in hendrerit gravida rutrum quisque non. Morbi tristique senectus et netus.\r\n\r\nPellentesque elit eget gravida cum sociis natoque penatibus. Porta lorem mollis aliquam ut porttitor leo a. Aliquet nibh praesent tristique magna sit amet purus. Molestie a iaculis at erat. Sem integer vitae justo eget magna. Sociis natoque penatibus et magnis dis parturient. Quisque id diam vel quam. Rhoncus est pellentesque elit ullamcorper.', '08114882002', 'majujaya@gmail.com', '-6.972483, 107.634146');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guide`
--

CREATE TABLE `guide` (
  `id_guide` int(8) NOT NULL,
  `guide_fullname` varchar(30) NOT NULL,
  `language` varchar(20) NOT NULL,
  `price` int(9) NOT NULL,
  `description` varchar(500) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `city` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guide`
--

INSERT INTO `guide` (`id_guide`, `guide_fullname`, `language`, `price`, `description`, `phone`, `city`, `location`, `email`, `status`) VALUES
(1, 'Raymond Tex', 'ID, EN, ES', 430000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '08114888790', 'Bandung', 'Jl. Terusan Buah Batu', 'reymon.ex@gmail.com', 'available');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guide_rating`
--

CREATE TABLE `guide_rating` (
  `id_rating` int(10) NOT NULL,
  `id_guide` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rating` int(2) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guide_rating`
--

INSERT INTO `guide_rating` (`id_rating`, `id_guide`, `id_user`, `rating`, `comment`, `datetime`) VALUES
(1, 1, 1, 5, 'Lorem ipsum', '2022-06-16 06:30:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `id_message` int(16) NOT NULL,
  `id_contact` int(16) NOT NULL,
  `body` longtext NOT NULL,
  `datetime` datetime NOT NULL,
  `type` varchar(10) NOT NULL,
  `sender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `message`
--

INSERT INTO `message` (`id_message`, `id_contact`, `body`, `datetime`, `type`, `sender`) VALUES
(1, 1, 'Hallo apakah untuk besok masih ada stok rental brio MT?', '2022-07-02 16:15:27', 'Text', 'customer'),
(2, 2, 'Hallo nama saya Raymond, saya akan menjadi pemandu wisata Anda selama di Bandung untuk 2 hari kedepan', '2022-07-02 16:15:27', 'Text', 'seller'),
(3, 2, 'Untuk besok meet dimana ya?', '2022-07-02 17:30:56', 'Text', 'seller'),
(4, 1, 'yg tanpa sopir', '2022-07-02 18:32:36', 'Text', 'customer');

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
(2, 0, 'maintenance', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', '2022-05-13 22:00:00', '2022-05-13 22:00:00', '2022-05-13 23:59:00'),
(3, 1, 'message_guide', 1, 'Hello. my name is Raymond, and I will be your tour guide for the next 24 hr', '2022-05-30 08:16:51', '2022-05-30 08:16:51', '2022-05-30 08:16:51');

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
(3, 'Car Rent', 1, 2, 'Bandung'),
(4, 'Tour Guide', 1, 1, 'Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tips`
--

CREATE TABLE `tips` (
  `id_tips` int(5) NOT NULL,
  `text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tips`
--

INSERT INTO `tips` (`id_tips`, `text`) VALUES
(1, 'Don\'t leave your trash in the car. Keep it clean.'),
(2, 'Our vehicles are regularly disinfected.'),
(3, 'Our driver and tour guide have been vaccinated.'),
(4, 'Our drivers and tour guide routinely check body temperature.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `travel_destination`
--

CREATE TABLE `travel_destination` (
  `id_place` int(10) NOT NULL,
  `place_name` varchar(50) NOT NULL,
  `place_address` varchar(100) NOT NULL,
  `place_coordinate` varchar(100) NOT NULL,
  `place_city` varchar(20) NOT NULL,
  `place_desc` longtext NOT NULL,
  `place_day` varchar(30) NOT NULL,
  `place_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `travel_destination`
--

INSERT INTO `travel_destination` (`id_place`, `place_name`, `place_address`, `place_coordinate`, `place_city`, `place_desc`, `place_day`, `place_time`) VALUES
(1, 'Floating Market Lembang', 'Jl. Grand Hotel No.33E, Lembang, Kec. Lembang, Kabupaten Bandung Barat, Jawa Barat', '-6.816820234912758, 107.61727826027885', 'Bandung', 'Floating market where local foods, snacks & items like clothing are carried by sellers on boats.', 'All-Day', 'Weekday (09:00 - 18:00), Weekend (08:00 - 19:00) '),
(2, 'Orchid Forest Cikole', 'Genteng, Cikole, Kec. Lembang, Kabupaten Bandung Barat, Jawa Barat', '-6.780397110926974, 107.63748036137494', 'Bandung', 'More than 20,000 orchids feature in this forest attraction with a playground & hanging bridge.', 'All-Day', 'Weekday (09:00 - 18:00), Weekend (08:00 - 19:00) '),
(3, 'Farmhouse Susu Lembang', 'Jl. Raya Lembang No.108, Gudangkahuripan, Kec. Lembang, Kabupaten Bandung Barat, Jawa Barat', '-6.832116710117892, 107.60544659146585', 'Bandung', 'Theme park with European-style buildings, Dutch costumes for rent, a mini zoo & a hip restaurant.', 'All-Day', 'All-Day (09:00 - 18:00)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `fullname`, `username`, `address`, `nik`, `email`, `password`, `phone`) VALUES
(1, 'Leonardho R Sitanggang', 'flazefy', 'Jl. Telekomunikasi No.1', '1234567891234561', 'flazen.edu@gmail.com', 'nopass123', '08114809123'),
(2, 'RIchard Kyle', 'richardkyle', 'Jl. Terusan Buah Batu No.24', '1862347919412375', 'richardkylee@gmail.com', 'tester123', '081248857133');

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
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `garage`
--
ALTER TABLE `garage`
  ADD PRIMARY KEY (`id_garage`);

--
-- Indeks untuk tabel `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`id_guide`);

--
-- Indeks untuk tabel `guide_rating`
--
ALTER TABLE `guide_rating`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indeks untuk tabel `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

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
-- Indeks untuk tabel `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`id_tips`);

--
-- Indeks untuk tabel `travel_destination`
--
ALTER TABLE `travel_destination`
  ADD PRIMARY KEY (`id_place`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `car`
--
ALTER TABLE `car`
  MODIFY `id_car` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `car_rating`
--
ALTER TABLE `car_rating`
  MODIFY `id_rating` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `garage`
--
ALTER TABLE `garage`
  MODIFY `id_garage` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `guide`
--
ALTER TABLE `guide`
  MODIFY `id_guide` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `guide_rating`
--
ALTER TABLE `guide_rating`
  MODIFY `id_rating` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `notification`
--
ALTER TABLE `notification`
  MODIFY `id_notification` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rent`
--
ALTER TABLE `rent`
  MODIFY `id_rent` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tips`
--
ALTER TABLE `tips`
  MODIFY `id_tips` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `travel_destination`
--
ALTER TABLE `travel_destination`
  MODIFY `id_place` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
