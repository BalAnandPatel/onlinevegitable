-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2024 at 07:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vegitabledb`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `isDefault` int(1) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `addressLine1` varchar(255) NOT NULL,
  `addressLine2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(100) NOT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `postalCode` int(11) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updatedOn` timestamp NULL DEFAULT NULL,
  `createdBy` varchar(255) NOT NULL,
  `updatedBy` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `userId`, `isDefault`, `name`, `mobile`, `addressLine1`, `addressLine2`, `city`, `state`, `landmark`, `postalCode`, `createdOn`, `updatedOn`, `createdBy`, `updatedBy`) VALUES
(3, 'giiplanand@gmail.com', 1, '', '', 'JAUNPUR', 'MUNGRA BADSHAPUR', 'JAUNPUR', '', 'NH31', 22202, '2024-12-13 13:27:38', '0000-00-00 00:00:00', 'Admin', ''),
(4, 'giiplanand@gmail.coms', 0, '', '', 'Mumn', 'hj', '', '', '', 0, '2024-12-13 13:27:42', '0000-00-00 00:00:00', 'Admin', ''),
(5, 'giiplanand@gmail.com', 0, 'ANAND', '1', '1', '1', '1', 'Uttar Pradesh', '1', 1, '2024-12-13 13:27:45', NULL, 'ANAND', NULL),
(6, 'giiplanand@gmail.com', 0, 'ANAND', '333', 't', 't', 't', 'Tamil Nadu', 't', 122, '2024-12-13 13:27:50', NULL, 'giplanand@gmail.com', NULL),
(7, 'giiplanand@gmail.com', 0, 'ANAND', '333', 't', 't', 't', 'Tamil Nadu', 't', 122, '2024-12-13 13:27:55', NULL, 'giplanand@gmail.com', NULL),
(8, 'giiplanand@gmail.com', 0, 'ANAND', '333', 't', 't', 't', 'Tamil Nadu', 't', 122, '2024-12-13 13:27:59', NULL, 'giplanand@gmail.com', NULL),
(9, 'giiplanand@gmail.com', 0, 'ANAND', '333', 't', 't', 't', 'Tamil Nadu', 't', 122, '2024-12-13 13:28:03', NULL, 'giplanand@gmail.com', NULL),
(20, 'TEST@W.COM', 0, 'TEST', '6868665', 'Hh', 'b', 'Hhhh', 'Uttar Pradesh', 'Hdhdj', 22202002, '2024-12-14 08:39:45', NULL, 'TEST@W.COM', NULL),
(19, 'giplanand@gmail.com', 0, 'ANAND', '2', '2', '2', '2', 'Uttar Pradesh', '2', 2, '2024-12-13 14:15:45', NULL, 'giplanand@gmail.com', NULL),
(18, 'giplanand@gmail.com', 0, 'ANAND', '2', '2', '2', '2', 'Uttar Pradesh', '2', 2, '2024-12-13 14:12:23', NULL, 'giplanand@gmail.com', NULL),
(17, 'giplanand@gmail.com', 0, 'ANAND', '2', '2', '2', '2', 'Uttar Pradesh', '2', 2, '2024-12-13 14:11:02', NULL, 'giplanand@gmail.com', NULL),
(21, 'giplanand@gmail.com', 0, 'ANAND', '9887755558', 'jaunpur', 'jnp', 'city', 'Uttar Pradesh', 'abc', 222202, '2024-12-16 06:28:37', NULL, 'giplanand@gmail.com', NULL),
(22, 'giplanand@gmail.com', 0, 'ANAND', '1', '1', '1', '1', 'Uttar Pradesh', '1', 1, '2024-12-16 06:37:25', NULL, 'giplanand@gmail.com', NULL),
(23, 'giplanand@gmail.com', 0, 'ANAND', '1', '1', '1', '1', 'Uttar Pradesh', '1', 1, '2024-12-16 06:37:54', NULL, 'giplanand@gmail.com', NULL),
(24, 'giplanand@gmail.com', 0, 'ANAND', '98877', 'abc', 'abc', 'city', 'Uttar Pradesh', 'landmark', 222202, '2024-12-16 06:53:44', NULL, 'giplanand@gmail.com', NULL),
(25, 'VP7240012@GMAIL.COM', 0, 'VIKASH KUMAR', '95171436816', '32 gadiya ramnagar jaunpur', '12158', 'mungra badshahpur', 'Uttar Pradesh', 'patel chauraha', 222200, '2024-12-16 07:33:08', NULL, 'VP7240012@GMAIL.COM', NULL),
(26, 'VP7240012@GMAIL.COM', 0, 'VIKASH KUMAR', '9517436818', 'mungra badshahpur jaunpur', '123', 'mungra badshahpur', 'Uttar Pradesh', 'patel chauraha', 222202, '2024-12-16 07:35:47', NULL, 'VP7240012@GMAIL.COM', NULL),
(27, 'VP7240012@GMAIL.COM', 0, 'VIKASH KUMAR', '9517436818', 'mungra badshahpur jaunpur', '125', 'mungra badshahpur', 'Uttar Pradesh', 'patel chauraha', 222200, '2024-12-16 07:46:30', NULL, 'VP7240012@GMAIL.COM', NULL),
(28, 'AMARKUMAR@GMAIL.COM', 0, 'ADITYA SINGH', '8756533638', 'sdfsdf', 'sesdds', 'Jaunpur', 'Uttar Pradesh', 'Block', 222202, '2024-12-16 07:57:41', NULL, 'AMARKUMAR@GMAIL.COM', NULL),
(29, 'AMARKUMAR@GMAIL.COM', 0, 'ADITYA SINGH', '9636000032', 'Pakadi', 'edrgdfg', 'Pratapgarh', 'Uttar Pradesh', 'Patti', 222204, '2024-12-16 08:02:34', NULL, 'AMARKUMAR@GMAIL.COM', NULL),
(30, 'AMARKUMAR@GMAIL.COM', 0, 'ADITYA SINGH', '7355324902', 'gdfgdfg', 'fdgfgdfg', 'Jaunpur', 'Uttar Pradesh', 'Block', 222202, '2024-12-16 08:16:39', NULL, 'AMARKUMAR@GMAIL.COM', NULL),
(31, 'giplanand@gmail.com', 0, 'ANAND', '888899', 'jajaj', 'jjj', 'jjj', 'Jammu and Kashmir', 'fkkdkk', 222202, '2024-12-16 12:21:53', NULL, 'giplanand@gmail.com', NULL),
(32, 'giplanand@gmail.com', 0, 'ANAND', '7', '7', '7', '7', 'Uttar Pradesh', '77', 7, '2024-12-16 12:36:08', NULL, 'giplanand@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', '123', '2017-01-24 16:21:18', '21-06-2018 08:27:55 PM');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `productId` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float(100,2) DEFAULT NULL,
  `total` float(100,2) NOT NULL,
  `size` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updatedOn` timestamp NULL DEFAULT NULL,
  `createdBy` varchar(255) NOT NULL,
  `updatedBy` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `userId`, `productId`, `quantity`, `price`, `total`, `size`, `color`, `createdOn`, `updatedOn`, `createdBy`, `updatedBy`) VALUES
