-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 03, 2022 at 11:55 PM
-- Server version: 8.0.28-0ubuntu0.20.04.3
-- PHP Version: 7.1.33-44+ubuntu20.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `landing_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_clients`
--

CREATE TABLE `db_clients` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone_no` varchar(191) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `db_clients`
--

INSERT INTO `db_clients` (`id`, `name`, `email`, `phone_no`, `status`) VALUES
(1, 'mostafa', 'm.kamel.career@gmail.com', '0111111111', 1),
(2, 'Ahmed', 'ahmed@mail.com', '0111111111', 1),
(3, 'bot', 'bot@mail.com', '0115121133', 1),
(4, 'alien', 'alien@mail.com', '11111111345', 1),
(5, 'hamada', 'hamada@mail.com', '11111112454', 1),
(6, 'Bar', 'bar@mail.com', '01151211337', 1),
(7, 'Foo', 'Foo@gmail.com', '01151211338', 1),
(8, 'Tarek', 'Tarek@gmail.com', '01151211339', 1),
(9, 'Ali', 'ali@mail.com', '01151211330', 1),
(10, 'Said', 'said@dmg.com', '12345678912', 1),
(11, 'Kareem', 'kareem@mail.com', '12345556662', 1),
(12, 'Mahmoud', 'mahmoud@mail.com', '01115467891', 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_users`
--

CREATE TABLE `db_users` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone_no` varchar(191) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_me` varchar(255) DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `db_users`
--

INSERT INTO `db_users` (`id`, `name`, `email`, `phone_no`, `password`, `remember_me`, `status`) VALUES
(1, 'Mostafa Kamel', 'm.kamel.career@gmail.com', '01151211336', '$2y$10$bLsgCecs0oUB/1UAnwQlI.ex212ZQqwuj4OFojrFIY04iD4ha15Ru', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_clients`
--
ALTER TABLE `db_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_users`
--
ALTER TABLE `db_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_clients`
--
ALTER TABLE `db_clients`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `db_users`
--
ALTER TABLE `db_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
