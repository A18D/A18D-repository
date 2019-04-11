-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Апр 11 2019 г., 08:17
-- Версия сервера: 5.7.25-log
-- Версия PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testbd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `intro` text NOT NULL,
  `text` text NOT NULL,
  `date` int(11) UNSIGNED NOT NULL,
  `author` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `intro`, `text`, `date`, `author`) VALUES
(1, 'Vanessa add', 'Ð­Ñ‚Ð¾ Ð¿Ñ€Ð¾ÑÑ‚Ð¾Ðµ Ð¸Ð½Ñ‚Ñ€Ð¾ Ð´Ð»Ñ Ð½Ð°ÑˆÐµÐ¹ ÑÑ‚Ð°Ñ‚ÑŒÐ¸', 'Vanessa add - Ð¿Ñ€Ð¾ÑÑ‚Ð¾Ð¹ Ñ„Ñ€ÐµÐ¹Ð¼Ð²Ð¾Ñ€Ðº Ð´Ð»Ñ Ñ‚ÐµÑÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ñ Ñ€Ð°Ð·Ñ€Ð°Ð±Ð¾Ñ‚Ð¾Ðº Ð½Ð° Ð¿Ð»Ð°Ñ‚Ñ„Ð¾Ñ€Ð¼Ðµ 1Ð¡', 1554143699, 'kairat'),
(2, 'Microsoft SQL Server 2017 Ð¿Ð¾Ð»ÑƒÑ‡Ð¸Ð»Ð° ÑÐµÑ€Ñ‚Ð¸Ñ„Ð¸ÐºÐ°Ñ‚ Ð¤Ð¡Ð¢Ð­Ðš Ð Ð¾ÑÑÐ¸Ð¸', 'Ð§Ñ‚Ð¾ Ñ…Ð¾Ñ€Ð¾ÑˆÐµÐ³Ð¾ Ð² SQL Server 2017', 'Ð¡ Ð¾ÐºÑ‚ÑÐ±Ñ€Ñ 2017 Ð³Ð¾Ð´Ð° ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ñ Microsoft Ñ€Ð°ÑÐ¿Ñ€Ð¾ÑÑ‚Ñ€Ð°Ð½ÑÐµÑ‚ Ð²ÐµÑ€ÑÐ¸ÑŽ Ð¡Ð£Ð‘Ð” SQL 2017, ÐºÐ¾Ñ‚Ð¾Ñ€Ð°Ñ Ñ€Ð°Ð·Ð²ÐµÑ€Ñ‚Ñ‹Ð²Ð°ÐµÑ‚ÑÑ Ð¸ Ð½Ð° Linux. Ð’ ÑÑ‚Ð¾Ð¹ Ñ€ÐµÐ´Ð°ÐºÑ†Ð¸Ð¸ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»ÑŒ Ð¼Ð¾Ð¶ÐµÑ‚ Ð²Ñ‹Ð±Ñ€Ð°Ñ‚ÑŒ Ð½ÑƒÐ¶Ð½ÑƒÑŽ ÑÐ·Ñ‹ÐºÐ¾Ð²ÑƒÑŽ Ð²ÐµÑ€ÑÐ¸ÑŽ ÐºÐ°Ðº Ð½Ð° Ð»Ð¾ÐºÐ°Ð»ÑŒÐ½Ð¾Ð¹ Ð¿Ð»Ð°Ñ‚Ñ„Ð¾Ñ€Ð¼Ðµ, Ñ‚Ð°Ðº Ð¸ Ð² Ð¾Ð±Ð»Ð°ÐºÐµ. Ð¡Ð£Ð‘Ð” Ð¿Ð¾Ð´Ð´ÐµÑ€Ð¶Ð¸Ð²Ð°ÐµÑ‚ ÐºÐ¾Ð½Ñ‚ÐµÐ¹Ð½ÐµÑ€Ñ‹ Docker: Ð¸ Ð¿Ð¾Ð·Ð²Ð¾Ð»ÑÐµÑ‚ Ð·Ð°Ð¿Ð°ÐºÐ¾Ð²Ð°Ñ‚ÑŒ Ð¿Ñ€Ð¸Ð»Ð¾Ð¶ÐµÐ½Ð¸Ðµ Ñ ÐµÐ³Ð¾ Ð¾ÐºÑ€ÑƒÐ¶ÐµÐ½Ð¸ÐµÐ¼ Ð² ÐºÐ¾Ð½Ñ‚ÐµÐ¹Ð½ÐµÑ€ Ð¸ Ð¿ÐµÑ€ÐµÐ½Ð¾ÑÐ¸Ñ‚ Ð½Ð° Ð»ÑŽÐ±ÑƒÑŽ Linux-ÑÐ¸ÑÑ‚ÐµÐ¼Ñƒ.\n\nÐ•Ñ‰Ðµ Ð¾Ð´Ð½Ð¾ Ð´Ð¾ÑÑ‚Ð¾Ð¸Ð½ÑÑ‚Ð²Ð¾ ÑÐ¸ÑÑ‚ÐµÐ¼Ñ‹ â€“ Ð»ÐµÐ³ÐºÐ°Ñ Ð¼Ð°ÑÑˆÑ‚Ð°Ð±Ð¸Ñ€ÑƒÐµÐ¼Ð¾ÑÑ‚ÑŒ, Ð°Ð½Ð°Ð»Ð¸Ñ‚Ð¸ÐºÐ° Ð² Ñ€ÐµÐ¶Ð¸Ð¼Ðµ Ñ€ÐµÐ°Ð»ÑŒÐ½Ð¾Ð³Ð¾ Ð²Ñ€ÐµÐ¼ÐµÐ½Ð¸ Ð¸ Ð»ÑƒÑ‡ÑˆÐ°Ñ Ð±ÐµÐ·Ð¾Ð¿Ð°ÑÐ½Ð¾ÑÑ‚ÑŒ Ð¿Ð¾ Ñ€ÐµÐ·ÑƒÐ»ÑŒÑ‚Ð°Ñ‚Ð°Ð¼ Ñ‚ÐµÑÑ‚Ð¾Ð² ÐÐ°Ñ†Ð¸Ð¾Ð½Ð°Ð»ÑŒÐ½Ð¾Ð³Ð¾ Ð¸Ð½ÑÑ‚Ð¸Ñ‚ÑƒÑ‚Ð° ÑÑ‚Ð°Ð½Ð´Ð°Ñ€Ñ‚Ð¾Ð² Ð¸ Ñ‚ÐµÑ…Ð½Ð¾Ð»Ð¾Ð³Ð¸Ð¹ Ð¡Ð¨Ð.', 1554228871, 'kairat'),
(3, 'Bitap Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼, Ð¼Ð¾Ð´Ð¸Ñ„Ð¸ÐºÐ°Ñ†Ð¸Ñ Ð¾Ñ‚ Wu-Manber', 'Ð’Ñ€ÐµÐ¼ÐµÐ½Ð°Ð¼Ð¸ Ð½ÑƒÐ¶ÐµÐ½ Ð½ÐµÑ‡Ñ‘Ñ‚ÐºÐ¸Ð¹ Ð¿Ð¾Ð¸ÑÐº Ð² Ñ‚ÐµÐºÑÑ‚Ðµ, Ð½Ð¾ Ð½Ðµ Ð²ÑÐµÐ³Ð´Ð° Ð¼Ð¾Ð¶Ð½Ð¾ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÑŒ Ð²Ð½ÐµÑˆÐ½Ð¸Ðµ ÐºÐ¾Ð¼Ð¿Ð¾Ð½ÐµÐ½Ñ‚Ñ‹. Ð”Ð°Ð½Ð½Ñ‹Ð¹ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼ Ð¿Ñ€Ð¾ÑÑ‚, Ð´Ð¾ÑÑ‚Ð°Ñ‚Ð¾Ñ‡Ð½Ð¾ Ð±Ñ‹ÑÑ‚Ñ€.', 'Ð”Ð»Ñ ÑÐ¼ÑƒÐ»ÑÑ†Ð¸Ð¸ Ð±Ð¸Ñ‚Ð¾Ð²Ñ‹Ñ… Ð¾Ð¿ÐµÑ€Ð°Ñ†Ð¸Ð¹ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ð»Ð°ÑÑŒ ÑÑ‚Ð° Ð¿ÑƒÐ±Ð»Ð¸ÐºÐ°Ñ†Ð¸Ñ. ÐšÐ¾Ð´ Ð¼Ð¾Ð¶Ð½Ð¾ Ð²Ñ‹Ð¿Ð¾Ð»Ð½ÑÑ‚ÑŒ Ð¸ Ð½Ð° ÑÐµÑ€Ð²ÐµÑ€Ðµ Ð¸ Ð½Ð° ÐºÐ»Ð¸ÐµÐ½Ñ‚Ðµ. ÐŸÐ¾Ð¿ÑƒÑ‚Ð½Ð¾ Ð²Ñ‹Ñ‡Ð¸ÑÐ»ÑÐµÑ‚ Ñ€Ð°ÑÑÑ‚Ð¾ÑÐ½Ð¸Ðµ Ð›ÐµÐ²ÐµÐ½ÑˆÑ‚ÐµÐ¹Ð½Ð°.\n\nÐ˜ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ð»Ð°ÑÑŒ ÑÐ¼ÑƒÐ»ÑÑ†Ð¸Ñ, Ð° Ð½Ðµ ÑÐ°Ð¼Ð¸ Ð±Ð¸Ñ‚Ð¾Ð²Ñ‹Ðµ Ð¾Ð¿ÐµÑ€Ð°Ñ†Ð¸Ð¸, Ñ‚Ð°Ðº ÐºÐ°Ðº ÑÐ¼ÑƒÐ»ÑÑ†Ð¸Ñ Ð¼Ð¾Ð¶ÐµÑ‚ Ñ€Ð°Ð±Ð¾Ñ‚Ð°Ñ‚ÑŒ Ð½Ð° Ð³Ð¾Ñ€Ð°Ð·Ð´Ð¾ Ð±ÐžÐ»ÑŒÑˆÐ¸Ñ… Ñ‚ÐµÐºÑÑ‚Ð°Ñ… Ð¸ Ð³Ð¾Ñ€Ð°Ð·Ð´Ð¾ Ð±Ñ‹ÑÑ‚Ñ€ÐµÐµ.', 1554229247, 'ziama'),
(4, 'Ð¢ÐµÑÑ‚Ð¾Ð²Ð°Ñ ÑÑ‚Ð°Ñ‚ÑŒÑ', 'Ñ‚ÐµÑÑ‚Ð¾Ð²Ð¾Ðµ Ð¸Ð½Ñ‚Ñ€Ð¾', 'Ñ‚ÐµÑÑ‚Ð¾Ð²Ñ‹Ð¹ Ñ‚ÐµÐºÑÑ‚ ÑÑ‚Ð°Ñ‚ÑŒÐ¸', 1554958427, 'ziama');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(25) NOT NULL,
  `mess` text NOT NULL,
  `article_id` int(11) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `name`, `mess`, `article_id`) VALUES
