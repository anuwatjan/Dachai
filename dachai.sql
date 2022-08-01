-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 07:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dachai`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(501, 'ยาสามัญประจำบ้าน');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_prefix` varchar(300) NOT NULL,
  `customer_name` varchar(300) NOT NULL,
  `customer_last` varchar(300) NOT NULL,
  `customer_career` varchar(300) NOT NULL,
  `customer_phone` varchar(300) NOT NULL,
  `customer_email` varchar(300) NOT NULL,
  `customer_date` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer_detail`
--

CREATE TABLE `customer_detail` (
  `customerd_id` int(11) NOT NULL,
  `customerd_add` varchar(300) NOT NULL,
  `customerd_amp` varchar(300) NOT NULL,
  `customerd_pro` varchar(300) NOT NULL,
  `customerd_geo` varchar(300) NOT NULL,
  `customer1_id` int(11) NOT NULL,
  `customerd_dis` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `partner_id` int(13) NOT NULL,
  `partner_name` varchar(300) NOT NULL,
  `partner_phone` varchar(300) NOT NULL,
  `partner_email` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`partner_id`, `partner_name`, `partner_phone`, `partner_email`) VALUES
(3, '1', '3', '2'),
(5, '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `partner_detail`
--

CREATE TABLE `partner_detail` (
  `partnerd_id` int(11) NOT NULL,
  `partner1_id` varchar(300) NOT NULL,
  `partnerd_add` varchar(300) NOT NULL,
  `partnerd_pro` int(30) NOT NULL,
  `partnerd_dis` int(30) NOT NULL,
  `partnerd_geo` int(30) NOT NULL,
  `partnerd_amp` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partner_detail`
--

