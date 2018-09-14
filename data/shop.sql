-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2018-09-14 07:29:55
-- 服务器版本： 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- 表的结构 `email`
--

DROP TABLE IF EXISTS `email`;
CREATE TABLE IF NOT EXISTS `email` (
  `eid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `event` enum('forgot','register','buy','reset','space') NOT NULL COMMENT '事件',
  `code` varchar(32) NOT NULL COMMENT '验证码',
  `cid` int(11) DEFAULT NULL COMMENT '用户id',
  `createtime` varchar(32) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `review_image`
--

DROP TABLE IF EXISTS `review_image`;
CREATE TABLE IF NOT EXISTS `review_image` (
  `image_id` int(15) NOT NULL AUTO_INCREMENT COMMENT '评论图片id',
  `review_id` int(11) NOT NULL COMMENT '评论id',
  `image1` varchar(255) DEFAULT NULL COMMENT '评论图片1',
  `image2` varchar(255) DEFAULT NULL COMMENT '评论图片2',
  `image3` varchar(255) DEFAULT NULL COMMENT '评论图片3',
  `image4` varchar(255) DEFAULT NULL COMMENT '评论图片4',
  `image5` varchar(255) DEFAULT NULL COMMENT '评论图片5',
  `image6` varchar(255) DEFAULT NULL COMMENT '评论图片6',
  `image7` varchar(255) DEFAULT NULL COMMENT '评论图片7',
  `image8` varchar(255) DEFAULT NULL COMMENT '评论图片8',
  `image9` varchar(255) DEFAULT NULL COMMENT '评论图片9',
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

ALTER TABLE currency ADD flag VARCHAR(32) NOT NULL DEFAULT 'flag/flag_ch' COMMIT '国旗',
UPDATE currency SET flag = 'flag/flag_en.jpg' WHERE currency_id = 1,
UPDATE currency SET flag = 'flag/flag_us.jpg' WHERE currency_id = 2,
UPDATE currency SET flag = 'flag/flag_eu.jpg' WHERE currency_id = 3,
UPDATE currency SET flag = 'flag/flag_ch.jpg' WHERE currency_id = 4;
