-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 14, 2017 at 01:15 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vivec`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(2) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `admin_status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_status`) VALUES
(1, 'Admin', 'admin@me.com', '111111', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(2) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(5, 'Special Events'),
(6, 'Public Relations'),
(7, 'Design');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `client_id` int(3) NOT NULL,
  `client_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`client_id`, `client_image`) VALUES
(2, 'upload_image/client_image/Standard-bank-logo300-200x46_thumb.png'),
(3, 'upload_image/client_image/Shell200-e1415049065861_thumb.png'),
(4, 'upload_image/client_image/Standard-bank-logo300-200x461_thumb.png'),
(12, 'upload_image/client_image/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `event_id` int(3) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_slider_0` varchar(200) NOT NULL,
  `event_slider_1` varchar(200) DEFAULT NULL,
  `event_slider_2` varchar(200) DEFAULT NULL,
  `event_slider_3` varchar(200) DEFAULT NULL,
  `event_slider_4` varchar(200) DEFAULT NULL,
  `event_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`event_id`, `event_name`, `event_slider_0`, `event_slider_1`, `event_slider_2`, `event_slider_3`, `event_slider_4`, `event_description`) VALUES
(1, 'ddsfds', 'upload_image/event_slider_0/20131115_152234-270x330_thumb.jpg', NULL, NULL, NULL, NULL, ''),
(2, '77777777', 'upload_image/event_slider_0/IMG_1917-copy-270x330_thumb.jpg', 'upload_image/event_slider_1/IMG_1917-copy-270x330_thumb.jpg', 'upload_image/event_slider_3/IMG_1917-copy-270x330_thumb.jpg', NULL, NULL, 'vbdfgfd'),
(3, 'xxxxxxxxxxxxxxxxx', 'upload_image/event_slider_0/MG_8649-copy-270x330_thumb.jpg', 'upload_image/event_slider_1/logo_thumb.png', 'upload_image/event_slider_3/20131115_152234-270x330_thumb.jpg', '', NULL, 'gggggggggggggggggggggggggggggggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `project_id` int(3) NOT NULL,
  `category_id` int(2) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `project_image` varchar(200) NOT NULL,
  `project_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`project_id`, `category_id`, `project_name`, `project_image`, `project_description`) VALUES
(1, 7, 'kll', 'upload_image/project_image/project_thumb.jpg', 'mkjlj'),
(2, 6, 'ddddddddd', 'upload_image/project_image/ava_thumb.jpg', 'dddddddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(2) NOT NULL,
  `slider_image` varchar(200) NOT NULL,
  `slider_heading` varchar(100) NOT NULL,
  `slider_subheading` varchar(100) NOT NULL,
  `slider_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_image`, `slider_heading`, `slider_subheading`, `slider_link`) VALUES
(10, 'upload_image/slider_image/CXGCFG_thumb.jpg', 'Welcome', 'dgfdsgdsg', ''),
(11, 'upload_image/slider_image/DD_thumb.jpg', 'ssssssssssssss', 'sssssssssssssssssssssssssssssssss', ''),
(12, 'upload_image/slider_image/EE_thumb.jpg', '', '', ''),
(13, 'upload_image/slider_image/JJ_thumb.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE `tbl_team` (
  `team_id` int(3) NOT NULL,
  `team_image` varchar(200) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `team_designation` varchar(100) NOT NULL,
  `team_facebook_link` varchar(200) NOT NULL,
  `team_twitter_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`team_id`, `team_image`, `team_name`, `team_designation`, `team_facebook_link`, `team_twitter_link`) VALUES
(1, 'upload_image/team_image/1_thumb.jpg', 'Zeaul Huda Hemal', 'Co-Founder', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `testimonial_id` int(4) NOT NULL,
  `testimonial_details` text NOT NULL,
  `testimonial_name` varchar(50) NOT NULL,
  `testimonial_designation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`testimonial_id`, `testimonial_details`, `testimonial_name`, `testimonial_designation`) VALUES
(1, 'The Moshate Media team was professional and delivered timeously.', 'DR B Semete-Makokotlela', 'Innovation Hub');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `client_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `event_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `project_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_team`
--
ALTER TABLE `tbl_team`
  MODIFY `team_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `testimonial_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