(146, 'giplanand@gmail.com', '202', 2, 50.00, 100.00, '', '', '2024-11-18 04:05:34', NULL, 'giplanand@gmail.com', ''),
(143, 'giplanand@gmail.com', '209', 1, 5.00, 5.00, '', '', '2024-11-17 07:24:21', NULL, 'giplanand@gmail.com', ''),
(140, 'giplanand@gmail.com', '209', 1, 5.00, 5.00, '', '', '2024-11-17 06:50:54', NULL, 'giplanand@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `categoriesImage` varchar(255) NOT NULL,
  `commision` float(10,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `sgst` float(100,2) NOT NULL DEFAULT 0.00,
  `cgst` float(100,2) NOT NULL DEFAULT 0.00,
  `createdOn` datetime NOT NULL,
  `updatedOn` datetime NOT NULL,
  `createdBy` varchar(255) NOT NULL,
  `updatedBy` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `categoriesImage`, `commision`, `description`, `status`, `sgst`, `cgst`, `createdOn`, `updatedOn`, `createdBy`, `updatedBy`) VALUES
(12253, 'Fruiting Vegitables', '12253', 5.00, 'Vegitables', 1, 5.00, 5.00, '2024-12-10 03:54:09', '0000-00-00 00:00:00', 'Admin', ''),
(12249, 'Fruits', '12249', 10.00, 'Fruits are ............', 1, 6.00, 2.00, '2024-12-10 01:49:15', '0000-00-00 00:00:00', 'Admin', ''),
(12250, 'Combo Offer', '12250', 6.00, 'Combo offer are combination of fruits and vegitables.....', 1, 6.00, 6.00, '2024-12-10 01:50:53', '2024-12-10 01:51:24', 'Admin', ''),
(12251, 'Leafy Vegitables', '12251', 10.00, 'Leafy Vegitables ...........  ihdsufg  ', 1, 6.00, 4.00, '2024-12-10 03:52:42', '0000-00-00 00:00:00', 'Admin', ''),
(12252, 'Root Vegitables', '12252', 4.00, 'Rooot ... ifugv  fbvu', 1, 4.00, 4.00, '2024-12-10 03:53:28', '0000-00-00 00:00:00', 'Admin', ''),
(12248, 'Flowers &amp; Leaves', '12248', 20.00, 'Flower &amp; Leaves ...........................................................', 1, 5.00, 12.00, '2024-12-10 01:21:20', '0000-00-00 00:00:00', 'Admin', ''),
(12254, 'Gourd Vegitables', '12254', 8.00, 'vegitables', 1, 5.00, 5.00, '2024-12-10 03:54:49', '0000-00-00 00:00:00', 'Admin', ''),
(12255, 'Leguminous Vegitables', '12255', 5.00, 'vegitables', 1, 5.00, 5.00, '2024-12-10 03:55:27', '0000-00-00 00:00:00', 'Admin', ''),
(12256, 'Flowering Vegitables', '12256', 7.00, 'vegitables', 1, 5.00, 5.00, '2024-12-10 03:56:39', '0000-00-00 00:00:00', 'Admin', ''),
(12257, 'Stem vegitable', '12257', 10.00, 'vegitables', 1, 7.00, 7.00, '2024-12-10 03:57:06', '0000-00-00 00:00:00', 'Admin', ''),
(12258, 'Special Vegitables', '12258', 5.00, 'vegitables Description', 1, 2.00, 2.00, '2024-12-10 03:57:57', '0000-00-00 00:00:00', 'Admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `categorieshistory`
--

CREATE TABLE `categorieshistory` (
  `id` int(11) NOT NULL,
  `c_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sgst` float(100,2) NOT NULL,
  `cgst` float(100,2) NOT NULL,
  `categoriesImage` varchar(255) NOT NULL,
  `commision` float(10,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `createdOn` datetime NOT NULL,
  `createdBy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categorieshistory`
--

INSERT INTO `categorieshistory` (`id`, `c_id`, `name`, `sgst`, `cgst`, `categoriesImage`, `commision`, `description`, `createdOn`, `createdBy`) VALUES
(1, '12238', 'Freshly Cut and Sprouts', 0.00, 0.00, '12238', 5.00, 'Freshly cut and nutrient-packed sprouts, perfect for adding a crunchy, healthy boost to your meals.', '2024-11-30 01:47:26', '12238'),
(2, '12238', 'Freshly Cut and Sprouts', 0.00, 0.00, '12238', 5.00, 'Freshly cut and nutrient-packed sprouts, perfect for adding a crunchy, healthy boost to your meals.', '2024-11-30 01:51:19', '12238'),
(3, '12238', 'Freshly', 0.00, 0.00, '12238', 10.00, 'Freshly cut and nutrient-packed sprouts, perfect for adding a crunchy, healthy boost to your meals.', '2024-11-30 01:52:25', '12238'),
(4, '12238', 'Freshly', 0.00, 0.00, '12238', 10.00, 'Freshly cut and nutrient-packed sprouts, perfect for adding a crunchy, healthy boost to your meals.', '2024-11-30 01:54:02', '12238'),
(5, '0.00', 'Building Material', 0.00, 0.00, '0.00', 2.00, 'Building Material', '2024-12-07 06:59:01', '0.00'),
(6, '0.00', 'Building Material', 0.00, 0.00, '0.00', 7.00, 'Building Material', '2024-12-07 07:05:59', '0.00'),
(7, '0.00', 'Building Material', 0.00, 0.00, '0.00', 7.00, 'Building Material', '2024-12-07 07:06:20', '0.00'),
(8, '0.00', 'Building Material', 0.00, 0.00, '0.00', 7.00, 'Building Material', '2024-12-07 07:07:07', '0.00'),
(9, '0.00', 'Building Material', 0.00, 0.00, '0.00', 7.00, 'Building Material', '2024-12-07 07:09:01', '0.00'),
(10, '0.00', 'Building Material', 0.00, 0.00, '0.00', 7.00, 'Building Material', '2024-12-07 07:14:18', '0.00'),
(11, '0.00', 'Building Material', 0.00, 0.00, '0.00', 7.00, 'Building Material', '2024-12-07 07:16:35', '0.00'),
(12, '131', 'Building Material', 0.00, 0.00, '131', 7.00, 'Building Material', '2024-12-09 09:35:16', '131'),
(13, '131', 'Building Material', 0.00, 0.00, '131', 7.00, 'Building Material', '2024-12-09 09:35:39', '131'),
(14, '131', 'Building Material', 0.00, 0.00, '131', 7.00, 'Building Material', '2024-12-09 09:36:23', '131'),
(15, '131', 'Building Material', 0.00, 0.00, '131', 7.00, 'Building Material', '2024-12-09 09:36:34', '131'),
(16, '12240', 'Combo recipe', 0.00, 0.00, '12240', 25.00, 'Freshly packed combo of fruits and vegetables, providing a perfect balance of nutrients for a healthy and vibrant lifestyle.', '2024-12-09 09:36:50', '12240'),
(17, '12237', 'Fresh Fruit', 0.00, 0.00, '12237', 20.00, 'Fresh Fruit straight from the farm, packed with nutrients and bursting with flavor for your healthy meals.', '2024-12-09 09:40:28', '12237'),
(18, '12237', 'Fresh Fruit', 0.00, 0.00, '12237', 20.00, 'Fresh Fruit straight from the farm, packed with nutrients and bursting with flavor for your healthy meals.', '2024-12-09 09:40:48', '12237'),
(19, '12237', 'Fresh Fruit', 0.00, 0.00, '12237', 20.00, 'Fresh Fruit straight from the farm, packed with nutrients and bursting with flavor for your healthy meals.', '2024-12-09 09:41:40', '12237'),
(20, '12237', 'Fresh Fruit', 0.00, 0.00, '12237', 20.00, 'Fresh Fruit straight from the farm, packed with nutrients and bursting with flavor for your healthy meals.', '2024-12-09 09:41:52', '12237'),
(21, '12237', 'Fresh Fruit', 0.00, 0.00, '12237', 20.00, 'Fresh Fruit straight from the farm, packed with nutrients and bursting with flavor for your healthy meals.', '2024-12-09 09:42:37', '12237'),
(22, '12237', 'Fresh Fruit', 0.00, 0.00, '12237', 20.00, 'Fresh Fruit straight from the farm, packed with nutrients and bursting with flavor for your healthy meals.', '2024-12-09 09:43:45', '12237'),
(23, '12237', 'Fresh Fruit', 0.00, 0.00, '12237', 20.00, 'Fresh Fruit straight from the farm, packed with nutrients and bursting with flavor for your healthy meals.', '2024-12-09 09:44:09', '12237'),
(24, '12237', 'Fresh Fruit', 0.00, 0.00, '12237', 20.00, 'Fresh Fruit straight from the farm, packed with nutrients and bursting with flavor for your healthy meals.', '2024-12-09 09:45:20', '12237'),
(25, '12237', 'Fresh Fruit', 0.00, 0.00, '12237', 20.00, 'Fresh Fruit straight from the farm, packed with nutrients and bursting with flavor for your healthy meals.', '2024-12-09 09:45:32', '12237'),
(26, '', '', 0.00, 0.00, '', 0.00, '', '0000-00-00 00:00:00', 'Deleted'),
(27, '12242', '', 0.00, 0.00, '', 0.00, '', '0000-00-00 00:00:00', 'Deleted'),
(28, '12242', '', 0.00, 0.00, '', 0.00, '', '0000-00-00 00:00:00', 'Deleted'),
(29, '12242', '', 0.00, 0.00, '', 0.00, '', '0000-00-00 00:00:00', 'Deleted'),
(30, '12242', '', 0.00, 0.00, '', 0.00, '', '0000-00-00 00:00:00', 'Deleted'),
(31, '129', '', 0.00, 0.00, '', 0.00, '', '0000-00-00 00:00:00', 'Deleted'),
(32, '129', '', 0.00, 0.00, '', 0.00, '', '0000-00-00 00:00:00', 'Deleted'),
(33, 'Havan Samagri', '', 0.00, 0.00, '', 0.00, '', '0000-00-00 00:00:00', 'Deleted'),
(34, 'Havan Samagri', '', 0.00, 0.00, '', 0.00, '', '0000-00-00 00:00:00', 'Deleted'),
(35, 'Havan Samagri', '', 0.00, 0.00, '', 0.00, '', '0000-00-00 00:00:00', 'Deleted'),
(36, '130', '', 0.00, 0.00, '', 0.00, 'Havan Samagri', '0000-00-00 00:00:00', 'Deleted'),
(37, '130', '', 0.00, 0.00, '', 0.00, 'Havan Samagri', '0000-00-00 00:00:00', 'Deleted'),
(38, '12241', '', 0.00, 0.00, '', 0.00, 'Fresh leafy greens and aromatic herbs, handpicked for added flavor and nutrition in your daily meals.', '0000-00-00 00:00:00', 'Deleted'),
(39, '12241', '', 0.00, 0.00, '', 0.00, 'Fresh leafy greens and aromatic herbs, handpicked for added flavor and nutrition in your daily meals.', '0000-00-00 00:00:00', 'Deleted'),
(40, '12241', 'Leafies and Herbs', 0.00, 0.00, '', 25.00, 'Fresh leafy greens and aromatic herbs, handpicked for added flavor and nutrition in your daily meals.', '0000-00-00 00:00:00', 'Deleted'),
(41, '12241', 'Leafies and Herbs', 0.00, 0.00, '', 25.00, 'Fresh leafy greens and aromatic herbs, handpicked for added flavor and nutrition in your daily meals.', '0000-00-00 00:00:00', 'Deleted'),
(42, '12241', 'Leafies and Herbs', 0.00, 0.00, '', 25.00, 'Fresh leafy greens and aromatic herbs, handpicked for added flavor and nutrition in your daily meals.', '2024-12-09 12:38:50', 'Deleted'),
(43, '12239', 'HydroPonic', 0.00, 0.00, '', 25.00, 'Fresh hydroponic vegetables, grown without soil using nutrient-rich water, offering you cleaner, fresher, and more sustainable produce for your healthy meals.', '2024-12-09 12:39:04', 'Deleted'),
(44, '12239', 'HydroPonic', 0.00, 0.00, '', 25.00, 'Fresh hydroponic vegetables, grown without soil using nutrient-rich water, offering you cleaner, fresher, and more sustainable produce for your healthy meals.', '2024-12-09 12:40:39', 'Deleted'),
(45, '12244', 'Root Vegitables', 0.00, 0.00, '', 25.00, 'Root vegetables, handpicked at their peak freshness, offering the best flavors and nutrition for every season.', '2024-12-09 12:47:54', 'Deleted'),
(46, '12243', 'Seasonal', 0.00, 0.00, '', 25.00, 'Seasonal vegetables, handpicked at their peak freshness, offering the best flavors and nutrition for every season.', '2024-12-09 12:48:34', 'Deleted'),
(47, '128', 'Vegetables', 0.00, 0.00, '', 10.00, 'BEST QUALITY PRODUCTE', '2024-12-09 01:45:20', 'Deleted'),
(48, '131', 'Building Material', 0.00, 0.00, '131', 7.00, 'Building Material', '2024-12-09 01:47:13', '131'),
(49, '131', 'Building Material', 0.00, 0.00, '131', 7.00, 'Building Material', '2024-12-09 02:27:08', '131'),
(50, '12245', 'Green Vegitable', 0.00, 0.00, '12245', 5.00, 'GLINTEL', '2024-12-09 02:31:22', '12245'),
(51, '131', 'Building Material', 0.00, 0.00, '131', 7.00, 'Building Material', '2024-12-09 03:09:28', '131'),
(52, '131', 'Building Material', 0.00, 0.00, '131', 7.00, 'Building Material', '2024-12-09 03:09:44', '131'),
(53, '131', 'Building Material', 0.00, 0.00, '', 10.00, 'Building Material', '2024-12-09 03:10:37', 'Deleted'),
(54, '12246', 'ALLPHABETS', 0.00, 0.00, '', 5.00, 'ABCD', '2024-12-10 01:46:50', 'Deleted'),
(55, '12240', 'Combo recipe', 0.00, 0.00, '', 25.00, 'Freshly packed combo of fruits and vegetables, providing a perfect balance of nutrients for a healthy and vibrant lifestyle.', '2024-12-10 01:46:56', 'Deleted'),
(56, '12247', 'NUMERIC', 0.00, 0.00, '', 5.00, 'kskksksk', '2024-12-10 01:47:39', 'Deleted'),
(57, '12245', 'Green Vegitable', 0.00, 0.00, '', 5.00, 'GLINTEL', '2024-12-10 01:47:39', 'Deleted'),
(58, '12237', 'Fresh Fruit', 0.00, 0.00, '', 20.00, 'Fresh Fruit straight from the farm, packed with nutrients and bursting with flavor for your healthy meals.', '2024-12-10 01:47:44', 'Deleted');

-- --------------------------------------------------------

--
-- Table structure for table `commision`
--

CREATE TABLE `commision` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `amount` float(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `createdBy` varchar(255) NOT NULL,
  `updatedOn` varchar(255) NOT NULL,
  `updatedBy` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commissionhistory`
--

CREATE TABLE `commissionhistory` (
  `id` int(11) NOT NULL DEFAULT 0,
  `categoriesId` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `amount` float(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updatedOn` varchar(255) NOT NULL,
  `updatedBy` varchar(255) NOT NULL,
  `createdBy` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deliverybankdetails`
--

CREATE TABLE `deliverybankdetails` (
  `id` int(11) NOT NULL,
  `deliveryId` varchar(255) NOT NULL,
  `bankName` varchar(255) NOT NULL,
  `accountHolderName` varchar(255) NOT NULL,
  `ifscCode` varchar(255) NOT NULL,
  `accountNo` bigint(20) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `createdBy` varchar(255) NOT NULL,
  `updatedOn` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedBy` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `deliverybankdetails`
--

INSERT INTO `deliverybankdetails` (`id`, `deliveryId`, `bankName`, `accountHolderName`, `ifscCode`, `accountNo`, `createdOn`, `createdBy`, `updatedOn`, `updatedBy`) VALUES
(19, '91', '', '', '', 0, '2024-11-04 21:06:06', 'Admin', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `deliveryboy`
--

CREATE TABLE `deliveryboy` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phoneNo` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `workingAddress` varchar(255) NOT NULL,
  `regidenceAddress` varchar(255) NOT NULL,
  `workingPincode` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `aadhar` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `createdBy` varchar(255) NOT NULL,
  `updatedBy` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `deliveryboy`
--

INSERT INTO `deliveryboy` (`id`, `name`, `phoneNo`, `email`, `password`, `workingAddress`, `regidenceAddress`, `workingPincode`, `city`, `status`, `aadhar`, `pan`, `image`, `createdOn`, `updatedOn`, `createdBy`, `updatedBy`) VALUES
(91, 'DELIVERY BOY', 1233211233, 'NEW@GMAIL.COM', '5153', 'JAUNAPUR', 'JAUNPUR BADSHAHPUR', 2222202, '', 0, '1236547899888', '555', '../img/delivery/', '2024-11-05 02:36:06', '0000-00-00 00:00:00', 'Admin', ''),
(93, 'RAHUL', 959595959, 'RAHUL@GMAIL.COM', '2072', 'M BADSHAPUR', 'DHOLAKPUR', 222202, 'SATHARIYA', 0, '45464', '8', '../img/delivery/', '2024-12-14 01:04:44', '2024-12-14 07:34:44', 'Admin', ''),
(94, 'SOLEY', 4545865848, 'SOLEY@GMAIL.COM', '6162', 'MUNGRA', 'ABC', 222202, 'SATHARIYA', 0, '68749848', 'DSDEFHU', '../img/delivery/', '2024-12-14 01:32:40', '2024-12-14 08:02:40', 'Admin', ''),
(95, 'SOLEY', 4545865848, 'SOLEY@GMAIL.COM', '6162', 'MUNGRA', 'ABC', 222202, 'SATHARIYA', 0, '68749848', 'DSDEFHU', '../img/delivery/', '2024-12-14 01:34:06', '2024-12-14 08:04:07', 'Admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `deliveryboyhistory`
--

CREATE TABLE `deliveryboyhistory` (
  `id` int(11) NOT NULL DEFAULT 0,
  `delivery_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phoneNo` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `workingAddress` varchar(255) NOT NULL,
  `regidenceAddress` varchar(255) NOT NULL,
  `workingPincode` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `aadhar` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `createdOn` datetime NOT NULL,
  `createdBy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `deliveryboyhistory`
--

INSERT INTO `deliveryboyhistory` (`id`, `delivery_id`, `name`, `phoneNo`, `email`, `password`, `workingAddress`, `regidenceAddress`, `workingPincode`, `city`, `status`, `aadhar`, `pan`, `image`, `createdOn`, `createdBy`) VALUES
(75, '', 'RAHUL KUMAR PATEL', 9999999999999, 'GIPLANAND@GMAIL.COM', '0', 'JAUNPUR MADHUPUR MARKET', 'MADARDEEH MUNGRA BADSHAPUR', 222201, '', 0, '8888888888', 'ABCDEDB888', '../img/delivery/', '2024-11-05 10:06:50', 'Admin'),
(88, '', 'RAJESH', 999999, 'GIPLANAND@GMAIL.COM', '0', 'JAUNPUR', 'JAUNPUR BADSHAHPUR', 2222209, '', 0, '6666666', '66666666', '../img/delivery/', '2024-11-05 10:46:34', 'Admin'),
(89, '', 'RAJESH KUMAR', 5555555, 'GGG2@GMAIL.COM', '123', 'KKKKKK', 'KKKKK', 22222, '', 0, '88888', 'KKKK', '../img/delivery/', '2024-11-05 11:52:09', 'Admin'),
(90, '', 'RAKESH', 55555, 'ABC@GMAIL.COM', '6723', 'RAJESH', 'JJJJ', 0, '', 0, 'KKKK', 'KKKK', '../img/delivery/', '2024-11-05 12:13:43', 'Admin'),
(91, '', 'DELIVERY BOY', 1233211233, 'NEW@GMAIL.COM', '5153', 'JAUNAPUR', 'JAUNPUR BADSHAHPUR', 2222202, '', 0, '1236547899888', '555', '../img/delivery/', '2024-11-05 02:36:06', 'Admin'),
(92, '', 'RAJESH YADAV', 55555, '55SSLD@GMAL..COM', '1328', '55555', '5555', 55, '', 0, '55', '5555', '../img/delivery/', '2024-11-11 11:18:55', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `deliveryincome`
--

CREATE TABLE `deliveryincome` (
  `id` int(11) NOT NULL,
  `deliveryId` varchar(255) NOT NULL,
  `sellarId` varchar(255) NOT NULL,
  `orderId` varchar(255) NOT NULL,
  `amount` float(10,2) NOT NULL,
  `commission` float(10,2) NOT NULL,
  `otherCommision` float(10,2) NOT NULL,
  `fuelCharges` float(10,2) NOT NULL,
  `tipAmount` float(10,2) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updatedBy` varchar(255) NOT NULL,
  `updateOn` varchar(255) NOT NULL,
  `createdBy` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `deliveryincome`
--

INSERT INTO `deliveryincome` (`id`, `deliveryId`, `sellarId`, `orderId`, `amount`, `commission`, `otherCommision`, `fuelCharges`, `tipAmount`, `createdOn`, `updatedBy`, `updateOn`, `createdBy`) VALUES
(12, '91', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, '2024-11-04 21:06:06', '', '', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `deliverypayment`
--

CREATE TABLE `deliverypayment` (
  `id` int(11) NOT NULL,
  `workingPincode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `createdOn` datetime NOT NULL,
  `createdBy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `deliverypayment`
--

INSERT INTO `deliverypayment` (`id`, `workingPincode`, `city`, `createdOn`, `createdBy`) VALUES
(1, '4', 'WORKING CITY', '2024-11-30 06:23:35', 'Admin'),
(2, '4', 'WORKING CITY', '2024-11-30 06:24:12', 'Admin'),
(3, '222202', 'MUNGRA BADSHAPUR', '2024-12-09 03:13:32', 'Admin'),
(4, '222202', 'BADSHAHPUR', '2024-12-10 01:32:15', 'Admin'),
(5, '222202', 'SATHARIYA', '2024-12-14 12:56:29', 'Admin'),
(6, '222202', 'SATHARIYA', '2024-12-14 01:04:44', 'Admin'),
(7, '222202', 'SATHARIYA', '2024-12-14 01:32:40', 'Admin'),
(8, '222202', 'SATHARIYA', '2024-12-14 01:34:06', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `offerId` varchar(255) NOT NULL,
  `offerAmount` float(10,2) NOT NULL,
  `offerName` varchar(255) NOT NULL,
  `offerDuration` varchar(255) NOT NULL,
  `offerCode` varchar(255) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updatedOn` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedBy` varchar(255) NOT NULL,
  `createdBy` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL,
  `orderId` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `totalQuantity` float(100,2) NOT NULL,
  `subTotal` float(100,2) NOT NULL DEFAULT 0.00,
  `total` double(100,2) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT '''PENDING''',
  `deliveryId` varchar(255) DEFAULT NULL,
  `deliveryType` varchar(255) DEFAULT 'Standard Delivery',
  `paymentId` varchar(255) NOT NULL,
  `verificationCode` varchar(255) NOT NULL,
  `paymentResponse` varchar(100) NOT NULL DEFAULT '''PAID''',
  `sgst` float(100,2) NOT NULL DEFAULT 0.00,
  `cgst` float(100,2) NOT NULL DEFAULT 0.00,
  `adminCommision` float(10,2) NOT NULL,
  `deliveryInstruction` text DEFAULT NULL,
  `deliveryAddress` varchar(100) NOT NULL,
  `sellerId` varchar(255) DEFAULT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updatedOn` timestamp NULL DEFAULT current_timestamp(),
  `createdBy` varchar(255) NOT NULL,
  `updatedBy` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `orderId`, `userId`, `totalQuantity`, `subTotal`, `total`, `status`, `deliveryId`, `deliveryType`, `paymentId`, `verificationCode`, `paymentResponse`, `sgst`, `cgst`, `adminCommision`, `deliveryInstruction`, `deliveryAddress`, `sellerId`, `createdOn`, `updatedOn`, `createdBy`, `updatedBy`) VALUES
(364, 'ORD_17343381132120', 'AMARKUMAR@GMAIL.COM', 2.00, 40.00, 40.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXmeQCdV5AYJdn', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ADITYA SINGH<br>sdfsdf<br>sesdds<br>Jaunpur,Uttar Pradesh,222202<br>Landmark:Block<br>Mobile:87', '108', '2024-12-16 12:02:11', '2024-12-16 08:35:37', 'AMARKUMAR@GMAIL.COM', NULL),
(363, 'ORD_17343380168755', 'AMARKUMAR@GMAIL.COM', 2.00, 40.00, 40.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXmchi1MAZZpyN', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ADITYA SINGH<br>Pakadi<br>edrgdfg<br>Pratapgarh,Uttar Pradesh,222204<br>Landmark:Patti<br>Mobil', '', '2024-12-16 08:33:59', '2024-12-16 08:33:59', 'AMARKUMAR@GMAIL.COM', NULL),
(362, 'ORD_17343378174463', 'VP7240012@GMAIL.COM', 1.00, 18.00, 18.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXmZBbofLMkEZd', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>VIKASH KUMAR<br>32 gadiya ramnagar jaunpur<br>12158<br>mungra badshahpur,Uttar Pradesh,222200<b', '', '2024-12-16 08:30:39', '2024-12-16 08:30:39', 'VP7240012@GMAIL.COM', NULL),
(361, 'ORD_17343374209359', 'AMARKUMAR@GMAIL.COM', 4.00, 80.00, 80.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXmSFjNhB7KA5K', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ADITYA SINGH<br>sdfsdf<br>sesdds<br>Jaunpur,Uttar Pradesh,222202<br>Landmark:Block<br>Mobile:87', '', '2024-12-16 08:24:06', '2024-12-16 08:24:06', 'AMARKUMAR@GMAIL.COM', NULL),
(360, 'ORD_17343374181723', 'VP7240012@GMAIL.COM', 1.00, 30.00, 30.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXmSABlTsDM5Et', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>VIKASH KUMAR<br>32 gadiya ramnagar jaunpur<br>12158<br>mungra badshahpur,Uttar Pradesh,222200<b', '', '2024-12-16 08:24:01', '2024-12-16 08:24:01', 'VP7240012@GMAIL.COM', NULL),
(359, 'ORD_17343365253124', 'VP7240012@GMAIL.COM', 1.00, 50.00, 50.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXmCR0KxLLeWTU', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>VIKASH KUMAR<br>32 gadiya ramnagar jaunpur<br>12158<br>mungra badshahpur,Uttar Pradesh,222200<b', '', '2024-12-16 08:09:06', '2024-12-16 08:09:06', 'VP7240012@GMAIL.COM', NULL),
(358, 'ORD_17343361294268', 'AMARKUMAR@GMAIL.COM', 2.00, 100.00, 100.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXm5UtwunLcocs', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, 'Name: ADITYA SINGH <br> Pakadi <br> Pratapgarh, Uttar Pradesh, 222204 <br> Landmark: Patti <br> Mobi', '', '2024-12-16 08:02:34', '2024-12-16 08:02:34', 'AMARKUMAR@GMAIL.COM', NULL),
(357, 'ORD_17343358794873', 'VP7240012@GMAIL.COM', 50.00, 1500.00, 1500.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXm14ec9IXz3UP', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>VIKASH KUMAR<br>32 gadiya ramnagar jaunpur<br>12158<br>mungra badshahpur,Uttar Pradesh,222200<b', '', '2024-12-16 07:58:22', '2024-12-16 07:58:22', 'VP7240012@GMAIL.COM', NULL),
(356, 'ORD_17343358301773', 'AMARKUMAR@GMAIL.COM', 25.00, 875.00, 875.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXm0Lo6Mb3YrAj', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, 'Name: ADITYA SINGH <br> sdfsdf <br> Jaunpur, Uttar Pradesh, 222202 <br> Landmark: Block <br> Mobile:', '', '2024-12-16 07:57:41', '2024-12-16 07:57:41', 'AMARKUMAR@GMAIL.COM', NULL),
(355, 'ORD_17343352484136', 'VP7240012@GMAIL.COM', 9.00, 162.00, 162.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXlq2lXu9zsV8T', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>VIKASH KUMAR<br>mungra badshahpur jaunpur<br>125<br>mungra badshahpur,Uttar Pradesh,222200<br>L', '', '2024-12-16 07:47:55', '2024-12-16 07:47:55', 'VP7240012@GMAIL.COM', NULL),
(354, 'ORD_17343351678640', 'VP7240012@GMAIL.COM', 1.00, 18.00, 18.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXloYCHnlyDkGB', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, 'Name: VIKASH KUMAR <br> mungra badshahpur jaunpur <br> mungra badshahpur, Uttar Pradesh, 222200 <br>', '', '2024-12-16 07:46:30', '2024-12-16 07:46:30', 'VP7240012@GMAIL.COM', NULL),
(353, 'ORD_17343346379375', 'VP7240012@GMAIL.COM', 1.00, 30.00, 30.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXlfDb3tDIRjZ2', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>VIKASH KUMAR<br>mungra badshahpur jaunpur<br>123<br>mungra badshahpur,Uttar Pradesh,222202<br>L', '', '2024-12-16 07:37:40', '2024-12-16 07:37:40', 'VP7240012@GMAIL.COM', NULL),
(352, 'ORD_17343345233071', 'VP7240012@GMAIL.COM', 1.00, 55.00, 55.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXldECxBEef5ZM', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, 'Name: VIKASH KUMAR <br> mungra badshahpur jaunpur <br> mungra badshahpur, Uttar Pradesh, 222202 <br>', '', '2024-12-16 07:35:47', '2024-12-16 07:35:47', 'VP7240012@GMAIL.COM', NULL),
(351, 'ORD_17343331812193', 'VP7240012@GMAIL.COM', 2.00, 45.00, 45.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXlFcK0oWb4hKc', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, 'Name: VIKASH KUMAR <br> 32 128 gadiya ramnagar jaunpur <br> mungra badshahpur, Uttar Pradesh, 222200', '', '2024-12-16 07:33:35', '2024-12-16 07:13:26', 'VP7240012@GMAIL.COM', NULL),
(350, 'ORD_17343329982363', 'giplanand@gmail.com', 1.00, 30.00, 30.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXlCMcKz25MdwP', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ANAND<br>2<br>2<br>2,Uttar Pradesh,2<br>Landmark:2<br>Mobile:2</pre>', '', '2024-12-16 07:10:21', '2024-12-16 07:10:21', 'giplanand@gmail.com', NULL),
(349, 'ORD_17343320019209', 'giplanand@gmail.com', 2.00, 60.00, 60.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXkuns4v7ztH5B', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, 'Name: ANAND <br> abc <br> city, Uttar Pradesh, 222202 <br> Landmark: landmark <br> Mobile: 98877', '', '2024-12-16 06:53:44', '2024-12-16 06:53:44', 'giplanand@gmail.com', NULL),
(348, 'ORD_17343318763302', 'giplanand@gmail.com', 1.00, 250.00, 250.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXksbECotMah75', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ANAND<br>2<br>2<br>2,Uttar Pradesh,2<br>Landmark:2<br>Mobile:2</pre>', '', '2024-12-16 06:51:39', '2024-12-16 06:51:39', 'giplanand@gmail.com', NULL),
(347, 'ORD_17343304949687', 'giplanand@gmail.com', 1.00, 30.00, 30.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXkUHaCX7TdSuU', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, 'Name: ANAND <br> jaunpur <br> city, Uttar Pradesh, 222202 <br> Landmark: abc <br> Mobile: 9887755558', '', '2024-12-16 06:28:37', '2024-12-16 06:28:37', 'giplanand@gmail.com', NULL),
(346, 'ORD_17341655375736', 'TEST@W.COM', 1.00, 35.00, 35.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PWzeZDipNyMssZ', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, 'Name: TEST <br> Hh <br> Hhhh, Uttar Pradesh, 22202002 <br> Landmark: Hdhdj <br> Mobile: 6868665', '', '2024-12-14 08:39:45', '2024-12-14 08:39:45', 'TEST@W.COM', NULL),
(365, 'ORD_17343381716601', 'AMARKUMAR@GMAIL.COM', 4.00, 80.00, 80.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXmfUzIgWMf3AG', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ADITYA SINGH<br>sdfsdf<br>sesdds<br>Jaunpur,Uttar Pradesh,222202<br>Landmark:Block<br>Mobile:87', '', '2024-12-16 08:36:38', '2024-12-16 08:36:38', 'AMARKUMAR@GMAIL.COM', NULL),
(366, 'ORD_17343384641451', 'AMARKUMAR@GMAIL.COM', 6.00, 120.00, 120.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXmkd6Z8rJYF3N', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ADITYA SINGH<br>sdfsdf<br>sesdds<br>Jaunpur,Uttar Pradesh,222202<br>Landmark:Block<br>Mobile:87', '', '2024-12-16 08:41:30', '2024-12-16 08:41:30', 'AMARKUMAR@GMAIL.COM', NULL),
(367, 'ORD_17343387021145', 'AMARKUMAR@GMAIL.COM', 1.00, 20.00, 20.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXmonKcYj1okyk', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ADITYA SINGH<br>gdfgdfg<br>fdgfgdfg<br>Jaunpur,Uttar Pradesh,222202<br>Landmark:Block<br>Mobile', '', '2024-12-16 08:45:26', '2024-12-16 08:45:26', 'AMARKUMAR@GMAIL.COM', NULL),
(368, 'ORD_17343389743643', 'AMARKUMAR@GMAIL.COM', 2.00, 40.00, 40.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXmtZdNDu8U7El', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ADITYA SINGH<br>Pakadi<br>edrgdfg<br>Pratapgarh,Uttar Pradesh,222204<br>Landmark:Patti<br>Mobil', '', '2024-12-16 08:49:57', '2024-12-16 08:49:58', 'AMARKUMAR@GMAIL.COM', NULL),
(369, 'ORD_17343409802460', 'VP7240012@GMAIL.COM', 1.00, 30.00, 30.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXnSwgUA6uAg4s', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>VIKASH KUMAR<br>32 gadiya ramnagar jaunpur<br>12158<br>mungra badshahpur,Uttar Pradesh,222200<b', '', '2024-12-16 09:23:26', '2024-12-16 09:23:26', 'VP7240012@GMAIL.COM', NULL),
(370, 'ORD_17343411928676', 'VP7240012@GMAIL.COM', 1.00, 30.00, 30.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXnWw2t0JuqTkY', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>VIKASH KUMAR<br>32 gadiya ramnagar jaunpur<br>12158<br>mungra badshahpur,Uttar Pradesh,222200<b', '', '2024-12-16 09:27:13', '2024-12-16 09:27:13', 'VP7240012@GMAIL.COM', NULL),
(371, 'ORD_17343413632954', 'VP7240012@GMAIL.COM', 4.00, 200.00, 200.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXnZc2E4qA95hX', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>VIKASH KUMAR<br>32 gadiya ramnagar jaunpur<br>12158<br>mungra badshahpur,Uttar Pradesh,222200<b', '', '2024-12-16 09:29:45', '2024-12-16 09:29:45', 'VP7240012@GMAIL.COM', NULL),
(372, 'ORD_17343414673013', 'VP7240012@GMAIL.COM', 1.00, 50.00, 50.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXnbSyH1uO0baN', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>VIKASH KUMAR<br>32 gadiya ramnagar jaunpur<br>12158<br>mungra badshahpur,Uttar Pradesh,222200<b', '', '2024-12-16 09:31:30', '2024-12-16 09:31:30', 'VP7240012@GMAIL.COM', NULL),
(373, 'ORD_17343443562233', 'VP7240012@GMAIL.COM', 4.00, 80.00, 80.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXoQKMH85CR3nl', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>VIKASH KUMAR<br>mungra badshahpur jaunpur<br>125<br>mungra badshahpur,Uttar Pradesh,222200<br>L', '', '2024-12-16 10:19:39', '2024-12-16 10:19:39', 'VP7240012@GMAIL.COM', NULL),
(374, 'ORD_17343516889526', 'giplanand@gmail.com', 2.00, 60.00, 60.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXqVPGubyRzCH9', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, 'Name: ANAND <br> jajaj <br> jjj, Jammu and Kashmir, 222202 <br> Landmark: fkkdkk <br> Mobile: 888899', '', '2024-12-16 12:21:53', '2024-12-16 12:21:53', 'giplanand@gmail.com', NULL),
(375, 'ORD_17343525365674', 'giplanand@gmail.com', 1.00, 45.00, 45.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PXqkJUvJn7vccf', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, 'Name: ANAND <br> 7 <br> 7, Uttar Pradesh, 7 <br> Landmark: 77 <br> Mobile: 7', '', '2024-12-16 12:36:08', '2024-12-16 12:36:08', 'giplanand@gmail.com', NULL),
(376, 'ORD_17344116769597', 'giplanand@gmail.com', 1.00, 30.00, 30.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PY7XVHlpVzQfxd', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ANAND<br>2<br>2<br>2,Uttar Pradesh,2<br>Landmark:2<br>Mobile:2</pre>', '', '2024-12-17 05:01:37', '2024-12-17 05:01:37', 'giplanand@gmail.com', NULL),
(377, 'ORD_17344118207394', 'giplanand@gmail.com', 2.00, 265.00, 265.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PY7a122hsmM02r', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ANAND<br>2<br>2<br>2,Uttar Pradesh,2<br>Landmark:2<br>Mobile:2</pre>', '', '2024-12-17 05:04:01', '2024-12-17 05:04:01', 'giplanand@gmail.com', NULL),
(378, 'ORD_17344123405256', 'giplanand@gmail.com', 1.00, 15.00, 15.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PY7jAu3bnfTlbe', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ANAND<br>2<br>2<br>2,Uttar Pradesh,2<br>Landmark:2<br>Mobile:2</pre>', '', '2024-12-17 05:12:40', '2024-12-17 05:12:40', 'giplanand@gmail.com', NULL),
(379, 'ORD_17344124205989', 'giplanand@gmail.com', 1.00, 250.00, 250.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PY7kbbvDaxy8Hf', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ANAND<br>2<br>2<br>2,Uttar Pradesh,2<br>Landmark:2<br>Mobile:2</pre>', '', '2024-12-17 05:14:02', '2024-12-17 05:14:02', 'giplanand@gmail.com', NULL),
(380, 'ORD_17344985323149', 'giplanand@gmail.com', 1.00, 50.00, 50.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PYWCiH4ACVdPzh', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ANAND<br>2<br>2<br>2,Uttar Pradesh,2<br>Landmark:2<br>Mobile:2</pre>', '', '2024-12-18 05:09:17', '2024-12-18 05:09:17', 'giplanand@gmail.com', NULL),
(381, 'ORD_17345127787246', 'giplanand@gmail.com', 1.00, 50.00, 50.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PYaFe2fILfMmtw', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ANAND<br>2<br>2<br>2,Uttar Pradesh,2<br>Landmark:2<br>Mobile:2</pre>', '', '2024-12-18 09:09:20', '2024-12-18 09:09:20', 'giplanand@gmail.com', NULL),
(382, 'ORD_17345135949539', 'giplanand@gmail.com', 2.00, 60.00, 60.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PYaTpXKY37ARb4', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ANAND<br>2<br>2<br>2,Uttar Pradesh,2<br>Landmark:2<br>Mobile:2</pre>', '', '2024-12-18 09:20:16', '2024-12-18 09:20:16', 'giplanand@gmail.com', NULL),
(383, 'ORD_17345146671796', 'giplanand@gmail.com', 2.00, 60.00, 60.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PYamjej43p9j8B', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ANAND<br>2<br>2<br>2,Uttar Pradesh,2<br>Landmark:2<br>Mobile:2</pre>', '', '2024-12-18 09:38:09', '2024-12-18 09:38:09', 'giplanand@gmail.com', NULL),
(384, 'ORD_17345147278295', 'giplanand@gmail.com', 9.00, 270.00, 270.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PYanlD6Vdifn9g', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ANAND<br>2<br>2<br>2,Uttar Pradesh,2<br>Landmark:2<br>Mobile:2</pre>', '', '2024-12-18 09:39:07', '2024-12-18 09:39:07', 'giplanand@gmail.com', NULL),
(385, 'ORD_17345149094297', 'giplanand@gmail.com', 1.00, 50.00, 50.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PYar0hjIoNdOML', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ANAND<br>2<br>2<br>2,Uttar Pradesh,2<br>Landmark:2<br>Mobile:2</pre>', '', '2024-12-18 09:42:12', '2024-12-18 09:42:12', 'giplanand@gmail.com', NULL),
(386, 'ORD_17345153943886', 'giplanand@gmail.com', 3.00, 54.00, 54.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PYbDZiqnsoSxx7', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ANAND<br>2<br>2<br>2,Uttar Pradesh,2<br>Landmark:2<br>Mobile:2</pre>', '', '2024-12-18 10:03:35', '2024-12-18 10:03:35', 'giplanand@gmail.com', NULL),
(387, 'ORD_17345167216764', 'giplanand@gmail.com', 3.00, 90.00, 90.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PYbMsHAlK9sdDT', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ANAND<br>2<br>2<br>2,Uttar Pradesh,2<br>Landmark:2<br>Mobile:2</pre>', '', '2024-12-18 10:12:22', '2024-12-18 10:12:22', 'giplanand@gmail.com', NULL),
(388, 'ORD_17345169503631', 'giplanand@gmail.com', 6.00, 180.00, 180.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PYbQuYzFXHOxUi', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ANAND<br>2<br>2<br>2,Uttar Pradesh,2<br>Landmark:2<br>Mobile:2</pre>', '', '2024-12-18 10:16:12', '2024-12-18 10:16:12', 'giplanand@gmail.com', NULL),
(389, 'ORD_17345172638735', 'giplanand@gmail.com', 2.00, 36.00, 36.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PYbWRQasRCOE4C', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ANAND<br>2<br>2<br>2,Uttar Pradesh,2<br>Landmark:2<br>Mobile:2</pre>', '', '2024-12-18 10:21:26', '2024-12-18 10:21:26', 'giplanand@gmail.com', NULL),
(390, 'ORD_17345176147988', 'giplanand@gmail.com', 1.00, 18.00, 18.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PYbcb6OdxT6RmF', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ANAND<br>2<br>2<br>2,Uttar Pradesh,2<br>Landmark:2<br>Mobile:2</pre>', ' 108', '2024-12-18 10:27:15', '2024-12-18 10:27:15', 'giplanand@gmail.com', NULL),
(391, 'ORD_17345195093406', 'giplanand@gmail.com', 4.00, 140.00, 140.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PYc9z5phWGmcZA', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ANAND<br>2<br>2<br>2,Uttar Pradesh,2<br>Landmark:2<br>Mobile:2</pre>', ' 112', '2024-12-18 10:58:53', '2024-12-18 10:58:53', 'giplanand@gmail.com', NULL),
(392, 'ORD_17345249828264', 'giplanand@gmail.com', 5.00, 138.00, 138.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PYdqWOHX1LlKDF', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ANAND<br>2<br>2<br>2,Uttar Pradesh,2<br>Landmark:2<br>Mobile:2</pre>', ' 108', '2024-12-18 12:37:50', '2024-12-18 12:37:50', 'giplanand@gmail.com', NULL),
(393, 'ORD_17345276869026', 'giplanand@gmail.com', 1.00, 50.00, 50.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PYeTx5jf0S7cfq', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ANAND<br>2<br>2<br>2,Uttar Pradesh,2<br>Landmark:2<br>Mobile:2</pre>', ' 106', '2024-12-18 13:15:09', '2024-12-18 13:15:09', 'giplanand@gmail.com', NULL),
(394, 'ORD_17346725058328', 'giplanand@gmail.com', 2.00, 100.00, 100.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PZJbYRmhTCzmBX', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ANAND<br>2<br>2<br>2,Uttar Pradesh,2<br>Landmark:2<br>Mobile:2</pre>', ' 106', '2024-12-20 05:28:47', '2024-12-20 05:28:47', 'giplanand@gmail.com', NULL),
(395, 'ORD_17346726558374', 'giplanand@gmail.com', 3.00, 90.00, 90.00, 'ORDER PLACED', NULL, 'Standard Delivery', 'pay_PZJeBqmilAx6Hq', '', '\'PAID\'', 0.00, 0.00, 0.00, NULL, '<pre>ANAND<br>2<br>2<br>2,Uttar Pradesh,2<br>Landmark:2<br>Mobile:2</pre>', ' 108', '2024-12-20 05:31:16', '2024-12-20 05:31:16', 'giplanand@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `id` int(11) NOT NULL,
  `userId` varchar(999) NOT NULL,
  `orderId` varchar(255) NOT NULL,
  `subId` varchar(500) DEFAULT NULL,
  `productId` varchar(255) NOT NULL,
  `productSkuId` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` float(10,2) NOT NULL,
  `price` float(10,2) NOT NULL,
  `subTotal` float(100,2) NOT NULL DEFAULT 0.00,
  `sellerId` varchar(255) DEFAULT NULL,
  `sellerName` varchar(255) DEFAULT NULL,
  `distance` float(100,2) DEFAULT NULL,
  `distanceRequestId` varchar(100) DEFAULT NULL,
  `total` float(10,2) NOT NULL,
  `langitude` int(100) NOT NULL DEFAULT 0,
  `longitude` int(100) NOT NULL DEFAULT 0,
  `sgst` float(10,2) NOT NULL DEFAULT 0.00,
  `cgst` float(10,2) NOT NULL DEFAULT 0.00,
  `adminCommision` float(100,2) NOT NULL DEFAULT 0.00,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updatedOn` timestamp NULL DEFAULT NULL,
  `createdBy` varchar(255) NOT NULL,
  `updatedBy` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orderitem`
--

INSERT INTO `orderitem` (`id`, `userId`, `orderId`, `subId`, `productId`, `productSkuId`, `quantity`, `discount`, `price`, `subTotal`, `sellerId`, `sellerName`, `distance`, `distanceRequestId`, `total`, `langitude`, `longitude`, `sgst`, `cgst`, `adminCommision`, `createdOn`, `updatedOn`, `createdBy`, `updatedBy`) VALUES
(381, 'VP7240012@GMAIL.COM', 'ORD_17343443562233', 'PRD_78591734344379', '39', ' 95440', 4, 2.00, 20.00, 80.00, NULL, NULL, NULL, NULL, 80.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 10:19:39', NULL, 'VP7240012@GMAIL.COM', NULL),
(380, 'VP7240012@GMAIL.COM', 'ORD_17343414673013', 'PRD_14531734341490', '6', ' 96248', 1, 5.00, 50.00, 50.00, NULL, NULL, NULL, NULL, 50.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 09:31:30', NULL, 'VP7240012@GMAIL.COM', NULL),
(379, 'VP7240012@GMAIL.COM', 'ORD_17343413632954', 'PRD_13171734341385', '6', ' 96248', 4, 5.00, 50.00, 200.00, NULL, NULL, NULL, NULL, 200.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 09:29:45', NULL, 'VP7240012@GMAIL.COM', NULL),
(378, 'VP7240012@GMAIL.COM', 'ORD_17343411928676', 'PRD_28841734341233', '3', ' 33855', 1, 5.00, 30.00, 30.00, NULL, NULL, NULL, NULL, 30.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 09:27:13', NULL, 'VP7240012@GMAIL.COM', NULL),
(377, 'VP7240012@GMAIL.COM', 'ORD_17343409802460', 'PRD_38201734341006', '3', ' 33855', 1, 5.00, 30.00, 30.00, NULL, NULL, NULL, NULL, 30.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 09:23:26', NULL, 'VP7240012@GMAIL.COM', NULL),
(376, 'AMARKUMAR@GMAIL.COM', 'ORD_17343389743643', 'PRD_67181734338997', '39', ' 95440', 2, 0.00, 20.00, 40.00, NULL, NULL, NULL, NULL, 40.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 08:49:57', NULL, 'AMARKUMAR@GMAIL.COM', NULL),
(375, 'AMARKUMAR@GMAIL.COM', 'ORD_17343387021145', 'PRD_87801734338726', '42', ' 48898', 1, 0.00, 20.00, 20.00, NULL, NULL, NULL, NULL, 20.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 08:45:26', NULL, 'AMARKUMAR@GMAIL.COM', NULL),
(374, 'AMARKUMAR@GMAIL.COM', 'ORD_17343384641451', 'PRD_21511734338490', '42', ' 48898', 6, 0.00, 20.00, 120.00, NULL, NULL, NULL, NULL, 120.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 08:41:30', NULL, 'AMARKUMAR@GMAIL.COM', NULL),
(373, 'AMARKUMAR@GMAIL.COM', 'ORD_17343381716601', 'PRD_24001734338198', '42', ' 48898', 4, 0.00, 20.00, 80.00, NULL, NULL, NULL, NULL, 80.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 08:36:38', NULL, 'AMARKUMAR@GMAIL.COM', NULL),
(372, 'AMARKUMAR@GMAIL.COM', 'ORD_17343381132120', 'PRD_48961734338137', '42', ' 48898', 2, 0.00, 20.00, 40.00, NULL, NULL, NULL, NULL, 40.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 08:35:37', NULL, 'AMARKUMAR@GMAIL.COM', NULL),
(371, 'AMARKUMAR@GMAIL.COM', 'ORD_17343380168755', 'PRD_63631734338039', '42', ' 48898', 2, 0.00, 20.00, 40.00, NULL, NULL, NULL, NULL, 40.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 08:33:59', NULL, 'AMARKUMAR@GMAIL.COM', NULL),
(370, 'VP7240012@GMAIL.COM', 'ORD_17343378174463', 'PRD_83541734337839', '49', ' 58116', 1, 2.00, 18.00, 18.00, NULL, NULL, NULL, NULL, 18.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 08:30:39', NULL, 'VP7240012@GMAIL.COM', NULL),
(369, 'AMARKUMAR@GMAIL.COM', 'ORD_17343374209359', 'PRD_28211734337446', '39', ' 95440', 4, 0.00, 20.00, 80.00, NULL, NULL, NULL, NULL, 80.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 08:24:06', NULL, 'AMARKUMAR@GMAIL.COM', NULL),
(368, 'VP7240012@GMAIL.COM', 'ORD_17343374181723', 'PRD_22411734337441', '51', ' 78402', 1, 5.00, 30.00, 30.00, NULL, NULL, NULL, NULL, 30.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 08:24:01', NULL, 'VP7240012@GMAIL.COM', NULL),
(367, 'VP7240012@GMAIL.COM', 'ORD_17343365253124', 'PRD_55031734336546', '6', ' 96248', 1, 5.00, 50.00, 50.00, NULL, NULL, NULL, NULL, 50.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 08:09:06', NULL, 'VP7240012@GMAIL.COM', NULL),
(366, 'AMARKUMAR@GMAIL.COM', 'ORD_17343361294268', 'PRD_25511734336154', '6', ' 96248', 2, 5.00, 50.00, 100.00, NULL, NULL, NULL, NULL, 100.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 08:02:34', NULL, 'AMARKUMAR@GMAIL.COM', NULL),
(365, 'VP7240012@GMAIL.COM', 'ORD_17343358794873', 'PRD_98101734335902', '45', ' 86055', 50, 0.00, 30.00, 1500.00, NULL, NULL, NULL, NULL, 1500.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 07:58:22', NULL, 'VP7240012@GMAIL.COM', NULL),
(364, 'AMARKUMAR@GMAIL.COM', 'ORD_17343358301773', 'PRD_97831734335861', '38', ' 56358', 25, 7.00, 35.00, 875.00, NULL, NULL, NULL, NULL, 875.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 07:57:41', NULL, 'AMARKUMAR@GMAIL.COM', NULL),
(363, 'VP7240012@GMAIL.COM', 'ORD_17343352484136', 'PRD_50061734335275', '49', ' 58116', 9, 2.00, 18.00, 162.00, NULL, NULL, NULL, NULL, 162.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 07:47:55', NULL, 'VP7240012@GMAIL.COM', NULL),
(362, 'VP7240012@GMAIL.COM', 'ORD_17343351678640', 'PRD_21021734335190', '49', ' 58116', 1, 2.00, 18.00, 18.00, NULL, NULL, NULL, NULL, 18.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 07:46:30', NULL, 'VP7240012@GMAIL.COM', NULL),
(361, 'VP7240012@GMAIL.COM', 'ORD_17343346379375', 'PRD_52671734334660', '3', ' 33855', 1, 5.00, 30.00, 30.00, NULL, NULL, NULL, NULL, 30.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 07:37:40', NULL, 'VP7240012@GMAIL.COM', NULL),
(360, 'VP7240012@GMAIL.COM', 'ORD_17343345233071', 'PRD_71601734334547', '5', ' 26497', 1, 10.00, 55.00, 55.00, NULL, NULL, NULL, NULL, 55.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 07:35:47', NULL, 'VP7240012@GMAIL.COM', NULL),
(359, 'VP7240012@GMAIL.COM', 'ORD_17343331812193', 'PRD_30181734333206', '4', ' 56752', 1, 6.00, 15.00, 15.00, NULL, NULL, NULL, NULL, 15.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 07:13:26', NULL, 'VP7240012@GMAIL.COM', NULL),
(358, 'VP7240012@GMAIL.COM', 'ORD_17343331812193', 'PRD_75641734333206', '3', ' 33855', 1, 5.00, 30.00, 30.00, NULL, NULL, NULL, NULL, 30.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 07:13:26', NULL, 'VP7240012@GMAIL.COM', NULL),
(357, 'giplanand@gmail.com', 'ORD_17343329982363', 'PRD_21871734333021', '3', ' 33855', 1, 5.00, 30.00, 30.00, NULL, NULL, NULL, NULL, 30.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 07:10:21', NULL, 'giplanand@gmail.com', NULL),
(356, 'VP7240012@GMAIL.COM', 'ORD_17343328535500', 'PRD_26651734332878', '6', ' 96248', 1, 5.00, 50.00, 50.00, NULL, NULL, NULL, NULL, 50.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 07:07:58', NULL, 'VP7240012@GMAIL.COM', NULL),
(355, 'VP7240012@GMAIL.COM', 'ORD_17343328535500', 'PRD_93241734332878', '39', ' 95440', 1, 0.00, 20.00, 20.00, NULL, NULL, NULL, NULL, 20.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 07:07:58', NULL, 'VP7240012@GMAIL.COM', NULL),
(354, 'VP7240012@GMAIL.COM', 'ORD_17343328535500', 'PRD_42911734332878', '12', ' 93729', 1, 5.00, 30.00, 30.00, NULL, NULL, NULL, NULL, 30.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 07:07:58', NULL, 'VP7240012@GMAIL.COM', NULL),
(353, 'VP7240012@GMAIL.COM', 'ORD_17343328535500', 'PRD_36401734332878', '4', ' 56752', 1, 6.00, 15.00, 15.00, NULL, NULL, NULL, NULL, 15.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 07:07:58', NULL, 'VP7240012@GMAIL.COM', NULL),
(352, 'VP7240012@GMAIL.COM', 'ORD_17343328535500', 'PRD_69691734332878', '10', ' 89197', 1, 15.00, 30.00, 30.00, NULL, NULL, NULL, NULL, 30.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 07:07:58', NULL, 'VP7240012@GMAIL.COM', NULL),
(351, 'giplanand@gmail.com', 'ORD_17343320019209', 'PRD_20781734332024', '10', ' 89197', 2, 15.00, 30.00, 60.00, NULL, NULL, NULL, NULL, 60.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 06:53:44', NULL, 'giplanand@gmail.com', NULL),
(350, 'giplanand@gmail.com', 'ORD_17343318763302', 'PRD_21621734331899', '2', ' 55355', 1, 5.00, 250.00, 250.00, NULL, NULL, NULL, NULL, 250.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 06:51:39', NULL, 'giplanand@gmail.com', NULL),
(349, 'giplanand@gmail.com', 'ORD_17343304949687', 'PRD_25781734330517', '3', ' 33855', 1, 5.00, 30.00, 30.00, NULL, NULL, NULL, NULL, 30.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 06:28:37', NULL, 'giplanand@gmail.com', NULL),
(348, 'TEST@W.COM', 'ORD_17341655375736', 'PRD_26701734165585', '40', ' 30175', 1, 5.00, 35.00, 35.00, NULL, NULL, NULL, NULL, 35.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-14 08:39:45', NULL, 'TEST@W.COM', NULL),
(382, 'giplanand@gmail.com', 'ORD_17343516889526', 'PRD_82611734351713', '3', ' 33855', 1, 5.00, 30.00, 30.00, NULL, NULL, NULL, NULL, 30.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 12:21:53', NULL, 'giplanand@gmail.com', NULL),
(383, 'giplanand@gmail.com', 'ORD_17343516889526', 'PRD_83241734351713', '10', ' 89197', 1, 15.00, 30.00, 30.00, NULL, NULL, NULL, NULL, 30.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 12:21:53', NULL, 'giplanand@gmail.com', NULL),
(384, 'giplanand@gmail.com', 'ORD_17343525365674', 'PRD_11681734352568', '35', ' 37624', 1, 20.00, 45.00, 45.00, NULL, NULL, NULL, NULL, 45.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-16 12:36:08', NULL, 'giplanand@gmail.com', NULL),
(385, 'giplanand@gmail.com', 'ORD_17344116769597', 'PRD_73801734411697', '3', ' 33855', 1, 5.00, 30.00, 30.00, NULL, NULL, NULL, NULL, 30.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-17 05:01:37', NULL, 'giplanand@gmail.com', NULL),
(386, 'giplanand@gmail.com', 'ORD_17344118207394', 'PRD_48811734411841', '2', ' 55355', 1, 5.00, 250.00, 250.00, NULL, NULL, NULL, NULL, 250.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-17 05:04:01', NULL, 'giplanand@gmail.com', NULL),
(387, 'giplanand@gmail.com', 'ORD_17344118207394', 'PRD_43361734411841', '4', ' 56752', 1, 6.00, 15.00, 15.00, NULL, NULL, NULL, NULL, 15.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-17 05:04:01', NULL, 'giplanand@gmail.com', NULL),
(388, 'giplanand@gmail.com', 'ORD_17344123405256', 'PRD_85831734412360', '4', ' 56752', 1, 6.00, 15.00, 15.00, NULL, NULL, NULL, NULL, 15.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-17 05:12:40', NULL, 'giplanand@gmail.com', NULL),
(389, 'giplanand@gmail.com', 'ORD_17344124205989', 'PRD_27671734412442', '2', ' 55355', 1, 5.00, 250.00, 250.00, NULL, NULL, NULL, NULL, 250.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-17 05:14:02', NULL, 'giplanand@gmail.com', NULL),
(390, 'giplanand@gmail.com', 'ORD_17344985323149', 'PRD_16521734498557', '53', ' 58380', 1, 2.00, 50.00, 50.00, NULL, NULL, NULL, NULL, 50.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-18 05:09:17', NULL, 'giplanand@gmail.com', NULL),
(391, '222', '55', NULL, '225', '5552', 666, 5.00, 25.00, 0.00, NULL, NULL, NULL, NULL, 4.00, 0, 0, 2.00, 3.00, 0.00, '0000-00-00 00:00:00', NULL, 'ABC', NULL),
(392, 'giplanand@gmail.com', 'ORD_17345127787246', 'PRD_22291734512960', '52', ' 13107', 1, 2.00, 50.00, 50.00, NULL, NULL, NULL, NULL, 50.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-18 09:09:20', NULL, 'giplanand@gmail.com', NULL),
(393, 'giplanand@gmail.com', 'ORD_17345135949539', 'PRD_92601734513616', '45', ' 86055', 1, 0.00, 30.00, 30.00, NULL, NULL, NULL, NULL, 30.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-18 09:20:16', NULL, 'giplanand@gmail.com', NULL),
(394, 'giplanand@gmail.com', 'ORD_17345135949539', 'PRD_47181734513616', '51', ' 78402', 1, 5.00, 30.00, 30.00, NULL, NULL, NULL, NULL, 30.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-18 09:20:16', NULL, 'giplanand@gmail.com', NULL),
(395, 'giplanand@gmail.com', 'ORD_17345146671796', 'PRD_50991734514689', '45', ' 86055', 2, 0.00, 30.00, 60.00, NULL, NULL, NULL, NULL, 60.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-18 09:38:09', NULL, 'giplanand@gmail.com', NULL),
(396, 'giplanand@gmail.com', 'ORD_17345147278295', 'PRD_53531734514747', '45', ' 86055', 9, 0.00, 30.00, 270.00, NULL, NULL, NULL, NULL, 270.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-18 09:39:07', NULL, 'giplanand@gmail.com', NULL),
(397, 'giplanand@gmail.com', 'ORD_17345149094297', 'PRD_32801734514932', '52', ' 13107', 1, 2.00, 50.00, 50.00, NULL, NULL, NULL, NULL, 50.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-18 09:42:12', NULL, 'giplanand@gmail.com', NULL),
(398, 'giplanand@gmail.com', 'ORD_17345153943886', 'PRD_97951734516215', '49', ' 58116', 3, 2.00, 18.00, 54.00, NULL, NULL, NULL, NULL, 54.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-18 10:03:35', NULL, 'giplanand@gmail.com', NULL),
(399, 'giplanand@gmail.com', 'ORD_17345167216764', 'PRD_63141734516742', '45', ' 86055', 3, 0.00, 30.00, 90.00, NULL, NULL, NULL, NULL, 90.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-18 10:12:22', NULL, 'giplanand@gmail.com', NULL),
(400, 'giplanand@gmail.com', 'ORD_17345169503631', 'PRD_18671734516972', '45', ' 86055', 6, 0.00, 30.00, 180.00, NULL, NULL, NULL, NULL, 180.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-18 10:16:12', NULL, 'giplanand@gmail.com', NULL),
(401, 'giplanand@gmail.com', 'ORD_17345172638735', 'PRD_76051734517286', '49', ' 58116', 2, 2.00, 18.00, 36.00, ' 108', ' LALMANI', NULL, NULL, 36.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-18 10:21:26', NULL, 'giplanand@gmail.com', NULL),
(402, 'giplanand@gmail.com', 'ORD_17345174583280', 'PRD_64741734517485', '49', ' 58116', 1, 2.00, 18.00, 18.00, ' 108', ' LALMANI', NULL, NULL, 18.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-18 10:24:45', NULL, 'giplanand@gmail.com', NULL),
(403, 'giplanand@gmail.com', 'ORD_17345176147988', 'PRD_97501734517635', '49', ' 58116', 1, 2.00, 18.00, 18.00, ' 108', ' LALMANI', NULL, NULL, 18.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-18 10:27:15', NULL, 'giplanand@gmail.com', NULL),
(404, 'giplanand@gmail.com', 'ORD_17345195093406', 'PRD_65891734519533', '52', ' 13107', 1, 2.00, 50.00, 50.00, ' 106', ' MOHAN', NULL, NULL, 50.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-18 10:58:53', NULL, 'giplanand@gmail.com', NULL),
(405, 'giplanand@gmail.com', 'ORD_17345195093406', 'PRD_29301734519533', '45', ' 86055', 3, 0.00, 30.00, 90.00, ' 112', ' AMBUJ', NULL, NULL, 90.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-18 10:58:53', NULL, 'giplanand@gmail.com', NULL),
(406, 'giplanand@gmail.com', 'ORD_17345249828264', 'PRD_34111734525470', '45', ' 86055', 4, 0.00, 30.00, 120.00, ' 112', ' AMBUJ', NULL, NULL, 120.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-18 12:37:50', NULL, 'giplanand@gmail.com', NULL),
(407, 'giplanand@gmail.com', 'ORD_17345249828264', 'PRD_78391734525470', '49', ' 58116', 1, 2.00, 18.00, 18.00, ' 108', ' LALMANI', NULL, NULL, 18.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-18 12:37:50', NULL, 'giplanand@gmail.com', NULL),
(408, 'giplanand@gmail.com', 'ORD_17345276869026', 'PRD_28841734527709', '52', ' 13107', 1, 2.00, 50.00, 50.00, ' 106', ' MOHAN', NULL, NULL, 50.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-18 13:15:09', NULL, 'giplanand@gmail.com', NULL),
(409, 'giplanand@gmail.com', 'ORD_17346725058328', 'PRD_60951734672527', '52', ' 13107', 2, 2.00, 50.00, 100.00, ' 106', ' MOHAN', NULL, NULL, 100.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-20 05:28:47', NULL, 'giplanand@gmail.com', NULL),
(410, 'giplanand@gmail.com', 'ORD_17346726558374', 'PRD_96581734672676', '51', ' 78402', 3, 5.00, 30.00, 90.00, ' 108', ' LALMANI', NULL, NULL, 90.00, 0, 0, 0.00, 0.00, 0.00, '2024-12-20 05:31:16', NULL, 'giplanand@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `paymentdetails`
--

CREATE TABLE `paymentdetails` (
  `id` int(11) NOT NULL,
  `orderId` varchar(255) NOT NULL,
  `amount` float NOT NULL,
  `refundId` varchar(255) DEFAULT NULL,
  `paymentMode` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updatedBy` varchar(255) NOT NULL,
  `updatedOn` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdBy` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `popularity`
--

CREATE TABLE `popularity` (
  `id` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updatedBy` varchar(255) NOT NULL,
  `createdBy` varchar(255) NOT NULL,
  `updatedOn` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `popularityhistory`
--

CREATE TABLE `popularityhistory` (
  `id` int(11) NOT NULL DEFAULT 0,
  `productName` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updateOn` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productattributes`
--

CREATE TABLE `productattributes` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updatedOn` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `skuId` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `producthistory`
--

CREATE TABLE `producthistory` (
  `id` int(11) NOT NULL,
  `productId` varchar(255) NOT NULL,
  `sizeAttributeId` varchar(255) DEFAULT NULL,
  `colorAttributeId` varchar(255) DEFAULT NULL,
  `skuId` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `createdBy` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `producthistory`
--

INSERT INTO `producthistory` (`id`, `productId`, `sizeAttributeId`, `colorAttributeId`, `skuId`, `price`, `quantity`, `discount`, `createdOn`, `createdBy`) VALUES
(1, '1', NULL, NULL, '54068', 50, 50, 2, '2024-12-10 00:55:34', '106'),
(2, '2', NULL, NULL, '55355', 250, 10, 5, '2024-12-10 22:39:26', '107'),
(3, '3', NULL, NULL, '33855', 30, 80, 5, '2024-12-10 23:10:19', '108'),
(4, '4', NULL, NULL, '56752', 15, 54, 6, '2024-12-10 23:12:58', '108'),
(5, '5', NULL, NULL, '26497', 55, 789, 10, '2024-12-10 23:15:56', '108'),
(6, '6', NULL, NULL, '96248', 50, 70, 5, '2024-12-10 23:21:37', '108'),
(10, '10', NULL, NULL, '89197', 30, 85, 15, '2024-12-10 23:27:45', '108'),
(11, '11', NULL, NULL, '77621', 45, 82, 50, '2024-12-10 23:28:38', '108'),
(12, '12', NULL, NULL, '93729', 30, 100, 5, '2024-12-10 23:29:30', '108'),
(13, '13', NULL, NULL, '16726', 50, 78, 12, '2024-12-10 23:32:02', '108'),
(31, '31', NULL, NULL, '80596', 50, 45, 20, '2024-12-10 23:39:20', '108'),
(41, '41', NULL, NULL, '65272', 20, 78, 5, '2024-12-14 07:06:23', '113'),
(40, '40', NULL, NULL, '30175', 35, 85, 5, '2024-12-14 07:04:32', '111'),
(39, '39', NULL, NULL, '95440', 20, 10, 0, '2024-12-14 07:02:27', '112'),
(43, '43', NULL, NULL, '88770', 26, 52, 8, '2024-12-14 07:08:45', '113'),
(38, '38', NULL, NULL, '56358', 35, 25, 7, '2024-12-14 07:00:10', '111'),
(37, '37', NULL, NULL, '42318', 56, 89, 10, '2024-12-14 06:56:32', '111'),
(36, '36', NULL, NULL, '76907', 20, 50, 0, '2024-12-14 06:53:26', '110'),
(35, '35', NULL, NULL, '37624', 45, 7, 20, '2024-12-14 06:51:41', '110'),
(34, '34', NULL, NULL, '74685', 25, 50, 2, '2024-12-14 06:49:47', '110'),
(32, '32', NULL, NULL, '64914', 80, 80, 20, '2024-12-14 06:46:36', '110'),
(33, '33', NULL, NULL, '68174', 80, 56, 10, '2024-12-14 06:47:54', '110'),
(44, '44', NULL, NULL, '14953', 90, 56, 23, '2024-12-14 07:11:22', '113'),
(45, '45', NULL, NULL, '86055', 30, 50, 0, '2024-12-14 07:12:14', '112'),
(46, '46', NULL, NULL, '65261', 50, 56, 5, '2024-12-14 07:13:05', '114'),
(47, '47', NULL, NULL, '79032', 40, 100, 0, '2024-12-14 07:15:36', '114'),
(48, '48', NULL, NULL, '16494', 40, 80, 10, '2024-12-14 07:16:26', '114'),
(49, '49', NULL, NULL, '58116', 18, 10, 2, '2024-12-15 19:43:43', '108'),
(50, '50', NULL, NULL, '', 0, 0, 0, '2024-12-15 19:43:49', ''),
(51, '51', NULL, NULL, '78402', 30, 39, 5, '2024-12-15 20:13:33', '108'),
(52, '52', NULL, NULL, '13107', 50, 50, 2, '2024-12-15 20:42:57', '106'),
(53, '53', NULL, NULL, '58380', 50, 20, 2, '2024-12-18 05:06:37', '106');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `sellerId` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `additional_info` text DEFAULT NULL,
  `image` text NOT NULL,
  `mainImage` varchar(255) NOT NULL,
  `skuId` varchar(255) NOT NULL,
  `trending` varchar(255) DEFAULT NULL,
  `arrival` varchar(255) DEFAULT NULL,
  `categoriesId` varchar(255) NOT NULL,
  `subCategoryId` varchar(255) NOT NULL,
  `bestselling` varchar(255) DEFAULT NULL,
  `popular` varchar(255) DEFAULT NULL,
  `price` float(100,2) NOT NULL DEFAULT 0.00,
  `discount` float(10,2) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `shippingCharge` float NOT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `adminCommision` float(100,2) NOT NULL DEFAULT 0.00,
  `sgst` float(100,2) NOT NULL DEFAULT 0.00,
  `cgst` float(100,2) NOT NULL DEFAULT 0.00,
  `createdOn` datetime NOT NULL,
  `updatedOn` datetime NOT NULL,
  `createdBy` varchar(255) NOT NULL,
  `updatedBy` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sellerId`, `name`, `description`, `additional_info`, `image`, `mainImage`, `skuId`, `trending`, `arrival`, `categoriesId`, `subCategoryId`, `bestselling`, `popular`, `price`, `discount`, `status`, `shippingCharge`, `rating`, `adminCommision`, `sgst`, `cgst`, `createdOn`, `updatedOn`, `createdBy`, `updatedBy`) VALUES
(1, '106', 'ORANGE JUCE 250 ML', 'BEST QUALITY JUICE ITEM																																																																														', NULL, '54068', '54068', '54068', NULL, NULL, '12249', '106', NULL, NULL, 50.00, 2.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-10 06:25:34', '2024-12-14 02:35:23', '106', '106'),
(2, '107', 'TOMATO AND APPLE ', 'POTATO AND APPLE BOTH ITEM IN A PACKET													', NULL, '55355', '55355', '55355', NULL, NULL, '12250', '105', NULL, NULL, 250.00, 5.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-11 04:09:26', '2024-12-11 04:18:14', '107', '107'),
(3, '108', 'ARBI', 'ARBI JFBUI FBURF 8HF ', NULL, '33855', '', '33855', NULL, NULL, '12257', '125', NULL, NULL, 30.00, 5.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-11 04:40:19', '0000-00-00 00:00:00', '108', ''),
(4, '108', 'GREEN PALAK', 'PALAK ... JBDCU JCBDHB    H', NULL, '56752', '', '56752', NULL, NULL, '12251', '107', NULL, NULL, 15.00, 6.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-11 04:42:58', '0000-00-00 00:00:00', '108', ''),
(5, '108', 'GREEN DHANIYA', 'DHANIYA ... DJNFIU DJFUISUF CNSI', NULL, '26497', '', '26497', NULL, NULL, '12251', '108', NULL, NULL, 55.00, 10.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-11 04:45:56', '0000-00-00 00:00:00', '108', ''),
(6, '108', 'RED TOMATO', 'TOMATO ..MIU  HBUV CTG', NULL, '96248', '', '96248', NULL, NULL, '12253', '113', NULL, NULL, 50.00, 5.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-11 04:51:37', '0000-00-00 00:00:00', '108', ''),
(10, '108', 'LAUKI', 'LAUKI JBDFH CDGYUVCY', NULL, '89197', '', '89197', NULL, NULL, '12254', '116', NULL, NULL, 30.00, 15.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-11 04:57:45', '0000-00-00 00:00:00', '108', ''),
(11, '108', 'KARELA ', 'KARELA JKVFBJBVVFJJKFV', NULL, '77621', '', '77621', NULL, NULL, '12254', '117', NULL, NULL, 45.00, 50.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-11 04:58:38', '0000-00-00 00:00:00', '108', ''),
(12, '108', 'ALOO', 'ALOO KDBSFUB CDHVFY', NULL, '93729', '', '93729', NULL, NULL, '12252', '110', NULL, NULL, 30.00, 5.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-11 04:59:30', '0000-00-00 00:00:00', '108', ''),
(13, '108', 'BAIGAN', 'DIJIOEWFHU IURGFREYBVY ', NULL, '16726', '', '16726', NULL, NULL, '12253', '114', NULL, NULL, 50.00, 12.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-11 05:02:02', '0000-00-00 00:00:00', '108', ''),
(31, '108', 'GAJAR', 'GAZAR  KLFN OPIO OIFN 													', NULL, '80596', '80596', '80596', NULL, NULL, '12252', '111', NULL, NULL, 50.00, 20.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-11 05:09:20', '2024-12-13 09:50:08', '108', '108'),
(32, '110', 'TOMATO', 'TOMATO RIHTURG VGRYURFY  UUEFG', NULL, '64914', '', '64914', NULL, NULL, '12250', '105', NULL, NULL, 80.00, 20.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-14 12:16:36', '0000-00-00 00:00:00', '110', ''),
(33, '110', 'SHIMLA MIRCH', 'SHIMLA MIRCH ........... BUFIGRF  ', NULL, '68174', '', '68174', NULL, NULL, '12253', '115', NULL, NULL, 80.00, 10.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-14 12:17:54', '0000-00-00 00:00:00', '110', ''),
(34, '110', 'CARROT (GAJAR)', 'CARROT ................................................................................................................................................................................................................................................', NULL, '74685', '', '74685', NULL, NULL, '12252', '111', NULL, NULL, 25.00, 2.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-14 12:19:47', '0000-00-00 00:00:00', '110', ''),
(40, '111', 'ARBI', 'LOREM IPSUM IS SIMPLY DUMMY TEXT OF THE PRINTING AND TYPESETTING INDUSTRY. LOREM IPSUM HAS BEEN THE INDUSTRY&#039;S STANDARD DUMMY TEXT EVER SINCE THE 1500S, WHEN AN UNKNOWN PRINTER TOOK A GALLEY OF TYPE AND SCRAMBLED IT TO MAKE A TYPE SPECIMEN BOOK.', NULL, '30175', '', '30175', NULL, NULL, '12257', '125', NULL, NULL, 35.00, 5.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-14 12:34:32', '0000-00-00 00:00:00', '111', ''),
(38, '111', 'CAULIFLOWER', '........... URG8URG YFUCGF7 													', NULL, '56358', '56358', '56358', NULL, NULL, '12248', '104', NULL, NULL, 35.00, 7.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-14 12:30:10', '2024-12-16 03:56:40', '111', '111'),
(39, '112', 'RADDISH', 'RADDISH																																																																	', NULL, '95440', '95440', '95440', NULL, NULL, '12252', '111', NULL, NULL, 20.00, 2.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-14 12:32:27', '2024-12-16 03:47:47', '112', '112'),
(37, '111', 'LEMON AND BRINJAL', 'LEMON AND BRINJAL ...........  .,;       UGU VFYG DUYGF', NULL, '42318', '', '42318', NULL, NULL, '12250', '105', NULL, NULL, 56.00, 10.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-14 12:26:32', '0000-00-00 00:00:00', '111', ''),
(35, '110', 'CHUKANDAR', 'CHUKANDAR ............... ..... . . . . ............ ........... . . . . .. . . .  .. 													', NULL, '37624', '37624', '37624', NULL, NULL, '12252', '112', NULL, NULL, 45.00, 20.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-14 12:21:41', '2024-12-16 03:57:57', '110', '110'),
(36, '110', 'DHANIYA', 'DHANIYA  SUFIEGR78 JERHGYGRGB BFRDGR', NULL, '76907', '', '76907', NULL, NULL, '12251', '108', NULL, NULL, 20.00, 0.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-14 12:23:26', '0000-00-00 00:00:00', '110', ''),
(41, '113', 'GAWAR', 'LOREM IPSUM IS SIMPLY DUMMY TEXT OF THE PRINTING AND TYPESETTING INDUSTRY. LOREM IPSUM HAS BEEN THE INDUSTRY&#039;S STANDARD DUMMY TEXT EVER SINCE THE 1500S, WHEN AN UNKNOWN PRINTER TOOK A GALLEY OF TYPE AND SCRAMBLED IT TO MAKE A TYPE SPECIMEN BOOK.', NULL, '65272', '', '65272', NULL, NULL, '12255', '120', NULL, NULL, 20.00, 5.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-14 12:36:23', '0000-00-00 00:00:00', '113', ''),
(43, '113', 'BRINJAL ', 'LOREM IPSUM IS SIMPLY DUMMY TEXT OF THE PRINTING AND TYPESETTING INDUSTRY. LOREM IPSUM HAS BEEN THE INDUSTRY&#039;S STANDARD DUMMY TEXT EVER SINCE THE 1500S, WHEN AN UNKNOWN PRINTER TOOK A GALLEY OF TYPE AND SCRAMBLED IT TO MAKE A TYPE SPECIMEN BOOK.', NULL, '88770', '', '88770', NULL, NULL, '12253', '114', NULL, NULL, 26.00, 8.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-14 12:38:45', '0000-00-00 00:00:00', '113', ''),
(44, '113', 'PINE APPLE', 'LOREM IPSUM IS SIMPLY DUMMY TEXT OF THE PRINTING AND TYPESETTING INDUSTRY. LOREM IPSUM HAS BEEN THE INDUSTRY&#039;S STANDARD DUMMY TEXT EVER SINCE THE 1500S, WHEN AN UNKNOWN PRINTER TOOK A GALLEY OF TYPE AND SCRAMBLED IT TO MAKE A TYPE SPECIMEN BOOK.', NULL, '14953', '', '14953', NULL, NULL, '12249', '129', NULL, NULL, 90.00, 23.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-14 12:41:22', '0000-00-00 00:00:00', '113', ''),
(45, '112', 'BANANA SHAKE', 'HEALTH IS WEALTH																																																				', NULL, '86055', '86055', '86055', NULL, NULL, '12249', '106', NULL, NULL, 30.00, 0.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-14 12:42:14', '2024-12-16 03:52:57', '112', '112'),
(46, '114', 'COCONUT', 'LOREM IPSUM IS SIMPLY DUMMY TEXT OF THE PRINTING AND TYPESETTING INDUSTRY. LOREM IPSUM HAS BEEN THE INDUSTRY&#039;S STANDARD DUMMY TEXT EVER SINCE THE 1500S, WHEN AN UNKNOWN PRINTER TOOK A GALLEY OF TYPE AND SCRAMBLED IT TO MAKE A TYPE SPECIMEN BOOK.', NULL, '65261', '', '65261', NULL, NULL, '12249', '129', NULL, NULL, 50.00, 5.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-14 12:43:05', '0000-00-00 00:00:00', '114', ''),
(47, '114', 'BANANA', 'LOREM IPSUM IS SIMPLY DUMMY TEXT OF THE PRINTING AND TYPESETTING INDUSTRY. LOREM IPSUM HAS BEEN THE INDUSTRY&#039;S STANDARD DUMMY TEXT EVER SINCE THE 1500S, WHEN AN UNKNOWN PRINTER TOOK A GALLEY OF TYPE AND SCRAMBLED IT TO MAKE A TYPE SPECIMEN BOOK.', NULL, '79032', '', '79032', NULL, NULL, '12249', '129', NULL, NULL, 40.00, 0.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-14 12:45:36', '0000-00-00 00:00:00', '114', ''),
(48, '114', 'ORANGE', 'LOREM IPSUM IS SIMPLY DUMMY TEXT OF THE PRINTING AND TYPESETTING INDUSTRY. LOREM IPSUM HAS BEEN THE INDUSTRY&#039;S STANDARD DUMMY TEXT EVER SINCE THE 1500S, WHEN AN UNKNOWN PRINTER TOOK A GALLEY OF TYPE AND SCRAMBLED IT TO MAKE A TYPE SPECIMEN BOOK.					', NULL, '16494', '16494', '16494', NULL, NULL, '12249', '129', NULL, NULL, 40.00, 10.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-14 12:46:26', '2024-12-14 12:48:06', '114', '114'),
(49, '108', 'PALAK FRESH', 'FRESH PRODUCT																										', NULL, '58116', '58116', '58116', NULL, NULL, '12249', '129', NULL, NULL, 18.00, 2.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-16 01:13:43', '2024-12-16 01:40:20', '108', '108'),
(50, '', '', '', NULL, '', '', '', NULL, NULL, '', '', NULL, NULL, 0.00, 0.00, '', 0, NULL, 0.00, 0.00, 0.00, '2024-12-16 01:13:49', '0000-00-00 00:00:00', '', ''),
(51, '108', 'PALAK NEW', 'FRESH VEGITABLES													', NULL, '78402', '78402', '78402', NULL, NULL, '12253', 'SUB CATEGORIES', NULL, NULL, 30.00, 5.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-16 01:43:33', '2024-12-16 03:51:47', '108', '108'),
(52, '106', 'PALAK VEGITABLES', '', NULL, '13107', '', '13107', NULL, NULL, '12249', '129', NULL, NULL, 50.00, 2.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-16 02:12:57', '0000-00-00 00:00:00', '106', ''),
(53, '106', 'APPLE 500 KG', 'BEST QUALITY PRODUCT', NULL, '58380', '', '58380', NULL, NULL, '12249', '129', NULL, NULL, 50.00, 2.00, 'IN STOCK', 20, NULL, 0.00, 0.00, 0.00, '2024-12-18 10:36:37', '0000-00-00 00:00:00', '106', '');

-- --------------------------------------------------------

--
-- Table structure for table `productskuid`
--

CREATE TABLE `productskuid` (
  `id` int(11) NOT NULL,
  `productId` varchar(255) NOT NULL,
  `sizeAttributeId` varchar(255) NOT NULL,
  `colorAttributeId` varchar(255) NOT NULL,
  `skuId` varchar(255) NOT NULL,
  `price` float(100,2) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `createdOn` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `UpdatedOn` timestamp NULL DEFAULT NULL,
  `createdBy` varchar(255) NOT NULL,
  `updatedBy` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `productskuid`
--

INSERT INTO `productskuid` (`id`, `productId`, `sizeAttributeId`, `colorAttributeId`, `skuId`, `price`, `quantity`, `createdOn`, `UpdatedOn`, `createdBy`, `updatedBy`) VALUES
(1, '1', '', '', '54068', 50.00, 20, '2024-12-14 09:05:23', '2024-12-13 21:05:23', '106', '106'),
(2, '2', '', '', '55355', 250.00, 5, '2024-12-17 05:13:40', '0000-00-00 00:00:00', '107', 'Admin'),
(3, '3', '', '', '33855', 30.00, 38, '2024-12-17 05:01:16', '0000-00-00 00:00:00', '108', 'Admin'),
(4, '4', '', '', '56752', 15.00, 42, '2024-12-17 05:12:20', '0000-00-00 00:00:00', '108', 'Admin'),
(5, '5', '', '', '26497', 55.00, 786, '2024-12-16 07:35:23', '0000-00-00 00:00:00', '108', 'Admin'),
(6, '6', '', '', '96248', 50.00, 55, '2024-12-16 09:31:07', '0000-00-00 00:00:00', '108', 'Admin'),
(7, '7', '', '', '78709', 55.00, 56, '2024-12-10 23:24:01', NULL, '108', NULL),
(8, '8', '', '', '27992', 30.00, 85, '2024-12-10 23:25:52', NULL, '108', NULL),
(9, '9', '', '', '27992', 30.00, 85, '2024-12-10 23:25:53', NULL, '108', NULL),
(10, '10', '', '', '89197', 30.00, 81, '2024-12-16 12:21:28', '0000-00-00 00:00:00', '108', 'Admin'),
(11, '11', '', '', '77621', 45.00, 81, '2024-12-12 08:57:47', '0000-00-00 00:00:00', '108', 'Admin'),
(12, '12', '', '', '93729', 30.00, 96, '2024-12-16 07:07:33', '0000-00-00 00:00:00', '108', 'Admin'),
(13, '13', '', '', '16726', 50.00, 75, '2024-12-13 04:16:23', '0000-00-00 00:00:00', '108', 'Admin'),
(14, '14', '', '', '79776', 15.00, 65, '2024-12-10 23:33:33', NULL, '108', NULL),
(15, '15', '', '', '79776', 15.00, 65, '2024-12-10 23:33:34', NULL, '108', NULL),
(16, '16', '', '', '79776', 15.00, 65, '2024-12-10 23:33:34', NULL, '108', NULL),
(17, '17', '', '', '79776', 15.00, 65, '2024-12-10 23:33:34', NULL, '108', NULL),
(18, '18', '', '', '79776', 15.00, 65, '2024-12-10 23:33:34', NULL, '108', NULL),
(19, '19', '', '', '79776', 15.00, 65, '2024-12-10 23:33:34', NULL, '108', NULL),
(20, '20', '', '', '79776', 15.00, 65, '2024-12-10 23:33:35', NULL, '108', NULL),
(21, '21', '', '', '79776', 15.00, 65, '2024-12-10 23:33:35', NULL, '108', NULL),
(22, '22', '', '', '79776', 15.00, 65, '2024-12-10 23:33:35', NULL, '108', NULL),
(23, '23', '', '', '79776', 15.00, 65, '2024-12-10 23:33:35', NULL, '108', NULL),
(24, '24', '', '', '79776', 15.00, 65, '2024-12-10 23:33:35', NULL, '108', NULL),
(25, '25', '', '', '79776', 15.00, 65, '2024-12-10 23:33:36', NULL, '108', NULL),
(26, '26', '', '', '79776', 15.00, 65, '2024-12-10 23:33:36', NULL, '108', NULL),
(27, '27', '', '', '79776', 15.00, 65, '2024-12-10 23:33:36', NULL, '108', NULL),
(28, '28', '', '', '79776', 15.00, 65, '2024-12-10 23:33:36', NULL, '108', NULL),
(29, '29', '', '', '79776', 15.00, 65, '2024-12-10 23:33:36', NULL, '108', NULL),
(30, '30', '', '', '79776', 15.00, 65, '2024-12-10 23:33:36', NULL, '108', NULL),
(31, '31', '', '', '80596', 50.00, 45, '2024-12-13 04:20:08', '2024-12-13 04:20:08', '108', '108'),
(32, '32', '', '', '64914', 80.00, 80, '2024-12-14 06:46:36', NULL, '110', NULL),
(33, '33', '', '', '68174', 80.00, 56, '2024-12-14 06:47:54', NULL, '110', NULL),
(34, '34', '', '', '74685', 25.00, 50, '2024-12-14 06:49:47', NULL, '110', NULL),
(35, '35', '', '', '37624', 45.00, 149, '2024-12-16 12:35:36', '0000-00-00 00:00:00', '110', 'Admin'),
(36, '36', '', '', '76907', 20.00, 50, '2024-12-14 06:53:26', NULL, '110', NULL),
(37, '37', '', '', '42318', 56.00, 89, '2024-12-14 06:56:32', NULL, '111', NULL),
(38, '38', '', '', '56358', 35.00, 70, '2024-12-16 10:26:40', '2024-12-15 22:26:40', '111', '111'),
(39, '39', '', '', '95440', 20.00, 36, '2024-12-16 10:19:16', '0000-00-00 00:00:00', '112', 'Admin'),
(40, '40', '', '', '30175', 35.00, 84, '2024-12-14 08:38:57', '0000-00-00 00:00:00', '111', 'Admin'),
(41, '41', '', '', '65272', 20.00, 78, '2024-12-14 07:06:23', NULL, '113', NULL),
(42, '42', '', '', '48898', 20.00, 3, '2024-12-16 08:45:02', '0000-00-00 00:00:00', '112', 'Admin'),
(43, '43', '', '', '88770', 26.00, 52, '2024-12-14 07:08:45', NULL, '113', NULL),
(44, '44', '', '', '14953', 90.00, 56, '2024-12-14 07:11:22', NULL, '113', NULL),
(45, '45', '', '', '86055', 30.00, 20, '2024-12-18 12:29:42', '0000-00-00 00:00:00', '112', 'Admin'),
(46, '46', '', '', '65261', 50.00, 56, '2024-12-14 07:13:05', NULL, '114', NULL),
(47, '47', '', '', '79032', 40.00, 100, '2024-12-14 07:15:36', NULL, '114', NULL),
(48, '48', '', '', '16494', 40.00, 80, '2024-12-14 07:18:06', '2024-12-14 07:18:06', '114', '114'),
(49, '49', '', '', '58116', 18.00, 35, '2024-12-18 12:29:42', '0000-00-00 00:00:00', '108', 'Admin'),
(50, '50', '', '', '', 0.00, 0, '2024-12-15 19:43:49', NULL, '', NULL),
(51, '51', '', '', '78402', 30.00, 95, '2024-12-20 05:30:55', '0000-00-00 00:00:00', '108', 'Admin'),
(52, '52', '', '', '13107', 50.00, 28, '2024-12-20 05:28:25', '0000-00-00 00:00:00', '106', 'Admin'),
(53, '53', '', '', '58380', 50.00, 0, '2024-12-18 06:55:56', '0000-00-00 00:00:00', '106', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `refunddetails`
--

CREATE TABLE `refunddetails` (
  `id` int(11) NOT NULL,
  `amount` float(10,2) NOT NULL,
  `orderId` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `sellarId` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `totalAmount` float(10,2) NOT NULL,
  `createdBy` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `createdOn` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedOn` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatedBy` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `sellerName` varchar(255) NOT NULL,
  `counterName` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `aadhar` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phoneNo` bigint(11) NOT NULL,
  `regFee` float(10,2) NOT NULL,
  `longitude` int(100) NOT NULL DEFAULT 0,
  `langitude` int(19) NOT NULL DEFAULT 0,
  `depositAmount` float(10,2) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `createdOn` datetime NOT NULL,
  `updatedOn` datetime NOT NULL,
  `createdBy` varchar(255) NOT NULL,
  `updatedBy` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `sellerName`, `counterName`, `pan`, `gst`, `aadhar`, `image`, `phoneNo`, `regFee`, `longitude`, `langitude`, `depositAmount`, `password`, `email`, `status`, `createdOn`, `updatedOn`, `createdBy`, `updatedBy`) VALUES
(110, 'RAJMANI', 'RAJ VEGITABLES', 'PANCD8598N', 'GST-IN5454884', '454546253232', '', 9565562336, 50.00, 0, 0, 500.00, '154494093', 'RAJ@GMAIL.COM', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Admin', ''),
(111, 'BAHADUR', 'BAHADUR VEGITABLES', '858585828585', 'GST-5485Y', '7898656894568', '', 4545454576, 50.00, 0, 0, 500.00, '542608228', 'BAHADUR@GMAIL.COM', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Admin', ''),
(106, 'MOHAN', 'MOHAN SABJI STORE', 'SQLJAVA858G', '18', '858565659898', '', 9558656523, 50.00, 0, 0, 500.00, '123', 'MOHANSABJI@GMAIL.COM', 1, '2024-10-12 01:37:30', '2024-10-12 01:42:00', 'Admin', 'Admin'),
(109, 'NEW', 'ABC', '555', '555', '555', '', 5555, 50.00, 0, 0, 500.00, '346811355', '5555', 1, '2024-11-12 06:02:01', '0000-00-00 00:00:00', 'Admin', ''),
(108, 'LALMANI', 'VEGITABLE SHOP', 'CLQPD457R', '18', '565689892323', '', 9856562589, 50.00, 0, 0, 500.00, '123', 'LAMANISABJI@GMAIL.COM', 1, '2024-11-12 04:36:27', '0000-00-00 00:00:00', 'Admin', ''),
(107, 'MUKESH PATEL', 'MUKESH VEGITALBE ', '5555', '50', '58855', '', 987456, 50.00, 0, 0, 500.00, '123', 'GIPLANNAD@GMAIL.CM', 1, '2024-11-12 04:07:02', '2024-11-12 04:35:54', 'Admin', 'Admin'),
(112, 'AMBUJ', 'AMBUJ VEGITABLES', 'CLQPDEFGH', '788548451', '787878584', '', 7877878787, 50.00, 0, 0, 500.00, '314578343', 'AMBUJ@GMAIL.COM', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Admin', ''),
(113, 'SHUBHAM', 'SHUBHAM VEGITABLES', 'DSFEF85758N', ' GST7678435', '54545964658', '', 454545454, 50.00, 0, 0, 500.00, '712595429', 'SHUBHAM@GMAIL.COM', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Admin', ''),
(115, 'RAJARAM PATEL', 'RAJARAM VEGITABLE SHOP', '2222', 'ABC', '11111', '', 987, 50.00, 0, 0, 500.00, '1623450076', 'ABC@GMAIL.COM', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `selleraddress`
--

CREATE TABLE `selleraddress` (
  `id` int(11) NOT NULL,
  `sellerId` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `customerCareNo` int(11) DEFAULT NULL,
  `feedback` varchar(255) DEFAULT NULL,
  `teamMembers` varchar(11) DEFAULT NULL,
  `createdBy` varchar(255) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updatedBy` varchar(255) NOT NULL,
  `updatedOn` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `selleraddress`
--

INSERT INTO `selleraddress` (`id`, `sellerId`, `address`, `city`, `pincode`, `customerCareNo`, `feedback`, `teamMembers`, `createdBy`, `createdOn`, `updatedBy`, `updatedOn`) VALUES
(46, '106', 'jaunpur badshapur', 'jaunapur', 222202, NULL, NULL, NULL, 'Admin', '2024-12-11 10:17:33', 'Admin', '2024-12-11 03:47:33'),
(48, '108', 'Mungra Badshahpur Jaunpur', 'Badshahpur', 222202, NULL, NULL, NULL, 'Admin', '2024-12-11 11:07:54', 'Admin', '2024-12-11 04:37:54'),
(47, '107', NULL, NULL, NULL, NULL, NULL, NULL, 'Admin', '2024-12-10 22:37:02', '', '0000-00-00 00:00:00'),
(49, '109', NULL, NULL, NULL, NULL, NULL, NULL, 'Admin', '2024-12-11 00:32:01', '', '0000-00-00 00:00:00'),
(50, '110', NULL, NULL, NULL, NULL, NULL, NULL, 'Admin', '2024-12-14 06:25:59', '', '0000-00-00 00:00:00'),
(51, '111', NULL, NULL, NULL, NULL, NULL, NULL, 'Admin', '2024-12-14 06:31:29', '', '0000-00-00 00:00:00'),
(52, '112', NULL, NULL, NULL, NULL, NULL, NULL, 'Admin', '2024-12-14 06:36:09', '', '0000-00-00 00:00:00'),
(53, '113', NULL, NULL, NULL, NULL, NULL, NULL, 'Admin', '2024-12-14 06:38:04', '', '0000-00-00 00:00:00'),
(55, '115', NULL, NULL, NULL, NULL, NULL, NULL, 'Admin', '2024-12-15 22:45:45', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sellerbankdetails`
--

CREATE TABLE `sellerbankdetails` (
  `id` int(11) NOT NULL,
  `sellerId` varchar(255) NOT NULL,
  `bankName` varchar(255) DEFAULT NULL,
  `AccountHolderName` varchar(255) DEFAULT NULL,
  `ifscCode` varchar(255) DEFAULT NULL,
  `upiId` varchar(255) DEFAULT NULL,
  `accountNo` bigint(20) DEFAULT NULL,
  `createdBy` varchar(255) DEFAULT NULL,
  `createdOn` timestamp NULL DEFAULT NULL,
  `updatedBy` varchar(255) DEFAULT NULL,
  `updatedOn` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sellerbankdetails`
--

INSERT INTO `sellerbankdetails` (`id`, `sellerId`, `bankName`, `AccountHolderName`, `ifscCode`, `upiId`, `accountNo`, `createdBy`, `createdOn`, `updatedBy`, `updatedOn`) VALUES
(46, '109', NULL, NULL, NULL, NULL, NULL, 'Admin', '2024-12-11 00:32:01', NULL, NULL),
(43, '106', 'abcd', NULL, 'sbin', '988', 123456, 'Admin', '2024-12-09 20:07:30', 'Admin', '2024-12-10 22:08:47'),
(45, '108', 'UBI', NULL, 'UBIN03333', '23445@ubi', 123000123000333, 'Admin', '2024-12-10 23:06:27', 'Admin', '2024-12-10 23:18:43'),
(44, '107', NULL, NULL, NULL, NULL, NULL, 'Admin', '2024-12-10 22:37:02', NULL, NULL),
(47, '110', NULL, NULL, NULL, NULL, NULL, 'Admin', '2024-12-14 06:25:59', NULL, NULL),
(48, '111', NULL, NULL, NULL, NULL, NULL, 'Admin', '2024-12-14 06:31:29', NULL, NULL),
(49, '112', NULL, NULL, NULL, NULL, NULL, 'Admin', '2024-12-14 06:36:09', NULL, NULL),
(50, '113', NULL, NULL, NULL, NULL, NULL, 'Admin', '2024-12-14 06:38:04', NULL, NULL),
(52, '115', NULL, NULL, NULL, NULL, NULL, 'Admin', '2024-12-15 22:45:45', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `parentId` varchar(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `subcategoriesImage` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `createdOn` datetime NOT NULL,
  `createdBy` varchar(255) NOT NULL,
  `updatedBy` varchar(255) NOT NULL,
  `updatedOn` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `parentId`, `name`, `description`, `subcategoriesImage`, `status`, `createdOn`, `createdBy`, `updatedBy`, `updatedOn`) VALUES
(75, '129', 'Dry', '', '', 1, '2024-11-25 05:49:29', '', '', '2024-11-25 05:49:29'),
(69, '128', 'Dry Vegitables', 'BEST FLEWAR', '65', 1, '2024-11-05 12:24:11', '', '', '2024-11-05 12:24:11'),
(72, '129', 'Seasonal', 'JJKKJJ', '71', 1, '2024-11-11 03:16:11', '', '', '0000-00-00 00:00:00'),
(71, '128', 'Seasonal ', 'BEST QUALITY', '70', 1, '2024-11-05 01:39:17', '', '', '2024-11-05 01:39:17'),
(70, '128', 'Green Vegitable', 'KKKK', '69', 1, '2024-11-05 12:26:21', '', '', '2024-11-05 12:26:21'),
(76, '130', 'Imported', '', '', 1, '2024-11-25 05:49:29', '', '', '2024-11-25 05:49:29'),
(77, '12236', 'Leafy Green', 'Crisp and nutrient-packed leafy greens, perfect for healthy salads, smoothies, and cooking. Includes spinach, lettuce, and other green varieties.', 'leafygreen.png', 1, '0000-00-00 00:00:00', '', '', '0000-00-00 00:00:00'),
(78, '12236', 'Fruity Vegitables', 'Naturally sweet and juicy vegetables like tomatoes, cucumbers, and bell peppers, perfect for fresh salads, sandwiches, or grilling.', 'fruityVeg.png', 1, '0000-00-00 00:00:00', '', '', '0000-00-00 00:00:00'),
(79, '12236', 'Cruciferous Vegetables', 'Packed with vitamins and fiber, these vegetables like broccoli, cauliflower, and cabbage are perfect for steaming, roasting, or adding to stir-fries.', 'Cruciferous.png', 1, '0000-00-00 00:00:00', 'Admin', '', '0000-00-00 00:00:00'),
(99, '12246', 'A', 'dddkddkk', '98', 1, '2024-12-09 03:33:43', '', '', '2024-12-09 03:33:43'),
(100, '12246', 'B', 'KKKKSKSK', '99', 1, '2024-12-09 03:33:58', '', '', '2024-12-09 03:33:58'),
(101, '12246', 'SSFSDF', 'SFSF', '100', 1, '2024-12-09 03:34:13', '', '', '2024-12-09 03:34:13'),
(102, '12247', '1', 'kkkk', '101', 1, '2024-12-09 03:34:58', '', '', '2024-12-09 03:34:58'),
(81, '12237', 'Berries', 'Sweet and juicy berries like strawberries, blueberries, raspberries, and blackberries, rich in antioxidants, perfect for snacking, smoothies, or desserts.', 'berries.png', 1, '0000-00-00 00:00:00', 'Admin', '', '0000-00-00 00:00:00'),
(82, '12237', 'Tropical Fruits', 'Exotic and flavorful fruits like mangoes, pineapples, papayas, and bananas, packed with vitamins and natural sweetness for a tropical treat', 'tropical.png', 1, '0000-00-00 00:00:00', 'Admin', '', '0000-00-00 00:00:00'),
(83, '12237', 'Stone Fruits', 'Juicy and delicious fruits like peaches, plums, cherries, and apricots, known for their sweet flavor and perfect for eating fresh or adding to baked goods.', 'stoneFruit.png', 1, '0000-00-00 00:00:00', 'Admin', '', '0000-00-00 00:00:00'),
(84, '12238', 'Freshly Cut Leafy Greens', 'Pre-washed and freshly cut leafy greens like spinach, lettuce, and arugula, ready to use in salads, wraps, or smoothies for a nutritious meal', 'freshlicut.png', 1, '0000-00-00 00:00:00', 'Admin', '', '0000-00-00 00:00:00'),
(85, '12238', 'Freshly vegitable', ' Conveniently cut and ready-to-cook vegetables such as carrots, bell peppers, and zucchini, perfect for stir-fries, salads, or as side dishes.', 'freshliveg.png', 1, '0000-00-00 00:00:00', 'Admin', '', '0000-00-00 00:00:00'),
(86, '12239', 'Hydroponic Tomatoes', 'Sweet, juicy tomatoes grown hydroponically, perfect for salads, sandwiches, and cooking, offering great flavor without the use of soil.', 'productUrl.png', 1, '0000-00-00 00:00:00', 'Admin', '', '0000-00-00 00:00:00'),
(87, '12239', 'Hydroponic Cucumbers', 'Refreshing and crunchy cucumbers cultivated in a soil-free, hydroponic environment, ideal for fresh salads, snacks, and light dishes.', 'productUrl.png', 1, '0000-00-00 00:00:00', 'Admin', '', '0000-00-00 00:00:00'),
(88, '12240', 'Stir-Fry Combo', 'A pre-cut mix of vegetables like broccoli, snap peas, bell peppers, and zucchini, perfect for a quick and healthy stir-fry or vegetable curry.', 'productUrl.png', 1, '0000-00-00 00:00:00', 'Admin', '', '0000-00-00 00:00:00'),
(89, '12240', 'Fruit &amp; Veggie Fusion Combo', 'A refreshing blend of seasonal fruits and vegetables, such as apples, spinach, and carrots, ideal for smoothies, juices, or a vibrant salad.', 'productUrl.png', 1, '0000-00-00 00:00:00', 'Admin', '', '0000-00-00 00:00:00'),
(90, '12241', 'Microgreens', 'Tiny, nutrient-packed greens such as radish, mustard, and sunflower sprouts, offering a burst of flavor and nutrition to your meals, smoothies, or as garnish.', 'productUrl.png', 1, '0000-00-00 00:00:00', 'Admin', '', '0000-00-00 00:00:00'),
(91, '12241', 'Fresh Herbs', 'Aromatic herbs like basil, mint, cilantro, and parsley, freshly picked to enhance the flavor of your dishes, salads, and sauces with their vibrant taste.', 'productUrl.png', 1, '0000-00-00 00:00:00', 'Admin', '', '0000-00-00 00:00:00'),
(92, '12242', 'Frozen Mixed Vegetables', ' A ready-to-cook blend of mixed vegetables such as carrots, corn, green beans, and peas, ideal for stir-fries, casseroles, and side dishes.', 'productUrl.png', 1, '0000-00-00 00:00:00', 'Admin', '', '0000-00-00 00:00:00'),
(93, '12242', 'Frozen Root Vegetables', 'Freshly frozen root vegetables like potatoes, sweet potatoes, and carrots, preserved at their peak to maintain flavor, texture, and nutritional value for easy cooking.', 'productUrl.png', 1, '0000-00-00 00:00:00', 'Admin', '', '0000-00-00 00:00:00'),
(94, '12243', 'Winter Vegetables', 'Heartwarming and hearty vegetables like carrots, beets, cauliflower, and Brussels sprouts, perfect for soups, stews, and roasts during the colder months.', 'productUrl.png', 1, '0000-00-00 00:00:00', 'Admin', '', '0000-00-00 00:00:00'),
(95, '12243', 'Summer Vegetables', 'Juicy and vibrant vegetables such as tomatoes, cucumbers, zucchini, and bell peppers, perfect for fresh salads, grilling, or adding to summer dishes.', 'productUrl.png', 1, '0000-00-00 00:00:00', 'Admin', '', '0000-00-00 00:00:00'),
(96, '12244', 'Carrots &amp; Beets', 'Vibrant and naturally sweet root vegetables like carrots and beets, packed with nutrients and perfect for roasting, juicing, or adding to salads and soups.', 'productUrl.png', 1, '0000-00-00 00:00:00', 'Admin', '', '0000-00-00 00:00:00'),
(97, '12244', 'Potatoes &amp; Sweet Potatoes', 'Classic root vegetables such as regular potatoes and nutrient-rich sweet potatoes, ideal for baking, mashing, frying, or adding to stews and casseroles.', 'productUrl.png', 1, '0000-00-00 00:00:00', 'Admin', '', '0000-00-00 00:00:00'),
(98, '12240', 'NEW', 'KKKK', '97', 1, '2024-12-09 03:12:05', '', '', '0000-00-00 00:00:00'),
(103, '12247', '2', 'ososoos', '102', 1, '2024-12-09 03:35:11', '', '', '2024-12-09 03:35:11'),
(104, '12248', 'Flowers', 'Flowers vegitables  .............', '103', 1, '2024-12-10 01:23:15', '', '', '2024-12-10 01:23:15'),
(105, '12250', 'Vegitable And Fruit', 'Vegitable And Fruits are best combination for health.......', '104', 1, '2024-12-10 01:53:02', '', '', '2024-12-10 01:53:02'),
(106, '12249', 'JUICE', 'Juice are good for health. ', '105', 1, '2024-12-10 01:56:54', '', '', '0000-00-00 00:00:00'),
(107, '12251', 'Spinach (Palak)', 'vegitables sub Description', '106', 1, '2024-12-10 03:59:28', '', '', '2024-12-10 03:59:28'),
(108, '12251', 'Coriander Leaves (Dhaniya)', 'vegitables sub Description', '107', 1, '2024-12-10 04:00:23', '', '', '2024-12-10 04:00:23'),
(109, '12251', 'Fenugreek Leaves', 'vegitables sub Description', '108', 1, '2024-12-10 04:00:58', '', '', '2024-12-10 04:00:58'),
(110, '12252', 'Potatoes', 'vegitables sub Description', '109', 1, '2024-12-10 04:01:39', '', '', '2024-12-10 04:01:39'),
(111, '12252', 'Carrot (Gajar)', 'vegitables sub Description', '110', 1, '2024-12-10 04:02:13', '', '', '2024-12-10 04:02:13'),
(112, '12252', 'Beetroot (Chukandar)', 'vegitables sub Description', '111', 1, '2024-12-10 04:03:55', '', '', '2024-12-10 04:03:55'),
(113, '12253', 'Tomatoes (Tamatar)', 'vegitables sub Description', '112', 1, '2024-12-10 04:04:52', '', '', '2024-12-10 04:04:52'),
(114, '12253', 'Brinjal (Baigan)', 'vegitables sub Description', '113', 1, '2024-12-10 04:05:32', '', '', '2024-12-10 04:05:32'),
(115, '12253', 'Capsicum (Shimla Mirch)', 'vegitables sub Description', '114', 1, '2024-12-10 04:06:05', '', '', '2024-12-10 04:06:05'),
(116, '12254', 'Bottle Gourd (Lauki)', 'vegitables sub Description', '115', 1, '2024-12-10 04:06:56', '', '', '2024-12-10 04:06:56'),
(117, '12254', 'Bitter Gourd (Karela)', 'vegitables sub Description', '116', 1, '2024-12-10 04:07:30', '', '', '2024-12-10 04:07:30'),
(118, '12252', 'Ridge Gourd (Turai)', 'vegitables sub Description', '117', 1, '2024-12-10 04:08:07', '', '', '2024-12-10 04:08:07'),
(119, '12255', 'Green Beans (French Beans)', 'vegitables sub Description', '118', 1, '2024-12-10 04:08:48', '', '', '2024-12-10 04:08:48'),
(120, '12255', 'Cluster Beans (Gawar)', 'vegitables sub Description', '119', 1, '2024-12-10 04:09:18', '', '', '0000-00-00 00:00:00'),
(121, '12255', 'Lima Beans (Papdi)', 'vegitables sub Description', '120', 1, '2024-12-10 04:11:14', '', '', '2024-12-10 04:11:14'),
(122, '12256', 'Cauliflower (Phool Gobhi)', 'vegitables sub Description', '121', 1, '2024-12-10 04:11:50', '', '', '2024-12-10 04:11:50'),
(123, '12256', 'Bottle Gourd Flowers (Lauki ke Phool)', 'vegitables sub Description', '122', 1, '2024-12-10 04:12:38', '', '', '2024-12-10 04:12:38'),
(124, '12256', 'Squash Blossoms (Tinda ke Phool)', 'vegitables sub Description', '123', 1, '2024-12-10 04:13:45', '', '', '2024-12-10 04:13:45'),
(125, '12257', 'ColoCasia (Arbi)', 'vegitables sub Description', '124', 1, '2024-12-10 04:14:24', '', '', '2024-12-10 04:14:24'),
(126, '12258', 'Mushrooms', 'vegitables sub Description', '125', 1, '2024-12-10 04:15:16', '', '', '2024-12-10 04:15:16'),
(127, '12258', 'Pumpkin (Kaddu)', 'vegitables sub Description', '126', 1, '2024-12-10 04:15:42', '', '', '2024-12-10 04:15:42'),
(128, '12258', 'Cabbage (Patta Gobhi)', 'vegitables sub Description', '127', 1, '2024-12-10 04:16:12', '', '', '2024-12-10 04:16:12'),
(129, '12249', 'Fruits', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '128', 1, '2024-12-14 12:39:38', '', '', '2024-12-14 12:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `subcategorieshistory`
--

CREATE TABLE `subcategorieshistory` (
  `id` int(11) NOT NULL,
  `parentId` varchar(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subcategoriesImage` varchar(255) NOT NULL,
  `createdOn` datetime NOT NULL,
  `createdBy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subcategorieshistory`
--

INSERT INTO `subcategorieshistory` (`id`, `parentId`, `name`, `subcategoriesImage`, `createdOn`, `createdBy`) VALUES
(126, '75', 'dry new', '75', '2024-11-30 04:30:14', 'Admin'),
(127, '75', 'dry new', '75', '2024-11-30 04:35:38', 'Admin'),
(128, '75', 'dry newgfdg', '75', '2024-11-30 04:36:02', 'Admin'),
(129, '72', 'Seasonalfbvdf', '72', '2024-11-30 04:37:19', 'Admin'),
(130, '72', 'Seasonalfbvdf', '72', '2024-11-30 04:38:05', 'Admin'),
(131, '129', 'Seasonalfbvdf', '72', '2024-11-30 04:39:11', 'Admin'),
(132, '129', 'Seasonalfbvdf', '72', '2024-11-30 04:40:15', 'Admin'),
(133, '', 'Seasonalfbvdf', '72', '2024-11-30 04:40:29', 'Admin'),
(134, '129', 'Seasonalfbvdf', '72', '2024-11-30 04:48:37', 'Admin'),
(135, '12238', 'online ss', '84', '2024-11-30 04:56:12', 'Admin'),
(136, '12238', 'online ss', '84', '2024-11-30 04:58:05', 'Admin'),
(137, '12238', 'online ss', '84', '2024-11-30 04:58:43', 'Admin'),
(138, '12238', 'online ss', '84', '2024-11-30 04:59:10', 'Admin'),
(139, '12238', 'online ss', '84', '2024-11-30 04:59:38', 'Admin'),
(140, '12240', 'NEW', '98', '2024-12-09 03:12:18', 'Admin'),
(141, '12249', 'Juice', '106', '2024-12-10 01:57:34', 'Admin'),
(142, '12249', 'Juice', '106', '2024-12-10 01:59:00', 'Admin'),
(143, '12249', 'JUICE', '106', '2024-12-10 01:59:25', 'Admin'),
(144, '12255', 'Cluster Beans (Gawar)', '120', '2024-12-10 04:10:06', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `useracountdetails`
--

CREATE TABLE `useracountdetails` (
  `id` int(11) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `bankName` varchar(255) NOT NULL,
  `AccountHolderName` varchar(255) NOT NULL,
  `ifscCode` varchar(255) NOT NULL,
  `accountNo` bigint(20) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `createdBy` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `phoneNo` bigint(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `lastLogin` varchar(255) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `createdBy` varchar(255) NOT NULL,
  `updatedBy` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userId`, `name`, `userName`, `email`, `password`, `dateOfBirth`, `phoneNo`, `status`, `lastLogin`, `createdOn`, `updatedOn`, `createdBy`, `updatedBy`) VALUES
(6, '', 'ANAND', '', 'giplanand@gmail.com', '123', '0000-00-00', 0, 0, '', '0000-00-00 00:00:00', '2024-11-15 08:32:02', '', ''),
(28, '123', 'VIKASH', '123', '123', '', '0000-00-00', 0, 0, '', '0000-00-00 00:00:00', '2024-12-12 10:04:02', '', ''),
(29, '8', '88', '8', '8', '8', '0000-00-00', 0, 0, '', '0000-00-00 00:00:00', '2024-12-12 10:05:53', '', ''),
(30, 'ROOT', '', 'root', 'ROOT', 'root', '0000-00-00', 0, 0, '', '0000-00-00 00:00:00', '2024-12-12 10:06:27', '', ''),
(31, '44', '44', '44', '44', '4', '0000-00-00', 0, 0, '', '0000-00-00 00:00:00', '2024-12-12 10:14:21', '', ''),
(32, 'ABC@GMAIL.COM', 'ABC', 'abc@gmail.com', 'ABC@GMAIL.COM', '1234', '0000-00-00', 0, 0, '', '0000-00-00 00:00:00', '2024-12-12 10:52:26', '', ''),
(33, 'TEST@GMAIL.COM', 'ABC', 'test@gmail.com', 'TEST@GMAIL.COM', '', '0000-00-00', 0, 0, '', '2024-12-12 04:26:19', '2024-12-12 10:56:19', 'User', ''),
(34, 'TEST@W.COM', 'TEST', 'test@w.com', 'TEST@W.COM', '123', '0000-00-00', 0, 0, '', '2024-12-12 04:26:46', '2024-12-12 10:56:46', 'User', ''),
(35, 'GIPLANSHUMAN@GMAIL.COM', 'ANSHUMAN SINGH', 'giplanshuman@gmail.com', 'GIPLANSHUMAN@GMAIL.COM', 'Anshuman', '0000-00-00', 0, 0, '', '2024-12-13 10:54:57', '2024-12-13 05:24:57', 'User', ''),
(36, 'KUKZKEHULL@YAHOO.COM', 'HBMYSIVP', 'kukzkehull@yahoo.com', 'KUKZKEHULL@YAHOO.COM', 'jfRUXrnvNpmegN!', '0000-00-00', 0, 0, '', '2024-12-13 10:59:24', '2024-12-13 05:29:24', 'User', ''),
(37, 'JYFVN8H8FE9WTJGXT@YAHOO.COM', 'CSUPGTWBA', 'jyfvn8h8fe9wtjgxt@yahoo.com', 'JYFVN8H8FE9WTJGXT@YAHOO.COM', '2fIOpacpmSYyf9!', '0000-00-00', 0, 0, '', '2024-12-13 11:01:51', '2024-12-13 05:31:51', 'User', ''),
(38, 'KGF.AYUSHMAN@GMAIL.COM', 'ANSHUMAN', 'kgf.ayushman@gmail.com', 'KGF.AYUSHMAN@GMAIL.COM', 'Ayushman', '0000-00-00', 0, 0, '', '2024-12-13 11:20:21', '2024-12-13 05:50:21', 'User', ''),
(39, 'GIPLAYUSHI3632@GMAIL.COM', 'AYUSHMAN', 'giplayushi3632@gmail.com', 'GIPLAYUSHI3632@GMAIL.COM', 'Anshuman', '0000-00-00', 0, 0, '', '2024-12-14 09:50:20', '2024-12-14 04:20:20', 'User', ''),
(40, 'SHAMEKLISAMEYAW@YAHOO.COM', 'RKVHYNIIO', 'shameklisameyaw@yahoo.com', 'SHAMEKLISAMEYAW@YAHOO.COM', 'i7JY8UB8rqGvMu!', '0000-00-00', 0, 0, '', '2024-12-14 11:33:18', '2024-12-14 06:03:18', 'User', ''),
(41, 'SBLXUAJGBVPHVRYN@YAHOO.COM', 'LMOOXQIKJY', 'sblxuajgbvphvryn@yahoo.com', 'SBLXUAJGBVPHVRYN@YAHOO.COM', 'L38xiZgrUot0Em!', '0000-00-00', 0, 0, '', '2024-12-14 11:44:10', '2024-12-14 06:14:10', 'User', ''),
(42, 'TANZMAELO@YAHOO.COM', 'OJSVHNQEEBAOH', 'tanzmaelo@yahoo.com', 'TANZMAELO@YAHOO.COM', 'sj4jamZbVjw3CB!', '0000-00-00', 0, 0, '', '2024-12-15 07:39:53', '2024-12-15 02:09:53', 'User', ''),
(43, 'EKTKAGHVWPIAO@YAHOO.COM', 'TCVEVSLQGDYPTI', 'ektkaghvwpiao@yahoo.com', 'EKTKAGHVWPIAO@YAHOO.COM', 'KCmsFO3lZa1Xcb!', '0000-00-00', 0, 0, '', '2024-12-16 05:50:05', '2024-12-16 00:20:05', 'User', ''),
(44, 'VP7240012@GMAIL.COM', 'VIKASH KUMAR', 'vp7240012@gmail.com', 'VP7240012@GMAIL.COM', '951743', '0000-00-00', 0, 0, '', '2024-12-16 10:33:29', '2024-12-16 05:03:29', 'User', ''),
(45, '', '', '', '', '', '0000-00-00', 0, 0, '', '2024-12-16 10:33:32', '2024-12-16 05:03:32', 'User', ''),
(46, 'AMARKUMAR@GMAIL.COM', 'ADITYA SINGH', 'amarkumar@gmail.com', 'AMARKUMAR@GMAIL.COM', 'StormBreaker', '0000-00-00', 0, 0, '', '2024-12-16 01:07:57', '2024-12-16 07:37:57', 'User', '');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `productId` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updateOn` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `productId`, `userId`, `createdOn`, `updateOn`) VALUES
(2, 'yu', '33', '2024-11-24 18:30:00', NULL),
(3, '1', '2', '2024-11-25 04:34:37', NULL),
(4, '1', '2', '2024-11-25 04:36:50', NULL),
(5, '1', '2', '2024-11-25 04:37:04', NULL),
(6, '1', '2', '2024-11-25 04:37:16', NULL),
(7, '1', '2', '2024-11-25 05:13:33', NULL),
(8, '1', '2', '2024-11-25 05:15:25', NULL),
(9, '1', '2', '2024-11-25 05:16:34', NULL),
(10, '1', '2', '2024-11-25 05:16:37', NULL),
(11, '1', '2', '2024-11-25 05:16:53', NULL),
(12, '1', '2', '2024-11-25 05:17:43', NULL),
(13, '1', '2', '2024-11-25 05:20:45', NULL),
(14, '1', '2', '2024-11-25 05:21:23', NULL),
(15, '1', '2', '2024-11-25 05:21:27', NULL),
(16, '1', '2', '2024-11-25 05:23:14', NULL),
(17, '1', '2', '2024-11-25 05:27:39', NULL),
(18, '1', '2', '2024-11-25 05:27:55', NULL),
(19, '1', '2', '2024-11-25 05:29:46', NULL),
(20, '1', '2', '2024-11-25 05:30:31', NULL),
(21, '1', '2', '2024-11-25 05:30:44', NULL),
(22, '1', '2', '2024-11-25 05:31:05', NULL),
(23, '1', '2', '2024-11-25 05:31:41', NULL),
(24, '1', '2', '2024-11-25 05:32:25', NULL),
(25, '1', '2', '2024-11-25 05:32:29', NULL),
(26, '1', '2', '2024-11-25 05:32:55', NULL),
(27, '1', '2', '2024-11-25 05:35:03', NULL),
(28, '1', '2', '2024-11-25 05:35:43', NULL),
(29, '1', '2', '2024-11-25 05:36:07', NULL),
(30, '1', '2', '2024-11-25 05:37:34', NULL),
(31, '1', '2', '2024-11-25 05:38:53', NULL),
(32, '1', '2', '2024-11-25 05:39:36', NULL),
(33, '1', '2', '2024-11-25 05:39:48', NULL),
(34, '1', '2', '2024-11-25 05:40:09', NULL),
(35, '1', '2', '2024-11-25 05:40:19', NULL),
(36, '1', '2', '2024-11-25 05:40:28', NULL),
(37, '1', '2', '2024-11-25 05:40:58', NULL),
(38, '1', '2', '2024-11-25 05:41:53', NULL),
(39, '1', '2', '2024-11-25 05:42:56', NULL),
(40, '1', '2', '2024-11-25 05:43:14', NULL),
(41, '1', '2', '2024-11-25 05:43:34', NULL),
(42, '1', '2', '2024-11-25 05:43:53', NULL),
(43, '1', '2', '2024-11-25 05:44:21', NULL),
(44, '1', '2', '2024-11-25 05:46:35', NULL),
(45, '1', '2', '2024-11-25 05:46:59', NULL),
(46, '1', '2', '2024-11-25 05:47:52', NULL),
(47, '1', '2', '2024-11-25 05:48:15', NULL),
(48, '1', '2', '2024-11-25 05:49:00', NULL),
(49, '1', '2', '2024-11-25 05:49:09', NULL),
(50, '1', '2', '2024-11-25 05:50:05', NULL),
(51, '1', '2', '2024-11-25 05:50:14', NULL),
(52, '1', '2', '2024-11-25 05:51:46', NULL),
(53, '1', '2', '2024-11-25 05:52:22', NULL),
(54, '1', '2', '2024-11-25 05:55:12', NULL),
(55, '1', '2', '2024-11-25 05:57:18', NULL),
(56, '1', '2', '2024-11-25 05:58:05', NULL),
(57, '1', '2', '2024-11-25 06:01:00', NULL),
(58, '1', '2', '2024-11-25 06:01:10', NULL),
(59, '1', '2', '2024-11-25 06:01:30', NULL),
(60, '1', '2', '2024-11-25 06:02:28', NULL),
(61, '1', '2', '2024-11-25 06:02:51', NULL),
(62, '1', '2', '2024-11-25 06:03:29', NULL),
(63, '1', '2', '2024-11-25 06:03:42', NULL),
(64, '1', '2', '2024-11-25 06:05:07', NULL),
(65, '1', '2', '2024-11-25 06:05:36', NULL),
(66, '1', '2', '2024-11-25 06:07:56', NULL),
(67, '1', '2', '2024-11-25 06:08:29', NULL),
(68, '1', '2', '2024-11-25 06:09:02', NULL),
(69, '1', '2', '2024-11-25 06:10:06', NULL),
(70, '1', '2', '2024-11-25 06:15:00', NULL),
(71, '1', '2', '2024-11-25 06:15:39', NULL),
(72, '1', '2', '2024-11-25 06:16:07', NULL),
(73, '1', '2', '2024-11-25 06:16:27', NULL),
(74, '1', '2', '2024-11-25 06:16:52', NULL),
(75, '1', '2', '2024-11-25 06:17:07', NULL),
(76, '1', '2', '2024-11-25 06:17:18', NULL),
(77, '1', '2', '2024-11-25 06:18:05', NULL),
(78, '1', '2', '2024-11-25 06:18:22', NULL),
(79, '1', '2', '2024-11-25 06:18:55', NULL),
(80, '1', '2', '2024-11-25 06:20:29', NULL),
(81, '1', '2', '2024-11-25 06:20:47', NULL),
(82, '1', '2', '2024-11-25 06:26:03', NULL),
(83, '1', '2', '2024-11-25 06:31:41', NULL),
(84, '1', '2', '2024-11-25 06:34:27', NULL),
(85, '1', '2', '2024-11-25 06:34:55', NULL),
(86, '1', '2', '2024-11-25 06:35:12', NULL),
(87, '1', '2', '2024-11-25 06:35:40', NULL),
(88, '1', '2', '2024-11-25 06:36:34', NULL),
(89, '1', '2', '2024-11-25 06:48:28', NULL),
(90, '1', '2', '2024-11-25 06:48:48', NULL),
(91, '1', '2', '2024-11-25 06:49:08', NULL),
(92, '1', '2', '2024-11-25 06:49:35', NULL),
(93, '1', '2', '2024-11-25 06:50:14', NULL),
(94, '1', '2', '2024-11-25 06:50:55', NULL),
(95, '1', '2', '2024-11-25 06:51:08', NULL),
(96, '1', '2', '2024-11-25 06:51:35', NULL),
(97, '1', '2', '2024-11-25 06:52:07', NULL),
(98, '1', '2', '2024-11-25 06:52:26', NULL),
(99, '1', '2', '2024-11-25 06:54:07', NULL),
(100, '1', '2', '2024-11-25 14:34:07', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `categorieshistory`
--
ALTER TABLE `categorieshistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commision`
--
ALTER TABLE `commision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliverybankdetails`
--
ALTER TABLE `deliverybankdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliveryboy`
--
ALTER TABLE `deliveryboy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliveryboyhistory`
--
ALTER TABLE `deliveryboyhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliveryincome`
--
ALTER TABLE `deliveryincome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliverypayment`
--
ALTER TABLE `deliverypayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orderId` (`orderId`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orderId` (`orderId`,`productId`);

--
-- Indexes for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popularity`
--
ALTER TABLE `popularity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productattributes`
--
ALTER TABLE `productattributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producthistory`
--
ALTER TABLE `producthistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productskuid`
--
ALTER TABLE `productskuid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refunddetails`
--
ALTER TABLE `refunddetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selleraddress`
--
ALTER TABLE `selleraddress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellerbankdetails`
--
ALTER TABLE `sellerbankdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parentId` (`parentId`);

--
-- Indexes for table `subcategorieshistory`
--
ALTER TABLE `subcategorieshistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useracountdetails`
--
ALTER TABLE `useracountdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12259;

--
-- AUTO_INCREMENT for table `categorieshistory`
--
ALTER TABLE `categorieshistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `commision`
--
ALTER TABLE `commision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deliverybankdetails`
--
ALTER TABLE `deliverybankdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `deliveryboy`
--
ALTER TABLE `deliveryboy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `deliveryincome`
--
ALTER TABLE `deliveryincome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `deliverypayment`
--
ALTER TABLE `deliverypayment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=396;

--
-- AUTO_INCREMENT for table `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=411;

--
-- AUTO_INCREMENT for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `popularity`
--
ALTER TABLE `popularity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productattributes`
--
ALTER TABLE `productattributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producthistory`
--
ALTER TABLE `producthistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `productskuid`
--
ALTER TABLE `productskuid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `refunddetails`
--
ALTER TABLE `refunddetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `selleraddress`
--
ALTER TABLE `selleraddress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `sellerbankdetails`
--
ALTER TABLE `sellerbankdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `subcategorieshistory`
--
ALTER TABLE `subcategorieshistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `useracountdetails`
--
ALTER TABLE `useracountdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
