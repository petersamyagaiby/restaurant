-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2024 at 12:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `total_person` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `phone`, `date`, `time`, `total_person`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', '123', '2024-01-25', '22:49:00', 1, 0, 1, '2024-01-13 14:49:27', '2024-01-13 14:54:32'),
(2, 'test 1', '123', '2024-01-23', '15:34:00', 2, 1, 2, '2024-01-15 10:34:57', '2024-01-15 10:52:53'),
(3, 'test 2', '123', '2024-01-31', '01:35:00', 4, 2, 2, '2024-01-15 10:35:24', '2024-01-15 10:53:02'),
(4, 'try 1', '123', '2024-02-07', '18:36:00', 3, 0, 3, '2024-01-15 10:36:13', '2024-01-15 10:36:13'),
(5, 'try 2', '123', '2024-03-13', '00:39:00', 1, 1, 3, '2024-01-15 10:36:41', '2024-01-15 10:53:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(6, 'Fried Egg', 9.99, 'Made with eggs, lettuce, salt, oil and other ingredients.', '01HM6JFEQCK2ZJPNBN81C17CF9.png', '2024-01-15 10:45:24', '2024-01-15 10:45:24'),
(7, 'Hawaiian Pizza', 15.99, 'Made with eggs, lettuce, salt, oil and other ingredients.', '01HM6JMWYWE1D08JKMTRKVXVGV.png', '2024-01-15 10:48:22', '2024-01-15 10:48:22'),
(8, 'Martinez Cocktail', 7.00, 'Made with eggs, lettuce, salt, oil and other ingredients.', '01HM6JP19W62XHS4EKDWFXJA1B.png', '2024-01-15 10:48:59', '2024-01-15 10:48:59'),
(9, 'Butterscotch Cake', 20.99, 'Made with eggs, lettuce, salt, oil and other ingredients.', '01HM6JQ1SK9CH7G3V02ZW3G3SH.png', '2024-01-15 10:49:32', '2024-01-15 10:49:32'),
(10, 'Mint Lemonade', 5.89, 'Made with eggs, lettuce, salt, oil and other ingredients.', '01HM6JQKW4RD359EEJ6YGPN881.png', '2024-01-15 10:49:51', '2024-01-15 10:49:51'),
(11, 'Chocolate Icecream', 18.05, 'Made with eggs, lettuce, salt, oil and other ingredients.', '01HM6JR50BF5WWAMP2KJCS9F93.png', '2024-01-15 10:50:09', '2024-01-15 10:50:09'),
(12, 'Cheese Burger', 12.55, 'Made with eggs, lettuce, salt, oil and other ingredients.', '01HM6JRMW34DYS85ZAWG358404.png', '2024-01-15 10:50:25', '2024-01-15 10:50:25'),
(13, 'Classic Waffles', 12.99, 'Made with eggs, lettuce, salt, oil and other ingredients.', '01HM6JS4AANKB6FDQ35YJ3EAWF.png', '2024-01-15 10:50:41', '2024-01-15 10:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(43, '2014_10_12_000000_create_users_table', 1),
(44, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(45, '2019_08_19_000000_create_failed_jobs_table', 1),
(46, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(47, '2024_01_05_131506_create_menus_table', 1),
(48, '2024_01_05_131805_create_bookings_table', 1),
(49, '2024_01_05_183710_add_is_admin_to_users', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@example.com', 1, '2024-01-13 11:26:39', '$2y$12$yI3jK0qtTexpUmuLbQaxA.BipyEwrfCEZ.5c57VyWIOUcaQ8g7mTu', 'OyG5FrmeFFVLBB4VttQp7GVu1LiGsL9FoWJM26roI7i8CD6olSktbIPZccbl', '2024-01-13 11:26:39', '2024-01-13 11:26:39'),
(2, 'test', 'test@test.com', 0, NULL, '$2y$12$c2QJNQPgz2WvAl3y8b7tkeW3LPMwzPnhNiLLnGUqMLSf6O3PhxkPy', NULL, '2024-01-15 10:34:26', '2024-01-15 10:34:26'),
(3, 'try', 'try@try.com', 0, NULL, '$2y$12$8Sdsl4C29NDcAaW79BWMFOsRNZ0n3pTesmV3TVJtmE3gF/VPS/DXy', NULL, '2024-01-15 10:35:46', '2024-01-15 10:35:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
