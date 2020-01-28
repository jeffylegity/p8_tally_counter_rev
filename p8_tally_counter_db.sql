-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2020 at 04:16 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p8_tally_counter_db`
--

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
(2, '2019_12_16_043336_create_slicing_data', 1),
(3, '2019_12_18_071234_create_slicing_model', 1),
(4, '2020_01_03_062627_create_slicing_logs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_data`
--

CREATE TABLE `slicing_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sl1_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl1_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl1_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl2_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl2_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl2_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl3_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl3_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl3_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl4_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl4_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl4_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl5_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl5_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl5_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_stored` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_data`
--

INSERT INTO `slicing_data` (`id`, `sl1_actual`, `sl1_target`, `sl1_test_block`, `sl2_actual`, `sl2_target`, `sl2_test_block`, `sl3_actual`, `sl3_target`, `sl3_test_block`, `sl4_actual`, `sl4_target`, `sl4_test_block`, `sl5_actual`, `sl5_target`, `sl5_test_block`, `date_generated`, `shift`, `data_stored`, `created_at`, `updated_at`) VALUES
(1, '0', '12', '0', '0', '12', '0', '0', '12', '0', '0', '12', '0', '0', '2', '0', '2020-01-09 07:25:21', 'E', 1, NULL, NULL),
(2, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-01-10 14:56:14', 'E', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_logs`
--

CREATE TABLE `slicing_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_id` int(11) NOT NULL,
  `machine_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slicing_model`
--

CREATE TABLE `slicing_model` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `machine_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_model`
--

INSERT INTO `slicing_model` (`id`, `model_name`, `machine_no`, `created_at`, `updated_at`) VALUES
(1, 'MIS-0051G', 'SL-166', NULL, NULL),
(2, 'LOC-123Y', 'SL-167', NULL, NULL),
(3, 'MIS-0051G', 'SL-168', NULL, NULL),
(4, 'MIS-0061G', 'SL-169', NULL, NULL),
(5, 'TTM-0664D', 'SL-170', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_hired` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `date_hired`, `gender`, `status`, `emp_status`, `division`, `department`, `section`, `position`, `role`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '004633', 'TUSI, JOLLYANA S.', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JANUARY 14, 2019', 'F', 'P', 'SMP', 'PLANT 8/9/10', 'P8', 'P8 MACHINING', 'ENGINEER', 1, NULL, NULL, NULL, NULL),
(2, 'p8-slicing', 'Slicing Operator', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'N/A', 'N/A', 'N/A', 'SMP', 'PLANT 8/9/10', 'SLICING', 'SLICING', 'OPERATOR', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_data`
--
ALTER TABLE `slicing_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_logs`
--
ALTER TABLE `slicing_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_model`
--
ALTER TABLE `slicing_model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slicing_data`
--
ALTER TABLE `slicing_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slicing_logs`
--
ALTER TABLE `slicing_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slicing_model`
--
ALTER TABLE `slicing_model`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1533;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
