-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2019 pada 14.51
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id`, `file`, `nama_barang`, `jumlah`, `harga`, `created_at`, `updated_at`) VALUES
(9, 'AWAL.jpg', 'FAR CRY 4', '50', '750.000', '2019-08-07 05:24:51', '2019-08-07 05:24:51'),
(11, 'COD.jpg', 'CALL OF DUTY WWII', '60', '500.000', NULL, NULL),
(12, 'CTR.jpg', 'CRASH TEAM RACING', '55', '550.000', NULL, NULL),
(13, 'RE.jpg', 'RESIDENT EVIL 4', '80', '600.000', NULL, NULL),
(14, 'GOW.jpg', 'GOD OF WAR', '75', '700.000', NULL, NULL),
(15, 'ATEM.jpg', 'ANTHEM', '80', '450.000', NULL, NULL),
(16, 'BATMAN.jpg', 'BATMAN', '43', '500.000', NULL, NULL),
(17, 'FF.jpg', 'FINAL FANTASY', '63', '760.000', NULL, NULL),
(18, 'PES.jpg', 'PRO EVOLUTION SOCCER', '76', '780.000', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE `konsumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurir`
--

CREATE TABLE `kurir` (
  `nama` int(100) DEFAULT NULL,
  `email` int(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'yayang', '$2y$10$AZtWoxcbG5qmJdhly29kbe7VrGmTBKixFEJiccMS/8k90csE4nFai', NULL, '2019-08-09 02:27:05', '2019-08-09 02:27:05'),
(3, 'iwan', '$2y$10$DS/N4rCLFX6y3UzhCfqOxOtnkKqYwvK8ixFwo12DpkPatOtIeJtVu', NULL, '2019-08-09 04:14:19', '2019-08-09 04:14:19'),
(4, 'hhhhh', '$2y$10$YgEm75DmZ2IVZRwLhpTakehp1wkfNfxzc3fl5/GZJ.rbuJXB5PYa6', NULL, '2019-08-09 04:35:45', '2019-08-09 04:35:45'),
(5, 'ag', '$2y$10$78krBov/oC6iy82.7lBWkuvIyMitogEU8iN3aUl5W.WhhMWvK/y/6', NULL, '2019-08-09 04:55:08', '2019-08-09 04:55:08'),
(6, 'agus123', '$2y$10$IRa6S0BuHQE.0FKbRsjTue2VYvcIH8RyPXm9cmPGF80sce//13srq', NULL, '2019-08-09 05:21:49', '2019-08-09 05:21:49'),
(7, 'iwan kartiwan', '$2y$10$F0Ffc74vFXyxTTFLqirOruNzS1sp09ZzDAlUJl1RAWLjHpclBrxu2', NULL, '2019-08-09 05:42:15', '2019-08-09 05:42:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_07_29_150513_create_barang', 1),
(2, '2019_07_29_150536_create_konsumen', 1),
(3, '2019_08_06_051851_create_login', 2),
(4, '2019_08_07_112502_create_gambars_table', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kurir`
--
ALTER TABLE `kurir`
  ADD KEY `nama` (`nama`,`email`,`pass`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
