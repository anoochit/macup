-- phpMyAdmin SQL Dump
-- version 3.3.7deb5build0.10.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2011 at 12:38 PM
-- Server version: 5.1.49
-- PHP Version: 5.3.3-1ubuntu9.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `macup`
--

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

DROP TABLE IF EXISTS `coupon`;
CREATE TABLE IF NOT EXISTS `coupon` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `address` varchar(20) NOT NULL,
  `building` varchar(45) DEFAULT NULL,
  `soi` varchar(45) DEFAULT NULL,
  `road` varchar(45) DEFAULT NULL,
  `district` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state_id` int(11) NOT NULL DEFAULT '0',
  `zipcode` varchar(5) DEFAULT NULL,
  `tel` varchar(13) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`,`state_id`),
  KEY `fk_coupon_state` (`state_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coupon`
--


-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL,
  `state` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state`) VALUES
(1, 'กรุงเทพมหานคร'),
(2, 'กระบี่'),
(3, 'กาญจนบุรี'),
(4, 'กาฬสินธุ์'),
(5, 'กำแพงเพชร'),
(6, 'ขอนแก่น'),
(7, 'จันทบุรี'),
(8, 'ฉะเชิงเทรา'),
(9, 'ชลบุรี'),
(10, 'ชัยนาท'),
(11, 'ชัยภูมิ'),
(12, 'ชุมพร'),
(13, 'เชียงราย'),
(14, 'เชียงใหม่'),
(15, 'ตรัง'),
(16, 'ตราด'),
(17, 'ตาก'),
(18, 'นครนายก'),
(19, 'นครปฐม'),
(20, 'นครพนม'),
(21, 'นครราชสีมา'),
(22, 'นครศรีธรรมราช'),
(23, 'นครสวรรค์'),
(24, 'นนทบุรี'),
(25, 'นราธิวาส'),
(26, 'น่าน'),
(27, 'บึงกาฬ'),
(28, 'บุรีรัมย์'),
(29, 'ปทุมธานี'),
(30, 'ประจวบคีรีขันธ์'),
(31, 'ปราจีนบุรี'),
(32, 'ปัตตานี'),
(33, 'พระนครศรีอยุธยา'),
(34, 'พะเยา'),
(35, 'พังงา'),
(36, 'พัทลุง'),
(37, 'พิจิตร'),
(38, 'พิษณุโลก'),
(39, 'เพชรบุรี'),
(40, 'เพชรบูรณ์'),
(41, 'แพร่'),
(42, 'ภูเก็ต'),
(43, 'มหาสารคาม'),
(44, 'มุกดาหาร'),
(45, 'แม่ฮ่องสอน'),
(46, 'ยโสธร'),
(47, 'ยะลา'),
(48, 'ร้อยเอ็ด'),
(49, 'ระนอง'),
(50, 'ระยอง'),
(51, 'ราชบุรี'),
(52, 'ลพบุรี'),
(53, 'ลำปาง'),
(54, 'ลำพูน'),
(55, 'เลย'),
(56, 'ศรีสะเกษ'),
(57, 'สกลนคร'),
(58, 'สงขลา'),
(59, 'สตูล'),
(60, 'สมุทรปราการ'),
(61, 'สมุทรสงคราม'),
(62, 'สมุทรสาคร'),
(63, 'สระแก้ว'),
(64, 'สระบุรี'),
(65, 'สิงห์บุรี'),
(66, 'สุโขทัย'),
(67, 'สุพรรณบุรี'),
(68, 'สุราษฎร์ธานี'),
(69, 'สุรินทร์'),
(70, 'หนองคาย'),
(71, 'หนองบัวลำภู'),
(72, 'อ่างทอง'),
(73, 'อำนาจเจริญ'),
(74, 'อุดรธานี'),
(75, 'อุตรดิตถ์'),
(76, 'อุทัยธานี'),
(77, 'อุบลราชธานี');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `enable` varchar(1) NOT NULL DEFAULT '1',
  `admin` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `enable`, `admin`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '1', '1'),
(2, 'user', '12dea96fec20593566ab75692c9949596833adc9', '1', '0');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coupon`
--
ALTER TABLE `coupon`
  ADD CONSTRAINT `fk_coupon_state` FOREIGN KEY (`state_id`) REFERENCES `state` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
