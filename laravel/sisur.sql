-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 11:25 AM
-- Server version: 10.5.8-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisur`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosens`
--

CREATE TABLE `dosens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengantar_surat_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosens`
--

INSERT INTO `dosens` (`id`, `nama`, `jenis_kelamin`, `pangkat`, `jabatan`, `pengantar_surat_id`, `created_at`, `updated_at`) VALUES
(196911291991032002, 'Muhammad Rosa', 'Laki-laki', 'erggdrtgh', 'fbfg', '5', '2021-02-08 02:24:41', '2021-02-08 03:19:56'),
(196911291991032003, 'Hj. Rd. Elmi Aeni Maliki, S.Pd., M.M.', 'Perempuan', 'Pembina   Tk. I IV/a', 'Guru Madya/Guru Mata Pelajaran Bahasa Indonesia', '5', '2021-01-28 23:44:57', '2021-02-10 01:21:35'),
(196911291991032004, 'dfvbdf', 'Laki-laki', 'sd', 'er', 'Kosong', '2021-02-10 01:46:46', '2021-02-10 01:46:46'),
(327102080408990001, 'Muhammad Nabil', 'Laki-laki', 'Pembina  Tk. I VI/b', 'er', '5', '2021-02-08 03:17:03', '2021-02-08 07:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `jurusans`
--

CREATE TABLE `jurusans` (
  `id` int(20) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `jurusan` varchar(191) NOT NULL,
  `universitas` varchar(191) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `judul_program` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusans`
--

INSERT INTO `jurusans` (`id`, `nama`, `jurusan`, `universitas`, `semester`, `alamat`, `judul_program`, `created_at`, `updated_at`) VALUES
(1177050073, 'Muhammad Nabil', 'Teknik Informatika', 'Teknik Informatika', 'V (Lima)', 'Jln. MBR Bogor Raya', 'Apanya Dong', '2021-02-04 06:21:59', '2021-02-08 07:37:01');

-- --------------------------------------------------------

--
-- Table structure for table `kkn_surats`
--

CREATE TABLE `kkn_surats` (
  `id` int(11) NOT NULL,
  `jurusan_id` varchar(191) DEFAULT NULL,
  `no_surat` varchar(191) NOT NULL,
  `tanggal` date NOT NULL,
  `kepada` varchar(191) NOT NULL,
  `lembaga` varchar(191) NOT NULL,
  `di` varchar(50) NOT NULL,
  `no_surat_ajuan` varchar(191) NOT NULL,
  `tanggal_surat_ajuan` date NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kkn_surats`
--

INSERT INTO `kkn_surats` (`id`, `jurusan_id`, `no_surat`, `tanggal`, `kepada`, `lembaga`, `di`, `no_surat_ajuan`, `tanggal_surat_ajuan`, `tanggal_mulai`, `tanggal_selesai`, `created_at`, `updated_at`) VALUES
(2, '1177050073', '421.1/244/SMP/2020', '2021-02-06', 'Dekan UIN Bandung', 'LPPNM UIN Bandung', 'Bandung', '423.1/242/SMP/2020', '2021-02-06', '2021-02-19', '2021-02-25', '2021-02-05 07:21:41', '2021-02-05 14:21:41');

-- --------------------------------------------------------

--
-- Table structure for table `matkuls`
--

CREATE TABLE `matkuls` (
  `id` int(11) NOT NULL,
  `surat_id` varchar(191) DEFAULT NULL,
  `nama` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkuls`
--

INSERT INTO `matkuls` (`id`, `surat_id`, `nama`, `created_at`, `updated_at`) VALUES
(16, '6', 'Videografi', '2021-02-03 07:02:41', '2021-02-03 14:02:41'),
(17, '6', 'Melukis', '2021-02-03 07:02:50', '2021-02-03 14:02:50'),
(18, '6', 'Ketangkasan', '2021-02-03 07:02:57', '2021-02-03 14:02:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_06_083207_create_dosens_table', 1),
(4, '2021_02_03_155858_tugas_surats', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengantar_surats`
--

CREATE TABLE `pengantar_surats` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(191) NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_kenaikan` date NOT NULL,
  `pangkat_asal` varchar(255) NOT NULL,
  `pangkat_tujuan` varchar(191) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengantar_surats`
--

INSERT INTO `pengantar_surats` (`id`, `no_surat`, `tanggal`, `tanggal_kenaikan`, `pangkat_asal`, `pangkat_tujuan`, `jumlah`, `created_at`, `updated_at`) VALUES
(5, '421.1/244/SMP/2020', '2021-02-02', '2021-02-10', 'VII/a', 'VII/b', 2, '2021-02-08 00:58:52', '2021-02-08 07:58:52');

-- --------------------------------------------------------

--
-- Table structure for table `pindah_surats`
--

CREATE TABLE `pindah_surats` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(191) NOT NULL,
  `tanggal` date NOT NULL,
  `ruang_id` varchar(191) DEFAULT NULL,
  `wali` varchar(255) NOT NULL,
  `pekerjaan` varchar(191) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `sekolah_tujuan` varchar(191) NOT NULL,
  `alamat_sekolah_tujuan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pindah_surats`
--

INSERT INTO `pindah_surats` (`id`, `no_surat`, `tanggal`, `ruang_id`, `wali`, `pekerjaan`, `alamat`, `sekolah_tujuan`, `alamat_sekolah_tujuan`, `created_at`, `updated_at`) VALUES
(3, '421.3/244/SMP/2020', '2021-02-06', '0087063291', 'Ananda Omas', 'Inventor', 'Jln. Sukun Gadungan', 'SMA Langsung Cuss', 'Kab. Ciawi', '2021-02-05 03:44:02', '2021-02-05 10:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `ruangs`
--

CREATE TABLE `ruangs` (
  `id` varchar(191) NOT NULL,
  `nis` varchar(191) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kelas` varchar(191) NOT NULL,
  `matkul_id` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangs`
--

INSERT INTO `ruangs` (`id`, `nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `kelas`, `matkul_id`, `created_at`, `updated_at`) VALUES
('0087063290', '20211270', 'Muhammad Rosa', 'jakarta', '1999-08-04', 'VII D', '16', '2021-01-29 02:00:55', '2021-02-03 14:03:30'),
('0087063291', '21112121212', 'Muhammad Nabil', 'Jakarta', '2021-02-02', 'IX A', '17', '2021-01-31 21:56:16', '2021-02-03 14:03:17'),
('0087063298', '00870632912', 'ASS', 'Jakarta', '2021-02-04', 'IX A', '18', '2021-02-03 02:15:43', '2021-02-03 14:03:22');

-- --------------------------------------------------------

--
-- Table structure for table `surats`
--

CREATE TABLE `surats` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(191) NOT NULL,
  `tanggal` date NOT NULL,
  `lomba` varchar(255) NOT NULL,
  `jenjang` varchar(255) NOT NULL,
  `alamat_pertama` varchar(255) NOT NULL,
  `alamat_kedua` varchar(255) NOT NULL,
  `tahun_lomba` varchar(10) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surats`
--

INSERT INTO `surats` (`id`, `no_surat`, `tanggal`, `lomba`, `jenjang`, `alamat_pertama`, `alamat_kedua`, `tahun_lomba`, `tahun_ajaran`, `created_at`, `updated_at`) VALUES
(6, '421.3/244/SMP/2020', '2021-02-04', 'Pramuki', 'SMP/MTs Tingkat Kabupaten', 'Kantor PMI Kabupaten Garut', 'Jalan Proklamasi NO. 38', '2021', '2020/2021', '2021-02-03 07:02:27', '2021-02-03 14:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `tugas_surats`
--

CREATE TABLE `tugas_surats` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(191) NOT NULL,
  `dosen_id` varchar(191) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `tanggal_acara` date NOT NULL,
  `acara` varchar(255) NOT NULL,
  `waktu_mulai` varchar(191) NOT NULL,
  `waktu_selesai` varchar(191) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas_surats`
--

INSERT INTO `tugas_surats` (`id`, `no_surat`, `dosen_id`, `tanggal`, `tanggal_acara`, `acara`, `waktu_mulai`, `waktu_selesai`, `alamat`, `created_at`, `updated_at`) VALUES
(4, '421.1/244/SMP/2020', '196911291991032003', '2021-02-06', '2021-02-06', 'Pelatihan Guru', '09:30', 'Selesai', 'Gd. Kencana', '2021-02-05 06:12:45', '2021-02-05 13:12:45'),
(5, '421.2/244/SMP/2020', '196911291991032004', '2021-02-04', '2021-02-01', 'Pelatihan Guru', '09:30', '11:00', 'qweefwe', '2021-02-10 01:47:35', '2021-02-10 08:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kurogane', 'cucibaju123@gmail.com', NULL, '$2y$10$z65PpE..4IHBO3RQkr9Wtem.GQsTnCwYKOBP5IMS7BPmStF67Nxei', 'DUMPCoGKVwcBdYvI5rudic90wFMV2zNB4SC3pJtZk1VEJgKmF50w3SHDxd1N', '2019-05-08 21:31:03', '2019-05-08 21:31:03'),
(13, 'Zainal Mustofa', 'zainal123@gmail.com', NULL, '$2y$10$7l4o3Paz88B9ZcdgnvKOJeUb1UmY.kwfqplXLKor04UvgkRXCHwJK', NULL, '2019-05-18 10:26:39', '2019-05-18 10:26:39'),
(14, 'Jojo Mihorjo', 'jojo123@gmail.com', NULL, '$2y$10$qZKWW0ucSCFDJsAWc6cjyOfdHipKwfNQIRUH45MsvHs1uC5xnP9VS', NULL, '2019-05-18 10:30:46', '2019-05-18 10:30:46'),
(15, 'Muhammad Nabil', 'centangtiga@gmail.com', NULL, '$2y$10$HKXDgqedeeUsbIPr3mKWbOSV8npRpos.cPtIGcvNsejQ3Ai4.X1ry', NULL, '2019-05-19 00:08:49', '2019-05-19 00:08:49'),
(16, 'Muhammad Nabil', 'mnabil1718@gmail.com', NULL, '$2y$10$KJEY8ZtRRsYa4n0qi7gF0.BK3nK4z.bbrlrLQSkViHK96Di60nplq', NULL, '2019-05-27 20:36:00', '2019-05-27 20:36:00'),
(17, 'Muhammad Raihan', 'mraihan123@gmail.com', NULL, '$2y$10$ty1a4wREfTbSl/yvoAIen.lhBrTEUw/K/scCDso6P.6TWU/KmiKRW', NULL, '2019-05-29 01:26:37', '2019-05-29 01:26:37'),
(18, 'Muhammad Saep', 'saep123@gmail.com', NULL, '$2y$10$NOdN.nOu/pqdskqA0/SEoeqVpEIt1NQQlxhBz6crm8wZJfBdwm8j2', NULL, '2019-05-29 01:51:16', '2019-05-29 01:51:16'),
(19, 'Muhammad Rizal', 'rizal77@gmail.com', NULL, '$2y$10$xfFA/jdgFS9E0XNn5G.h3e2hun0Z0bMiWabtdyq1BMDZeXBalwARq', NULL, '2019-05-29 02:03:41', '2019-05-29 02:03:41'),
(29, 'Siudin badanna budugan', 'atep123@gmail.com', NULL, '$2y$10$ByYT0LLIj6TlAAvEzSeU3OvjlgQDklGPupAaikL.YFUbOKBp34g9a', NULL, '2019-07-24 17:42:17', '2019-07-24 17:42:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusans`
--
ALTER TABLE `jurusans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kkn_surats`
--
ALTER TABLE `kkn_surats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matkuls`
--
ALTER TABLE `matkuls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengantar_surats`
--
ALTER TABLE `pengantar_surats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pindah_surats`
--
ALTER TABLE `pindah_surats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangs`
--
ALTER TABLE `ruangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_matkul_id` (`matkul_id`) USING BTREE;

--
-- Indexes for table `surats`
--
ALTER TABLE `surats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas_surats`
--
ALTER TABLE `tugas_surats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_users_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=327102080408990002;

--
-- AUTO_INCREMENT for table `kkn_surats`
--
ALTER TABLE `kkn_surats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `matkuls`
--
ALTER TABLE `matkuls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengantar_surats`
--
ALTER TABLE `pengantar_surats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pindah_surats`
--
ALTER TABLE `pindah_surats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surats`
--
ALTER TABLE `surats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tugas_surats`
--
ALTER TABLE `tugas_surats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
