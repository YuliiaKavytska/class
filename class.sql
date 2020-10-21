-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 10:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_status` int(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_message` text NOT NULL,
  `time` time NOT NULL DEFAULT current_timestamp(),
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `user_status`, `image`, `phone`, `about`, `login`, `password`, `last_message`, `time`, `subject`) VALUES
(1, 'Чат класу', 0, '', '', 'Чат класу', '', '', 'На слідуючому уроці буде контрольна робота', '00:00:00', ''),
(2, 'Андрій Петров', 0, '/images/02.png', '+38032547544', 'Я учень 8-Б классу школи № 1', 'a@a.a', 'a', 'Самостійну роботу № 5 вислав на перевірку', '00:00:00', ''),
(3, 'Василь Іванов', 0, '/images/03.png', '+38024573154', 'Я учень 8-Б классу школи № 1', 'i@i.i', 'i', 'Домашню роботу № 3 доробив та вислав на перевірку', '00:00:00', ''),
(4, 'Петрова Надія Василівна', 1, '/images/04.png', '+38043157245', 'Я вчитель фізики в школі № 1', 'n@n.n', 'n', 'Студенту Іванову доробити домашню роботу № 3', '00:00:00', 'Фізика'),
(6, 'Юлія Кавицька', 0, '', '0935951018', '1', 'julia.k106.l7@gmail.com', '1', '', '10:37:56', '');

-- --------------------------------------------------------

--
-- Table structure for table `homework`
--

CREATE TABLE `homework` (
  `id` int(10) NOT NULL,
  `subject` int(10) NOT NULL,
  `day` varchar(20) NOT NULL,
  `homework` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homework`
--

INSERT INTO `homework` (`id`, `subject`, `day`, `homework`) VALUES
(1, 4, '10.11.2020', 'Прочитати параграф 5'),
(2, 4, '8.10.2020', 'Виконати вправи 11 та 12 на стр 126');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` int(11) NOT NULL,
  `time_1` varchar(255) NOT NULL,
  `time_2` varchar(255) NOT NULL,
  `break` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `time_1`, `time_2`, `break`) VALUES
(1, '8:00', '8:45', 10),
(2, '8:55', '9:40', 10),
(3, '9:50', '10:35', 15),
(4, '10:50', '11:35', 15),
(5, '11:50', '12:35', 10),
(6, '12:45', '13:30', 10),
(7, '13:40', '14:25', 10),
(8, '14:35', '15:20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `recipient_id`, `message`, `time`) VALUES
(1, 2, 3, 'Привіт', '00:00:00'),
(2, 2, 3, 'Зробив домашку?', '00:00:00'),
(3, 3, 2, 'Привіт ще ні', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(20) NOT NULL,
  `student_id` int(10) NOT NULL,
  `date` varchar(250) NOT NULL,
  `rating` int(10) NOT NULL,
  `subject` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `student_id`, `date`, `rating`, `subject`) VALUES
(1, 2, '', 10, 4),
(2, 2, '10.11.2020', 8, 4),
(3, 2, '8.10.2020', 9, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homework`
--
ALTER TABLE `homework`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `homework`
--
ALTER TABLE `homework`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
