-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2016 at 02:29 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

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
(6, 'hafiz', 'hafiz', 'c8e1d0662e17a50e2ec1c675d67be717a2271305b46b92f4dce6685c2d47bfc2bb04fe6ee175195d87306e19006552a4438b9cef5ed3cb58909c771b6238baf5', 'hafiz', 1454938520),
(7, 'qert', 'eedrdrdr', '3e3626a7aef666581a84add3a1613467b00f3320f51af374427789d82d6125aa92a84f5c5a4503e4b869c82d47b16c6c1321b5b177f6b3b84f91570da1c082d6', 'ftv@gmail.com', 1455513933),
(8, 'jshwjshkqw', 'wjsnwjsw', '7e8dcbcebe819950fcd9b0982bdc5bc7a6ccf43dda3587f070f88a38bafe57219987adea6b2bac18ddd5244ff7dbbdaa81437e705611fd153f48008a6c93d3ac', 'jwnwjs', 1455514051),
(9, 'koko', 'kiki', 'fdcc4bb03c4aac206aa8bd59bd34422b745d81cb4426948487c335b94d50c65e8ad2b54e10c695e33dda83004b918fe66ccca1506854395c3fba965cbfbfd1f1', 'hahah', 1455514488),
(10, 'koko', 'kiki', 'fdcc4bb03c4aac206aa8bd59bd34422b745d81cb4426948487c335b94d50c65e8ad2b54e10c695e33dda83004b918fe66ccca1506854395c3fba965cbfbfd1f1', 'hahah', 1455514488),
(11, 'koko', 'asdasd', 'e93a05d5ab6cc8a88d51f7ab2b9b391641e34d7e374a037655c4352fbb068b0f56e8734ae1ce0bc020e2d2fb622aa14a9bb17b544f67074d191dbeeec2b410bd', 'qwewqe', 1455514578),
(12, 'nima saed', 'nima', 'c1d55738040fdc2ff1835edce1f73ffbbe6749e0c39b77270a5df539e726f73c88de44a8acad9abb4716d33ece3718a5835d733e4386abaa3f5ec2259b426c80', 'nima@', 1455515992),
(13, 'Justin Bieber', 'Justin', 'b7c699f3452e674d5ad469167e594a7dd87a4fb6dd9bead9e4de2f47c2bf04f7490ec975ed7882155de918f6a2bff367b454e8615eb8a1740f32ef352c91bb30', 'justin@yahoo.com', 1455517848);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` varchar(10) NOT NULL,
  `movie_name` varchar(50) DEFAULT NULL,
  `movie_genre` varchar(50) DEFAULT NULL,
  `movie_link` varchar(300) DEFAULT NULL,
  `movie_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `movie_genre`, `movie_link`, `movie_image`) VALUES
