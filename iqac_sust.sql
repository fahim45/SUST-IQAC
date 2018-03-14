-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 05:22 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iqac_sust`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_date` date NOT NULL,
  `activity_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `department_name`, `activity_title`, `activity_place`, `activity_date`, `activity_description`, `image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Mathematics', 'EPR held on Mathematics department', 'Math Department', '2018-03-07', '<p style=\"text-align: justify;\">A three-day long External Peer Review (EPR) program held on Mathematics department which was organized by Institutional Quality Assurance Cell (IQAC). This program duration was 07 March, 2018 to 09 March, 2018.</p>\r\n<p style=\"text-align: justify;\">Three experts was selected for this program. One was foreign expert and others are national expert. They are Professor&nbsp;Dr. B V Babu from India, Professor&nbsp;Dr. Ms. Razina Sultana from Jagannath University, Professor&nbsp;Dr. Amal Krishna Halder from University of Dhaka.</p>', 'activity-images/1520918705.jpg', 1, '2018-03-12 23:25:06', '2018-03-13 00:44:40'),
(2, 'Sociology', 'Data Sharing held on Sociology Department', 'Sociology Department', '2018-03-09', '<p style=\"text-align: justify;\">The <strong>Department of Sociology</strong> of SUST presenting it\'s survey findings of self-assessment through a workshop held on&nbsp;09<sup>th</sup> March, 2018 at 2:00 PM.</p>\r\n<p style=\"text-align: justify;\">This workshops <strong>Chief Guest</strong> was Honorable Vice Chencellor Professor Farid Uddin Ahmed, <strong>Special Guest</strong> was IQAC Director Professor Dr. Abdul Awwal Biswas, <strong>Resource Person</strong> was IQAC Additional Director&nbsp;Professor Dr. Md. Ashraful Alam,&nbsp;<strong>Chair Person</strong> was Professor Dr Md Abdul Ghani, <strong>Coordinatior</strong>&nbsp;was Professor Dr A H M Belayet Hussain.</p>', 'activity-images/1520920627.jpg', 1, '2018-03-12 23:57:08', '2018-03-12 23:58:29'),
(3, 'Training', 'Training: Role, Responsibility & Ethical Principle', 'IQAC Conference Room', '2018-03-11', '<p style=\"text-align: justify;\">A day-long training program was organized by Institutional Quality Assurance Cell (IQAC) on <strong>Role and Responsibility &amp; Ethical Principles of the University Teacher</strong> of Shahjalal University of Science and Technology (SUST) on 11&nbsp;March, 2018.</p>\r\n<p style=\"text-align: justify;\">Chief Guest was&nbsp;Honorable Vice Chancellor of SUST, Professor Farid Uddin Ahmed. Professor&nbsp;Dr. M Anwar Hossain, Honorable Vice Chancellor, Jessore University of Science and Technology and&nbsp;Professor&nbsp;Dr. Mesbahuddin Ahmed, Former Head, QAU, UGC was the Resource Person of the workshop.</p>\r\n<p style=\"text-align: justify;\">Fifty one faculty members are participated in this training program. The training began with a welcome address by Professor Dr Abdul Awwal Biswas, Director, IQAC, SUST.&nbsp;Professor&nbsp;Dr. M Anwar Hossain and&nbsp;Professor&nbsp;Dr. Mesbahuddin Ahmed, in their presentation, discussed several topics including the importance of&nbsp;Role and Responsibility &amp; Ethical Principles of the University Teacher. It was an interactive session and participants found the trainingvery fruitful.</p>', 'activity-images/1520922607.jpg', 1, '2018-03-13 00:30:07', '2018-03-13 02:03:45'),
(4, 'Petroleum and Mining Engineering', 'Workshop on Improvement Plan by PME Department', 'PME Department', '2018-03-12', '<p style=\"text-align: justify;\">The <strong>Department of Petroleum and Mining Engineering (PME)</strong> of SUST organized a workshop&nbsp;on Improvement Plan. It helds on 12<sup>th</sup> March, 2018 at 2:00 PM.</p>\r\n<p style=\"text-align: justify;\">This workshops <strong>Chief Guest</strong> was Honorable Vice Chencellor Professor Farid Uddin Ahmed, <strong>Special Guest</strong> was IQAC Director Professor Dr. Abdul Awwal Biswas, <strong>Resource Person</strong> was IQAC Additional Director&nbsp;Professor Dr. Md. Ashraful Alam,&nbsp;<strong>Chair Person</strong> was Professor Dr Md Shofiqul Islam, <strong>Coordinatior</strong>&nbsp;was Associate Professor Dr M Farhad Howladar.</p>', 'activity-images/1520923383.jpg', 1, '2018-03-13 00:43:03', '2018-03-13 00:43:03');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase_no` tinyint(4) NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `phase_no`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Physics', 1, 1, '2017-12-30 23:06:51', '2017-12-30 23:06:51'),
(2, 'Forestry & Environmental Science', 1, 1, '2017-12-30 23:07:05', '2017-12-30 23:07:05'),
(3, 'Computer Science & Engineering', 1, 1, '2017-12-30 23:07:19', '2017-12-30 23:07:19'),
(4, 'Genetic Engineering & Biotechnology', 1, 1, '2017-12-30 23:07:28', '2017-12-30 23:07:28'),
(5, 'Chemical Engineering & Polymer Science', 1, 1, '2017-12-30 23:07:38', '2017-12-30 23:07:38'),
(6, 'Social Work', 1, 1, '2017-12-30 23:08:01', '2017-12-30 23:08:01'),
(7, 'Sociology', 1, 1, '2017-12-30 23:08:11', '2017-12-30 23:08:11'),
(8, 'Economics', 1, 1, '2017-12-30 23:08:20', '2017-12-30 23:08:20'),
(9, 'Anthropology', 2, 1, '2017-12-30 23:08:45', '2017-12-30 23:08:45'),
(10, 'Political Studies', 2, 1, '2017-12-30 23:08:54', '2017-12-30 23:08:54'),
(11, 'Chemistry', 2, 1, '2017-12-30 23:09:08', '2017-12-30 23:09:08'),
(12, 'Statistics', 2, 1, '2017-12-30 23:09:18', '2017-12-30 23:09:18'),
(13, 'Food Engineering & Tea Technology', 2, 1, '2017-12-30 23:09:32', '2017-12-30 23:09:32'),
(14, 'Mathematics', 2, 1, '2017-12-30 23:09:45', '2017-12-30 23:09:45'),
(15, 'English', 2, 1, '2017-12-30 23:09:53', '2017-12-30 23:09:53'),
(16, 'Industrial & Production Engineering', 2, 1, '2017-12-30 23:10:01', '2017-12-30 23:10:01'),
(17, 'Civil & Environmental Engineering', 2, 1, '2017-12-30 23:10:10', '2017-12-30 23:10:10'),
(18, 'Bangla', 3, 1, '2017-12-30 23:10:24', '2017-12-30 23:10:24'),
(19, 'Architecture', 3, 1, '2017-12-30 23:10:38', '2017-12-30 23:10:38'),
(20, 'Electrical & Electronics Engineering', 3, 1, '2017-12-30 23:10:55', '2017-12-30 23:10:55'),
(21, 'Petroleum and Mining Engineering', 3, 1, '2017-12-30 23:11:08', '2017-12-30 23:11:08'),
(22, 'Public Administration', 3, 1, '2017-12-30 23:11:16', '2017-12-30 23:11:16'),
(23, 'Business Administration', 3, 1, '2017-12-30 23:11:24', '2017-12-30 23:11:24'),
(24, 'Geography and Environment', 3, 1, '2017-12-30 23:11:34', '2017-12-30 23:11:34'),
(25, 'Biochemistry and Molecular Biology', 3, 1, '2017-12-30 23:11:47', '2017-12-31 00:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` tinyint(4) NOT NULL,
  `uploaded_file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `event_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `department_name`, `event_title`, `event_place`, `event_date`, `event_time`, `event_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Workshop', 'Workshop on Teaching Learning', 'IQAC Conference Room', '2018-03-27', '10:00:00', '<p>Workshop on Teaching Learning will be held on 27<sup>th</sup> March, 2018 to 29<sup>th</sup> March, 2018.&nbsp;Professor Farid Uddin Ahmed,&nbsp;Honorable Vice Chencellor, SUST is the Chief Guest for this workshop.</p>', 1, '2018-03-13 02:13:08', '2018-03-13 02:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `executive_staffs`
--

CREATE TABLE `executive_staffs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `executive_staffs`
--

