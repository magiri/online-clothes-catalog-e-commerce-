-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2016 at 11:37 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faithknits`
--

-- --------------------------------------------------------

--
-- Table structure for table `being_edited`
--

CREATE TABLE `being_edited` (
  `id` int(4) NOT NULL,
  `data` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `being_edited`
--

INSERT INTO `being_edited` (`id`, `data`, `date`) VALUES
(2, '0', '2015-06-27 15:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `cart_data`
--

CREATE TABLE `cart_data` (
  `cart_data_id` int(11) NOT NULL,
  `cart_data_user_fk` int(11) NOT NULL DEFAULT '0',
  `cart_data_array` text NOT NULL,
  `cart_data_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cart_data_readonly_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `top` tinyint(1) NOT NULL,
  `column` int(3) NOT NULL,
  `sort_order` int(3) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `image`, `parent_id`, `top`, `column`, `sort_order`, `status`, `date_added`, `date_modified`, `name`, `description`, `meta_description`, `meta_keyword`, `meta_title`) VALUES
(87, '', 0, 0, 0, 0, 1, '2015-06-04 15:17:40', '2015-06-04 02:17:40', 'School Sweater', '<p>One of our products</p>', 'faithnits', 'faith nits', 'faith nits'),
(91, 'image', 0, 0, 0, 0, 1, '2015-06-07 05:54:43', '2015-06-07 05:54:43', 'Home Sweaters', '<p>Home Sweaters</p>', 'faithnits', 'faith nits', 'faith nits'),
(92, 'image', 0, 0, 0, 0, 1, '2015-06-13 05:16:33', '2015-06-13 05:16:33', 'School Skirts', 'Driven by heartbreak, Love, Lost dreams and Passion for Art I picked up \r\n        a brush. One Drop of paint at time, Numerous Stains on my clothes sleepless \r\n        night Paint smelling house One canvas after another i painted all my creativity,\r\n        pain, the beauty around me and other things. Still painting...........', 'faithnits', 'faith nits', 'faith nits'),
(89, 'image', 0, 0, 0, 0, 1, '2015-06-07 05:53:24', '2015-06-07 05:53:24', 'Scarf', '<p>Scarf</p>', 'faithnits', 'faith nits', 'faith nits'),
(90, 'image', 0, 0, 0, 0, 1, '2015-06-07 05:54:07', '2015-06-07 05:54:07', 'School Shirts', '<p>School Shirts</p>', 'faithnits', 'faith nits', 'faith nits'),
(86, '', 0, 0, 0, 0, 1, '2015-06-04 15:16:25', '2015-06-04 02:18:21', 'School Skirts', '<p>These are school Sweeters Can Be customized and also put logos</p>', 'faithnits', 'faith nits', 'faith nits'),
(93, 'image', 0, 0, 0, 0, 1, '2015-06-13 05:17:04', '2015-10-15 04:11:37', 'Blankets', 'varing from different sizes and strengths with corresponding prices', 'faithnits', 'faith nits', 'faith nits'),
(94, NULL, 0, 0, 0, 0, 1, '2015-06-27 01:37:52', '2015-06-27 04:53:03', 'Socks', 'Driven by heartbreak, Love, Lost dreams and Passion for Art I picked up \r\n        a brush. One Drop of paint at time, Numerous Stains on my clothes sleepless \r\n        night Paint smelling house One canvas after another i painted all my creativity,\r\n        pain, the beauty around me and other things. Still painting...........', 'faithnits', 'faith nits', 'faith nits'),
(95, NULL, 90, 0, 0, 0, 1, '2015-06-29 07:51:51', '2015-06-29 07:51:51', 'L M School Shirt', 'L M for Faithknits Produced.', 'faithnits', 'faith nits', 'faith nits'),
(96, NULL, 90, 0, 0, 0, 1, '2015-06-29 07:52:58', '2015-06-29 07:52:58', 'S L School Shirts', 'S L for School Life Brand', 'faithnits', 'faith nits', 'faith nits');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('9bc25232e6b173b05c5c26d340338081', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0', 1476269718, 'a:7:{s:9:"user_data";s:0:"";s:9:"last_page";s:0:"";s:8:"identity";s:14:"demo@admin.com";s:8:"username";s:9:"demo user";s:5:"email";s:14:"demo@admin.com";s:7:"user_id";s:1:"9";s:14:"old_last_login";s:10:"1476270661";}');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `first_email` text NOT NULL,
  `second_email` text NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `other_phones` text NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `full_name`, `first_email`, `second_email`, `phone_number`, `other_phones`, `location`) VALUES
