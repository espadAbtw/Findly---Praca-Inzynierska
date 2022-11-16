-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 12:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findly`
--
CREATE DATABASE IF NOT EXISTS `findly` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `findly`;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1556460564, 451695264, 'Siemka'),
(2, 451695264, 1556460564, 'siemka'),
(3, 1183901059, 1556460564, 'Czesc krzysiu!'),
(4, 1556460564, 1183901059, 'Siema'),
(5, 1556460564, 1183901059, 'Co tam kamil'),
(6, 451695264, 1556460564, 'co tam mati'),
(7, 1556460564, 451695264, 'A dobrze'),
(8, 451695264, 1556460564, 'pogg'),
(9, 451695264, 1556460564, 'Jest gucci'),
(10, 451695264, 1556460564, 'Czat dziala'),
(11, 1556460564, 451695264, 'Bez kitu'),
(12, 451695264, 1556460564, 'Czesc Mati'),
(13, 1556460564, 451695264, 'Czesc Kamil');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `about` varchar(400) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `dc` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `about`, `age`, `gender`, `city`, `fb`, `twitter`, `dc`, `status`) VALUES
(1, 451695264, 'Mati', 'Karas', 'mati@wp.pl', '123', '166842146746755173_320278885240292_437311010278211584_n.jpg', '', 18, 'Mezczyzna', '', '', '', '', 'Active now'),
(43, 503216217, 'Oskar', 'Krawczyk', 'soso@gmail.com', 'test', '166842610018157298_112075029357514_5605455763134319300_n.png', '123123123123', 27, 'Mezczyzna', 'Krakow', 'https://www.facebook.com/oskar.krawczyk', 'https://twitter.com/grywan', 'Grywan#0132', 'Active now'),
(44, 1183901059, 'Krzysiek', 'Zalog', 'bartek@gmail.com', '123', '166854780320150802_140114.jpg', 'czesc jestem bartek', 45, 'Mezczyzna', 'Radomsko', 'https://www.facebook.com/krzysztof', 'https://twitter.com/kristof', 'Krzychu#2137', 'Active now'),
(46, 1556460564, 'Kamil', 'Gruchala', 'kamil@wp.pl', '123', '1668547736kamil.png', '', 18, 'Mezczyzna', '', '', '', '', 'Active now'),
(48, 75081883, 'Mateusz', '', 'mati2@gmail.com', '123', '', '', 0, '', '', '', '', '', 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
