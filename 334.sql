-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-05-26 19:39:26
-- 服务器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `334`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` varchar(10) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `shop` varchar(20) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `avaliability` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`, `date`, `shop`, `phone`, `avaliability`) VALUES
(14, 'hc633', '12345', 'Admin', '2019-05-24 11:48:18', 'Shop1', 2147483647, 'True'),
(17, 'gj600', '6554894987', 'Sales', '2019-05-24 13:08:27', 'Shop1', 2147483647, 'True'),
(18, 'admin', '12345678', 'Sales', '2019-05-25 08:21:48', 'Shop1', 2147483647, 'Avaliabili');

-- --------------------------------------------------------

--
-- 表的结构 `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `customer`
--

CREATE TABLE `customer` (
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `credit` int(10) NOT NULL,
  `balance` int(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(10) NOT NULL,
  `subject` varchar(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `customer`
--

INSERT INTO `customer` (`name`, `address`, `phone`, `credit`, `balance`, `status`, `date`, `id`, `subject`, `type`) VALUES
('Andrew', '20 Foley st, Wollongong,NSW', 2147483647, 30, 100, 'True', '0000-00-00 00:00:00', 1, 'trains', 'display'),
('Alic', 'sydney', 2147483647, 100, 100, 'True', '2019-05-25 07:43:21', 8, NULL, NULL),
('Bob', '100 Crown st, Wollongong', 2147483647, 100, 100, 'True', '2019-05-26 06:34:33', 9, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `delivery`
--

CREATE TABLE `delivery` (
  `id` int(10) NOT NULL,
  `supid` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `shop` varchar(20) DEFAULT NULL,
  `name` varchar(10) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `delivery`
--

INSERT INTO `delivery` (`id`, `supid`, `price`, `date`, `shop`, `name`, `phone`) VALUES
(4, 0, 128, '2019-05-25 18:32:45', 'Shop1', 'Alic', '4544554454'),
(5, 0, 308, '2019-05-25 18:34:05', 'Shop1', 'kirk', '0451099888');

-- --------------------------------------------------------

--
-- 表的结构 `hobby`
--

CREATE TABLE `hobby` (
  `type` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `cid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `olist`
--

CREATE TABLE `olist` (
  `id` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `price` int(10) NOT NULL,
  `discount` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `olist`
--

INSERT INTO `olist` (`id`, `cid`, `date`, `price`, `discount`) VALUES
(7, 2, '2019-05-24 16:22:40', 38, 0),
(8, 3, '2019-05-25 11:19:01', 56, 10),
(9, 5, '2019-05-25 18:02:50', 40, 0);

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `stock` int(10) NOT NULL,
  `price` int(10) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `supid` int(10) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(10) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `avaliability` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `type`, `subject`, `stock`, `price`, `location`, `supid`, `date`, `name`, `description`, `avaliability`) VALUES
(4, 'display', 'trains', 100, 20, 'Location1', 0, '2019-05-23 14:51:09', 'KV-8', '78578778', 'True'),
(5, 'working', 'cars', 100, 18, 'Location2', 0, '2019-05-23 14:53:48', 'T-34', '666666666666666666', 'True'),
(6, 'static', 'cars', 100, 18, 'Location2', 2, '2019-05-23 17:55:58', 'Sherman', 'England', 'False'),
(7, 'display', 'trains', 100, 20, 'Location1', 1, '2019-05-23 18:02:44', 'KV-2', 'KV-2KV-2KV-2KV-2KV-2KV-2', 'True'),
(8, 'display', 'trains', 10, 90, 'Location1', 1, '2019-05-24 06:39:34', 'SU-85', 'SU-85SU-85SU-85SU-85', 'False');

-- --------------------------------------------------------

--
-- 表的结构 `shop`
--

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `sproduct`
--

CREATE TABLE `sproduct` (
  `id` int(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `price` int(10) DEFAULT NULL,
  `supid` int(10) DEFAULT NULL,
  `name` varchar(10) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `sproduct`
--

INSERT INTO `sproduct` (`id`, `type`, `subject`, `price`, `supid`, `name`, `description`) VALUES
(6, 'static', 'cars', 18, 2, 'Sherman', 'England'),
(7, 'display', 'trains', 20, 1, 'KV-2', 'KV-2KV-2KV-2KV-2KV-2KV-2'),
(8, 'display', 'trains', 90, 1, 'SU-85', 'SU-85SU-85SU-85SU-85');

-- --------------------------------------------------------

--
-- 表的结构 `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `credit` int(10) NOT NULL,
  `phone` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `address`, `credit`, `phone`) VALUES
(4, 'coles', 'illawarra', 100, 2147483647),
(5, 'kirk', 'illawarra', 100, 2147483647);

--
-- 转储表的索引
--

--
-- 表的索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- 表的索引 `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`),
  ADD UNIQUE KEY `contact_id` (`contact_id`);

--
-- 表的索引 `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- 表的索引 `olist`
--
ALTER TABLE `olist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- 表的索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- 表的索引 `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shop_id`),
  ADD UNIQUE KEY `shop_id` (`shop_id`);

--
-- 表的索引 `sproduct`
--
ALTER TABLE `sproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- 表的索引 `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- 使用表AUTO_INCREMENT `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用表AUTO_INCREMENT `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `olist`
--
ALTER TABLE `olist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用表AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用表AUTO_INCREMENT `sproduct`
--
ALTER TABLE `sproduct`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用表AUTO_INCREMENT `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
