-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 02:54 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vis`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE IF NOT EXISTS `customer_details` (
`id` int(10) unsigned NOT NULL,
  `plaque` varchar(15) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `id_num` varchar(200) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `province` varchar(25) NOT NULL,
  `district` varchar(25) NOT NULL,
  `sector` varchar(25) NOT NULL,
  `vim` varchar(25) NOT NULL,
  `category` varchar(25) NOT NULL,
  `model` varchar(25) NOT NULL,
  `mnumber` varchar(25) NOT NULL,
  `fnumber` varchar(25) NOT NULL,
  `myear` varchar(10) NOT NULL,
  `byear` varchar(15) NOT NULL,
  `revenue` varchar(25) NOT NULL,
  `insurance` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`id`, `plaque`, `customer_name`, `id_num`, `tel`, `province`, `district`, `sector`, `vim`, `category`, `model`, `mnumber`, `fnumber`, `myear`, `byear`, `revenue`, `insurance`) VALUES
(23, 'RAB204E', 'IRADUKUNDA Michelle', '0_t5QNuFB56DY2JiJj.jpg', '+250780271726', 'kigali', '', 'kanombe', '5674674', 'Car', 'MO567', 'MOB XBOX3', '56TYU', '2006', '2018', '16adc8e30c21923e8388f7a02', '55e5faa3a59df.jpg'),
(25, 'NKU994', 'muneza clement', 'TALLY TSHIRT.jpg', '+250787014956', 'kigali', 'Gasabo', 'kimironko', 'CHR9941', 'Car', 'RAD6578', 'TYT2020', 'RTV567', '2007', '2018', 'Dudu Butar 20170810_11475', 'IMG_20170924_171702.jpg'),
(26, 'RAD500', 'NTWARI REVERIEN', 'WIN_20180507_07_27_25_Pro.jpg', '+250787003498', 'south', 'Huye', 'tumba', 'JPW200', 'Car', 'RAD100', 'TYT500', 'WER500', '2015', '2018', 'WIN_20180507_07_27_25_Pro', 'WIN_20180507_07_27_25_Pro'),
(27, 'RAD994', 'NKUBITO Christian', 'IMG-20171122-WA0040.jpg', '+250787014956', 'south', 'Gisagara', 'save', 'TYTREW', 'Car', 'RADEty', 'RADwe', 'TYRSDF', '2011', '2013', 'IMG-20171122-WA0040.jpg', 'IMG-20171122-WA0040.jpg'),
(28, 'RAB1004', 'HABIMANA Jean de Dieu', '216260078 HABIMANA Jean de Dieu.jpg', '+250780271726', 'kigali', 'Kicukiro', 'kanombe', 'MNOT90', 'Car', 'MOD23E', 'MOTO23', 'ODFTR3', '2005', '2018', 'IMG_20180226_162425.jpg', '0134-.jpg'),
(29, 'RAC515F', 'RUDAHARISHEMA Emmanuel', 'BASKETBALL KANIVO - Was design by WAKA Design 2018.jpg', '+250781945695', 'kigali', 'Gasabo', 'kanombe', 'MNOT90', 'Car', 'MOD23E', 'RADwe', 'TYRSDF', '2003', '2017', 'backlogo png.png', 'backlogo png.png');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
`id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `Name`, `email`, `content`) VALUES
(2, 'Fiacre', 'mrbrave.rw@gmail.com', 'Thanks'),
(32, '', '', ''),
(31, '', '', ''),
(30, '', '', ''),
(29, '', '', ''),
(28, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `messagein`
--

CREATE TABLE IF NOT EXISTS `messagein` (
`Id` int(11) NOT NULL,
  `SendTime` datetime DEFAULT NULL,
  `ReceiveTime` datetime DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `SMSC` varchar(80) DEFAULT NULL,
  `MessageText` text,
  `MessageType` varchar(80) DEFAULT NULL,
  `MessageParts` int(11) DEFAULT NULL,
  `MessagePDU` text,
  `Gateway` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL,
  `Read` varchar(30) NOT NULL DEFAULT 'No',
  `Sec_read` varchar(30) NOT NULL DEFAULT 'No',
  `Cell_read` varchar(30) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messagein`
--

INSERT INTO `messagein` (`Id`, `SendTime`, `ReceiveTime`, `MessageFrom`, `MessageTo`, `SMSC`, `MessageText`, `MessageType`, `MessageParts`, `MessagePDU`, `Gateway`, `UserId`, `Read`, `Sec_read`, `Cell_read`) VALUES
(1, '2018-07-12 12:36:35', NULL, '+250786441086', '+250784055418', NULL, 'UMUTE TMBV002 Uyu munsi mu mudugudu wacu habayemo umutekano muke kubera abashumba barwanye bapfa umukobwa, arko twabikemuye ubu ni amahoro.', NULL, NULL, NULL, NULL, NULL, 'No', 'No', 'No'),
(2, '2018-07-12 12:40:31', NULL, '+250786441086', '+250784055418', NULL, 'UMUTE TMBV002 Uyu munsi umudugudu wiriwe utuje ntakibazo cyavutse, usibye imvura yangiye imyaka bidakabije', NULL, NULL, NULL, NULL, NULL, 'No', 'No', 'No'),
(3, '2018-07-13 08:24:01', NULL, '+250787014956', '+250784055418', NULL, 'UMUTE TMBV001 nibwe imodoka.', NULL, NULL, NULL, NULL, NULL, 'No', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE IF NOT EXISTS `police` (
`userID` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPass` varchar(100) NOT NULL,
  `userStatus` enum('Y','N') NOT NULL,
  `tokenCode` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`userID`, `userName`, `userEmail`, `userPass`, `userStatus`, `tokenCode`) VALUES
(1, 'Police', 'police@rnp.rw', 'c605246aaec5f39e388f039a1e76e31c', 'Y', '4ad96752543433fbc662b8fb621dd54f');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
`id` int(11) NOT NULL,
  `plaque` varchar(15) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `district` varchar(30) NOT NULL,
  `sector` varchar(20) NOT NULL,
  `vim` varchar(30) NOT NULL,
  `category` varchar(50) NOT NULL,
  `model` varchar(25) NOT NULL,
  `mnumber` varchar(25) NOT NULL,
  `fnumber` varchar(40) NOT NULL,
  `myear` varchar(35) NOT NULL,
  `byear` varchar(23) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `rdate` datetime NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Not Responded',
  `seen_status` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `plaque`, `customer_name`, `tel`, `province`, `district`, `sector`, `vim`, `category`, `model`, `mnumber`, `fnumber`, `myear`, `byear`, `msg`, `rdate`, `status`, `seen_status`) VALUES
