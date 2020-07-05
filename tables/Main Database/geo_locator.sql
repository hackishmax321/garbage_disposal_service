-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 09:21 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geo_locator`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `Firstname`, `Lastname`, `Gender`, `Email`, `Password`) VALUES
(13, 'kavinda', 'maduranga', 'male', 'kv822@gmail.com', '202cb962ac59075b964b07152d234b70'),
(14, 'kavi', 'maduranga', 'male', 'kv', 'c20ad4d76fe97759aa27a0c99bff6710'),
(15, '', '', '', 'sd', '0ebbae99395d24731d64de9b5ca3e670'),
(16, '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(17, 'd', 's', '', 'mad@gmail.com', '7e0a0209b929d097bd3e8ef30567a5c1'),
(18, 'd', 's', '', 'mad@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(19, 'a', 'a', 'male', 'sd', '0ebbae99395d24731d64de9b5ca3e670'),
(20, 'a', 'a', 'male', 'nm@gmail.com', '202cb962ac59075b964b07152d234b70'),
(21, 'kn', 'a', 'female', 'm@gmail.com', '0ebbae99395d24731d64de9b5ca3e670'),
(22, 'kn', 'a', 'female', 'm@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(23, 'kn', 'a', 'female', 'ma@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `No.` int(6) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `prvilage_level` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='user registration details.';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`No.`, `username`, `password`, `email`, `prvilage_level`) VALUES
(27, 'K. Amaratung', '1234567', 'hackfe@gmail.com', 1),
(28, 'K. A. Amaratung', '12345678', 'hackfe@gmail.com', 1),
(29, 'Ruichie', '0342257187ab', 'hackfe@gmail.com', 1),
(31, 'ADM10345', 'admin123', 'hackishmax321@gmail.com', 4),
(34, 'GCA103545', '0987654321', 'hacgc@nsbm.lk', 3),
(35, 'GCA103675', '123456789', 'hacgcbal@nsbm.lk', 3),
(36, 'GCO120356', '09676453ds', 'hac78@nsbm.lk', 2),
(37, 'GCO130356', '4536457457as45', 'hacg57bal@nsbm.lk', 2),
(38, 'Gamlath', '098765432', 'hackfe@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_comments`
--

CREATE TABLE `user_comments` (
  `commentID` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `source` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_comments`
--

INSERT INTO `user_comments` (`commentID`, `username`, `comment`, `source`) VALUES
(1, 'GCA103675', 'Great Job!', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_passedgeo`
--

CREATE TABLE `user_passedgeo` (
  `locationID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `description` text NOT NULL,
  `locImage` blob,
  `isConfimed` tinyint(1) DEFAULT '0',
  `isCleaned` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='to enter user entered location details.';

--
-- Dumping data for table `user_passedgeo`
--

INSERT INTO `user_passedgeo` (`locationID`, `name`, `latitude`, `longitude`, `description`, `locImage`, `isConfimed`, `isCleaned`) VALUES
(1, 'Junction BE', 6.828445430757804, 80.03389741821286, 'Smells So Hard. Gross. Need a back up team or immediate action. ', '', 1, 1),
(2, 'Loc51', 4.4546456546, 66.78798797, 'May I ', NULL, 0, 0),
(3, 'Unknown Loc', 6.852647825372198, 79.9561348144531, 'So much mess.... Need Immediate action... Need community help also.. ', '', 1, 0),
(4, 'Que First', 6.873440451006159, 79.97742082519528, 'Nothing Specail', 0x696d616765732e6a7067, 0, 0),
(5, 'Lave  Street', 6.864407700628223, 80.02394105834958, '.... Need Immediate action... Need community help also.. ', '', 1, 0),
(6, 'Locade', 6.8385015041871595, 80.02291109008786, '', '', 1, 0),
(7, 'Gantin Town', 6.882643454093553, 79.97209932250973, 'Smells So Hard. Gross. Need a back up team or immediate action..', 0x64636570796d352d32326266366132372d633066382d343638312d393536362d6164646265303738323134662e706e67, 0, 0),
(8, 'RTY Industries', 6.862362525789855, 79.9703827087402, 'Industrial waste. Highly polluted...', 0x31343932353337395f313830323630323336333136373433315f343132343532313330373137333839383537355f6e2e6a7067, 0, 0),
(9, 'MTC backyard', 6.852136519864402, 79.98634721679684, 'Huge . Gross. Couldn\'t travel on road... Even Drive...', '', 1, 0),
(10, 'gtdgdgdgd', 6.819411828650376, 80.06685640258786, '', '', 1, 0),
(11, 'My prototype', 6.846171248437127, 80.04677202148434, 'So much mess.... Need Immediate action... Need community help also.. ', '', 1, 0),
(12, 'Admin loc', 6.879064529637358, 80.01072313232419, '', 0x31343932353337395f313830323630323336333136373433315f343132343532313330373137333839383537355f6e2e6a7067, 0, 0),
(13, 'Dake Hotel', 6.839353704075528, 79.91733934326169, 'Unnecessary water pollution. Wastes are every where. Couldn\'t travel on road... Even Drive...', 0x31343932353337395f313830323630323336333136373433315f343132343532313330373137333839383537355f6e2e6a7067, 0, 0),
(14, 'My prototype', 6.783616638524974, 79.97982408447263, 'Location is strongly polluted', '', 0, 0),
(15, 'Kaelo', 6.837137981204043, 80.08642579956052, '', 0x31343932353337395f313830323630323336333136373433315f343132343532313330373137333839383537355f6e2e6a7067, 0, 0),
(16, 'Merlin Streen', 6.802537285633889, 79.97433092041013, 'Huge . Gross. Couldn\'t travel on road... Even Drive...', 0x31343932353337395f313830323630323336333136373433315f343132343532313330373137333839383537355f6e2e6a7067, 1, 0),
(17, 'Meegoda Junction', 6.807139492586073, 80.13431932373044, 'So much mess.... Need Immediate action... Need community help also.. ', '', 0, 0),
(18, 'fdhfdhd', 6.862532957361976, 79.97690584106442, '', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`No.`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_comments`
--
ALTER TABLE `user_comments`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `user_passedgeo`
--
ALTER TABLE `user_passedgeo`
  ADD PRIMARY KEY (`locationID`),
  ADD UNIQUE KEY `latitude` (`latitude`,`longitude`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `No.` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user_comments`
--
ALTER TABLE `user_comments`
  MODIFY `commentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_passedgeo`
--
ALTER TABLE `user_passedgeo`
  MODIFY `locationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
