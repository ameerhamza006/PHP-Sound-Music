-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 11:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sound`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fk_year` varchar(50) NOT NULL,
  `fk_artist` varchar(50) NOT NULL,
  `fk_lang` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `name`, `fk_year`, `fk_artist`, `fk_lang`, `image`) VALUES
(11, 'Badlapurr', '3', '6', '6', 'download.jfif'),
(16, 'Desi Kalakar', '3', '8', '7', '03.png'),
(17, 'Badshah (All In One)', '5', '9', '7', 'badshah-full-album-mp3-songs-300.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `song_type` varchar(50) NOT NULL,
  `bio` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `name`, `song_type`, `bio`, `image`) VALUES
(6, 'Arjit Singh', 'Panjabi', 'Let every user access this bookmark Let every user access this bookmark Let every user access this bookmark Let every user access this bookmark Let every user access this bookmarkLet every user access this bookmarkLet every user access this bookmarkLet every user access this bookmark Let every user access this bookmark Let every user access this bookmark Let every user access this bookmark Let every user access this bookmark ', 'team3.jpg'),
(7, 'Atif Aslam', 'Panjabi', 'Let every user access this bookmark Let every user access this bookmark Let every user access this bookmark Let every user access this bookmark Let every user access this bookmark Let every user access this bookmark Let every user access this bookmark Let every user access this bookmark Let every user access this bookmark Let every user access this bookmark.', '02.png'),
(8, 'Yo Yo Honey Singh', 'Rapper', 'Showing rows Showing rows Showing rows Showing rows Showing rows Showing rows Showing rows Showing rows Showing rows Showing rows Showing rows Showing rows Showing rows Showing rows Showing rows Showing rows Showing rows Showing rows Showing rows', '08.png'),
(9, 'Badshah', 'Indian Rapper', 'Aditya Prateek Singh Sisodia, better known by his stage name Badshah, is an Indian rapper and singer known for his Hindi, Haryanvi, and Punjabi songs. He started his career in 2006 alongside Yo Yo Honey Singh in his hip hop group Mafia Mundeer.', 'badshah.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `fk_artist` varchar(50) NOT NULL,
  `fk_album` varchar(50) NOT NULL,
  `fk_lang` varchar(50) NOT NULL,
  `fk_year` varchar(50) NOT NULL,
  `fk_ganre` varchar(100) NOT NULL,
  `fk_lyrics` varchar(50) NOT NULL,
  `compose` varchar(50) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`id`, `title`, `fk_artist`, `fk_album`, `fk_lang`, `fk_year`, `fk_ganre`, `fk_lyrics`, `compose`, `discription`, `image`, `audio`) VALUES
(2, 'Yaar Tera Super Star', '8', '16', '7', '3', '3', '2', 'Honey Singh', 'Love Dose Mp3 Song by Yo Yo Honey Singh Love Dose Mp3 Song by Yo Yo Honey Singh Love Dose Mp3 Song by Yo Yo Honey Singh Love Dose Mp3 Song by Yo Yo Honey Singh.', 'desi.jpg', 'Yaar tera Super Star.mp3'),
(3, 'Love Dose', '8', '16', '7', '3', '3', '2', 'Honey Singh', 'Love Dose Mp3 Song by Yo Yo Honey Singh Love Dose Mp3 Song by Yo Yo Honey Singh Love Dose Mp3 Song by Yo Yo Honey Singh Love Dose Mp3 Song by Yo Yo Honey Singh Love Dose Mp3 Song by Yo Yo Honey Singh Love Dose Mp3 Song by Yo Yo Honey Singh.', 'love.jfif', 'Love-Dose.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rating` float NOT NULL,
  `review` varchar(255) NOT NULL,
  `fk_user` varchar(50) NOT NULL,
  `fk_song` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modify_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `rating`, `review`, `fk_user`, `fk_song`, `date`, `modify_date`) VALUES
(98, 'Nabeel', 'nabeel@gmail.com', 2.5, 'nice good', '6', '2', '2021-01-17 11:41:57', '2021-01-17 21:16:16'),
(99, 'Nabeel', 'nabeel@gmail.com', 2.5, 'hello nn', '6', '2', '2021-01-17 11:55:15', '2021-01-17 21:18:07'),
(100, 'Nabeel', 'nabeel@gmail.com', 3, 'dfgh new new nbameer btn ameer ', '6', '2', '2021-01-17 12:33:22', '2021-01-17 21:12:59'),
(101, 'Nabeel', 'nabeel@gmail.com', 2.5, 'good', '6', '2', '2021-01-17 16:19:04', ''),
(102, 'Nabeel', 'nabeel@gmail.com', 1.8, 'model', '', '', '2021-01-17 21:29:04', ''),
(103, 'Nabeel', 'nabeel@gmail.com', 2.5, 'model2', '', '', '2021-01-17 21:32:13', ''),
(104, 'Nabeel', 'nabeel@gmail.com', 0.5, 'medol3', '6', '2', '2021-01-17 21:35:31', ''),
(105, 'Nabeel', 'nabeel@gmail.com', 4.4, 'model4', '6', '2', '2021-01-17 21:37:00', ''),
(106, 'Nabeel', 'nabeel@gmail.com', 0.5, 'model5551', '6', '2', '2021-01-17 21:39:49', ''),
(107, 'Nabeel', 'nabeel@gmail.com', 1.4, 'wow', '6', '2', '2021-01-17 23:17:52', ''),
(108, 'Beeff', 'abdul@gmail.com', 0, 'good', '', '2', '2021-01-17 23:27:45', ''),
(109, 'Zahid', 'zahid123@gmail.com', 1.5, 'super', '5', '2', '2021-01-17 23:36:02', ''),
(110, 'Zahid', 'zahid123@gmail.com', 3.9, 'cool', '5', '3', '2021-01-18 17:04:49', ''),
(111, 'Zahid', 'zahid123@gmail.com', 3.5, 'super good', '5', '3', '2021-01-18 19:16:33', ''),
(112, 'Ameer Hamza', 'ameerkhan1134@gmail.com', 2.5, 'hoo', '9', '2', '2021-01-19 08:10:45', ''),
(113, 'Zahid', 'zahid123@gmail.com', 2.4, 'nice good', '5', '3', '2021-01-19 10:35:51', '');

