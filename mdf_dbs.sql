-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 20, 2025 at 11:03 AM
-- Server version: 9.3.0
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mdf_dbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `adverts`
--

CREATE TABLE `adverts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `advert_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commanders`
--

CREATE TABLE `commanders` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `commander_roles` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commander_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commanders`
--

INSERT INTO `commanders` (`id`, `title`, `name`, `slug`, `user_id`, `commander_roles`, `picture`, `commander_type`, `created_at`, `updated_at`) VALUES
(1, 'Commander In Chief', 'His Excellency PROF ARTHUR PETER MUTHARIKA', 'his-excellency-dr-lazarus-mccarthy-chakwera', 1, '<p class=\"MsoNormal\" style=\"text-align:justify;text-justify:inter-ideograph;\r\nline-height:150%\"><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:150%;\r\nfont-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Maiandra GD&quot;\">\r\nSection 78 of the Republican Constitution stipulates that there shallbe a President of the Republic who shall be Head of State and Government and the Commander-in-Chief of the Defence Forces of Malawi. Section 161 of the Republican Constitution further states that the ultimate responsibility for the Defence Forces of Malawi shall vest in the President as Commander-in-Chief.\r\n<o:p></o:p></span></p>', 'uploads/commanders/1760955945HE_PROF_ARTHUR_PETER_MUTHARIKA_comp.jpg', 'Commander In Chief', '2024-07-26 05:33:21', '2025-10-20 08:25:45'),
(5, 'MAJOR GENERAL', 'CHIKUNKHA SOKO, MSM,psc, ndc', 'major-general-chikunkha-soko', 3, '<p class=\"MsoListParagraph\" style=\"margin-left:0cm;mso-add-space:auto;text-align:\r\njustify;text-justify:inter-ideograph;line-height:150%;tab-stops:3.0cm\"><span style=\"font-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:SimSun;\r\nmso-bidi-font-family:&quot;Maiandra GD&quot;;mso-ansi-language:EN-GB\">Appointed Commander\r\nMalawi Army on 18<sup>th</sup> December, 2020. Before being appointed\r\nCommander, he was Commandant of Malawi Armed Forces College. He has held\r\nvarious Staff and Command appointments at various levels including Chief of\r\nOperations at Malawi Defence Force Joint Headquarters, Chief of Plans and\r\nPolicy at the Ministry of Defence, and Commander of the 94 Brigade.<o:p></o:p></span></p>', 'uploads/commanders/1729254566CHE SOKO.jpg', 'Army Commander', '2024-07-26 05:51:43', '2024-10-18 10:29:26'),
(7, 'General', 'GRACIANO MATEWERE, BEM, MSM', 'graciano-matewere-bem-msm', 1, '<p class=\"MsoNormal\" style=\"text-align:justify;text-justify:inter-ideograph;\r\nline-height:150%\"><span style=\"font-size:14.0pt;line-height:150%;font-family:\r\n&quot;Maiandra GD&quot;,sans-serif;mso-fareast-font-family:SimSun;mso-bidi-font-family:\r\n&quot;Maiandra GD&quot;;color:#4472C4;mso-themecolor:accent1\">General Graciano Matewere\r\ndedicated 33 years of his life to military service. He first served in the\r\nBritish colonial military and later transitioned to the independent Malawi Army.\r\nHis leadership left an indelible mark. He retired in 1980, handing over to\r\nGeneral Marvin Khanga, and passed on in\r\n2001, leaving behind a legacy of service, courage, and dedication.</span><span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:150%;font-family:&quot;Maiandra GD&quot;,sans-serif;\r\nmso-fareast-font-family:SimSun;mso-bidi-font-family:&quot;Maiandra GD&quot;;color:#4472C4;\r\nmso-themecolor:accent1;mso-ansi-language:EN-GB\"><o:p></o:p></span></p>', 'uploads/commanders/1723459064172198039916 A4 Print GEN G C MATEWERE.jpg', 'MDF Commander', '2024-07-26 05:53:19', '2025-10-19 09:20:23'),
(9, 'General', 'MELVIN KHANGA, MSM, psc', 'melvin-khanga-msm-psc', 1, 'He was the second native Commander who was enlisted in July 1964 and got commissioned in April 1965. Before being appointed Commander in 1980, he had served in various appointments and retired in June 1992. He Handed over to General Isaac Yohane.', 'uploads/commanders/172198072015 A4 Print GEN M M  KHANGA.jpg', 'MDF Commander', '2024-07-26 05:58:40', '2025-10-19 09:26:55'),
(11, 'MAJOR  GENERAL', 'ROBRAY AMAN ISMAEL,psc', 'robray-aman-ismael', 3, '<p class=\"MsoNormal\" style=\"text-align:justify;text-justify:inter-ideograph;\r\nline-height:150%\"><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:150%;\r\nfont-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:SimSun;\r\nmso-bidi-font-family:&quot;Maiandra GD&quot;\">Major General Robray Aman Ismael is the Commander of the Malawi Air Force, taking over the position in May 2024\r\nfrom Major General Ian Chirwa. Throughout his 44-year military journey, General\r\nIsmael has held several significant positions such as Deputy Air Force\r\nCommander, Deputy National Service Commander, Defence Advisor in Nairobi -\r\nKenya, and Team Leader for the United Nations Mission in the Democratic\r\nRepublic of the Congo (MONUC). General Ismael has completed multiple military\r\ncourses in different countries, including Egypt, the United Kingdom, Zambia,\r\nand the United States of America, focusing on decision-making, leadership, and\r\nlogistics. His military accomplishments are recognized with decorations like\r\nthe United Nations Medal, Nacala Corridor Campaigns, and various certificates\r\nin aviation safety, aeronautical engineering, and supply chain management from\r\ninstitutions in France, the USA, and the UK.</span><b><span style=\"font-size:\r\n12.0pt;line-height:150%;font-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:\r\nSimSun;mso-bidi-font-family:&quot;Maiandra GD&quot;;mso-ansi-language:EN-GB\"><o:p></o:p></span></b></p>', 'uploads/commanders/1752054283ISMAEL.jpg', 'Air Force Commander', '2024-07-26 06:02:28', '2025-07-09 09:44:43'),
(13, 'General', 'ISAAC YOHANE, MSM, BEM', 'isaac-yohane-msm-bem', 1, '<span lang=\"ZH-CN\" style=\"font-size:14.0pt;line-height:\r\n107%;font-family:&quot;Malgun Gothic&quot;,sans-serif;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:ZH-CN;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA\">The</span><span lang=\"EN-GB\" style=\"font-size:\r\n14.0pt;line-height:107%;font-family:&quot;Malgun Gothic&quot;,sans-serif;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-US;mso-bidi-language:AR-SA\"> third</span><span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Malgun Gothic&quot;,sans-serif;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;\r\nmso-ansi-language:ZH-CN;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\"> </span><span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Malgun Gothic&quot;,sans-serif;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;\r\nmso-ansi-language:EN-GB;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">native</span><span lang=\"ZH-CN\" style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Malgun Gothic&quot;,sans-serif;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;\r\nmso-ansi-language:ZH-CN;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">\r\nCommander </span><span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:107%;\r\nfont-family:&quot;Malgun Gothic&quot;,sans-serif;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-GB;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA\">who was at the helm during the transition period\r\nfrom one party rule to multi-party democracy. He joined the force in </span><span lang=\"ZH-CN\" style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Malgun Gothic&quot;,sans-serif;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;\r\nmso-ansi-language:ZH-CN;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">November,\r\n1948</span><span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:107%;\r\nfont-family:&quot;Malgun Gothic&quot;,sans-serif;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-GB;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA\"> and served </span><span lang=\"ZH-CN\" style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Malgun Gothic&quot;,sans-serif;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;\r\nmso-ansi-language:ZH-CN;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">for</span><span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Malgun Gothic&quot;,sans-serif;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;\r\nmso-ansi-language:EN-GB;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">\r\nclose to</span><span lang=\"ZH-CN\" style=\"font-size:14.0pt;line-height:107%;\r\nfont-family:&quot;Malgun Gothic&quot;,sans-serif;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:ZH-CN;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA\"> 1</span><span lang=\"EN-GB\" style=\"font-size:14.0pt;\r\nline-height:107%;font-family:&quot;Malgun Gothic&quot;,sans-serif;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-US;mso-bidi-language:AR-SA\">8</span><span lang=\"ZH-CN\" style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Malgun Gothic&quot;,sans-serif;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;\r\nmso-ansi-language:ZH-CN;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">\r\nyears </span><span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:107%;\r\nfont-family:&quot;Malgun Gothic&quot;,sans-serif;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-GB;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA\">before being </span><span lang=\"ZH-CN\" style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Malgun Gothic&quot;,sans-serif;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;\r\nmso-ansi-language:ZH-CN;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">promoted\r\nto</span><span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:107%;font-family:\r\n&quot;Malgun Gothic&quot;,sans-serif;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:\r\nminor-bidi;mso-ansi-language:EN-GB;mso-fareast-language:EN-US;mso-bidi-language:\r\nAR-SA\"> the</span><span lang=\"ZH-CN\" style=\"font-size:14.0pt;line-height:107%;\r\nfont-family:&quot;Malgun Gothic&quot;,sans-serif;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:ZH-CN;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA\"> rank</span><span lang=\"ZH-CN\" style=\"font-size:\r\n14.0pt;line-height:107%;font-family:&quot;Malgun Gothic&quot;,sans-serif;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-US;mso-bidi-language:AR-SA\"> </span><span lang=\"ZH-CN\" style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Malgun Gothic&quot;,sans-serif;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;\r\nmso-ansi-language:ZH-CN;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">of\r\nLieutenant </span><span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:107%;\r\nfont-family:&quot;Malgun Gothic&quot;,sans-serif;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-GB;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA\">in </span><span lang=\"ZH-CN\" style=\"font-size:\r\n14.0pt;line-height:107%;font-family:&quot;Malgun Gothic&quot;,sans-serif;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;mso-ansi-language:ZH-CN;\r\nmso-fareast-language:EN-US;mso-bidi-language:AR-SA\">1966</span><span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Malgun Gothic&quot;,sans-serif;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;\r\nmso-ansi-language:EN-GB;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">.\r\nHe </span><span lang=\"ZH-CN\" style=\"font-size:14.0pt;line-height:107%;font-family:\r\n&quot;Malgun Gothic&quot;,sans-serif;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:\r\nminor-bidi;mso-ansi-language:ZH-CN;mso-fareast-language:EN-US;mso-bidi-language:\r\nAR-SA\">became </span><span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:107%;\r\nfont-family:&quot;Malgun Gothic&quot;,sans-serif;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-GB;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA\">Commander of Malawi Army</span><span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Malgun Gothic&quot;,sans-serif;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;\r\nmso-ansi-language:ZH-CN;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\"> </span><span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Malgun Gothic&quot;,sans-serif;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;\r\nmso-ansi-language:EN-GB;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">in</span><span lang=\"ZH-CN\" style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Malgun Gothic&quot;,sans-serif;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;\r\nmso-ansi-language:ZH-CN;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">\r\n1992</span><span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:107%;\r\nfont-family:&quot;Malgun Gothic&quot;,sans-serif;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-GB;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA\"> and handed over to General Dismus Maulana in\r\n1993</span>', 'uploads/commanders/172198097714 A4  Print GEN I  YOHANE.jpg', 'MDF Commander', '2024-07-26 06:02:57', '2025-10-19 09:31:50'),
(25, 'MAJOR GENERAL', 'P B Z CHILANGWE,MSM, psc, pwc', 'john-stanley-chaika', 3, '<p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:115%\"><span lang=\"EN-US\" style=\"font-size:14.0pt;line-height:\r\n115%;font-family:&quot;Maiandra GD&quot;,sans-serif\">Born on 26th January, 1961, Major General Polycarp Boniface Zakaria Chilangwe, MSM, psc, pwc currently\r\nserves as the Commander of the Malawi National Service (MNS). He was enlisted\r\nin the Malawi Defence Force (MDF) on 17th November, 1979 and was commissioned\r\nas a Second Lieutenant on 21st November, 1980.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:115%\"><span lang=\"EN-US\" style=\"font-size:14.0pt;line-height:\r\n115%;font-family:&quot;Maiandra GD&quot;,sans-serif\">&nbsp;</span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:115%\"><span lang=\"EN-US\" style=\"font-size:14.0pt;line-height:\r\n115%;font-family:&quot;Maiandra GD&quot;,sans-serif\">Throughout his distinguished 45-year\r\ncareer, the Commander MNS has undertaken various command and staff roles. Prior\r\nto assuming the position of Commander MNS on 11th October 2024, Major General Chilangwe fulfilled responsibilities such as Chief of Plans and Policy\r\nat the Joint MDF Headquarters, Chief of Plans and Policy at the Ministry of\r\nDefence (MoD), Inspector General, Commander 94 Infantry Brigade, Chief of\r\nLogistics, Deputy Chief of Plans and Policy, Deputy Chief of Operations, Staff\r\nOfficer Grade One (SOI) Policy and Planning, Commanding Officer of the 9th\r\nInfantry Battalion, Officer Commanding at various MDF units, Company\r\nSecond-in-Command, Platoon Commander, and Military Transport Officer (MTO).\r\nAdditionally, he served as a Military Observer under the United Nations (UN) in\r\nthe Democratic Republic of Congo (DRC).<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:115%\"><span lang=\"EN-US\" style=\"font-size:14.0pt;line-height:\r\n115%;font-family:&quot;Maiandra GD&quot;,sans-serif\">&nbsp;</span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:115%\"><span lang=\"EN-US\" style=\"font-size:14.0pt;line-height:\r\n115%;font-family:&quot;Maiandra GD&quot;,sans-serif\">Major General Chilangwe has\r\ncompleted numerous military courses both locally and internationally. These\r\ninclude Managing Defence in the Wider Security Context, Regional Senior\r\nOfficers Developmental Course, African Crisis Response Initiative (ACRI), Law\r\nof Armed Conflict Instructors Course, International Humanitarian Law Course,\r\nCompany Commanders Course, Mine Awareness Course, All Arms Battle Handling,\r\nOfficers Short Staff Course, Special Command and Communication Course, Grade\r\nIII Staff Course, Officers Administration Course, Platoon Commanders Course,\r\nand Officer Cadets Course.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:115%\"><span lang=\"EN-US\" style=\"font-size:14.0pt;line-height:\r\n115%;font-family:&quot;Maiandra GD&quot;,sans-serif\">&nbsp;</span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:115%\"><span lang=\"EN-US\" style=\"font-size:14.0pt;line-height:\r\n115%;font-family:&quot;Maiandra GD&quot;,sans-serif\">Internationally, he has undertaken\r\ncourses such as the Senior Defence Management Course in Hyderabad, India, the\r\n8th African Cooperation for Decision Makers Training Course in Cairo, Egypt,\r\nthe 14th Regional Senior Mission Leaders Course at the International Peace\r\nSupport Training Centre (IPSTC) in Karen, Kenya, and various others in\r\ncountries such as Italy, Germany, China, the United States, Taiwan, and\r\nZimbabwe.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:115%\"><span lang=\"EN-US\" style=\"font-size:14.0pt;line-height:\r\n115%;font-family:&quot;Maiandra GD&quot;,sans-serif\">Major General Chilangwe\'s\r\nmilitary accolades include the 45th Anniversary of Independence Medal, United\r\nNations Medal, 40th Anniversary of Independence Medal, Nacala Medal, High\r\nPerformance Medal (Grade II Staff Course) from Longtan, Republic of China (RoC),\r\nEfficiency Medal, Long Service and Good Conduct Medal, and the Malawi Silver\r\nJubilee of Independence Medal.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:115%\"><span lang=\"EN-US\" style=\"font-size:14.0pt;line-height:\r\n115%;font-family:&quot;Maiandra GD&quot;,sans-serif\">&nbsp;</span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:115%\"><span lang=\"EN-US\" style=\"font-size:14.0pt;line-height:\r\n115%;font-family:&quot;Maiandra GD&quot;,sans-serif\">His hobbies include walking,\r\nrunning, gymnasium exercises, watching news, boxing, watching television\r\nmovies, reading newspapers and books, playing scrabble, and gardening.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:115%\"><span lang=\"EN-US\" style=\"font-size:14.0pt;line-height:\r\n115%;font-family:&quot;Maiandra GD&quot;,sans-serif\">&nbsp;</span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:115%\"><span lang=\"EN-US\" style=\"font-size:14.0pt;line-height:\r\n115%;font-family:&quot;Maiandra GD&quot;,sans-serif\">Major General Chilangwe\r\noriginates from Balaka District and is married with three sons and a daughter.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:115%\"><span lang=\"EN-US\" style=\"font-size:14.0pt;line-height:\r\n115%;font-family:&quot;Maiandra GD&quot;,sans-serif\">&nbsp;</span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;line-height:115%\"><span lang=\"EN-US\" style=\"font-size:14.0pt;line-height:\r\n115%;font-family:&quot;Maiandra GD&quot;,sans-serif\">&nbsp;</span></p><p class=\"MsoListParagraphCxSpFirst\" style=\"margin-left:0cm;mso-add-space:auto;\r\ntext-align:justify;text-justify:inter-ideograph;line-height:150%;tab-stops:\r\n3.0cm\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\n115%\"><span lang=\"EN-US\" style=\"font-family:&quot;Maiandra GD&quot;,sans-serif\">&nbsp;</span></p>', 'uploads/commanders/17520545521749732446MAJ GEN CHILANGWE.jpg', 'Malawi National Service', '2024-07-26 06:28:13', '2025-07-09 09:49:12'),
(45, 'General', 'GENERAL DISMUS MAULANA, MSM, psc, rcds', 'general-dismus-maulana-msm-psc-rcds', 1, '<p class=\"MsoNormal\" style=\"text-align:justify;line-height:115%;tab-stops:85.05pt\"><span lang=\"ZH-CN\" style=\"font-size:14.0pt;line-height:115%;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\">The\r\n</span><span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:115%;font-family:\r\n&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;mso-ansi-language:EN-GB\">fourth native</span><span lang=\"ZH-CN\" style=\"font-size:14.0pt;line-height:115%;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\">\r\nCommander of Malawi Army</span><span lang=\"EN-GB\" style=\"font-size:14.0pt;\r\nline-height:115%;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;mso-ansi-language:\r\nEN-GB\"> and the </span><span lang=\"ZH-CN\" style=\"font-size:14.0pt;line-height:\r\n115%;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\">first </span><span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:115%;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;\r\nmso-ansi-language:EN-GB\">during the new political dispensation. He joined the\r\nforce in 1966 and became Commander in 1993. He handed over to General Manken\r\nChigawa.<o:p></o:p></span></p>', 'uploads/commanders/172236054813 A4  Print GEN D A N  MAULANA.jpg', 'MDF Commander', '2024-07-30 15:29:08', '2025-10-19 09:33:00'),
(47, 'General', 'GENERAL MANKEN CHIGAWA, MSM, plsc', 'general-manken-chigawa-msm-plsc', 1, 'General Manken CHIGAWA was handed Command from General Dismus MAULANA in 1994 and served as Commander until his death on 18th April 1995. He got assassinated at Tsangano in Ntcheu District.', 'uploads/commanders/172236070712 A4 Print GEN M J  CHIGAWA.jpg', 'MDF Commander', '2024-07-30 15:31:47', '2025-10-19 10:17:00'),
(49, 'General', 'GENERAL OWEN BINAULI, MSM', 'general-owen-binauli-msm', 1, '<p class=\"MsoNormal\" style=\"text-align:justify;line-height:115%;tab-stops:85.05pt\"><span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:115%;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;\r\nmso-ansi-language:EN-GB\">Was appointed Commander following the assassination of\r\nGeneral Manken Chigawa. He handed over to General Kelvin Simwaka in 1996 and\r\nwas later appointed Malawi’s High Commissioner to Mozambique. He died at a\r\nSouth African Military Hospital in Pretoria where he had been taken for\r\ntreatment after being involved in a serious car accident.<o:p></o:p></span></p>', 'uploads/commanders/172236082411 A4 Print GEN O B  BINAULI.jpg', 'MDF Commander', '2024-07-30 15:33:44', '2025-10-19 10:18:13'),
(51, 'General', 'GENERAL KELVIN SIMWAKA, osc', 'general-kelvin-simwaka-osc', 1, '<p class=\"MsoNormal\" style=\"text-align:justify;line-height:115%;tab-stops:85.05pt\"><span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:115%;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;\r\nmso-ansi-language:EN-GB\">The 6<sup>th</sup> native commander who was appointed\r\nin 1996 and served for a year before handing over to General Joseph Chimbayo in\r\n1997.<o:p></o:p></span></p>', 'uploads/commanders/172236094010 A4 Print GEN K SIMWAKA.jpg', 'MDF Commander', '2024-07-30 15:35:40', '2025-10-19 09:34:16'),
(53, 'General', 'GENERAL JOSEPH CHIMBAYO, MSM, osc', 'general-joseph-chimbayo-msm-osc', 1, '<p class=\"MsoNormal\" style=\"text-align:justify;line-height:115%;tab-stops:85.05pt\"><span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:115%;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;\r\nmso-ansi-language:EN-GB\">The 7<sup>th</sup> native commander who was appointed\r\nCommander in 1997 and served for six years before handing over to General Marko\r\nChiziko, who served as his deputy, in 2004.<o:p></o:p></span></p>', 'uploads/commanders/172236106509 A4 Print GEN J G  CHIMBAYO.jpg', 'MDF Commander', '2024-07-30 15:37:45', '2025-10-19 10:21:13'),
(55, 'General', 'GENERAL MARKO CHIZIKO, MA, MSM, psc', 'general-marko-chiziko-ma-msm-psc', 1, '<p class=\"MsoNormal\" style=\"text-align:justify;line-height:115%;tab-stops:85.05pt\"><span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:115%;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;\r\nmso-ansi-language:EN-GB\">The 8<sup>th</sup> native Commander who served from\r\n2004 to 2011 before handing over to General Henry Odillo. He was appointed\r\nNational Security Advisor upon his retirement from Malawi Defence Force.<o:p></o:p></span></p>', 'uploads/commanders/172236116708 A4 Print GEN M D CHIZIKO.jpg', 'MDF Commander', '2024-07-30 15:39:27', '2025-10-19 10:23:27'),
(57, 'General', 'GENERAL HENRY O’DILLO, psc, ndc', 'general-henry-odillo-psc-ndc', 1, 'The 9th Malawian Commander who served from 22nd July 2011 to 24th June 2014. He handed over to General Ignancio Maulana after being seconded to Airport Development Limited (ADL). He was at the helm when Malawi lost her first sitting president, Late Ngwazi Professor Bingu wa Mutharika in 2012 and facilitated the smooth transition of power to the then Vice President, Her Excellency Dr Joyce Banda who was later sworn in as President in line with the Republican Constitution. He is currently the Chairperson of the Veterans and Ex-Service members League of Malawi (VELOM).', 'uploads/commanders/172236125907 A4 Print GEN H L ODILLO.jpg', 'MDF Commander', '2024-07-30 15:40:59', '2025-10-19 10:25:36'),
(59, 'General', 'GENERAL IGNANCIO MAULANA, psc, ndc', 'general-ignancio-maulana-psc-ndc', 1, 'General Maulana took over from General Henry Odillo on 24 June 2014 becoming the 10th Native Commander. After his tenure as MDF Commander, he was deployed to the National Food Reserve Agency (NRFA). He handed over command to General Griffin Spoon Phiri in 2016. He is currently the Commissioner for Refugees.', 'uploads/commanders/172236144906 A4 Print GEN I E J MAULANA.jpg', 'MDF Commander', '2024-07-30 15:42:51', '2025-10-20 07:31:21'),
(61, 'General', 'GENERAL GRIFFIN SPOON PHIRI, MSM, psc, nwc', 'general-griffin-spoon-phiri-msm-psc-nwc', 1, 'He assumed the role of MDF Commander succeeding General Ignancio Maulana in 2016. Before this appointment becoming the 11th native commander, he was Deputy Defence Force Commander. General Griffin Spoon Phiri holds the honor of being the 63rd NDU International Fellow and the first Malawian to be inducted into the International Fellow Hall of Fame (IFHOF). The IFHOF recognizes outstanding international graduates of the United States National Defense University (NDU) who have risen to the highest leadership positions in their countries’ armed forces or governments. He handed over to General Vincent Nundwe and seconded as a National Security Advisor on 21st June, 2019.', 'uploads/commanders/172236154605 A4 Print GEN GS Phiri.jpg', 'MDF Commander', '2024-07-30 15:45:46', '2025-10-19 10:27:28'),
(63, 'General', 'GENERAL VINCENT NUNDWE, MSM, psc', 'general-vincent-nundwe-msm-psc', 1, '<p class=\"MsoNormal\" style=\"text-align:justify;line-height:115%;tab-stops:85.05pt\"><span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:115%;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;\r\nmso-ansi-language:EN-GB\">Appointed Commander Malawi Defence Force in 2019\r\nreplacing General Griffin Spoon Phiri after serving as his deputy responsible\r\nfor Operations and Training from 2016 to 2019. He was replaced by General Peter\r\nNamathanga in March 2020 and later re-instated on 1<sup>st</sup> September\r\n2020. He is the first Malawian General to serve as Commander twice after\r\nBrigadier General T P J Lewis; a British National.</span><span style=\"font-size:14.0pt;line-height:115%;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;\r\nmso-ansi-language:EN-US\"> He retired on 11<sup>th</sup> July 2023 and was\r\nsucceeded by the Current Commander, General Paul Velentino Phiri, MSM, psc,\r\nndc, PhD.<o:p></o:p></span></p>', 'uploads/commanders/172236165604 A4 Print GEN VT Nundwe.jpg', 'MDF Commander', '2024-07-30 15:47:36', '2025-10-19 10:40:12'),
(65, 'General', 'GENERAL PETER NAMATHANGA, MSM, POMS, psc, ndc', 'general-peter-namathanga-msm-poms-psc-ndc', 1, '<p class=\"MsoNormal\" style=\"text-align:justify;line-height:115%;tab-stops:85.05pt\"><span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:115%;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;\r\nmso-ansi-language:EN-GB\">The 14<sup>th</sup> Malawian Commander who was\r\nappointed on 17 March, 2020 replacing General Vincent Nundwe. He served as\r\nCommander from March to September 2020 and handed over to General Vincent\r\nNundwe on 1<sup>st</sup> September, 2020 following his re-instatement by the\r\nCommander-In-Chief.<o:p></o:p></span></p>', 'uploads/commanders/172236176103 A4 Print GEN P A L NAMATHANGA.jpg', 'MDF Commander', '2024-07-30 15:49:21', '2025-10-19 10:41:34'),
(67, 'General', 'GENERAL VINCENT NUNDWE, MSM, psc', 'general-vincent-nundwe-msm-psc', 5, '<span lang=\"EN-GB\" style=\"font-size:14.0pt;line-height:\r\n107%;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-GB;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA\">He was re-instated on 1<sup>st</sup> September 2020. He\r\nis the first Malawian General to serve as Commander twice after Brigadier\r\nGeneral T P J Lewis; a British National.</span><span style=\"font-size:14.0pt;\r\nline-height:107%;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;\r\nmso-fareast-language:EN-US;mso-bidi-language:AR-SA\"> He retired on 11<sup>th</sup>\r\nJuly 2023 and was succeeded by the Current Commander, General Paul Velentino\r\nPhiri, MSM, psc, ndc, PhD.</span>', 'uploads/commanders/172236282002 A4 Print GEN VT Nundwe.jpg', 'MDF Commander', '2024-07-30 16:07:00', '2024-07-30 16:07:00'),
(71, 'General', 'GENERAL PAUL VELENTINO PHIRI, MSM, psc, ndc, PhD', 'general-paul-velentino-phiri-msm-psc-ndc-phd', 5, '<p class=\"MsoBodyText\" style=\"margin-top:13.95pt;margin-right:5.8pt;margin-bottom:\r\n8.0pt;margin-left:5.0pt;line-height:148%\">He is the current commander of the\r\nMalawi Defence Force and appointed to the hem on 11<span style=\"font-size:9.0pt;\r\nmso-bidi-font-size:14.0pt;line-height:148%;position:relative;top:-5.0pt;\r\nmso-text-raise:5.0pt\">th<span style=\"letter-spacing:2.0pt\"> </span></span>July,\r\n2023.<o:p></o:p></p>', 'uploads/commanders/172236334801 A4 Print GEN P V PHIRI.jpg', 'MDF Commander', '2024-07-30 16:15:48', '2024-07-30 16:15:48'),
(79, 'MAJOR GENERAL', 'SWITHUN KONDWANI MCHUNGULA, MSM, psc, ndc, rcds', 'swithun-kondwani-mchungula-msm-psc-ndc-rcds', 3, '<p class=\"MsoListParagraphCxSpFirst\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;margin-left:0cm;mso-add-space:auto;text-align:justify;tab-stops:3.0cm\"><span style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;mso-ansi-language:\r\nEN-GB\">Major </span><span lang=\"EN-US\" style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\">General\r\n</span><span style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;\r\nmso-ansi-language:EN-GB\">Swithun Mchungula</span><span lang=\"EN-US\" style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\"> joined the </span><span style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;mso-ansi-language:\r\nEN-GB\">Malawi Defence Force</span><span lang=\"EN-US\" style=\"font-size:14.0pt;\r\nfont-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\"> in 19</span><span style=\"font-size:\r\n14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;mso-ansi-language:EN-GB\">88</span><span lang=\"EN-US\" style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\">\r\nas a</span><span style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;\r\nmso-ansi-language:EN-GB\"> 24</span><span lang=\"EN-US\" style=\"font-size:14.0pt;\r\nfont-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\">-year-old and commissioned </span><span style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;mso-ansi-language:\r\nEN-GB\">as Second Lieutenant </span><span lang=\"EN-US\" style=\"font-size:14.0pt;\r\nfont-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\">from the </span><span style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;mso-ansi-language:\r\nEN-GB\">Malawi Armed Forces College (MAFCO), then Kamuzu Military College (KMC),\r\non 9<sup>th</sup> June, 1989 having spent one year and three months in college</span><span lang=\"EN-US\" style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\">.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;margin-left:0cm;mso-add-space:auto;text-align:justify;tab-stops:3.0cm\"><span lang=\"EN-US\" style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\">&nbsp;<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;margin-left:0cm;mso-add-space:auto;text-align:justify;tab-stops:3.0cm\"><span lang=\"EN-US\" style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\">During\r\nhis career he </span><span style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;\r\nmso-ansi-language:EN-GB\">has </span><span lang=\"EN-US\" style=\"font-size:14.0pt;\r\nfont-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\">served </span><span style=\"font-size:\r\n14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;mso-ansi-language:EN-GB\">as\r\nplatoon commander, company commander, Battalion Commander, Commanding Officer\r\nof the Malawi Defence Force Peace Support Training Centre, Deputy Chief of\r\nStaff at Malawi Defence Force Headquarters, Chief Instructor and later\r\nCommandant of Malawi Armed Forces College</span><span lang=\"EN-US\" style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\">, </span><span style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;mso-ansi-language:\r\nEN-GB\">Chief of Staff at Malawi Defence Force Joint Headquarters</span><span lang=\"EN-US\" style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\">,\r\nand Inspector General before being appointed Commander Malawi Maritime Force on\r\n11<sup>th</sup> October, 2024.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;margin-left:0cm;mso-add-space:auto;text-align:justify;tab-stops:3.0cm\"><span style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;mso-ansi-language:\r\nEN-GB\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;margin-left:0cm;mso-add-space:auto;text-align:justify;tab-stops:3.0cm\"><span lang=\"EN-US\" style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\">In\r\naddition to his </span><span style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;\r\nmso-ansi-language:EN-GB\">Masters</span><span style=\"font-size:14.0pt;\r\nfont-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\"> </span><span style=\"font-size:14.0pt;\r\nfont-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;mso-ansi-language:EN-GB\">D</span><span lang=\"EN-US\" style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\">egree\r\nin </span><span style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;\r\nmso-ansi-language:EN-GB\">Defence Studies</span><span lang=\"EN-US\" style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\"> from </span><span style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;mso-ansi-language:\r\nEN-GB\">Kings College in London</span><span lang=\"EN-US\" style=\"font-size:14.0pt;\r\nfont-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\">,</span><span style=\"font-size:14.0pt;\r\nfont-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;mso-ansi-language:EN-GB\"> Major</span><span lang=\"EN-US\" style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\">\r\nGeneral </span><span style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;\r\nmso-ansi-language:EN-GB\">Mchungula attended and passed Advanced Command and\r\nStaff Course at the Defence Academy in the United Kingdom and is also a\r\ngraduate of the Royal College of Defence Studies in London. </span><span lang=\"EN-US\" style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\">The\r\nNaval Commander </span><span style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;\r\nmso-ansi-language:EN-GB\">is an alumnus of Africa Centre of Strategic Studies\r\n(ACSS) in the United States of America (USA) and Galilee International Management\r\nInstitute (GIM) of Israel and a Chevening Fellow in Peace Keeping and\r\nInternational Capacity Building from University of Bradford in the United\r\nKingdom.</span><span lang=\"EN-US\" style=\"font-size:14.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\">&nbsp;</span></p>', 'uploads/commanders/1729254659SWITHAN.jpg 1.jpg', 'Navy Commander', '2024-10-18 10:20:31', '2024-10-18 10:30:59');

