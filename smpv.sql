-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 04:57 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smpv`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `name`, `education`, `email`, `mobile`, `description`, `resume_path`, `created_at`, `updated_at`) VALUES
(1, 'HARIKRISHNA A J', 'BCA', 'hkk710@gmail.com', 9447103444, 'Software Engineer', 'Avid Class Room Note Final_page-0001-converted.pdf', '2021-05-27 08:53:47', '2021-05-27 08:53:47'),
(2, 'HARIKRISHNA A J', 'BCA', 'hkk710@gmail.com', 9447103444, 'Software Engineer', 'Avid Class Room Note Final_page-0001-converted.pdf', '2021-05-27 08:54:16', '2021-05-27 08:54:16'),
(3, 'HARIKRISHNA A J', 'BCA', 'hkk710@gmail.com', 9447103444, 'gfgdfgdfg', 'Avid Class Room Note Final_page-0001-converted.pdf', '2021-05-27 08:54:40', '2021-05-27 08:54:40'),
(4, 'HARIKRISHNA A J', 'BCA', 'hkk710@gmail.com', 9447103444, NULL, 'Avid Class Room Note Final_page-0001-converted.pdf', '2021-05-27 08:56:31', '2021-05-27 08:56:31'),
(5, 'HARIKRISHNA A J', 'BCA', 'hkk710@gmail.com', 9447103444, 'gfgdfgdfg', 'Avid Class Room Note Final_page-0001-converted.pdf', '2021-05-27 08:57:19', '2021-05-27 08:57:19'),
(6, 'HA', 'BCA', 'hkk710@gmail.com', 1234567890, 'cgdfgdfg', 'Capture.PNG', '2021-05-27 08:59:58', '2021-05-27 08:59:58'),
(7, 'HA', 'BCA', 'hkk710@gmail.com', 1234567890, 'gfsdgdg', 'Capture.PNG', '2021-05-27 09:01:08', '2021-05-27 09:01:08'),
(8, 'test123', 'tester', 'tesrttsdsdf@fdsfg.com', 1234567890, 'gdfgdfg', 'tesrttsdsdf@fdsfg.compdf', '2021-05-27 09:05:23', '2021-05-27 09:05:23'),
(9, 'HARIKRISHNA A J', 'BCA', 'hkk710@gmail.com', 1234567890, 'sdfsdfsd', 'hkk710@gmail.compdf', '2021-05-27 09:16:30', '2021-05-27 09:16:30'),
(10, 'HARIKRISHNA A J', 'BCA', 'hkk710@gmail.com', 1234567890, 'sdfsdfsd', 'hkk710@gmail.compdf', '2021-05-27 09:17:20', '2021-05-27 09:17:20'),
(11, 'HA', 'BCA', 'hkk710@gmail.com', 1234567890, 'dsfgsdf', 'hkk710@gmail.compdf', '2021-05-27 09:21:28', '2021-05-27 09:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_id` int(10) UNSIGNED DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `lft` int(10) UNSIGNED DEFAULT NULL,
  `rgt` int(10) UNSIGNED DEFAULT NULL,
  `depth` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_05_21_300000_create_team_invitations_table', 1),
