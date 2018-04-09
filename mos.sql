-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 05:03 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mos`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `title`, `color`, `start`, `end`) VALUES
(1, 'All Day Event', '#40E0D0', '2016-01-01 00:00:00', '0000-00-00 00:00:00'),
(3, 'Repeating Event', '#0071c5', '2016-01-09 16:00:00', '0000-00-00 00:00:00'),
(4, 'Conference', '#40E0D0', '2016-01-11 00:00:00', '2016-01-13 00:00:00'),
(5, 'Meeting', '#000', '2016-01-12 10:30:00', '2016-01-12 12:30:00'),
(6, 'Lunch', '#0071c5', '2016-01-12 12:00:00', '0000-00-00 00:00:00'),
(7, 'Happy Hour', '#0071c5', '2016-01-12 17:30:00', '0000-00-00 00:00:00'),
(8, 'Dinner', '#0071c5', '2016-01-12 20:00:00', '0000-00-00 00:00:00'),
(9, 'Birthday Party', '#FFD700', '2016-01-14 07:00:00', '2016-01-14 07:00:00'),
(10, 'Double click to change', '#008000', '2016-01-28 00:00:00', '0000-00-00 00:00:00'),
(16, 'mmmm', '#FF0000', '2018-03-20 00:00:00', '2018-03-21 00:00:00'),
(17, 'sdsdsds', '', '2016-01-08 00:00:00', '2016-01-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_sub` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_sub`, `created_at`, `updated_at`) VALUES
(1, 'Serum', '', '2018-03-08 08:34:46', '0000-00-00 00:00:00'),
(2, 'Cleanser', '', '2018-03-08 08:34:52', '0000-00-00 00:00:00'),
(3, 'Moisturizer', '', '2018-03-08 08:34:57', '0000-00-00 00:00:00'),
(4, 'Tools', '', '2018-03-08 08:35:01', '0000-00-00 00:00:00'),
(5, 'Supplement', '', '2018-03-08 08:35:07', '0000-00-00 00:00:00'),
(6, 'Juice', '', '2018-03-09 01:48:54', '0000-00-00 00:00:00'),
(7, 'Combo', '', '2018-03-14 07:23:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(10) NOT NULL,
  `company_image` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `company_email` varchar(200) NOT NULL,
  `company_address` longtext NOT NULL,
  `company_poscode` varchar(100) NOT NULL,
  `company_city` varchar(200) NOT NULL,
  `company_state` varchar(200) NOT NULL,
  `company_phone` varchar(200) NOT NULL,
  `company_fb` varchar(200) NOT NULL,
  `employee` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(10) NOT NULL,
  `employee_image` varchar(100) NOT NULL,
  `employee_name` varchar(191) DEFAULT NULL,
  `employee_email` varchar(191) NOT NULL,
  `employee_password` varchar(191) NOT NULL,
  `employee_phone` varchar(191) DEFAULT NULL,
  `employee_address` varchar(191) DEFAULT NULL,
  `employee_city` varchar(191) DEFAULT NULL,
  `employee_poscode` varchar(191) DEFAULT NULL,
  `employee_state` varchar(191) DEFAULT NULL,
  `employee_status` varchar(191) NOT NULL,
  `role_id` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_salary` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `employee_image`, `employee_name`, `employee_email`, `employee_password`, `employee_phone`, `employee_address`, `employee_city`, `employee_poscode`, `employee_state`, `employee_status`, `role_id`, `created_at`, `updated_at`, `employee_salary`) VALUES
