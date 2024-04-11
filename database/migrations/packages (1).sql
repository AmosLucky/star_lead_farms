-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2024 at 07:15 PM
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
-- Database: `starlead`
--

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL DEFAULT 0,
  `pv` double NOT NULL DEFAULT 0,
  `referral_bonus` double NOT NULL DEFAULT 0,
  `benefits` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `price`, `pv`, `referral_bonus`, `benefits`, `created_at`, `updated_at`) VALUES
(1, 'MINI PACKAGE', 25000, 15, 3000, 'Rice 5kg - 5pV| 2kg of Semolina - 2pV| 1 Liter Of Oil - 1pv| 1/2 painter Crayfish - 3pv| Stock Fish - 4pv', NULL, NULL),
(2, 'ROYAL PACKAGE', 45000, 28, 10000, 'Rice 10kg -10pV| 5kg Of Semolina - 5pv| 1.5 Liter Of Oil - 2pV| 1Palnter Of Crayfish - 5pv| Stock Fish - 2pV| 5Pcs of Tomatoes - 4pv', NULL, NULL),
(3, 'SILVER PACKAGE', 75000, 50, 15000, 'Rice 25kg - 20pV|\nTomatoes - 5pV|\n3 Liter Of Oil - 4pv|\n2Painters of Crayfish - 10pV|\nStock Fish - 5pv|\n5kg of semolina - 5pV', NULL, NULL),
(4, 'BRONZE PACKAGE', 195000, 110, 30000, '2 Bags of Rice 50kg - 8Opv|\n1 Ban of Semolina - 9pv|\nTomatoes - 12pV|\n5liter Of Oil 9pv|\n2 Painters Of Crayfish - 9pv|\nStock Fish - 10pV|\n1carton Of Indomie Noddles - 5pv|\ninstant Cash Prize - N50,000', NULL, NULL),
(5, 'GOLDEN PACKAGE', 315000, 177, 50000, 'Rice 50kg - 40py| Tomatoes - 12pV| 5liter Of Oil 9pv| 4 painters Of Crayfish -20pV| Stock Fish - 5pv| Milo & Milk - 10pV| 1 Bag Of Semolina - 9pv| 1 Carton Of indomie Noodles 5pv| Instant Cash Prize - N30,000|', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
