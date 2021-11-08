-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 12:44 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pickmyoffer`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `user_id`, `title`, `description`, `image`, `createdAt`) VALUES
(7, 1, 'test', '<p><strong>What is ROFR</strong>, and why is it a good thing? ROFR stands for Right of First Refusal. Disney has the right to review every contract that is sold on the resale market. &nbsp;After a buyer and seller agree to the terms of a contract, and both parties sign the necessary paperwork, Disney has 30 days to look at the agreement&hellip;&nbsp;</p>\r\n', '1488032911-desert.jpg', '2021-05-25 14:28:31'),
(6, 1, 'Test', '<h1 style=\"background: rgb(238, 238, 238); border: 1px solid rgb(204, 204, 204); padding: 5px 10px;\">This is the <strong>Review</strong> of Our Page</h1>\r\n\r\n<p><img alt=\"Suzuki Gix\" src=\"https://www.google.co.in/search?q=suzuki+gixxer+155+black+alterations&amp;safe=active&amp;espv=2&amp;biw=1660&amp;bih=834&amp;site=webhp&amp;source=lnms&amp;tbm=isch&amp;sa=X&amp;ved=0ahUKEwjp_-nQ_6XSAhUB-WMKHXOmAT4Q_AUIBigB#imgrc=_nsHyxjRNPPUkM:\" style=\"border-style:solid; border-width:1px; height:200px; margin:1px; width:300px\" /></p>\r\n', '1487845379-screen-shot-2017-02-22-at-6.13.12-pm.png', '2021-05-23 10:22:59'),
(8, 1, '', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h2 style=\"font-style:italic;\">this bike for youngstors</h2>\r\n			</td>\r\n			<td>\r\n			<h1>DBZ alteration</h1>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '1488179505-resize_custom.jpg', '2021-05-27 07:11:45');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Footwear'),
(2, 'Clothing'),
(3, 'Flower gift & cakes'),
(4, 'Clothing'),
(5, 'Flower gift & cakes'),
(6, ' Cameras & Optics'),
(7, 'Kitchen & Home Appliances & Electronics'),
(8, 'Laptops & Computer'),
(9, 'Mobile Phones & Accessories'),
(10, 'Watches'),
(11, 'Photo prints'),
(12, 'Movies & Music'),
(13, 'Fitness & Sports'),
(14, 'Cosmetics & Health '),
(15, 'Fun Stuff'),
(16, 'Perfumes'),
(17, 'Jewellery'),
(18, 'Baby Products & kids toys'),
(19, 'Travel'),
(20, 'Food'),
(21, 'Groceries'),
(22, 'Mobile Recharge & Bill payment');

-- --------------------------------------------------------

--
-- Table structure for table `category_company`
--

CREATE TABLE `category_company` (
  `id` int(11) NOT NULL,
  `category_id` varchar(10) NOT NULL,
  `company` varchar(100) NOT NULL,
  `isdeleted` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_company`
--

INSERT INTO `category_company` (`id`, `category_id`, `company`, `isdeleted`) VALUES
(1, '1', 'http://localhost/pickmyoffers/insertcompany.php', '0');

-- --------------------------------------------------------

--
-- Table structure for table `click_history`
--

