-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Mar 04, 2016 at 03:52 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jquizeme`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
`id` int(11) NOT NULL,
  `ans` text NOT NULL,
  `questions_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `answers_info`
--

CREATE TABLE `answers_info` (
`id` int(11) NOT NULL,
  `ansInfo` text NOT NULL,
  `questions_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `answers_sel`
--

CREATE TABLE `answers_sel` (
`id` int(11) NOT NULL,
  `ansSel` text NOT NULL,
  `questions_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('ba12e5ad5196508e0114341b485216565ccc6e63', '127.0.0.1', 1457083030, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373038323934303b6964656e746974797c733a373a226162736d75677a223b757365726e616d657c733a373a226162736d75677a223b656d61696c7c733a31393a226162736d75677a303940676d61696c2e636f6d223b757365725f69647c733a313a2233223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343537303133343030223b),
('bece03fffedc03203492987a3170b972c4132bc1', '127.0.0.1', 1457084263, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373038343036353b6964656e746974797c733a373a226162736d75677a223b757365726e616d657c733a373a226162736d75677a223b656d61696c7c733a31393a226162736d75677a303940676d61696c2e636f6d223b757365725f69647c733a313a2233223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343537303133343030223b),
('c9ef4b7832552b77654414bcfaaf2f22a3c43b46', '127.0.0.1', 1457084696, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373038343630313b),
('ece681bfbc3217d52b7ddbcec86fbd476593704e', '127.0.0.1', 1457085303, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373038353133353b),
('70699fc4fd5758152f41be55b5d667ff6e332a6c', '127.0.0.1', 1457085474, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373038353437343b),
('bd5b61a5baa7efc79e56405c05d0bf39add82af0', '127.0.0.1', 1457086162, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373038363134353b),
('632065f54f83057dafef7743c1fd2ce6e49d91a6', '127.0.0.1', 1457087001, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373038363835303b),
('01921a379f6f7538976cf37fcea03b12f1705def', '127.0.0.1', 1457087377, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373038373236333b),
('15ad2dd07a244b3cfa1434cafb39ee5c3e114087', '127.0.0.1', 1457087978, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373038373638343b),
('069645d70b64ebc5558119d94cee0a7f77cc3de9', '127.0.0.1', 1457088284, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373038383032323b),
('bf7af2da0f2bb5fe78753ca75e23035612b90e23', '127.0.0.1', 1457088841, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373038383631313b),
('ada8d13d2ff1fbce08d0b58590cedabbdae890cb', '127.0.0.1', 1457097203, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373039373031363b),
('db5ee2ad7c1639c4e151c6e7aa8b4588fe59807d', '127.0.0.1', 1457097786, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373039373535333b),
('9e70cf9dc558e839b925924bbba6c31afbc3ce19', '127.0.0.1', 1457098051, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373039373838383b),
('9301c62730eed7e83049fd1b0958f43b734ecfb5', '127.0.0.1', 1457098050, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373039383034393b),
('2915d4c3e3e15e0483e3fd23bc1dc207bf852123', '127.0.0.1', 1457098487, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373039383232333b),
('bfacedf3c2aa3e9a25fe0b8feb9191aeadc5d88c', '127.0.0.1', 1457098535, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373039383533353b),
('12dbcb8e2df0f43ccfeab4ac993e97f3a1a02832', '127.0.0.1', 1457099631, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373039393535313b),
('99cb9c514508290b0a1cc5c79a829fe9b0c7de37', '127.0.0.1', 1457100109, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373039393836323b),
('1a79c7fc8b2a5d5afd50f5772f832d8e21c953a7', '127.0.0.1', 1457100166, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373130303136363b),
('6bf91c1d3fad18b8673aaa0ed8e49112fdbb0743', '127.0.0.1', 1457100807, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373130303531333b),
('8340e0edccdf2e2fa22bb38fa49f35d8c123bb6c', '127.0.0.1', 1457101069, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373130303833373b6964656e746974797c733a373a226162736d75677a223b757365726e616d657c733a373a226162736d75677a223b656d61696c7c733a31393a226162736d75677a303940676d61696c2e636f6d223b757365725f69647c733a313a2233223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343537303737323637223b),
('7638d9f5a0f2174c31827c00dcdd467c4104384b', '127.0.0.1', 1457101318, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373130313331383b6964656e746974797c733a373a226162736d75677a223b757365726e616d657c733a373a226162736d75677a223b656d61696c7c733a31393a226162736d75677a303940676d61696c2e636f6d223b757365725f69647c733a313a2233223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343537303737323637223b),
('ad857e3688ce115f4bf2a27b7d16d6d5fc746794', '127.0.0.1', 1457101877, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373130313733323b6964656e746974797c733a373a226162736d75677a223b757365726e616d657c733a373a226162736d75677a223b656d61696c7c733a31393a226162736d75677a303940676d61696c2e636f6d223b757365725f69647c733a313a2233223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343537303737323637223b),
('fa146f788d939be5002e1b1748ce6ae8d137bb08', '127.0.0.1', 1457102368, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373130323037353b6964656e746974797c733a373a226162736d75677a223b757365726e616d657c733a373a226162736d75677a223b656d61696c7c733a31393a226162736d75677a303940676d61696c2e636f6d223b757365725f69647c733a313a2233223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343537303737323637223b),
('bd0677637cf24ac947c193d43b416aeb62697275', '127.0.0.1', 1457102577, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373130323436373b6964656e746974797c733a373a226162736d75677a223b757365726e616d657c733a373a226162736d75677a223b656d61696c7c733a31393a226162736d75677a303940676d61696c2e636f6d223b757365725f69647c733a313a2233223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343537303737323637223b),
('4ce1bb49f1230d73c9c86906374338bacc2b0c47', '127.0.0.1', 1457102605, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373130323630353b),
('258c69f5b2b1f1969c00f78be64f9b3f4e3365c7', '127.0.0.1', 1457102982, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435373130323836373b6964656e746974797c733a373a226162736d75677a223b757365726e616d657c733a373a226162736d75677a223b656d61696c7c733a31393a226162736d75677a303940676d61696c2e636f6d223b757365725f69647c733a313a2233223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343537303737323637223b);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`) VALUES
(1, 'Geography');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
`id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `mark` float NOT NULL,
  `users_id` int(11) unsigned NOT NULL,
  `courses_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
`order_id` int(11) NOT NULL,
  `order_num` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payed` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_num`, `user_id`, `payed`) VALUES
(1, 1003, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
`id` int(11) NOT NULL,
  `ques` text NOT NULL,
  `courses_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `questions_type`
--

CREATE TABLE `questions_type` (
`id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `courses_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `course_id`) VALUES
(1, 'Map skills', 1),
(2, 'Gis Skills', 1),
(3, 'Measuring Bearing', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1457000793, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(3, '127.0.0.1', 'absmugz', '$2y$08$j2VzjIlRuYX3g.jqu7UpweS6VZVMfZCabIu07fQ9QT0WWD2RJws82', NULL, 'absmugz09@gmail.com', NULL, NULL, NULL, NULL, 1457000963, 1457101051, 1, 'Absolom', 'Mugwagwa', 'info-age', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_courses`
--

CREATE TABLE `users_courses` (
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_courses`
--

INSERT INTO `users_courses` (`user_id`, `order_id`, `course_id`) VALUES
(3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_answers_questions1_idx` (`questions_id`);

--
-- Indexes for table `answers_info`
--
ALTER TABLE `answers_info`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_answers_info_questions1_idx` (`questions_id`);

--
-- Indexes for table `answers_sel`
--
ALTER TABLE `answers_sel`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_answers_sel_questions1_idx` (`questions_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
 ADD KEY `fk_marks_users1_idx` (`users_id`), ADD KEY `fk_marks_courses1_idx` (`courses_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_questions_courses1_idx` (`courses_id`);

--
-- Indexes for table `questions_type`
--
ALTER TABLE `questions_type`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_questions_type_courses1_idx` (`courses_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`), ADD KEY `fk_users_groups_users1_idx` (`user_id`), ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `answers_info`
--
ALTER TABLE `answers_info`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `answers_sel`
--
ALTER TABLE `answers_sel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questions_type`
--
ALTER TABLE `questions_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
ADD CONSTRAINT `fk_answers_questions1` FOREIGN KEY (`questions_id`) REFERENCES `questions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `answers_info`
--
ALTER TABLE `answers_info`
ADD CONSTRAINT `fk_answers_info_questions1` FOREIGN KEY (`questions_id`) REFERENCES `questions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `answers_sel`
--
ALTER TABLE `answers_sel`
ADD CONSTRAINT `fk_answers_sel_questions1` FOREIGN KEY (`questions_id`) REFERENCES `questions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
ADD CONSTRAINT `fk_marks_courses1` FOREIGN KEY (`courses_id`) REFERENCES `courses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_marks_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
ADD CONSTRAINT `fk_questions_courses1` FOREIGN KEY (`courses_id`) REFERENCES `courses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `questions_type`
--
ALTER TABLE `questions_type`
ADD CONSTRAINT `fk_questions_type_courses1` FOREIGN KEY (`courses_id`) REFERENCES `courses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
