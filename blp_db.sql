-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2020 at 10:40 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `pid` bigint(20) NOT NULL,
  `patient_name` varchar(250) NOT NULL,
  `clinic_id` varchar(250) NOT NULL,
  `study_no` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `staff_name` varchar(250) NOT NULL,
  `patient_name1` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `clinic_regno` varchar(250) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `dateMDT` date NOT NULL,
  `dateRFT` date NOT NULL,
  `SmearDiagnosis` varchar(250) NOT NULL,
  `SmearDate` date NOT NULL,
  `mdiag` varchar(250) NOT NULL,
  `Age` varchar(250) NOT NULL,
  `Weight` varchar(250) NOT NULL,
  `Height` varchar(250) NOT NULL,
  `BMI` varchar(250) NOT NULL,
  `no_contra_indication_steroids` varchar(250) NOT NULL,
  `able_to_attend_regularly` varchar(250) NOT NULL,
  `pregnant` varchar(250) NOT NULL,
  `tuberculosis` varchar(250) NOT NULL,
  `diabetes` varchar(250) NOT NULL,
  `other_serious_illness` varchar(250) NOT NULL,
  `other_illness_desc` varchar(250) NOT NULL,
  `inform_consent` varchar(250) NOT NULL,
  `allocate_study_no` varchar(250) NOT NULL,
  `history_of_enl` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form1_contact`
--

CREATE TABLE `form1_contact` (
  `pid` bigint(20) NOT NULL,
  `contact_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `form2`
--

