-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 03:18 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oroars`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `ID` int(11) NOT NULL,
  `Series` varchar(255) NOT NULL,
  `CardNo` int(11) NOT NULL,
  `Expmonth` varchar(255) NOT NULL,
  `Expyear` varchar(255) NOT NULL,
  `CCVNo` int(11) NOT NULL,
  `DateExpired` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`ID`, `Series`, `CardNo`, `Expmonth`, `Expyear`, `CCVNo`, `DateExpired`) VALUES
(0, 'bs01', 1, '', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `ID` int(11) NOT NULL,
  `Series` varchar(255) NOT NULL,
  `Month` varchar(255) NOT NULL,
  `Date` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Event` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(10) NOT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `product_id`, `quantity`, `transaction_id`, `status`, `user_id`) VALUES
(1, 26, 1, 3, 'purchased', 1),
(2, 33, 2, 3, 'purchased', 1),
(4, 28, 2, NULL, 'pending', 2),
(6, 27, 1, 3, 'purchased', 1),
(7, 27, 1, 3, 'purchased', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `Series` varchar(255) NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `Series`, `CategoryName`, `Status`) VALUES
(7, '1', 'All day breakfast', 0),
(8, '2', 'Value Meals', 0),
(9, '3', 'Sizzling plate', 0),
(10, 'dcs01', 'Milk Tea', 0),
(11, 'dcs02', 'Fruit Tea', 0);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `ID` int(11) NOT NULL,
  `Series` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `ContactNo` int(11) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Password` varchar(500) NOT NULL,
  `Repeatpassword` varchar(500) NOT NULL,
  `IDPicture` mediumtext NOT NULL,
  `Billing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`ID`, `Series`, `Name`, `Username`, `Address`, `Gender`, `ContactNo`, `Email`, `Password`, `Repeatpassword`, `IDPicture`, `Billing`) VALUES
(1, '01', 'Annanasadasd', '@Anna', 'Dalig', 'Male', 0, 'anna@gmail.com', 'awittt', 'awittt', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_fee`
--

CREATE TABLE `delivery_fee` (
  `id` int(11) NOT NULL,
  `KM` int(11) NOT NULL,
  `PRICE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_fee`
--

INSERT INTO `delivery_fee` (`id`, `KM`, `PRICE`) VALUES
(1, 1, 20),
(2, 118, 400),
(3, 50, 150);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `ID` int(11) NOT NULL,
  `Series` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `ContactNo` int(11) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Priviledge` varchar(225) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`ID`, `Series`, `Name`, `Email`, `Password`, `Address`, `ContactNo`, `Position`, `Priviledge`, `status`) VALUES