CREATE TABLE `click_history` (
  `id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `amount` varchar(5) NOT NULL,
  `user_id` int(11) NOT NULL,
  `CreatedAt` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `click_history`
--

INSERT INTO `click_history` (`id`, `coupon_id`, `amount`, `user_id`, `CreatedAt`) VALUES
(1, 1, '0.02', 1, '2027-01-17 00:00:00'),
(2, 2, '0.02', 1, '2027-01-17 00:00:00'),
(3, 3, '0.02', 1, '2027-01-17 00:00:00'),
(4, 3, '0.02', 1, '2027-01-17 00:00:00'),
(5, 1, '0.02', 1, '2030-01-17 00:00:00'),
(6, 2, '0.02', 1, '2030-01-17 00:00:00'),
(7, 3, '0.02', 1, '2030-01-17 00:00:00'),
(8, 1, '0.02', 1, '2031-01-17 00:00:00'),
(9, 5, '0.02', 1, '2003-02-17 00:00:00'),
(10, 3, '0.02', 1, '2003-02-17 00:00:00'),
(11, 6, '0.02', 1, '2003-02-17 00:00:00'),
(12, 6, '0.02', 8, '2017-02-03 10:41:19'),
(13, 6, '0.02', 8, '2017-02-03 11:19:55'),
(14, 6, '0.02', 8, '2017-02-03 12:38:35'),
(15, 6, '0.02', 8, '2017-02-03 18:07:41'),
(16, 6, ' 0.2 ', 8, '2017-02-08 05:13:46'),
(17, 8, ' 0.2 ', 1, '2017-02-10 06:02:09'),
(18, 13, ' 0.2 ', 1, '2017-02-14 04:38:56'),
(19, 6, ' 0.2 ', 8, '2017-02-15 11:23:06'),
(20, 26, '   0.', 8, '2021-05-28 12:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `company_image` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `coupon_link` longtext NOT NULL,
  `offer` varchar(100) NOT NULL,
  `expire_date` datetime DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `isdeleted` int(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `user_id`, `category`, `company_name`, `company_image`, `description`, `coupon_code`, `coupon_link`, `offer`, `expire_date`, `createdAt`, `isdeleted`) VALUES
(1, '1', '3', 'suhag', '1484727601-pic.jpg', 'njkb jhk', '123', 'http://suryainfotech.net/pickmyoffers/insertcoupon.php', '1234', '2016-10-10 00:00:00', '2016-12-21 00:00:00', 1),
(5, '1', '2', 'xyz', '1486031945-pic.jpg', 'hello hi..... hh ghjh  welcome', '3214', 'http://www.suryainfotech.net/pickmyoffers/company/jgj/hjgjh', '50', '2017-01-24 05:49:59', '2017-02-02 00:00:00', 0),
(2, '1', '1', 'suhag123', '1486030574-page_1.jpg', 'njkb jhk sanjay', '1237', 'http://www.suryainfotech.net/pickmyoffers/company', '50', '2017-02-02 00:00:00', '2017-01-12 00:00:00', 0),
(3, '1', '', 'surya infotech', '1487150783-pic.jpg', 'samsung', '123456', 'http://www.suryainfotech.net', '10day', '2017-02-20 00:00:00', '2017-01-12 00:00:00', 0),
(4, '1', '2', 'xyz', '1486019363-pic.jpg', 'hello hi.....', '321', 'http://www.suryainfotech.net/pickmyoffers/company/insertcoupon', '50', '2017-01-24 05:49:59', '2017-02-02 00:00:00', 0),
(6, '8', '', 'Surya Infotech', '1486102364-koala.jpg', 'Description', 'CLO001', 'http://www.suryainfotech.net', '12', '2017-02-28 00:00:00', '2017-02-03 06:12:44', 0),
(7, '1', '5', 'pqr', '1486631212-pic.jpg', 'ygj jhk j,', '', 'http://www.suryainfotech.net/pickmyoffers/company/insertcoupon', '50', '2017-02-01 00:00:00', '2017-02-09 09:06:52', 0),
(8, '1', '4', 'ghghj', '1486642136-pic.jpg', 'uyhkj, jgk,m ', '1234156', '', '50', '2017-02-11 00:00:00', '2017-02-09 12:08:56', 0),
(9, '1', '4', 'sjsdlk;', '1486714266-pic.jpg', 'kfhk sndfk', '', 'http://www.suryainfotech.net/pickmyoffers/company/insertcoupon', '50', '2017-02-12 00:00:00', '2017-02-10 08:11:06', 0),
(10, '1', '5', 'hello', '1486715491-pic.jpg', 'dnfk, fjkadj jfal', '12346', '', '50', '2017-02-02 00:00:00', '2017-02-10 08:31:31', 0),
(11, '1', '10', 'xyz', '1486716036-pic.jpg', 'lska;ljdslv dkjg', '65', '', '20', '2017-02-21 00:00:00', '2017-02-10 08:40:36', 0),
(12, '1', '8', 'xyz', '1486716395-page_1.jpg', 'tygjh', '', 'http://www.suryainfotech.net/pickmyoffers/company', '60', '2017-02-23 00:00:00', '2017-02-10 08:46:35', 0),
(13, '1', '3', 'abc', '1486972516-pic.jpg', 'hello dkvk mvnxk', '', 'kjdsl/d', '36', '2017-02-14 00:00:00', '2017-02-13 07:55:16', 0),
(14, '1', '3', 'jldkf', '1486982545-pic.jpg', 'hsefj jhsfkdj mshdf', '12356232', '', '60', '2017-02-17 00:00:00', '2017-02-13 10:42:25', 0),
(15, '1', '6', 'oks', '1486982601-page_1.jpg', 'kjdlf khnkv snc adka', '986532', '', '70', '2017-02-21 00:00:00', '2017-02-13 10:43:21', 0),
(16, '1', '5', 'sdknf', '1487151774-page_1.jpg', 'wel come j jbfjm bmxn v mbvxm', '', 'http://www.suryainfotech.net/pickmyoffers/company/insertcoupon', '60', '2017-02-23 00:00:00', '2017-02-15 09:42:54', 0),
(17, '5', '', 'flower', '1487310699-pic.jpg', 'hello hi bye', '123456987', '', '20', '2017-02-21 00:00:00', '2017-02-17 05:51:39', 0),
(18, '5', '', 'm', '1487310915-page_1.jpg', 'jfks', '', 'http://www.suryainfotech.net/pickmyoffers/company/insertcoupon', '50', '2017-02-28 00:00:00', '2017-02-17 05:55:15', 0),
(19, '1', '2', 'xjs', '1487319457-pic.jpg', 'fm', '123', '', '50', '2017-02-28 00:00:00', '2017-02-17 08:17:37', 0),
(20, '1', '2', 'xyz', '1487671654-page_1.jpg', 'hello dsksjkdk ksdjl', '', 'http://www.suryainfotech.net/pickmyoffers/company/insertcoupon', '50', '2017-02-28 00:00:00', '2017-02-21 10:07:34', 0),
(21, '1', '2', 'pqr', '1487672152-fee-rec.--page-001.jpg', 'hello welcome how r u??mkcvnkn', '12356', '', '60', '2017-03-01 00:00:00', '2017-02-21 10:15:52', 0),
(22, '4', '6', 'krishna ', '1487672340-pic.jpg', 'hello krishna', '2356', '', '50', '2017-02-27 00:00:00', '2017-02-21 10:19:00', 0),
(23, '5', '12', 'movies & Music', '1487672478-pic.jpg', 'Movies $ Music', '1235896', '', '30', '2017-02-25 00:00:00', '2017-02-21 10:21:18', 0),
(24, '5', '1', 'amazon', '1487673045-bglogo.png', 'ytf', 'frd4', '', '34', '2017-03-10 00:00:00', '2017-02-21 10:30:47', 0),
(25, '5', '4', 'flipkart', '1487673163-logo.png', 'AGS', '12334', '', 'we', '2017-03-01 00:00:00', '2017-02-21 10:32:43', 0),
(26, '8', '17', 'Radhe', '1487673685-desert.jpg', 'Jewellery Coupon', 'JW001', '', '20%', '2017-02-22 00:00:00', '2017-02-21 10:41:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment_log`
--

CREATE TABLE `payment_log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mini_amount` int(70) NOT NULL,
  `status` varchar(20) NOT NULL,
  `CreatedAt` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_log`
--

INSERT INTO `payment_log` (`id`, `user_id`, `mini_amount`, `status`, `CreatedAt`) VALUES
(1, 1, 20, 'Pending', '2008-02-17 10:09:20'),
(2, 1, 10, 'Pending', '2008-02-17 10:09:53'),
(3, 1, 60, 'Pending', '2008-02-17 10:14:05'),
(4, 1, 20, 'Pending', '2008-02-17 10:15:45'),
(5, 1, 10, 'Pending', '2008-02-17 10:18:54'),
(6, 1, 10, 'Approved', '2008-02-17 10:45:13'),
(7, 1, 10, 'Rejected', '2008-02-17 10:47:21'),
(8, 1, 40, 'Approved', '2008-02-17 10:57:14'),
(9, 1, 40, 'Approved', '2008-02-17 10:59:20'),
(10, 1, 10, 'Rejected', '2008-02-17 11:00:11'),
(11, 1, 10, 'Pending', '2008-02-17 11:02:48'),
(12, 1, 20, 'Rejected', '2008-02-17 11:05:07'),
(13, 1, 30, 'Approved', '2008-02-17 11:10:31'),
(14, 1, 20, 'Approved', '2008-02-17 11:08:11'),
(15, 1, 10, 'Pending', '2008-02-17 11:09:23'),
(16, 1, 10, 'Approved', '2008-02-17 11:26:45'),
(17, 1, 10, 'Rejected', '2008-02-17 11:29:30'),
(18, 1, 10, 'Pending', '2008-02-17 11:30:49'),
(19, 1, 10, 'Rejected', '2008-02-17 11:31:08'),
(20, 1, 10, 'Pending', '2008-02-17 11:38:52'),
(21, 1, 10, 'Pending', '2017-02-08 12:00:41'),
(22, 1, 10, 'Approved', '2017-02-08 12:01:38'),
(23, 1, 10, 'Pending', '2017-02-08 12:02:40'),
(24, 1, 10, 'Rejected', '2017-02-08 12:02:46'),
(25, 1, 10, 'Rejected', '2017-02-08 12:02:50'),
(26, 1, 10, 'Pending', '2017-02-09 11:26:25'),
(27, 1, 10, 'Rejected', '2017-02-09 11:26:56'),
(28, 1, 10, 'Pending', '2017-02-09 11:27:48'),
(29, 1, 10, 'Approved', '2017-02-09 11:27:57'),
(30, 1, 50, 'Pending', '2017-02-17 13:03:31'),
(31, 1, 50, 'Rejected', '2017-02-17 13:11:55'),
(32, 1, 50, 'Rejected', '2017-02-17 13:11:59'),
(33, 1, 100, 'Pending', '2017-02-17 13:13:02'),
(34, 1, 50, 'Rejected', '2017-02-17 13:13:07'),
(35, 1, 100, 'Rejected', '2017-02-17 13:13:31'),
(36, 1, 150, 'Pending', '2017-02-17 13:14:11'),
(37, 1, 100, 'Rejected', '2017-02-17 13:14:13'),
(38, 1, 150, 'Approved', '2017-02-17 13:14:34'),
(39, 1, 150, 'Approved', '2017-02-17 13:14:36'),
(40, 1, 100, 'Pending', '2017-02-17 13:16:59'),
(41, 1, 150, 'Approved', '2017-02-17 13:17:03'),
(42, 1, 100, 'Rejected', '2017-02-17 13:17:36'),
(43, 1, 100, 'Rejected', '2017-02-17 13:17:44'),
(44, 1, 100, 'Pending', '2017-02-17 13:20:55'),
(45, 1, 100, 'Rejected', '2017-02-17 13:21:00'),
(46, 1, 100, 'Approved', '2017-02-17 13:23:05'),
(47, 1, 200, 'Pending', '2017-02-19 07:00:35'),
(48, 1, 200, 'Rejected', '2017-02-19 07:01:34'),
(49, 1, 200, 'Rejected', '2017-02-19 07:01:37'),
(50, 1, 400, 'Pending', '2017-02-20 05:53:57'),
(51, 1, 400, 'Rejected', '2017-02-20 05:54:22'),
(52, 1, 100, 'Pending', '2017-02-20 05:58:32'),
(53, 1, 100, 'Approved', '2017-02-20 05:58:39'),
(54, 1, 100, 'Approved', '2017-02-20 05:58:43'),
(55, 8, 0, 'Pending', '2017-02-20 07:21:16'),
(56, 8, 0, 'Rejected', '2017-02-20 07:22:34'),
(57, 8, 0, 'Pending', '2017-02-20 07:24:18'),
(58, 8, 0, 'Approved', '2017-02-20 07:25:15'),
(59, 1, 200, 'Pending', '2017-02-20 13:30:18'),
(60, 1, 200, 'Approved', '2017-02-20 13:31:26'),
(61, 1, 200, 'Approved', '2017-02-20 13:31:46'),
(62, 1, 50, 'Pending', '2017-02-21 06:09:47'),
(63, 1, 50, 'Pending', '2017-02-21 06:18:50'),
(64, 1, 10, 'Pending', '2017-02-21 07:32:05'),
(65, 1, 10, 'Pending', '2017-02-21 07:34:17'),
(66, 1, 5, 'Pending', '2017-02-21 07:41:00'),
(67, 1, 0, 'Pending', '2017-02-21 07:49:56'),
(68, 1, 0, 'Pending', '2017-02-21 07:54:02'),
(69, 1, 0, 'Pending', '2017-02-21 07:55:30'),
(70, 1, 0, 'Pending', '2017-02-21 07:59:15'),
(71, 1, 0, 'Approved', '2017-02-21 08:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `meta_key` varchar(50) NOT NULL,
  `meta_value` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `meta_key`, `meta_value`) VALUES
(1, 'rate', '   0.0002 '),
(2, 'mini_amount', '0.002');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `CreatedAt` datetime NOT NULL,
  `isdeleted` int(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`, `CreatedAt`, `isdeleted`) VALUES
