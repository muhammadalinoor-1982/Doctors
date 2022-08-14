-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 09:53 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctors`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medications`
--

CREATE TABLE `medications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `custom_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `medicine` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `advice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_test` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `next_visit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_report` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `creator` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updater` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medications`
--

INSERT INTO `medications` (`id`, `custom_id`, `doctor_id`, `patient_id`, `medicine`, `advice`, `lab_test`, `next_visit`, `lab_report`, `status`, `creator`, `updater`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'MDC-000001', 6, 7, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '10-10-2022', NULL, 'active', 'putin', NULL, NULL, '2022-05-21 17:02:12', '2022-05-21 17:02:12'),
(7, 'MDC-000002', 6, 7, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '10-10-2022', NULL, 'active', 'putin', NULL, NULL, '2022-05-21 17:02:45', '2022-05-21 17:02:45'),
(8, 'MDC-000003', 6, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '10-10-2022', '21.05.2022_1653174219_6710_Lab_Report_Blood Test Report.txt', 'active', 'putin', NULL, NULL, '2022-05-21 17:03:39', '2022-05-21 17:03:39'),
(9, 'MDC-000004', 6, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '10-10-2022', NULL, 'active', 'putin', NULL, NULL, '2022-05-21 17:04:10', '2022-05-21 17:04:10'),
(10, 'MDC-000005', 6, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '10-10-2022', NULL, 'active', 'putin', NULL, NULL, '2022-05-21 17:04:44', '2022-05-21 17:04:44'),
(11, 'MDC-000006', 7, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '10-10-2022', '21.05.2022_1653174409_9890_Lab_Report_Blood Test Report.txt', 'active', 'shithi', NULL, NULL, '2022-05-21 17:06:49', '2022-05-21 17:06:49'),
(12, 'MDC-000007', 7, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '10-10-2022', '21.05.2022_1653174475_5341_Lab_Report_Urin Test Report.txt', 'active', 'shithi', NULL, NULL, '2022-05-21 17:07:55', '2022-05-21 17:07:55'),
(13, 'MDC-000008', 7, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '10-10-2022', '21.05.2022_1653174522_2669_Lab_Report_Report.rar', 'active', 'shithi', NULL, NULL, '2022-05-21 17:08:42', '2022-05-21 17:08:42'),
(14, 'MDC-000009', 6, 7, 'Create medication from Dashboard for Malina', 'Create medication from Dashboard for Malina', 'Create medication from Dashboard for Malina', '10-10-2022', '02.06.2022_1654142401_9078_Lab_Report_Vit_D_Dest.txt', 'active', 'putin', NULL, NULL, '2022-06-01 22:00:01', '2022-06-01 22:00:01'),
(15, 'MDC-000010', 6, 6, 'Create Medication from Dashboard for Farsand', 'Create Medication from Dashboard for Farsand', 'Create Medication from Dashboard for Farsand', '10-10-2022', '02.06.2022_1654143030_9293_Lab_Report_Vit_D_Dest.txt', 'active', 'putin', NULL, NULL, '2022-06-01 22:10:30', '2022-06-01 22:10:30'),
(16, 'MDC-000011', 6, 6, 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxxx', '10-10-2022', '02.06.2022_1654143937_5598_Lab_Report_Vit_D_Dest.txt', 'active', 'putin', NULL, NULL, '2022-06-01 22:25:37', '2022-06-01 22:25:37'),
(21, 'MDC-000012', 6, 8, 'ggggggggggggg', 'gggggggggggggg', 'gggggggggggggggggg', '10-10-2022', NULL, 'active', 'putin', NULL, NULL, '2022-06-06 21:43:02', '2022-06-06 21:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_05_20_024039_create_patients_table', 2),
(5, '2022_05_20_143411_create_medications_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `custom_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female','others') COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` enum('married','unmarried','widowed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `creator` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updater` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `custom_id`, `doctor_id`, `name`, `email`, `phone`, `dob`, `age`, `blood_group`, `height`, `weight`, `gender`, `marital_status`, `religion`, `image`, `status`, `creator`, `updater`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'PNT-000001', 7, 'shayana', 'shayana@shayana.com', '01787667262', '10-12-12', '37', '\"O\" positive', '183 cm', '71 kg', 'female', 'unmarried', 'Jewish', '21.05.2022_1653173550_9500_PATIENT_12.04.2021_1618235481_8195_STFL_img-1.jpg', 'active', 'shithi', NULL, NULL, '2022-05-21 16:52:30', '2022-05-21 16:52:30'),
(4, 'PNT-000002', 7, 'junayna', 'junayna@junayna.com', '01787667262', '10-12-12', '37', '\"O\" positive', '183 cm', '71 kg', 'female', 'married', 'Jewish', '21.05.2022_1653173663_8488_PATIENT_07.04.2021_1617808256_5092_STFL_0.jpg', 'active', 'shithi', 'shithi', NULL, '2022-05-21 16:53:47', '2022-05-21 16:54:23'),
(6, 'PNT-000004', 6, 'farzand', 'farzand@farzand.com', '01787667262', '10-12-12', '37', '\"O\" positive', '183 cm', '71 kg', 'male', 'unmarried', 'Jewish', '21.05.2022_1653173877_1939_PATIENT_10.05.2021_1620615065_5977_STFL_2018-Burgundii-W-oskie-garnitury-M-skie-Garnitury-lubne-Garnitury-Kurtka-Spodnie-Kamizelka-M-czy-ni.jpg_640x640.jpg', 'active', 'putin', NULL, NULL, '2022-05-21 16:57:57', '2022-05-21 16:57:57'),
(7, 'PNT-000005', 6, 'malina', 'malina@malina.com', '01787667262', '10-12-12', '37', '\"O\" positive', '183 cm', '71 kg', 'female', 'unmarried', 'Jewish', '21.05.2022_1653174003_9973_PATIENT_22.04.2021_1619060169_8868_STFL_img-7.jpg', 'active', 'putin', NULL, NULL, '2022-05-21 17:00:03', '2022-05-21 17:00:03'),
(8, 'PNT-000006', 6, 'Aupu Chowdhury', 'c.corn.1.9.8.9@gmail.com', '01787667262', '10-12-12', '37', '\"O\" positive', '183 cm', '71 kg', 'male', 'married', 'Islam', '07.06.2022_1654573331_2732_PATIENT_acb7a3495a8f53d083574dd3554a70e6.jpg', 'active', 'putin', NULL, NULL, '2022-06-06 21:42:11', '2022-06-06 21:42:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `usertype` enum('doctor','operator') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'doctor',
  `image` text COLLATE utf8mb4_unicode_ci,
  `creator` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updater` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `degree`, `email_verified_at`, `password`, `status`, `usertype`, `image`, `creator`, `updater`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'shumakar', 'shumakar@abc.com', '01316206254', 'abcd', NULL, '$2y$10$9HQf.wi4xa1NG341hOl6AOk5golAL5PRFOE3aM.H7wLieNYiqc8mW', 'active', 'doctor', '21.05.2022_1653148974_6068_DOCTOR_istockphoto-177373093-612x612.jpg', NULL, 'shumakar', NULL, '2022-05-21 09:58:58', '2022-05-21 10:02:54'),
(6, 'putin', 'putin@putin.com', '01787667262', 'abcd', NULL, '$2y$10$k5NSt1reauX7MZvXoN1xc.EoWP6CJUlc5FPxz5Tqvm5.lVKn.LEi2', 'active', 'doctor', '21.05.2022_1653173242_8562_DOCTOR_download.jpg', NULL, 'putin', NULL, '2022-05-21 16:45:22', '2022-05-21 16:47:22'),
(7, 'shithi', 'shithi@xyz.com', '01787667262', 'abcd', NULL, '$2y$10$YABn.kEMVV1gdx9.41BeeOEA/06ih1hYzXm62yU8iHRRr.8PHdCyK', 'active', 'doctor', '21.05.2022_1653173432_7593_DOCTOR_beautiful-blonde-female-doctor-smiling-medicine-11586829614sg4dxfuvpv.png', NULL, 'shithi', NULL, '2022-05-21 16:49:09', '2022-05-21 16:50:32'),
(8, 'aupu', 'aupuchowdhhhury@gmail.com', '01787667262', 'abcd', NULL, '$2y$10$3L6L5GFptdSOFyUpi2qw7OlTOn.F2ilAkLG9HETHtStVEyNupAczu', 'active', 'doctor', NULL, NULL, NULL, NULL, '2022-05-27 21:07:25', '2022-05-27 21:07:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medications`
--
ALTER TABLE `medications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medications_doctor_id_foreign` (`doctor_id`),
  ADD KEY `medications_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patients_email_unique` (`email`),
  ADD KEY `patients_doctor_id_foreign` (`doctor_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medications`
--
ALTER TABLE `medications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medications`
--
ALTER TABLE `medications`
  ADD CONSTRAINT `medications_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `medications_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