CREATE TABLE `form2` (
  `pid` bigint(20) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `clinic_id` varchar(255) NOT NULL,
  `study_no` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `current_reaction_status` varchar(250) NOT NULL,
  `first_had_enl` varchar(255) NOT NULL,
  `firstPDate` varchar(255) NOT NULL,
  `first_sym` varchar(255) NOT NULL,
  `current_anti_reaction` varchar(255) NOT NULL,
  `date_started_predni` varchar(255) NOT NULL,
  `current_dose_predni` varchar(255) NOT NULL,
  `current_dose_clofa` varchar(255) NOT NULL,
  `current_dose_thal` varchar(255) NOT NULL,
  `nfa` varchar(255) NOT NULL,
  `change_in_nfi` varchar(255) NOT NULL,
  `change_in_nfi_desc` varchar(255) NOT NULL,
  `eess_2` varchar(255) NOT NULL,
  `qol_2_score` varchar(255) NOT NULL,
  `vas_for_pig_2` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL,
  `drug_dose_predni` varchar(255) NOT NULL,
  `drug_dur_predni` varchar(255) NOT NULL,
  `drug_dose_clofa` varchar(255) NOT NULL,
  `drug_dur_clofa` varchar(255) NOT NULL,
  `next_asse_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form2_checkbox`
--

CREATE TABLE `form2_checkbox` (
  `pid` bigint(20) NOT NULL,
  `adverse_predni` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form2_checkbox2`
--

CREATE TABLE `form2_checkbox2` (
  `pid` bigint(20) NOT NULL,
  `current_anti_reaction` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form2_others`
--

CREATE TABLE `form2_others` (
  `pid` bigint(20) NOT NULL,
  `others_drug_name` varchar(255) NOT NULL,
  `others_drug_dosage` varchar(255) NOT NULL,
  `others_drug_duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `form3`
--

CREATE TABLE `form3` (
  `pid` bigint(20) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `clinic_id` varchar(255) NOT NULL,
  `study_no` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `current_reaction_status` varchar(255) NOT NULL,
  `nfa_3` varchar(255) NOT NULL,
  `new_nfi_3` varchar(255) NOT NULL,
  `Add1` varchar(255) NOT NULL,
  `eess_3` varchar(255) NOT NULL,
  `qol_3` varchar(255) NOT NULL,
  `vas_for_pig_3` varchar(255) NOT NULL,
  `rand_date` date NOT NULL,
  `drug_dose_predni` varchar(255) NOT NULL,
  `drug_dura_predni` varchar(255) NOT NULL,
  `drug_dose_clofa` varchar(255) NOT NULL,
  `drug_dura_clofa` varchar(255) NOT NULL,
  `advise_ad` varchar(255) NOT NULL,
  `assessment_date` date NOT NULL,
  `prednisolone_review` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form3_others`
--

CREATE TABLE `form3_others` (
  `pid` bigint(20) NOT NULL,
  `others_drug_name` varchar(255) NOT NULL,
  `others_drug_dosage` varchar(255) NOT NULL,
  `others_drug_duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `form4`
--

CREATE TABLE `form4` (
  `pid` bigint(20) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `clinic_id` varchar(255) NOT NULL,
  `study_no` varchar(255) NOT NULL,
  `formDate` date NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `current_status` varchar(255) NOT NULL,
  `nfa_4` varchar(255) NOT NULL,
  `eess_4` varchar(255) NOT NULL,
  `qol_4` varchar(255) NOT NULL,
  `vas_4` varchar(255) NOT NULL,
  `enl_present_time_since` varchar(255) NOT NULL,
  `time_since_last_received_prednisolone` varchar(255) NOT NULL,
  `recurrent_enl_start_predni` varchar(255) NOT NULL,
  `advised_admission` varchar(255) NOT NULL,
  `nextDate` date NOT NULL,
  `nextPDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form4_checkbox`
--

CREATE TABLE `form4_checkbox` (
  `pid` bigint(20) NOT NULL,
  `checklist_predni` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form4_checkbox2`
--

CREATE TABLE `form4_checkbox2` (
  `pid` bigint(20) NOT NULL,
  `checklist_clofa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form5`
--

CREATE TABLE `form5` (
  `pid` bigint(20) NOT NULL,
  `patient_name` varchar(250) NOT NULL,
  `clinic_id` varchar(250) NOT NULL,
  `study_no` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `staff_name` varchar(250) NOT NULL,
  `patient_since_last_visit` varchar(250) NOT NULL,
  `prednisolone_5` varchar(250) NOT NULL,
  `clofazimine_vitamins` varchar(250) NOT NULL,
  `nfa_5` varchar(250) NOT NULL,
  `new_nfi_5` varchar(250) NOT NULL,
  `if_yes` varchar(250) NOT NULL,
  `eess_score_5` varchar(250) NOT NULL,
  `patient_worse` varchar(250) NOT NULL,
  `time_since_flare_began` varchar(250) NOT NULL,
  `dose_std_course` varchar(255) NOT NULL,
  `dura_std_course` varchar(255) NOT NULL,
  `dose_add_predni` varchar(255) NOT NULL,
  `dura_add_predni` varchar(255) NOT NULL,
  `advised_admission` varchar(250) NOT NULL,
  `date_of_next_assessment_5` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `form5_checkbox`
--

CREATE TABLE `form5_checkbox` (
  `pid` bigint(20) NOT NULL,
  `adverse_effects_predni` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form5_checkbox2`
--

CREATE TABLE `form5_checkbox2` (
  `pid` bigint(20) NOT NULL,
  `adverse_effects_clofa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form6`
--

CREATE TABLE `form6` (
  `pid` bigint(20) NOT NULL,
  `patient_name` varchar(250) NOT NULL,
  `clinic_id` varchar(250) NOT NULL,
  `study_no` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `staff_name` varchar(250) NOT NULL,
  `current_status` varchar(250) NOT NULL,
  `nfa` varchar(250) NOT NULL,
  `eess` varchar(250) NOT NULL,
  `qol` varchar(250) NOT NULL,
  `vas` varchar(250) NOT NULL,
  `current_antireaction_therapy` varchar(250) NOT NULL,
  `no_weeks_extra_clofazimine` varchar(250) NOT NULL,
  `enl_at_randomisation` varchar(250) NOT NULL,
  `duration_first_episode` varchar(250) NOT NULL,
  `flare_of_enl` varchar(250) NOT NULL,
  `if_flare_how_long` varchar(250) NOT NULL,
  `eess_at_flare` varchar(250) NOT NULL,
  `recurrent_enl_steroids` varchar(250) NOT NULL,
  `chronic_enl_randomisation` varchar(250) NOT NULL,
  `total_steroids_consumed` varchar(250) NOT NULL,
  `change_in_nfa` varchar(250) NOT NULL,
  `change_in_nfa_desc` varchar(700) NOT NULL,
  `change_in_qol` varchar(250) NOT NULL,
  `adverse_effect_of_drug` varchar(250) NOT NULL,
  `drug_desc` varchar(700) NOT NULL,
  `others` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form6_checkbox`
--

CREATE TABLE `form6_checkbox` (
  `pid` bigint(20) NOT NULL,
  `adv_eff_predni` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form6_checkbox2`
--

CREATE TABLE `form6_checkbox2` (
  `pid` bigint(20) NOT NULL,
  `adv_eff_clofa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `form6_checkbox3`
--

CREATE TABLE `form6_checkbox3` (
  `pid` bigint(20) NOT NULL,
  `withdrawal_reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `form1_contact`
--
ALTER TABLE `form1_contact`
  ADD PRIMARY KEY (`pid`,`contact_no`);

--
-- Indexes for table `form2`
--
ALTER TABLE `form2`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `form2_checkbox`
--
ALTER TABLE `form2_checkbox`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `form2_checkbox2`
--
ALTER TABLE `form2_checkbox2`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `form2_others`
--
ALTER TABLE `form2_others`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `form3`
--
ALTER TABLE `form3`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `form3_others`
--
ALTER TABLE `form3_others`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `form4`
--
ALTER TABLE `form4`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `form4_checkbox`
--
ALTER TABLE `form4_checkbox`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `form4_checkbox2`
--
ALTER TABLE `form4_checkbox2`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `form5`
--
ALTER TABLE `form5`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `form5_checkbox`
--
ALTER TABLE `form5_checkbox`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `form5_checkbox2`
--
ALTER TABLE `form5_checkbox2`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `form6`
--
ALTER TABLE `form6`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `form6_checkbox`
--
ALTER TABLE `form6_checkbox`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `form6_checkbox2`
--
ALTER TABLE `form6_checkbox2`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `form6_checkbox3`
--
ALTER TABLE `form6_checkbox3`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form1`
--
ALTER TABLE `form1`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form2`
--
ALTER TABLE `form2`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form2_checkbox`
--
ALTER TABLE `form2_checkbox`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form2_checkbox2`
--
ALTER TABLE `form2_checkbox2`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form3`
--
ALTER TABLE `form3`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form4`
--
ALTER TABLE `form4`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form4_checkbox`
--
ALTER TABLE `form4_checkbox`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form4_checkbox2`
--
ALTER TABLE `form4_checkbox2`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form5`
--
ALTER TABLE `form5`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form5_checkbox`
--
ALTER TABLE `form5_checkbox`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form5_checkbox2`
--
ALTER TABLE `form5_checkbox2`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form6`
--
ALTER TABLE `form6`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form6_checkbox`
--
ALTER TABLE `form6_checkbox`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form6_checkbox2`
--
ALTER TABLE `form6_checkbox2`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form6_checkbox3`
--
ALTER TABLE `form6_checkbox3`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
