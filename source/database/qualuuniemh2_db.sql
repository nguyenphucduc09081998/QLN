-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 08:51 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qualuuniemh2_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` int(10) UNSIGNED NOT NULL,
  `idMatHang` int(11) NOT NULL,
  `idDonHang` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DichVu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id`, `idMatHang`, `idDonHang`, `SoLuong`, `DichVu`) VALUES
(1, 2, 2, 5, NULL),
(2, 2, 3, 1, NULL),
(3, 3, 3, 1, NULL),
(4, 4, 3, 1, NULL),
(5, 2, 4, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `id` int(10) UNSIGNED NOT NULL,
  `idMatHang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idKhachHang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDung` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(10) UNSIGNED NOT NULL,
  `NgayDatHang` date NOT NULL,
  `NgayGiaoHang` date NOT NULL,
  `idNguoiDung` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HoVaTen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDienThoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TongTien` int(11) NOT NULL,
  `VAT` int(11) NOT NULL,
  `PhiVanChuyen` int(11) NOT NULL,
  `TrangThai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `NgayDatHang`, `NgayGiaoHang`, `idNguoiDung`, `HoVaTen`, `Email`, `DiaChi`, `SoDienThoai`, `TongTien`, `VAT`, `PhiVanChuyen`, `TrangThai`) VALUES
(1, '2018-10-09', '2018-10-11', '4', 'Phan Đình Minh Hiếu', 'mhieu25101998@gmail.com', 'Khu Phố 6 Linh Trung Thủ Đức - Q1 - HCM', '0964030602', 1935000, 175000, 10000, 'DANGXULY'),
(2, '2018-10-09', '2018-10-11', '4', 'Phan Đình Minh Hiếu', 'mhieu25101998@gmail.com', 'Khu Phố 6 Linh Trung Thủ Đức - Q1 - HCM', '0964030602', 1935000, 175000, 10000, 'DANGXULY'),
(3, '2018-10-09', '2018-10-11', '4', 'Phan Đình Minh Hiếu', 'mhieu25101998@gmail.com', 'Khu Phố 6 Linh Trung Thủ Đức - Q1 - HCM', '0964030602', 1165000, 105000, 10000, 'DANGXULY'),
(4, '2018-10-09', '2018-10-11', '4', 'Phan Đình Minh Hiếu', 'mhieu25101998@gmail.com', 'Khu Phố 6 Linh Trung Thủ Đức - Q1 - HCM', '0964030602', 780000, 70000, 10000, 'DANGXULY');

-- --------------------------------------------------------

--
-- Table structure for table `giamgia`
--

