-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2024 at 07:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `address_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(100) DEFAULT NULL,
  `a_email` varchar(100) DEFAULT NULL,
  `a_password` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'Rayyan Hassan', 'rayyan@address.pk', 'rayyan'),
(2, 'Abdur Rafay', 'rafay@address.pk', 'rafay'),
(3, 'Amanullah', 'aman@address.pk', 'aman'),
(4, 'Abdul Ahad', 'ahad@address.pk', 'ahad125'),
(5, 'Ali', 'ali@email.com', 'ali123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'Cosmetics'),
(3, 'Jwellery'),
(8, 'New arrival');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) DEFAULT NULL,
  `c_contact` varchar(100) DEFAULT NULL,
  `c_email` varchar(100) DEFAULT NULL,
  `c_password` varchar(14) DEFAULT NULL,
  `c_address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `c_contact`, `c_email`, `c_password`, `c_address`) VALUES
(3, 'Abdul Ahad', '03217865493', 'ahad@address.pk', '', 'Saima Ariban Villas');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) DEFAULT NULL,
  `pro_name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `pro_name`, `price`, `quantity`) VALUES
(6, 'Body Contouring 1', 2500, 5),
(6, 'Silver platted set', 1500000, 1),
(7, 'Silver platted set', 1500000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `o_id` int(11) NOT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `pcontact` varchar(100) DEFAULT NULL,
  `pemail` varchar(200) DEFAULT NULL,
  `paddress` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`o_id`, `pname`, `pcontact`, `pemail`, `paddress`) VALUES
(1, 'saad', '238927348', 'saad@email.com', 'karachi'),
(2, 'Ali', '93842983490', 'ali@email.com', 'karachi'),
(3, 'Ahmed', '93842983490', 'ahmed@email.com', 'karachi'),
(4, 'Rehan', '234234', 'rehan@email.com', 'karachi'),
(5, 'Asad', '34627346', 'asad@email.com', 'karachi'),
(6, 'Azhar', '0315264', 'azhar@email.com', 'north karachi'),
(7, 'Ahad ', '032145698', 'ahad@gmail.com', 'north karachi');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(100) DEFAULT NULL,
  `p_price` int(11) DEFAULT NULL,
  `p_quantity` int(11) DEFAULT NULL,
  `p_image` varchar(255) DEFAULT NULL,
  `p_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_price`, `p_quantity`, `p_image`, `p_category`) VALUES
(6, 'Body Contouring 1', 2500, 4, '267063167_135624695509784_7342829362000004093_n_81662657-9bf4-4297-ab81-a032e97561dd.webp', 1),
(7, 'Silver platted set', 1500000, 1, 'je 2.jpg', 3),
(8, 'Gold pendant for women', 180000, 2, 'je 3.png', 3),
(9, 'foundation', 3000, 6, '01AIVORY.webp', 8),
(10, 'Body Contouring 2', 2500, 3, '1673655850-makeup-forever-contour-palette-1673655802.png', 1),
(11, 'Body Contouring 3', 3000, 2, '1694702567-1673654938-elf-contour-palette-1673654863.png', 1),
(12, 'Body Contouring 3', 2300, 3, 'f6acd1f4fd7d2764e45699e66eb5fda2.jpg', 1),
(13, 'Body Contouring 5', 3400, 3, 'images (1).jfif', 1),
(14, 'Body Contouring 6', 2340, 5, 'images (2).jfif', 1),
(15, 'Body Contouring 7', 2490, 8, 'images.jfif', 1),
(16, 'Body Contouring 8', 1600, 2, 'pcp-main.webp', 1),
(17, 'Body Contouring 9', 1000, 6, 'PRO-CONTOUR-PALETE.-2.webp', 8),
(18, 'Body Contouring 9', 1500, 3, 'UltraContourPalette_1400x.webp', 1),
(19, 'Concealer 1', 3500, 3, 'con 1.jpg', 1),
(20, 'Concealer 2', 6500, 5, 'con 3.webp', 1),
(21, 'Concealer 3', 3600, 2, 'con 4.webp', 1),
(22, 'Concealer 4', 5600, 6, 'con 5.webp', 1),
(23, 'Concealer 5', 3500, 6, 'con 6.webp', 1),
(24, 'Concealer 6', 4500, 6, 'con 7.jpg', 1),
(25, 'Concealer 7', 3200, 5, 'con 7.jpg', 1),
(26, 'Concealer 7', 1500, 6, 'con 8.webp', 1),
(27, 'Concealer 8', 1560, 5, 'con 9.webp', 1),
(28, 'Concealer ', 2600, 5, 'con 10.jfif', 8),
(29, 'Concealer 9', 6300, 5, 'con2.webp', 1),
(30, 'foundation 1', 2500, 5, '7f2d3f29-2dc0-461d-9298-ad331bc71188.__CR0,0,300,300_PT0_SX300_V1___.jpg', 1),
(31, 'foundation 2', 500, 5, '41gWdqIIY5L._AC_UF1000,1000_QL80_.jpg', 1),
(32, 'foundation 3', 1520, 5, '51kLT28rQjL._AC_UF1000,1000_QL80_.jpg', 1),
(33, 'foundation 4', 1500, 4, 'base_1.webp', 1),
(34, 'foundation 5', 1500, 6, 'images (1).jfif', 1),
(35, 'foundation 6', 5000, 12, 'images.jfif', 1),
(36, 'foundation 7', 5600, 36, 'note-mineral-foundation-401-35ml-35ml.webp', 1),
(37, 'foundation 7', 3500, 6, 'reevlvefoundation-ppage-900x1084-pack11.5.webp', 1),
(38, 'foundation 8', 4500, 6, 's-l1200.webp', 8),
(39, 'Lipstick 1', 1500, 36, 'mek1.webp', 1),
(40, 'Lipstick 2', 520, 16, 'mek2.webp', 1),
(41, 'Lipstick 4', 640, 5, 'mek3.png', 1),
(42, 'Lipstick 5', 1500, 63, 'mek5.webp', 1),
(43, 'Lipstick 6', 1600, 14, 'mek6.webp', 1),
(44, 'Lipstick 7', 990, 52, 'mek7.png', 1),
(45, 'Lipstick 8', 899, 65, 'mek8.png', 1),
(46, 'Lipstick 8', 1400, 89, 'mek9.avif', 1),
(47, 'Lipstick 9', 599, 65, 'mek10.png', 8),
(48, 'Mascara 1', 1250, 6, '51PQhsaEcLL._AC_UF1000,1000_QL80_.jpg', 1),
(49, 'Mascara 2', 1750, 65, '61rxVtV7oYL._AC_UF1000,1000_QL80_.jpg', 1),
(50, 'Mascara 3', 4500, 36, '1708468492-screen-shot-2024-02-20-at-5-34-21-pm-65d528fdc1923.png', 1),
(51, 'Mascara 4', 1565, 26, 'ColossalVolumeExpressMascara100Black3.webp', 1),
(52, 'Mascara 5', 1480, 56, 'images (1).jfif', 1),
(53, 'Mascara 6', 1560, 5, 'images.jfif', 1),
(54, 'Mascara 7', 1625, 25, 'images.png', 1),
(55, 'Mascara 7', 5000, 5, 'iup1160707-1.jpg', 1),
(56, 'Mascara 8', 1250, 56, 'LuminousLashesVolumeMascara_d1887d42-d15c-4647-9c7c-de9c829da2bd_1024x1024.webp', 1),
(57, 'Mascara 8', 1560, 56, 'Screenshot_3.webp', 8),
(58, 'Heart Shape Gold Chain', 2500, 65, 'je 4.jpg', 3),
(59, 'Earings and Neklace', 1500, 65, 'je 5.avif', 3),
(60, 'Gold Ring', 510000, 36, 'je 6.jpg', 3),
(61, 'Gold earings', 45000, 25, 'je 7.avif', 3),
(62, 'Diamonds', 51000000, 52, 'je 8.webp', 3),
(63, 'Stylish Earings', 251100, 25, 'je 9.jpeg', 3),
(64, 'Stylish Gold Chain', 51000, 25, 'je 10.webp', 3),
(65, 'Gold stones earings', 25000, 25, 'je 11.jpg', 3),
(66, 'Black Stones Earings', 521000, 56, 'je 12.webp', 3),
(67, 'Rings ', 560000, 56, 'je 13.jpg', 3),
(68, 'Stylish Pendant', 52000, 25, 'je 14.avif', 3),
(69, 'Peacock Earings', 4560, 25, 'je 15.jpg', 3),
(70, 'Ring Gold', 6500, 65, 'je 22.png', 3),
(71, 'Gold Chain', 5600, 56, 'je 26.webp', 3),
(72, 'Gold Earings', 56000, 65, 'je 20.jpg', 8),
(73, 'Gold Ring with diamond nug', 56000, 56, 'je 24.webp', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `p_category` (`p_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`p_category`) REFERENCES `category` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
