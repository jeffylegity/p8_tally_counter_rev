-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2020 at 07:47 AM
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
(2, '2019_12_18_071234_create_slicing_model_area1', 1),
(3, '2020_01_03_062627_create_slicing_logs_area1', 1),
(4, '2020_01_22_093244_create_slicing_data_area1', 1),
(5, '2020_01_29_112708_create_slicing_data_area2', 1),
(6, '2020_01_30_074237_create_slicing_model_area2', 1),
(7, '2020_01_30_074246_create_slicing_logs_area2', 1),
(8, '2020_01_30_074315_create_slicing_data_area3', 1),
(9, '2020_01_30_074345_create_slicing_logs_area3', 1),
(10, '2020_01_30_074356_create_slicing_model_area3', 1),
(11, '2020_01_30_074404_create_slicing_model_area4', 1),
(12, '2020_01_30_074428_create_slicing_data_area4', 1),
(13, '2020_01_30_074442_create_slicing_logs_area4', 1),
(14, '2020_02_09_132622_create_models', 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `slicing_data_area1`
--

CREATE TABLE `slicing_data_area1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sl166_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl167_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl168_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl169_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl170_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl166_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl167_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl168_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl169_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl170_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl166_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl167_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl168_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl169_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl170_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl166_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl167_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl168_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl169_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl170_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_stored` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slicing_data_area2`
--

CREATE TABLE `slicing_data_area2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sl156_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl161_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl162_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl163_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl164_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl171_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl172_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl179_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl180_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl181_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl156_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl161_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl162_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl163_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl164_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl171_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl172_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl179_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl180_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl181_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl156_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl161_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl162_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl163_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl164_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl171_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl172_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl179_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl180_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl181_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl156_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl161_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl162_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl163_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl164_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl171_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl172_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl179_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl180_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl181_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_stored` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slicing_data_area3`
--

CREATE TABLE `slicing_data_area3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sl182_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl183_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl185_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl186_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lap20_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lap23_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lap27_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bc8_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bc9_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bc12_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl182_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl183_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl185_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl186_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lap20_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lap23_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lap27_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bc8_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bc9_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bc12_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl182_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl183_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl185_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl186_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lap20_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lap23_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lap27_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bc8_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bc9_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bc12_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl182_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl183_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl185_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl186_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lap20_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lap23_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lap27_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bc8_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bc9_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bc12_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_stored` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slicing_data_area4`
--

CREATE TABLE `slicing_data_area4` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sl193_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl194_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl195_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl196_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl197_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl198_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl199_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl200_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bc7_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `csl1_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl193_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl194_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl195_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl196_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl197_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl198_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl199_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl200_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bc7_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `csl1_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl193_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl194_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl195_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl196_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl197_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl198_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl199_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl200_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bc7_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `csl1_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl193_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl194_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl195_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl196_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl197_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl198_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl199_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl200_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bc7_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `csl1_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_stored` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slicing_logs_area1`
--

CREATE TABLE `slicing_logs_area1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_id` int(11) NOT NULL,
  `machine_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_output` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slicing_logs_area2`
--

CREATE TABLE `slicing_logs_area2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_id` int(11) NOT NULL,
  `machine_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_output` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slicing_logs_area3`
--

CREATE TABLE `slicing_logs_area3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_id` int(11) NOT NULL,
  `machine_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_output` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slicing_logs_area4`
--

CREATE TABLE `slicing_logs_area4` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_id` int(11) NOT NULL,
  `machine_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_output` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slicing_model_area1`
--

CREATE TABLE `slicing_model_area1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `machine_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_model_area1`
--

INSERT INTO `slicing_model_area1` (`id`, `model_name`, `machine_no`, `created_at`, `updated_at`) VALUES
(1, 'DAI-0501G', 'SL-166', NULL, NULL),
(2, 'FAN-0140G', 'SL-167', NULL, NULL),
(3, 'FAN-0143G', 'SL-168', NULL, NULL),
(4, 'HYU-0550G', 'SL-169', NULL, NULL),
(5, 'HYU-0727G', 'SL-170', NULL, NULL);

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
(1, 'FAN-0143G', 'SL-156', NULL, NULL),
(2, 'MIN-0411D', 'SL-161', NULL, NULL),
(3, 'MIR-0505G', 'SL-162', NULL, NULL),
(4, 'MIS-0292G', 'SL-163', NULL, NULL),
(5, 'MIS-0510G', 'SL-164', NULL, NULL),
(6, 'MIS-0518G', 'SL-171', NULL, NULL),
(7, 'PAS-0297G', 'SL-172', NULL, NULL),
(8, 'TTM-0857D', 'SL-179', NULL, NULL),
(9, 'PCT-0293G', 'SL-180', NULL, NULL),
(10, 'MIS-0510G', 'SL-181', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_model_area3`
--

CREATE TABLE `slicing_model_area3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `machine_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_model_area3`
--

INSERT INTO `slicing_model_area3` (`id`, `model_name`, `machine_no`, `created_at`, `updated_at`) VALUES
(1, 'MIR-0505G', 'SL-182', NULL, NULL),
(2, 'MIS-0292G', 'SL-183', NULL, NULL),
(3, 'MIN-0410D', 'SL-185', NULL, NULL),
(4, 'MIN-0411D', 'SL-186', NULL, NULL),
(5, 'MIS-0518G', 'LAP-20', NULL, NULL),
(6, 'MIS-0511G', 'LAP-23', NULL, NULL),
(7, 'HYU-0550G', 'LAP-27', NULL, NULL),
(8, 'MIS-0518G', 'BC-8', NULL, NULL),
(9, 'MIS-0292G', 'BC-9', NULL, NULL),
(10, 'HYU-0839G', 'BC-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_model_area4`
--

CREATE TABLE `slicing_model_area4` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `machine_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_model_area4`
--

INSERT INTO `slicing_model_area4` (`id`, `model_name`, `machine_no`, `created_at`, `updated_at`) VALUES
(1, 'MIS-0510G', 'SL-193', NULL, NULL),
(2, 'PAS-0297G', 'SL-194', NULL, NULL),
(3, 'MIS-0518G', 'SL-195', NULL, NULL),
(4, 'HYU-0727G', 'SL-196', NULL, NULL),
(5, 'MIS-0511G', 'SL-197', NULL, NULL),
(6, 'MIS-0510G', 'SL-198', NULL, NULL),
(7, 'HYU-0727G', 'SL-199', NULL, NULL),
(8, 'MIN-0410D', 'SL-200', NULL, NULL),
(9, 'DAI-0501G', 'BC-7', NULL, NULL),
(10, 'MIN-0410D', 'CSL-1', NULL, NULL);

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
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `date_hired`, `gender`, `status`, `emp_status`, `division`, `department`, `section`, `position`, `role`, `area`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'p8-admin', 'P8 Administrator', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'N/A', 'N/A', 'N/A', 'SMP', 'PLANT 8/9/10', 'P8', 'P8 MACHINING', 'ENGINEER', 1, NULL, NULL, NULL, NULL, NULL),
(2, 'tc-area1', 'Slicing Operator', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'N/A', 'N/A', 'N/A', 'SMP', 'PLANT 8/9/10', 'SLICING', 'SLICING', 'OPERATOR', NULL, '1', NULL, NULL, NULL, NULL),
(3, 'tc-area2', 'Slicing Operator', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'N/A', 'N/A', 'N/A', 'SMP', 'PLANT 8/9/10', 'SLICING', 'SLICING', 'OPERATOR', NULL, '2', NULL, NULL, NULL, NULL),
(4, 'tc-area3', 'Slicing Operator', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'N/A', 'N/A', 'N/A', 'SMP', 'PLANT 8/9/10', 'SLICING', 'SLICING', 'OPERATOR', NULL, '3', NULL, NULL, NULL, NULL),
(5, 'tc-area4', 'Slicing Operator', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'N/A', 'N/A', 'N/A', 'SMP', 'PLANT 8/9/10', 'SLICING', 'SLICING', 'OPERATOR', NULL, '4', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_data_area1`
--
ALTER TABLE `slicing_data_area1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_data_area2`
--
ALTER TABLE `slicing_data_area2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_data_area3`
--
ALTER TABLE `slicing_data_area3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_data_area4`
--
ALTER TABLE `slicing_data_area4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_logs_area1`
--
ALTER TABLE `slicing_logs_area1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_logs_area2`
--
ALTER TABLE `slicing_logs_area2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_logs_area3`
--
ALTER TABLE `slicing_logs_area3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_logs_area4`
--
ALTER TABLE `slicing_logs_area4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_model_area1`
--
ALTER TABLE `slicing_model_area1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_model_area2`
--
ALTER TABLE `slicing_model_area2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_model_area3`
--
ALTER TABLE `slicing_model_area3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_model_area4`
--
ALTER TABLE `slicing_model_area4`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `slicing_data_area1`
--
ALTER TABLE `slicing_data_area1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slicing_data_area2`
--
ALTER TABLE `slicing_data_area2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slicing_data_area3`
--
ALTER TABLE `slicing_data_area3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slicing_data_area4`
--
ALTER TABLE `slicing_data_area4`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slicing_logs_area1`
--
ALTER TABLE `slicing_logs_area1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `slicing_logs_area2`
--
ALTER TABLE `slicing_logs_area2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `slicing_logs_area3`
--
ALTER TABLE `slicing_logs_area3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `slicing_logs_area4`
--
ALTER TABLE `slicing_logs_area4`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slicing_model_area1`
--
ALTER TABLE `slicing_model_area1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slicing_model_area2`
--
ALTER TABLE `slicing_model_area2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slicing_model_area3`
--
ALTER TABLE `slicing_model_area3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slicing_model_area4`
--
ALTER TABLE `slicing_model_area4`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
