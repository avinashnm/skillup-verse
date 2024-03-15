-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 05:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skillup_verse`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `course_id` varchar(20) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `course_description` varchar(255) NOT NULL,
  `instructor_username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`course_id`, `course_title`, `category`, `semester`, `department`, `course_description`, `instructor_username`) VALUES
('UCS 1502', 'Computer Organization and Architecture', 'Allied Optional (AO)', 1, 'Computer Science', '', 'jeraldinico'),
('UCS 1506', 'Web Programming Lab', 'Major Core (MC)', 1, 'Computer Science', '', 'anandarajmd'),
('UCS 1508', 'Mathematics for Computer Science', 'Allied Optional (AO)', 1, 'Computer Science', '', 'AntonySAlexander'),
('UCS 1509', 'ASP', 'Allied Required (AR)', 1, 'Computer Science', '', 'anandarajmd'),
('UCS 1610', 'Object Oriented Programming using C++', 'Allied Optional (AO)', 1, 'Computer Science', '', 'anandarajmd'),
('UCS 1910', 'Object Oriented Programming using C++ lab', 'Allied Optional (AO)', 1, 'Computer Science', 'good course', 'anandarajmd'),
('UTA 1501', 'General Tamil', 'Allied Optional (AO)', 1, 'Tamil', '', 'michaelraj');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_course`
--

CREATE TABLE `instructor_course` (
  `instructor_name` varchar(255) NOT NULL,
  `course_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructor_details`
--

CREATE TABLE `instructor_details` (
  `username` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `shift` enum('I','II') NOT NULL,
  `department` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `assigned_courses` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor_details`
--

INSERT INTO `instructor_details` (`username`, `full_name`, `shift`, `department`, `password`, `created_at`, `assigned_courses`) VALUES
('anandarajmd', 'Ananda Raj M D', 'II', 'Computer Science', '$2y$10$wRCGXYXFixVRfr1GxR4pVuijdN1t.sbGDSpk6QXh47vcAeMKaJQGq', '2024-02-27 20:09:24', NULL),
('AntonySAlexander', 'Antony S. Alexander', 'II', 'Computer Science', '$2y$10$qRa3WxRelPNnBoOzGPKPA.9WeSrXH3IQ13Mzy8QG0LRfQLg/4RyzS', '2024-02-27 18:23:57', NULL),
('bharathidason', 'Bharathidason S', 'II', 'Computer Science', '$2y$10$Ffjfwxt8OHkaOQ7H1N1gPubNT5IzX29hP1v.GN2COpI2qHzCUQKP.', '2024-03-04 16:04:12', NULL),
('jeraldinico', 'Jerald Inico J', 'II', 'Computer Science', '$2y$10$LZtWBb8XdLZwkprYEuh3z.anzUS.cCOupZT7AG6f4b2u3ZhRrrdny', '2024-02-27 18:10:50', NULL),
('michaelraj', 'Michael Raj', 'I', 'Tamil', '$2y$10$kj9ASC6dbo1Oh44O6ts8KujmWDr1er8mhRYOLV9kL2YKc95OqX71K', '2024-03-14 17:39:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `full_name` varchar(255) NOT NULL,
  `deptno` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`full_name`, `deptno`, `email`, `password`, `created_at`) VALUES
