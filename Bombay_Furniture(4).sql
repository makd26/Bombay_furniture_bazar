-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2019 at 07:38 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Bombay_Furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `FeedBack`
--

CREATE TABLE `FeedBack` (
  `ID` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Difficulties` varchar(100) NOT NULL,
  `Quality` varchar(100) NOT NULL,
  `VisitAgain` varchar(50) NOT NULL,
  `Suggestions` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `FeedBack`
--

INSERT INTO `FeedBack` (`ID`, `Name`, `email`, `Difficulties`, `Quality`, `VisitAgain`, `Suggestions`) VALUES
(1, 'Vinay Addagatla', 'vnaddagatla@gmail.com', 'No I didnt face any difficulties while buying Furnitures', 'Yes the products quality was very good i was able to find the furnitures i wished to buy', 'Yes', 'Please add the feature to track the order.'),
(2, 'AMIR KHAN', 'aamirkhan786san@gmail.com', 'No,It was Good', 'Yes,I like Quality of products', 'Yes', 'Please inform us about new products by notification'),
(3, 'Ganesh Hakke', 'ganeshhakke8@gmail.com', 'No', 'yes', 'Yes', 'No Suggestion Good work'),
(4, 'lalit', 'lalitmakar@gmail.com', 'price', 'aane to de pehele', 'Yes', ''),
(5, 'Ram', 'Ram@gmail.com', 'No it was easy to buy furniture ', 'Yes the quality of products where nice', 'Yes', '-'),
(6, 'Sanket Birwatkar', 'sanket.birwatkar@gmail.com', 'No', 'No', 'Yes', 'Designing part can be done betterðŸ™ˆ'),
(7, 'makarand dongare', 'msdongare26@gmail.com', 'nothing', '', '', ''),
(8, 'SURAJ BHAGAT THE GREAT', 'surajbhagatthegreat@gmail.com', 'no', 'yes absolutely', 'Yes', 'this is the best website ever.very great competition to the giants like amazon and flipkart.nice work creaters.'),
(9, 'Kashmira Golatkar', 'kashmira92golatkar@gmail.com', 'No as such', 'Yes', 'Yes', ''),
(10, 'Krunal Gediya', 'kgediya0898@gmail.com', 'No', 'Ya', 'Yes', 'Very intuitive website. Amazing work ðŸ˜ Keep it up!'),
(11, 'Sahil Narkar', 'spn998@gmail.com', 'No', 'Yes', 'Yes', 'Only one word Awesome â™¥ï¸ \r\n\r\nVinayðŸ™Œ'),
(12, 'Jeet', 'jeetgor06@gmail.com', 'No', 'Good.', 'Yes', 'Keep doing this great work n providing us with exciting new products.'),
(13, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `id` int(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Mobile` int(50) NOT NULL,
  `ProductId` int(50) NOT NULL,
  `Quantity` int(50) NOT NULL,
  `Price` float NOT NULL,
  `productName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`id`, `Name`, `Mobile`, `ProductId`, `Quantity`, `Price`, `productName`, `email`) VALUES
(1, 'Vinay Addagatla', 2147483647, 10, 1, 13999, '0', 'vnaddagatla@gmail.com'),
(2, 'Vinay Addagatla', 2147483647, 14, 1, 15999, '0', 'vnaddagatla@gmail.com'),
(3, 'AMIR KHAN', 2147483647, 4, 1, 28499, '0', 'aamirkhan786san@gmail.com'),
(4, 'AMIR KHAN', 2147483647, 11, 1, 21999, '0', 'aamirkhan786san@gmail.com'),
(5, 'Ganesh Hakke', 2147483647, 39, 1, 29999, '0', 'ganeshhakke8@gmail.com'),
(6, 'Ganesh Hakke', 2147483647, 43, 1, 34996, '3', 'ganeshhakke8@gmail.com'),
(7, 'lalit', 2147483647, 2, 1, 22999, 'Cupboard2 ', 'lalitmakar@gmail.com'),
(8, 'Vinay Addagatla', 2147483647, 10, 1, 13999, 'Chair1 ', 'vnaddagatla@gmail.com'),
(9, 'rishabh', 2147483647, 1, 1, 18499, 'Cupboard1 ', 'dubeyrishabh.rd@gmail.com'),
(10, 'rishabh', 2147483647, 37, 1, 28999, 'Single Bed ', 'dubeyrishabh.rd@gmail.com'),
(11, 'Ram', 2147483647, 1, 1, 18499, 'Cupboard1 ', 'Ram@gmail.com'),
(12, 'makarand dongare', 2147483647, 42, 1, 74997, '4seatDinnigTable ', 'msdongare26@gmail.com'),
(13, 'Sanket Birwatkar', 2147483647, 35, 1, 8999, 'StudyTable3 ', 'sanket.birwatkar@gmail.com'),
(14, 'Sanket Birwatkar', 2147483647, 35, 1, 8999, 'StudyTable3 ', 'sanket.birwatkar@gmail.com'),
(15, '', 0, 35, 1, 8999, 'StudyTable3 ', ''),
(16, 'mak', 2147483647, 42, 1, 74997, '4seatDinnigTable ', 'msdongare26@gmail.com'),
(17, 'SURAJ BHAGAT THE GREAT', 2147483647, 37, 1, 28999, 'Single Bed ', 'surajbhagatthegreat@gmail.com'),
(18, 'Kashmira Golatkar', 2147483647, 10, 1, 13999, 'Chair1 ', 'kashmira92golatkar@gmail.com'),
(19, '', 0, 10, 1, 13999, 'Chair1 ', ''),
(20, '', 0, 10, 1, 13999, 'Chair1 ', ''),
(21, '', 0, 10, 1, 13999, 'Chair1 ', ''),
(22, 'Krunal Gediya', 2147483647, 11, 1, 21999, 'Chair2 ', 'kgediya0898@gmail.com'),
(23, 'Krunal Gediya', 2147483647, 2, 1, 22999, 'Cupboard2 ', 'kgediya0898@gmail.com'),
(24, 'Sahil Narkar', 987654321, 1, 1, 18499, 'Cupboard1 ', 'spn998@gmail.com'),
(25, 'Sahil Narkar', 987654321, 1, 1, 18499, 'Cupboard1 ', 'spn998@gmail.com'),
(26, 'Sahil Narkar', 987654321, 42, 1, 74997, '4seatDinnigTable ', 'spn998@gmail.com'),
(27, 'Jeet', 2147483647, 45, 1, 44999, 'Sofa ', 'jeetg6@gmail.com'),
(28, 'Jeet', 2147483647, 45, 2, 44999, 'Sofa ', 'jeetg6@gmail.com'),
(29, 'Jeet', 2147483647, 45, 3, 44999, 'Sofa ', 'jeetg6@gmail.com'),
(30, 'priya', 2147483647, 11, 1, 21999, 'Chair2 ', 'priya@gmail.com'),
(31, 'priya', 2147483647, 16, 1, 8999, 'StudyTable3 ', 'priya@gmail.com'),
(32, 'Varsha ', 2147483647, 1, 1, 18499, 'Cupboard1 ', 'varshavishwakarma30@gmail.com'),
(33, 'Varsha ', 2147483647, 1, 1, 18499, 'Cupboard1 ', 'varshavishwakarma30@gmail.com'),
(34, 'xyz', 2147483647, 1, 4, 18499, 'Cupboard1 ', 'xyz@gmail.com'),
(35, 'xyz', 2147483647, 2, 1, 22999, 'Cupboard2 ', 'xyz@gmail.com'),
(36, 'xyz', 2147483647, 4, 1, 28499, 'Cupboard4 ', 'xyz@gmail.com'),
(37, 'xyz', 2147483647, 4, 1, 28499, 'Cupboard4 ', 'xyz@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`) VALUES
(1, 'Cupboard1', 'Cupboard (18499).jpg', 18499),
(2, 'Cupboard2', 'Cupboard (22999).jpg', 22999),
(3, 'Cupboard3', 'Cupboard (23499).jpg', 23499),
(4, 'Cupboard4', 'Cupboard (28499).jpg', 28499),
(9, 'Table', 'Table(7999).jpg', 7999),
(10, 'Chair1', 'Chair(13999).jpg', 13999),
(11, 'Chair2', 'Chair(21999).jpg', 21999),
(14, 'StudyTable1', 'Table(15999).jpg', 15999),
(15, 'StudyTable2', 'Table(9999).jpg', 9999),
(16, 'StudyTable3', 'Table(8999).jpg', 8999),
(18, 'Single Bed', 'Single bed(28999).jpg', 28999),
(19, 'Double Bed1', 'Double bed(32999).jpg', 32999),
(20, 'Double Bed2', 'Double bed(29999).jpg', 29999),
(35, 'StudyTable3', 'Table(8999).jpg', 8999),
(37, 'Single Bed', 'Single bed(28999).jpg', 28999),
(38, 'Double Bed1', 'Double bed(32999).jpg', 32999),
(39, 'Double Bed2', 'Double bed(29999).jpg', 29999),
(42, '4seatDinnigTable', '4seat(74997).jpg', 74997),
(43, '3seatDinnigTable', '3seat(34996).jpg', 34996),
(45, 'Sofa', 'Sofa(44999).jpg', 44999);