(9, '2021_05_18_141821_create_sessions_table', 1),
(10, '2021_05_27_132253_create_careers_table', 2),
(11, '2016_05_25_121918_create_pages_table', 3),
(12, '2017_04_10_195926_change_extras_to_longtext', 3),
(13, '2016_05_05_115641_create_menu_items_table', 4),
(14, '2021_06_13_132757_create_permission_tables', 5),
(15, '2020_03_31_114745_remove_backpackuser_model', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `template` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extras` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `template`, `name`, `title`, `slug`, `content`, `extras`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'Content', 'Aboutus', 'ABOUT US', 'aboutus', '<h3>ABOUT US</h3>\r\n\r\n<blockquote>\r\n<p>SMPV and Associates was&nbsp;registered as a partnership firm in 2014 and subsequently converted into LLP with effect from 10 October 2017. SMPV&nbsp;is a registered firm of&nbsp; <a id=\"company\" name=\"company\">Company Secretaries</a>&nbsp;specialized in corporate laws and dedicated to working with clients to help them achieve their business goals and overcome legal challenges anywhere in India. From a national platform spanning across states, the dedicated team of SMPV help clients succeeds. We are entitled to practice the profession of Company Secretaries as per the provisions of section 6 of the Company Secretaries Act, 1980. Our collaborations among professionals in various disciplines produce innovative legal solutions for our clients. We work together across offices and practice areas as integrated, multidisciplinary teams to provide the capabilities necessary to generate great results for our clients.</p>\r\n</blockquote>', NULL, '2021-06-13 05:03:21', '2021-12-12 02:12:44', NULL),
(9, 'Content', 'Aboutus', 'Our Ethos', 'Our Ethos', '<blockquote>\r\n<p>As a firm, we embrace and promote diversity and inclusion, both within our own organization and throughout the legal profession. We are proud of our employees&#39; rich and varied backgrounds, knowledge and skills, which make us stronger as a Firm.</p>\r\n\r\n<p>We value and encourage diversity with respect to each individual&rsquo;s work style, career path and professional and life experiences. We continually strive to build and maintain a culture that values and gathers strength from our differences.</p>\r\n</blockquote>', NULL, '2021-06-13 05:05:30', '2021-12-14 04:34:59', NULL),
(11, 'Content', 'SERVICES', 'Corporate Governance', 'corporate-governance', '<h3>Corporate Governance</h3>\r\n\r\n<p>Professionals at SMPV advise public, private, and nonprofit clients on all aspects of corporate governance. This may include compliance with the Companies Act, 2013; Competition Act, 2002; FEMA, 1999; Foreign Trade (Development and Regulation) Act, 1992; SEBI Act, 1992; Income Tax Act, 1961; Reserve bank of India Act, 1934; Contracts Act, 1872; and several other regulations of the Government of India issued from time to time. When necessary, we represent companies and individuals in internal investigations and litigation based on allegations of failures of corporate governance. Our Corporate Governance professionals bring practical judgment, innovation, and a broad perspective to counseling boards and board committees, senior management, and internal legal and compliance departments in the high-stakes and time-sensitive arena of disclosure, shareholder activism, corporate governance, and compliance. We routinely counsel companies on day-to-day challenges and are well-positioned to respond rapidly and effectively to special challenges and crisis situations. We build teams that address the unique operational issues clients face. This cross-disciplinary approach combines best practices and practical judgment to help clients withstand heightened scrutiny and litigation risk. We actively counsel many of the preeminent corporations on different aspects of corporate governance and securities regulation and compliance, including:</p>\r\n\r\n<ul>\r\n	<li>Board and board committee structure, operation, and compliance</li>\r\n	<li>Committee charters, codes of conduct, and other corporate programs, policies, and procedures</li>\r\n	<li>Corporate governance-related disclosure requirements</li>\r\n	<li>Director and officer fiduciary duties and responsibilities</li>\r\n	<li>Takeover readiness measures, stockholder activism, including shareholder proposals, and stockholder engagement</li>\r\n	<li>Compliance and internal controls</li>\r\n	<li>Investigations, enforcement, and crisis management</li>\r\n</ul>', NULL, '2021-06-13 09:08:38', '2021-06-13 09:59:09', NULL),
(12, 'Content', 'SERVICES', 'Business Contracts and Agreements', 'business-contracts-and-agreements', '<h3>Business Contracts &amp; Agreements</h3>\r\n\r\n<blockquote>\r\n<p>An established professional or a team can be vital in ensuring that your contracts and agreements are safe from disputes and potential lawsuits by employees, sellers, users, vendors, and more. Although one could boil down a contract drafting services to simply writing contracts and agreements for the company, the job is, in reality, much more complicated. In drawing up contracts, one must consider that it:</p>\r\n\r\n<ul>\r\n	<li>Follows all regulatory and compliance requirements</li>\r\n	<li>Secures the company in cases where it is broken or otherwise violated</li>\r\n	<li>Contains language that is straightforward and easy to understand to prevent misinterpretations and confusing situations</li>\r\n	<li>Is appropriate for the circumstances in which the contract is present</li>\r\n	<li>Not all contracts are the same, so it is paramount that a drafting professional understands the proper language, scope, and consequences of a specific contract before drafting, revising, and finalizing</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In business law, a contract lawyer may be able to draft up multiple types of contracts. This includes: Web Agreements. This may include any terms of service agreements for software-as-a-service (SaaS) products, contracts for subscriptions, and other terms of use conditions. Buy-Sell Agreements. Any situations where the business undergoes financial transactions require a solid, legally binding contract before the transaction is made final. This includes acquisitions, mergers, buyouts, and other buy-sell situations. IP Agreements. If you own any intellectual property and would like to share its use with specific clients or partners, an IP agreement may allow you to give express written consent to use your patent, trademark, or copyright to others. Employment Agreements. This can include non-disclosure agreements to protect your intellectual property, along with employee contracts, independent contractor agreements, and other types of contracts related to business law.</p>\r\n</blockquote>', NULL, '2021-06-13 09:11:32', '2021-12-12 02:39:31', NULL),
(13, 'Content', 'SERVICES', 'Transaction Advisory', 'transaction-advisory', '<h3>Transaction Advisory</h3>\r\n\r\n<blockquote>\r\n<p>Transactions are significant events in the life of a business. It requires experience, determination and pragmatism to bring deals safely through to conclusion. This is what our experienced team of professionals delivers. Where your business is prone to a new set of challenges and risks, it is recommended to reduce them by availing transaction advisory services. There is nothing better than handing over the responsibility of business transactions to an experienced team of professionals. If you&#39;re a business owner or part of a management team, we can help you prepare for and execute your transactions. With our extensive experience we can advise on the most of deals, but always remain focused on ensuring you get the senior attention you deserve. We provide the following services:</p>\r\n\r\n<ul>\r\n	<li>Advise on formation of business entity in India and India entry services for foreign entities</li>\r\n	<li>Issue and allotment of securities, Buy-back of securities etc.</li>\r\n	<li>Listing and delisting of securities in stock exchange</li>\r\n	<li>Mergers and amalgamations, demerger, Business acquisition etc</li>\r\n	<li>Introduction of Employee Stock Option (ESOP) and Employee Stock Purchase Scheme (ESPS) in the Company</li>\r\n	<li>Legal Due-Diligence</li>\r\n	<li>Structuring and/or restructuring of Capital</li>\r\n</ul>\r\n</blockquote>', NULL, '2021-06-13 09:12:25', '2021-06-13 09:12:25', NULL),
(14, 'Content', 'SERVICES', 'Advisory on FEMA and FDI', 'advisory-on-fema-and-fdi', '<h3>Advisory on Foreign Exchange Management Act (FEMA) and Foreign Direct Investment (FDI)</h3>\r\n\r\n<blockquote>\r\n<p>In India, Foreign Direct Investment policy is regulated under the Foreign Exchange Management Act, 1999 governed by the Reserve Bank of India. According to Organization for Economic Co-operation and Development (OECD), an investment of 10% or above from overseas is considered as FDI. Contravention under provisions of FEMA and FDI can land you in hefty penalties. Our professionals are actively involved in transactions under FEMA and assist you in protecting against the non-compliance. We are actively involved in following transactions under FEMA and FDI:</p>\r\n\r\n<ul>\r\n	<li>Incorporation of subsidiary companies and/or LLP, Liaison Office, Branch Office, Project office in India</li>\r\n	<li>Induction of capital from foreign holding company and allotment of shares</li>\r\n	<li>Transfer of shares between residents and non-residents</li>\r\n	<li>Foreign Downstream Investment</li>\r\n	<li>Issue of ESOP and/or sweat equity to persons resident outside India</li>\r\n	<li>Advisory and assistance on procuring External Commercial Borrowings (ECB) from foreign sources viz drafting loan agreement, obtaining Loan Registration Number (LRN) and complying with monthly ECB reporting;</li>\r\n	<li>Advisory and assistance in compounding of contraventions under FEMA with RBI;</li>\r\n</ul>\r\n</blockquote>', NULL, '2021-06-13 09:13:48', '2021-06-13 09:13:48', NULL),
(15, 'Content', 'SERVICES', 'Audit, Assurance and Certification', 'audit-assurance-and-certification', '<h3>Audit, Assurance &amp;&nbsp;Certification</h3>\r\n\r\n<blockquote>\r\n<p>The focus of the audit and assurance department is to provide you with a quality product that suits your needs, to provide helpful suggestions that improve your operations, to provide legal/compliance guidance when necessary, and to provide a level of service that will result in a long-lasting relationship. We pride ourselves on our technical expertise and our internal quality control standards allow us to stay abreast of all the changes in the compliance and auditing arenas. We also take the time to attend conferences and seminars to stay informed of the many changes within the industries in which our clients operate. While performing an audit, we look for areas of improvement and provide suggestions for change. We provide the following audit and assurance services:</p>\r\n\r\n<ul>\r\n	<li>Secretarial Audit under the Companies Act, 2013</li>\r\n	<li>Internal Audit</li>\r\n	<li>Due-Diligence audit and certification as prescribed by RBI</li>\r\n	<li>CSR Audit/Review</li>\r\n	<li>Certification of Forms to be filed with Reserve Bank of India (RBI) and Ministry of Corporate Affairs (MCA)</li>\r\n	<li>Audit and certification of Listed Companies</li>\r\n</ul>\r\n</blockquote>', NULL, '2021-06-13 09:14:40', '2021-12-12 02:52:32', NULL),
(16, 'Content', 'SERVICES', 'Appearance and Representation', 'appearance-and-representation', '<h3>Appearance and Representation</h3>\r\n\r\n<blockquote>\r\n<p>We appear on behalf of our clients before various statutory authorities for compounding of contraventions or seeking regulatory approvals. Our seasoned professionals will advise you on the optimum way and sail you through the process in a hassle-free manner. We make regular appearances before the following statutory authorities:</p>\r\n\r\n<ul>\r\n	<li>National Company Law Tribunal (NCLT)</li>\r\n	<li>National Company Law Appellate Tribunal (NCLAT)</li>\r\n	<li>Securities Exchange Board of India (SEBI)</li>\r\n	<li>Securities Appellate Tribunal (SAT)</li>\r\n	<li>Reserve Bank of India (RBI)</li>\r\n	<li>Ministry of Corporate Affairs</li>\r\n	<li>Competition Commission of India</li>\r\n</ul>\r\n</blockquote>', NULL, '2021-06-13 09:15:31', '2021-06-13 09:15:31', NULL),
(19, 'Content', 'Aboutus', 'Our Commitment', 'Our-commitment', '<blockquote>\r\n<p>SMPV is committed to helping clients achieve their business strategies and providing outstanding legal services across India. Clients depend on the firm to find innovative solutions to complex compliance issues, and SMPV&nbsp;leverage the firm&rsquo;s professional platform to help clients handle these challenges.</p>\r\n\r\n<p>SMPV is a single, integrated firm focused on providing the most collaborative approach to client service. The firm offers:&nbsp;</p>\r\n&nbsp;\r\n\r\n<ul>\r\n	<li>Deep experience in successful corporate transactions and compliances</li>\r\n	<li>A solutions-based approach, providing innovative and sound commercial advice</li>\r\n	<li>Optimally sized teams that provide cost-effective and high-quality services</li>\r\n	<li>A culture geared toward establishing and nurturing long-term client relationships</li>\r\n	<li>Serve as extended legal and compliance department of your Company providing a hassle-free compliance environment</li>\r\n</ul>\r\n</blockquote>', NULL, '2021-12-14 04:21:37', '2021-12-14 04:33:41', NULL),
(20, 'Content', 'Article', 'Article 1', 'article-1', '<h1>Article 1</h1>\r\n\r\n<p>Contents of the articles are hereklj, jknkln,.ndsfjkl jbndansdjkbsad jnndasjbdjsandklnsajkdksadsabd</p>\r\n\r\n<p>kljkjdnklsandjlasndsakd</p>\r\n\r\n<p>j;jasdkjsa;ldjl;asjd;lsd;kjas;djas;kdjasjdkjdkljadkjdkjaksdjkjdkasjdklajdkasjdkajsdkljadkjsakdjsakdjksaljdklsajdkljaskldjsakldjkslajdklsajdklasjdkljasdklsadjaskjdkasjdklsajdkjkslad</p>', NULL, '2021-12-14 08:29:40', '2021-12-14 09:30:46', NULL),
(21, 'Content', 'Article', 'Article 2', 'article-1-2', '<p>Article 1<br />\r\n<br />\r\nContents of the articles are hereklj, jknkln,.ndsfjkl jbndansdjkbsad jnndasjbdjsandklnsajkdksadsabd</p>\r\n\r\n<p>kljkjdnklsandjlasndsakd</p>\r\n\r\n<p>j;jasdkjsa;ldjl;asjd;lsd;kjas;djas;kdjasjdkjdkljadkjdkjaksdjkjdkasjdklajdkasjdkajsdkljadkjsakdjsakdjksaljdklsajdkljaskldjsakldjkslajdklsajdklasjdkljasdklsadjaskjdkasjdklsajdkjkslad</p>', NULL, '2021-12-14 08:31:19', '2021-12-14 08:31:19', NULL),
(22, 'Content', 'Article', 'Article 3', 'article-1-3', '<p>Article 1<br />\r\n<br />\r\nContents of the articles are hereklj, jknkln,.ndsfjkl jbndansdjkbsad jnndasjbdjsandklnsajkdksadsabd</p>\r\n\r\n<p>kljkjdnklsandjlasndsakd</p>\r\n\r\n<p>j;jasdkjsa;ldjl;asjd;lsd;kjas;djas;kdjasjdkjdkljadkjdkjaksdjkjdkasjdklajdkasjdkajsdkljadkjsakdjsakdjksaljdklsajdkljaskldjsakldjkslajdklsajdklasjdkljasdklsadjaskjdkasjdklsajdkjkslad</p>', NULL, '2021-12-14 08:31:25', '2021-12-14 08:31:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'read', 'web', '2021-06-13 08:15:12', '2021-06-13 08:15:12');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2021-06-13 08:15:29', '2021-06-13 08:15:29');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1AxtRYxcSDXXLvk4qDdR5sKtrYbjxr7Ed9G052Xg', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiUTZzSHJOZVBCSFU0a1BtUk9lakZoSFR0SkpYVFJoTGp3d3l4aUhDcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hcnRpY2xlLzIwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1NToibG9naW5fYmFja3BhY2tfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NjoiY3JlYXRlIjthOjE6e3M6MTA6InNhdmVBY3Rpb24iO3M6MTM6InNhdmVfYW5kX2JhY2siO31zOjY6InVwZGF0ZSI7YToxOntzOjEwOiJzYXZlQWN0aW9uIjtzOjEzOiJzYXZlX2FuZF9lZGl0Ijt9fQ==', 1639497361);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'hari\'s Team', 1, '2021-05-18 08:54:31', '2021-05-18 08:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'HARI', 'hari@gmail.com', NULL, '$2y$10$y/pnxfIx0PGG.fRsGOiYp.NF2iTPORucsfHzV1.JC6crM7X7.eObe', NULL, NULL, NULL, 1, NULL, '2021-05-18 08:54:31', '2021-06-13 07:46:56'),
(2, 'HARIKRISHNA A J', 'hkk710@gmail.com', NULL, '$2y$10$ktcH1VgsBFGgQPH330mlSehCjBVyP7yA3QCE7i4sSQZYZNq6ge/s6', NULL, NULL, NULL, NULL, NULL, '2021-12-12 02:08:55', '2021-12-12 02:08:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

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
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
