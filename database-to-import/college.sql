-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2019 at 04:13 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'BCA'),
(2, 'BA'),
(3, 'BSC'),
(4, 'BBA'),
(5, 'BCOM');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `short` varchar(300) NOT NULL,
  `body` text NOT NULL,
  `date` date NOT NULL,
  `author` varchar(100) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `short`, `body`, `date`, `author`, `category`) VALUES
(12, 'Techhope', 'hhhhioh', 'gghgjhggj', '2019-03-11', 'mousuf', 'BSC'),
(13, 'Multivendor sites', 'sadasdasd', 'asdasdasd', '2019-03-12', 'mousuf', 'BCA'),
(14, 'sdvsdvsdgfvsfsaf', 'safasfasf', 'asfasfasfasf', '2019-03-12', 'mousuf', 'BCA'),
(15, 'asfasfasf', 'asfasfasf', 'asfasfasfasf', '2019-03-12', 'mousuf', 'BCA'),
(16, 'fasfasfasgf', 'gasdgsdga', 'gasgasdgdasg', '2019-03-12', 'mousuf', 'BCA'),
(17, 'sadgsadgsdasgdas', 'gasdgdsagsad', 'gsadgdasdgsad', '2019-03-12', 'mousuf', 'BCA'),
(18, 'sadgsdgsadgsadg', 'sdagsadgd', 'sadgdsadgs', '2019-03-12', 'mousuf', 'BCA'),
(19, 'sdgsadgsdg', 'sdgsadg', 'sdagsadgsadgd', '2019-03-12', 'mousuf', 'BCA'),
(20, 'gsdgdsvsavd', 'adgfsavsav', 'sdvsdagvsdgfadswg', '2019-03-12', 'mousuf', 'BCA'),
(21, 'sdagvxcvsdgsdg', 'adsvacxvazxv', 'sxcvzvsdsdgdsagf', '2019-03-12', 'mousuf', 'BCA'),
(22, 'dsfsdvbgacvsvxs', 'vxzcvxzcvzvcx', 'sdsddsvs', '2019-03-12', 'mousuf', 'BCA'),
(23, 'vzxvzxcvzxvx', 'cvxzvsdfsdaf', 'vxzcvxcvxcvcx', '2019-03-12', 'mousuf', 'BA'),
(24, 'cxvxcvxzvx', 'vczxvzxvc', 'sdvsdvsdva', '2019-03-12', 'mousuf', 'BCA'),
(25, 'xcvxvzxvzxvxcv', 'vzxvzxvzxv', 'vzxvsadgfxcv', '2019-03-12', 'mousuf', 'BSC'),
(26, 'today', 'zxcxc', 'xzczxc', '2019-03-13', 'mousuf', 'BCA'),
(27, 'today 2', 'xczxc', 'xc', '2019-03-13', 'mousuf', 'BCA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(1, 'MOUSUF', 'mousuf', '123'),
(3, 'test user', 'test', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
