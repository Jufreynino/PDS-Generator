-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 10:02 AM
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
(1, '7', '1', '2', '1', '1', '1', '1'),
(2, '8', 'dsdsd', '', '', '', '', ''),
(3, '9', '', '', '', '', '', '');

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
(2, '8', 'sdsds', '', '', '', ''),
(3, '9', '', '', '', '', '');

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
  `inclusive_dates_government_service_1` varchar(255) NOT NULL,
  `inclusive_dates_from_2` varchar(255) NOT NULL,
  `inclusive_dates_to_2` varchar(255) NOT NULL,
  `inclusive_dates_position_title_2` varchar(255) NOT NULL,
  `inclusive_dates_department_2` varchar(255) NOT NULL,
  `inclusive_dates_monthly_2` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_2` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_2` varchar(255) NOT NULL,
  `inclusive_dates_government_service_2` varchar(255) NOT NULL,
  `inclusive_dates_from_3` varchar(255) NOT NULL,
  `inclusive_dates_to_3` varchar(255) NOT NULL,
  `inclusive_dates_position_title_3` varchar(255) NOT NULL,
  `inclusive_dates_department_3` varchar(255) NOT NULL,
  `inclusive_dates_monthly_3` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_3` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_3` varchar(255) NOT NULL,
  `inclusive_dates_government_service_3` varchar(255) NOT NULL,
  `inclusive_dates_from_4` varchar(255) NOT NULL,
  `inclusive_dates_to_4` varchar(255) NOT NULL,
  `inclusive_dates_position_title_4` varchar(255) NOT NULL,
  `inclusive_dates_department_4` varchar(255) NOT NULL,
  `inclusive_dates_monthly_4` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_4` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_4` varchar(255) NOT NULL,
  `inclusive_dates_government_service_4` varchar(255) NOT NULL,
  `inclusive_dates_from_5` varchar(255) NOT NULL,
  `inclusive_dates_to_5` varchar(255) NOT NULL,
  `inclusive_dates_position_title_5` varchar(255) NOT NULL,
  `inclusive_dates_department_5` varchar(255) NOT NULL,
  `inclusive_dates_monthly_5` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_5` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_5` varchar(255) NOT NULL,
  `inclusive_dates_government_service_5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_experience5_tbl`
--

