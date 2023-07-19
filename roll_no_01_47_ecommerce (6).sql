-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2023 at 12:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pasword` varchar(200) NOT NULL,
  `Email_address` varchar(200) NOT NULL,
  `First_Name` varchar(200) NOT NULL,
  `Last_Name` varchar(200) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Country` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `pasword`, `Email_address`, `First_Name`, `Last_Name`, `City`, `Country`) VALUES
(1, 'ADMIN', 'ADMIN123', 'admin1234@gmail.com', '          ADMIN', '          ADMINN', '       LAHOREE', '        PAKISTAN.'),
(2, 'abcd', 'abc123', 'abc123@gmail.com', '  abc', '  abc', '  karachi', '  Pakistan ');

-- --------------------------------------------------------

--
-- Table structure for table `billing_tbl`
--

CREATE TABLE `billing_tbl` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `bill_amount` double NOT NULL,
  `bill_date` date NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `payment_recieved` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing_tbl`
--

INSERT INTO `billing_tbl` (`id`, `name`, `email`, `country`, `city`, `address`, `phone_no`, `customer_id`, `order_id`, `bill_amount`, `bill_date`, `payment_method`, `payment_recieved`) VALUES
(1, 'Ali', '', 'India', 'Lahore', 'Block - A NM', 2147483647, 1, 7, 3500, '2022-07-23', 'EP', 'none'),
(2, 'Ali', '', 'pakistan', 'Islamabad', 'Block - B- DHA5', 2147483647, 1, 8, 3500, '2022-07-23', 'PP', 'none'),
(3, 'Ali Ahmed', '', 'pakistan', 'Lahore', 'Gulberg', 2147483647, 1, 9, 58500, '2022-07-23', 'EP', 'none'),
(4, 'Ali Khan', 'ali@gmail.com', 'pakistan', 'Islamabad', 'Gulberg-A', 2147483647, 1, 10, 58500, '2022-07-23', 'EP', 'none'),
(5, 'Ali', 'ali@gmail.com', 'Select Country', 'Lahore', 'Block - B- DHA5', 2147483647, 1, 11, 4000, '2022-07-23', 'PP', 'none'),
(6, 'Ali', 'ali@gmail.com', 'pakistan', 'Lahore', 'block alfazal', 2147483647, 1, 12, 90000, '2022-08-03', 'EP', 'none'),
(7, 'Ali', 'ali@gmail.com', 'pakistan', 'Lahore', 'block alfazal', 2147483647, 1, 13, 4000, '2022-08-22', 'PP', 'none'),
(8, 'Ali', 'ali@gmail.com', 'pakistan', 'Lahore', 'Gulberg-A', 2147483647, 1, 14, 6000, '2022-10-03', 'PP', 'none'),
(9, 'Ali', 'ali@gmail.com', 'pakistan', 'Lahore', 'Gulberg', 2147483647, 1, 15, 9000, '2022-10-11', 'PP', 'none'),
(10, 'Ali', 'ali@gmail.com', 'pakistan', 'Lahore', 'Gulberg-A', 2147483647, 1, 16, 40999, '2022-11-01', 'COD', 'none'),
(11, 'Ali', 'ali@gmail.com', 'pakistan', 'Karachi', 'block alfazal', 2147483647, 1, 17, 40999, '2022-11-01', '', 'none'),
(12, 'Ali', 'ali@gmail.com', 'pakistan', 'Lahore', 'Gulberg', 2147483647, 1, 18, 3600, '2022-11-01', '', 'none'),
(13, 'Ali', 'ali@gmail.com', 'pakistan', 'Lahore', 'Block - B- DHA5', 2147483647, 1, 19, 4500, '2022-11-08', 'COD', 'none'),
(14, 'Ali', 'ali@gmail.com', 'pakistan', 'Lahore', 'Block - B- DHA5', 2147483647, 1, 20, 4500, '2022-11-08', 'COD', 'none'),
(15, 'Ali', 'ali@gmail.com', 'pakistan', 'Lahore', 'block alfazal', 2147483647, 1, 21, 13500, '2022-11-08', 'COD', 'none'),
(16, 'Ali', 'ali@gmail.com', 'pakistan', 'Lahore', 'Gulberg-A', 2147483647, 1, 22, 36000, '2022-11-08', 'COD', 'none'),
(17, 'Ali', 'ali@gmail.com', 'pakistan', 'Lahore', 'Block - A NM', 2147483647, 1, 23, 9000, '2022-12-13', 'COD', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_des`) VALUES
(1, 'Men', 'Clothes                                                                                                                                                                               '),
(2, 'Women', 'Clothes'),
(3, 'Kids', 'Clothes'),
(4, 'Infants', '                                                                                       Toys                                                                             '),
(19, 'Toys', '4e');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `queries` varchar(500) NOT NULL,
  `replies` varchar(500) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`queries`, `replies`, `id`) VALUES
