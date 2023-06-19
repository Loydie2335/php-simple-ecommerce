-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 02:41 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `modified_at`) VALUES
(26, 22, 4, 8, '2023-06-17 15:34:34', NULL),
(27, 22, 9, 1, '2023-06-17 15:34:49', NULL),
(28, 22, 5, 1, '2023-06-17 15:34:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Computer Package'),
(2, 'Main Component'),
(3, 'Accesories'),
(4, 'Printer'),
(5, 'Networking and Surveillance');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(299) NOT NULL,
  `thumbnail` varchar(299) NOT NULL,
  `stock` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `thumbnail`, `stock`, `create_date`) VALUES
(2, 'AMD A6 7480 (Work from Home Package)', '13000.00', 'AMD A6 7480 3.5-3.8 GHz / 1MB Cache, MSI A68HM-E33 FM2, Skihotar 4GB DDR3 1600 w/ heatsink, Ramsta 120GB SSD, WD Blue 500GB Hard, Drive, ', 'amd_a67400_diskless.jpg', 10, '2023-05-22 09:23:26'),
(3, 'Kingston Fury HyperX 4GB DDR3 1866MHz UDIMM', '1000.00', 'RAM FOR PC', 'Kingston-Fury-HyperX-4GB-DDR3-1866MHz-UDIMM.jpg', 13, '2023-05-22 09:23:34'),
(4, 'A4Tech HS-5P', '280.00', 'A4Tech HS-5P Headphones. Sleek Behind-the-neck Design Ultra-light weight for powerful sound and comfortable listening on the move.', 'A4Tech-HS-5P.jpg', 20, '2023-06-12 03:41:52'),
(5, 'Brother DCP-J100', '5995.00', 'Brother’s Laminated Piezo Print Head minimizes print head damage and enhances the durability of the machine, allowing users to save on repairs. Furthermore, with low-cost super high yield InkBenefit cartridges, the inkjet Multi-Function Centre meets the demands of high print-volume businesses for l', 'Brother-DCP-J100.jpg', 2, '2023-06-12 03:46:38'),
(6, 'TP-LINK TL-WR840N WIFI-N 300Mbps', '800.00', 'Weight: 1.5 kg, Brand: TP-Link, Frequency: 2.4-2.4835GHz, Signal Rate: 300 Mbps\r\n\r\n', 'TP-LINK-TL-WR840N-WIFI-N-300Mbps.jpg', 2, '2023-06-12 03:50:45'),
(8, 'AMD Athlon 200GE Desktop Package', '13290.00', 'Athlon200GE 3.2 GHz / 4MB Cache, MSI A320M PRO VH AM4, Kingmax4GB DDR4, RadeonVEGA 3Graphics, Toshiba500 3.5″ SATA, NeutronLite Casing w/ 700W PSU, Nvision18.5″ LEDMonitor, A4TechKeyboard USB, A4Tech Mouse USB, SecureAVR, FRSS MousePad, Speakeror FRSSHeadset', 'amd_athlon200ge_desktop.jpg', 3, '2023-06-17 13:21:49'),
(9, 'MSI H310M PRO-VDH PLUS', '3600.00', 'H310M PRO-VDH PLUS ; Socket. 1151 ; Chipset. Intel® H310 Chipset ; Memory Channel. Dual ; DIMM Slots. 2 ; Max Memory (GB). 32.', 'msi-h310m-pro-vdh-plus.jpg', 5, '2023-06-17 13:33:10'),
(11, 'Epson L120', '4995.00', 'Weight: 7 kg, Brand: Epson, Print Speed	: 5.1 ipm, Print Volume: 5400 pages, Connection Type : USB Wired/Wi-Fi\r\n\r\n', 'L120.png', 4, '2023-06-17 13:40:55'),
(12, 'D-Link DES-1008A 8-port Switch Hub', '600.00', 'Weight: 2 kg, Brand: D-Link', 'D-Link-DES-1008A-8-port-Switch-Hub.jpg', 15, '2023-06-17 13:43:24');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `product_id`, `category_id`) VALUES
(1, 2, 1),
(2, 3, 2),
(3, 4, 3),
(4, 5, 4),
(5, 6, 5),
(6, 8, 1),
(7, 9, 2),
(9, 11, 4),
(11, 12, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(299) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `first_name`, `last_name`, `created_at`, `modified_at`) VALUES
(5, 'susyxizego@mailinator.com', 'sample', 'Eleanor', 'May', '2023-06-09 10:52:47', NULL),
(6, 'husuladu@mailinator.com', 'wew', 'Walter', 'Stokes', '2023-06-09 11:06:27', NULL),
(7, 'mefinoq@mailinator.com', 'sample', 'Wendy', 'Sharpe', '2023-06-09 11:12:06', NULL),
(9, 'nimyqybeku@mailinator.com', 'Pa$$w0rd!', 'Daniel', 'Lawrence', '2023-06-09 12:03:41', NULL),
(10, 'tujija@mailinator.com', 'Pa$$w0rd!', 'Octavius', 'Tucker', '2023-06-09 12:08:46', NULL),
(11, 'diqoz@mailinator.com', 'Pa$$w0rd!', 'Alana', 'Baker', '2023-06-09 12:11:15', NULL),
(12, 'sikarov@mailinator.com', 'Pa$$w0rd!', 'Dennis', 'Gentry', '2023-06-09 12:16:54', NULL),
(13, 'wehoq@mailinator.com', 'Pa$$w0rd!', 'Rudyard', 'Love', '2023-06-09 12:18:53', NULL),
(14, 'huwysu@mailinator.com', 'Pa$$w0rd!', 'Tara', 'Greene', '2023-06-09 12:20:12', NULL),
(15, 'maxuc@mailinator.com', 'Pa$$w0rd!', 'Olympia', 'Ramsey', '2023-06-09 12:38:05', NULL),
(16, 'zyjakekowy@mailinator.com', 'Pa$$w0rd!', 'Althea', 'Rivera', '2023-06-09 12:40:26', NULL),
(17, 'asdasWEW@gmail.com', 'johnlloyd23', 'sadas', 'asdas', '2023-06-09 13:05:39', NULL),
(18, 'sosifily@mailinator.com', '$2y$10$HAAJd/nTEAC0bXBfnK8IFOgTGeRQbRTGMaNrhvceSd/pfnvCG4.PC', 'Amela', 'Mcdaniel', '2023-06-09 13:08:53', NULL),
(19, 'zoki@mailinator.com', '$2y$10$VxFaPvKHVxcn1Z52913KCeF4Wj95yYf3tKS37JHKx.0MLetoGkOeS', 'Jordan', 'Clements', '2023-06-09 13:10:35', NULL),
(20, 'dotofape@mailinator.com', '$2y$10$l5.EqtMI/5QYrclOwjkacOYd/mH2Br9CljBaI7QPhA5zaAXRYPCb.', 'Preston', 'Craig', '2023-06-09 13:11:35', NULL),
(21, 'quxi@mailinator.com', '$2y$10$cyyZjZbJgVopPjcIt4o0OeTdL.ocvGqd1B/4dFSRL6R.RVZxHDwI2', 'Hollee', 'Barnett', '2023-06-09 13:13:49', NULL),
(22, 'johnlloydlacadin42301@gmail.com', '$2y$10$hgUcMTKCOdDKgqLrwMpg3.AXgPBWN9labUCTQWjdA37OJkMR5/X4G', 'John Lloyd', 'Lacadin', '2023-06-09 13:43:17', NULL),
(23, 'johnlloyd.lacadin.pixel8@gmail.com', '$2y$10$mFUlkiG0PkYj4gWWJGfUv.z.6ZKBRs/npmP4KjblsAbkHxF9iAbWG', 'John Lloyd', 'Lacadin', '2023-06-09 13:48:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `street` varchar(99) DEFAULT NULL,
  `barangay` varchar(99) DEFAULT NULL,
  `city_municipality` varchar(99) DEFAULT NULL,
  `province` varchar(99) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`id`, `user_id`, `street`, `barangay`, `city_municipality`, `province`, `mobile`) VALUES
