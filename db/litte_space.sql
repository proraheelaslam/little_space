-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 06:31 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `litte_space`
--

-- --------------------------------------------------------

--
-- Table structure for table `bangs`
--

CREATE TABLE `bangs` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `bang_id` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bangs`
--

INSERT INTO `bangs` (`id`, `name`, `type`, `bang_id`, `created_at`, `updated_at`) VALUES
(1, '', 'bikeservice', '93413', '2023-05-08 14:12:07', '2023-05-08 14:12:07'),
(2, '', NULL, '35394', '2023-05-09 13:16:57', '2023-05-09 13:16:57'),
(3, '', NULL, '95917', '2023-05-09 13:21:41', '2023-05-09 13:21:41'),
(4, '', NULL, '66918', '2023-05-09 13:25:02', '2023-05-09 13:25:02'),
(5, '', NULL, '67750', '2023-05-09 14:28:08', '2023-05-09 14:28:08'),
(6, '', NULL, '42156', '2023-05-10 11:15:31', '2023-05-10 11:15:31'),
(7, '', 'bikeservice', '18998', '2023-05-10 11:20:53', '2023-05-10 11:20:53'),
(8, '', 'tradesperson', '20463', '2023-05-10 11:47:12', '2023-05-10 11:47:12'),
(9, '', 'bikeservice', '89907', '2023-05-10 13:04:09', '2023-05-10 13:04:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postal_codes`
--

CREATE TABLE `postal_codes` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postal_codes`
--

INSERT INTO `postal_codes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'W2', '2023-05-16 16:23:57', '2023-05-16 16:23:57'),
(2, 'NW8', '2023-05-16 16:23:57', '2023-05-16 16:23:57'),
(3, 'SW1', '2023-05-16 16:23:57', '2023-05-16 16:23:57'),
(4, 'B3', '2023-05-16 16:23:57', '2023-05-16 16:23:57'),
(5, 'B4', '2023-05-16 16:23:57', '2023-05-16 16:23:57'),
(6, 'B2', '2023-05-16 16:23:57', '2023-05-16 16:23:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bang_id` int(100) DEFAULT NULL,
  `postal_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `bang_id`, `postal_code`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', NULL, NULL, '', 1, NULL, 'W4 1AX 10 Alexandra Road, London', NULL, '2023-05-08 14:12:07', '2023-05-08 14:12:07'),
(3, 'Raheel Aslam', 'a@gmail.com', NULL, '', 3, NULL, 'Akhtar Abad, Pakistan', NULL, '2023-05-09 13:21:41', '2023-05-09 13:21:41'),
(4, 'Raheel Aslam', 'e@gmail.com', NULL, '', 4, NULL, 'P. A. F. Colony, Pakistan', NULL, '2023-05-09 13:25:02', '2023-05-09 13:25:02'),
(5, 'Raheel Aslam', 'r@gmail.com', NULL, '', 5, NULL, 'P. A. F. Base Rafiqi, Pakistan', NULL, '2023-05-09 14:28:08', '2023-05-09 14:28:08'),
(6, 'Raheel Aslam', 'raheel@gmail.com', NULL, '', 6, NULL, 'DN21 5NX 4 Avenue a, Upton, Gainsborough', NULL, '2023-05-10 11:15:32', '2023-05-10 11:15:32'),
(7, 'Raheel Aslam', 'raheel@gmail.com', NULL, '', 7, NULL, 'DN21 5NX 4 Avenue a, Upton, Gainsborough', NULL, '2023-05-10 11:20:53', '2023-05-10 11:20:53'),
(8, 'Raheel Aslam', 'raheel@gmail.com', NULL, '', 8, NULL, 'W4 1AS 7 Greenend Road, London', NULL, '2023-05-10 11:47:13', '2023-05-10 11:47:13'),
(9, 'Raheel Aslam', 'raheel@gmail.com', NULL, '', 9, NULL, 'W4 1AS 7 Greenend Road, London', NULL, '2023-05-10 13:04:09', '2023-05-10 13:04:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangs`
--
ALTER TABLE `bangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `postal_codes`
--
ALTER TABLE `postal_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bangs`
--
ALTER TABLE `bangs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postal_codes`
--
ALTER TABLE `postal_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
