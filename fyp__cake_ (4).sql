-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 06:58 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp (cake)`
--

-- --------------------------------------------------------

--
-- Table structure for table `cake`
--

CREATE TABLE `cake` (
  `CK_ID` int(5) NOT NULL,
  `Flavor` varchar(500) NOT NULL,
  `CK_price` float(5,2) NOT NULL,
  `CK_description` text NOT NULL,
  `CK_type` varchar(50) NOT NULL,
  `CK_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CK_Name` text NOT NULL,
  `CK_Size` varchar(500) NOT NULL,
  `CK_statu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake`
--

INSERT INTO `cake` (`CK_ID`, `Flavor`, `CK_price`, `CK_description`, `CK_type`, `CK_img`, `CK_Name`, `CK_Size`, `CK_statu`) VALUES
(1, 'Cheese and Honey', 112.50, 'Indulge in a harmonious blend of creamy cheesecake infused with the vibrant flavors of matcha green tea, zesty yuzu citrus, and natural honey. This velvety delight boasts a buttery crust, delivering a symphony of taste sensations that will leave you craving for more.', 'Birthday Cake', 'BC-1.jpeg', 'Matcha Yuzu Honey Cheesecake', '7', 'Active'),
(3, 'Chocalate', 87.00, 'Savor the ultimate indulgence with our Chocolate Basque Cheesecake. This decadent dessert combines the velvety smoothness of a classic cheesecake with the intense richness of dark chocolate. Each bite is a blissful symphony of flavors, leaving you enchanted by its creamy texture and irresistible cocoa-infused delight. A chocolate lover\'s dream come true.', 'Birthday Cake', 'BC-3.jpeg', 'Chocolate Basque Cheesecake', '6', 'Active'),
(4, 'Durian', 55.56, 'Embark on a daring culinary adventure with our Durian Mille Crepe Cake. This exotic masterpiece layers delicate crepes with luscious durian-infused cream, creating a heavenly fusion of flavors. The tropical aroma of durian blends harmoniously with the velvety texture, resulting in a captivating dessert experience that will transport you to paradise.', 'Fruit Cake', 'FC-1.jpeg', 'Durian Mille Crepe Cake', '5', 'Active'),
(5, 'Cheese', 96.00, 'Delight in the unique and enchanting Taro Basque Cheesecake. This extraordinary creation combines the creamy goodness of a traditional Basque cheesecake with the earthy, subtly sweet flavors of taro. The result is a velvety, indulgent dessert that offers a delightful twist on a classic favorite. Prepare to be captivated by its irresistible taste and mesmerizing purple hue.', 'Fruit Cake', 'FC-2.jpeg', 'Taro Basque Cheesecake', '6', 'Active'),
(6, 'Pineapple', 85.50, 'Experience a tropical delight with our Pandan Pineapple Cake. This delectable treat combines the fragrant essence of pandan leaves with the sweet and tangy flavors of pineapple. The moist cake layers are infused with pandan, while the pineapple filling adds a refreshing burst of tropical goodness. Indulge in this harmonious fusion of flavors that will transport your taste buds to paradise.', 'Fruit Cake', 'FC-3.jpeg', 'Pandan Pineapple Cake', '7', 'Active'),
(7, 'Chocolate and oreo', 110.30, 'Indulge in pure bliss with our Chocolate Sea Salt Oreo Cake. Decadent layers of rich chocolate cake are generously filled with creamy Oreo-infused frosting, and a sprinkle of sea salt adds a delightful contrast. Immerse yourself in the irresistible combination of chocolate, Oreo goodness, and a touch of savory salt, creating a heavenly dessert experience.', 'Normal Cake', 'NC-1.jpeg', 'Chocolate Sea Salt Oreo Cake', '6', 'Active'),
(8, 'Chocolate', 88.00, 'Experience pure indulgence with our Chocolate Toffee Hazelnut Millefeuille. Delicate layers of flaky puff pastry are filled with luscious chocolate cream, crunchy toffee bits, and toasted hazelnuts. Each bite is a symphony of textures and flavors, from the buttery pastry to the rich chocolate and the irresistible crunch of hazelnuts. Prepare to be captivated by this divine dessert creation.', 'Normal Cake', 'NC-2.jpeg', 'Chocolate Toffee Hazelnut Millefeuille', '6', 'Active'),
(9, 'Chocolate and Matcha', 88.00, 'Satisfy your cravings with our Classic Chocolate Matcha Cake. This heavenly creation brings together the richness of chocolate and the earthy notes of matcha. Moist chocolate cake layers are elegantly infused with matcha, creating a perfect harmony of flavors. Indulge in this delightful combination that will leave you enchanted by its irresistible taste.', 'Normal Cake', 'NC-3.jpeg', 'Classic Chocolate Matcha Cake', '5', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `cookies`
--

CREATE TABLE `cookies` (
  `Cok_ID` int(5) NOT NULL,
  `Cok_name` text NOT NULL,
  `Flavor` varchar(500) NOT NULL,
  `Cok_price` float(5,2) NOT NULL,
  `Cok_image` varchar(255) NOT NULL,
  `Cok_description` text NOT NULL,
  `Cok_statu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cookies`
--

INSERT INTO `cookies` (`Cok_ID`, `Cok_name`, `Flavor`, `Cok_price`, `Cok_image`, `Cok_description`, `Cok_statu`) VALUES
(23456, 'Chocolate Brownie Cookies', 'Chocolate Brownie', 2.50, 'Cok1.jpg', 'Experience the best of both worlds with our Chocolate Brownie Cookies. These delectable treats blend the fudgy goodness of a brownie with the chewy texture of a cookie. Each bite reveals a rich chocolatey flavor that melts in your mouth, delivering a delightful and irresistible dessert experience. Get ready to indulge in pure chocolate bliss.', 'Active'),
(23457, 'Coconut Cookies', 'Coconut', 1.50, 'Cok2.jpg', 'Transport yourself to a tropical paradise with our Coconut Cookies. These delightful treats are infused with the aromatic essence of coconut, offering a taste of the exotic. With a perfect balance of sweetness and texture, each bite delivers a satisfying crunch and a burst of tropical flavor. Enjoy the taste of paradise in every bite.', 'Active'),
(23458, 'Pecan Cookies', 'Pecan', 2.50, 'Cok3.jpg', 'Indulge in the nutty goodness of our Pecan Cookies. These delectable treats are loaded with buttery pecans, adding a delightful crunch and a rich, toasty flavor to each bite. With a hint of sweetness, these cookies are a perfect balance of textures and flavors, creating a truly irresistible treat for pecan loverIndulge in the nutty goodness of our Pecan Cookies. These delectable treats are loaded with buttery pecans, adding a delightful crunch and a rich, toasty flavor to each bite. With a hint of sweetness, these cookies are a perfect balance of textures and flavors, creating a truly irresistible treat for pecan lovers.\ns.\n', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `dessert`
--

CREATE TABLE `dessert` (
  `Dst_ID` int(5) NOT NULL,
  `Dst_name` text NOT NULL,
  `Flavor` varchar(500) NOT NULL,
  `Dst_type` varchar(50) NOT NULL,
  `Dst_price` float(5,2) NOT NULL,
  `Dst_img` varchar(255) NOT NULL,
  `Dst_description` text NOT NULL,
  `Dst_statu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dessert`
--

INSERT INTO `dessert` (`Dst_ID`, `Dst_name`, `Flavor`, `Dst_type`, `Dst_price`, `Dst_img`, `Dst_description`, `Dst_statu`) VALUES
(34567, 'Egg Tart', 'Egg', 'Tart', 3.50, 'TT3.jpg', 'Savor the classic delight of our Egg Tart. Encased in a buttery, flaky pastry crust, the smooth and creamy custard filling awaits. Baked to perfection, each bite offers a delicate balance of sweet and eggy flavors. Whether enjoyed warm or chilled, this timeless treat will transport you to a world of culinary bliss.', 'Active'),
(34568, 'Strawberry Egg Tart', 'Strawberry', 'Tart', 4.50, 'TT4.jpg', 'Delight in the lusciousness of our Strawberry Egg Tart. Encased in a delicate pastry shell, the velvety egg custard harmonizes with the vibrant sweetness of fresh strawberries. Every bite is a burst of fruity goodness, complemented by the smoothness of the custard. Indulge in this delightful fusion of flavors for a truly memorable dessert experience.', 'Active'),
(34569, 'Chocolate Egg Tart', 'Chocolate', 'Tart', 3.50, 'TT1.jpg', 'Experience pure chocolate bliss with our Chocolate Egg Tart. Encased in a buttery pastry shell, the rich and velvety chocolate custard awaits. Each bite is a decadent delight, as the smooth chocolate filling melts in your mouth. Indulge in this irresistible combination of flaky crust and luxurious chocolate for a truly indulgent dessert experience.', 'Active'),
(34570, 'Matcha Egg Tart', 'Matcha', 'Tart', 4.50, 'TT2.jpg', 'Indulge in the captivating flavors of our Matcha Egg Tart. Enclosed in a delicate pastry shell, the creamy and subtly sweet matcha-infused custard awaits. Each bite offers a harmonious blend of earthy matcha and rich custard, creating a delightful fusion of flavors. Experience the elegance of matcha in this irresistible twist on a classic treat.', 'Active'),
(34571, 'Salted Egg Macaroon', 'Salted Egg', 'Macaroon', 2.50, 'MC2.jpg', 'Experience a delightful balance of sweet and savory with our Salted Egg Macaroon. These petite treats feature a delicate almond meringue shell, filled with a luscious salted egg yolk cream. The contrasting flavors of the rich and creamy salted egg yolk filling and the crispy macaron shell create a delectable harmony that will leave you craving more.', 'Active'),
(34572, 'Oreo Matcha Macaroon', 'Matcha', 'Macaroon', 2.50, 'MC3.jpg', 'Indulge in the perfect combination of Oreo and Matcha with our Oreo Matcha Macaroon. These exquisite macarons feature a delicate almond shell infused with matcha, filled with a luscious Oreo cream. The earthy notes of matcha beautifully complement the rich and chocolatey Oreo filling, creating a heavenly blend of flavors in every bite.', 'Active'),
(34573, 'Panda\'s Macaroon', 'Chocolate', 'Macaroon', 4.50, 'MC1.jpg', 'Unleash your inner panda with our Panda\'s Macaroon. These adorable treats feature a panda-inspired design, with a delicate almond meringue shell adorned with black and white patterns. Indulge in the delicious filling, which can vary from flavors like chocolate, strawberry, or vanilla, offering a delightful combination of cuteness and irresistible taste.', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `MB_ID` int(5) NOT NULL,
  `MB_Name` text NOT NULL,
  `MB_Email` varchar(30) NOT NULL,
  `MB_Password` varchar(30) NOT NULL,
  `MB_Phone_number` text NOT NULL,
  `MB_Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`MB_ID`, `MB_Name`, `MB_Email`, `MB_Password`, `MB_Phone_number`, `MB_Address`) VALUES
