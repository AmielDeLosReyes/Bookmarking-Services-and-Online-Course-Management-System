-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 11, 2023 at 12:06 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aral`
--

-- --------------------------------------------------------

--
-- Table structure for table `Courses`
--

CREATE TABLE `Courses` (
  `ID` int(11) NOT NULL,
  `course_name` varchar(500) DEFAULT NULL,
  `course_author` varchar(500) DEFAULT NULL,
  `course_description` varchar(500) DEFAULT NULL,
  `course_url` varchar(500) DEFAULT NULL,
  `course_img` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Courses`
--

INSERT INTO `Courses` (`ID`, `course_name`, `course_author`, `course_description`, `course_url`, `course_img`) VALUES
(1, 'Code Editor Tutorial', 'Codevolution', 'This is a tutorial about Visual Studio Code. In creating web applications, we need a code editor. Visual Studio Code is one of the best code editor, most of the programmers use this.', 'https://youtube.com/playlist?list=PLC3y8-rFHvwhleivq1QohBZN4d8IdzG3c', 'assets/img/vscodeImg.png'),
(2, 'HTML Tutorial', 'EJ Media', 'This is a tutorial about HTML. HTML stands for Hypertext Markup Language. It is the code to format the web contents. It is the skeleton of the website. Learning HTML is vital for all programmers!', 'https://youtube.com/playlist?list=PLr6-GrHUlVf_ZNmuQSXdS197Oyr1L9sPB', 'assets/img/htmlImg.png'),
(3, 'CSS Tutorial', 'EJ Media', 'This is a tutorial about CSS. CSS stands for Cascading Style Sheets. It is the code to format the web contents. It is the presentation of the website. Learning CSS is vital for all programmers!', 'https://youtube.com/playlist?list=PLr6-GrHUlVf8JIgLcu3sHigvQjTw_aC9C', 'assets/img/cssImg.png'),
(4, 'JavaScript Tutorial', 'Telusko', 'This is a tutorial about JS. It stands for JavaScript. It is the code to dynamically manipulate the web contents. It is a programming language. Along with HTML and CSS, these three fundamentals can create any kind of web application.', 'https://youtube.com/playlist?list=PLsyeobzWxl7rrvgG7MLNIMSTzVCDZZcT4', 'assets/img/jsImg.png'),
(5, 'Bootstrap Tutorial', 'The Net Ninja', 'This is a tutorial about Bootstrap. It is a framework for CSS which contains libraries that makes coding with CSS easier. It has built-in features that enables responsiveness on a website.', 'https://www.youtube.com/playlist?list=PL4cUxeGkcC9joIM91nLzd_qaH_AimmdAR', 'assets/img/bootstrapImg.png'),
(6, 'jQuery Tutorial', 'Dani Krossing', 'This is a tutorial about jQuery. It is a framework for JavaScript which contains libraries that makes coding with JavaScript easier. It has built-in features that simplifies HTML DOM manipulation, AJAX technology, and event handling.', 'https://youtube.com/playlist?list=PL0eyrZgxdwhy7byLHsVkuhtRV_IpoJU7n', 'assets/img/jqueryImg.png'),
(7, 'React JS Tutorial', 'Code Stoic', 'This is a tutorial about React JS. Developed by Facebook, it is another framework for JavaScript which contains libraries that makes coding with JavaScript easier. It has built-in features that simplifies implementing interactive UI.', 'https://youtube.com/playlist?list=PLSsAz5wf2lkK_ekd0J__44KG6QoXetZza', 'assets/img/reactImg.png'),
(8, 'Python Tutorial', 'edureka!', 'This is a tutorial about Python. Developed by Guido van Rossum, it is another programming language that is used to build websites and softwares. It automates manual tasks and also anylizes data.', 'https://youtube.com/playlist?list=PL9ooVrP1hQOE4KoZLUP4LgBwFH2IJCQs6', 'assets/img/pythonImg.png'),
(9, 'Django Tutorial', 'Tech With Tim', 'This is a tutorial about Django. It is a Python web framework that aids with coding with Python faster. It helps with web development security and maintainability. It contains built-in features for better performance.', 'https://youtube.com/playlist?list=PLzMcBGfZo4-kQkZp-j9PNyKq7Yw5VYjq9', 'assets/img/djangoImg.png'),
(13, 'test', 'test', 'test', 'test.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `UID` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`UID`, `name`, `email`, `password`) VALUES
(1, 'Jaimie Ericka Cundangan', 'jaimie@gmail.com', 'password'),
(2, 'Amiel Xavier De Los Reyes', 'amiel@gmail.com', 'password'),
(3, 'Art Tobias', 'art@gmail.com', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Courses`
--
ALTER TABLE `Courses`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Courses`
--
ALTER TABLE `Courses`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