('HY!', 'How are You?', 1),
('HY!', 'How are You?', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `message`) VALUES
(1, 'bushrazafar347@gmail.com', 'Amazing Experience'),
(2, 'bushrazafar347@gmail.com', 'Amazing Experience'),
(3, 'bushrazafar347@gmail.com', 'Amazing Experience'),
(4, 'ali@gmail.com', 'Amazing Experience'),
(5, 'ali@gmail.com', 'Amazing Experience'),
(6, 'ali@gmail.com', 'Amazing Experience'),
(7, 'ali@gmail.com', 'Amazing Experience'),
(8, 'ali@gmail.com', 'Amazing Experience'),
(9, 'ali@gmail.com', 'Amazing Experience'),
(10, 'ali@gmail.com', 'Amazing Experience'),
(12, 'dbhfbfhdsbfhsj', 'bchjdshffdsufyh'),
(13, 'bushrazafar347@gmail.com ', 'Hello Amazing!'),
(17, 'gbyugrfue', 'n bxh'),
(18, 'bshghydgew', 'xsnhbhj');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tbl`
--

CREATE TABLE `customer_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_tbl`
--

INSERT INTO `customer_tbl` (`id`, `name`, `email`, `phone_no`, `password`) VALUES
(1, 'Ali', 'ali@gmail.com', '03211234567', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fb` varchar(5) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Name`, `email`, `fb`, `comments`) VALUES
('Ali', 'ali@gmail.com', 'very ', 'NICD TO MRE;LTFE'),
('Ali', 'ali@gmail.com', 'very ', 'NICD TO MRE;LTFE');

-- --------------------------------------------------------

--
-- Table structure for table `kids_sub`
--

CREATE TABLE `kids_sub` (
  `id` int(11) NOT NULL,
  `sub` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kids_sub`
--

INSERT INTO `kids_sub` (`id`, `sub`) VALUES
(1, 'Shirts'),
(2, 'Shoes');

-- --------------------------------------------------------

--
-- Table structure for table `m_sub`
--

