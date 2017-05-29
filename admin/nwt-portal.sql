-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2017 at 03:45 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nwt-portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userID` int(11) NOT NULL,
  `fullName` varchar(60) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPass` varchar(100) NOT NULL,
  `userStatus` enum('SuperAdmin','Admin') NOT NULL DEFAULT 'Admin',
  `tokenCode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userID`, `fullName`, `userEmail`, `userPass`, `userStatus`, `tokenCode`) VALUES
(1, 'Falua Temitope Oyewole', 'emmat0616@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'SuperAdmin', '4e7c53700487874da888dc986bb43cc8'),
(5, 'Banjo Mofesola Paul', 'mpdepaule1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin', 'b6d037c3045b4bf4b676b0c3614d3598'),
(8, 'Julius Jake', 'julius@jake.julius', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin', '1d0a8a1a256d7feeb3063853fade91da');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `userpass` varchar(255) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `dofb` varchar(40) NOT NULL,
  `address` text NOT NULL,
  `s_origin` varchar(50) NOT NULL,
  `s_residence` varchar(50) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `edu_level` varchar(100) NOT NULL,
  `prog_lang` varchar(50) NOT NULL,
  `training_track` varchar(50) NOT NULL,
  `per_computer` varchar(50) NOT NULL,
  `regular_internet` varchar(50) NOT NULL,
  `aver_time_spent` varchar(40) NOT NULL,
  `training_commit` varchar(50) NOT NULL,
  `code_reason` text NOT NULL,
  `knowledge_gained` text NOT NULL,
  `passion_about` text NOT NULL,
  `cohorts_id` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `cohorts`
--

CREATE TABLE `cohorts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL DEFAULT 'INACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `cohorts`
--

INSERT INTO `cohorts` (`id`, `name`, `created_at`, `status`) VALUES
(1, 'Cohort 1', '2017-04-19 17:14:00', 'ACTIVE'),
(2, 'Cohort 2', '2017-04-19 17:14:00', 'INACTIVE'),
(3, 'Cohort 3', '2017-04-19 17:14:00', 'INACTIVE'),
(4, 'Cohort 4', '2017-04-19 17:14:00', 'INACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `c_states`
--

CREATE TABLE `c_states` (
  `id` int(11) NOT NULL,
  `cohorts_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `c_states`
--

INSERT INTO `c_states` (`id`, `cohorts_id`, `name`, `created_at`) VALUES
(1, 1, 'Ondo', '2017-04-19 17:16:35'),
(2, 1, 'Ekiti', '2017-04-19 17:16:35'),
(3, 1, 'Ogun', '2017-04-19 17:17:08'),
(4, 2, 'Imo', '2017-04-19 17:17:08'),
(5, 2, 'Akwa Ibom', '2017-04-19 17:17:37'),
(6, 2, 'Anambra', '2017-04-19 17:17:37'),
(7, 3, 'Edo', '2017-04-19 17:18:09'),
(8, 3, 'Kogi', '2017-04-19 17:18:09'),
(9, 3, 'Kwara', '2017-04-19 17:18:38'),
(10, 4, 'Kebbi', '2017-04-19 17:18:38'),
(11, 4, 'Kano', '2017-04-19 17:19:09'),
(12, 4, 'Taraba', '2017-04-19 17:19:09');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `type` varchar(40) NOT NULL,
  `size` varchar(40) NOT NULL,
  `file_url` varchar(200) NOT NULL,
  `file_desc` text NOT NULL,
  `week` varchar(20) NOT NULL,
  `downloads` int(11) NOT NULL DEFAULT '0',
  `uploader_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `media_cohorts`
--

CREATE TABLE `media_cohorts` (
  `id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `cohort_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentdata`
--

CREATE TABLE `studentdata` (
  `id` int(11) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `userpass` varchar(255) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `dofb` varchar(40) NOT NULL,
  `address` text NOT NULL,
  `s_origin` varchar(50) NOT NULL,
  `s_residence` varchar(50) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `edu_level` varchar(100) NOT NULL,
  `prog_lang` varchar(50) NOT NULL,
  `training_track` varchar(50) NOT NULL,
  `per_computer` varchar(50) NOT NULL,
  `regular_internet` varchar(50) NOT NULL,
  `aver_time_spent` varchar(40) NOT NULL,
  `training_commit` varchar(50) NOT NULL,
  `code_reason` text NOT NULL,
  `knowledge_gained` text NOT NULL,
  `passion_about` text NOT NULL,
  `cohorts_id` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `student_progress`
--

CREATE TABLE `student_progress` (
  `id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `studentdata_id` int(11) NOT NULL,
  `download_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cohorts_id` (`cohorts_id`,`state`),
  ADD KEY `state` (`state`);

--
-- Indexes for table `cohorts`
--
ALTER TABLE `cohorts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_states`
--
ALTER TABLE `c_states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cohorts_id` (`cohorts_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uploader_id` (`uploader_id`);

--
-- Indexes for table `media_cohorts`
--
ALTER TABLE `media_cohorts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_id` (`media_id`,`cohort_id`),
  ADD KEY `cohort_id` (`cohort_id`);

--
-- Indexes for table `studentdata`
--
ALTER TABLE `studentdata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cohorts_id` (`cohorts_id`,`state`),
  ADD KEY `state` (`state`);

--
-- Indexes for table `student_progress`
--
ALTER TABLE `student_progress`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pair_index` (`media_id`,`studentdata_id`),
  ADD KEY `studentdata_id` (`studentdata_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cohorts`
--
ALTER TABLE `cohorts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `c_states`
--
ALTER TABLE `c_states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `media_cohorts`
--
ALTER TABLE `media_cohorts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_progress`
--
ALTER TABLE `student_progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicants`
--
ALTER TABLE `applicants`
  ADD CONSTRAINT `applicants_ibfk_1` FOREIGN KEY (`cohorts_id`) REFERENCES `cohorts` (`id`),
  ADD CONSTRAINT `applicants_ibfk_2` FOREIGN KEY (`state`) REFERENCES `c_states` (`id`);

--
-- Constraints for table `c_states`
--
ALTER TABLE `c_states`
  ADD CONSTRAINT `c_states_ibfk_1` FOREIGN KEY (`cohorts_id`) REFERENCES `cohorts` (`id`);

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`uploader_id`) REFERENCES `admin` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `media_cohorts`
--
ALTER TABLE `media_cohorts`
  ADD CONSTRAINT `media_cohorts_ibfk_1` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `media_cohorts_ibfk_2` FOREIGN KEY (`cohort_id`) REFERENCES `cohorts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studentdata`
--
ALTER TABLE `studentdata`
  ADD CONSTRAINT `studentdata_ibfk_1` FOREIGN KEY (`cohorts_id`) REFERENCES `cohorts` (`id`),
  ADD CONSTRAINT `studentdata_ibfk_2` FOREIGN KEY (`state`) REFERENCES `c_states` (`id`);

--
-- Constraints for table `student_progress`
--
ALTER TABLE `student_progress`
  ADD CONSTRAINT `student_progress_ibfk_1` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`),
  ADD CONSTRAINT `student_progress_ibfk_2` FOREIGN KEY (`studentdata_id`) REFERENCES `studentdata` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
