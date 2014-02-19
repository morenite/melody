-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 20, 2014 at 03:21 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `melody_pc`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id_activity` int(11) NOT NULL AUTO_INCREMENT,
  `activity_type_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id_activity`),
  KEY `fk_activities_users1_idx` (`user_id`),
  KEY `fk_activities_activity_type_enums1_idx` (`activity_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activity_types`
--

CREATE TABLE IF NOT EXISTS `activity_types` (
  `id_activity_type` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id_activity_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
  `id_announcement` int(11) NOT NULL,
  `subject` varchar(45) DEFAULT NULL,
  `body` text,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_announcement`),
  KEY `fk_announcements_users1_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE IF NOT EXISTS `attendances` (
  `id_attendance` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `rehearsal_id` int(11) NOT NULL,
  `attendance_status_id` int(11) NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_attendance`),
  KEY `fk_attendances_attendance_status_enums1_idx` (`attendance_status_id`),
  KEY `fk_attendances_rehearsals1_idx` (`rehearsal_id`),
  KEY `fk_attendances_users1_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_status`
--

CREATE TABLE IF NOT EXISTS `attendance_status` (
  `id_attendance_status` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id_attendance_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cash_data`
--

CREATE TABLE IF NOT EXISTS `cash_data` (
  `id_cash_data` int(11) NOT NULL AUTO_INCREMENT,
  `amount` double DEFAULT NULL,
  `confirmed` tinyint(1) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_cash_data`),
  KEY `fk_cash_data_users1_idx` (`user_id`),
  KEY `fk_cash_data_users2_idx` (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `event_type_id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `organizer` varchar(100) DEFAULT NULL,
  `lat` float DEFAULT NULL,
  `long` float DEFAULT NULL,
  `person_in_charge` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_event`),
  KEY `fk_events_users1_idx` (`person_in_charge`),
  KEY `fk_events_event_type_enums1_idx` (`event_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event_songs`
--

CREATE TABLE IF NOT EXISTS `event_songs` (
  `id_event_songs` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) DEFAULT NULL,
  `song_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_event_songs`),
  KEY `fk_event_songs_songs1_idx` (`song_id`),
  KEY `fk_event_songs_events1_idx` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event_types`
--

CREATE TABLE IF NOT EXISTS `event_types` (
  `id_event_type` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id_event_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `key_signatures`
--

CREATE TABLE IF NOT EXISTS `key_signatures` (
  `id_key_signature` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_key_signature`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE IF NOT EXISTS `meetings` (
  `id_meeting` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `themes` text NOT NULL,
  `body` text NOT NULL,
  `scheduled_start_time` datetime DEFAULT NULL,
  `scheduled_end_time` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id_meeting`),
  KEY `fk_meetings_users1_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) DEFAULT NULL,
  `body` text,
  `sender` int(11) NOT NULL,
  `recipient` int(11) NOT NULL,
  `viewed` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id_message`),
  KEY `fk_messages_users1_idx` (`recipient`),
  KEY `fk_messages_users2_idx` (`sender`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `midi_files`
--

CREATE TABLE IF NOT EXISTS `midi_files` (
  `id_midi_file` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(500) DEFAULT NULL,
  `song_id` int(11) DEFAULT NULL,
  `voice_type_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_midi_file`),
  KEY `fk_midi_files_songs1_idx` (`song_id`),
  KEY `fk_midi_files_voice_type_enums1_idx` (`voice_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `musical_sheets`
--

