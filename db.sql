SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `polls`;
CREATE TABLE `polls` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `polls` (`id`, `name`, `status`) VALUES
(13,	'Ð¡ÐµÑÑÐ¸Ñ #1',	1),
(14,	'Ð¡ÐµÑÑÐ¸Ñ #2',	0);

DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `poll_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` tinyint(3) unsigned NOT NULL,
  `options` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `poll_id` (`poll_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `questions` (`id`, `poll_id`, `name`, `type`, `options`) VALUES
(39,	13,	'Айфвй акйе',	2,	'a:1:{s:0:\"\";s:1:\"0\";}'),
(40,	13,	'Ð¡Ñ‚Ñ€Ð¾ÐºÐ°',	3,	'a:1:{s:0:\"\";s:1:\"0\";}'),
(41,	13,	'Ð¢ÐµÐºÑÑ‚',	4,	'a:1:{s:0:\"\";s:1:\"0\";}'),
(42,	13,	'ÐœÐ½ Ð²Ñ‹Ð±Ð¾Ñ€ ÑÐµÐ»ÐµÐºÑ‚',	5,	'a:3:{s:17:\"Ð¡ÐµÐ»ÐµÐºÑ‚ â„–1\";s:3:\"100\";s:17:\"Ð¡ÐµÐ»ÐµÐºÑ‚ â„–2\";s:1:\"0\";s:17:\"Ð¡ÐµÐ»ÐµÐºÑ‚ â„–3\";s:4:\"-100\";}'),
(43,	13,	'ÐœÐ½ Ð²Ñ‹Ð±Ð¾Ñ€ Ñ‡ÐµÐºÐ±Ð¾ÐºÑÑ‹',	6,	'a:3:{s:19:\"Ð§ÐµÐºÐ±Ð¾ÐºÑ â„–1\";s:3:\"100\";s:19:\"Ð§ÐµÐºÐ±Ð¾ÐºÑ â„–2\";s:1:\"0\";s:19:\"Ð§ÐµÐºÐ±Ð¾ÐºÑ â„–3\";s:4:\"-100\";}'),
(44,	14,	'Айфвй акйе',	2,	'a:1:{s:0:\"\";s:1:\"0\";}'),
(45,	14,	'Ð¡Ñ‚Ñ€Ð¾ÐºÐ°',	3,	'a:1:{s:0:\"\";s:1:\"0\";}'),
(46,	14,	'Ð¢ÐµÐºÑÑ‚Ð¾Ð²Ð¾Ðµ Ð¿Ð¾Ð»Ðµ',	4,	'a:1:{s:0:\"\";s:1:\"0\";}'),
(47,	14,	'ÐœÐ½ Ð²Ñ‹Ð±Ð¾Ñ€ Ñ€Ð°Ð´Ð¸Ð¾',	5,	'a:1:{s:17:\"Ð¡ÐµÐ»ÐµÐºÑ‚ â„–1\";s:2:\"25\";}'),
(48,	14,	'Ð§ÐµÐºÐ±Ð¾ÐºÑÑ‹',	6,	'a:3:{s:19:\"Ð§ÐµÐºÐ±Ð¾ÐºÑ â„–1\";s:1:\"5\";s:19:\"Ð§ÐµÐºÐ±Ð¾ÐºÑ â„–2\";s:3:\"-33\";s:19:\"Ð§ÐµÐºÐ±Ð¾ÐºÑ â„–3\";s:3:\"-56\";}');

DROP TABLE IF EXISTS `results`;
CREATE TABLE `results` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `poll_id` bigint(20) unsigned NOT NULL,
  `link` varchar(32) NOT NULL,
  `results` text NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `poll_id` (`poll_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

INSERT INTO `results` (`id`, `poll_id`, `link`, `results`, `title`) VALUES
(6,	13,	'd4004dcb03b933ca07d6ef983e001f98',	'',	'Ð ÐµÑÐ¿Ð¾Ð½Ð´ÐµÐ½Ñ‚ 1'),
(7,	13,	'4748d09240400033b986e33591946484',	'a:2:{s:7:\"poll_id\";s:2:\"13\";s:6:\"answer\";a:5:{i:0;s:2:\"15\";i:1;s:12:\"Ð¡Ñ‚Ñ€Ð¾ÐºÐ°\";i:2;s:10:\"Ð¢ÐµÐºÑÑ‚\";i:3;s:17:\"Ð¡ÐµÐ»ÐµÐºÑ‚ â„–3\";i:4;a:2:{s:19:\"Ð§ÐµÐºÐ±Ð¾ÐºÑ â„–2\";s:19:\"Ð§ÐµÐºÐ±Ð¾ÐºÑ â„–2\";s:19:\"Ð§ÐµÐºÐ±Ð¾ÐºÑ â„–3\";s:19:\"Ð§ÐµÐºÐ±Ð¾ÐºÑ â„–3\";}}}',	'Ð ÐµÑÐ¿Ð¾Ð½Ð´ÐµÐ½Ñ‚ 2');

-- 2020-06-25 13:31:00