CREATE TABLE `m_sub` (
  `M_id` int(11) NOT NULL,
  `sub` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_sub`
--

INSERT INTO `m_sub` (`M_id`, `sub`) VALUES
(1, 'Shirts'),
(2, 'Shoes');

-- --------------------------------------------------------

--
-- Table structure for table `order_dt_tbl`
--

CREATE TABLE `order_dt_tbl` (
  `id` int(11) NOT NULL,
  `prdct_id` int(11) NOT NULL,
  `prdct_price` int(11) NOT NULL,
  `prdct_qty` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_dt_tbl`
--

INSERT INTO `order_dt_tbl` (`id`, `prdct_id`, `prdct_price`, `prdct_qty`, `order_id`) VALUES
(1, 21, 3500, 1, 10),
(2, 54, 55000, 1, 10),
(3, 34, 2000, 2, 11),
(4, 56, 45000, 2, 12),
(5, 27, 2000, 2, 13),
(6, 46, 2000, 1, 14),
(7, 46, 2000, 2, 14),
(8, 2, 4500, 2, 15),
(9, 15, 999, 1, 16),
(10, 53, 40000, 1, 16),
(11, 71, 3600, 1, 18),
(12, 2, 4500, 1, 19),
(13, 2, 4500, 1, 20),
(14, 2, 4500, 1, 21),
(15, 2, 4500, 1, 21),
(16, 2, 4500, 1, 21),
(17, 2, 4500, 1, 22),
(18, 2, 4500, 1, 22),
(19, 2, 4500, 1, 22),
(20, 2, 4500, 1, 22),
(21, 2, 4500, 1, 22),
(22, 2, 4500, 3, 22),
(23, 2, 4500, 2, 23),
(24, 85, 3000, 1, 24),
(25, 85, 3000, 1, 25),
(26, 85, 3000, 1, 25),
(27, 85, 3000, 1, 26),
(28, 85, 3000, 1, 26),
(29, 85, 3000, 1, 27),
(30, 85, 3000, 1, 27),
(31, 85, 3000, 1, 28),
(32, 85, 3000, 1, 28),
(33, 19, 2200, 1, 29),
(34, 85, 3000, 1, 30),
(35, 94, 1200, 1, 31),
(36, 37, 1299, 1, 31),
(37, 94, 1200, 1, 32),
(38, 37, 1299, 1, 32),
(39, 94, 1200, 1, 33),
(40, 37, 1299, 1, 33),
(41, 94, 1200, 1, 34),
(42, 37, 1299, 1, 34),
(43, 94, 1200, 1, 35),
(44, 37, 1299, 1, 35),
(45, 94, 1200, 1, 36),
(46, 37, 1299, 1, 36),
(47, 94, 1200, 1, 37),
(48, 37, 1299, 1, 37),
(49, 94, 1200, 1, 38),
(50, 37, 1299, 1, 38),
(51, 94, 1200, 1, 39),
(52, 37, 1299, 1, 39),
(53, 94, 1200, 1, 40),
(54, 37, 1299, 1, 40),
(55, 94, 1200, 1, 41),
(56, 37, 1299, 1, 41),
(57, 94, 1200, 1, 42),
(58, 37, 1299, 1, 42),
(59, 94, 1200, 1, 43),
(60, 37, 1299, 1, 43),
(61, 94, 1200, 1, 44),
(62, 37, 1299, 1, 44),
(63, 94, 1200, 1, 45),
(64, 37, 1299, 1, 45),
(65, 4, 4500, 1, 45),
(66, 4, 4500, 1, 45),
(67, 94, 1200, 1, 46),
(68, 37, 1299, 1, 46),
(69, 4, 4500, 1, 46),
(70, 4, 4500, 1, 46),
(71, 94, 1200, 1, 47),
(72, 37, 1299, 1, 47),
(73, 4, 4500, 1, 47),
(74, 4, 4500, 1, 47);

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`id`, `customer_id`, `order_date`) VALUES
(1, 1, '2022-07-23'),
(2, 1, '2022-07-23'),
(3, 1, '2022-07-23'),
(4, 1, '2022-07-23'),
(5, 1, '2022-07-23'),
(6, 1, '2022-07-23'),
(7, 1, '2022-07-23'),
(8, 1, '2022-07-23'),
(9, 1, '2022-07-23'),
(10, 1, '2022-07-23'),
(11, 1, '2022-07-23'),
(12, 1, '2022-08-03'),
(13, 1, '2022-08-22'),
(14, 1, '2022-10-03'),
(15, 1, '2022-10-11'),
(16, 1, '2022-11-01'),
(17, 1, '2022-11-01'),
(18, 1, '2022-11-01'),
(19, 1, '2022-11-08'),
(20, 1, '2022-11-08'),
(21, 1, '2022-11-08'),
(22, 1, '2022-11-08'),
(23, 1, '2022-12-13'),
(24, 0, '2023-01-10'),
(25, 0, '2023-01-10'),
(26, 0, '2023-01-10'),
(27, 0, '2023-01-10'),
(28, 0, '2023-01-10'),
(29, 0, '2023-01-31'),
(30, 0, '2023-02-01'),
(31, 0, '2023-02-01'),
(32, 0, '2023-02-01'),
(33, 0, '2023-02-01'),
(34, 0, '2023-02-01'),
(35, 0, '2023-02-01'),
(36, 0, '2023-02-01'),
(37, 0, '2023-02-01'),
(38, 0, '2023-02-01'),
(39, 0, '2023-02-01'),
(40, 0, '2023-02-03'),
(41, 0, '2023-02-03'),
(42, 0, '2023-02-03'),
(43, 0, '2023-02-03'),
(44, 0, '2023-02-03'),
(45, 0, '2023-02-04'),
(46, 0, '2023-02-04'),
(47, 0, '2023-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prdct_id` int(11) NOT NULL,
  `prdct_name` varchar(255) NOT NULL,
  `prdct_qty` int(11) NOT NULL,
  `prdct_price` decimal(10,0) NOT NULL,
  `prdct_img` varchar(300) NOT NULL,
  `prdct_cat` int(11) NOT NULL,
  `prdct_desc` varchar(1000) NOT NULL,
  `sub_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prdct_id`, `prdct_name`, `prdct_qty`, `prdct_price`, `prdct_img`, `prdct_cat`, `prdct_desc`, `sub_cat`) VALUES
