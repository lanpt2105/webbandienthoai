-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 05:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dienthoai`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `username`, `password`) VALUES
(1, 'Lanpt', 'Lanpt'),
(2, 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHD` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` float NOT NULL,
  `MaCTHD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `Id` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `MaND` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SoSao` int(11) NOT NULL,
  `BinhLuan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NgayLap` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `MaND` int(11) NOT NULL,
  `NgayLap` datetime NOT NULL,
  `NguoiNhan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PhuongThucTT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TongTien` float NOT NULL,
  `TrangThai` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKM` int(11) NOT NULL,
  `TenKM` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiKM` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GiaTriKM` float NOT NULL,
  `NgayBD` datetime NOT NULL,
  `NgayKT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKM`, `TenKM`, `LoaiKM`, `GiaTriKM`, `NgayBD`, `NgayKT`) VALUES
(1, 'Không khuyến mại', 'Nothing', 0, '2019-02-06 22:38:25', '2025-10-14 22:38:25'),
(2, 'Giảm Giá', 'GiamGia', 500000, '2019-08-06 22:38:25', '2021-03-24 22:38:25'),
(3, 'Giá rẻ online', 'GiaReOnline', 700000, '2019-08-06 22:38:25', '2020-09-17 22:38:25'),
(4, 'Trả góp', 'TraGop', 0, '2019-08-06 22:38:25', '2020-09-17 22:38:25'),
(5, 'Mới Ra Mắt', 'MoiRaMat', 0, '2019-08-06 22:38:25', '2020-09-17 22:38:25');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLSP` int(11) NOT NULL,
  `TenLSP` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Mota` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLSP`, `TenLSP`, `HinhAnh`, `Mota`) VALUES
(1, 'Apple', 'Apple.jpg', 'Các sản phẩm của Apple'),
(2, 'Coolpad', 'Coolpad.png', 'Các sản phẩm của Coolpad'),
(3, 'HTC', 'HTC.jpg', 'Các sản phẩm của HTC'),
(4, 'Itel', 'Itel.jpg', 'Các sản phẩm của Itel'),
(5, 'Mobell', 'Mobell.jpg', 'Các sản phẩm của Mobell'),
(6, 'Vivo', 'Vivo.jpg', 'Các sản phẩm của Vivo'),
(7, 'Oppo', 'Oppo.jpg', 'Các sản phẩm của Oppo'),
(8, 'SamSung', 'Samsung.jpg', 'Các sản phẩm của SamSung'),
(10, 'Nokia', 'Nokia.jpg', 'Các sản phẩm của Nokia'),
(11, 'Motorola', 'Motorola.jpg', 'Các sản phẩm của Motorola'),
(12, 'Mobiistar', 'Mobiistar.jpg', 'Các sản phẩm của Mobiistar'),
(13, 'Xiaomi', 'Xiaomi.jpg', 'Các sản phẩm của Xiaomi'),
(23, 'Huawei', 'Huawei.jpg', 'Các sản phẩm của Huawei');

-- --------------------------------------------------------

--
-- Table structure for table `loaitintuc`
--

CREATE TABLE `loaitintuc` (
  `MaLTT` int(11) NOT NULL,
  `TenLTT` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaitintuc`
--

INSERT INTO `loaitintuc` (`MaLTT`, `TenLTT`) VALUES
(1, 'Tin kinh tế'),
(2, 'Tin xã hội'),
(3, 'Tin thế giới'),
(4, 'Tin thể thao'),
(5, 'Giải Trí');

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE `phanquyen` (
  `MaQuyen` int(11) NOT NULL,
  `TenQuyen` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ChiTietQuyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`MaQuyen`, `TenQuyen`, `ChiTietQuyen`) VALUES
(1, '1', 'Khách hàng '),
(2, '2', 'Khách vãng lai');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `MaLSP` int(11) NOT NULL,
  `TenSP` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `HinhAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `MaKM` int(11) NOT NULL,
  `ManHinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `HDH` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CamSau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CamTruoc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CPU` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Ram` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Rom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDCard` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Pin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SoSao` int(11) NOT NULL,
  `SoDanhGia` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `MaLSP`, `TenSP`, `DonGia`, `SoLuong`, `HinhAnh`, `MaKM`, `ManHinh`, `HDH`, `CamSau`, `CamTruoc`, `CPU`, `Ram`, `Rom`, `SDCard`, `Pin`, `SoSao`, `SoDanhGia`, `TrangThai`) VALUES