(1, 'Ð—ÑÐ¼Ð° ÐœÑÑÐ½Ð¸ÐºÐ¾Ð²', 'Ð¢ÐµÑÑ‚Ð¾Ð²Ñ‹Ð¹ ÐºÐ¾Ð¼Ð¼ÐµÐ½Ñ‚Ð°Ñ€Ð¸Ð¹', 3),
(5, 'ziama', 'Ñ…Ð¾Ñ€Ð¾ÑˆÐ°Ñ ÑÑ‚Ð°Ñ‚ÑŒÑ', 3),
(4, 'kairat', 'ÐšÐ°Ð¹Ñ€Ð°Ñ‚ Ð”ÑƒÐ¹ÑÐ¸Ð½Ð±Ð°ÐµÐ² Ð¾ÑÑ‚Ð°Ð²Ð¸Ð» Ñ‚ÐµÑÑ‚Ð¾Ð²Ñ‹Ð¹ ÐºÐ¾Ð¼Ð¼ÐµÐ½Ñ‚Ð°Ñ€Ð¸Ð¹', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(40) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `name`, `surname`) VALUES
(1, 'kairat', '8e3303941bac3a929c790606148d31d6', 'kairat@gazprom-neft.ru', 'Kairat', 'Duisinbaev'),
(2, 'ziama', '8e3303941bac3a929c790606148d31d6', 'ziama@bk.ru', 'Ð—ÑÐ¼Ð°', 'ÐœÑÑÐ½Ð¸ÐºÐ¾Ð²');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
