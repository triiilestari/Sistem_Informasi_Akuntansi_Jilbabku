-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2020 pada 07.25
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
-- Database: `jilbabku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(29, '2014_10_12_000000_create_users_table', 1),
(30, '2014_10_12_100000_create_password_resets_table', 1),
(31, '2019_11_08_072612_create_roles_table', 1),
(32, '2019_11_08_072704_create_role_user_table', 1),
(33, '2019_11_09_013212_create_produks_table', 2),
(34, '2019_11_09_030751_create_pemasukkans_table', 3),
(35, '2019_11_10_055628_create_pengeluarans_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukkans`
--

CREATE TABLE `pemasukkans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nama` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KodeBarang` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemasukkans`
--

INSERT INTO `pemasukkans` (`id`, `Nama`, `KodeBarang`, `Jumlah`, `Total`, `created_at`, `updated_at`) VALUES
(1, 'Pegawai', 'JB0001', 2, 40000, '2019-11-09 22:24:03', '2019-11-09 22:24:03'),
(2, 'Owner', 'JB0001', 2, 40000, '2019-11-19 23:43:19', '2019-11-19 23:43:19'),
(3, 'Owner', 'JB0001', 2, 40000, '2019-11-19 23:45:43', '2019-11-19 23:45:43'),
(4, 'Owner', 'JB0001', 2, 40000, '2019-11-19 23:47:11', '2019-11-19 23:47:11'),
(5, 'Pegawai', 'JB0001', 2, 40000, '2019-11-19 23:48:25', '2019-11-19 23:48:25'),
(6, 'Pegawai', 'JB0001', 2, 40000, '2019-11-19 23:50:16', '2019-11-19 23:50:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluarans`
--

CREATE TABLE `pengeluarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `Nama` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pengeluaran` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Instansi` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nominal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengeluarans`
--

INSERT INTO `pengeluarans` (`id`, `id_users`, `Nama`, `Pengeluaran`, `Instansi`, `Nominal`, `created_at`, `updated_at`) VALUES
(1, 2, 'Owner', 'Gaji Pegawai', 'Sia Jilbabku', 4000000, '2019-11-09 23:32:47', '2019-11-09 23:32:47'),
(2, 2, 'Owner', 'Gaji Pegawai', 'Sia Jilbabku', 4000000, '2019-11-09 23:33:48', '2019-11-09 23:33:48'),
(3, 2, 'Owner', 'Gaji Pegawai', 'Sia Jilbabku', 4000000, '2019-11-09 23:35:44', '2019-11-09 23:35:44'),
(4, 2, 'Owner', 'Gaji Pegawai', 'Sia Jilbabku', 4000000, '2019-11-10 19:05:28', '2019-11-10 19:05:28'),
(5, 2, 'Owner', 'Gaji Pegawai', 'Sia Jilbabku', 4000000, '2019-11-10 19:39:16', '2019-11-10 19:39:16'),
(6, 2, 'Owner', 'Gaji Pegawai', 'Sia Jilbabku', 4000000, '2019-11-10 19:41:22', '2019-11-10 19:41:22'),
(7, 2, 'Owner', 'Gaji Pegawai', 'PLN', 600000, '2019-11-10 20:37:26', '2019-11-10 20:37:26'),
(8, 2, 'Owner', 'Sewa Rumah Usaha', 'PT Argopuro', 5000000, '2019-11-10 20:42:17', '2019-11-10 20:42:17'),
(9, 2, 'Owner', 'Pembelian Produk', 'Bella Square', 1000000, '2019-11-10 20:49:48', '2019-11-10 20:49:48'),
(10, 2, 'Owner', 'Pembelian Produk', 'Pashmina', 1000000, '2019-11-10 20:52:14', '2019-11-10 20:52:14'),
(11, 2, 'Owner', 'Pembelian Produk', 'Pashmina', 1000000, '2019-11-10 20:52:36', '2019-11-10 20:52:36'),
(12, 2, 'Owner', 'Gaji Pegawai', 'Sia Jilbabku', 5000000, '2019-11-10 20:54:10', '2019-11-10 20:54:10'),
(13, 2, 'Owner', 'Gaji Pegawai', 'Sia Jilbabku', 5000000, '2019-11-10 20:55:25', '2019-11-10 20:55:25'),
(15, 2, 'Owner', 'Sewa Rumah Usaha', 'PT Argopuro', 4000000, '2019-11-10 21:13:10', '2019-11-10 21:13:10'),
(16, 2, 'Owner', 'Gaji Pegawai', 'Sia Jilbabku', 500000, '2019-11-10 21:14:42', '2019-11-10 21:14:42'),
(17, 2, 'Owner', 'Pembelian Produk', 'Elzatta', 3000000, '2019-11-19 23:22:56', '2019-11-19 23:22:56'),
(18, 2, 'Owner', 'Pembelian Produk', 'Elzatta', 3000000, '2019-11-19 23:23:50', '2019-11-19 23:23:50'),
(19, 2, 'Owner', 'Pembelian Produk', 'Elzatta', 3000000, '2019-11-19 23:23:58', '2019-11-19 23:23:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `Nama` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KodeBarang` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NamaBarang` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JenisBarang` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Harga` int(11) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `id_users`, `Nama`, `KodeBarang`, `NamaBarang`, `JenisBarang`, `Harga`, `Jumlah`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pegawai', 'JB0001', 'Elzatta', 'Instan', 20000, 10, '2019-11-08 19:48:13', '2019-11-19 23:52:28'),
(2, 1, 'Pegawai', 'JB0002', 'Pashmina', 'Instan', 27000, 4, '2019-11-08 20:04:15', '2019-11-08 20:04:15'),
(3, 1, 'Pegawai', 'JB0003', 'Bella Square', 'Instan', 25000, 22, '2019-11-08 21:57:20', '2019-11-08 21:57:31'),
(4, 1, 'Pegawai', 'JB0004', 'Pashmina', 'Instan', 40000, 7, '2019-11-09 19:40:47', '2019-11-09 19:40:47'),
(5, 2, 'Owner', 'JB0005', 'Bella Square', 'Selobokan', 27000, 4, '2019-11-09 22:29:08', '2019-11-09 22:29:08'),
(6, 2, 'Owner', 'JB0006', 'Elzatta', 'Selobokan', 20000, 10, '2019-11-19 23:17:14', '2019-11-19 23:17:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'pegawai', '2019-11-08 02:12:04', '2019-11-08 02:12:04'),
(2, 'owner', '2019-11-08 02:12:05', '2019-11-08 02:12:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pegawai', 'pegawai@gmail.com', NULL, '$2y$10$ypiYooC53DDbdBhkYp7aMu6.pQU6nOc9T2Bb2i1rcHtRVRf6ij4am', NULL, '2019-11-08 02:12:05', '2019-11-08 02:12:05'),
(2, 'Owner', 'owner@gmail.com', NULL, '$2y$10$VQP5UxcUeX2A244I4mnHsugIyw7PRKGN1ewhtxxI2Rwo8adSosFUa', NULL, '2019-11-08 02:12:05', '2019-11-08 02:12:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pemasukkans`
--
ALTER TABLE `pemasukkans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemasukkans_kodebarang_foreign` (`KodeBarang`);

--
-- Indeks untuk tabel `pengeluarans`
--
ALTER TABLE `pengeluarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengeluarans_id_users_foreign` (`id_users`);

--
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `produks_kodebarang_unique` (`KodeBarang`),
  ADD KEY `produks_id_users_foreign` (`id_users`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `pemasukkans`
--
ALTER TABLE `pemasukkans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengeluarans`
--
ALTER TABLE `pengeluarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pemasukkans`
--
ALTER TABLE `pemasukkans`
  ADD CONSTRAINT `pemasukkans_kodebarang_foreign` FOREIGN KEY (`KodeBarang`) REFERENCES `produks` (`KodeBarang`);

--
-- Ketidakleluasaan untuk tabel `pengeluarans`
--
ALTER TABLE `pengeluarans`
  ADD CONSTRAINT `pengeluarans_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD CONSTRAINT `produks_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