INSERT INTO `partner_detail` (`partnerd_id`, `partner1_id`, `partnerd_add`, `partnerd_pro`, `partnerd_dis`, `partnerd_geo`, `partnerd_amp`) VALUES
(42, '5', '1', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `po`
--

CREATE TABLE `po` (
  `po_id` int(11) NOT NULL,
  `po_RefNo` varchar(300) NOT NULL,
  `po_Create` varchar(300) NOT NULL,
  `po_buyer` varchar(300) NOT NULL,
  `po_sale` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `po_detailproduct`
--

CREATE TABLE `po_detailproduct` (
  `po_detailproid` int(11) NOT NULL,
  `product_qty` varchar(300) NOT NULL,
  `product_id` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `product_common` varchar(300) NOT NULL,
  `product_unit` varchar(300) NOT NULL,
  `product_type` varchar(300) NOT NULL,
  `product_category` varchar(300) NOT NULL,
  `product_symp` varchar(300) NOT NULL,
  `product_img` varchar(300) NOT NULL,
  `product_barcode` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_common`, `product_unit`, `product_type`, `product_category`, `product_symp`, `product_img`, `product_barcode`) VALUES
(48, '1', '2', '2', '100', '501', '7', '16589722708461.jpg', 'dhepAD4ETe'),
(49, '4', '5', '1', '100', '501', '7', '16589722828461.jpg', 'Uw9Bh1c3RH'),
(50, '12321', '3123', '2', '100', '501', '7', '16589724438461.jpg', '321312sdfd'),
(51, '23123', '31231', '2', '100', '501', '7', '16589724688461.jpg', 'zpOHUw4LEZ');

-- --------------------------------------------------------

--
-- Table structure for table `sympton`
--

CREATE TABLE `sympton` (
  `symp_id` int(11) NOT NULL,
  `symp_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sympton`
--

INSERT INTO `sympton` (`symp_id`, `symp_name`) VALUES
(1, 'หู คอ จมูก ปาก '),
(2, 'ระบบประสาท'),
(3, 'มะเร็งและภูมิคุ้มกัน'),
(4, 'ระบบสูตนรีเวช'),
(5, 'ยาดมสลบ'),
(6, 'ระบบต่อมไร้ท่อ'),
(7, 'แยกตามอาการ');

-- --------------------------------------------------------

--
-- Table structure for table `type_product`
--

CREATE TABLE `type_product` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_product`
--

INSERT INTO `type_product` (`type_id`, `type_name`) VALUES
(100, 'ยารักษาโรค'),
(101, '222'),
(103, 'saasdassdsda');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` int(11) NOT NULL,
  `unit_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `unit_name`) VALUES
(1, 'กล่อง'),
(2, 'กระปุก');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_customer`
-- (See below for the actual view)
--
CREATE TABLE `view_customer` (
`customer_id` int(11)
,`customer_prefix` varchar(300)
,`customer_name` varchar(300)
,`customer_last` varchar(300)
,`customer_career` varchar(300)
,`customer_phone` varchar(300)
,`customer_email` varchar(300)
,`customer_date` varchar(300)
,`customerd_id` int(11)
,`customerd_add` varchar(300)
,`customerd_amp` varchar(300)
,`customerd_pro` varchar(300)
,`customerd_geo` varchar(300)
,`customer1_id` int(11)
,`customerd_dis` varchar(300)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_partner`
-- (See below for the actual view)
--
CREATE TABLE `view_partner` (
`partner_id` int(13)
,`partner_name` varchar(300)
,`partner_phone` varchar(300)
,`partner_email` varchar(300)
,`partnerd_id` int(11)
,`partner1_id` varchar(300)
,`partnerd_add` varchar(300)
,`partnerd_pro` int(30)
,`partnerd_dis` int(30)
,`partnerd_geo` int(30)
,`partnerd_amp` int(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_po_product`
-- (See below for the actual view)
--
CREATE TABLE `view_po_product` (
`po_id` int(11)
,`po_RefNo` varchar(300)
,`po_Create` varchar(300)
,`po_buyer` varchar(300)
,`po_sale` varchar(300)
,`po_detailproid` int(11)
,`product_qty` varchar(300)
,`product_id` varchar(300)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_product_detail`
-- (See below for the actual view)
--
CREATE TABLE `view_product_detail` (
`product_id` int(11)
,`product_name` varchar(300)
,`product_common` varchar(300)
,`product_unit` varchar(300)
,`product_type` varchar(300)
,`product_category` varchar(300)
,`product_symp` varchar(300)
,`product_img` varchar(300)
,`product_barcode` varchar(300)
,`type_id` int(11)
,`type_name` varchar(300)
,`unit_id` int(11)
,`unit_name` varchar(300)
,`category_id` int(11)
,`category_name` varchar(300)
,`symp_id` int(11)
,`symp_name` varchar(300)
);

-- --------------------------------------------------------

--
-- Structure for view `view_customer`
--
DROP TABLE IF EXISTS `view_customer`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_customer`  AS SELECT `a`.`customer_id` AS `customer_id`, `a`.`customer_prefix` AS `customer_prefix`, `a`.`customer_name` AS `customer_name`, `a`.`customer_last` AS `customer_last`, `a`.`customer_career` AS `customer_career`, `a`.`customer_phone` AS `customer_phone`, `a`.`customer_email` AS `customer_email`, `a`.`customer_date` AS `customer_date`, `b`.`customerd_id` AS `customerd_id`, `b`.`customerd_add` AS `customerd_add`, `b`.`customerd_amp` AS `customerd_amp`, `b`.`customerd_pro` AS `customerd_pro`, `b`.`customerd_geo` AS `customerd_geo`, `b`.`customer1_id` AS `customer1_id`, `b`.`customerd_dis` AS `customerd_dis` FROM (`customer` `a` join `customer_detail` `b` on(`a`.`customer_id` = `b`.`customer1_id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `view_partner`
--
DROP TABLE IF EXISTS `view_partner`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_partner`  AS SELECT `a`.`partner_id` AS `partner_id`, `a`.`partner_name` AS `partner_name`, `a`.`partner_phone` AS `partner_phone`, `a`.`partner_email` AS `partner_email`, `b`.`partnerd_id` AS `partnerd_id`, `b`.`partner1_id` AS `partner1_id`, `b`.`partnerd_add` AS `partnerd_add`, `b`.`partnerd_pro` AS `partnerd_pro`, `b`.`partnerd_dis` AS `partnerd_dis`, `b`.`partnerd_geo` AS `partnerd_geo`, `b`.`partnerd_amp` AS `partnerd_amp` FROM (`partner` `a` join `partner_detail` `b` on(`a`.`partner_id` = `b`.`partner1_id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `view_po_product`
--
DROP TABLE IF EXISTS `view_po_product`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_po_product`  AS SELECT `a`.`po_id` AS `po_id`, `a`.`po_RefNo` AS `po_RefNo`, `a`.`po_Create` AS `po_Create`, `a`.`po_buyer` AS `po_buyer`, `a`.`po_sale` AS `po_sale`, `b`.`po_detailproid` AS `po_detailproid`, `b`.`product_qty` AS `product_qty`, `b`.`product_id` AS `product_id` FROM (`po` `a` join `po_detailproduct` `b` on(`a`.`po_id` = `b`.`po_detailproid`))  ;

-- --------------------------------------------------------

--
-- Structure for view `view_product_detail`
--
DROP TABLE IF EXISTS `view_product_detail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_product_detail`  AS SELECT `a`.`product_id` AS `product_id`, `a`.`product_name` AS `product_name`, `a`.`product_common` AS `product_common`, `a`.`product_unit` AS `product_unit`, `a`.`product_type` AS `product_type`, `a`.`product_category` AS `product_category`, `a`.`product_symp` AS `product_symp`, `a`.`product_img` AS `product_img`, `a`.`product_barcode` AS `product_barcode`, `b`.`type_id` AS `type_id`, `b`.`type_name` AS `type_name`, `c`.`unit_id` AS `unit_id`, `c`.`unit_name` AS `unit_name`, `d`.`category_id` AS `category_id`, `d`.`category_name` AS `category_name`, `e`.`symp_id` AS `symp_id`, `e`.`symp_name` AS `symp_name` FROM ((((`product` `a` join `type_product` `b` on(`a`.`product_type` = `b`.`type_id`)) join `unit` `c` on(`a`.`product_unit` = `c`.`unit_id`)) join `category` `d` on(`a`.`product_category` = `d`.`category_id`)) join `sympton` `e` on(`a`.`product_symp` = `e`.`symp_id`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_detail`
--
ALTER TABLE `customer_detail`
  ADD PRIMARY KEY (`customerd_id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`partner_id`);

--
-- Indexes for table `partner_detail`
--
ALTER TABLE `partner_detail`
  ADD PRIMARY KEY (`partnerd_id`);

--
-- Indexes for table `po`
--
ALTER TABLE `po`
  ADD PRIMARY KEY (`po_id`);

--
-- Indexes for table `po_detailproduct`
--
ALTER TABLE `po_detailproduct`
  ADD PRIMARY KEY (`po_detailproid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sympton`
--
ALTER TABLE `sympton`
  ADD PRIMARY KEY (`symp_id`);

--
-- Indexes for table `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=503;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_detail`
--
ALTER TABLE `customer_detail`
  MODIFY `customerd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `partner_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `partner_detail`
--
ALTER TABLE `partner_detail`
  MODIFY `partnerd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `po`
--
ALTER TABLE `po`
  MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `po_detailproduct`
--
ALTER TABLE `po_detailproduct`
  MODIFY `po_detailproid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `sympton`
--
ALTER TABLE `sympton`
  MODIFY `symp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `type_product`
--
ALTER TABLE `type_product`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