(1, 'Faith Knits', 'faithknitskenya@gmail.com', 'loisemworia@gmail.com', '0712594504', '0712594504', 'Thika');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `names` text NOT NULL,
  `email` text NOT NULL,
  `phone_number` text NOT NULL,
  `message` text NOT NULL,
  `service_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `names`, `email`, `phone_number`, `message`, `service_id`) VALUES
(1, 'Martin', 'smartinpoet@gmail.com', '0717436112', 'smartin', 10),
(2, 'Martin', 'smartinpoet@gmail.com', '0717436112', 'smartin', 10);

-- --------------------------------------------------------

--
-- Table structure for table `fn_category_description`
--

CREATE TABLE `fn_category_description` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fn_images`
--

CREATE TABLE `fn_images` (
  `id` int(11) NOT NULL,
  `url` varchar(250) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fn_images`
--

INSERT INTO `fn_images` (`id`, `url`, `title`, `category_id`, `priority`) VALUES
(1, 'c2390-hd-background-5.jpg', '', NULL, 4),
(2, '2eaa7-images--1-.jpg', 'Green yellow', NULL, 5),
(13, '72834-IMG-20150701-WA0009.jpg', 'marlon\n', NULL, 3),
(5, '8665b-images--6-.jpg', '', NULL, 6),
(12, 'bce5c-IMG-20150701-WA0010.jpg', 'navy blue', NULL, 2),
(7, '7c69b-download.jpg', '', NULL, 7),
(8, '90c8f-download--1-.jpg', '', NULL, 8),
(9, 'f14e4-images.jpg', 'mixed grey blck red white', NULL, 9),
(10, '6a44c-images--4-.jpg', 'mixed grey', NULL, 10),
(11, 'e7e33-images--2-.jpg', 'marlon', NULL, 11),
(14, '4107f-IMG-20150701-WA0009.jpg', 'marlon', NULL, 1),
(15, '3213f-b1.png', 'Badge brown sleeveless', NULL, NULL),
(16, '82ff6-b.png', 'Royal blue  with white stripes', NULL, NULL),
(17, 'e244f-b4.png', 'Chocolate brown', NULL, NULL),
(18, 'bfb62-db1.png', 'Navy blue', NULL, NULL),
(19, 'd86f1-b6.png', 'Dark blue sleeveless', NULL, NULL),
(21, '39ae9-r.png', 'marlon', NULL, NULL),
(22, '3187f-r2.png', 'Red grey', NULL, NULL),
(23, '6d992-r3.png', ' Red with white stripes', NULL, NULL),
(24, 'e2a72-r73.png', 'Red with grey stripes', NULL, NULL),
(25, '906f9-Untitled-1.png', 'plain blue', NULL, NULL),
(26, 'ec58d-n20.png', '', NULL, NULL),
(27, 'ce665-n19.png', '', NULL, NULL),
(28, 'ae142-n18.png', '', NULL, NULL),
(29, 'b41c9-n19.png', 'royal blue sleeveless', NULL, NULL),
(30, '02a96-n17.png', 'Red white sleeveless', NULL, NULL),
(31, 'beac6-n15.png', 'Green plain', NULL, NULL),
(32, '06d53-n14.png', 'Green white sleeveless', NULL, NULL),
(33, '710be-n13.png', 'Green plain sleeveless', NULL, NULL),
(34, 'bfb05-n12.png', 'Navy blue', NULL, NULL),
(35, 'e3b57-b5-Recovered.png', 'safaricom green with white stripes', NULL, NULL),
(36, '43b36-n10.png', 'geeen white', NULL, NULL),
(37, 'b4960-n11.png', 'navy blue white red', NULL, NULL),
(38, '0bea4-n8.png', 'maroon white', NULL, NULL),
(39, '5284b-n9.png', 'jungle green', NULL, NULL),
(40, 'd30cc-n7.png', 'white red baby suits', NULL, NULL),
(41, '3bc3c-n5.png', 'pink black white', NULL, NULL),
(42, '54e91-n4.png', 'blue white', NULL, NULL),
(43, '1530a-n3.png', 'pink white', NULL, NULL),
(44, '59554-n6.png', 'green white', NULL, NULL),
(45, '18443-n1.png', 'green white black', NULL, NULL),
(46, 'dc04d-n2.png', 'sky blue white', NULL, NULL),
(47, '56c7c-n18.png', '', NULL, NULL),
(48, '6dd88-n18.png', 'blue plain', NULL, NULL),
(49, 'e1106-n17.png', 'red white sleeveless', NULL, NULL),
(50, '0a6d8-n19.png', 'blue sleeveless', NULL, NULL),
(51, '43036-n10.png', 'green white', NULL, NULL),
(52, '96118-n8.png', 'A double knit home  sweater', NULL, NULL),
(53, '50b10-n16.png', 'sky blue plain', NULL, NULL),
(54, '62620-n1.png', 'home sweaters\n', NULL, NULL),
(55, '2123e-n9.png', 'royal green', NULL, NULL),
(56, '3a37c-n2.png', 'home sweater', NULL, NULL),
(57, 'c68d7-n7.png', 'baby suits', NULL, NULL),
(58, '358a7-n6.png', 'A double knit home sweater', NULL, NULL),
(59, 'd66a7-n15.png', 'Green', NULL, NULL),
(60, 'cb287-n13.png', 'green sleeveless', NULL, NULL),
(61, 'e4f6b-n4.png', 'double knit home sweater', NULL, NULL),
(62, 'ecf28-n5.png', 'double knit home sweater', NULL, NULL),
(63, 'b276d-n3.png', 'pink white  home sweaters', NULL, NULL),
(64, '49d4f-b5-Recovered.png', 'safaricom green white', NULL, NULL),
(65, 'bdadd-n12.png', '', NULL, NULL),
(66, '147f0-n11.png', 'navy blue with red', NULL, NULL),
(67, 'b0262-t1.png', 'navy blue trousers', NULL, NULL),
(68, '6f0c0-m8.png', 'purple white shirts', NULL, NULL),
(69, '6538e-m9.png', 'home sweater', NULL, NULL),
(70, '8c397-m7.png', 'pink white shirt', NULL, NULL),
(71, '7efc1-m6.png', '', NULL, NULL),
(72, 'ccd23-m5.png', '', NULL, NULL),
(73, '13637-m4.png', 'sky blue shirts with logos', NULL, NULL),
(74, '23bf2-m3.png', 'green tshirts', NULL, NULL),
(75, 'cf602-m2.png', 'red tshirts', NULL, NULL),
(76, 'aef1a-m1.png', '', NULL, NULL),
(77, '45ef7-h9.png', '', NULL, NULL),
(78, '7d133-h8.png', '', NULL, NULL),
(79, '943b6-h6.png', '', NULL, NULL),
(80, 'f29ac-h5.png', '', NULL, NULL),
(81, 'ef281-h7.png', '', NULL, NULL),
(82, '6c76a-h2.png', '', NULL, NULL),
(83, '08cca-h3.png', '', NULL, NULL),
(84, 'ee1a3-h1.png', '', NULL, NULL),
(85, 'cdaa2-faithknits2.jpg', 'home sweaters', NULL, NULL),
(87, '50a57-faithknits3.jpg', 'home sweaters', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fn_order`
--

CREATE TABLE `fn_order` (
  `id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL DEFAULT '0',
  `invoice_prefix` varchar(26) NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT '0',
  `customer_group_id` int(11) NOT NULL DEFAULT '0',
  `customer_name` varchar(100) NOT NULL,
  `email` varchar(96) NOT NULL,
  `telephone` varchar(32) NOT NULL,
  `custom_field` text NOT NULL,
  `comment` text NOT NULL,
  `total` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `order_status_id` int(11) NOT NULL DEFAULT '0',
  `commission` decimal(15,4) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fn_order`
--

INSERT INTO `fn_order` (`id`, `invoice_no`, `invoice_prefix`, `customer_id`, `customer_group_id`, `customer_name`, `email`, `telephone`, `custom_field`, `comment`, `total`, `order_status_id`, `commission`, `ip`, `date_added`, `date_modified`) VALUES
(1, 0, '', 1, 4, 'administrator', 'admin@faithknits.com', '', '', 'thank you', '2.5000', 1, '0.0000', '105.231.111.29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 0, '', 1, 4, 'administrator', 'admin@faithknits.com', '', '', 'life is Good', '2.5000', 1, '0.0000', '105.231.111.29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 0, '', 1, 4, 'administrator', 'admin@faithknits.com', '', '', 'life is Good', '2.5000', 1, '0.0000', '105.231.111.29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 0, '', 1, 4, 'administrator', 'admin@faithknits.com', '', '', 'life is Good', '2.5000', 1, '0.0000', '105.231.111.29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 0, '', 1, 4, 'administrator', 'admin@faithknits.com', '', '', 'life is Good', '2.5000', 1, '0.0000', '105.231.111.29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 0, '', 1, 4, 'administrator', 'admin@faithknits.com', '', '', 'life is Good', '2.5000', 1, '0.0000', '105.231.111.29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 0, '', 1, 4, 'administrator', 'admin@faithknits.com', '', '', 'life is Good', '2.5000', 1, '0.0000', '105.231.111.29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 0, '', 1, 4, 'administrator', 'admin@faithknits.com', '', '', 'life is Good', '2.5000', 1, '0.0000', '105.231.111.29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 0, '', 1, 4, 'administrator', 'admin@faithknits.com', '', '', 'life is Good', '2.5000', 1, '0.0000', '105.231.111.29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 0, '', 8, 4, 'jemslab admin', 'admin@jemslab.com', '', '', 'Works', '3.0000', 1, '0.0000', '105.231.111.29', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fn_order_data`
--

CREATE TABLE `fn_order_data` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` double(15,5) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fn_order_data`
--

INSERT INTO `fn_order_data` (`id`, `order_id`, `product_id`, `price`, `quantity`, `date`) VALUES
(1, 1, 2, 0.50000, 5, '0000-00-00 00:00:00'),
(2, 2, 2, 0.50000, 5, '0000-00-00 00:00:00'),
(3, 3, 2, 0.50000, 5, '0000-00-00 00:00:00'),
(4, 4, 2, 0.50000, 5, '0000-00-00 00:00:00'),
(5, 5, 2, 0.50000, 5, '0000-00-00 00:00:00'),
(6, 6, 2, 0.50000, 5, '0000-00-00 00:00:00'),
(7, 7, 2, 0.50000, 5, '0000-00-00 00:00:00'),
(8, 8, 2, 0.50000, 5, '0000-00-00 00:00:00'),
(9, 9, 2, 0.50000, 5, '0000-00-00 00:00:00'),
(10, 10, 3, 0.50000, 6, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fn_order_status`
--

CREATE TABLE `fn_order_status` (
  `order_status_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fn_product`
--

CREATE TABLE `fn_product` (
  `id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `slug` text NOT NULL,
  `meta_title` int(11) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `model` varchar(64) NOT NULL,
  `location` varchar(128) NOT NULL,
  `quantity` int(4) NOT NULL DEFAULT '0',
  `stock_status_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `delivery` tinyint(1) NOT NULL DEFAULT '1',
  `price_list_id` int(11) NOT NULL DEFAULT '0',
  `points` int(8) NOT NULL DEFAULT '0',
  `tax_class_id` int(11) NOT NULL,
  `date_available` date NOT NULL DEFAULT '0000-00-00',
  `weight` decimal(15,8) NOT NULL DEFAULT '0.00000000',
  `weight_class_id` int(11) NOT NULL DEFAULT '0',
  `size` int(5) NOT NULL DEFAULT '0',
  `color` varchar(20) NOT NULL DEFAULT '0.00000000',
  `height` decimal(15,8) NOT NULL DEFAULT '0.00000000',
  `page_control` int(2) NOT NULL DEFAULT '0',
  `subtract` tinyint(1) NOT NULL DEFAULT '1',
  `minimum` int(11) NOT NULL DEFAULT '1',
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `status` int(2) NOT NULL DEFAULT '0',
  `viewed` int(5) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fn_product`
--

INSERT INTO `fn_product` (`id`, `contact_id`, `name`, `description`, `category_id`, `tag`, `slug`, `meta_title`, `meta_description`, `meta_keyword`, `model`, `location`, `quantity`, `stock_status_id`, `image`, `manufacturer_id`, `delivery`, `price_list_id`, `points`, `tax_class_id`, `date_available`, `weight`, `weight_class_id`, `size`, `color`, `height`, `page_control`, `subtract`, `minimum`, `sort_order`, `status`, `viewed`, `date_added`, `date_modified`) VALUES
(2, 1, 'Grey School Sweeter', 'School Sweater for the following Schools', 87, 'Good One', '49ec988c13c7184c08c1da7a7da61d02', 0, 'Faith Nits', 'faith Nits', '', 'Thika', 45, 1, 'assets/filesManagement/album/uploads/f14e4-images.jpg', 1, 1, 0, 45, 0, '2015-08-10', '0.00000000', 0, 30, 'Grey with Stripes', '0.00000000', 2, 0, 0, 0, 1, 0, '2015-06-27 06:16:21', '2015-08-24 20:06:26'),
(3, 1, 'Sleeveless Sweater', 'School uniform for following schools', 87, 'Good One', 'c5e87c0fe1c220b54c270eaba575284a', 0, 'Faith Nits', 'faith Nits', '', 'Thika', 45, 1, 'assets/filesManagement/album/uploads/2eaa7-images--1-.jpg', 1, 1, 0, 45, 0, '2015-06-27', '0.00000000', 0, 25, 'Green with yellow st', '0.00000000', 2, 0, 0, 0, 1, 0, '2015-06-27 09:57:31', '2015-08-24 20:05:35'),
(4, 1, 'school Socks', 'Product Dec', 94, 'Good One', '5295704514cd2b2cf69ab33316ac994e', 0, 'Faith Nits', 'faith Nits', '', 'Thika', 45, 1, 'assets/genimages/logo/logo.gif', 1, 1, 0, 45, 0, '2015-06-29', '0.00000000', 0, 0, 'Grey', '0.00000000', 0, 0, 0, 0, 0, 0, '2015-06-28 09:16:49', '2015-08-24 20:02:46'),
(5, 1, 'Blue Double Nit Sweater', 'Double nit pullovers of all sizes', 87, 'Good One', '0ac102fa391f42ad6ed379289edcc998', 0, 'Faith Nits', 'faith Nits', '', 'Thika', 45, 1, 'assets/filesManagement/album/uploads/bfb62-db1.png', 1, 1, 0, 45, 0, '2015-08-10', '0.00000000', 0, 28, 'Blue', '0.00000000', 0, 0, 0, 0, 1, 0, '2015-08-10 05:40:39', '2015-08-10 17:40:39'),
(6, 1, 'Sleeveless', 'School sleeveless of all sizes and colors', 87, 'Good One', '090a37f2603dbb55adde48aee3ab4ea9', 0, 'Faith Nits', 'faith Nits', '', 'Thika', 45, 1, 'assets/filesManagement/album/uploads/3213f-b1.png', 1, 1, 0, 45, 0, '2015-08-24', '0.00000000', 0, 28, 'Badge brown', '0.00000000', 0, 0, 0, 0, 1, 0, '2015-08-24 07:38:32', '2015-08-24 19:38:32'),
(7, 1, 'School sweater', 'School Sweaters of all colors and sizea', 87, 'Good One', '284ec99cb3b7cdb14b3fe2fc43302fde', 0, 'Faith Nits', 'faith Nits', '', 'Thika', 45, 1, 'assets/filesManagement/album/uploads/82ff6-b.png', 1, 1, 0, 45, 0, '2015-08-24', '0.00000000', 0, 28, 'Royal Blue ', '0.00000000', 0, 0, 0, 0, 1, 0, '2015-08-24 07:40:01', '2015-08-24 19:40:01'),
(8, 1, 'Children Home sweater', 'Children Home sweater', 91, 'Good One', '19b0be8e3cfd1644820d3abb768cdce2', 0, 'Faith Nits', 'faith Nits', '', 'Thika', 45, 1, 'assets/filesManagement/album/uploads/54e91-n4.png', 1, 1, 0, 45, 0, '2015-08-24', '0.00000000', 0, 28, 'Blue white', '0.00000000', 1, 0, 0, 0, 1, 0, '2015-08-24 07:41:37', '2015-08-24 19:55:26'),
(9, 1, 'Home Double Nit Sweater', 'Double Hand or machine knit sweaters', 91, 'Good One', '720d239f825abab18ac0865aac6ed960', 0, 'Faith Nits', 'faith Nits', '', 'Thika', 45, 1, 'assets/filesManagement/album/uploads/6dd88-n18.png', 1, 1, 0, 45, 0, '2015-08-24', '0.00000000', 0, 28, 'Blue plain', '0.00000000', 1, 0, 0, 0, 1, 0, '2015-08-24 07:45:28', '2015-08-24 19:52:21'),
(10, 1, 'Sleeveless', 'School Uniform for the Following schools', 87, 'Good One', '4308d07c0ca8700cf6b3166a57110e6b', 0, 'Faith Nits', 'faith Nits', '', 'Thika', 45, 1, 'assets/filesManagement/album/uploads/e1106-n17.png', 1, 1, 0, 45, 0, '2015-08-24', '0.00000000', 0, 28, 'Red white ', '0.00000000', 0, 0, 0, 0, 1, 0, '2015-08-24 07:51:07', '2015-08-24 19:51:07'),
(11, 1, 'Sweater', 'School Sweeter For the fololwing schools', 87, 'Good One', '13cc2fe8d52c669d7dc92fd46a560ef3', 0, 'Faith Nits', 'faith Nits', '', 'Thika', 45, 1, 'assets/filesManagement/album/uploads/e244f-b4.png', 1, 1, 0, 45, 0, '2015-08-24', '0.00000000', 0, 28, 'Chocolate', '0.00000000', 2, 0, 0, 0, 1, 0, '2015-08-24 07:54:39', '2015-08-24 20:04:12'),
(12, 1, 'Sleeveless', 'School Uniform For', 87, 'Good One', '10ffdab432ba29a98b8a22771a138d44', 0, 'Faith Nits', 'faith Nits', '', 'Thika', 45, 1, 'assets/filesManagement/album/uploads/06d53-n14.png', 1, 1, 0, 45, 0, '2015-08-24', '0.00000000', 0, 28, 'Green white', '0.00000000', 0, 0, 0, 0, 1, 0, '2015-08-24 07:54:56', '2015-08-24 19:54:56'),
(13, 1, 'Double Nit Sweater', 'Home sweater for Kids and adults made to your specifications', 91, 'Good One', 'ad38510ece7b969a9aac3d1ef4583001', 0, 'Faith Nits', 'faith Nits', '', 'Thika', 45, 1, 'assets/filesManagement/album/uploads/0bea4-n8.png', 1, 1, 0, 45, 0, '2015-08-24', '0.00000000', 0, 28, 'Maroon white', '0.00000000', 2, 0, 0, 0, 1, 0, '2015-08-24 07:57:23', '2015-08-24 20:05:13'),
(14, 1, 'Sweater', 'School and Home Sweaters', 87, 'Good One', 'e83239d28092e7a9a762a0da99732abc', 0, 'Faith Nits', 'faith Nits', '', 'Thika', 45, 1, 'assets/filesManagement/album/uploads/bfb05-n12.png', 1, 1, 0, 45, 0, '2015-08-24', '0.00000000', 0, 28, 'Navy blue', '0.00000000', 0, 0, 0, 0, 1, 0, '2015-08-24 08:00:36', '2015-08-24 20:00:36'),
(15, 1, 'Sweater', 'Product Dec', 91, 'Good One', 'fc284fb18490ffd7c7a39411bee6d4d3', 0, 'Faith Nits', 'faith Nits', '', 'Thika', 45, 1, 'assets/filesManagement/album/uploads/62620-n1.png', 1, 1, 0, 45, 0, '2015-08-24', '0.00000000', 0, 28, 'Black White Green', '0.00000000', 1, 0, 0, 0, 1, 0, '2015-08-24 08:08:51', '2015-08-24 20:09:53'),
(16, 1, 'Girl Sweeter', 'Product Dec', 91, 'Good One', '48a8205c219c8834f3200a69e24aa332', 0, 'Faith Nits', 'faith Nits', '', 'Thika', 45, 1, 'assets/filesManagement/album/uploads/1530a-n3.png', 1, 1, 0, 45, 0, '2015-09-23', '0.00000000', 0, 28, 'Pink white', '0.00000000', 0, 0, 0, 0, 1, 0, '2015-08-24 08:11:22', '2015-09-23 20:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `fn_product_description`
--

CREATE TABLE `fn_product_description` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `tag` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fn_product_discount`
--

CREATE TABLE `fn_product_discount` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `customer_group_id` int(11) NOT NULL,
  `quantity` int(4) NOT NULL DEFAULT '0',
  `priority` int(5) NOT NULL DEFAULT '1',
  `price` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `date_start` date NOT NULL DEFAULT '0000-00-00',
  `date_end` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fn_product_image`
--

CREATE TABLE `fn_product_image` (
  `id` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `priority` int(3) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fn_product_special`
--

CREATE TABLE `fn_product_special` (
  `product_special_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_group_id` int(11) NOT NULL,
  `priority` int(5) NOT NULL DEFAULT '1',
  `price` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `date_start` date NOT NULL DEFAULT '0000-00-00',
  `date_end` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'Normal', 'Normal users'),
(4, 'Customer', 'Website customer');

-- --------------------------------------------------------

--
-- Table structure for table `item_stock`
--

CREATE TABLE `item_stock` (
  `stock_id` int(11) NOT NULL,
  `stock_item_fk` int(11) NOT NULL DEFAULT '0',
  `stock_quantity` smallint(5) NOT NULL DEFAULT '0',
  `stock_auto_allocate_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `price_list`
--

CREATE TABLE `price_list` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `size` varchar(11) NOT NULL,
  `price` double(15,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price_list`
--

INSERT INTO `price_list` (`id`, `category_id`, `size`, `price`) VALUES
(1, 87, '22', 280.00),
(2, 87, '24', 300.00),
(3, 87, '26', 330.00),
(4, 87, '28', 350.00),
(5, 87, '30', 380.00),
(6, 87, '32', 400.00),
(7, 87, '34', 430.00),
(8, 87, '36', 450.00),
(9, 87, '38', 480.00),
(10, 87, '40', 500.00),
(11, 89, '00', 150.00),
(12, 86, '00', 350.00),
(15, 90, '20', 160.00),
(16, 90, '22', 160.00),
(17, 90, '24', 180.00),
(18, 90, '26', 200.00),
(19, 96, '00', 350.00),
(20, 95, '00', 250.00);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `img_url` text NOT NULL,
  `summary` text NOT NULL,
  `body` text NOT NULL,
  `blocked` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `img_url`, `summary`, `body`, `blocked`) VALUES
(10, 'Deleivery Services', 'assets/filesManagement/album/products/9302656-delivery-service-car-vector-illustration-isolated-on-white-background.jpg', 'We Deliver goods to our customers By person or by parcel service of your choice', 'We Deliver goods to our customers By person or by parcel service of your choice \nwe deliver in person with Nairobi, Thika, and Kiambu Environs and other places depending on Your order', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slide_content`
--

CREATE TABLE `slide_content` (
  `id` int(11) NOT NULL,
  `img_url` text NOT NULL,
  `blocked` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide_content`
--

INSERT INTO `slide_content` (`id`, `img_url`, `blocked`) VALUES
(7, 'assets/filesManagement/album/libsliders/IMG_0231.JPG', 0),
(8, 'assets/filesManagement/album/libsliders/IMG_0239.JPG', 0),
(9, 'assets/filesManagement/album/libsliders/IMG_0235.JPG', 0),
(10, 'assets/filesManagement/album/libsliders/IMG_0233.JPG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(9, '::1', 'demo user', '$2y$08$Le1GjgO0ZbNbXHt8/Uo/Yu.gcd6DIrySmhKuA/rQMDWVkH9vbWN4a', NULL, 'demo@admin.com', NULL, NULL, NULL, NULL, 1476270562, 1476270708, 1, 'demo', 'user', 'demo', '099484');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(33, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `website_vars`
--

CREATE TABLE `website_vars` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `values` text NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `being_edited`
--
ALTER TABLE `being_edited`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_data`
--
ALTER TABLE `cart_data`
  ADD PRIMARY KEY (`cart_data_id`),
  ADD UNIQUE KEY `cart_data_id` (`cart_data_id`) USING BTREE,
  ADD KEY `cart_data_user_fk` (`cart_data_user_fk`) USING BTREE;

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fn_category_description`
--
ALTER TABLE `fn_category_description`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_id` (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `fn_images`
--
ALTER TABLE `fn_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fn_order`
--
ALTER TABLE `fn_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fn_order_data`
--
ALTER TABLE `fn_order_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fn_order_status`
--
ALTER TABLE `fn_order_status`
  ADD PRIMARY KEY (`order_status_id`,`language_id`);

--
-- Indexes for table `fn_product`
--
ALTER TABLE `fn_product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `fn_product_description`
--
ALTER TABLE `fn_product_description`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `fn_product_discount`
--
ALTER TABLE `fn_product_discount`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `fn_product_image`
--
ALTER TABLE `fn_product_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fn_product_special`
--
ALTER TABLE `fn_product_special`
  ADD PRIMARY KEY (`product_special_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_stock`
--
ALTER TABLE `item_stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD UNIQUE KEY `stock_id` (`stock_id`) USING BTREE,
  ADD KEY `stock_item_fk` (`stock_item_fk`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price_list`
--
ALTER TABLE `price_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_content`
--
ALTER TABLE `slide_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `website_vars`
--
ALTER TABLE `website_vars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_data`
--
ALTER TABLE `cart_data`
  MODIFY `cart_data_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fn_images`
--
ALTER TABLE `fn_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `fn_order`
--
ALTER TABLE `fn_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `fn_order_data`
--
ALTER TABLE `fn_order_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `fn_order_status`
--
ALTER TABLE `fn_order_status`
  MODIFY `order_status_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fn_product`
--
ALTER TABLE `fn_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `fn_product_discount`
--
ALTER TABLE `fn_product_discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fn_product_image`
--
ALTER TABLE `fn_product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fn_product_special`
--
ALTER TABLE `fn_product_special`
  MODIFY `product_special_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `item_stock`
--
ALTER TABLE `item_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `price_list`
--
ALTER TABLE `price_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `slide_content`
--
ALTER TABLE `slide_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `website_vars`
--
ALTER TABLE `website_vars`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
