-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-05-17 14:48:24
-- 服务器版本： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jikedb`
--

-- --------------------------------------------------------

--
-- 表的结构 `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `sex` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `class` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `students`
--

INSERT INTO `students` (`id`, `name`, `sex`, `age`, `class`) VALUES
(1, 'test1', 'w', 55, '0'),
(2, 'test2', 'w', 11, '0'),
(3, 'test3', 'w', 11, '0'),
(7, 'test4', 'w', 11, '0'),
(8, 'test5', 'w', 11, '0'),
(31, 'test6', 'w', 11, '0'),
(32, 'test7', 'w', 11, '0'),
(33, 'test8', 'w', 11, '0'),
(37, 'test9', '11', 0, '0'),
(38, 'test10', 'w', 111, '0'),
(39, 'test11', 'w', 11, '0'),
(40, 'ee', 'w', 1, '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
