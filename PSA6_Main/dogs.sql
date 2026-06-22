-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2026 at 11:25 AM
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
-- Database: `dog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `breed` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(100) NOT NULL,
  `color` varchar(30) NOT NULL,
  `height` decimal(5,2) NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`id`, `name`, `breed`, `age`, `address`, `color`, `height`, `weight`, `created_at`) VALUES
(16, 'Nikki', 'Chow Chow', 7, 'San Mateo Rizal', 'Brown', 56.90, 40.90, '2026-06-22 09:09:33'),
(27, 'Brownie', 'Aspin', 2, 'Blk 12 Lot 6, Phase 3, Brgy. San Jose, Antipolo City, Rizal', 'Brown', 45.00, 18.50, '2026-06-22 09:12:46'),
(28, 'Choco', 'Shih Tzu', 3, '123 P. Burgos St., Brgy. San Lorenzo, Makati City', 'Black & White', 25.00, 7.20, '2026-06-22 09:12:46'),
(29, 'Bantay', 'Aspin', 4, '#56 Mabini St., Brgy. Poblacion, Santa Rosa City, Laguna', 'Black', 50.00, 22.00, '2026-06-22 09:12:46'),
(30, 'Mochi', 'Pomeranian', 1, 'Unit 8, Victoria Tower, Brgy. San Antonio, Pasig City', 'Orange', 20.00, 4.50, '2026-06-22 09:12:46'),
(31, 'Tisoy', 'Aspin', 3, 'Purok 5, Brgy. San Isidro, Angono, Rizal', 'White & Brown', 42.00, 16.00, '2026-06-22 09:12:46'),
(32, 'Buchi', 'Maltese', 2, '42 Kingsville St., Brgy. San Juan, Cainta, Rizal', 'White', 22.00, 5.80, '2026-06-22 09:12:46'),
(33, 'Kobe', 'Golden Retriever', 4, '15 Scout Reyes St., Brgy. Paligsahan, Quezon City', 'Golden', 58.00, 30.00, '2026-06-22 09:12:46'),
(34, 'Maya', 'Aspin', 1, 'Purok 3, Brgy. San Vicente, Binan City, Laguna', 'Brown & White', 38.00, 12.00, '2026-06-22 09:12:46'),
(35, 'Pogi', 'Poodle', 3, '83 E. Rodriguez Ave., Brgy. Ugong, Pasig City', 'Apricot', 30.00, 9.50, '2026-06-22 09:12:46'),
(36, 'Daisy', 'Aspin', 2, 'Block 2, Lot 8, Villa Carolina, Brgy. Cupang, Antipolo City', 'Brindle', 40.00, 14.00, '2026-06-22 09:12:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