(1, 'suit.png', 'MOS NUTRACEUTICAL', 'mos@gmail.com', '123', '016-4668181', '116, Lorong Putra A/1, Kelang Lama', 'Kulim', '09000', 'Kedah', 'Approved', 1, '2018-03-15 02:36:35', NULL, '0.00'),
(2, 'suit.png', 'Nurwajihah Binti Mansor', 'wajihah@gmail.com', '123', '013-5034119', '386, Kampung Telok Lebuhraya Sultan Abdul Halim', 'Alor Setar', '05400', 'Kedah', 'Approved', 5, '2018-03-15 03:08:54', '2018-03-23 03:07:19', '0.00'),
(3, 'suit.png', 'Ahmad Sabri Bin Yunus', 'sabri@gmail.com', '123', '011-11234567', '24, Kampung Pandan Semenyih', 'Selangor', '08900', 'WP Kuala Lumpur', 'Pending', 4, '2018-03-20 08:38:53', NULL, '0.00'),
(4, 'suit.png', 'Khairunnisa Binti Ahmad Shuib', 'kai_nisa@yahoo.com', '123', '017-1234567', '157, Jalan Pelangi', 'Jitra', '06000 ', 'Kedah', 'Pending', 3, '2018-03-20 09:23:32', NULL, '0.00'),
(5, 'suit.png', 'Siti Kairiah Binti Shamsuddin', 'siti@gmail.com', '123', '019-1098765', '99, Jalan Rawang', 'Kuala Lumpur', '07000', 'WP Kuala Lumpur', 'Pending', 7, '2018-03-20 09:25:47', NULL, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(100) NOT NULL,
  `cat_id` int(100) DEFAULT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_image` varchar(500) NOT NULL,
  `item_description` longtext NOT NULL,
  `item_highlight` varchar(500) NOT NULL,
  `item_ingredient` longtext NOT NULL,
  `item_videolink` varchar(5000) NOT NULL,
  `item_weight` varchar(100) NOT NULL,
  `item_color` varchar(100) NOT NULL,
  `item_price` decimal(15,2) NOT NULL,
  `item_instock` int(100) NOT NULL,
  `shipping_status` varchar(100) NOT NULL,
  `ship_sm` decimal(15,2) NOT NULL,
  `ship_ss` decimal(15,2) NOT NULL,
  `promo_startdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `promo_enddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `item_createdby` varchar(100) NOT NULL,
  `item_updatedby` varchar(100) NOT NULL,
  `promo_createdby` varchar(100) NOT NULL,
  `promo_updatedby` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `order_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `order_quantity` int(10) NOT NULL,
  `product_id` int(10) DEFAULT NULL,
  `promo_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`order_id`, `user_id`, `order_quantity`, `product_id`, `promo_id`, `created_at`) VALUES
(1, 1, 1, 4, NULL, '2018-03-06 19:00:07.007200'),
(2, 1, 2, 5, NULL, '2018-03-06 19:00:07.048202'),
(3, 3, 1, 1, NULL, '2018-03-21 06:51:00.821952'),
(4, 3, 1, 4, NULL, '2018-03-21 06:55:17.320176'),
(5, 2, 2, 5, NULL, '2018-03-27 07:10:17.294790');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ord_id` int(10) NOT NULL,
  `order_total` decimal(8,2) NOT NULL,
  `order_name` varchar(100) NOT NULL,
  `order_address` varchar(100) NOT NULL,
  `order_poscode` int(5) NOT NULL,
  `order_city` varchar(100) NOT NULL,
  `order_state` varchar(100) NOT NULL,
  `order_phone` varchar(15) NOT NULL,
  `order_status` varchar(30) DEFAULT NULL,
  `shipping_id` int(10) DEFAULT NULL,
  `payment_id` int(10) DEFAULT NULL,
  `pay_receipt` varchar(100) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `tracking_no` varchar(200) NOT NULL,
  `tracking_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `trackingby` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ord_id`, `order_total`, `order_name`, `order_address`, `order_poscode`, `order_city`, `order_state`, `order_phone`, `order_status`, `shipping_id`, `payment_id`, `pay_receipt`, `user_id`, `tracking_no`, `tracking_date`, `trackingby`, `created_at`) VALUES