(1, 8, 'SamSung Galaxy J4+\r\n', 3490000, 10, 'img/products/samsung-galaxy-j4-plus-pink-400x400.jpg\r\n', 5, 'IPS LCD, 6.0\', HD+', 'Android 8.1 (Oreo)', '13 MP', '5 MP', 'Qualcomm Snapdragon 425 4 nhân 64-bit', '2 GB', '16 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '3300 mAh', 0, 0, 1),
(2, 7, 'Oppo F9\r\n', 7690000, 12, 'img/products/oppo-f9-red-600x600.jpg\r\n', 2, 'LTPS LCD, 6.3\', Full HD+', 'ColorOS 5.2 (Android 8.1)', '16 MP và 2 MP (2 camera)', '25 MP', 'MediaTek Helio P60 8 nhân 64-bit', '4 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '3500 mAh, có sạc nhanh', 5, 0, 1),
(3, 10, 'Nokia 5.1 Plus\r\n', 4790000, 5, 'img/products/nokia-51-plus-black-18thangbh-400x400.jpg\r\n', 1, 'IPS LCD, 5.8\', HD+', 'Android One', '13 MP và 5 MP (2 camera)', '8 MP', 'MediaTek Helio P60 8 nhân 64-bit', '3 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '3060 mAh, có sạc nhanh', 0, 0, 1),
(4, 1, 'iPhone X 256GB Silver\r\n', 31990000, 12, 'img/products/iphone-x-256gb-silver-400x400.jpg\r\n', 3, 'OLED, 5.8\', Super Retina', 'IOS 12', '2 camera 12 MP', '7 MP', 'Apple A11 Bionic 6 nhân', '3 GB', '256 GB', 'Không', '3500 mAh, có sạc nhanh', 3, 0, 1),
(5, 8, 'Samsung Galaxy J8\r\n', 6290000, 10, 'img/products/samsung-galaxy-j8-600x600-600x600.jpg\r\n', 2, 'Super AMOLED, 6.0\', HD+', 'Android 8.0 (Oreo)', '16 MP và 5 MP (2 camera)', '16 MP', 'Qualcomm Snapdragon 450 8 nhân 64-bit', '3 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '3500 mAh', 0, 0, 1),
(6, 8, 'Samsung Galaxy A8+ (2018)\r\n', 7690000, 5, 'img/products/samsung-galaxy-a8-plus-2018-gold-600x600.jpg\r\n', 2, 'Super AMOLED, 6\', Full HD+', 'Android 7.1 (Nougat)', '16 MP', '16 MP và 8 MP (2 camera)', 'Exynos 7885 8 nhân 64-bit', '6 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '3500 mAh, có sạc nhanh', 0, 0, 1),
(7, 7, 'Oppo A3s 32GB\r\n', 4690000, 8, 'img/products/oppo-a3s-32gb-600x600.jpg\r\n', 3, 'IPS LCD, 6.2\', HD+', 'Android 8.1 (Oreo)', '13 MP và 2 MP (2 camera)', '8 MP', 'Qualcomm Snapdragon 450 8 nhân 64-bit', '3 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4230 mAh', 0, 0, 1),
(8, 13, 'Xiaomi Mi 8 Lite\r\n', 6690000, 13, 'img/products/xiaomi-mi-8-lite-black-1-600x600.jpg\r\n', 4, 'IPS LCD, 6.26\', Full HD+', 'Android 8.1 (Oreo)', '12 MP và 5 MP (2 camera)', '24 MP', 'Qualcomm Snapdragon 660 8 nhân', '4 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '3300 mAh, có sạc nhanh', 0, 0, 1),
(10, 13, 'Xiaomi Mi 8\r\n', 12990000, 4, 'img/products/xiaomi-mi-8-1-600x600.jpg\r\n', 1, 'IPS LCD, 6.26\', Full HD+', 'Android 8.1 (Oreo)', '12 MP và 5 MP (2 camera)', '24 MP', 'Qualcomm Snapdragon 660 8 nhân', '4 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '3300 mAh, có sạc nhanh', 0, 0, 1),
(11, 1, 'iPhone 7 Plus 32GB\r\n', 17000000, 5, 'img/products/iphone-7-plus-32gb-hh-600x600.jpg\r\n', 4, 'LED-backlit IPS LCD, 5.5\', Retina HD', 'IOS 11', '2 camera 12 MP', '7 MP', 'Apple A10 Fusion 4 nhân 64-bit', '3 GB', '32 GB', 'Không', '2900 mAh', 4, 0, 1),
(12, 12, 'Mobiistar X\r\n', 3490000, 9, 'img/products/mobiistar-x-3-600x600.jpg\r\n', 5, 'IPS LCD, 5.86\', HD+', 'Android 8.1 (Oreo)', '16 MP và 5 MP (2 camera)', '16 MP', 'MediaTek MT6762 8 nhân 64-bit (Helio P22)', '4 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '3000 mAh', 0, 0, 1),
(13, 12, 'Mobiistar E Selfie\r\n', 2490000, 11, 'img/products/mobiistar-e-selfie-300-1copy-600x600.jpg\r\n', 1, 'IPS LCD, 6.0\', HD+', 'Android 7.0 (Nougat)', '13 MP', '13 MP', 'MediaTek MT6739 4 nhân 64-bit', '2 GB', '16 GB', 'MicroSD, hỗ trợ tối đa 128 GB', '3900 mAh', 3, 0, 1),
(14, 12, 'Mobiistar Zumbo S2 Dual\r\n', 2850000, 7, 'img/products/mobiistar-zumbo-s2-dual-300x300.jpg\r\n', 5, 'IPS LCD, 5.5\', Full HD', 'Android 7.0 (Nougat)', '13 MP', '13 MP và 8 MP (2 camera)', 'MT6737T, 4 nhân', '3 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 128 GB', '3000 mAh', 0, 0, 1),
(15, 12, 'Mobiistar B310\r\n', 260000, 3, 'img/products/mobiistar-b310-orange-600x600.jpg\r\n', 5, 'LCD, 1.8\', QQVGA', 'Không', '0.08 MP', 'Không', 'Không', 'Không', 'Không', 'MicroSD, hỗ trợ tối đa 32 GB', '800 mAh', 0, 0, 1),
(16, 13, 'Xiaomi Redmi Note 5\r\n', 5690000, 15, 'img/products/xiaomi-redmi-note-5-pro-600x600.jpg\r\n', 4, 'IPS LCD, 5.99\', Full HD+', 'Android 8.1 (Oreo)', '12 MP và 5 MP (2 camera)', '13 MP', 'Qualcomm Snapdragon 636 8 nhân', '4 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 128 GB', '4000 mAh, có sạc nhanh', 5, 0, 1),
(17, 13, 'Xiaomi Redmi 5 Plus 4GB\r\n', 4790000, 14, 'img/products/xiaomi-redmi-5-plus-600x600.jpg\r\n', 1, 'IPS LCD, 5.99\', Full HD+', 'Android 7.1 (Nougat)', '16 MP và 5 MP (2 camera)', '5 MP', 'Snapdragon 625 8 nhân 64-bit', '4 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4000 mAh', 0, 0, 1),
(18, 10, 'Nokia black future\r\n', 629000, 6, 'https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg\r\n', 2, '4K, Chống nước, Chống trầy', 'IOS + Android song song', 'Bộ tứ camara tàng hình', 'Chuẩn thế giới 50MP', '16 nhân 128 bit', '4 GB', '64 GB', 'Không ', '4000 mAh', 0, 0, 1),
(19, 8, 'Samsung Galaxy A7 (2018)\r\n', 8990000, 10, 'https://cdn.tgdd.vn/Products/Images/42/194327/samsung-galaxy-a7-2018-128gb-black-400x400.jpg\r\n', 4, 'Super AMOLED, 6.0\', Full HD+', 'Android 8.0 (Oreo)', '24 MP, 8 MP và 5 MP (3 camera)', '24 MP', 'Exynos 7885 8 nhân 64-bit', '4 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '3300 mAh, có sạc nhanh', 0, 0, 1),
(20, 6, 'Vivo V9\r\n', 7490000, 10, 'https://cdn.tgdd.vn/Products/Images/42/155047/vivo-v9-2-1-600x600-600x600.jpg\r\n', 3, 'IPS LCD, 6.3\', Full HD+', 'Android 8.1 (Oreo)', '16 MP và 5 MP (2 camera)', '24 MP', 'Snapdragon 626 8 nhân 64-bit', '4 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '3260 mAh', 5, 0, 1),
(21, 6, 'Vivo V11\r\n', 4790000, 6, 'https://cdn.tgdd.vn/Products/Images/42/188828/vivo-v11-600x600.jpg\r\n', 1, 'Super AMOLED, 6.41\', Full HD+', 'Android 8.1 (Oreo)', '12 MP và 5 MP (2 camera)', '25 MP', 'Qualcomm Snapdragon 660 8 nhân', '6 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '3400 mAh, có sạc nhanh', 0, 0, 1),
(22, 6, 'Vivo Y71\r\n', 3290000, 10, 'https://cdn.tgdd.vn/Products/Images/42/158585/vivo-y71-docquyen-600x600.jpg\r\n', 3, 'IPS LCD, 6.0\', HD+', 'Android 8.1 (Oreo)', '13 MP', '5 MP', 'Qualcomm Snapdragon 425 4 nhân 64-bit', '3 GB', '16 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '3360 mAh', 4, 0, 1),
(23, 6, 'Vivo Y85\r\n', 4790000, 5, 'https://cdn.tgdd.vn/Products/Images/42/156205/vivo-y85-red-docquyen-600x600.jpg\r\n', 2, 'IPS LCD, 6.22\', HD+', 'Android 8.1 (Oreo)', '13 MP và 2 MP (2 camera)', '13 MP', 'MediaTek MT6762 8 nhân 64-bit (Helio P22)', '4 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '3260 mAh', 0, 0, 1),
(24, 5, 'Mobell M789\r\n', 550000, 3, 'https://cdn.tgdd.vn/Products/Images/42/92016/mobell-m789-8-300x300.jpg\r\n', 1, 'TFT, 2.4\', 65.536 màu', 'Không', 'Không', 'Không', 'Không', 'Không', 'Không', 'Không', '1200 mAh', 0, 0, 1),
(25, 5, 'Mobell Rock 3\r\n', 590000, 10, 'https://cdn.tgdd.vn/Products/Images/42/112837/mobell-rock-3-2-300x300.jpg\r\n', 3, 'TFT, 2.4\', 65.536 màu', 'Không', 'Không', 'Không', 'Không', 'Không', 'Không', 'Không', '5000 mAh', 0, 0, 1),
(26, 4, 'Itel P32\r\n', 1890000, 11, 'https://cdn.tgdd.vn/Products/Images/42/186851/itel-p32-gold-600x600.jpg\r\n', 1, 'IPS LCD, 5.45\', qHD', 'Android 8.1 (Oreo)', '5 MP và 0.3 MP (2 camera)', '5 MP', 'MT6580 4 nhân 32-bit', '1 GB', '8 GB', 'MicroSD, hỗ trợ tối đa 32 GB', '4000 mAh', 0, 0, 1),
(27, 4, 'Itel A32F\r\n', 1350000, 10, 'https://cdn.tgdd.vn/Products/Images/42/193990/itel-a32f-pink-gold-600x600.jpg\r\n', 5, 'TFT, 5\', FWVGA', 'Android Go Edition', '5 MP', '8 MP', 'MediaTek MT6580 4 nhân 32-bit', '1 GB', '8 GB', 'MicroSD, hỗ trợ tối đa 32 GB', '2050 mAh', 3, 0, 1),
(28, 4, 'Itel it2123\r\n', 160000, 6, 'https://cdn.tgdd.vn/Products/Images/42/146651/itel-it2123-d-300-300x300.jpg\r\n', 1, 'TFT, 1.77\', 65.536 màu', 'Không', 'Không', 'Không', 'Không', 'Không', 'Không', 'Không', '1000 mAh', 0, 0, 1),
(29, 2, 'Coolpad N3D\r\n', 2390000, 8, 'https://cdn.tgdd.vn/Products/Images/42/193504/coolpad-n3d-blue-600x600.jpg\r\n', 5, 'IPS LCD, 5.45\', HD+', 'Android 8.1 (Oreo)', '5 MP', '8 MP và 0.3 MP (2 camera)', 'Spreadtrum SC9850K 4 nhân', '2 GB', '16 GB', 'MicroSD, hỗ trợ tối đa 32 GB', '2500 mAh', 0, 0, 1),
(30, 3, 'HTC U12 life\r\n', 7690000, 7, 'https://cdn.tgdd.vn/Products/Images/42/186397/htc-u12-life-1-600x600.jpg\r\n', 5, 'Super LCD, 6\', Full HD+', 'Android 8.1 (Oreo)', '16 MP và 5 MP (2 camera)', '13 MP', 'Qualcomm Snapdragon 636 8 nhân', '4 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 512 GB', '3600 mAh', 3, 0, 1),
(31, 2, 'Coolpad N3 mini\r\n', 1390000, 3, 'https://cdn.tgdd.vn/Products/Images/42/193503/coolpad-n3-mini-600x600.jpg\r\n', 2, 'IPS LCD, 5\', WVGA', 'Android Go Edition', '5 MP và 0.3 MP (2 camera)', '2 MP', 'MT6580 4 nhân 32-bit', '1 GB', '8 GB', 'MicroSD, hỗ trợ tối đa 32 GB', '2000 mAh', 0, 0, 1),
(32, 2, 'Coolpad N3\r\n', 1890000, 2, 'https://cdn.tgdd.vn/Products/Images/42/193502/coolpad-n3-gray-1-600x600.jpg\r\n', 3, 'IPS LCD, 5.45\', HD+', 'Android Go Edition', '5 MP và 0.3 MP (2 camera)', '2 MP', 'Spreadtrum SC9850K 4 nhân', '1 GB', '16 GB', 'MicroSD, hỗ trợ tối đa 32 GB', '2300 mAh', 0, 0, 1),
(33, 11, 'Motorola Moto C 4G\r\n', 31990000, 9, 'https://cdn.tgdd.vn/Products/Images/42/109099/motorola-moto-c-4g-300-300x300.jpg\r\n', 2, 'TFT, 5\', FWVGA', 'Android 7.1 (Nougat)', '5 MP', '2 MP', 'MT6737 4 nhân', '1 GB', '16 GB', 'MicroSD, hỗ trợ tối đa 32 GB', '2350 mAh', 0, 0, 1),
(34, 1, 'iPhone Xr 128GB\r\n', 24990000, 10, 'https://cdn.tgdd.vn/Products/Images/42/191483/iphone-xr-128gb-red-600x600.jpg\r\n', 4, 'IPS LCD, 6.1\', IPS LCD, 16 triệu màu', 'IOS 12', '12 MP', '7 MP', 'Apple A12 Bionic 6 nhân', '3 GB', '128 GB', 'Không', '2942 mAh, có sạc nhanh', 4, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `MaTT` int(11) NOT NULL,
  `MaLTT` int(11) NOT NULL,
  `TenTT` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `TinHot` int(11) NOT NULL,
  `Ngay` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`MaTT`, `MaLTT`, `TenTT`, `MoTa`, `NoiDung`, `HinhAnh`, `TinHot`, `Ngay`) VALUES
(1, 1, 'Lộ diện hàng loạt đại lý phân phối chính thức của Ecopark', 'Tập đoàn Ecopark vừa chính thức công bố hợp tác với 11 đại lý phân phối chính thức các sản phẩm của công ty tới khách hàng trong năm 2020bao gồm: Novahomes, Bighomes, Vietstarland, Newstarland, Titan, Tân Thời đại, Queen Land, Malta, Ecoland, Ubland, Phúc Lộc.', '<p>Chia sẻ về sự hợp tác này, đại diện Tập đoàn Ecopark nhấn mạnh, đây đều là những nhà phân phối được Tập đoàn Ecopark cân nhắc kỹ lưỡng và lựa chọn bởi sự uy tín, bề dày kinh nghiệm hoạt động trên thị trường bất động sản, cũng như tâm huyết đối với các sản phẩm của Ecopark.</p>\r\n\r\n<p>Ecopark kỳ vọng, thông qua sự hợp tác này, các đại lý chính thức sẽ là đại sứ hình ảnh của thành phố xanh Ecopark, lan tỏa những thông điệp về cuộc sống bền vững, lý tưởng gắn với thiên nhiên, tới khách hàng và cộng đồng.</p>\r\n\r\n<p>Theo định hướng chiến lược của Tập đoàn Ecopark, 2020 sẽ là năm bản lề, đánh dấu sự phát triển bứt phá trên nhiều lĩnh vực như bất động sản, giáo dục, y tế, công nghệ cao, du lịch, vui chơi giải trí.</p>', 'img/news/ecopark-20-1.jpg', 1, '2020-02-20 23:13:09'),
(2, 3, 'Mỹ hoãn Hội nghị Thượng đỉnh với ASEAN tại Las Vegas vì dịch COVID-19', 'Ngày 28/2 (sáng 29/2 theo giờ Việt Nam), giới chức Mỹ thông báo Chính quyền Tổng thống Donald Trump đã quyết định hoãn tổ chức Hội nghị Thượng đỉnh Mỹ-ASEAN tại Las Vegas vì lo ngại sự bùng phát của dịch bệnh COVID-19.', '<p> Phương tiện truyền thông Mỹ dẫn lời hai quan chức cấp cao chính quyền cho biết Washington đã quyết định hoãn Hội nghị Thượng đỉnh đặc biệt giữa nước này và Hiệp hội các quốc gia Đông Nam Á (ASEAN), trong bối cảnh dịch viêm đường hô hấp cấp do chủng mới của virus Corona (SARS-CoV-2) gây ra (COVID-19) đang bùng phát và diễn biến phức tạp.</p>\r\n\r\n<p> Theo kế hoạch ban đầu, Hội nghị Thượng đỉnh Mỹ-ASEAN 2020 sẽ diễn ra tại thành phố Las Vegas (tiểu bang Nevada) vào ngày 14/3 tới. Tổng thống Trump cũng có kế hoạch gặp gỡ các nhà lãnh đạo của các nước ASEAN nhân dịp này.</p>', 'img/news/thegioi1.jpg', 0, '2020-02-28 15:14:11'),
(3, 4, 'Công Phượng đang thăng hoa, Chủ tịch Hữu Thắng báo thêm tin vui lớn từ bầu Đức cho TP.HCM', 'Vào thời điểm đang chơi thăng hoa tại TP.HCM, Công Phượng được kỳ vọng có thể cùng đội bóng này giành danh hiệu khi tham dự tới 4 đấu trường trong mùa giải 2020.', '<p>Trên thực tế, TP.HCM đạt được thỏa thuận với Sint Truidense về việc mua lại nửa năm hợp đồng của Công Phượng, đồng nghĩa với việc chỉ mới chắc chắn có được sự phục vụ của chân sút này trong giai đoạn 1 của V.League 2020.</p>\r\n\r\n<p>Thời gian qua, câu hỏi về việc liệu sau nửa mùa giải, Công Phượng sẽ tiếp tục chơi cho TP.HCM hay quay trở lại HAGL nhận được nhiều sự chú ý của dư luận. Đặc biệt trong hoàn cảnh Công Phượng đang cho thấy sự hòa nhập rất tốt và liên tục tỏa sáng trong màu áo TP.HCM ở những trận đấu vừa qua.</p>', 'img/news/thethao1.jpg', 1, '2020-02-29 15:14:11'),
(4, 2, 'Hà Nội đang ở thời điểm cao nhất về nguy cơ có người lây nhiễm Covid-19', 'Nêu tại cuộc họp chiều 28/2, Chủ tịch UBND TP. Hà Nội Nguyễn Đức Chung cho biết, thành phố đang vào thời điểm cao nhất của việc lây nhiễm dịch Covid-19.', '<p>Phát biểu tại cuộc học trực tuyến chiều 28/2, về công tác phòng chống dịch Covid-19 trên địa bàn thành phố, ông Nguyễn Đức Chung - Chủ tịch UBND TP Hà Nội cho biết, qua báo cáo tập hợp của Sở Y tế và thông tin của Ban chỉ đạo Trung Ương, có thể thấy dịch bệnh Covid-19 diễn biến trên thế giới đang phức tạp và hết sức khó lường. Hiện nay dịch Covid-19 đã lan ra 55 vùng lãnh thổ ngoài Trung Quốc. </p>\r\n\r\n<p>Có thể nói trên địa bàn TP Hà Nội trong hơn 1 tháng vừa qua với sự nỗ lực của các tầng lớp nhân dân, hệ thống chính trị vào cuộc, đã thực hiện nghiêm túc sự chỉ đạo của Ban Bí thư, Chính phủ, Thủ tướng Chính phủ..., hướng dẫn của các Bộ ngành.</p>', 'img/news/xahoi1.jpg', 0, '2020-02-29 15:24:05'),
(5, 5, '“Đàn ông Thiên Bình” Hyun Bin: Mỹ nam trong mơ của hàng vạn cô gái', 'Diễn xuất tốt, hát hay, nhân cách tốt, giàu có... Hyun Bin được xem là tổ hợp của những điều “cần và đủ” ở một người đàn ông hoàn hảo.\r\n', '<p>Hyun Bin không phải là ngôi sao vừa bước chân vào showbiz đã nổi tiếng. Nhưng không thể phủ nhận, Hyun Bin được trải thảm đỏ khi dấn chân vào làng giải trí.</p>\r\n\r\n<p>Hyun Bin (tên thật là Kim Tae Pyung) sinh năm 1982 trong một gia đình giàu có ở Seoul. Là con trai út trong gia đình có 2 anh em trai, từ nhỏ Hyun Bin đã nhận được sự yêu thương của cả gia đình cũng như một nền giáo dục đầy đủ. Nhiều năm tháng đầu đời, Hyun Bin không nghĩ tới chuyện bước chân vào showbiz. Gia đình anh cũng chưa từng nghĩ để cho cậu con trai \"vàng bạc\" của mình phải lăn lộn trong chốn showbiz đầy cạm bẫy.</p>', 'https://sohanews.mediacdn.vn/thumb_w/640/2020/photo1582943912443-1582943912734-crop-15829439425821446637023.jpg', 1, '2020-02-29 15:24:05'),
(6, 4, 'Lee Nguyễn nói lời phũ phàng trên báo Mỹ, Chủ tịch CLB TP.HCM lên tiếng \"nói rõ trắng đen\"', 'Thương vụ TP.HCM và Lee Nguyễn tưởng như đã khép lại tuy nhiên những ồn ào lại bất ngờ xuất hiện khi tiền vệ Việt kiều có bài trả lời phỏng vấn trên báo Mỹ.', '<p>Theo đó, trong bài trả lời phỏng vấn được tờ Sun Sentinel thuộc bang Florida (Mỹ) đăng tải vào ngày 26/2, Lee Nguyễn khẳng định cá nhân anh chưa từng liên hệ với TP.HCM, đồng thời thông tin thêm rằng không biết người đại diện của mình đã nói chuyện với đội bóng của Việt Nam hay chưa.</p>\r\n\r\n<p>Những phát biểu của Lee Nguyễn ngay lập tức làm dấy lên nghi vấn về việc liệu có phải TP.HCM không hề nghiêm túc trong thương vụ này và chỉ tạo ra luồng dư luận để đánh bóng, PR thương hiệu hay không?\r\nTuy nhiên sau những gì đã diễn ra, đặc biệt là phát biểu của tiền vệ Việt kiều với truyền thông Mỹ, Chủ tịch Hữu Thắng đã thẳng thắng bày tỏ quan điểm TP.HCM không nhất thiết phải có bằng được Lee Nguyễn.</p>', 'img/news/thethao2.png', 0, '2020-02-28 15:29:43'),
(7, 1, 'Giá vàng đảo chiều tăng 200 - 700 nghìn đồng/lượng so với đầu giờ sáng', 'So với cuối ngày hôm qua, giá vàng hiện vẫn thấp hơn gần 1 triệu đồng/lượng. Chỉ trong 5 ngày, giá vàng giảm hơn 4 triệu đồng/lượng.', '<p>Giá vàng thế giới vừa trải qua phiên giảm mạnh nhất 7 năm, kéo theo vàng trong nước sụt mạnh trong ngày hôm nay 29/2.</p>\r\n\r\n<p>Lúc 8h30 sáng, giá vàng SJC tại hệ thống cửa hàng của Tập đoàn DOJI mua vào tại 44,6 triệu đồng/lượng và bán ra ở 45,1 triệu đồng/lượng, giảm 1,05 triệu đồng chiều mua vào và 1,3 triệu đồng/lượng ở chiều bán ra so với cuối ngày hôm qua.</p>\r\n\r\n<p>Tại hệ thống của công ty VBĐQ Sài Gòn (SJC), giá vàng SJC hiện là 44,6 - 45,6 triệu đồng/lượng (mua vào - bán ra), giảm 1,28 triệu đồng ở chiều mua vào và 1 triệu đồng chiều bán ra so với cuối ngày hôm qua.</p>\r\n\r\n<p>Các doanh nghiệp khác chưa cập nhật giá vàng sáng hôm nay, tuy nhiên dự kiến mức điều chỉnh giảm cũng sẽ không dưới 1 triệu đồng/lượng.</p>\r\n\r\nGiá vàng trong nước từng lập kỷ lục hôm 24/2 khi vượt xa 49 triệu đồng/lượng, tuy nhiên sau khi lên đỉnh cao, giá đã điều chỉnh giảm ngay ngày hôm sau và chỉ trong vòng 5 ngày đã mất hơn 4 triệu đồng/lượng.\r\n\r\nLúc 10h40: Sau khi giảm mạnh đầu giờ sáng, các \"nhà vàng\" bắt đầu nhìn nhau điều chỉnh giá. Một số doanh nghiệp hạ giá sâu đã điều chỉnh tăng trở lại.\r\n\r\nTại thời điểm 10h45, giá vàng SJC tại Tập đoàn DOJI giao dịch ở 44,6 - 45,8 triệu đồng/lượng (mua vào - bán ra), giữ nguyên giá mua vào nhưng tăng 700 nghìn đồng/lượng chiều bán ra.', 'https://sohanews.mediacdn.vn/thumb_w/640/2020/photo1582951820433-1582951820825-crop-1582951848291914860612.jpg', 0, '2020-02-29 15:29:43'),
(8, 5, 'Tóc Tiên: Cô sinh viên y khoa tóc xù và đám cưới \"khác người\" ở showbiz Việt', 'Đám cưới Tóc Tiên - Hoàng Touliver tổ chức bí mật ở Đà Lạt nhưng được rất nhiều người quan tâm yêu thích.', '<p>Sau 4 năm chính thức hẹn hò, ngày 20/2, đám cưới Tóc Tiên và Hoàng Touliver đã nhận được nhiều sự quan tâm của người hâm mộ và cả truyền thông. Hôn lễ được tổ chức khá kín đáo và có rất ít hình ảnh của cặp đôi bị rò rỉ ra ngoài.</p>\r\n\r\n<p>Khách mời dự hôn lễ chỉ có những người đặc biệt thân thiết với Tóc Tiên và Hoàng Touliver, ngoài ra các thông tin đều giữ kín nhất có thể.</p>\r\n<p>Nói về đám cưới có phần đặc biệt, Tóc Tiên sau đó chia sẻ: \"Thương gửi những ai quan tâm. Thật sự giờ đây Tiên không biết phải viết gì nói gì cho hợp hoàn cảnh này. Tiên chỉ xin phép được gửi lời cảm ơn chân thành nhất đến tất cả những lời chúc mừng của mọi người gần xa, trực tiếp có, gián tiếp ý nhị cũng có. Cảm ơn vì đã tôn trọng Tiên và người thân gia đình\".</p>', 'https://sohanews.mediacdn.vn/thumb_w/640/2020/2/28/photo-3-15828592784977773660-crop-15828594550311506215473.png', 0, '2020-02-29 15:37:31'),
(9, 3, 'Mỹ cân nhắc hỗ trợ chiến dịch của Thổ Nhĩ Kỳ tại Syria', 'Trong thông báo, Ngoại trưởng Mỹ Mike Pompeo nói: \"Mỹ đang tham vấn với đồng minh Thổ Nhĩ Kỳ và cân nhắc các lựa chọn hỗ trợ Ankara trước sự gây hấn tại Syria.\"', '<p>Ngày 28/2, Ngoại trưởng Mỹ Mike Pompeo cho biết nước này đang cân nhắc các lựa chọn để hỗ trợ Thổ Nhĩ Kỳ sau vụ tấn công của các lực lượng chính phủ Syria làm 33 binh sỹ Thổ Nhĩ Kỳ thiệt mạng tại tỉnh Idlib.</p>\r\n\r\n<p>Trong thông báo, Ngoại trưởng Mỹ Mike Pompeo nói: \"Mỹ đang tham vấn với đồng minh Thổ Nhĩ Kỳ và cân nhắc các lựa chọn hỗ trợ Ankara trước sự gây hấn tại Syria.\"</p>\r\n\r\n<p>Cùng ngày, một quan chức cấp cao của Bộ Ngoại giao Mỹ cho biết nước này có thể hỗ trợ Thổ Nhĩ Kỳ bằng cách chia sẻ thông tin và trang thiết bị.</p>', 'https://sohanews.mediacdn.vn/thumb_w/640/2020/photo1582936956626-1582936957250-crop-1582936965610887296012.jpg', 0, '2020-02-29 15:37:31'),
(10, 2, 'Gãy dầm cầu công trình 169 tỉ đồng, các đơn vị liên quan khẳng định do… con lăn', 'Chủ đầu tư, đơn vị giám sát, nhà thầu thi công phủ nhận trách nhiệm và khẳng định do… con lăn khiến dầm cầu nặng 76 tấn bị gãy, sập khi đang thi công.', '<p>Gãy, sập dầm cầu khi đang thi công\r\n\r\nDự án xây dựng cầu An Phú vượt sông Phú Thọ (TP Quảng Ngãi, tỉnh Quảng Ngãi) được phê duyệt năm 2017 và khởi công xây dựng vào năm 2018 với kinh phí 169 tỉ đồng. Dự án dự kiến hoàn thiện vào quý 2/2021 và đưa vào khai thác. Công trình có chiều dài 368 m, rộng 10 m.</p>\r\n\r\n<p>Dự án do Ban Quản lý dự án đầu tư xây dựng và phát triển quỹ đất thành phố Quảng Ngãi làm chủ đầu tư, Công ty CP Tư vấn xây dựng 533 là đơn vị thiết kế, Công ty CP Tư vấn xây dựng và đầu tư Quảng Ngãi là đơn vị tư vấn giám sát thi công xây dựng.</p>\r\n\r\n<p>Nhà thầu thi công xây dựng công trình dự án cầu An Phú là liên danh Công ty TNHH xây dựng Đồng Khánh-Công ty CP Đầu tư phát triển hạ tầng Lũng Lô 251.\r\n\"Ngay khi có sự cố xảy ra, chúng tôi đã cho tạm dừng thi công công trình theo chỉ đạo từ UBND TP Quảng Ngãi. Hiện, việc khắc phục, sữa chữa và điều tra nguyên nhân vụ việc đang được tiến hành\", ông Huỳnh Đức Duy, Phó giám đốc Ban quản lý dự án đầu tư xây dựng vầ phát triển quỹ đất TP Quảng Ngãi, cho hay.</p>', 'img/news/xahoi2.png', 0, '2020-02-20 23:13:09'),
(11, 5, 'Bí kíp giảm cân ngoạn mục của mỹ nhân Vbiz: Nhã Phương dậy từ 6 giờ sáng, H\'Hen Niê và Kỳ Duyên ép cân ra sao?', 'Giảm cân để giữ thân hình thon gọn, săn chắc luôn là câu chuyện muôn thuở và cũng vô cùng áp lực đối với các mỹ nhân Vbiz.', '<p>Là người của công chúng, các mỹ nhân Vbiz luôn muốn hình ảnh của mình phải luôn chỉn chu và việc xuất hiện thật xinh đẹp, hoàn hảo là tiêu chí hàng đầu của nhiều người.</p>\r\n\r\n<p>Bởi lẽ đó, tăng cân dường như đã trở thành nỗi ám ảnh khiến họ phải đặt nỗ lực cực cao để có thể giữ gìn vóc dáng cũng như giảm hàng chục cân để có được hình ảnh đẹp nhất trong mắt khán giả.</p>\r\n\r\n<p>Nhã Phương là một trong những mỹ nhân ám ảnh cân nặng nhất nhì Vbiz khi liên tục bị nhắc nhở thân hình quá gầy nhưng vẫn miệt mài tập luyện để giữ body luôn thon gọn. Theo đó từ khi sinh con đến nay, nữ diễn viên \"Tuổi thanh xuân\" thường xuyên lộ thân hình gầy guộc, tay chân khẳng khiu.</p>\r\n\r\n<p>Nhờ sự chăm sóc dinh dưỡng tích cực từ xã Trường Giang, Nhã Phương cho biết cô đã tăng 2kg sau Tết Nguyên Đán 2020 nhưng với nữ diễn viên, số cân hiện tại đã quá đủ nên cô vẫn quyết tâm tập luyện, giữ gìn chế độ ăn uống chặt chẽ để ép dáng.\r\n\r\nNói về chuyện ám ảnh cân nặng của vợ, Trường Giang từng tiết lộ Nhã Phương luôn dậy từ 6 giờ sáng mỗi ngày tập 3 bộ môn thể dục phối hợp.</p>', 'https://sohanews.mediacdn.vn/2020/2/27/photo-1-15827791338982101800191.jpg', 0, '2020-02-29 15:29:43');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `MaND` int(11) NOT NULL,
  `Ho` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Ten` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TaiKhoan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MaQuyen` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`MaND`, `Ho`, `Ten`, `GioiTinh`, `SDT`, `Email`, `DiaChi`, `TaiKhoan`, `MatKhau`, `MaQuyen`, `TrangThai`) VALUES
(1, 'Phùng', 'Lan', 'Nữ', '0123456', 'lancadillac@gmail.com', 'Nam Định', 'Lanpt', 'Lanpt', 1, 1),
(6, 'Nguyen', 'A', 'Nữ', '012345678', 'a@gmail.com', 'Hà Nội', 'Abc', 'Abc', 1, 1),
(7, 'Duong', 'Hao', 'Nu', '0362000606', 'hao@gmail.com', 'Nguyên Xá, Bắc Từ Liêm, Hà Nội', 'HaoDuong', 'HaoDuong', 2, 1),
(8, 'Duong', 'Hao', 'Nu', '0362000606', 'hao@gmail.com', 'Nguyên Xá, Bắc Từ Liêm, Hà Nội', 'HaoDuong', 'HaoDuong', 2, 1),
(9, 'Duong', 'Hao', 'Nu', '0362000606', 'hao@gmail.com', 'Nguyên Xá, Bắc Từ Liêm, Hà Nội', 'HaoDuong', 'HaoDuong', 2, 1),
(10, 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaCTHD`),
  ADD KEY `MaHD` (`MaHD`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `MaND` (`MaND`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKM`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLSP`);

--
-- Indexes for table `loaitintuc`
--
ALTER TABLE `loaitintuc`
  ADD PRIMARY KEY (`MaLTT`);

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`MaQuyen`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaLSP` (`MaLSP`),
  ADD KEY `MaKM` (`MaKM`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`MaTT`),
  ADD KEY `MaLTT` (`MaLTT`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`MaND`),
  ADD KEY `MaQuyen` (`MaQuyen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `MaCTHD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MaKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `loaitintuc`
--
ALTER TABLE `loaitintuc`
  MODIFY `MaLTT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `MaQuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `MaTT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `MaND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaND`) REFERENCES `user` (`MaND`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaLSP`) REFERENCES `loaisanpham` (`MaLSP`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaKM`) REFERENCES `khuyenmai` (`MaKM`);

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`MaLTT`) REFERENCES `loaitintuc` (`MaLTT`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`MaQuyen`) REFERENCES `phanquyen` (`MaQuyen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
