-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 12:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livewire`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photos` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `author`, `body`, `created_at`, `updated_at`, `photos`) VALUES
(105, 'Md Anwar Hossain', 'asfdasdf', '2021-03-24 16:03:43', '2021-03-24 16:03:43', 'ZBhecspxtpEmzuVRl7hWxqvvYeeicwsTZY7QpQ7o.jpg'),
(106, 'Md Anwar Hossain', 'asdfsd', '2021-03-24 16:03:57', '2021-03-24 16:03:57', 'Boi94O79JsDyAjWBRXK5KxnRxSrkbx7MMMXh3lqs.jpg'),
(107, 'Md Anwar Hossain', 'asfd', '2021-03-24 16:04:05', '2021-03-24 16:04:05', 'bENhh3wqMka7zZAOkJtPDGZXxBODZfdbmWUpB9eT.jpg'),
(108, 'Md Anwar Hossain', 'asdfas', '2021-03-24 16:04:33', '2021-03-24 16:04:33', '83LQsHFVu8uH7X7csT6N7Bhj3LNZQBeu59HBWotj.jpg'),
(109, 'Md Anwar Hossain', 'asdfa', '2021-03-24 16:04:44', '2021-03-24 16:04:44', 'Etx1upB86HLNMNlKnAFRnOnshSPk9xe0TIyNogpS.jpg'),
(113, 'Md Anwar Hossain', 'asfdasdf', '2021-03-24 16:03:43', '2021-03-24 16:03:43', 'ZBhecspxtpEmzuVRl7hWxqvvYeeicwsTZY7QpQ7o.jpg'),
(114, 'Md Anwar Hossain', 'asdfsd', '2021-03-24 16:03:57', '2021-03-24 16:03:57', 'Boi94O79JsDyAjWBRXK5KxnRxSrkbx7MMMXh3lqs.jpg'),
(115, 'Md Anwar Hossain', 'asfd', '2021-03-24 16:04:05', '2021-03-24 16:04:05', 'bENhh3wqMka7zZAOkJtPDGZXxBODZfdbmWUpB9eT.jpg'),
(116, 'Md Anwar Hossain', 'asdfas', '2021-03-24 16:04:33', '2021-03-24 16:04:33', '83LQsHFVu8uH7X7csT6N7Bhj3LNZQBeu59HBWotj.jpg'),
(117, 'Md Anwar Hossain', 'asdfa', '2021-03-24 16:04:44', '2021-03-24 16:04:44', 'Etx1upB86HLNMNlKnAFRnOnshSPk9xe0TIyNogpS.jpg'),
(121, 'Md Anwar Hossain', 'asfdasdf', '2021-03-24 16:03:43', '2021-03-24 16:03:43', 'ZBhecspxtpEmzuVRl7hWxqvvYeeicwsTZY7QpQ7o.jpg'),
(122, 'Md Anwar Hossain', 'asdfsd', '2021-03-24 16:03:57', '2021-03-24 16:03:57', 'Boi94O79JsDyAjWBRXK5KxnRxSrkbx7MMMXh3lqs.jpg'),
(123, 'Md Anwar Hossain', 'asfd', '2021-03-24 16:04:05', '2021-03-24 16:04:05', 'bENhh3wqMka7zZAOkJtPDGZXxBODZfdbmWUpB9eT.jpg'),
(124, 'Md Anwar Hossain', 'asdfas', '2021-03-24 16:04:33', '2021-03-24 16:04:33', '83LQsHFVu8uH7X7csT6N7Bhj3LNZQBeu59HBWotj.jpg'),
(125, 'Md Anwar Hossain', 'asdfa', '2021-03-24 16:04:44', '2021-03-24 16:04:44', 'Etx1upB86HLNMNlKnAFRnOnshSPk9xe0TIyNogpS.jpg'),
(129, 'Md Anwar Hossain', 'asfdasdf', '2021-03-24 16:03:43', '2021-03-24 16:03:43', 'ZBhecspxtpEmzuVRl7hWxqvvYeeicwsTZY7QpQ7o.jpg'),
(130, 'Md Anwar Hossain', 'asdfsd', '2021-03-24 16:03:57', '2021-03-24 16:03:57', 'Boi94O79JsDyAjWBRXK5KxnRxSrkbx7MMMXh3lqs.jpg'),
(131, 'Md Anwar Hossain', 'asfd', '2021-03-24 16:04:05', '2021-03-24 16:04:05', 'bENhh3wqMka7zZAOkJtPDGZXxBODZfdbmWUpB9eT.jpg'),
(132, 'Md Anwar Hossain', 'asdfas', '2021-03-24 16:04:33', '2021-03-24 16:04:33', '83LQsHFVu8uH7X7csT6N7Bhj3LNZQBeu59HBWotj.jpg'),
(133, 'Md Anwar Hossain', 'asdfa', '2021-03-24 16:04:44', '2021-03-24 16:04:44', 'Etx1upB86HLNMNlKnAFRnOnshSPk9xe0TIyNogpS.jpg');

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
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2021_03_22_194526_comments', 1),
(12, '2021_03_24_203247_add_to_comments_at', 2);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md Anwar Hossain', 'admin@gmail.com', NULL, '$2y$10$1zvNpRXU6NTH1U8NlBwCseLW1TLib/M7OwlKb0uT3TXHfaJYOsTWq', NULL, '2021-03-23 14:19:11', '2021-03-24 16:30:13'),
(2, 'Md Sujon Mollah', 'sujon@gmail.com', NULL, '$2y$10$Wp1yXEmzU6k7MYEpvw5ppupu84E01U0pnCcxQvC.A3rUay2WjoGjG', NULL, '2021-03-23 14:20:36', '2021-03-23 14:20:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
