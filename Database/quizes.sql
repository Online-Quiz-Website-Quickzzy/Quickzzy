-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 06:43 PM
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
-- Database: `quizes`
--

-- --------------------------------------------------------

--
-- Table structure for table `bio_quiz`
--

CREATE TABLE `bio_quiz` (
  `id` int(6) NOT NULL,
  `Question` varchar(255) DEFAULT NULL,
  `Answer` varchar(255) DEFAULT NULL,
  `Option1` varchar(255) DEFAULT NULL,
  `Option2` varchar(255) DEFAULT NULL,
  `Option3` varchar(255) DEFAULT NULL,
  `Option4` varchar(255) DEFAULT NULL,
  `Level` varchar(255) DEFAULT NULL,
  `Right_marks` int(6) DEFAULT NULL,
  `Wrong_marks` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bio_quiz`
--

INSERT INTO `bio_quiz` (`id`, `Question`, `Answer`, `Option1`, `Option2`, `Option3`, `Option4`, `Level`, `Right_marks`, `Wrong_marks`) VALUES
(1, ' Which among the following is the best explanation of having two eyes instead of one?', 'option4', 'Help in distinguish colors from the distance more easily', 'Help in seeing object even in dim light.', 'Help in dreaming while sleeping.', ' Help in enhancing the depth perception', 'Easy', NULL, NULL),
(2, 'Which among the following animals has the largest and heaviest brain?', 'option3', 'Elephant', 'chimpanzee', 'sperm whale', 'Polar bear', 'Easy', NULL, NULL),
(3, 'who among the following had first discovered the insulin?', 'option1', 'Dr. F.G. Banting', 'C. V. Raman', 'Edmond Fischer', 'Joseph E. Murray', 'Easy', NULL, NULL),
(4, 'which amomg the following chemicals is used to preserve the fruit juices?', 'option3', 'Calcium carbonate', 'Sodium hydroxide', 'Sodium benzoate', 'Potassium nitrate', 'Easy', NULL, NULL),
(5, 'which among the following refers by the phonoreceptor?', 'option3', 'Feel', 'Touch', 'Sound', 'Smell', 'Easy', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bubble_sort`
--

CREATE TABLE `bubble_sort` (
  `id` int(6) NOT NULL,
  `Question` varchar(255) DEFAULT NULL,
  `Answer` varchar(255) DEFAULT NULL,
  `Option1` varchar(255) DEFAULT NULL,
  `Option2` varchar(255) DEFAULT NULL,
  `Option3` varchar(255) DEFAULT NULL,
  `Option4` varchar(255) DEFAULT NULL,
  `Level` varchar(255) DEFAULT NULL,
  `Right_marks` int(6) DEFAULT NULL,
  `Wrong_marks` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bubble_sort`
--

INSERT INTO `bubble_sort` (`id`, `Question`, `Answer`, `Option1`, `Option2`, `Option3`, `Option4`, `Level`, `Right_marks`, `Wrong_marks`) VALUES
(1, 'What is an external sorting algorithm?', 'option1', ' Algorithm that uses tape or disk during the sort', 'Algorithm that uses main memory during the sort', 'Algorithm that involves swapping', 'Algorithm that are considered in place', 'Easy', NULL, NULL),
(2, 'What is an internal sorting algorithm?\r\n', 'option2', 'Algorithm that uses tape or disk during the sort', 'Algorithm that uses main memory during the sort', 'Algorithm that involves swapping', 'Algorithm that are considered ‘in place’', 'Easy', NULL, NULL),
(3, 'What is the worst case complexity of bubble sort?\r\n', 'option4', 'O(nlogn)', 'O(logn)', 'O(n)', 'O(n2)', 'Easy', NULL, NULL),
(4, 'What is the average case complexity of bubble sort?\r\n', 'option4', 'O(nlogn)', 'O(logn)', 'O(n)', 'O(n2)', 'Easy', NULL, NULL),
(5, 'What is the best case efficiency of bubble sort in the improvised version?', 'option3', 'O(nlogn)', 'O(logn)', 'O(n)', 'O(n2)', 'Easy', NULL, NULL),
(6, 'What is the best time complexity of bubble sort?', 'option3', 'N^2', 'NlogN', 'N', 'N(logN)^2', 'Easy', NULL, NULL),
(7, 'What are the worst case and best case time complexity of bubble sort consequently?\r\n', 'option4', 'O(n), O(n2)', 'O(n2), O(n3)', 'O(n), O(n3)', 'None of the above', 'Easy', NULL, NULL),
(8, 'In a bubble sort structure, there is/are?\r\n', 'option4', 'A single for loop', 'Three for loops, all separate', 'A while loop', 'Two for loops, one nested in the other', 'Easy', NULL, NULL),
(9, 'The number of swappings needed to sort the numbers 8, 22, 7, 9, 31, 5, 13 in ascending order, using bubble sort is\r\n', 'option4', '11', '12', '13', '10', 'Easy', NULL, NULL),
(10, 'Assume that we use Bubble Sort to sort n distinct elements in ascending order. When does the best case of Bubble Sort occur?', 'option1', 'When elements are sorted in ascending order', 'When elements are sorted in descending order', 'When elements are not sorted by any order', 'There is no best case for Bubble Sort. It always takes O(n*n) time', 'Hard', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `linux`
--

CREATE TABLE `linux` (
  `id` int(6) NOT NULL,
  `Question` varchar(255) DEFAULT NULL,
  `Answer` varchar(255) DEFAULT NULL,
  `Option1` varchar(255) DEFAULT NULL,
  `Option2` varchar(255) DEFAULT NULL,
  `Option3` varchar(255) DEFAULT NULL,
  `Option4` varchar(255) DEFAULT NULL,
  `Level` varchar(255) DEFAULT NULL,
  `Right_marks` int(6) DEFAULT NULL,
  `Wrong_marks` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `linux`
--

INSERT INTO `linux` (`id`, `Question`, `Answer`, `Option1`, `Option2`, `Option3`, `Option4`, `Level`, `Right_marks`, `Wrong_marks`) VALUES
(1, 'Which command is used to close the vi editor?', 'option2', 'q', 'wq', 'both (a) and (b)', 'none of the mentioned', 'Easy', NULL, NULL),
(2, 'In vi editor, the key combination CTRL+f', 'option3', 'moves screen down one page', 'moves screen up one page', 'moves screen up one line', 'moves screen down one line', 'Easy', NULL, NULL),
(3, 'Which vi editor command copies the current line of the file?', 'option2', 'yy', 'yw', 'yc', 'none of the mentioned', 'Easy', NULL, NULL),
(4, 'Which command is used to delete the character before the cursor location in vi editor?', 'option1', 'X', 'x', 'D', 'd', 'Easy', NULL, NULL),
(5, 'what is correct mask for A class IP???', 'option2', '255.0.0.0', '255.255.255.0', '255.255.0.0', 'none of these', 'Easy', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `merge_sort`
--

CREATE TABLE `merge_sort` (
  `id` int(6) NOT NULL,
  `Question` varchar(255) DEFAULT NULL,
  `Answer` varchar(255) DEFAULT NULL,
  `Option1` varchar(255) DEFAULT NULL,
  `Option2` varchar(255) DEFAULT NULL,
  `Option3` varchar(255) DEFAULT NULL,
  `Option4` varchar(255) DEFAULT NULL,
  `Level` varchar(255) DEFAULT NULL,
  `Right_marks` int(6) DEFAULT NULL,
  `Wrong_marks` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merge_sort`
--

INSERT INTO `merge_sort` (`id`, `Question`, `Answer`, `Option1`, `Option2`, `Option3`, `Option4`, `Level`, `Right_marks`, `Wrong_marks`) VALUES
(1, 'Merge sort uses which of the following technique to implement sorting?', 'option4', 'backtracking', 'greedy algorithm', 'divide and conquer', 'dynamic programming', 'Easy', NULL, NULL),
(2, 'What is the average case time complexity of merge sort?', 'option1', 'O(n log n)', 'O(n2)', 'O(n2 log n)', 'O(n log n2)', 'Easy', NULL, NULL),
(3, ' What is the auxiliary space complexity of merge sort?', 'option2', 'O(1)', 'O(n)', 'O(log n)', 'O(n log n)', 'Hard', NULL, NULL),
(4, 'Which of the following is not in place sorting algorithm by default?', 'option1', 'merge sort', 'quick sort', 'heap sort', 'insertion sort', 'Hard', NULL, NULL),
(5, 'Choose the incorrect statement about merge sort from the following?', 'option3', ' it is a comparison based sort', ' it is an adaptive algorithm', 'it is not an in place algorithm', ' it is stable algorithm', 'Easy', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `multi`
--

CREATE TABLE `multi` (
  `id` int(6) NOT NULL,
  `Question` varchar(255) DEFAULT NULL,
  `Answer` varchar(255) DEFAULT NULL,
  `Option1` varchar(255) DEFAULT NULL,
  `Option2` varchar(255) DEFAULT NULL,
  `Option3` varchar(255) DEFAULT NULL,
  `Option4` varchar(255) DEFAULT NULL,
  `Level` varchar(255) DEFAULT NULL,
  `Right_marks` int(6) DEFAULT NULL,
  `Wrong_marks` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `multi`
--

INSERT INTO `multi` (`id`, `Question`, `Answer`, `Option1`, `Option2`, `Option3`, `Option4`, `Level`, `Right_marks`, `Wrong_marks`) VALUES
(1, '3*4', 'option3', '11', '10', '12', '16', 'Hard', NULL, NULL),
(2, '50*50', 'option1', '2500', '2400', '2300', '2200', 'Easy', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `php`
--

CREATE TABLE `php` (
  `id` int(6) NOT NULL,
  `Question` varchar(255) DEFAULT NULL,
  `Answer` varchar(255) DEFAULT NULL,
  `Option1` varchar(255) DEFAULT NULL,
  `Option2` varchar(255) DEFAULT NULL,
  `Option3` varchar(255) DEFAULT NULL,
  `Option4` varchar(255) DEFAULT NULL,
  `Level` varchar(255) DEFAULT NULL,
  `Right_marks` int(6) DEFAULT NULL,
  `Wrong_marks` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `php`
--

INSERT INTO `php` (`id`, `Question`, `Answer`, `Option1`, `Option2`, `Option3`, `Option4`, `Level`, `Right_marks`, `Wrong_marks`) VALUES
(1, 'What does PHP stand for?', 'option1', 'PHP: Hypertext Preprocessor ', 'Private Home Page', 'Personal Hypertext Processor', 'None of these', 'Easy', NULL, NULL),
(2, 'All variables in PHP start with which symbol?', 'option2', '&', '$', '!', 'None of these', 'Easy', NULL, NULL),
(3, 'Which one of these variables has an illegal name?', 'option1', '$my-Var', '$myVar', '$my_Var', 'None of these', 'Easy', NULL, NULL),
(4, 'Which operator is used to check if two values are equal and of same data type?', 'option1', '===', '!=', '=', '==', 'Easy', NULL, NULL),
(5, 'How do you create a cookie in PHP?', 'option3', 'createcookie', 'makecookie()', 'setcookie()  ', 'None of these', 'Easy', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tense`
--

CREATE TABLE `tense` (
  `id` int(6) NOT NULL,
  `Question` varchar(255) DEFAULT NULL,
  `Answer` varchar(255) DEFAULT NULL,
  `Option1` varchar(255) DEFAULT NULL,
  `Option2` varchar(255) DEFAULT NULL,
  `Option3` varchar(255) DEFAULT NULL,
  `Option4` varchar(255) DEFAULT NULL,
  `Level` varchar(255) DEFAULT NULL,
  `Right_marks` int(6) DEFAULT NULL,
  `Wrong_marks` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tense`
--

INSERT INTO `tense` (`id`, `Question`, `Answer`, `Option1`, `Option2`, `Option3`, `Option4`, `Level`, `Right_marks`, `Wrong_marks`) VALUES
(1, 'This time tomorrow, I _______________________________ on the beach.', 'option3', 'am lying', 'will lie', 'will be lying', 'was lying', 'Easy', NULL, NULL),
(2, 'Phone me when you ___________________________________ time.', 'option2', 'should have', 'have', 'would have', 'will have', 'Easy', NULL, NULL),
(3, 'I will follow you whenever you ____________________________ ', 'option1', 'go', 'goes', 'will go ', 'come', 'Easy', NULL, NULL),
(4, 'You __________________________ an accident if you go on driving like that.', 'option2', 'are having', 'will have', 'would have', 'were having', 'Easy', NULL, NULL),
(5, 'She said that she _________________________________ help me', 'option3', 'will', 'shall', 'would', 'should', 'Easy', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bio_quiz`
--
ALTER TABLE `bio_quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bubble_sort`
--
ALTER TABLE `bubble_sort`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linux`
--
ALTER TABLE `linux`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merge_sort`
--
ALTER TABLE `merge_sort`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi`
--
ALTER TABLE `multi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `php`
--
ALTER TABLE `php`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tense`
--
ALTER TABLE `tense`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bio_quiz`
--
ALTER TABLE `bio_quiz`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bubble_sort`
--
ALTER TABLE `bubble_sort`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `linux`
--
ALTER TABLE `linux`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `merge_sort`
--
ALTER TABLE `merge_sort`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `multi`
--
ALTER TABLE `multi`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `php`
--
ALTER TABLE `php`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tense`
--
ALTER TABLE `tense`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
