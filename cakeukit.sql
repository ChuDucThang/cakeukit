-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 07:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakeukit`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `del_flg` tinyint(100) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `account_code` varchar(6) NOT NULL,
  `password` varchar(100) NOT NULL,
  `birth_date` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `avatar_path` varchar(100) DEFAULT NULL,
  `role_type` tinyint(4) NOT NULL,
  `del_flg` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `account_code`, `password`, `birth_date`, `email`, `phone`, `address`, `avatar_path`, `role_type`, `del_flg`, `created_at`, `updated_at`) VALUES
(1, 'Super', 'Admin', 'ADMIN', 'e10adc3949ba59abbe56e057f20f883e', '2020/02/20', 'admin@gmail.com', '0123456789', 'HN', 'img/img.png', 0, 0, NULL, NULL),
(2, 'Chu Duc', 'Thang', 'CDT', '1', '2020-06-22', 'thang95.tk@gmail.com', '0123456789', 'Ha Nam', NULL, 0, 0, NULL, NULL),
(3, 'Nguyen Van', 'Anh', 'NVA', '$2y$10$eN9KNO0mZn8nGRd.pPPJ8OsdHrf2PlEsKLF1R1riRROKFk1AC3U9.', NULL, 'nguyenvananh@gmail.com', NULL, NULL, NULL, 1, 0, NULL, NULL),
(4, 'Nguyen Van', 'Tung', 'NVT', '$2y$10$db0uAn8WNKwA8/NCgLHAwegd7Nyk.NrcRIGY8BvAM2SW/4ZgfmGAa', '2020-06-25', 'nguyenvantung@gmail.com', '0923728332', NULL, NULL, 1, 0, NULL, NULL),
(5, 'Nguyen Van', 'Tung', 'NVT', '$2y$10$kGb3IVCMrOx163FP49qEkeyOzO5y1omO8quJH19BkuKIfIl7iPCv2', NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL),
(7, 'Nguyen Van', 'Thanh', 'NVT', '$2y$10$/BbNM1NyFG0E2iJwq4YdW.jdTlX0xDBM.5PVcPbSL7rJBg30gv0Ua', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL),
(8, 'Nguyen Van', 'Thanh', 'NVT', '$2y$10$1d7RP.lfRkFDMJKNzWNbyuZm.xTWW3YQsFdVaOUHAYJrtIGUI6JJq', NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL),
(19, 'Nguyen Dinh', 'Phong', 'NDP01', '$2y$10$.D2KlgwnXSG6KZRZl3.1HOgSr90edLF2xKgVMLeLg1n7R8oK06l3C', '', '', '', '', '', 1, 1, NULL, NULL),
(20, 'Staff', 'One', 'STAFF1', '$2y$10$xmk5ZGj/UX07Izd89EDfqeAIdmG2xwTsrBDY.yDsA7qTN7PyGyHM2', '', 'staff_one@gmail.com', '', '', '', 1, 0, NULL, NULL),
(21, 'Staff', 'Two', 'STAFF2', '$2y$10$nnR0e/afEYjzjwT0XUqEyuPtVfEsdutQxRP3gxaIqHeVURmpY7dny', '', 'stafftwo@gmail.com', '', '', '', 1, 0, NULL, NULL),
(22, 'vdvd', 'vdvd', 'vdv', '$2y$10$LqsPnp/VYUYPHgMSLZw2WustwV.4FsxIC/SChzNWgbM4zVVyo4fvu', '', 'dv@gmail.com', '', '', '', 1, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
