-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 03:37 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asm`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id_catagory` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id_catagory`, `name`) VALUES
(1, 'Dưỡng da'),
(2, 'Làm sạch'),
(3, 'Trang điểm nền'),
(4, 'Mặt nạ');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `postdate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `name`, `id_user`, `id_product`, `noidung`, `postdate`) VALUES
(1, 'user', 2, 4, 'dddddd', 0),
(3, 'user', 2, 30, 'bị sao vậy', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `role` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `user`, `pass`, `email`, `role`) VALUES
(1, 'admin', '123456', NULL, 1),
(2, 'user', '123', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `id_type` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_catagory` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name`, `img`, `description`, `id_type`, `id_brand`, `price`, `quantity`, `id_catagory`) VALUES
(4, 'Combo Dưỡng Da Phục Hồi Chuyên Sâu THE THERAPY FIRST SERUM + DR.BELMEUR', 'hinh2.webp', '', 1, 0, 560000, 0, 1),
(5, 'Tinh Chất Giúp Da Trắng Sáng WHITE SEED BRIGHTENING SERUM 50ml', 'hinh16.webp', '', 4, 0, 456000, 0, 3),
(30, 'Tẩy Tế Bào Chết Toàn Thân YEHWADAM BODY PEELING 300ml', 'hinh22.webp', NULL, 1, 0, 200000, 0, 1),
(32, 'Bộ Kem Trẻ Hóa Da YEHWADAM HWANSAENGGO ULTIMATE ', 'hinh23.webp', NULL, 1, 0, 250000, 0, 1),
(33, 'Bộ Kem Dưỡng Làm Sáng Trắng Da YEHWADAM HWANSAENGGO ', 'hinh24.webp', NULL, 1, 0, 150000, 0, 1),
(34, '[ONLY ONLINE] Combo Mặt Nạ Và Kem Chống Nắng Kiểm Soát Nhờn NATURAL SUN ECO', 'hinh25.webp', NULL, 1, 0, 500000, 0, 1),
(35, '[ONLY ONLINE] Combo Mặt Nạ Và Mặt Nạ Kỳ Trắng Sáng Da SMART PEELING WHITE JEWEL', 'hinh26.jpg', NULL, 1, 0, 300000, 0, 2),
(36, '[ONLY ONLINE] Combo Mặt Nạ Và Mặt Nạ Kỳ SMART PEELING HONEY BLACK SUGAR SCRUB', 'hinh29.webp', NULL, 1, 0, 152000, 0, 2),
(37, '[ONLY ONLINE] Combo Mặt Nạ Và Sữa Rửa Mặt Bổ Sung Ẩm MANGO SEED CLEANSING FOAM 150ML', 'hinh30.webp', NULL, 1, 0, 200000, 0, 2),
(38, '[ONLY ONLINE] Combo Mặt Nạ Và Dầu Tẩy Trang Tăng Cường Làm Sạch REAL BLEND DEEP CLEANSING OIL 225ml', 'hinh31.webp', NULL, 1, 0, 5400000, 0, 2),
(39, '[ONLY ONLINE] Combo Mặt Nạ Và Sữa Rửa Mặt Làm Sạch Đa Năng ALL CLEAR ALL IN-ONE FOAMING CLEANSER', 'hinh32.webp', NULL, 1, 0, 1234000, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `name`) VALUES
(1, 'Các sản phẩm'),
(2, 'Nước cân bằng'),
(3, 'Tinh chất '),
(4, 'Kem dưỡng'),
(48, 'Kem chống nắng ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id_catagory`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `fk-product-type` (`id_type`),
  ADD KEY `fk-product-catagory` (`id_catagory`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id_catagory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk-product-catagory` FOREIGN KEY (`id_catagory`) REFERENCES `catagory` (`id_catagory`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk-product-type` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