(1, '174.00', 'Nur Syazwani', 'Taman Haruan', 9000, 'Kulim', 'Kedah', '0134173644', 'Being Prepared', 1, 3, NULL, 1, '', '2018-03-25 12:38:50', 'mos@gmail.com', '2018-03-16 08:03:21'),
(3, '39.00', 'Siti Khairiah', 'Taman Haruan', 9000, 'Kulim', 'Sabah', '0134173644', 'Pending', 1, 3, '', 3, '', '2018-03-22 03:16:24', 'mos@gmail.com', '2018-03-19 07:37:24'),
(4, '84.00', 'Ahmad Zakuan', 'Taman Haruan', 9000, 'Kulim', 'Sarawak', '0134173644', 'Processed', 1, 1, '', 2, 'EN1564464988MY', '2018-03-25 12:37:37', 'mos@gmail.com', '2018-03-19 08:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `hist_id` int(10) NOT NULL,
  `ord_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `order_quantity` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`hist_id`, `ord_id`, `product_id`, `order_quantity`, `user_id`, `created_at`) VALUES
(9, 1, 6, 1, 1, '2018-03-16 08:03:21'),
(10, 1, 1, 1, 1, '2018-03-16 08:03:21'),
(11, 1, 2, 1, 1, '2018-03-19 06:20:43'),
(12, 3, 6, 1, 3, '2018-03-19 06:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(10) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `payment_description` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_type`, `payment_description`, `created_at`, `updated_at`) VALUES
(1, 'Cash On Delivery (COD)', 'Self-pickup orders.', '2018-03-09 06:52:26', NULL),
(2, 'Online Banking', 'Pay through online', '2018-03-09 06:52:26', NULL),
(3, 'Cash Transfer', 'Pay using ATM machine and upload your receipt here.', '2018-03-09 06:53:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(100) NOT NULL,
  `cat_id` int(100) DEFAULT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_image` longtext NOT NULL,
  `product_video` varchar(5000) NOT NULL,
  `product_description` longtext NOT NULL,
  `product_highlight` varchar(500) NOT NULL,
  `product_ingredient` longtext NOT NULL,
  `product_weight` varchar(100) NOT NULL,
  `product_color` varchar(100) NOT NULL,
  `product_price` decimal(15,2) NOT NULL,
  `product_instock` int(100) NOT NULL,
  `shipping_status` varchar(100) NOT NULL,
  `semenanjung` decimal(15,2) NOT NULL,
  `sabah_sarawak` decimal(15,2) NOT NULL,
  `promo_start` varchar(100) NOT NULL,
  `promo_end` varchar(100) NOT NULL,
  `createdby` varchar(100) NOT NULL,
  `updatedby` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `cat_id`, `product_name`, `product_image`, `product_video`, `product_description`, `product_highlight`, `product_ingredient`, `product_weight`, `product_color`, `product_price`, `product_instock`, `shipping_status`, `semenanjung`, `sabah_sarawak`, `promo_start`, `promo_end`, `createdby`, `updatedby`, `level`, `created_at`, `updated_at`) VALUES
(1, 1, 'Annona Vitamin C Serum', 'c.jpg', '<p><iframe frameborder=\"0\" height=\"315\" scrolling=\"no\" src=\"https://www.youtube.com/embed/BVwAVbKYYeM?rel=0&amp;amp;showinfo=0\" width=\"560\"></iframe></p>\r\n', '<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\"><strong>Kenapa Vitamin C adalah &#39;makanan&#39; wajib bagi kulit?</strong></span></span></span></span></p>\r\n\r\n<hr />\r\n<div class=\"text-8\" style=\"-webkit-text-stroke-width:0px; max-width:740px; text-align:start\">\r\n<div class=\"text-8\" style=\"max-width:740px\">\r\n<div class=\"text-8\" style=\"max-width:740px\">\r\n<div class=\"text-8\" style=\"max-width:740px\">\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">-Kulit cerah sekata.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">Vitamin C terbukti membantu mencerahkan kulit anda melalui mekanisme pengurangan penghasilan melanin.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">-Kulit muda &amp;&nbsp;tegang.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">Vitamin C terbukti meningkatkan penghasilan kolagen yang seterusnya akan menegangkan kulit anda.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">-Kulit cantik &amp; sihat.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">Vitamin C terbukti bertindak sebagai antioksida yang melawan radikal bebas yang merosakkan kulit anda.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">-Kulit lembab &amp; lembut.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">Vitamin C terbukti bertindak sebagai mild&nbsp;exfoliant yang menanggalkan sel-sel mati dari kulit yang seterusnya akan melembutkan kulit anda.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">-Kulit bebas jerawat.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">Vitamin C terbukti mengurangkan masalah pori tersumbat yang menjadi punca utama kepada penghasilan jerawat.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">-Kulit bebas jeragat.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">Vitamin C terbukti mampu memudarkan jeragat dan tompok gelap dengan penggunaan konsisten.</span></span></span></span></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n', 'Brand: Annona\r\nProduct Code: Annona Vitamin C Serum \r\nAvailability: In Stock', '<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><strong><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">KANDUNGAN UTAMA DI DALAM VITAMIN C SERUM DAN FUNGSINYA</span></span></span></span></strong></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Vitamin C,&nbsp;Glutathione,&nbsp;Asid Hyaluronik,&nbsp;Ekstrak daun Saxifraga,&nbsp;Ekstrak akar pokok Peony,&nbsp;Ekstrak akar pokok Peony,&nbsp;Ekstrak akar pokok Skullcap &amp;&nbsp;Ekstrak buah Delima</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Vitamin C&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Mencegah dan memperbaiki sel kulit yang rosak akibat sinaran UV matahari, jerawat dan silap pakai kosmetik</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Meransang penghasilan kolagen secara semulajadi</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Mengurangkan tompok hitam pada kulit</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Meningkatkan keanjalan kulit&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Memberikan kesan cerah sekata&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Glutathione</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Digelar &#39;Mother of Antioxidant&#39; kerana kuasa antioksidannya yang sangat kuat dan mampu mencerahkan kulit yang kusam</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Menghaluskan dan mengecilkan liang pori</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Mengawal masalah kulit yang selalu naik jerawat</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Memudarkan parut.&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Asid Hyaluronik</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Memelihara kelembapan pada kulit</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Membuatkan kulit lebih licin, halus dan lebih anjal.&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Ekstrak daun Saxifraga</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Sebagai Antioksidan</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Mempunyai kesan pencerahan pada kulit.&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Bersifat astringent , iaitu mengetatkan liang pori yang besar</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Ekstrak akar pokok Peony</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Digunakan secara meluas dalam kosmetik di Jepun untuk kesan pencerahan kulit</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Bersifat anti radang, ia membantu mengurangkan sensitiviti pada kulit</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Melancarkan aliran darah di bawah kulit.&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Memberikan kesan glowing dan menaikkan seri wajah</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Ekstrak akar pokok Skullcap</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Kesan antioksidan yang tinggi</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Melembapkan kulit</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Melindungi kulit dari kerosakan akibat sinaran UV</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Membantu meredakan kulit yang sensitif&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Ekstrak buah Delima</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Melawan penuaan dan sebagai anti kedutan</span></span></span></span></p>\r\n', '5ml', '', '45.00', 1000, 'NO', '6.00', '9.00', '2018-03-16 11:36:37', '0000-00-00 00:00:00', 'mos@gmail.com', '', 'product', '2018-03-16 06:54:28', '0000-00-00 00:00:00'),
(2, 1, 'Annona Vitamin C Serum', 'c.jpg', '<p><iframe frameborder=\"0\" height=\"315\" scrolling=\"no\" src=\"https://www.youtube.com/embed/BVwAVbKYYeM?rel=0&amp;amp;showinfo=0\" width=\"560\"></iframe></p>\r\n', '<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\"><strong>Kenapa Vitamin C adalah &#39;makanan&#39; wajib bagi kulit?</strong></span></span></span></span></p>\r\n\r\n<hr />\r\n<div class=\"text-8\" style=\"-webkit-text-stroke-width:0px; max-width:740px; text-align:start\">\r\n<div class=\"text-8\" style=\"max-width:740px\">\r\n<div class=\"text-8\" style=\"max-width:740px\">\r\n<div class=\"text-8\" style=\"max-width:740px\">\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">-Kulit cerah sekata.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">Vitamin C terbukti membantu mencerahkan kulit anda melalui mekanisme pengurangan penghasilan melanin.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">-Kulit muda &amp;&nbsp;tegang.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">Vitamin C terbukti meningkatkan penghasilan kolagen yang seterusnya akan menegangkan kulit anda.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">-Kulit cantik &amp; sihat.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">Vitamin C terbukti bertindak sebagai antioksida yang melawan radikal bebas yang merosakkan kulit anda.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">-Kulit lembab &amp; lembut.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">Vitamin C terbukti bertindak sebagai mild&nbsp;exfoliant yang menanggalkan sel-sel mati dari kulit yang seterusnya akan melembutkan kulit anda.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">-Kulit bebas jerawat.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">Vitamin C terbukti mengurangkan masalah pori tersumbat yang menjadi punca utama kepada penghasilan jerawat.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">-Kulit bebas jeragat.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">Vitamin C terbukti mampu memudarkan jeragat dan tompok gelap dengan penggunaan konsisten.</span></span></span></span></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n', 'Brand: Annona\r\nProduct Code: Annona Vitamin C Serum \r\nAvailability: In Stock', '<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><strong><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">KANDUNGAN UTAMA DI DALAM VITAMIN C SERUM DAN FUNGSINYA</span></span></span></span></strong></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Vitamin C,&nbsp;Glutathione,&nbsp;Asid Hyaluronik,&nbsp;Ekstrak daun Saxifraga,&nbsp;Ekstrak akar pokok Peony,&nbsp;Ekstrak akar pokok Peony,&nbsp;Ekstrak akar pokok Skullcap &amp;&nbsp;Ekstrak buah Delima</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Vitamin C&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Mencegah dan memperbaiki sel kulit yang rosak akibat sinaran UV matahari, jerawat dan silap pakai kosmetik</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Meransang penghasilan kolagen secara semulajadi</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Mengurangkan tompok hitam pada kulit</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Meningkatkan keanjalan kulit&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Memberikan kesan cerah sekata&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Glutathione</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Digelar &#39;Mother of Antioxidant&#39; kerana kuasa antioksidannya yang sangat kuat dan mampu mencerahkan kulit yang kusam</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Menghaluskan dan mengecilkan liang pori</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Mengawal masalah kulit yang selalu naik jerawat</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Memudarkan parut.&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Asid Hyaluronik</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Memelihara kelembapan pada kulit</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Membuatkan kulit lebih licin, halus dan lebih anjal.&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Ekstrak daun Saxifraga</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Sebagai Antioksidan</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Mempunyai kesan pencerahan pada kulit.&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Bersifat astringent , iaitu mengetatkan liang pori yang besar</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Ekstrak akar pokok Peony</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Digunakan secara meluas dalam kosmetik di Jepun untuk kesan pencerahan kulit</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Bersifat anti radang, ia membantu mengurangkan sensitiviti pada kulit</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Melancarkan aliran darah di bawah kulit.&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Memberikan kesan glowing dan menaikkan seri wajah</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Ekstrak akar pokok Skullcap</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Kesan antioksidan yang tinggi</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Melembapkan kulit</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Melindungi kulit dari kerosakan akibat sinaran UV</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Membantu meredakan kulit yang sensitif&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Ekstrak buah Delima</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">âœ”&nbsp;Melawan penuaan dan sebagai anti kedutan</span></span></span></span></p>\r\n', '5ml', '', '90.00', 1200, 'NO', '6.00', '9.00', '2018-03-16 11:36:37', '0000-00-00 00:00:00', 'mos@gmail.com', '', 'product', '2018-03-16 06:54:35', '0000-00-00 00:00:00'),
(3, 6, 'Annona Jus Kesihatan', '13103410_981381828623871_5073165141546486839_n.jpg', '<p><iframe frameborder=\"0\" height=\"315\" scrolling=\"no\" src=\"https://www.youtube.com/embed/xEeFrLSkMm8?rel=0&amp;amp;showinfo=0\" width=\"560\"></iframe></p>\r\n', '<p><u><strong>Khasiat Jus Pati Durian Belanda-Jus Annona</strong></u>&nbsp;<br />\r\n<br />\r\n<strong>*&nbsp;</strong>Melegakan masaalah sakit Urat Sendi &amp; Kejang Otot<br />\r\n<strong>*&nbsp;</strong>Membantu mengawal paras Kencing Manis &amp; Darah Tinggi kronik&nbsp;<br />\r\n<strong>*&nbsp;</strong>Membantu Mengurangkan Kolestrol<br />\r\n<strong>*&nbsp;</strong>Membantu masaalah Sembelit Teruk<br />\r\n<strong>*&nbsp;</strong>Membantu masaalah Alahan Resdung Kronik&nbsp;<br />\r\n<strong>*&nbsp;</strong>Masaalah Kulit seperti Ekzema Dan Psoriasis<br />\r\n<strong>*&nbsp;</strong>Membantu melegakan Gastrik dan Ulser<br />\r\n<strong>*&nbsp;</strong>Masaalah Selalu Letih &amp; Lesu Badan dan sukar tidur<br />\r\n<strong>*&nbsp;</strong>Mengurangkan masaalah Migrain &amp; Anemia<br />\r\n<strong>*&nbsp;</strong>Anti Tumor Dan Anti Kanser dan Penawar bagi pelbagai jenis sel Kanser.&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Jus Durian Belanda', '<p><strong>DURIAN BELANDA&nbsp;</strong>kaya dengan : Acetogenin, agen fitokimia yang amat kuat dimana kajian membuktikan bahan ini menunjukkan kesan antitumor,antikanser dan bersifat selektif terhadap pelbagai jenis sel kanser.&nbsp;</p>\r\n', '250ml', '', '188.00', 1000, 'NO', '9.00', '12.00', '2018-03-16 11:36:37', '0000-00-00 00:00:00', 'mos@gmail.com', '', 'product', '2018-03-21 03:56:37', '0000-00-00 00:00:00'),
(4, NULL, 'Basic Beauty By Annona', '26231759_1646782898741556_6448441777329470764_n.jpg', '', '<p><strong>Mengandungi</strong></p>\r\n\r\n<p>1 X Vitamin C Serum 5ml<br />\r\n1 X Vitamin C Gentle Cleanser 60ml<br />\r\n1 X Vitamin C Moisturising Cream 15g</p>\r\n', '', '', '', '', '120.00', 1000, '', '0.00', '0.00', '03/16/2018 5:30 PM', '03/20/2018 12:00 AM', '', 'mos@gmail.com', 'promotion', '2018-03-21 03:56:42', '2018-03-16 06:58:35'),
(5, NULL, 'Hot Sale!!', '21878869_1877962952219345_2014644059041169408_n.jpg', '', '<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Vitamin C Gentle Cleanser (VCGC)&nbsp;adalah pencuci muka dengan pH 5.5 yang sesuai untuk semua jenis kulit termasuk kulit sensitif. Diformulasikan khas dari ekstrak&nbsp;bunga Evening Primrose Oil, Bunga Sakura, Peach, Tangerine dan Aloe Vera untuk memberikan kebersihan &amp; perlindungan kulit wajah.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">Bau semulajadi buah oren tangerine di dalam VCGC dapat membantu melegakan stress anda. Setiap kali anda membersihkan wajah dengan VCGC, anda akan merasa tenang sahaja, terbuai-buai dengan aroma bau baby, aman &amp; tenang.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><em><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">- TANPA SLS / S<br />\r\n- TANPA ALKOHOL<br />\r\n- TANPA PARABEN<br />\r\n&nbsp;- TANPA PEWARNA TIRUAN<br />\r\n- TANPA PEWANGI&nbsp;</span></span></span></span></em></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\"><strong>CADANGAN PENGGUNAAN</strong></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">Gunakan VCGC 1-2 kali sehari (siang &amp; malam).&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">2-3 titik sudah memadai untuk setiap kali penggunaan.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">*1 botol 60ml mampu bertahan untuk 1-2 bulan bergantung pada kekerapan penggunaan anda.</span></span></span></span></p>\r\n', '', '', '', '', '115.00', 1000, '', '0.00', '0.00', '03/16/2018 9:00 AM', '03/23/2018 12:00 AM', '', 'mos@gmail.com', 'promotion', '2018-03-21 03:56:46', '2018-03-16 06:57:02'),
(6, 3, 'Annona Vitamin C Moisturising Cream ', 'e61deb7e4afd77608b00a3b688f8c7a1_tn.jpg', '<p><iframe frameborder=\"0\" height=\"315\" scrolling=\"no\" src=\"https://www.youtube.com/embed/rp4UwPZfRis?rel=0&amp;amp;showinfo=0\" width=\"560\"></iframe></p>\r\n', '<p><span style=\"color:#7f8c8d\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">Vitamin C Moisturising Cream (VCMC)&nbsp;formulasi terbaru&nbsp;adalah pelembap muka jenis &#39;water based&#39;, sangat ringan dan tinggi Vitamin C. Mempunyai SPF30 untuk melindungi kulit anda daripada bahaya sinaran UV matahari.&nbsp;</span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><strong>KELEBIHAN &amp; FUNGSI VITAMIN C MOISTURISING CREAM</strong></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">1. Pelembap jenis &#39;water based&#39; yang mudah menyerap ke kulit.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">2. Teksturnya ringan &amp; tidak melekit.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">3. Dengan SPF 30 untuk penjagaan ekstra kulit anda.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">4. Menyekatakan tona kulit.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">5. Menaikkan seri kulit.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">6. Melembapkan dan menganjalkan kulit.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">7. Membantu memudarkan parut jerawat dan jeragat</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Sesuai digunakan oleh semua jenis kulit (normal, kering, kombinasi dan berminyak).</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><strong>CADANGAN PENGGUNAAN:</strong></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Hanya perlu sapu sedikit sahaja pelembap selepas menyapu Serum. Dengan formulasi terbaru ini, VCMC boleh digunakan untuk siang dan juga malam.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Ianya tidak melekit dan cepat meresap selepas sedikit urutan wajah</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\"><strong>PERSOALAN MENGENAI ANNONA VITAMIN C MOISTURISING CREAM (VCMC)</strong></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">1. Kulit saya jenis berminyak. Ok tak saya gunakan VCMC ini? Tak makin berminyak ke kalau pakai?</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Ia adalah satu &#39;misconcept / salah faham&#39; bahawa mereka yang mempunyai kulit berminyak harus elak pakai pelembap. Kulit berminyak sangat perlukan pelembap. Pelembap tambah AIR, bukan MINYAK.&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Sebenarnya apabila kulit tidak cukup air, kulit akan menimbal balas keadaan ini dengan mengeluarkan lebih banyak minyak, lalu kulit akan cenderung untuk keluarkan lebih banyak jerawat. Justeru, penggunaan pelembap sangat disarankan bagi mengelakkan masalah jerawat.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">2. Saya pernah guna VCMC yang bekas 10g. Kulit jadi mudah berpeluh. Macam mana dengan yang formula terbaru ini? Saya ingin mencuba.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Keluaran pertama VCMC (10g) adalah jenis krim yang di olah untuk kulit normal dan kering. Tidak sesuai bagi yang berkulit kombinasi &amp; berminyak. Namun, kita telah membuat penambahbaikan pada formulasi VCMC yang terbaru (bekas 15g) supaya dapat disesuaikan untuk semua jenis kulit. Krim jenis &#39;water based&#39; dan senang diserap oleh kulit tanpa membuatkan kulit terasa melekit atau berminyak.<br />\r\n<br />\r\n3. Bagaimana VCMC berfungsi?</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Penggelupasan akan berlaku pada awal penggunaan VCS dan ianya&nbsp;normal kerana adalah sebahagian dari proses kitaran kulit kita.&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Disini VCMC memainkan peranan utama sebagai pelindung kepada sel kulit kita.&nbsp;VCMC mempunyai Spf30 melindungi kulit dari Sinaran UV yang akan menyebabkan masalah pigmentasi/ Jeragat. Selain melembapkan kulit, VCMC juga memastikan kulit kita sentiasa mendapat perlindungan ekstra dari bahaya sinaran UV matahari.</span></span></span></span></p>\r\n', '', '<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><strong>KANDUNGAN BAHAN DI DALAM VITAMIN C MOISTURISING CREAM&nbsp;</strong></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Dirumuskan dengan potensi tinggi glucosidase ascorbyl iaitu Vitamin C yang digabungkan Minyak Argan, ekstrak buah Delima, Niacinamide, Asid Hyaluronic dan beberapa derivatif botani semulajadi yang lain.</span></span></span></span></p>\r\n', '15g', '', '39.00', 1000, 'NO', '6.00', '9.00', '', '', 'mos@gmail.com', '', 'product', '2018-03-21 03:56:49', '0000-00-00 00:00:00');
INSERT INTO `product` (`product_id`, `cat_id`, `product_name`, `product_image`, `product_video`, `product_description`, `product_highlight`, `product_ingredient`, `product_weight`, `product_color`, `product_price`, `product_instock`, `shipping_status`, `semenanjung`, `sabah_sarawak`, `promo_start`, `promo_end`, `createdby`, `updatedby`, `level`, `created_at`, `updated_at`) VALUES
(7, 3, 'Annona Vitamin C Moisturising Cream', 'e61deb7e4afd77608b00a3b688f8c7a1_tn.jpg', '<p><iframe frameborder=\"0\" height=\"315\" scrolling=\"no\" src=\"https://www.youtube.com/embed/rp4UwPZfRis?rel=0&amp;showinfo=0\" width=\"560\"></iframe></p>\r\n', '<p><span style=\"color:#7f8c8d\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">Vitamin C Moisturising Cream (VCMC)&nbsp;formulasi terbaru&nbsp;adalah pelembap muka jenis &#39;water based&#39;, sangat ringan dan tinggi Vitamin C. Mempunyai SPF30 untuk melindungi kulit anda daripada bahaya sinaran UV matahari.&nbsp;</span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><strong>KELEBIHAN &amp; FUNGSI VITAMIN C MOISTURISING CREAM</strong></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">1. Pelembap jenis &#39;water based&#39; yang mudah menyerap ke kulit.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">2. Teksturnya ringan &amp; tidak melekit.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">3. Dengan SPF 30 untuk penjagaan ekstra kulit anda.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">4. Menyekatakan tona kulit.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">5. Menaikkan seri kulit.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">6. Melembapkan dan menganjalkan kulit.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">7. Membantu memudarkan parut jerawat dan jeragat</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Sesuai digunakan oleh semua jenis kulit (normal, kering, kombinasi dan berminyak).</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><strong>CADANGAN PENGGUNAAN:</strong></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Hanya perlu sapu sedikit sahaja pelembap selepas menyapu Serum. Dengan formulasi terbaru ini, VCMC boleh digunakan untuk siang dan juga malam.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Ianya tidak melekit dan cepat meresap selepas sedikit urutan wajah</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\"><strong>PERSOALAN MENGENAI ANNONA VITAMIN C MOISTURISING CREAM (VCMC)</strong></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><span style=\"background-color:#ffffff\">1. Kulit saya jenis berminyak. Ok tak saya gunakan VCMC ini? Tak makin berminyak ke kalau pakai?</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Ia adalah satu &#39;misconcept / salah faham&#39; bahawa mereka yang mempunyai kulit berminyak harus elak pakai pelembap. Kulit berminyak sangat perlukan pelembap. Pelembap tambah AIR, bukan MINYAK.&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Sebenarnya apabila kulit tidak cukup air, kulit akan menimbal balas keadaan ini dengan mengeluarkan lebih banyak minyak, lalu kulit akan cenderung untuk keluarkan lebih banyak jerawat. Justeru, penggunaan pelembap sangat disarankan bagi mengelakkan masalah jerawat.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">2. Saya pernah guna VCMC yang bekas 10g. Kulit jadi mudah berpeluh. Macam mana dengan yang formula terbaru ini? Saya ingin mencuba.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Keluaran pertama VCMC (10g) adalah jenis krim yang di olah untuk kulit normal dan kering. Tidak sesuai bagi yang berkulit kombinasi &amp; berminyak. Namun, kita telah membuat penambahbaikan pada formulasi VCMC yang terbaru (bekas 15g) supaya dapat disesuaikan untuk semua jenis kulit. Krim jenis &#39;water based&#39; dan senang diserap oleh kulit tanpa membuatkan kulit terasa melekit atau berminyak.<br />\r\n<br />\r\n3. Bagaimana VCMC berfungsi?</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Penggelupasan akan berlaku pada awal penggunaan VCS dan ianya&nbsp;normal kerana adalah sebahagian dari proses kitaran kulit kita.&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Disini VCMC memainkan peranan utama sebagai pelindung kepada sel kulit kita.&nbsp;VCMC mempunyai Spf30 melindungi kulit dari Sinaran UV yang akan menyebabkan masalah pigmentasi/ Jeragat. Selain melembapkan kulit, VCMC juga memastikan kulit kita sentiasa mendapat perlindungan ekstra dari bahaya sinaran UV matahari.</span></span></span></span></p>\r\n', '', '<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\"><strong>KANDUNGAN BAHAN DI DALAM VITAMIN C MOISTURISING CREAM&nbsp;</strong></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:start\"><span style=\"font-size:12px\"><span style=\"background-color:#ffffff\"><span style=\"color:#777777\"><span style=\"font-family:Arimo\">Dirumuskan dengan potensi tinggi glucosidase ascorbyl iaitu Vitamin C yang digabungkan Minyak Argan, ekstrak buah Delima, Niacinamide, Asid Hyaluronic dan beberapa derivatif botani semulajadi yang lain.</span></span></span></span></p>\r\n', '30g', '', '75.00', 1200, 'YES', '6.00', '9.00', '', '', 'mos@gmail.com', 'mos@gmail.com', 'product', '2018-03-21 03:56:59', '2018-03-16 07:34:45'),
(8, NULL, 'Jus Kesihatan Annona (Sachet/Botol)', 'a.jpg', '', '<p><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\"><strong>Apa itu Jus Durian Belanda Annona?</strong></span></p>\r\n\r\n<p><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\">Jus Durian Belanda keluaran Annona ini merupakan minuman kesihatan yang diformulasikan dari ekstrak buah Durian Belanda asli yang berkualiti premium. Jus ini turut mengandungi bahan-bahan tambahan seperti buah delima , kurma, kolagen, glutathione dan madu.&nbsp;</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Sachet (15 sachet x 20g)</strong></p>\r\n\r\n<p><em>Cara Pengambilan:</em></p>\r\n\r\n<p>Koyakkan satu sachet dan minum 1 kali sehari sebaik-baiknya pada masa perut kosong atau setengah jam selepas makan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Botol 500ml</strong></p>\r\n\r\n<p><em>Cara Pengambilan:</em></p>\r\n\r\n<p>Minum satu sudu 2 kali sehari sebaik-baiknya pada masa perut kosong atau setengah jam selepas makan.</p>\r\n', '', '', '250ml', '', '150.00', 900, '', '0.00', '0.00', '03/16/2018 3:42 PM', '03/17/2018 3:41 PM', 'mos@gmail.com', 'mos@gmail.com', 'new', '2018-03-26 01:52:57', '2018-03-16 07:46:42');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `promo_id` int(10) UNSIGNED NOT NULL,
  `promo_name` varchar(191) NOT NULL,
  `promo_price` decimal(15,2) NOT NULL,
  `promo_photo` varchar(191) NOT NULL,
  `promo_start` varchar(191) NOT NULL,
  `promo_end` varchar(191) NOT NULL,
  `promo_description` varchar(191) NOT NULL,
  `promo_instock` varchar(191) NOT NULL,
  `cat_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`promo_id`, `promo_name`, `promo_price`, `promo_photo`, `promo_start`, `promo_end`, `promo_description`, `promo_instock`, `cat_id`, `created_at`, `updated_at`) VALUES
