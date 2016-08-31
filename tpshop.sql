-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-08-29 01:35:18
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tpshop`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `mg_id` int(11) NOT NULL AUTO_INCREMENT,
  `mg_name` varchar(32) NOT NULL,
  `mg_pwd` varchar(32) NOT NULL,
  `mg_role_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`mg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `attribute`
--

CREATE TABLE IF NOT EXISTS `attribute` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `type_id` smallint(6) NOT NULL,
  `attr_name` varchar(30) NOT NULL,
  `attr_type` tinyint(4) NOT NULL,
  `attr_input_type` tinyint(4) NOT NULL,
  `attr_values` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `auth`
--

CREATE TABLE IF NOT EXISTS `auth` (
  `auth_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `auth_name` varchar(20) NOT NULL,
  `auth_pid` smallint(6) NOT NULL,
  `auth_c` varchar(32) NOT NULL,
  `auth_a` varchar(32) NOT NULL,
  `auth_path` varchar(32) NOT NULL,
  `auth_level` tinyint(4) NOT NULL,
  PRIMARY KEY (`auth_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(30) NOT NULL,
  `goods_price` int(10) NOT NULL,
  `create_time` int(20) NOT NULL,
  `goods_number` int(10) NOT NULL,
  `goods_thumb` varchar(100) NOT NULL,
  `is_sale` varchar(10) NOT NULL,
  `is_new` varchar(10) NOT NULL,
  `goods_img` varchar(100) NOT NULL,
  `is_hot` varchar(10) NOT NULL,
  `goods_desc` text NOT NULL,
  `is_del` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `goods_name` (`goods_name`),
  KEY `create_time` (`create_time`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`id`, `goods_name`, `goods_price`, `create_time`, `goods_number`, `goods_thumb`, `is_sale`, `is_new`, `goods_img`, `is_hot`, `goods_desc`, `is_del`) VALUES
(1, 'iphone5s', 112, 1472051631, 22, 'goods/2016-08-24/thumb_57bdb9af8a561.PNG', '', '', 'goods/2016-08-24/57bdb9af8a561.PNG', '', '你值得信赖', 0);

-- --------------------------------------------------------

--
-- 表的结构 `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `role_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) NOT NULL,
  `role_auth_ids` varchar(128) NOT NULL,
  `role_auth_ac` text NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(1, '的1111'),
(3, '苹果');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
