-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 30 Bulan Mei 2022 pada 02.48
-- Versi server: 5.7.34
-- Versi PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lokerpetik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phone` varchar(14) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `period` int(11) DEFAULT NULL,
  `cv` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`id`, `name`, `email`, `phone`, `address`, `period`, `cv`, `created_at`) VALUES
(1, 'Sodik', 'sodik@mail.com', '089648229162', 'Depok', 6, NULL, NULL),
(3, 'Fajar', 'fajar@gmail.com', '087645342424', 'Depok', 6, NULL, NULL),
(18, 'joko', 'joko@mail.com', '0811222333444', 'Kebayoran Lama', 3, '1653563385.praktikum_ci_mvc_2022.pdf', '2022-05-26 11:09:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `partner_id` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `body` text,
  `location` varchar(255) DEFAULT NULL COMMENT 'job locartion',
  `status` int(11) DEFAULT '1' COMMENT '1 = active 2 = inactive',
  `category` int(11) DEFAULT NULL COMMENT '1 = penuh waktu 2 = paruh waktu 3 = remote 4 = freelance',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jobs`
--

INSERT INTO `jobs` (`id`, `partner_id`, `title`, `body`, `location`, `status`, `category`, `created_at`, `updated_at`) VALUES
(1, '4', 'Sofware Engineer', '1. Knowledge about Wordpress System, LMS System, Cloud Server\n2. Development Website - Troubleshoot System\n3. Troubleshoot Software & Hardware\n4. Administration & Maintain Cloud Server\n5. D3 / S1 degree from Information Technology / Information System', 'DTC, Jl. Margonda, Depok', 1, 1, '2022-05-25 07:56:42', NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT '2' COMMENT '1 = active 2 inactive',
  `created_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `partner`
--

INSERT INTO `partner` (`id`, `company_name`, `picture`, `is_active`, `created_at`) VALUES
(1, 'PT Karya Anak Bangsa', NULL, 1, NULL),
(2, 'PT Pertamina Persero', NULL, 1, NULL),
(3, 'PT Tokopedia', NULL, 1, NULL),
(4, 'PT PLN Persero', NULL, 1, NULL),
(12, 'Company 2', '1653400451.Berita-20210706085545.jpeg', 2, '2022-05-24 20:54:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'auth_token', 'd6289d00e4dddd332e92116f21ea152eeae71a4c30e82bf8eba7959e42e5aafe', '[\"*\"]', NULL, '2022-05-23 18:55:18', '2022-05-23 18:55:18'),
(2, 'App\\Models\\User', 1, 'auth_token', '64fecbdcba1b8d4fae246528665480f3a2cbf55262669b30223bd488d2784787', '[\"*\"]', NULL, '2022-05-23 18:58:19', '2022-05-23 18:58:19'),
(3, 'App\\Models\\User', 1, 'auth_token', '4f9cf386bbfb42f627899d809aa0c4d3bd0909fb1b50d803ee9e42c6aaeb09df', '[\"*\"]', NULL, '2022-05-23 19:00:42', '2022-05-23 19:00:42'),
(4, 'App\\Models\\User', 1, 'auth_token', '164886a26b763b672df1e86a35950a9d0d59db413d9b0236db1ffcb7a74cd92a', '[\"*\"]', '2022-05-23 19:30:19', '2022-05-23 19:25:41', '2022-05-23 19:30:19'),
(5, 'App\\Models\\User', 1, 'auth_token', '7e1011cc2c4d1edf2c024674d4bd62238d91320c0744096c64f432d81483977e', '[\"*\"]', '2022-05-23 19:30:53', '2022-05-23 19:30:31', '2022-05-23 19:30:53'),
(6, 'App\\Models\\User', 1, 'auth_token', '8b49be786f60df2e4f65333f2e3be91aaf4320fd3050f5a796b17228adfa7a30', '[\"*\"]', '2022-05-24 06:54:11', '2022-05-23 21:34:15', '2022-05-24 06:54:11'),
(7, 'App\\Models\\User', 1, 'auth_token', 'a47468b7edc1bb1feae85ee9c8eff74b138f0271b150784f488f07c1338728a4', '[\"*\"]', '2022-05-25 00:34:54', '2022-05-25 00:34:32', '2022-05-25 00:34:54'),
(8, 'App\\Models\\User', 1, 'auth_token', '1d93f1b64ba4ae8018948887ac2ac4dc92c67a972d7d0d390eee7365067d0807', '[\"*\"]', '2022-05-25 05:37:31', '2022-05-25 00:47:43', '2022-05-25 05:37:31'),
(9, 'App\\Models\\User', 2, 'auth_token', 'a621b3d94e51f8dd8519263d4b365fcfc6cbfabc727b232a90734bee60ca54c8', '[\"*\"]', NULL, '2022-05-26 02:47:29', '2022-05-26 02:47:29'),
(10, 'App\\Models\\User', 3, 'auth_token', '42fde3dff2b3d4c4a1d001089b61d6e29e14aa2290cd1e192bb1da082b7eec75', '[\"*\"]', NULL, '2022-05-26 03:14:24', '2022-05-26 03:14:24'),
(11, 'App\\Models\\User', 4, 'auth_token', 'c3b97f8db7d78f01af8cbc996f268715d5deca1543db7b9a98a83674de4534fd', '[\"*\"]', NULL, '2022-05-26 03:23:53', '2022-05-26 03:23:53'),
(12, 'App\\Models\\User', 5, 'auth_token', 'f5c00ad3b0cc51525aa56fcbbb60a6eadd953d4da3bf3017face7dea7bedea8b', '[\"*\"]', NULL, '2022-05-26 03:45:27', '2022-05-26 03:45:27'),
(13, 'App\\Models\\User', 6, 'auth_token', 'fe9f502a0d3f77d8174691c5413fa358b8715184a9a8c4e6a01189993f045905', '[\"*\"]', NULL, '2022-05-26 04:09:45', '2022-05-26 04:09:45'),
(14, 'App\\Models\\User', 6, 'auth_token', '67d8f5c13051885fc728b3614e5f8fcd0cc6b49a3a6959af51058d5651c55642', '[\"*\"]', NULL, '2022-05-26 04:12:17', '2022-05-26 04:12:17'),
(15, 'App\\Models\\User', 1, 'auth_token', 'a04328cb11979f4de3ceedaee50cb8dd5e3e5b21ff275233eb72e5f270044967', '[\"*\"]', NULL, '2022-05-26 04:18:57', '2022-05-26 04:18:57'),
(16, 'App\\Models\\User', 6, 'auth_token', 'aa47de8f178af380e2e00d31a80766efdd629139cf74bc5e10ce09aa65d21148', '[\"*\"]', NULL, '2022-05-26 04:20:23', '2022-05-26 04:20:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alumni_id` int(11) DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1 = admin 2 = alumni',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `alumni_id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.com', NULL, '$2y$10$Db.JdTdYzOgS3qdZwJ96o.OPkuhQF1Aen7s0ma0vmI.n0MzmRCo8K', NULL, NULL, '1', '2022-05-23 18:55:18', '2022-05-23 18:55:18'),
(6, 'joko', 'joko@mail.com', NULL, '$2y$10$Xp.6wyzJ92jEPdEZLl63BOx2pudalmzNKhk.GwaK8LGZe2TqlTkEK', NULL, 18, '2', '2022-05-26 04:09:45', '2022-05-26 04:09:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
