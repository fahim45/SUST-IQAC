-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 02:26 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

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
(2, 'CSE', 'Data Sharing program held on CSE Department', 'CSE Department', '2017-11-21', '<p>Establishment of <strong>Quality Assurance Mechanism</strong> is one of the major components of HEQEP and for that establishing the Institutional Quality Assurance Cell (IQAC) in each of the universities has been already in place to create an enabling framework to provide improved quality of tertiary education. In this context as an &lsquo;A category&rsquo; university Shahjalal University of Science and technology (SUST) has been selected to establish IQAC from the first phase and IQAC-SUST is functioning from 1st January 2015.</p>', 'activity-images/1511762334.jpg', 1, '2017-11-25 06:52:34', '2017-11-26 23:58:55'),
(3, 'PME', 'EPR program held on PME Department', 'PME Department', '2017-11-23', '<p>The main purpose of <strong>IQAC</strong> is to identify the gaps between the existing system and stakeholders demand and to enhance and maintain the standards of quality of higher education up to the international standards. At present IQAC, SUST is working to assess all 25 departments&rsquo; academic program to find out the major strength, opportunity, weakness etc. to make proper and appropriate strategic improvement plans for those programs as well as of university.&nbsp;</p>', 'activity-images/1511614425.jpg', 1, '2017-11-25 06:53:46', '2017-11-25 06:53:46');

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

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `file_name`, `file_type`, `uploaded_file`, `publication_status`, `created_at`, `updated_at`) VALUES
(7, 'Manual of IQAC Operations', 1, 'uploaded-files/IQAC Operations Manual.pdf', 1, '2017-12-05 05:05:24', '2017-12-05 05:05:24'),
(10, 'document file for test', 2, 'uploaded-files/dir_sir.docx', 1, '2017-12-05 19:27:03', '2017-12-06 00:07:16');

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
(1, 'CSE', 'EPR program held on PME Department', 'Auditorium', '2017-11-27', '12:30:00', 'The present government headed by the Hon’ble Prime Minister Sheikh Hasina is committed to change the landscape of higher education through enhancement of quality of higher education and research in the country. For achieving the target of quality education the pGoB and the World Bank has generously funded the project which is known as Higher Education Quality Enhancement Project (HEQEP). The project is being implemented by the University Grants Commission, with help of the project officials and that of by the World Bank.', 1, '2017-11-24 02:39:29', '2017-11-25 00:32:15'),
(3, 'GEB', 'EPR program held on GEB Department', 'Auditorium', '2017-11-29', '11:11:00', 'EPR program held on PME DepartmentEPR program held on PME DepartmentEPR program held on PME DepartmentEPR program held on PME DepartmentEPR program held on PME DepartmentEPR program held on PME Department', 0, '2017-11-24 02:44:23', '2017-11-24 02:44:23'),
(4, 'Econoics', 'Data Sharing program held on Economics Department', 'IQAC Conference Room', '2017-11-28', '10:00:00', 'IQAC is supposed to be engaged in implementation of the strategic improvement plans those will come out from the activities of self-assessment and peer observation of all 25 departments. It will also work on the modification of different existing academic and administrative rules of SUST based on the recommendation of concerned stakeholders. The ultimate goal of IQAC is to enhance and maintain the quality of education of SUST and getting accreditation of SUST nationally and internationally.', 1, '2017-11-24 03:02:30', '2017-11-24 03:02:30');

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
(1, 'Prof. Dr. Abdul Awwal Biswas', 'Director', 'IQAC, SUST', '01711966412', 'iqac-dir@sust.edu', 'http://www.sust.edu/d/anp/faculty-profile-detail/343', 'staff-images/Prof. Dr. Abdul Awwal Biswas.jpg', 1, '2017-12-07 03:27:37', '2017-12-07 03:27:37'),
(2, 'Prof. Dr. Abdul Awwal Biswas', 'Director', 'IQAC, SUST', '01711966412', 'iqac-dir@sust.edu', 'http://www.sust.edu/d/anp/faculty-profile-detail/343', 'staff-images/Prof. Dr. Abdul Awwal Biswas.jpg', 1, '2017-12-07 03:29:32', '2017-12-07 03:29:32'),
(3, 'Prof. Dr. Md. Ashraful Alam', 'Additional Director', 'IQAC, SUST', '01718364976', 'iqac-ad@sust.edu', 'http://www.sust.edu/d/che/faculty-profile-detail/83', 'staff-images/Prof. Dr. Md. Ashraful Alam.jpg', 1, '2017-12-07 03:36:37', '2017-12-07 03:36:37');

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
(7, '2017_12_07_054355_create_executive_staffs_table', 6);

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

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice_title`, `notice_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'test', '<p>test notice Description</p>', 0, '2017-11-25 05:54:07', '2017-11-28 00:33:01'),
(3, 'test notice', '<p>habi jabi test</p>', 0, '2017-11-25 06:51:07', '2017-11-28 00:32:59'),
(4, 'sdasfa', '<p>csdvsdvsdv</p>', 0, '2017-11-27 02:58:55', '2017-11-27 02:58:55');

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
(1, 'IQAC', 'iqac.sust@gmail.com', '$2y$10$wvkkWGYxGnqSRX4w7z0uheJ9mOheEZoxY2EmCueY00GJZ7dCLMh8q', 'ZfVkiCNrlDgwHOYlXftbQkiT7e74Ba2SBCoQjlq2fgw7kiJM0pPu37HzyBSU', '2017-11-23 00:05:19', '2017-11-23 00:05:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `executive_staffs`
--
ALTER TABLE `executive_staffs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
