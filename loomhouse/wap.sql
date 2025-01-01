-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2024 at 01:29 PM
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
-- Database: `wap`
--

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id` int(11) NOT NULL,
  `barang` varchar(250) NOT NULL,
  `kategori` varchar(250) NOT NULL,
  `ukuran` varchar(50) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id`, `barang`, `kategori`, `ukuran`, `stok`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'Mayora', 'Kemeja', 'XS', 100, '2024-12-19 17:29:22', '2024-12-19 17:29:22', NULL),
(8, 'Pashmina', 'Hijab', 'M', 800, '2024-12-19 17:29:35', '2024-12-19 17:29:35', NULL),
(9, 'Cutbray', 'Celana', 'L', 6, '2024-12-19 18:07:40', '2024-12-19 18:07:40', NULL),
(10, 'Sabrina', 'Kemeja', 'XL', 25, '2024-12-19 18:28:42', '2024-12-19 18:28:42', NULL),
(12, 'Plisket', 'Rok', 'M', 79, '2024-12-21 07:26:21', '2024-12-21 07:26:21', NULL),
(17, 'Kulot', 'Celana', 'S', 9, '2024-12-21 14:03:10', '2024-12-21 14:03:10', NULL),
(18, 'Livira', 'Kemeja', 'XS', 800, '2024-12-21 14:05:05', '2024-12-21 14:05:05', NULL),
(19, 'Cutbray', 'Celana', 'XS', 6, '2024-12-21 14:13:38', '2024-12-21 14:13:38', NULL),
(26, 'Hazel', 'Hijab', 'S', 7, '2024-12-27 00:35:09', '2024-12-27 00:35:09', NULL),
(27, 'Bleum', 'Rok', 'XS', 20, '2024-12-27 11:56:18', '2024-12-27 11:56:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@warehouse.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'hadias', 'hadiassyadzwina@gmail.com', 'be15c6942996f09039d05e6b53bd7113'),
(7, 'Zalfa', 'zalfa@gmail.com', '706f24650e4960e82513e6722a9918d6'),
(8, 'Syadzwina', 'syadzwina@gmail.com', 'e755174322570c83c093991e102923b8'),
(9, 'Erisa', 'eris@gmail.com', '7fdaccf1ce8ad170d8428f1bc80db4cd'),
(10, 'Zahra', 'zahra@gmail.com', '01e50c681c0b05ff22686b3e0f7290d3'),
(11, 'muti', 'muti@gamil.com', '02d7d0ea0a12955b91e987e76148c6e1'),
(12, 'Syadzwina', 'syadzwina@gmail.com', 'e755174322570c83c093991e102923b8'),
(13, 'ijah', 'ijah@gmail.com', '97db88598a94f1ae00770fc61648d687'),
(14, 'adam', 'adam@gmail.com', '1d7c2923c1684726dc23d2901c4d8157'),
(15, 'mayla', 'mayla@gmail.com', '4080785ebb679912f956c56ad44ac88f'),
(16, 'mayla', 'mayla@gmail.com', '4080785ebb679912f956c56ad44ac88f'),
(17, 'Hazleya', 'hazleya@gmail.com', '8c39eb41766d62e3e781b40e353af862'),
(37, 'ijul', 'ijul@gmail.com', '2037a7b65f3bc47544d8f7e00b32e203'),
(38, 'Ijat ', 'ijat@gmail.com', '8bd901218767cb93734036c695d1a225'),
(39, 'Ustadz', 'ustadz@gmail.com', '17ddfda58362a5c91bec8361fadbb635'),
(40, 'hadi', 'hadi@gmail.com', '76671d4b83f6e6f953ea2dfb75ded921'),
(41, 'ijul', 'ijul@gmail.com', '2037a7b65f3bc47544d8f7e00b32e203'),
(42, 'hisyam', 'hisyam@gmail.com', '56017682ebceffb3608afae32dc91300'),
(43, 'ijal', 'ijal@gmail.com', 'be6459a7fd4032689aedd4adad189197'),
(44, 'Hisyam Almairi', 'syam@gmail.com', 'c0f6a2e6136ff3eb7d37b7a292e06174'),
(45, 'bila', 'bila@gmail.com', '6341fd65fc1d7b26ddbcb4bee3a14ffa'),
(46, 'ijal', 'ijal@gmail.com', 'be6459a7fd4032689aedd4adad189197'),
(47, 'jara', 'jara@gmail.com', 'da8adb01fcb349237c3619286f2e78de'),
(48, 'LoomHouse', 'loom@gmail.com', 'f8d1ce191319ea8f4d1d26e65e130dd5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
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
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
