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
-- Table structure for table `tac_gia`
--

DROP TABLE IF EXISTS `tac_gia`;
CREATE TABLE IF NOT EXISTS `tac_gia` (
  `MTG` int(11) NOT NULL AUTO_INCREMENT,
  `Ten_tac_gia` varchar(100) COLLATE utf8_bin NOT NULL,
  `Dia_chi` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `Dien_thoai` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`MTG`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AVG_ROW_LENGTH=862 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `tac_gia`
--

INSERT INTO `tac_gia` (`MTG`, `Ten_tac_gia`, `Dia_chi`, `Dien_thoai`) VALUES
(1, 'TS.Nguyễn Phương Liên', '45 Lê lợi', '457547858'),
(2, 'BS Vũ Thị Uyên Thanh', '18 Tô Hiến Thành', '363464677'),
(3, 'Nguyễn NGọc Minh', '27 Nguyễn Huệ', '585656888'),
(4, 'Nguyễn Thiên Bằng', '34 Trần Hưng Đạo', '346346677'),
(5, 'Triệu Thị Chơi', 'Phan Dinh Phung, Hai Duong', '0987879767876'),
(6, 'Mai Phương', 'Hưng Yên', '09876'),
(7, 'Nguyễn Trúc Linh', '18 Tô Hiến Thành', '585656888'),
(8, 'Nguyễn Thị Diệu Thảo', NULL, NULL),
(9, 'Hồng Châu', NULL, NULL),
(10, 'Hoàng Hương', NULL, NULL),
(11, 'Kim Hương - Huyền Trâm', NULL, NULL),
(12, 'Nhật Quang', NULL, NULL),
(13, 'Thiên Minh', NULL, NULL),
(14, 'Chánh Tín', NULL, NULL),
(15, 'Tỳ khưu Dũng Chí', NULL, NULL),
(16, 'Nhiều tác giả', NULL, NULL),
(17, 'LUẬT GIA: ĐINH QUỐC KHÁNH', NULL, NULL),
(18, 'TS Huỳnh  Viết Tuấn', NULL, NULL),
(19, 'Dương Hải Liên', NULL, NULL),
(20, 'Hoàng Anh Tú', NULL, NULL),
(21, 'Tác giả: Tư Tĩnh, Dịch giả: Thiều Hoa ', NULL, NULL),
(22, 'Tác giả: Cầm Sắt Tỳ Bà, Dịch giả: Thu Trần', NULL, NULL),
(23, 'Tác giả: Phỉ Ngã Tư Tồn, Dịch giả: Huyền Trang', NULL, NULL),
(24, 'Tác giả: Tuyết Ảnh Sương Hồn, Dịch giả: Trang Nguyễn', NULL, NULL),
(25, 'Tác giả: Lữ Huy Nguyên (Sưu tầm và tuyển chọn) ', NULL, NULL),
(26, 'Võ thị Xuân Hà ', NULL, NULL),
(27, 'Jean De Lafontaine ', NULL, NULL),
(28, 'Thanh Điểu, Dịch giả: Tử Đằng', NULL, NULL),
(29, 'Bram Stoker ', NULL, NULL),
(30, 'Việt Văn Books', NULL, NULL),
(31, 'Nguyễn Trường Sinh', NULL, NULL),
(32, 'Phạm Hữu Khang', NULL, NULL),
(33, 'Phạm Hoàng Dũng ', NULL, NULL),
(34, 'Lưu Triều Nguyên ', NULL, NULL),
(35, 'Vũ Đình Cường(chủ biên), Phương Lan(Hiệu đính) ', NULL, NULL);