('Krishnan', '21-UCS-001', '21ucs001@loyolacollege.edu', '$2y$10$zAR5Z/O/qBKuvpDhdSLJAef7xHGEtIFu5/l1cPwpivzpzHqAtPpLy', '2024-03-04 17:25:40'),
('Raphael Augusto A', '21-UCS-002', '21ucs002@loyolacollege.edu', '$2y$10$kusYZgO734jhNJpxwpPcpuQhWI.AjVaHuWwYGUZZyDM/cqoqkLVHC', '2024-03-04 19:10:15'),
('John Vincent A', '21-UCS-005', '21ucs005@loyolacollege.edu', '$2y$10$zMi3wo3LHrFEgWcrnwPDNufKHrI.MYX5wVM3yTpYJg7WKJYJ6c0iC', '2024-03-04 19:35:40'),
('Samsun Sylvester S', '21-UCS-006', '21ucs006@loyolacollege.edu', '$2y$10$eT.UTMTKsGAOMrJ9iS.TN.2MjMejFHuA/YV.e6TFchozJeKv6WolS', '2024-03-04 19:12:43'),
('Avinash N', '21-UCS-008', '21ucs008@loyolacollege.edu', '$2y$10$7/0UFS.SHk1uUDd76O0QQeYzAeTpcXDwi1VSuZq.ro5.O/wUi8L7O', '2024-02-27 16:05:51'),
('Dinesh Raju S', '21-UCS-010', '21ucs010@loyolacollege.edu', '$2y$10$prIzV2Xcd/W7j7fDF3TjE.JaoKS5Y2WIta9Aud1uHNsm2inWZgA/G', '2024-03-04 19:24:45'),
('Pinniti Swapna Rishi', '21-UCS-011', '21ucs011@loyolacollege.edu', '$2y$10$EdwqhK3l5dctAeM7b4RGl.yokz/31Jrgqlcm9F0.aLPasRfHogltq', '2024-03-04 19:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_files`
--

CREATE TABLE `uploaded_files` (
  `id` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `instructor_username` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploaded_files`
--

INSERT INTO `uploaded_files` (`id`, `file_name`, `instructor_username`, `upload_date`) VALUES
('UCS 1502_chapter - 3 COA Basics', 'EDC Assignment.docx', 'jeraldinico', '2024-03-15 00:33:00'),
('UCS 1502_chapter -1 - COA basics', 'Adhar card.pdf', 'jeraldinico', '2024-03-15 00:19:28'),
('UCS 1502_Chapter-1 COA intermediate', 'Adhar card.pdf', 'jeraldinico', '2024-03-15 00:36:20'),
('UCS 1502_Chapter-2 COA basics', '12th statement of marks (1).pdf', 'jeraldinico', '2024-03-15 00:27:55'),
('UCS 1502_Chapter-2 COA core', '21-UCS-008 _EDC Assignment.docx', 'jeraldinico', '2024-03-15 00:39:14'),
('UCS 1506_Chapter-1 html basics', '21-UCS-008 _EDC Assignment.docx', 'anandarajmd', '2024-03-15 00:15:15'),
('UCS 1509_chapter-1 html basics', '21-UCS-008 _EDC Assignment.docx', 'anandarajmd', '2024-03-15 00:15:31'),
('UCS 1610_Chapter-2 html basics', 'CV template.txt', 'anandarajmd', '2024-03-15 00:17:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `fk_instructor_username` (`instructor_username`);

--
-- Indexes for table `instructor_course`
--
ALTER TABLE `instructor_course`
  ADD PRIMARY KEY (`instructor_name`,`course_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `instructor_details`
--
ALTER TABLE `instructor_details`
  ADD PRIMARY KEY (`username`),
  ADD KEY `fk_assigned_courses` (`assigned_courses`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`deptno`);

--
-- Indexes for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instructor_username` (`instructor_username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_details`
--
ALTER TABLE `course_details`
  ADD CONSTRAINT `fk_instructor_username` FOREIGN KEY (`instructor_username`) REFERENCES `instructor_details` (`username`) ON DELETE SET NULL;

--
-- Constraints for table `instructor_course`
--
ALTER TABLE `instructor_course`
  ADD CONSTRAINT `instructor_course_ibfk_1` FOREIGN KEY (`instructor_name`) REFERENCES `instructor_details` (`username`),
  ADD CONSTRAINT `instructor_course_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course_details` (`course_id`);

--
-- Constraints for table `instructor_details`
--
ALTER TABLE `instructor_details`
  ADD CONSTRAINT `fk_assigned_courses` FOREIGN KEY (`assigned_courses`) REFERENCES `course_details` (`course_id`) ON DELETE CASCADE;

--
-- Constraints for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  ADD CONSTRAINT `uploaded_files_ibfk_1` FOREIGN KEY (`instructor_username`) REFERENCES `instructor_details` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
