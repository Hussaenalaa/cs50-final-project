-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 10:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heros_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `batman`
--

CREATE TABLE `batman` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batman`
--

INSERT INTO `batman` (`id`, `date`, `username`) VALUES
(1, '0323-01-23', 'shady'),
(2, '2026-09-13', ''),
(3, '0000-00-00', 'ANWAR'),
(4, '1111-11-11', 'a7a'),
(5, '1111-11-11', 'nigga');

-- --------------------------------------------------------

--
-- Table structure for table `deadpool`
--

CREATE TABLE `deadpool` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deadpool`
--

INSERT INTO `deadpool` (`id`, `date`, `username`) VALUES
(1, '0003-02-03', ''),
(2, '0003-02-03', 'shady'),
(3, '2026-09-13', ''),
(4, '0312-02-13', ''),
(5, '0002-12-31', 'ANWAR'),
(6, '1111-11-11', 'a7a'),
(7, '1111-11-11', 'nigga'),
(8, '2025-09-13', 'ccc');

-- --------------------------------------------------------

--
-- Table structure for table `flash`
--

CREATE TABLE `flash` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flash`
--

INSERT INTO `flash` (`id`, `date`, `username`) VALUES
(1, '7773-02-23', 'shady'),
(2, '2026-09-13', ''),
(3, '0024-12-31', ''),
(4, '0043-12-31', 'ANWAR'),
(5, '0332-12-31', 'ANWAR'),
(6, '0000-00-00', 'ANWAR'),
(7, '1111-11-11', 'ANWAR'),
(8, '1111-11-11', 'a7a'),
(9, '1111-11-11', 'nigga'),
(10, '2043-02-12', 'bbb');

-- --------------------------------------------------------

--
-- Table structure for table `joker`
--

CREATE TABLE `joker` (
  `id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `joker`
--

INSERT INTO `joker` (`id`, `date`, `username`) VALUES
(NULL, '0333-02-23', ''),
(3, '4443-02-23', 'shady'),
(3, '4443-02-23', 'shady'),
(NULL, '2026-09-13', ''),
(NULL, '3231-12-23', ''),
(NULL, '0023-02-13', ''),
(NULL, '2024-04-15', 'ANWAR'),
(NULL, '1111-11-11', 'a7a'),
(NULL, '1111-11-11', 'nigga'),
(NULL, '2074-09-24', 'bbb'),
(NULL, '2023-02-13', 'ccc'),
(NULL, '2025-09-13', 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `phone_number`, `password`, `id`) VALUES
('hussaena', 'hussaen@gmail.com', 123, '123', 10),
('hussaena', 'hussaen@gmail.com', 123, '123', 11),
('Omar', 'omar@gmail.com', 123, '123', 41),
('hussaen', 'hussaenalaa8@gmail.c', 123, '123', 43),
('shady', 'a7a@a7a.com', 123, '123', 44),
('anwar', 'anwar@nigga.com', 114, '123', 45),
('a7a', 'a7a@a7a.com', 123, '123', 46),
('nigga', 'nigga@nigga.nigga', 123, 'nigga', 47),
('aaa', 'aa@gmail.com', 123, 'aaa', 48),
('aaa', 'aaa@gmail.com', 123, '123', 49),
('bbb', 'bbb@gmail.com', 123, '123', 50),
('ccc', 'ccc@gmail.com', 123, '123', 51),
('fff', 'fff@gmail.com', 123, '123', 52),
('sss', 'sss@gmail.com', 123, '123', 53),
('sss', 'sss@gmail.com', 123, '123', 54),
('sss', 'sss@gmail.com', 123, '123', 55);

-- --------------------------------------------------------

--
-- Table structure for table `wish`
--

CREATE TABLE `wish` (
  `name` varchar(20) NOT NULL,
  `number` int(20) NOT NULL,
  `image` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wish`
--

INSERT INTO `wish` (`name`, `number`, `image`, `id`) VALUES
('home lander', 123, 'wallpaperflare.com_wallpaper (9).jpg', 1),
('superman', 923, 'wallpaperflare.com_wallpaper (1).jpg', 2),
('superman', 923, 'wallpaperflare.com_wallpaper (1).jpg', 3),
('flash', 123, 'download (8).jpeg', 4),
('flash', 123, 'download (8).jpeg', 5),
('home lander', 123, 'download (8).jpeg', 6),
('home lander', 123, 'download (8).jpeg', 7),
('home lander', 123, 'download (8).jpeg', 8),
('home lander', 123, 'download (8).jpeg', 9),
('home lander', 123, 'download (8).jpeg', 10),
('', 0, '', 11),
('', 0, '', 12),
('dfas', 1213, 'wallpaperflare.com_wallpaper (12).jpg', 13),
('home lander', 123, 'wallpaperflare.com_wallpaper (7).jpg', 14),
('home lander', 123, 'wallpaperflare.com_wallpaper (7).jpg', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batman`
--
ALTER TABLE `batman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deadpool`
--
ALTER TABLE `deadpool`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flash`
--
ALTER TABLE `flash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wish`
--
ALTER TABLE `wish`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batman`
--
ALTER TABLE `batman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `deadpool`
--
ALTER TABLE `deadpool`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `flash`
--
ALTER TABLE `flash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `wish`
--
ALTER TABLE `wish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