(1, 'Cartoon Astronaut Shirt', 13, '450', 'INC/Men/f1.jpg', 1, '                                                                                                                                                                                                           The Giladen Uktra Cotton Shirt is made from a substantial 6.0 oz. pr sq. yd. fabric constructed from 100% cotton, this classic fit preshrunk jersey knit provides unmatched comfort with each wear. Fearturing a taped neck and shoulder, and seemless double-needle\r\ncollar, and available in a range of colors, it offers it all in the ultimate head-turning package.                                                                                                                                                                                      ', 2),
(2, 'Cartoon Astronaut Shirt', 12, '4500', 'products/f2.jpg\r\n', 1, 'The Giladen Uktra Cotton Shirt is made from a substantial 6.0 oz. pr sq. yd. fabric constructed from 100% cotton, this classic fit preshrunk jersey knit provides unmatched comfort with each wear. Fearturing a taped neck and shoulder, and seemless double-needle\r\ncollar, and available in a range of colors, it offers it all in the ultimate head-turning package.', 2),
(3, 'Cartoon Astronaut Shirt', 0, '4500', 'products/f3.jpg', 1, '', 2),
(4, 'Cartoon Astronaut Shirt', 6, '4500', 'products/f4.jpg', 1, '', 2),
(6, 'Cartoon Astronaut Shirt', 12, '4500', 'products/f5.jpg', 1, '', 2),
(7, 'Cartoon Astronaut Shirt', 14, '4500', 'products/f6.jpg', 1, '', 0),
(8, 'Cartoon Astronaut Shirt', 7, '4000', 'products/n1.jpg', 1, '', 0),
(9, 'Cartoon Astronaut Shirt', 7, '4000', 'products/n2.jpg', 1, '', 0),
(10, 'Cartoon Astronaut Shirt', 8, '4000', 'products/n3.jpg', 1, '', 0),
(11, 'Cartoon Astronaut Shirt', 9, '1200', 'products/n4.jpg', 1, '', 0),
(12, 'Cartoon Astronaut Shirt', 3, '1500', 'products/n5.jpg', 1, '', 0),
(13, 'Cartoon Astronaut Shirt', 6, '799', 'products/n7.jpg', 1, '', 0),
(14, 'Cartoon Astronaut Shirt', 7, '4000', 'products/n8.jpg', 1, '', 0),
(15, 'Cartoon Astronaut T-Shirt', 5, '999', 'INC/Women/f-1-2.png', 2, '                                                       ', 1),
(16, 'Cartoon Astronaut jacket', 4, '6000', 'shop/8.jpg', 1, '', 0),
(17, 'Cartoon Astronaut T-shirt', 8, '1500', 'shop/24.jpg', 1, '', 1),
(18, 'Cartoon Astronaut M-shoes', 5, '5000', 'shoes/1.jpg', 1, '', 5),
(19, 'Cartoon Astronaut M-shoes', 6, '2200', 'shoes/2.jpg', 1, '', 5),
(20, 'Cartoon Astronaut M-shoes', 8, '4500', 'shoes/3.jpg', 1, '', 5),
(21, 'Cartoon Astronaut M-shoes', 4, '3500', 'shoes/4.jpg', 1, '', 5),
(22, 'Cartoon Astronaut M-shoes', 6, '3000', 'shoes/5.jpg', 1, '', 5),
(23, 'Cartoon Astronaut M-shoes', 7, '1500', 'shoes/6.jpg', 1, '', 0),
(24, 'Cartoon Astronaut M-shoes', 5, '5000', 'shoes/7.jpg', 1, '', 0),
(25, 'Cartoon Astronaut M-shoes', 4, '5500', 'shoes/8.jpg', 1, '', 0),
(26, 'Cartoon Astronaut Shoes', 3, '2000', 'shop/2.jpg', 1, '', 0),
(27, 'Cartoon Astronaut Shoes', 5, '2000', 'shop/4.jpg', 1, '', 0),
(28, 'Cartoon Astronaut Shoes', 4, '2000', 'shop/7.jpg', 1, '', 0),
(29, 'Cartoon Astronaut Shoes', 6, '2000', 'shop/8.jpg', 1, '', 0),
(30, 'Cartoon Astronaut M-watch', 7, '2000', 'shop/13.jpg', 1, '', 0),
(31, 'Cartoon Astronaut M-watch', 4, '1000', 'shop/10.jpg', 1, '', 0),
(32, 'Cartoon Astronaut M-watch', 6, '1500', 'watches/1.jpg', 1, '', 0),
(33, 'Cartoon Astronaut M-watch', 6, '2500', 'watches/2.jpg', 1, '', 0),
(34, 'Cartoon Astronaut Shoes', 3, '2000', 'shop/2.jpg', 1, '', 0),
(36, 'Cartoon Astronaut frock', 3, '1400', 'shop/d6.jpg', 2, '', 3),
(37, 'Cartoon Astronaut frock', 4, '1299', 'shop/d7.jpg', 2, '', 3),
(38, 'Cartoon Astronaut frock', 4, '1600', 'shop/d8.jpg', 2, '', 0),
(39, 'Cartoon Astronaut frock', 2, '1600', 'shop/d9.jpg', 2, '', 0),
(40, 'Cartoon Astronaut frock', 6, '1700', 'shop/d11.jpg', 2, '', 0),
(41, 'Cartoon Astronaut frock', 4, '1500', 'shop/d12.jpg', 2, '', 0),
(42, 'Cartoon Astronaut frock', 5, '1800', 'shop/d13.jpg', 2, '', 0),
(43, 'Cartoon Astronaut frock', 5, '1500', 'shop/d14.jpg', 2, '', 0),
(44, 'Cartoon Astronaut frock', 7, '2000', 'shop/d15.jpg', 2, '', 0),
(45, 'Cartoon Astronaut frock', 3, '1700', 'shop/d16.jpg', 2, '', 0),
(46, 'Cartoon Astronaut frock', 4, '2000', 'shop/d17.jpg', 2, '', 0),
(47, 'Cartoon Astronaut frock', 5, '1500', 'shop/d18.jpg', 2, '', 0),
(48, 'Cartoon Astronaut frock', 4, '1400', 'shop/d19.jpg', 2, '', 0),
(49, 'Cartoon Astronaut frock', 5, '1500', 'shop/d20.jpg', 2, '', 0),
(50, 'Cartoon Astronaut frock', 5, '2500', 'shop/d5.jpg', 2, '', 0),
(51, 'Cartoon Astronaut lehenga', 5, '40000', 'shop/l1.jpg', 2, '', 4),
(52, 'Cartoon Astronaut lehenga', 4, '40000', 'shop/l2.jpg', 2, '', 4),
(53, 'Cartoon Astronaut lehenga', 6, '40000', 'shop/l3.jpg', 2, '', 4),
(54, 'Cartoon Astronaut lehenga', 3, '55000', 'shop/l4.jpg', 2, '', 4),
(55, 'Cartoon Astronaut lehenga', 2, '40000', 'shop/l5.jpg', 2, '', 4),
(56, 'Cartoon Astronaut lehenga', 5, '45000', 'shop/l6.jpg', 2, '', 0),
(57, 'Cartoon Astronaut lehenga', 7, '60000', 'shop/l7.jpg', 2, '', 0),
(58, 'Cartoon Astronaut lehenga', 6, '70000', 'shop/l8.jpg', 2, '', 0),
(59, 'Cartoon Astronaut lehenga', 5, '40000', 'shop/l9.jpg', 2, '', 0),
(60, 'Cartoon Astronaut lehenga', 6, '55000', 'shop/l10.jpg', 2, '', 0),
(61, 'Cartoon Astronaut lehenga', 3, '70000', 'shop/l11.jpg', 2, '', 0),
(62, 'Cartoon Astronaut lehenga', 5, '45000', 'shop/l12.jpg', 2, '', 0),
(63, 'Cartoon Astronaut lehenga', 4, '50000', 'shop/l13.jpg', 2, '', 0),
(64, 'Cartoon Astronaut lehenga', 5, '45000', 'shop/l14.jpg', 2, '', 0),
(65, 'Cartoon Astronaut lehenga', 6, '80000', 'shop/l15.jpg', 2, '', 0),
(66, 'Cartoon Astronaut lehenga', 5, '60000', 'shop/l16.jpg', 2, '', 0),
(67, 'Cartoon Astronaut W-shoes', 4, '3500', 'shop/s1.jpg', 2, '', 0),
(68, 'Cartoon Astronaut W-shoes', 4, '3000', 'shop/s2.jpg', 2, '', 0),
(69, 'Cartoon Astronaut W-shoes', 4, '2500', 'shop/s3.jpg', 2, '', 0),
(70, 'Cartoon Astronaut W-shoes', 6, '2600', 'shop/s4.jpg', 2, '', 6),
(71, 'Cartoon Astronaut W-shoes', 3, '3600', 'shop/s5.jpg', 2, '', 6),
(72, 'Cartoon Astronaut W-shoes', 6, '3500', 'shop/s6.jpg', 2, '', 6),
(73, 'Cartoon Astronaut W-shoes', 6, '4500', 'shop/s7.jpg', 2, '', 6),
(74, 'Cartoon Astronaut W-shoes', 3, '3500', 'shop/s8.jpg', 2, '', 6),
(75, 'Cartoon Astronaut W-shoes', 5, '4000', 'shop/s9.jpg', 2, '', 6),
(76, 'Cartoon Astronaut W-shoes', 3, '2900', 'shop/s10.jpg', 2, '', 6),
(77, 'Cartoon Astronaut W-shoes', 2, '2800', 'shop/s11.jpg', 2, '', 0),
(78, 'Cartoon Astronaut W-shoes', 14, '2600', 'shop/s12.jpg', 2, '', 0),
(79, 'Cartoon Astronaut W-shoes', 7, '3900', 'shop/s13.jpg', 2, '', 0),
(80, 'Cartoon Astronaut W-shoes', 9, '2999', 'shop/s14.jpg', 2, '', 0),
(81, 'Cartoon Astronaut W-shoes', 11, '2800', 'shop/s15.jpg', 2, '', 0),
(82, 'Cartoon Astronaut W-shoes', 12, '3000', 'shop/s16.jpg', 2, '', 0),
(85, 'KurtaA', 3, '3000', 'products/f2.jpg', 2, 'jshyf7we r74r6 fv7r7 f7', 0),
(86, 'wait coat', 2, '3000', 'INC/Men/n8.jpg', 1, 'xd sc', 0),
(87, 'shirt', 3, '3999', 'INC/Men/3.jpg', 1, '                                   wowwwwwwwwwwwwwwwwww                                                                              ', 0),
(90, 'FROCK', 3, '1200', 'INC/Kids/d20.jpg', 3, 'tttttttttttttttttt   tttttttttttttttttttttt hello ', 0),
(92, 'Hello World', 3, '1200', 'INC/Women/1.jpg', 2, ' Amazing and fitness dress', 0),
(93, 'Waist COAT ', 10, '1345', 'INC/Men/2.jpg', 1, 'and I will be able ', 0),
(94, 'Maria B', 13, '1200', 'INC/Women/f9.jpg', 2, 'fdtyrf v6tytyu', 0),
(95, 'Jacket', 2, '3000', 'INC/Women/cat-1.jpg', 2, 'vc bghtgfd', 2),
(96, 'Shirt', 3, '1200', 'INC/Women/p-1.png', 2, 'hghyggb', 1),
(97, 'Shirt', 4, '3000', 'INC/Men/p-3.png', 1, 'fvgbg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_tbl`
--

CREATE TABLE `shipping_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signupform`
--

CREATE TABLE `signupform` (
  `username` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signupform`
--

INSERT INTO `signupform` (`username`, `phone`, `address`, `email`, `password`) VALUES
('Ali', 347431699, 'sargodha', 'ali@gmail.com', 'abc12345'),
('Ali', 347431699, 'sargodha', 'ali@gmail.com', 'abc12345');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_brand` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_id`, `sub_name`, `cat_id`, `sub_brand`) VALUES
(2, 'Shirts', 1, 'Adidas'),
(3, 'Casual', 2, 'Verizon'),
(4, 'Bridal', 2, 'Verizon'),
(5, 'Shoes', 1, 'Adidas'),
(6, 'Shoes', 2, 'Verizon'),
(8, 'Watches', 1, 'Adidas'),
(14, 'Watches', 19, 'adidas');

-- --------------------------------------------------------

--
-- Table structure for table `w_sub`
--

CREATE TABLE `w_sub` (
  `w_id` int(11) NOT NULL,
  `sub` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `w_sub`
--

INSERT INTO `w_sub` (`w_id`, `sub`) VALUES
(1, 'Frocks');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_tbl`
--
ALTER TABLE `billing_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `kids_sub`
--
ALTER TABLE `kids_sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_sub`
--
ALTER TABLE `m_sub`
  ADD PRIMARY KEY (`M_id`);

--
-- Indexes for table `order_dt_tbl`
--
ALTER TABLE `order_dt_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prdct_id`),
  ADD KEY `prdct_cat` (`prdct_cat`);

--
-- Indexes for table `shipping_tbl`
--
ALTER TABLE `shipping_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `w_sub`
--
ALTER TABLE `w_sub`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `billing_tbl`
--
ALTER TABLE `billing_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kids_sub`
--
ALTER TABLE `kids_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_sub`
--
ALTER TABLE `m_sub`
  MODIFY `M_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_dt_tbl`
--
ALTER TABLE `order_dt_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prdct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `shipping_tbl`
--
ALTER TABLE `shipping_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `w_sub`
--
ALTER TABLE `w_sub`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`prdct_cat`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
