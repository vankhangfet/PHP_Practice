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
-- Table structure for table `don_dat_hang`
--

DROP TABLE IF EXISTS `don_dat_hang`;
CREATE TABLE IF NOT EXISTS `don_dat_hang` (
  `SDH` int(11) NOT NULL AUTO_INCREMENT,
  `MKH` int(11) DEFAULT NULL,
  `Ngay_dat_hang` datetime DEFAULT NULL,
  `Tri_gia` double DEFAULT NULL,
  `Ho_ten_nguoi_nhan` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Dia_chi_giao` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Email_nguoi_nhan` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Dien_thoai` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `Thong_tin_khac` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `Ngay_giao_hang` datetime DEFAULT NULL,
  `Da_giao_hang` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`SDH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Dumping data for table `don_dat_hang`
--

