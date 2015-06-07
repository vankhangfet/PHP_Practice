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
-- Table structure for table `tham_do`
--

DROP TABLE IF EXISTS `tham_do`;
CREATE TABLE IF NOT EXISTS `tham_do` (
  `MCH` int(11) NOT NULL AUTO_INCREMENT,
  `Noi_dung` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Ngay_dang` datetime DEFAULT NULL,
  `Tong_so_binh_chon` int(11) DEFAULT NULL,
  PRIMARY KEY (`MCH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tham_do`
--

