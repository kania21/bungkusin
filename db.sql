-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 18, 2017 at 03:20 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `imkania`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `id_merch` int(11) DEFAULT NULL,
  `nama_menu` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `id_merch`, `nama_menu`, `foto`, `deskripsi`, `harga`) VALUES
(1, NULL, 'hilmna', '/fotofoto/Photo on 3-22-17 at 2.41 PM #2 (original) #2.jpg', 'sdasd', 7000),
(2, 1, 'Sego Crispy', 'segocrispy_7000.jpg', 'nasi jamur digoreng enak lah pokonya', 7000),
(3, 1, 'Sego Rendang', 'segorendang_7000.jpg', NULL, 7000),
(4, 1, 'Sate Njamoer', 'sate_12000.jpg', NULL, 12000),
(5, 1, 'Somay Njamoer', 'somay_11000.jpg', NULL, 11000),
(6, 1, 'Sosis Njamoer', 'sosis_12000.jpg', NULL, 12000),
(7, 2, 'Ramah 1', 'pentolramah1_13000.jpg', NULL, 13000),
(8, 2, 'Ramah 2', 'pentolramah2_13000.JPG', NULL, 13000),
(9, 3, 'Ayam Geprek Bawang', 'ayamgeprek_15000.jpg', NULL, 15000),
(10, 3, 'Ayam Geprek Mozza', 'ayamgeprekmozza_17000.jpg', NULL, 17000),
(11, 2, 'Gila Aja', 'pentolgilaaja_13000.jpg', NULL, 13000),
(12, 2, 'Gila Banget', 'pentolgilabanget_14000.JPG', NULL, 14000),
(13, 3, 'Ayam Geprek Sambal Ijo', 'ayamgeprekijo_15000.jpg', NULL, 15000),
(14, 4, 'Pok-Pok Original', 'pokpokoriginal_14000.jpg', NULL, 14000),
(15, 4, 'Pok-Pok Tempura', 'pokpoktempura_14000.jpg', NULL, 14000),
(16, 4, 'Kentang', 'kentang_11000.jpg', NULL, 11000),
(17, 4, 'Tofu', 'tofu_11000.jpg', NULL, 11000);

-- --------------------------------------------------------

--
-- Table structure for table `merchant`
--

CREATE TABLE `merchant` (
  `id_merch` int(11) NOT NULL,
  `nama_merch` varchar(50) DEFAULT NULL,
  `alamat_merch` varchar(100) DEFAULT NULL,
  `jam_buka` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`id_merch`, `nama_merch`, `alamat_merch`, `jam_buka`) VALUES
(1, 'Sego Njamoer', 'Jl. Gebang Wetan No. 2B\r\nGebang Putih, Sukolilo\r\nSurabaya', '08.00 - 22.00'),
(2, 'Pentol Gilaaaa', 'Jl. Raya Rungkut Madya No.23\r\nRungkut Kidul, Rungkut\r\nSurabaya', '08.00 - 22.00'),
(3, 'Ayam Geprek', 'Jl. Dharmawangsa No.115\r\nKertajaya, Gubeng\r\nSurabaya', '08.00 - 22.00'),
(4, 'Chicken Pok-Pok', 'Jl. Basuki Rahmat No. 8-12\r\nTunjungan PLaza I Food Court\r\nSurabaya', '08.00 - 22.00');

-- --------------------------------------------------------

--
-- Table structure for table `topup`
--

