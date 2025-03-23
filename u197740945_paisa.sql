-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 23, 2025 at 10:38 AM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u197740945_paisa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `email`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Digitalmarket', 'Digitalmarket143@', 'digitalmarkeetin@gmail.com', 'All In One Nadeem', '2024-11-03 05:26:19', '2025-03-07 10:35:20');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('0742791b1721ca8e99791e981a7eb9e00dceec0b', 'i:1;', 1741451629),
('0742791b1721ca8e99791e981a7eb9e00dceec0b:timer', 'i:1741451629;', 1741451629),
('14ec22830c9f7e4bfebdc529bcdcaa62ffe74d3e', 'i:1;', 1741522631),
('14ec22830c9f7e4bfebdc529bcdcaa62ffe74d3e:timer', 'i:1741522631;', 1741522631),
('20331d2bacce069d02f4dcfa917f2f120fc02eaa', 'i:1;', 1741459792),
('20331d2bacce069d02f4dcfa917f2f120fc02eaa:timer', 'i:1741459792;', 1741459792),
('28c7344af8af7b8b13fd31f14f48922492701818', 'i:1;', 1741524750),
('28c7344af8af7b8b13fd31f14f48922492701818:timer', 'i:1741524750;', 1741524750),
('3265cd078148f4761d94227ca551d4eb9d6aa7a3', 'i:5;', 1742119547),
('3265cd078148f4761d94227ca551d4eb9d6aa7a3:timer', 'i:1742119547;', 1742119547),
('33a96544733f59c70bbe6dd8231066ae356b4286', 'i:1;', 1741367367),
('33a96544733f59c70bbe6dd8231066ae356b4286:timer', 'i:1741367367;', 1741367367),
('3cb1e4fc61324c3581080d3ad968fd1bea2ff33a', 'i:1;', 1742462771),
('3cb1e4fc61324c3581080d3ad968fd1bea2ff33a:timer', 'i:1742462771;', 1742462771),
('45218015aa3f3293746778bace9a51f86b2e1809', 'i:2;', 1742512485),
('45218015aa3f3293746778bace9a51f86b2e1809:timer', 'i:1742512485;', 1742512485),
('477f939e1363321f5fb6eec5e9f126ea18bf1fa7', 'i:3;', 1741648745),
('477f939e1363321f5fb6eec5e9f126ea18bf1fa7:timer', 'i:1741648745;', 1741648745),
('5f277e81be1c8dfb508cb273f540c9e8e9d9e855', 'i:1;', 1741788662),
('5f277e81be1c8dfb508cb273f540c9e8e9d9e855:timer', 'i:1741788662;', 1741788662),
('6e7b833d70283b13f58a12457c7684884223f2a4', 'i:1;', 1742510689),
('6e7b833d70283b13f58a12457c7684884223f2a4:timer', 'i:1742510689;', 1742510689),
('759291aa43dae048cdacc3f617625042765cbf88', 'i:1;', 1741966135),
('759291aa43dae048cdacc3f617625042765cbf88:timer', 'i:1741966135;', 1741966135),
('7b966460adda098015f2679fcf949fdeacc1f8ff', 'i:2;', 1741364381),
('7b966460adda098015f2679fcf949fdeacc1f8ff:timer', 'i:1741364381;', 1741364381),
('7e7c57061044e85cbe04e7a4eed71aa88378b618', 'i:1;', 1741365854),
('7e7c57061044e85cbe04e7a4eed71aa88378b618:timer', 'i:1741365854;', 1741365854),
('88188c07c448a0d5f28623aeda559caed1f0af1e', 'i:1;', 1741523425),
('88188c07c448a0d5f28623aeda559caed1f0af1e:timer', 'i:1741523425;', 1741523425),
('ccc68f47ab6fcae1bfd876ee05248c9b109d02d8', 'i:5;', 1741518093),
('ccc68f47ab6fcae1bfd876ee05248c9b109d02d8:timer', 'i:1741518092;', 1741518092),
('f3ab39362aff77583f1284b853639a8a69614454', 'i:2;', 1741935749),
('f3ab39362aff77583f1284b853639a8a69614454:timer', 'i:1741935749;', 1741935749),
('f60403f803000f94d8bbdeec8515b3537d449743', 'i:1;', 1741965918),
('f60403f803000f94d8bbdeec8515b3537d449743:timer', 'i:1741965918;', 1741965918);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daily_ads`
--

CREATE TABLE `daily_ads` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `user_id` varchar(110) NOT NULL,
  `ads` int(11) DEFAULT 0,
  `earning` decimal(10,2) DEFAULT 0.00,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `daily_ads`
--

INSERT INTO `daily_ads` (`id`, `date`, `user_id`, `ads`, `earning`, `created_at`, `updated_at`) VALUES
(1, '2025-03-07', '1469179525', 26, 6.30, '2025-03-07 06:09:27', '2025-03-07 16:48:57'),
(2, '2025-03-07', '6723345293', 6, 1.80, '2025-03-07 07:26:09', '2025-03-07 16:19:21'),
(3, '2025-03-07', '1513765104', 13, 2.25, '2025-03-07 07:31:55', '2025-03-07 13:48:37'),
(4, '2025-03-07', '7001126563', 0, 0.00, '2025-03-07 07:51:24', '2025-03-07 07:51:24'),
(5, '2025-03-07', '7760410414', 1, 0.50, '2025-03-07 09:03:57', '2025-03-07 09:04:17'),
(6, '2025-03-07', '7086781526', 0, 0.00, '2025-03-07 09:06:47', '2025-03-07 09:06:47'),
(7, '2025-03-07', '6381034735', 1, 0.50, '2025-03-07 09:11:35', '2025-03-07 09:12:18'),
(8, '2025-03-07', '5883674847', 2, 1.00, '2025-03-07 11:28:32', '2025-03-07 11:49:08'),
(9, '2025-03-07', '6568475597', 32, 4.90, '2025-03-07 16:36:45', '2025-03-07 17:37:45'),
(10, '2025-03-07', '6935972303', 5, 1.00, '2025-03-07 16:43:14', '2025-03-07 17:07:11'),
(11, '2025-03-07', '7922530142', 26, 5.20, '2025-03-07 17:13:18', '2025-03-07 18:54:02'),
(12, '2025-03-08', '5883674847', 103, 20.60, '2025-03-08 06:09:48', '2025-03-08 09:21:44'),
(13, '2025-03-08', '7922530142', 3, 0.60, '2025-03-08 07:31:59', '2025-03-08 13:30:24'),
(14, '2025-03-08', '7760410414', 1, 0.20, '2025-03-08 09:23:44', '2025-03-08 09:46:21'),
(15, '2025-03-08', '6935972303', 13, 2.60, '2025-03-08 16:19:59', '2025-03-08 16:32:49'),
(16, '2025-03-08', '1513765104', 10, 2.00, '2025-03-08 16:42:21', '2025-03-08 16:46:59'),
(17, '2025-03-08', '6568475597', 14, 2.80, '2025-03-08 16:52:08', '2025-03-08 17:17:54'),
(18, '2025-03-08', '1469179525', 0, 0.00, '2025-03-08 18:47:24', '2025-03-08 18:47:24'),
(19, '2025-03-09', '5883674847', 12, 2.40, '2025-03-09 10:58:02', '2025-03-09 11:01:11'),
(20, '2025-03-09', '7026882481', 0, 0.00, '2025-03-09 12:16:11', '2025-03-09 12:16:11'),
(21, '2025-03-09', '6568475597', 4, 0.80, '2025-03-09 12:24:12', '2025-03-09 12:27:32'),
(22, '2025-03-09', '1513765104', 5, 1.00, '2025-03-09 12:41:00', '2025-03-09 12:51:30'),
(23, '2025-03-10', '6568475597', 3, 0.60, '2025-03-10 17:53:04', '2025-03-10 17:55:24'),
(24, '2025-03-10', '1513765104', 14, 2.80, '2025-03-10 20:24:39', '2025-03-10 23:18:50'),
(25, '2025-03-11', '6568475597', 1, 0.20, '2025-03-11 00:17:56', '2025-03-11 00:18:28'),
(26, '2025-03-12', '6568475597', 3, 0.60, '2025-03-12 06:30:54', '2025-03-12 06:33:32'),
(27, '2025-03-12', '1469179525', 1, 0.20, '2025-03-12 14:02:39', '2025-03-12 14:10:02'),
(28, '2025-03-13', '6568475597', 5, 1.00, '2025-03-13 18:19:01', '2025-03-13 18:21:55'),
(29, '2025-03-14', '7922530142', 1, 0.20, '2025-03-14 07:01:29', '2025-03-14 07:02:00'),
(30, '2025-03-14', '6568475597', 3, 0.60, '2025-03-14 07:02:45', '2025-03-14 07:04:07'),
(31, '2025-03-14', '5883674847', 0, 0.00, '2025-03-14 15:24:18', '2025-03-14 15:24:18'),
(32, '2025-03-14', '6571425083', 0, 0.00, '2025-03-14 15:27:55', '2025-03-14 15:27:55'),
(33, '2025-03-15', '6568475597', 21, 4.20, '2025-03-15 12:54:37', '2025-03-15 23:11:52'),
(34, '2025-03-16', '5883674847', 0, 0.00, '2025-03-16 10:03:47', '2025-03-16 10:03:47'),
(35, '2025-03-17', '6568475597', 6, 1.20, '2025-03-17 00:15:15', '2025-03-17 00:18:04'),
(36, '2025-03-18', '7922530142', 0, 0.00, '2025-03-18 07:04:14', '2025-03-18 07:04:14'),
(37, '2025-03-19', '6568475597', 4, 0.80, '2025-03-19 00:15:12', '2025-03-19 15:23:48'),
(38, '2025-03-19', '7922530142', 0, 0.00, '2025-03-19 05:05:43', '2025-03-19 05:05:43'),
(39, '2025-03-20', '1469179525', 0, 0.00, '2025-03-20 09:25:11', '2025-03-20 09:25:11'),
(40, '2025-03-20', '7922530142', 0, 0.00, '2025-03-20 22:43:49', '2025-03-20 22:43:49'),
(41, '2025-03-20', '6037427305', 1, 0.20, '2025-03-20 23:13:45', '2025-03-20 23:14:00');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '0001_01_01_000000_create_users_table', 1),
(5, '0001_01_01_000001_create_cache_table', 1),
(6, '0001_01_01_000002_create_jobs_table', 1);

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
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `minimum` decimal(10,2) DEFAULT 0.00,
  `maximum` decimal(10,2) DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `minimum`, `maximum`, `created_at`, `updated_at`) VALUES
(3, 'Paytm', 1.00, 10.00, '2025-03-07 10:37:04', '2025-03-07 10:37:04');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0zmN7pxuxKlkKYrg9RfIpGMlkCGdGZ5YsdGfgb4R', NULL, '182.69.179.163', 'Mozilla/5.0 (Linux; Android 14; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.6943.137 Mobile Safari/537.36 Telegram-Android/11.8.3 (Samsung SM-A525F; Android 14; SDK 34; AVERAGE)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidThUTzVJSnpMMUZnRmVSZ2hVRzRYVW93YmJ6eEJQR2JCMnNuamlVciI7czo3OiJ1c2VyX2lwIjtzOjE0OiIxODIuNjkuMTc5LjE2MyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vcGFpc2EuZGlnaXRhbG1hcmtlZXQuaW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1742462711),
('5KgNC7J5PWgQsFNFQR6B27ioqyCmIvbMfGLkL5ME', NULL, '2405:201:6024:48b1:b1fb:57c2:529c:4a8', 'Mozilla/5.0 (Linux; Android 14; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.6998.39 Mobile Safari/537.36 Telegram-Android/11.8.2 (Vivo V2240; Android 14; SDK 34; AVERAGE)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicWk1NXN5SkpzMXhPQjNSWG9MNDRwY1o4TlRYUXI4UktocmYxRUk5biI7czo3OiJ1c2VyX2lwIjtzOjM3OiIyNDA1OjIwMTo2MDI0OjQ4YjE6YjFmYjo1N2MyOjUyOWM6NGE4IjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo2MjoiaHR0cHM6Ly9wYWlzYS5kaWdpdGFsbWFya2VldC5pbi8/dGdXZWJBcHBTdGFydFBhcmFtPTE0NjkxNzk1MjUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1742462824),
('H6ofbuQAS0TOAWK8P1FyTjjlbtZ3z63Thz7RPZed', NULL, '103.50.150.99', 'Mozilla/5.0 (Linux; Android 14; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.6998.39 Mobile Safari/537.36 Telegram-Android/11.8.2 (Vivo V2310; Android 14; SDK 34; AVERAGE)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYnQ1UmhrN3JsRENrZXhxMEZ3NXEwUzIzeExVNDdTUU1xT0lXZDZINSI7czo3OiJ1c2VyX2lwIjtzOjEzOiIxMDMuNTAuMTUwLjk5IjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo2MjoiaHR0cHM6Ly9wYWlzYS5kaWdpdGFsbWFya2VldC5pbi8/dGdXZWJBcHBTdGFydFBhcmFtPTY1Njg0NzU1OTciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1742360743),
('hyLWHX9oAOHtg4NTzfkNsOuxyPH3LMK2raREHRPp', NULL, '2405:201:6024:48b1:b1fb:57c2:529c:4a8', 'Mozilla/5.0 (Linux; Android 14; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.6998.39 Mobile Safari/537.36 Telegram-Android/11.8.2 (Vivo V2240; Android 14; SDK 34; AVERAGE)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidW1zRmhwT1VTcTRjVkRSRVFSZEV3OTBzVFA5dHFIRFdHWFF6RzdreCI7czo3OiJ1c2VyX2lwIjtzOjM3OiIyNDA1OjIwMTo2MDI0OjQ4YjE6YjFmYjo1N2MyOjUyOWM6NGE4IjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo2MjoiaHR0cHM6Ly9wYWlzYS5kaWdpdGFsbWFya2VldC5pbi8/dGdXZWJBcHBTdGFydFBhcmFtPTE0NjkxNzk1MjUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1742512440),
('j8j6MD1tGiQ6AjdFwMkWLwQ0mgPwPbBslS33IYeQ', NULL, '182.69.182.193', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRVFkcXJ6WGhvenI2RkxQSklyR1lVYmgxcWpMSkc0VnkzSXZIQUt0dCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vcGFpc2EuZGlnaXRhbG1hcmtlZXQuaW4vY3JhenkvbWV0aG9kcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MTQ6ImFkbWluX3VzZXJuYW1lIjtzOjEzOiJkaWdpdGFsbWFya2V0IjtzOjE0OiJhZG1pbl9wYXNzd29yZCI7czoxNzoiRGlnaXRhbG1hcmtldDE0M0AiO30=', 1742710693),
('NPgCUjw9B2HMAe2NBhELdvcw7DR7y870tNDkIhwo', NULL, '103.50.150.99', 'Mozilla/5.0 (Linux; Android 14; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.6998.39 Mobile Safari/537.36 Telegram-Android/11.8.3 (Vivo V2310; Android 14; SDK 34; AVERAGE)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQjFubDg0VzJlbHNVdDg3a1JWY2NWVXZMNDdiYlVkQWhjYkVid1R3cyI7czo3OiJ1c2VyX2lwIjtzOjEzOiIxMDMuNTAuMTUwLjk5IjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo2MjoiaHR0cHM6Ly9wYWlzYS5kaWdpdGFsbWFya2VldC5pbi8/dGdXZWJBcHBTdGFydFBhcmFtPTY1Njg0NzU1OTciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1742510629),
('poz7a5GsO3wmngIAi41KrNGISTNG8YVSeHS6Dj0x', NULL, '103.50.150.99', 'Mozilla/5.0 (Linux; Android 14; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.6998.39 Mobile Safari/537.36 Telegram-Android/11.8.2 (Vivo V2310; Android 14; SDK 34; AVERAGE)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUmFtcU5HM0hKeWxuZUZnU3dUTWNXZ05POWFyVURLQ0NzajVPV1cxWiI7czo3OiJ1c2VyX2lwIjtzOjEzOiIxMDMuNTAuMTUwLjk5IjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo2MjoiaHR0cHM6Ly9wYWlzYS5kaWdpdGFsbWFya2VldC5pbi8/dGdXZWJBcHBTdGFydFBhcmFtPTY1Njg0NzU1OTciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1742392972),
('zIhuRb1sENBhioaJhnb2h4e8TmMQ6YNQ4yVKESIR', NULL, '103.50.150.99', 'Mozilla/5.0 (Linux; Android 12; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.6998.39 Mobile Safari/537.36 Telegram-Android/11.8.3 (Vivo V2044; Android 12; SDK 31; LOW)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoia25keVhCclJpY1FZMGRyZzJtRWxOZHRJU2ZybUd2Wlk1MW9qMEd2SyI7czo3OiJ1c2VyX2lwIjtzOjEzOiIxMDMuNTAuMTUwLjk5IjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMToiaHR0cHM6Ly9wYWlzYS5kaWdpdGFsbWFya2VldC5pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1742397828);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `ads_reward` decimal(10,2) NOT NULL,
  `ads_limit` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `monetag_id` varchar(255) DEFAULT NULL,
  `currency` varchar(255) NOT NULL DEFAULT '$',
  `reffer_bonus` varchar(255) NOT NULL DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `ads_reward`, `ads_limit`, `created_at`, `updated_at`, `monetag_id`, `currency`, `reffer_bonus`) VALUES
(1, 0.20, 50, '2024-11-02 04:14:47', '2025-03-08 10:43:38', '9030924', 'INR', '5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `language_code` varchar(255) NOT NULL,
  `is_premium` varchar(255) NOT NULL,
  `photo_url` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `telegram_id` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `referral_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `language_code`, `is_premium`, `photo_url`, `balance`, `telegram_id`, `password`, `remember_token`, `created_at`, `updated_at`, `referral_code`) VALUES