(12345, 'Ali', 'Ali@gmail.com', 'Ali233', '012-6867913', 'No 59, Taman Ruby, Jalan Ruby, Kelantan'),
(12346, 'Tan Qi Loh', 'Tanqiloh@gmail.com', 'Tan233', '015-6086932', 'No 50, Taman halo, Jalan halo, Penang'),
(12355, 'Lee Ah Meng', 'Leeahmeng@gmail.com', 'Lee233', '017-1145141', 'No 90, Taman baba, Jalan baba, Perak'),
(12361, 'kawhi ', 'kawhi@gmail.com', 'kawhi233', '012-6123466', 'No 90, Taman baba, Jalan baba, Perak'),
(12363, 'James', 'James@gmail.com', 'James233', '012-4243445', 'No 50, Taman halo, Jalan halo, Johor baru');

-- --------------------------------------------------------

--
-- Table structure for table `msg1`
--

CREATE TABLE `msg1` (
  `MS_ID` int(5) NOT NULL,
  `MB_ID` int(5) NOT NULL,
  `ST_ID` int(5) DEFAULT NULL,
  `MS_title` text NOT NULL,
  `MS_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msg1`
--

INSERT INTO `msg1` (`MS_ID`, `MB_ID`, `ST_ID`, `MS_title`, `MS_detail`) VALUES
(2, 12345, 123456789, 'aaaaaaaaaaaaaa', 'dddddddddddddddd'),
(3, 12345, NULL, 'Comment to this dessert website', 'This dessert website truly catered to every sweet tooth imaginable. Whether you\'re a chocolate lover, a fruit enthusiast, or a fan of creamy delights, there was something for everyone. '),
(4, 12361, 123456789, 'You shop is good ', 'So many products I like!!!'),
(5, 12363, NULL, 'halo', 'halo');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `PH_ID` int(5) NOT NULL,
  `CK_ID` int(5) DEFAULT NULL,
  `Cok_ID` int(5) DEFAULT NULL,
  `Dst_ID` int(5) DEFAULT NULL,
  `MB_ID` int(5) NOT NULL,
  `ST_ID` int(10) DEFAULT NULL,
  `DL_statu` text NOT NULL,
  `quantity` int(5) NOT NULL,
  `total_amount` float(5,2) NOT NULL,
  `customer_rating` int(1) DEFAULT NULL,
  `customer_comment` varchar(500) DEFAULT NULL,
  `buy_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`PH_ID`, `CK_ID`, `Cok_ID`, `Dst_ID`, `MB_ID`, `ST_ID`, `DL_statu`, `quantity`, `total_amount`, `customer_rating`, `customer_comment`, `buy_date`) VALUES
(51, 8, NULL, NULL, 12345, NULL, 'Waiting for staff confirm the order', 1, 88.00, NULL, NULL, '2023-06-22'),
(52, NULL, NULL, 34567, 12345, 123456800, 'On the way, Estimated to arrive on 2023-06-25', 4, 14.00, NULL, NULL, '2023-06-22'),
(53, NULL, 23457, NULL, 12361, 123456789, 'On Proccessing', 10, 15.00, NULL, NULL, '2023-06-22'),
(54, 6, NULL, NULL, 12361, 123456789, 'On Proccessing', 1, 85.50, NULL, NULL, '2023-06-22'),
(55, 1, NULL, NULL, 12363, NULL, 'Waiting for staff confirm the order', 1, 112.50, NULL, NULL, '2023-06-22'),
(56, NULL, NULL, 34573, 12363, 123456800, 'Delivery complete', 6, 27.00, 5, 'Very Very good  i will buy agian yaeee', '2023-06-22'),
(57, NULL, NULL, 34567, 12345, NULL, 'Waiting for staff confirm the order', 1, 3.50, NULL, NULL, '2023-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `ST_ID` int(10) NOT NULL,
  `ST_Name` varchar(30) NOT NULL,
  `ST_Age` int(3) NOT NULL,
  `ST_Password` varchar(10) NOT NULL,
  `ST_Phone_num` text NOT NULL,
  `ST_Email` varchar(30) NOT NULL,
  `ST_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`ST_ID`, `ST_Name`, `ST_Age`, `ST_Password`, `ST_Phone_num`, `ST_Email`, `ST_status`) VALUES
