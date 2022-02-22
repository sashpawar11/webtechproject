-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 08:40 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

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
CREATE DATABASE IF NOT EXISTS `quiz` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `quiz`;

-- --------------------------------------------------------

--
-- Table structure for table `questions1`
--

DROP TABLE IF EXISTS `questions1`;
CREATE TABLE `questions1` (
  `ques_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `question` varchar(150) NOT NULL,
  `option1` varchar(150) NOT NULL,
  `option2` varchar(150) NOT NULL,
  `option3` varchar(150) NOT NULL,
  `option4` varchar(150) NOT NULL,
  `correct_option` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions1`
--

INSERT INTO `questions1` (`ques_id`, `category_id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_option`) VALUES
(1, 1, 'Between which two planets is the asteroid belt situated?', 'Mars and Jupiter', 'Earth and Mars', 'Jupiter and Saturn', 'Earth and Venus', 'Mars and Jupiter'),
(1, 2, 'What is the capital of France?', 'London', 'Paris', 'Berlin', 'Marseille', 'Paris'),
(1, 3, 'What were the pyramids of Egypt?', 'Administrative centers', 'Tombs', 'Command posts', 'Shrines', 'Tombs'),
(1, 4, 'Which country held the 2016 Summer Olympics?', 'China', 'Ireland', 'Brazil', 'Italy', 'Brazil'),
(2, 1, 'Which planet do the moons Oberon and Titania belong to?', 'Jupiter', 'Venus', 'Uranus', 'Earth', 'Uranus'),
(2, 2, 'Which is the smallest country by area?', 'Monaco', 'Nauru', 'Tuvalu', 'Vatican City', 'Vatican City'),
(2, 3, 'World War I ended in:', '1918', '1925', '1920', '1915', '1918'),
(2, 4, 'How many time zones are there in the world?', '7', '24', '23', '9', '24'),
(3, 1, 'What is the Great Red Spot on Jupiter?', 'A lake', 'A storm', 'A crater', 'A volcano', 'A storm'),
(3, 2, 'Which is the largest ocean?', 'Pacific', 'Arctic', 'Atlantic', 'Indian', 'Pacific'),
(3, 3, 'Which Indian president was involved in the struggle for Irish independence?', 'Neelam Sanjiva Reddy', 'Gulzarilal Nanda', 'V.V. Giri', 'S. Radhakrishnan', 'V.V. Giri'),
(3, 4, 'Who founded Microsoft?', 'Bill Hader', 'Steve Jobs', 'Bill Gates', 'Mark Zuckerberg', 'Bill Gates'),
(4, 1, 'What are comets mostly made up of?', 'Rusty metal', 'Poisonous liquid', 'Dirty ice and Dust', 'Hot, liquid rock', 'Dirty ice and Dust'),
(4, 2, 'Which is the only country that borders Canada?', 'United States', 'United Kingdoms', 'Mexico', 'Brazil', 'United States'),
(4, 3, 'How many kings of England have been named Henry?', '10', '8', '11', '9', '8'),
(4, 4, 'How many Harry Potter books are there?', '7', '8', '6', '10', '7'),
(5, 1, 'Which is the closest planet to the sun', 'Neptune', 'Earth', 'Venus', 'Mercury', 'Mercury'),
(5, 2, 'How many continents are there in the world?', 'Eight', 'Five', 'Seven', 'Six', 'Seven'),
(5, 3, 'Which of these was not an Egyptian pharaoh?', 'Ramses', 'Amenhotep', 'Tutankhamen', 'Shah Jahan', 'Shah Jahan'),
(5, 4, 'In which decade does the Netflix series Stranger Things take place?', 'the ‘70s', 'the ‘80s', 'the ‘90s', 'the early 2000s', 'the ‘80s'),
(6, 1, 'What is the smallest planet in the solar system by mass?', 'Mercury', 'Mars', 'Jupiter', 'Earth', 'Mercury'),
(6, 2, 'What is the total number of British overseas territories?', '10', '12', '14', '6', '14'),
(6, 3, 'The first European power who arrived in india via sea route was?', 'British', 'French', 'Dutch', 'Portuguese', ' Portuguese'),
(6, 4, 'Goa Shipyard Limited (GSL) was established in the year?', '1957', '1960', '1955', '1976', ' 1957'),
(7, 1, 'What two motions do all planets have?', 'Twist and Shout', 'Orbit and Spin', 'Rock and Roll', 'Wiggle and Wobble', 'Orbit and Spin'),
(7, 2, 'Which among the following tunnel connects France and Italy?', ' Mont Blanc Tunnel', 'St. Gothard Tunnel', 'Queens way Tunnel', ' Orange Fish Rivers Tunnel', ' Mont Blanc Tunnel'),
(7, 3, 'The British originally came to India as ?', 'Workers', 'Laboures', 'Traders', 'Tourists', 'Traders'),
(7, 4, 'Who won the cricket world cup in 2019?', 'England', 'India', 'Sri Lanka ', 'Australia', 'England'),
(8, 1, 'When did the space age begin?', '1969', '1941', '  1957', '1978', '1957'),
(8, 2, 'Which is the largest river in the world?', 'River Nile ', 'River Ganga', 'River Amazon', 'River Yellow', 'River Nile'),
(8, 3, 'In which language was Rigveda originally composed?', 'Pali', 'Sanskrit ', 'Brahmi', ' Prakrit', ' Sanskrit'),
(8, 4, 'Who founded Tesla?', 'Elon Musk', 'Mark Zuckerberg ', 'Bill Gates', ' Jeff Bezos', ' Elon Musk'),
(9, 1, 'What is the visible part of the sun called?', 'The Lithosphere', 'The Photosphere', 'The Atmosphere', 'The Stratosphere', 'The Photosphere'),
(9, 2, 'Which country has the longest coastline in the world?', 'Canada', 'India', ' Russia', ' China', ' Canada'),
(9, 3, 'Adolf Hitler was born in which country?', 'Canada', 'Austria', ' Russia', ' Germany', ' Austria'),
(9, 4, 'Who was known as Iron man of India?', 'Govind Ballabh Pant', 'Jawaharlal Nehru', ' 	Subhash Chandra Bose', ' Sardar Vallabhbhai Patel', ' Sardar Vallabhbhai Patel'),
(10, 1, 'Black hole is?', 'A dark hollow cavity', 'The other side of sun', 'The other side on the moon', 'A massive collapsing star ', ' A massive collapsing star'),
(10, 2, 'Which is the highest mountain in the world?', 'Manaslu', 'Makalu', 'K2', 'Mount Everest ', ' Mount Everest'),
(10, 3, 'The Battle of Plassey was fought in?', '1730', '1792', '1757', '1768 ', ' 1757 '),
(10, 4, 'Who won fifa world cup 2018?', 'France', 'England', 'Spain', 'Qatar ', ' France ');

-- --------------------------------------------------------

--
-- Table structure for table `question_solution`
--

DROP TABLE IF EXISTS `question_solution`;
CREATE TABLE `question_solution` (
  `ques_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_ans` varchar(150) DEFAULT NULL,
  `correct_option` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_solution`
--

INSERT INTO `question_solution` (`ques_id`, `category_id`, `user_ans`, `correct_option`) VALUES
(1, 1, 'Mars and Jupiter', 'Mars and Jupiter'),
(2, 1, 'Uranus', 'Uranus'),
(3, 1, 'A storm', 'A storm'),
(4, 1, '', 'Dirty ice and Dust'),
(5, 1, '', 'Mercury'),
(1, 2, 'Paris', 'Paris'),
(2, 2, '', 'Vatican City'),
(3, 2, '', 'Pacific'),
(4, 2, '', 'United States'),
(5, 2, '', 'Seven'),
(1, 3, 'Tombs', 'Tombs'),
(2, 3, '', '1918'),
(3, 3, '', 'V.V. Giri'),
(4, 3, '', '8'),
(5, 3, '', 'Shah Jahan'),
(1, 4, NULL, 'Brazil'),
(2, 4, NULL, '24'),
(3, 4, NULL, 'Bill Gates'),
(4, 4, NULL, '7'),
(5, 4, NULL, 'the ‘80s');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

DROP TABLE IF EXISTS `scores`;
CREATE TABLE `scores` (
  `user_id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `category_id` varchar(150) NOT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`user_id`, `username`, `category_id`, `score`) VALUES
(3, 's', '1', 15),
(3, 's', '2', 5),
(3, 's', '3', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'sash', 'test@gmail.com', '123'),
(2, 'test123', 'test123@t.c', '123'),
(3, 's', 's@s.com', 's');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question_solution`
--
ALTER TABLE `question_solution`
  ADD PRIMARY KEY (`category_id`,`ques_id`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `scores_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
