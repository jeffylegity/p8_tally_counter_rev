-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 10:44 PM
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
-- Database: `p8_tally_counter_db_rev`
--

-- --------------------------------------------------------

--
-- Table structure for table `slicing_model_area2`
--

CREATE TABLE `slicing_model_area2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `machine_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_model_area2`
--

INSERT INTO `slicing_model_area2` (`id`, `model_name`, `machine_no`, `created_at`, `updated_at`) VALUES
(1, '---', 'SL-156', NULL, NULL),
(2, '---', 'SL-161', NULL, NULL),
(3, '---', 'SL-162', NULL, NULL),
(4, '---', 'SL-163', NULL, NULL),
(5, '---', 'SL-164', NULL, NULL),
(6, '---', 'SL-171', NULL, NULL),
(7, '---', 'SL-172', NULL, NULL),
(8, '---', 'SL-179', NULL, NULL),
(9, '---', 'SL-180', NULL, NULL),
(10, '---', 'SL-181', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slicing_model_area2`
--
ALTER TABLE `slicing_model_area2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slicing_model_area2`
--
ALTER TABLE `slicing_model_area2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
