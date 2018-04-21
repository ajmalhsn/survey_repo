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
-- Table structure for table `statements`
--

DROP TABLE IF EXISTS `statements`;
CREATE TABLE IF NOT EXISTS `statements` (
  `stid` int(11) NOT NULL,
  `statement` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`stid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `statements`
--

INSERT INTO `statements` (`stid`, `statement`) VALUES
(1, 'We respond to 90% of pre-auth requests within 10 minutes \r\n٩٠٪ من الموافقات الطبية  يتم حلها خلال ١٠ دقائق'),
(2, 'With us, your pre-auth requests are faster \r\nمعنا، يتم حل الموافقات الطبية الخاصة بك بشكل أسرع'),
(3, 'Over 3/4 of all outpatient claims do not require approvals \r\nفوق ٣/ ٤ من  جميع مطالبات العيادات الخارجية لا تتطلب الموافقات'),
(4, 'More than 85% of our pre-auth employees are senior doctors & medical offcials \r\nفوق ٨٥٪ من موظفين قسم الموافقات الطبية لدينا هم كبار الأطباء والمسؤولين الطبيين'),
(5, 'We answer 90% of Customer Service calls in less than 10 seconds \r\n٩٠٪ من اتصالات  خدمة العملاء يتم الرد علبها خلال ١٠ ثوان'),
(6, 'Get an immediate decision on your claim from our offices \r\nاحصل على جواب فوري بخصوص مطالبة التعويض الخاصة بك بزيارة احدى فروعنا'),
(7, 'Reiumburse your claims online within 3 days \r\nاحصل على تعويض المطالبة الخاصة بك خلال 3 أيام عبر القنوات الإلكترونية'),
(8, 'We reimburse your claim in less than 10 days \r\nيمكننا تعويض المطالبة الخاصة بك خلال ١٠ أيام'),
(9, 'For additions to the policy, membership cards are delivered within 24 hours \r\nللاضافات على البوليصة، يتم توصيل بطاقة التأمين خلال ٢٤ ساعة\r\n'),
(10, 'Over 375 of our employees are certified medical personnel \r\nفوق ٣٧٥ من موظفينا أطباء معتمدين\r\n'),
(11, 'Our claims & pre-auth are led by the World Health\r\nOrganization\'s (WHO) criteria \r\nمعاييرنا المتعلقة بالموافقات الطبية المسبقة و طلبات التعويض مبنية  على معايير المنظمة الصحة العالمية\r\n'),
(12, 'Get an explanation on your partial approval/denial through SMS or by visiting our website  \r\nاحصل على توضيح لسبب الموافقة الجزئية/رفض التعويض عبر رسالة نصية أو بزيارة موقعنا\r\n'),
(13, 'Our \"Patient Safety Centre\" reports malpractice &\r\nunacceptable medical experiences\r\nمركز سلامة المرضى لدينا يبلغ عن أي ممارسات طبية غير مقبولة\r\n'),
(14, 'Over 98% of our members did not have to visit hospitals & providers outside our Kingdom-wide Network \r\nفوق ٩٨٪ من أعضائنا لم يضطروا زيارة المستشفيات و مزودي الخدمات خارج شبكتنا الضخمة في المملكة \r\n'),
(15, 'Most experienced Healthcare Insurance with the largest number of hospital visits in the Kingdom \r\nشركة تأمين صحي الأكثر خبرة مع أكبر عدد زيارات للمستشفيات في المملكة\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
