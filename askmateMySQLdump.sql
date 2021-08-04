-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 04, 2021 at 07:38 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `askmate`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_questions` int UNSIGNED NOT NULL,
  `id_registered_user` int UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `vote_number` int NOT NULL,
  `submission_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `foreignkey` (`id_questions`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `id_questions`, `id_registered_user`, `message`, `vote_number`, `submission_time`) VALUES
(1, 28, 0, 'i need something', 0, '2021-08-04 13:20:16'),
(2, 29, 0, 'something , something , aaaaannnddd something', 0, '2021-08-04 13:20:44'),
(3, 25, 0, 'valasz', 0, '2021-08-04 14:03:47'),
(4, 33, 0, 'valaszakerdesre', 0, '2021-08-04 19:29:35'),
(5, 25, 0, 'valasz2', 0, '2021-08-04 19:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int NOT NULL AUTO_INCREMENT,
  `directory` text NOT NULL,
  `file_name` text NOT NULL,
  `upload_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_image` int UNSIGNED NOT NULL,
  `id_registered_user` int UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `vote_number` int NOT NULL,
  `submission_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `id_image`, `id_registered_user`, `title`, `message`, `vote_number`, `submission_time`) VALUES
(25, 0, 0, 'valaki', 'valamivalami', 0, '2021-08-04 12:24:06'),
(27, 0, 0, 'teszt1', 'teszt2222222222222', 0, '2021-08-04 12:32:45'),
(28, 0, 0, 'need help regarding JINJA!', '>>> 10 * (1/0) Traceback (most recent call last):   File \"<stdin>\", line 1, in <module> ZeroDivisionError: division by zero >>> 4 + spam*3 Traceback (most recent call last):   File \"<stdin>\", line 1, in <module> NameError: name \'spam\' is not defined >>> \'2\' + 2 Traceback (most recent call last):   File \"<stdin>\", line 1, in <module> TypeError: Can\'t convert \'int\' object to str implicitly', 0, '2021-08-04 12:47:05'),
(29, 0, 0, 'changedtitle', 'changedmessage', 0, '2021-08-04 13:00:16'),
(31, 0, 0, 'canbechanged', 'canbechanged', 0, '2021-08-04 13:38:03'),
(32, 0, 0, 'sdasda', 'sadasdasdsa', 0, '2021-08-04 14:23:51'),
(33, 0, 0, 'kerdes', 'kerdes', 0, '2021-08-04 19:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

DROP TABLE IF EXISTS `registered_user`;
CREATE TABLE IF NOT EXISTS `registered_user` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `password_hash` text NOT NULL,
  `registration_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rel_question_tag`
--

DROP TABLE IF EXISTS `rel_question_tag`;
CREATE TABLE IF NOT EXISTS `rel_question_tag` (
  `id_question` int UNSIGNED NOT NULL,
  `id_tag` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
CREATE TABLE IF NOT EXISTS `tag` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `foreignkey` FOREIGN KEY (`id_questions`) REFERENCES `question` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