(1, 'Aio Hindi', 'Solution', 'Aio_Hindi', 'en', '0', 'https://t.me/i/userpic/320/D4YwjR88TbYRPV_mQdbRcpWQH8RZWDjsb5HnADFq6kw.svg', '9.655', '1469179525', NULL, NULL, '2025-03-07 06:09:27', '2025-03-20 23:14:00', NULL),
(3, 'Mr Nadeem', 'Genius', 'Mr_Nadeem_Genius', 'en', '0', 'https://t.me/i/userpic/320/hNiqRN0Xr6HsZ3rlo1RLWIXjlNEl8-0prOm6taMf-3U.svg', '8.17', '1513765104', NULL, NULL, '2025-03-07 07:31:55', '2025-03-10 23:18:50', NULL),
(5, 'INSTANTWARE', '', 'InstantWares', 'en', '0', 'https://t.me/i/userpic/320/Hx5rHaZJI-eyC4ZKLVFg25h8-OeJx9A58iw86m7sediV-7wQVdKMKdRVT_tdljsH.svg', '0', '7001126563', NULL, NULL, '2025-03-07 07:51:24', '2025-03-07 07:51:24', NULL),
(6, 'Sahil', 'idreesi', 'HafizMohdShad', 'en', '0', 'https://t.me/i/userpic/320/r7KMZTg4mM7BrJYxaxOhqYgK5LK2PdJqxm6F1HAFlue9DNL_F0DroNppwJ35IWiJ.svg', '1.8', '6723345293', NULL, NULL, '2025-03-07 08:58:28', '2025-03-07 16:19:21', '1469179525'),
(7, 'Daily Paisa', 'Bot', 'INR_ToUSD', 'en', '0', 'https://t.me/i/userpic/320/paJ4Ew1sRocTWgwZoP8ijmGVydFzZ84i0k1odex4nAasE-11o9VbSHtHsxQfCELs.svg', '0.7', '7760410414', NULL, NULL, '2025-03-07 09:03:57', '2025-03-08 09:46:21', '1513765104'),
(8, 'Adhunik Pay', 'pay', 'DeveloperAdhunik', 'en', '0', 'https://t.me/i/userpic/320/FVEDTS_bVuH18Edzv3FHn_tWMIGQU80HpPXOBQAJsIKvmwC209wBcERFDQS-cGw2.svg', '0', '7086781526', NULL, NULL, '2025-03-07 09:06:47', '2025-03-07 11:01:05', '7001126563'),
(9, 'Ayan', 'Idrishi', '', 'en', '0', 'https://t.me/i/userpic/320/DgMnAtvB_j94cM0Dfog4Z6swelsxDVd4DhyYs2GGTVpCukRXROUMZagXx3DSvVdv.svg', '0.5', '6381034735', NULL, NULL, '2025-03-07 09:11:35', '2025-03-07 09:12:18', '1513765104'),
(10, '🆙 UXUY', '', 'Ddin0741', 'en', '0', 'https://t.me/i/userpic/320/bBGpv5l4fyXXBQ8Hw1pyDmbAhwquPKTZG1ihrLM_a3qisrLQLBDTV7n_QoJCq5B8.svg', '24', '5883674847', NULL, NULL, '2025-03-07 11:28:32', '2025-03-09 11:01:11', '1469179525'),
(11, 'Mohd', 'Arsh', '', 'en', '0', 'https://t.me/i/userpic/320/HCinrQhKnDmN9MxeO5fOlPjyye3bOhS1BnX3tvFjO0eBYQ9UUApod2Y6lgUZY57r.svg', '19.06', '6568475597', NULL, NULL, '2025-03-07 16:36:45', '2025-03-19 15:23:48', '1469179525'),
(12, 'Usmankhan', 'Kh', '', 'en', '0', 'https://t.me/i/userpic/320/O0GFRdLKCiqIsWM1n_OfW6A5LECFlVefpbqeXmDEYc-scKjCRyi9HmAXx6giH5nM.svg', '3.6', '6935972303', NULL, NULL, '2025-03-07 16:43:14', '2025-03-08 16:32:49', '6568475597'),
(13, 'इकरार अहमद', '', '', 'en', '0', 'https://t.me/i/userpic/320/tu3L8YxlYHbJMGp4AlkdFGJtulu1uX7H8gk7pQEUeC910AAl08hKabciIMVp7JX0.svg', '6', '7922530142', NULL, NULL, '2025-03-07 17:13:18', '2025-03-14 07:02:00', '6568475597'),
(14, 'Tabahi4Gamer', '', 'Tabahi4Gamer', 'en', '0', 'https://t.me/i/userpic/320/lzOZeFg8R9Au7uagW6OdmQNFlV3V2zYHIIwCLIfNcBhOz6Y175Jjw6-tJwsiZqyy.svg', '0', '7026882481', NULL, NULL, '2025-03-09 12:16:11', '2025-03-09 12:16:11', '1469179525'),
(15, 'M', 'S', '', 'en', '0', 'https://t.me/i/userpic/320/0nx7Nw-doutA1dm8i2h3UKei_M3nLRE8SzvTgm033uH0hFHAXxE83r7pYtE3545e.svg', '0', '6571425083', NULL, NULL, '2025-03-14 15:27:55', '2025-03-14 15:27:55', '5883674847'),
(16, 'Digital Ars', 'Online', 'digitalarsonline', 'en', '0', 'https://t.me/i/userpic/320/hTYotlyLpg75bLp27anEmPN7mhkQcmgRQbKiHVd80I3tMoL29xMyWV-0sZUcPNso.svg', '0.2', '6037427305', NULL, NULL, '2025-03-20 23:13:45', '2025-03-20 23:14:00', '1469179525');

-- --------------------------------------------------------

--
-- Table structure for table `withdraws`
--

CREATE TABLE `withdraws` (
  `id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` enum('Pending','Completed','Rejected') DEFAULT 'Pending',
  `method_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `withdraws`
--

INSERT INTO `withdraws` (`id`, `amount`, `address`, `status`, `method_id`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 1.00, '8881848618', 'Completed', 3, '2025-03-07 10:38:17', '2025-03-07 10:55:58', '1469179525');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `daily_ads`
--
ALTER TABLE `daily_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
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
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_telegram_id_unique` (`telegram_id`);

--
-- Indexes for table `withdraws`
--
ALTER TABLE `withdraws`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `daily_ads`
--
ALTER TABLE `daily_ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `withdraws`
--
ALTER TABLE `withdraws`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
