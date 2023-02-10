-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 12, 2022 at 07:15 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmanage`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) NOT NULL,
  `course_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`) VALUES
(1, 'English'),
(2, 'Urdu'),
(3, 'Math'),
(4, 'Science'),
(5, 'Islamiat'),
(6, 'Physics'),
(7, 'Chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `employattendances`
--

CREATE TABLE `employattendances` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `emp_no` varchar(50) DEFAULT NULL,
  `in_time` varchar(55) DEFAULT NULL,
  `out_time` varchar(55) DEFAULT NULL,
  `attendance` varchar(55) DEFAULT NULL,
  `Date` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employattendances`
--

INSERT INTO `employattendances` (`id`, `name`, `emp_no`, `in_time`, `out_time`, `attendance`, `Date`) VALUES
(1, 'Farhan', '101', '08:00', '02:00', 'present', '2022-07-13'),
(2, 'Mudassar', '102', '08:00', '14:00', 'present', '2022-07-13'),
(3, 'kashmala', '103', '08:00', '14:00', 'absent', '2022-07-13'),
(4, 'mohsin', '104', '08:00', '11:15', 'leave', '2022-07-13'),
(5, 'tahir', '105', '08:00', '14:00', 'present', '2022-07-13'),
(6, 'ali', '106', '08:00', '14:00', 'absent', '2022-07-13'),
(7, 'haider', '107', '08:00', '14:15', 'present', '2022-07-13'),
(8, 'kainat', '108', '08:00', '14:15', 'present', '2022-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `employs`
--

CREATE TABLE `employs` (
  `id` int(10) NOT NULL,
  `Full_name` varchar(50) NOT NULL,
  `emp_no` int(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cnic` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employs`
--

INSERT INTO `employs` (`id`, `Full_name`, `emp_no`, `dob`, `gender`, `address`, `salary`, `contact`, `email`, `cnic`, `user_type`) VALUES
(1, 'Farhan Saeed', 101, '4 feb', 'male', 'st 9 house 947 model town', '40000', '03000000998', 'farhan@school.com', '611019876567890', 'teacher'),
(2, 'Mudassar Chohan', 102, '4 april', 'male', 'chohan house 999', '150000', '0301776609', 'mudassar@school.com', '51101001929283', 'Principle'),
(3, 'kashmala', 103, '6 march', 'female', 'korang', '40000', '0394874635', 'kashmala123@gmail.com', '6118291092873', 'teacher'),
(4, 'mohsin bukhari', 104, '2 october', 'male', 'nai abadi', '45000', '03061718829', 'moshin69@gmail.com', '34098765123456', 'teacher'),
(5, 'tahir aslam', 105, '8 december', 'male', 'defence phase 2', '50000', '03048765498', 'tahir_aslam21@gmail.com', '61091982736546', 'teacher'),
(6, 'ali chohan', 106, '6 august', 'male', 'model town', '50000', '03984746789', 'ali.chohan31@gmail.com', '34098716524567', 'teacher'),
(7, 'haider sajjad', 107, '7 april', 'male', 'humak', '45000', '03129876545', 'haider@hotmail.com', '3403012345678', 'teacher'),
(8, 'kainat', 108, '13 march', 'female', 'st 9 house 947 model town', '50000', '03000000998', 'kainat123@gmail.com', '611019876567890', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `employs_detail`
--

CREATE TABLE `employs_detail` (
  `id` int(10) NOT NULL,
  `emp_id` int(50) NOT NULL,
  `class_id` int(50) NOT NULL,
  `course_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employ_course`
--

CREATE TABLE `employ_course` (
  `id` int(10) NOT NULL,
  `employ_id` int(50) NOT NULL,
  `course_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employ_course`
--

INSERT INTO `employ_course` (`id`, `employ_id`, `course_id`) VALUES
(1, 1, 1),
(2, 3, 2),
(3, 4, 3),
(4, 5, 4),
(5, 6, 6),
(6, 6, 7),
(7, 7, 6),
(8, 7, 7),
(9, 8, 2),
(10, 8, 5),
(11, 3, 5),
(16, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `employ_grade`
--

CREATE TABLE `employ_grade` (
  `id` int(10) NOT NULL,
  `employ_id` int(50) NOT NULL,
  `grade_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employ_grade`
--

INSERT INTO `employ_grade` (`id`, `employ_id`, `grade_id`) VALUES
(7, 1, 1),
(8, 1, 2),
(9, 1, 3),
(10, 3, 1),
(11, 3, 2),
(12, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(10) NOT NULL,
  `class_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `class_name`) VALUES
(1, 'one'),
(2, 'two'),
(3, 'three'),
(4, 'four'),
(5, 'five'),
(6, 'six'),
(7, 'seven'),
(8, 'eight'),
(9, 'nine'),
(10, 'ten'),
(11, 'eleven'),
(12, 'twelve');

-- --------------------------------------------------------

--
-- Table structure for table `grade_course`
--

CREATE TABLE `grade_course` (
  `id` int(10) NOT NULL,
  `grade_id` int(50) NOT NULL,
  `course_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade_course`
--

INSERT INTO `grade_course` (`id`, `grade_id`, `course_id`) VALUES
(17, 1, 1),
(18, 1, 2),
(19, 2, 1),
(20, 2, 3),
(21, 3, 3),
(22, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `grade_studentattendances`
--

CREATE TABLE `grade_studentattendances` (
  `id` int(10) NOT NULL,
  `studentattendance_id` int(50) NOT NULL,
  `grade_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade_studentattendances`
--

INSERT INTO `grade_studentattendances` (`id`, `studentattendance_id`, `grade_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 2),
(4, 4, 2),
(5, 5, 3),
(6, 6, 3),
(7, 7, 4),
(8, 8, 4),
(9, 9, 5),
(10, 10, 5),
(11, 11, 6),
(12, 12, 6),
(13, 13, 7),
(14, 14, 7),
(15, 15, 8),
(16, 16, 8),
(17, 17, 9),
(18, 18, 9),
(19, 19, 10),
(20, 20, 10),
(21, 21, 11),
(22, 22, 11),
(23, 23, 12),
(24, 24, 12);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `user_type` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `email`, `password`, `user_type`) VALUES
(101, 'clerk@school.com', 'clerk123', 'clerk'),
(102, 'teacher@school.com', 'teacher123', 'teacher'),
(103, 'primaryhead@school.com', 'primaryhead123', 'primaryhead'),
(104, 'middlehead@school.com', 'middlehead123', 'middlehead'),
(105, 'highhead@school.com', 'highhead123', 'highhead'),
(106, 'principal@school.com', 'principal123', 'principal'),
(107, 'educationofficer@school.com', 'educationofficer123', 'educationofficer'),
(108, 'admin@school.com', 'admin123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(10) NOT NULL,
  `std_id` int(50) NOT NULL,
  `obtained_marks` varchar(50) NOT NULL,
  `total_marks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `std_id`, `obtained_marks`, `total_marks`) VALUES
(1, 1, '345', '400'),
(2, 2, '300', '400'),
(3, 3, '321', '400'),
(4, 4, '301', '400'),
(5, 5, '198', '400'),
(6, 6, '399', '400'),
(7, 7, '376', '400'),
(8, 8, '250', '400'),
(9, 9, '390', '400'),
(10, 10, '100', '400'),
(11, 11, '345', '400'),
(12, 12, '220', '400'),
(13, 13, '223', '400'),
(14, 14, '328', '400'),
(15, 15, '234', '400'),
(16, 16, '345', '400'),
(17, 17, '550', '600'),
(18, 18, '590', '600'),
(19, 19, '360', '600'),
(20, 20, '543', '600'),
(21, 21, '543', '600'),
(22, 22, '290', '600'),
(23, 23, '484', '600'),
(24, 24, '599', '600');

-- --------------------------------------------------------

--
-- Table structure for table `studentattendances`
--

CREATE TABLE `studentattendances` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll_no` int(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentattendances`
--

INSERT INTO `studentattendances` (`id`, `name`, `roll_no`, `date`, `status`) VALUES
(1, 'Ahmad', 11, '2022-07-13', 'present'),
(2, 'Sikandar', 12, '2022-07-13', 'present'),
(3, 'kiran', 13, '2022-07-13', 'absent'),
(4, 'jawad', 14, '2022-07-13', 'leave'),
(5, 'alia', 15, '2022-07-13', 'present'),
(6, 'alishba', 16, '2022-07-13', 'present'),
(7, 'awais', 17, '2022-07-13', 'present'),
(8, 'haider', 18, '2022-07-13', 'present'),
(9, 'saarwar', 19, '2022-07-13', 'absent'),
(10, 'usama', 20, '2022-07-13', 'present'),
(11, 'amna', 21, '2022-07-13', 'present'),
(12, 'aqeela', 22, '2022-07-13', 'present'),
(13, 'asghar', 23, '2022-07-13', 'leave'),
(14, 'ali', 24, '2022-07-13', 'present'),
(15, 'muneeb', 25, '2022-07-13', 'present'),
(16, 'hussnain', 26, '2022-07-13', 'leave'),
(17, 'iqbal', 27, '2022-07-13', 'present'),
(18, 'akbar', 28, '2022-07-13', 'present'),
(19, 'umar', 29, '2022-07-13', 'present'),
(20, 'sajjad', 30, '2022-07-13', 'present'),
(21, 'akbar', 31, '2022-07-13', 'present'),
(22, 'abdullah', 32, '2022-07-13', 'present'),
(23, 'Natasha', 33, '2022-07-13', 'present'),
(24, 'sidra', 34, '2022-07-13', 'absent');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `Full_name` varchar(55) NOT NULL,
  `Rollno` varchar(55) NOT NULL,
  `dob` varchar(55) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `fee` varchar(55) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `Full_name`, `Rollno`, `dob`, `gender`, `fee`, `address`, `contact`) VALUES
(1, 'Ahmad Jawad', '11', '5 jan', 'male', '2000', 'st9 ferny street detroit', '03075646406'),
(2, 'Sikandar', '12', '13 march', 'male', '2000', 'st9 ferny street detroit', '098762551721'),
(3, 'kiran', '13', '2 april', 'female', '2000', 'gulberg', '0921827363'),
(4, 'jawad ali', '14', '4 feb', 'male', '1500', 'jhanda chichi', '0987654345'),
(5, 'alia', '15', '1 decmeber', 'female', '2000', 'ghori town phase 4', '03948847783'),
(6, 'alishba', '16', '2 jan', 'female', '2000', 'nai abadi', '03075646406'),
(7, 'awais', '17', '3 march', 'male', '2000', 'humak', '03094876722'),
(8, 'haider', '18', '2 sep', 'male', '2000', 'pindi bhattian', '0309498728'),
(9, 'saarwar', '19', '3 feb', 'male', '2000', 'pindi bhattian', '03982789192'),
(10, 'usama', '20', '2 feb', 'male', '2000', 'lahore', '03982771891'),
(11, 'amna', '21', '4 march', 'female', '1800', 'rwp', '02993888891'),
(12, 'aqeela', '22', '22 april', 'female', '1900', 'peshawar', '03987191381'),
(13, 'asghar', '23', '23 april', 'male', '2000', 'faisalabad', '029183401409'),
(14, 'ali', '24', '24 june', 'male', '2500', 'karachi', '09827812041'),
(15, 'muneeb', '25', '25 dec', 'male', '2500', 'queta', '0938801283091'),
(16, 'hussnain', '26', '26 august', 'male', '2200', 'marwa town', '09266737293'),
(17, 'iqbal', '27', '27 july', 'male', '2300', 'marwa town', '02379834983'),
(18, 'akbar', '28', '28 june', 'male', '2300', 'model town', '027239042209'),
(19, 'umar', '29', '29 nov', 'male', '2900', 'pindi bhattian', '0279872394'),
(20, 'sajjad', '30', '30 nov', 'male', '2500', 'lahore', '027982713982'),
(21, 'akbar', '31', '31 dec', 'male', '2000', 'kashmir', '0732793279'),
(22, 'abdullah', '32', '15 march', 'male', '2000', 'arra burji', '0214908734'),
(23, 'Natasha', '33', '4 august', 'female', '2000', 'highcourt road', '03128737942'),
(24, 'sidra', '34', '2 febuary', 'female', '2000', 'saddar rwp', '0981923981');

-- --------------------------------------------------------

--
-- Table structure for table `students_detail`
--

CREATE TABLE `students_detail` (
  `id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employattendances`
--
ALTER TABLE `employattendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employs`
--
ALTER TABLE `employs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employs_detail`
--
ALTER TABLE `employs_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `employs_detail_ibfk_1` (`class_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `employ_course`
--
ALTER TABLE `employ_course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employ_id` (`employ_id`),
  ADD KEY `employcourse_ibfk_1` (`course_id`);

--
-- Indexes for table `employ_grade`
--
ALTER TABLE `employ_grade`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grade_id` (`grade_id`),
  ADD KEY `employ_id` (`employ_id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_course`
--
ALTER TABLE `grade_course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grade_id` (`grade_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `grade_studentattendances`
--
ALTER TABLE `grade_studentattendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sattend_id` (`studentattendance_id`),
  ADD KEY `grade_studentattendances_ibfk_1` (`grade_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_ibfk_1` (`std_id`);

--
-- Indexes for table `studentattendances`
--
ALTER TABLE `studentattendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_detail`
--
ALTER TABLE `students_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `students_detail_ibfk_1` (`course_id`),
  ADD KEY `std_id` (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `employattendances`
--
ALTER TABLE `employattendances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `employs`
--
ALTER TABLE `employs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employs_detail`
--
ALTER TABLE `employs_detail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employ_course`
--
ALTER TABLE `employ_course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employ_grade`
--
ALTER TABLE `employ_grade`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `grade_course`
--
ALTER TABLE `grade_course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `grade_studentattendances`
--
ALTER TABLE `grade_studentattendances`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `studentattendances`
--
ALTER TABLE `studentattendances`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `students_detail`
--
ALTER TABLE `students_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employs_detail`
--
ALTER TABLE `employs_detail`
  ADD CONSTRAINT `employs_detail_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employ_grade`
--
ALTER TABLE `employ_grade`
  ADD CONSTRAINT `employ_grade_ibfk_1` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employ_grade_ibfk_2` FOREIGN KEY (`employ_id`) REFERENCES `employs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `grade_course`
--
ALTER TABLE `grade_course`
  ADD CONSTRAINT `grade_course_ibfk_1` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grade_course_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `grade_studentattendances`
--
ALTER TABLE `grade_studentattendances`
  ADD CONSTRAINT `grade_studentattendances_ibfk_1` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students_detail`
--
ALTER TABLE `students_detail`
  ADD CONSTRAINT `students_detail_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