(3, 'Serum', '45.00', '14568133_1216080675145116_7575843417704357959_n.jpg', '02/28/2018 11:42 AM', '03/01/2018 11:43 AM', 'wwwwwwwwwwwwww      ', '100', NULL, '2018-02-28 03:42:36', '2018-03-12 02:13:11'),
(4, 'Juice Kesihatan', '90.00', '13103410_981381828623871_5073165141546486839_n.jpg', '02/28/2018 11:49 AM', '03/01/2018 11:50 AM', 'sssss', '100', NULL, '2018-02-28 03:49:32', NULL),
(5, 'Serum Series', '35.00', 'vitamin-c-serum-annona-e1497162884178.jpg', '03/01/2018 10:07 AM', '03/02/2018 10:08 AM', 'qqqqqqqqq            ', '100', NULL, '2018-03-01 02:07:13', '2018-03-01 02:08:37'),
(6, 'Basic Beauty By Annona', '100.00', '26231759_1646782898741556_6448441777329470764_n.jpg', '03/13/2018 5:37 PM', '03/14/2018 5:38 PM', 'ssdfdfdf', '2000', NULL, '2018-03-13 09:37:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(10) NOT NULL,
  `role_position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_position`) VALUES
(4, 'Agent'),
(10, 'Dropship'),
(5, 'Employee'),
(7, 'Finance'),
(8, 'Inventory'),
(1, 'Master Admin'),
(6, 'Sales Person'),
(3, 'Stokist'),
(2, 'Super Admin'),
(9, 'System Admin');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shipping_id` int(10) NOT NULL,
  `shipping_type` varchar(100) NOT NULL,
  `shipping_description` varchar(100) NOT NULL,
  `employee_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shipping_id`, `shipping_type`, `shipping_description`, `employee_id`, `created_at`, `updated_at`) VALUES
(1, 'Pos Laju ', 'for not more than 500g orders.', 1, '2018-03-09 06:55:18', NULL),
(2, 'CityLink', 'for more than 500g orders', 1, '2018-03-09 06:55:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(10) NOT NULL,
  `slider_image` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_image`, `created_at`) VALUES
