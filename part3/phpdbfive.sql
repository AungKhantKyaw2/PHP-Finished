-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2025 at 09:09 PM
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
-- Database: `phpdbfive`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `documents` varchar(100) DEFAULT NULL,
  `newsletter` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profile`, `firstname`, `lastname`, `email`, `password`, `dob`, `phone`, `address`, `documents`, `newsletter`) VALUES
(1, NULL, 'Admin', 'Account', 'admin@gmail.com', '123456789', '2025-05-02', '09111111', 'Yangon', 'nrc', 0),
(2, NULL, 'Su', 'Su', 'susu@gmail.com', '123456789', '2025-05-02', '09222222', 'Mandalay', 'nrc', 0),
(3, NULL, 'Aung', 'Aung', 'aungaung@gmail.com', '123456789', '2025-05-02', '09333333', 'Mandalay', 'nrc', 0),
(4, NULL, 'Nu', 'Nu', 'nunu@gmail.com', '123456789', '2025-05-02', '09333333', 'Yangon', 'nrc', 0),
(5, NULL, 'Kyaw', 'Kyaw', 'kyawkyaw@gmail.com', '123456789', '2025-05-02', '09333333', 'Yangon', 'nrc', 0),
(16, 'public/assetsScreenshot 2025-04-29 231118.png', 'hla', 'hla', 'hlahla@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2025-05-04', '09123456789', '12 Hini st', ' nrc,passport,', 1),
(17, 'public/assets68170d13c93de_1746341139.png', 'Coca', 'Cola', 'cocacola@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2025-05-08', '0985535233', '12 Hini st', ' nrc,passport,', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