('M001', 'Hitman', 'Action', 'http://dayt.se/forum/showthread.php?7002-Hitman-Agent-47-(2015)-1080p-BluRay-Download-Online-Streaming-Subtitles', 'images/movie_image/M001.jpg'),
('M002', 'Paranormal Activity 5', 'Horror', 'http://dayt.se/forum/showthread.php?7147-Paranormal-Activity-The-Ghost-Dimension-(2015)-1080p-WEBRip-Download-Streaming', 'images/movie_image/M002.jpg'),
('M003', 'Ex Machina', 'Romance', 'http://dayt.se/forum/showthread.php?6046-Ex-Machina-(2015)-720p-BluRay-Download-Online-Streaming-Subtitles', 'images/movie_image/M003.jpg'),
('M004', 'Ted 2', 'Comedy', 'http://dayt.se/forum/showthread.php?7003-Ted-2-(2015)-1080p-BluRay-Download-Online-Streaming-Subtitles', 'images/movie_image/M004.jpg'),
('M005', 'Maze Runner', 'Action', 'http://dayt.se/forum/showthread.php?7018-Maze-Runner-The-Scorch-Trials-(2015)-1080p-BluRay-Download-Streaming-Subtitles', 'images/movie_image/M005.jpg'),
('M006', 'The interview', 'Comedy', 'http://dayt.se/forum/showthread.php?5368-The-Interview-(2014)-1080p-WEBRip-Download-Online-Streaming-Subtitles', 'images/movie_image/M006.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `music_id` varchar(10) NOT NULL,
  `music_title` varchar(20) NOT NULL,
  `music_artist` varchar(20) NOT NULL,
  `music_genre` varchar(20) NOT NULL,
  `music_link` varchar(500) NOT NULL,
  `music_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`music_id`, `music_title`, `music_artist`, `music_genre`, `music_link`, `music_image`) VALUES
('S001', 'Love Yourself', 'Justin Bieber', 'Pop', '\r\nhttps://soundcloud.com/khamari-barnes/love-yourself-justin-bieber', 'images/music_image/S001.jpg'),
('S002', 'Big Girls Cry', 'Sia', 'Soul', 'https://soundcloud.com/wick-it/sia-elastic-heart-wick-it-remix', 'images/music_image/S002.jpg'),
('S003', 'Fly Me To The Moon', 'Frank Sinatra', 'Jazz', 'https://soundcloud.com/theweeknd/low-life-future-the-weeknd', 'images/music_image/S003.jpg'),
('S004', 'Let Her Go', 'Passenger', 'Soul', '\r\nhttps://soundcloud.com/wizkhalifa/bake-sale-ft-travis-scott', 'images/music_image/S004.jpg'),
('S005', 'Back to Black', 'Amy Winehouse', 'Jazz', 'https://soundcloud.com/fuvkoffjessie/zayn-pillowtalk-cover', 'images/music_image/S005.jpg'),
('S006', 'The Scientist', 'Coldplay', 'Rock', 'https://soundcloud.com/tommyhasarrived/the-scientist-coldplay', 'images/music_image/S006.jpg'),
('S007', 'Hotline Bling', 'Drake', 'HipHop', 'https://soundcloud.com/bigsean-1/whatayear', 'images/music_image/S007.jpg'),
('S008', 'Lost Stars', 'Adam Levine', 'Rock', '\r\nhttps://soundcloud.com/fueled_by_ramen/twenty-one-pilots-stressed-out', 'images/music_image/S008.jpg'),
('S009', 'Look At Me Now', 'Chris Brown ', 'HipHop', 'https://soundcloud.com/kanyewest/nomorepartiesinla', 'images/music_image/S009.jpg'),
('S010', 'Work ', 'Rihanna', 'Pop', '\r\nhttps://soundcloud.com/gracedmusic/hello-adele', 'images/music_image/S010.jpg');

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
(26, '', 'S001', '6', '2016-02-15 00:12:13'),
(27, '', 'S009', '6', '2016-02-15 00:27:05'),
(31, 'M002', '', '6', '2016-02-15 02:14:31'),
(32, 'M005', '', '6', '2016-02-15 02:41:10'),
(34, '', 'S007', '6', '2016-02-15 05:29:22'),
(35, '', 'S010', '6', '2016-02-15 05:29:49'),
(36, 'M001', '', '6', '2016-02-15 05:45:07'),
(37, 'M003', '', '6', '2016-02-15 05:48:41'),
(38, '', 'S002', '6', '2016-02-15 13:53:08'),
(39, '', 'S008', '12', '2016-02-15 14:06:37'),
(40, '', 'S001', '12', '2016-02-15 14:12:14'),
(41, 'M005', '', '12', '2016-02-15 14:16:36'),
(42, 'M001', '', '12', '2016-02-15 14:16:42'),
(43, 'M003', '', '12', '2016-02-15 14:18:25');

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
(9, 'M003', '6', 1455473765),
(10, 'M004', '6', 1455515835),
(11, 'M001', '6', 1455477984),
(12, 'M004', '12', 1455516835);

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
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