(1, 'dixita@gmail.com', '2017-02-20 00:00:00', 0),
(2, 'dixita@gmail.com', '2017-02-21 00:00:00', 0),
(3, 'gsooryaraj@gmail.com', '2017-02-21 00:00:00', 0),
(4, 'gsooryaraj@gmail.com', '2017-02-21 00:00:00', 0),
(5, 'gsooryaraj@gmail.com', '2017-02-21 00:00:00', 0),
(6, 'gsooryaraj@gmail.com', '2017-02-21 00:00:00', 0),
(7, 'gsooryaraj@gmail.com', '2017-02-21 00:00:00', 0),
(8, 'gsooryaraj@gmail.com', '2017-02-21 00:00:00', 0),
(9, 'gsooryaraj@gmail.com', '2017-02-21 00:00:00', 0),
(10, 'gsooryaraj@gmail.com', '2017-02-21 00:00:00', 0),
(11, 'gsooryaraj@gmail.com', '2017-02-21 00:00:00', 0),
(12, 'gsooryaraj@gmail.com', '2017-02-21 00:00:00', 0),
(13, 'gsooryaraj@gmail.com', '2017-02-21 00:00:00', 0),
(14, 'gsooryaraj@gmail.com', '2017-02-21 00:00:00', 0),
(15, 'gsooryaraj@gmail.com', '2017-02-22 00:00:00', 0),
(16, 'gsooryaraj@gmail.com', '2017-02-22 00:00:00', 0),
(17, 'gsooryaraj@gmail.com', '2017-02-22 00:00:00', 0),
(18, 'gsooryaraj@gmail.com', '2017-02-23 00:00:00', 0),
(19, 'gsooryaraj@gmail.com', '2017-02-23 00:00:00', 0),
(20, 'test@gmail.com', '2017-02-25 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `balance` varchar(50) NOT NULL DEFAULT '',
  `new_balance` varchar(50) NOT NULL DEFAULT '',
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isdeleted` varchar(10) NOT NULL DEFAULT '0',
  `role` double NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `phone`, `balance`, `new_balance`, `createdAt`, `isdeleted`, `role`) VALUES
(1, 'Sanjay12345', 'Dhameliya', 'webapps008@gmail.com', '123456', '9714027278', '150.4034', '24.6034', '2016-12-18 00:36:56', '1', 0),
(3, 'Dharmesh', 'Bhuva', 'dharmeshbhuva001@gmail.com', '123456789', '8488944816', '', '', '2017-01-08 22:21:26', '1', 0),
(4, 'Dixita', 'Chaudhari', 'dixitachaudhari22@gmail.com', '12', '9727540371', '0.0002', '0.0002', '2017-01-12 22:32:37', '1', 0),
(5, 'gowtham', 'sooryaraj', 'gsooryaraj@gmail.com', 'sooryaraj', '9751776198', '0.0046', '0.0046', '2017-01-24 03:53:45', '0', 1),
(6, 'gowtham', 'sooryaraj', 'nandspatel7@gmail.com', 'sooryaraj', '9751776198', '', '', '2017-01-24 05:49:59', '0', 1),
(8, 'suraj', 'dhameliya', 'sanjaydhameliya008@gmail.com', '456789', '9714027278', '0.5436', '0.4436', '2017-02-02 22:31:40', '0', 1),
(9, '', '', '', '', '', '0', '0', '2017-02-20 06:56:59', '0', 1),
(10, '', '', '', '', '', '0', '0', '2017-02-20 07:06:10', '0', 1),
(11, '', '', '', '', '', '0', '0', '2017-02-20 08:12:00', '0', 1),
(12, '', '', '', '', '', '0', '0', '2017-02-20 12:38:16', '0', 1),
(13, '', '', '', '', '', '0', '0', '2017-02-20 12:43:29', '0', 1),
(14, '', '', '', '', '', '0', '0', '2017-02-20 12:43:32', '0', 1),
(15, 'g', 'karan', 'mangukiyakenil72@gmail.com', '123456', '9751776198', '0', '0', '2017-02-20 22:16:44', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_request`
--

CREATE TABLE `user_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mini_amount` varchar(50) NOT NULL,
  `Paper_link` varchar(70) NOT NULL,
  `description` longtext,
  `status` varchar(10) NOT NULL,
  `CreatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_request`
--

INSERT INTO `user_request` (`id`, `user_id`, `mini_amount`, `Paper_link`, `description`, `status`, `CreatedAt`) VALUES
(1, 1, '20', 'suryainfotech.net', 'hgfh', 'Approved', '2008-02-17 10:09:20'),
(2, 1, '10', 'suryainfotech.net', 'hello', 'Rejected', '2008-02-17 10:09:53'),
(3, 1, '60', 'http://www.suryainfotech.net/pickmyoffers/company/paymentrequest', 'kjgkdl', 'Approved', '2008-02-17 10:14:05'),
(4, 1, '20', 'http://www.suryainfotech.net/pickmyoffers/company/paymentrequest', 'ygj', 'Approved', '2008-02-17 10:15:45'),
(5, 1, '10', 'kdfj', 'dkjg', 'Approved', '2008-02-17 10:18:54'),
(6, 1, '10', 'suryainfotech.net', 'hidjdo', 'Approved', '2008-02-17 10:35:45'),
(7, 1, '10', 'djh', 'sgi', 'Rejected', '2008-02-17 10:46:25'),
(8, 1, '40', 'suryainfotech.net', 'guj', 'Approved', '2008-02-17 10:56:09'),
(9, 1, '40', 'http://www.suryainfotech.net/pickmyoffers/company/paymentrequest', 'sdfd', 'Approved', '2008-02-17 10:59:05'),
(10, 1, '10', 'http://www.suryainfotech.net/pickmyoffers/company/paymentrequest', 'gjhj', 'Rejected', '2008-02-17 10:59:55'),
(11, 1, '10', 'suryainfotech.net', 'kjkkl', 'Rejected', '2008-02-17 11:29:30'),
(12, 1, '20', 'suryainfotech.net', 'jh', 'Rejected', '2008-02-17 11:04:38'),
(13, 1, '30', 'suryainfotech.net', 'hg', 'Approved', '2008-02-17 11:07:03'),
(14, 1, '20', 'http://www.suryainfotech.net/pickmyoffers/company/paymentrequest', 'yugj', 'Approved', '2008-02-17 11:07:42'),
(15, 1, '10', 'ffrf', 'hki.', 'Approved', '2008-02-17 11:09:23'),
(16, 1, '10', 'http://www.suryainfotech.net/pickmyoffers/company/paymentrequest', 'ugjhn', 'Rejected', '2008-02-17 11:31:08'),
(17, 1, '10', 'http://www.suryainfotech.net/pickmyoffers/company/paymentrequest', 'hkj', 'Approved', '2008-02-17 12:01:38'),
(18, 1, '10', '564', 'jhk', 'Rejected', '2017-02-08 12:02:50'),
(19, 1, '10', 'http://www.suryainfotech.net/pickmyoffers/company/paymentrequest', 'utgj', 'Rejected', '2017-02-09 11:26:56'),
(20, 1, '10', 'suryainfotech.net', 'ygjbk', 'Approved', '2009-02-17 11:27:57'),
(21, 1, '50', 'gsooryaraj@gmail.com', 'hgfg', 'Rejected', '2017-02-17 13:13:07'),
(22, 1, '100', 'gsooryaraj@gmail.com', 'seffg', 'Rejected', '2017-02-17 13:14:13'),
(23, 1, '150', 'gsooryaraj@gmail.com', 'ddfsgs', 'Approved', '2017-02-17 13:17:03'),
(24, 1, '100', 'gsooryaraj@gmail.com', 'efgeyety', 'Rejected', '2017-02-17 13:21:00'),
(25, 1, '100', 'gsooryaraj@gmail.com', 'rhshrhrtre', 'Approved', '2017-02-17 13:23:05'),
(26, 1, '200', 'gsooryaraj@gmail.com', 'give it', 'Rejected', '2017-02-19 07:01:37'),
(27, 1, '400', 'gsooryaraj@gmail.com', 'uygghf', 'Rejected', '2017-02-20 05:54:22'),
(28, 1, '100', 'gsooryaraj@gmail.com', 'sd', 'Approved', '2020-02-17 05:58:43'),
(29, 8, '0.1', 'sanjaydhameliya008@gmail.com', 'For Testing By Sanjay', 'Rejected', '2017-02-20 07:22:34'),
(30, 8, '0.1', 'sanjay', 'Again Send Request', 'Approved', '2020-02-17 07:25:15'),
(31, 1, '200', 'gsooryaraj@gmail.com', '', 'Approved', '2020-02-17 13:31:46'),
(32, 1, '  50', 'gsooryaraj@gmail.com', '', 'Rejected', '2017-02-21 09:24:08'),
(33, 1, '  50', 'gsooryaraj@gmail.com', '', 'Rejected', '2017-02-23 09:41:49'),
(34, 1, '0.2', 'dixitachaudhari22@gmail.com', NULL, 'Approved', '2021-02-17 08:07:06'),
(35, 1, '0.2', 'dixitachaudhari22@gmail.com', NULL, 'Pending', '2017-02-21 07:59:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `category_company`
--
ALTER TABLE `category_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `click_history`
--
ALTER TABLE `click_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_log`
--
ALTER TABLE `payment_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_request`
--
ALTER TABLE `user_request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `category_company`
--
ALTER TABLE `category_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `click_history`
--
ALTER TABLE `click_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `payment_log`
--
ALTER TABLE `payment_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user_request`
--
ALTER TABLE `user_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
