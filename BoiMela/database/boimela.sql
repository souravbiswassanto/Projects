-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2019 at 06:50 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boimela`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Division` varchar(100) NOT NULL,
  `Image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `Name`, `Email`, `Phone`, `Password`, `Division`, `Image`) VALUES
(6, 'à¦«à¦¾à§Ÿà¦œà§à¦² à¦¹à¦•', 'faizul.cse4.bu@gmail.com', '01783311066', '1234', 'Barisal', 'profilepic/89b4b86912.jpg'),
(7, 'HM Faizul', 'hmfaizul03@gmail.com', '01846791770', '1234', 'Barisal', 'profilepic/a7783c6046.jpg'),
(8, 'jafor', 'jafor@gmail.com', '01783311066', '1234', 'Barisal', NULL),
(9, 'Sourav', 'sourav.cse4.bu@gmail.com', '01728692398', '1234', 'Barisal', NULL),
(10, 'Sohag', 'sohag.cse4.bu@gmail.com', '01789384161', '1234', 'Barisal', 'profilepic/994b97b4f2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(11) NOT NULL,
  `Book_Name` varchar(100) NOT NULL,
  `modifiedBook_Name` varchar(100) NOT NULL,
  `Authors_Name` varchar(100) NOT NULL,
  `Catagory` varchar(100) NOT NULL,
  `Books_Condition` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Division` varchar(100) NOT NULL,
  `Details` varchar(1000) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`id`, `Book_Name`, `modifiedBook_Name`, `Authors_Name`, `Catagory`, `Books_Condition`, `Name`, `Email`, `Phone`, `Location`, `Division`, `Details`, `Price`, `Image`) VALUES