(2, '', 'Odessa', 'admin@admin.com', 'admin', 'Balayan', 2147483647, 'Manager', '', 0),
(4, '02empp', 'Jenny Rose T. Maullon', 'jennyrosemaullon223@gmail.com', 'jenny223', 'Brgy. Baclas Calaca, Batangas', 290, 'Cashier', 'cashiering, order, cancellation, delivery, idverification', 0),
(5, '03empp', 'Joshua M. Dela Rosa', 'joshua08delarosa@gmail.com', 'joshua08', 'Brgy. Makina Calaca, Batangas', 9, 'Receptionist', 'Reservation', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `ID` int(20) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_transactions`
--

CREATE TABLE `order_transactions` (
  `ID` int(11) NOT NULL,
  `totalamount` float NOT NULL,
  `status` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `coord_lat` varchar(255) NOT NULL,
  `coord_long` varchar(255) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `payment_ref` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_transactions`
--

INSERT INTO `order_transactions` (`ID`, `totalamount`, `status`, `quantity`, `coord_lat`, `coord_long`, `payment_method`, `payment_ref`, `user_id`, `date_created`) VALUES
(1, 530, 'cash on delivery', 2, '14.5538786', '121.0915093', 'cash', 'b293996c', 1, '2021-12-10 08:23:11'),
(2, 135, 'cash on delivery', 1, '14.5538789', '121.091507', 'cash', '29906726', 1, '2021-12-10 08:29:49'),
(3, 135, 'paid', 1, '14.5538789', '121.091507', 'cash', 'pay_tbX8NPHWrRGsasYo3hURJca4', 1, '2021-12-10 09:49:07');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `Series` varchar(255) NOT NULL,
  `ProductName` varchar(5000) NOT NULL,
  `CategoryID` varchar(255) NOT NULL,
  `SubCategoryID` varchar(255) NOT NULL,
  `ProductPrice` varchar(255) NOT NULL,
  `SRP` varchar(255) NOT NULL,
  `photo` varchar(2555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Series`, `ProductName`, `CategoryID`, `SubCategoryID`, `ProductPrice`, `SRP`, `photo`) VALUES
(27, 'ps02', 'Tanderlion Pork', '7', '12', '120', '135', 'images/2.png'),
(28, 'ps03', 'Sweet & Spicy Chicken', '8', '15', '135', '150', 'images/3.png'),
(29, 'ps04', 'Laing', '7', '20', '125', '135', 'images/4.png'),
(31, 'ps06', 'Pork Tocino', '7', '12', '99.99', '99.99', 'menu/All day Breakfast/ADBPorkTocino.png'),
(32, 'ps07', 'TBone-Steak', '9', '23', '235', '235', 'menu/SizzlingPlate/SPTBoneSteak.png'),
(33, 'ps08', 'Peach', '11', '28', '75', '75', 'menu/Drinksz/PeachB.png'),
(34, 'ps09', 'Taro', '10', '25', '99', '99', 'menu/Drinksz/DFrappeTaro.png'),
(35, '1', 'test', '7', '13', '12', '12', 'images/128910981_3699476060073681_3772732379187791795_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchasehistory`
--

CREATE TABLE `purchasehistory` (
  `ID` int(11) NOT NULL,
  `Series` varchar(255) NOT NULL,
  `ClientID` int(11) NOT NULL,
  `Date` int(11) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Bill` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `street_add` varchar(255) NOT NULL,
  `city_add` varchar(255) NOT NULL,
  `zip_add` varchar(10) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo_path` varchar(5000) NOT NULL,
  `validated` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `fname`, `lname`, `mname`, `username`, `street_add`, `city_add`, `zip_add`, `gender`, `contact`, `email`, `password`, `photo_path`, `validated`, `date_created`) VALUES
(1, 'Rodelyn', 'Zuniga', 'Mendoza', 'Odessa', 'Brgy. Dalig Balayan Batangas', 'Batangas', '4213', 0, '0997 524-2698', 'zunigarodelyn02@gmail.com', '$2y$10$coD83dBtf.uk24Bmq4HyQ.JNhG3hmLpB0GXmvhpCcxyY.sX5rLnqi', 'e46c77b844920bd65afa772e1749c69d28af92b6.jpg', 1, '2021-11-15 16:37:43'),
(2, 'Jenny Rose', 'Maullon', 'Tenorio', 'jenny', 'Baclas, Calaca Batangas', 'Calaca', '4212', 0, '0909 199-7012', 'maullonjennyrose223@gmail.com', '$2y$10$g3oHwB9N9ue7RXSNZWsQCOiYxAwL2pIvebIDGYieY69s/.L5NbgYK', 'e8946da233f0870890f0e2caeb0c8630fbecd262.jpg', 1, '2021-11-17 23:43:25'),
(3, 'Aina Marie Gayle', 'Gonzales', 'Panganiban', 'ainamariegayle', 'Balibago, Lian, Batangas', 'Lian', '4216', 0, '0905 891-4184', 'ainamariegayle@gmail.com', '$2y$10$V9H8n4f5MBuooiLKUIntJe4LxHVIgzJtcJtFpCEatfVdG9Ey.tzoy', 'bc6695d20898ff8835af8b39082b82ced6bdb2be.jpg', 0, '2021-11-18 00:06:17'),
(4, 'Joshua', 'Dela Rosa', 'Mendoza', 'cjoshua', 'Brgy. Makina Calaca, Batangas', 'Calaca', '4212', 1, '0997 524-2698', 'joshua08delarosa@gmail.com', '$2y$10$zzhaqpSPpCZbxNCdQoytjeSwCfZLeTEH351k5Rwf12imPAkByoTHC', '2bd7994c18de8da21644ebbf6edb4f9d2d5ee204.jpg', 0, '2021-11-18 00:32:06');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `ID` int(11) NOT NULL,
  `reservation_ref` varchar(12) NOT NULL,
  `reservation_name` int(11) NOT NULL,
  `contant` varchar(100) NOT NULL,
  `guest_count` int(11) NOT NULL,
  `table_number` int(11) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_time` time NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shippingaddress`
--

CREATE TABLE `shippingaddress` (
  `ID` int(11) NOT NULL,
  `Series` varchar(255) NOT NULL,
  `Address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shippingaddress`
--

INSERT INTO `shippingaddress` (`ID`, `Series`, `Address`) VALUES
(1, 'sas01', 'dalig');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `ID` int(11) NOT NULL,
  `Series` varchar(255) NOT NULL,
  `SubCategoryName` varchar(255) NOT NULL,
  `Status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`ID`, `Series`, `SubCategoryName`, `Status`) VALUES
(11, '7', 'chickenn', 0),
(12, '7', 'pork', 0),
(13, '7', 'beef', 0),
(14, '7', 'Seafood', 0),
(15, '8', 'chicken', 0),
(16, '8', 'pork', 0),
(17, '8', 'Seafood', 0),
(19, '8', 'Beef', 0),
(20, '7', 'vegetables', 0),
(21, '8', 'vegetables', 0),
(22, '9', 'pork', 0),
(23, '9', 'beef', 0),
(24, '9', 'seafood', 0),
(25, '10', 'Taro', 0),
(26, '10', 'Vanila', 0),
(27, '10', 'Dark chocolate', 0),
(28, '11', 'Peach', 0),
(29, '11', 'Lychee', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tableinventory`
--

CREATE TABLE `tableinventory` (
  `ID` int(11) NOT NULL,
  `table_number` varchar(100) NOT NULL,
  `seats` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tableinventory`
--

INSERT INTO `tableinventory` (`ID`, `table_number`, `seats`, `description`, `status`) VALUES
(1, '104', 15, 'test', 1),
(2, '102', 1, '2', 1),
(3, '1064', 12, 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_status`
--

CREATE TABLE `table_status` (
  `ID` int(11) NOT NULL,
  `status_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_status`
--

INSERT INTO `table_status` (`ID`, `status_name`) VALUES
(1, 'active'),
(2, 'reserved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `delivery_fee`
--
ALTER TABLE `delivery_fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order_transactions`
--
ALTER TABLE `order_transactions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `purchasehistory`
--
ALTER TABLE `purchasehistory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shippingaddress`
--
ALTER TABLE `shippingaddress`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tableinventory`
--
ALTER TABLE `tableinventory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `table_status`
--
ALTER TABLE `table_status`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `delivery_fee`
--
ALTER TABLE `delivery_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_transactions`
--
ALTER TABLE `order_transactions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `purchasehistory`
--
ALTER TABLE `purchasehistory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shippingaddress`
--
ALTER TABLE `shippingaddress`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tableinventory`
--
ALTER TABLE `tableinventory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_status`
--
ALTER TABLE `table_status`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
