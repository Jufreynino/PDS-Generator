-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 10:27 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-crud-tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`) VALUES
(1, 'hrm', '12345'),
(7, 'jufre', '12345'),
(8, 'mars', 'mars'),
(9, 'mars', 'mars');

-- --------------------------------------------------------

--
-- Table structure for table `civil_service_tbl`
--

CREATE TABLE `civil_service_tbl` (
  `cs_id` int(11) NOT NULL,
  `pds_id` varchar(255) NOT NULL,
  `career_1` varchar(255) NOT NULL,
  `rating_1` varchar(255) NOT NULL,
  `date_of_examination_1` varchar(255) NOT NULL,
  `place_of_examination_1` varchar(255) NOT NULL,
  `license_number_1` varchar(255) NOT NULL,
  `license_validity_1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `civil_service_tbl`
--

INSERT INTO `civil_service_tbl` (`cs_id`, `pds_id`, `career_1`, `rating_1`, `date_of_examination_1`, `place_of_examination_1`, `license_number_1`, `license_validity_1`) VALUES
(1, '7', '', '4234sdf21', '1werqwerdasd121fd', '1das3123', '1dasdas', '1312312'),
(2, '8', 'dsdsd', '', '', '', '', ''),
(3, '9', '', '', '', '', '', ''),
(4, '3', '', '', '', '', '', ''),
(5, '3', '', '', '', '', '', ''),
(6, '3', '', '', '', '', '', ''),
(7, '3', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `learning_tbl`
--

CREATE TABLE `learning_tbl` (
  `l_id` int(11) NOT NULL,
  `pds_id` varchar(255) NOT NULL,
  `learning_development_title_1` varchar(255) NOT NULL,
  `learning_development_from_1` varchar(255) NOT NULL,
  `learning_development_to_1` varchar(255) NOT NULL,
  `learning_development_number_of_hours_1` varchar(255) NOT NULL,
  `learning_development_type_of_ld_1` varchar(255) NOT NULL,
  `learning_development_conducted_by_1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `learning_tbl`
--

INSERT INTO `learning_tbl` (`l_id`, `pds_id`, `learning_development_title_1`, `learning_development_from_1`, `learning_development_to_1`, `learning_development_number_of_hours_1`, `learning_development_type_of_ld_1`, `learning_development_conducted_by_1`) VALUES
(1, '7', '1', '1', '1', '1', '1', '1'),
(2, '8', 'dsds', '', '', '', '', ''),
(3, '9', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `other_information_tbl`
--

CREATE TABLE `other_information_tbl` (
  `oi_id` int(11) NOT NULL,
  `pds_id` varchar(255) NOT NULL,
  `skill1` varchar(255) NOT NULL,
  `recognition1` varchar(255) NOT NULL,
  `organization1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `other_information_tbl`
--

INSERT INTO `other_information_tbl` (`oi_id`, `pds_id`, `skill1`, `recognition1`, `organization1`) VALUES
(1, '7', 'Driving', '2', '3'),
(2, '8', '', '', ''),
(3, '9', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `personal_information_tbl`
--

CREATE TABLE `personal_information_tbl` (
  `pds_id` int(11) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `name_extension` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `gsis_no` varchar(255) NOT NULL,
  `pagibig_no` varchar(255) NOT NULL,
  `philhealth_no` varchar(255) NOT NULL,
  `sss_no` varchar(255) NOT NULL,
  `tin_no` varchar(255) NOT NULL,
  `agency_employee_no` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `citizenship_country` varchar(255) NOT NULL,
  `residential_house_block` varchar(255) NOT NULL,
  `residential_street` varchar(255) NOT NULL,
  `residential_subdivision_village` varchar(255) NOT NULL,
  `residential_barangay` varchar(255) NOT NULL,
  `residential_city_municipality` varchar(255) NOT NULL,
  `residential_province` varchar(255) NOT NULL,
  `residential_zipcode` varchar(255) NOT NULL,
  `permanent_house_block` varchar(255) NOT NULL,
  `permanent_street` varchar(255) NOT NULL,
  `permanent_subdivision_village` varchar(255) NOT NULL,
  `permanent_barangay` varchar(255) NOT NULL,
  `permanent_city_municipality` varchar(255) NOT NULL,
  `permanent_province` varchar(255) NOT NULL,
  `permanent_zipcode` varchar(255) NOT NULL,
  `telephone_no` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `spouse_surname` varchar(255) NOT NULL,
  `spouse_firstname` varchar(255) NOT NULL,
  `spouse_middlename` varchar(255) NOT NULL,
  `spouse_name_extension` varchar(255) NOT NULL,
  `spouse_occupation` varchar(255) NOT NULL,
  `spouse_employer` varchar(255) NOT NULL,
  `spouse_business_address` varchar(255) NOT NULL,
  `spouse_telephone_no` varchar(255) NOT NULL,
  `father_surname` varchar(255) NOT NULL,
  `father_firstname` varchar(255) NOT NULL,
  `father_middlename` varchar(255) NOT NULL,
  `father_name_extension` varchar(255) NOT NULL,
  `mother_maiden_name` varchar(255) NOT NULL,
  `mother_surname` varchar(255) NOT NULL,
  `mother_firstname` varchar(255) NOT NULL,
  `mother_middlename` varchar(255) NOT NULL,
  `elementary_name_of_school` text NOT NULL,
  `elementary_basic_education` text NOT NULL,
  `elementary_period_attendance_from` text NOT NULL,
  `elementary_period_attendance_to` text NOT NULL,
  `elementary_highest_level` text NOT NULL,
  `elementary_year_graduated` text NOT NULL,
  `elementary_honor_received` text NOT NULL,
  `secondary_name_of_school` text NOT NULL,
  `secondary_basic_education` text NOT NULL,
  `secondary_period_attendance_from` text NOT NULL,
  `secondary_period_attendance_to` text NOT NULL,
  `secondary_highest_level` text NOT NULL,
  `secondary_year_graduated` text NOT NULL,
  `secondary_honor_received` text NOT NULL,
  `vocational_name_of_school` text NOT NULL,
  `vocational_basic_education` text NOT NULL,
  `vocational_period_attendance_from` text NOT NULL,
  `vocational_period_attendance_to` text NOT NULL,
  `vocational_highest_level` text NOT NULL,
  `vocational_year_graduated` text NOT NULL,
  `vocational_honor_received` text NOT NULL,
  `college_name_of_school` text NOT NULL,
  `college_basic_education` text NOT NULL,
  `college_period_attendance_from` text NOT NULL,
  `college_period_attendance_to` text NOT NULL,
  `college_highest_level` text NOT NULL,
  `college_year_graduated` text NOT NULL,
  `college_honor_received` text NOT NULL,
  `graduate_studies_name_of_school` text NOT NULL,
  `graduate_studies_basic_education` text NOT NULL,
  `graduate_studies_period_attendance_from` text NOT NULL,
  `graduate_studies_period_attendance_to` text NOT NULL,
  `graduate_studies_highest_level` text NOT NULL,
  `graduate_studies_year_graduated` text NOT NULL,
  `graduate_studies_honor_received` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_information_tbl`
--

INSERT INTO `personal_information_tbl` (`pds_id`, `surname`, `firstname`, `middlename`, `name_extension`, `date_of_birth`, `place_of_birth`, `sex`, `civil_status`, `height`, `weight`, `blood_type`, `gsis_no`, `pagibig_no`, `philhealth_no`, `sss_no`, `tin_no`, `agency_employee_no`, `citizenship`, `citizenship_country`, `residential_house_block`, `residential_street`, `residential_subdivision_village`, `residential_barangay`, `residential_city_municipality`, `residential_province`, `residential_zipcode`, `permanent_house_block`, `permanent_street`, `permanent_subdivision_village`, `permanent_barangay`, `permanent_city_municipality`, `permanent_province`, `permanent_zipcode`, `telephone_no`, `mobile_no`, `email_address`, `spouse_surname`, `spouse_firstname`, `spouse_middlename`, `spouse_name_extension`, `spouse_occupation`, `spouse_employer`, `spouse_business_address`, `spouse_telephone_no`, `father_surname`, `father_firstname`, `father_middlename`, `father_name_extension`, `mother_maiden_name`, `mother_surname`, `mother_firstname`, `mother_middlename`, `elementary_name_of_school`, `elementary_basic_education`, `elementary_period_attendance_from`, `elementary_period_attendance_to`, `elementary_highest_level`, `elementary_year_graduated`, `elementary_honor_received`, `secondary_name_of_school`, `secondary_basic_education`, `secondary_period_attendance_from`, `secondary_period_attendance_to`, `secondary_highest_level`, `secondary_year_graduated`, `secondary_honor_received`, `vocational_name_of_school`, `vocational_basic_education`, `vocational_period_attendance_from`, `vocational_period_attendance_to`, `vocational_highest_level`, `vocational_year_graduated`, `vocational_honor_received`, `college_name_of_school`, `college_basic_education`, `college_period_attendance_from`, `college_period_attendance_to`, `college_highest_level`, `college_year_graduated`, `college_honor_received`, `graduate_studies_name_of_school`, `graduate_studies_basic_education`, `graduate_studies_period_attendance_from`, `graduate_studies_period_attendance_to`, `graduate_studies_highest_level`, `graduate_studies_year_graduated`, `graduate_studies_honor_received`) VALUES
(0, 'surnamesadas', 'firstname', 'middlename', 'name_extension', 'date_of_birth', 'place_of_birth', 'sex', 'civil_status', 'height', 'weight', 'blood_type', 'gsis_no', 'pagibig_no', 'philhealth_no', 'sss_no', 'tin_no', 'agency_employee_no', 'citizenship', 'citizenship_country', 'residential_house_block', 'residential_street', 'residential_subdivision_village', 'residential_barangay', 'residential_city_municipality', 'residential_province', 'residential_zipcode', 'permanent_house_block', 'permanent_street', 'permanent_subdivision_village', 'permanent_barangay', 'permanent_city_municipality', 'permanent_province', 'permanent_zipcode', 'telephone_no', 'mobile_no', 'email_address', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'a', 'b', 'middlename', 'JR', '1', 'DSDSghjg', 'Female', 'Single', 'height', 'weight', 'blood_type', 'gsis_no	', 'pagibig_no', 'philhealth_no', 'sss_no', 'tin_no	', 'agency_employee_no', 'citizenship', 'citizenship_country', 'residential_house_block', 'residential_street', 'residential_subdivision_village', 'residential_barangay', 'residential_city_municipality', 'residential_province', 'residential_zipcode', 'permanent_house_block', 'permanent_street', 'permanent_subdivision_village', 'permanent_barangay', 'permanent_city_municipality', 'permanent_province', 'permanent_zipcode', 'telephone_no', 'mobile_no', 'email_address', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'a', 'b', 'd', 'e', 'c', 'f', 'g', 'h', 'i', 'k', 'l', 'j', 'm', 'n', 'o', 'p', 'r', 's', 'q', 't', 'u', 'v', 'w', 'y', 'z', 'x', 'a', 'b', 'c', 'd', 'f', 'g', 'e', 'h', 'i'),
(8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `voluntary_work_tbl`
--

CREATE TABLE `voluntary_work_tbl` (
  `vs_id` int(11) NOT NULL,
  `pds_id` varchar(255) NOT NULL,
  `voluntary_work_name_address_1` varchar(255) NOT NULL,
  `voluntary_work_from_1` varchar(255) NOT NULL,
  `voluntary_work_to_1` varchar(255) NOT NULL,
  `voluntary_work_hours_1` varchar(255) NOT NULL,
  `voluntary_work_position_1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voluntary_work_tbl`
--

INSERT INTO `voluntary_work_tbl` (`vs_id`, `pds_id`, `voluntary_work_name_address_1`, `voluntary_work_from_1`, `voluntary_work_to_1`, `voluntary_work_hours_1`, `voluntary_work_position_1`) VALUES
(1, '7', 'NMIS', '2020', '2022', '3', 'TEST'),
(2, '7', 'sdsds', '', '', '', ''),
(3, '7', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `work_experience5_tbl`
--

CREATE TABLE `work_experience5_tbl` (
  `we5_tbl` int(11) NOT NULL,
  `pds_id` varchar(255) NOT NULL,
  `inclusive_dates_from_1` varchar(255) NOT NULL,
  `inclusive_dates_to_1` varchar(255) NOT NULL,
  `inclusive_dates_position_title_1` varchar(255) NOT NULL,
  `inclusive_dates_department_1` varchar(255) NOT NULL,
  `inclusive_dates_monthly_1` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_1` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_1` varchar(255) NOT NULL,
  `inclusive_dates_government_service_1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_experience5_tbl`
--

INSERT INTO `work_experience5_tbl` (`we5_tbl`, `pds_id`, `inclusive_dates_from_1`, `inclusive_dates_to_1`, `inclusive_dates_position_title_1`, `inclusive_dates_department_1`, `inclusive_dates_monthly_1`, `inclusive_dates_salary_job_paygrade_1`, `inclusive_dates_status_of_appointment_1`, `inclusive_dates_government_service_1`) VALUES
(1, '7', '11/22/2023', '11/22/2023', 'Computer programmer 1', 'NMIS', '10,0000', 'sSG10', 'cos', 'Y'),
(2, '8', '', '', '', '', '', '', '', ''),
(3, '9', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `civil_service_tbl`
--
ALTER TABLE `civil_service_tbl`
  ADD PRIMARY KEY (`cs_id`);

--
-- Indexes for table `learning_tbl`
--
ALTER TABLE `learning_tbl`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `other_information_tbl`
--
ALTER TABLE `other_information_tbl`
  ADD PRIMARY KEY (`oi_id`);

--
-- Indexes for table `personal_information_tbl`
--
ALTER TABLE `personal_information_tbl`
  ADD PRIMARY KEY (`pds_id`);

--
-- Indexes for table `voluntary_work_tbl`
--
ALTER TABLE `voluntary_work_tbl`
  ADD PRIMARY KEY (`vs_id`);

--
-- Indexes for table `work_experience5_tbl`
--
ALTER TABLE `work_experience5_tbl`
  ADD PRIMARY KEY (`we5_tbl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `civil_service_tbl`
--
ALTER TABLE `civil_service_tbl`
  MODIFY `cs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `learning_tbl`
--
ALTER TABLE `learning_tbl`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `other_information_tbl`
--
ALTER TABLE `other_information_tbl`
  MODIFY `oi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_information_tbl`
--
ALTER TABLE `personal_information_tbl`
  MODIFY `pds_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `voluntary_work_tbl`
--
ALTER TABLE `voluntary_work_tbl`
  MODIFY `vs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `work_experience5_tbl`
--
ALTER TABLE `work_experience5_tbl`
  MODIFY `we5_tbl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
