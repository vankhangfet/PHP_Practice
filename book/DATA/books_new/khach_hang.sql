-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 15, 2011 at 02:15 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

DROP TABLE IF EXISTS `khach_hang`;
CREATE TABLE IF NOT EXISTS `khach_hang` (
  `MKH` int(11) NOT NULL AUTO_INCREMENT,
  `Ho_Khach_hang` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Ten_khach_hang` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Dia_chi` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Dien_thoai` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `Ten_dang_nhap` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `Mat_khau` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `Ngay_sinh` datetime DEFAULT NULL,
  `Gioi_tinh` tinyint(1) DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Da_duyet` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`MKH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=25 ;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`MKH`, `Ho_Khach_hang`, `Ten_khach_hang`, `Dia_chi`, `Dien_thoai`, `Ten_dang_nhap`, `Mat_khau`, `Ngay_sinh`, `Gioi_tinh`, `Email`, `Da_duyet`) VALUES
(3, 'Lê Thu Bạch', 'Yến', 'Tp. HCM', '0933568689', 'kh', '123', '0000-00-00 00:00:00', 0, NULL, 0),
(4, 'Trần Anh', 'Tuấn', 'Hà Nội', '0983568648', 'kh', '123', '0000-00-00 00:00:00', 1, NULL, 0),
(5, 'Hoàng Thanh', 'Mai', 'Hải Phòng', '0971138688', 'kh', '123', '0000-00-00 00:00:00', 0, NULL, 0),
(6, 'Trần Thị Thu', 'Thủy', 'Tp. HCM', '0912568685', 'kh', '123', '0000-00-00 00:00:00', 0, NULL, 0),
(7, 'Đỗ Văn', 'Lâm', 'Bình Định', '0953568688', 'kh', '123', '0000-00-00 00:00:00', 1, NULL, 0),
(8, 'Trần Xuân', 'Dũng', 'Hà Nội', '0923568688', 'kh', '123', '0000-00-00 00:00:00', 1, NULL, 0),
(9, 'Lê Ngọc', 'Hân', 'Hải Phòng', '0953762642', 'kh', '123', '0000-00-00 00:00:00', 0, NULL, 0),
(10, 'Hà Quang', 'Dòng', 'Tp. HCM', '0923568678', 'kh', '123', '0000-00-00 00:00:00', 1, NULL, 0),
(11, 'Lê Quang', 'Lưu', 'Hà Nội', '0913578489', 'kh', '123', '0000-00-00 00:00:00', 1, NULL, 0),
(12, 'Vũ Hồng', 'Quang', 'Hà Nội', '0913445457', 'kh', '123', '0000-00-00 00:00:00', 1, NULL, 0),
(13, 'Hà Tuấn', 'Anh', 'Hải Phòng', '0955345411', 'kh', '123', '0000-00-00 00:00:00', 1, NULL, 0),
(14, 'Nguyễn Thị', 'Phương', 'Hà Nội', '0925854536', 'kh', '123', '0000-00-00 00:00:00', 0, NULL, 0),
(15, 'HOANG PHI', 'HONG', 'Hà Tây', '0953463466', 'kh', '123', '0000-00-00 00:00:00', 1, 'hong@yahoo.com', 0),
(16, 'Tạ Đình', 'Phong', 'Hưng Yên', NULL, 'kh', '123', '0000-00-00 00:00:00', 0, NULL, 0),
(17, 'Lê Duy', 'Thức', 'Hà Tây', '0978435677', 'kh', '123', '0000-00-00 00:00:00', 0, NULL, 0),
(18, 'Lê Huy', 'Hoàng', 'Hà Nội', NULL, 'kh', '123', '0000-00-00 00:00:00', 0, NULL, 0),
(19, 'Nguyễn Thị', 'Mỹ', 'Hưng Yên', NULL, 'kh', '123', '0000-00-00 00:00:00', 0, NULL, 0),
(20, 'Hồ Vĩnh', 'Xuân', 'Tp. HCM', '0913256624', 'kh', '123', '0000-00-00 00:00:00', 0, NULL, 0),
(21, 'Nguyễn Văn', 'Thắng', 'Bắc Ninh', NULL, 'kh', '123', '0000-00-00 00:00:00', 0, NULL, 0),
(22, 'Phạm Trung', 'Lập', 'Bắc Ninh', '0904356742', 'kh', '123', '0000-00-00 00:00:00', 0, NULL, 0),
(23, 'Đinh Huyền', 'Hương', 'Tp. HCM', NULL, 'kh', '123', '0000-00-00 00:00:00', 0, NULL, 0),
(24, 'Nguyễn Thị', 'Hải', 'Hà Nội', '567567', 'admin', 'admin', '0000-00-00 00:00:00', 0, NULL, 0);
