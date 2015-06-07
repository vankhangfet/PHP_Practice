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
-- Table structure for table `nha_xuat_ban`
--

DROP TABLE IF EXISTS `nha_xuat_ban`;
CREATE TABLE IF NOT EXISTS `nha_xuat_ban` (
  `MNXB` int(11) NOT NULL AUTO_INCREMENT,
  `Ten_nha_xuat_ban` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'Không tên',
  `Dia_chi` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `Dien_thoai` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `Website` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`MNXB`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=15 ;

--
-- Dumping data for table `nha_xuat_ban`
--

INSERT INTO `nha_xuat_ban` (`MNXB`, `Ten_nha_xuat_ban`, `Dia_chi`, `Dien_thoai`, `Website`) VALUES
(1, 'Nhà Xuất Bản Trẻ', '123 Nguyễn Du', '19001560', NULL),
(2, 'NXB Thống Kê', '456 Cống Quỳnh', '19456566', NULL),
(3, 'NXB Kim Đồng', '789 Nguyễn Trãi', '45656566', NULL),
(4, 'NXB Văn Học', '357 Cộng hoà', '56786588', NULL),
(5, 'NXB TP.HCM', NULL, NULL, NULL),
(6, 'Mỹ Thuật', NULL, NULL, NULL),
(7, 'NXB Thanh Niên', NULL, NULL, NULL),
(8, 'NXB Phụ Nữ', NULL, NULL, NULL),
(9, 'NXB Đà Nẵng', NULL, NULL, NULL),
(10, 'NXB Tôn Giáo', NULL, NULL, NULL),
(11, 'Tạp chíVăn Hóa Phật Giáo', NULL, NULL, NULL),
(12, 'Chính Trị Quốc Gia', NULL, NULL, NULL),
(13, 'Lao Động Xã Hội', NULL, NULL, NULL),
(14, 'NXB Y Học', NULL, NULL, NULL);
