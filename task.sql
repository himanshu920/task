-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 24, 2020 at 08:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `star_counts`
--

CREATE TABLE `star_counts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `start` int(11) DEFAULT NULL,
  `month` varchar(90) NOT NULL,
  `year` varchar(90) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `star_counts`
--

INSERT INTO `star_counts` (`id`, `user_id`, `start`, `month`, `year`, `created_at`) VALUES
(1, 1, 1, '02', '2020', '2020-06-24 02:03:19'),
(2, 1, 1, '02', '2020', '2020-06-24 02:03:19'),
(3, 1, 1, '02', '2020', '2020-06-24 02:03:19'),
(4, 1, 1, '03', '2020', '2020-06-24 02:03:19'),
(5, 2, 1, '02', '2019', '2020-06-24 02:03:19'),
(6, 2, 1, '02', '2019', '2020-06-24 02:03:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `git_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar_url` text DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `git_id`, `username`, `password`, `avatar_url`, `fullname`, `bio`, `created_at`, `updated_at`) VALUES
(1, '40784410', 'himanshu9207', '$2y$10$FMATRnIIJlYH3pY7onmG/Om.rq77Q5C2KQMb.SHbEM/9gp0nkMFwu', 'https://avatars2.githubusercontent.com/u/40784410?v=4', NULL, NULL, '2020-06-24 10:37:11', '2020-06-24 10:37:11'),
(2, '40784410', 'himanshu92090', '$2y$10$0Iipd0y5rhXN/LeLGTG6FuaUh1L4aObsN03RAgrBzlGUnmjSR9aNC', 'https://avatars2.githubusercontent.com/u/40784410?v=4', NULL, NULL, '2020-06-24 10:39:33', '2020-06-24 10:39:33'),
(45, '40784410', 'himanshu920', '$2y$10$6nTk/givRY3fjonF0jVxGeXzhnxkfyiLCpUskwBmhs.DlLIyQd7I.', 'https://avatars2.githubusercontent.com/u/40784410?v=4', NULL, NULL, '2020-06-24 13:05:44', '2020-06-24 13:05:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `star_counts`
--
ALTER TABLE `star_counts`
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
-- AUTO_INCREMENT for table `star_counts`
--
ALTER TABLE `star_counts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