-- --------------------------------------------------------

--
-- Table structure for table `ganres`
--

CREATE TABLE `ganres` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ganres`
--

INSERT INTO `ganres` (`id`, `name`) VALUES
(3, 'Bollywood'),
(4, 'Hollywood');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`) VALUES
(6, 'English'),
(7, 'Hindi');

-- --------------------------------------------------------

--
-- Table structure for table `lyrics`
--

CREATE TABLE `lyrics` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bio` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lyrics`
--

INSERT INTO `lyrics` (`id`, `name`, `bio`, `image`) VALUES
(2, 'jani', 'We are working very hard to give you the best experience possible! We are working very hard to give you the best experience possible! We are working very hard to give you the best experience possible! We are working very hard to give you the best experience possible! We are working very hard to give you the best experience possible!', 'author-8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `name`, `email`, `number`, `country`, `city`, `address`, `image`, `password`, `role`, `date`) VALUES
(5, '86123456789', 'Zahid', 'zahid123@gmail.com', '03123456789', 'Pakistan', 'karachi', 'Bin Qasim Town', '', '123', 'User', '2021-01-13 22:52:24'),
(6, '822987654432', 'Nabeel', 'nabeel@gmail.com', '03987654432', 'Pakistan', 'karachi', 'Bin Qasim Town', '', '123', 'User', '2021-01-13 22:59:00'),
(7, '824123456789', 'Graphic Designn', 'moiz123@gmail.com', '03123456789', 'Turky', 'Lahore', 'Bin Qasim Town', '', '12345', 'User', '2021-01-13 23:01:54'),
(8, '29987654432', 'Zahid1', 'zahid321@gmail.com', '03987654432', 'Dubai', 'karachi', 'bbbbbb', '', '123456789', 'User', '2021-01-13 23:09:34'),
(9, '123456789', 'Ameer Hamza', 'ameerkhan1134@gmail.com', '123456789', 'pakistan', '', 'karachi', '', 'ameer123', 'Admin', '2021-01-19 07:16:45');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `fk_artist` varchar(50) NOT NULL,
  `fk_album` varchar(50) NOT NULL,
  `fk_lang` varchar(50) NOT NULL,
  `fk_year` varchar(50) NOT NULL,
  `fk_ganre` varchar(100) NOT NULL,
  `fk_lyrics` varchar(50) NOT NULL,
  `compose` varchar(50) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `fk_artist`, `fk_album`, `fk_lang`, `fk_year`, `fk_ganre`, `fk_lyrics`, `compose`, `discription`, `image`, `video`) VALUES
(2, 'She Move It Like', '9', '17', '7', '5', '3', '2', 'Aditya Dev', 'The No.1 Rap King of the Nation, BADSHAH,  created history with his first album O.N.E. Packed with 17 Super Hit chartbusting tracks!\r\n\r\nBe it DJ Waley Babu or Heartless, this Hit Machine has made sure he shows no MERCY. From being an underground Rapper to becoming a worldwide sensational phenomenon, BADSHAH, the trendsetter of Music is all set to showcase all that you’ve been waiting for. \r\n\r\nO.N.E- Original Never Ends features the divas of Pop Music- Sunidhi Chauhan, Aastha Gill and Lisa Mishra', 'She_Move_It_Like.jpeg', 'She Move It Like - Official Video _ Badshah _ Warina Hussain _ ONE Album.mp4'),
(3, 'MAKHNA', '8', '16', '7', '5', '3', '2', 'Honey Singh', 'Presenting the full video song of Yo Yo Honey Singh comeback video MAKHNA. \r\nA Prestige Diamond and Jewel exhibition in India which the world comes to see gets hit by a twist featuring Yo Yo Honey Singh, Nidhi Sunil, Singhsta along with Pinaki, Sean, Allistair (TDO).\r\n', 'makhna.jpg', 'Yo Yo Honey Singh_ MAKHNA Video Song- _ Neha Kakkar, Singhsta, TDO _ Bhushan Kumar.mp4'),
(6, 'Mercy', '9', '17', '7', '4', '4', '2', 'Badshah & Aditya Dev', 'BADSHAH, the #1 Hit Machine is back with a bang with a sensational new song  - ‘MERCY’ from his forthcoming album O.N.E. The song composed and sung by him has the gorgeous and super talented Lauren Gottlieb grooving to it.  ', 'mercy.jpg', 'Mercy - Badshah Feat. Lauren Gottlieb _ Official Music Video _ Latest Hit Song 2017.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `date`, `month`, `year`) VALUES
(3, 14, 'November', 2014),
(4, 1, 'January', 2007),
(5, 1, 'January', 2018);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ganres`
--
ALTER TABLE `ganres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lyrics`
--
ALTER TABLE `lyrics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `ganres`
--
ALTER TABLE `ganres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lyrics`
--
ALTER TABLE `lyrics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
