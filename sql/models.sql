-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 07:03 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `model_name`, `created_at`, `updated_at`) VALUES
(1, 'DAI-0501G', NULL, NULL),
(2, 'FAN-0140G', NULL, NULL),
(3, 'FAN-0143G', NULL, NULL),
(4, 'FAN-0183G', NULL, NULL),
(5, 'FAN-0185G', NULL, NULL),
(6, 'HYU-0550G', NULL, NULL),
(7, 'HYU-0727G', NULL, NULL),
(8, 'HYU-0839G', NULL, NULL),
(9, 'MIE-0860G', NULL, NULL),
(10, 'MIN-0410D', NULL, NULL),
(11, 'MIN-0411D', NULL, NULL),
(12, 'MIN-0415D', NULL, NULL),
(13, 'MIR-0505G', NULL, NULL),
(14, 'MIS-0292G', NULL, NULL),
(15, 'MIS-0510G', NULL, NULL),
(16, 'MIS-0511G', NULL, NULL),
(17, 'MIS-0518G', NULL, NULL),
(18, 'PAS-0297G', NULL, NULL),
(19, 'PCT-0293G', NULL, NULL),
(20, 'TIC-0169G', NULL, NULL),
(21, 'TIC-0282G', NULL, NULL),
(22, 'TIC-0336G', NULL, NULL),
(23, 'TOC-0433G', NULL, NULL),
(24, 'TOC-0609G', NULL, NULL),
(25, 'TOC-0610G', NULL, NULL),
(26, 'TOC-0611G', NULL, NULL),
(27, 'TOC-0612G', NULL, NULL),
(28, 'TOC-0613G', NULL, NULL),
(29, 'FAN-0183G', NULL, NULL),
(30, 'TTM-0664D', NULL, NULL),
(31, 'TTM-0824D', NULL, NULL),
(32, 'TTM-0825D', NULL, NULL),
(33, 'TTM-0857D', NULL, NULL),
(34, 'TTM-0862D', NULL, NULL),
(35, 'TIC-0755G', NULL, NULL),
(36, 'MIS-0766G', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
