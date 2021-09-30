-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.7.33 - MySQL Community Server (GPL)
-- Операционная система:         Win64
-- HeidiSQL Версия:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Дамп структуры для таблица games.wbp_billings
DROP TABLE IF EXISTS `wbp_billings`;
CREATE TABLE IF NOT EXISTS `wbp_billings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `expiration_month` int(11) DEFAULT NULL,
  `expiration_year` int(11) DEFAULT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы games.wbp_billings: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_billings` DISABLE KEYS */;
INSERT INTO `wbp_billings` (`id`, `member_id`, `first_name`, `last_name`, `card_number`, `expiration_month`, `expiration_year`, `address`, `address1`, `city`, `country`, `state`, `zip`, `created_at`, `updated_at`) VALUES
	(1, 21, 'Retri', 'Svidder', '5168742725165918', 6, 2022, 'st.Lagommi 22', 'st.Lagommi 23', 'Rashpoo', 'US', 'CT', '21005', '2021-08-27 09:04:27', '2021-08-27 09:10:47'),
	(2, 21, 'Retri', 'Svider', '4731185616973563', 11, 2023, 'st.Fillarado 21', 'st.Fillarado 22', 'Arkham', 'US', 'CT', '20551', '2021-08-27 09:04:27', '2021-08-27 09:11:50'),
	(5, 20, 'Vasylenko', 'Mykola', '11111111111111114', 11, 24, 'Krasnolyudskaya 13', '', 'Hogvards', 'US', 'CT', '321', '2021-09-09 11:52:38', '2021-09-16 14:34:49');
/*!40000 ALTER TABLE `wbp_billings` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_config
DROP TABLE IF EXISTS `wbp_config`;
CREATE TABLE IF NOT EXISTS `wbp_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` text,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы games.wbp_config: 17 rows
/*!40000 ALTER TABLE `wbp_config` DISABLE KEYS */;
INSERT INTO `wbp_config` (`id`, `name`, `value`, `added_date`) VALUES
	(1, 'theme', 'l', '2020-08-29 11:57:48'),
	(2, 'title', 'Limitless Fit', '2020-08-29 12:04:18'),
	(3, 'login_logo_url', '/logo.png', '2020-08-29 12:09:30'),
	(4, 'logo_header_url', '/logo.png', '2020-08-29 14:10:57'),
	(5, 'phone', '234234234', '2020-08-29 16:58:30'),
	(8, 'email', 'test@test.test', '2020-08-29 16:59:06'),
	(9, 'address', 'some where', '2020-08-29 16:59:22'),
	(10, 'instagram', 'https://instagram.com', '2020-08-29 16:59:36'),
	(11, 'facebook', 'https://facebook.com', '2020-08-29 16:59:41'),
	(12, 'footer_description', 'Footer description - Footer description', '2020-08-29 16:59:57'),
	(13, 'copyright', '© 2021 limitless VIP, All Rights Reserved', '2020-08-29 17:00:06'),
	(14, 'telegram_token', NULL, '2020-08-30 15:30:07'),
	(15, 'telegram_bot_name', NULL, '2020-08-30 15:30:40'),
	(25, 'seo_description', 'Limitless Fit', '2020-11-11 14:44:45'),
	(26, 'twitter', 'https://twitter.com', '2020-11-25 15:08:53'),
	(19, 'seo_title', 'Limitless Fit', '2020-09-02 01:23:13'),
	(23, 'seo_keywords', 'Limitless Fit', '2020-09-02 01:24:22');
/*!40000 ALTER TABLE `wbp_config` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_excategories
DROP TABLE IF EXISTS `wbp_excategories`;
CREATE TABLE IF NOT EXISTS `wbp_excategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы games.wbp_excategories: ~15 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_excategories` DISABLE KEYS */;
INSERT INTO `wbp_excategories` (`id`, `title`, `color`, `sort`, `created_at`, `updated_at`) VALUES
	(1, 'Abs', 'orange', 1, '2021-08-04 17:27:44', '2021-09-13 05:43:19'),
	(2, 'Legs', 'orange', 12, '2021-08-04 17:28:42', '2021-09-17 05:14:57'),
	(3, 'Core', 'green', 9, '2021-08-04 17:29:08', '2021-09-17 05:13:12'),
	(4, 'Biceps', 'red', 5, '2021-08-04 17:29:29', '2021-09-17 05:11:20'),
	(5, 'Triceps', 'green', 14, '2021-08-04 17:29:47', '2021-09-17 05:15:43'),
	(6, 'Back', 'green', 3, '2021-09-03 08:27:20', '2021-09-17 05:09:48'),
	(9, 'Abs & Shoulders', 'red', 2, '2021-09-17 05:09:36', '2021-09-17 05:09:36'),
	(10, 'Back & Bi\'s', 'red', 4, '2021-09-17 05:10:17', '2021-09-17 05:10:17'),
	(11, 'Cardio', 'red', 6, '2021-09-17 05:11:49', '2021-09-17 05:11:49'),
	(12, 'Chest', 'red', 7, '2021-09-17 05:12:14', '2021-09-17 05:12:14'),
	(13, 'Chest & Tris', 'red', 8, '2021-09-17 05:12:39', '2021-09-17 05:12:56'),
	(14, 'Full Body', 'red', 10, '2021-09-17 05:13:54', '2021-09-17 05:13:54'),
	(15, 'Glutes', 'red', 11, '2021-09-17 05:14:16', '2021-09-17 05:14:36'),
	(16, 'Shoulders', 'red', 13, '2021-09-17 05:15:26', '2021-09-17 05:15:26'),
	(17, 'Calves', 'red', 6, '2021-09-17 05:17:23', '2021-09-17 05:17:23');
/*!40000 ALTER TABLE `wbp_excategories` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_exercises
DROP TABLE IF EXISTS `wbp_exercises`;
CREATE TABLE IF NOT EXISTS `wbp_exercises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_text` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `status` smallint(6) DEFAULT '1',
  `viewed` int(11) DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы games.wbp_exercises: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_exercises` DISABLE KEYS */;
INSERT INTO `wbp_exercises` (`id`, `title`, `time`, `short_text`, `video`, `seo_title`, `seo_description`, `seo_keywords`, `text`, `status`, `viewed`, `created_at`, `updated_at`) VALUES
	(1, 'exercise 2', '15 min', 'exercise 2 - qewrqe wdfg swadgf sadgf sdfg 222', '#', 'exercise 2   qewrqe wdfg swadgf sadgf sdfg', 'exercise 2   qewrqe wdfg swadgf sadgf sdfg', 'exercise 2   qewrqe wdfg swadgf sadgf sdfg', 'exercise 2 qewrqe wdfg swadgf sadgf sdfg', 0, 3, '2021-08-05 12:24:48', '2021-08-17 09:16:27'),
	(2, 'exercise 1', '10 min', 'exercise 1  short text', '#', 'exercise 1  Seo title Seo title Seo title Seo title', 'exercise 1  Seo descriptionSeo descriptionSeo descriptionSeo descriptionSeo description', 'exercise 1  Seo keywordsSeo keywordsSeo keywordsSeo keywords', 'exercise 1  Main text Main text Main text', 0, 7, '2021-08-05 12:51:44', '2021-08-17 09:16:11'),
	(3, 'UPPER BODY BEAUTIFIER - FOR BEGINNERS', '10 min', 'The first thing we are going to do is a "Side Wall Pushup"', 'https://content.jwplatform.com/videos/wzCrM9aK-U4GD8zbO.mp4', 'exercise 3  Seo title Seo title Seo title Seo title', 'exercise 3  Seo descriptionSeo descriptionSeo descriptionSeo descriptionSeo description', 'exercise 3  Seo keywordsSeo keywordsSeo keywordsSeo keywords', 'Next we are going to do "Chair Dip." grab a chair, preferably something with arms and that does not roll. You want to hold on the the arms and slide yourself so your butt is off the chair. Go as far down as you comfortably can. If you don\'t have a chair with arms you can put your hands/arms on the seat of the chair. ', 1, 24, '2021-08-05 12:51:44', '2021-09-10 11:17:31'),
	(4, 'exercise 4', '20 min', 'exercise 4  short text', 'https://content.jwplatform.com/videos/GcLmn7rP-i27f0fuP.mp4', 'exercise 4  Seo title Seo title Seo title Seo title', 'exercise 4  Seo descriptionSeo descriptionSeo descriptionSeo descriptionSeo description', 'exercise 4  Seo keywordsSeo keywordsSeo keywordsSeo keywords', 'exercise 4  Main text Main text Main text', 1, 66, '2021-08-05 12:51:44', '2021-08-25 07:59:34'),
	(5, 'exercise 5', '20 min', 'exercise 5  short text', 'https://content.jwplatform.com/videos/XuW9GAYS-U4GD8zbO.mp4', 'exercise 5  Seo title Seo title Seo title Seo title', 'exercise 5  Seo descriptionSeo descriptionSeo descriptionSeo descriptionSeo description', 'exercise 5  Seo keywordsSeo keywordsSeo keywordsSeo keywords', 'exercise 5  Main text Main text Main text', 1, 15, '2021-08-05 12:51:44', '2021-08-25 08:00:07'),
	(6, 'FAB ABS', '15 min', 'Double Leg Lifts is one of the best exercises you can perform to target your core.', 'https://content.jwplatform.com/videos/Qqn3DYuh-i27f0fuP.mp4', 'exercise 6  Seo title Seo title Seo title Seo title', 'exercise 6  Seo descriptionSeo descriptionSeo descriptionSeo descriptionSeo description', 'exercise 6  Seo keywordsSeo keywordsSeo keywordsSeo keywords', 'You ain\'t ever going to get that Sexy 6-Pack you\'ve been wanting.. so let\'s get started!\r\nLay flat on your back, place your hands in a triangle to place underneath your Butt to protect your back. Proceed, by raising your legs with your feet together in a 90 degree angle, then lower them back down but make sure you feet don\'t touch the ground. Transition into the next sequence by raising your legs up, pause for a few seconds at the top and slowly bring them back down (controlled movement) and hold for 5 seconds. It\'s hard.. but the results are worth it so don\'t give up!', 1, 22, '2021-08-05 12:51:44', '2021-09-09 08:49:43');
/*!40000 ALTER TABLE `wbp_exercises` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_exercises_excategories
DROP TABLE IF EXISTS `wbp_exercises_excategories`;
CREATE TABLE IF NOT EXISTS `wbp_exercises_excategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exercise_id` int(11) NOT NULL DEFAULT '0',
  `excategory_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы games.wbp_exercises_excategories: ~12 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_exercises_excategories` DISABLE KEYS */;
INSERT INTO `wbp_exercises_excategories` (`id`, `exercise_id`, `excategory_id`) VALUES
	(48, 2, 1),
	(49, 2, 4),
	(50, 1, 4),
	(51, 1, 5),
	(53, 4, 4),
	(54, 5, 2),
	(55, 5, 5),
	(65, 6, 1),
	(66, 6, 2),
	(67, 6, 5),
	(72, 3, 4),
	(73, 3, 5);
/*!40000 ALTER TABLE `wbp_exercises_excategories` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_files
DROP TABLE IF EXISTS `wbp_files`;
CREATE TABLE IF NOT EXISTS `wbp_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `type` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `deleted` smallint(6) DEFAULT NULL,
  `unique_id` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ext` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы games.wbp_files: ~16 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_files` DISABLE KEYS */;
