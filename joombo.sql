-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2016 at 04:39 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joombo`
--

-- --------------------------------------------------------

--
-- Table structure for table `j_users`
--

CREATE TABLE `j_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_login` varchar(60) NOT NULL,
  `user_pass` varchar(128) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_registered` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `j_users`
--

INSERT INTO `j_users` (`ID`, `user_name`, `user_login`, `user_pass`, `user_email`, `user_registered`) VALUES
(6, 'hafiz', 'hafiz', 'c8e1d0662e17a50e2ec1c675d67be717a2271305b46b92f4dce6685c2d47bfc2bb04fe6ee175195d87306e19006552a4438b9cef5ed3cb58909c771b6238baf5', 'hafiz', 1454938520);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` varchar(10) NOT NULL,
  `movie_name` varchar(50) DEFAULT NULL,
  `movie_genre` varchar(50) DEFAULT NULL,
  `movie_link` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `movie_genre`, `movie_link`) VALUES
('M001', 'Hitman', 'action', 'http://dayt.se/forum/showthread.php?7002-Hitman-Agent-47-(2015)-1080p-BluRay-Download-Online-Streaming-Subtitles'),
('M002', 'Paranormal Activity 5', 'horror', 'http://dayt.se/forum/showthread.php?7147-Paranormal-Activity-The-Ghost-Dimension-(2015)-1080p-WEBRip-Download-Streaming'),
('M003', 'Ex Machina', 'Sci-fi', 'http://dayt.se/forum/showthread.php?6046-Ex-Machina-(2015)-720p-BluRay-Download-Online-Streaming-Subtitles'),
('M004', 'Ted 2', 'comedy', 'http://dayt.se/forum/showthread.php?7003-Ted-2-(2015)-1080p-BluRay-Download-Online-Streaming-Subtitles'),
('M005', 'Maze Runner', 'action', 'http://dayt.se/forum/showthread.php?7018-Maze-Runner-The-Scorch-Trials-(2015)-1080p-BluRay-Download-Streaming-Subtitles'),
('M006', 'The interview', 'Comedy', 'http://dayt.se/forum/showthread.php?5368-The-Interview-(2014)-1080p-WEBRip-Download-Online-Streaming-Subtitles');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `music_id` varchar(10) NOT NULL,
  `music_title` varchar(20) NOT NULL,
  `music_artist` varchar(20) NOT NULL,
  `music_genre` varchar(20) NOT NULL,
  `music_link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`music_id`, `music_title`, `music_artist`, `music_genre`, `music_link`) VALUES
('S001', 'Love Yourself', 'Justin Bieber', 'Pop', ''),
('S002', 'Big Girls Cry', 'Sia', 'Soul', ''),
('S003', 'Fly Me To The Moon', 'Frank Sinatra', 'Jazz', ''),
('S004', 'Let Her Go', 'Passenger', 'Soul', ''),
('S005', 'Back to Black', 'Amy Winehouse', 'Jazz', ''),
('S006', 'The Scientist', 'Coldplay', 'Rock', ''),
('S007', 'Hotline Bling', 'Drake', 'HipHop', ''),
('S008', 'Lost Stars', 'Adam Levine', 'Rock', ''),
('S009', 'Look At Me Now', 'Chris Brown ', 'HipHop', ''),
('S010', 'Work ', 'Rihanna', 'Pop', '');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int(11) NOT NULL,
  `movie_id` varchar(10) DEFAULT NULL,
  `music_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `movie_id`, `music_id`, `user_id`, `dateTime`) VALUES
(19, '', 'S003', '6', '2016-02-09 18:08:38'),
(20, '', 'S003', '6', '2016-02-09 18:08:49'),
(21, '', 'S004', '6', '2016-02-09 18:08:51'),
(22, 'M001', '', '6', '2016-02-09 22:58:26'),
(23, 'M001', '', '6', '2016-02-09 23:05:05'),
(24, 'M001', '', '6', '2016-02-09 23:05:24');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `rent_id` int(11) NOT NULL,
  `movie_id` varchar(10) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `dateTime` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`rent_id`, `movie_id`, `user_id`, `dateTime`) VALUES
(2, 'M005', '6', 1455029896),
(3, 'M006', '6', 1455029914),
(4, 'M006', '6', 1455030239),
(5, 'M001', '6', 1455030245),
(6, 'M001', '6', 1455030248),
(7, 'M001', '6', 1455030302),
(8, 'M001', '6', 1455157556);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `j_users`
--
ALTER TABLE `j_users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`music_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`rent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `j_users`
--
ALTER TABLE `j_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