-- --------------------------------------------------------

--
-- Table structure for table `Signup`
--

CREATE TABLE `Signup` (
  `Id` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Emailid` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Signup`
--

INSERT INTO `Signup` (`Id`, `Name`, `Emailid`, `Password`, `Mobile`) VALUES
(1, 'Vinay Addagatla', 'vnaddagatla@gmail.com', 'bombayfurniture', '9930271987'),
(2, 'AMIR KHAN', 'aamirkhan786san@gmail.com', '12345', '9769486246'),
(3, 'Ganesh Hakke', 'ganeshhakke8@gmail.com', '00000', '7045153390'),
(4, 'lalit', 'lalitmakar@gmail.com', 'lllllll', '8655450208'),
(5, 'rishabh', 'dubeyrishabh.rd@gmail.com', 'qaz', '7715933947'),
(6, 'Ram', 'Ram@gmail.com', 'hiram', '9986542319'),
(7, 'makarand dongare', 'msdongare26@gmail.com', '123', '8237437056'),
(8, 'Sanket Birwatkar', 'sanket.birwatkar@gmail.com', '1234567890', '9920747103'),
(9, 'Sanket Birwatkar', 'sanket.birwatkar@gmail.com', '12345678', '9920747103'),
(10, 'mak', 'msdongare26@gmail.com', '1234', '8237437056'),
(11, 'SURAJ BHAGAT THE GREAT', 'surajbhagatthegreat@gmail.com', 'iamgodspeed', '9004477417'),
(12, 'Kashmira Golatkar', 'kashmira92golatkar@gmail.com', 'KASHMIRA', '9833379004'),
(13, 'Krunal Gediya', 'kgediya0898@gmail.com', 'Ertyuiop', '8080706835'),
(14, 'Sahil Narkar', 'spn998@gmail.com', '987654321', '987654321'),
(15, 'Jeet', 'jeetg6@gmail.com', 'bbb123', '7045594888'),
(16, 'Jeet', 'jeetg6@gmail.com', 'bb123', '7045594888'),
(17, 'Jeet', 'jeetg6@gmail.com', 'nn122', '7045594888'),
(18, 'priya', 'priya@gmail.com', '12345', '9876543212'),
(19, 'Varsha ', 'varshavishwakarma30@gmail.com', 'varsha', '9833198948'),
(20, 'Varsha ', 'varshavishwakarma30@gmail.com', 'varsha', '9833198948'),
(21, 'xyz', 'xyz@gmail.com', '1234567890', '9988768754');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `FeedBack`
--
ALTER TABLE `FeedBack`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Signup`
--
ALTER TABLE `Signup`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `FeedBack`
--
ALTER TABLE `FeedBack`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `Signup`
--
ALTER TABLE `Signup`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
