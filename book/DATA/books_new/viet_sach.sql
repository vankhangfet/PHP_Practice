-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 15, 2011 at 02:16 PM
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
-- Table structure for table `viet_sach`
--

DROP TABLE IF EXISTS `viet_sach`;
CREATE TABLE IF NOT EXISTS `viet_sach` (
  `STT` int(11) NOT NULL AUTO_INCREMENT,
  `Ms` int(11) DEFAULT NULL,
  `MTG` int(11) DEFAULT NULL,
  `Ghi_chu` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`STT`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=75 ;

--
-- Dumping data for table `viet_sach`
--

INSERT INTO `viet_sach` (`STT`, `Ms`, `MTG`, `Ghi_chu`) VALUES
(1, 1, 31, NULL),
(2, 1, 32, '(Đồng tác giả)'),
(3, 1, 33, '(Đồng tác giả)'),
(4, 2, 34, '(Tác giả)'),
(5, 2, 32, '(Đồng tác giả)'),
(6, 3, 28, NULL),
(7, 4, 28, NULL),
(8, 5, 28, NULL),
(9, 6, 5, NULL),
(10, 7, 6, NULL),
(11, 8, 7, NULL),
(12, 9, 5, NULL),
(13, 9, 7, NULL),
(14, 10, 28, NULL),
(15, 11, 8, NULL),
(16, 12, 9, NULL),
(17, 13, 9, NULL),
(18, 14, 10, NULL),
(19, 15, 11, NULL),
(20, 16, 28, NULL),
(21, 17, 13, NULL),
(22, 18, 15, '(Biên soạn)'),
(23, 19, 16, NULL),
(24, 20, 14, '(Biên dịch)'),
(25, 20, 30, '(Tác giả)'),
(26, 21, 17, '(Biên soạn)'),
(27, 22, 17, NULL),
(28, 23, 17, NULL),
(29, 24, 18, NULL),
(30, 25, 29, '(Biên Tập)'),
(31, 25, 19, '(Biên Tập)'),
(32, 26, 28, NULL),
(33, 27, 28, NULL),
(34, 28, 20, '(Tác giả)'),
(35, 29, 21, '(Chủ biên)'),
(36, 30, 22, '(Biên soạn)'),
(37, 30, 27, '(Biên soạn)'),
(38, 31, 26, '(Sưu tầm và tuyển chọn)'),
(39, 31, 23, '(Hiệu đính)'),
(40, 32, 24, '(Tác giả)'),
(41, 33, 25, NULL),
(42, 34, 25, NULL),
(43, 35, 25, NULL),
(44, 36, 25, NULL),
(45, 37, 32, '(Đồng tác giả)'),
(46, 37, 33, '(Đồng tác giả)'),
(47, 37, 35, '(Chủ biên)'),
(48, 37, 36, '(Đồng tác giả)'),
(49, 38, 36, 'Đồng tác giả)'),
(50, 38, 32, 'Đồng tác giả)'),
(51, 38, 33, 'Đồng tác giả)'),
(52, 38, 35, '(Chủ biên)'),
(53, 43, 23, NULL),
(54, 43, 2, NULL),
(55, 43, 25, NULL),
(56, 44, 20, NULL),
(57, 45, 21, NULL),
(59, 46, 22, NULL),
(60, 47, 23, NULL),
(61, 48, 16, NULL),
(62, 49, 24, NULL),
(63, 50, 25, NULL),
(64, 51, 25, NULL),
(65, 52, 26, NULL),
(66, 53, 27, NULL),
(67, 54, 27, NULL),
(68, 55, 29, NULL),
(69, 56, 28, NULL),
(70, 57, 30, NULL),
(71, 58, 31, NULL),
(72, 59, 32, NULL),
(73, 60, 32, NULL),
(74, 61, 31, NULL);
