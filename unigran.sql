-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2025 at 05:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unigran`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `description` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `main_image`, `price`, `description`, `created_at`, `update_at`) VALUES
(1, 'name', 'mainimg', 250, 'sas desc', '2025-01-01 17:35:11', '2025-01-01 17:35:11'),
(2, 'sd', 'uploads/6775305e2e015_gts new logo.png', 23, '', '2025-01-01 17:39:02', '2025-01-01 17:39:02'),
(3, 'sd', 'uploads/67753068d8983_gts new logo.png', 23, '3d', '2025-01-01 17:39:12', '2025-01-01 17:39:12'),
(4, 'sd', 'uploads/677530b930e76_gts new logo.png', 23, '3d', '2025-01-01 17:40:33', '2025-01-01 17:40:33'),
(5, 'dfb', 'uploads/6775338946d48_gts new logo.png', 12, 'fdf', '2025-01-01 17:52:33', '2025-01-01 17:52:33'),
(6, 'pgsdh', 'uploads/677533d950491_gtsen1g.jpg', 250, 'sf', '2025-01-01 17:53:53', '2025-01-01 17:53:53'),
(7, 'fdsf', 'Error uploading the file.', 2500, 'fdfdf', '2025-01-01 17:55:26', '2025-01-01 17:55:26'),
(8, 'fdf', '../../uploads/67753458bcee2_gtsen1g.jpg', 324, '434', '2025-01-01 17:56:00', '2025-01-01 17:56:00'),
(9, 'df', 'Only JPG, PNG, and GIF files are allowed.', 2344, 'gfdg', '2025-01-01 17:59:20', '2025-01-01 17:59:20'),
(10, '', 'Only JPG, PNG, and GIF files are allowed.', 0, '', '2025-01-01 17:59:45', '2025-01-01 17:59:45'),
(11, '', 'Only JPG, PNG, and GIF files are allowed.', 0, '', '2025-01-01 17:59:47', '2025-01-01 17:59:47'),
(12, '', 'Only JPG, PNG, and GIF files are allowed.', 0, '', '2025-01-01 17:59:47', '2025-01-01 17:59:47'),
(13, '', 'Only JPG, PNG, and GIF files are allowed.', 0, '', '2025-01-01 18:10:58', '2025-01-01 18:10:58'),
(14, '', 'Only JPG, PNG, and GIF files are allowed.', 0, '', '2025-01-01 18:10:59', '2025-01-01 18:10:59'),
(15, '', 'Only JPG, PNG, and GIF files are allowed.', 0, '', '2025-01-01 18:14:43', '2025-01-01 18:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `product_gallery`
--

CREATE TABLE `product_gallery` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_gallery`
--

INSERT INTO `product_gallery` (`id`, `product_id`, `path`, `created_at`, `updated_at`) VALUES
(1, '2', 'dff', '2025-01-01 13:14:51', '2025-01-01 13:14:51'),
(2, '1', '', '2025-01-01 17:52:33', '2025-01-01 17:52:33'),
(3, '1', '', '2025-01-01 17:52:33', '2025-01-01 17:52:33'),
(4, '1', '', '2025-01-01 17:52:33', '2025-01-01 17:52:33'),
(5, '6', '', '2025-01-01 17:53:53', '2025-01-01 17:53:53'),
(6, '6', '', '2025-01-01 17:53:53', '2025-01-01 17:53:53'),
(7, '6', '', '2025-01-01 17:53:53', '2025-01-01 17:53:53'),
(8, '7', '', '2025-01-01 17:55:26', '2025-01-01 17:55:26'),
(9, '7', '', '2025-01-01 17:55:26', '2025-01-01 17:55:26'),
(10, '7', '', '2025-01-01 17:55:26', '2025-01-01 17:55:26'),
(11, '8', '', '2025-01-01 17:56:00', '2025-01-01 17:56:00'),
(12, '8', '', '2025-01-01 17:56:00', '2025-01-01 17:56:00'),
(13, '8', '', '2025-01-01 17:56:00', '2025-01-01 17:56:00'),
(14, '9', '', '2025-01-01 17:59:20', '2025-01-01 17:59:20'),
(15, '9', '', '2025-01-01 17:59:20', '2025-01-01 17:59:20'),
(16, '9', '', '2025-01-01 17:59:20', '2025-01-01 17:59:20'),
(17, '10', '', '2025-01-01 17:59:45', '2025-01-01 17:59:45'),
(18, '10', '', '2025-01-01 17:59:45', '2025-01-01 17:59:45'),
(19, '10', '', '2025-01-01 17:59:45', '2025-01-01 17:59:45'),
(20, '11', '', '2025-01-01 17:59:47', '2025-01-01 17:59:47'),
(21, '11', '', '2025-01-01 17:59:47', '2025-01-01 17:59:47'),
(22, '11', '', '2025-01-01 17:59:47', '2025-01-01 17:59:47'),
(23, '12', '', '2025-01-01 17:59:47', '2025-01-01 17:59:47'),
(24, '12', '', '2025-01-01 17:59:47', '2025-01-01 17:59:47'),
(25, '12', '', '2025-01-01 17:59:47', '2025-01-01 17:59:47'),
(26, '13', '', '2025-01-01 18:10:58', '2025-01-01 18:10:58'),
(27, '13', '', '2025-01-01 18:10:58', '2025-01-01 18:10:58'),
(28, '13', '', '2025-01-01 18:10:58', '2025-01-01 18:10:58'),
(29, '14', '', '2025-01-01 18:10:59', '2025-01-01 18:10:59'),
(30, '14', '', '2025-01-01 18:10:59', '2025-01-01 18:10:59'),
(31, '14', '', '2025-01-01 18:10:59', '2025-01-01 18:10:59'),
(32, '15', '', '2025-01-01 18:14:43', '2025-01-01 18:14:43'),
(33, '15', '', '2025-01-01 18:14:43', '2025-01-01 18:14:43'),
(34, '15', '', '2025-01-01 18:14:43', '2025-01-01 18:14:43'),
(35, '0', '', '2025-01-01 18:15:45', '2025-01-01 18:15:45'),
(36, '0', '', '2025-01-01 18:15:45', '2025-01-01 18:15:45'),
(37, '0', '', '2025-01-01 18:15:45', '2025-01-01 18:15:45'),
(38, '0', '', '2025-01-01 18:15:46', '2025-01-01 18:15:46'),
(39, '0', '', '2025-01-01 18:15:46', '2025-01-01 18:15:46'),
(40, '0', '', '2025-01-01 18:15:46', '2025-01-01 18:15:46'),
(41, '0', '', '2025-01-01 18:16:14', '2025-01-01 18:16:14'),
(42, '0', '', '2025-01-01 18:16:14', '2025-01-01 18:16:14'),
(43, '0', '', '2025-01-01 18:16:14', '2025-01-01 18:16:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`, `updated`, `created`) VALUES
(1, 'uvindu', 'uvindu94@gmail.com', '4lln2gts', 'admin', '2025-01-01 14:50:12', '2025-01-01 13:54:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_gallery`
--
ALTER TABLE `product_gallery`
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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_gallery`
--
ALTER TABLE `product_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
