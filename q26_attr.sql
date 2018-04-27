-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 06:50 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `q26_attr`
--

CREATE TABLE `q26_attr` (
  `id` int(11) NOT NULL,
  `attribute_e` varchar(500) NOT NULL,
  `attribute_a` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `q26_attr`
--

INSERT INTO `q26_attr` (`id`, `attribute_e`, `attribute_a`) VALUES
(1, 'Reputation/Image of the provider', 'سمعة/ الصورة الانطباعية عن المزود'),
(2, 'Convenience offered', 'الراحة المقدمة'),
(3, 'Endorsement by local government authority/department', 'المصادقة من قبل هيئة/ دائرة حكومية محلية'),
(4, 'Local roots of the company (e.g., having more local employees, having a local company representative dealing with you etc.)', 'الجذور المحلية للشركة (على سبيل المثال لديها موظفين محليين أكثر، لديها ممثل محلي للشركة يتعامل معكم، الخ)'),
(5, 'Security/Peace of mind', 'الآمان/راحة البال'),
(6, 'Flexible coverage schemes', 'برامج تغطية مرنة'),
(7, 'Value for money/Value added Services', 'استحقاق السعر/خدمات ذات قيمة مضافة'),
(8, 'Customer Service', 'خدمة العملاء'),
(9, 'Global Expertise & Reach', 'الخبرة العالمية والوصول إليها'),
(10, 'Ease of application process (Proposal & Quotation, Process to enroll etc.)', 'سهولة عملية تقديم الطلب (العرض وعرض الأسعار، عملية التسجيل، الخ)'),
(11, 'Pre-Authorization process', 'عملية ما قبل التفويض'),
(12, 'Speed of approval (to see the doctors/tests etc.)', 'سرعة الموافقة (لزيارة الأطباء/إجراء الفحوصات، الخ)'),
(13, 'Easy Claims process', 'سهولة عملية المطالبة'),
(14, 'Pricing, Fee & Charges', 'الأسعار والرسوم والأتعاب'),
(15, 'Medical Inflation/ Burning charge', 'تضخم العلاج الطبي/ حرق الأسعار'),
(16, 'Payment Options & Flexible Terms', 'خيارات الدفع و الشروط المرنة'),
(17, 'Loyalty programs', 'برامج الولاء'),
(18, 'Ease of linking with Jawazat', 'سهولة الربط مع الجوازات'),
(19, 'Fast delivery of cards once signed up', 'السرعة في تسليم البطاقات بمجرد الاشتراك'),
(20, 'Online platforms', 'منصات عبر الانترنت'),
(21, 'Wide range of insurance products', 'مجموعة واسعة من منتجات التأمين'),
(22, 'Less documentation', 'مستندات أقل'),
(23, 'Trustworthiness', 'جديرة بالثقة'),
(24, 'KSA wide Providers Network (Hospital/Clinics covered)', 'شبكة واسعة من المزودين في المملكة العربية السعودية (المستشفيات/ المستوصفات المغطاة)'),
(25, 'City wide Providers Network (Hospital/Clinics covered)', 'شبكة مزودي الخدمات على مستوى المدينة (المستشفيات/ المستوصفات المغطاة)'),
(26, 'Specialties covered by the Hospital/Clinic network', 'التخصصات التي تغطيها شبكة المستشفيات/المستوصفات'),
(27, 'Annual Coverage Limit', 'حدود التغطية السنوية'),
(28, 'Dental coverage', 'تغطية الأسنان'),
(29, 'Optician coverage', 'تغطية النظارات الطبية'),
(30, 'Diseases covered', 'الأمراض المغطاة'),
(31, 'Outpatient coverage', 'تغطية العيادات الخارجية'),
(32, 'Inpatient coverage', 'تغطية التنويم'),
(33, 'Maternity cover', 'تغطية الحمل والولادة'),
(34, 'Chronic disease cover', 'تغطية الأمراض المزمنة'),
(35, 'Pre-existing conditions coverage', 'تغطية الحالات الموجودة مسبقا'),
(36, 'Serious illness cover (Cancer, Dialysis etc.)', 'تغطية الأمراض الخطيرة (السرطان، غسيل الكلى، الخ)'),
(37, 'Emergency treatment & coverage', 'تغطية العلاج الطارئ'),
(38, 'Seasonal Vaccinations', 'اللقاحات الموسمية'),
(39, 'Payment asked from Employees/ Deductible for doctor visit/medicines/tests etc.', 'مبلغ أقل يدفعه الموظف/ المبلغ المقطوع من الموظف مقابل زيارة الطبيب/ الأدوية/الفحوصات، الخ'),
(40, 'Home country coverage (For Expat employees)', 'تغطية في بلد الموظف الأصلي (بالنسبة للمقيمين)'),
(41, 'VIP services like Phone consultation, Home visits etc.', 'خدمات لكبار الشخصيات مثل توفر الاستشارات عبر الهاتف، الزيارات المنزلية، الخ'),
(42, 'Coverage of prescribed drugs', 'تغطية أوسع للأدوية التي يصفها الطبيب');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
