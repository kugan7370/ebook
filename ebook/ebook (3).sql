-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 12:03 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_ID` int(11) NOT NULL,
  `A_NAME` varchar(32) NOT NULL,
  `A_PASS` varchar(32) NOT NULL,
  `A_IMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_ID`, `A_NAME`, `A_PASS`, `A_IMAGE`) VALUES
(1, 'admin', 'admin', '2.png');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_title`) VALUES
(1, 'Child'),
(2, 'History'),
(3, 'Trending'),
(4, 'Series'),
(16, 'motive');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_post` varchar(200) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_date` datetime NOT NULL,
  `comment_user` varchar(100) NOT NULL,
  `comment_user_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post`, `comment_content`, `comment_date`, `comment_user`, `comment_user_image`) VALUES
(7, 'Harry Potter$1', 'super', '2021-07-08 10:33:12', 'Maxwel', 'glenn-maxwell.jpg'),
(8, 'Alexander the Great', 'alex', '2021-07-08 10:33:53', 'Kugan', 'virat-kohli.jpg'),
(20, 'Alexander the Great', 'paraparan\r\n', '2021-07-30 11:41:07', 'Maxwel', 'glenn-maxwell.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(32) NOT NULL,
  `post_author` varchar(32) NOT NULL,
  `post_tags` varchar(32) NOT NULL,
  `post_image` varchar(100) NOT NULL,
  `post_category` varchar(50) NOT NULL,
  `post_language` varchar(32) NOT NULL,
  `post_content` text NOT NULL,
  `post_date` date NOT NULL,
  `post_file` varchar(100) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_author`, `post_tags`, `post_image`, `post_category`, `post_language`, `post_content`, `post_date`, `post_file`, `post_comment_count`, `post_status`) VALUES
(1, 'Harry Potter$1', 'J.K.Rowling', 'harry,potter,harry potter', '5.jpg', 'Series', 'English', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum,\n              illo sapiente ducimus ea eveniet tempore. Molestiae voluptate\n              soluta, doloribus, illum beatae incidunt aliquam quidem at est\n              dolorem similique iusto tenetur!', '2021-06-26', 'harry.pdf', 5, 'Published'),
(10, 'harry potter', 'J.K.Rowling', 'hari,potter,harry', '8.jpg', 'Series', 'English', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum,\n              illo sapiente ducimus ea eveniet tempore. Molestiae voluptate\n              soluta, doloribus, illum beatae incidunt aliquam quidem at est\n              dolorem similique iusto tenetur!', '2021-06-28', 'HARRY POTTER.pdf', 5, 'Published'),
(11, 'Alexander the Great', ' Philip Freeman', 'Alexander,Alexander the Great', 'alex.jpg', 'History', 'English', 'The celebrated Macedonian king has been one of the most enduring figures in history. He was a general of such skill and renown that for two thousand years other great leaders studied his strategy and tactics, from Hannibal to Napoleon, with countless more in between. He flashed across the sky of history like a comet, glowing brightly and burning out quickly: crowned at age nineteen, dead by thirty-two. He established the greatest empire of the ancient world; Greek coins and statues are found as far east as Afghanistan. Our interest in him has never faded.', '2021-06-30', 'alex1.pdf', 5, 'Published'),
(14, 'React Js', 'fagrfg', 'gsgs', 'rich dad poor dad.jpg', 'Trending', 'Tamil', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum,\n              illo sapiente ducimus ea eveniet tempore. Molestiae voluptate\n              soluta, doloribus, illum beatae incidunt aliquam quidem at est\n              dolorem similique iusto tenetur!', '2021-07-03', 'alex1.pdf', 5, 'Published'),
(15, 'React Js', 'tyehyrft', 'hyedye', 'alex.jpg', 'History', 'Tamil', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum,\r\n              illo sapiente ducimus ea eveniet tempore. Molestiae voluptate\r\n              soluta, doloribus, illum beatae incidunt aliquam quidem at est\r\n              dolorem similique iusto tenetur!', '2021-07-03', 'HARRY POTTER.pdf', 5, 'Published'),
(25, 'motive', 'wtgwgtwr', 'trghwtgw', 'alex.jpg', 'Child', 'Singala', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum,\n              illo sapiente ducimus ea eveniet tempore. Molestiae voluptate\n              soluta, doloribus, illum beatae incidunt aliquam quidem at est\n              dolorem similique iusto tenetur!', '2021-07-11', 'alex1.pdf', 5, 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `request_book` varchar(100) NOT NULL,
  `request_author` varchar(100) NOT NULL,
  `request_user` varchar(100) NOT NULL,
  `request_user_image` varchar(100) NOT NULL,
  `request_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `request_book`, `request_author`, `request_user`, `request_user_image`, `request_date`) VALUES
(2, 'Harry potter', 'J.K Rowling', 'Maxwel', 'glenn-maxwell.jpg', '2021-07-08 21:38:23'),
(4, 'book2', 'none', 'Maxwel', 'glenn-maxwell.jpg', '2021-07-08 21:43:18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `user_mail` varchar(50) NOT NULL,
  `user_image` varchar(50) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `verify_token` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_mail`, `user_image`, `user_gender`, `user_password`, `verify_token`) VALUES
(1, 'Kugan', 'ebookbook09@gmail.com', 'virat-kohli.jpg', ' Male', '12345', 99205),
(2, 'Maxwel', 'maxwel123@gmail.com', 'glenn-maxwell.jpg', 'Male', '1234', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_mail` (`user_mail`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