(2, 5, 'Julio', 'Balong-Bato', 'CITY OF SAN JUAN', 'NCR, SECOND DISTRICT', '2147483647'),
(3, 6, 'Juan Dela Cruz', 'Cag-an', 'ANILAO', 'ILOILO', '2147483647'),
(4, 7, 'Juan Dela Cruz', 'Cabuan', 'GUINSILIBAN', 'CAMIGUIN', '2147483647'),
(6, 9, 'Juan Dela Cruz', 'La Victoria', 'CARMEN', 'BOHOL', '2147483647'),
(7, 10, 'Aliquid hic vero nih', 'Doña Loreta', 'PUDTOL', 'APAYAO', '2147483647'),
(8, 11, 'Consequuntur quis nu', 'Casit-an', 'LAUA-AN', 'ANTIQUE', '80'),
(9, 12, 'Qui ab nulla deserun', 'Landican', 'BACLAYON', 'BOHOL', '223'),
(10, 13, 'Nobis vel dignissimo', 'Luukbongsod', 'HADJI MUHTAMAD', 'BASILAN', '721'),
(11, 14, 'In temporibus autem ', 'El Salvador', 'NEW CORELLA', 'DAVAO DEL NORTE', '317'),
(12, 15, 'Necessitatibus qui t', 'Buenavista', 'CULASI', 'ANTIQUE', '317'),
(13, 16, 'Rerum omnis eum cons', 'Pulong Gubat', 'GUIGUINTO', 'BULACAN', '2147483647'),
(14, 17, 'asdas', 'Malekkeg', 'SANTA MARCELA', 'APAYAO', '2147483647'),
(15, 18, 'Officia culpa laudan', 'Lourdes (Lauc Pau)', 'LUBAO', 'PAMPANGA', '2147483647'),
(16, 19, 'Eos quibusdam blandi', 'Calangcang', 'BADIAN', 'CEBU', '2147483647'),
(17, 20, 'Et iusto repudiandae', 'Eddet', 'KABAYAN', 'BENGUET', '09657029069'),
(18, 21, 'Aspernatur sint inve', 'Buenavista (Sorsogon West District)', 'CITY OF SORSOGON (Capital)', 'SORSOGON', '09924969440'),
(19, 22, 'Julio Mercado Street', 'Bagong Pook', 'PILA', 'LAGUNA', '09924969440'),
(20, 23, 'Bagong Pook Pila, Laguna', 'Capagaypayan', 'LUNA', 'APAYAO', '09077609476');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK cart to users` (`user_id`),
  ADD KEY `FK cart to products` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK prod_cat` (`category_id`),
  ADD KEY `FK prod` (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK user_id to users table` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK cart to products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK cart to users` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `FK prod` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK prod_cat` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_address`
--
ALTER TABLE `user_address`
  ADD CONSTRAINT `FK user_id to users table` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