CREATE TABLE `topup` (
  `id_topup` int(11) NOT NULL,
  `jenis` varchar(200) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topup`
--

INSERT INTO `topup` (`id_topup`, `jenis`, `jumlah`, `id`, `waktu`) VALUES
(1, 'Topup', 10000, 1, '2017-05-17 21:17:31'),
(2, 'Topup', 10000, 1, '2017-05-17 21:30:44'),
(3, 'Topup', 10000, 1, '2017-05-17 21:31:22'),
(4, 'Topup', 10000, 1, '2017-05-17 21:32:10'),
(5, 'Topup', 25000, 1, '2017-05-17 21:32:25'),
(6, 'Topup', 50000, 1, '2017-05-17 21:32:36'),
(7, 'Topup', 10000, 1, '2017-05-17 21:37:54'),
(8, 'Topup', 10000, 1, '2017-05-17 21:37:58'),
(9, 'Topup', 10000, 1, '2017-05-17 21:37:59'),
(10, 'Pakai', 30000, 1, '2017-05-17 21:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_merch` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_merch`, `id`, `total`, `waktu`) VALUES
(67, 1, 1, 30000, '2017-05-17 19:04:08'),
(68, 1, 1, 30000, '2017-05-17 19:06:14'),
(69, 1, 1, 30000, '2017-05-17 19:23:54'),
(70, 1, 1, 30000, '2017-05-17 19:24:57'),
(71, 1, 1, 30000, '2017-05-17 19:24:58'),
(72, 1, 1, NULL, '2017-05-17 19:26:01'),
(73, 1, 1, NULL, '2017-05-17 19:30:39'),
(74, 1, 1, NULL, '2017-05-17 19:30:41'),
(75, 1, 1, NULL, '2017-05-17 19:30:51'),
(76, 1, 1, NULL, '2017-05-17 19:30:55'),
(77, 1, 1, NULL, '2017-05-17 19:31:23'),
(78, 1, 1, NULL, '2017-05-17 19:31:24'),
(79, 1, 1, NULL, '2017-05-17 19:31:24'),
(80, 1, 1, NULL, '2017-05-17 19:31:25'),
(81, 1, 1, NULL, '2017-05-17 19:31:48'),
(82, 1, 1, NULL, '2017-05-17 19:32:16'),
(83, 1, 1, 45000, '2017-05-17 19:32:30'),
(84, 1, 1, 45000, '2017-05-17 19:37:25'),
(85, 1, 1, 45000, '2017-05-17 19:37:26'),
(86, 1, 1, 45000, '2017-05-17 19:37:34'),
(87, 1, 1, 45000, '2017-05-17 19:37:52'),
(88, 1, 1, 45000, '2017-05-17 19:37:53'),
(89, 1, 1, 45000, '2017-05-17 19:38:06'),
(90, 1, 1, 45000, '2017-05-17 19:39:08'),
(91, 1, 1, 45000, '2017-05-17 19:39:32'),
(92, 1, 1, 45000, '2017-05-17 19:46:10'),
(93, 1, 1, 45000, '2017-05-17 19:46:35'),
(94, 1, 1, 45000, '2017-05-17 20:35:34'),
(95, 1, 1, 45000, '2017-05-17 20:35:59'),
(96, 1, 1, 45000, '2017-05-17 20:36:01'),
(97, 1, 1, 45000, '2017-05-17 20:39:38'),
(98, 1, 1, 45000, '2017-05-17 20:40:33'),
(99, 1, 1, 60000, '2017-05-17 20:41:20'),
(100, 1, 1, 60000, '2017-05-17 20:43:24'),
(101, 1, 1, 60000, '2017-05-17 20:44:35'),
(102, 1, 1, 60000, '2017-05-17 20:45:56'),
(103, 1, 1, 60000, '2017-05-17 20:48:09'),
(104, 1, 1, 60000, '2017-05-17 20:48:42'),
(105, 1, 1, 60000, '2017-05-17 20:51:54'),
(106, 1, 1, 60000, '2017-05-17 20:52:28'),
(107, 1, 1, 60000, '2017-05-17 20:55:25'),
(108, 1, 1, 60000, '2017-05-17 20:55:39'),
(109, 1, 1, 60000, '2017-05-17 20:56:10'),
(110, 1, 1, 60000, '2017-05-17 20:56:11'),
(111, 1, 1, 60000, '2017-05-17 20:56:13'),
(112, 1, 1, 30000, '2017-05-17 21:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `transmenu`
--

CREATE TABLE `transmenu` (
  `id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `id_transaksi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transmenu`
--

INSERT INTO `transmenu` (`id`, `jumlah`, `id_menu`, `id_transaksi`) VALUES
(4, 2, 2, 67),
(5, 2, 2, 68),
(6, 2, 2, 69),
(7, 2, 2, 70),
(8, 2, 2, 71),
(9, 1, 2, 83),
(10, 2, 3, 83),
(11, 1, 2, 84),
(12, 2, 3, 84),
(13, 1, 2, 85),
(14, 2, 3, 85),
(15, 1, 2, 86),
(16, 2, 3, 86),
(17, 1, 2, 87),
(18, 2, 3, 87),
(19, 1, 2, 88),
(20, 2, 3, 88),
(21, 1, 2, 89),
(22, 2, 3, 89),
(23, 1, 2, 90),
(24, 2, 3, 90),
(25, 1, 2, 91),
(26, 2, 3, 91),
(27, 1, 2, 92),
(28, 2, 3, 92),
(29, 1, 2, 93),
(30, 2, 3, 93),
(31, 1, 2, 94),
(32, 2, 3, 94),
(33, 1, 2, 95),
(34, 2, 3, 95),
(35, 1, 2, 96),
(36, 2, 3, 96),
(37, 1, 2, 97),
(38, 2, 3, 97),
(39, 1, 2, 98),
(40, 2, 3, 98),
(41, 1, 2, 99),
(42, 2, 3, 99),
(43, 1, 4, 99),
(44, 1, 2, 100),
(45, 2, 3, 100),
(46, 1, 4, 100),
(47, 1, 2, 101),
(48, 2, 3, 101),
(49, 1, 4, 101),
(50, 1, 2, 102),
(51, 2, 3, 102),
(52, 1, 4, 102),
(53, 1, 2, 103),
(54, 2, 3, 103),
(55, 1, 4, 103),
(56, 1, 2, 104),
(57, 2, 3, 104),
(58, 1, 4, 104),
(59, 1, 2, 105),
(60, 2, 3, 105),
(61, 1, 4, 105),
(62, 1, 2, 106),
(63, 2, 3, 106),
(64, 1, 4, 106),
(65, 1, 2, 107),
(66, 2, 3, 107),
(67, 1, 4, 107),
(68, 1, 2, 108),
(69, 2, 3, 108),
(70, 1, 4, 108),
(71, 1, 2, 109),
(72, 2, 3, 109),
(73, 1, 4, 109),
(74, 1, 2, 110),
(75, 2, 3, 110),
(76, 1, 4, 110),
(77, 1, 2, 111),
(78, 2, 3, 111),
(79, 1, 4, 111),
(80, 1, 2, 112),
(81, 1, 3, 112);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(1024) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `bungpay` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `remember_token` varchar(1024) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `merchant` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nama`, `bungpay`, `name`, `remember_token`, `created_at`, `updated_at`, `merchant`) VALUES
(1, 'hlmn.hg@gmail.com', '$2y$10$0ldCuXKagvc87wElNAodV.ZBehZ4bBrhdJzQ2sXPr7vSB5./NQA6K', NULL, 115000, 'hlmn', 'ySOqSFhyvfcXXUb3mefknW5aOIFYdiyLr5fExX9tfVZnwnIJlrSxlqdO1jIF', '2017-05-17 21:47:49', '2017-05-17 14:47:49', 0),
(2, 'oing@gmail.com', '$2y$10$p1Z.b094Z2m1V.ILyntrYujoZyDBVYo8hz2hY8blFjrivQPIc1sye', NULL, NULL, 'oing', NULL, '2017-05-17 13:30:05', '2017-05-17 13:30:05', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `fk_reference_4` (`id_merch`);

--
-- Indexes for table `merchant`
--
ALTER TABLE `merchant`
  ADD PRIMARY KEY (`id_merch`);

--
-- Indexes for table `topup`
--
ALTER TABLE `topup`
  ADD PRIMARY KEY (`id_topup`),
  ADD KEY `topuupfk` (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk_reference_2` (`id_merch`),
  ADD KEY `fk_reference_3` (`id`);

--
-- Indexes for table `transmenu`
--
ALTER TABLE `transmenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reference_7` (`id_menu`),
  ADD KEY `fk_reference_8` (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `merchant`
--
ALTER TABLE `merchant`
  MODIFY `id_merch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `topup`
--
ALTER TABLE `topup`
  MODIFY `id_topup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `transmenu`
--
ALTER TABLE `transmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `fk_reference_4` FOREIGN KEY (`id_merch`) REFERENCES `merchant` (`id_merch`);

--
-- Constraints for table `topup`
--
ALTER TABLE `topup`
  ADD CONSTRAINT `topuupfk` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_reference_2` FOREIGN KEY (`id_merch`) REFERENCES `merchant` (`id_merch`),
  ADD CONSTRAINT `fk_reference_3` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `transmenu`
--
ALTER TABLE `transmenu`
  ADD CONSTRAINT `fk_reference_7` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `fk_reference_8` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);
