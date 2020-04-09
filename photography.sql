-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2020 at 01:31 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photography`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `pass`) VALUES
('ankit333panchal@gmail.com', '6b7b6a3713a98b969df7ff6920303b98'),
('sunilpanchal123.sp@gmail.com', 'ec54a5f94b2f67292fc0680d45c03957');

-- --------------------------------------------------------

--
-- Table structure for table `kidsimage`
--

CREATE TABLE `kidsimage` (
  `name` int(255) NOT NULL,
  `oname` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kidsimage`
--

INSERT INTO `kidsimage` (`name`, `oname`, `type`) VALUES
(1, 'xhshxs.jpg', 'horizontal'),
(2, 'jnjdeed.jpg', 'horizontal'),
(3, 'ccidd.jpg', 'horizontal'),
(4, 'dcibhff.jpg', 'horizontal'),
(5, 'bdchbdsc.jpg', 'horizontal'),
(6, 'jhdhfhj.jpg', 'horizontal'),
(7, 'dhbhhj.jpg', 'vertical');

-- --------------------------------------------------------

--
-- Table structure for table `modelingimage`
--

CREATE TABLE `modelingimage` (
  `name` int(255) NOT NULL,
  `oname` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modelingimage`
--

INSERT INTO `modelingimage` (`name`, `oname`, `type`) VALUES
(1, 'bdcbjj.jpg', 'vertical'),
(2, 'dedj.jpg', 'vertical'),
(3, 'hdchh.jpg', 'vertical'),
(4, 'njchdsh.jpg', 'vertical'),
(5, 'bdewdjehd.jpg', 'vertical'),
(6, 'nfbehfe.jpg', 'vertical'),
(7, 'dwhj.jpg', 'vertical'),
(8, 'ddwdew.jpg', 'vertical'),
(9, 'jfdfbhj.jpg', 'vertical'),
(10, 'bdewd.jpg', 'vertical'),
(11, '1254.jpg', 'vertical'),
(12, 'hhsjk.jpg', 'vertical'),
(13, 'njdewdfh.jpg', 'vertical'),
(14, 'jdeds.jpg', 'vertical'),
(15, 'wdwdq.jpg', 'vertical'),
(16, 'dcdcwsa.jpg', 'vertical'),
(17, 'dfefefk.jpg', 'vertical'),
(18, 'uryjnd.jpg', 'vertical'),
(19, 'ewnfeehj.jpg', 'vertical'),
(20, 'encfefjehf.jpg', 'vertical'),
(21, 'ewndfehj.jpg', 'horizontal'),
(22, 'ddwefrf.jpg', 'horizontal'),
(23, 'xdwde.jpg', 'horizontal'),
(24, 'bdedhew.jpg', 'horizontal');

-- --------------------------------------------------------

--
-- Table structure for table `preweddingimage`
--

CREATE TABLE `preweddingimage` (
  `name` int(255) NOT NULL,
  `oname` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preweddingimage`
--

INSERT INTO `preweddingimage` (`name`, `oname`, `type`) VALUES
(1, 'couple.jpeg', 'vertical'),
(2, 'jfwrfuirfui.jpeg', 'vertical'),
(3, 'dewdehdh.jpeg', 'vertical'),
(4, 'ewded.jpeg', 'vertical'),
(5, 'efcref.jpeg', 'horizontal'),
(6, 'jcdcj.jpeg', 'horizontal'),
(7, 'edwdew.jpeg', 'horizontal'),
(8, 'eecwe.jpeg', 'horizontal'),
(9, 'wdd.jpeg', 'horizontal'),
(10, 'ddccwc.jpeg', 'horizontal');

-- --------------------------------------------------------

--
-- Table structure for table `weddingimage`
--

CREATE TABLE `weddingimage` (
  `name` int(255) NOT NULL,
  `oname` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weddingimage`
--

INSERT INTO `weddingimage` (`name`, `oname`, `type`) VALUES
(1, 'a.jpg', 'horizontal'),
(2, 'b.jpg', 'horizontal'),
(3, 'c.jpg', 'horizontal'),
(4, 'd.jpg', 'horizontal'),
(5, 'e.jpg', 'horizontal'),
(6, 'f.jpg', 'horizontal'),
(7, 'g.jpg', 'horizontal'),
(8, 'h.jpg', 'horizontal'),
(9, 'i.jpg', 'horizontal'),
(10, 'j.jpg', 'horizontal'),
(11, 'k.jpg', 'horizontal'),
(12, 'l.jpg', 'horizontal'),
(13, 'm.jpg', 'vertical'),
(14, 'n.jpg', 'vertical'),
(15, 'o.jpg', 'vertical'),
(16, 'p.jpg', 'vertical'),
(17, 'q.jpg', 'vertical'),
(18, 'r.jpg', 'vertical'),
(19, 's.jpg', 'vertical'),
(20, 't.jpg', 'vertical');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kidsimage`
--
ALTER TABLE `kidsimage`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `modelingimage`
--
ALTER TABLE `modelingimage`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `preweddingimage`
--
ALTER TABLE `preweddingimage`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `weddingimage`
--
ALTER TABLE `weddingimage`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kidsimage`
--
ALTER TABLE `kidsimage`
  MODIFY `name` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `preweddingimage`
--
ALTER TABLE `preweddingimage`
  MODIFY `name` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `weddingimage`
--
ALTER TABLE `weddingimage`
  MODIFY `name` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
