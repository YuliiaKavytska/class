-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2020 at 08:14 PM
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
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `user_status`, `image`, `phone`, `about`, `login`, `password`, `last_message`, `subject`) VALUES
(1, 'Чат класу', 0, '', '', 'Чат класу', '', '', 'На слідуючому уроці буде контрольна робота', ''),
(2, 'Андрій Петров', 0, '/images/16.png', '+38032547544', 'Люблю кататися на велосипеді, та грати на компьютері', 'a@a.a', 'a', '1', ''),
(3, 'Василь Іванов', 0, '/images/19.png', '+38024573154', 'Мої улюблені предмети це фізика та математика', 'i@i.i', 'i', '1', ''),
(4, 'Петрова Надія Василівна', 1, '/images/04.png', '+38043157245', 'Особисті якості:\r\nДисціплінованість, працьовитість\r\nХобі: мистецтво та культура', 'n@n.n', 'n', '1', 'Фізика'),
(5, 'Гуріна Світлана Леонідівна', 1, '/images/05.png', '+380431579458', 'Особисті якості:\r\nЛюбов до дітей, відповідальність\r\nХобі: теніс', 'g@g.g', 'g', 'Студенту Іванову доробити домашню роботу № 3', 'Українська мова'),
(6, 'Линник Алла Михайлівна', 1, '/images/22.png', '+38031645784', 'Особисті якості:\r\nвідповідальність\r\nХобі: в’язання', 'l@l.l', 'l', 'На слідуючому уроці будемо писати диктант', 'Українська література'),
(7, 'Петренко Людмила Олексіївна', 1, '/images/08.png', '+38052134678', 'Особисті якості:\r\nуважність до деталей\r\nХобі: іноземні мови', 'p@p.p', 'p', 'Всі вибрані учні готуємося до олімпіади', 'Математика'),
(8, 'Дем\'яненко Вікторія Михайлівна', 1, '/images/21.jpg', '+38052134678', 'Особисті якості:\r\nпрацьовитість, цілеспрямованість\r\nХобі: волейбол', 'd@d.d', 'd', 'Всі вибрані учні готуємося до олімпіади', 'Зарубіжна література'),
(9, 'Валько Олександр Михайлович', 1, '/images/09.png', '+38061342754', 'Особисті якості:\r\nпунктуальність, наполегливість\r\nХобі: футбол', 'v@v.v', 'v', 'Вивчити тему Теорія алгоритмів', 'Інформатика'),
(10, 'Юстик Микола Миколайович', 1, '/images/06.png', '+380124376584', 'Особисті якості:\r\nсправедливість, організованість\r\nХобі: кулінарія', 'u@u.u', 'u', 'Результати домашніх завдань додані в таблицю успішності', 'Хімія'),
(11, 'Музика Олександр Григорович', 1, '/images/11.png', '+380364558745', 'Особисті якості:\r\nрішучість, спостережливість\r\nХобі: настільний теніс', 'm@m.m', 'm', 'В Понеділок буде здача нормативів', 'Фізична культура'),
(12, 'Сало Микола Миколайович', 1, '/images/01.png', '+380364558745', 'Особисті якості:\r\nактивність\r\nХобі: зарубіжні культури', 's@s.s', 's', 'До вівторка здати всі вироби з дерева', 'Трудове навчання'),
(13, 'Хилько Василь Іванович', 1, '/images/02.png', '+38065845721', 'Особисті якості:\r\nзахоплююся творчістю та люблю дітей\r\nХобі: хокей', 'x@x.x', 'x', 'Резцльтати контрольних робіт можна перегланути в таблиці успішності', 'Біологія'),
(14, 'Дубов Дмитро', 0, '/images/17.png', '+380345187648', 'Захоплююся каліграфією', 'db@a.a', 'db', 'Домашню роботу № 4 вислав на перевірку', ''),
(15, 'Томашин Денис', 0, '/images/18.png', '+38084516254', 'Мої улюблені предмети це хімія та фізична культура', 't@t.t', 't', 'Виконав та здав на перевірку лабораторну роботу № 5', ''),
(16, 'Рябошапка Артем', 0, '/images/23.png', '+38024573154', 'Захоплююся грою на гітарі', 'r@r.r', 'r', 'Почав роботу над домашнім завданням по математиці', ''),
(17, 'Фещенко Анастасія', 0, '/images/07.png', '+38073451845', 'Захоплююся східними танцями', 'f@f.f', 'f', 'Самостійну роботу № 9 доробила та вислала на перевірку', ''),
(18, 'Андрійчук Софія', 0, '/images/12.png', '+38064315784', 'Мої улюблені предмети це біологія та фізика', 'an@a.a', 'an', 'Виконала домашню роботу № 1 та вислала на перевірку', ''),
(19, 'Ковбасій Катерина', 0, '/images/13.png', '+38051243781', 'Захоплююся грою на фортепіано', 'k@k.k', 'k', 'Почала роботу над домашнім завданням по хімії', ''),
(20, 'Пшенична Зоряна', 0, '/images/14.png', '+38081243754', 'Захоплююся Канзаші, прикрасами зі стрічок', 'ph@a.a', 'ph', 'Виконала домашню роботу № 1 та вислала на перевірку', ''),
(21, 'Коханівська Софія', 0, '/images/15.png', '+38064315724', 'Захоплююся вишивкою по картону', 'ko@a.a', 'ko', 'Почала роботу над домашнім завданням по хімії', '');

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
(1, 4, 'Понеділок', 'Прочитати параграф 5'),
(2, 4, 'Четвер', 'Виконати вправи 11 та 12 на стр 126'),
(3, 5, 'Понеділок', 'Виконати вправи 10 та 11 на стр 50'),
(4, 6, 'Вівторок', 'Виконати самостійну роботу № 3'),
(5, 7, 'Середа', 'Виконати самостійну роботу № 5');

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
(3, 3, 2, 'Привіт ще ні', '00:00:00'),
(4, 14, 2, 'Привіт! Допоможи з домашкою', '00:00:00'),
(5, 2, 14, 'Добре, показуй', '00:00:00'),
(6, 2, 15, 'Привіт! Ты зробив вправи 11 та 12 на стр 126?', '00:00:00'),
(7, 15, 2, 'Привіт! Так', '00:00:00'),
(8, 4, 3, 'Іванов ти доробив домашню роботу № 3?', '00:00:00'),
(9, 3, 4, 'Ще не встиг', '00:00:00'),
(10, 2, 3, '1', '20:54:43'),
(11, 2, 4, '1', '20:54:51');

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
(2, 3, '10.11.2020', 8, 5),
(3, 14, '8.10.2020', 9, 6),
(4, 15, '8.10.2020', 7, 7),
(5, 16, '8.10.2020', 11, 8),
(6, 17, '8.10.2020', 12, 9),
(7, 18, '8.10.2020', 10, 10),
(8, 19, '8.10.2020', 9, 11),
(9, 20, '8.10.2020', 8, 12),
(10, 21, '8.10.2020', 7, 13),
(11, 14, '2020-10-10', 9, 4);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `homework`
--
ALTER TABLE `homework`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
