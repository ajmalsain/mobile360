-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2022 at 03:13 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mobile360`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `userid` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `password`) VALUES
('admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `Pid` int(15) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bname` varchar(25) NOT NULL,
  `price` int(6) NOT NULL,
  `qty` int(7) NOT NULL,
  `image` int(15) NOT NULL,
  `image2` varchar(15) DEFAULT NULL,
  `image3` varchar(15) DEFAULT NULL,
  `image4` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`Pid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Pid`, `name`, `bname`, `price`, `qty`, `image`, `image2`, `image3`, `image4`) VALUES
(2022002, 'S21 Ultra', 'Samsung', 105000, 245, 2022002, '20220021', '20220022', '20220023'),
(2022003, 'S21 5G', 'Samsung', 79000, 0, 2022003, NULL, NULL, NULL),
(2022004, 'S21 FE', 'Samsung', 45000, 0, 2022004, NULL, NULL, NULL),
(2022005, 'A12', 'Samsung', 11990, 0, 2022005, NULL, NULL, NULL),
(2022006, 'M32', 'Samsung', 17990, 0, 2022006, NULL, NULL, NULL),
(2022007, 'M51', 'Samsung', 23990, 0, 2022007, NULL, NULL, NULL),
(2022008, 'Redmi 9 Power', 'Redmi', 12999, 0, 2022008, NULL, NULL, NULL),
(2022009, 'Redmi note 9', 'Redmi', 14999, 0, 2022009, NULL, NULL, NULL),
(2022010, 'Redmi K20', 'Redmi', 26999, 0, 2022010, NULL, NULL, NULL),
(2022011, 'Redmi note10', 'Redmi', 17999, 0, 2022011, NULL, NULL, NULL),
(2022012, 'Redmi Note 10 pro max', 'Redmi', 19990, 0, 2022012, NULL, NULL, NULL),
(2022013, 'GT master edition', 'Realme', 27999, 0, 2022013, NULL, NULL, NULL),
(2022014, 'GT Neo 2', 'Realme', 31990, 0, 2022014, NULL, NULL, NULL),
(2022015, 'Realme 8', 'Realme', 16990, 0, 2022015, NULL, NULL, NULL),
(2022016, 'Realme 8 pro', 'Realme', 17990, 0, 2022016, NULL, NULL, NULL),
(2022017, 'C21Y', 'Realme', 9490, 0, 2022017, NULL, NULL, NULL),
(2022018, 'iphone 13 mini', 'iphone', 69900, 0, 2022018, NULL, NULL, NULL),
(2022019, 'iphone 13', 'iphone', 79900, 0, 2022019, NULL, NULL, NULL),
(2022020, 'iphone 13 pro', 'iphone', 89900, 0, 2022020, NULL, NULL, NULL),
(2022021, 'iphone 13 pro max', 'iphone', 116000, 0, 2022021, NULL, NULL, NULL),
(2022022, 'Redmi 9', 'Redmi', 8900, 0, 2022022, NULL, NULL, NULL),
(2022030, 'X70 pro', 'Vivo', 64490, 200, 2022030, '20220301', '20220302', '20220303'),
(2022023, 'Realme 9i', 'Realme', 14499, 800, 2022023, NULL, NULL, NULL),
(2022024, 'Note 10 pro', 'Redmi', 18990, 225, 2022024, NULL, NULL, NULL),
(2022025, 'S22', 'Samsung', 84500, 125, 2022025, NULL, NULL, NULL),
(2022026, 'Realme X7', 'Realme', 26490, 256, 2022026, NULL, NULL, NULL),
(2022027, 'A52s', 'Samsung', 36000, 560, 2022027, NULL, NULL, NULL),
(2022028, '12 pro', 'Iphone', 89990, 114, 2022028, NULL, NULL, NULL),
(2022029, 'A55', 'Oppo', 18500, 300, 2022029, NULL, NULL, NULL),
(2022032, 'dgjdj', 'Redmi', 0, 0, 2022032, '20220321', '20220322', '20220323');

-- --------------------------------------------------------

--
-- Table structure for table `spec`
--

CREATE TABLE IF NOT EXISTS `spec` (
  `sid` varchar(15) CHARACTER SET utf8 NOT NULL,
  `color` varchar(20) CHARACTER SET utf8 NOT NULL,
  `dissize` varchar(10) CHARACTER SET utf8 NOT NULL,
  `distype` varchar(15) CHARACTER SET utf8 NOT NULL,
  `ram` varchar(5) CHARACTER SET utf8 NOT NULL,
  `rom` varchar(10) CHARACTER SET utf8 NOT NULL,
  `mcam` varchar(10) CHARACTER SET utf8 NOT NULL,
  `battery` varchar(10) CHARACTER SET utf8 NOT NULL,
  `pid` varchar(15) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spec`
--

INSERT INTO `spec` (`sid`, `color`, `dissize`, `distype`, `ram`, `rom`, `mcam`, `battery`, `pid`) VALUES
('20021001', 'Black', '6.7', 'Amoled', '8', '128', '50 MP', '4500mAh', '2022030'),
('20021002', 'Matt Black', '6.8', 'QhdAmoled', '8', '128', '108 MP', '4500mAh', '2022002');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Uid` int(15) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `place` varchar(25) NOT NULL,
  `phone` int(13) NOT NULL,
  `mailid` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  `cpassword` varchar(15) NOT NULL,
  PRIMARY KEY (`Uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Uid`, `uname`, `place`, `phone`, `mailid`, `password`, `cpassword`) VALUES
(750001, 'Aron', 'Kollam', 2147483647, 'aron@gmail.com', 'aron@!23', 'aron@123');
