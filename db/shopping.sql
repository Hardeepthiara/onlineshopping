-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 17, 2015 at 06:37 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `price` bigint(225) NOT NULL,
  `des` varchar(500) NOT NULL,
  `type` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `des`, `type`, `image`) VALUES
(6, ' salwar suits', 500, 'pink desiginer suit', 'women', 'admin/image/sa.jpg'),
(8, 'salwar suits', 1200, 'PInk suit', 'women', 'admin/image/qw.jpg'),
(9, 'salwar suits', 1200, 'Green desiginer suit', 'women', 'admin/image/ff.jpg'),
(10, 'salwar suits', 1000, 'Green and pink combo', 'women', 'admin/image/we.jpg'),
(11, 'Jeans/shirts', 800, 'blue', 'men', 'admin/image/ab.jpg'),
(13, 'Jeans/shirts', 5000, 'formal', 'men', 'admin/image/index.jpg'),
(14, 'Jeans/shirts', 6000, 'black and blue', 'men', 'admin/image/ind.jpg'),
(15, 'Jeans/shirts', 400, 'gray', 'men', 'admin/image/op.jpg'),
(23, 'beautiful skirt', 777, 'pink', 'kids', 'admin/image/o.jpg'),
(25, 'black top', 708, 'beautiful black top and jean', 'kids', 'admin/image/k.jpg'),
(26, 'blue jean', 678, 'smart and atractive look', 'kids', 'admin/image/k1.jpg'),
(27, 'combo', 4500, 'atractive jean and top', 'kids', 'admin/image/h.jpg'),
(31, 'hand bag', 789, 'beautiful clg bag', 'bags', 'admin/image/b.jpg'),
(33, 'hand bag', 4500, 'beautiful clg bag', 'bags', 'admin/image/hji.jpg'),
(34, 'clg bag', 869, 'pink and skin combo', 'bags', 'admin/image/l.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `mobile` bigint(40) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `areacode` int(40) NOT NULL,
  `role` varchar(400) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`firstname`, `lastname`, `mobile`, `email`, `password`, `address`, `areacode`, `role`) VALUES
('abc', 'mn', 9876543210, 'abc@gmail.com', '1234', 'hsp', 123456, 'user'),
('admin', 'admin', 98989898, 'admin@gmail.com', '789', 'hsp', 344, 'admin'),
('salwar sui', 'kaur', 854984984, 'gh@yahoo.com', '123', 'DSA', 1234565, 'user'),
('narinder', 'kaur', 9876788987, 'nar@gmail.com', '456', 'hsp', 123456, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tocontact`
--

CREATE TABLE IF NOT EXISTS `tocontact` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tocontact`
--

INSERT INTO `tocontact` (`id`, `name`, `email`, `message`) VALUES
(2, 'Hardeep', 'hardeep@yahoo.com', 'hello u r website is so beautiful.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n'),
(4, 'narinder', 'nar@gmail.com', 'hloooo');
