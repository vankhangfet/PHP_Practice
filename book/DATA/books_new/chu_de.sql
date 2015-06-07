-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 15, 2011 at 02:14 PM
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
-- Table structure for table `chu_de`
--

DROP TABLE IF EXISTS `chu_de`;
CREATE TABLE IF NOT EXISTS `chu_de` (
  `MCD` int(11) NOT NULL AUTO_INCREMENT,
  `Ten_chu_de` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`MCD`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- Dumping data for table `chu_de`
--

INSERT INTO `chu_de` (`MCD`, `Ten_chu_de`) VALUES
(1, 'Văn học Nghệ thuật'),
(2, 'Ngoại ngữ'),
(3, 'Công nghệ thông tin'),
(4, 'Pháp luật'),
(5, 'Sách nấu ăn'),
(6, 'Phật học'),
(7, 'Y học'),
(8, 'Kinh tế'),
(9, 'Khoa học Kỹ Thuật'),
(10, 'Sức khỏe');
