-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 09:49 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminssionapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Rabby', 'rabby@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL);

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
(1, '2018_11_09_143337_create_admins_table', 1),
(2, '2018_11_15_125300_create_universities_table', 2),
(3, '2018_11_25_084245_create_students_table', 3),
(4, '2018_12_04_074641_create_notices_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'About dhaka university', 'There is a little changed in the admission of dhaka university. Now we have to prepare for the next notice.', '2018-12-04 02:15:28', '2018-12-04 02:15:28'),
(2, 'About Nstu', 'Admission activity is closed for nstu', '2018-12-04 02:31:44', '2018-12-04 02:31:44'),
(3, 'About Chittagong', 'There is notice for chittagong', '2018-12-04 02:32:18', '2018-12-04 02:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gpa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `password`, `gpa`, `unit`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Fazlul Kabir', '5f4dcc3b5aa765d61d8327deb882cf99', '6.5', 1, 'fkzisan@gmail.com', '2018-11-25 07:33:31', '2018-11-25 07:33:31'),
(2, 'Molla Hasan', '5f4dcc3b5aa765d61d8327deb882cf99', '7.00', 2, 'molla@gmail.com', '2018-11-25 07:38:29', '2018-11-25 07:38:29'),
(3, 'Rabby', '5f4dcc3b5aa765d61d8327deb882cf99', '6.00', 2, 'rabby@gmail.com', '2018-11-25 08:33:20', '2018-11-25 08:33:20'),
(4, 'Mahmududl Hasaan', '5f4dcc3b5aa765d61d8327deb882cf99', '9.8', 1, 'mollahasan512@gmail.com', '2018-11-27 02:10:37', '2018-11-27 02:10:37');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_gpa` double NOT NULL,
  `b_gpa` double NOT NULL,
  `c_gpa` double NOT NULL,
  `d_gpa` double NOT NULL,
  `admission_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admission_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `name`, `a_gpa`, `b_gpa`, `c_gpa`, `d_gpa`, `admission_date`, `admission_time`, `created_at`, `updated_at`) VALUES
(2, 'Noakhali Science & Technology University', 7, 6.5, 6.5, 7, '2018-10-27', '10:00', '2018-11-15 08:20:55', '2018-11-15 08:20:55'),
(3, 'Comilla University', 7, 6.5, 6.5, 7, '2018-10-18', '10:00', '2018-11-25 02:18:35', '2018-11-25 02:18:35'),
(4, 'Dhaka University', 8, 6.5, 7, 7.5, '2018-09-12', '10:00', '2018-11-25 07:29:03', '2018-11-25 07:29:03'),
(5, 'Chittagong University', 7.5, 6.5, 6.5, 7, '2018-10-10', '10:30', '2018-11-25 07:30:12', '2018-11-25 07:30:12'),
(6, 'Jahangirnogor University', 8, 7, 6.5, 7, '2018-10-15', '11:00', '2018-11-25 07:31:50', '2018-11-25 07:31:50'),
(7, 'PSTU', 6.5, 6.25, 6, 6.25, '2018-10-18', '10:30', '2018-11-27 02:25:25', '2018-11-27 02:25:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