INSERT INTO `work_experience5_tbl` (`we5_tbl`, `pds_id`, `inclusive_dates_from_1`, `inclusive_dates_to_1`, `inclusive_dates_position_title_1`, `inclusive_dates_department_1`, `inclusive_dates_monthly_1`, `inclusive_dates_salary_job_paygrade_1`, `inclusive_dates_status_of_appointment_1`, `inclusive_dates_government_service_1`, `inclusive_dates_from_2`, `inclusive_dates_to_2`, `inclusive_dates_position_title_2`, `inclusive_dates_department_2`, `inclusive_dates_monthly_2`, `inclusive_dates_salary_job_paygrade_2`, `inclusive_dates_status_of_appointment_2`, `inclusive_dates_government_service_2`, `inclusive_dates_from_3`, `inclusive_dates_to_3`, `inclusive_dates_position_title_3`, `inclusive_dates_department_3`, `inclusive_dates_monthly_3`, `inclusive_dates_salary_job_paygrade_3`, `inclusive_dates_status_of_appointment_3`, `inclusive_dates_government_service_3`, `inclusive_dates_from_4`, `inclusive_dates_to_4`, `inclusive_dates_position_title_4`, `inclusive_dates_department_4`, `inclusive_dates_monthly_4`, `inclusive_dates_salary_job_paygrade_4`, `inclusive_dates_status_of_appointment_4`, `inclusive_dates_government_service_4`, `inclusive_dates_from_5`, `inclusive_dates_to_5`, `inclusive_dates_position_title_5`, `inclusive_dates_department_5`, `inclusive_dates_monthly_5`, `inclusive_dates_salary_job_paygrade_5`, `inclusive_dates_status_of_appointment_5`, `inclusive_dates_government_service_5`) VALUES
(1, '7', '1', 'inclusive_dates_to_1', 'inclusive_dates_position_title_1', 'inclusive_dates_department_1', 'inclusive_dates_monthly_1', 'inclusive_dates_salary_job_paygrade_1', 'inclusive_dates_status_of_appointment_1', 'inclusive_dates_government_service_1', 'inclusive_dates_from_2', 'inclusive_dates_to_2', 'inclusive_dates_position_title_2', 'inclusive_dates_department_2', 'inclusive_dates_monthly_2', 'inclusive_dates_salary_job_paygrade_2', 'inclusive_dates_status_of_appointment_2', 'inclusive_dates_government_service_2', 'inclusive_dates_from_3', 'inclusive_dates_to_3', 'inclusive_dates_position_title_3', 'inclusive_dates_department_3', 'inclusive_dates_monthly_3', 'inclusive_dates_salary_job_paygrade_3', 'inclusive_dates_status_of_appointment_3', 'inclusive_dates_government_service_3', 'inclusive_dates_from_4', 'inclusive_dates_to_4', 'inclusive_dates_position_title_4', 'inclusive_dates_department_4', 'inclusive_dates_monthly_4', 'inclusive_dates_salary_job_paygrade_4', 'inclusive_dates_status_of_appointment_4', 'inclusive_dates_government_service_4', 'inclusive_dates_from_5', 'inclusive_dates_to_5', 'inclusive_dates_position_title_5', 'inclusive_dates_department_5', 'inclusive_dates_monthly_5', 'inclusive_dates_salary_job_paygrade_5', 'inclusive_dates_status_of_appointment_5', 'inclusive_dates_government_service_5'),
(2, '8', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `work_experience10_tbl`
--

CREATE TABLE `work_experience10_tbl` (
  `we10_id` int(11) NOT NULL,
  `pds_id` varchar(255) NOT NULL,
  `inclusive_dates_from_6` varchar(255) NOT NULL,
  `inclusive_dates_to_6` varchar(255) NOT NULL,
  `inclusive_dates_position_title_6` varchar(255) NOT NULL,
  `inclusive_dates_department_6` varchar(255) NOT NULL,
  `inclusive_dates_monthly_6` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_6` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_6` varchar(255) NOT NULL,
  `inclusive_dates_government_service_6` varchar(255) NOT NULL,
  `inclusive_dates_from_7` varchar(255) NOT NULL,
  `inclusive_dates_to_7` varchar(255) NOT NULL,
  `inclusive_dates_position_title_7` varchar(255) NOT NULL,
  `inclusive_dates_department_7` varchar(255) NOT NULL,
  `inclusive_dates_monthly_7` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_7` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_7` varchar(255) NOT NULL,
  `inclusive_dates_government_service_7` varchar(255) NOT NULL,
  `inclusive_dates_from_8` varchar(255) NOT NULL,
  `inclusive_dates_to_8` varchar(255) NOT NULL,
  `inclusive_dates_position_title_8` varchar(255) NOT NULL,
  `inclusive_dates_department_8` varchar(255) NOT NULL,
  `inclusive_dates_monthly_8` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_8` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_8` varchar(255) NOT NULL,
  `inclusive_dates_government_service_8` varchar(255) NOT NULL,
  `inclusive_dates_from_9` varchar(255) NOT NULL,
  `inclusive_dates_to_9` varchar(255) NOT NULL,
  `inclusive_dates_position_title_9` varchar(255) NOT NULL,
  `inclusive_dates_department_9` varchar(255) NOT NULL,
  `inclusive_dates_monthly_9` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_9` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_9` varchar(255) NOT NULL,
  `inclusive_dates_government_service_9` varchar(255) NOT NULL,
  `inclusive_dates_from_10` varchar(255) NOT NULL,
  `inclusive_dates_to_10` varchar(255) NOT NULL,
  `inclusive_dates_position_title_10` varchar(255) NOT NULL,
  `inclusive_dates_department_10` varchar(255) NOT NULL,
  `inclusive_dates_monthly_10` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_10` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_10` varchar(255) NOT NULL,
  `inclusive_dates_government_service_10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_experience10_tbl`
--

INSERT INTO `work_experience10_tbl` (`we10_id`, `pds_id`, `inclusive_dates_from_6`, `inclusive_dates_to_6`, `inclusive_dates_position_title_6`, `inclusive_dates_department_6`, `inclusive_dates_monthly_6`, `inclusive_dates_salary_job_paygrade_6`, `inclusive_dates_status_of_appointment_6`, `inclusive_dates_government_service_6`, `inclusive_dates_from_7`, `inclusive_dates_to_7`, `inclusive_dates_position_title_7`, `inclusive_dates_department_7`, `inclusive_dates_monthly_7`, `inclusive_dates_salary_job_paygrade_7`, `inclusive_dates_status_of_appointment_7`, `inclusive_dates_government_service_7`, `inclusive_dates_from_8`, `inclusive_dates_to_8`, `inclusive_dates_position_title_8`, `inclusive_dates_department_8`, `inclusive_dates_monthly_8`, `inclusive_dates_salary_job_paygrade_8`, `inclusive_dates_status_of_appointment_8`, `inclusive_dates_government_service_8`, `inclusive_dates_from_9`, `inclusive_dates_to_9`, `inclusive_dates_position_title_9`, `inclusive_dates_department_9`, `inclusive_dates_monthly_9`, `inclusive_dates_salary_job_paygrade_9`, `inclusive_dates_status_of_appointment_9`, `inclusive_dates_government_service_9`, `inclusive_dates_from_10`, `inclusive_dates_to_10`, `inclusive_dates_position_title_10`, `inclusive_dates_department_10`, `inclusive_dates_monthly_10`, `inclusive_dates_salary_job_paygrade_10`, `inclusive_dates_status_of_appointment_10`, `inclusive_dates_government_service_10`) VALUES
(1, '7', 'inclusive_dates_from_6', 'inclusive_dates_to_6', 'inclusive_dates_position_title_6', 'inclusive_dates_department_6', 'inclusive_dates_monthly_6', 'inclusive_dates_salary_job_paygrade_6', 'inclusive_dates_status_of_appointment_6', 'inclusive_dates_government_service_6', 'inclusive_dates_from_7', 'inclusive_dates_to_7', 'inclusive_dates_position_title_7', 'inclusive_dates_department_7', 'inclusive_dates_monthly_7', 'inclusive_dates_salary_job_paygrade_7', 'inclusive_dates_status_of_appointment_7', 'inclusive_dates_government_service_7', 'inclusive_dates_from_8', 'inclusive_dates_to_8', 'inclusive_dates_position_title_8', 'inclusive_dates_department_8', 'inclusive_dates_monthly_8', 'inclusive_dates_salary_job_paygrade_8', 'inclusive_dates_status_of_appointment_8', 'inclusive_dates_government_service_8', 'inclusive_dates_from_9', 'inclusive_dates_to_9', 'inclusive_dates_position_title_9', 'inclusive_dates_department_9', 'inclusive_dates_monthly_9', 'inclusive_dates_salary_job_paygrade_9', 'inclusive_dates_status_of_appointment_9', 'inclusive_dates_government_service_9', 'inclusive_dates_from_10', 'inclusive_dates_to_10', 'inclusive_dates_position_title_10', 'inclusive_dates_department_10', 'inclusive_dates_monthly_10', 'inclusive_dates_salary_job_paygrade_10', 'inclusive_dates_status_of_appointment_10', 'inclusive_dates_government_service_10'),
(2, '8', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `work_experience15_tbl`
--

CREATE TABLE `work_experience15_tbl` (
  `we5_tbl` int(11) NOT NULL,
  `pds_id` varchar(255) NOT NULL,
  `inclusive_dates_from_11` varchar(255) NOT NULL,
  `inclusive_dates_to_11` varchar(255) NOT NULL,
  `inclusive_dates_position_title_11` varchar(255) NOT NULL,
  `inclusive_dates_department_11` varchar(255) NOT NULL,
  `inclusive_dates_monthly_11` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_11` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_11` varchar(255) NOT NULL,
  `inclusive_dates_government_service_11` varchar(255) NOT NULL,
  `inclusive_dates_from_12` varchar(255) NOT NULL,
  `inclusive_dates_to_12` varchar(255) NOT NULL,
  `inclusive_dates_position_title_12` varchar(255) NOT NULL,
  `inclusive_dates_department_12` varchar(255) NOT NULL,
  `inclusive_dates_monthly_12` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_12` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_12` varchar(255) NOT NULL,
  `inclusive_dates_government_service_12` varchar(255) NOT NULL,
  `inclusive_dates_from_13` varchar(255) NOT NULL,
  `inclusive_dates_to_13` varchar(255) NOT NULL,
  `inclusive_dates_position_title_13` varchar(255) NOT NULL,
  `inclusive_dates_department_13` varchar(255) NOT NULL,
  `inclusive_dates_monthly_13` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_13` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_13` varchar(255) NOT NULL,
  `inclusive_dates_government_service_13` varchar(255) NOT NULL,
  `inclusive_dates_from_14` varchar(255) NOT NULL,
  `inclusive_dates_to_14` varchar(255) NOT NULL,
  `inclusive_dates_position_title_14` varchar(255) NOT NULL,
  `inclusive_dates_department_14` varchar(255) NOT NULL,
  `inclusive_dates_monthly_14` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_14` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_14` varchar(255) NOT NULL,
  `inclusive_dates_government_service_14` varchar(255) NOT NULL,
  `inclusive_dates_from_15` varchar(255) NOT NULL,
  `inclusive_dates_to_15` varchar(255) NOT NULL,
  `inclusive_dates_position_title_15` varchar(255) NOT NULL,
  `inclusive_dates_department_15` varchar(255) NOT NULL,
  `inclusive_dates_monthly_15` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_15` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_15` varchar(255) NOT NULL,
  `inclusive_dates_government_service_15` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_experience15_tbl`
--

INSERT INTO `work_experience15_tbl` (`we5_tbl`, `pds_id`, `inclusive_dates_from_11`, `inclusive_dates_to_11`, `inclusive_dates_position_title_11`, `inclusive_dates_department_11`, `inclusive_dates_monthly_11`, `inclusive_dates_salary_job_paygrade_11`, `inclusive_dates_status_of_appointment_11`, `inclusive_dates_government_service_11`, `inclusive_dates_from_12`, `inclusive_dates_to_12`, `inclusive_dates_position_title_12`, `inclusive_dates_department_12`, `inclusive_dates_monthly_12`, `inclusive_dates_salary_job_paygrade_12`, `inclusive_dates_status_of_appointment_12`, `inclusive_dates_government_service_12`, `inclusive_dates_from_13`, `inclusive_dates_to_13`, `inclusive_dates_position_title_13`, `inclusive_dates_department_13`, `inclusive_dates_monthly_13`, `inclusive_dates_salary_job_paygrade_13`, `inclusive_dates_status_of_appointment_13`, `inclusive_dates_government_service_13`, `inclusive_dates_from_14`, `inclusive_dates_to_14`, `inclusive_dates_position_title_14`, `inclusive_dates_department_14`, `inclusive_dates_monthly_14`, `inclusive_dates_salary_job_paygrade_14`, `inclusive_dates_status_of_appointment_14`, `inclusive_dates_government_service_14`, `inclusive_dates_from_15`, `inclusive_dates_to_15`, `inclusive_dates_position_title_15`, `inclusive_dates_department_15`, `inclusive_dates_monthly_15`, `inclusive_dates_salary_job_paygrade_15`, `inclusive_dates_status_of_appointment_15`, `inclusive_dates_government_service_15`) VALUES
(1, '7', '', '', '21', '', '', '', '', '', '', '', 'sad', '', '', '', '', '', '', '', 'asd', '', '', '', '', '', '', '', 'sd', '', '', '', '', '', '', '', 'dsa', '', '', '', '', ''),
(2, '8', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `work_experience20_tbl`
--

CREATE TABLE `work_experience20_tbl` (
  `we20_id` int(11) NOT NULL,
  `pds_id` varchar(255) NOT NULL,
  `inclusive_dates_from_16` varchar(255) NOT NULL,
  `inclusive_dates_to_16` varchar(255) NOT NULL,
  `inclusive_dates_position_title_16` varchar(255) NOT NULL,
  `inclusive_dates_department_16` varchar(255) NOT NULL,
  `inclusive_dates_monthly_16` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_16` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_16` varchar(255) NOT NULL,
  `inclusive_dates_government_service_16` varchar(255) NOT NULL,
  `inclusive_dates_from_17` varchar(255) NOT NULL,
  `inclusive_dates_to_17` varchar(255) NOT NULL,
  `inclusive_dates_position_title_17` varchar(255) NOT NULL,
  `inclusive_dates_department_17` varchar(255) NOT NULL,
  `inclusive_dates_monthly_17` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_17` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_17` varchar(255) NOT NULL,
  `inclusive_dates_government_service_17` varchar(255) NOT NULL,
  `inclusive_dates_from_18` varchar(255) NOT NULL,
  `inclusive_dates_to_18` varchar(255) NOT NULL,
  `inclusive_dates_position_title_18` varchar(255) NOT NULL,
  `inclusive_dates_department_18` varchar(255) NOT NULL,
  `inclusive_dates_monthly_18` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_18` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_18` varchar(255) NOT NULL,
  `inclusive_dates_government_service_18` varchar(255) NOT NULL,
  `inclusive_dates_from_19` varchar(255) NOT NULL,
  `inclusive_dates_to_19` varchar(255) NOT NULL,
  `inclusive_dates_position_title_19` varchar(255) NOT NULL,
  `inclusive_dates_department_19` varchar(255) NOT NULL,
  `inclusive_dates_monthly_19` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_19` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_19` varchar(255) NOT NULL,
  `inclusive_dates_government_service_19` varchar(255) NOT NULL,
  `inclusive_dates_from_20` varchar(255) NOT NULL,
  `inclusive_dates_to_20` varchar(255) NOT NULL,
  `inclusive_dates_position_title_20` varchar(255) NOT NULL,
  `inclusive_dates_department_20` varchar(255) NOT NULL,
  `inclusive_dates_monthly_20` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_20` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_20` varchar(255) NOT NULL,
  `inclusive_dates_government_service_20` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_experience20_tbl`
--

INSERT INTO `work_experience20_tbl` (`we20_id`, `pds_id`, `inclusive_dates_from_16`, `inclusive_dates_to_16`, `inclusive_dates_position_title_16`, `inclusive_dates_department_16`, `inclusive_dates_monthly_16`, `inclusive_dates_salary_job_paygrade_16`, `inclusive_dates_status_of_appointment_16`, `inclusive_dates_government_service_16`, `inclusive_dates_from_17`, `inclusive_dates_to_17`, `inclusive_dates_position_title_17`, `inclusive_dates_department_17`, `inclusive_dates_monthly_17`, `inclusive_dates_salary_job_paygrade_17`, `inclusive_dates_status_of_appointment_17`, `inclusive_dates_government_service_17`, `inclusive_dates_from_18`, `inclusive_dates_to_18`, `inclusive_dates_position_title_18`, `inclusive_dates_department_18`, `inclusive_dates_monthly_18`, `inclusive_dates_salary_job_paygrade_18`, `inclusive_dates_status_of_appointment_18`, `inclusive_dates_government_service_18`, `inclusive_dates_from_19`, `inclusive_dates_to_19`, `inclusive_dates_position_title_19`, `inclusive_dates_department_19`, `inclusive_dates_monthly_19`, `inclusive_dates_salary_job_paygrade_19`, `inclusive_dates_status_of_appointment_19`, `inclusive_dates_government_service_19`, `inclusive_dates_from_20`, `inclusive_dates_to_20`, `inclusive_dates_position_title_20`, `inclusive_dates_department_20`, `inclusive_dates_monthly_20`, `inclusive_dates_salary_job_paygrade_20`, `inclusive_dates_status_of_appointment_20`, `inclusive_dates_government_service_20`) VALUES
(1, '7', '', '', 'sda', '', '', '', '', '', '', '', 'das', '', '', '', '', '', '', '', 'fsdfsd', '', '', '', '', '', '', '', 'dasd', '', '', '', '', '', '', '', 'dsa', '', '', '', '', ''),
(2, '8', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `work_experience25_tbl`
--

CREATE TABLE `work_experience25_tbl` (
  `we25_id` int(11) NOT NULL,
  `pds_id` varchar(255) NOT NULL,
  `inclusive_dates_from_21` varchar(255) NOT NULL,
  `inclusive_dates_to_21` varchar(255) NOT NULL,
  `inclusive_dates_position_title_21` varchar(255) NOT NULL,
  `inclusive_dates_department_21` varchar(255) NOT NULL,
  `inclusive_dates_monthly_21` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_21` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_21` varchar(255) NOT NULL,
  `inclusive_dates_government_service_21` varchar(255) NOT NULL,
  `inclusive_dates_from_22` varchar(255) NOT NULL,
  `inclusive_dates_to_22` varchar(255) NOT NULL,
  `inclusive_dates_position_title_22` varchar(255) NOT NULL,
  `inclusive_dates_department_22` varchar(255) NOT NULL,
  `inclusive_dates_monthly_22` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_22` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_22` varchar(255) NOT NULL,
  `inclusive_dates_government_service_22` varchar(255) NOT NULL,
  `inclusive_dates_from_23` varchar(255) NOT NULL,
  `inclusive_dates_to_23` varchar(255) NOT NULL,
  `inclusive_dates_position_title_23` varchar(255) NOT NULL,
  `inclusive_dates_department_23` varchar(255) NOT NULL,
  `inclusive_dates_monthly_23` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_23` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_23` varchar(255) NOT NULL,
  `inclusive_dates_government_service_23` varchar(255) NOT NULL,
  `inclusive_dates_from_24` varchar(255) NOT NULL,
  `inclusive_dates_to_24` varchar(255) NOT NULL,
  `inclusive_dates_position_title_24` varchar(255) NOT NULL,
  `inclusive_dates_department_24` varchar(255) NOT NULL,
  `inclusive_dates_monthly_24` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_24` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_24` varchar(255) NOT NULL,
  `inclusive_dates_government_service_24` varchar(255) NOT NULL,
  `inclusive_dates_from_25` varchar(255) NOT NULL,
  `inclusive_dates_to_25` varchar(255) NOT NULL,
  `inclusive_dates_position_title_25` varchar(255) NOT NULL,
  `inclusive_dates_department_25` varchar(255) NOT NULL,
  `inclusive_dates_monthly_25` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_25` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_25` varchar(255) NOT NULL,
  `inclusive_dates_government_service_25` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_experience25_tbl`
--

INSERT INTO `work_experience25_tbl` (`we25_id`, `pds_id`, `inclusive_dates_from_21`, `inclusive_dates_to_21`, `inclusive_dates_position_title_21`, `inclusive_dates_department_21`, `inclusive_dates_monthly_21`, `inclusive_dates_salary_job_paygrade_21`, `inclusive_dates_status_of_appointment_21`, `inclusive_dates_government_service_21`, `inclusive_dates_from_22`, `inclusive_dates_to_22`, `inclusive_dates_position_title_22`, `inclusive_dates_department_22`, `inclusive_dates_monthly_22`, `inclusive_dates_salary_job_paygrade_22`, `inclusive_dates_status_of_appointment_22`, `inclusive_dates_government_service_22`, `inclusive_dates_from_23`, `inclusive_dates_to_23`, `inclusive_dates_position_title_23`, `inclusive_dates_department_23`, `inclusive_dates_monthly_23`, `inclusive_dates_salary_job_paygrade_23`, `inclusive_dates_status_of_appointment_23`, `inclusive_dates_government_service_23`, `inclusive_dates_from_24`, `inclusive_dates_to_24`, `inclusive_dates_position_title_24`, `inclusive_dates_department_24`, `inclusive_dates_monthly_24`, `inclusive_dates_salary_job_paygrade_24`, `inclusive_dates_status_of_appointment_24`, `inclusive_dates_government_service_24`, `inclusive_dates_from_25`, `inclusive_dates_to_25`, `inclusive_dates_position_title_25`, `inclusive_dates_department_25`, `inclusive_dates_monthly_25`, `inclusive_dates_salary_job_paygrade_25`, `inclusive_dates_status_of_appointment_25`, `inclusive_dates_government_service_25`) VALUES
(1, '7', '', '', 'dsa', '', '', '', '', '', '', '', 'das', '', '', '', '', '', '', '', 'das', '', '', '', '', '', '', '', 'ds', '', '', '', '', '', '', '', 'dsa', '', '', '', '', ''),
(2, '8', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `work_experience30_tbl`
--

CREATE TABLE `work_experience30_tbl` (
  `we30_id` int(11) NOT NULL,
  `pds_id` varchar(255) NOT NULL,
  `inclusive_dates_from_26` varchar(255) NOT NULL,
  `inclusive_dates_to_26` varchar(255) NOT NULL,
  `inclusive_dates_position_title_26` varchar(255) NOT NULL,
  `inclusive_dates_department_26` varchar(255) NOT NULL,
  `inclusive_dates_monthly_26` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_26` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_26` varchar(255) NOT NULL,
  `inclusive_dates_government_service_26` varchar(255) NOT NULL,
  `inclusive_dates_from_27` varchar(255) NOT NULL,
  `inclusive_dates_to_27` varchar(255) NOT NULL,
  `inclusive_dates_position_title_27` varchar(255) NOT NULL,
  `inclusive_dates_department_27` varchar(255) NOT NULL,
  `inclusive_dates_monthly_27` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_27` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_27` varchar(255) NOT NULL,
  `inclusive_dates_government_service_27` varchar(255) NOT NULL,
  `inclusive_dates_from_28` varchar(255) NOT NULL,
  `inclusive_dates_to_28` varchar(255) NOT NULL,
  `inclusive_dates_position_title_28` varchar(255) NOT NULL,
  `inclusive_dates_department_28` varchar(255) NOT NULL,
  `inclusive_dates_monthly_28` varchar(255) NOT NULL,
  `inclusive_dates_salary_job_paygrade_28` varchar(255) NOT NULL,
  `inclusive_dates_status_of_appointment_28` varchar(255) NOT NULL,
  `inclusive_dates_government_service_28` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_experience30_tbl`
--

INSERT INTO `work_experience30_tbl` (`we30_id`, `pds_id`, `inclusive_dates_from_26`, `inclusive_dates_to_26`, `inclusive_dates_position_title_26`, `inclusive_dates_department_26`, `inclusive_dates_monthly_26`, `inclusive_dates_salary_job_paygrade_26`, `inclusive_dates_status_of_appointment_26`, `inclusive_dates_government_service_26`, `inclusive_dates_from_27`, `inclusive_dates_to_27`, `inclusive_dates_position_title_27`, `inclusive_dates_department_27`, `inclusive_dates_monthly_27`, `inclusive_dates_salary_job_paygrade_27`, `inclusive_dates_status_of_appointment_27`, `inclusive_dates_government_service_27`, `inclusive_dates_from_28`, `inclusive_dates_to_28`, `inclusive_dates_position_title_28`, `inclusive_dates_department_28`, `inclusive_dates_monthly_28`, `inclusive_dates_salary_job_paygrade_28`, `inclusive_dates_status_of_appointment_28`, `inclusive_dates_government_service_28`) VALUES
(1, '7', '', '', '3213', '', '', '', '', '', '', '', '312', '', '', '', '', '', '', '', '312', '', '', '', '', ''),
(2, '8', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
-- Indexes for table `work_experience10_tbl`
--
ALTER TABLE `work_experience10_tbl`
  ADD PRIMARY KEY (`we10_id`);

--
-- Indexes for table `work_experience15_tbl`
--
ALTER TABLE `work_experience15_tbl`
  ADD PRIMARY KEY (`we5_tbl`);

--
-- Indexes for table `work_experience20_tbl`
--
ALTER TABLE `work_experience20_tbl`
  ADD PRIMARY KEY (`we20_id`);

--
-- Indexes for table `work_experience25_tbl`
--
ALTER TABLE `work_experience25_tbl`
  ADD PRIMARY KEY (`we25_id`);

--
-- Indexes for table `work_experience30_tbl`
--
ALTER TABLE `work_experience30_tbl`
  ADD PRIMARY KEY (`we30_id`);

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
  MODIFY `cs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

--
-- AUTO_INCREMENT for table `work_experience10_tbl`
--
ALTER TABLE `work_experience10_tbl`
  MODIFY `we10_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `work_experience15_tbl`
--
ALTER TABLE `work_experience15_tbl`
  MODIFY `we5_tbl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `work_experience20_tbl`
--
ALTER TABLE `work_experience20_tbl`
  MODIFY `we20_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `work_experience25_tbl`
--
ALTER TABLE `work_experience25_tbl`
  MODIFY `we25_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `work_experience30_tbl`
--
ALTER TABLE `work_experience30_tbl`
  MODIFY `we30_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
