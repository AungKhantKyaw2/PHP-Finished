-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2025 at 07:15 AM
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
-- Database: `phpdbthree`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `city` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `lastname`, `city`, `created_at`, `updated_at`) VALUES
(1, 'aung', 'kyaw', 'yangon', '2025-04-28 09:05:47', '2025-04-28 09:05:47'),
(2, 'aung', 'kyaw', 'yangon', '2025-04-28 09:05:47', '2025-04-28 09:05:47'),
(10, 'yoon', 'yoon', 'Mandalay', '2025-04-28 13:13:45', '2025-04-28 13:25:25'),
(11, 'thoon', 'thoon', 'yangon', '2025-04-28 13:13:45', '2025-04-28 13:13:45'),
(12, 'yoon', 'yoon', 'yangon', '2025-04-28 13:14:13', '2025-04-28 13:14:13'),
(13, 'thoon', 'thoon', 'yangon', '2025-04-28 13:14:13', '2025-04-28 13:14:13'),
(14, 'mon', 'mon', 'yangon', '2025-04-28 13:14:13', '2025-04-28 13:14:13'),
(15, 'su su', 'su', 'bago', '2025-04-28 14:17:24', '2025-04-28 14:17:24'),
(16, 'zaw zaw', 'zaw', 'yagon', '2025-04-28 14:17:24', '2025-04-28 14:17:24'),
(17, 'hnin hnin', 'hnin', 'mawlamyine', '2025-04-28 14:17:24', '2025-04-28 14:17:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
