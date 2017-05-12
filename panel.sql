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
-- ฐานข้อมูล: `panel`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `authme`
-- 

CREATE TABLE `authme` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `lastlogin` bigint(20) default NULL,
  `x` double NOT NULL default '0',
  `y` double NOT NULL default '0',
  `z` double NOT NULL default '0',
  `world` varchar(255) NOT NULL default 'world',
  `status` varchar(6) default 'member',
  `email` varchar(255) NOT NULL,
  `points` int(11) NOT NULL default '0',
  `perm` int(11) NOT NULL default '1',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `authme`
-- 

INSERT INTO `authme` VALUES (1, 'admin', '$SHA$76c153621b573295$4296f8b921b20b210d271f12bad214c1f47241e3eb48c029cc162ee070abedfe', '127.0.0.1', 1421159237538, 0, 0, 0, 'world', 'admin', '', 0, 1);


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `log`
-- 

CREATE TABLE `log` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `info2` varchar(255) NOT NULL,
  `info3` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='log' AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `log`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `shop`
-- 

CREATE TABLE `shop` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `ser` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `shop`
-- 

