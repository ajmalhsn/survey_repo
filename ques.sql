-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 23, 2018 at 01:56 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

DROP TABLE IF EXISTS `ques`;
CREATE TABLE IF NOT EXISTS `ques` (
  `id` int(1) NOT NULL,
  `question_eng` varchar(120) DEFAULT NULL,
  `question_ar` varchar(84) DEFAULT NULL,
  `o1_e` varchar(39) DEFAULT NULL,
  `o1_a` varchar(26) DEFAULT NULL,
  `o2_e` varchar(19) DEFAULT NULL,
  `o2_a` varchar(18) DEFAULT NULL,
  `o3_e` varchar(32) DEFAULT NULL,
  `o3_a` varchar(34) DEFAULT NULL,
  `o4_e` varchar(22) DEFAULT NULL,
  `o4_a` varchar(14) DEFAULT NULL,
  `o5_e` varchar(17) DEFAULT NULL,
  `o5_a` varchar(22) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`id`, `question_eng`, `question_ar`, `o1_e`, `o1_a`, `o2_e`, `o2_a`, `o3_e`, `o3_a`, `o4_e`, `o4_a`, `o5_e`, `o5_a`) VALUES
(1, 'Do you work in any of the following industries? SINGLE ANSWER POSSIBLE', '.هل تعمل في أي من الصناعات  التالية؟ إجابة واح', 'Advertising', 'الإعلان', 'Market Research', 'الدراسات التسويقية', 'Journalism  ', 'لصحافة', 'Insurance company', 'شركات التأمين', 'None of the above', 'لا شيء مما ذكر بالأعلى'),
(2, 'Have you participated in a Market Research survey or Focus Group Discussion in the past 6 months? SINGLE ANSWER POSSIBLE', ' هل شاركت فى دراسة تسويقية او مجموعة نقاش فى فى فى الست الأشهر الماضية ؟ اجابة واحدة', 'Yes', ' نعم', 'No', ' لا', '', '', '', '', '', ''),
(3, 'Which city do you permanently live in? SINGLE ANSWER POSSIBLE', 'ما هي المدينة التي تعيش فيها بشكل دائم؟ إجابة واحدة', 'Jeddah', 'جدة', 'Riyadh', 'الرياض', 'Dammam/Khobar (Eastern Province)', 'الدمام / الخُبَر (المنطقة الشرقية)', 'Others', 'خرى', '', ''),
(4, 'What is your age? SHOW CARD. SINGLE ANSWER POSSIBLE', '.ما هو سنك؟ إبرز بطاقة العرض. إجابة واحدة', 'Less than 22 years old', 'أقل من ٢٢ سنة', '22-35', '٢٢-٣٥', '36-45', '٣٦-٤٥', 'More than 45 years old', 'أكثر من  ٤٥سنة', '', ''),
(5, 'Gender', '.سجل الجنس', 'Male', 'ذكر', 'Female', 'أنثى     ', '', '', '', '', '', ''),
(6, 'Do you currently have Medical/Health Insurance or not? SHOW CARD. SINGLE ANSWER POSSIBLE', 'هل لديك حاليا تأمين طبي / صحي أم لا؟ إبرز بطاقة العرض. إجابة واحدة', 'Yes', ' نعم', 'No', ' لا', '', '', '', '', '', ''),
(7, 'How did you get the Medical/Health Insurance? SHOW CARD. SINGLE ANSWER POSSIBLE', 'كيف حصلت على التأمين الطبي / الصحي؟ إبرز بطاقة العرض. إجابة واحدة', 'I purchased it for myself/for my family', 'أنا إشتريت لنفسي / لعائلتي', 'Through my employer', 'من خلال صاحب العمل', 'My spouse’s employer provided it', 'صاحب عمل زوجي / زوجتي قدم لنا ذلك', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
