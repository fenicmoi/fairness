-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `sk000`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `nt_act`
-- 

CREATE TABLE `nt_act` (
  `id_act` int(7) NOT NULL auto_increment,
  `name_act` varchar(255) NOT NULL,
  `date_act` varchar(50) NOT NULL,
  `detail_act` text NOT NULL,
  `id_photo` int(7) NOT NULL,
  `date_in` varchar(255) NOT NULL,
  `status_act` int(7) NOT NULL,
  PRIMARY KEY  (`id_act`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

-- 
-- dump ตาราง `nt_act`
-- 

INSERT INTO `nt_act` VALUES (25, 'กิจกรรมการปลูปป่า', '1 กันยายน 2554', 'มาร่วมกิจกรรมปลูกป่ากันนะคับ', 162, '01-09-2011', 1);
INSERT INTO `nt_act` VALUES (27, 'ปลูกป่า2', '31 สิงหาคม 2554', 'ปลูกป่่าลดภาวะโลกร้อน                              ', 166, '01-09-2011', 0);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `nt_photo`
-- 

CREATE TABLE `nt_photo` (
  `id_photo` int(7) NOT NULL auto_increment,
  `name_photo` varchar(255) NOT NULL,
  `id_act` int(7) NOT NULL,
  PRIMARY KEY  (`id_photo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=167 ;

-- 
-- dump ตาราง `nt_photo`
-- 

INSERT INTO `nt_photo` VALUES (162, 'DSC04777.JPG', 25);
INSERT INTO `nt_photo` VALUES (165, 'DSC04870.JPG', 27);
INSERT INTO `nt_photo` VALUES (166, 'DSC04884.JPG', 27);
