-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 12:49 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `h2go`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` float NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `productPrice`, `images`) VALUES
(2, 'Small Bottle of Water', 2.49, 'bottle-s.jpg'),
(3, 'Medium Bottle of Water', 4.99, 'bottle-m.jpg'),
(4, 'Large Bottle of Water', 14.99, 'bottle-l.jpg'),
(5, 'Small Packet of Water', 0.49, 'packet-s.jpg'),
(6, 'Medium Packet of Water', 1.99, 'packet-m.jpg'),
(7, 'Small Jar of Water', 1.99, 'jar-s.jpg'),
(8, 'Medium Jar of Water', 4.99, 'jar-m.jpg'),
(9, 'Large Jar of Water', 19.99, 'jar-l.jpg'),
(10, 'Small Flask of Water', 3.99, 'flask-s.jpg'),
(11, 'Medium Flask of Water', 4.99, 'flask-m.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `userAddress` text NOT NULL,
  `eMail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `userAddress`, `eMail`, `password`, `timestamp`) VALUES
(2, 'Brittne', 'Yewdell', '1 Monument Lane', 'byewdell0@naver.co.nz', '12345', '2018-07-26 09:32:28'),
(3, 'Ban', 'McNiff', '949 Esch Way', 'bmcniff1@ning.com', 'KHT0lG', '2018-06-08 10:22:34'),
(4, 'Hammad', 'Pollendine', '92 Anthes Street', 'hpollendine2@marketwatch.com', 'y3gMs9k4Y', '2018-06-08 00:45:21'),
(5, 'Joete', 'Merwe', '00 Fairfield Lane', 'jmerwe3@behance.net', 'IDcQAnuJnGd', '2018-06-08 11:29:30'),
(6, 'Gussie', 'Kibbe', '052 Scofield Way', 'gkibbe4@java.com', 'JdXTmL42', '2018-06-07 17:35:07'),
(7, 'Moishe', 'Hamshere', '5 Talisman Drive', 'mhamshere5@desdev.cn', 'm3Fyn2d', '2018-06-08 00:12:21'),
(8, 'Elspeth', 'Herrema', '181 Sunnyside Crossing', 'eherrema6@sciencedirect.com', 'JvfR1PlfrK', '2018-06-07 17:12:21'),
(9, 'Neda', 'Jickells', '277 Roth Road', 'njickells7@bbb.org', 'FP17tZ', '2018-06-07 23:34:28'),
(10, 'Sergio', 'McCurrie', '99 Delladonna Plaza', 'smccurrie8@engadget.com', 'deLhZuri6', '2018-06-08 09:13:25'),
(11, 'Corny', 'Lemon', '102 Nelson Crossing', 'clemon9@mysql.com', 'v5awdgryu', '2018-06-08 05:13:46'),
(12, 'Carri', 'Manifield', '02076 Michigan Hill', 'cmanifielda@admin.ch', 'pKMKmZom', '2018-06-08 04:27:15'),
(13, 'Caldwell', 'Arrow', '16 Village Green Avenue', 'carrowb@jimdo.com', 'P1z1vjUZR', '2018-06-08 11:54:22'),
(14, 'Janey', 'Sweatland', '5358 Union Alley', 'jsweatlandc@un.org', '7h4Sn3I7', '2018-06-07 13:16:47'),
(15, 'Kattie', 'Quenby', '3 Susan Hill', 'kquenbyd@geocities.com', 'BOv1pi3', '2018-06-08 02:47:47'),
(16, 'Nathanil', 'Challes', '4750 Nobel Circle', 'nchallese@cdbaby.com', 'dVnlGg', '2018-06-08 02:23:11'),
(17, 'Wait', 'Haylock', '164 Carioca Pass', 'whaylockf@usa.gov', 'fCNb1aqtBbrj', '2018-06-08 04:38:14'),
(18, 'Leese', 'Dudgeon', '8 Park Meadow Alley', 'ldudgeong@fastcompany.com', 'OBXSEh', '2018-06-07 19:43:14'),
(19, 'Hale', 'Stollmeyer', '332 Mayfield Hill', 'hstollmeyerh@stumbleupon.com', 'GHOScx', '2018-06-07 13:39:34'),
(20, 'Imelda', 'Calendar', '880 Johnson Alley', 'icalendari@ucoz.com', 'WskiPeptG2Nz', '2018-06-07 18:28:23'),
(21, 'Winston', 'Rogers', '63 Burning Wood Circle', 'wrogersj@globo.com', 'spRTVwDCq', '2018-06-08 09:53:16'),
(22, 'Dione', 'Drage', '5005 Green Ridge Point', 'ddragek@imgur.com', 'QSm0AH', '2018-06-07 17:58:50'),
(23, 'Ricky', 'Fieldsend', '38112 Merchant Hill', 'rfieldsendl@hatena.ne.jp', 'HnaoUli6Ky', '2018-06-08 05:00:56'),
(24, 'Edvard', 'Greenwood', '4 Farwell Hill', 'egreenwoodm@scribd.com', 'mZ8DXn', '2018-06-08 04:26:27'),
(25, 'Cherida', 'Nelson', '6 Aberg Lane', 'cnelsonn@craigslist.org', 'sJZW1qB', '2018-06-08 10:13:45'),
(26, 'Kort', 'Child', '95394 North Park', 'kchildo@barnesandnoble.com', 'uaR86BLAvIL0', '2018-06-07 12:14:23'),
(27, 'Minor', 'Liccardi', '114 Coleman Way', 'mliccardip@vistaprint.com', 'TY5NxMTUiRm6', '2018-06-07 16:25:15'),
(28, 'Joann', 'Keighley', '011 Hoepker Circle', 'jkeighleyq@ihg.com', '3AAL7k', '2018-06-07 21:46:51'),
(29, 'Kirbie', 'Barrett', '22 Miller Hill', 'kbarrettr@comcast.net', 'oMEeojZ5hew', '2018-06-07 15:13:52'),
(30, 'Flor', 'Sarrell', '0364 Prairie Rose Court', 'fsarrells@tiny.cc', 'a7GKnmOuwcPx', '2018-06-07 15:13:29'),
(31, 'Alleen', 'Harrington', '3323 Columbus Drive', 'aharringtont@nydailynews.com', 'LPMBrE', '2018-06-08 08:17:12'),
(32, 'Becka', 'Kubala', '68166 Westerfield Road', 'bkubalau@bloglovin.com', 'Gv3tKnNQu', '2018-06-07 18:19:17'),
(33, 'Guillermo', 'Dargie', '3942 Esch Avenue', 'gdargiev@wordpress.com', '8EoI9sEYW1f', '2018-06-07 19:40:37'),
(34, 'Lynea', 'Attoe', '94 Union Park', 'lattoew@icio.us', 'Vq9KKGG', '2018-06-07 17:39:40'),
(35, 'Darcy', 'Luter', '250 Eastlawn Way', 'dluterx@scribd.com', '0kX4yGJ', '2018-06-08 07:00:50'),
(36, 'Pat', 'Merrison', '82836 Algoma Pass', 'pmerrisony@aboutads.info', 'by4R6XcTszX', '2018-06-08 05:59:30'),
(37, 'Nadia', 'Vaneschi', '4056 Forest Run Circle', 'nvaneschiz@virginia.edu', 'IIB0tRFAVFol', '2018-06-07 23:24:49'),
(38, 'Darnall', 'Delue', '19474 Vernon Center', 'ddelue10@artisteer.com', 'zfdvAIrMd8', '2018-06-08 04:32:18'),
(39, 'Hammad', 'Wheeliker', '86 Corscot Plaza', 'hwheeliker11@e-recht24.de', 'izCpTaJu', '2018-06-08 07:04:39'),
(40, 'Bryn', 'Samways', '8 Rusk Plaza', 'bsamways12@auda.org.au', 'aj7FFE', '2018-06-08 09:27:48'),
(41, 'Winny', 'Brisson', '80 Parkside Drive', 'wbrisson13@hexun.com', 'rfOqzov', '2018-06-08 04:54:54'),
(42, 'Carson', 'Obeney', '20 Cottonwood Alley', 'cobeney14@aboutads.info', 'E9L2BNw', '2018-06-07 14:51:08'),
(43, 'Noland', 'Peverell', '2 Chive Street', 'npeverell15@google.com', 'fLmJrT6Iiq', '2018-06-08 04:34:47'),
(44, 'Casey', 'Deluce', '1815 Haas Alley', 'cdeluce16@fc2.com', 'XfqGRp', '2018-06-08 05:42:19'),
(45, 'Bellina', 'Maevela', '1473 Lyons Park', 'bmaevela17@lulu.com', 'cQX0kUENMw', '2018-06-08 04:45:56'),
(46, 'Raymond', 'Digginson', '24598 Cascade Alley', 'rdigginson18@rediff.com', 'JHRM8cAoMr', '2018-06-07 15:32:03'),
(47, 'Opalina', 'Faint', '05382 Mallard Crossing', 'ofaint19@sbwire.com', 'T9am47pun7z', '2018-06-07 23:45:38'),
(48, 'Dyane', 'Carette', '23700 Grover Street', 'dcarette1a@barnesandnoble.com', '2WnngQh', '2018-06-08 00:58:08'),
(49, 'Andra', 'Mallord', '87560 Hudson Point', 'amallord1b@ow.ly', 'XXUtDNn6gv', '2018-06-08 06:39:37'),
(50, 'Bernardine', 'Bolzen', '3 Dexter Place', 'bbolzen1c@nifty.com', 'qi57NlXQ', '2018-06-07 14:58:04'),
(51, 'Denise', 'Antosch', '66520 Transport Terrace', 'dantosch1d@mit.edu', '1lx7ufKIq', '2018-06-07 12:29:06'),
(59, 'Danila', 'Bublik', 'Cool st', 'cool@email.com', 'dan', '2018-07-26 07:17:21'),
(60, 'dan', 'dan', 'dan', 'dan@dan.com', 'dan', '2018-06-29 03:40:43'),
(61, 'Jacob', 'Keelty', '4 Geraldo Place, Russley', 'jacobkeelty@outlook.co.nz', 'password', '2018-06-30 05:54:38'),
(62, 'Danny', 'Cool', 'Is', 'danny@email.com', 'dan', '2018-07-06 03:31:36'),
(63, 'Jackie', 'Chen', '12a Barclay St', 'jcaki@gmail.com', '12345', '2018-07-22 23:21:42'),
(64, 'Cool', 'Cool', 'Cool', 'cooll@email.com', 'cool', '2018-07-26 07:51:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
