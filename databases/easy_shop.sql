-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2015 at 02:32 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `easy_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery_details`
--

CREATE TABLE IF NOT EXISTS `delivery_details` (
  `Name` varchar(50) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` int(10) NOT NULL,
  `id` varchar(50) NOT NULL,
  `p_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `product` varchar(50) NOT NULL,
  `id` int(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`product`, `id`, `brand`, `type`, `image_name`, `price`) VALUES
('Womens', 1, 'Gucchi', 'Fbag', 'bag1.jpg', 1500),
('Womens', 2, 'Gucchi', 'Fbag', 'bag2.jpg', 2000),
('Womens', 3, 'Kalvin Clen', 'Fbag', 'bag3.jpg', 3500),
('Womens', 4, 'Kalvin Clen', 'Fbag', 'bag4.jpg', 4200),
('Womens', 5, 'Levis', 'Fbag', 'bag5.jpg', 3200),
('Womens', 6, 'Levis', 'Fbag', 'bag6.jpg', 2300),
('Womens', 7, 'Arrow', 'Fbag', 'bag7.jpg', 2200),
('Womens', 8, 'Arrow', 'Fbag', 'bag8.jpg', 2000),
('Womens', 9, 'Woodland', 'Fbag', 'bag9.jpg', 2000),
('Womens', 10, 'Woodland', 'Fbag', 'bag10.jpg', 1800),
('Mens', 11, 'Peter England', 'Shirt', 'shirt1.jpg', 1200),
('Mens', 12, 'Peter England', 'Shirt', 'shirt2.jpg', 1000),
('Mens', 13, 'Levis', 'Shirt', 'shirt3.jpg', 800),
('Mens', 14, 'Levis', 'Shirt', 'shirt4.jpg', 1100),
('Mens', 15, 'Ucb', 'Shirt', 'shirt5.jpg', 1300),
('Mens', 16, 'Ucb', 'Shirt', 'shirt6.jpg', 3200),
('Mens', 17, 'Mannat', 'Shirt', 'shirt7.jpg', 899),
('Mens', 18, 'Mannat', 'Shirt', 'shirt8.jpg', 990),
('Mens', 19, 'Wrangler', 'Trouser', 'trouser1.jpg', 2200),
('Mens', 20, 'Wrangler', 'Trouser', 'trouser2.jpg', 2100),
('Mens', 21, 'Levis', 'Trouser', 'trouser3.jpg', 9990),
('Mens', 22, 'Levis', 'Trouser', 'trouser4.jpg', 1200),
('Mens', 23, 'Pantaloon', 'Trouser', 'trouser5.jpg', 1200),
('Mens', 24, 'pantaloon', 'Trouser', 'trouser6.jpg', 1100),
('Mens', 25, 'Max', 'Trouser', 'trouser7.jpg', 880),
('Mens', 26, 'Max', 'Trouser', 'trouser8.jpg', 1100),
('Mens', 27, 'Gucchi', 'Trouser', 'trouser9.jpg', 1100),
('Mens', 28, 'Gucchi', 'Trouser', 'trouser10.jpg', 900),
('Mens', 29, 'Nike', 'Shoes', 'sports1.jpg', 4300),
('Womens', 30, 'Cat', 'Shoes', 'catshoes.jpg', 2000),
('Mens', 31, 'Puma', 'Shoes', 'canvas.jpg', 1100),
('Mens', 32, 'Nike', 'Shoes', 'raja.jpg', 2200),
('Mens', 33, 'Bata', 'Shoes', 'formals.jpg', 2200),
('Womens', 34, 'Bata', 'Shoes', 'heels1.jpg', 1100),
('Womens', 35, 'Hero', 'Shoes', 'hero.jpg', 1100),
('Mens', 36, 'Puma', 'Shoes', 'motercycle.jpg', 2200),
('Womens', 37, 'Puma', 'Shoes', 'heels2.jpg', 1200),
('Womens', 38, 'Puma', 'Shoes', 'heels3.jpg', 1100),
('Womens', 39, 'Levis', 'Top', 'top1.jpg', 800),
('Womens', 40, 'Levis', 'Top', 'top2.jpg', 1100),
('Womens', 41, 'Ucb', 'Top', 'top3.jpg', 1800),
('Womens', 42, 'Ucb', 'Top', 'top4.jpg', 900),
('Womens', 43, 'Gucchi', 'Top', 'top5.jpg', 100),
('Womens', 44, 'Gucchi', 'Top', 'top6.jpg', 990),
('Womens', 45, 'Levis', 'Leggings', 'leggings1.jpg', 1000),
('Womens', 46, 'Levis', 'Leggings', 'leggings2.jpg', 1800),
('Womens', 47, 'Peter England', 'Leggings', 'leggings3.jpg', 990),
('Womens', 48, 'Peter England', 'Leggings', 'leggings4.jpg', 1000),
('Womens', 49, 'Wrangler', 'Leggings', 'leggings5.jpg', 1000),
('Womens', 50, 'Wrangler', 'Leggings', 'leggings6.jpg', 2000),
('Womens', 51, 'Wrangler', 'Leggings', 'leggings7.jpg', 4000),
('Electronics', 52, 'Samsung', 'Cell Phone', 'cellphone1.jpg', 40000),
('Electronics', 53, 'Samsung', 'Cell Phone', 'cellphone2.jpg', 42000),
('Electronics', 54, 'Samsung', 'Cell Phone', 'cellphone3.jpg', 5000),
('Electronics', 55, 'Samsung', 'Cell Phone', 'cellphone4.jpg', 4000),
('Electronics', 56, 'Samsung', 'Cell Phone', 'cellphone5.jpg', 21000),
('Electronics', 57, 'Htc', 'Cell Phone', 'cellphone6.jpg', 44000),
('Electronics', 58, 'Htc', 'Cell Phone', 'cellphone7.jpg', 47000),
('Electronics', 59, 'Htc', 'Cell Phone', 'cellphone8.jpg', 31000),
('Electronics', 60, 'Htc', 'Cell Phone', 'cellphone9.jpg', 8000),
('Electronics', 61, 'Htc', 'Cell Phone', 'cellphone10.jpg', 9000),
('Electronics', 62, 'Sony', 'Cell Phone', 'cellphone11.jpg', 6000),
('Electronics', 63, 'Sony', 'Cell Phone', 'cellphone12.jpg', 3000),
('Electronics', 64, 'Sony', 'Cell Phone', 'cellphone13.jpg', 10000),
('Electronics', 65, 'Sony', 'Cell Phone', 'cellphone14.jpg', 4000),
('Electronics', 66, 'Sony', 'Cell Phone', 'cellphone15.jpg', 11000),
('Electronics', 67, 'Apple', 'Cell Phone', 'cellphone16.jpg', 48000),
('Electronics', 68, 'Apple', 'Cell Phone', 'cellphone17.jpg', 53000),
('Electronics', 69, 'Apple', 'Cell Phone', 'cellphone18.jpg', 72000),
('Electronics', 70, 'Apple', 'Cell Phone', 'cellphone19.jpg', 78000),
('Electronics', 71, 'Apple', 'Cell Phone', 'cellphone20.jpg', 82000),
('HouseHolds', 72, 'Home', 'Lamp', 'lamp1.jpg', 8000),
('HouseHolds', 73, 'Home', 'Lamp', 'lamp2.jpg', 1000),
('HouseHolds', 74, 'Home', 'Lamp', 'lamp3.jpg', 800),
('HouseHolds', 75, 'Home', 'Couch', 'couch1.jpg', 18000),
('HouseHolds', 76, 'Home', 'Couch', 'couch2.jpg', 18000),
('HouseHolds', 77, 'Home', 'Couch', 'couch3.jpg', 8000),
('HouseHolds', 78, 'Home', 'Couch', 'couch4.jpg', 1000),
('HouseHolds', 79, 'Home', 'Couch', 'couch5.jpg', 800),
('HouseHolds', 80, 'Home', 'Bed', 'bed1.jpg', 82000),
('HouseHolds', 81, 'Home', 'Bed', 'bed2.jpg', 11000),
('HouseHolds', 82, 'Home', 'Bed', 'bed3.jpg', 8900),
('HouseHolds', 83, 'Home', 'Dining Table', 'dt1.jpg', 8000),
('HouseHolds', 84, 'Home', 'Dining Table', 'dt2.jpg', 1000),
('HouseHolds', 85, 'Home', 'Dining Table', 'dt3.jpg', 800),
('Kids', 86, 'Levis', 'Clothes', 'clothes1.jpg', 8000),
('Kids', 87, 'Levis', 'Clothes', 'clothes2.jpg', 1990),
('Kids', 88, 'Levis', 'Clothes', 'clothes3.jpg', 890),
('Kids', 89, 'Levis', 'Clothes', 'clothes4.jpg', 8100),
('Kids', 90, 'Levis', 'Clothes', 'clothes5.jpg', 1200),
('Kids', 91, 'Levis', 'Clothes', 'clothes6.jpg', 8900),
('Kids', 92, 'Levis', 'Belt', 'belt1.jpg', 8100),
('Kids', 93, 'Levis', 'Belt', 'belt2.jpg', 1200),
('Kids', 94, 'Levis', 'Belt', 'belt3.jpg', 8900),
('Kids', 95, 'Levis', 'Belt', 'belt4.jpg', 8909),
('Kids', 96, 'Puma', 'Shoes', 'kshoes1.jpg', 1000),
('Kids', 97, 'Puma', 'Shoes', 'kshoes2.jpg', 890),
('Kids', 98, 'Puma', 'Shoes', 'kshoes3.jpg', 2000),
('Kids', 99, 'Puma', 'Shoes', 'kshoes4.jpg', 1100),
('Kids', 100, 'Puma', 'Tshirt', 'tshirt1.jpg', 890),
('Kids', 101, 'Puma', 'Tshirt', 'tshirt2.jpg', 8110),
('Kids', 102, 'Puma', 'Tshirt', 'tshirt3.jpg', 10000),
('Kids', 103, 'Puma', 'Tshirt', 'tshirt4.jpg', 8200),
('Kids', 104, 'Puma', 'Tshirt', 'tshirt5.jpg', 8100),
('Kids', 105, 'Puma', 'Tshirt', 'tshirt6.jpg', 2000),
('Kids', 106, 'Dior', 'Watch', 'watch1.jpg', 1200),
('Kids', 107, 'Dior', 'Watch', 'watch2.jpg', 11100),
('Kids', 108, 'Dior', 'Watch', 'watch3.jpg', 8200),
('Kids', 109, 'Dior', 'Watch', 'watch4.jpg', 82000),
('Kids', 110, 'Dior', 'Watch', 'watch5.jpg', 11000),
('Kids', 111, 'Dior', 'Watch', 'watch6.jpg', 8900),
('Kids', 112, 'Dior', 'Watch', 'watch7.jpg', 8000),
('Kids', 113, 'Dior', 'Watch', 'watch8.jpg', 10100),
('Kids', 114, 'Dior', 'Watch', 'watch9.jpg', 1800),
('Kids', 115, 'Dior', 'Watch', 'watch10.jpg', 28000),
('Kids', 116, 'dior', 'Watch', 'watch11.jpg', 42000),
('Kids', 117, 'Prada', 'Lower', 'lower1.jpg', 5300),
('Kids', 118, 'Prada', 'Lower', 'lower2.jpg', 2000),
('Kids', 119, 'Prada', 'Lower', 'lower3.jpg', 1000),
('Kids', 120, 'Prada', 'Lower', 'lower4.jpg', 900),
('Kids', 121, 'Prada', 'Lower', 'lower5.jpg', 900),
('Kids', 122, 'Prada', 'Lower', 'lower6.jpg', 999),
('Kids', 123, 'Prada', 'Lower', 'lower7.jpg', 800),
('Kids', 124, 'Prada', 'Lower', 'lower8.jpg', 990),
('Kids', 125, 'Prada', 'Lower', 'lower9.jpg', 1000),
('Kids', 126, 'Prada', 'Lower', 'lower10.jpg', 3000),
('Kids', 127, 'Chanel', 'Bags', 'kbag1.jpg', 1000),
('Kids', 128, 'Chanel', 'Bags', 'kbag2.jpg', 1800),
('Kids', 129, 'Chanel', 'Bags', 'kbag3.jpg', 2000),
('Kids', 130, 'Chanel', 'Bags', 'kbag4.jpg', 100),
('Kids', 131, 'Chanel', 'Bags', 'kbag5.jpg', 3900),
('Kids', 132, 'Chanel', 'Bags', 'kbag6.jpg', 8000),
('Kids', 133, 'Chanel', 'Bags', 'kbag7.jpg', 1000),
('Kids', 134, 'Chanel', 'Bags', 'kbag8.jpg', 8100),
('Kids', 135, 'Chanel', 'Bags', 'kbag9.jpg', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `price`) VALUES
(3, 'PD1003', 'External Hard Disk', 'Ada banyak versi dari mukasurat-mukasurat Lorem Ipsum yang sedia ada, tetapi kebanyakkannya telah diubahsuai, lawak jenaka diselitkan, atau ayat ayat yang', 'external-hard-disk.jpg', '5000.00'),
(4, 'PD1004', 'Wrist Watch GE2', 'Memalukan akan terselit didalam di tengah tengah kandungan text. Semua injin Lorem Ipsum didalam Internet hanya mengulangi text, sekaligus menjadikan injin kami sebagai yang terunggul dan tepat sekali di Internet.', 'wrist-watch.jpg', '2599.30'),
(51, 'PD1001', 'GOOGLE NEXUS 5', 'Di sertakan secara rambang yang lansung tidak munasabah. Jika anda ingin menggunakan Lorem Ipsum, anda perlu memastikan bahwa tiada apa yang', 'android-phone.jpg', '26695.00'),
(52, 'PD1002', 'LG 32 INCH LED TV', 'Ia menggunakan kamus yang mengandungi lebih 200 ayat Latin, bersama model dan struktur ayat Latin, untuk menghasilkan Lorem Ipsum yang munasabah.', 'lcd-tv.jpg', '50000.00');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE IF NOT EXISTS `product_details` (
  `image` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `brand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `UserId` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`FirstName`, `LastName`, `Email`, `UserId`, `Password`, `Image`) VALUES
('RAM', 'GOPAL', 'ram.gopal@gmail.com', 'ramu', 'kaku', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `UserId` varchar(50) NOT NULL,
  `ProductId` varchar(50) NOT NULL,
  `Count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`UserId`, `ProductId`, `Count`) VALUES
('i_krit', '100', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `product_code` (`product_code`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD UNIQUE KEY `UserId` (`UserId`), ADD UNIQUE KEY `Image` (`Image`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
