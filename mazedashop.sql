-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2018 at 10:13 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mazedashop`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description`) VALUES
(4, 'About', 'The English word was apparently derived from the Latin stem (information-) of the nominative (informatio): this noun is derived from the verb informare (to inform) in the sense of \"to give form to the mind\", \"to discipline\", \"instruct\", \"teach\". Inform itself comes (via French informer) from the Latin verb informare, which means to give form or to form an idea of. Furthermore, Latin itself already contained the word informatio meaning concept or idea, but the extent to which this may have influenced the development of the word information in English is not clear. or to form an idea of. Furthermore, Latin itself already contained the word informatio meaning concept or idea, but the extent to which this may have influenced the development of the word information in English is not clear. or to form an idea of. Furthermore, Latin itself already contained the word informatio meaning concept or idea, but the extent to which this may have influenced the development of the word information in English is not clear. ch this may have influenced the development of the word information in English is not clear.\r\n\r\nch this may have influenced the development of the word information in English is not clear.\r\n'),
(2, 'Mission ', 'The English word was apparently derived from the Latin stem (information-) of the nominative (informatio): this noun is derived from the verb informare (to inform) in the sense of \"to give form to the mind\", \"to discipline\", \"instruct\", \"teach\". Inform itself comes (via French informer) from the Latin verb informare, which means to give form or to form an idea of. Furthermore, Latin itself already contained the word informatio meaning concept or idea, or to form an idea of. Furthermore, Latin itself already contained the word informatio meaning concept or idea, or to form an idea of. Furthermore, Latin itself already contained the word informatio meaning concept or idea, but the extent to which this may have influenced the development of the word information in English is not clear.\r\n\r\nor to form an idea of. Furthermore, Latin itself already contained the word informatio meaning concept or idea, but the extent to which this may have influenced the development of the word information in English is not clear.');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `add_id` int(11) NOT NULL,
  `profile_id` varchar(100) NOT NULL,
  `address` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `person_type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_type` varchar(50) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `shop_name` text NOT NULL,
  `contact_person` text NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `NID` varchar(120) NOT NULL,
  `type` int(11) NOT NULL,
  `aprove` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_type`, `admin_name`, `password`, `shop_name`, `contact_person`, `mobile`, `email`, `address`, `logo`, `NID`, `type`, `aprove`) VALUES
(1, '', 'admin', '12345', 'Mazeda', 'Mirazul islam', '01729900631', 'mirazul@gmail.com', ' Dhaka  ', '', '', 0, 0),
(2, '', 'nazmul', 'sdf', 'doofaz it', 'nazmul', '01974433711', 'shakhawatfci@gmail.com', 'sdfdsfsdf', 'img/Chrysanthemum.jpg', '', 1, 1),
(5, '', 'kamrul', '1', 'Kamrul stosonari ', '0153698745', '1729900631', 'oliullah51@gmail.com', 'Dhaka', 'img/special-offers-620x620.jpg', 'img/nasrullah.jpg', 1, 1),
(6, '', 'saiful123', '1', 'saiful123', 'OLiullah', '1729900631', 'oliullah51@gmail.com', 'sdjfiji', 'img/image.imageformat.lightbox.1564950248.png', 'img/lgaa-project.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(120) NOT NULL,
  `image` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `image`) VALUES
(3, 'Samsung', 'image/3.jpg'),
(5, 'General', 'image/5.jpg'),
(6, 'Apex', 'image/6.png'),
(7, 'Apple', 'image/7.jpg'),
(8, 'Asus', 'image/8.jpg'),
(9, 'Bata', 'image/9.jpg'),
(10, 'BLO', 'image/10.jpg'),
(11, 'Chigo', 'image/11.jpg'),
(12, 'Eastasy', 'image/12.jpg'),
(13, 'FOSSIL', 'image/13.jpg'),
(14, 'FUJIFIL', 'image/14.jpg'),
(15, 'HITACHI', 'image/15.jpg'),
(16, 'HTC', 'image/16.jpg'),
(17, 'ESY MAY', 'image/17.png'),
(18, 'Lenovo', 'image/19.jpg'),
(19, 'Miyako', 'image/20.jpg'),
(20, 'Mycell', 'image/21.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `card_id` int(11) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `dhaka_cost` float NOT NULL,
  `out_dhaka_cost` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(10) NOT NULL,
  `color` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`card_id`, `product_id`, `user_id`, `price`, `dhaka_cost`, `out_dhaka_cost`, `quantity`, `size`, `color`, `status`) VALUES
(26, '78', '4', 200, 0, 0, 1, '', '', 0),
(24, '75', '4', 1250, 0, 0, 2, '', '', 0),
(25, '80', '4', 300, 0, 0, 1, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(26, 'OTHER CATEGORIES'),
(25, 'DRINKS'),
(23, 'FOODS');

-- --------------------------------------------------------

--
-- Table structure for table `category_image`
--

CREATE TABLE `category_image` (
  `cat_image_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `cat_image` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL,
  `color_code` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `compare`
--

CREATE TABLE `compare` (
  `compare_id` int(11) NOT NULL,
  `product_id` varchar(30) NOT NULL,
  `user_id` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `website` varchar(130) NOT NULL,
  `email` varchar(130) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `website`, `email`, `mobile`, `phone`, `tel`, `address`) VALUES
(1, 'bikroymela.com', 'bikroymela@gmail.com', '0183-0020777', '01756-738383', '', 'Shop#107,Nizam shanker Plaza,72,Satmosjid road,Dhanmondi,Dhaka-1205 ');

-- --------------------------------------------------------

--
-- Table structure for table `contact_mail`
--

