-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 11:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proj001`
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_12_23_090020_update_users_table', 1),
(4, '2021_01_02_114828_create_proposals_table', 1);

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
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emailaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `members` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `projectTitle` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coursecode` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `studentID` bigint(20) UNSIGNED DEFAULT NULL,
  `year` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supervisor` bigint(20) UNSIGNED DEFAULT NULL,
  `schedule` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`id`, `emailaddress`, `mobileno`, `email_verified_at`, `members`, `projectTitle`, `coursecode`, `studentID`, `year`, `file`, `supervisor`, `schedule`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'mukitmiya92@gmail.com', '01724382517', NULL, '[{\"name\":\"sm ahsan\",\"stdID\":\"7777777777\"}]', 'lupms', 'CSE-4800', 1, 'Third Year', NULL, NULL, NULL, 'Pending', NULL, '2021-01-04 03:18:38', '2021-01-04 03:18:38'),
(7, 'lukidepuce@mailinator.com', '01724382518', NULL, '[{\"name\":\"hghkj\",\"stdID\":\"12345678\"},{\"name\":\"sp\",\"stdID\":\"1234567891\"}]', 'Dolores aliquid labo', 'CSE-4800', 10, 'Final Year', NULL, NULL, NULL, 'Pending', NULL, '2021-01-06 03:05:17', '2021-01-06 03:05:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `designation` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactNO` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userType` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Student',
  `studentID` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `year` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `designation`, `contactNO`, `userType`, `studentID`, `semester`, `password`, `remember_token`, `created_at`, `updated_at`, `year`) VALUES
(1, 'Ursa Myers', 'huhaj@mailinator.com', NULL, NULL, NULL, 'Admin', '1432020045', NULL, '$2y$10$BnFVG6qbgQGe8lGW8D3lPuGCMLBx7syu2oeoUjh.nMOvsfEPWfAv2', NULL, '2021-01-04 02:05:26', '2021-01-04 02:05:26', 'Final Year'),
(2, 'Cassandra Maynard', 'mebywoxy@mailinator.com', NULL, NULL, NULL, 'Supervisor', NULL, NULL, '$2y$10$uyxdNN0dXXmkblBhLU7vS.8H.zJfOHic.yXNKf.mDoQKWHDtsjLEi', NULL, '2021-01-05 11:39:56', '2021-01-05 11:39:56', NULL),
(3, 'Nolan Stewart', 'lotakataxu@mailinator.com', NULL, NULL, NULL, 'Supervisor', NULL, NULL, '$2y$10$6O59akNjL3s5T0ZzsHocAuKpZvOUl8fkzCMGAGVY88fGECgT6vSoa', NULL, '2021-01-05 11:40:01', '2021-01-05 11:40:01', NULL),
(4, 'Cecilia Burke', 'qizyqam@mailinator.com', NULL, NULL, NULL, 'Supervisor', NULL, NULL, '$2y$10$2RrIzLD7OVL1x.HfRh07iuXL/jzoUjb4U4h6tIx/RlZXmBDIfEQkW', NULL, '2021-01-05 11:40:06', '2021-01-05 11:40:06', NULL),
(5, 'Jaquelyn Barnett', 'siler@mailinator.com', NULL, NULL, NULL, 'Supervisor', NULL, NULL, '$2y$10$3EnGmmmhGF20Ai1NsuTpZOBco1mibcBIy/PwZgny6RY1KgXj89ieG', NULL, '2021-01-05 11:40:10', '2021-01-05 11:40:10', NULL),
(6, 'Francis Serrano', 'qicywec@mailinator.com', NULL, NULL, NULL, 'Supervisor', NULL, NULL, '$2y$10$aElppCDRkA18gszz/jCOpOahLn4b/Z1HFADbNc1pCin1AtEiAzwL.', NULL, '2021-01-05 11:40:14', '2021-01-05 11:40:14', NULL),
(7, 'Rebekah Obrien', 'kebigyzal@mailinator.com', NULL, NULL, NULL, 'Supervisor', NULL, NULL, '$2y$10$sOAmqmLKZmgFulcPfgkSQemLzLE9HzwmJwD3aw.vELEmDJsTjRl9S', NULL, '2021-01-05 11:40:27', '2021-01-05 11:40:27', NULL),
(8, 'Francesca Merritt', 'dykyg@mailinator.com', NULL, NULL, NULL, 'Supervisor', NULL, NULL, '$2y$10$p.18FItXMaClfbHUJ3/G9uBswyyIy8hpWUbji7Nw024tm6MVVLvSi', NULL, '2021-01-06 02:01:34', '2021-01-06 02:01:34', NULL),
(9, 'Howard Chang', 'baradaw@mailinator.com', NULL, NULL, NULL, 'Student', '1234567894', NULL, '$2y$10$HekYI5NK0NWt7RvTxI.Ch.Oc1EqozyfU6GqdgkH0tRSygvs89XD66', NULL, '2021-01-06 02:10:40', '2021-01-06 02:10:40', 'Third Year'),
(10, 'Luke Griffin', 'manomanu@mailinator.com', NULL, NULL, NULL, 'Student', '7894561230', NULL, '$2y$10$OpbFOhIGhYJ.QYfbHX2gJ.yvByygcasdVaypQgCMtVJKASBF4BkwS', NULL, '2021-01-06 03:04:40', '2021-01-06 03:04:40', 'Third Year'),
(11, 'Candice Duran', 'wexowoc@mailinator.com', NULL, NULL, NULL, 'Student', '1432020040', NULL, '$2y$10$igKt5lEbuKr9RaHhD19HIeeLjG2SEj1w2HadmGDi/wNzBZFBMMpmu', NULL, '2021-01-11 03:54:41', '2021-01-11 03:54:41', 'Third Year');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proposals_emailaddress_unique` (`emailaddress`),
  ADD UNIQUE KEY `proposals_mobileno_unique` (`mobileno`),
  ADD KEY `proposals_studentid_index` (`studentID`),
  ADD KEY `proposals_supervisor_index` (`supervisor`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