INSERT INTO `wbp_files` (`id`, `item_id`, `type`, `status`, `deleted`, `unique_id`, `name`, `ext`, `created_at`, `updated_at`, `parent`, `sort`, `added_date`, `updated_date`) VALUES
	(1, 3, 'meal_pdf', 1, 0, 'FileUploader_612ce6bf1a3ef', '1.pdf', 'pdf', '2021-08-30 10:10:52', '2021-08-30 10:10:58', NULL, NULL, NULL, NULL),
	(2, 3, 'meal_pdf', 1, 0, 'FileUploader_612ce78ba6ebc', '1.pdf', 'pdf', '2021-08-30 10:13:38', '2021-08-30 10:13:40', NULL, NULL, NULL, NULL),
	(6, 6, 'meal_pdf', 1, 0, 'FileUploader_6144798678dd0', 'Limitless Lean Muscle Gains Diet (male).pdf', 'pdf', '2021-09-17 07:20:12', '2021-09-17 07:25:00', NULL, NULL, NULL, NULL),
	(7, 5, 'meal_pdf', 1, 0, 'FileUploader_6144882404265', 'Limitless Lean Bikini Gains Diet_Female.pdf', 'pdf', '2021-09-17 08:24:41', '2021-09-17 08:25:27', NULL, NULL, NULL, NULL),
	(8, 3, 'meal_pdf', 1, 0, 'FileUploader_61482eb7ebad7', 'Screenshot_2.png', 'png', '2021-09-20 03:51:14', '2021-09-20 03:51:17', NULL, NULL, NULL, NULL),
	(9, 4, 'meal_pdf', 1, 0, 'FileUploader_61483fc5a8135', 'Limitless Fat Loss Diet Decoded (female).pdf', 'pdf', '2021-09-20 04:08:24', '2021-09-20 04:08:28', NULL, NULL, NULL, NULL),
	(10, 7, 'meal_pdf', 1, 0, 'FileUploader_614842ca4b4d0', '21 Day Detox Plan.pdf', 'pdf', '2021-09-20 04:14:18', '2021-09-20 04:14:24', NULL, NULL, NULL, NULL),
	(11, 7, 'workout_pdf', 1, 0, 'FileUploader_614af0fa16537', 'WELCOME TO THE LIMITLESS BIKINI BODY PHASE 2-GYM EDITION.pdf', 'pdf', '2021-09-22 05:04:14', '2021-09-22 05:04:18', NULL, NULL, NULL, NULL),
	(12, 8, 'workout_pdf', 1, 0, 'FileUploader_614af2f403b4b', 'LIMITLESSBODY-HOME-EDITION-WOMENS.pdf', 'pdf', '2021-09-22 05:13:14', '2021-09-22 05:13:17', NULL, NULL, NULL, NULL),
	(13, 9, 'workout_pdf', 1, 0, 'FileUploader_614af4d7c1528', 'LIMITLESS Bountiful Booty - Home Edition- Phase 1.pdf', 'pdf', '2021-09-22 05:19:38', '2021-09-22 05:20:17', NULL, NULL, NULL, NULL),
	(14, 10, 'workout_pdf', 1, 0, 'FileUploader_614af6b31628c', 'LIMITLESS Bountiful Booty - Gym Edition- Phase 1.pdf', 'pdf', '2021-09-22 05:26:56', '2021-09-22 05:28:32', NULL, NULL, NULL, NULL),
	(15, 11, 'workout_pdf', 1, 0, 'FileUploader_614af7faf4095', 'LIMITLESS BIKINI BODY ABS.pdf', 'pdf', '2021-09-22 05:34:05', '2021-09-22 05:34:08', NULL, NULL, NULL, NULL),
	(16, 2, 'workout_pdf', 1, 0, 'FileUploader_614af9ec62fec', 'LIMITLESS BIKINI BODY ABS- GYM EDITION - Phase 1.pdf', 'pdf', '2021-09-22 05:43:25', '2021-09-22 05:43:29', NULL, NULL, NULL, NULL),
	(17, 1, 'workout_pdf', 1, 0, 'FileUploader_614b0d0ceb93e', '1.LIMITLESS BODY LEAN _ TONE-PHASE1.pdf', 'pdf', '2021-09-22 07:07:20', '2021-09-22 07:07:45', NULL, NULL, NULL, NULL),
	(18, 12, 'workout_pdf', 1, 0, 'FileUploader_614b14fa310a8', 'LIMITLESS WEIGHT LOSS Phase 2 (male)_V8.pdf', 'pdf', '2021-09-22 07:43:53', '2021-09-22 07:43:59', NULL, NULL, NULL, NULL),
	(19, 13, 'workout_pdf', 1, 0, 'FileUploader_614b17b84a819', 'LIMITLESS WEIGHT LOSS Phase 1 (male)_V8 fig.pdf', 'pdf', '2021-09-22 07:47:25', '2021-09-22 07:47:45', NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `wbp_files` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_images
DROP TABLE IF EXISTS `wbp_images`;
CREATE TABLE IF NOT EXISTS `wbp_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `type` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `deleted` smallint(6) DEFAULT NULL,
  `unique_id` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ext` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sort` int(11) DEFAULT NULL,
  `aspect_ratio` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=237 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы games.wbp_images: ~124 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_images` DISABLE KEYS */;
INSERT INTO `wbp_images` (`id`, `item_id`, `type`, `status`, `deleted`, `unique_id`, `name`, `ext`, `width`, `height`, `added_date`, `updated_date`, `sort`, `aspect_ratio`, `parent`) VALUES
	(1, 1, 'member_logo', 1, 0, 'ImageUploader_6113da93b5a8d', 'cross.png', 'png', 1071, 1036, '2021-08-11 17:11:48', '2021-08-11 17:36:58', NULL, '1.03378', NULL),
	(2, 1, 'employee_logo', 1, 0, 'ImageUploader_6114dc4abecd1', 'img-5.jpg', 'jpg', 600, 400, '2021-08-12 11:31:15', '2021-08-12 11:31:15', NULL, '1.50000', NULL),
	(3, 20, 'member_logo', 1, 0, 'ImageUploader_61168e46d4846', 'img-7.jpg', 'jpg', 600, 400, '2021-08-13 18:22:50', '2021-08-13 18:22:51', NULL, '1.50000', NULL),
	(4, 21, 'member_logo', 1, 0, 'ImageUploader_61168e553eb6e', 'img-5.jpg', 'jpg', 600, 400, '2021-08-13 18:23:05', '2021-08-13 18:23:05', NULL, '1.50000', NULL),
	(5, 7, 'progress_front', 1, 0, 'ImageUploader_61168e6ae23fa', 'img-1.jpg', 'jpg', 600, 400, '2021-08-13 18:23:30', '2021-08-13 18:23:31', NULL, '1.50000', NULL),
	(6, 7, 'progress_side', 1, 0, 'ImageUploader_61168e6ae248e', 'img-2.jpg', 'jpg', 600, 400, '2021-08-13 18:23:33', '2021-08-13 18:23:34', NULL, '1.50000', NULL),
	(7, 7, 'progress_back', 1, 0, 'ImageUploader_61168e6ae2513', 'img-3.jpg', 'jpg', 600, 400, '2021-08-13 18:23:37', '2021-08-13 18:23:37', NULL, '1.50000', NULL),
	(10, 1, 'excategory_img', 1, 0, 'ImageUploader_61168eadc82d8', 'img-23.jpg', 'jpg', 600, 400, '2021-08-13 18:24:34', '2021-08-13 18:24:35', NULL, '1.50000', NULL),
	(14, 1, 'supcategory_img', 1, 0, 'ImageUploader_61168f002e44e', 'img-34.jpg', 'jpg', 600, 400, '2021-08-13 18:26:01', '2021-08-13 18:26:01', NULL, '1.50000', NULL),
	(15, 1, 'profileImage', 1, 0, 'ImageUploader_61168f19212c4', 'img-57.jpg', 'jpg', 600, 400, '2021-08-13 18:26:28', '2021-08-13 18:26:29', NULL, '1.50000', NULL),
	(16, 54, 'member_logo', 1, 0, 'ImageUploader_611692067c3c8', 'cross.png', 'png', NULL, NULL, '2021-08-13 18:39:02', '2021-08-13 18:40:14', NULL, NULL, NULL),
	(17, 54, 'member_logo', 1, 0, 'ImageUploader_611692067c3c8', 'cross.png', 'png', 1071, 1036, '2021-08-13 18:39:24', '2021-08-13 18:40:17', NULL, '1.03378', NULL),
	(18, 5, 'workout_main', 1, 0, 'ImageUploader_61198fada1bb2', '8ad.png', 'png', 414, 896, '2021-08-16 01:06:56', '2021-08-16 01:06:56', NULL, '0.46205', NULL),
	(19, 4, 'workout_main', 1, 0, 'ImageUploader_611990094cb4d', '1124.png', 'png', 415, 896, '2021-08-16 01:07:12', '2021-08-16 01:07:13', NULL, '0.46317', NULL),
	(20, 3, 'workout_main', 1, 0, 'ImageUploader_611990180c106', '8ad.png', 'png', 414, 896, '2021-08-16 01:07:25', '2021-08-16 01:07:26', NULL, '0.46205', NULL),
	(26, 6, 'exercises_main', 1, 0, 'ImageUploader_611baf06f361e', 'Rectangle49.jpg', 'jpg', 400, 267, '2021-08-17 16:14:59', '2021-08-17 16:15:00', NULL, '1.49813', NULL),
	(27, 5, 'exercises_main', 1, 0, 'ImageUploader_611bb65ea6c5c', 'Rectangle491.jpg', 'jpg', 401, 267, '2021-08-17 16:15:20', '2021-08-17 16:15:20', NULL, '1.50187', NULL),
	(28, 4, 'exercises_main', 1, 0, 'ImageUploader_611bb66f81e20', 'Rectangle492.jpg', 'jpg', 401, 267, '2021-08-17 16:15:38', '2021-08-17 16:15:39', NULL, '1.50187', NULL),
	(29, 3, 'exercises_main', 1, 0, 'ImageUploader_611bb682b292c', 'Rectangle49.jpg', 'jpg', 400, 267, '2021-08-17 16:15:55', '2021-08-17 16:15:56', NULL, '1.49813', NULL),
	(30, 2, 'exercises_main', 1, 0, 'ImageUploader_611bb692e5181', 'Rectangle491.jpg', 'jpg', 401, 267, '2021-08-17 16:16:08', '2021-08-17 16:16:09', NULL, '1.50187', NULL),
	(31, 1, 'exercises_main', 1, 0, 'ImageUploader_611bb6a2598ff', 'Rectangle492.jpg', 'jpg', 401, 267, '2021-08-17 16:16:24', '2021-08-17 16:16:25', NULL, '1.50187', NULL),
	(50, 10, 'progress_front', 1, 0, 'ImageUploader_611cd3bb4f49d', 'front.png', 'png', 257, 594, '2021-08-18 12:34:50', '2021-08-18 12:34:50', NULL, '0.43266', NULL),
	(51, 10, 'progress_side', 1, 0, 'ImageUploader_611cd3bb4f7b9', 'side.png', 'png', 257, 593, '2021-08-18 12:34:52', '2021-08-18 12:34:52', NULL, '0.43339', NULL),
	(53, 10, 'progress_back', 1, 0, 'ImageUploader_611cd4ab732d6', 'back.png', 'png', 258, 592, '2021-08-18 12:36:51', '2021-08-18 12:36:51', NULL, '0.43581', NULL),
	(55, 9, 'progress_front', 1, 0, 'ImageUploader_611cdd184fdbe', 'front1.png', 'png', 413, 801, '2021-08-18 13:14:55', '2021-08-18 13:14:56', NULL, '0.51561', NULL),
	(56, 9, 'progress_side', 1, 0, 'ImageUploader_611cdd18500b4', 'side1.png', 'png', 413, 801, '2021-08-18 13:14:57', '2021-08-18 13:14:58', NULL, '0.51561', NULL),
	(57, 9, 'progress_back', 1, 0, 'ImageUploader_611cdd1850136', 'back1.png', 'png', 413, 801, '2021-08-18 13:15:00', '2021-08-18 13:15:00', NULL, '0.51561', NULL),
	(60, 1, 'supplement_main', 1, 0, 'ImageUploader_61264b7a8b8fb', 'Product_Image.png', 'png', 295, 267, '2021-08-25 16:54:52', '2021-08-25 16:54:52', NULL, '1.10487', NULL),
	(61, 2, 'supplement_main', 1, 0, 'ImageUploader_61264bba198d8', 'Product_Image_1.png', 'png', 295, 267, '2021-08-25 16:55:22', '2021-08-25 16:55:23', NULL, '1.10487', NULL),
	(62, 20, 'member_logo', 1, 0, 'ImageUploader_6128a66571b72', 'img-3.jpg', 'jpg', 600, 400, '2021-08-27 11:46:38', '2021-08-27 11:46:39', NULL, '1.50000', NULL),
	(63, 20, 'member_logo', 1, 0, 'ImageUploader_6128a676953e8', 'img-7.jpg', 'jpg', 600, 400, '2021-08-27 11:46:55', '2021-08-27 11:46:55', NULL, '1.50000', NULL),
	(64, 20, 'progress_back', 1, 0, 'ImageUploader_612e56bd6e494', 'IMG-20210827-WA0015.jpg', 'jpg', 2048, 1536, '2021-08-31 19:21:33', '2021-08-31 19:21:34', NULL, '1.33333', NULL),
	(65, 64, 'member_logo', 1, 0, 'ImageUploader_612f4897e526f', 'chewbacca-0-682x1024[1].jpg', 'jpg', 682, 1024, '2021-09-01 12:32:50', '2021-09-01 12:32:51', NULL, '0.66602', NULL),
	(66, 21, 'progress_front', 1, 0, 'ImageUploader_612f48d2a2d30', 'chewbacca-0-682x1024[2].jpg', 'jpg', 682, 1024, '2021-09-01 12:33:11', '2021-09-01 12:33:25', NULL, '0.66602', NULL),
	(67, 21, 'progress_side', 1, 0, 'ImageUploader_612f48d2a3052', 'chewbacca-0-682x1024[1].jpg', 'jpg', 682, 1024, '2021-09-01 12:33:18', '2021-09-01 12:33:25', NULL, '0.66602', NULL),
	(68, 21, 'progress_back', 1, 0, 'ImageUploader_612f48d2a30e3', 'chewbacca-0-682x1024[2].jpg', 'jpg', 682, 1024, '2021-09-01 12:33:21', '2021-09-01 12:33:25', NULL, '0.66602', NULL),
	(69, 68, 'member_logo', 1, 0, 'ImageUploader_612f81c998db3', '1594797893_content_700x455.jpg', 'jpg', 700, 455, '2021-09-01 16:36:18', '2021-09-01 16:36:19', NULL, '1.53846', NULL),
	(70, 70, 'member_logo', 1, 0, 'ImageUploader_6130ae6b1a72c', '12.jpg', 'jpg', 1920, 1080, '2021-09-02 14:06:27', '2021-09-02 14:06:28', NULL, '1.77778', NULL),
	(71, NULL, 'progress_front', 1, 0, 'ImageUploader_6130b94d9a253', '12.jpg', 'jpg', 1920, 1080, '2021-09-02 14:45:22', '2021-09-02 14:45:23', NULL, '1.77778', NULL),
	(72, NULL, 'progress_back', 1, 0, 'ImageUploader_6130b94d9a606', '12.jpg', 'jpg', 1920, 1080, '2021-09-02 14:45:52', '2021-09-02 14:45:52', NULL, '1.77778', NULL),
	(73, 63, 'member_logo', 1, 0, 'ImageUploader_6131dbb0943c4', 'cross.png', 'png', 1071, 1036, '2021-09-03 11:24:41', '2021-09-03 11:24:42', NULL, '1.03378', NULL),
	(75, 15, 'progress_front', 1, 0, 'ImageUploader_6135db791b79d', 'img-photo-ava-2.jpg', 'jpg', 1920, 1080, '2021-09-06 12:12:33', '2021-09-06 12:12:34', NULL, '1.77778', NULL),
	(76, 15, 'progress_side', 1, 0, 'ImageUploader_6135db791ba91', 'img-photo-ava.jpg', 'jpg', 1920, 1080, '2021-09-06 12:12:37', '2021-09-06 12:12:38', NULL, '1.77778', NULL),
	(77, 15, 'progress_back', 1, 0, 'ImageUploader_6135db791bb18', 'img-photo-ava-3.jpg', 'jpg', 1920, 1080, '2021-09-06 12:12:40', '2021-09-06 12:12:40', NULL, '1.77778', NULL),
	(79, NULL, 'exercises_main', 1, 0, 'ImageUploader_6139f8658f72f', 'trqhifo3-1280.jpg', 'jpg', 1280, 720, '2021-09-09 15:10:39', '2021-09-09 15:10:40', NULL, '1.77778', NULL),
	(80, 63, 'member_logo', 1, 0, 'ImageUploader_613a173738a41', 'image.jpg', 'jpg', 3088, 2316, '2021-09-09 17:16:57', '2021-09-09 17:16:58', NULL, '1.33333', NULL),
	(83, 39, 'progress_front', 1, 0, 'ImageUploader_61419f378edce', '16316905628147374629011065415007.jpg', 'jpg', 2944, 2208, '2021-09-15 10:23:23', '2021-09-15 10:23:25', NULL, '1.33333', NULL),
	(84, 39, 'progress_side', 1, 0, 'ImageUploader_61419f378f092', '16316905913761513061846028739982.jpg', 'jpg', 2944, 2208, '2021-09-15 10:23:53', '2021-09-15 10:23:54', NULL, '1.33333', NULL),
	(85, 39, 'progress_back', 1, 0, 'ImageUploader_61419f378f0ed', '163169063805633013699784203717.jpg', 'jpg', 2944, 2208, '2021-09-15 10:25:24', '2021-09-15 10:25:25', NULL, '1.33333', NULL),
	(89, 41, 'progress_side', 1, 0, 'ImageUploader_6141a0a9c3144', 'IMG-831ef43932a84819b3693db6766a50ba-V.jpg', 'jpg', 854, 481, '2021-09-15 10:29:49', '2021-09-15 10:29:50', NULL, '1.77547', NULL),
	(90, 41, 'progress_front', 1, 0, 'ImageUploader_6141a0a9c2e2b', 'IMG-ef5eddf56329d32c51a7df9bb3001fc2-V.jpg', 'jpg', 1200, 1600, '2021-09-15 10:31:12', '2021-09-15 10:31:13', NULL, '0.75000', NULL),
	(91, 41, 'progress_back', 1, 0, 'ImageUploader_6141a0a9c31ad', 'IMG-a76d8eb597adf24d34798996d02179df-V.jpg', 'jpg', 481, 854, '2021-09-15 10:31:49', '2021-09-15 10:31:50', NULL, '0.56323', NULL),
	(94, 40, 'progress_front', 1, 0, 'ImageUploader_6141aa0bd7428', 'image.jpg', 'jpg', 3088, 2320, '2021-09-15 11:09:14', '2021-09-15 11:09:15', NULL, '1.33103', NULL),
	(95, 81, 'member_logo', 1, 0, 'ImageUploader_6143307d95da6', 'IMG-f7b2b6ce9bbf7664daa300c26599662f-V.jpg', 'jpg', 854, 481, '2021-09-16 14:54:52', '2021-09-16 14:54:53', NULL, '1.77547', NULL),
	(96, 81, 'member_logo', 1, 0, 'ImageUploader_614330b50ebad', 'IMG-e13204f63bb3065cdede39ad5692ee0a-V.jpg', 'jpg', 900, 1600, '2021-09-16 14:56:13', '2021-09-16 14:56:13', NULL, '0.56250', NULL),
	(97, 81, 'member_logo', 1, 0, 'ImageUploader_614330b50ebad', 'IMG-dc37f81ae00846037ac4c34f7b2ce3a6-V.jpg', 'jpg', 1348, 1800, '2021-09-16 14:58:02', '2021-09-16 14:58:03', NULL, '0.74889', NULL),
	(98, 81, 'member_logo', 1, 0, 'ImageUploader_614330b50ebad', '20210905_104749.jpg', 'jpg', 4032, 2268, '2021-09-16 14:58:35', '2021-09-16 14:58:36', NULL, '1.77778', NULL),
	(100, 79, 'member_logo', 1, 0, 'ImageUploader_61435cca6af66', 'Allison and Saige.jpeg', 'jpeg', 1920, 1080, '2021-09-16 18:03:51', '2021-09-16 18:03:52', NULL, '1.77778', NULL),
	(110, 63, 'member_logo', 1, 0, 'ImageUploader_614360030ff88', 'cross.png', 'png', 1071, 1036, '2021-09-16 18:17:35', '2021-09-16 18:17:36', NULL, '1.03378', NULL),
	(111, 73, 'member_logo', 1, 0, 'ImageUploader_6143701257f93', '20210829_175717.jpg', 'jpg', 4608, 3456, '2021-09-16 19:26:17', '2021-09-16 19:26:18', NULL, '1.33333', NULL),
	(112, 47, 'progress_front', 1, 0, 'ImageUploader_6143704180d08', '16318096101186373372341579960259.jpg', 'jpg', 4608, 3456, '2021-09-16 19:27:57', '2021-09-16 19:28:02', NULL, '1.33333', NULL),
	(113, 47, 'progress_side', 1, 0, 'ImageUploader_6143704180fc0', '16318096462371729128649878233855.jpg', 'jpg', 4608, 3456, '2021-09-16 19:28:03', '2021-09-16 19:28:04', NULL, '1.33333', NULL),
	(114, 47, 'progress_back', 1, 0, 'ImageUploader_6143704181042', '16318097199837602244868135870665.jpg', 'jpg', 4608, 3456, '2021-09-16 19:29:30', '2021-09-16 19:29:31', NULL, '1.33333', NULL),
	(115, 63, 'member_logo', 1, 0, 'ImageUploader_61444894baa12', 'image.jpg', 'jpg', 3088, 2316, '2021-09-17 10:50:12', '2021-09-17 10:50:13', NULL, '1.33333', NULL),
	(116, 63, 'member_logo', 1, 0, 'ImageUploader_61444b09c11fe', 'image.jpg', 'jpg', 3088, 2316, '2021-09-17 11:00:24', '2021-09-17 11:00:25', NULL, '1.33333', NULL),
	(117, 63, 'member_logo', 1, 0, 'ImageUploader_61444ffd9e592', 'image.jpg', 'jpg', 3088, 2316, '2021-09-17 11:21:35', '2021-09-17 11:21:36', NULL, '1.33333', NULL),
	(118, 63, 'member_logo', 1, 0, 'ImageUploader_6144501b84629', 'cross.png', 'png', 1071, 1036, '2021-09-17 11:22:40', '2021-09-17 11:22:41', NULL, '1.03378', NULL),
	(119, 63, 'member_logo', 1, 0, 'ImageUploader_6144506d77be8', 'Andro-Apple.png', 'png', 1200, 1400, '2021-09-17 11:23:17', '2021-09-17 11:23:18', NULL, '0.85714', NULL),
	(120, 81, 'member_logo', 1, 0, 'ImageUploader_614450bf07b3b', '20210916_151217.jpg', 'jpg', 4032, 2268, '2021-09-17 11:25:34', '2021-09-17 11:25:35', NULL, '1.77778', NULL),
	(121, 81, 'member_logo', 1, 0, 'ImageUploader_614450bf07b3b', '16318671664669165063106995171337.jpg', 'jpg', 4032, 2268, '2021-09-17 11:26:37', '2021-09-17 11:26:38', NULL, '1.77778', NULL),
	(133, 99, 'member_logo', 1, 0, 'ImageUploader_61484e3582178', 'Photo.jpg', 'jpg', 1280, 960, '2021-09-20 12:03:01', '2021-09-20 12:03:02', NULL, '1.33333', NULL),
	(134, 80, 'member_logo', 1, 0, 'ImageUploader_61484f08748ea', 'image.jpg', 'jpg', 3088, 2320, '2021-09-20 12:06:49', '2021-09-20 12:06:49', NULL, '1.33103', NULL),
	(151, 80, 'member_logo', 1, 0, 'ImageUploader_61485b4fd432b', 'image.jpg', 'jpg', 3088, 2320, '2021-09-20 12:59:01', '2021-09-20 12:59:02', NULL, '1.33103', NULL),
	(152, 80, 'member_logo', 1, 0, 'ImageUploader_61485b4fd432b', 'image.jpg', 'jpg', 3088, 2320, '2021-09-20 12:59:29', '2021-09-20 12:59:30', NULL, '1.33103', NULL),
	(165, 61, 'progress_front', 1, 0, 'ImageUploader_61487bfe4108e', '94E47D50-235D-4515-A8CD-12B3C35A751B.jpeg', 'jpeg', 3088, 2320, '2021-09-20 15:18:20', '2021-09-20 15:18:21', NULL, '1.33103', NULL),
	(166, 61, 'progress_side', 1, 0, 'ImageUploader_61487bfe413a6', '784F7D45-5A2D-435E-992F-078BD9986F14.jpeg', 'jpeg', 3088, 2320, '2021-09-20 15:18:24', '2021-09-20 15:18:25', NULL, '1.33103', NULL),
	(167, 61, 'progress_back', 1, 0, 'ImageUploader_61487bfe41438', '3610F7CF-5F8A-4728-8E50-6CDF46B1D0EA.jpeg', 'jpeg', 3088, 2320, '2021-09-20 15:18:27', '2021-09-20 15:18:28', NULL, '1.33103', NULL),
	(168, 38, 'progress_front', 1, 0, 'ImageUploader_61487ceb38af4', '6EA6367C-1DE1-449F-8788-BFBC3D646077.jpeg', 'jpeg', 3088, 2320, '2021-09-20 15:22:13', '2021-09-20 15:22:13', NULL, '1.33103', NULL),
	(170, 38, 'progress_side', 1, 0, 'ImageUploader_61487e254cde7', 'B1759519-415B-407A-BE4E-B8D95330EF51.jpeg', 'jpeg', 3088, 2320, '2021-09-20 15:27:51', '2021-09-20 15:27:51', NULL, '1.33103', NULL),
	(171, 38, 'progress_back', 1, 0, 'ImageUploader_61487e254ce66', 'EFC3D91A-DEEA-41AF-ADE9-8951626D44B0.jpeg', 'jpeg', 3088, 2320, '2021-09-20 15:27:53', '2021-09-20 15:27:54', NULL, '1.33103', NULL),
	(172, 35, 'progress_front', 1, 0, 'ImageUploader_6149983dccc5c', 'lmgd1.png', 'png', 415, 828, '2021-09-21 11:31:03', '2021-09-21 11:31:08', NULL, '0.50121', NULL),
	(173, NULL, 'progress_side', 1, 0, 'ImageUploader_6149c08e29757', 'Screenshot_2.png', 'png', 400, 792, '2021-09-21 14:23:20', '2021-09-21 14:23:20', NULL, '0.50505', NULL),
	(174, 62, 'progress_front', 1, 0, 'ImageUploader_6149dc514d9b4', 'taking-duck-face-selfie-YYWRRGF.jpg', 'jpg', 5996, 4002, '2021-09-21 16:21:41', '2021-09-21 16:21:42', NULL, '1.49825', NULL),
	(175, 64, 'progress_front', 1, 0, 'ImageUploader_6149d9760f23d', '20210919_123022.jpg', 'jpg', 4608, 3456, '2021-09-21 16:24:54', '2021-09-21 16:25:45', NULL, '1.33333', NULL),
	(176, 64, 'progress_side', 1, 0, 'ImageUploader_6149d9760f518', '20210919_123012.jpg', 'jpg', 4608, 3456, '2021-09-21 16:25:08', '2021-09-21 16:25:45', NULL, '1.33333', NULL),
	(178, 64, 'progress_back', 1, 0, 'ImageUploader_6149d9760f580', '20210919_123009.jpg', 'jpg', 4608, 3456, '2021-09-21 16:25:33', '2021-09-21 16:25:45', NULL, '1.33333', NULL),
	(179, 62, 'progress_side', 1, 0, 'ImageUploader_6149dc514dc91', 'AdobeStock_317465456_Preview.jpeg', 'jpeg', 1000, 667, '2021-09-21 16:31:44', '2021-09-21 16:31:44', NULL, '1.49925', NULL),
	(180, 62, 'progress_back', 1, 0, 'ImageUploader_6149dc514dcf6', 'AdobeStock_443440635_Preview.jpeg', 'jpeg', 1000, 667, '2021-09-21 16:31:49', '2021-09-21 16:31:49', NULL, '1.49925', NULL),
	(181, 73, 'member_logo', 1, 0, 'ImageUploader_6149e13f3fd14', '20210919_123022.jpg', 'jpg', 4608, 3456, '2021-09-21 16:42:38', '2021-09-21 16:42:39', NULL, '1.33333', NULL),
	(182, 6, 'meal_main', 1, 0, 'ImageUploader_614acda6c361c', 'CoverImage.png', 'png', 413, 896, '2021-09-22 09:33:18', '2021-09-22 09:33:18', NULL, '0.46094', NULL),
	(183, 7, 'meal_main', 1, 0, 'ImageUploader_614ace6257ec3', 'CoverImage.png', 'png', 414, 896, '2021-09-22 09:35:21', '2021-09-22 09:35:22', NULL, '0.46205', NULL),
	(184, 5, 'meal_main', 1, 0, 'ImageUploader_614acef6bc352', 'CoverImage.png', 'png', 414, 896, '2021-09-22 09:37:44', '2021-09-22 09:37:44', NULL, '0.46205', NULL),
	(185, 4, 'meal_main', 1, 0, 'ImageUploader_614acfcdda77b', 'CoverImage.png', 'png', 414, 896, '2021-09-22 09:41:32', '2021-09-22 09:41:33', NULL, '0.46205', NULL),
	(186, 3, 'meal_main', 1, 0, 'ImageUploader_614ad085ddcb3', 'CoverImage.png', 'png', 414, 896, '2021-09-22 09:44:25', '2021-09-22 09:44:26', NULL, '0.46205', NULL),
	(187, 7, 'workout_pdf', 1, 0, 'ImageUploader_614add0f5ba40', 'WELCOME TO THE LIMITLESS BIKINI BODY PHASE 2-GYM EDITION.pdf', 'pdf', NULL, NULL, '2021-09-22 10:40:20', '2021-09-22 10:40:20', NULL, NULL, NULL),
	(202, 7, 'workout_main', 1, 0, 'ImageUploader_614b11348727f', 'CoverImage.jpg', 'jpg', 414, 896, '2021-09-22 14:19:41', '2021-09-22 14:19:42', NULL, '0.46205', NULL),
	(203, 7, 'workout_pdf_image', 1, 0, 'ImageUploader_614b11348731c', 'CoverPage2.jpg', 'jpg', 414, 896, '2021-09-22 14:19:49', '2021-09-22 14:19:50', NULL, '0.46205', NULL),
	(204, 8, 'workout_main', 1, 0, 'ImageUploader_614b11d015dc9', 'CoverImage2.jpg', 'jpg', 414, 896, '2021-09-22 14:22:09', '2021-09-22 14:22:09', NULL, '0.46205', NULL),
	(205, 8, 'workout_pdf_image', 1, 0, 'ImageUploader_614b11d015e6f', 'CoverPage2.jpg', 'jpg', 414, 896, '2021-09-22 14:22:17', '2021-09-22 14:22:18', NULL, '0.46205', NULL),
	(206, 9, 'workout_main', 1, 0, 'ImageUploader_614b12269b368', 'CoverImage.jpg', 'jpg', 413, 896, '2021-09-22 14:27:24', '2021-09-22 14:27:25', NULL, '0.46094', NULL),
	(207, 9, 'workout_pdf_image', 1, 0, 'ImageUploader_614b12269b406', 'CoverPage2.jpg', 'jpg', 414, 896, '2021-09-22 14:27:32', '2021-09-22 14:27:33', NULL, '0.46205', NULL),
	(208, 10, 'workout_main', 1, 0, 'ImageUploader_614b1390a0be4', 'CoverImage2.jpg', 'jpg', 414, 896, '2021-09-22 14:29:32', '2021-09-22 14:29:33', NULL, '0.46205', NULL),
	(209, 10, 'workout_pdf_image', 1, 0, 'ImageUploader_614b1390a0c7e', 'CoverPage2.jpg', 'jpg', 414, 896, '2021-09-22 14:29:37', '2021-09-22 14:29:37', NULL, '0.46205', NULL),
	(210, 11, 'workout_main', 1, 0, 'ImageUploader_614b13ce43429', 'CoverImage2.jpg', 'jpg', 414, 895, '2021-09-22 14:30:39', '2021-09-22 14:30:40', NULL, '0.46257', NULL),
	(211, 11, 'workout_pdf_image', 1, 0, 'ImageUploader_614b13ce434b7', 'CoverPage2.jpg', 'jpg', 414, 896, '2021-09-22 14:30:44', '2021-09-22 14:30:45', NULL, '0.46205', NULL),
	(212, 2, 'workout_main', 1, 0, 'ImageUploader_614b141fc72f6', 'CoverImage2.jpg', 'jpg', 414, 896, '2021-09-22 14:31:59', '2021-09-22 14:32:00', NULL, '0.46205', NULL),
	(213, 2, 'workout_pdf_image', 1, 0, 'ImageUploader_614b141fc7390', 'CoverPage2.jpg', 'jpg', 414, 896, '2021-09-22 14:32:00', '2021-09-22 14:32:00', NULL, '0.46205', NULL),
	(214, 1, 'workout_main', 1, 0, 'ImageUploader_614b146c72651', 'Day32.jpg', 'jpg', 414, 896, '2021-09-22 14:33:48', '2021-09-22 14:33:49', NULL, '0.46205', NULL),
	(215, 1, 'workout_pdf_image', 1, 0, 'ImageUploader_614b146c726e0', 'CoverPage22.jpg', 'jpg', 414, 896, '2021-09-22 14:33:51', '2021-09-22 14:33:56', NULL, '0.46205', NULL),
	(216, 12, 'workout_main', 1, 0, 'ImageUploader_614b14fa30f8c', 'CoverImage2.jpg', 'jpg', 414, 896, '2021-09-22 14:39:59', '2021-09-22 14:43:59', NULL, '0.46205', NULL),
	(217, 12, 'workout_pdf_image', 1, 0, 'ImageUploader_614b14fa31024', 'CoverPage2.jpg', 'jpg', 414, 896, '2021-09-22 14:40:04', '2021-09-22 14:43:59', NULL, '0.46205', NULL),
	(218, 13, 'workout_main', 1, 0, 'ImageUploader_614b17b84a703', 'CoverImage2.jpg', 'jpg', 414, 896, '2021-09-22 14:47:13', '2021-09-22 14:47:14', NULL, '0.46205', NULL),
	(219, 13, 'workout_pdf_image', 1, 0, 'ImageUploader_614b17b84a798', 'CoverPage2.jpg', 'jpg', 414, 896, '2021-09-22 14:47:16', '2021-09-22 14:47:20', NULL, '0.46205', NULL),
	(220, 25, 'progress_front', 1, 0, 'ImageUploader_614c6e948519f', '44827911_757299531276531_4912147652993062677_n.jpg', 'jpg', 1080, 1080, '2021-09-23 15:10:12', '2021-09-23 15:14:08', NULL, '1.00000', NULL),
	(221, 25, 'progress_side', 1, 0, 'ImageUploader_614c6e9485bbb', '20210409_133238.JPG', 'jpg', 4032, 2268, '2021-09-23 15:11:22', '2021-09-23 15:14:08', NULL, '1.77778', NULL),
	(222, 25, 'progress_back', 1, 0, 'ImageUploader_614c6e9485c50', 'photo-1554080353-a576cf803bda.jpg', 'jpg', 1000, 1500, '2021-09-23 15:13:48', '2021-09-23 15:14:08', NULL, '0.66667', NULL),
	(223, 20, 'member_logo', 1, 0, 'ImageUploader_614c6f952bdb8', '44827911_757299531276531_4912147652993062677_n.jpg', 'jpg', 1080, 1080, '2021-09-23 15:14:21', '2021-09-23 15:14:22', NULL, '1.00000', NULL),
	(224, 8, 'progress_front', 1, 0, 'ImageUploader_614c702475b68', '44827911_757299531276531_4912147652993062677_n.jpg', 'jpg', 1080, 1080, '2021-09-23 15:16:50', '2021-09-23 15:16:51', NULL, '1.00000', NULL),
	(225, 8, 'progress_side', 1, 0, 'ImageUploader_614c70247610c', '20210410_181726.jpeg', 'jpeg', 4032, 2268, '2021-09-23 15:17:02', '2021-09-23 15:17:03', NULL, '1.77778', NULL),
	(228, NULL, 'progress_front', 1, 0, 'ImageUploader_614c775868157', '44827911_757299531276531_4912147652993062677_n.jpg', 'jpg', 1080, 1080, '2021-09-23 15:50:26', '2021-09-23 15:50:27', NULL, '1.00000', NULL),
	(233, 27, 'progress_front', 1, 0, 'ImageUploader_614c78764d532', '44827911_757299531276531_4912147652993062677_n.jpg', 'jpg', 1080, 1080, '2021-09-23 15:59:04', '2021-09-23 16:00:20', NULL, '1.00000', NULL),
	(234, 27, 'progress_side', 1, 0, 'ImageUploader_614c78764dc84', '44827911_757299531276531_4912147652993062677_n.jpg', 'jpg', 1080, 1080, '2021-09-23 16:00:14', '2021-09-23 16:00:20', NULL, '1.00000', NULL),
	(235, 8, 'progress_back', 1, 0, 'ImageUploader_614c7a6707c2b', '44827911_757299531276531_4912147652993062677_n.jpg', 'jpg', 1080, 1080, '2021-09-23 16:00:28', '2021-09-23 16:00:29', NULL, '1.00000', NULL),
	(236, NULL, 'progress_front', 1, 0, 'ImageUploader_61516ac49b10e', 'photo-1554080353-a576cf803bda.jpg', 'jpg', 1000, 1500, '2021-09-27 09:55:06', '2021-09-27 09:55:06', NULL, '0.66667', NULL);
/*!40000 ALTER TABLE `wbp_images` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_images_sizes
DROP TABLE IF EXISTS `wbp_images_sizes`;
CREATE TABLE IF NOT EXISTS `wbp_images_sizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aspect_ratio` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы games.wbp_images_sizes: ~24 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_images_sizes` DISABLE KEYS */;
INSERT INTO `wbp_images_sizes` (`id`, `title`, `aspect_ratio`, `status`, `added_date`, `updated_date`, `type`) VALUES
	(1, '123x123', '1.00000', NULL, '2021-08-11 10:36:58', '2021-08-11 10:36:58', 'member_logo'),
	(2, '123x123', '1.00000', NULL, '2021-08-12 04:31:15', '2021-08-12 04:31:15', 'employee_logo'),
	(3, '123x123', '1.00000', NULL, '2021-08-13 11:23:31', '2021-08-13 11:23:31', 'progress_front'),
	(4, '123x123', '1.00000', NULL, '2021-08-13 11:23:34', '2021-08-13 11:23:34', 'progress_side'),
	(5, '123x123', '1.00000', NULL, '2021-08-13 11:23:37', '2021-08-13 11:23:37', 'progress_back'),
	(6, '123x123', '1.00000', NULL, '2021-08-13 11:24:03', '2021-08-13 11:24:03', 'workout_main'),
	(7, '123x123', '1.00000', NULL, '2021-08-13 11:24:20', '2021-08-13 11:24:20', 'exercises_main'),
	(8, '123x123', '1.00000', NULL, '2021-08-13 11:24:35', '2021-08-13 11:24:35', 'excategory_img'),
	(9, '123x123', '1.00000', NULL, '2021-08-13 11:25:02', '2021-08-13 11:25:02', 'meal_main'),
	(10, '123x123', '1.00000', NULL, '2021-08-13 11:25:20', '2021-08-13 11:25:20', 'mecategory_img'),
	(11, '123x123', '1.00000', NULL, '2021-08-13 11:25:44', '2021-08-13 11:25:44', 'supplement_main'),
	(12, '123x123', '1.00000', NULL, '2021-08-13 11:26:01', '2021-08-13 11:26:01', 'supcategory_img'),
	(13, '123x123', '1.00000', NULL, '2021-08-13 11:26:29', '2021-08-13 11:26:29', 'profileImage'),
	(14, '250x440', '0.56818', NULL, '2021-08-18 05:22:35', '2021-08-18 05:22:35', 'progress_front'),
	(15, '250x440', '0.56818', NULL, '2021-08-18 05:30:56', '2021-08-18 05:30:56', 'progress_side'),
	(16, '260x450', '0.57778', NULL, '2021-08-18 05:31:05', '2021-08-18 05:31:05', 'progress_side'),
	(17, '260x330', '0.78788', NULL, '2021-08-18 05:35:52', '2021-08-18 05:35:52', 'progress_front'),
	(18, '260x330', '0.78788', NULL, '2021-08-18 05:35:53', '2021-08-18 05:35:53', 'progress_side'),
	(19, '65x80', '0.81250', NULL, '2021-08-18 05:35:53', '2021-08-18 05:35:53', 'progress_front'),
	(20, '65x80', '0.81250', NULL, '2021-08-18 05:35:53', '2021-08-18 05:35:53', 'progress_side'),
	(21, '260x450', '0.57778', NULL, '2021-08-18 05:36:51', '2021-08-18 05:36:51', 'progress_back'),
	(22, '260x330', '0.78788', NULL, '2021-08-18 05:37:01', '2021-08-18 05:37:01', 'progress_back'),
	(23, '65x80', '0.81250', NULL, '2021-08-18 05:37:01', '2021-08-18 05:37:01', 'progress_back'),
	(24, '123x123', '1.00000', NULL, '2021-09-22 05:01:56', '2021-09-22 05:01:56', 'workout_pdf_image');
/*!40000 ALTER TABLE `wbp_images_sizes` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_mail_log
DROP TABLE IF EXISTS `wbp_mail_log`;
CREATE TABLE IF NOT EXISTS `wbp_mail_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_id` int(11) DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `sentUrl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attaches` text COLLATE utf8mb4_unicode_ci,
  `raw` text COLLATE utf8mb4_unicode_ci,
  `logger_dump` text COLLATE utf8mb4_unicode_ci,
  `result` text COLLATE utf8mb4_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы games.wbp_mail_log: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_mail_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `wbp_mail_log` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_meals
DROP TABLE IF EXISTS `wbp_meals`;
CREATE TABLE IF NOT EXISTS `wbp_meals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_text` varchar(245) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `seo_title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goal` smallint(6) DEFAULT '0',
  `gender` smallint(6) DEFAULT '0',
  `status` smallint(6) DEFAULT '0',
  `viewed` int(11) DEFAULT '0',
  `phase` smallint(6) DEFAULT '1',
  `price` float DEFAULT '0',
  `sale_price` float DEFAULT '0',
  `percent` smallint(6) DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы games.wbp_meals: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_meals` DISABLE KEYS */;
INSERT INTO `wbp_meals` (`id`, `title`, `short_text`, `text`, `seo_title`, `seo_description`, `seo_keywords`, `goal`, `gender`, `status`, `viewed`, `phase`, `price`, `sale_price`, `percent`, `created_at`, `updated_at`) VALUES
	(3, 'Fat Loss Diet For Him', 'They say, for a reason. It’s true. See, we all have abs, but they are usually hidden beneath layers of fat. The only way to reveal them is to decrease body fat by maintaining a calorie over time. The only way to reveal them is to decrease body', 'They say, for a reason. It’s true. See, we all have abs, but they are usually hidden beneath layers of fat. The only way to reveal them is to decrease body fat by maintaining a calorie over time.', 'Fat Loss Diet For Him', 'Fat Loss Diet For Him', 'Fat Loss Diet For Him', 1, 1, 1, 22, 1, 69, 49, 30, '2021-08-09 11:49:24', '2021-09-22 02:44:28'),
	(4, 'Fat Loss Diet For Her', 'Diet is the single most important part of the fat loss equation. No matter what anyone says, whatever the latest issue of Cosmo may recommend, it ALL comes down to your diet.', 'Diet is the single most important part of the fat loss equation. No matter what anyone says, whatever the latest issue of Cosmo may recommend, it ALL comes down to your diet. But, we get it!', 'Fat Loss Diet For Her', 'Fat Loss Diet For Her', 'Fat Loss Diet For Her', 1, 2, 1, 1, 1, 78, 56, 30, '2021-08-09 13:15:28', '2021-09-22 02:41:39'),
	(5, 'Limitless Lean Bikini Gains Diet', 'Strategy is the key. Your diet needs to be strategically planned to accelerate the repair-and-grow process that follows slaying the gym. By being precise with your nutrition and timing your meals properly, you can build the muscle you want', 'Strategy is the key. Your diet needs to be strategically planned to accelerate the repair-and-grow process that follows slaying the gym. By being precise with your nutrition and timing your meals properly, you can build the muscle you want without spilling over into fat. We’ve all heard the adage  Too often we associate lifting weights and doing cardio with building a great physique. Don’t get us wrong, that\'s important. But if we were to compare working out to building a house, nutrition would be the materials, the foundation, walls, and support beams. \r\nWithout those essentials, the concrete won’t harden and the walls will fall like they’re made of cards. You’ve got to lay the foundation with proper nutrition, so you get the most out of your workouts and rep-by-rep you’ll build the bikini body of your dreams. ', 'Limitless Lean Bikini Gains Diet', 'Limitless Lean Bikini Gains Diet', 'Limitless Lean Bikini Gains Diet', 1, 2, 1, 0, 1, 120, 78, 40, '2021-09-13 05:49:25', '2021-09-22 02:37:47'),
	(6, 'Lean Muscle  Gains Diet', 'Strategy is the key. Your diet needs to be strategically planned to accelerate the repair-and-grow process that follows demolishing the gym. By being precise with your nutrition and timing your meals properly, you can build the muscle you want', 'Strategy is the key. Your diet needs to be strategically planned to accelerate the repair-and-grow process that follows demolishing the gym. By being precise with your nutrition and timing your meals properly, you can build the muscle you want without spilling over into fat. We’ve all heard the adage. \r\nToo often we associate lifting weights and doing cardio with building a great physique. Don’t get us wrong, that\'s important. But if we were to compare bodybuilding to building a house, nutrition would be the materials, the foundation, walls, and support beams. Without those essentials, the concrete won’t harden and the walls will fall like they’re made of cards. You’ve got to lay the foundation with proper nutrition, so you get the most out of your workouts and brick-by-brick, you’ll build a house.', 'Lean Muscle  Gains Diet', 'Lean Muscle  Gains Diet', 'Lean Muscle  Gains Diet', 3, 1, 1, 0, 1, 120, 99, 20, '2021-09-13 05:52:19', '2021-09-22 02:33:23'),
	(7, '21 Day Detox Plan', 'The Limitless 21 Day Detox plan was written to gently and slowly support the process of metabolic detoxification. We live in an ever-increasingly toxic environment. Many of the toxins, also known as Persistent Organic Pollutants (POPs)', 'The Limitless 21 Day Detox plan was written to gently and slowly support the process of metabolic detoxification. We live in an ever-increasingly toxic environment.\r\nMany of the toxins, also known as Persistent Organic Pollutants (POPs), are abundant in the environment today and did not exist 30 years ago.', '21 Day Detox Plan', '21 Day Detox Plan', '21 Day Detox Plan', 4, 3, 1, 0, 1, 100, 50, 50, '2021-09-20 04:14:02', '2021-09-22 02:35:23');
/*!40000 ALTER TABLE `wbp_meals` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_meals_mecategories
DROP TABLE IF EXISTS `wbp_meals_mecategories`;
CREATE TABLE IF NOT EXISTS `wbp_meals_mecategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meal_id` int(11) NOT NULL DEFAULT '0',
  `mecategory_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы games.wbp_meals_mecategories: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_meals_mecategories` DISABLE KEYS */;
INSERT INTO `wbp_meals_mecategories` (`id`, `meal_id`, `mecategory_id`) VALUES
	(130, 6, 6),
	(131, 7, 7),
	(132, 7, 6),
	(133, 5, 7),
	(134, 4, 7),
	(135, 3, 6);
/*!40000 ALTER TABLE `wbp_meals_mecategories` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_mecategories
DROP TABLE IF EXISTS `wbp_mecategories`;
CREATE TABLE IF NOT EXISTS `wbp_mecategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы games.wbp_mecategories: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_mecategories` DISABLE KEYS */;
INSERT INTO `wbp_mecategories` (`id`, `title`, `color`, `sort`, `created_at`, `updated_at`) VALUES
	(6, 'Male', 'green', 1, '2021-08-09 10:19:43', '2021-09-17 06:58:57'),
	(7, 'Female', 'orange', 2, '2021-08-09 10:20:01', '2021-09-17 06:59:26');
/*!40000 ALTER TABLE `wbp_mecategories` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_members
DROP TABLE IF EXISTS `wbp_members`;
CREATE TABLE IF NOT EXISTS `wbp_members` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nick_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invitation_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `race` smallint(6) DEFAULT NULL,
  `life` smallint(6) DEFAULT NULL,
  `magic` smallint(6) DEFAULT NULL,
  `agility` smallint(6) DEFAULT NULL,
  `strength` smallint(6) DEFAULT NULL,
  `intelligence` smallint(6) DEFAULT NULL,
  `score` int(10) unsigned DEFAULT '0',
  `lvl` smallint(5) unsigned DEFAULT '1',
  `status` smallint(6) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `register_step` int(11) DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы games.wbp_members: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_members` DISABLE KEYS */;
INSERT INTO `wbp_members` (`id`, `first_name`, `last_name`, `nick_name`, `email`, `invitation_code`, `race`, `life`, `magic`, `agility`, `strength`, `intelligence`, `score`, `lvl`, `status`, `created_at`, `updated_at`, `register_step`, `auth_key`, `password_hash`, `password_reset_token`) VALUES
	(1, 'Ниола', 'Пертовски', 'Nip', 'kolya612@gmail.com', NULL, 1, 100, 50, 4, 7, 4, 0, 1, 1, '2021-09-28 15:15:15', '2021-09-28 17:34:27', NULL, '2HWmvshKSqdsLBhFkVTcs2u0U-12P4da', '$2y$13$YNyjrDqodVVZ2x3mmeHsL.hWQ.NzWaBeqEaFxKKDudnH2ExkI7AL.', NULL);
/*!40000 ALTER TABLE `wbp_members` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_members_auth
DROP TABLE IF EXISTS `wbp_members_auth`;
CREATE TABLE IF NOT EXISTS `wbp_members_auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) DEFAULT '0',
  `source` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `source_id` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы games.wbp_members_auth: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_members_auth` DISABLE KEYS */;
/*!40000 ALTER TABLE `wbp_members_auth` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_members_progress
DROP TABLE IF EXISTS `wbp_members_progress`;
CREATE TABLE IF NOT EXISTS `wbp_members_progress` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int(10) unsigned DEFAULT '0',
  `weight` float DEFAULT NULL,
  `fat` float DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы games.wbp_members_progress: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_members_progress` DISABLE KEYS */;
/*!40000 ALTER TABLE `wbp_members_progress` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_members_view_history
DROP TABLE IF EXISTS `wbp_members_view_history`;
CREATE TABLE IF NOT EXISTS `wbp_members_view_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exercise_id` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы games.wbp_members_view_history: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_members_view_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `wbp_members_view_history` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_member_plans
DROP TABLE IF EXISTS `wbp_member_plans`;
CREATE TABLE IF NOT EXISTS `wbp_member_plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_type` int(11) DEFAULT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `is_free` tinyint(3) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы games.wbp_member_plans: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_member_plans` DISABLE KEYS */;
/*!40000 ALTER TABLE `wbp_member_plans` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_migration
DROP TABLE IF EXISTS `wbp_migration`;
CREATE TABLE IF NOT EXISTS `wbp_migration` (
  `version` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы games.wbp_migration: ~41 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_migration` DISABLE KEYS */;
INSERT INTO `wbp_migration` (`version`, `apply_time`) VALUES
	('m000000_000000_base', 1627630414),
	('m020821_171900_members', 1627914986),
	('m020821_174100_images', 1627914986),
	('m020821_174700_images_sizes', 1627914986),
	('m030821_151300_members_progress', 1627993068),
	('m030821_173400_suplements', 1628001895),
	('m030921_143000_orders', 1630670392),
	('m030921_145200_order_items', 1630670919),
	('m040821_174200_supcategories', 1628490390),
	('m040821_174400_excategories', 1628490390),
	('m040821_174600_supplements_supcategories', 1628490390),
	('m090821_084200_exercises', 1628490390),
	('m090821_085300_exercises_excategories', 1628490390),
	('m090821_090000_workouts', 1628490390),
	('m090821_090500_workouts_exercises', 1628490390),
	('m090821_135900_files', 1628507391),
	('m090821_140200_meals', 1628507391),
	('m090821_140700_meals_mecategories', 1628507391),
	('m090821_140800_mecategories', 1628507391),
	('m090821_172300_members_auth', 1628519210),
	('m120821_090200_user_log', 1628519210),
	('m120821_090500_user_permissions', 1628519210),
	('m130524_201442_init', 1627630418),
	('m190124_110200_add_verification_token_column_to_user_table', 1627630418),
	('m210803_100714_add_workout_plan_db_table', 1629877570),
	('m210803_141512_add_settings_db_table', 1629877570),
	('m210811_112641_users_personal_info', 1628519210),
	('m210811_112642_member_auth', 1629878027),
	('m210811_112643_member_register_step', 1629877769),
	('m210811_112644_member_height_in', 1629877769),
	('m210811_112645_mail_log', 1629877769),
	('m210811_112646_members_plans', 1629877769),
	('m210811_112647_member_progress_default_values', 1629877769),
	('m210811_112648_members_view_history', 1629877769),
	('m210811_112649_supplements_recomended', 1630670392),
	('m210811_112650_order_payment_status', 1631113303),
	('m210909_112000_billing_country', 1631177355),
	('m240921_164000_pages', 1632491171),
	('m260821_180000_billings', 1630044223),
	('m300721_113442_test', 1627634146),
	('m300721_150400_config', 1627647351);
/*!40000 ALTER TABLE `wbp_migration` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_orders
DROP TABLE IF EXISTS `wbp_orders`;
CREATE TABLE IF NOT EXISTS `wbp_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) DEFAULT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_first_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_last_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_address` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_address1` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_zip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `expiration_month` int(11) DEFAULT NULL,
  `expiration_year` int(11) DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address1` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` float DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `payment_status` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы games.wbp_orders: ~92 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_orders` DISABLE KEYS */;
INSERT INTO `wbp_orders` (`id`, `member_id`, `email`, `phone`, `shipping_first_name`, `shipping_last_name`, `shipping_country`, `shipping_address`, `shipping_address1`, `shipping_city`, `shipping_state`, `shipping_zip`, `card_number`, `expiration_month`, `expiration_year`, `first_name`, `last_name`, `country`, `address`, `address1`, `city`, `state`, `zip`, `total`, `created_at`, `updated_at`, `payment_status`) VALUES
	(1, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1111111111111111', 10, 2027, 'Lisovski', 'Padde', 'US', 'Krasnolyudskaya 13', '', 'Ignis', 'CT', '321', 25, '2021-09-09 11:54:30', '2021-09-09 11:54:30', NULL),
	(2, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1231231231231234', 8, 2026, 'Servily2', 'Payy2', 'US', 'Alkanta 52', '', 'Alparmo', 'OR', '111', 22, '2021-09-09 11:55:39', '2021-09-09 11:55:39', 1),
	(3, 19, 'qwe@sdhg.hd', '+380682255881', 'Servily2', 'Payy2', 'CA', 'Laguna 73', '', 'Rakkiya', 'ON', '111', '1111111111111111', 10, 2027, 'Lisovski', 'Padde', 'US', 'Krasnolyudskaya 13', '', 'Ignis', 'CT', '321', 39.06, '2021-09-09 11:56:40', '2021-09-09 11:56:40', NULL),
	(4, 19, 'qwe@sdhg.hd', '+380682255881', 'Servily2', 'Payy2', 'US', 'Laguna 73', '', 'Rakkiya', 'WV', '111', '2222222222222222', 11, 2029, 'Servily2', 'Payy2', 'US', 'ertert4 4', '', 'ewrtewr', 'HI', '444', 69.5, '2021-09-09 11:59:01', '2021-09-09 11:59:01', NULL),
	(6, 19, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenko', 'US', 'ertertert', '', 'Rakkiya', 'ID', '111', '1111111111111111', 10, 2027, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.06, '2021-09-13 12:37:44', '2021-09-13 12:37:44', 1),
	(9, 19, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenko', 'US', 'sdfsdf', '', 'Rakkiya', 'HI', '222', '1233123323452345', 12, 25, 'Mykola', 'Vasylenko', 'US', 'sdfsdf', '', 'Rakkiya', 'HI', '222', 39.06, '2021-09-14 14:11:38', '2021-09-14 14:11:38', NULL),
	(10, 19, 'qwe@sdhg.hd', '123334235456', 'Mykola', 'Vasylenko', 'US', 'ertertert', '', 'Rakkiya', 'HI', '345', '1111111111111111', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.06, '2021-09-14 14:14:22', '2021-09-14 14:14:22', NULL),
	(11, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'Rakkiya', 'IL', '11111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 11:13:08', '2021-09-27 11:13:08', NULL),
	(12, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'Rakkiya', 'IL', '11111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 11:25:26', '2021-09-27 11:25:26', 2),
	(13, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'AK', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 11:26:11', '2021-09-27 11:26:11', 2),
	(14, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'AK', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 11:26:34', '2021-09-27 11:26:34', 2),
	(15, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'AK', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 11:31:29', '2021-09-27 11:31:29', 2),
	(16, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'AK', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 11:31:51', '2021-09-27 11:31:51', 2),
	(17, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'AK', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 11:34:57', '2021-09-27 11:34:57', 2),
	(18, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'AZ', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 11:35:31', '2021-09-27 11:35:31', 2),
	(19, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'AZ', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 11:38:03', '2021-09-27 11:38:03', 2),
	(20, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'AZ', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 11:39:30', '2021-09-27 11:39:30', 2),
	(21, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'AZ', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 11:42:54', '2021-09-27 11:42:54', 2),
	(22, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'AZ', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 11:43:38', '2021-09-27 11:43:38', 2),
	(23, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'AZ', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 11:44:28', '2021-09-27 11:44:28', 2),
	(24, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'FL', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 11:44:35', '2021-09-27 11:44:35', 2),
	(25, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'Rakkiya', 'QC', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 11:44:43', '2021-09-27 11:44:43', 2),
	(26, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'Rakkiya', 'QC', '111', '11111111111111114', 12, 25, 'Mykola', 'Vasylenkoо', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CO', '321', 39.65, '2021-09-27 11:45:23', '2021-09-27 11:45:23', 2),
	(27, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'Rakkiya', 'QC', '111', '11111111111111114', 12, 25, 'Mykola', 'Vasylenkoо', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CO', '321', 39.65, '2021-09-27 11:45:57', '2021-09-27 11:45:57', 2),
	(28, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'Rakkiya', 'QC', '111', '11111111111111114', 12, 25, 'Mykola', 'Vasylenkoо', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CO', '321', 39.65, '2021-09-27 11:50:59', '2021-09-27 11:50:59', 2),
	(29, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'HI', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 11:51:09', '2021-09-27 11:51:09', 2),
	(30, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'HI', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 12:18:28', '2021-09-27 12:18:28', 2),
	(31, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'HI', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 12:19:19', '2021-09-27 12:19:19', 2),
	(32, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'HI', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 12:21:26', '2021-09-27 12:21:26', 2),
	(33, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'HI', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 12:23:07', '2021-09-27 12:23:07', 2),
	(34, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'HI', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 12:23:23', '2021-09-27 12:23:23', 2),
	(35, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'HI', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 12:23:46', '2021-09-27 12:23:46', 2),
	(36, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'HI', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 12:23:52', '2021-09-27 12:23:52', 2),
	(37, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'HI', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 12:51:52', '2021-09-27 12:51:52', 2),
	(38, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'sdf', 'AZ', '111', '22222222222222222222', 11, 25, 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'sdf', 'AZ', '111', 39.65, '2021-09-27 12:53:04', '2021-09-27 12:53:04', 2),
	(39, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'sdf', 'AZ', '111', '22222222222222222222', 11, 25, 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'sdf', 'AZ', '111', 39.65, '2021-09-27 12:53:22', '2021-09-27 12:53:22', 2),
	(40, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'sdf', 'AZ', '111', '22222222222222222222', 11, 25, 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'sdf', 'AZ', '111', 39.65, '2021-09-27 12:54:15', '2021-09-27 12:54:15', 2),
	(41, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'sdf', 'AZ', '111', '22222222222222222222', 11, 25, 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'sdf', 'AZ', '111', 39.65, '2021-09-27 12:56:17', '2021-09-27 12:56:17', 2),
	(42, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'sdf', 'AZ', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 12:56:28', '2021-09-27 12:56:28', 2),
	(43, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'sdf', 'AZ', '111', '11111111111111114', 11, 25, 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'sdf', 'AZ', '111', 39.65, '2021-09-27 12:56:35', '2021-09-27 12:56:35', 2),
	(44, 20, 'qwe@sdhg.hd', '123123123123', 'Mykola', 'Vasylenkoо', 'US', '123123', '', '123123', 'ID', '123', '123123123123123123123123', 11, 25, 'Mykola', 'Vasylenkoо', 'US', '123123', '', '123123', 'ID', '123', 39.65, '2021-09-27 15:08:59', '2021-09-27 15:08:59', 2),
	(45, 20, 'qwe@sdhg.hd', '123123123123', 'Mykola', 'Vasylenkoо', 'US', '123123', '', '123123', 'ID', '123', '123123123123123123123123', 11, 25, 'Mykola', 'Vasylenkoо', 'US', '123123', '', '123123', 'ID', '123', 39.65, '2021-09-27 15:09:12', '2021-09-27 15:09:12', 2),
	(46, 20, 'qwe@sdhg.hd', '123123123123', 'Mykola', 'Vasylenkoо', 'US', '123123', '', '123123', 'ID', '123', '123123123123123123123123', 11, 25, 'Mykola', 'Vasylenkoо', 'US', '123123', '', '123123', 'ID', '123', 39.65, '2021-09-27 15:09:51', '2021-09-27 15:09:51', 2),
	(47, 20, 'qwe@sdhg.hd', '123123123123', 'Mykola', 'Vasylenkoо', 'US', '123123', '', '123123', 'ID', '123', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 15:09:57', '2021-09-27 15:09:57', 2),
	(48, 20, 'qwe@sdhg.hd', '123123123123', 'Mykola', 'Vasylenkoо', 'US', '123123', '', '123123', 'ID', '123', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 15:10:12', '2021-09-27 15:10:12', 2),
	(49, 20, 'qwe@sdhg.hd', '123123123123', 'Mykola', 'Vasylenkoо', 'US', '123123', '', '123123', 'ID', '123', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 15:11:00', '2021-09-27 15:11:00', 2),
	(50, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', '111111111111111', 11, 25, 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', 39.65, '2021-09-27 15:11:47', '2021-09-27 15:11:47', 2),
	(51, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', '111111111111111', 11, 25, 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', 39.65, '2021-09-27 15:12:00', '2021-09-27 15:12:00', 2),
	(52, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', '111111111111111', 11, 25, 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', 39.65, '2021-09-27 15:12:42', '2021-09-27 15:12:42', 2),
	(53, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', '111111111111111', 11, 25, 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', 39.65, '2021-09-27 15:12:54', '2021-09-27 15:12:54', 2),
	(54, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', '111111111111111', 11, 25, 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', 39.65, '2021-09-27 15:13:49', '2021-09-27 15:13:49', 2),
	(55, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 15:13:58', '2021-09-27 15:13:58', 2),
	(56, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 15:14:03', '2021-09-27 15:14:03', 2),
	(57, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', '11111111111111114', 11, 25, 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', 39.65, '2021-09-27 15:14:09', '2021-09-27 15:14:09', 2),
	(58, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 15:14:21', '2021-09-27 15:14:21', 2),
	(59, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', '11111111111111114', 11, 25, 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', 39.65, '2021-09-27 15:14:27', '2021-09-27 15:14:27', 2),
	(60, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 15:14:33', '2021-09-27 15:14:33', 2),
	(61, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 15:36:59', '2021-09-27 15:36:59', 2),
	(62, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 15:37:03', '2021-09-27 15:37:03', 2),
	(63, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 15:37:11', '2021-09-27 15:37:11', 2),
	(64, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 15:39:03', '2021-09-27 15:39:03', 2),
	(65, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 15:39:33', '2021-09-27 15:39:33', 2),
	(66, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 15:39:55', '2021-09-27 15:39:55', 3),
	(67, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 15:41:38', '2021-09-27 15:41:38', 2),
	(68, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 15:41:48', '2021-09-27 15:41:48', 2),
	(69, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 15:42:10', '2021-09-27 15:42:10', 2),
	(70, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'CA', 'ertertert', '', 'sdf', 'PE', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 15:42:19', '2021-09-27 15:42:19', 2),
	(71, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'Rakkiya', 'IA', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 15:43:17', '2021-09-27 15:43:17', 2),
	(72, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'Rakkiya', 'ID', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 16:03:23', '2021-09-27 16:03:23', 2),
	(73, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'Rakkiya', 'ID', '111', '11111111111111114', 11, 25, 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'Rakkiya', 'ID', '111', 39.65, '2021-09-27 16:03:32', '2021-09-27 16:03:32', 2),
	(74, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'Rakkiya', 'ID', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 16:03:37', '2021-09-27 16:03:37', 2),
	(75, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'sdf', 'KS', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 16:08:24', '2021-09-27 16:08:24', 2),
	(76, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'IL', '222', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 16:09:40', '2021-09-27 16:09:40', 2),
	(77, 20, 'qwe@sdhg.hd', '123334235456', 'Mykola', 'Vasylenkoо', 'US', 'sdfsdf', '', 'Rakkiya', 'AL', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 16:10:41', '2021-09-27 16:10:41', 2),
	(78, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'DC', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 16:11:38', '2021-09-27 16:11:38', 2),
	(79, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', '123123', 'CO', '234', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 16:14:28', '2021-09-27 16:14:28', 2),
	(80, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'sdf', 'FL', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 16:16:53', '2021-09-27 16:16:53', 2),
	(81, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'sdf', 'FL', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 16:18:11', '2021-09-27 16:18:11', 2),
	(82, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'Rakkiya', 'DC', '21333', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 16:18:35', '2021-09-27 16:18:35', 2),
	(83, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', '123123', '', 'Rakkiya', 'ID', '1111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 16:23:26', '2021-09-27 16:23:26', 2),
	(84, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'asd', '', '123123', 'CO', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 16:26:20', '2021-09-27 16:26:20', 2),
	(85, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'Rakkiya', 'CT', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 16:36:18', '2021-09-27 16:36:18', 2),
	(86, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'Rakkiya', 'CT', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 16:38:09', '2021-09-27 16:38:09', 2),
	(87, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'Rakkiya', 'CT', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 16:42:06', '2021-09-27 16:42:06', 2),
	(88, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'Rakkiya', 'CT', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 16:42:25', '2021-09-27 16:42:25', 2),
	(89, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'Rakkiya', 'CT', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 16:43:27', '2021-09-27 16:43:27', 2),
	(90, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'Rakkiya', 'CT', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 16:43:50', '2021-09-27 16:43:50', 2),
	(91, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', 'Rakkiya', 'CT', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 16:58:28', '2021-09-27 16:58:28', 2),
	(92, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', '123123', 'AK', '111', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 16:59:25', '2021-09-27 16:59:25', 1),
	(93, 20, 'qwe@sdhg.hd', '123334235456', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', '123123', 'IN', '444', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 17:32:52', '2021-09-27 17:32:52', 1),
	(94, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'Laguna 73', '', '123123', 'VA', '123', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 17:35:49', '2021-09-27 17:35:49', 1),
	(95, 20, 'qwe@sdhg.hd', '+380682255881', 'Mykola', 'Vasylenkoо', 'US', 'ertertert', '', 'sdf', 'IN', '43221', '11111111111111114', 11, 24, 'Vasylenko', 'Mykola', 'US', 'Krasnolyudskaya 13', '', 'Hogvards', 'CT', '321', 39.65, '2021-09-27 17:36:53', '2021-09-27 17:36:53', NULL);
/*!40000 ALTER TABLE `wbp_orders` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_order_items
DROP TABLE IF EXISTS `wbp_order_items`;
CREATE TABLE IF NOT EXISTS `wbp_order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `external_id` int(11) DEFAULT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `goal` smallint(6) DEFAULT NULL,
  `workout_often` smallint(6) DEFAULT NULL,
  `gender` smallint(6) DEFAULT NULL,
  `phase` smallint(6) DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `percent` int(11) DEFAULT '0',
  `old_price` decimal(12,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы games.wbp_order_items: ~92 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_order_items` DISABLE KEYS */;
INSERT INTO `wbp_order_items` (`id`, `order_id`, `item_id`, `external_id`, `type`, `title`, `goal`, `workout_often`, `gender`, `phase`, `price`, `percent`, `old_price`, `quantity`, `created_at`, `updated_at`) VALUES
	(1, 1, 5, NULL, 'workout', 'Bikini Body Lean & Tone Home Edition 5', 3, 2, 1, 1, 25.00, 0, 50.00, 1, '2021-09-09 11:54:30', '2021-09-09 11:54:30'),
	(2, 2, 1, NULL, 'workout', 'Bikini Body Lean & Tone Home Edition 1', 1, 3, 2, 1, 22.00, 0, 25.00, 1, '2021-09-09 11:55:39', '2021-09-09 11:55:39'),
	(3, 3, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', 0, NULL, 0, NULL, 39.06, 30, 69.50, 1, '2021-09-09 11:56:40', '2021-09-09 11:56:40'),
	(4, 4, 2, NULL, 'supplement', 'Divatrim Powergirl Superpack 2', 0, NULL, 0, NULL, 69.50, 30, 88.57, 1, '2021-09-09 11:59:01', '2021-09-09 11:59:01'),
	(6, 6, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', 0, NULL, 0, NULL, 39.06, 30, 69.50, 1, '2021-09-13 12:37:44', '2021-09-13 12:37:44'),
	(9, 9, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', 0, NULL, 0, NULL, 39.06, 30, 69.50, 1, '2021-09-14 14:11:38', '2021-09-14 14:11:38'),
	(10, 10, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', 0, NULL, 0, NULL, 39.06, 30, 69.50, 1, '2021-09-14 14:14:22', '2021-09-14 14:14:22'),
	(11, 11, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 11:13:08', '2021-09-27 11:13:08'),
	(12, 12, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 11:25:26', '2021-09-27 11:25:26'),
	(13, 13, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 11:26:11', '2021-09-27 11:26:11'),
	(14, 14, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 11:26:34', '2021-09-27 11:26:34'),
	(15, 15, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 11:31:29', '2021-09-27 11:31:29'),
	(16, 16, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 11:31:51', '2021-09-27 11:31:51'),
	(17, 17, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 11:34:57', '2021-09-27 11:34:57'),
	(18, 18, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 11:35:31', '2021-09-27 11:35:31'),
	(19, 19, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 11:38:03', '2021-09-27 11:38:03'),
	(20, 20, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 11:39:30', '2021-09-27 11:39:30'),
	(21, 21, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 11:42:54', '2021-09-27 11:42:54'),
	(22, 22, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 11:43:38', '2021-09-27 11:43:38'),
	(23, 23, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 11:44:28', '2021-09-27 11:44:28'),
	(24, 24, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 11:44:35', '2021-09-27 11:44:35'),
	(25, 25, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 11:44:43', '2021-09-27 11:44:43'),
	(26, 26, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 11:45:23', '2021-09-27 11:45:23'),
	(27, 27, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 11:45:57', '2021-09-27 11:45:57'),
	(28, 28, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 11:50:59', '2021-09-27 11:50:59'),
	(29, 29, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 11:51:09', '2021-09-27 11:51:09'),
	(30, 30, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 12:18:28', '2021-09-27 12:18:28'),
	(31, 31, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 12:19:19', '2021-09-27 12:19:19'),
	(32, 32, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 12:21:26', '2021-09-27 12:21:26'),
	(33, 33, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 12:23:07', '2021-09-27 12:23:07'),
	(34, 34, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 12:23:23', '2021-09-27 12:23:23'),
	(35, 35, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 12:23:46', '2021-09-27 12:23:46'),
	(36, 36, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 12:23:52', '2021-09-27 12:23:52'),
	(37, 37, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 12:51:52', '2021-09-27 12:51:52'),
	(38, 38, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 12:53:04', '2021-09-27 12:53:04'),
	(39, 39, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 12:53:22', '2021-09-27 12:53:22'),
	(40, 40, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 12:54:15', '2021-09-27 12:54:15'),
	(41, 41, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 12:56:17', '2021-09-27 12:56:17'),
	(42, 42, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 12:56:28', '2021-09-27 12:56:28'),
	(43, 43, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 12:56:35', '2021-09-27 12:56:35'),
	(44, 44, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:08:59', '2021-09-27 15:08:59'),
	(45, 45, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:09:12', '2021-09-27 15:09:12'),
	(46, 46, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:09:51', '2021-09-27 15:09:51'),
	(47, 47, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:09:57', '2021-09-27 15:09:57'),
	(48, 48, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:10:12', '2021-09-27 15:10:12'),
	(49, 49, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:11:00', '2021-09-27 15:11:00'),
	(50, 50, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:11:47', '2021-09-27 15:11:47'),
	(51, 51, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:12:00', '2021-09-27 15:12:00'),
	(52, 52, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:12:42', '2021-09-27 15:12:42'),
	(53, 53, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:12:54', '2021-09-27 15:12:54'),
	(54, 54, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:13:49', '2021-09-27 15:13:49'),
	(55, 55, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:13:58', '2021-09-27 15:13:58'),
	(56, 56, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:14:03', '2021-09-27 15:14:03'),
	(57, 57, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:14:09', '2021-09-27 15:14:09'),
	(58, 58, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:14:21', '2021-09-27 15:14:21'),
	(59, 59, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:14:27', '2021-09-27 15:14:27'),
	(60, 60, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:14:34', '2021-09-27 15:14:34'),
	(61, 61, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:36:59', '2021-09-27 15:36:59'),
	(62, 62, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:37:03', '2021-09-27 15:37:03'),
	(63, 63, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:37:11', '2021-09-27 15:37:11'),
	(64, 64, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:39:03', '2021-09-27 15:39:03'),
	(65, 65, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:39:33', '2021-09-27 15:39:33'),
	(66, 66, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:39:55', '2021-09-27 15:39:55'),
	(67, 67, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:41:38', '2021-09-27 15:41:38'),
	(68, 68, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:41:49', '2021-09-27 15:41:49'),
	(69, 69, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:42:10', '2021-09-27 15:42:10'),
	(70, 70, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:42:19', '2021-09-27 15:42:19'),
	(71, 71, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 15:43:17', '2021-09-27 15:43:17'),
	(72, 72, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 16:03:23', '2021-09-27 16:03:23'),
	(73, 73, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 16:03:32', '2021-09-27 16:03:32'),
	(74, 74, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 16:03:37', '2021-09-27 16:03:37'),
	(75, 75, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 16:08:24', '2021-09-27 16:08:24'),
	(76, 76, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 16:09:40', '2021-09-27 16:09:40'),
	(77, 77, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 16:10:41', '2021-09-27 16:10:41'),
	(78, 78, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 16:11:38', '2021-09-27 16:11:38'),
	(79, 79, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 16:14:28', '2021-09-27 16:14:28'),
	(80, 80, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 16:16:53', '2021-09-27 16:16:53'),
	(81, 81, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 16:18:11', '2021-09-27 16:18:11'),
	(82, 82, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 16:18:35', '2021-09-27 16:18:35'),
	(83, 83, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 16:23:26', '2021-09-27 16:23:26'),
	(84, 84, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 16:26:20', '2021-09-27 16:26:20'),
	(85, 85, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 16:36:18', '2021-09-27 16:36:18'),
	(86, 86, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 16:38:09', '2021-09-27 16:38:09'),
	(87, 87, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 16:42:06', '2021-09-27 16:42:06'),
	(88, 88, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 16:42:25', '2021-09-27 16:42:25'),
	(89, 89, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 16:43:27', '2021-09-27 16:43:27'),
	(90, 90, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 16:43:50', '2021-09-27 16:43:50'),
	(91, 91, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 16:58:28', '2021-09-27 16:58:28'),
	(92, 92, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 16:59:25', '2021-09-27 16:59:25'),
	(93, 93, 1, NULL, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 17:32:52', '2021-09-27 17:32:52'),
	(94, 94, 1, 78123, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 17:35:49', '2021-09-27 17:35:49'),
	(95, 95, 1, 78123, 'supplement', 'Divatrim Powergirl Superpack', NULL, NULL, NULL, NULL, 39.65, 30, 69.95, 1, '2021-09-27 17:36:53', '2021-09-27 17:36:53');
/*!40000 ALTER TABLE `wbp_order_items` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_pages
DROP TABLE IF EXISTS `wbp_pages`;
CREATE TABLE IF NOT EXISTS `wbp_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `description` text NOT NULL,
  `href` varchar(255) NOT NULL,
  `view` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Дамп данных таблицы games.wbp_pages: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_pages` DISABLE KEYS */;
INSERT INTO `wbp_pages` (`id`, `title`, `status`, `description`, `href`, `view`, `created_at`, `updated_at`) VALUES
	(1, 'How to Estimate Body Fat', 1, '<div class="row">\r\n<div class="col-12 col-lg-8 estimate-body__content">\r\n\r\n    <p class="text">\r\n        Simply weighing yourself every week doesn’t provide enough information to determine your\r\n        progression. For example, if you gain muscle and lose fat, your weight may stay the same; but,\r\n        your body composition would be improved. It is very important to measure and log your body fat\r\n        at least once per month and your weight weekly. Below, you’ll find different ways to calculate\r\n        body fat. Some methods are more accurate than others. Whichever method you use, be sure you use\r\n        the same method each time for accurate benchmarking.\r\n    </p>\r\n\r\n    <h3 class="title">Estimate Your Body Fat Using the Navy Seal Formula</h3>\r\n    <p class="text">\r\n        This is not as accurate as the methods below but can provide a convenient guess-timate. For this\r\n        method, you’ll need a soft tape measure and a scale.\r\n        <a class="link" href="#" data-modal="weight_calc">Click Here</a> to estimate your body fat using\r\n        the Navy\r\n        Seal Formula.\r\n    </p>\r\n    <button class="btn btn-primary" data-modal="weight_calc">Estimate Body Fat</button>\r\n\r\n    <h3 class="title">Dual-Energy X-Ray Scan</h3>\r\n    <p class="text">A DEXA Scan will provide the most accurate and precise breakdown of your\r\n        distribution of body fat and muscle tissue. You find out overall body fat, lean body mass, bone\r\n        weight and percentages of each in each region. It also reveals potentially dangerous fat\r\n        surrounding vital organs and allows you to track changes over time. It’s by far the best\r\n        mechanism to objectively measure your progress. You can Google locations of DEXA Scans near you\r\n        that are very common and usually reasonably priced.</p>\r\n\r\n    <h3 class="title">Hydrostatic Method</h3>\r\n    <p class="text">This method calculates body fat percentage based off of body density. Imagine a\r\n        water dunk tank but in a medical setting. After being weighed outside of the water, you sit in a\r\n        chair that is lowered into the water. Once submerged, you exhale as much air from your lungs as\r\n        possible. Your weight is then calculated. Although it’s considered a highly accurate method to\r\n        measure total body fat, it will not provide distribution of fat by body part or region like\r\n        DEXA. And, it’s not as convenient as some of the other methods.</p>\r\n\r\n    <h3 class="title">Skinfold Caliper Method</h3>\r\n    <p class="text">Use this plier-shaped instrument to measure thickness of skin. You can order a\r\n        skinfold caliper for a few dollars from Amazon. There are different formulas for this method,\r\n        but we highly recommend using the 7-Site Skinfold Method for the most accurate reading. You will\r\n        measure the thickness of your skin in 7 specific locations on your body and enter those\r\n        measurements into the formula below to determine your total body fat percentage. This is a very\r\n        accurate way to measure total body fat. It’s also more convenient and affordable than most\r\n        alternatives. <a class="link" href="#">Click here</a> to watch this tutorial video about how to\r\n        perform a 7-point skinfold\r\n        accurately. Then, <a class="link" href="#">click here</a> to enter your results in this formula\r\n        that determines your total\r\n        body-fat percentage.</p>\r\n\r\n    <h3 class="title">BIA (Bio Impedance Analysis) </h3>\r\n    <p class="text">One of the most popular types of BIA is the InBody brand. It is essentially a scale\r\n        that also measures body fat. Although bio impedance is very convenient, as convenient as\r\n        weighing yourself, it is definitely the least accurate method because the algorithm used to\r\n        determine your body fat doesn’t actually measure your body fat but provides an estimate based\r\n        upon many different variables. The problem: those variables also vary, depending on things that\r\n        have nothing to do with actual body fat. However, if you use the same device each month at the\r\n        same time of day, with the same level of food and water in your system, BIA can be used as a\r\n        fair benchmarking tool. To determine if you’re trending in the right direction, we recommend\r\n        using the same device at least once a month. Do this first thing in the morning on an empty\r\n        stomach to get the most accurate reads. Bio impedance devices like InBody are very common and\r\n        can be found through Google search.</p>\r\n</div>\r\n</div>', 'fat', 'fat', '2020-11-11 08:55:58', '2021-09-24 16:34:38'),
	(2, 'Terms And Conditions', 1, '<div class="row">\r\n    <div class="col-12 col-lg-8 estimate-body__content">\r\n        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n        <h3 class="title">Lorem Ipsum Heading</h3>\r\n        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n        <h3 class="title">Lorem Ipsum Heading</h3>\r\n        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n    </div>\r\n</div>', 'terms-and-conditions', '', '2021-05-26 04:22:41', '2021-09-24 14:29:25');
/*!40000 ALTER TABLE `wbp_pages` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_settings
DROP TABLE IF EXISTS `wbp_settings`;
CREATE TABLE IF NOT EXISTS `wbp_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `host` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `port` smallint(6) DEFAULT '0',
  `useSsl` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы games.wbp_settings: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `wbp_settings` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_supcategories
DROP TABLE IF EXISTS `wbp_supcategories`;
CREATE TABLE IF NOT EXISTS `wbp_supcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы games.wbp_supcategories: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_supcategories` DISABLE KEYS */;
INSERT INTO `wbp_supcategories` (`id`, `title`, `sort`, `created_at`, `updated_at`) VALUES
	(1, 'Man\'s Fitness', 1, '2021-08-04 11:11:53', '2021-08-13 11:26:02'),
	(2, 'Woman\'s Fitness', 2, '2021-08-04 11:18:59', '2021-08-09 17:10:29'),
	(3, 'Muscle Building', 4, '2021-08-04 11:19:53', '2021-08-09 17:10:42'),
	(4, 'Weight Loss', 3, '2021-08-04 11:20:43', '2021-08-09 17:10:36');
/*!40000 ALTER TABLE `wbp_supcategories` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_supplements
DROP TABLE IF EXISTS `wbp_supplements`;
CREATE TABLE IF NOT EXISTS `wbp_supplements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `external_id` int(11) DEFAULT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_text` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `benefits` text COLLATE utf8mb4_unicode_ci,
  `ingredients` text COLLATE utf8mb4_unicode_ci,
  `nutrition_facts` text COLLATE utf8mb4_unicode_ci,
  `seo_title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` float DEFAULT '0',
  `sale_price` float DEFAULT '0',
  `percent` int(11) DEFAULT '0',
  `viewed` int(11) DEFAULT '0',
  `status` smallint(6) DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `goal` int(11) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы games.wbp_supplements: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_supplements` DISABLE KEYS */;
INSERT INTO `wbp_supplements` (`id`, `external_id`, `title`, `short_text`, `text`, `benefits`, `ingredients`, `nutrition_facts`, `seo_title`, `seo_description`, `seo_keywords`, `price`, `sale_price`, `percent`, `viewed`, `status`, `created_at`, `updated_at`, `goal`, `gender`) VALUES
	(1, 78123, 'Divatrim Powergirl Superpack', 'Divatrim Superwoman Blend - Vegan Superfood Formuls', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Divatrim Powergirl Superpack- title', 'Divatrim Powergirl Superpack - description', 'Divatrim Powergirl Superpack - keywords', 69.95, 39.65, 30, 22, 1, '2021-08-04 11:32:37', '2021-08-25 09:54:54', NULL, NULL),
	(2, 78560, 'Divatrim Superwoman', 'Divatrim Superwoman Blend - Vegan Superfood Formuls 2', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'Divatrim Powergirl Superpack 2 - title', 'Divatrim Powergirl Superpack 2 - description', 'Divatrim Powergirl Superpack 2 - keywords', 88.57, 69.5, 30, 10, 1, '2021-08-04 13:21:09', '2021-08-25 09:55:40', NULL, 2);
/*!40000 ALTER TABLE `wbp_supplements` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_supplements_supcategories
DROP TABLE IF EXISTS `wbp_supplements_supcategories`;
CREATE TABLE IF NOT EXISTS `wbp_supplements_supcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplement_id` int(11) NOT NULL DEFAULT '0',
  `supcategory_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы games.wbp_supplements_supcategories: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_supplements_supcategories` DISABLE KEYS */;
INSERT INTO `wbp_supplements_supcategories` (`id`, `supplement_id`, `supcategory_id`) VALUES
	(40, 1, 4),
	(41, 1, 2),
	(42, 2, 3),
	(43, 2, 1);
/*!40000 ALTER TABLE `wbp_supplements_supcategories` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_user
DROP TABLE IF EXISTS `wbp_user`;
CREATE TABLE IF NOT EXISTS `wbp_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `super_admin` smallint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы games.wbp_user: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_user` DISABLE KEYS */;
INSERT INTO `wbp_user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`, `first_name`, `last_name`, `phone`, `position`, `super_admin`) VALUES
	(1, 'admin', 'o46tAheYhISgGg_K5PVPoAZIW6mN9kIZ', '$2y$13$0Bp5z.kLEqY0XXmklYp/geJrESIlehUZRXPpIUum5sYAjuwGEWCXm', NULL, 'test@test.test', 10, NULL, '2021-08-13 19:21:35', NULL, 'Admin', 'Adminesz', '+3809911111111', NULL, 1),
	(5, 'tester', 'o58tn1O_wPMV3ByVyJ9_R9pHZe_6SdXf', '$2y$13$59ktlzLfSSnnbKIDbu9GPePBM7mb6apfVflrGaz9jqd/DSXWSxrPi', NULL, 'te@te.te', 10, '2021-08-12 15:15:26', '2021-08-13 18:17:43', NULL, 'Tester', 'TEsterovich', '111111111111', NULL, 0);
/*!40000 ALTER TABLE `wbp_user` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_user_log
DROP TABLE IF EXISTS `wbp_user_log`;
CREATE TABLE IF NOT EXISTS `wbp_user_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `module` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `additional_options` text,
  `item_id` text,
  `ip` varchar(255) DEFAULT NULL,
  `server` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12565 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы games.wbp_user_log: 32 rows
/*!40000 ALTER TABLE `wbp_user_log` DISABLE KEYS */;
INSERT INTO `wbp_user_log` (`id`, `user_id`, `module`, `action`, `additional_options`, `item_id`, `ip`, `server`, `created_at`, `updated_at`) VALUES
	(12533, 1, 'employees', 'index', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"167","REDIRECT_H2_STREAM_TAG":"4-167","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"167","H2_STREAM_TAG":"4-167","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"a37177c81403315a43485245cd7085bffd5917d06f0ec53b4088ed53018f0b6a","SSL_SESSION_RESUMED":"Resumed","HTTP_CACHE_CONTROL":"max-age=0","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"none","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"54016","REDIRECT_URL":"\\/admin\\/employees","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"GET","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/employees","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628689220.691261,"REQUEST_TIME":1628689220}', '2021-08-11 16:40:20', '2021-08-11 16:40:20'),
	(12534, 1, 'employees', 'index', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"173","REDIRECT_H2_STREAM_TAG":"4-173","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"173","H2_STREAM_TAG":"4-173","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"a37177c81403315a43485245cd7085bffd5917d06f0ec53b4088ed53018f0b6a","SSL_SESSION_RESUMED":"Resumed","HTTP_CACHE_CONTROL":"max-age=0","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"none","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"54016","REDIRECT_URL":"\\/admin\\/employees","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"GET","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/employees","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628689321.523543,"REQUEST_TIME":1628689321}', '2021-08-11 16:42:01', '2021-08-11 16:42:01'),
	(12535, 1, 'employees', 'edit', 'ACCESS_DENIED', '1', '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"47","REDIRECT_H2_STREAM_TAG":"4-47","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"47","H2_STREAM_TAG":"4-47","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"f6c9da818258249a5999cce4dbc10ff280474be5cb0a6e9d3ee4ec562ddb672a","SSL_SESSION_RESUMED":"Initial","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"same-origin","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_REFERER":"https:\\/\\/vip.loc\\/admin\\/employees","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"51697","REDIRECT_URL":"\\/admin\\/employees\\/default\\/edit","REDIRECT_QUERY_STRING":"id=1","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"GET","QUERY_STRING":"id=1","REQUEST_URI":"\\/admin\\/employees\\/default\\/edit?id=1","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628689474.752735,"REQUEST_TIME":1628689474}', '2021-08-11 16:44:34', '2021-08-11 16:44:34'),
	(12536, 1, 'employees', 'getImage', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"117","REDIRECT_H2_STREAM_TAG":"4-117","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"117","H2_STREAM_TAG":"4-117","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"f6c9da818258249a5999cce4dbc10ff280474be5cb0a6e9d3ee4ec562ddb672a","SSL_SESSION_RESUMED":"Initial","CONTENT_LENGTH":"167","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_ACCEPT":"*\\/*","HTTP_X_REQUESTED_WITH":"XMLHttpRequest","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","CONTENT_TYPE":"application\\/x-www-form-urlencoded; charset=UTF-8","HTTP_ORIGIN":"https:\\/\\/vip.loc","HTTP_SEC_FETCH_SITE":"same-origin","HTTP_SEC_FETCH_MODE":"cors","HTTP_SEC_FETCH_DEST":"empty","HTTP_REFERER":"https:\\/\\/vip.loc\\/admin\\/employees\\/default\\/edit?id=1","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"51697","REDIRECT_URL":"\\/admin\\/employees\\/default\\/getImage","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"POST","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/employees\\/default\\/getImage","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628689502.441028,"REQUEST_TIME":1628689502}', '2021-08-11 16:45:02', '2021-08-11 16:45:02'),
	(12537, 1, 'employees', 'getImage', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"59","REDIRECT_H2_STREAM_TAG":"4-59","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"59","H2_STREAM_TAG":"4-59","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"e2bac442a8ee6361f7fbbaf0114d81770d7bca717de01a75cb0df125afc2e6d5","SSL_SESSION_RESUMED":"Resumed","CONTENT_LENGTH":"167","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_ACCEPT":"*\\/*","HTTP_X_REQUESTED_WITH":"XMLHttpRequest","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","CONTENT_TYPE":"application\\/x-www-form-urlencoded; charset=UTF-8","HTTP_ORIGIN":"https:\\/\\/vip.loc","HTTP_SEC_FETCH_SITE":"same-origin","HTTP_SEC_FETCH_MODE":"cors","HTTP_SEC_FETCH_DEST":"empty","HTTP_REFERER":"https:\\/\\/vip.loc\\/admin\\/employees\\/default\\/edit?id=1","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"53301","REDIRECT_URL":"\\/admin\\/employees\\/default\\/getImage","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"POST","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/employees\\/default\\/getImage","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628690093.425904,"REQUEST_TIME":1628690093}', '2021-08-11 16:54:53', '2021-08-11 16:54:53'),
	(12538, 1, 'employees', 'getImage', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"131","REDIRECT_H2_STREAM_TAG":"4-131","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"131","H2_STREAM_TAG":"4-131","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"e2bac442a8ee6361f7fbbaf0114d81770d7bca717de01a75cb0df125afc2e6d5","SSL_SESSION_RESUMED":"Resumed","CONTENT_LENGTH":"167","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_ACCEPT":"*\\/*","HTTP_X_REQUESTED_WITH":"XMLHttpRequest","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","CONTENT_TYPE":"application\\/x-www-form-urlencoded; charset=UTF-8","HTTP_ORIGIN":"https:\\/\\/vip.loc","HTTP_SEC_FETCH_SITE":"same-origin","HTTP_SEC_FETCH_MODE":"cors","HTTP_SEC_FETCH_DEST":"empty","HTTP_REFERER":"https:\\/\\/vip.loc\\/admin\\/employees\\/default\\/edit?id=1","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"53301","REDIRECT_URL":"\\/admin\\/employees\\/default\\/getImage","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"POST","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/employees\\/default\\/getImage","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628690204.948959,"REQUEST_TIME":1628690204}', '2021-08-11 16:56:45', '2021-08-11 16:56:45'),
	(12539, 1, 'employees', 'getImage', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"191","REDIRECT_H2_STREAM_TAG":"4-191","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"191","H2_STREAM_TAG":"4-191","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"e2bac442a8ee6361f7fbbaf0114d81770d7bca717de01a75cb0df125afc2e6d5","SSL_SESSION_RESUMED":"Resumed","CONTENT_LENGTH":"167","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_ACCEPT":"*\\/*","HTTP_X_REQUESTED_WITH":"XMLHttpRequest","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","CONTENT_TYPE":"application\\/x-www-form-urlencoded; charset=UTF-8","HTTP_ORIGIN":"https:\\/\\/vip.loc","HTTP_SEC_FETCH_SITE":"same-origin","HTTP_SEC_FETCH_MODE":"cors","HTTP_SEC_FETCH_DEST":"empty","HTTP_REFERER":"https:\\/\\/vip.loc\\/admin\\/employees\\/default\\/edit?id=1","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"53301","REDIRECT_URL":"\\/admin\\/employees\\/default\\/getImage","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"POST","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/employees\\/default\\/getImage","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628690291.984946,"REQUEST_TIME":1628690291}', '2021-08-11 16:58:12', '2021-08-11 16:58:12'),
	(12540, 1, 'employees', 'getImage', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"227","REDIRECT_H2_STREAM_TAG":"4-227","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"227","H2_STREAM_TAG":"4-227","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"e2bac442a8ee6361f7fbbaf0114d81770d7bca717de01a75cb0df125afc2e6d5","SSL_SESSION_RESUMED":"Resumed","CONTENT_LENGTH":"167","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_ACCEPT":"*\\/*","HTTP_X_REQUESTED_WITH":"XMLHttpRequest","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","CONTENT_TYPE":"application\\/x-www-form-urlencoded; charset=UTF-8","HTTP_ORIGIN":"https:\\/\\/vip.loc","HTTP_SEC_FETCH_SITE":"same-origin","HTTP_SEC_FETCH_MODE":"cors","HTTP_SEC_FETCH_DEST":"empty","HTTP_REFERER":"https:\\/\\/vip.loc\\/admin\\/employees\\/default\\/edit?id=1","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"53301","REDIRECT_URL":"\\/admin\\/employees\\/default\\/getImage","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"POST","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/employees\\/default\\/getImage","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628690376.280621,"REQUEST_TIME":1628690376}', '2021-08-11 16:59:36', '2021-08-11 16:59:36'),
	(12541, 1, 'employees', 'edit', 'ACCESS_DENIED', '1', '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"235","REDIRECT_H2_STREAM_TAG":"4-235","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"235","H2_STREAM_TAG":"4-235","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"e2bac442a8ee6361f7fbbaf0114d81770d7bca717de01a75cb0df125afc2e6d5","SSL_SESSION_RESUMED":"Resumed","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"none","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"53301","REDIRECT_URL":"\\/admin\\/employees\\/default\\/edit","REDIRECT_QUERY_STRING":"id=1","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"GET","QUERY_STRING":"id=1","REQUEST_URI":"\\/admin\\/employees\\/default\\/edit?id=1","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628690485.49788,"REQUEST_TIME":1628690485}', '2021-08-11 17:01:25', '2021-08-11 17:01:25'),
	(12542, 1, 'employees', 'index', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"277","REDIRECT_H2_STREAM_TAG":"4-277","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"277","H2_STREAM_TAG":"4-277","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"e2bac442a8ee6361f7fbbaf0114d81770d7bca717de01a75cb0df125afc2e6d5","SSL_SESSION_RESUMED":"Resumed","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"none","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"53301","REDIRECT_URL":"\\/admin\\/employees","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"GET","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/employees","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628690497.835918,"REQUEST_TIME":1628690497}', '2021-08-11 17:01:37', '2021-08-11 17:01:37'),
	(12543, 1, 'employees', 'index', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"283","REDIRECT_H2_STREAM_TAG":"4-283","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"283","H2_STREAM_TAG":"4-283","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"e2bac442a8ee6361f7fbbaf0114d81770d7bca717de01a75cb0df125afc2e6d5","SSL_SESSION_RESUMED":"Resumed","HTTP_CACHE_CONTROL":"max-age=0","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"none","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"53301","REDIRECT_URL":"\\/admin\\/employees","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"GET","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/employees","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628690571.874577,"REQUEST_TIME":1628690571}', '2021-08-11 17:02:51', '2021-08-11 17:02:51'),
	(12544, 1, 'employees', 'index', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"289","REDIRECT_H2_STREAM_TAG":"4-289","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"289","H2_STREAM_TAG":"4-289","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"e2bac442a8ee6361f7fbbaf0114d81770d7bca717de01a75cb0df125afc2e6d5","SSL_SESSION_RESUMED":"Resumed","HTTP_CACHE_CONTROL":"max-age=0","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"none","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"53301","REDIRECT_URL":"\\/admin\\/employees","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"GET","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/employees","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628690583.682338,"REQUEST_TIME":1628690583}', '2021-08-11 17:03:03', '2021-08-11 17:03:03'),
	(12545, 1, 'employees', 'getImage', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"389","REDIRECT_H2_STREAM_TAG":"4-389","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"389","H2_STREAM_TAG":"4-389","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"e2bac442a8ee6361f7fbbaf0114d81770d7bca717de01a75cb0df125afc2e6d5","SSL_SESSION_RESUMED":"Resumed","CONTENT_LENGTH":"167","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_ACCEPT":"*\\/*","HTTP_X_REQUESTED_WITH":"XMLHttpRequest","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","CONTENT_TYPE":"application\\/x-www-form-urlencoded; charset=UTF-8","HTTP_ORIGIN":"https:\\/\\/vip.loc","HTTP_SEC_FETCH_SITE":"same-origin","HTTP_SEC_FETCH_MODE":"cors","HTTP_SEC_FETCH_DEST":"empty","HTTP_REFERER":"https:\\/\\/vip.loc\\/admin\\/employees\\/default\\/edit?id=1","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"53301","REDIRECT_URL":"\\/admin\\/employees\\/default\\/getImage","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"POST","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/employees\\/default\\/getImage","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628690685.562292,"REQUEST_TIME":1628690685}', '2021-08-11 17:04:45', '2021-08-11 17:04:45'),
	(12546, 1, 'employees', 'getImage', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"465","REDIRECT_H2_STREAM_TAG":"4-465","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"465","H2_STREAM_TAG":"4-465","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"e2bac442a8ee6361f7fbbaf0114d81770d7bca717de01a75cb0df125afc2e6d5","SSL_SESSION_RESUMED":"Resumed","CONTENT_LENGTH":"167","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_ACCEPT":"*\\/*","HTTP_X_REQUESTED_WITH":"XMLHttpRequest","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","CONTENT_TYPE":"application\\/x-www-form-urlencoded; charset=UTF-8","HTTP_ORIGIN":"https:\\/\\/vip.loc","HTTP_SEC_FETCH_SITE":"same-origin","HTTP_SEC_FETCH_MODE":"cors","HTTP_SEC_FETCH_DEST":"empty","HTTP_REFERER":"https:\\/\\/vip.loc\\/admin\\/employees\\/default\\/edit?id=1","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"53301","REDIRECT_URL":"\\/admin\\/employees\\/default\\/getImage","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"POST","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/employees\\/default\\/getImage","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628690787.543025,"REQUEST_TIME":1628690787}', '2021-08-11 17:06:27', '2021-08-11 17:06:27'),
	(12547, 1, 'employees', 'getImage', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"535","REDIRECT_H2_STREAM_TAG":"4-535","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"535","H2_STREAM_TAG":"4-535","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"e2bac442a8ee6361f7fbbaf0114d81770d7bca717de01a75cb0df125afc2e6d5","SSL_SESSION_RESUMED":"Resumed","CONTENT_LENGTH":"167","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_ACCEPT":"*\\/*","HTTP_X_REQUESTED_WITH":"XMLHttpRequest","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","CONTENT_TYPE":"application\\/x-www-form-urlencoded; charset=UTF-8","HTTP_ORIGIN":"https:\\/\\/vip.loc","HTTP_SEC_FETCH_SITE":"same-origin","HTTP_SEC_FETCH_MODE":"cors","HTTP_SEC_FETCH_DEST":"empty","HTTP_REFERER":"https:\\/\\/vip.loc\\/admin\\/employees\\/default\\/edit?id=1","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"53301","REDIRECT_URL":"\\/admin\\/employees\\/default\\/getImage","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"POST","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/employees\\/default\\/getImage","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628690848.43816,"REQUEST_TIME":1628690848}', '2021-08-11 17:07:28', '2021-08-11 17:07:28'),
	(12548, 1, 'dashboard', 'index', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"229","REDIRECT_H2_STREAM_TAG":"4-229","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"229","H2_STREAM_TAG":"4-229","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"864621a4ed30f50a03e511e97dae99b308f36517b38f6eb03cd9cb1aaf403a25","SSL_SESSION_RESUMED":"Initial","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"same-origin","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_REFERER":"https:\\/\\/vip.loc\\/admin\\/members","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"50341","REDIRECT_URL":"\\/admin\\/dashboard","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"GET","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/dashboard","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628691945.841084,"REQUEST_TIME":1628691945}', '2021-08-11 17:25:45', '2021-08-11 17:25:45'),
	(12549, 1, 'dashboard', 'index', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"235","REDIRECT_H2_STREAM_TAG":"4-235","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"235","H2_STREAM_TAG":"4-235","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"864621a4ed30f50a03e511e97dae99b308f36517b38f6eb03cd9cb1aaf403a25","SSL_SESSION_RESUMED":"Initial","HTTP_CACHE_CONTROL":"max-age=0","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"none","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"50341","REDIRECT_URL":"\\/admin\\/dashboard","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"GET","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/dashboard","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628692047.161652,"REQUEST_TIME":1628692047}', '2021-08-11 17:27:27', '2021-08-11 17:27:27'),
	(12550, 1, 'dashboard', 'index', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"239","REDIRECT_H2_STREAM_TAG":"4-239","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"239","H2_STREAM_TAG":"4-239","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"864621a4ed30f50a03e511e97dae99b308f36517b38f6eb03cd9cb1aaf403a25","SSL_SESSION_RESUMED":"Initial","HTTP_CACHE_CONTROL":"max-age=0","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"none","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"50341","REDIRECT_URL":"\\/admin\\/dashboard","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"GET","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/dashboard","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628692068.055999,"REQUEST_TIME":1628692068}', '2021-08-11 17:27:48', '2021-08-11 17:27:48'),
	(12551, 1, 'dashboard', 'index', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"1","REDIRECT_H2_STREAM_TAG":"4-1","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"1","H2_STREAM_TAG":"4-1","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"245950bf088612d0bf35a9810ec8ba333a69c34e3aadf26841f61cccc2b9c631","SSL_SESSION_RESUMED":"Initial","HTTP_CACHE_CONTROL":"max-age=0","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"none","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"54656","REDIRECT_URL":"\\/admin\\/dashboard","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"GET","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/dashboard","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628692417.745602,"REQUEST_TIME":1628692417}', '2021-08-11 17:33:37', '2021-08-11 17:33:37'),
	(12552, 1, 'dashboard', 'index', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"1","REDIRECT_H2_STREAM_TAG":"4-1","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"1","H2_STREAM_TAG":"4-1","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"ae4f0dcfb47baecb4162e7c8802fbaeace3da48c2ad81e977abd63b79ee25f6c","SSL_SESSION_RESUMED":"Initial","HTTP_CACHE_CONTROL":"max-age=0","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"none","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"62268","REDIRECT_URL":"\\/admin\\/dashboard","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"GET","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/dashboard","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628692575.537394,"REQUEST_TIME":1628692575}', '2021-08-11 17:36:15', '2021-08-11 17:36:15'),
	(12553, 1, 'dashboard', 'index', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"7","REDIRECT_H2_STREAM_TAG":"4-7","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"7","H2_STREAM_TAG":"4-7","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"ae4f0dcfb47baecb4162e7c8802fbaeace3da48c2ad81e977abd63b79ee25f6c","SSL_SESSION_RESUMED":"Initial","HTTP_CACHE_CONTROL":"max-age=0","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"none","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"62268","REDIRECT_URL":"\\/admin\\/dashboard","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"GET","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/dashboard","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628692692.022563,"REQUEST_TIME":1628692692}', '2021-08-11 17:38:12', '2021-08-11 17:38:12'),
	(12554, 1, 'dashboard', 'index', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"13","REDIRECT_H2_STREAM_TAG":"4-13","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"13","H2_STREAM_TAG":"4-13","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"ae4f0dcfb47baecb4162e7c8802fbaeace3da48c2ad81e977abd63b79ee25f6c","SSL_SESSION_RESUMED":"Initial","HTTP_CACHE_CONTROL":"max-age=0","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"none","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"62268","REDIRECT_URL":"\\/admin\\/dashboard","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"GET","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/dashboard","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628692735.011292,"REQUEST_TIME":1628692735}', '2021-08-11 17:38:55', '2021-08-11 17:38:55'),
	(12555, 1, 'dashboard', 'index', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"17","REDIRECT_H2_STREAM_TAG":"4-17","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"17","H2_STREAM_TAG":"4-17","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"ae4f0dcfb47baecb4162e7c8802fbaeace3da48c2ad81e977abd63b79ee25f6c","SSL_SESSION_RESUMED":"Initial","HTTP_CACHE_CONTROL":"max-age=0","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"none","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"62268","REDIRECT_URL":"\\/admin\\/dashboard","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"GET","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/dashboard","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628692752.631256,"REQUEST_TIME":1628692752}', '2021-08-11 17:39:12', '2021-08-11 17:39:12'),
	(12556, 1, 'dashboard', 'index', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"21","REDIRECT_H2_STREAM_TAG":"4-21","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"21","H2_STREAM_TAG":"4-21","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"ae4f0dcfb47baecb4162e7c8802fbaeace3da48c2ad81e977abd63b79ee25f6c","SSL_SESSION_RESUMED":"Initial","HTTP_CACHE_CONTROL":"max-age=0","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"none","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"62268","REDIRECT_URL":"\\/admin\\/dashboard","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"GET","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/dashboard","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628692828.702615,"REQUEST_TIME":1628692828}', '2021-08-11 17:40:28', '2021-08-11 17:40:28'),
	(12557, 1, 'dashboard', 'index', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"27","REDIRECT_H2_STREAM_TAG":"4-27","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"27","H2_STREAM_TAG":"4-27","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"ae4f0dcfb47baecb4162e7c8802fbaeace3da48c2ad81e977abd63b79ee25f6c","SSL_SESSION_RESUMED":"Initial","HTTP_CACHE_CONTROL":"max-age=0","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"none","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"62268","REDIRECT_URL":"\\/admin\\/dashboard","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"GET","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/dashboard","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628692849.63777,"REQUEST_TIME":1628692849}', '2021-08-11 17:40:49', '2021-08-11 17:40:49'),
	(12558, 1, 'dashboard', 'index', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"31","REDIRECT_H2_STREAM_TAG":"4-31","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"31","H2_STREAM_TAG":"4-31","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"ae4f0dcfb47baecb4162e7c8802fbaeace3da48c2ad81e977abd63b79ee25f6c","SSL_SESSION_RESUMED":"Initial","HTTP_CACHE_CONTROL":"max-age=0","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"none","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"62268","REDIRECT_URL":"\\/admin\\/dashboard","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"GET","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/dashboard","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628692905.855109,"REQUEST_TIME":1628692905}', '2021-08-11 17:41:45', '2021-08-11 17:41:45'),
	(12559, 1, 'dashboard', 'index', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"69","REDIRECT_H2_STREAM_TAG":"4-69","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"69","H2_STREAM_TAG":"4-69","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"ae4f0dcfb47baecb4162e7c8802fbaeace3da48c2ad81e977abd63b79ee25f6c","SSL_SESSION_RESUMED":"Initial","HTTP_CACHE_CONTROL":"max-age=0","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"none","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"62268","REDIRECT_URL":"\\/admin\\/dashboard","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"GET","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/dashboard","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628692971.767304,"REQUEST_TIME":1628692971}', '2021-08-11 17:42:51', '2021-08-11 17:42:51'),
	(12560, 1, 'dashboard', 'index', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"75","REDIRECT_H2_STREAM_TAG":"4-75","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"75","H2_STREAM_TAG":"4-75","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"ae4f0dcfb47baecb4162e7c8802fbaeace3da48c2ad81e977abd63b79ee25f6c","SSL_SESSION_RESUMED":"Initial","HTTP_CACHE_CONTROL":"max-age=0","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"none","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"62268","REDIRECT_URL":"\\/admin\\/dashboard","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"GET","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/dashboard","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628693013.485189,"REQUEST_TIME":1628693013}', '2021-08-11 17:43:33', '2021-08-11 17:43:33'),
	(12561, 1, 'dashboard', 'index', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"165","REDIRECT_H2_STREAM_TAG":"4-165","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"165","H2_STREAM_TAG":"4-165","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"ae4f0dcfb47baecb4162e7c8802fbaeace3da48c2ad81e977abd63b79ee25f6c","SSL_SESSION_RESUMED":"Initial","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"none","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"62268","REDIRECT_URL":"\\/admin\\/dashboard","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"GET","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/dashboard","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628693061.666146,"REQUEST_TIME":1628693061}', '2021-08-11 17:44:21', '2021-08-11 17:44:21'),
	(12562, 1, 'employees', 'edit', 'ACCESS_DENIED', '1', '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"43","REDIRECT_H2_STREAM_TAG":"4-43","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"43","H2_STREAM_TAG":"4-43","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"a0b1277629c65cfcc65a1fea8f1af5c5efe4f467be92962a5c761aab01f235ac","SSL_SESSION_RESUMED":"Resumed","CONTENT_LENGTH":"12725","HTTP_PRAGMA":"no-cache","HTTP_CACHE_CONTROL":"no-cache","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ORIGIN":"https:\\/\\/vip.loc","CONTENT_TYPE":"application\\/x-www-form-urlencoded","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"same-origin","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_REFERER":"https:\\/\\/vip.loc\\/admin\\/employees\\/default\\/edit?id=1","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"53191","REDIRECT_URL":"\\/admin\\/employees\\/default\\/edit","REDIRECT_QUERY_STRING":"id=1","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"POST","QUERY_STRING":"id=1","REQUEST_URI":"\\/admin\\/employees\\/default\\/edit?id=1","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628693284.430493,"REQUEST_TIME":1628693284}', '2021-08-11 17:48:04', '2021-08-11 17:48:04'),
	(12563, 1, 'employees', 'getImage', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"137","REDIRECT_H2_STREAM_TAG":"4-137","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"137","H2_STREAM_TAG":"4-137","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"a0b1277629c65cfcc65a1fea8f1af5c5efe4f467be92962a5c761aab01f235ac","SSL_SESSION_RESUMED":"Resumed","CONTENT_LENGTH":"167","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_ACCEPT":"*\\/*","HTTP_X_REQUESTED_WITH":"XMLHttpRequest","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","CONTENT_TYPE":"application\\/x-www-form-urlencoded; charset=UTF-8","HTTP_ORIGIN":"https:\\/\\/vip.loc","HTTP_SEC_FETCH_SITE":"same-origin","HTTP_SEC_FETCH_MODE":"cors","HTTP_SEC_FETCH_DEST":"empty","HTTP_REFERER":"https:\\/\\/vip.loc\\/admin\\/employees\\/default\\/edit?id=1","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"53191","REDIRECT_URL":"\\/admin\\/employees\\/default\\/getImage","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"POST","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/employees\\/default\\/getImage","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628693347.157463,"REQUEST_TIME":1628693347}', '2021-08-11 17:49:07', '2021-08-11 17:49:07'),
	(12564, 1, 'members', 'index', 'ACCESS_DENIED', NULL, '127.0.0.1', '{"REDIRECT_HTTP2":"on","REDIRECT_H2PUSH":"on","REDIRECT_H2_PUSH":"on","REDIRECT_H2_PUSHED":"","REDIRECT_H2_PUSHED_ON":"","REDIRECT_H2_STREAM_ID":"49","REDIRECT_H2_STREAM_TAG":"1-49","REDIRECT_HTTPS":"on","REDIRECT_SSL_TLS_SNI":"vip.loc","REDIRECT_STATUS":"200","HTTP2":"on","H2PUSH":"on","H2_PUSH":"on","H2_PUSHED":"","H2_PUSHED_ON":"","H2_STREAM_ID":"49","H2_STREAM_TAG":"1-49","HTTPS":"on","SSL_TLS_SNI":"vip.loc","SSL_SERVER_S_DN_CN":"localhost","SSL_SERVER_I_DN_CN":"ospanel","SSL_VERSION_INTERFACE":"mod_ssl\\/2.4.48","SSL_VERSION_LIBRARY":"OpenSSL\\/1.1.1k","SSL_PROTOCOL":"TLSv1.3","SSL_SECURE_RENEG":"false","SSL_COMPRESS_METHOD":"NULL","SSL_CIPHER":"TLS_AES_128_GCM_SHA256","SSL_CIPHER_EXPORT":"false","SSL_CIPHER_USEKEYSIZE":"128","SSL_CIPHER_ALGKEYSIZE":"128","SSL_CLIENT_VERIFY":"NONE","SSL_SERVER_M_VERSION":"1","SSL_SERVER_M_SERIAL":"AF90673611D8DD9B","SSL_SERVER_V_START":"Dec 23 10:54:34 2016 GMT","SSL_SERVER_V_END":"Dec 20 10:54:34 2031 GMT","SSL_SERVER_S_DN":"CN=localhost","SSL_SERVER_I_DN":"CN=ospanel","SSL_SERVER_A_KEY":"rsaEncryption","SSL_SERVER_A_SIG":"sha256WithRSAEncryption","SSL_SESSION_ID":"077c51cfc9e5d07a4523572b247e92338a5c540e6b7ac6a36077c15ce122b9e8","SSL_SESSION_RESUMED":"Resumed","HTTP_SEC_CH_UA":"\\"Chromium\\";v=\\"92\\", \\" Not A;Brand\\";v=\\"99\\", \\"Google Chrome\\";v=\\"92\\"","HTTP_SEC_CH_UA_MOBILE":"?0","HTTP_UPGRADE_INSECURE_REQUESTS":"1","HTTP_USER_AGENT":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/92.0.4515.131 Safari\\/537.36","HTTP_ACCEPT":"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9","HTTP_SEC_FETCH_SITE":"same-origin","HTTP_SEC_FETCH_MODE":"navigate","HTTP_SEC_FETCH_USER":"?1","HTTP_SEC_FETCH_DEST":"document","HTTP_REFERER":"https:\\/\\/vip.loc\\/admin\\/employees\\/default\\/edit?id=1","HTTP_ACCEPT_ENCODING":"gzip, deflate, br","HTTP_ACCEPT_LANGUAGE":"ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7","HTTP_COOKIE":"advanced-frontend=ec0b8qv918kaq0rvdr77mb2t2efagamg; _csrf-frontend=c9ab8f9629a0691d2932e392ddbbede9cd29e959c197599cf5e66bf449041d9ba%3A2%3A%7Bi%3A0%3Bs%3A14%3A%22_csrf-frontend%22%3Bi%3A1%3Bs%3A32%3A%22p-H31_vPxC8KNTjeGo2Hp3sVgY3dNqXG%22%3B%7D; kt_aside_toggle_state=off; advanced-backend=h2e8b7go0i1uut7j59u4evkn46ifg6g1; _csrf-backend=ff20de95dcb64b4bc65d4865930a047b19fa5b9d9df30aa77f959713f5b47a6ba%3A2%3A%7Bi%3A0%3Bs%3A13%3A%22_csrf-backend%22%3Bi%3A1%3Bs%3A32%3A%22ijhgA3OTgxCIxJXoX2PgbO8EkuUkRG-5%22%3B%7D; kt_aside_menu=0.800000011920929","HTTP_HOST":"vip.loc","PATH":"c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\ext;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4\\\\pear\\\\bin;c:\\\\openserver\\\\modules\\\\php\\\\PHP_7.4;c:\\\\openserver\\\\modules\\\\wget\\\\bin;c:\\\\openserver\\\\modules\\\\database\\\\MySQL-5.7\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4\\\\bin;c:\\\\openserver\\\\modules\\\\http\\\\Apache_2.4-PHP_7.2-7.4;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\system32\\\\Wbem;C:\\\\Windows\\\\SysWOW64","SystemRoot":"C:\\\\Windows","COMSPEC":"C:\\\\Windows\\\\system32\\\\cmd.exe","PATHEXT":".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW","WINDIR":"C:\\\\Windows","SERVER_SIGNATURE":"","SERVER_SOFTWARE":"Apache","SERVER_NAME":"vip.loc","SERVER_ADDR":"127.0.0.1","SERVER_PORT":"443","REMOTE_ADDR":"127.0.0.1","DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","REQUEST_SCHEME":"https","CONTEXT_PREFIX":"","CONTEXT_DOCUMENT_ROOT":"C:\\/OpenServer\\/domains\\/localhost\\/vip","SERVER_ADMIN":"[no address given]","SCRIPT_FILENAME":"C:\\/OpenServer\\/domains\\/localhost\\/vip\\/backend\\/web\\/index.php","REMOTE_PORT":"59838","REDIRECT_URL":"\\/admin\\/members","GATEWAY_INTERFACE":"CGI\\/1.1","SERVER_PROTOCOL":"HTTP\\/2.0","REQUEST_METHOD":"GET","QUERY_STRING":"","REQUEST_URI":"\\/admin\\/members","SCRIPT_NAME":"\\/backend\\/web\\/index.php","PHP_SELF":"\\/backend\\/web\\/index.php","REQUEST_TIME_FLOAT":1628749900.046256,"REQUEST_TIME":1628749900}', '2021-08-12 09:31:40', '2021-08-12 09:31:40');
/*!40000 ALTER TABLE `wbp_user_log` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_user_permissions
DROP TABLE IF EXISTS `wbp_user_permissions`;
CREATE TABLE IF NOT EXISTS `wbp_user_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT '0',
  `module` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `controller` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `action` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `lock` smallint(6) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3056 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы games.wbp_user_permissions: ~230 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_user_permissions` DISABLE KEYS */;
INSERT INTO `wbp_user_permissions` (`id`, `user_id`, `module`, `controller`, `action`, `lock`) VALUES
	(2596, 5, 'dashboard', 'Default', 'index', 0),
	(2597, 5, 'dashboard', 'Default', 'getImage', 0),
	(2598, 5, 'dashboard', 'Default', 'add', 0),
	(2599, 5, 'dashboard', 'Default', 'uploadImage', 0),
	(2600, 5, 'dashboard', 'Default', 'getImage', 0),
	(2601, 5, 'dashboard', 'Default', 'edit', 0),
	(2602, 5, 'dashboard', 'Default', 'uploadImage', 0),
	(2603, 5, 'dashboard', 'Default', 'getImage', 0),
	(2604, 5, 'dashboard', 'Default', 'delete', 0),
	(2605, 5, 'employees', 'Default', 'index', 0),
	(2606, 5, 'employees', 'Default', 'add', 0),
	(2607, 5, 'employees', 'Default', 'uploadImage', 0),
	(2608, 5, 'employees', 'Default', 'getImage', 0),
	(2609, 5, 'employees', 'Default', 'edit', 0),
	(2610, 5, 'employees', 'Default', 'uploadImage', 0),
	(2611, 5, 'employees', 'Default', 'getImage', 0),
	(2612, 5, 'employees', 'Default', 'delete', 0),
	(2613, 5, 'excategories', 'Default', 'index', 0),
	(2614, 5, 'excategories', 'Default', 'getImage', 0),
	(2615, 5, 'excategories', 'Default', 'add', 0),
	(2616, 5, 'excategories', 'Default', 'uploadImage', 0),
	(2617, 5, 'excategories', 'Default', 'getImage', 0),
	(2618, 5, 'excategories', 'Default', 'edit', 0),
	(2619, 5, 'excategories', 'Default', 'uploadImage', 0),
	(2620, 5, 'excategories', 'Default', 'getImage', 0),
	(2621, 5, 'excategories', 'Default', 'delete', 0),
	(2622, 5, 'exercises', 'Default', 'index', 0),
	(2623, 5, 'exercises', 'Default', 'getImage', 0),
	(2624, 5, 'exercises', 'Default', 'add', 0),
	(2625, 5, 'exercises', 'Default', 'uploadImage', 0),
	(2626, 5, 'exercises', 'Default', 'getImage', 0),
	(2627, 5, 'exercises', 'Default', 'edit', 0),
	(2628, 5, 'exercises', 'Default', 'uploadImage', 0),
	(2629, 5, 'exercises', 'Default', 'getImage', 0),
	(2630, 5, 'exercises', 'Default', 'delete', 0),
	(2631, 5, 'meals', 'Default', 'index', 0),
	(2632, 5, 'meals', 'Default', 'getImage', 0),
	(2633, 5, 'meals', 'Default', 'add', 0),
	(2634, 5, 'meals', 'Default', 'uploadImage', 0),
	(2635, 5, 'meals', 'Default', 'getImage', 0),
	(2636, 5, 'meals', 'Default', 'edit', 0),
	(2637, 5, 'meals', 'Default', 'uploadImage', 0),
	(2638, 5, 'meals', 'Default', 'getImage', 0),
	(2639, 5, 'meals', 'Default', 'delete', 0),
	(2640, 5, 'mecategories', 'Default', 'index', 0),
	(2641, 5, 'mecategories', 'Default', 'getImage', 0),
	(2642, 5, 'mecategories', 'Default', 'add', 0),
	(2643, 5, 'mecategories', 'Default', 'uploadImage', 0),
	(2644, 5, 'mecategories', 'Default', 'getImage', 0),
	(2645, 5, 'mecategories', 'Default', 'edit', 0),
	(2646, 5, 'mecategories', 'Default', 'uploadImage', 0),
	(2647, 5, 'mecategories', 'Default', 'getImage', 0),
	(2648, 5, 'mecategories', 'Default', 'delete', 0),
	(2649, 5, 'members', 'Default', 'index', 0),
	(2650, 5, 'members', 'Default', 'getImage', 0),
	(2651, 5, 'members', 'Default', 'add', 0),
	(2652, 5, 'members', 'Default', 'uploadImage', 0),
	(2653, 5, 'members', 'Default', 'getImage', 0),
	(2654, 5, 'members', 'Default', 'edit', 0),
	(2655, 5, 'members', 'Default', 'uploadImage', 0),
	(2656, 5, 'members', 'Default', 'getImage', 0),
	(2657, 5, 'members', 'Default', 'delete', 0),
	(2658, 5, 'preferences', 'Default', 'index', 0),
	(2659, 5, 'preferences', 'Default', 'getImage', 0),
	(2660, 5, 'preferences', 'Default', 'add', 0),
	(2661, 5, 'preferences', 'Default', 'uploadImage', 0),
	(2662, 5, 'preferences', 'Default', 'getImage', 0),
	(2663, 5, 'preferences', 'Default', 'edit', 0),
	(2664, 5, 'preferences', 'Default', 'uploadImage', 0),
	(2665, 5, 'preferences', 'Default', 'getImage', 0),
	(2666, 5, 'preferences', 'Default', 'delete', 0),
	(2667, 5, 'profile', 'Default', 'index', 0),
	(2668, 5, 'profile', 'Default', 'add', 0),
	(2669, 5, 'profile', 'Default', 'uploadImage', 0),
	(2670, 5, 'profile', 'Default', 'getImage', 0),
	(2671, 5, 'profile', 'Default', 'edit', 0),
	(2672, 5, 'profile', 'Default', 'uploadImage', 0),
	(2673, 5, 'profile', 'Default', 'getImage', 0),
	(2674, 5, 'profile', 'Default', 'delete', 0),
	(2675, 5, 'progress', 'Default', 'index', 0),
	(2676, 5, 'progress', 'Default', 'getImage', 0),
	(2677, 5, 'progress', 'Default', 'add', 0),
	(2678, 5, 'progress', 'Default', 'uploadImage', 0),
	(2679, 5, 'progress', 'Default', 'getImage', 0),
	(2680, 5, 'progress', 'Default', 'edit', 0),
	(2681, 5, 'progress', 'Default', 'uploadImage', 0),
	(2682, 5, 'progress', 'Default', 'getImage', 0),
	(2683, 5, 'progress', 'Default', 'delete', 0),
	(2684, 5, 'supcategories', 'Default', 'index', 0),
	(2685, 5, 'supcategories', 'Default', 'getImage', 0),
	(2686, 5, 'supcategories', 'Default', 'add', 0),
	(2687, 5, 'supcategories', 'Default', 'uploadImage', 0),
	(2688, 5, 'supcategories', 'Default', 'getImage', 0),
	(2689, 5, 'supcategories', 'Default', 'edit', 0),
	(2690, 5, 'supcategories', 'Default', 'uploadImage', 0),
	(2691, 5, 'supcategories', 'Default', 'getImage', 0),
	(2692, 5, 'supcategories', 'Default', 'delete', 0),
	(2693, 5, 'supplements', 'Default', 'index', 0),
	(2694, 5, 'supplements', 'Default', 'getImage', 0),
	(2695, 5, 'supplements', 'Default', 'add', 0),
	(2696, 5, 'supplements', 'Default', 'uploadImage', 0),
	(2697, 5, 'supplements', 'Default', 'getImage', 0),
	(2698, 5, 'supplements', 'Default', 'edit', 0),
	(2699, 5, 'supplements', 'Default', 'uploadImage', 0),
	(2700, 5, 'supplements', 'Default', 'getImage', 0),
	(2701, 5, 'supplements', 'Default', 'delete', 0),
	(2702, 5, 'workouts', 'Default', 'index', 0),
	(2703, 5, 'workouts', 'Default', 'getImage', 0),
	(2704, 5, 'workouts', 'Default', 'add', 0),
	(2705, 5, 'workouts', 'Default', 'uploadImage', 0),
	(2706, 5, 'workouts', 'Default', 'getImage', 0),
	(2707, 5, 'workouts', 'Default', 'edit', 0),
	(2708, 5, 'workouts', 'Default', 'uploadImage', 0),
	(2709, 5, 'workouts', 'Default', 'getImage', 0),
	(2710, 5, 'workouts', 'Default', 'delete', 0),
	(2941, 1, 'dashboard', 'Default', 'index', 0),
	(2942, 1, 'dashboard', 'Default', 'getImage', 0),
	(2943, 1, 'dashboard', 'Default', 'add', 0),
	(2944, 1, 'dashboard', 'Default', 'uploadImage', 0),
	(2945, 1, 'dashboard', 'Default', 'getImage', 0),
	(2946, 1, 'dashboard', 'Default', 'edit', 0),
	(2947, 1, 'dashboard', 'Default', 'uploadImage', 0),
	(2948, 1, 'dashboard', 'Default', 'getImage', 0),
	(2949, 1, 'dashboard', 'Default', 'delete', 0),
	(2950, 1, 'employees', 'Default', 'index', 0),
	(2951, 1, 'employees', 'Default', 'add', 0),
	(2952, 1, 'employees', 'Default', 'uploadImage', 0),
	(2953, 1, 'employees', 'Default', 'getImage', 0),
	(2954, 1, 'employees', 'Default', 'edit', 0),
	(2955, 1, 'employees', 'Default', 'uploadImage', 0),
	(2956, 1, 'employees', 'Default', 'getImage', 0),
	(2957, 1, 'employees', 'Default', 'delete', 0),
	(2958, 1, 'excategories', 'Default', 'index', 0),
	(2959, 1, 'excategories', 'Default', 'getImage', 0),
	(2960, 1, 'excategories', 'Default', 'add', 0),
	(2961, 1, 'excategories', 'Default', 'uploadImage', 0),
	(2962, 1, 'excategories', 'Default', 'getImage', 0),
	(2963, 1, 'excategories', 'Default', 'edit', 0),
	(2964, 1, 'excategories', 'Default', 'uploadImage', 0),
	(2965, 1, 'excategories', 'Default', 'getImage', 0),
	(2966, 1, 'excategories', 'Default', 'delete', 0),
	(2967, 1, 'exercises', 'Default', 'index', 0),
	(2968, 1, 'exercises', 'Default', 'getImage', 0),
	(2969, 1, 'exercises', 'Default', 'add', 0),
	(2970, 1, 'exercises', 'Default', 'uploadImage', 0),
	(2971, 1, 'exercises', 'Default', 'getImage', 0),
	(2972, 1, 'exercises', 'Default', 'edit', 0),
	(2973, 1, 'exercises', 'Default', 'uploadImage', 0),
	(2974, 1, 'exercises', 'Default', 'getImage', 0),
	(2975, 1, 'exercises', 'Default', 'delete', 0),
	(2976, 1, 'meals', 'Default', 'index', 0),
	(2977, 1, 'meals', 'Default', 'getImage', 0),
	(2978, 1, 'meals', 'Default', 'add', 0),
	(2979, 1, 'meals', 'Default', 'uploadImage', 0),
	(2980, 1, 'meals', 'Default', 'getImage', 0),
	(2981, 1, 'meals', 'Default', 'edit', 0),
	(2982, 1, 'meals', 'Default', 'uploadImage', 0),
	(2983, 1, 'meals', 'Default', 'getImage', 0),
	(2984, 1, 'meals', 'Default', 'delete', 0),
	(2985, 1, 'mecategories', 'Default', 'index', 0),
	(2986, 1, 'mecategories', 'Default', 'getImage', 0),
	(2987, 1, 'mecategories', 'Default', 'add', 0),
	(2988, 1, 'mecategories', 'Default', 'uploadImage', 0),
	(2989, 1, 'mecategories', 'Default', 'getImage', 0),
	(2990, 1, 'mecategories', 'Default', 'edit', 0),
	(2991, 1, 'mecategories', 'Default', 'uploadImage', 0),
	(2992, 1, 'mecategories', 'Default', 'getImage', 0),
	(2993, 1, 'mecategories', 'Default', 'delete', 0),
	(2994, 1, 'members', 'Default', 'index', 0),
	(2995, 1, 'members', 'Default', 'getImage', 0),
	(2996, 1, 'members', 'Default', 'add', 0),
	(2997, 1, 'members', 'Default', 'uploadImage', 0),
	(2998, 1, 'members', 'Default', 'getImage', 0),
	(2999, 1, 'members', 'Default', 'edit', 0),
	(3000, 1, 'members', 'Default', 'uploadImage', 0),
	(3001, 1, 'members', 'Default', 'getImage', 0),
	(3002, 1, 'members', 'Default', 'delete', 0),
	(3003, 1, 'preferences', 'Default', 'index', 0),
	(3004, 1, 'preferences', 'Default', 'getImage', 0),
	(3005, 1, 'preferences', 'Default', 'add', 0),
	(3006, 1, 'preferences', 'Default', 'uploadImage', 0),
	(3007, 1, 'preferences', 'Default', 'getImage', 0),
	(3008, 1, 'preferences', 'Default', 'edit', 0),
	(3009, 1, 'preferences', 'Default', 'uploadImage', 0),
	(3010, 1, 'preferences', 'Default', 'getImage', 0),
	(3011, 1, 'preferences', 'Default', 'delete', 0),
	(3012, 1, 'profile', 'Default', 'index', 0),
	(3013, 1, 'profile', 'Default', 'add', 0),
	(3014, 1, 'profile', 'Default', 'uploadImage', 0),
	(3015, 1, 'profile', 'Default', 'getImage', 0),
	(3016, 1, 'profile', 'Default', 'edit', 0),
	(3017, 1, 'profile', 'Default', 'uploadImage', 0),
	(3018, 1, 'profile', 'Default', 'getImage', 0),
	(3019, 1, 'profile', 'Default', 'delete', 0),
	(3020, 1, 'progress', 'Default', 'index', 0),
	(3021, 1, 'progress', 'Default', 'getImage', 0),
	(3022, 1, 'progress', 'Default', 'add', 0),
	(3023, 1, 'progress', 'Default', 'uploadImage', 0),
	(3024, 1, 'progress', 'Default', 'getImage', 0),
	(3025, 1, 'progress', 'Default', 'edit', 0),
	(3026, 1, 'progress', 'Default', 'uploadImage', 0),
	(3027, 1, 'progress', 'Default', 'getImage', 0),
	(3028, 1, 'progress', 'Default', 'delete', 0),
	(3029, 1, 'supcategories', 'Default', 'index', 0),
	(3030, 1, 'supcategories', 'Default', 'getImage', 0),
	(3031, 1, 'supcategories', 'Default', 'add', 0),
	(3032, 1, 'supcategories', 'Default', 'uploadImage', 0),
	(3033, 1, 'supcategories', 'Default', 'getImage', 0),
	(3034, 1, 'supcategories', 'Default', 'edit', 0),
	(3035, 1, 'supcategories', 'Default', 'uploadImage', 0),
	(3036, 1, 'supcategories', 'Default', 'getImage', 0),
	(3037, 1, 'supcategories', 'Default', 'delete', 0),
	(3038, 1, 'supplements', 'Default', 'index', 0),
	(3039, 1, 'supplements', 'Default', 'getImage', 0),
	(3040, 1, 'supplements', 'Default', 'add', 0),
	(3041, 1, 'supplements', 'Default', 'uploadImage', 0),
	(3042, 1, 'supplements', 'Default', 'getImage', 0),
	(3043, 1, 'supplements', 'Default', 'edit', 0),
	(3044, 1, 'supplements', 'Default', 'uploadImage', 0),
	(3045, 1, 'supplements', 'Default', 'getImage', 0),
	(3046, 1, 'supplements', 'Default', 'delete', 0),
	(3047, 1, 'workouts', 'Default', 'index', 0),
	(3048, 1, 'workouts', 'Default', 'getImage', 0),
	(3049, 1, 'workouts', 'Default', 'add', 0),
	(3050, 1, 'workouts', 'Default', 'uploadImage', 0),
	(3051, 1, 'workouts', 'Default', 'getImage', 0),
	(3052, 1, 'workouts', 'Default', 'edit', 0),
	(3053, 1, 'workouts', 'Default', 'uploadImage', 0),
	(3054, 1, 'workouts', 'Default', 'getImage', 0),
	(3055, 1, 'workouts', 'Default', 'delete', 0);
/*!40000 ALTER TABLE `wbp_user_permissions` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_workouts
DROP TABLE IF EXISTS `wbp_workouts`;
CREATE TABLE IF NOT EXISTS `wbp_workouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_text` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `seo_title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goal` smallint(6) DEFAULT '0',
  `gender` smallint(6) DEFAULT '0',
  `workout_often` smallint(6) DEFAULT '0',
  `status` smallint(6) DEFAULT '0',
  `viewed` int(11) DEFAULT NULL,
  `phase` smallint(6) DEFAULT '1',
  `price` float DEFAULT '0',
  `sale_price` float DEFAULT '0',
  `percent` smallint(6) DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы games.wbp_workouts: ~9 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_workouts` DISABLE KEYS */;
INSERT INTO `wbp_workouts` (`id`, `title`, `short_text`, `text`, `seo_title`, `seo_description`, `seo_keywords`, `goal`, `gender`, `workout_often`, `status`, `viewed`, `phase`, `price`, `sale_price`, `percent`, `created_at`, `updated_at`) VALUES
	(1, 'Bikini Body Lean & Tone Home Edition', 'WELCOME TO THE LIMITLESS BODY LEAN & TONE PHASE ONE-HOME EDITION WE’RE SO GLAD YOU’RE HERE!', 'Limitless Body was created to help all you gorgeous women be your best selves, living a healthy and active lifestyle.\r\nThis program was created with every individual in mind. Whether you are a newbie to fitness, or an experienced athlete, this training guide will help you reduce body fat, increase your strength, and help you build lean muscle mass.', 'Bikini Body Lean & Tone Home Edition - title', 'Bikini Body Lean & Tone Home Edition - description', 'Bikini Body Lean & Tone Home Edition - keywords', 1, 2, 3, 1, 22, 1, 69.99, 34.99, 30, '2021-08-05 16:38:34', '2021-09-22 07:33:58'),
	(2, 'Bikini Body ABS', 'Welcom To Bikini Body Abs Phase 1', 'Bikini Body Abs was created to help all you gorgeous women achieve the tight and tone abs that you desire.\r\nWhether you want to look great in a bikini or rock your favorite crop top, our Bikini Body Ab program is a great way to help get you there!', 'Welcom To Bikini Body Abs Phase 1', 'Welcom To Bikini Body Abs Phase 1', 'Welcom To Bikini Body Abs Phase 1', 3, 2, 2, 1, 22, 1, 69.99, 34.99, 30, '2021-08-05 16:38:34', '2021-09-22 07:32:07'),
	(7, 'Bikini Body', 'Welcome to   The Limitless Bikini Body   Phase 2-gym  Edition!', 'Limitless Bikini Body was created to help all you gorgeous women be your best selves, living a healthy and active lifestyle.\r\nThis program was created with every individual in mind. Whether you are a newbie to fitness, or an experienced athlete, this training guide will help you reduce body fat, increase your strength, and help you build lean muscle mass.', 'Welcome to   The Limitless Bikini Body   Phase 2-gym  Edition!', 'Welcome to   The Limitless Bikini Body   Phase 2-gym  Edition!', 'Welcome to   The Limitless Bikini Body   Phase 2-gym  Edition!', 1, 2, 3, 1, NULL, 2, 100, 80, 20, '2021-09-22 03:26:17', '2021-09-22 07:19:54'),
	(8, 'Bikini Body', 'Welcome to   The Limitless Bikini Body   Phase 1  - home edition we’re so glad  you’re here!', 'Limitless Body was created to help all you gorgeous women be your best selves, living a healthy and active lifestyle.\r\nThis program was created with every individual in mind. Whether you are a newbie to fitness, or an experienced athlete, this 4-week training guide will help you reduce body fat, increase your strength, and help you build lean muscle mass.', 'Welcome to   The Limitless Bikini Body   Phase 1  - home edition we’re so glad  you’re here!', 'Welcome to   The Limitless Bikini Body   Phase 1  - home edition we’re so glad  you’re here!', 'Welcome to   The Limitless Bikini Body   Phase 1  - home edition we’re so glad  you’re here!', 1, 2, 3, 1, NULL, 1, 100, 70, 30, '2021-09-22 05:13:17', '2021-09-22 07:22:19'),
	(9, 'Bountiful Booty Home Edition', 'Welcome To Limitless Bountiful Booty Home Edition', 'Welcome To Limitless Bountiful \r\nBooty!\r\nThis Booty guide was created to help all you gorgeous women achieve the tight and tone tush that you desire. \r\nWhether you want to look great in a bikini, or rock your favorite jeans, our Booty guide is a great way to help get you there!', 'Welcome To Limitless Bountiful  Booty', 'Welcome To Limitless Bountiful  Booty', 'Welcome To Limitless Bountiful  Booty', 1, 2, 2, 1, NULL, 1, 100, 60, 40, '2021-09-22 05:18:15', '2021-09-22 07:27:35'),
	(10, 'Bountiful Booty Gym Edition', 'Welcome To Limitless Bountiful Booty Gym Edition', 'This Booty guide was created to help all you gorgeous women achieve the tight and tone tush that you desire. \r\nWhether you want to look great in a bikini, or rock your favorite jeans, our Booty guide is a great way to help get you there', 'Welcome To Limitless Bountiful Booty Gym Edition', 'Welcome To Limitless Bountiful Booty Gym Edition', 'Welcome To Limitless Bountiful Booty Gym Edition', 1, 2, 3, 1, NULL, 1, 100, 80, 20, '2021-09-22 05:26:10', '2021-09-22 07:29:40'),
	(11, 'Bikini Body ABS', 'Welcom To Bikini Body Abs', 'Bikini Body Abs was created to help all you gorgeous women achieve the tight and tone abs that you desire.\r\nWhether you want to look great in a bikini or rock your favorite crop top, our Bikini Body Ab program is a great way to help get you there!', 'Welcom To Bikini Body Abs', 'Welcom To Bikini Body Abs', 'Welcom To Bikini Body Abs', 3, 2, 3, 1, NULL, 2, 100, 70, 30, '2021-09-22 05:34:08', '2021-09-22 07:30:48'),
	(12, 'Fat Loss Phase 2', 'Welcome to this program builds upon the last, utilizing several techniques designed specifically for optimal fat loss. You will continue to get stronger and more conditioned, with emphasis on fat loss.', 'This workout contains Circuits, Supersets and the frequent use of TUT (time under tension), i.e. negatives or static holds at peak flex to increase intensity without increasing load. \r\n\r\nLimitless Fat Loss Phase 2\r\nCircuits are a group of exercises to be performed in succession to complete a round. Each circuit is made up of multiple rounds, which is specified at the start of each circuit. Circuits are labeled and color-coded along the left margin for clarity as seen in the example below .', 'FAT LOSS', 'FAT LOSS', 'FAT LOSS', 1, 1, 3, 1, NULL, 2, 100, 60, 40, '2021-09-22 07:43:59', '2021-09-22 07:48:11'),
	(13, 'Fat Loss Phase 1', 'Welcome to Fat Loss program utilizes several proven  techniques designed specifically for  optimal fat loss. Overall, you will get  stronger and more conditioned, with  emphasis on fat loss.', 'This workout contains Circuits, Supersets and the frequent use of TUT (time under tension), i.e. negatives or static holds at peak flex to increase intensity without increasing load.\r\n Limitless Fat Loss Circuits are a group of exercises to be performed in succession to complete a round. Each circuit is made up of multiple rounds, which is specified at the start of each circuit. Circuits are labeled and color-coded along the left margin for clarity as seen in the example below .', 'Welcome to Fat Loss program', 'Welcome to Fat Loss program', 'Welcome to Fat Loss program', 1, 1, 3, 1, NULL, 1, 100, 50, 50, '2021-09-22 07:47:04', '2021-09-22 07:47:45');
/*!40000 ALTER TABLE `wbp_workouts` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_workouts_exercises
DROP TABLE IF EXISTS `wbp_workouts_exercises`;
CREATE TABLE IF NOT EXISTS `wbp_workouts_exercises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `workout_id` int(11) NOT NULL DEFAULT '0',
  `exercise_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы games.wbp_workouts_exercises: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_workouts_exercises` DISABLE KEYS */;
INSERT INTO `wbp_workouts_exercises` (`id`, `workout_id`, `exercise_id`) VALUES
	(79, 2, 2),
	(80, 1, 2),
	(81, 1, 3),
	(82, 1, 5);
/*!40000 ALTER TABLE `wbp_workouts_exercises` ENABLE KEYS */;

-- Дамп структуры для таблица games.wbp_workout_plans
DROP TABLE IF EXISTS `wbp_workout_plans`;
CREATE TABLE IF NOT EXISTS `wbp_workout_plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL DEFAULT '',
  `description` text,
  `status` smallint(6) DEFAULT '0',
  `phase1` varchar(255) NOT NULL DEFAULT '',
  `phase2` varchar(255) NOT NULL DEFAULT '',
  `goal` smallint(6) DEFAULT '0',
  `sex` smallint(6) DEFAULT '0',
  `place` smallint(6) DEFAULT '0',
  `price` int(11) DEFAULT '0',
  `isPaid` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_status` (`status`),
  KEY `idx_created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Дамп данных таблицы games.wbp_workout_plans: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `wbp_workout_plans` DISABLE KEYS */;
/*!40000 ALTER TABLE `wbp_workout_plans` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