INSERT INTO `executive_staffs` (`id`, `name`, `designation`, `office_address`, `mobile_no`, `email`, `details_link`, `picture`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Dr Abdul Awwal Biswas', 'Director', 'IQAC, SUST', '01711966412', 'awwal_biswas@yahoo.com', 'http://www.sust.edu/d/anp/faculty-profile-detail/343', 'staff-images/Professor Dr Abdul Awwal Biswas.jpg', 1, '2018-01-18 05:15:38', '2018-01-22 22:59:23'),
(2, 'Prof. Dr. Md. Ashraful Alam', 'Additional Director', 'IQAC, SUST', '01718364976', 'ashraf_sust@yahoo.com', 'http://www.sust.edu/d/che/faculty-profile-detail/83', 'staff-images/Prof. Dr. Md. Ashraful Alam.jpg', 1, '2018-01-18 05:19:23', '2018-01-18 05:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_type` tinyint(4) NOT NULL,
  `uploaded_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image_title`, `image_type`, `uploaded_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Workshop on Sharing the Survey Results of PAD', 1, 'gallery-images/1516773655.JPG', 1, '2017-12-17 03:55:15', '2018-01-24 00:40:14'),
(3, 'Director of Institutional Quality Assurance Cell, SUST', 4, 'gallery-images/1513593345.jpg', 1, '2017-12-18 04:35:45', '2018-01-24 00:11:00'),
(4, 'GEB departments EPRT meeting with VC', 3, 'gallery-images/1516773160.jpg', 1, '2018-01-23 23:52:41', '2018-01-23 23:52:41'),
(5, 'Meeting with BBA Peer Review Team and SAC', 1, 'gallery-images/1518946544.jpg', 1, '2018-02-18 03:35:44', '2018-02-18 03:35:44'),
(6, 'EPRT members meeting with all Office Head', 3, 'gallery-images/1518951260.jpg', 1, '2018-02-18 04:54:20', '2018-02-18 04:54:20'),
(7, 'CHE Exit Report hand over by Peer Review Team', 4, 'gallery-images/1519017051.jpg', 1, '2018-02-18 05:07:09', '2018-02-18 23:10:52'),
(8, 'SAC meeting with Honorable Vice Chancellor', 3, 'gallery-images/1519020491.jpg', 1, '2018-02-19 00:08:12', '2018-02-19 00:08:12'),
(9, 'Data Sharing of Anthropology Department', 1, 'gallery-images/1519021851.jpg', 1, '2018-02-19 00:30:52', '2018-02-19 00:30:52'),
(10, 'Data Sharing of Bangla (Technical Part).', 1, 'gallery-images/1519022712.jpg', 1, '2018-02-19 00:45:13', '2018-02-19 00:45:13');

-- --------------------------------------------------------

--
-- Table structure for table `home_contents`
--

CREATE TABLE `home_contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `home_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_contents`
--

INSERT INTO `home_contents` (`id`, `home_title`, `home_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Welcome to IQAC-SUST', '<p style=\"text-align: justify;\">The present government headed by the Hon&rsquo;ble Prime Minister Sheikh Hasina is committed to change the landscape of higher education through enhancement of quality of higher education and research in the country. For achieving the target of quality education the pGoB and the World Bank has generously funded the project which is known as Higher Education Quality Enhancement Project (HEQEP). The project is being implemented by the University Grants Commission, with help of the project officials and that of by the World Bank.</p>\r\n<p style=\"text-align: justify;\">Establishment of Quality Assurance Mechanism is one of the major components of HEQEP and for that establishing the Institutional Quality Assurance Cell (IQAC) in each of the universities has been already in place to create an enabling framework to provide improved quality of tertiary education. In this context as an &lsquo;A category&rsquo; university Shahjalal University of Science and technology (SUST) has been selected to establish IQAC from the first phase and IQAC-SUST is functioning from 1st January 2015.</p>\r\n<p style=\"text-align: justify;\">The main purpose of IQAC is to identify the gaps between the existing system and stakeholders demand and to enhance and maintain the standards of quality of higher education up to the international standards. At present IQAC, SUST is working to assess all 25 departments&rsquo; academic program to find out the major strength, opportunity, weakness etc. to make proper and appropriate strategic improvement plans for those programs as well as of university. Besides the assessment activities, IQAC is organizing different training, seminar and workshops to improve the quality and efficiency of academic and non-academic personnel. For instance so far IQAC has organized the following programs:</p>\r\n<ol style=\"list-style-type: lower-roman; text-align: justify;\">\r\n<li>Seminar on self-assessment: Awareness, motivation, team building and process.</li>\r\n<li>Seminar and workshop on curriculum development, pedagogy and metacognitive tools and techniques, report writing and documentation ethical principles of faculty members.</li>\r\n<li>Workshop on good governance: office and financial management.</li>\r\n<li>Meeting with stakeholders: Sharing views and opinions with Alumni, employers, guardians, students.</li>\r\n</ol>\r\n<p style=\"text-align: justify;\">IQAC is supposed to be engaged in implementation of the strategic improvement plans those will come out from the activities of self-assessment and peer observation of all 25 departments. It will also work on the modification of different existing academic and administrative rules of SUST based on the recommendation of concerned stakeholders. The ultimate goal of IQAC is to enhance and maintain the quality of education of SUST and getting accreditation of SUST nationally and internationally.</p>', 1, '2018-01-09 00:30:16', '2018-01-17 03:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_24_060711_create_events_table', 2),
(4, '2017_11_25_083035_create_activities_table', 3),
(5, '2017_11_25_114703_create_notices_table', 4),
(6, '2017_12_04_105338_create_downloads_table', 5),
(7, '2017_12_07_054355_create_executive_staffs_table', 6),
(8, '2017_12_12_102928_create_office_staffs_table', 7),
(9, '2017_12_17_063433_create_galleries_table', 8),
(10, '2017_12_24_105745_create_q_a_c_members_table', 9),
(11, '2017_12_31_044549_create_departments_table', 10),
(12, '2017_12_31_111712_create_s_a_c_members_table', 11),
(13, '2018_01_09_061651_create_home_contents_table', 12),
(14, '2018_01_10_100727_create_slider_photos_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `notice_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `office_staffs`
--

CREATE TABLE `office_staffs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL,
  `office_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `office_staffs`
--

INSERT INTO `office_staffs` (`id`, `name`, `designation`, `role`, `office_address`, `mobile_no`, `email`, `picture`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Md. Abdur Rouf', 'Office Manager', 1, 'IQAC, SUST', '01721260416', 'rouf84-iqac@sust.edu', 'staff-images/Md. Abdur Rouf.jpg', 1, '2017-12-12 04:35:07', '2018-01-31 02:15:22'),
(2, 'Ashok Barman Ashim', 'Accounts Officer', 1, 'IQAC, SUST', '01711276070', 'ashioknitu-iqac@sust.edu', 'staff-images/Ashok Barman Ashim.jpg', 1, '2017-12-13 02:09:04', '2018-01-31 02:15:16'),
(3, 'Fahim Foysal Kamal', 'IT Manager cum Communication Officer', 1, 'IQAC, SUST', '01722858886', 'fahim-iqac@sust.edu', 'staff-images/Fahim Foysal Kamal.jpg', 1, '2017-12-13 02:10:51', '2018-01-31 03:58:13'),
(4, 'Md. Parvez Mia', 'MLSS', 0, 'IQAC, SUST', '01774912523', 'parvez.iqac@gmail.com', 'staff-images/Md. Parvez Mia.jpg', 1, '2017-12-13 02:14:55', '2017-12-13 02:14:55'),
(5, 'Md. Yamin Ahmed', 'MLSS', 0, 'IQAC, SUST', '01516738295', 'yaminahmed0179@gmail.com', 'staff-images/Md. Yamin Ahmed.jpg', 1, '2017-12-13 02:15:42', '2017-12-13 02:15:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `q_a_c_members`
--

CREATE TABLE `q_a_c_members` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `q_a_c_members`
--

INSERT INTO `q_a_c_members` (`id`, `name`, `designation`, `office_address`, `mobile_no`, `email`, `details_link`, `picture`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Farid Uddin Ahmed', 'Chair & Vice Chancellor', 'VC Office, SUST', '714306, 712706, /201', 'vc@sust.edu', 'http://www.sust.edu/offices/message-from-vc', 'qac-images/Professor Farid Uddin Ahmed.jpg', 1, '2017-12-24 05:13:07', '2017-12-24 06:30:22'),
(2, 'Prof. Dr. Md. Ashraful Alam', 'Member Secretary & Additional Director', 'IQAC Office, SUST', '01718364976', 'ashraf_sust@yahoo.com', 'http://www.sust.edu/d/che/faculty-profile-detail/83', 'qac-images/Prof. Dr. Md. Ashraful Alam.jpg', 1, '2018-01-18 05:26:45', '2018-01-18 05:26:45'),
(3, 'Prof. Dr. Abdul Awwal Biswas', 'Member & Director', 'IQAC Office, SUST', '01711966412', 'awwal_biswas@yahoo.com', 'http://www.sust.edu/d/anp/faculty-profile-detail/343', 'qac-images/Prof. Dr. Abdul Awwal Biswas.jpg', 1, '2018-01-20 22:05:04', '2018-01-20 22:05:04'),
(4, 'Prof. Dr Md Shamsul Haque Prodhan', 'Member', 'Dept. of GEB, SUST', '01735948380', 'shamsulhp@yahoo.com', 'http://www.sust.edu/d/geb/faculty-profile-detail/191', 'qac-images/Prof. Dr Md Shamsul Haque Prodhan.jpg', 1, '2018-01-20 22:10:25', '2018-01-20 22:10:25'),
(5, 'Prof. Dr. A. Z. M. Manzoor Rashid', 'Member', 'Dept. of FES, SUST', '01711302555', 'pollen_forest@yahoo.com', 'http://www.sust.edu/d/fes/faculty-profile-detail/214', 'qac-images/Prof. Dr. A. Z. M. Manzoor Rashid.jpg', 1, '2018-01-20 22:17:00', '2018-01-20 22:17:00'),
(6, 'Prof. Dr. Md. Shahidur Rahman', 'Member', 'Dept. of CSE, SUST', '01914930807', 'rahmanms.bd@gmail.com', 'http://www.sust.edu/d/cse/faculty-profile-detail/31', 'qac-images/Prof. Dr. Md. Shahidur Rahman.jpg', 1, '2018-01-20 22:40:17', '2018-01-20 22:40:17'),
(7, 'Prof. Dr Mosaddak Ahmed Chowdhury', 'Member', 'Dept. of BBA, SUST', '01713300240', 'maclittlelife@yahoo.com', 'http://www.sust.edu/d/ban/faculty-profile-detail/485', 'qac-images/Prof. Dr Mosaddak Ahmed Chowdhury.jpg', 1, '2018-01-20 22:55:37', '2018-01-20 22:55:37'),
(8, 'Prof. Dr Md Abdul Ghani', 'Member', 'Dept. of Sociology, SUST', '01911613802', 'maghani_sust@yahoo.com', 'http://www.sust.edu/d/soc/faculty-profile-detail/465', 'qac-images/Prof. Dr Md Abdul Ghani.jpg', 1, '2018-01-20 23:01:16', '2018-01-20 23:01:16'),
(9, 'Prof. Dr Himadri Sekhar Roy', 'Member', 'Dept. of English, SUST', '01719266004', 'roy-eng@sust.edu', 'http://www.sust.edu/d/eng/faculty-profile-detail/399', 'qac-images/Prof. Dr Himadri Sekhar Roy.jpg', 1, '2018-01-20 23:04:49', '2018-01-20 23:04:49'),
(10, 'Prof. Md. Ahmed Kabir Chowdhury', 'Member', 'Dept. of Statistics, SUST', '01714227456', 'makc@sust.edu', 'http://www.sust.edu/d/sta/faculty-profile-detail/12', 'qac-images/Prof. Md. Ahmed Kabir Chowdhury.jpg', 1, '2018-01-20 23:11:30', '2018-01-20 23:11:30'),
(11, 'Mr. Md. Ishfaqul Hussain', 'Member', 'Register Office, SUST', '0821728338', 'registrar@sust.edu', 'http://www.sust.edu/offices/message-from-registrar', 'qac-images/Mr. Md. Ishfaqul Hussain.jpg', 1, '2018-01-20 23:20:20', '2018-01-20 23:20:20'),
(12, 'Mr. A N M Joynal Abedin', 'Member', 'Director of Accounts, Accounts Office, SUST', '01918581218', 'za-fnc@sust.edu', '#', 'qac-images/Mr. A N M Joynal Abedin.jpg', 1, '2018-01-20 23:24:23', '2018-01-20 23:24:23');

-- --------------------------------------------------------

--
-- Table structure for table `slider_photos`
--

CREATE TABLE `slider_photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_photos`
--

INSERT INTO `slider_photos` (`id`, `photo_title`, `slider_photo`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'Data Sharing of FET', 'slider-images/1516170645.jpg', 1, '2018-01-17 00:18:20', '2018-01-17 03:08:21'),
(3, 'Workshop on Good Governance', 'slider-images/1516179977.jpg', 1, '2018-01-17 03:06:18', '2018-01-17 03:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `s_a_c_members`
--

CREATE TABLE `s_a_c_members` (
  `id` int(10) UNSIGNED NOT NULL,
  `phase_no` tinyint(4) NOT NULL,
  `department_id` int(11) NOT NULL,
  `sac_one_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sac_one_role` tinyint(4) NOT NULL,
  `sac_one_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sac_one_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sac_two_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sac_two_role` tinyint(4) NOT NULL,
  `sac_two_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sac_two_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sac_three_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sac_three_role` tinyint(4) NOT NULL,
  `sac_three_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sac_three_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `s_a_c_members`
--

INSERT INTO `s_a_c_members` (`id`, `phase_no`, `department_id`, `sac_one_name`, `sac_one_role`, `sac_one_mobile`, `sac_one_email`, `sac_two_name`, `sac_two_role`, `sac_two_mobile`, `sac_two_email`, `sac_three_name`, `sac_three_role`, `sac_three_mobile`, `sac_three_email`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Dr. M. Habibul Ahsan', 1, '01712530871', 'h.ahsan@sust.edu', 'Dr. Shamsun Nahar Begum', 0, '01711065187', 'shumsun_phy@yahoo.com', 'Dr. Nazia Chowdhury', 0, '01733905271', 'nc-phy@sust.edu', 1, '2018-01-03 03:57:15', '2018-01-07 03:36:18'),
(2, 1, 2, 'Prof. Dr. Narayan Saha', 1, '01716072440', 'nsaha12010-fes@sust.edu', 'Dr. Md. Qumruzzaman Chowdhury', 0, '01734161326', 'qumrul@gmail.com', 'Dr. Mohammad Belal Uddin', 0, '01727767431', 'belal405@yahoo.com', 1, '2018-01-03 03:58:46', '2018-01-03 03:58:46'),
(3, 1, 3, 'Dr. Md. Shahidur Rahman', 1, '01914930807', 'rahmanms.bd@gmail.com', 'Dr. Md. Jafor Iqbal', 0, '0821713850', 'mzi@sust.edu', 'Dr. Reza Selim', 0, '01972357830', 'selim@sust.edu', 1, '2018-01-17 22:42:08', '2018-01-17 22:42:08'),
(4, 1, 4, 'Dr. Shamsul Haque Prodhan', 1, '01735948380', 'nsaha12010-fes@sust.edu', 'Dr. Kamrul Islam', 0, '01716439353', 'kamrul-gen@sust.edu', 'Dr. Abdulla Al Mamun', 0, '01714516919', 'mssohel@yahoo.com', 1, '2018-01-17 22:53:24', '2018-01-17 22:53:24'),
(5, 1, 5, 'Dr. Md. Mastabur Rahman', 1, '01711739130', 'mrahmanbsb@gmail.com', 'Dr. Aktharul Islam', 0, '01712071966', 'mislam@sust.edu', 'Dr. Eng. Salma Akter', 0, '01552438452', 'salma-cep@sust.edu', 1, '2018-01-17 22:55:21', '2018-01-17 22:55:21'),
(6, 1, 6, 'Dr. Neaz Ahmed', 1, '01716382906', 'nahmed1973@gmail.com', 'Dr. Tulshi Kumar Das', 0, '01716120886', 'tulshikumardas@gmail.com', 'Dr. Md. Faisal Ahmed', 0, '01716201325', 'fahmmedsuts@yahoo.com', 1, '2018-01-17 22:57:20', '2018-01-17 22:57:20'),
(7, 1, 7, 'Dr. Md. Abdul Gani', 1, '01911613802', 'maghani_sust@yahoo.com', 'Dr. Md. Kamal Ahmed', 0, '01819657474', 'kac_sociology@yahoo.com', 'Dr. Md. Jashim Uddin', 0, '01715055869', 'mjauddin@yahoo.com', 1, '2018-01-17 22:58:58', '2018-01-17 22:58:58'),
(8, 1, 8, 'Prof. Syed Hasanuzzaman', 1, '01710424109', 'shzaman-eco@sust.edu', 'Dr. Abdul Hannan Prodhan', 0, '01731247170', 'pradhanhannan@gmail.com', 'Dr. Sadiqunnabi Chowdhury', 0, '01915819168', 'sadique-eco@sust.edu', 1, '2018-01-17 23:00:20', '2018-01-17 23:00:20'),
(9, 2, 9, 'Dr. Nur Muhammad Majumder', 1, '01815107547', 'noorsustanp@yahoo.com', 'Mr. A F M Zakaria', 0, '01756464646', 'afmanp@gmail.com', 'Mr. Md. Mokhlasur Rahman', 0, '01712100255', 'mokhlasanp1976@yahoo.com', 1, '2018-01-17 23:02:09', '2018-01-20 23:48:23'),
(10, 2, 10, 'Ms. Dilara Rahman', 1, '01917911550', 'dilara.mita@gmail.com', 'Dr. Syed Ashrafur Rahman', 0, '01716563786', 'ashrafur-pss@sust.edu', 'Dr. S M Hasan Zakirul Islam', 0, '01712510914', 'hzakirul-psa@sust.edu', 1, '2018-01-17 23:03:38', '2018-01-17 23:03:38'),
(11, 2, 11, 'Dr Md Abdus Subhan', 1, '01716073270', 'subhan-che@sust.edu', 'Dr. Md. Nizam Uddin', 0, '01926372680', 'nizam3472@yahoo.com', 'Dr. Shameem Ara Begum', 0, '01731789864', 'meem_sust@yahoo.com', 1, '2018-01-17 23:05:23', '2018-01-17 23:05:23'),
(12, 2, 12, 'Dr Ahmad Kabir', 1, '01711116908', 'akabir_sta@yahoo.com', 'Mr. Md Ahmed Kabir Chowdhury', 0, '01714227456', 'makc-sust@live.com', 'Dr. Mohammed Taj Uddin', 0, '01716348194', 'mtajstat@yahoo.com', 1, '2018-01-17 23:06:46', '2018-01-17 23:06:46'),
(13, 2, 13, 'Dr. Md. Mozammel Hoque', 1, '01715492961', 'hoquemm@gmail.com', 'Dr. Iftekhar Ahmad', 0, '01712226642', 'iftekharfet.sust@yahoo.com', 'Md Belal Hossain Sikder', 0, '01911212427', 'belal-ttc@sust.edu', 1, '2018-01-17 23:08:22', '2018-01-17 23:08:22'),
(14, 2, 14, 'Dr. Md Anowarul Islam', 1, '01919064555', 'mislam32@gmail.com', 'Dr. Md Shajedul Karim', 0, '01766061795', 'msk-mat@sust.edu', 'Dr. Md Rashed Talukder', 0, '01712239309', 'rashed_math@yahoo.com', 1, '2018-01-17 23:10:19', '2018-01-17 23:10:19'),
(15, 2, 15, 'Dr. Md. Ati Ullah', 1, '01677312058', 'mauenglish@yahoo.com', 'Dr. Himadri Sekhar Roy', 0, '01719266004', 'roy-eng@sust.edu', 'Ms. Shahnaz Mahmud', 0, '01716254923', 'sm-eng@sust.edu', 1, '2018-01-17 23:11:45', '2018-01-17 23:11:45'),
(16, 2, 16, 'Dr A M M Mukaddes', 1, '0821713491', 'mukaddes1975@gmail.com', 'Dr. Engr Mohammad Iqbal', 0, '01552428379', 'iqbalm_ipe@yhoo.com', 'Dr. Md. Ariful Islam', 0, '0821717850', 'arif-ipe@sust.edu', 1, '2018-01-17 23:13:24', '2018-01-17 23:13:24'),
(17, 2, 17, 'Dr. Mushtaq Ahmed', 1, '01711161075', 'mushtaq_cee@yahoo.com', 'Dr. Md Jahir Bin Alam', 0, '01712091181', 'jahiralam@yahoo.com', 'Dr. Md Shahidur Rahman', 0, '01982283070', 'msr.ceesust@gmail.com', 1, '2018-01-17 23:15:06', '2018-01-17 23:15:06'),
(18, 3, 18, 'Prof. Dr. Sharadindu Bhattachar', 1, '01731412679', 'drsharadindu.bhattacharjee@gmail.com', 'Prof. Dr. Md. Abdur Rahim', 0, '01712737022', 'rahimdr.abdur@yahoo.com', 'Prof. Dr. Md. Ashraful Karim', 0, '01711327836', 'ashraf-bng@sust.edu', 1, '2018-01-17 23:16:48', '2018-01-17 23:16:48'),
(19, 3, 19, 'Shubhajit Chowdhury', 1, '01751731166', 'shubha_arch@yahoo.com', 'Kawshik Saha', 0, '01712852564', 'kawshik.saha@gmail.com', 'Mohammad Shamsul Arefin', 0, '01719482862', 'msanarch@gmail.com', 1, '2018-01-17 23:20:23', '2018-01-17 23:20:23'),
(20, 3, 20, 'Dr. Md. Shahidur Rahman', 1, '01914930807', 'rahmanms.bd@gmail.com', 'Mr. Tuhin Dey', 0, '01758464744', 'dev.tuhin.eee@gmail.com', 'Mr. Md. K K Prince', 0, '01737327023', 'kzaman.eee@gmail.com', 1, '2018-01-17 23:21:51', '2018-01-17 23:21:51'),
(21, 3, 21, 'Dr. M Farhad Howladar', 1, '01731195918', 'farhadpme@gmail.com', 'Dr. Md. Shofiqul Islam', 0, '01934738961', 'shofiq-mpt@sust.edu', 'Dr. Md. Saiful Alam', 0, '01711954946', 'saifulraju@yahoo.com', 1, '2018-01-17 23:24:15', '2018-01-17 23:24:15'),
(22, 3, 22, 'Prof. Dr. Mohammad Shafiqul Islam', 1, '01719287907', 'shafiq.pad@gmail.com', 'Prof. Ms. Anwara Begum', 0, '01715357406', 'anwara_begum@yahoo.com', 'Dr. Shamima Tasnim', 0, '01674008089', 'shamimatasnim@yahoo.com', 1, '2018-01-17 23:26:06', '2018-01-17 23:26:06'),
(23, 3, 23, 'Prof. Dr. Md. Nazrul Islam', 1, '01712817424', 'dnislam69@yahoo.com', 'Dr. Mosaddak Ahmed Chowdhury', 0, '01713300240', 'maclittlelife@yahoo.com', 'Dr. Md. Khairul Islam', 0, '01611127028', 'khairuldba@gmail.com', 1, '2018-01-17 23:28:43', '2018-01-17 23:28:43'),
(24, 3, 24, 'Mr. Md. Muyeed Hasan', 1, '01686580014', 'muyeedhasan-gee@sust.edu', 'Mr. Rony Basak', 0, '01715545225', 'rbasak-gee@sust.edu', 'Mr. Md. Bahuddin Sikdar', 0, '01714432134', 'sikder-gee@sust.edu', 1, '2018-01-17 23:31:17', '2018-01-17 23:31:17'),
(25, 3, 25, 'Dr. Shamim Ahmed', 1, '01776196006', 'shamim1174@gmail.com', 'Mr. H M Syfuddin', 0, '01723333287', 'syfuddin.btge@gmail.com', 'Ms. Khandaker Atkia Fariha', 0, '01710655437', 'kafb.2312@gmail.com', 1, '2018-01-17 23:33:43', '2018-01-17 23:33:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'IQAC', 'iqac.sust@gmail.com', '$2y$10$wvkkWGYxGnqSRX4w7z0uheJ9mOheEZoxY2EmCueY00GJZ7dCLMh8q', '4MssilGIjDeFtw1S95WqLxIloUWEmcBpNOWCGy78N6zdgJnl4TYVjHqPb6zI', '2017-11-23 00:05:19', '2017-11-23 00:05:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `executive_staffs`
--
ALTER TABLE `executive_staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_contents`
--
ALTER TABLE `home_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_staffs`
--
ALTER TABLE `office_staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `q_a_c_members`
--
ALTER TABLE `q_a_c_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_photos`
--
ALTER TABLE `slider_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_a_c_members`
--
ALTER TABLE `s_a_c_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `executive_staffs`
--
ALTER TABLE `executive_staffs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `home_contents`
--
ALTER TABLE `home_contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `office_staffs`
--
ALTER TABLE `office_staffs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `q_a_c_members`
--
ALTER TABLE `q_a_c_members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `slider_photos`
--
ALTER TABLE `slider_photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `s_a_c_members`
--
ALTER TABLE `s_a_c_members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
