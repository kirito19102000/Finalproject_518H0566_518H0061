-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 06:41 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_banhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` char(100) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `ID_type` char(255) NOT NULL,
  `description` char(255) NOT NULL,
  `unit_price` int(255) NOT NULL,
  `promotion_price` int(255) NOT NULL,
  `image` char(255) NOT NULL,
  `create_at` datetime(6) NOT NULL,
  `update_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Name`, `ID_type`, `description`, `unit_price`, `promotion_price`, `image`, `create_at`, `update_at`) VALUES
('P1', 'banh mi', 'TP1', '', 500000, 122222, '111.jpg', '2020-06-01 21:53:40.000000', '2020-06-10 21:53:40.000000'),
('P2', 'he', 'TP1', '', 500000, 122222, '234.jpg', '2020-06-01 21:53:40.000000', '2020-06-10 21:53:40.000000'),
('P3', 'cc', 'TP2', '', 0, 0, '544bc48782741.png', '2020-06-01 21:53:40.000000', '2020-06-10 21:53:40.000000'),
('P4', 'moi', 'TP2', '', 0, 0, '544bc48782741.png', '2020-06-01 21:53:40.000000', '2020-06-10 21:53:40.000000'),
('P5', 'he', 'TP2', '', 0, 0, '234.jpg', '2020-06-01 21:53:40.000000', '2020-06-10 21:53:40.000000'),
('P6', 'he', 'TP1', '', 1000, 0, '234.jpg', '2020-06-01 21:53:40.000000', '2020-06-10 21:53:40.000000'),
('P7', 'he', 'TP1', '', 500000, 0, '234.jpg', '2020-06-01 21:53:40.000000', '2020-06-10 21:53:40.000000'),
('P8', 'he', 'TP1', '', 500000, 0, '234.jpg', '2020-06-01 21:53:40.000000', '2020-06-10 21:53:40.000000');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `ID` int(100) NOT NULL,
  `Image` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`ID`, `Image`) VALUES
(2, 'banner1.jpg'),
(3, 'fbg1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `type_product`
--

CREATE TABLE `type_product` (
  `ID_type` char(100) NOT NULL,
  `Name` char(100) NOT NULL,
  `decription` varchar(100) NOT NULL,
  `image` char(255) NOT NULL,
  `Pay` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type_product`
--

INSERT INTO `type_product` (`ID_type`, `Name`, `decription`, `image`, `Pay`) VALUES
('TP1', 'Pay', '', 'p1392962167_banh74.jpg', '1'),
('TP2', 'Free', '', 'p1392962167_banh74.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`) VALUES
(1, 'Vince Marcus', 'marcusvince', '$2y$10$dByP7AkT2EqyeooH05EZQ.3ppB5Ofv6KdXUiyrGpvTB5SLLXzXuiG', NULL, '2020-07-05 15:29:09', '2020-07-05 15:29:09', '0842794801'),
(2, 'Vince Marcus', 'vince', '$2y$10$8lKuotai6lzA2c.asOq6tedGXF.ZVEKaA4S5VbR3CSLiKS/So7xGG', NULL, '2020-07-05 15:29:23', '2020-07-05 15:29:23', '0842794801'),
(3, 'Vince', 'marcus', '$2y$10$CtQ3z.mSXcE/pQHhA3LgjussuT5BwBdmoIMAmtBXiSc60Oalw/P.i', NULL, '2020-07-05 16:38:27', '2020-07-05 16:38:27', '0842794801');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`username`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_type` (`ID_type`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`ID_type`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`ID_type`) REFERENCES `type_product` (`ID_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