CREATE TABLE `contact_mail` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE `cost` (
  `id` int(11) NOT NULL,
  `location` varchar(200) CHARACTER SET utf8 NOT NULL,
  `tk` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `fev_id` int(11) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `price` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home_offer`
--

CREATE TABLE `home_offer` (
  `id` int(11) NOT NULL,
  `page` varchar(100) NOT NULL,
  `position` varchar(120) NOT NULL,
  `image` varchar(120) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_offer`
--

INSERT INTO `home_offer` (`id`, `page`, `position`, `image`, `link`) VALUES
(1, 'home', '1', 'home_offer/123.JPG', 'category.php?CategoryView=1'),
(2, 'home', '2', 'home_offer/IMG_4655.JPG', 'category.php?CategoryView=1'),
(3, 'home', '3', 'home_offer/IMG_4672.JPG', 'category.php?CategoryView=1'),
(4, 'home', '4', 'home_offer/IMG_4583.JPG', 'category.php?CategoryView=1'),
(6, 'home', '5', 'home_offer/14.jpg', 'category.php?CategoryView=1');

-- --------------------------------------------------------

--
-- Table structure for table `home_product`
--

CREATE TABLE `home_product` (
  `h_p_id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `product_id` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_product`
--

INSERT INTO `home_product` (`h_p_id`, `category`, `product_id`) VALUES
(1, 3, 'dfedsfdsf');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `image_type` varchar(100) CHARACTER SET utf8 NOT NULL,
  `role_id` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT 'admin or user or Product id',
  `image` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `image2` varchar(120) NOT NULL,
  `image3` varchar(120) NOT NULL,
  `image4` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_id`, `image_type`, `role_id`, `image`, `image2`, `image3`, `image4`) VALUES
(1, 'product', '1', 'image/19968592-Logo-design--Stock-Vector-success.jpg', '', '', ''),
(2, 'product', '2', 'image/c1.jpg', '', '', ''),
(3, 'product', '3', 'image/15.jpg', '', '', ''),
(4, 'product', '4', 'image/10.jpg', '', '', ''),
(5, 'product', '5', 'image/26.jpg', '', '', ''),
(6, 'product', '6', 'image/catalog_detail_image_large.jpg', '', '', ''),
(7, 'product', '7', 'image/images (1).jpg', '', '', ''),
(8, 'product', '8', 'image/ps-green-t1.jpg', '', '', ''),
(9, 'product', '9', 'image/images.jpg', '', '', ''),
(10, 'product', '10', 'image/12785_145935349356fbf795b938d_img_8506_1 (1).jpg', '', '', ''),
(11, 'product', '11', 'image/0019766_black-printed-panjabi-ts210-by-top-style.jpeg', '', '', ''),
(12, 'product', '12', 'image/img_1702.jpg', '', '', ''),
(13, 'product', '13', 'image/0fa7a6f93145df62e4670ee556357e36.jpg', '', '', ''),
(14, 'product', '14', 'image/975f445aaf33b977ab6d1128f547ee5c.jpg', '', '', ''),
(15, 'product', '15', 'image/elegant-black-and-green-traditional-wedding-wears-sari-partywear-saree_331550.jpg', '', '', ''),
(16, 'product', '16', 'image/TSMH3207.jpg', '', '', ''),
(17, 'product', '17', 'image/TSMH3207.jpg', '', '', ''),
(18, 'product', '18', 'image/watch-in-heart.jpg', '', '', ''),
(19, 'product', '19', 'image/double-watch4.jpg', '', '', ''),
(20, 'product', '20', 'image/images.jpg', '', '', ''),
(21, 'product', '21', 'image/Offer1351.jpg', '', '', ''),
(22, 'product', '22', 'image/Offer5037001.jpg', '', '', ''),
(23, 'product', '23', 'image/one+1477384079.jpg', 'image/two+1477384079.jpg', 'image/three+1477384079.jpg', 'image/four+1477384079.jpg'),
(24, 'product', '24', 'image/one+1477383997.jpg', 'image/two+1477383997.jpg', 'image/three+1477383997.jpg', 'image/four+1477383997.jpg'),
(25, 'product', '25', 'image/one+1477373627.jpg', 'image/two+1477373627.jpg', 'image/three+1477373627.jpg', 'image/four+1477373627.jpg'),
(26, 'product', '26', '', 'image/two+1477382003.jpg', 'image/three+1477382003.jpg', 'image/four+1477382003.png'),
(27, 'product', '27', 'image/Men s Casual Button-Down Shirts 1463_LRG.jpg', '', '', ''),
(28, 'product', '28', 'image/one+1477372787.jpg', 'image/two+1477372787.jpg', 'image/three+1477372787.jpg', 'image/four+1477372787.jpg'),
(29, 'product', '29', 'image/one+1477334181.jpg', 'image/two+1477334181.jpg', 'image/three+1477334181.jpg', 'image/four+1477334181.jpg'),
(30, 'product', '29', 'image/Happy-New-Year-Movie-Stills-Shah-Rukh-Khan.jpg', '', '', ''),
(31, 'product', '30', 'image/img.jpg', '', '', ''),
(32, 'product', '31', 'image/_7600657.jpg', '', '', ''),
(33, 'product', '27', 'image/_7600657.jpg', '', '', ''),
(34, 'product', '27', 'image/P17567767.jpg', '', '', ''),
(35, 'product', '27', 'image/roper-men-s-long-sleeve-plaid-button-down-shirt-blue-3.jpg', '', '', ''),
(36, 'product', '32', 'image/3pcs-lot-3-15years-old-High-quality-Brand-Cotton-children-underwear-boys-Brief-boy-boxer-kids.jpg', 'image/1477287672.jpg+three', 'image/1477287672.jpg+four', 'image/1477287672.jpg+five'),
(37, 'product', '33', '', 'image/1477288223.jpg+three', 'image/1477288223.jpg+four', 'image/1477288223.jpg+five'),
(38, 'product', '34', 'image/1477288555.jpg+one', 'image/1477288555.jpg+three', 'image/1477288555.jpg+four', 'image/1477288555.jpg+five'),
(39, 'product', '35', 'image/1477288945.jpg+one', 'image/1477288945.jpg+three', 'image/1477288945.jpg', 'image/1477288945.jpg'),
(40, 'product', '36', 'image/1477289149.jpg+one', 'image/1477289149.jpg+three', 'image/1477289149.jpg', 'image/1477289149.jpg'),
(41, 'product', '37', 'image/1477289347.jpg', 'image/two+1477289347.jpg', 'image/three+1477289347.jpg', 'image/four+1477289347.jpg'),
(42, 'product', '38', 'image/1477329993.jpg', 'image/two+1477329993.jpg', 'image/three+1477329993.jpg', 'image/four+1477329993.jpg'),
(43, 'product', '39', 'image/1477382565.jpg', 'image/two+1477382565.jpg', 'image/three+1477382565.jpg', 'image/four+1477382565.png'),
(44, 'product', '40', 'image/1477384661.jpg', 'image/two+1477384661.jpg', 'image/three+1477384661.jpg', 'image/four+1477384661.jpg'),
(45, 'product', '41', 'image/1477384967.jpg', 'image/two+1477384967.jpg', 'image/three+1477384967.jpg', 'image/four+1477384967.jpg'),
(46, 'product', '42', 'image/1478889978.jpg', 'image/two+1478889978.jpeg', 'image/three+1478889978.jpeg', 'image/four+1478889978.jpg'),
(47, 'product', '43', 'image/1478890607.jpg', 'image/two+1478890607.jpg', 'image/three+1478890607.jpg', 'image/four+1478890607.jpg'),
(48, 'product', '44', 'image/1530195028.JPG', 'image/two+1530195028.JPG', 'image/three+1530195028.JPG', 'image/four+1530195028.JPG'),
(49, 'product', '45', 'image/1530359071.jpg', 'image/two+1530359071.jpg', 'image/three+1530359071.jpg', 'image/four+1530359071.jpg'),
(50, 'product', '46', 'image/1530519957.jpg', 'image/two+1530519957.jpg', 'image/three+1530519957.jpg', 'image/four+1530519957.jpg'),
(51, 'product', '47', 'image/1530520808.jpg', 'image/two+1530520808.jpg', 'image/three+1530520808.jpg', 'image/four+1530520808.jpg'),
(52, 'product', '48', 'image/1530520986.jpg', 'image/two+1530520986.jpg', 'image/three+1530520986.jpg', 'image/four+1530520986.jpg'),
(53, 'product', '49', 'image/1530521161.jpg', 'image/two+1530521161.jpg', 'image/three+1530521161.jpg', 'image/four+1530521161.jpg'),
(54, 'product', '50', 'image/1530521935.jpg', 'image/two+1530521935.jpg', 'image/three+1530521935.jpg', 'image/four+1530521935.jpg'),
(55, 'product', '51', 'image/1530522271.jpg', 'image/two+1530522271.jpg', 'image/three+1530522271.jpg', 'image/four+1530522271.jpg'),
(56, 'product', '52', 'image/1530522453.jpg', 'image/two+1530522453.jpg', 'image/three+1530522453.jpg', 'image/four+1530522453.jpg'),
(57, 'product', '53', 'image/1530522644.jpg', 'image/two+1530522644.jpg', 'image/three+1530522644.jpg', 'image/four+1530522644.jpg'),
(58, 'product', '54', 'image/1530522802.jpg', 'image/two+1530522802.jpg', 'image/three+1530522802.jpg', 'image/four+1530522802.jpg'),
(59, 'product', '55', 'image/1530522886.jpg', 'image/two+1530522886.jpg', 'image/three+1530522886.jpg', 'image/four+1530522886.jpg'),
(60, 'product', '60', 'image/one+1530536552.jpg', 'image/two+1530536552.jpg', 'image/three+1530536552.jpg', 'image/four+1530536552.jpg'),
(61, 'product', '57', 'image/1530523189.jpg', 'image/two+1530523189.jpg', 'image/three+1530523189.jpg', 'image/four+1530523189.jpg'),
(62, 'product', '58', 'image/1530523455.jpg', 'image/two+1530523455.jpg', 'image/three+1530523455.jpg', 'image/four+1530523455.jpg'),
(63, 'product', '63', 'image/one+1530536437.jpg', 'image/two+1530536437.jpg', 'image/three+1530536437.jpg', 'image/four+1530536437.jpg'),
(64, 'product', '64', 'image/one+1530536479.jpg', 'image/two+1530536479.jpg', 'image/three+1530536479.jpg', 'image/four+1530536479.jpg'),
(65, 'product', '61', 'image/1530529781.jpg', 'image/two+1530529781.jpg', 'image/three+1530529781.jpg', 'image/four+1530529781.jpg'),
(66, 'product', '62', 'image/1530530037.jpg', 'image/two+1530530037.jpg', 'image/three+1530530037.jpg', 'image/four+1530530037.jpg'),
(67, 'product', '67', 'image/one+1530536381.jpg', 'image/two+1530536381.jpg', 'image/three+1530536381.jpg', 'image/four+1530536381.jpg'),
(68, 'product', '68', 'image/one+1530536408.png', 'image/two+1530536408.png', 'image/three+1530536408.png', 'image/four+1530536408.png'),
(69, 'product', '65', 'image/1530530536.jpg', 'image/two+1530530536.jpg', 'image/three+1530530536.jpg', 'image/four+1530530536.jpg'),
(70, 'product', '66', 'image/1530531804.jpg', 'image/two+1530531804.jpg', 'image/three+1530531805.jpg', 'image/four+1530531805.jpg'),
(71, 'product', '71', 'image/one+1530536282.jpg', 'image/two+1530536282.jpg', 'image/three+1530536282.jpg', 'image/four+1530536282.jpg'),
(72, 'product', '72', 'image/one+1530536333.jpg', 'image/two+1530536333.jpg', 'image/three+1530536333.jpg', 'image/four+1530536333.jpg'),
(73, 'product', '69', 'image/1530532216.jpg', 'image/two+1530532216.jpg', 'image/three+1530532216.jpg', 'image/four+1530532216.jpg'),
(74, 'product', '70', 'image/1530532600.jpg', 'image/two+1530532600.jpg', 'image/three+1530532600.jpg', 'image/four+1530532600.jpg'),
(75, 'product', '75', 'image/one+1530535621.jpg', 'image/two+1530535621.jpg', 'image/three+1530535621.jpg', 'image/four+1530535621.jpg'),
(76, 'product', '76', 'image/one+1530535591.png', 'image/two+1530535591.png', 'image/three+1530535591.png', 'image/four+1530535591.png'),
(77, 'product', '73', 'image/1530533989.jpg', 'image/two+1530533989.jpg', 'image/three+1530533989.jpg', 'image/four+1530533989.jpg'),
(78, 'product', '74', 'image/1530534179.jpg', 'image/two+1530534179.jpg', 'image/three+1530534179.jpg', 'image/four+1530534179.jpg'),
(79, 'product', '79', 'image/one+1530596783.jpg', 'image/two+1530596783.jpg', 'image/three+1530596783.jpg', 'image/four+1530596783.jpg'),
(80, 'product', '76', 'image/1530535270.jpg', 'image/two+1530535270.jpg', 'image/three+1530535270.jpg', 'image/four+1530535270.jpg'),
(81, 'product', '77', 'image/1530535392.jpg', 'image/two+1530535392.jpg', 'image/three+1530535392.jpg', 'image/four+1530535392.jpg'),
(82, 'product', '78', 'image/1530535516.jpg', 'image/two+1530535516.jpg', 'image/three+1530535516.jpg', 'image/four+1530535516.jpg'),
(83, 'product', '83', 'image/one+1530596714.jpg', 'image/two+1530596714.jpg', 'image/three+1530596714.jpg', 'image/four+1530596714.jpg'),
(84, 'product', '80', 'image/1530536047.jpg', 'image/two+1530536047.jpg', 'image/three+1530536047.jpg', 'image/four+1530536047.jpg'),
(85, 'product', '81', 'image/1530588013.jpg', 'image/two+1530588013.jpg', 'image/three+1530588013.jpg', 'image/four+1530588013.jpg'),
(86, 'product', '82', 'image/1530588105.jpg', 'image/two+1530588105.jpg', 'image/three+1530588105.jpg', 'image/four+1530588105.jpg'),
(87, 'product', '87', 'image/one+1530594460.jpg', 'image/two+1530594460.jpg', 'image/three+1530594460.jpg', 'image/four+1530594460.jpg'),
(88, 'product', '84', 'image/1530588330.jpg', 'image/two+1530588330.jpg', 'image/three+1530588330.jpg', 'image/four+1530588330.jpg'),
(89, 'product', '85', 'image/1530588499.jpg', 'image/two+1530588499.jpg', 'image/three+1530588499.jpg', 'image/four+1530588499.jpg'),
(90, 'product', '86', 'image/1530588648.jpg', 'image/two+1530588648.jpg', 'image/three+1530588648.jpg', 'image/four+1530588648.jpg'),
(91, 'product', '87', 'image/1530589052.jpg', 'image/two+1530589052.jpg', 'image/three+1530589052.jpg', 'image/four+1530589052.jpg'),
(92, 'product', '88', 'image/1530594200.jpg', 'image/two+1530594200.jpg', 'image/three+1530594200.jpg', 'image/four+1530594200.jpg'),
(93, 'product', '89', 'image/1530594363.jpg', 'image/two+1530594363.jpg', 'image/three+1530594363.jpg', 'image/four+1530594363.jpg'),
(94, 'product', '90', 'image/1530595097.jpg', 'image/two+1530595097.jpg', 'image/three+1530595097.jpg', 'image/four+1530595097.jpg'),
(95, 'product', '91', 'image/1530595726.jpg', 'image/two+1530595726.jpg', 'image/three+1530595726.jpg', 'image/four+1530595726.jpg'),
(96, 'product', '92', 'image/1530595862.jpg', 'image/two+1530595862.jpg', 'image/three+1530595862.jpg', 'image/four+1530595862.jpg'),
(97, 'product', '93', 'image/1530596001.jpg', 'image/two+1530596001.jpg', 'image/three+1530596001.jpg', 'image/four+1530596001.jpg'),
(98, 'product', '94', 'image/1530596299.jpg', 'image/two+1530596299.jpg', 'image/three+1530596299.jpg', 'image/four+1530596299.jpg'),
(99, 'product', '95', 'image/1530596518.jpg', 'image/two+1530596518.jpg', 'image/three+1530596518.jpg', 'image/four+1530596518.jpg'),
(100, 'product', '96', 'image/1530596683.jpg', 'image/two+1530596683.jpg', 'image/three+1530596684.jpg', 'image/four+1530596684.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `image_type`
--

CREATE TABLE `image_type` (
  `image_type_id` int(11) NOT NULL,
  `image_type` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `left_offer`
--

CREATE TABLE `left_offer` (
  `id` int(11) NOT NULL,
  `link` varchar(200) NOT NULL,
  `image` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `left_offer`
--

INSERT INTO `left_offer` (`id`, `link`, `image`) VALUES
(4, '', 'offer_image/h1.jpg'),
(5, 'product_view.php?product_id=17', 'offer_image/TSMH3207.jpg'),
(6, '', 'offer_image/BPMED00003_1-medela-swing-breast-pump.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `marsentaiger`
--

CREATE TABLE `marsentaiger` (
  `mar_id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(130) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(250) NOT NULL,
  `image` varchar(120) NOT NULL,
  `conform` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `option`
--

CREATE TABLE `option` (
  `option_id` int(11) NOT NULL,
  `option_group_id` varchar(100) NOT NULL,
  `option` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `option_group`
--

CREATE TABLE `option_group` (
  `opt_group_id` int(11) NOT NULL,
  `opt_group_name` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_compare`
--

CREATE TABLE `order_compare` (
  `order_com_id` int(11) NOT NULL,
  `order_id` varchar(80) NOT NULL,
  `product_id` varchar(80) NOT NULL,
  `user_id` varchar(80) NOT NULL,
  `com_date` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `compleated` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_compare`
--

INSERT INTO `order_compare` (`order_com_id`, `order_id`, `product_id`, `user_id`, `com_date`, `price`, `compleated`) VALUES
(1, '1', '1', '', '', '', ''),
(2, '1', '', '', '', '', ''),
(3, '7', '10', '', '', '', ''),
(4, '7', '7', '', '', '', ''),
(5, '4', '25', '', '', '', ''),
(6, '13', '8', '', '', '', ''),
(7, '1', '30', '', '', '', ''),
(8, '6', '31', '', '', '', ''),
(9, '9', '24', '', '', '', ''),
(10, '10', '31', '1', '', '', ''),
(11, '11', '31', '1', '', '', ''),
(12, '13', '30', '5', '', '', ''),
(13, '16', '31', '1', '', '', ''),
(14, '16', '18', '1', '', '', ''),
(15, '16', '43', '1', '', '', ''),
(16, '17', '20', '1', '', '', ''),
(17, '17', '15', '1', '', '', ''),
(18, '18', '43', '4', '', '', ''),
(19, '18', '42', '4', '', '', ''),
(20, '18', '30', '4', '', '', ''),
(21, '14', '31', '1', '', '', ''),
(22, '14', '18', '1', '', '', ''),
(23, '19', '49', '4', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `product_id` varchar(10000) NOT NULL,
  `order_date` varchar(50) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(120) NOT NULL,
  `city` varchar(20) NOT NULL,
  `post_code` varchar(20) NOT NULL,
  `total_price` double NOT NULL,
  `delivery_cost` double NOT NULL,
  `quantity` varchar(1000) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `plug` int(11) NOT NULL,
  `order_cancel` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `product_id`, `order_date`, `first_name`, `last_name`, `email`, `mobile`, `phone`, `address`, `country`, `city`, `post_code`, `total_price`, `delivery_cost`, `quantity`, `user_id`, `plug`, `order_cancel`) VALUES
(1, '30--', '2016-07-01', 'fsfs', '', 'nazmulfci', '999', '', 'sdsfdfs', '', 'fdsf', '', 1500, 0, '1', '1', 1, 0),
(2, '18--30--12--19--38--', '2016-10-24', 'OLiullah', '', 'oliullah51@gmail.com', '1729900631', '', 'Dhaka', '', 'Dhaka', '', 3850, 0, '1', '1', 1, 0),
(3, '31--', '2016-10-24', 'sasdasdas', '', 'sshjm@yahoo.com', 'asda', '', 'asdasd', '', 'asdasd', '', 5000, 0, '1', '1', 1, 0),
(4, '31--', '2016-10-25', 'Oliullah', '', 'oliullah51@gmail.com', '1729900631', '', 'Dhaka', '', 'Dhaka', '', 5000, 0, '1', '1', 1, 0),
(5, '30--9--', '2016-10-25', 'OLiullah', '', 'oliullah51@gmail.com', '1729900631', '', 'Dhaka', '', 'Dhaka', '', 3080, 0, '1', '1', 1, 0),
(6, '31--', '2016-10-25', 'OLiullah', '', 'oliullah51@gmail.com', '1729900631', '', 'Dhaka', '', 'Dhaka', '', 5000, 0, '1', '1', 1, 0),
(7, '40--', '2016-10-25', 'OLiullah', '', 'oliullah51@gmail.com', '1729900631', '', 'Dhaka', '', 'Dhaka', '', 850, 0, '1', '1', 1, 0),
(8, '30--', '2016-11-11', 'Oliullah', '', 'moliullah51@yahoo.com', '01554548780', '', 'f', '', 'f', '', 3000, 0, '2', '1', 1, 1),
(9, '24--', '2016-11-11', 'Oliullah', '', 'moliullah51@yahoo.com', '01554548780', '', 'eeee', '', 'f', '', 600, 0, '2', '1', 1, 1),
(10, '31--23--24--', '2016-11-11', 'sofiq', '', 'admin@gmail.com', '01554548780', '', 'f', '', 'f', '', 5900, 0, '1', '1', 1, 0),
(11, '31--42--', '2016-11-23', 'sopon', '', 'sopon@gmail.com', '0144878784544', '', 'Dhaka ', '', 'Dhaka', '', 13000, 0, '1--2--', '1', 1, 0),
(12, '12--42--', '2016-11-23', 'soponddf', '', 'moliullah51@yahoo.com', 'df', '', 'dfsf', '', '', '', 8900, 0, '1--2--', '1', 1, 0),
(13, '30--42--', '2018-02-17', 'sdfdsf', '', 'moliullah631@gmail.com', '343434', '', 'sdfdsf', '', 'sdf', '', 3500, 0, '1--1--', '5', 1, 0),
(14, '31--18--43--', '2018-06-30', 'Noman', 'Islam', 'ziarul@gmail.com', '017299900361', '', 'Mohammadpur', 'Bangladesh', 'Feni', '7800', 8500, 0, '1--1--1--', '1', 1, 1),
(15, '31--18--43--', '2018-06-30', 'Noman', 'Islam', 'moliullah510@yahoo.com', '017299900361', '', 'Mohammadpur', 'Bangladesh', 'Feni', '7800', 8500, 0, '1--1--1--', '1', 1, 1),
(16, '31--18--43--', '2018-06-30', 'Noman', 'Islam', 'moliullah510@yahoo.com', '017299900361', '', 'Mohammadpur', 'Bangladesh', 'Feni', '7800', 8500, 0, '1--1--1--', '1', 1, 0),
(17, '20--15--', '2018-06-30', 'OLi', 'ullah', 'oliullah631@gmail.com', '01879450780', '', 'Barguna , 3 nog fuljori union , shaheber hola , post -7800 ', 'Bangladesh', 'Barguna', '7800', 6500, 0, '1', '1', 1, 0),
(18, '43--42--30--', '2018-07-01', 'dawn', 'merajul', 'dawnmerajul@gmail.com', '0175083084', '', 'dhaka,bangladesh', 'dhaka', 'dhaka', '5689', 5700, 0, '1', '4', 1, 0),
(19, '49--', '2018-07-02', 'kayum', 'billa', 'billa@gmail.com', '0142566', '', '4dl bangladesh', 'dhaka', 'Dhaka', '1100', 180, 0, '1', '4', 1, 0),
(20, '48--', '2018-07-02', 'as', 'fd', 'dawn@gmail.com', '145', '', 'dfgdf', 'dgf', 'dsfs', '1100', 450, 0, '3', '4', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` varchar(120) NOT NULL,
  `sub_category_id` varchar(50) NOT NULL,
  `brand_id` varchar(120) NOT NULL,
  `third_id` varchar(50) NOT NULL,
  `product_name` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `price` varchar(15) NOT NULL,
  `buy_price` varchar(120) NOT NULL,
  `pro_short_description` varchar(10000) CHARACTER SET utf8 NOT NULL,
  `pro_long_description` varchar(10000) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(120) CHARACTER SET utf8 NOT NULL,
  `color` varchar(100) CHARACTER SET utf8 NOT NULL,
  `size` varchar(120) CHARACTER SET utf8 NOT NULL,
  `product_localion` varchar(120) NOT NULL,
  `dhaka_cost` double NOT NULL,
  `out_dhaka_cost` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `marsent_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `sub_category_id`, `brand_id`, `third_id`, `product_name`, `price`, `buy_price`, `pro_short_description`, `pro_long_description`, `gender`, `age`, `color`, `size`, `product_localion`, `dhaka_cost`, `out_dhaka_cost`, `quantity`, `marsent_id`) VALUES
(60, '23', '23', '', '', 'Chicken Hot Wings', '220', '220', ' good', ' good', '', '', '1', 'Large', '', 0, 0, 6, 1),
(61, '23', '23', '', '', 'Fried Wonton', '150', '150', 'Good Foods', 'Good Foods', '', '', '2', 'Large', '', 0, 0, 6, 1),
(62, '23', '23', '', '', 'Prawn Toast', '180', '180', 'Good Foods', 'Good Foods', '', '', '3', 'Large', '', 0, 0, 4, 1),
(63, '23', '24', '', '', 'Thai Soup', '150', '150', ' Good Foods', ' Good Foods', '', '', '11', 'Large', '', 0, 0, 1, 1),
(64, '23', '24', '', '', 'Corn Soup', '120', '120', ' Good Foods', ' Good Foods', '', '', '12', 'Large', '', 0, 0, 1, 1),
(65, '23', '24', '', '', 'Cream of Musrum Soup', '200', '200', 'Good Foods', 'Good Foods', '', '', '13', 'Large', '', 0, 0, 1, 1),
(66, '23', '26', '', '', 'Chicken Fried Rice', '250', '250', 'Good Foods', 'Good Foods', '', '', '16', 'Lare', '', 0, 0, 1, 1),
(67, '23', '26', '', '', 'Fried Chicken', '250', '250', ' Good Foods', ' Good Foods', '', '', '16', 'Large', '', 0, 0, 1, 1),
(68, '23', '26', '', '', 'Szechuan Beef', '250', '250', ' Good Foods', ' Good Foods', '', '', '16', 'Large', '', 0, 0, 1, 1),
(69, '23', '27', '', '', 'Chicken Fried Rice', '240', '240', 'Good Foods', 'Good Foods', '', '', '17', 'Large', '', 0, 0, 1, 1),
(70, '23', '28', '', '', 'Chicken Fried Rice Hot & Spice Curry(Beef/Chicken)', '200', '200', 'Good Foods', 'Good Foods', '', '', '18', 'Large', '', 0, 0, 1, 1),
(71, '23', '29', '', '', 'Chicken Fried Rice Sweet & Sour(Chicken/Beef)', '225', '225', '  Good Foods', '  Good Foods', '', '', '19', 'Large', '', 0, 0, 1, 1),
(72, '23', '30', '', '', 'Chicken Fried Rice Beef Chilli & Chicken Chilli', '270', '270', ' Good Foods', ' Good Foods', '', '', '20', 'Large', '', 0, 0, 1, 1),
(73, '23', '31', '', '', 'Prawn Fried Rice Chicken/Beef Chilli', '200', '200', 'Good Foods', 'Good Foods', '', '', '21', 'Large', '', 0, 0, 1, 1),
(74, '23', '32', '', '', 'Chicken Fried Rice Beef/Chicken Basil Leaf', '200', '200', 'Good Foods', 'Good Foods', '', '', '22', 'Large', '', 0, 0, 1, 1),
(75, '23', '33', '', '', 'Thai Soup, Wonton, Chicken Fried Rice, Chicken/ Beef Masala, Mixed Vegatable, Fried Prawn, Green Mixed Salad', '1250', '1250', ' Good Foods', ' Good Foods', '', '', '23', 'Large', '', 0, 0, 1, 1),
(76, '23', '34', '', '', 'Szechuan Soup, Fish Chips, Szechuan Mixed Fried Rice, Szechuan Fried Chicken, Vegetable, Chicken Salad', '1450', '1450', ' Good Foods', ' Good Foods', '', '', '24', 'Large', '', 0, 0, 1, 1),
(77, '23', '35', '', '', 'Coconut/ Tom Yum Soup', '1650', '1650', 'Good Foods', 'Good Foods', '', '', '25', 'Large', '', 0, 0, 1, 1),
(78, '23', '36', '', '', 'Mazeda Special Noodles', '200', '200', 'Good Foods', 'Good Foods', '', '', '26', 'Large', '', 0, 0, 1, 1),
(79, '23', '37', '', '', 'Mazeda Special pizza 6 Inch', '550', '550', ' Good Foods', ' Good Foods', '', '', '32', 'Large', '', 0, 0, 1, 1),
(80, '23', '41', '', '', 'Pasta Alfredo (Beef / Chicken) Baked', '300/270', '300/270', 'Good Foods', 'Good Foods', '', '', '37', 'Large', '', 0, 0, 1, 1),
(81, '25', '42', '', '', 'Cappuccino', '130', '130', 'Good Foods', 'Good Foods', '', '', '1', 'Small', '', 0, 0, 1, 1),
(82, '25', '42', '', '', 'Cafe Latte', '150', '150', 'Good Foods', 'Good Foods', '', '', '1', 'Small', '', 0, 0, 1, 1),
(83, '25', '42', '', '', 'Cafe Mocha', '180', '180', ' Good Foods', ' Good Foods', '', '', '1', 'Small', '', 0, 0, 1, 1),
(84, '25', '42', '', '', 'Dark Hot Chocolate', '150', '150', 'Good Foods', 'Good Foods', '', '', '1', 'Small', '', 0, 0, 1, 1),
(85, '25', '45', '', '', 'Regular Ice Coffee', '150', '150', 'Good Foods', 'Good Foods', '', '', '5', 'Small', '', 0, 0, 1, 1),
(86, '25', '42', '', '', 'Chocolate Milk Shake', '220', '220', 'Good Foods', 'Good Foods', '', '', '1', 'Small', '', 0, 0, 1, 1),
(87, '25', '47', '', '', 'Special Chocolate Milk Shake', '275', '275', ' Good Foods', ' Good Foods', '', '', '1', 'Small', '', 0, 0, 1, 1),
(88, '25', '48', '', '', 'Mango Smoothies', '200', '200', 'Good Foods', 'Good Foods', '', '', '1', 'Small', '', 0, 0, 1, 1),
(89, '25', '49', '', '', 'Hazelnut Mocha Chiller', '300', '300', ' Good Foods', ' Good Foods', '', '', '1', 'Small', '', 0, 0, 1, 1),
(90, '25', '50', '', '', 'Strawberry Mojito', '220', '220', 'Good Foods', 'Good Foods', '', '', '1', 'Small', '', 0, 0, 1, 1),
(91, '25', '51', '', '', 'Sweet Lassi', '130', '130', 'Good Foods', 'Good Foods', '', '', '1', 'Small', '', 0, 0, 1, 1),
(92, '25', '52', '', '', 'Soda Blast', '150', '150', 'Good Foods', 'Good Foods', '', '', '1', 'Small', '', 0, 0, 150, 1),
(93, '25', '53', '', '', 'Fluda', '180', '180', 'Good Foods', 'Good Foods', '', '', '1', 'Small', '', 0, 0, 1, 1),
(94, '26', '55', '', '', 'Seasonal Juice', '140', '140', 'Good Juice', 'Good Juice', '', '', '1', 'Small', '', 0, 0, 1, 1),
(95, '26', '55', '', '', 'Soft Drinks', '25', '25', 'Good Drinks', 'Good Drinks', '', '', '2', 'Small', '', 0, 0, 1, 1),
(96, '26', '55', '', '', 'Mineral Water', '20/30', '20/30', 'Good Water', 'Good Water', '', '', '3', 'Small', '', 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `first_name` varchar(120) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `profetion` varchar(120) NOT NULL,
  `address` text NOT NULL,
  `profile_person` varchar(120) NOT NULL,
  `image` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_image` varchar(500) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_image`, `link`) VALUES
(1, 'image/slider_image/full-hd-wallpaper-food-65.jpg', 'bikroy mela '),
(2, 'image/slider_image/bg_5.jpg', 'bikroy mela latest product'),
(3, 'image/slider_image/full-hd-wallpaper-food-2.jpg', 'Fashion'),
(4, 'image/slider_image/0065a2a2780112144f7bddf067e8a221.jpg', 'Best iteam');

-- --------------------------------------------------------

--
-- Table structure for table `step_offer`
--

CREATE TABLE `step_offer` (
  `id` int(11) NOT NULL,
  `one` varchar(100) NOT NULL,
  `two` varchar(120) NOT NULL,
  `three` varchar(100) NOT NULL,
  `four` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category_table`
--

CREATE TABLE `sub_category_table` (
  `sub_category_id` int(11) NOT NULL,
  `category_id` varchar(100) NOT NULL,
  `sub_category_name` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category_table`
--

INSERT INTO `sub_category_table` (`sub_category_id`, `category_id`, `sub_category_name`) VALUES
(32, '23', 'SET MENU-G'),
(31, '23', 'SET MENU-F'),
(30, '23', 'SET MENU-E'),
(29, '23', 'SET MENU-D'),
(24, '23', 'SOUP'),
(23, '23', 'APPETIZERS'),
(25, '23', 'SALAD'),
(26, '23', 'SET MENU-A'),
(27, '23', 'SET MENU-B'),
(28, '23', 'SET MENU-C'),
(33, '23', 'FAMILY PACKAGE-A'),
(34, '23', 'FAMILY PACKAGE-B'),
(35, '23', 'FAMILY PACKAGE-C'),
(36, '23', 'CHOWMEIN'),
(37, '23', 'ITALIAN-PIZZA'),
(38, '23', 'STEAK'),
(39, '23', 'SIZZLING DISH'),
(40, '23', 'BURGER & SUB'),
(41, '23', 'PASTA'),
(42, '25', 'Regular Coffee'),
(43, '25', 'Coffee Special'),
(44, '25', 'Hot Chocolate'),
(45, '25', 'ICE Coffe Item'),
(46, '25', 'Milky Juice'),
(47, '25', 'Milky Juice Special'),
(48, '25', 'Fruity Freeze'),
(49, '25', 'Chiller'),
(50, '25', 'Mocktail'),
(51, '25', 'Lassi'),
(52, '25', 'Soda Blast'),
(53, '25', 'Dessert Sladica'),
(54, '25', 'Soft Drinks'),
(55, '26', 'Soft Drinks');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category_table1`
--

CREATE TABLE `sub_category_table1` (
  `sub_category_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `thard_category`
--

CREATE TABLE `thard_category` (
  `thard_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `thard_name` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thard_category`
--

INSERT INTO `thard_category` (`thard_id`, `category_id`, `sub_id`, `thard_name`) VALUES
(1, 1, 1, 'shirt aroung'),
(2, 2, 2, 'prnt short'),
(3, 3, 8, 'toye T'),
(4, 4, 16, 'Sumsung j2'),
(5, 1, 1, 'Shirt T-shart'),
(6, 3, 18, 'à¦¶à¦¿à¦¶à§ à¦®à§‡à§Ÿà§‡ '),
(7, 3, 19, 'à¦¶à¦¿à¦¶à§ à¦›à§‡à¦²à§‡');

-- --------------------------------------------------------

--
-- Table structure for table `today_offer`
--

CREATE TABLE `today_offer` (
  `id` int(11) NOT NULL,
  `today` varchar(120) NOT NULL,
  `new` varchar(130) NOT NULL,
  `decount` varchar(520) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `district` varchar(120) NOT NULL,
  `address` varchar(300) NOT NULL,
  `image` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `user_name`, `password`, `email`, `phone`, `district`, `address`, `image`) VALUES
(1, 'OLiullah', '123', 'moliullah51@yahoo.com', '017299900361', '', '', ''),
(2, 'Arif', '123', 'arif@gmail.colm', '01728989000', '', '', ''),
(4, 'merajulislam', '12345', 'dawnmerajul@gmail.com', '0175083084', '', '', ''),
(5, 'Imon', '1234', 'amkefat@gmail.com', '01712863759', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`add_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `Drinks` (`category_id`);

--
-- Indexes for table `category_image`
--
ALTER TABLE `category_image`
  ADD PRIMARY KEY (`cat_image_id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `compare`
--
ALTER TABLE `compare`
  ADD PRIMARY KEY (`compare_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_mail`
--
ALTER TABLE `contact_mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cost`
--
ALTER TABLE `cost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`fev_id`);

--
-- Indexes for table `home_offer`
--
ALTER TABLE `home_offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_product`
--
ALTER TABLE `home_product`
  ADD PRIMARY KEY (`h_p_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `image_type`
--
ALTER TABLE `image_type`
  ADD PRIMARY KEY (`image_type_id`);

--
-- Indexes for table `left_offer`
--
ALTER TABLE `left_offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marsentaiger`
--
ALTER TABLE `marsentaiger`
  ADD PRIMARY KEY (`mar_id`);

--
-- Indexes for table `option`
--
ALTER TABLE `option`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `option_group`
--
ALTER TABLE `option_group`
  ADD PRIMARY KEY (`opt_group_id`);

--
-- Indexes for table `order_compare`
--
ALTER TABLE `order_compare`
  ADD PRIMARY KEY (`order_com_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `step_offer`
--
ALTER TABLE `step_offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category_table`
--
ALTER TABLE `sub_category_table`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- Indexes for table `sub_category_table1`
--
ALTER TABLE `sub_category_table1`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- Indexes for table `thard_category`
--
ALTER TABLE `thard_category`
  ADD PRIMARY KEY (`thard_id`);

--
-- Indexes for table `today_offer`
--
ALTER TABLE `today_offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `add_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `category_image`
--
ALTER TABLE `category_image`
  MODIFY `cat_image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `compare`
--
ALTER TABLE `compare`
  MODIFY `compare_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_mail`
--
ALTER TABLE `contact_mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cost`
--
ALTER TABLE `cost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `fev_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_offer`
--
ALTER TABLE `home_offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `home_product`
--
ALTER TABLE `home_product`
  MODIFY `h_p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `image_type`
--
ALTER TABLE `image_type`
  MODIFY `image_type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `left_offer`
--
ALTER TABLE `left_offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `marsentaiger`
--
ALTER TABLE `marsentaiger`
  MODIFY `mar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `option`
--
ALTER TABLE `option`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `option_group`
--
ALTER TABLE `option_group`
  MODIFY `opt_group_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_compare`
--
ALTER TABLE `order_compare`
  MODIFY `order_com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `step_offer`
--
ALTER TABLE `step_offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_category_table`
--
ALTER TABLE `sub_category_table`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `sub_category_table1`
--
ALTER TABLE `sub_category_table1`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thard_category`
--
ALTER TABLE `thard_category`
  MODIFY `thard_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `today_offer`
--
ALTER TABLE `today_offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