-- --------------------------------------------------------

--
-- Table structure for table `commander_terms`
--

CREATE TABLE `commander_terms` (
  `id` bigint UNSIGNED NOT NULL,
  `commander_id` bigint UNSIGNED NOT NULL,
  `appointed_date` date NOT NULL,
  `retirement_date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commander_terms`
--

INSERT INTO `commander_terms` (`id`, `commander_id`, `appointed_date`, `retirement_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2025-10-04', NULL, 1, '2024-07-26 05:33:21', '2025-10-18 05:55:10'),
(5, 5, '2020-12-18', NULL, 1, '2024-07-26 05:51:43', '2024-07-26 05:51:43'),
(15, 11, '2024-05-16', NULL, 1, '2024-07-26 06:02:28', '2024-07-26 06:02:28'),
(19, 13, '1992-06-10', '1993-12-10', 0, '2024-07-26 06:03:26', '2025-10-20 07:21:59'),
(37, 25, '2024-10-11', NULL, 1, '2024-07-26 06:28:13', '2024-12-16 03:00:47'),
(73, 45, '1993-12-10', '1994-06-15', 0, '2024-07-30 15:30:11', '2025-10-20 07:26:25'),
(77, 47, '1994-06-15', '1995-04-26', 0, '2024-07-30 15:32:18', '2025-10-20 07:20:34'),
(81, 49, '1995-04-26', '1996-09-30', 0, '2024-07-30 15:34:11', '2025-10-20 07:37:35'),
(85, 51, '1996-09-30', '1998-01-16', 0, '2024-07-30 15:36:00', '2025-10-20 07:29:18'),
(89, 53, '1998-01-16', '2004-07-13', 0, '2024-07-30 15:38:10', '2025-10-20 07:32:28'),
(93, 55, '2004-07-13', '2011-07-22', 0, '2024-07-30 15:39:51', '2025-10-20 07:33:19'),
(97, 57, '2011-07-22', '2014-06-24', 0, '2024-07-30 15:41:37', '2025-10-20 07:30:12'),
(101, 59, '2014-06-24', '2016-07-29', 0, '2024-07-30 15:44:30', '2025-10-20 08:02:20'),
(105, 61, '2016-07-29', '2019-06-20', 0, '2024-07-30 15:46:25', '2025-10-20 07:34:42'),
(109, 63, '2019-06-20', '2020-03-17', 0, '2024-07-30 15:47:57', '2025-10-20 07:49:08'),
(113, 65, '2020-03-17', '2020-09-01', 0, '2024-07-30 15:49:55', '2025-10-20 07:35:25'),
(115, 67, '2020-09-01', '2023-07-11', 0, '2024-07-30 16:07:00', '2025-10-20 07:48:17'),
(121, 71, '2023-07-11', NULL, 1, '2024-07-30 16:15:48', '2024-07-30 16:15:48'),
(129, 79, '2024-10-11', NULL, 1, '2024-10-18 10:20:31', '2024-10-18 10:20:31'),
(131, 7, '1971-05-15', '1980-04-09', 0, '2025-10-19 09:26:08', '2025-10-20 07:40:29'),
(132, 9, '1980-04-09', '1992-06-10', 0, '2025-10-19 09:28:28', '2025-10-20 07:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `commands`
--

CREATE TABLE `commands` (
  `id` bigint UNSIGNED NOT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commands`
--

INSERT INTO `commands` (`id`, `rank`, `name`, `description`, `user_id`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'Commander', 'GENERAL PAUL VELENTINO PHIRI, MSM, psc,ndc, PhD', 'General Paul Velentino Phiri is the current Defence Force Chief, having taken over the position on 11 July, 2023 from General Vincent Nundwe. He joined the Malawi Armed Forces College (MAFCO) as a Direct Entry Cadet in 1980, graduating in 1982 as an infantry officer, and has held various significant Command and Staff roles in the military. Before his current role, General Phiri served as the Deputy Defence Force Commander starting from December 2020. His educational qualifications include a PhD in Peace, Conflict, and Security Studies, a Masters’ Degree in Strategic Management from Derby University, a Masters’ Degree in Global Security from Cranfield University, and a B.Sc. in International Studies from the University of Nairobi. General Phiri is actively involved in academia, serving as an Adjunct Staff member at Mzuzu University, teaching at the Centre for Security Studies, and as a visiting lecturer at the University of Cape Town for Peace, Conflict, and Security Studies. His decorations and awards include the Meritorious Service Medal (MSM), as well as psc and ndc qualifications, signifying his expertise and dedication in the field of military and security studies.', 3, 'uploads/command/173313196301 A4 Print GEN P V PHIRI.jpg', '2024-07-26 05:11:47', '2025-10-19 03:53:16'),
(3, 'Deputy commander', 'Lieutenant General George Alexander Jaffu (Jnr), MSM, psc', 'Lieutenant General George Jaffu (Jnr) has an extensive military background, starting his career in the Malawi Defence Force in 1988 and holding various positions such as Inspector General, Chief of Staff at Joint Headquarters, and serving as a Military Adviser at the Permanent Mission of the Republic of Malawi to the United Nations in New York. Prior to his current role as Deputy Defence Chief, Lieutenant General Jaffu has undergone significant military and civilian training at both local and international institutions, including obtaining a Master\'s Degree in Strategic Management from Derby University in the UK and completing numerous courses in areas such as Joint Operation Planning, United Nations Military Observer, and Defence Decision Making. Born on 19 November 1962, the Defence Force Deputy Commander originates from Mpondasi Village, Traditional Authority Mponda in Mangochi District.', 3, 'uploads/command/1723619524jafu.jpg', '2024-07-26 05:14:11', '2024-08-14 05:12:04'),
(5, 'Chief of staff', 'MAJOR GENERAL SAIFORD MANDIZA KALISHA, MSM, psc, plsc, ndc,', 'Major General Saiford Mandiza Kalisha was appointed as the new Chief of Staff at the Malawi Defence Force Joint Headquarters as of 13th May 2024.  Before his current role, he served as the Chief of Military Operations and Training, and his military career began on 31st July 1992 when he joined as an Infantry Officer after enlisting on 1st May 1991. Throughout his career, he has held various significant positions including Commandant of Malawi Armed Forces College, Deputy Commandant of the same college, and Commanding Officer of different Infantry Battalions. He has also been involved in peacekeeping operations and has contributed to military training centers, demonstrating a rich and diverse experience in the defense and military sector.\r\nMajor General Kalisha has vast experience in military operations both in Malawi and abroad, participating in missions like Operations SUKOLA, BWEZANI, CHISHANGO, and KWAENI in DRC, Mozambique and here in Malawi. He has also been actively involved in significant military exercises including serving as the Coordinator for RDC Bde during Ex UMODZI, Directing Staff for CJAX exercises in Zimbabwe and Zambia, and holding the position of G3 during ACOTA in 2016 and 2017. Additionally, Major General Kalisha worked as a Military Observer (MILOB) for the United Nations in the Democratic Republic of Congo and served as the Chief of Staff for MONUSCO’s Force Intervention Brigade (FIB) from April 2014 to April 2015.', 3, 'uploads/command/1723619567DCOS.jpg 1.jpg', '2024-07-26 05:15:20', '2024-08-14 05:12:47'),
(9, 'Sergeant major', 'WOI Sally Ndauka MUSSA, MSM', 'Warrant Officer Class One Sally Mussa, MSM, has an extensive military background, having undergone various training courses in Malawi, Kenya, the USA, South Africa, and attending international symposiums in El Paso. He has held multiple significant appointments such as Section Commander, Platoon Sergeant, Company Sergeant Major, Regimental Sergeant Major, Brigade Sergeant Major, Army Sergeant Major and presently serves as the Malawi Defence Force Sergeant Major. He has been actively involved in various military operations, including deployments in Mozambique, the Democratic Republic of the Congo, and participation in SADC exercises in Botswana and South Africa. WOI Mussa has received several honors and medals for his exemplary service, including the Efficiency Medal, SADC Medal, MONUSCO Medal, and the Meritorious Service Medal (MSM). As the Malawi Defence Force Sergeant Major, he plays a crucial role in advising High Command on matters concerning enlisted personnel. He is responsible for addressing issues related to the development, professionalism, morale, training, and welfare of soldiers and their families, in addition to supervising ceremonial parades and ceremonies.', 3, 'uploads/command/1723619587MUSSA.jpg', '2024-07-26 05:17:50', '2024-08-14 05:13:07'),
(18, 'Deputy Chief of staff', 'Colonel Thokozani Andrew CHAZEMA, psc', 'Colonel Thokozani Andrew CHAZEMA is the current Deputy Chief of Staff at the Joint Headquarters. He is former Commanding Officer of the 3rd Infantry Battalion. \r\nThroughout his career, Colonel CHAZEMA has received extensive military education and training, specializing in Intelligence and Special Operations, with a focus on areas such as intelligence analysis, surveillance, VIP protection, and combating terrorism. \r\nColonel Chazema is academically accomplished, holding a Master of Arts in Defence and Strategic Studies, a Master of Arts in Diplomacy and International Relations, a Bachelor\'s Degree in Security Studies, and is pursuing a PhD in Transformative Community Development.\r\n He has publications on Civil-Military Relations and Democratic Development in Malawi. He is associated with international organizations such as the International Society for Development and Sustainability, and the International Society for Military Ethics in Africa.', 3, 'uploads/command/1748968456DSC_3756.jpg', '2025-06-03 16:34:16', '2025-06-03 16:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_04_192714_create_posts_table', 1),
(6, '2022_09_04_193807_create_categories_table', 1),
(7, '2022_09_08_021607_create_profiles_table', 1),
(8, '2022_09_13_064310_create_adverts_table', 1),
(9, '2022_09_13_085024_create_commanders_table', 1),
(10, '2022_09_18_032556_create_operations_table', 1),
(11, '2022_10_20_100248_create_permission_tables', 1),
(12, '2022_11_04_130946_create_commands_table', 1),
(13, '2022_11_17_135453_add_name_to_commands_table', 1),
(14, '2023_10_04_124734_create_slider_slides_table', 1),
(15, '2023_10_10_025835_create_static_images_table', 1),
(16, '2023_10_10_032225_add_identifier_to_static_images', 1),
(17, '2023_10_10_072442_create_static_texts_table', 1),
(18, '2024_07_17_102635_create_commander_terms_table', 1),
(19, '2024_07_18_074242_create_settings_table', 1),
(20, '2025_10_19_052814_update_event_date_nullable_in_posts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `operations`
--

CREATE TABLE `operations` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operation_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `operations`
--

INSERT INTO `operations` (`id`, `name`, `user_id`, `description`, `image`, `status`, `slug`, `operation_type`, `created_at`, `updated_at`) VALUES
(1, 'MONUSCO', 3, '<div class=\"page\" title=\"Page 21\" style=\"caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);\"><div class=\"section\"><div class=\"layoutArea\"><div class=\"column\"><p><span style=\"font-size: 10pt; font-family: TimesNewRomanPSMT; color: rgb(0, 0, 255);\">Since 2013, MDF deploys a battalion to the Democratic Republic of Congo (DRC) under the United Nations Organisation Stabilisation Mission in the Democratic Republic of the Congo (MONUSCO)’s Force Intervention Brigade (FIB). Malawi also has a battalion under the Southern African Development Community Mission in Democratic Republic of the Congo (SAMIDRC)</span></p></div></div><div class=\"layoutArea\"><div class=\"column\"><p><span style=\"font-size: 10pt; font-family: TimesNewRomanPSMT; color: rgb(0, 0, 255);\">Apart from this contingent, MDF also deploys Military Observers (MILOBS) and staff officers in the DRC, Western Sahara, Sudan and South Sudan.</span></p></div></div></div></div>', 'uploads/operations/1721985716MONUSCO.jpg', '1', 'monusco', 'External', '2024-07-26 07:18:55', '2024-09-15 16:05:24'),
(3, 'OPERATION TETEZA NKHALANGO', 3, '<p style=\"margin:0cm;margin-bottom:.0001pt;text-align:justify;text-justify:\r\ninter-ideograph;tab-stops:3.0cm\"><span style=\"font-size:13.0pt;font-family:\r\n&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:\r\nminor-bidi;color:black;mso-themecolor:text1;mso-font-kerning:12.0pt;mso-ansi-language:\r\nEN-GB\">These are Low Intensity Operations (LIO) in support of the government<span lang=\"EN-US\">’</span>s efforts to mitigate effects of climate change by flushing\r\nout illegal wood cutters and Charcoal burners.</span><span lang=\"EN-US\" style=\"font-size:13.0pt;font-family:&quot;Malgun Gothic&quot;,&quot;sans-serif&quot;\"><o:p></o:p></span></p>', 'uploads/operations/1721987525IMG_4509.jpg', '1', 'operation-teteza-nkhalango', 'Internal', '2024-07-26 07:52:05', '2024-07-26 07:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@mdf.gov.mw', '$2y$10$6kdQzDz2UktzLzcp4PovbuHLS1/tssIWB5FlsDj79c0kbdWQigibW', '2024-07-26 05:35:39'),
('chipandaandrew@gmail.com', '$2y$10$km2C6d0rZaRVbFSAQkchT.WxpuJHwbzsffKjruJEWYo5.htkS63UO', '2025-09-08 09:22:23'),
('langamc@yahoo.com', '$2y$10$87e2JX2aV8eV.5KKw2xmkO6z02.O1ITxRh3CpUWVUpQvefbGKRvrm', '2025-09-08 09:23:07');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` date DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `slug`, `category`, `user_id`, `image`, `event_date`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'LIVE FIRING EXERCISE AT VIPHYA, MZIMBA DISTRICT', '<p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"font-size:\r\n13.0pt;line-height:107%;font-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;\">July, 2024<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" align=\"center\" style=\"text-align:center;tab-stops:99.0pt\"><b><span lang=\"EN-US\" style=\"font-size:13.0pt;line-height:107%;font-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;\">PRESS STATEMENT<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\" align=\"center\" style=\"text-align:center;line-height:normal;\r\ntab-stops:99.0pt\"><b><span lang=\"EN-US\" style=\"font-size:9.0pt;mso-bidi-font-size:\r\n13.0pt;font-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;\">&nbsp;</span></b></p>\r\n\r\n<p class=\"MsoNormal\" align=\"center\" style=\"text-align:center;tab-stops:99.0pt\"><b><span lang=\"EN-US\" style=\"font-size:13.0pt;line-height:107%;font-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;\">FOR IMMEDIATE RELEASE<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify;line-height:normal;tab-stops:133.55pt 186.8pt\"><b><span lang=\"EN-US\" style=\"font-size:13.0pt;font-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify;tab-stops:99.0pt\"><b><span lang=\"EN-US\" style=\"font-size:13.0pt;line-height:107%;font-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;\">CONTACT:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Major Hastings Klins SUBILI<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify;tab-stops:99.0pt\"><b><span lang=\"EN-US\" style=\"font-size:13.0pt;line-height:107%;font-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cell:\r\n+265 994 648 199<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify;line-height:normal;tab-stops:99.0pt\"><b><span lang=\"EN-US\" style=\"font-size:4.0pt;mso-bidi-font-size:13.0pt;font-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;\">&nbsp;</span></b></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify;tab-stops:99.0pt\"><b><span lang=\"EN-US\" style=\"font-size:13.0pt;line-height:107%;font-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;\">SUBJECT: LIVE FIRING EXERCISE AT\r\nVIPHYA, MZIMBA DISTRICT<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify;tab-stops:99.0pt\"><span lang=\"EN-US\" style=\"font-size:13.0pt;line-height:107%;font-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;\">The Malawi Defence Force wishes to\r\ninform the general public that it will conduct live firing exercises for 105mm\r\nArtillery Guns at Viphya Field Training Range in Mzimba district from 4<sup>th</sup>\r\nJuly to 12 July 2024.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify;tab-stops:99.0pt\"><span lang=\"EN-US\" style=\"font-size:13.0pt;line-height:107%;font-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;\">Malawi Defence Force is therefore\r\nappealing to the general public in the mentioned area to take note and not feel\r\ndisturbed by the presence of the troops since this is only a routine exercise\r\nand safety measures have been taken to inconvenience the public.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify;tab-stops:99.0pt\"><span lang=\"EN-US\" style=\"font-size:13.0pt;line-height:107%;font-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;\">However, members of the general public\r\nare warned and advised not to touch any strange objects they may come across in\r\nthis area but report these to the nearest Police Station or any soldier within\r\nvicinities. They are also to be aware that the 105mm Artillery guns have a\r\nreach of 20 km, hence need not be any nearer of Viphya Field Training Range.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify;tab-stops:99.0pt\"><span lang=\"EN-US\" style=\"font-size:13.0pt;line-height:107%;font-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify;tab-stops:99.0pt\"><span lang=\"EN-US\" style=\"mso-bidi-font-size:13.0pt;line-height:107%;font-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNoSpacing\" style=\"margin-left:288.0pt;text-align:justify\"><b><span lang=\"EN-US\" style=\"font-size:13.0pt;font-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;\">H K SUBILI, psc<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNoSpacing\" style=\"margin-left:288.0pt;text-align:justify\"><span lang=\"EN-US\" style=\"font-size:13.0pt;font-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;\">Major<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNoSpacing\" style=\"margin-left:288.0pt;text-align:justify\"><span lang=\"EN-US\" style=\"font-size:13.0pt;font-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;\">For Public Information Officer<b><o:p></o:p></b></span></p>\r\n\r\n<p class=\"MsoNoSpacing\" style=\"margin-left:288.0pt;text-align:justify\"><b><span lang=\"EN-US\" style=\"font-size:13.0pt;font-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;\">MALAWI DEFENCE FORCE<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNoSpacing\" style=\"margin-left:288.0pt;text-align:justify\"><b><span lang=\"EN-US\" style=\"font-size:13.0pt;font-family:&quot;Maiandra GD&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;\">&nbsp;</span></b></p>', 'live-firing-exercise-at-viphya-mzimba-district', 'Press release', 3, 'uploads/posts/1722519528DSC03099.jpg', '2024-07-01', NULL, '2024-08-01 11:38:48', '2024-08-01 11:38:48'),
(3, '95 PARATROOPERS GRADUATE FROM PARACHUTE BATTALION', '<p class=\"MsoNoSpacing\" style=\"text-align:justify\"><span style=\"font-size:12.0pt;\r\nfont-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:EN-GB;mso-bidi-font-weight:\r\nbold\">Ninety five Soldiers from Malawi and Zambia have completed their training\r\nat Malawi defence force Parachute Battalion in Salima District. </span><span lang=\"EN-US\" style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;\r\ncolor:#333333\">To mark the ceremony, the paratroopers conducted two sky jumps, 1500\r\nfeet and 6000 feet landings.<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"text-align:justify\"><span style=\"color: rgb(51, 51, 51); font-size: 1rem; text-align: left;\">Among the group were 45 Malawi\r\nDefence Force Soldiers and 50 from Zambian Army and Air force.</span></p><p style=\"margin: 0cm 0cm 15pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"color:#333333\">Speaking after the event, Commanding\r\nofficer of the Parachute Battalion, Lieutenant Colonel Alfred Mkangala urged\r\nfemale Soldiers to take up the challenge.<o:p></o:p></span></p><p class=\"MsoNoSpacing\" style=\"text-align:justify\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p style=\"margin: 0cm 0cm 15pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"color:#333333\">On his part, Zambian deputy\r\nDirector General for training, Colonel Daniel Kapisha said the training is one\r\nway of strengthening the cordial bilateral relationship that exist between the\r\ntwo Counties.</span><span style=\"font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;color:#333333\"><o:p></o:p></span></p>', '95-paratroopers-graduated-from-parachute-battalion', 'News', 3, 'uploads/posts/1722536109para.jfif', '2024-07-26', NULL, '2024-08-01 13:11:17', '2024-08-01 16:15:09'),
(5, 'MALAWI DEFENCE FORCE CONCLUDES 5-DAY INTER-SERVICE SPORTS FESTIVAL', '<p class=\"MsoNormal\"><span style=\"font-size: 12pt;\">In\r\na bid to promote Unit cohesion through competitive sports, the Malawi Defence\r\nForce (MDF) hosted a five day Inter - Service sports festival at the Malawi\r\nArmed Forces College (MAFCO) in Salima.</span></p><p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:115%\">The\r\ncompetition which started on the 5th of May 2025 saw more than 10 Unit\'s across\r\nthe four services of the MDF competing for grand prize of the Overall Winner.\r\nThe competition brought together service men and women who also showcased not\r\nonly their strengths but also their spirit of togetherness. <o:p></o:p></span></p><p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:115%\">After\r\na week of thrilling and top action, the competition reached its climax on the\r\nfinal day, also termed as the grand finale, as spectators enjoyed exciting\r\nfinal matches in football, tug of war, volleyball and basketball among others\r\nwhich also thrilled the Defence Force Commander.<o:p></o:p></span></p><p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:115%\">At\r\nthe end of the 2025 Inter - Service Competition Parachute Battalion emerged\r\nchampions with 58 points and defended the trophy which they also won the\r\nprevious year. 2 Malawi Rifles and 3 Malawi Rifles came second and third with\r\n32 and 30 points respectively. Consequently, Parachute Battalion has lifted the\r\nTrophy a total of ten times<o:p></o:p></span></p><p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:115%\">The\r\nfestival which is aimed at identifying talent for national-level competitions\r\nand provide an opportunity for soldiers to network while building friendships\r\nended with the winners walking away with K5million while 2MR and 3MR got\r\nK2million and K1million.<o:p></o:p></span></p><p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:115%\">In\r\nhis closing remarks, the Commander MDF, General Dr. Paul Velentino Phiri\r\nemphasized the importance of such sporting events in promoting physical fitness\r\nand teamwork. He encouraged participants to keep pushing themselves, aiming\r\nhigher-even to international competitions. He also applauded the participation\r\nof women, noting their growing presence and performance in various sporting\r\ndisciplines.<o:p></o:p></span></p><p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:115%\">\"You\r\nneed to understand that sports foster teamwork and camaraderie, strengthening\r\nbonds between service members. Sports tremendously help create a cohesive Unit\r\nthat can function effectively in various situations, both on and off the\r\nbattlefield\" General Dr. Paul Velentino Phiri said.<o:p></o:p></span></p><p class=\"MsoNormal\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:115%\">He\r\ndescribed the event as a successful sports festival and that its strategic\r\nobjective has been achieved with an enormous magnitude, \"what\'s imperative\r\nis the fact that we have unearthed some talented athletes that can stand out\r\nfor our military organization during national sports tournaments. We have\r\nwitnessed and appreciated how talent is being nurtured in all the Units across\r\nthe MDF,\" General Phiri added. In his closing remarks, he thanked all\r\ncorporate partners who made the event a success. \"I will be failing in my\r\nduty, if I do not thank the corporate partners who have made this festival\r\npossible, these partners as part of their social corporate responsibility,\r\nsupported this event with huge sums of money. They could have channeled this\r\nmoney elsewhere but they thought it wise to sponsor this event. As Malawi\r\nDefence Force, we appreciate this gesture, and I am calling on more corporate\r\npartners to support similar initiatives in the future.\" General Dr. Paul\r\nVelentino Phiri said.<o:p></o:p></span></p>', 'parachute-battalion-emerges-victorious-as-malawi-defence-force-concludes-5-day-inter-service-sports-festival', 'News', 3, 'uploads/posts/1748345231SPORTS PIC.jpg', '2025-05-09', NULL, '2025-05-27 11:23:18', '2025-05-27 11:27:11'),
(6, 'MALAWI AND SOUTH AFRICA STRENGTHEN DEFENCE COOPERATION THROUGH JOINT DEFENCE COMMITTEE', '<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-family: Arial, sans-serif; font-size: 12pt;\">A high level Joint Defence Committee Meeting between Malawi\r\nand South Africa was held in Vanderbijlpark, South Africa from 13 to 14 May\r\n2025. Malawi delegation was led by Mr James Chiusiwa, the Principal Secretary\r\nfor Defence who was accompanied by General Paul Valentino Phiri, MSM, psc, ndc,\r\nPhD, the Commander, Malawi Defence Force (MDF). The South African delegation\r\nwas led by Dr Thobekile Gamede, the Acting Principal Secretary for the\r\nDepartment of Defence who was also accompanied by Lieutenant General Michael\r\nRamatswana, the South African National Defence Force (SANDF) Chief of Staff.</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:107%;font-family:&quot;Arial&quot;,sans-serif\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify\"><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:107%;font-family:\r\n&quot;Arial&quot;,sans-serif\">Speaking during the meeting Dr Gamede stated that, “the </span><span lang=\"EN-US\" style=\"font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:107%;\r\nfont-family:&quot;Arial&quot;,sans-serif;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi\">session of the Joint Defence Committee between\r\nMalawi and South Africa not only highlights the steadfast bond that has\r\ndeveloped between our two nations, but also emphasizes our collective\r\ndedication to promoting peace, enhancing security, and achieving mutual\r\nprosperity.” On his part, Mr Chiusiwa said that, “in an era marked by complex\r\nand evolving security threats—ranging from transnational crime, terrorism,\r\ncyber threats, and regional instability—the unity of purpose between Malawi and\r\nSouth Africa is not just beneficial but imperative.” <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify\"><span lang=\"EN-US\" style=\"font-size:12.0pt;mso-bidi-font-size:11.0pt;\r\nline-height:107%;font-family:&quot;Arial&quot;,sans-serif;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify\"><span lang=\"EN-US\" style=\"font-size:12.0pt;mso-bidi-font-size:11.0pt;\r\nline-height:107%;font-family:&quot;Arial&quot;,sans-serif;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi\">General Paul Valentino Phiri highlighted the\r\nsignificance of the meeting in fostering stronger defence ties between Malawi\r\nand South Africa. To that end he said that, “This engagement underscores our\r\nshared commitment to regional security and stability. By collaborating in\r\ntraining and peace support operations, we enhance our collective ability to\r\naddress common challenges.\" In his response, Lieutenant General Rawatswana\r\nechoed General Phiri’s sentiments and emphasized on the value of sustained partnership.\r\n\"South Africa and Malawi have a long-standing history of cooperation in\r\ndefence matters. This meeting has further solidified our joint efforts in\r\nadvancing peace and security in the Southern African region.\"&nbsp; <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify\"><span lang=\"EN-US\" style=\"font-size:12.0pt;mso-bidi-font-size:11.0pt;\r\nline-height:107%;font-family:&quot;Arial&quot;,sans-serif;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span lang=\"EN-US\" style=\"font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:107%;font-family:\r\n&quot;Arial&quot;,sans-serif;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:\r\nminor-bidi\">The successful conclusion of the Joint Defence Committee meeting\r\nmarked another milestone in the defence relations between Malawi and South\r\nAfrica. Both delegations expressed optimism for future collaborations that will\r\ncontribute to the professionalism and effectiveness of their armed forces, in\r\nline with their mandate to safeguard national interests and regional\r\nsecurity.&nbsp; <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify\"><span lang=\"EN-US\" style=\"font-size:12.0pt;mso-bidi-font-size:11.0pt;\r\nline-height:107%;font-family:&quot;Arial&quot;,sans-serif;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify\"><span lang=\"EN-US\" style=\"font-size:12.0pt;mso-bidi-font-size:11.0pt;\r\nline-height:107%;font-family:&quot;Arial&quot;,sans-serif;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify\"><span lang=\"EN-US\" style=\"font-size:12.0pt;mso-bidi-font-size:11.0pt;\r\nline-height:107%;font-family:&quot;Arial&quot;,sans-serif;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify\"><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:107%;font-family:\r\n&quot;Arial&quot;,sans-serif\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span lang=\"EN-US\" style=\"font-size:12.0pt;line-height:107%;font-family:&quot;Arial&quot;,sans-serif\">&nbsp;</span></p>', 'malawi-and-south-africa-strengthen-defence-cooperation-through-joint-defence-committee', 'News', 3, 'uploads/posts/1748845539RSA GROUP Photo resize.jpg', '2025-05-13', NULL, '2025-05-27 12:42:28', '2025-06-02 06:25:39'),
(7, 'MALAWI DEFENCE ADVISOR COMMENDS ZAMBIA AIR FORCE FOR DEEPENING DEFENCE TIES', '<p class=\"MsoNormal\"><span style=\"font-size: 1rem;\">The Zambia Air Force (ZAF) Commander, Lt\r\nGen Oscar Msitu Nyoni, has assured Malawi Defence Advisor (DA) accreditated to\r\nthe Republic Zambia, Col Philip Chitekwe, of Zambia’s continued support and\r\npartnership.</span></p>\r\n\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\">The Air Force Commander was speaking when\r\nCol Chitekwe paid a Courtesy Call on him at ZAF Headquarters on Friday, 16 May\r\n2025.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\">Lt Gen Nyoni said the strong military\r\ncooperation between the two nations is anchored on shared values, common\r\nhistory and regional solidarity.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\">He said the relationship between Zambia and\r\nMalawi is not only historical but rooted in deep brotherhood and that the two\r\nnations are more than just neighbours. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\">“We are one people, woven together by\r\nshared histories, values and aspirations. Our people are involved in cross\r\nborder trade, education and cultural interactions, which happen every day\r\nwithout citizens feeling like foreigners,\" Lt Gen Nyoni said.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\">He added that in the past, Zambia has stood\r\nwith Malawi, not out of duty but because the two are brothers and one family. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\">The Air Force Commander cited Zambia’s\r\nswift response and support to Malawi when that country was in distress due to\r\neffects of climate change.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\">Lt Gen Nyoni assured the Malawi DA that the\r\nmilitary collaboration between the two countries would continue to grow. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\">He said that he was happy to note that the\r\nMalawi Defence Force had, in recent years, benchmarked several key\r\ninstitutional and operational frameworks from Zambia. He also said that ZAF has\r\nproudly offered human resource support, capacity building and institutional\r\nknowledge, including flying training and paratrooper exchange programmes to\r\nassist Malawi reach it\'s defence goals.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\">And in his reciprocal remarks, Col Chitekwe\r\nreaffirmed his commitment to strengthening bilateral Defence relations between the\r\ntwo Air Forces. He acknowledged the ongoing training cooperation, saying the\r\npresence of Malawian pilot students at ZAF Flying Training schools was\r\nencouraging and was going to add value to the Malawi Air Force.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\">Col Chitekwe also delivered a goodwill message\r\nfrom the Malawi Defence Force Commander, Gen Paul Valentino Phiri, who\r\ncommended ZAF for its brotherly and professional support even at short notice.<o:p></o:p></span></p>', 'malawi-defence-advisor-commends-zambia-air-force-for-deepening-defence-ties', 'News', 3, 'uploads/posts/1748844467IMG-20250528-WA0019.jpg', '2025-05-16', NULL, '2025-06-02 06:07:47', '2025-06-02 06:07:47'),
(8, 'MALAWI AND MOZAMBIQUE URGED TO INTENSIFY BORDER SECURITY', '<p><span style=\"font-size:14.0pt;mso-bidi-font-size:12.0pt\">Malawi and\r\nMozambique have been urged to intensify security measures along their borders\r\nin order to proactively combat the emerging threats that both countries\r\ncontinue to face.<o:p></o:p></span></p>\r\n\r\n<p><span style=\"font-size:14.0pt;mso-bidi-font-size:12.0pt\">The message was\r\ndelivered by Malawi’s Minister of Defence, Monica Chang’anamuno, during the\r\nsixteenth Joint Permanent Commission on Defence and Security (JPCDS) between\r\nMozambique and Malawi, which was held on 30th June 2025 in Maputo, Mozambique.<o:p></o:p></span></p>\r\n\r\n<p><span style=\"font-size:14.0pt;mso-bidi-font-size:12.0pt\">The Malawian\r\ndelegation to the JPCDS was led by the Minister of Defence, Honourable Monica\r\nChang’anamuno, accompanied by the Principal Secretary to the Ministry of\r\nDefence, Mr. James Chiusiwa. The Mozambican delegation was led by the country’s\r\nMinister of Defence, Honourable Cristóvão Chume, who co-chaired the meeting.<o:p></o:p></span></p>\r\n\r\n<p><span style=\"font-size:14.0pt;mso-bidi-font-size:12.0pt\">The meeting saw\r\ndelegates from both countries engage in in-depth and candid discussions,\r\nreviewing progress in the implementation of joint security strategies along\r\ntheir shared borders and exploring new areas of bilateral cooperation for the\r\nbenefit of Malawi and Mozambique.<o:p></o:p></span></p>\r\n\r\n<p><span style=\"font-size:14.0pt;mso-bidi-font-size:12.0pt\">Speaking during the\r\nmeeting, Minister Chang’anamuno urged delegates to intensify joint operations\r\nand the exchange of information in order to curb cross-border threats to both\r\ncountries.<o:p></o:p></span></p>\r\n\r\n<p><span style=\"font-size:14.0pt;mso-bidi-font-size:12.0pt\">“Transnational\r\ncrimes such as smuggling, illegal trading in wildlife and forestry products,\r\nand human and drug trafficking continue to pose threat to both countries,”\r\nshe said.<o:p></o:p></span></p>\r\n\r\n<p><span style=\"font-size:14.0pt;mso-bidi-font-size:12.0pt\">On his part,\r\nMozambican Minister of Defence, Honourable Cristóvão Chume, said his country is\r\non the right track in mitigating security challenges that arise from porous\r\nborder entry points. He expressed appreciation for the unwavering commitment\r\nand support rendered by the Government and people of Malawi in helping his government\r\nminimize the security challenges the country continues to face.<o:p></o:p></span></p>\r\n\r\n<p><span style=\"font-size:14.0pt;mso-bidi-font-size:12.0pt\">The two were\r\naccompanied by Permanent Secretaries, Ambassadors from both countries, and\r\nother senior government officials.</span></p><p>By Cpl Alphia Selemani</p>', 'malawi-and-mozambique-urged-to-intensify-border-security', 'News', 3, 'uploads/posts/1754987473IMG_0558 45.jpg', '2025-08-12', NULL, '2025-08-12 08:12:14', '2025-08-12 08:31:13'),
(9, 'MDF RE-OPENS BLANTYRE MOTH CLUB', '<p style=\"text-align:justify\">After months of anticipation, the Malawi\r\nDefence Force’s Memorable Order of the Tin Hats (MOTH) Club officially\r\nre-opened its doors on 2 August 2025, following extensive renovations.<o:p></o:p></p>\r\n\r\n<p style=\"text-align:justify\">Officiating the ceremony, the Chief of\r\nDefence Forces and Patron of the Club, General Paul Valentino Phiri, MSM psc\r\nndc PhD, reminded members of the club’s three guiding pillars—discipline,\r\nrespect, and care. He urged members to safeguard the facility, uphold\r\ndiscipline, and respect one another at all times.<o:p></o:p></p>\r\n\r\n<p style=\"text-align:justify\">In his remarks, the Chairman of the\r\nOrganizing Committee, Brigadier General Kuwali, LLD fawc, thanked the Patron\r\nfor the support rendered towards the event. The Chairman of the Veterans and\r\nEx-Service Members League of Malawi (VELOM), Retired General Henry Odillo, also\r\nexpressed gratitude to the Patron, sponsors, and the organizing committee for\r\nmaking the ceremony a success. He further applauded the raffle draw initiative,\r\nnoting that its proceeds would greatly enhance the welfare of war veterans.<o:p></o:p></p>\r\n\r\n<p style=\"text-align:justify\">Located in CI, Blantyre, the upgraded\r\nclub now boasts a modern and welcoming ambiance, with a redesigned counter and\r\nbar, new seating, large high-definition sports screens, and a modern swimming\r\npool.<o:p></o:p></p>\r\n\r\n<p style=\"text-align:justify\">The event drew an impressive audience,\r\nincluding the Principal Secretary of Defence, Mr. James Chiusiwa; the Deputy\r\nChief of Defence Forces, Lieutenant General George Jaffu (Jr), MSM psc; General\r\nOfficers and Commanding Officers of the MDF; legal practitioners; business\r\nleaders; and representatives of war veterans.<o:p></o:p></p>\r\n\r\n<p style=\"text-align:justify\">Adding excitement to the day was a raffle\r\ndraw. NICO Holdings co-sponsored the event. &nbsp;Friends and members of the MOTH Club also\r\ncontributed generously towards the welfare of veterans. Winners walked away\r\nwith various prizes, including full membership to all MDF messes and a chance\r\nto showcase their firing skills, while guests enjoyed complimentary drinks,\r\nsnacks, and live entertainment from the Malawi Defence Force Brass and Dance\r\nBands.</p><p style=\"text-align:justify\"><strong><span style=\"font-weight:normal;mso-bidi-font-weight:\r\nbold\"><o:p></o:p></span></strong></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-size:12.0pt;line-height:107%;font-family:\r\n&quot;Times New Roman&quot;,serif\">By S/Sgt Denilson Chimatiro</span></p>', 'mdf-re-opens-blantyre-moth-club', 'News', 3, 'uploads/posts/1754987564DSC_7989 gh.jpg', '2025-08-12', NULL, '2025-08-12 08:21:29', '2025-08-12 08:32:44'),
(10, 'MALAWI DEFENCE FORCE COMMAND AND STAFF COLLEGE READY TO SPEARHEAD CJAX 2026', '<p>The Malawi Defence Force (MDF) Command and Staff College has announced its\r\nreadiness to spearhead the <strong data-start=\"283\" data-end=\"325\"><span style=\"font-weight:normal;mso-bidi-font-weight:bold\">Combined Joint African\r\nExercise (CJAX</span>)</strong> in 2026, following a successful handover from\r\nthe South African War College, which coordinated this year’s exercise.<o:p></o:p></p>\r\n\r\n<p data-start=\"446\" data-end=\"671\">The announcement was made by the Commandant of\r\nthe MDF Command and Staff College, <strong data-start=\"528\" data-end=\"566\"><span style=\"font-weight:normal;mso-bidi-font-weight:bold\">Brigadier General Desmond\r\nChawanda</span></strong><b>,</b><i>psc</i>,ndc during the closing ceremony of a\r\nweek-long exercise codenamed <em data-start=\"630\" data-end=\"637\">UHURU</em>, held\r\nat the college in Salima.<o:p></o:p></p>\r\n\r\n<p data-start=\"673\" data-end=\"983\">In his remarks, Brigadier General Chawanda\r\ndescribed the just-ended exercise as a success, highlighting the impressive\r\nperformance of the Malawian team during the presentation of its concept of\r\noperations to seven other Southern African Development Community (SADC) member\r\nstates that participated this year.<o:p></o:p></p>\r\n\r\n<p data-start=\"985\" data-end=\"1125\">“The college is very ready because our task is\r\nto ensure that all the meetings leading up to the exercise are conducted on time,”\r\nhe said.<o:p></o:p></p>\r\n\r\n<p data-start=\"1127\" data-end=\"1273\">Apart from Malawi, the participating countries\r\nincluded <strong data-start=\"1183\" data-end=\"1270\"><span style=\"font-weight:normal;\r\nmso-bidi-font-weight:bold\">South Africa, Angola, Zimbabwe, Zambia, Mozambique,\r\nTanzania, Namibia, and Botswana</span></strong><b>.</b></p><p data-start=\"1127\" data-end=\"1273\">By Cpl Andrew Chipanda<o:p></o:p></p>', 'malawi-defence-force-command-and-staff-college-ready-to-spearhead-cjax-2026', 'News', 3, 'uploads/posts/17573230791757322080053.jpg', '2025-09-06', NULL, '2025-09-08 09:15:28', '2025-09-08 09:17:59'),
(11, 'MALAWI DEFENCE FORCE WELCOMES NEW COMMANDER-IN-CHIEF', '<p style=\"text-align:justify;text-justify:inter-ideograph;line-height:150%\">The\r\nMalawi Defence Force has a new Commander-in-Chief following the successful inauguration\r\nand taking over of the Sword of Command by President-elect Professor Arthur Peter\r\nMutharika as Malawi’s seventh president.<o:p></o:p></p>\r\n\r\n<p style=\"text-align:justify;text-justify:inter-ideograph;line-height:150%\">Malawi\r\nheld its general elections on 16 September 2025, in which Professor Mutharika\r\nand Justice Dr. Jane Ansah JA retired, were declared President-elect and Vice\r\nPresident-elect respectively.<o:p></o:p></p>\r\n\r\n<p style=\"text-align:justify;text-justify:inter-ideograph;line-height:150%\">The\r\ninauguration ceremony took place on Saturday, 4 October 2025, at Kamuzu Stadium\r\nin Blantyre, where thousands of citizens gathered to witness the historic\r\nevent. Chief Justice Rezine Mzikamanda administered the oath of office to\r\nPresident Mutharika and Vice President Ansah during the ceremony, which was\r\nthemed “The Great Return to Proven Leadership – Transforming Malawi through a\r\nPeople-Centred Government.”<o:p></o:p></p>\r\n\r\n<p style=\"text-align:justify;text-justify:inter-ideograph;line-height:150%\">Speaking\r\nafter taking the oath, President Mutharika said his administration brings a\r\nrenewed vision for the country and urged citizens to embrace change. “We voted\r\nfor change, and I promise you the change will come”.<o:p></o:p></p>\r\n\r\n<p style=\"text-align:justify;text-justify:inter-ideograph;line-height:150%\">As\r\nCommander-in-Chief, President Mutharika now assumes primary responsibility for\r\noverseeing the Malawi Defence Force, which includes the Army, Air Force, Navy,\r\nand National Service.<o:p></o:p></p>\r\n\r\n<p style=\"text-align:justify;text-justify:inter-ideograph;line-height:150%\">The\r\ninauguration ceremony was also attended by heads of state and country\r\nrepresentatives from Mozambique, Zimbabwe, Tanzania, Eswatini, Botswana, Kenya\r\nand the Democratic Republic of Congo, as well as delegations from across the\r\nSADC region. <o:p></o:p></p>\r\n\r\n<p style=\"text-align:justify;text-justify:inter-ideograph;line-height:150%\">By\r\nCpl Andrew Chipanda and Alphia Selemani<span style=\"color: rgb(57, 57, 57); font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;\">&nbsp;</span></p>', 'malawi-defence-force-welcomes-new-commander-in-chief', 'News', 3, 'uploads/posts/17596670971759666974935.jpg', '2025-10-04', NULL, '2025-10-04 19:58:56', '2025-10-05 12:24:57'),
(12, 'MALAWI DEFENCE FORCE SPOUSES ASSOCIATION DONATES TO MUA SCHOOL FOR THE DEAF', '<p class=\"MsoNormal\"><span style=\"font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;\">In a heartwarming\r\ndisplay of community support, the Malawi Defence Force Spouses Association\r\n(MDFSA) has donated items worth K50 million to Mua School for the Deaf in Dedza\r\ndistrict.</span></p>\r\n\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif\">MDFSA\'s patron,\r\nTwambilire Phiri said that the donation was made after they noticed significant\r\nshortage of important resources at the institution.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif\">Mua Headteacher,\r\nHenry Chiwaya expressed gratitude, saying the donation would greatly impact the\r\nstudents’ lives and enhance their education.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif\">The donation\r\nincluded essential items like mattresses, blankets, food, curtains and chairs.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif\">The boarding\r\nschool currently has 184 students from across the country ranging from the age\r\nof four.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\" style=\"font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Times New Roman&quot;,serif\">By Joseph Luhanga.<o:p></o:p></span></p>', 'malawi-defence-force-spouses-association-donates-to-mua-school-for-the-deaf', 'News', 3, 'uploads/posts/17596667302025100514020432.jpg', '2025-10-02', NULL, '2025-10-05 12:18:50', '2025-10-05 12:18:50');
INSERT INTO `posts` (`id`, `title`, `content`, `slug`, `category`, `user_id`, `image`, `event_date`, `deleted_at`, `created_at`, `updated_at`) VALUES
(13, 'MUTHARIKA APPOINTS NEW CHIEF OF DEFENCE FORCE', '<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">His excellency Professor Arthur Peter MUTHARIKA\r\nPresident of the Republic of Malawi and Commander-in- Chief of the Malawi\r\nDefence Force has, with effect from 5 October 2025, appointed Lieutenant\r\nGeneral George Alexander JAFFU (Jnr), as the new Chief of Defence Force of the\r\nMalawi Defence Force and subsequently, promoted him to the to the rank of\r\nGeneral. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">General JAFFU has replaced General (Dr) Paul\r\nValentino PHIRI who has been the Chief of Defence Force since 12 July 2023.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">In a statement released on Sunday, 5 October 2025\r\nby the Office of the President and Cabinet, His Excellency Professor Arthur\r\nPeter MUTHARIKA, has made the appointed in exercise of the powers conferred\r\nupon him under Section 161(2) of the Malawi Constitution.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">Before his current appointment, General JAFFU (Jnr)\r\nwas the Deputy Chief of Defence Force, the post that he assumed on 13 May 2024\r\nafter serving as Chief of Staff at the Force Joint Headquarters from 9th August\r\n2022. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">General JAFFU (Jnr) began his military career as a\r\nSecond Lieutenant, quickly rising through the ranks due to his exemplary\r\nleadership and strategic acumen. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">During his military career, he has served in\r\nvarious capacities, including Inspector General at the Force Joint\r\nHeadquarters, Military Advisor of the Republic of Malawi to the United Nations,\r\nSenior Staff Officer in the Directorate of Human Resource Management and\r\nDevelopment, Technical Staff Officer at the Electrical and Mechanical Engineers\r\nRegiment, Commanding Officer as well as Second-in Command of the Parachute Battalion,\r\njust to mention a few.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">During his military career, General JAFFU completed\r\na number of courses; both military and civilian, locally and internationally.\r\nThese include, among several others, Platoon Commanders, Junior Officers\r\nRegional Command and Staff Course, United Nations Military Observer, African\r\nResponse Initiative (ACRI) Training, Senior Command and Staff Course (Grade\r\nII), Next Generation of African Leaders-USA, Joint Operation Planning, United\r\nNations Integrated Staff Officers Course, Foreign Exchange Airborne Operations-\r\nNCO Academy Fort Bragg CA, Executive Program in Defence Decision Making\r\nMonterey CA, USA, Intelligence Policy and Democracy-Monterey CA, USA, and\r\nAfrican Cooperation Course for Decision Makers, just to mention but a few.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">Academically, General JAFFU (Jnr) holds a Master’s\r\nDegree in Strategic Management obtained from Derby University in the United\r\nKingdom.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">Throughout his career, General JAFFU has received\r\nnumerous awards including the Malawi Silver Jubilee Medal, Efficiency Medal,\r\nthe Meritorious Service Medal, the United Nations Medal and was decorated with\r\nthe prestigious Passed Staff College (psc) symbol at the Zimbabwe Staff College\r\nin 2005.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">General JAFFU (Jnr) was born on 19 November 1962,\r\nand hails from Mpondasi Village, Traditional Authority Mponda in Mangochi\r\nDistrict. He is married to Rachel and, together, they have three children. He\r\nis an avid reader and enjoys playing golf in his spare time.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;color:#080809;mso-ansi-language:EN-GB;\r\nmso-fareast-language:EN-GB\">By Cpl Mike Langa Lulanga<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\"><span lang=\"EN-US\">&nbsp;</span></p>', 'mutharika-appoints-new-chief-of-defence-force', 'News', 3, 'uploads/posts/1759769003jnr.jpg', '2025-10-06', '2025-10-19 03:37:03', '2025-10-06 16:28:14', '2025-10-19 03:37:03');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint UNSIGNED NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `picture`, `user_id`, `about`, `created_at`, `updated_at`) VALUES
(1, 'profile.png', 1, 'The web master/system administrator', '2024-07-25 07:21:03', '2024-07-25 07:21:03'),
(3, 'uploads/profile/Nwf3yw4cjFdfRdNT2q6FWzfazDwp4Kf5tHrsfSis.png', 3, 'Content Manager', '2024-07-26 05:08:37', '2025-09-08 08:37:40'),
(7, 'uploads/profile/pGIutlWcVYLsEzCMZVGyGqVOppiAHzh7c06JzNYO.jpg', 10, 'Content Manager', '2025-09-08 08:12:06', '2025-09-08 08:35:02'),
(8, 'profile.png', 11, 'content manager', '2025-09-08 09:29:15', '2025-09-08 09:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `contact_phone`, `contact_email`, `fax`, `address`, `created_at`, `updated_at`) VALUES
(1, 'MDF', '011 546 232', 'pio@mdf.gov.mw', '011 342 233', 'Malawi Defence Force Headquarters, Private Bag 43, Lilongwe', '2024-07-25 07:21:03', '2024-07-25 07:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `slider_slides`
--

CREATE TABLE `slider_slides` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_slides`
--

INSERT INTO `slider_slides` (`id`, `title`, `description`, `image`, `link_url`, `button_text`, `created_at`, `updated_at`) VALUES
(1, 'MALAWI DEFENCE FORCE', 'WHO WE ARE', 'slide1.png', NULL, 'About Us', '2024-07-25 09:05:13', '2024-08-17 23:31:24'),
(2, 'PROFESSIONAL', 'MALAWI ARMY', 'slide2.JPG', NULL, 'About Us', '2024-07-25 09:07:36', '2024-07-25 09:07:36'),
(3, 'PROFESSIONAL', 'Malawi Navy', 'Navy force.jpg', NULL, 'About Us', '2024-07-25 09:09:04', '2025-06-28 07:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `static_images`
--

CREATE TABLE `static_images` (
  `id` bigint UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `static_texts`
--

CREATE TABLE `static_texts` (
  `id` bigint UNSIGNED NOT NULL,
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'System Administrator', 'admin@mdf.gov.mw', NULL, 1, '$2y$10$j9rGj1VnKolixZzw3GVH4unT9v21FCAVtBjJdgJ3vsotu5iouzg0i', NULL, '2024-07-25 07:21:03', '2025-10-19 03:59:35'),
(3, 'CHIPANDA', 'chipandaandrew@gmail.com', NULL, 1, '$2y$10$90UOwb6u5g2zjyaCx4oqj.bb6uQcx9vZ4EQtvZTMoYjrwfwGJ8cb6', NULL, '2024-07-26 05:08:37', '2024-07-30 07:24:57'),
(6, 'sasa', 'saalamm2211@gmail.com', NULL, 0, '$2y$10$a5QyfLJ9XPscKqcJpRsBmOorq8oJedFwoXCq6L8lC8y3gRKULyqgS', NULL, '2025-05-20 08:42:18', '2025-05-20 08:42:18'),
(8, 'sasasa', 'saalamm2211@gmail.comk', NULL, 0, '$2y$10$DTmOQxDUhQT4IMiHMtwYQuSdxw4seMhE5xfAapX358y6uk5YgI0CS', NULL, '2025-08-05 22:04:57', '2025-08-05 22:04:57'),
(10, 'SUNTCHE CG', 'chainas9@live.com', NULL, 1, '$2y$10$Fko8965LLb3hlbAvkgt9EezLlJjmD6zkI2oA7xYJ0NLzBMKPq3gWO', NULL, '2025-09-08 08:12:06', '2025-09-08 08:38:43'),
(11, 'LANGA LULANGA', 'yendizo.yendizo@gmail.com', NULL, 0, '$2y$10$2rs6qRhXoRwrQPu9SGN0g.9F0.M5tVealU5u5jkWv99l4ighI2coi', NULL, '2025-09-08 09:29:15', '2025-09-08 09:32:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commanders`
--
ALTER TABLE `commanders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commander_terms`
--
ALTER TABLE `commander_terms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commander_terms_commander_id_foreign` (`commander_id`);

--
-- Indexes for table `commands`
--
ALTER TABLE `commands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `operations`
--
ALTER TABLE `operations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_slides`
--
ALTER TABLE `slider_slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `static_images`
--
ALTER TABLE `static_images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `static_images_identifier_unique` (`identifier`);

--
-- Indexes for table `static_texts`
--
ALTER TABLE `static_texts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `static_texts_identifier_unique` (`identifier`);

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
-- AUTO_INCREMENT for table `adverts`
--
ALTER TABLE `adverts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commanders`
--
ALTER TABLE `commanders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `commander_terms`
--
ALTER TABLE `commander_terms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `commands`
--
ALTER TABLE `commands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `operations`
--
ALTER TABLE `operations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider_slides`
--
ALTER TABLE `slider_slides`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `static_images`
--
ALTER TABLE `static_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `static_texts`
--
ALTER TABLE `static_texts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commander_terms`
--
ALTER TABLE `commander_terms`
  ADD CONSTRAINT `commander_terms_commander_id_foreign` FOREIGN KEY (`commander_id`) REFERENCES `commanders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
