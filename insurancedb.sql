-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 02:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insurancedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `types` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `installment_amount` decimal(8,2) NOT NULL,
  `policy_length` int(11) NOT NULL,
  `interest_rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `installment_amount`, `policy_length`, `interest_rate`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sample Catagory', '5000.00', 7, '100', 'active', '2022-06-04 03:24:29', '2022-06-04 03:24:29'),
(2, 'Sample Catagory2', '6000.00', 6, '100', 'active', '2022-06-04 03:37:46', '2022-06-04 03:37:46'),
(3, 'Sample Catagory3', '8000.00', 2, '50', 'active', '2022-06-12 10:00:36', '2022-06-12 10:00:36'),
(4, 'Sample Catagory4', '1000.00', 1, '30', 'active', '2022-06-14 01:15:03', '2022-06-14 01:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `claims`
--

CREATE TABLE `claims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `policy_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `loss_amount` decimal(8,2) NOT NULL,
  `claim_amount` decimal(8,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deathclaims`
--

CREATE TABLE `deathclaims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `policy_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `death_certificate` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'manager', '2022-06-04 01:53:08', '2022-06-04 01:53:08'),
(2, 'accountant', '2022-06-04 01:53:08', '2022-06-04 01:53:08'),
(3, 'desk_officer', '2022-06-04 01:53:08', '2022-06-04 01:53:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `installments`
--

CREATE TABLE `installments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `policy_id` int(11) NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'wait' COMMENT 'paid, wait, due',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `installments`
--

INSERT INTO `installments` (`id`, `user_id`, `policy_id`, `month`, `year`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 1, '06', '2022', '5000.00', 'paid', '2022-06-04 03:27:08', '2022-06-04 03:28:28'),
(2, 5, 1, '07', '2022', '5000.00', 'wait', '2022-06-04 03:27:08', '2022-06-04 03:27:08'),
(3, 5, 1, '08', '2022', '5000.00', 'wait', '2022-06-04 03:27:08', '2022-06-04 03:27:08'),
(4, 5, 1, '09', '2022', '5000.00', 'wait', '2022-06-04 03:27:08', '2022-06-04 03:27:08'),
(5, 5, 1, '10', '2022', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(6, 5, 1, '11', '2022', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(7, 5, 1, '12', '2022', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(8, 5, 1, '01', '2023', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(9, 5, 1, '02', '2023', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(10, 5, 1, '03', '2023', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(11, 5, 1, '04', '2023', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(12, 5, 1, '05', '2023', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(13, 5, 1, '06', '2023', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(14, 5, 1, '07', '2023', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(15, 5, 1, '08', '2023', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(16, 5, 1, '09', '2023', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(17, 5, 1, '10', '2023', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(18, 5, 1, '11', '2023', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(19, 5, 1, '12', '2023', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(20, 5, 1, '01', '2024', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(21, 5, 1, '02', '2024', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(22, 5, 1, '03', '2024', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(23, 5, 1, '04', '2024', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(24, 5, 1, '05', '2024', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(25, 5, 1, '06', '2024', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(26, 5, 1, '07', '2024', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(27, 5, 1, '08', '2024', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(28, 5, 1, '09', '2024', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(29, 5, 1, '10', '2024', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(30, 5, 1, '11', '2024', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(31, 5, 1, '12', '2024', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(32, 5, 1, '01', '2025', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(33, 5, 1, '02', '2025', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(34, 5, 1, '03', '2025', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(35, 5, 1, '04', '2025', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(36, 5, 1, '05', '2025', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(37, 5, 1, '06', '2025', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(38, 5, 1, '07', '2025', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(39, 5, 1, '08', '2025', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(40, 5, 1, '09', '2025', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(41, 5, 1, '10', '2025', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(42, 5, 1, '11', '2025', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(43, 5, 1, '12', '2025', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(44, 5, 1, '01', '2026', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(45, 5, 1, '02', '2026', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(46, 5, 1, '03', '2026', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(47, 5, 1, '04', '2026', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(48, 5, 1, '05', '2026', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(49, 5, 1, '06', '2026', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(50, 5, 1, '07', '2026', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(51, 5, 1, '08', '2026', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(52, 5, 1, '09', '2026', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(53, 5, 1, '10', '2026', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(54, 5, 1, '11', '2026', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(55, 5, 1, '12', '2026', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(56, 5, 1, '01', '2027', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(57, 5, 1, '02', '2027', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(58, 5, 1, '03', '2027', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(59, 5, 1, '04', '2027', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(60, 5, 1, '05', '2027', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(61, 5, 1, '06', '2027', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(62, 5, 1, '07', '2027', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(63, 5, 1, '08', '2027', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(64, 5, 1, '09', '2027', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(65, 5, 1, '10', '2027', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(66, 5, 1, '11', '2027', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(67, 5, 1, '12', '2027', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(68, 5, 1, '01', '2028', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(69, 5, 1, '02', '2028', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(70, 5, 1, '03', '2028', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(71, 5, 1, '04', '2028', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(72, 5, 1, '05', '2028', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(73, 5, 1, '06', '2028', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(74, 5, 1, '07', '2028', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(75, 5, 1, '08', '2028', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(76, 5, 1, '09', '2028', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(77, 5, 1, '10', '2028', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(78, 5, 1, '11', '2028', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(79, 5, 1, '12', '2028', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(80, 5, 1, '01', '2029', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(81, 5, 1, '02', '2029', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(82, 5, 1, '03', '2029', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(83, 5, 1, '04', '2029', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(84, 5, 1, '05', '2029', '5000.00', 'wait', '2022-06-04 03:27:09', '2022-06-04 03:27:09'),
(85, 6, 2, '06', '2022', '6000.00', 'paid', '2022-06-04 03:39:57', '2022-06-05 11:27:21'),
(86, 6, 2, '07', '2022', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(87, 6, 2, '08', '2022', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(88, 6, 2, '09', '2022', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(89, 6, 2, '10', '2022', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(90, 6, 2, '11', '2022', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(91, 6, 2, '12', '2022', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(92, 6, 2, '01', '2023', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(93, 6, 2, '02', '2023', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(94, 6, 2, '03', '2023', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(95, 6, 2, '04', '2023', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(96, 6, 2, '05', '2023', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(97, 6, 2, '06', '2023', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(98, 6, 2, '07', '2023', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(99, 6, 2, '08', '2023', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(100, 6, 2, '09', '2023', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(101, 6, 2, '10', '2023', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(102, 6, 2, '11', '2023', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(103, 6, 2, '12', '2023', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(104, 6, 2, '01', '2024', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(105, 6, 2, '02', '2024', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(106, 6, 2, '03', '2024', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(107, 6, 2, '04', '2024', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(108, 6, 2, '05', '2024', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(109, 6, 2, '06', '2024', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(110, 6, 2, '07', '2024', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(111, 6, 2, '08', '2024', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(112, 6, 2, '09', '2024', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(113, 6, 2, '10', '2024', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(114, 6, 2, '11', '2024', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(115, 6, 2, '12', '2024', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(116, 6, 2, '01', '2025', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(117, 6, 2, '02', '2025', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(118, 6, 2, '03', '2025', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(119, 6, 2, '04', '2025', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(120, 6, 2, '05', '2025', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(121, 6, 2, '06', '2025', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(122, 6, 2, '07', '2025', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(123, 6, 2, '08', '2025', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(124, 6, 2, '09', '2025', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(125, 6, 2, '10', '2025', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(126, 6, 2, '11', '2025', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(127, 6, 2, '12', '2025', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(128, 6, 2, '01', '2026', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(129, 6, 2, '02', '2026', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(130, 6, 2, '03', '2026', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(131, 6, 2, '04', '2026', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(132, 6, 2, '05', '2026', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(133, 6, 2, '06', '2026', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(134, 6, 2, '07', '2026', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(135, 6, 2, '08', '2026', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(136, 6, 2, '09', '2026', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(137, 6, 2, '10', '2026', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(138, 6, 2, '11', '2026', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(139, 6, 2, '12', '2026', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(140, 6, 2, '01', '2027', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(141, 6, 2, '02', '2027', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(142, 6, 2, '03', '2027', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(143, 6, 2, '04', '2027', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(144, 6, 2, '05', '2027', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(145, 6, 2, '06', '2027', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(146, 6, 2, '07', '2027', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(147, 6, 2, '08', '2027', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(148, 6, 2, '09', '2027', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(149, 6, 2, '10', '2027', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(150, 6, 2, '11', '2027', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(151, 6, 2, '12', '2027', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(152, 6, 2, '01', '2028', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(153, 6, 2, '02', '2028', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(154, 6, 2, '03', '2028', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(155, 6, 2, '04', '2028', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(156, 6, 2, '05', '2028', '6000.00', 'wait', '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(157, 7, 3, '06', '2022', '8000.00', 'paid', '2022-06-12 10:02:35', '2022-06-14 00:58:39'),
(158, 7, 3, '07', '2022', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(159, 7, 3, '08', '2022', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(160, 7, 3, '09', '2022', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(161, 7, 3, '10', '2022', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(162, 7, 3, '11', '2022', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(163, 7, 3, '12', '2022', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(164, 7, 3, '01', '2023', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(165, 7, 3, '02', '2023', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(166, 7, 3, '03', '2023', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(167, 7, 3, '04', '2023', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(168, 7, 3, '05', '2023', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(169, 7, 3, '06', '2023', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(170, 7, 3, '07', '2023', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(171, 7, 3, '08', '2023', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(172, 7, 3, '09', '2023', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(173, 7, 3, '10', '2023', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(174, 7, 3, '11', '2023', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(175, 7, 3, '12', '2023', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(176, 7, 3, '01', '2024', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(177, 7, 3, '02', '2024', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(178, 7, 3, '03', '2024', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(179, 7, 3, '04', '2024', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(180, 7, 3, '05', '2024', '8000.00', 'wait', '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(181, 8, 4, '06', '2022', '1000.00', 'paid', '2022-06-14 01:18:42', '2022-06-14 06:08:13'),
(182, 8, 4, '07', '2022', '1000.00', 'wait', '2022-06-14 01:18:42', '2022-06-14 01:18:42'),
(183, 8, 4, '08', '2022', '1000.00', 'wait', '2022-06-14 01:18:42', '2022-06-14 01:18:42'),
(184, 8, 4, '09', '2022', '1000.00', 'wait', '2022-06-14 01:18:42', '2022-06-14 01:18:42'),
(185, 8, 4, '10', '2022', '1000.00', 'wait', '2022-06-14 01:18:42', '2022-06-14 01:18:42'),
(186, 8, 4, '11', '2022', '1000.00', 'wait', '2022-06-14 01:18:42', '2022-06-14 01:18:42'),
(187, 8, 4, '12', '2022', '1000.00', 'wait', '2022-06-14 01:18:42', '2022-06-14 01:18:42'),
(188, 8, 4, '01', '2023', '1000.00', 'wait', '2022-06-14 01:18:42', '2022-06-14 01:18:42'),
(189, 8, 4, '02', '2023', '1000.00', 'wait', '2022-06-14 01:18:42', '2022-06-14 01:18:42'),
(190, 8, 4, '03', '2023', '1000.00', 'wait', '2022-06-14 01:18:42', '2022-06-14 01:18:42'),
(191, 8, 4, '04', '2023', '1000.00', 'wait', '2022-06-14 01:18:42', '2022-06-14 01:18:42'),
(192, 8, 4, '05', '2023', '1000.00', 'wait', '2022-06-14 01:18:42', '2022-06-14 01:18:42');

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
(4, '2020_03_08_065417_create_accounts_table', 1),
(5, '2020_03_09_092252_create_installments_table', 1),
(6, '2020_03_09_094934_create_categories_table', 1),
(7, '2020_03_24_094322_create_policies_table', 1),
(8, '2020_06_19_171348_create_claims_table', 1),
(9, '2020_06_21_051021_create_deathclaims_table', 1),
(10, '2020_06_22_164343_create_employees_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `amount` double DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `amount`, `status`, `transaction_id`, `currency`) VALUES
(1, 1000, 'Processing', '62a86b348066b', 'BDT'),
(2, 1000, 'Processing', '62a873e8cac93', 'BDT'),
(3, 1000, 'Processing', '62a87aa4337c6', 'BDT');

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
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `policy_holder_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `holder_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maritial_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annual_income` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `benificant_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banificient_nid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `benifient_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `user_id`, `policy_holder_name`, `holder_image`, `father_name`, `mother_name`, `occupation`, `date_of_birth`, `gender`, `nid_number`, `nationality`, `religion`, `maritial_status`, `permanent_address`, `present_address`, `annual_income`, `mobile`, `email`, `benificant_name`, `banificient_nid`, `relation`, `benifient_address`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 5, 'Holder Name', '20220604090608.avatar.png', 'father', 'mother', 'programer', '2022-06-04', 'male', '123', 'Bangladeshi', 'Hindu', 'single', 'random', 'random', '10000', '01798737513', 'holder@gmail.com', 'NA', '0', 'NA', 'NA', 1, '2022-06-04 03:27:08', '2022-06-04 03:27:08'),
(2, 6, 'Holder2 Name', '20220604090657.download (2).png', 'father', 'mother', 'programer', '2022-06-22', 'male', '123', 'Bangladeshi', 'Hindu', 'single', 'random', 'random', '20000', '01798737515', 'holder2@gmail.com', 'NA', '0', 'NA', 'NA', 2, '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(3, 7, 'Holder3 Name', '20220612040634.download (3).png', 'father', 'mother', 'programer', '2022-06-12', 'male', '123233', 'Bangladeshi', 'Hindu', 'single', 'random', 'random', '10000', '01798737512', 'Holder3@gmail.com', 'NA', '0', 'NA', 'NA', 3, '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(4, 8, 'Holder4', '20220614070641.download (1).png', 'father', 'mother', 'programer', '2022-06-30', 'male', '124356565', 'Bangladeshi', 'Hindu', 'single', 'random', 'random', '10000', '017987375167', 'Holder4@gmail.com', 'NA', '0', 'NA', 'NA', 4, '2022-06-14 01:18:42', '2022-06-14 01:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'manager', 'manager', 'manager@gmail.com', NULL, '$2y$10$v8n9qr5fspKDnXtWK5b5ieQ2vB4rn87RJ6uGwE3HMP.pjJ7MZIYl.', NULL, '2022-06-04 01:53:07', '2022-06-04 01:53:07'),
(2, 'desk_officer', 'desk_officer', 'desk_officer@gmail.com', NULL, '$2y$10$P7sohWnhLP0.S1bfJmu.lew1ZG4Yvr1Ae1NMaOueH3Z9gKf0YztlC', NULL, '2022-06-04 01:53:07', '2022-06-04 01:53:07'),
(3, 'accountant', 'accountant', 'accountant@gmail.com', NULL, '$2y$10$rVAI9.Gja0taWrBUXhaKN.az7r2PLPGdMqwFGgFFrUk68Lcq2RVd2', NULL, '2022-06-04 01:53:08', '2022-06-04 01:53:08'),
(4, 'samp', 'accountant', 'sample@gmail.com', NULL, '$2y$10$UPJCJumzY2cKtQnzcw75cObs18VNG0mpK.ip7/R7KDR.J3wzdE0tm', NULL, '2022-06-04 03:23:10', '2022-06-04 03:23:10'),
(5, 'Holder Name', 'account_holder', 'holder@gmail.com', NULL, '$2y$10$.ksaeGDEC1W6hKx3YTjnVeD4LQly4Ct0rDYA/YdBAvv6GIE4jZeAq', NULL, '2022-06-04 03:27:08', '2022-06-04 03:27:08'),
(6, 'Holder2 Name', 'account_holder', 'holder2@gmail.com', NULL, '$2y$10$UemxoSDvw.Hf6hR4RMd3LuYTkF8CnWmyvLZ7zT/7uTRyNjOxc9iMu', NULL, '2022-06-04 03:39:57', '2022-06-04 03:39:57'),
(7, 'Holder3 Name', 'account_holder', 'Holder3@gmail.com', NULL, '$2y$10$U0sQjLwhge9eNcrLlE2sFuAi3ME9waj2.KSKrY.3xOHMAE3KcimZC', NULL, '2022-06-12 10:02:35', '2022-06-12 10:02:35'),
(8, 'Holder4', 'account_holder', 'Holder4@gmail.com', NULL, '$2y$10$Cf18Z7M7hM4AHannG4aIG..1tHzBXcPG0rdb2KYD1xwV9p2/NgRoq', NULL, '2022-06-14 01:18:42', '2022-06-14 01:18:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `claims`
--
ALTER TABLE `claims`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deathclaims`
--
ALTER TABLE `deathclaims`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installments`
--
ALTER TABLE `installments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `policies_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `policies_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `claims`
--
ALTER TABLE `claims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deathclaims`
--
ALTER TABLE `deathclaims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `installments`
--
ALTER TABLE `installments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
