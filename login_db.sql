-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2020 pada 18.06
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ktp`
--

CREATE TABLE `ktp` (
  `ktp_id` int(11) NOT NULL,
  `nama_provinsi` varchar(100) NOT NULL,
  `kabupaten_kota` varchar(100) NOT NULL,
  `NIK` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `pekerjaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ktp`
--

INSERT INTO `ktp` (`ktp_id`, `nama_provinsi`, `kabupaten_kota`, `NIK`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `agama`, `status_perkawinan`, `pekerjaan`) VALUES
(2, 'SUMUT', 'MEDAN', '123456', 'Andi', 'Medan', '2020-12-30', 'Laki-Laki', 'Alamat', 'Islam', 'Kawin', 'Peker'),
(3, 'SUMUT', 'MEDAN', '123456', 'Andi', 'Medan', '2020-12-30', 'Laki-Laki', 'Alamat', 'Islam', 'Kawin', 'Peker');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(200) DEFAULT NULL,
  `level` enum('user','admin') NOT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `level`, `user_created_at`) VALUES
(4, 'Almi', 'almi@example.com', '$2y$10$jKO2f4tKv1PKKUPkAX202e6u9aFYMr.VEDqDCWQCfyDO0PXQ5/IPi', 'user', '2020-12-30 01:34:57'),
(8, 'aku', 'almi12@example.com', '$2y$10$ElSBuxXK5QEeMyQQyHpHwuj1dNBha1oxwuF7IMKyek43pSsTlwU6m', 'user', '2020-12-30 04:23:03'),
(9, 'Aku', 'almi2@example.com', '$2y$10$KMhJcDL9aAH6CKOx0wUXoOt.qMsu368.q5v7y4Lz0wz/rZ9/kodKe', 'user', '2020-12-30 14:54:00'),
(10, 'arif@example.com', 'arif@example.com', '$2y$10$u3FXsMEvWPSZc1pHLgcrSujFB5gLm1.3E5YLBnYn.zuGUm3aSkcli', 'user', '2020-12-30 15:38:36');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ktp`
--
ALTER TABLE `ktp`
  ADD PRIMARY KEY (`ktp_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ktp`
--
ALTER TABLE `ktp`
  MODIFY `ktp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
