-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 02:39 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(250) NOT NULL,
  `answer` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `ans_id`) VALUES
(1, 'Hyper Text Markup Language', 1),
(2, 'HyperLinks and Text Markup Language', 1),
(3, 'Home Tool Markup Language', 1),
(4, 'None of the above', 1),
(5, 'The first div element', 2),
(6, 'All div elements', 2),
(7, 'The last div element', 2),
(8, 'none of the above', 2),
(9, 'The head section', 3),
(10, 'The body section', 3),
(11, 'Both the head section and the body section', 3),
(12, 'none of the above', 3),
(13, 'function myFunction()', 4),
(14, 'function:myFunction()', 4),
(15, 'function=myFunction()', 4),
(16, 'none of these', 4),
(17, '.container', 5),
(18, '.container-fixed', 5),
(19, '.container-fluid', 5),
(20, 'none of these', 5);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(250) NOT NULL,
  `question` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `ans_id`) VALUES
(1, 'What does HTML stands for ? ', 1),
(2, 'Look at the following selector: div. What does it select?', 5),
(3, 'Where is the correct place to insert a JavaScript?', 9),
(4, 'How do you create a function in JavaScript?', 13),
(5, 'Which class provides a responsive fixed width container?', 17);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(250) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `totalques` int(250) DEFAULT NULL,
  `answerscorrect` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `totalques`, `answerscorrect`) VALUES
(1, 'Yuva', 5, 3),
(2, 'Vishnu', 5, 5),
(4, 'Yuva', 5, 4),
(5, 'Yuva', 5, 4),
(6, 'Yuva', 5, 4),
(7, 'Vishnu', 5, 0),
(8, 'Vishnu', 5, 3),
(9, 'Yokesh', 5, 5),
(10, 'Yuvi', 5, 2),
(11, 'Vikram', 5, 3),
(12, 'hariniv', 5, 0),
(13, 'ragul kartik', 5, 3),
(14, 'ragul kartik', 5, 3),
(15, 'ragul kartik', 5, 3),
(16, 'ragul kartik', 5, 0),
(17, 'ragul kartik', 5, 3),
(18, 'ragul kartik', 5, 3),
(19, 'ragul kartik', 5, 3),
(20, 'ragul kartik', 5, 3),
(21, 'ragul kartik', 5, 0),
(22, 'ragul kartik', 5, 0),
(23, 'ragul kartik', 5, 0),
(24, 'ragul kartik', 5, 0),
(25, 'ragul kartik', 5, 2),
(26, 'ragul kartik', 5, 2),
(27, 'ragul kartik', 5, 2),
(28, 'ragul kartik', 5, 5),
(29, 'VIGNESH P', 5, 2),
(30, 'ragul kartik', 5, 5),
(31, 'ragul kartik', 5, 5),
(32, 'ragul kartik', 5, 5),
(33, 'pratima', 5, 4),
(34, 'ragul kartik', 5, 4),
(35, 'ragul kartik', 5, 5),
(36, 'ragul kartik', 5, 4),
(37, 'ragul kartik', 5, 0),
(38, 'ragul kartik', 5, 4),
(39, 'ragul kartik', 5, 3),
(40, 'ragul kartik', 5, 5),
(41, 'ragul kartik', 5, 5),
(42, 'ragul kartik', 5, 5),
(43, 'ragul kartik', 5, 4),
(44, 'ragul kartik', 5, 3),
(45, 'ragul kartik', 5, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