(76, '20247820_1493556080730906_4861807624393586336_o.jpg', '2018-03-23 08:57:24'),
(100, '21688267_10211987326370796_2035707364820352941_o.jpg', '2018-03-23 09:31:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(191) DEFAULT NULL,
  `user_email` varchar(191) NOT NULL,
  `user_password` varchar(191) NOT NULL,
  `user_phone` varchar(191) DEFAULT NULL,
  `user_address` varchar(191) DEFAULT NULL,
  `user_city` varchar(191) DEFAULT NULL,
  `user_poscode` varchar(191) DEFAULT NULL,
  `user_state` varchar(191) DEFAULT NULL,
  `user_status` varchar(191) DEFAULT NULL,
  `role_id` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_phone`, `user_address`, `user_city`, `user_poscode`, `user_state`, `user_status`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Siti Fathimah Ibrahim', 'siti@gmail.com', '123', '017-5551435', '14, Jalan Sultanah ', 'Alor Setar', '05400', 'Kedah', 'Active', NULL, '2018-03-15 21:24:00', NULL),
(2, 'Ahmad Sabri Zakaria', 'ahmad@gmail.com', '123', '017-5114465', '32A, Lorong Jalan Pertiwi', 'Kulim', '09800', 'Kedah', 'Active', NULL, '2018-03-20 03:15:21', NULL),
(3, 'Ali Bin Abu', 'ali@gmail.com', '123', '011-1234567', '99, Taman Pelangi Seri Bagan', 'Kuala Lumpur', '05000', 'WP Kuala Lumpur', 'Active', NULL, '2018-03-22 06:19:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `email` (`employee_email`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `promo_id` (`promo_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ord_id`),
  ADD KEY `shipping_id` (`shipping_id`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`hist_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `ord_id` (`ord_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promo_id`),
  ADD UNIQUE KEY `promo_name` (`promo_name`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_position` (`role_position`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipping_id`),
  ADD KEY `user_id` (`employee_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`user_email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ord_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_history`
--
ALTER TABLE `order_history`
  MODIFY `hist_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `promo_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`);

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`promo_id`) REFERENCES `promotion` (`promo_id`),
  ADD CONSTRAINT `orderdetails_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `orderdetails_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`shipping_id`) REFERENCES `shipping` (`shipping_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `order_history`
--
ALTER TABLE `order_history`
  ADD CONSTRAINT `order_history_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `order_history_ibfk_2` FOREIGN KEY (`ord_id`) REFERENCES `orders` (`ord_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`);

--
-- Constraints for table `shipping`
--
ALTER TABLE `shipping`
  ADD CONSTRAINT `shipping_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