(4, 'RAB204E', 'IRADUKUNDA Michelle', '+250787674375', 'kigali', 'kanombe', 'kanombe', '5674674', 'Car', 'MO567', 'MOB XBOX3', '', '2006', '2018', 'imodoka twyifatiye i huye', '0000-00-00 00:00:00', 'Yes', 4),
(7, 'RAA012K', 'NKUBITO Christian', '+250787014956', 'south', 'Huye', 'Tumba', 'FR250H', 'Car', 'TOYOTA', 'FTRS5210HT', 'HYFS512H', '2008', '2017', 'yamodoka narongeye ndayibura nukuri', '2018-07-02 16:42:56', 'Notify', 2),
(13, 'NKU994', 'muneza clement', '+250726107994', 'kigali', 'Gasabo', 'kimironko', 'CHR9941', 'Car', 'RAD6578', 'TYT2020', 'RTV567', '2007', '2018', 'imodoka yabonetse wayisanga kuri station ya ngoma', '2018-07-12 12:48:32', 'Yes', 4),
(14, 'RAD500', 'NTWARI REVERIEN', '+250787003498', 'south', 'Huye', 'tumba', 'JPW200', 'Car', 'RAD100', 'TYT500', 'WER500', '2015', '2018', 'gyugiop][piufds;?":LKfcghijiijjlok.', '2018-07-12 14:11:06', 'Bingo', 3),
(15, 'RAB204E', 'IRADUKUNDA Michelle', '+250780271726', 'kigali', '', 'kanombe', '5674674', 'Car', 'MO567', 'MOB XBOX3', '56TYU', '2006', '2018', 'Desole nabuze imodoka yanjye', '2018-07-14 14:29:57', 'Responded', 1),
(16, 'RAD500', 'NTWARI REVERIEN', '+250787003498', 'south', 'Huye', 'tumba', 'JPW200', 'Car', 'RAD100', 'TYT500', 'WER500', '2015', '2018', 'Hello', '2018-07-14 15:07:12', 'Responded', 1),
(17, 'RAD500', 'NTWARI REVERIEN', '+250787003498', 'south', 'Huye', 'tumba', 'JPW200', 'Car', 'RAD100', 'TYT500', 'WER500', '2015', '2018', 'Uyumusoreyabuze imodoka ye 222', '2018-07-14 15:10:41', 'Responded', 1),
(18, 'RAD500', 'NTWARI REVERIEN', '+250787003498', 'south', 'Huye', 'tumba', 'JPW200', 'Car', 'RAD100', 'TYT500', 'WER500', '2015', '2018', 'SEDFGHJKL;;LKGHDSFGHJKL;;KJGFDXBJL;;JH', '2018-07-14 15:19:31', 'Responded', 1),
(19, 'RAB204E', 'IRADUKUNDA Michelle', '+250780271726', 'kigali', '', 'kanombe', '5674674', 'Car', 'MO567', 'MOB XBOX3', '56TYU', '2006', '2018', 'imoka yabonetse', '2018-07-14 17:38:25', 'Yes', 4),
(20, 'RAB204E', 'IRADUKUNDA Michelle', '+250787014956', 'kigali', '', 'kanombe', '5674674', 'Car', 'MO567', 'MOB XBOX3', '56TYU', '2006', '2018', 'ikibazo cyawe tugiye kugikurikirana', '2018-07-14 17:50:53', 'Notify', 2),
(21, 'RAD994', 'nkubito christian', '+250726107994', 'south', 'Gisagara', 'save', 'TYTREW', 'Car', 'RADEty', 'RADwe', 'TYRSDF', '2011', '2013', 'MUMPFASHE NABUZE IMODOKA PLAQUE RAD994', '2018-07-15 03:30:02', 'Responded', 1),
(22, 'RAB1004', 'HABIMANA Jean de Dieu', '+250780271726', 'kigali', 'Kicukiro', 'kanombe', 'MNOT90', 'Car', 'MOD23E', 'MOTO23', 'ODFTR3', '2005', '2018', 'Hello you Car is here', '2018-07-16 04:06:55', 'Yes', 4),
(23, 'RAB204E', 'IRADUKUNDA Michelle', '+250780271726', 'kigali', '', 'kanombe', '5674674', 'Car', 'MO567', 'MOB XBOX3', '56TYU', '2006', '2018', 'Hello, Sir This beautfull lady she loose her pretty car try to found it, Have nice day', '2018-07-16 23:02:23', 'Not Responded', 0),
(24, 'RAB204E', 'IRADUKUNDA Michelle', '+250780271726', 'kigali', '', 'kanombe', '5674674', 'Car', 'MO567', 'MOB XBOX3', '56TYU', '2006', '2018', 'Hello', '2018-07-16 23:46:20', 'Responded', 1),
(25, 'RAC515F', 'RUDAHARISHEMA Emmanuel', '+250781945695', 'kigali', 'Gasabo', 'kanombe', 'MNOT90', 'Car', 'MOD23E', 'RADwe', 'TYRSDF', '2003', '2017', 'Hello', '2018-07-18 04:52:53', 'Notify', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE IF NOT EXISTS `sms` (
  `id` int(5) NOT NULL,
  `receiver` int(13) NOT NULL,
  `message` varchar(1500) NOT NULL,
  `sender` varchar(13) NOT NULL,
  `insent` int(1) NOT NULL DEFAULT '0',
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
`userID` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPass` varchar(100) NOT NULL,
  `userStatus` enum('Y','N') NOT NULL,
  `province` varchar(15) NOT NULL DEFAULT 'a'
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userID`, `userName`, `userEmail`, `userPass`, `userStatus`, `province`) VALUES
(1, 'NKUBITO Christian', 'visys2018@gmail.com', 'c605246aaec5f39e388f039a1e76e31c', 'Y', ''),
(7, 'philos', 'jellywestphiloskigali@gmail.com', 'eb6c8e2036c22ffa59f6fac1471d3054', 'Y', ''),
(8, 'rnp', 'rnp@rwanda.rw', 'a4a6e0496763dc009f875234052384f8', 'Y', ''),
(9, 'Police RWANDA', 'sagahutugerard11@gmail.com', '4c318dad8a8c11580f8edece177f1d2c', 'Y', ''),
(10, 'Kigali Traffic Police', 'sagahutugerard@gmail.com', '7c116ff7719dad10be0a5263590108e4', 'Y', 'kigali'),
(11, 'South Traffic Police', 'southpolice@gmail.com', '63b1220f611b7b05d0b8ecfe173ecb5c', 'Y', 'south'),
(12, 'North Traffic Police', 'northpolice@gmail.com', 'a4a2da6ec4604b45a023cefe2f1b4c6a', 'Y', 'north'),
(13, 'East Traffic Police', 'eastpolice@gmail.com', '977d0ff6446709e10d76013ccdeb4769', 'Y', 'east'),
(14, 'West Traffic Police', 'westpolice@gmail.com', 'b18af23211ae588480d123dcc3760f7c', 'Y', 'west'),
(15, 'TESTING', 'test@gmail.com', 'baa73e111470d3e17433a8deda476da5', 'Y', 'kigali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messagein`
--
ALTER TABLE `messagein`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
 ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
 ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `messagein`
--
ALTER TABLE `messagein`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `police`
--
ALTER TABLE `police`
MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