CREATE TABLE IF NOT EXISTS `musical_sheets` (
  `id_musical_sheet` int(11) NOT NULL AUTO_INCREMENT,
  `description` text,
  `song_id` int(11) DEFAULT NULL,
  `file_url` varchar(512) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modfied` datetime NOT NULL,
  PRIMARY KEY (`id_musical_sheet`),
  KEY `fk_musical_sheets_songs1_idx` (`song_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `participations`
--

CREATE TABLE IF NOT EXISTS `participations` (
  `id_participation` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `notes` text,
  PRIMARY KEY (`id_participation`),
  KEY `fk_participants_users1_idx` (`user_id`),
  KEY `fk_participants_events1_idx` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rehearsals`
--

CREATE TABLE IF NOT EXISTS `rehearsals` (
  `id_rehearsal` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_rehearsal`),
  KEY `fk_rehearsals_events1_idx` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id_role` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` text,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
  `id_song` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `arranger` varchar(255) DEFAULT NULL,
  `composer` varchar(255) DEFAULT NULL,
  `song_category_id` int(11) NOT NULL,
  `tempo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_song`),
  KEY `fk_songs_song_categories1_idx` (`song_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `song_categories`
--

CREATE TABLE IF NOT EXISTS `song_categories` (
  `id_song_category` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id_song_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `song_key_signatures`
--

CREATE TABLE IF NOT EXISTS `song_key_signatures` (
  `id_song_key_signature` int(11) NOT NULL AUTO_INCREMENT,
  `song_id` int(11) NOT NULL,
  `key_signature_id` int(11) NOT NULL,
  PRIMARY KEY (`id_song_key_signature`),
  KEY `fk_song_key_signatures_key_signatures1_idx` (`key_signature_id`),
  KEY `fk_song_key_signatures_songs1_idx` (`song_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `mobile_phone` varchar(45) NOT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `birthday` date NOT NULL,
  `join_date` date NOT NULL,
  `voice_type_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `fk_users_roles_idx` (`role_id`),
  KEY `fk_users_voice_type_enums1_idx` (`voice_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(500) DEFAULT NULL,
  `song_id` int(11) NOT NULL,
  PRIMARY KEY (`id_video`),
  KEY `fk_videos_songs1_idx` (`song_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `voice_range_data`
--

CREATE TABLE IF NOT EXISTS `voice_range_data` (
  `id_voice_range_datum` int(11) NOT NULL AUTO_INCREMENT,
  `ambitus_date` date DEFAULT NULL,
  `lower_bound_note` varchar(3) DEFAULT NULL,
  `upper_bound_note` varchar(3) DEFAULT NULL,
  `timbre` varchar(100) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `assessor_id` int(11) NOT NULL,
  PRIMARY KEY (`id_voice_range_datum`),
  KEY `fk_voice_range_data_users1_idx` (`user_id`),
  KEY `fk_voice_range_data_users2_idx` (`assessor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `voice_types`
--

CREATE TABLE IF NOT EXISTS `voice_types` (
  `id_voice_type` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_voice_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `fk_activities_activity_type_enums1` FOREIGN KEY (`activity_type_id`) REFERENCES `activity_types` (`id_activity_type`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_activities_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `announcements`
--
ALTER TABLE `announcements`
  ADD CONSTRAINT `fk_announcements_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `fk_attendances_attendance_status_enums1` FOREIGN KEY (`attendance_status_id`) REFERENCES `attendance_status` (`id_attendance_status`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_attendances_rehearsals1` FOREIGN KEY (`rehearsal_id`) REFERENCES `rehearsals` (`id_rehearsal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_attendances_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cash_data`
--
ALTER TABLE `cash_data`
  ADD CONSTRAINT `fk_cash_data_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cash_data_users2` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `fk_events_event_type_enums1` FOREIGN KEY (`event_type_id`) REFERENCES `event_types` (`id_event_type`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_events_users1` FOREIGN KEY (`person_in_charge`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event_songs`
--
ALTER TABLE `event_songs`
  ADD CONSTRAINT `fk_event_songs_events1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id_event`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_event_songs_songs1` FOREIGN KEY (`song_id`) REFERENCES `songs` (`id_song`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `meetings`
--
ALTER TABLE `meetings`
  ADD CONSTRAINT `fk_meetings_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `fk_messages_users1` FOREIGN KEY (`recipient`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_messages_users2` FOREIGN KEY (`sender`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `midi_files`
--
ALTER TABLE `midi_files`
  ADD CONSTRAINT `fk_midi_files_voice_type_enums1` FOREIGN KEY (`voice_type_id`) REFERENCES `voice_types` (`id_voice_type`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_midi_files_songs1` FOREIGN KEY (`song_id`) REFERENCES `songs` (`id_song`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `musical_sheets`
--
ALTER TABLE `musical_sheets`
  ADD CONSTRAINT `fk_musical_sheets_songs1` FOREIGN KEY (`song_id`) REFERENCES `songs` (`id_song`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `participations`
--
ALTER TABLE `participations`
  ADD CONSTRAINT `fk_participants_events1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id_event`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_participants_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rehearsals`
--
ALTER TABLE `rehearsals`
  ADD CONSTRAINT `fk_rehearsals_events1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id_event`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `fk_songs_song_categories1` FOREIGN KEY (`song_category_id`) REFERENCES `song_categories` (`id_song_category`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `song_key_signatures`
--
ALTER TABLE `song_key_signatures`
  ADD CONSTRAINT `fk_song_key_signatures_key_signatures1` FOREIGN KEY (`key_signature_id`) REFERENCES `key_signatures` (`id_key_signature`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_song_key_signatures_songs1` FOREIGN KEY (`song_id`) REFERENCES `songs` (`id_song`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_voice_type_enums1` FOREIGN KEY (`voice_type_id`) REFERENCES `voice_types` (`id_voice_type`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id_role`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `fk_videos_songs1` FOREIGN KEY (`song_id`) REFERENCES `songs` (`id_song`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `voice_range_data`
--
ALTER TABLE `voice_range_data`
  ADD CONSTRAINT `fk_voice_range_data_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voice_range_data_users2` FOREIGN KEY (`assessor_id`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
