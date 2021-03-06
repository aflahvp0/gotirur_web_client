-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 26, 2018 at 11:53 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gotirur`
--

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

CREATE TABLE `attribute` (
  `id` int(11) NOT NULL,
  `attribute-name` varchar(50) NOT NULL,
  `attribute-value` varchar(50) NOT NULL,
  `product-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `main_image` int(11) NOT NULL,
  `icon_image` int(11) NOT NULL,
  `post_date` datetime NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `keywords` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `child_categories`
--

CREATE TABLE `child_categories` (
  `category_name` varchar(50) NOT NULL,
  `parent_category_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child_categories`
--

INSERT INTO `child_categories` (`category_name`, `parent_category_id`, `id`) VALUES
('Sony', 1, 1),
('Nokia', 1, 2),
('Mi', 1, 3),
('Samsung', 1, 4),
('Motorola', 1, 5),
('DSLRs', 2, 6),
('Digital Camera', 2, 7),
('Camera Accessories', 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `author` varchar(50) NOT NULL,
  `content` varchar(50) NOT NULL,
  `post_date` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `featured_products`
--

CREATE TABLE `featured_products` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured_products`
--

INSERT INTO `featured_products` (`id`, `product_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `grantchild_category`
--

CREATE TABLE `grantchild_category` (
  `category_name` varchar(50) NOT NULL,
  `child_category_id` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grantchild_category`
--

INSERT INTO `grantchild_category` (`category_name`, `child_category_id`, `id`) VALUES
('z3', 0, NULL),
('z3', 1, NULL),
('z5', 1, NULL),
('yz1', 1, NULL),
('Canon', 6, NULL),
('Nikon', 6, NULL),
('Canon', 7, NULL),
('Sony', 7, NULL),
('Fujifilm', 7, NULL),
('Coolpix', 7, NULL),
('Camera Lenses', 8, NULL),
('Selfiestick', 8, NULL),
('Tripode', 8, NULL),
('HandiCam', 8, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `on_sale_products`
--

CREATE TABLE `on_sale_products` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `on_sale_products`
--

INSERT INTO `on_sale_products` (`id`, `product_id`) VALUES
(1, 4),
(2, 5),
(3, 6),
(4, 7),
(5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `parent_categories`
--

CREATE TABLE `parent_categories` (
  `category_name` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent_categories`
--

INSERT INTO `parent_categories` (`category_name`, `id`) VALUES
('Mobiles', 1),
('Camera', 2),
('TV', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_name` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `real_amount` int(11) NOT NULL,
  `discounted_amount` int(11) NOT NULL,
  `image_1` varchar(11) NOT NULL,
  `image_2` varchar(11) NOT NULL,
  `image_3` varchar(11) NOT NULL,
  `image_4` varchar(11) NOT NULL,
  `image_5` varchar(11) NOT NULL,
  `image_6` varchar(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `long_description` varchar(50) NOT NULL,
  `short_description` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_name`, `company_name`, `real_amount`, `discounted_amount`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `id`, `tag`, `long_description`, `short_description`) VALUES
('Mi Note4', 'Mi', 14999, 13999, 'img 1', 'img 2', 'img 3', 'img 4', 'img 5', 'img 6', 1, '----Tag Demo---Mi', '---Long Description Demo---Mi', '----Short Description Demo----Mi'),
('J7', 'Samsung', 9999, 8999, 'img 1', 'img 2', 'img 3', 'img 4', 'img 5', 'img 6', 2, '----Tag Demo---J7', '---Long Description Demo---J7', '----Short Description Demo----J7'),
('note8', 'Samsung', 29999, 28999, 'img 1', 'img 2', 'img 3', 'img 4', 'img 5', 'img 6', 3, '----Tag Demo---note8', '---Long Description Demo---note8', '----Short Description Demo----note8'),
('Xperia Z3', 'Sony', 26999, 25999, 'img 1', 'img 2', 'img 3', 'img 4', 'img 5', 'img 6', 4, '----Tag Demo---z3', '---Long Description Demo---z3', '----Short Description Demo----Z3'),
('Iphone x', 'Iphone', 100000, 999999, 'img 1', 'img 2', 'img 3', 'img 4', 'img 5', 'img 6', 5, '----Tag Demo---x', '---Long Description Demo---x', '----Short Description Demo----x'),
('D3200', 'Nikon', 25000, 22000, 'img 1', 'img 2', 'img 3', 'img 4', 'img 5', 'img 6', 6, '----Tag Demo---d3200', '---Long Description Demo--d3200', '----Short Description Demo----d3200'),
('EOS 800d', 'Canon', 12999, 11999, 'img 1', 'img 2', 'img 3', 'img 4', 'img 5', 'img 6', 7, '----Tag Demo---800d', '---Long Description Demo---800d', '----Short Description Demo----800d');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `author` varchar(50) NOT NULL,
  `rating` double NOT NULL,
  `post_date` date NOT NULL,
  `content` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tag-name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tag_relation`
--

CREATE TABLE `tag_relation` (
  `id` int(11) NOT NULL,
  `tag-id` int(11) NOT NULL,
  `product-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `top_rated_products`
--

CREATE TABLE `top_rated_products` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top_rated_products`
--

INSERT INTO `top_rated_products` (`id`, `product_id`) VALUES
(1, 5),
(2, 4),
(3, 3),
(4, 2),
(5, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child_categories`
--
ALTER TABLE `child_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_products`
--
ALTER TABLE `featured_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `on_sale_products`
--
ALTER TABLE `on_sale_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent_categories`
--
ALTER TABLE `parent_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_relation`
--
ALTER TABLE `tag_relation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_rated_products`
--
ALTER TABLE `top_rated_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attribute`
--
ALTER TABLE `attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `child_categories`
--
ALTER TABLE `child_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `featured_products`
--
ALTER TABLE `featured_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `on_sale_products`
--
ALTER TABLE `on_sale_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `parent_categories`
--
ALTER TABLE `parent_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tag_relation`
--
ALTER TABLE `tag_relation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `top_rated_products`
--
ALTER TABLE `top_rated_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
