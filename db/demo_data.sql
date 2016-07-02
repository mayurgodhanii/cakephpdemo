-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2016 at 05:56 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` varchar(255) NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `active`, `is_delete`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 0, 'Cloths', 1, 0, '', '', '2016-06-15 00:00:00', '2016-06-30 06:50:53'),
(2, 1, 'Shirts', 1, 0, '', '', '2016-06-15 00:00:00', '2016-06-30 07:44:03'),
(3, 1, 'Pants', 1, 0, '', '', '2016-06-15 00:00:00', '2016-06-30 06:56:19'),
(6, 0, 'Electronics', 1, 0, '', '', '2016-06-15 11:22:54', '2016-06-30 07:40:38'),
(15, 1, 'Electronicst', 1, 1, '', '', '2016-06-15 13:11:18', '2016-06-30 07:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `account` int(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `sku`, `desc`, `active`, `is_delete`, `account`, `created`, `modified`) VALUES
(1, 3, 'Jeans Pent', 'jeans1', '<p>this is test Product</p>\r\n', 1, 1, 0, '2016-06-24 09:56:56', '2016-07-01 14:32:28'),
(2, 1, 'Wheat', '123', '<p>this is test product</p>\r\n', 0, 0, 1, '2016-07-01 14:30:39', '2016-07-01 16:08:22'),
(3, 1, 'Peach Halves', '123', '<h2>Peach Halves</h2>\r\n', 1, 1, 0, '2016-07-01 14:31:36', '2016-07-01 16:09:04'),
(4, 1, 'Noodles', '123', '<h6><span style="font-size:12px">Noodles</span></h6>\r\n', 1, 0, 0, '2016-07-01 14:32:22', '2016-07-01 14:32:22'),
(5, 1, 'Seafood', '123', '<h6><span style="font-size:11px">Seafood</span></h6>\r\n', 1, 0, 0, '2016-07-01 14:33:19', '2016-07-01 14:33:19'),
(6, 1, 'Biscuits', '123456', '<p>this is test</p>\r\n', 1, 0, 1, '2016-07-01 15:05:35', '2016-07-01 15:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `picture`, `created`, `modified`) VALUES
(1, 1, '160624095656_Chrysanthemum.jpg', '2016-06-24 09:56:56', '2016-06-24 09:56:56'),
(2, 1, '160624095656_Desert.jpg', '2016-06-24 09:56:56', '2016-06-24 09:56:56'),
(3, 1, '160624095656_Koala.jpg', '2016-06-24 09:56:56', '2016-06-24 09:56:56'),
(4, 1, '160624095656_Lighthouse.jpg', '2016-06-24 09:56:56', '2016-06-24 09:56:56'),
(5, 2, '160701143039_of24.png', '2016-07-01 14:30:40', '2016-07-01 14:30:40'),
(6, 3, '160701143136_of25.png', '2016-07-01 14:31:36', '2016-07-01 14:31:36'),
(7, 4, '160701143222_of32.png', '2016-07-01 14:32:22', '2016-07-01 14:32:22'),
(8, 5, '160701143319_of34.png', '2016-07-01 14:33:19', '2016-07-01 14:33:19'),
(9, 6, '160701150535_of29.png', '2016-07-01 15:05:35', '2016-07-01 15:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

DROP TABLE IF EXISTS `product_reviews`;
CREATE TABLE `product_reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_sellers`
--

DROP TABLE IF EXISTS `product_sellers`;
CREATE TABLE `product_sellers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `actual_rate` double(11,2) NOT NULL,
  `seller_rate` double(11,2) DEFAULT NULL,
  `pincode` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_sellers`
--

INSERT INTO `product_sellers` (`id`, `user_id`, `product_id`, `actual_rate`, `seller_rate`, `pincode`, `created`, `modified`) VALUES
(1, 1, 1, 123.00, 123.00, 0, '2016-06-24 09:56:56', '2016-07-01 12:59:38'),
(2, 1, 2, 23.00, NULL, 0, '2016-07-01 14:30:40', '2016-07-01 14:30:40'),
(3, 1, 3, 12.00, 12.00, 0, '2016-07-01 14:31:36', '2016-07-01 14:31:36'),
(4, 1, 4, 123.00, 123.00, 0, '2016-07-01 14:32:22', '2016-07-01 14:32:22'),
(5, 1, 5, 12.00, 12.00, 0, '2016-07-01 14:33:19', '2016-07-01 14:33:19'),
(6, 1, 6, 123.00, NULL, 0, '2016-07-01 15:05:35', '2016-07-01 15:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created`, `modified`) VALUES
(1, 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'user', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `email_verified` tinyint(1) DEFAULT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `username`, `password`, `email`, `name`, `picture`, `active`, `is_delete`, `created_by`, `modified_by`, `created`, `modified`, `email_verified`, `slug`) VALUES
(1, 1, 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'admin@admin.com', 'Admin', '160624130617_Koala.jpg', 1, 1, 'admin', '', '2016-06-23 00:00:00', '2016-06-30 09:11:59', 1, ''),
(2, 2, 'Dhaval_51294', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'dhaval@manager.com', 'Dhaval', '160624130845_Koala.jpg', 1, 0, 'admin', '', '2016-06-23 00:00:00', '2016-06-30 09:11:55', 1, ''),
(4, 2, 'dhaval@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', '', 'sad', '', 1, 1, '', '', '2016-07-01 15:31:17', '2016-07-01 15:31:17', 1, 'dhaval@gmail.com'),
(5, 1, 'CHIRAG@GMAIL.COM', 'f865b53623b121fd34ee5426c792e5c33af8c227', '', 'CHIRAG', '', 1, 1, '', '', '2016-07-01 15:34:32', '2016-07-01 15:34:32', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

DROP TABLE IF EXISTS `user_addresses`;
CREATE TABLE `user_addresses` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `user_id`, `address1`, `address2`, `city`, `state`, `country`) VALUES
(1, 3, '1234567897', '1234567897132132', 'Ahmedabad', '12', 'India'),
(2, 4, 'Noooot Applicable', 'Noooot Applicable', 'Ahemedabad', '1', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bio` text,
  `phoneno` varchar(255) NOT NULL,
  `mobileno` int(11) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `bio`, `phoneno`, `mobileno`, `birthday`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 3, '213', '8980412512', 1234567891, '06/24/2016', '', '', '2016-06-24 13:11:15', '2016-07-01 12:57:54'),
(2, 4, '', '1234568971', 1234657891, '07/04/2016', '', '', '2016-06-27 11:20:02', '2016-06-27 11:20:02'),
(3, 4, NULL, '', 123456789, '', '', '', '2016-07-01 15:31:17', '2016-07-01 15:31:17'),
(4, 5, NULL, '', 123456789, '', '', '', '2016-07-01 15:34:32', '2016-07-01 15:34:32'),
(5, 6, NULL, '', 0, '', '', '', '2016-07-01 15:46:27', '2016-07-01 15:46:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sellers`
--
ALTER TABLE `product_sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_sellers`
--
ALTER TABLE `product_sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
