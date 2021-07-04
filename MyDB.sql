-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2021-04-03 13:42:27
-- 伺服器版本: 10.1.37-MariaDB
-- PHP 版本： 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- 資料表結構 `member_table`
--

DROP TABLE IF EXISTS `member_table`;
CREATE TABLE IF NOT EXISTS `member_table` (
  `NO` int(6) NOT NULL,
  `username` char(20) NOT NULL,
  `password` char(20) NOT NULL,
  `telephone` char(12) NOT NULL,
  `address` text,
  `other` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member_table`
--

INSERT INTO `member_table` (`NO`, `username`, `password`, `telephone`, `address`, `other`) VALUES
(0, 'test', '123456', '0912345678', '新北市', '0.0'),
(0, 'test1', '123456', '0909876543', '', ''),
(1, 'test2', '123456', '0901234567', '新北新莊', NULL),
(0, 'test3', '123456', '0908789789', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