(1, 'Graph Algorithms', 'graphalgorithms', 'Shafaet Ashraf', 'Engineering', 'Used', 'à¦«à¦¾à§Ÿà¦œà§à¦² à¦¹à¦•', 'faizul.cse4.bu@gmail.com', '01783311066', 'Rupatoli Housing', 'Barisal', 'this is a book i have used only for 1 month.', '80', 'uploads/2b6dd27de6.png'),
(2, 'à¦Ÿà¦¾à¦°à§à¦•à¦¿ à¦ªà¦¾à¦²à¦¨', 'à¦ÿà¦¾à¦°à§à¦•à¦¿à¦ªà¦¾à¦²à¦¨', 'à¦¶à¦°à§€à¦« à¦®à§‹. à¦®à¦¿à¦°à¦¾à¦œ à¦¹à§‹à¦¸à¦¾à¦‡à¦¨', 'Agriculture', 'Used', 'à¦«à¦¾à§Ÿà¦œà§à¦² à¦¹à¦•', 'faizul.cse4.bu@gmail.com', '01783311066', 'University of Barisal', 'Barisal', 'I have already read it. So i want to sell it.', '100', 'uploads/531bcdb426.png'),
(3, 'à¦•à§ƒà¦·à¦¿ à¦¬à¦¾à¦œà§‡à¦Ÿ à¦•à§ƒà¦·à¦•à§‡à¦° à¦¬à¦¾à¦œà§‡à¦Ÿ', 'à¦•à§ƒà¦·à¦¿à¦¬à¦¾à¦œà§‡à¦ÿà¦•à§ƒà¦·à¦•à§‡à¦°à¦¬à¦¾à¦œà§‡à¦ÿ', 'à¦¶à¦¾à¦‡à¦– à¦¸à¦¿à¦°à¦¾à¦œ', 'Agriculture', 'Used', 'à¦«à¦¾à§Ÿà¦œà§à¦² à¦¹à¦•', 'faizul.cse4.bu@gmail.com', '01783311066', 'à¦†à¦®à¦¤à¦²à¦¾', 'Barisal', 'I want to sell it', '130', 'uploads/6b1b0a1f73.png'),
(6, 'Company and Securities Law', 'companyandsecuritieslaw', 'à¦¡. à¦à¦®. à¦œà¦¹à¦¿à¦° ', 'Law', 'Used', 'Sourav', 'sourav.cse4.bu@gmail.com', '01728692398', 'à¦¸à¦¦à¦° à¦°à§‹à¦¡', 'Barisal', 'I want to sell it', '100', 'uploads/0b5bba07ef.png'),
(10, 'Introduction to Algorithm', 'introductiontoalgorithm', 'Thomas H. Coremen', 'Engineering', 'Used', 'Sohag', 'sohag.cse4.bu@gmail.com', '01789384161', 'Rupatoli Housing', 'Barisal', '', '100', 'uploads/d13628715e.jpg'),
(11, 'Graph Algorithms', 'graphalgorithms', 'Shafaet Ashraf', 'Engineering', 'Used', 'Sohag', 'sohag.cse4.bu@gmail.com', '01789384161', 'à¦¸à¦¦à¦° à¦°à§‹à¦¡', 'Barisal', '', '50', 'uploads/a5520d467f.png'),
(12, 'Java The Complete Reference', 'javathecompletereference', 'Herbert Schildt', 'Engineering', 'Used', 'Sohag', 'sohag.cse4.bu@gmail.com', '01789384161', 'Rupatoli Housing', 'Barisal', '', '100', 'uploads/1d3d483ef6.png'),
(14, 'The Power of Your Subconscious Mind', 'thepowerofyoursubconsciousmind', 'Dr. Joseph Murphy', 'Other', 'Used', 'à¦«à¦¾à§Ÿà¦œà§à¦² à¦¹à¦•', 'faizul.cse4.bu@gmail.com', '01783311066', 'University of Barisal', 'Barisal', '', '100', 'uploads/c57a8d2cc2.png'),
(15, 'Java The Complete Reference', 'javathecompletereference', 'Herbert Schildt', 'Engineering', 'Used', 'à¦«à¦¾à§Ÿà¦œà§à¦² à¦¹à¦•', 'faizul.cse4.bu@gmail.com', '01783311066', 'Rupatoli Housing', 'Barisal', '', '100', 'uploads/15dff24063.png'),
(17, 'à¦¬à¦¿à¦¸à¦¿à¦à¦¸ à¦ªà¦¾à¦Ÿà¦¿à¦—à¦£à¦¿à¦¤ à¦¸à¦®à¦¾à¦§à¦¾à¦¨', 'à¦¬à¦¿à¦¸à¦¿à¦à¦¸à¦ªà¦¾à¦ÿà¦¿à¦—à¦£à¦¿à¦¤à¦¸à¦®à¦¾à¦§à¦¾à¦¨', 'à¦¦à§‡à¦¬à¦¬à§à¦°à¦¤ à¦šà¦¾à¦•à§€', 'Job Preparation', 'Used', 'Sourav', 'sourav.cse4.bu@gmail.com', '01728692398', 'University of Barisal', 'Barisal', '', '100', 'uploads/ec75a44fed.png'),
(18, 'Measurement', 'measurement', 'Paul Lockhart', 'Mathematics', 'Used', 'Sourav', 'sourav.cse4.bu@gmail.com', '01728692398', 'University of Barisal', 'Barisal', '', '100', 'uploads/40b91b6275.png'),
(19, 'à¦¬à¦¾à¦‚à¦²à¦¾ à¦¸à¦¾à¦¹à¦¿à¦¤à§à¦¯à§‡à¦° à¦‡à¦¤à¦¿à¦¹à¦¾à¦¸', 'à¦¬à¦¾à¦‚à¦²à¦¾à¦¸à¦¾à¦¹à¦¿à¦¤à§à¦¯à§‡à¦°à¦‡à¦¤à¦¿à¦¹à¦¾à¦¸', 'à¦®à¦¾à¦¹à¦¬à§à¦¬à§à¦² à¦†à¦²à¦®', 'Job Preparation', 'Used', 'Sohag', 'sohag.cse4.bu@gmail.com', '01789384161', 'University of Barisal', 'Barisal', '', '100', 'uploads/6ff58b987f.png'),
(20, 'à¦¸à§à¦¬à¦¾à¦¸à§à¦¥à§à¦¯à§‡à¦° à¦Ÿà§à¦•à¦¿à¦Ÿà¦¾à¦•à¦¿ ', 'à¦¸à§à¦¬à¦¾à¦¸à§à¦¥à§à¦¯à§‡à¦°à¦ÿà§à¦•à¦¿à¦ÿà¦¾à¦•à¦¿', 'à¦¡à¦¾ à¦°à§à¦®à¦¾à¦¨à¦¾ à¦†à¦¹à¦®à¦¦', 'Medical Science', 'Used', 'Sohag', 'sohag.cse4.bu@gmail.com', '01789384161', 'University of Barisal', 'Barisal', '', '100', 'uploads/d2d8622933.png'),
(21, 'Introduction to Algorithm', 'introductiontoalgorithm', 'Thomas H. Coremen', 'Engineering', 'New', 'à¦«à¦¾à§Ÿà¦œà§à¦² à¦¹à¦•', 'faizul.cse4.bu@gmail.com', '01783311066', 'Rupatoli Housing', 'Barisal', '', '100', 'uploads/7a57212e2d.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
