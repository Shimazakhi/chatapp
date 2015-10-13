-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Окт 13 2015 г., 13:56
-- Версия сервера: 5.6.26
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `chatapp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `channels`
--

CREATE TABLE IF NOT EXISTS `channels` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `topic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `channels`
--

INSERT INTO `channels` (`id`, `name`, `topic`, `created_at`, `updated_at`) VALUES
(1, 'Chatties', 'This is main chatties channel. Type /help to see available commands.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Music', 'Channel where u can discuss Music', '2015-10-13 11:13:08', '2015-10-13 11:13:08'),
(3, 'Gaming', 'Channel where u can discuss Gaming', '2015-10-13 11:13:14', '2015-10-13 11:13:14'),
(4, 'Polytics', 'Random topic', '2015-10-13 11:13:23', '2015-10-13 11:36:09');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) unsigned NOT NULL,
  `body` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `from` tinyint(1) NOT NULL,
  `to` tinyint(1) NOT NULL,
  `channel` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `body`, `from`, `to`, `channel`, `created_at`, `updated_at`) VALUES
(1, 'Hello world', 2, 0, 1, '2015-10-13 11:18:31', '2015-10-13 11:18:31'),
(2, 'brah', 4, 2, 0, '2015-10-13 11:18:41', '2015-10-13 11:18:41'),
(3, '123123', 2, 4, 0, '2015-10-13 11:20:53', '2015-10-13 11:20:53'),
(4, 'русский', 4, 0, 1, '2015-10-13 11:30:07', '2015-10-13 11:30:07'),
(5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ', 4, 0, 1, '2015-10-13 11:30:27', '2015-10-13 11:30:27'),
(6, ' There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,', 4, 0, 1, '2015-10-13 11:30:54', '2015-10-13 11:30:54'),
(7, ' combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 4, 0, 1, '2015-10-13 11:31:10', '2015-10-13 11:31:10'),
(8, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 2, 0, 1, '2015-10-13 11:31:47', '2015-10-13 11:31:47'),
(9, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney', 4, 0, 1, '2015-10-13 11:32:03', '2015-10-13 11:32:03'),
(10, ' There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form', 4, 0, 1, '2015-10-13 11:32:29', '2015-10-13 11:32:29'),
(11, ' There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form', 4, 0, 1, '2015-10-13 11:32:31', '2015-10-13 11:32:31'),
(12, 'There are many variations of passages of Lorem Ipsum available', 4, 0, 1, '2015-10-13 11:33:08', '2015-10-13 11:33:08'),
(13, 'Lorem Ipsum has been the industry''s standard dummy ', 4, 0, 1, '2015-10-13 11:33:21', '2015-10-13 11:33:21'),
(14, '123123123123', 4, 0, 1, '2015-10-13 11:34:10', '2015-10-13 11:34:10'),
(15, '123123123123', 4, 0, 1, '2015-10-13 11:34:12', '2015-10-13 11:34:12'),
(16, '423423424', 4, 0, 1, '2015-10-13 11:34:14', '2015-10-13 11:34:14'),
(17, '12342342', 4, 0, 1, '2015-10-13 11:34:15', '2015-10-13 11:34:15'),
(18, '3454545454', 4, 0, 1, '2015-10-13 11:34:17', '2015-10-13 11:34:17'),
(19, '41123123123123123', 4, 0, 1, '2015-10-13 11:34:20', '2015-10-13 11:34:20'),
(20, '1231231', 4, 0, 1, '2015-10-13 11:34:21', '2015-10-13 11:34:21'),
(21, '4234234234234', 4, 0, 1, '2015-10-13 11:34:25', '2015-10-13 11:34:25'),
(22, '234214124', 4, 0, 1, '2015-10-13 11:34:27', '2015-10-13 11:34:27'),
(23, '342342424123423', 4, 0, 1, '2015-10-13 11:34:28', '2015-10-13 11:34:28'),
(24, '234234234234231', 4, 0, 1, '2015-10-13 11:34:30', '2015-10-13 11:34:30'),
(25, '2341234214', 4, 0, 1, '2015-10-13 11:34:32', '2015-10-13 11:34:32'),
(26, '123412341234', 4, 0, 1, '2015-10-13 11:34:34', '2015-10-13 11:34:34'),
(27, '12341234', 4, 0, 1, '2015-10-13 11:34:35', '2015-10-13 11:34:35'),
(28, '12341234', 4, 0, 1, '2015-10-13 11:34:36', '2015-10-13 11:34:36'),
(29, '34', 4, 0, 1, '2015-10-13 11:34:37', '2015-10-13 11:34:37'),
(30, '1234123424', 4, 0, 1, '2015-10-13 11:34:39', '2015-10-13 11:34:39');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_09_17_234350_create_messages_table', 1),
('2015_09_17_234412_create_channels_table', 1),
('2015_09_18_003109_create_users_table', 2),
('2015_09_20_210002_create_channels_table', 2),
('2015_09_20_210020_create_messages_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `nickname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `nickname`, `firstname`, `lastname`, `description`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Shimazakhi', 'Alex', 'Cherny', 'Hello', 'shimazakhi@yandex.ru', '$2y$10$gWNohnVsZwyNK7CBGIoL6e0u/G..SEdiTs9PPpmNmYCaH45oc50jm', NULL, NULL, '2015-10-13 11:06:56', '2015-10-13 11:06:56'),
(3, 'Creo', 'Alex', 'Cherny', 'Hello world', 'shimazakhi@yandex.com', '$2y$10$9LDDulNdnDKqDJsG2Ta2rujcxJ1Q/UpJpMnJlNuBlNfaBoW/.dATq', 1, 'wrwHgSPT5fXJh8ftO8K6nA5shHEjpPtvlalpmnVRX9lylvdHMHX1lNA1Jy76', '2015-10-13 11:10:04', '2015-10-13 11:47:12'),
(4, 'Hoske', 'Alex', 'Lyesogorova', 'From Odessa', 'sasha.hoske@gmail.com', '$2y$10$wQvYPePZWNisNhQ9u1kdRehK5B.goa1pM.ijT7dW1w/dHyl6UapXe', NULL, 'zCblqpgM2GRTgkjPAtMl7DAFCENIRCqW1Kb05QaFyBbxyirAEKX33ZR7T84j', '2015-10-13 11:17:36', '2015-10-13 11:35:47'),
(5, 'Kirill', 'Kir', 'James', 'Cat', 'shimazakhi@yandex.ua', '$2y$10$4OG5ZBrl/tmZNPwHPx9mfeWNhcxmBu5CkFdZeHqjKTcK4dabTFpea', NULL, 'NBd6HY1zB9AY4Z8Q8uszkkGmYKOQvdybkRrHxq73XKjZZeLIitKVHQvGXCKk', '2015-10-13 11:47:47', '2015-10-13 11:50:03');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `channels_name_unique` (`name`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `channels`
--
ALTER TABLE `channels`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
