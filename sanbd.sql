-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 27 2018 г., 16:13
-- Версия сервера: 5.5.48
-- Версия PHP: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sanbd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tov`
--

CREATE TABLE IF NOT EXISTS `tov` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL,
  `name` text NOT NULL,
  `code` int(7) NOT NULL,
  `description` text NOT NULL,
  `price` int(7) NOT NULL,
  `availability` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tov`
--

INSERT INTO `tov` (`id`, `category`, `name`, `code`, `description`, `price`, `availability`) VALUES
(1, 'poka null :)', 'USB', 11111, 'ewgwg wryvrg rwhwrcv', 1, '0'),
(2, 'poka null :)', 'tov2 ', 22222, 'kjahdsf lashfasl oiuhsadf ', 2, '1'),
(3, 'poka null :)', 'tov3', 33333, 'dvfm ;adjfvm ;fdv ', 3, '0'),
(4, 'poka null :)', 'tov 4', 44444, 'opsf ijjfkk iajjd ', 4, '0'),
(5, 'poka null :)', 'tov 5 ', 55555, 'oif afj piajjf k', 5, '0'),
(6, 'poka null :)', 'tov 6 ', 66666, 'oidjf ipijfij iaf ', 6, '0'),
(7, 'poka null :)', 'tov 7 ', 77777, 'oijfg; ;iojf j[oija j', 7, '0'),
(8, 'poka null :)', 'tov 8 ', 88888, 'lidfh ivia fiijd i', 8, '0'),
(9, 'poka null :)', 'tov 9 ', 99999, 'piojef ;kjdfpiojfi', 9, '0'),
(10, 'poka null :)', 'tov 10', 10101, 'opidfj jfvoj f', 10, '0'),
(11, 'poka null :)', 'tov 11', 11011, 'adsjf pijapsdfj ijid', 11, '0'),
(12, 'poka null :)', 'tov 12', 12121, 'ioajdf pijpifj pijf ', 12, '0'),
(13, 'poka null :)', 'tov 13', 13131, 'podsgk o[pof ', 13, '0'),
(14, 'poka null :)', 'tov 14', 14141, 'ljnfd kjiojf ;kj jsdfij', 14, '0'),
(15, 'poka null :)', 'tov 15', 15151, 'oijf ;siajfpojasf j [j', 15, '0');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `is_admin` varchar(1) NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `is_admin`, `login`, `password`, `name`, `email`, `date`) VALUES
(1, '1', 'san', '333', 'san1', 'san@aaa.com', '0000-00-00'),
(2, '0', 'user', '111', 'user1', 'user@ukr.net', '0000-00-00'),
(3, '0', 'user2', '222', 'user22', 'user2@vvv.net', '0000-00-00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tov`
--
ALTER TABLE `tov`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tov`
--
ALTER TABLE `tov`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
