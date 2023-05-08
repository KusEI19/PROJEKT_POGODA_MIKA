-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 13, 2023 at 12:59 PM
-- Server version: 10.11.2-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `termometr`
--

CREATE TABLE `termometr` (
  `id` int(11) NOT NULL,
  `wartosc` float NOT NULL,
  `kiedy_pobrano` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `termometr`
--

INSERT INTO `termometr` (`id_odczytu`, `wartosc`, `kiedy_pobrano`) VALUES
(1, 13.5625, '2023-04-13 10:54:39');

-- --------------------------------------------------------

--
-- Table structure for table `wilgotnosc`
--

CREATE TABLE `wilgotnosc` (
  `id` int(11) NOT NULL,
  `wartosc` float NOT NULL,
  `kiedy_zczytano` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wilgotnosc`
--

INSERT INTO `wilgotnosc` (`id`, `wartosc`, `kiedy_zczytano`) VALUES
(7, 72.599, '2023-04-13 10:54:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `termometr`
--
ALTER TABLE `termometr`
  ADD PRIMARY KEY (`id_odczytu`);

--
-- Indexes for table `wilgotnosc`
--
ALTER TABLE `wilgotnosc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `termometr`
--
ALTER TABLE `termometr`
  MODIFY `id_odczytu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wilgotnosc`
--
ALTER TABLE `wilgotnosc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
