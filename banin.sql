-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 17 Des 2019 pada 02.14
-- Versi server: 5.7.24
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `doctor`
--

CREATE TABLE `doctor` (
  `id` int(5) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `spesialis` varchar(30) NOT NULL,
  `free` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `doctor`
--

INSERT INTO `doctor` (`id`, `nama`, `alamat`, `spesialis`, `free`) VALUES
(1, 'banin', 'kediri', 'THT', 'iya'),
(2, 'hadin', 'kedirikota', 'tht', 'tdk'),
(3, 'bnnin', 'kedirikotatahu', 'no', 'free'),
(4, 'bnnin', 'kedirikotatahu', 'no', 'free');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `kegunaan` varchar(10) NOT NULL,
  `tersedia` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id`, `nama`, `kegunaan`, `tersedia`) VALUES
(1, 'obat1', 'penyakit1', 'free'),
(2, 'obat2', 'penyakit2', 'tidak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perawat`
--

CREATE TABLE `perawat` (
  `id` int(11) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `free` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perawat`
--

INSERT INTO `perawat` (`id`, `nama`, `alamat`, `free`) VALUES
(1, 'perawat1', 'jl alamat perawat no. 1', 'free'),
(2, 'perawat2', 'jl alamat perawat no. 2', 'no'),
(3, 'perawat3', 'jl perawat no. 3', 'free');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'abc', '$2y$10$wVwEVVXjzZNNG6btKxvUHO2KiEJJzH7Q2S9LJYQ0zjHgLn2cGSJvu'),
(7, 'banin', '$2y$10$amB5GNe175JL4kxThjr56erRUUVMh5A7QssTxMsx8ZHQoEDoiqhQm'),
(8, 'suryo', '$2y$10$JZ7eVjYyIk3kPTWUmf/DwO/PBVjIhs/XPIJb9EjYPrAQeIFOhz3zq'),
(9, 'suryo2', '$2y$10$e3TZotE.cvJX1yTjU5fZA.cyx3F1lpFSkJ72xBlhIUCRxwWcHpYw2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perawat`
--
ALTER TABLE `perawat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `perawat`
--
ALTER TABLE `perawat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