CREATE TABLE `giamgia` (
  `id` int(10) UNSIGNED NOT NULL,
  `idMatHang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Role` int(11) NOT NULL,
  `LoaiGiamGia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idContainer` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `URL` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hinhanh`
--

INSERT INTO `hinhanh` (`id`, `type`, `idContainer`, `URL`) VALUES
(1, 'mathang', '1', '/upload/mathang/mathang1/anh-girl-xinh-de-thuong-nhat-nam-2017-1.jpg'),
(2, 'mathang', '1', '/upload/mathang/mathang1/anh-girl-xinh-de-thuong-nhat-nam-2017-2.jpg'),
(3, 'mathang', '2', '/upload/mathang/mathang2/anh-girl-xinh-de-thuong-nhat-nam-2017-3.jpg'),
(4, 'mathang', '2', '/upload/mathang/mathang2/anh-girl-xinh-de-thuong-nhat-nam-2017-4-e1497652867699.jpg'),
(5, 'mathang', '3', '/upload/mathang/mathang3/anh-girl-xinh-de-thuong-nhat-nam-2017-5.jpg'),
(6, 'mathang', '3', '/upload/mathang/mathang3/anh-girl-xinh-de-thuong-nhat-nam-2017-6.jpg'),
(7, 'mathang', '4', '/upload/mathang/mathang4/anh-girl-xinh-de-thuong-nhat-nam-2017-8.jpg'),
(8, 'mathang', '4', '/upload/mathang/mathang4/anh-girl-xinh-de-thuong-nhat-nam-2017-9.jpg'),
(9, 'mathang', '5', '/upload/mathang/mathang5/anh-girl-xinh-de-thuong-nhat-nam-2017-10.jpg'),
(10, 'mathang', '5', '/upload/mathang/mathang5/anh-girl-xinh-de-thuong-nhat-nam-2017-11.jpg'),
(11, 'mathang', '6', '/upload/mathang/mathang6/anh-girl-xinh-de-thuong-nhat-nam-2017-12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `loaimathang`
--

CREATE TABLE `loaimathang` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenLoaiMatHang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaimathang`
--

INSERT INTO `loaimathang` (`id`, `TenLoaiMatHang`) VALUES
(1, 'Quận 1'),
(2, 'Quận 2'),
(3, 'Quận 3'),
(4, 'Quận 4'),
(5, 'Quận 5'),
(6, 'Quận 6'),
(7, 'Quận 7'),
(8, 'Quận Thủ Đức');

-- --------------------------------------------------------

--
-- Table structure for table `mathang`
--

CREATE TABLE `mathang` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenMatHang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MoTa` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia` int(11) NOT NULL,
  `XuatXu` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoLuongTon` int(11) NOT NULL,
  `idLoaiMatHang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mathang`
--

INSERT INTO `mathang` (`id`, `TenMatHang`, `MoTa`, `Gia`, `XuatXu`, `SoLuongTon`, `idLoaiMatHang`) VALUES
(1, 'Thảo', 'Ngoan, hiền dễ thương', 300000, 'Hồ Chí Minh', 1, '1'),
(2, 'Mai', 'Điện nước đầy đủ, full service', 350000, 'Nha Trang', 1, '2'),
(3, 'Hằng', 'Kỹ năng đầy  mình, không thúc giục', 300000, 'Đà Nẵng', 1, '3'),
(4, 'Ngân', 'Thông minh nhí nhảnh', 400000, 'Hồ Chí Minh', 1, '4'),
(5, 'Hân', 'Kiêu căng, điệu đa nhưng rất tình cảm không khác gì người yêu', 400000, 'Hồ Chí Minh', 1, '5'),
(6, 'Linh', 'Sexy, giọng trầm ấm. V1 V3 ngộp thở', 600000, 'Hà Nội', 1, '6');

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
(1, '2018_09_16_113540_create_users_table', 1),
(2, '2018_09_17_124823_create_mathang_table', 1),
(3, '2018_09_17_133756_create_loaimathang_table', 1),
(6, '2018_09_17_145359_create_danhgia_table', 1),
(7, '2018_09_17_150057_create_thacmac_table', 1),
(8, '2018_09_17_151058_create_hinhanh_table', 1),
(9, '2018_09_17_152001_create_phi_table', 1),
(10, '2018_09_17_152031_create_giamgia_table', 1),
(11, '2018_10_03_064811_create_sessions_table', 1),
(16, '2018_09_17_133940_create_donhang_table', 2),
(17, '2018_09_17_144813_create_chitietdonhang_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `phi`
--

CREATE TABLE `phi` (
  `id` int(10) UNSIGNED NOT NULL,
  `LoaiPhi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phi`
--

INSERT INTO `phi` (`id`, `LoaiPhi`, `Gia`) VALUES
(5, 'VAT', 10),
(6, 'VanChuyen', 10000),
(7, 'VanChuyenNhanh', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thacmac`
--

CREATE TABLE `thacmac` (
  `id` int(10) UNSIGNED NOT NULL,
  `idMatHang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idKhachHang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDung` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TraLoi` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HoVaTen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySinh` date DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDienThoai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GioiTinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ThanhPho` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Quan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Role` int(11) NOT NULL,
  `Active` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `HoVaTen`, `NgaySinh`, `email`, `SoDienThoai`, `GioiTinh`, `DiaChi`, `ThanhPho`, `Quan`, `Role`, `Active`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', '$2y$10$eXuImZ8oIDjgkXZJi8e65Ojq6jaKiSudoofoEsi1vBP/BhF4.Axvq', 'admin', NULL, 'admin@admin.com', NULL, NULL, NULL, NULL, NULL, 1, 1, 'LW31PUUADR9mW7cPVSe3S8zYLnEpwr3jwraeuAhmKy2FfG4VvmMebDd2Urth', NULL, NULL),
(4, 'hieuphan', '$2y$10$mQDZLXomZt8BJbTYiRNLpOXbONJNAO0UgQH/Zq3wye4wMdps2cb9S', 'Phan Đình Minh Hiếu', '1998-10-25', 'mhieu25101998@gmail.com', '0964030602', 'Nam', 'Khu Phố 6 Linh Trung Thủ Đức', 'HCM', 'Q1', 2, 0, NULL, '2018-10-08 19:56:45', '2018-10-08 20:05:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giamgia`
--
ALTER TABLE `giamgia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaimathang`
--
ALTER TABLE `loaimathang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mathang`
--
ALTER TABLE `mathang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phi`
--
ALTER TABLE `phi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thacmac`
--
ALTER TABLE `thacmac`
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
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `giamgia`
--
ALTER TABLE `giamgia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `loaimathang`
--
ALTER TABLE `loaimathang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mathang`
--
ALTER TABLE `mathang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `phi`
--
ALTER TABLE `phi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thacmac`
--
ALTER TABLE `thacmac`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
