-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 06:01 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` char(100) NOT NULL,
  `password` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `Bill_ID` int(11) NOT NULL,
  `username` char(100) NOT NULL,
  `Total` int(30) NOT NULL,
  `Note` char(100) DEFAULT NULL,
  `Date_Order` datetime(6) DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`Bill_ID`, `username`, `Total`, `Note`, `Date_Order`) VALUES
(1, 'thang54682777@gmail.com', 344444, NULL, '2020-07-09 00:00:00.000000'),
(2, 'thang54682777@gmail.com', 1344444, NULL, '2020-07-09 00:00:00.000000'),
(3, 'thang54682777@gmail.com', 1344444, NULL, '2020-07-09 00:00:00.000000'),
(4, 'thang54682777@gmail.com', 1344444, NULL, '2020-07-09 00:00:00.000000'),
(5, 'thang54682777@gmail.com', 1344444, NULL, '2020-07-09 00:00:00.000000'),
(6, 'thang54682777@gmail.com', 1344444, NULL, '2020-07-09 00:00:00.000000'),
(7, 'thang54682777@gmail.com', 1344444, NULL, '2020-07-09 00:00:00.000000'),
(8, 'thang54682777@gmail.com', 1344444, NULL, '2020-07-09 00:00:00.000000'),
(9, 'thang54682777@gmail.com', 1344444, 'adasdas', '2020-07-09 00:00:00.000000'),
(10, 'thang54682777@gmail.com', 1344444, NULL, '2020-07-09 00:00:00.000000'),
(11, 'thang54682777@gmail.com', 1344444, NULL, '2020-07-09 00:00:00.000000'),
(12, 'thang54682777@gmail.com', 1344444, NULL, '2020-07-09 00:00:00.000000'),
(13, 'thang54682777@gmail.com', 1344444, NULL, '2020-07-09 00:00:00.000000'),
(14, 'thang54682777@gmail.com', 1344444, NULL, '2020-07-09 00:00:00.000000'),
(15, 'thang54682777@gmail.com', 1344444, NULL, '2020-07-09 00:00:00.000000'),
(16, 'thang54682777@gmail.com', 1344444, NULL, '2020-07-09 00:00:00.000000'),
(17, 'thang54682777@gmail.com', 1344444, 'adá', '2020-07-09 00:00:00.000000'),
(18, 'thang54682777@gmail.com', 1344444, NULL, '2020-07-09 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `Bill_ID` int(30) NOT NULL,
  `Product_ID` char(100) NOT NULL,
  `Price` int(30) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`Bill_ID`, `Product_ID`, `Price`, `create_at`) VALUES
(17, 'P1', 122222, '2020-07-09 03:04:29'),
(17, 'P2', 222222, '2020-07-09 03:04:29'),
(17, 'P7', 250000, '2020-07-09 03:04:29'),
(18, 'P1', 122222, '2020-07-09 04:00:35'),
(18, 'P2', 222222, '2020-07-09 04:00:35'),
(18, 'P7', 250000, '2020-07-09 04:00:35');

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
('P1', 'banh mi', 'TP1', 'banh kha ngon', 500000, 122222, '111.jpg', '2020-06-01 21:53:40.000000', '2020-06-10 21:53:40.000000'),
('P2', 'he', 'TP1', '', 500000, 222222, '234.jpg', '2020-06-01 21:53:40.000000', '2020-06-10 21:53:40.000000'),
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
(3, 'Vince', 'marcus', '$2y$10$CtQ3z.mSXcE/pQHhA3LgjussuT5BwBdmoIMAmtBXiSc60Oalw/P.i', NULL, '2020-07-05 16:38:27', '2020-07-05 16:38:27', '0842794801'),
(4, 'le duc thang', 'thang54682777@gmail.com', '$2y$10$exkxCkbm7MFTkpK5dfQzf.91MZxWqqsaVAH/qBz7tr1fxa6RU.4Em', NULL, '2020-07-06 01:54:49', '2020-07-06 01:54:49', '090909'),
(5, 'le duc thang', 'vip54682777', '$2y$10$9QAH6J7fkCdZJRRxIDMFnu.xIx7crT1FljgJg5pshMcYD65wBQCT.', NULL, '2020-07-06 12:59:19', '2020-07-06 12:59:19', '9808908908'),
(6, 'le duc thang', 'vip20102000', '$2y$10$6zousyMlZyziwvdwOkcenuA80tI7dvzPe69cHC6cIHeFmDDsYs2vS', NULL, '2020-07-08 02:14:43', '2020-07-08 02:14:43', '123123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`Bill_ID`);

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
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `Bill_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
