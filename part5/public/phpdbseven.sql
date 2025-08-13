-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2025 at 06:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdbseven`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `image`, `title`, `content`, `category_id`, `status_id`, `user_id`, `created_at`, `updated_at`) VALUES
(5, '41746883260Screenshot 2025-05-09 233021.png', 'POST 2', 'HAE', 1, 4, 4, '2025-05-10 13:21:00', '2025-05-10 13:21:00'),
(6, '41746883275Screenshot 2024-05-05 213902.png', 'Ardunio', 'Photo', 1, 4, 4, '2025-05-10 13:21:15', '2025-05-10 13:21:15'),
(7, '41746888172Screenshot 2024-03-12 213623.png', 'POST4', 'HI', 1, 4, 4, '2025-05-10 14:42:52', '2025-05-10 14:42:52'),
(8, '41746888253Screenshot 2024-05-05 190610.png', 'POST5', 'JO', 1, 8, 4, '2025-05-10 14:44:13', '2025-05-10 14:44:25'),
(9, '41746888278Screenshot 2024-03-12 234554.png', 'POST 6', 'srgkspgsrklgs;gls;', 1, 4, 4, '2025-05-10 14:44:38', '2025-05-10 14:44:48'),
(10, '41746888302Screenshot 2024-05-05 213902.png', 'POST 7', 'JKIksdkslkflfw', 1, 4, 4, '2025-05-10 14:45:02', '2025-05-10 19:21:46'),
(11, '41746888328Screenshot 2024-05-05 190623.png', 'POST9', 'Love', 1, 4, 4, '2025-05-10 14:45:28', '2025-05-10 19:35:16'),
(17, '21746906326Screenshot 2024-03-12 213530.png', 'Anjing', 'oadad', 1, 4, 2, '2025-05-10 19:45:26', '2025-05-10 19:45:26');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `user_id`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 'TEST', 1, 4, '2025-05-09 09:10:07', '2025-05-09 10:14:39');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'on', 1, '2025-05-09 07:34:27', '2025-05-09 09:30:20'),
(8, 'OFF', 1, '2025-05-10 11:06:46', '2025-05-10 11:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `name`, `email`, `status_id`, `created_at`) VALUES
(1, 'aung', 'aung@gmail.com', 0, '2025-05-08 13:53:06'),
(2, 'aung kyaw', 'aungkyaw@gmail.com', 0, '2025-05-08 13:53:26'),
(3, 'y', 'vivo@gmail.com', 0, '2025-05-08 13:57:10'),
(4, 's', 'abcd@gmail.com', 0, '2025-05-08 13:58:24'),
(5, 't', 'kyaw@gmail.com', 0, '2025-05-08 14:04:06'),
(6, 'a', 'jko@gmail.com', 0, '2025-05-08 14:10:26'),
(7, 'sas', 'sas@gmail.com', 1, '2025-05-08 14:11:58'),
(8, 'youloveme', 'youloveme@gmail.com', 0, '2025-05-08 14:12:34'),
(9, 'iloveyou', 'iloveyou@gmail.com', 0, '2025-05-08 14:12:34'),
(10, 'playgirl', 'playgirl@gmail.com', 1, '2025-05-08 14:17:30'),
(11, 'yui', 'yui@gmail.com', 1, '2025-05-08 14:18:16'),
(12, 'Si thu soe gay', 'sithugay@gmail.com', 1, '2025-05-08 14:19:03'),
(13, 'MMY', 'MMY@gmail.com', 0, '2025-05-08 14:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('online','offline') DEFAULT 'offline',
  `lastactivity` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `lastactivity`, `created_at`, `updated_at`) VALUES
(1, 'Aung Aung', 'admin@gmail.com', '$2y$10$BSEYDWBYFOKjsjjwD.bJV.t5MS8MOW0fAo5e.R7aY2svVaBgArd7W', 'offline', '2025-05-10 12:43:41', '2025-05-08 12:43:28', '2025-05-08 12:43:28'),
(2, 'Su Su', 'susu@gmail.com', '$2y$10$5DPBmIGaPpn9LbYADlA3A.YgdCrr4YfQiJEi0misasp6i1tWCoLLO', 'online', '2025-05-10 19:36:38', '2025-05-08 12:49:05', '2025-05-08 12:49:05'),
(3, 'Kyaw', 'kyaw@gmail.com', '$2y$10$IZ7fxqtscTivcVuCPZlyjunOaUpK3OflvtqcFePOOpAAKx.G3OQ8C', 'offline', '2025-05-10 10:54:17', '2025-05-08 12:53:46', '2025-05-08 12:53:46'),
(4, 'Kyaw', 'aungkyaw@gmail.com', '$2y$10$x38qXpKZOeEIVOyqU7AMauptIA5oG9yu4JtXDQlmUbNnuXz/JxHt.', 'offline', '2025-05-10 19:36:31', '2025-05-08 12:53:53', '2025-05-08 12:53:53'),
(5, 'Ji Ji', 'admin1@gmail.com', '$2y$10$b49ji0hdr/zwlBmYQotqS.rbnmJuFCca1SfVOIVWC3MjlgmgzlMm2', 'offline', '2025-05-10 09:12:53', '2025-05-08 12:58:09', '2025-05-08 12:58:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `categories_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `statuses`
--
ALTER TABLE `statuses`
  ADD CONSTRAINT `statuses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
