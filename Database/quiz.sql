-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 06:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryId` int(11) NOT NULL,
  `CategoryName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryId`, `CategoryName`) VALUES
(1, 'Maths'),
(2, 'DAA'),
(3, 'Computer'),
(4, 'English');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(100) NOT NULL,
  `Feedback` varchar(255) DEFAULT NULL,
  `Student_name` varchar(255) DEFAULT NULL,
  `Reply` varchar(255) DEFAULT NULL,
  `Teacher_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `Feedback`, `Student_name`, `Reply`, `Teacher_name`) VALUES
(5, 'Explain Question 5', 'mansiverma18', 'Good Question', 'salonigupta'),
(6, 'ok thank your sir', 'mansiverma18', 'welcome\r\n', 'tanyagoyal'),
(7, 'Please Explain the difference between === and==.', 'student1', '=== is for comparing two variable but this operator also checks the datatype and compare two value where as ==compares two variables or values but not datatypes.', 'anushree11');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `Right` int(100) NOT NULL,
  `Wrong` int(100) NOT NULL,
  `student_name` varchar(255) DEFAULT NULL,
  `Quiz_name` varchar(255) DEFAULT NULL,
  `Marks` int(100) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`Right`, `Wrong`, `student_name`, `Quiz_name`, `Marks`, `id`) VALUES
(2, 0, 'Diksha_khandelwal', 'MUlti', 6, 2),
(0, 5, 'Diksha_khandelwal', 'Linux', -5, 3),
(4, 1, 'mansiverma18', 'Linux', 8, 4),
(2, 0, 'mansiverma18', 'MUlti', 6, 5),
(7, 3, 'mansiverma18', 'Bubble_Sort', 11, 6),
(3, 2, 'anushree11', 'Php', 6, 7),
(2, 2, 'student1', 'Php', 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `QuizId` int(11) NOT NULL,
  `QuizName` varchar(255) DEFAULT NULL,
  `Teacher` varchar(255) DEFAULT NULL,
  `Questions` int(11) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `Right_marks` int(100) NOT NULL,
  `Wrong_marks` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`QuizId`, `QuizName`, `Teacher`, `Questions`, `category`, `Right_marks`, `Wrong_marks`) VALUES
(54, 'MUlti', 'mansiverma18', 2, 'Maths', 3, 1),
(57, 'Linux', 'mansiverma18', 5, 'Computer', 2, 1),
(61, 'Bubble_Sort', 'mansiverma18', 10, 'DAA', 2, 1),
(62, 'Php', 'anushree11', 5, 'Computer', 2, 0),
(63, 'Tense', 'diksha_khandelwal', 5, 'English', 3, 1),
(64, 'Merge_Sort', 'diksha_khandelwal', 5, 'Computer', 2, 1),
(65, 'Bio_Quiz', 'diksha_khandelwal', 5, 'Science', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_Id` int(100) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Uname` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_Id`, `Email`, `Uname`, `Password`) VALUES
(1, 'mansiverma758@gmail.com', 'mansiverma18', '555'),
(2, 'dikshakhandelwal0612@gmail.com', 'Diksha_khandelwal', '123'),
(3, 'student1@gmail.com', 'student1', '123');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `TeacherId` int(100) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Uname` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`TeacherId`, `Email`, `Uname`, `Password`) VALUES
(3, 'mansiverma758@gmail.com', 'mansiverma18', '555'),
(5, 'tanya.goyal_cs@gla.ac.in', 'tanyagoyal', '555'),
(6, 'salonigupta@gmail.com', 'salonigupta', '123'),
(7, 'anushreesingh@gmail.com', 'anushree11', '12345'),
(8, 'dikshakhandelwal@gmail.com', 'diksha_khandelwal', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`QuizId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_Id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`TeacherId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `QuizId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Student_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `TeacherId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