(123456789, 'Tony', 24, 'Tony233', '012-3456789', 'Tony@gmail.com', 'Active'),
(123456790, 'Jojo', 23, 'Jojo233', '012-7788990', 'Jojo@gmail.com', 'Active'),
(123456793, 'Jolley', 20, 'Jolley233', '019-4455326', 'Jolley@gmail.com', 'Active'),
(123456800, 'Jason', 20, 'Jason233', '019-4455377', 'Jason@gmail.com', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cake`
--
ALTER TABLE `cake`
  ADD PRIMARY KEY (`CK_ID`);

--
-- Indexes for table `cookies`
--
ALTER TABLE `cookies`
  ADD PRIMARY KEY (`Cok_ID`);

--
-- Indexes for table `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`Dst_ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`MB_ID`);

--
-- Indexes for table `msg1`
--
ALTER TABLE `msg1`
  ADD PRIMARY KEY (`MS_ID`),
  ADD KEY `MB_ID` (`MB_ID`),
  ADD KEY `ST_ID` (`ST_ID`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`PH_ID`),
  ADD KEY `CK_ID` (`CK_ID`),
  ADD KEY `MB_ID` (`MB_ID`),
  ADD KEY `ST_ID` (`ST_ID`),
  ADD KEY `Cok_ID` (`Cok_ID`),
  ADD KEY `Dst_ID` (`Dst_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ST_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cake`
--
ALTER TABLE `cake`
  MODIFY `CK_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cookies`
--
ALTER TABLE `cookies`
  MODIFY `Cok_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23461;

--
-- AUTO_INCREMENT for table `dessert`
--
ALTER TABLE `dessert`
  MODIFY `Dst_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34577;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `MB_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12364;

--
-- AUTO_INCREMENT for table `msg1`
--
ALTER TABLE `msg1`
  MODIFY `MS_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `PH_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `ST_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123456801;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `msg1`
--
ALTER TABLE `msg1`
  ADD CONSTRAINT `msg1_ibfk_1` FOREIGN KEY (`MB_ID`) REFERENCES `member` (`MB_ID`),
  ADD CONSTRAINT `msg1_ibfk_2` FOREIGN KEY (`ST_ID`) REFERENCES `staff` (`ST_ID`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`CK_ID`) REFERENCES `cake` (`CK_ID`),
  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`MB_ID`) REFERENCES `member` (`MB_ID`),
  ADD CONSTRAINT `purchase_ibfk_3` FOREIGN KEY (`ST_ID`) REFERENCES `staff` (`ST_ID`),
  ADD CONSTRAINT `purchase_ibfk_4` FOREIGN KEY (`Cok_ID`) REFERENCES `cookies` (`Cok_ID`),
  ADD CONSTRAINT `purchase_ibfk_5` FOREIGN KEY (`Dst_ID`) REFERENCES `dessert` (`Dst_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
