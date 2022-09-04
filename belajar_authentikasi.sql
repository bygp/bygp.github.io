-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Sep 2022 pada 15.30
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar_authentikasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(8, '', 'bayu', 'bayugentapermana@gmail.com', '$2y$10$7UW9kawAnCXUSsN9lLADm.0ASfRNeBjyUDFIlHSeuaY6BPn3wL8vK'),
(9, '', 'yahaha', 'aw@gmail.com', '$2y$10$W7lF5WbZIrV9EhYVZ.blV.pbvklCqOc8/pwF1eHoSAhl9ZNyprYOm'),
(10, '', 'uuuu', 'jijfaiasd@gmail.com', '$2y$10$TaHVWGZwYR8UWbyemfe/Lenj7T9cPK0Vwz/RQAx1YXcv7vCAXGeZW'),
(11, 'bbbb', 'bbbbb', 'bbb@gmail.com', '$2y$10$.6C/C7feagoXK1jjRFajpeole44Zft9pQMe0gOsligUtPamzdW/3.'),
(12, 'bayyu', 'bayyu', 'bayyu@gmail.com', '$2y$10$eD3x.HmB3Tr2nf/OAyOw1.wqZ86R3PZr4Dxw2xqh09aEp9M2WuiQu'),
(13, '', 'Bayu G. Permana', 'sadda@gmial.com', '$2y$10$qZkEr3.kZ/VVUT/y00HD4..aJQ8fdGtS8hbLSd2HSsA.SA/CW5Cau'),
(14, '', 'asdsd', 'bayugentapermana@gmail.com', '$2y$10$MMnB6mRmBgJg0hdJytab1eBLdf2BhSgQFQwnYjmhslNSR9R20jrBW'),
(15, '', 'buk', 'permanabayugenta@yahoo.co.id', '$2y$10$QROhWUcpwE1SEYiT/ZnXSuwSW7GgIAv6dOd8.KBqmP55.EXy6Jvda'),
(16, '', 'asdasdasd', 'asdasdasd@gmail.com', '$2y$10$fX3WQar/s7nTeoGudVWodeI7OXooqw.OpSEELEM94vnLv2fZB7Nzm'),
(17, '', 'yuhuy', 'sadasd@gmail.com', '$2y$10$Jl6t05s43LZrqvKLnLjQSeEt29EJ8fOJl.7cN1HsJWXHD3d9oHTxu'),
(18, 'aweasdd', 'kucing', 'qwedaz2@gmail.com', '$2y$10$3CoI2UG0gorKK40sfWvx5.6QafD4i0qPQ3th7CtqIbBxvv2ZCntk.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
