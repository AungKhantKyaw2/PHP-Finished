-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2025 at 03:24 PM
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
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `user_id`) VALUES
(1, 'This is article 1.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1),
(2, 'This is article 2.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1),
(3, 'This is article 3.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1),
(4, 'This is article 4.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 2),
(5, 'This is article 5.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 3),
(6, 'This is article 6.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 3),
(7, 'This is article 7.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 3),
(8, 'This is article 8.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 3),
(9, 'This is article 9.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 3),
(12, 'This is article 12.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 5),
(13, 'this is new article 13', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
