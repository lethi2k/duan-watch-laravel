-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 07:34 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watch_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `images` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`id`, `name`, `images`, `title`, `content`, `price`) VALUES
(1, 'hihi', 'giao-dien/images/5e8480685ce92-heuer.png', 'Hệ Thống Cung Cấp Website về công nghệ thông tin của sinh viên poly', 'ádasdas', 1),
(2, 'ádasdas', 'giao-dien/images/5e8482daa98d8-new.png', 'ac', 'ádasdas', 1),
(3, 'Thi Lê', 'giao-dien/images/5ec3a6c677269-298bba49-9437-43f0-9fe6-8605f3fe68fb.jpg', 'Hệ Thống Cung Cấp Website về công nghệ thông tin của sinh viên poly', 'aksldhaskd', 2001);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `type_payment` int(11) NOT NULL,
  `note` text NOT NULL,
  `idct` int(11) NOT NULL,
  `idoder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `name_blog` varchar(200) NOT NULL,
  `meta` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `images` varchar(200) NOT NULL,
  `user` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `cate_id`, `name_blog`, `meta`, `content`, `images`, `user`) VALUES
(1, 1, 'ahskdasdjas', 'ạdhajsd', 'ạdkgaskdash', 'kahsdlasd', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category_blog`
--

CREATE TABLE `category_blog` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_blog`
--

INSERT INTO `category_blog` (`id`, `cate_name`, `logo`) VALUES
(1, 'Danh Mục Khuyến Mãi', 'giao-dien/images/5e8353f0b9add-km.jpg'),
(2, 'Danh Mục Tin Mới', 'giao-dien/images/5e8494fde875e-new.png'),
(3, 'Danh Mục Kĩ Thuật', 'giao-dien/images/5e835ba1ef787-hd.jpg'),
(4, 'Danh Mục Hướng Dẫn', 'giao-dien/images/5e835c2d6dc18-chon.jpg'),
(5, 'Danh Mục Tuyển Dụng', 'giao-dien/images/5e835c97e2c47-unnamed.png');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id`, `name`) VALUES
(1, 'Đồng Hồ Năng Lượng'),
(2, 'Đồng Hồ Cơ');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user` varchar(200) NOT NULL,
  `product_id` int(11) NOT NULL,
  `content_comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user`, `product_id`, `content_comment`) VALUES
(4, 'admin', 1, 'áidhaskld');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` int(50) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `stk` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `address`, `phone_number`, `logo`, `email`, `stk`) VALUES
(1, 'dbjsas', ',asbdlasd', 123127381, 'lkasdbnaskld', '1áhdasdhas', 123123123);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `img_product`
--

CREATE TABLE `img_product` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `idsp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_trade` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `images` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `detail` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `metal` text NOT NULL,
  `star` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_trade`, `cate_id`, `product_name`, `images`, `price`, `sale_price`, `detail`, `quantity`, `metal`, `star`, `color`, `created_at`, `update_at`) VALUES
(1, 19, 2, 'qưe', 'qưe', 1753, 123123, 'qưe', 123, 'ád', 2, 12, '2020-05-19 09:54:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `images` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `images`, `title`, `content`) VALUES
(1, 'Đồng Hồ Năng Lượng', 'giao-dien/images/5e838af821fb3-heuer.png', 'Hệ Thống Cung Cấp Website về công nghệ thông tin của sinh viên poly', 'abc'),
(3, 'thile', 'giao-dien/images/5e846cbb6e445-longines.png', 'Lập Trình PhP', 'adads');

-- --------------------------------------------------------

--
-- Table structure for table `trademark`
--

CREATE TABLE `trademark` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `country` varchar(255) NOT NULL,
  `logo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trademark`
--

INSERT INTO `trademark` (`id`, `name`, `country`, `logo`) VALUES
(1, 'Đồng Hồ Patek Philippe', 'Thụy Sỹ', 'giao-dien/images/5e81d66a5cb15-patek.svg'),
(2, 'Đồng hồ Tag Heuer', 'Thụy Sỹ', 'giao-dien/images/5e81d68f1c21e-heuer.png'),
(6, 'Đồng hồ Rolex Swiss Made', 'Anh', 'giao-dien/images/5e81d6a82f2b5-rolex.png'),
(7, 'Đồng hồ Omega', 'Thụy Sỹ', 'giao-dien/images/5e81d6c7a321d-omega.png'),
(8, 'Đồng hồ Tissot', 'Thụy Sỹ', 'giao-dien/images/5e81d6f410c9c-tissot.png'),
(9, 'Đồng hồ Longines', 'Thụy Sỹ', 'giao-dien/images/5e81d6dadb5e2-longines.png'),
(10, 'Đồng hồ Timex', 'Thụy Sỹ', 'giao-dien/images/5e81d708ccf97-timex.png'),
(15, 'Đồng hồ Calvin Klein', 'Hoa Kì', 'giao-dien/images/5e81d725729e2-calvinkleln.png'),
(16, 'Đồng hồ Movado', 'Thụy Sỹ', 'giao-dien/images/5e81d735f22b7-movado.png'),
(17, 'Đồng hồ SEIKO', 'Nhật Bản', 'giao-dien/images/5e81d748a8157-seiko.png'),
(18, 'Đồng hồ Orient', 'Đức', 'giao-dien/images/5e81d78b14436-orient.png'),
(19, 'Đồng hồ Casio', 'Việt Nam', 'giao-dien/images/5e81d79b885d8-casio.png'),
(20, 'Đồng hồ Fossil', 'Phần Lan', 'giao-dien/images/5e81d7ad0403b-fossil.png'),
(21, 'Đồng hồ Citizen', 'Thụy Điển', 'giao-dien/images/5e81fa35de660-citizen.svg'),
(22, 'Đồng hồ Ogival', 'Nhật Bản', 'giao-dien/images/5e81f8e084365-ogival.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `địa chỉ` varchar(255) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `level` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `name`, `logo`, `email`, `địa chỉ`, `pass`, `level`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
('admin', '', 'ád', '12sad', '1231wadeas', 'adac', 0, 0, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idoder` (`idoder`),
  ADD KEY `idct` (`idct`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cate_id` (`cate_id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `category_blog`
--
ALTER TABLE `category_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img_product`
--
ALTER TABLE `img_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsp` (`idsp`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_trade` (`category_trade`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trademark`
--
ALTER TABLE `trademark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category_blog`
--
ALTER TABLE `category_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `img_product`
--
ALTER TABLE `img_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trademark`
--
ALTER TABLE `trademark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`idoder`) REFERENCES `order` (`id`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`idct`) REFERENCES `company` (`id`);

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `category_blog` (`id`),
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`user`) REFERENCES `users` (`username`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user`) REFERENCES `users` (`username`);

--
-- Constraints for table `img_product`
--
ALTER TABLE `img_product`
  ADD CONSTRAINT `img_product_ibfk_1` FOREIGN KEY (`idsp`) REFERENCES `product` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_trade`) REFERENCES `trademark` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`cate_id`) REFERENCES `category_product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
